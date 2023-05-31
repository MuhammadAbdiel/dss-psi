<?php

namespace App\Http\Controllers;

use App\Models\Matrix;
use App\Models\Criteria;
use App\Models\Decision;
use App\Models\Alternative;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\StoreMatrixRequest;
use App\Http\Requests\UpdateMatrixRequest;

class MatrixController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = Matrix::with('alternative')->latest()->get();
        // dd($data->alternative->name);

        $alternativeAmount = Alternative::count();
        $criteriaAmount = Criteria::count();

        // create array 2 dimensional and push data from $data
        $matrix = [];
        foreach ($data as $value) {
            $matrix[$value->alternative_id][$value->criteria_id] = $value->value;
        }
        // dd($matrix);

        // $keys = array_keys($matrix);

        // // create query for get data alternative name from Matrix and dont print duplicate data
        // $query = Matrix::select('alternative_id')->distinct()->get();
        // $alternativeName = [];
        // foreach ($query as $value) {
        //     $alternativeName[$value->alternative_id] = $value->alternative->name;
        // }
        // // dd($alternativeName);

        // if ($request->ajax()) {
        //     return Datatables::of($data)
        //         // print $alternativeName from query dont print duplicate data
        //         ->addColumn('alternative', function (Matrix $matrix) use ($alternativeName) {
        //             return $alternativeName[$matrix->alternative_id];
        //         })
        //         ->addColumn('action', function ($row) {
        //             $actionBtn = '<a href="/matrices/ ' . $row->id . '/edit" class="btn btn-warning"><i
        //                             class="mdi mdi-pencil"></i>
        //                         Edit</a>
        //                         <a href="/matrices/' . $row->id . '" class="btn btn-danger" data-confirm-delete="true"><i
        //                             class="mdi mdi-delete"></i>
        //                         Delete</a>';
        //             return $actionBtn;
        //         })
        //         ->rawColumns(['action', 'alternative'])
        //         ->addIndexColumn()
        //         ->make(true);
        // }

        return view('contents.matrices.index', [
            'alternativeAmount' => $alternativeAmount,
            'criteriaAmount' => $criteriaAmount,
            'criterias' => Criteria::all(),
            'alternatives' => Alternative::all(),
            'matrix' => $matrix,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMatrixRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMatrixRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Matrix  $matrix
     * @return \Illuminate\Http\Response
     */
    public function show(Matrix $matrix)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Matrix  $matrix
     * @return \Illuminate\Http\Response
     */
    public function edit(Matrix $matrix)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMatrixRequest  $request
     * @param  \App\Models\Matrix  $matrix
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMatrixRequest $request, Matrix $matrix)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Matrix  $matrix
     * @return \Illuminate\Http\Response
     */
    public function destroy(Matrix $matrix)
    {
        //
    }

    public function truncate()
    {
        Matrix::truncate();
        Alert::success('Success', 'Matrix has been truncated!');
        return redirect('/matrices');
    }

    public function count()
    {
        $data = Matrix::latest()->get();

        // dd(empty($data));

        // create array 2 dimensional and push data from $data
        $matrix = [];
        foreach ($data as $value) {
            $matrix[$value->alternative_id][$value->criteria_id] = $value->value;
        }

        $jumlahAlternatif = count($matrix);
        $jumlahKriteria = count($matrix[1]);

        // create max and min each criteria
        $max = [];
        $min = [];
        for ($i = 1; $i <= $jumlahKriteria; $i++) {
            $max[$i] = max(array_column($matrix, $i));
            $min[$i] = min(array_column($matrix, $i));
        }

        // create normalisasi matrix by dividing each value with max if benefit and min if cost
        $normalisasi = [];
        for ($i = 1; $i <= $jumlahAlternatif; $i++) {
            for ($j = 1; $j <= $jumlahKriteria; $j++) {
                if (Criteria::find($j)->type == 'benefit') {
                    $normalisasi[$i][$j] = $matrix[$i][$j] / $max[$j];
                } else {
                    $normalisasi[$i][$j] = $min[$j] / $matrix[$i][$j];
                }
            }
        }

        // sum each column of normalisasi matrix
        $sumEachCriteria = [];
        for ($i = 1; $i <= $jumlahKriteria; $i++) {
            $sumEachCriteria[$i] = array_sum(array_column($normalisasi, $i));
        }

        // 1 / jumlah alternatif kemudian dikali dengan $sumEachCriteria
        $averageValue = array_map(function ($value) use ($jumlahAlternatif) {
            return (1 / $jumlahAlternatif) * $value;
        }, $sumEachCriteria);

        // (nilai normalisasi - $averageValue) ^ 2
        $pow = [];
        for ($i = 1; $i <= $jumlahAlternatif; $i++) {
            for ($j = 1; $j <= $jumlahKriteria; $j++) {
                $pow[$i][$j] = pow($normalisasi[$i][$j] - $averageValue[$j], 2);
            }
        }

        // sum each column of pow
        $sumPow = [];
        for ($i = 1; $i <= $jumlahKriteria; $i++) {
            $sumPow[$i] = array_sum(array_column($pow, $i));
        }

        // 1 - $sumPow
        $result = array_map(function ($value) {
            return 1 - $value;
        }, $sumPow);

        // sum result
        $sumResult = array_sum($result);

        // Menentukan bobot kriteria dengan cara membagi $result dengan $sumResult
        $criteriaWeight = array_map(function ($value) use ($sumResult) {
            return $value / $sumResult;
        }, $result);

        // Menentukan nilai PSI dengan cara mengalikan nilai normalisasi dengan bobot kriteria
        $psi = [];
        for ($i = 1; $i <= $jumlahAlternatif; $i++) {
            for ($j = 1; $j <= $jumlahKriteria; $j++) {
                $psi[$i][$j] = $normalisasi[$i][$j] * $criteriaWeight[$j];
            }
        }

        // sum each row of psi
        $sumPsi = [];
        for ($i = 1; $i <= $jumlahAlternatif; $i++) {
            $sumPsi[$i] = array_sum($psi[$i]);
        }

        // urutkan nilai $sumPsi dari yang terbesar ke terkecil
        arsort($sumPsi);

        dd($matrix, $max, $min, $normalisasi, $sumEachCriteria, $averageValue, $pow, $sumPow, $result, $sumResult, $criteriaWeight, $psi, $sumPsi);
    }
}

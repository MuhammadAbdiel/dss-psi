<?php

namespace App\Http\Controllers;

use Yajra\DataTables\Facades\DataTables;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Alternative;
use App\Http\Requests\StoreAlternativeRequest;
use App\Http\Requests\UpdateAlternativeRequest;
use Illuminate\Http\Request;

class AlternativeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = Alternative::latest()->get();
        if ($request->ajax()) {
            return Datatables::of($data)
                ->addColumn('action', function ($row) {
                    $actionBtn = '<a href="/alternatives/ ' . $row->id . '/edit" class="btn btn-warning"><i
                                    class="mdi mdi-pencil"></i>
                                Edit</a>
                                <a href="/alternatives/' . $row->id . '" class="btn btn-danger" data-confirm-delete="true"><i
                                    class="mdi mdi-delete"></i>
                                Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }

        $title = 'Delete Alternative!';
        $text = 'Are you sure you want to delete this alternative?';
        confirmDelete($title, $text);

        return view('contents.alternatives.index');
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
     * @param  \App\Http\Requests\StoreAlternativeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAlternativeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alternative  $alternative
     * @return \Illuminate\Http\Response
     */
    public function show(Alternative $alternative)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alternative  $alternative
     * @return \Illuminate\Http\Response
     */
    public function edit(Alternative $alternative)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAlternativeRequest  $request
     * @param  \App\Models\Alternative  $alternative
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAlternativeRequest $request, Alternative $alternative)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alternative  $alternative
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alternative $alternative)
    {
        Alternative::destroy($alternative->id);
        Alert::success('Success!', 'Alternative has been deleted.');

        return redirect('/alternatives');
    }
}

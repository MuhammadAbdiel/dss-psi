<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $matriksKeputusan = [
            [0.5, 1, 0.7, 0.7, 0.8],
            [0.8, 0.7, 1, 0.5, 1],
            [1, 0.3, 0.4, 0.7, 1],
            [0.2, 1, 0.5, 0.9, 0.7],
            [1, 0.7, 0.4, 0.7, 1]
        ];

        // $matriksKeputusan = [
        //     [0.5, 1, 0.7, 0.7, 0.8, 0.5, 1, 0.7, 0.7, 0.8],
        //     [0.8, 0.7, 1, 0.5, 1, 0.8, 0.7, 1, 0.5, 1],
        //     [1, 0.3, 0.4, 0.7, 1, 1, 0.3, 0.4, 0.7, 1],
        //     [0.2, 1, 0.5, 0.9, 0.7, 0.2, 1, 0.5, 0.9, 0.7],
        //     [1, 0.7, 0.4, 0.7, 1, 1, 0.7, 0.4, 0.7, 1],
        //     [0.5, 1, 0.7, 0.7, 0.8, 0.5, 1, 0.7, 0.7, 0.8],
        //     [0.8, 0.7, 1, 0.5, 1, 0.8, 0.7, 1, 0.5, 1],
        //     [1, 0.3, 0.4, 0.7, 1, 1, 0.3, 0.4, 0.7, 1],
        //     [0.2, 1, 0.5, 0.9, 0.7, 0.2, 1, 0.5, 0.9, 0.7],
        //     [1, 0.7, 0.4, 0.7, 1, 1, 0.7, 0.4, 0.7, 1],
        //     [0.5, 1, 0.7, 0.7, 0.8, 0.5, 1, 0.7, 0.7, 0.8],
        //     [0.8, 0.7, 1, 0.5, 1, 0.8, 0.7, 1, 0.5, 1],
        //     [1, 0.3, 0.4, 0.7, 1, 1, 0.3, 0.4, 0.7, 1],
        //     [0.2, 1, 0.5, 0.9, 0.7, 0.2, 1, 0.5, 0.9, 0.7],
        //     [1, 0.7, 0.4, 0.7, 1, 1, 0.7, 0.4, 0.7, 1],
        //     [0.5, 1, 0.7, 0.7, 0.8, 0.5, 1, 0.7, 0.7, 0.8],
        //     [0.8, 0.7, 1, 0.5, 1, 0.8, 0.7, 1, 0.5, 1],
        //     [1, 0.3, 0.4, 0.7, 1, 1, 0.3, 0.4, 0.7, 1],
        //     [0.2, 1, 0.5, 0.9, 0.7, 0.2, 1, 0.5, 0.9, 0.7],
        //     [0.5, 1, 0.7, 0.7, 0.8, 0.5, 1, 0.7, 0.7, 0.8],
        // ];

        $jumlahAlternatif = count($matriksKeputusan);
        $jumlahKriteria = count($matriksKeputusan[0]);

        // create array column with for

        $arrayColumn = [];
        for ($i = 0; $i < $jumlahKriteria; $i++) {
            $arrayColumn[$i] = array_column($matriksKeputusan, $i);
        }

        // create max and min each criteria
        $max = [];
        $min = [];
        for ($i = 0; $i < $jumlahKriteria; $i++) {
            $max[$i] = max($arrayColumn[$i]);
            $min[$i] = min($arrayColumn[$i]);
        }

        // create normalisasi matrix by dividing each value with max if benefit (index = 0,1,2) or min if cost (index = 3,4)
        $normalisasiMatrix = [];
        for ($i = 0; $i < $jumlahAlternatif; $i++) {
            for ($j = 0; $j < $jumlahKriteria; $j++) {
                if ($j == 0 || $j == 1 || $j == 2) {
                    $normalisasiMatrix[$i][$j] = $matriksKeputusan[$i][$j] / $max[$j];
                } else {
                    $normalisasiMatrix[$i][$j] = $min[$j] / $matriksKeputusan[$i][$j];
                }
            }
        }

        // sum each column of normalisasi matrix
        $sumEachCriteria = [];
        for ($i = 0; $i < $jumlahKriteria; $i++) {
            $sumEachCriteria[$i] = array_sum(array_column($normalisasiMatrix, $i));
        }

        // 1 / jumlah alternatif kemudian dikali dengan $sumEachCriteria
        $averageValue = array_map(function ($value) use ($jumlahAlternatif) {
            // return $value / $jumlahAlternatif;
            return (1 / $jumlahAlternatif) * $value;
        }, $sumEachCriteria);

        // (nilai normalisasi - $averageValue) ^ 2
        $pow = [];
        for ($i = 0; $i < $jumlahAlternatif; $i++) {
            for ($j = 0; $j < $jumlahKriteria; $j++) {
                $pow[$i][$j] = pow($normalisasiMatrix[$i][$j] - $averageValue[$j], 2);
            }
        }

        // sum each column of pow
        $sumPow = [];
        for ($i = 0; $i < $jumlahKriteria; $i++) {
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
        for ($i = 0; $i < $jumlahAlternatif; $i++) {
            for ($j = 0; $j < $jumlahKriteria; $j++) {
                $psi[$i][$j] = $normalisasiMatrix[$i][$j] * $criteriaWeight[$j];
            }
        }

        // sum each row of psi
        $sumPsi = [];
        for ($i = 0; $i < $jumlahAlternatif; $i++) {
            $sumPsi[$i] = array_sum($psi[$i]);
        }

        // urutkan nilai $sumPsi dari yang terbesar ke terkecil
        arsort($sumPsi);

        dd($sumPsi);

        // foreach ($matriksKeputusan as $key => $value) {
        //     $arrayColumn[$key] = array_column($matriksKeputusan, $key);
        // }
    }
}

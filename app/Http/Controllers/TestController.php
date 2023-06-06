<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $matriksKeputusan = [
            [3, 12, 32, 4000000, 8.8],
            [3, 10, 64, 3500000, 8],
            [2, 8, 64, 4000000, 8.8],
            [3, 12, 64, 6000000, 8.2],
            [4, 12, 128, 5000000, 8.2],
            [3, 8, 32, 3500000, 8.5],
            [4, 12, 128, 7000000, 7.7],
        ];

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

        // normalisasi
        $normalisasiMatrix = [];
        for ($i = 0; $i < $jumlahAlternatif; $i++) {
            for ($j = 0; $j < $jumlahKriteria; $j++) {
                $normalisasiMatrix[$i][$j] = $matriksKeputusan[$i][$j] / $max[$j];
            }
        }

        // Jumlah kolom matriks normalisasi
        $sumEachCriteria = [];
        for ($i = 0; $i < $jumlahKriteria; $i++) {
            $sumEachCriteria[$i] = array_sum(array_column($normalisasiMatrix, $i));
        }

        // nilai matriks normalisasi / $sumEachCriteria
        $averageValue = [];
        for ($i = 0; $i < $jumlahAlternatif; $i++) {
            for ($j = 0; $j < $jumlahKriteria; $j++) {
                $averageValue[$i][$j] = $normalisasiMatrix[$i][$j] / $sumEachCriteria[$j];
            }
        }

        // $averageValue * LN($averageValue)
        $ln = [];
        for ($i = 0; $i < $jumlahAlternatif; $i++) {
            for ($j = 0; $j < $jumlahKriteria; $j++) {
                $ln[$i][$j] = $averageValue[$i][$j] * log($averageValue[$i][$j]);
            }
        }

        // sum each column of ln
        $sumLn = [];
        for ($i = 0; $i < $jumlahKriteria; $i++) {
            $sumLn[$i] = array_sum(array_column($ln, $i));
        }

        // -1 / LN($jumlahAlternatif) * $sumLn
        $result = array_map(function ($value) use ($jumlahAlternatif) {
            return (-1 / log($jumlahAlternatif)) * $value;
        }, $sumLn);

        // 1 - $result
        $dispresi = array_map(function ($value) {
            return 1 - $value;
        }, $result);

        // sum $dispresi
        $sumDispresi = array_sum($dispresi);

        // $dispresi / $sumDispresi
        $resultDispresi = array_map(function ($value) use ($sumDispresi) {
            return $value / $sumDispresi;
        }, $dispresi);

        // matrix ^ 2
        $pow = [];
        for ($i = 0; $i < $jumlahAlternatif; $i++) {
            for ($j = 0; $j < $jumlahKriteria; $j++) {
                $pow[$i][$j] = pow($matriksKeputusan[$i][$j], 2);
            }
        }

        // sum each column of pow
        $sumPow = [];
        for ($i = 0; $i < $jumlahKriteria; $i++) {
            $sumPow[$i] = array_sum(array_column($pow, $i));
        }

        // sqrt sumPow
        $sqrt = array_map(function ($value) {
            return sqrt($value);
        }, $sumPow);

        // matrix / sqrt
        $resultMatrix = [];
        for ($i = 0; $i < $jumlahAlternatif; $i++) {
            for ($j = 0; $j < $jumlahKriteria; $j++) {
                $resultMatrix[$i][$j] = $matriksKeputusan[$i][$j] / $sqrt[$j];
            }
        }

        // $resultMatrix * $resultDispresi
        $resultMatrixDispresi = [];
        for ($i = 0; $i < $jumlahAlternatif; $i++) {
            for ($j = 0; $j < $jumlahKriteria; $j++) {
                if ($j == 0 || $j == 1 || $j == 2) {
                    $resultMatrixDispresi[$i][$j] = $resultMatrix[$i][$j] * $resultDispresi[$j];
                } else {
                    $resultMatrixDispresi[$i][$j] = -1 * $resultMatrix[$i][$j] * $resultDispresi[$j];
                }
            }
        }

        // sum each row of $resultMatrixDispresi
        $sumResultMatrixDispresi = [];
        for ($i = 0; $i < $jumlahAlternatif; $i++) {
            $sumResultMatrixDispresi[$i] = array_sum($resultMatrixDispresi[$i]);
        }

        // sort $sumResultMatrixDispresi with key
        arsort($sumResultMatrixDispresi);

        $rank = $sumResultMatrixDispresi;
        array_multisort($rank, SORT_DESC);

        dd($sumResultMatrixDispresi, $rank);





















        // // create normalisasi matrix by dividing each value with max if benefit (index = 0,1,2) or min if cost (index = 3,4)
        // $normalisasiMatrix = [];
        // for ($i = 0; $i < $jumlahAlternatif; $i++) {
        //     for ($j = 0; $j < $jumlahKriteria; $j++) {
        //         if ($j == 0 || $j == 1 || $j == 2) {
        //             $normalisasiMatrix[$i][$j] = $matriksKeputusan[$i][$j] / $max[$j];
        //         } else {
        //             $normalisasiMatrix[$i][$j] = $min[$j] / $matriksKeputusan[$i][$j];
        //         }
        //     }
        // }

        // // sum each column of normalisasi matrix
        // $sumEachCriteria = [];
        // for ($i = 0; $i < $jumlahKriteria; $i++) {
        //     $sumEachCriteria[$i] = array_sum(array_column($normalisasiMatrix, $i));
        // }

        // // 1 / jumlah alternatif kemudian dikali dengan $sumEachCriteria
        // $averageValue = array_map(function ($value) use ($jumlahAlternatif) {
        //     // return $value / $jumlahAlternatif;
        //     return (1 / $jumlahAlternatif) * $value;
        // }, $sumEachCriteria);

        // // (nilai normalisasi - $averageValue) ^ 2
        // $pow = [];
        // for ($i = 0; $i < $jumlahAlternatif; $i++) {
        //     for ($j = 0; $j < $jumlahKriteria; $j++) {
        //         $pow[$i][$j] = pow($normalisasiMatrix[$i][$j] - $averageValue[$j], 2);
        //     }
        // }

        // // sum each column of pow
        // $sumPow = [];
        // for ($i = 0; $i < $jumlahKriteria; $i++) {
        //     $sumPow[$i] = array_sum(array_column($pow, $i));
        // }

        // // 1 - $sumPow
        // $result = array_map(function ($value) {
        //     return 1 - $value;
        // }, $sumPow);

        // // sum result
        // $sumResult = array_sum($result);

        // // Menentukan bobot kriteria dengan cara membagi $result dengan $sumResult
        // $criteriaWeight = array_map(function ($value) use ($sumResult) {
        //     return $value / $sumResult;
        // }, $result);

        // // Menentukan nilai PSI dengan cara mengalikan nilai normalisasi dengan bobot kriteria
        // $psi = [];
        // for ($i = 0; $i < $jumlahAlternatif; $i++) {
        //     for ($j = 0; $j < $jumlahKriteria; $j++) {
        //         $psi[$i][$j] = $normalisasiMatrix[$i][$j] * $criteriaWeight[$j];
        //     }
        // }

        // // sum each row of psi
        // $sumPsi = [];
        // for ($i = 0; $i < $jumlahAlternatif; $i++) {
        //     $sumPsi[$i] = array_sum($psi[$i]);
        // }

        // // urutkan nilai $sumPsi dari yang terbesar ke terkecil
        // arsort($sumPsi);

        // // dd($sumPsi);

        // // foreach ($matriksKeputusan as $key => $value) {
        // //     $arrayColumn[$key] = array_column($matriksKeputusan, $key);
        // // }
    }
}

<?php

namespace Database\Seeders;

use App\Models\Matrix;
use Illuminate\Database\Seeder;

class MatrixSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $matrix = [
            [
                'alternative_id' => 1,
                'criteria_id' => 1,
                'value' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'alternative_id' => 1,
                'criteria_id' => 2,
                'value' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'alternative_id' => 1,
                'criteria_id' => 3,
                'value' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'alternative_id' => 1,
                'criteria_id' => 4,
                'value' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'alternative_id' => 1,
                'criteria_id' => 5,
                'value' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'alternative_id' => 2,
                'criteria_id' => 1,
                'value' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'alternative_id' => 2,
                'criteria_id' => 2,
                'value' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'alternative_id' => 2,
                'criteria_id' => 3,
                'value' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'alternative_id' => 2,
                'criteria_id' => 4,
                'value' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'alternative_id' => 2,
                'criteria_id' => 5,
                'value' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'alternative_id' => 3,
                'criteria_id' => 1,
                'value' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'alternative_id' => 3,
                'criteria_id' => 2,
                'value' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'alternative_id' => 3,
                'criteria_id' => 3,
                'value' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'alternative_id' => 3,
                'criteria_id' => 4,
                'value' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'alternative_id' => 3,
                'criteria_id' => 5,
                'value' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'alternative_id' => 4,
                'criteria_id' => 1,
                'value' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'alternative_id' => 4,
                'criteria_id' => 2,
                'value' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'alternative_id' => 4,
                'criteria_id' => 3,
                'value' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'alternative_id' => 4,
                'criteria_id' => 4,
                'value' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'alternative_id' => 4,
                'criteria_id' => 5,
                'value' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'alternative_id' => 5,
                'criteria_id' => 1,
                'value' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'alternative_id' => 5,
                'criteria_id' => 2,
                'value' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'alternative_id' => 5,
                'criteria_id' => 3,
                'value' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'alternative_id' => 5,
                'criteria_id' => 4,
                'value' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'alternative_id' => 5,
                'criteria_id' => 5,
                'value' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        Matrix::insert($matrix);
    }
}

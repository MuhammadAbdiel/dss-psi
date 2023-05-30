<?php

namespace Database\Seeders;

use App\Models\Criteria;
use Illuminate\Database\Seeder;

class CriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $criteria = [
            [
                'name' => 'C1',
                'type' => 'benefit',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'C2',
                'type' => 'benefit',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'C3',
                'type' => 'benefit',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'C4',
                'type' => 'cost',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'C5',
                'type' => 'cost',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        Criteria::insert($criteria);
    }
}

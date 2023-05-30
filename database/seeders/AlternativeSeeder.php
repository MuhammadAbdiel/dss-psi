<?php

namespace Database\Seeders;

use App\Models\Alternative;
use Illuminate\Database\Seeder;

class AlternativeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $alternative = [
            [
                'name' => 'Alternatif 1',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Alternatif 2',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Alternatif 3',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Alternatif 4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Alternatif 5',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        Alternative::insert($alternative);
    }
}

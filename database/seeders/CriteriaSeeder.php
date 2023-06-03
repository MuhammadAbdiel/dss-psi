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
                'code' => 'C1',
                'name' => 'Jurusan yang ditawarkan',
                'type' => 'benefit',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code' => 'C2',
                'name' => 'Prestasi yang sudah dicapai',
                'type' => 'benefit',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code' => 'C3',
                'name' => 'Ekstra Kurikuler yang ditawarkan',
                'type' => 'benefit',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code' => 'C4',
                'name' => 'Akreditasi yang sudah diperoleh',
                'type' => 'benefit',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code' => 'C5',
                'name' => 'Fasilitas yang disediakan',
                'type' => 'benefit',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code' => 'C6',
                'name' => 'Biaya Pendaftaran',
                'type' => 'cost',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        Criteria::insert($criteria);
    }
}

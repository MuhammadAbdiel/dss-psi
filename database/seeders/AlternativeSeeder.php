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
                'code' => 'A1',
                'name' => 'SMA Negeri 1',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code' => 'A2',
                'name' => 'SMA Negeri 2',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code' => 'A3',
                'name' => 'SMA Negeri 3',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code' => 'A4',
                'name' => 'SMA Negeri 4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code' => 'A5',
                'name' => 'SMA PGRI 1',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code' => 'A6',
                'name' => 'SMA PGRI 2',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code' => 'A7',
                'name' => 'SMA Bethel',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code' => 'A8',
                'name' => 'SMA Al Islami Nurul Maad',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code' => 'A9',
                'name' => 'SMA Islam Terpadu Qardhan Hasana',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code' => 'A10',
                'name' => 'SMALB',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code' => 'A11',
                'name' => 'SMK Negeri 1',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code' => 'A12',
                'name' => 'SMK Negeri 2',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code' => 'A13',
                'name' => 'SMK Negeri 3',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code' => 'A14',
                'name' => 'SMK Sabumi',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code' => 'A15',
                'name' => 'SMK Telkom Sandhy Putra',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code' => 'A16',
                'name' => 'SMK YPK',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code' => 'A17',
                'name' => 'SMK Bhakti Bangsa',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code' => 'A18',
                'name' => 'SMK Farmasi',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code' => 'A19',
                'name' => 'SMK Komputer Mandiri',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code' => 'A20',
                'name' => 'SMK Cahaya Insani',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code' => 'A21',
                'name' => 'SMK PP Negeri Banjarbaru',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code' => 'A22',
                'name' => 'SMTK Malinggang',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code' => 'A23',
                'name' => 'MA Al Falah Putra',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code' => 'A24',
                'name' => 'MA Al Falah Putri',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code' => 'A25',
                'name' => 'MA Nurul Hikmah',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code' => 'A26',
                'name' => 'MA Mif. Khairiyah',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code' => 'A27',
                'name' => 'MA Darul Ilmi',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code' => 'A28',
                'name' => 'MA Misbahul Munir',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code' => 'A29',
                'name' => 'MA Plus Zamzam Djailani',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code' => 'A30',
                'name' => 'MAN 1',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        Alternative::insert($alternative);
    }
}

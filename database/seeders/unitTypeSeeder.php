<?php

namespace Database\Seeders;

use App\Models\internTypeModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class unitTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        internTypeModel::create([
            'id' => 1,
            'pesertaKP' => 'Mahasiswa',
        ]);
    }
}

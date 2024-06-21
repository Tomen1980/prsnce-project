<?php

namespace Database\Seeders;

use App\Models\unitTypeModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class internTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        unitTypeModel::create([
            'id' => 1,
            'unitType' => 'arnet',
        ]);
    }
}

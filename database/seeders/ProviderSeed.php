<?php

namespace Database\Seeders;

use App\Models\Provider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProviderSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            $data = [
                [
                    'name' => 'Telkomsel',
                    'active' => 'y',
                ],
                [
                    'name' => 'Indosat',
                    'active' => 'y',
                ],
                [
                    'name' => 'XL',
                    'active' => 'y',
                ],
                [
                    'name' => 'Three',
                    'active' => 'y',
                ],
                [
                    'name' => 'Axis',
                    'active' => 'y',
                ],
                [
                    'name' => 'Smartfren',
                    'active' => 'y',
                ],
                [
                    'name' => 'Flexi',
                    'active' => 'y',
                ],
                [
                    'name' => 'Esia',
                    'active' => 'y',
                ],
                [
                    'name' => 'Mentari',
                    'active' => 'y',
                ],
                [
                    'name' => 'By.U',
                    'active' => 'y',
                ],
                [
                    'name' => 'IndiHome',
                    'active' => 'y',
                ],
    ];
    foreach ($data as $item) {
        Provider::create($item);
    }
    }
}
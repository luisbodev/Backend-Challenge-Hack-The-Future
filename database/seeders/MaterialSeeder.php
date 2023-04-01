<?php

namespace Database\Seeders;

use App\Models\Material;
use Illuminate\Database\Seeder;

class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Material::create([
            'name' => 'Combustible',
            'measurement_type' => 'Galones',
            'petroleum_derivative' => true
        ]);
        
        Material::create([
            'name' => 'Gases refrigerantes',
            'measurement_type' => 'Galones',
            'petroleum_derivative' => true
        ]);
        
        Material::create([
            'name' => 'Energía electríca',
            'measurement_type' => 'Kw',
        ]);
        
        Material::create([
            'name' => 'Aceite',
            'measurement_type' => 'Galones',
            'petroleum_derivative' => true
        ]);
        
        Material::create([
            'name' => 'Papel Bond',
            'measurement_type' => 'Cantidad',
        ]);
    }
}

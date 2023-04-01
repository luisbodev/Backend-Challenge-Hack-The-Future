<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type::create([
            'name' => 'Consumo/Uso',
        ]);
        
        Type::create([
            'name' => 'Pérdida',
        ]);
        
        Type::create([
            'name' => 'Viaje',
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Administrativo',
        ]);
        
        Category::create([
            'name' => 'Indirecto de Provedor',
        ]);
        
        Category::create([
            'name' => 'Logístico',
        ]);
        
        Category::create([
            'name' => 'Distribución',
        ]);
        
        Category::create([
            'name' => 'Operación',
        ]);
    }
}

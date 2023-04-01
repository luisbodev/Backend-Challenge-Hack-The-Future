<?php

namespace Database\Seeders;

use App\Models\Segment;
use Illuminate\Database\Seeder;

class SegmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Segment::create([
            'name' => 'Emisiones directas',
            'description' => 'Asociadas a las actividades de la organización y que están controladas por dicha organización.'
        ]);
        
        Segment::create([
            'name' => 'Emisiones indirectas',
            'description' => 'Asociadas al consumo energético adquirido y consumido por la organización.'
        ]);

        Segment::create([
            'name' => 'Otras emisiones indirectas',
            'description' => 'Asociadas a otras actividades no controladas por la organización'
        ]);
    }
}

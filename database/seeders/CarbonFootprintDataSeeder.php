<?php

namespace Database\Seeders;

use App\Models\CarbonFootprintData;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CarbonFootprintDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 3; $i++) {

            // 1.Uso mensual de combustible para los vehículos administrativos: 750 galones
            CarbonFootprintData::create([
                'date' => Carbon::parse('2022-' . $i . '-01'),
                'quantity' => 750,
                'frequency' => 1,
                'material_id' => 1,
                'type_id' => 1,
                'location_id' => 1,
                'segment_id' => 1,
            ]);

            // 2.Pérdidas de gases refrigerantes mensuales: 3 galones
            CarbonFootprintData::create([
                'date' => Carbon::parse('2022-' . $i . '-01'),
                'quantity' => 3,
                'frequency' => 1,
                'material_id' => 2,
                'type_id' => 2,
                'location_id' => null,
                'segment_id' => 1,
            ]);

            // 3.Consumo de energía eléctrica en oficinas administrativas: 300 Kw
            CarbonFootprintData::create([
                'date' => Carbon::parse('2022-' . $i . '-01'),
                'quantity' => 300,
                'frequency' => 1,
                'material_id' => 3,
                'type_id' => 1,
                'location_id' => 1,
                'segment_id' => 2,
            ]);

            // 4.Uso mensual de combustible para vehículos de distribución: 1250 galones
            CarbonFootprintData::create([
                'date' => Carbon::parse('2022-' . $i . '-01'),
                'quantity' => 1250,
                'frequency' => 1,
                'material_id' => 1,
                'type_id' => 1,
                'location_id' => null,
                'segment_id' => 1,
            ]);

            // 5.Uso mensual de combustible para transporte tercero de materia prima: 500 galones
            CarbonFootprintData::create([
                'date' => Carbon::parse('2022-' . $i . '-01'),
                'quantity' => 500,
                'frequency' => 1,
                'material_id' => 1,
                'type_id' => 1,
                'location_id' => null,
                'segment_id' => 3,
            ]);
            
            // 6.Viajes del CEO y COO de la empresa: 3 viajes mensuales
            CarbonFootprintData::create([
                'date' => Carbon::parse('2022-' . $i . '-01'),
                'quantity' => 3,
                'frequency' => 1,
                'material_id' => null,
                'type_id' => 3,
                'location_id' => null,
                'segment_id' => 3,
            ]);
            
            // 7.Uso mensual de aceite para mantenimiento de máquinas operadoras: 900 galones
            CarbonFootprintData::create([
                'date' => Carbon::parse('2022-' . $i . '-01'),
                'quantity' => 900,
                'frequency' => 1,
                'material_id' => 4,
                'type_id' => 1,
                'location_id' => null,
                'segment_id' => 1,
            ]);
            
            // 8.Consumo de energía eléctrica en planta de envasado: 900 Kw
            CarbonFootprintData::create([
                'date' => Carbon::parse('2022-' . $i . '-01'),
                'quantity' => 900,
                'frequency' => 1,
                'material_id' => 3,
                'type_id' => 1,
                'location_id' => 2,
                'segment_id' => 2,
            ]);
            
            // 9.Consumo diario de aceite para mantenimiento de flota de distribución: 1 galón
            CarbonFootprintData::create([
                'date' => Carbon::parse('2022-' . $i . '-01'),
                'quantity' => 1,
                'frequency' => 2,
                'material_id' => 4,
                'type_id' => 1,
                'location_id' => null,
                'segment_id' => 1,
            ]);
            
            // 10.Uso promedio diario de papel bond para impresión de documentos: 300 hojas
            CarbonFootprintData::create([
                'date' => Carbon::parse('2022-' . $i . '-01'),
                'quantity' => 300,
                'frequency' => 2,
                'material_id' => 5,
                'type_id' => 1,
                'location_id' => null,
                'segment_id' => 1,
            ]);
           
            // 11.Viajes del equipo de ventas de la empresa: 2 viajes mensuales
            CarbonFootprintData::create([
                'date' => Carbon::parse('2022-' . $i . '-01'),
                'quantity' => 2,
                'frequency' => 1,
                'material_id' => null,
                'type_id' => 3,
                'location_id' => 2,
                'segment_id' => 3,
            ]);
        }
    }
}

<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\CarbonFootprintData;

class EnergyConsumptionController extends Controller
{
    public function store(Request $request)
    {

        $request->validate([
            'quantity' => 'required|integer',
            'month' => 'required|between:1,12',
            // Validate that category is equal to 1 (Administrativo), 3 (Logístico), 4 (Distribución)
            'category_id' => 'required|in:1,3,4',
            // Validate the segment is equal to 1 (Emisiones directas), 2 (Emisiones indirectas), 3 (Otras emisiones indirectas)
            'segment_id' => 'required|in:1,2,3',
        ]);


        $newCarbonFootprintData = new CarbonFootprintData();

        $newCarbonFootprintData->quantity = $request->quantity;
        $newCarbonFootprintData->date =  Carbon::parse('2022-' . $request->month . '-01');
        $newCarbonFootprintData->category_id = $request->category_id;
        $newCarbonFootprintData->segment_id = $request->segment_id;

        // Monthly frequency
        $newCarbonFootprintData->frequency = 1;
        
        // Material will be equal to 3 (Energía electríca)
        $newCarbonFootprintData->material_id = 3;
        
        // Type will be equal to 1 (Consumo / Uso)
        $newCarbonFootprintData->type_id = 1;

        $newCarbonFootprintData->save();

        return response()->json(['message' => 'Consumo de energía eléctrica guardado exitosamente'], 200);
    }
}

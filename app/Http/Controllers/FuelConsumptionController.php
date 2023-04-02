<?php

namespace App\Http\Controllers;

use App\Models\CarbonFootprintData;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FuelConsumptionController extends Controller
{
    public function store(Request $request)
    {

        $request->validate([
            'quantity' => 'required|integer',
            'month' => 'required|between:1,12',
            // Validate that category is equal to 1 (Administrativo), 2 (Indirecto de Proveedores) or 3 (Logístico)
            'category_id' => 'required|in:1,2,3',
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
        
        // Material will be equal to 1 (Combustible)
        $newCarbonFootprintData->material_id = 1;
        
        // Type will be equal to 1 (Consumo / Uso)
        $newCarbonFootprintData->type_id = 1;

        $newCarbonFootprintData->save();

        return response()->json(['message' => 'Consumo de combustible guardado exitosamente'], 200);
    }

    public function update(Request $request)
    {

        $request->validate([
            'quantity' => 'required|integer',
            'id' => 'required|integer',
        ]);

        try {
            $newCarbonFootprintData = CarbonFootprintData::where('material_id', 1)->findOrFail($request->id);
    
            $newCarbonFootprintData->quantity = $request->quantity;
    
            $newCarbonFootprintData->save();
    
            return response()->json(['message' => 'Consumo de combustible actualizado exitosamente'], 200);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Error en la solicitud'], 404);
        }

    }
}

<?php

namespace App\Http\Controllers;

use stdClass;
use Carbon\Carbon;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\CarbonFootprintData;

class DashboardController extends Controller
{
    public function calculateAnnualFuelAssumptionByCategory(Request $request)
    {
        $categories = Category::
            whereHas('carbonFootprintDatas', function ($query) {
                $query->whereYear('date', '2022')
                    ->where('material_id', 1);
            })
            ->withSum(['carbonFootprintDatas' => function ($query) {
                $query->whereYear('date', '2022')
                    ->where('material_id', 1);
            }], 'quantity')
            ->get();

        $total = $categories->sum('carbon_footprint_datas_sum_quantity');

        foreach ($categories as $key => $category) {
            $percent = ($category->carbon_footprint_datas_sum_quantity / $total) * 100;
            $category->percent = strval(round($percent, 2)) . ' %';
            unset($category->created_at);
            unset($category->updated_at);
            unset($category->carbon_footprint_datas_sum_quantity);
        }

        return response()->json(['data' => $categories], 200);
    }

    public function calculateMonthlyFuelAssumption(Request $request)
    {
        $quantity = CarbonFootprintData::where('material_id', 1)->sum('quantity');

        $total = $quantity/12;

        return response()->json([
            'data' => 'Promedio mensual de consumo de combustible es de ' . $total . ' galones.'
        ], 200);
    }
}

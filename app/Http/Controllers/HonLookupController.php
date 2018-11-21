<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HonLookupController extends Controller
{
    public function index()
    {
        return view('tests.lookup');
    }

    public function getData()
    {
        $request = $_GET;
        $page = $request['page'] * ( $request['page'] - 1 );
        $model = [];
        dd($request['column']);
        if($request['column'] == 'plan_speed')
        {
            dd('here');
            $results = DB::table('Lookup__Plan')
                       ->join('Lookup__Plan_Meta', 'Lookup__Plan.plan_id', '=', 'Lookup__Plan_Meta.plan_id')
                       ->where('Lookup__Plan_Meta.plan_meta_option', $request['column'])
                       ->orderBy('Lookup__Plan_Meta.'$request['column'], $request['direction'])
                       ->paginate($request['per_page']);
        }else{
            $results = DB::table('Lookup__Plan')
                       ->orderBy($request['column'], $request['direction'])
                       ->paginate($request['per_page']);
        }
        // foreach($results as $result)
        // {
        //     $result->options = DB::table('Lookup__Plan_Meta')
        //         ->select('plan_meta_option', 'plan_meta_value')
        //         ->where('plan_id', '=', $result->plan_id)
        //         ->get();
        // }

        $results->data = $model;

        return response()
            ->json([
                'model' => $results,
                'columns' => [
                    'plan_price' => 'Plan Price',
                    'plan_type' => 'Service Type',
                    'plan_zip' => 'Zip code',
                    'plan_speed' => 'Plan Speed'
                ]
            ]);
    }
}

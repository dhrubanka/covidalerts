<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Center_tracking;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\CenterTrackingController;

class OfflineCenterController extends Controller
{
    public function index(){

        $response =  Http::withHeaders([
            'User-Agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/537.36'
        ])->get(
            'https://www.cowin.gov.in/api/v2/admin/location/districts/04'
        );

        $districts = json_decode($response->getBody());
       // ddd($districts);
        $districts = $districts->districts;
         //ddd($districts);
        return view('center', ['districts' => $districts]);
    }

    public function getList(Request $request, $id){

        $response =  Http::withHeaders([
            'User-Agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/537.36'
        ])->get(
            'https://www.cowin.gov.in/api/v2/appointment/sessions/public/calendarByDistrict',
            [
                'district_id' => $id,
                'date' => date("d-m-Y"),
            ]
        );

        $available_centers = json_decode($response->getBody());
        //ddd($available_centers);
        $available_centers = $available_centers->centers;

        return response()
        ->json($available_centers);
    }
}

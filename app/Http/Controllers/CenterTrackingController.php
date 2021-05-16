<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Center_tracking;

class CenterTrackingController extends Controller
{



     public function store($stateid,$districtid,$centerid,$name,$date,$capacity)
    {
        $center = new Center_tracking;
        $center->stateid = $stateid;
        $center->districtid = $districtid;
        $center->centerid = $centerid;
        $center->name = $name;
        $center->date = $date;
        $center->capacity = $capacity;
        $center->save();

    }



    public function update( $id, $stateid,$districtid,$centerid,$name,$date,$capacity)
    {
        $center = Center_tracking::find($id);

        $center->stateid = $stateid;
        $center->districtid = $districtid;
        $center->centerid = $centerid;
        $center->name = $name;
        $center->date = $date;
        $center->capacity = $capacity;

        $center->save();
    }


}

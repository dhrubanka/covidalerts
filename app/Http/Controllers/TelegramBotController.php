<?php

namespace App\Http\Controllers;

use Telegram\Bot\Laravel\Facades\Telegram;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Center_tracking;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\CenterTrackingController;

use function PHPUnit\Framework\isEmpty;

class TelegramBotController extends CenterTrackingController
{
    public function updatedActivity()
    {
        $activity = Telegram::getUpdates();
        dd($activity);
    }

    public function storeMessage(Request $request)
    {
        $this->BuildResponse('049', env('TELEGRAM_CHANNEL_ID', ''));

        // $response =  Http::withHeaders([
        //     'User-Agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/537.36'
        // ])->get('https://www.cowin.gov.in/api/v2/appointment/sessions/public/findByDistrict',
        // [
        //     'district_id' => '049',
        //     'date' => date("d-m-Y", strtotime("+1 day")) ,
        // ]);
        //     $text = "A new contact us query\n"
        //         . "<b>Email Address: </b>\n"
        //         . "<b>Message: </b>\n";
        //    // ddd(env('TELEGRAM_BOT_TOKEN',''));


        //     return redirect()->back();
    }
    public function sendToSivsagar(Request $request)
    {
        $this->BuildResponse('044', env('TELEGRAM_CHANNEL_SIVASAGAR_ID', ''));
    }

    public function sendToDibrugarh(Request $request)
    {
        $this->BuildResponse('043', env('TELEGRAM_CHANNEL_DIBRUGARH_ID', ''));
    }

    public function sendToJorhat(Request $request)
    {
        $this->BuildResponse('054', env('TELEGRAM_CHANNEL_JORHAT_ID', ''));
    }

    public function sendToKamrupR(Request $request)
    {
        $this->BuildResponse('050', env('TELEGRAM_CHANNEL_KAMRUP_RURAL_ID', ''));
    }

    public function sendToDhemaji(Request $request)
    {
        $this->BuildResponse('062', env('TELEGRAM_CHANNEL_DHEMAJI_ID', ''));
    }

    public function sendToSonitpur(Request $request)
    {
        $this->BuildResponse('064', env('TELEGRAM_CHANNEL_SONITPUR_ID', ''));
    }
    public function sendToLakhimpur(Request $request)
    {
        $this->BuildResponse('063', env('TELEGRAM_CHANNEL_LAKHIMPUR_ID', ''));
        //$this->BuildResponse2('063', env('TELEGRAM_CHANNEL_LAKHIMPUR_ID2', ''));
    }
    public function sendToTinsukia(Request $request)
    {
        $this->BuildResponse('045', env('TELEGRAM_CHANNEL_TINSUKIA_ID', ''));
        // $this->BuildResponse('045', env('TELEGRAM_CHANNEL_TINSUKIA_ID2', ''));
    }
    public function sendToGolaghat(Request $request)
    {
        $this->BuildResponse('053', env('TELEGRAM_CHANNEL_GOLAGHAT_ID', ''));
        //$this->BuildResponse('053', env('TELEGRAM_CHANNEL_GOLAGHAT_ID2', ''));

        // Telegram::sendMessage([
        //     'chat_id' =>  env('TELEGRAM_CHANNEL_GOLAGHAT_ID', ''),
        //     'parse_mode' => 'HTML',
        //     'text' => "Test from developer"
        // ]);
    }
    public function sendToMajuli(Request $request)
    {
        $this->BuildResponse('767', env('TELEGRAM_CHANNEL_MAJULI_ID', ''));
        //  $this->BuildResponse('767', env('TELEGRAM_CHANNEL_MAJULI_ID2', ''));
    }
    public function sendToNagaon(Request $request)
    {
        $this->BuildResponse('056', env('TELEGRAM_CHANNEL_NAGAON_ID', ''));
    }
    public function sendToNalbari(Request $request)
    {
        $this->BuildResponse('052', env('TELEGRAM_CHANNEL_NALBARI_ID', ''));
    }
    public function sendToDarrang(Request $request)
    {
        $this->BuildResponse('048', env('TELEGRAM_CHANNEL_DARRANG_ID', ''));
    }
    public function sendToUdalguri(Request $request)
    {
        $this->BuildResponse('065', env('TELEGRAM_CHANNEL_UDALGURI_ID', ''));
    }
    public function sendToCachar(Request $request)
    {
        $this->BuildResponse('066', env('TELEGRAM_CHANNEL_CACHAR_ID', ''));
    }
    public function sendToChirang(Request $request)
    {
        $this->BuildResponse('058', env('TELEGRAM_CHANNEL_CHIRANG_ID', ''));
    }
    public function sendToBiswanath(Request $request)
    {
        $this->BuildResponse('765', env('TELEGRAM_CHANNEL_BISWANATH_ID', ''));
    }
    public function sendToBaksa(Request $request)
    {
        $this->BuildResponse('046', env('TELEGRAM_CHANNEL_BAKSA_ID', ''));
    }
    public function sendToWestKarbi(Request $request)
    {
        $this->BuildResponse('049', env('TELEGRAM_CHANNEL_WESTKARBI_ID', ''));


        // $response =  Http::withHeaders([
        //     'User-Agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/537.36'
        // ])->get(
        //     'https://www.cowin.gov.in/api/v2/appointment/sessions/public/calendarByDistrict',
        //     [
        //         'district_id' => '769',
        //         'date' => date("d-m-Y"),
        //     ]
        // );

        // $available_centers = json_decode($response->getBody());
        // //ddd($available_centers);
        // $available_centers = $available_centers->centers;

        // $covishieldFees = 0; // covishield fees
        // $covaxinFees = 0; // covaxin Fees

        // //ddd($available_ceanters);
        // $activecenters = array();
        // $activecenters18 = ["Notification Test: guwahati 18\n"];
        // $increments = 0;
        // foreach ($available_centers as $center) {

        //     $headertext= " Center : ".$center->name ."\nAddress : ".$center->address.
        //     "\nPIN : ".$center->pincode."\nFee : ".$center->fee_type."\n\n";

        //     array_push($activecenters, $headertext);

        //     // var_dump($center->center_id);
        //     // ddd($center);
        //     $infodates = $center->sessions;

        //     if(strcmp($center->fee_type, 'Paid') == 0){
        //        $vaccineFees = $center->vaccine_fees;
        //        foreach($vaccineFees as $vf){
        //            if(strcmp($vf->vaccine, 'COVISHIELD') == 0)
        //                 $covishieldFees = $vf->fee;
        //            if(strcmp($vf->vaccine, 'COVAXIN') == 0){
        //                 $covaxinFees = $vf->fee;
        //               //  ddd($covaxinFees);
        //             }

        //        }
        //         //ddd($vaccineFees);
        //     }
        //     //ddd($infodates);
        //     foreach ($infodates as $somedate) {

        //         $centerdata =  DB::table('center_trackings')
        //             ->where('centerid', '=', $center->center_id)
        //             ->where('date', '=', date("Y-m-d", strtotime($somedate->date)))
        //             ->get();

        //         //storing if first entry for the date
        //         if ($centerdata->isEmpty()) {
        //             // echo "from null";
        //             //ddd($centerdata);
        //             $this->store(4, 769, $center->center_id, $center->name, date("Y-m-d", strtotime($somedate->date)), $somedate->available_capacity);



        //             if ($somedate->available_capacity > 0) {
        //                 // if ($somedate->min_age_limit > 44) {

        //                     $text = $this->contentbuilder(
        //                         ++$increments,
        //                         $somedate->min_age_limit,
        //                         $somedate->date,
        //                         $somedate->vaccine,
        //                         $somedate->available_capacity,
        //                         $somedate->available_capacity_dose1,
        //                         $somedate->available_capacity_dose2,
        //                         strcmp($somedate->vaccine, 'COVISHIELD') == 0 ? $covishieldFees : $covaxinFees
        //                     );

        //                     array_push($activecenters, $text);
        //                 // } else {
        //                 //     $text = $this->contentbuilder(
        //                 //         ++$increments,
        //                 //         $somedate->min_age_limit,
        //                 //         $somedate->date,
        //                 //         $somedate->vaccine,
        //                 //         $somedate->available_capacity,
        //                 //         $somedate->available_capacity_dose1,
        //                 //         $somedate->available_capacity_dose2
        //                 //     );

        //                 //     array_push($activecenters18, $text);
        //                 // }
        //                 //ddd($center->center_id);
        //             }
        //         }
        //         //ddd($centerdata);
        //         if ($centerdata->isNotEmpty() && ($somedate->available_capacity > $centerdata[0]->capacity)) {



        //             // if ($somedate->min_age_limit > 44) {

        //                 $text = $this->contentbuilder(
        //                     ++$increments,
        //                     $somedate->min_age_limit,
        //                     $somedate->date,
        //                     $somedate->vaccine,
        //                     $somedate->available_capacity,
        //                     $somedate->available_capacity_dose1,
        //                     $somedate->available_capacity_dose2,
        //                     strcmp($somedate->vaccine, 'COVISHIELD') == 0 ? $covishieldFees : $covaxinFees
        //                 );

        //                 array_push($activecenters, $text);
        //             // } else {
        //             //     $text = $this->contentbuilder(
        //             //         ++$increments,
        //             //         $somedate->min_age_limit,
        //             //         $somedate->date,
        //             //         $somedate->vaccine,
        //             //         $somedate->available_capacity,
        //             //         $somedate->available_capacity_dose1,
        //             //         $somedate->available_capacity_dose2
        //             //     );

        //             //     array_push($activecenters18, $text);
        //             // }
        //             $affected =  DB::table('center_trackings')
        //             ->where('centerid', '=', $center->center_id)
        //             ->where('date', '=', date("Y-m-d", strtotime($somedate->date)))
        //             ->update(['capacity' => $somedate->available_capacity]);
        //         }


        //         // ddd($activecenters45);

        //     }
        //       //paste here
        //         if($increments>0){
        //         array_push(
        //             $activecenters,
        //             "\n\nUpdates From ~ CovidAlerts.online
        //          \n Book here : \n1. https://selfregistration.cowin.gov.in/ \n2. Aarogya setu App "
        //         );

        //         Telegram::sendMessage([
        //             'chat_id' => env('TELEGRAM_CHANNEL_WESTKARBI_ID', ''),
        //             'parse_mode' => 'HTML',
        //             'text' => implode("", $activecenters)
        //         ]);
        //         $increments = 0;

        //         }
        //         $activecenters = array();
        // }


        // // Telegram::sendMessage([
        // //     'chat_id' => env('TELEGRAM_CHANNEL_WESTKARBI_ID', ''),
        // //     'parse_mode' => 'HTML',
        // //     'text' => $text
        // // ]);

    }


    public function BuildResponse($districtid, $chatid)
    {


        $response =  Http::withHeaders([
            'User-Agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/537.36'
        ])->get(
            'https://www.cowin.gov.in/api/v2/appointment/sessions/public/calendarByDistrict',
            [
                'district_id' => $districtid,
                'date' => date("d-m-Y"),
            ]
        );

        $available_centers = json_decode($response->getBody());
        //ddd($available_centers);
        $available_centers = $available_centers->centers;

        //ddd($available_ceanters);
        $activecenters = array();

        $increments = 0;
         // covaxin Fees

        foreach ($available_centers as $center) {

            $headertext = "<b> Center </b>: " . $center->name . "\n<b>Address </b>: " . $center->address .
                "\n<b>PIN</b> : " . $center->pincode . "\n<b>Fee</b> : " . $center->fee_type . "\n\n";

            array_push($activecenters, $headertext);

            $fee = 0;
            $covishieldFees = 0; // covishield fees
             $covaxinFees = 0;
            $infodates = $center->sessions;
            //ddd($infodates);

            if (strcmp($center->fee_type, 'Paid') == 0) {
                $vaccineFees = $center->vaccine_fees;
                foreach ($vaccineFees as $vf) {
                    if (strcmp($vf->vaccine, 'COVISHIELD') == 0)
                        $covishieldFees = $vf->fee;
                    if (strcmp($vf->vaccine, 'COVAXIN') == 0) {
                        $covaxinFees = $vf->fee;
                        //  ddd($covaxinFees);
                    }
                }
                //ddd($vaccineFees);
            }

            foreach ($infodates as $somedate) {

                $centerdata =  DB::table('center_trackings')
                    ->where('centerid', '=', $center->center_id)
                    ->where('date', '=', date("Y-m-d", strtotime($somedate->date)))
                    ->get();

                //storing if first entry for the date
                if ($centerdata->isEmpty()) {
                    // echo "from null";
                    //ddd($centerdata);
                    $this->store(4, $districtid, $center->center_id, $center->name, date("Y-m-d", strtotime($somedate->date)), $somedate->available_capacity);



                    if ($somedate->available_capacity > 1) {
                        // if ($somedate->min_age_limit > 44) {

                        $text = $this->contentbuilder(
                            ++$increments,
                            $somedate->min_age_limit,
                            $somedate->date,
                            $somedate->vaccine,
                            $somedate->available_capacity,
                            $somedate->available_capacity_dose1,
                            $somedate->available_capacity_dose2,
                            strcmp($somedate->vaccine, 'COVISHIELD') == 0 ? $covishieldFees : $covaxinFees
                        );

                        array_push($activecenters, $text);

                        // Telegram::sendMessage([
                        //     'chat_id' =>  env('TELEGRAM_CHANNEL_DEBUG',''),
                        //     'parse_mode' => 'HTML',
                        //     'text' => "RESPONSE FROM ".$center->address.""
                        // ]);

                    }
                }
                //ddd($centerdata);
                if (($centerdata->isNotEmpty()) && (($somedate->available_capacity > 1) && ($somedate->available_capacity > $centerdata[0]->capacity))) {



                    // if ($somedate->min_age_limit > 44) {

                    $text = $this->contentbuilder(
                        ++$increments,
                        $somedate->min_age_limit,
                        $somedate->date,
                        $somedate->vaccine,
                        $somedate->available_capacity,
                        $somedate->available_capacity_dose1,
                        $somedate->available_capacity_dose2,
                        strcmp($somedate->vaccine, 'COVISHIELD') == 0 ? $covishieldFees : $covaxinFees
                    );

                    array_push($activecenters, $text);

                    $affected =  DB::table('center_trackings')
                        ->where('centerid', '=', $center->center_id)
                        ->where('date', '=', date("Y-m-d", strtotime($somedate->date)))
                        ->update(['capacity' => $somedate->available_capacity]);
                }


                // ddd($activecenters45);

            }
            //paste here
            if ($increments > 0) {
                array_push(
                    $activecenters,
                    "\n\nUpdates From ~ CovidAlerts.online
                 \n Book here : \n1. https://selfregistration.cowin.gov.in/ \n2. Aarogya setu App "
                );

                Telegram::sendMessage([
                    'chat_id' => $chatid,
                    'parse_mode' => 'HTML',
                    'text' => implode("", $activecenters)
                ]);
                $increments = 0;
            }
            $activecenters = array();
        }
    }


    public function contentbuilder($increments, $min_age_limit, $date, $vaccine, $available_capacity, $dose1, $dose2, $fee)
    {
        return "" . $increments . ". "
            . "<b>Age Group : </b>"
            . $min_age_limit
            . "+ \n<b>Date : </b> "
            . $date
            . "\n<b>Vaccine  : </b>"
            . $vaccine
            . "\n<b>Available Capacity  : </b>"
            . $available_capacity
            . "\n<b>Dose 1  : </b>"
            . $dose1
            . "\n<b>Dose 2  : </b>"
            . $dose2
            . "\n<b>Fee  : Rs </b>"
            . $fee
            . "\n\n ";
    }
}

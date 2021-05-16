<?php

namespace App\Http\Controllers;

use Telegram\Bot\Laravel\Facades\Telegram;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Center_tracking;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\CenterTrackingController;

class TelegramBotController extends CenterTrackingController
{
    public function updatedActivity()
    {
        $activity = Telegram::getUpdates();
        dd($activity);
    }

    public function storeMessage(Request $request)
    {
        $this->BuildResponse('049', env('TELEGRAM_CHANNEL_ID',''));

        // $response =  Http::withHeaders([
        //     'User-Agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/537.36'
        // ])->get('https://www.cowin.gov.in/api/v2/appointment/sessions/public/findByDistrict',
        // [
        //     'district_id' => '049',
        //     'date' => date("d-m-Y", strtotime("+1 day")) ,
        // ]);
        // $available_centers = json_decode($response->getBody());
        // $available_centers = $available_centers->sessions;
        // //ddd($available_centers);
        // foreach($available_centers as $center){
        //   //  ddd($center->center_id);
        //     $text = "Notification for ".$center->district_name."\n"
        //             . "<b>Age Group : </b>"
        //             .$center->min_age_limit
        //             . "+\n<b>Center name : </b>"
        //              .$center->name
        //              . "\n<b>Center Address : </b>"
        //              .$center->address
        //              . "\n<b>Date : </b>"
        //              .$center->date
        //              . "\n<b>Vaccine  : </b>"
        //              .$center->vaccine
        //              . "\n<b>Available Capacity  : </b>"
        //              .$center->available_capacity
        //              . "\n<b>Fee type  : </b>"
        //              .$center->fee_type
        //              ."\nfrom CovidAlerts Bot \n";

        //              if($center->available_capacity>20){
        //                     Telegram::sendMessage([
        //                                 'chat_id' => env('TELEGRAM_CHANNEL_ID',''),
        //                                 'parse_mode' => 'HTML',
        //                                 'text' => $text
        //                             ]);
        //                 }
        // }
        // $response = Http::get('https://cdn-api.co-vin.in/api/v2/appointment/sessions/public/findByDistrict?district_id=769&date=11-05-2021');

        // //district_id=048&date='. date("Y-m-d") ."'");
        // ddd($response->getStatusCode());

    //     $text = "A new contact us query\n"
    //         . "<b>Email Address: </b>\n"
    //         . "<b>Message: </b>\n";
    //    // ddd(env('TELEGRAM_BOT_TOKEN',''));


    //     return redirect()->back();
    }
    public function sendToSivsagar(Request $request)
    {
        $this->BuildResponse('044', env('TELEGRAM_CHANNEL_SIVASAGAR_ID',''));

    }

    public function sendToDibrugarh(Request $request)
    {
        $this->BuildResponse('043', env('TELEGRAM_CHANNEL_DIBRUGARH_ID',''));

    }

    public function sendToJorhat(Request $request)
    {
        $this->BuildResponse('054', env('TELEGRAM_CHANNEL_JORHAT_ID',''));

    }

    public function sendToKamrupR(Request $request)
    {
        $this->BuildResponse('050', env('TELEGRAM_CHANNEL_KAMRUP_RURAL_ID',''));

    }

    public function sendToDhemaji(Request $request)
    {
        $this->BuildResponse('062', env('TELEGRAM_CHANNEL_DHEMAJI_ID',''));

    }

    public function sendToSonitpur(Request $request)
    {
        $this->BuildResponse('064', env('TELEGRAM_CHANNEL_SONITPUR_ID',''));

    }
    public function sendToLakhimpur(Request $request)
    {
        $this->BuildResponse('063', env('TELEGRAM_CHANNEL_LAKHIMPUR_ID',''));

    }
    public function sendToTinsukia(Request $request)
    {
        $this->BuildResponse('045', env('TELEGRAM_CHANNEL_TINSUKIA_ID',''));

    }
    public function sendToGolaghat(Request $request)
    {
        $this->BuildResponse('053', env('TELEGRAM_CHANNEL_GOLAGHAT_ID',''));

    }
    public function sendToMajuli(Request $request)
    {
        $this->BuildResponse('767', env('TELEGRAM_CHANNEL_MAJULI_ID',''));

    }
    public function sendToWestKarbi(Request $request)
    {
        $this->BuildResponse('769', env('TELEGRAM_CHANNEL_WESTKARBI_ID',''));
    //     $response =  Http::withHeaders([
    //         'User-Agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/537.36'
    //     ])->get('https://www.cowin.gov.in/api/v2/appointment/sessions/public/findByDistrict',
    //     [
    //         'district_id' => '769',
    //         'date' => date("d-m-Y", strtotime("+1 day")),
    //     ]);
    //     $available_centers = json_decode($response->getBody());
    //     $available_centers = $available_centers->sessions;
    //   //  ddd($available_centers);
    //     foreach($available_centers as $center){
    //         var_dump($center->center_id);
    //         $centerdata=  DB::table('center_trackings')->where('centerid','=', $center->center_id)->get();
    //         //ddd($centerdata);
    //         if($centerdata==NULL){
    //             $originalDate = $center->date;
    //             $newDate = date("Y-m-d", strtotime($originalDate));

    //             $this->store(4,769,$center->center_id, $center->name, $newDate, $center->available_capacity);
    //         }

    //       //ddd($center->center_id);

    //         $text = $this->contentbuilder($center->district_name,$center->min_age_limit,$center->name,$center->address,
    //         $center->date,$center->vaccine,$center->available_capacity,$center->fee_type);

    //         if($center->min_age_limit>44){
    //          Telegram::sendMessage([
    //                     'chat_id' => env('TELEGRAM_CHANNEL_WESTKARBI_ID',''),
    //                     'parse_mode' => 'HTML',
    //                     'text' => $text
    //                 ]);
    //             }else{

    //                 Telegram::sendMessage([
    //                     'chat_id' => env('TELEGRAM_CHANNEL_WESTKARBI_ID',''),
    //                     'parse_mode' => 'HTML',
    //                     'text' => $text
    //                 ]);
    //             }
    //     }

    }
    public function BuildResponse($districtid, $chatid)
    {
        $response =  Http::withHeaders([
            'User-Agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/537.36'
        ])->get('https://www.cowin.gov.in/api/v2/appointment/sessions/public/findByDistrict',
        [
            'district_id' => $districtid,
            'date' => date("d-m-Y", strtotime("+1 day")) ,
        ]);
        $available_centers = json_decode($response->getBody());
        $available_centers = $available_centers->sessions;
        //ddd($available_centers);
        foreach($available_centers as $center){
          //  ddd($center->center_id);
        $text = $this->contentbuilder($center->district_name,$center->min_age_limit,$center->name,$center->address,
                    $center->date,$center->vaccine,$center->available_capacity,$center->fee_type);

       if($center->available_capacity>10){
             Telegram::sendMessage([
                        'chat_id' => $chatid,
                        'parse_mode' => 'HTML',
                        'text' => $text
                    ]);
             }
        }
    }
    public function contentbuilder($district_name,$min_age_limit,$name,$address,$date,$vaccine,$available_capacity,$fee_type){

        return "Notification for ".$district_name."\n"
        . "<b>Age Group : </b>"
        .$min_age_limit
        . "+\n<b>Center name : </b>"
         .$name
         . "\n<b>Center Address : </b>"
         .$address
         . "\n<b>Date : </b>"
         .$date
         . "\n<b>Vaccine  : </b>"
         .$vaccine
         . "\n<b>Available Capacity  : </b>"
         .$available_capacity
         . "\n<b>Fee type  : </b>"
         .$fee_type
         ."\n\nFrom : CovidAlerts.online Bot
         \n Book here : \n1. https://selfregistration.cowin.gov.in/ \n2. Aarogya Setu App (No captcha)";

    }
}

<?php

namespace App\Http\Controllers;

use Telegram\Bot\Laravel\Facades\Telegram;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Ixudra\Curl\Facades\Curl;
class TelegramBotController extends Controller
{
    public function updatedActivity()
    {
        $activity = Telegram::getUpdates();
        dd($activity);
    }

    public function storeMessage(Request $request)
    {
        $response =  Http::withHeaders([
            'User-Agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/537.36'
        ])->get('https://www.cowin.gov.in/api/v2/appointment/sessions/public/findByDistrict',
        [
            'district_id' => '049',
            'date' => date("d-m-Y", strtotime("+1 day")) ,
        ]);
        $available_centers = json_decode($response->getBody());
        $available_centers = $available_centers->sessions;
        //ddd($available_centers);
        foreach($available_centers as $center){
          //  ddd($center->center_id);
            $text = "Notification for ".$center->district_name."\n"
                    . "<b>Age Group : </b>"
                    .$center->min_age_limit
                    . "+\n<b>Center name : </b>"
                     .$center->name
                     . "\n<b>Center Address : </b>"
                     .$center->address
                     . "\n<b>Date : </b>"
                     .$center->date
                     . "\n<b>Vaccine  : </b>"
                     .$center->vaccine
                     . "\n<b>Available Capacity  : </b>"
                     .$center->available_capacity
                     . "\n<b>Fee type  : </b>"
                     .$center->fee_type
                     ."\nfrom http://WizardOne.Tech \n";

                     if($center->available_capacity>2){
                            Telegram::sendMessage([
                                        'chat_id' => env('TELEGRAM_CHANNEL_ID',''),
                                        'parse_mode' => 'HTML',
                                        'text' => $text
                                    ]);
                        }
        }
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
        $response =  Http::withHeaders([
            'User-Agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/537.36'
        ])->get('https://www.cowin.gov.in/api/v2/appointment/sessions/public/findByDistrict',
        [
            'district_id' => '044',
            'date' => date("d-m-Y", strtotime("+1 day")) ,
        ]);
        $available_centers = json_decode($response->getBody());
        $available_centers = $available_centers->sessions;
        //ddd($available_centers);
        foreach($available_centers as $center){
          //  ddd($center->center_id);
            $text = "Notification from WizardOne.Tech\n"
                    . "<b>Age Group : </b>"
                    .$center->min_age_limit
                    . "+\n<b>Center name : </b>"
                     .$center->name
                     . "\n<b>Center Address : </b>"
                     .$center->address
                     . "\n<b>Date : </b>"
                     .$center->date
                     . "\n<b>Vaccine  : </b>"
                     .$center->vaccine
                     . "\n<b>Available Capacity  : </b>"
                     .$center->available_capacity
                     . "\n<b>Fee type  : </b>"
                     .$center->fee_type;

             Telegram::sendMessage([
                        'chat_id' => env('TELEGRAM_CHANNEL_SIVASAGAR_ID',''),
                        'parse_mode' => 'HTML',
                        'text' => $text
                    ]);
        }

    }
    public function sendToDibrugarh(Request $request)
    {
        $response =  Http::withHeaders([
            'User-Agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/537.36'
        ])->get('https://www.cowin.gov.in/api/v2/appointment/sessions/public/findByDistrict',
        [
            'district_id' => '044',
            'date' => date("d-m-Y", strtotime("+1 day")) ,
        ]);
        $available_centers = json_decode($response->getBody());
        $available_centers = $available_centers->sessions;
        //ddd($available_centers);
        foreach($available_centers as $center){
          //  ddd($center->center_id);
            $text = "Notification from WizardOne.Tech\n"
                    . "<b>Age Group : </b>"
                    .$center->min_age_limit
                    . "+\n<b>Center name : </b>"
                     .$center->name
                     . "\n<b>Center Address : </b>"
                     .$center->address
                     . "\n<b>Date : </b>"
                     .$center->date
                     . "\n<b>Vaccine  : </b>"
                     .$center->vaccine
                     . "\n<b>Available Capacity  : </b>"
                     .$center->available_capacity
                     . "\n<b>Fee type  : </b>"
                     .$center->fee_type;

             Telegram::sendMessage([
                        'chat_id' => env('TELEGRAM_CHANNEL_DIBRUGARH_ID',''),
                        'parse_mode' => 'HTML',
                        'text' => $text
                    ]);
        }

    }
    public function sendToWestKarbi(Request $request)
    {
        $response =  Http::withHeaders([
            'User-Agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/537.36'
        ])->get('https://www.cowin.gov.in/api/v2/appointment/sessions/public/findByDistrict',
        [
            'district_id' => '769',
            'date' => date("d-m-Y", strtotime("+1 day")),
        ]);
        $available_centers = json_decode($response->getBody());
        $available_centers = $available_centers->sessions;
      //  ddd($available_centers);
        foreach($available_centers as $center){
          //  ddd($center->center_id);
            $text = "Notification for ".$center->district_name."\n"
                    . "<b>Age Group : </b>"
                    .$center->min_age_limit
                    . "+\n<b>Center name : </b>"
                     .$center->name
                     . "\n<b>Center Address : </b>"
                     .$center->address
                     . "\n<b>Date : </b>"
                     .$center->date
                     . "\n<b>Vaccine  : </b>"
                     .$center->vaccine
                     . "\n<b>Available Capacity  : </b>"
                     .$center->available_capacity
                     . "\n<b>Fee type  : </b>"
                     .$center->fee_type
                     ."\nfrom http://WizardOne.Tech \n";

            if($center->available_capacity>5){
             Telegram::sendMessage([
                        'chat_id' => env('TELEGRAM_CHANNEL_WESTKARBI_ID',''),
                        'parse_mode' => 'HTML',
                        'text' => $text
                    ]);
                }
        }

    }
}

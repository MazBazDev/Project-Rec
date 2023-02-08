<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index()
    {
        $this->getUluleProjectDatas();
        return view('welcome', [
            "ulule" => $this->getUluleProjectDatas()
        ]);    
    }

    private function getUluleProjectDatas() 
    {
        $api =  json_decode(Http::get('https://api.ulule.com/v1/projects/158301'));

        return (object) [
            "absolute_url" => $api->absolute_url,
            "amount_raised" => $api->amount_raised,
            "currency" => $api->currency_display,
            "goal" => $api->goal,
            "goal_raised" => $api->goal_raised,
            "percent" => $api->percent,
        ];
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class InfoController extends Controller
{

    public function __invoke(Request $request)
    {








        $data = [
            'route' => self::route(),
            'date' => date('Y-m-d H:i:s'),
            'env' =>self::env(),
            'about' => self::about(),
            'list' => self::list(),
        ];

        dd($data);
    }

    static function list()
    {
        Artisan::call('list'); // Replace 'list' with your desired command
        return Artisan::output();
    }
    static function about()
    {
        Artisan::call('about'); // Replace 'list' with your desired command
        return Artisan::output();
    }
    static function env()
    {
        Artisan::call('env'); // Replace 'list' with your desired command
       return Artisan::output();
    }
    static function route()
    {
        Artisan::call('route:list'); // Replace 'list' with your desired command
        return Artisan::output();
    }
}

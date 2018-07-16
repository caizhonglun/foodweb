<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class IndexController extends Controller
{
    public function index()
    {
       //$pdo =  DB::connection()->getPdo();
        //dd($pdo);
        $areas = DB::table('area_mains')
            ->get();
        $area_subs = DB::table('area_subs')
            ->get();
        $foods = DB::table('food_mains')
            ->get();
        $food_subs = DB::table('food_subs')
            ->get();
        $shop_photos = DB::table('shop_photos')
            ->get();
        $shop_mains = DB::table('shop_mains')
            ->paginate(20);

        return view('html.search',['areas'=>$areas,
                                        'area_subs'=>$area_subs,
                                        'foods'=>$foods,
                                        'food_subs'=>$food_subs,
                                        'shop_mains'=>$shop_mains,
                                        'shop_photos'=>$shop_photos
            ]);
    }

    public function search()
    {
        $input = Input::all();
        $array = $input['area'];
        foreach ($array as $v)
        {
            $arr[] = $v;
        }
        $tests = DB::table('shop_mains')
            ->wherein('sub_area', $arr)
            ->paginate(5);
        return view('html.search',['tests'=>$tests]);
    }


}

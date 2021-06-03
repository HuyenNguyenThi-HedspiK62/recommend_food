<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Controllers\DB;
//use DB;
use Illuminate\Support\Facades\DB;
use App\Mean;
use App\Food;
use App\Type;
use App\MeanFood;
class TodosController extends Controller
{
    //
    public function getTab1(){
        $mean = Mean::where('type_id', 1)->paginate(4);
        $spe = Mean::where('type_id', 2)->paginate(4);
        $chay = Mean::where('type_id', 3)->paginate(4);
        return view('todos.tab1', compact('mean','spe','chay'));
    }
    
    public function getTab2(){
        $mean = Mean::where('type_id', 1)->paginate(4);
        $spe = Mean::where('type_id', 2)->paginate(4);
        $chay = Mean::where('type_id', 3)->paginate(4);
        return view('todos.tab2',compact('mean','spe','chay'));
    } 
    //tu tab 1
    public function Tab2(){
        return view('tab2');
    }
    public function tab1getHomePage(){
        return view('welcome');
    }
    //tu tab2
    public function Tab1(){
        return view('tab1');
    }
    public function tab2getHomePage(){
        return view('welcome');  
    }
    public function getdata(){
        $type1 = Mean::where('type_id', 1)->paginate(3);
        $type2 = Mean::where('type_id', 2)->paginate(3);
        $type3 = Mean::where('type_id', 3)->paginate(3);
        return view('welcome', compact('type1','type2','type3'));
    }
    public function getsearch(Request $req){
        $foods = Food::where('name','like','%'.$req->key.'%')->get();
        dd($foods);
        return view('todos.search', compact('foods') );
    }
    public function getsearchfood(Request $req){
        $foods = Food::where('name','like','%'.$req->key.'%')->get();
        //dd($foods);
        return view('search_food', compact('foods') );
    }
    public function getFood($stt){
        $food_id = DB::table('means_foods')->where('mean_id',$stt)->pluck('food_id');
        // $food_id = DB::table('means_foods')->where('mean_id',$stt)->pluck('food_id');
        // $foods = Food::where('id', $food_id)->get();
        //dd($foods);
        for($i = 0; $i< count($food_id); $i++){
            $foods[] = Food::where('id',$food_id[$i])->first();
        }
        //dd($foods);
        return view('todos.food', compact('foods'));
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Mean;
use App\Food;
use App\Type;
use App\MeanFood;
use App\Nguyelieu;
use App\Nguyenlieu;

class TodosController extends Controller
{
    //Do du lieu ra tab1
    public function getTab1(){
        $mean = Mean::where('type_id', 1)->paginate(4);
        $spe = Mean::where('type_id', 2)->paginate(4);
        $chay = Mean::where('type_id', 3)->paginate(4);
        return view('todos.tab1', compact('mean','spe','chay'));
    }
    
    //Do du lieu ra tab2
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

    //Do du lieu ra trang chu
    public function getdata(){
        $type1 = Mean::where('type_id', 1)->paginate(3);
        $type2 = Mean::where('type_id', 2)->paginate(3);
        $type3 = Mean::where('type_id', 3)->paginate(3);
        return view('welcome', compact('type1','type2','type3'));
    }

    //show món ăn mà user post lên
    public function showpost(Request $request){
        $tenmon = $request->tenmon;
        $tennguyenlieu = $request->tennguyenlieu;
        $luong = $request->luong;
        $cachnau = $request->cachnau;
        if($request->hasFile('image')){
            $hinhanh = $request->file('image');
            $hinhanh_name = $hinhanh->getClientOriginalName('image');
            //echo $hinhanh_name;
            $hinhanh->move('asset/image', $hinhanh_name);
        }else{
            echo "Chua co file anh";
        }

        $nguyenlieu = new Nguyenlieu();
        $nguyenlieu->name = $tennguyenlieu;
        $nguyenlieu->luong = $luong;
        $nguyenlieu->save();
        $monan = new Food();
        $monan->name = $tenmon;
        $monan->description = $cachnau;
        $monan->image = $hinhanh_name; 
        $monan->save();
        return view('todos.post', compact('tenmon', 'tennguyenlieu', 'luong', 'cachnau', 'hinhanh_name'));
    }
    
    //Tim kiem hien thi bua an chua mon an
    public function getsearch(Request $req){
        $mean = Mean::whereHas('food', function ($query) use($req){
            $query->where([
                            ['name', 'like', '%'.$req->key.'%'],
                            ['type_id', 1]]);
        })->paginate(4);
        $spe = Mean::whereHas('food', function ($query) use($req){
            $query->where([
                            ['name', 'like', '%'.$req->key.'%'],
                            ['type_id', 2]]);
        })->paginate(4);
        $chay = Mean::whereHas('food', function ($query) use($req){
            $query->where([
                            ['name', 'like', '%'.$req->key.'%'],
                            ['type_id', 3]]);
        })->paginate(4);
        return view('todos.search', compact('mean', 'spe', 'chay'));
    }

    //Tim kiem hien thi mon an
    public function getsearchfood(Request $req){
        $foods = Food::where('name','like','%'.$req->key.'%')->get();
        return view('search_food', compact('foods') );
    }

    //Hien thi mon an va cach nau theo bua an
    public function getFood($stt){
        $food_id = DB::table('means_foods')->where('mean_id',$stt)->pluck('food_id');
        for($i = 0; $i< count($food_id); $i++){
            $foods[] = Food::where('id',$food_id[$i])->first();
        }
        return view('todos.food', compact('foods'));
    }
}
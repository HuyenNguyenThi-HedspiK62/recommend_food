<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\Builder;
use App\Mean;
use App\User;
use App\MeanFood;
use App\Food;
use App\Nguyenlieu;
use App\Comment;
class TodosController extends Controller
{
    //Do du lieu ra tab1
    public function getTab1()
    {
        $mean = Mean::where('type_id', 1)
                    ->inRandomOrder()
                    ->paginate(4, ['*'], 'meal');
        $spe = Mean::where('type_id', 2)
                    ->inRandomOrder()
                    ->paginate(4, ['*'], 'spe');
        $chay = Mean::where('type_id', 3)
                    ->inRandomOrder()
                    ->paginate(4, ['*'], 'chay');
        return view('todos.tab1', compact('mean', 'spe', 'chay'));
    }

    //Do du lieu ra tab2
    public function getTab2()
    {
        $mean = Mean::where('type_id', 1)
                    ->inRandomOrder()
                    ->paginate(4, ['*'], 'meal');
        $spe = Mean::where('type_id', 2)
                    ->inRandomOrder()
                    ->paginate(4, ['*'], 'spe');
        $chay = Mean::where('type_id', 3)
                    ->inRandomOrder()
                    ->paginate(4, ['*'], 'chay');
        return view('todos.tab2', compact('mean', 'spe', 'chay'));
    }

    //tu tab 1
    public function Tab2()
    {
        return view('tab2');
    }
    public function tab1getHomePage()
    {
        return view('welcome');
    }

    //tu tab2
    public function Tab1()
    {
        return view('tab1');
    }
    public function tab2getHomePage()
    {
        return view('welcome');
    }

    //Do du lieu ra trang chu
    public function getdata()
    {
        $type1 = Mean::where('type_id', 1)
                    //->inRandomOrder()
                    ->paginate(3, ['*'], 'meal');
        $type2 = Mean::where('type_id', 2)
                    //->inRandomOrder()
                    ->paginate(3, ['*'], 'spe');
        $type3 = Mean::where('type_id', 3)
                    //->inRandomOrder()
                    ->paginate(3, ['*'], 'chay');
        $nguyenlieu = Nguyenlieu::get();
        return view('welcome', compact('type1', 'type2', 'type3', 'nguyenlieu'));
    }

    //show món ăn mà user post lên
    public function showpost(Request $request)
    {
        //dd($request);
        $validate = Validator::make(
            $request->all(),
            [
                'tenmon' => 'required|string|max:225',
                'cachnau' => 'required|string',
                'image' => 'required'
            ],
            [
                'tenmon.required'    => 'Hãy nhập Tên món ăn',
                'tenmon.max'         => 'Tên món ăn quá dài',
                'cachnau.required'   => 'Hãy nhập Cách nấu món ăn',
                'image.required'     => 'Hãy post ảnh của món ăn'
            ]
        );
        if ($validate->fails()) {
            return redirect()->back()->withInput()->withErrors($validate);
        } else {
            $hinhanh = $request->file('image');
            $hinhanh_name = $hinhanh->getClientOriginalName('image');
            $hinhanh->move('asset/image', $hinhanh_name);
            $monan = new Food();
            $monan->name = $request->tenmon;;
            $monan->description = $request->cachnau;
            $monan->image = $hinhanh_name;
            $monan->save();
            $user = Auth::user();
            $monan->users()->attach($user->id);
            for($i=0; $i<sizeof($request->tennguyenlieu); $i++){
                $inder_id = Nguyenlieu::where('name', $request->tennguyenlieu[$i])->pluck('id');
                if(!empty($inder_id)){
                    $monan->nguyenlieu()->attach($inder_id);
                }else{
                $nguyenlieu_id = Nguyenlieu::firstorCreate(
                    ['name' => $request->tennguyenlieu[$i],
                    'luong' => $request->luong[$i]]
                    )->id;
                $monan->nguyenlieu()->attach($nguyenlieu_id);
                }
            }
            return view('todos.post', compact('monan'));
        }
    }

    //Tim kiem hien thi bua an chua mon an
    public function getsearch(Request $req)
    {
        $mean = Mean::whereHas('food', function ($query) use ($req) {
            $query->where([
                ['name', 'like', '%' . $req->key . '%'],
                ['type_id', 1]
            ]);
        })->paginate(4);
        $spe = Mean::whereHas('food', function ($query) use ($req) {
            $query->where([
                ['name', 'like', '%' . $req->key . '%'],
                ['type_id', 2]
            ]);
        })->paginate(4);
        $chay = Mean::whereHas('food', function ($query) use ($req) {
            $query->where([
                ['name', 'like', '%' . $req->key . '%'],
                ['type_id', 3]
            ]);
        })->paginate(4);
        $foods = DB::table('foods')->where('name', 'like', '%' . $req->key . '%')->paginate(4);
        return view('todos.search', compact('mean', 'spe', 'chay', 'foods'));
    }

    //Tim kiem hien thi mon an
    public function getsearchfood(Request $req)
    {
        $foods = Food::where('name', 'like', '%' . $req->key . '%')->get();
        return view('search_food', compact('foods'));
    }

    public function getsearchngl(Request $request)
    {
        $nguyenlieu = Nguyenlieu::get();
        $food_id = DB::table('nguyenlieu_foods') 
                        -> whereIn ('nguyenlieu_id', $request->tennguyenlieu) 
                        -> groupBy ('food_id') 
                        -> having (DB::raw('count(food_id)'), '>=', count($request->tennguyenlieu))
                        -> pluck('food_id');
        $foods = Food::whereIn('id', $food_id)->get();
        return view('home_search', compact('foods', 'nguyenlieu'));
    }

    //Hien thi mon an va cach nau theo bua an
    public function getFood($stt)
    {
        $food_id = DB::table('means_foods')->where('mean_id', $stt)->pluck('food_id');
        for ($i = 0; $i < count($food_id); $i++) {
            $foods[] = Food::where('id', $food_id[$i])
            ->withCount(['comments as like' => function (Builder $query) {
                $query->where('rate', 1);
            }, 'comments as dislike' => function (Builder $query) {
                $query->where('rate', 0);
            }])
            ->first();
        }
        return view('todos.food', compact('foods'));
    }

    public function foodDetail($foodId)
    {
        $food = Food::where('id', $foodId)->get();
        $nguyenlieu_id = DB::table('nguyenlieu_foods')->where('food_id', $foodId)->pluck('nguyenlieu_id');
        for ($k = 0; $k < count($nguyenlieu_id); $k++) {
            $nguyenlieu[] = Nguyenlieu::where('id', $nguyenlieu_id[$k])->first();
        }
        return view('todos.fooddetail', compact('food', 'nguyenlieu'));
    }

    public function getFoodfromNguyenlieu($foodId, $nguyenlieuId)
    {
        $foodId = DB::table('nguyenlieu_foods')->where('nguyenlieu_id', $nguyenlieuId)->pluck('food_id');
        for ($k = 0; $k < count($foodId); $k++) {
            $foods[] = Food::where('id', $foodId[$k])->first();
        }
        return view('todos.food', compact('foods'));
    }

    //Lưu comment
    public function addComment(Request $request, $stt)
    {
        $validate = Validator::make(
            $request->all(),
            [
                'comment' => 'required|string',
                'rate' => 'required',
            ],
            [
                'comment.required'    => 'Hãy nhập Commnet của bạn',
                'rate.required'   => 'Hãy chọn đánh giá của bạn',
            ]
        );
        if ($validate->fails()) {
            return redirect()->back()->withInput()->withErrors($validate);
        }
        $comment = new Comment;
        $comment->user_id = Auth::user()->id;
        $comment->food_id = $stt;
        $comment->description = $request->comment;
        $comment->rate = $request->input('rate');
        $comment->save();
        return redirect()->back();
    }

    public function showuserfood(){
        $users = User::all()->except(Auth::id());
        return view('todos.user_food', compact('users'));
    }

    public function showallpost($id){
        $user = User::where('id', $id)->first();
        return view('todos.allpost', compact('user'));
    }
}
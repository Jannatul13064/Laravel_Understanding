<?php

namespace App\Http\Controllers;

use App\Product;
// use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        return Product::find(1)->user;
    }

    // public function show(Request $request){
    //     $userid = $request->userid;
    //     $age = $request->age;
    //     $username = request ('username');
    //     $products = array('A', 'B', 'C', 'D', 'Egg');
    //     return view('home',compact('userid','age','username','products'));
    // }
    public function show(Request $request)
    {
        //send to db

        ///Product refers that its a model

        // Product::create([
        //     'name'=>'jug2',
        //     'quantity'=>'220',
        //     'price'=>'2180.00'
        // ]);

        // return 'Successfully Inserted';

        // $readOperation = Product::all();
        // $readOperation = Product::Select('name','quantity','price')->where('id', '=','3')->get();
        // dd($readOperation);

        Product::Where('id', '=', '7')->delete();

        return 'Successfully Updated';
    }


    //****************************CRUD***Products********************************

    public function insertOperation()
    {

        // DB::table('products')->insert([
        //     'name' => 'Brush',
        //     'price' => 50,
        //     'quantity' => 300,
        //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        // ]);
        DB::insert('Insert into products (name,price,quantity) values(?,?,?)', ['Brush1', 55, 100]);

        return 'Successfully Inserted';
    }

    public function readOperation()
    {
        // $productList =  DB::table('products')->select('name')->where('created_at', '=', null)->get();
        $productList =  DB::select('select name, price , quantity from products where id = 3');
        return $productList;
    }
    public function updateOperation()
    {
        DB::Update('Update products SET name= "Laptop", price = 50000 where id = 11');
        return 'update operation called';
    }
    public function deleteOperation()
    {
        DB::delete('Delete from products where id = 10');
        return 'delete operation called';
    }


    ///**************************CRUD-User****************************************** */


    public function createUser()
    {
        DB::insert('Insert into users (id,name,email,password,products_id) values(?,?,?,?,?)', [3, 'Sultan', 'sultan@gmail.com', '221221', '4']);

        return 'Successfully Inserted';
    }
}

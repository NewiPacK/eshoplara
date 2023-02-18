<?php

namespace App\Http\Controllers;


use App\Models\Brands;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Menu;
use App\Models\Product;
use App\Models\Shops;
use App\Models\Slider;
use App\Models\User;
use App\Models\Zakazi;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index(){


        $menu = Menu::all();
        $slider = Slider::all();
        $cat = Category::all();
        $prod = Product::all();
        $brands = Brands::all();
        $new = Product::where(['new'=>1])->get();
        $hit = Product::where(['hit'=>1])->get();
        $sale = Product::where(['hit'=>1])->get();


        return view("pages.index", compact('menu', 'cat', 'prod', 'slider', 'brands', 'new', 'hit', 'sale'));
    }

    public function prod_details(Request $request, $id){


        if($request->isMethod("post")){

            $text = $request->input('text');
            $author = $request->input('author');
            $email = $request->input('email');


            $add_comm = new Comment();
            $add_comm->text = $text;
            $add_comm->author = $author;
            $add_comm->email = $email;
            $add_comm->prod_id = $id;

            $add_comm->save();


            return redirect()->back();
        }

        $menu = Menu::all();
        $cat = Category::all();
        $prod_detail = Product::find($id);
        $brands = Brands::all();
        $comm = Comment::where(['prod_id'=>$id])->get();
        return view("pages.prod_details", compact('menu', 'cat', 'prod_detail', 'brands', 'comm'));
    }

    public function cab(){


        $shop = Shops::where(['user_id'=>Auth::user()->id])->get();
        $menu = Menu::all();
        return view("pages.cab", compact('menu', 'shop'));
    }

    public function cabedit(){

        $menu = Menu::all();
        return view("pages.cabedit", compact('menu'));
    }

    public function logout()
    {
        Auth::logout();


        return redirect()->route('login');
    }

    public function add_shop(Request $request){

        $id = Auth::user()->id;

        $shop = Shops::where(['user_id'=>$id])->get();



            if($request->isMethod("post")){

                $title = $request->input('title');
                $text = $request->input('text');



                $add_shop = new Shops();
                $add_shop->title = $title;
                $add_shop->text = $text;
                $add_shop->user_id = $id;

                $add_shop->save();


                return redirect()->route('cab');
        }


        $menu = Menu::all();
        return view("pages.add_shop", compact('menu','shop'));
    }




    public function addcart($id){


        $prod = Product::find($id);

        Cart::add(['id' => $prod->id, 'name' => "$prod->title", 'qty' => 1, 'price' => $prod->price, 'weight' => 550, 'options' => ['size' => 'large']]);


        return  redirect()->route('cart');


    }

    public function cart(Request $request){

        if($request->isMethod("POST")) {



            $name = Auth::user()->name;
            $phone = Auth::user()->phone;
            $email = Auth::user()->email;

            foreach (Cart::content() as $item) {

                $addzakaz = new Zakazi();
                $title = $item->name;
                $price = $item->price;
                $qty = $item->qty;
                $addzakaz->title = $title;
                $addzakaz->name = $name;
                $addzakaz->phone = $phone;
                $addzakaz->email = $email;
                $addzakaz->price = $price;
                $addzakaz->qty = $qty;

                $addzakaz->save();
            }
            Cart::destroy();
            return redirect()->back();
        }

        $menu = Menu::all();
        return view("pages.cart", compact('menu'));


    }

    public function cart_plus($rowId,$qty){


        $qty+=1;


        Cart::update($rowId, ['qty' => $qty]);

        return redirect()->back();

    }

    public function cart_minus($rowId,$qty){


        $qty-=1;

        Cart::update($rowId, ['qty' => $qty]);

        return redirect()->back();

    }

    public function cart_remove($rowId){




        Cart::remove($rowId);

        return redirect()->back();

    }

    public function cart_destroy(){




        Cart::destroy();

        return redirect()->route('index');

    }

    public function addzakaz(Request $request, $id){

        if($request->isMethod("POST")){

            $prod = Cart::content();

            $name = Auth::user()->name;
            $phone = Auth::user()->phone;
            $email = Auth::user()->email;

            foreach (Cart::content() as $id=>$qty){
                $addzakaz = new Zakazi();
                $title = $prod->title;
                $price = $prod->price;
                $addzakaz->title = $title;
                $addzakaz->name = $name;
                $addzakaz->phone = $phone;
                $addzakaz->email = $email;
                $addzakaz->price = $price;

                $addzakaz->save();
            }





        }


        return redirect()->route('cart');
    }


    //Корзина Ajax

    public function addcartajax(){

        $id = $_GET['id'];

        $prod = Product::find($id);



        Cart::add(['id' => $prod->id, 'name' => "$prod->title", 'qty' => 1, 'price' => $prod->price, 'weight' => 550, 'options' => ['size' => 'large']]);


        return view("pages.cartajax");

    }

    public function plus(){

        $qty = $_GET['qty'];
        $id = $_GET['id'];
        $qty+=1;


      Cart::update($id, $qty);

      return view("pages.cartajax");
    }

    public function minus(){

        $qty = $_GET['qty'];
        $id = $_GET['id'];
        $qty-=1;


        Cart::update($id, $qty);

        return view("pages.cartajax");
    }

    public function remove(){


        $id = $_GET['id'];



        Cart::remove($id);

        return view("pages.cartajax");
    }

    public function destroy(){






        Cart::destroy();

        return view("pages.cartajax");
    }


    public function search(Request $request)
    {

        $search = $request->get('search');


        $menu = Menu::all();
        $slider = Slider::all();
        $cat = Category::all();
        $brands = Brands::all();
        $search = DB::select("select * from product where title like '%$search%'");

        return view("pages.search", compact('menu', 'slider', 'cat', 'brands', 'search'));

    }


}

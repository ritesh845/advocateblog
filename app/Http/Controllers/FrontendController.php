<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Domain;
use Session;
use App\Models\User;
use App\Models\CatgMast;
use App\Models\City;
use App\Models\Posts;
use App\Models\QualMast;
use DB;
class FrontendController extends Controller
{
    public function __construct(){
        $this->middleware('verify.template');
    }

    public function index(){
      

        return view('welcome');
    }

    // public function about(){
    //     $posts = Posts::where(['catg_id' => session('catg_id'),'status' => '1','user_id'=>session('user_id')])->get();
    //     return view('pages.about',compact('posts'));

    // }

    // public function directory(){
    //       return view('pages.directory');
    // }

    public function get_cities($id)
    {
        $cities = City::where('state_code',$id)->orderBy('city_name')->get();
        return $cities;
    }
    public function get_qual($id){
        return QualMast::where('qual_catg_code',$id)->get();
    }

   
    public function post_show($catg_id,$url){
        
        $post = Posts::firstWhere(['sefriendly' => $url]);
        return view('pages.post_detail',compact('post'));
    }

    public function page_show($page_name){
        $posts = Posts::where(['catg_id' => session('catg_id'),'status' => '1','user_id'=>session('user_id')])->get();

        return view('pages.index',compact('posts','page_name'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Domain;
use Session;
use App\Models\User;
use App\Models\CatgMast;
use App\Models\City;
use App\Models\State;
use App\Models\Posts;
use App\Models\QualMast;
use App\Models\Contact;
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

    public function directory_show($state_name,$state_code,$city_code =null){
        if($city_code != null){
            $users = User::where('city_code',$city_code)->get();
            $page_name = 'search';
            return view('pages.index',compact('page_name','users'));

        }else{
            $cities=  City::where('state_code',$state_code)->orderBy('city_name')->get();
            $page_name = 'directory_show';
            return view('pages.index',compact('page_name','cities','state_name'));

        }
    }

    public function get_cities($id)
    {
        $cities = City::where('state_code',$id)->orderBy('city_name')->get();
        return $cities;
    }
    public function get_qual($id){
        return QualMast::where('qual_catg_code',$id)->get();
    } 
    public function get_role_catgs($id){
        if($id == '3'){
            $catg_type = 2;
        }else{
            $catg_type = 1;
        }
        return  CatgMast::select('catg_id','catg_name')->where(['is_post' => '1', 'catg_type' => $catg_type])->orderBy('catg_order')->get();
    }

   
    public function post_show($catg_id,$url){
        
        $post = Posts::firstWhere(['sefriendly' => $url]);
        return view('pages.post_detail',compact('post'));
    }

    public function page_show($page_name){
        $posts = Posts::where(['catg_id' => session('catg_id'),'status' => '1','user_id'=>session('user_id')])->get();

        return view('pages.index',compact('posts','page_name'));
    }
    public function contactStore(Request $request){
        
        $request->validate([
            'name'      => 'required',
            'email'     => 'required|email',
            'mobile'    => 'required|min:10|max:10',
            'subject'   => 'required|min:4|max:100',
            'message'   => 'required',
            'captcha'   => 'required|captcha',
        ],
        [
            'captcha.captcha'=>'Invalid captcha code.'
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'subject' => $request->subject,
            'message' => $request->message,
        ];
        Contact::create($data);
        return redirect()->back()->with(['success'=>'Thank You! For Contact Us. We Will Contact You Soon...']);
    }
    public function refreshCaptcha() {  
        return captcha_img('flat');
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use App\Models\User;
use App\Models\CatgMast;
use Session;
class VerfiyTemplate extends Middleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {

        $this->url = request()->getHttpHost();
        if(count(explode('/', request()->getRequestUri())) > 1){
            $catg_name =  explode('/', request()->getRequestUri())[1];
        }else{
            $catg_name = '';
        }


        $user = User::select('id','domain_url','status','template_id','site_name','site_logo')->firstWhere(['domain_url' => $this->url,'status' => 'A']);
        if(!empty($user)){
            if($this->url === '127.0.0.1:8000'){
                $catg_type = '1';
            }else{
                $catg_type = '2';
            }
            $catgs =  CatgMast::select('catg_id','catg_name','catg_url','is_post')->where('catg_type',$catg_type)->orderBy('catg_order','asc')->get();
            Session::put('catgs',$catgs);
            $catg  = collect($catgs)->where('catg_name',ucfirst($catg_name))->first();
            if(!empty($catg)){
                $catg_id = $catg->catg_id;
            }else{
                $catg_id = '';
            }

            $template_name = $user->template->template_name;
            $site_name = $user->site_name;
            $site_logo = $user->site_logo;
            Session::put('template_name',$template_name);
            Session::put('site_name',$site_name);
            Session::put('site_logo',$site_logo);
            Session::put('user_id',$user->id);
            Session::put('catg_id',$catg_id);
        }else{
            abort(404);
        }
        return $next($request);
    }
    
}

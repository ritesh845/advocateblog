<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use App\Models\State;
use App\Models\Specialization;
use App\Models\UserSpecialization;
use App\Models\UserQualification;
use App\Models\QualCatgMast;
use App\Models\QualMast;
use App\Models\CourtMast;
use App\Models\CourtTypeMast;
use App\Models\UserCourt;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = User::find(Auth::user()->id);
        
        return view('backend.profile.index',compact('user'));
    }
    public function edit()
    {
    	$states  = State::orderBy('state_name')->cursor();
    	$user = User::find(Auth::user()->id);
        return view('backend.profile.edit',compact('user','states'));
    }
    public function update(Request $request,$id)
    {	
    	// return $request->all();
     $data = $request->validate([
    		'name' 		=> 'required',
    		'mobile' 		=> 'required',
    		'licence_no' 		=> 'required',
    		'gender' 	=> 'required',
    		'dob' 		=> 'required',
    		'aadhar_card' 	=> 'required',
    		'pan_card' 		=> 'required',
    		'addr1' 	=> 'required',
    		'addr2' 	=> 'nullable',
    		'country_code' 	=> 'required',
    		'state_code' 	=> 'required',
    		'city_code' 	=> 'required',
    		'zip_code' 		=> 'required',
    		'detl_profile' 	=> 'required'
    	]);

        if($request->hasFile('photo')){
            $data['photo'] = file_upload($request->photo,Auth::user()->id.'/image');
        }
     // return $data;
       $user = User::find($id);
        

       $user->update($data);

       return redirect()->back()->with('success','Profile Updated Successfully.');
    }
    public function specialization(){
        $user_specializations =  UserSpecialization::where('user_id',Auth::user()->id)->get();
        $spec_id  = collect($user_specializations)->pluck('spec_code');

        $specs  = Specialization::whereNotIn('spec_code',$spec_id)->orderBy('spec_name')->cursor();
        // return $specs;

        //return User::find(Auth::user()->id)->specs;


        return  view('backend.profile.specialization',compact('specs','user_specializations'));
    }
    public function specialization_store(Request $request){
        $user  =User::find(Auth::user()->id);

        $user->specializations()->sync($request->specc_code);
        return $request->all();
    }
    
    public function practicing_court(){
// 		$court_types = CourtType::all();
		$states = State::where('country_code',102)->get();

		//$courts_code = Court::select('court_code')->where('user_id', Auth::user()->id)->get();
		//$mast_courts = CourtMastHeader::whereNotIn('court_code', $courts_code->toArray())->get();
		$courts = UserCourt::with('court_catg')->where('user_id',Auth::user()->id)->get();
		// return $mast_courts;
		return view('backend.profile.practicing_court',compact('states','courts'));
	}
    public function practicing_court_store(Request $request){
		$user_id 	= Auth::user()->id;
		$court 		= $request->court;
		$user 		= User::find($user_id);
		$user->courts()->sync($court);    
		return 'Practicing courts updated successfully';
	}
    
    public function qualification(){
        $qual_catgs = QualCatgMast::orderBy('qual_catg_code')->get();
        $qualifications  = UserQualification::where('user_id',Auth::user()->id)->cursor();
        return view('backend.profile.qualification',compact('qualifications','qual_catgs'));  
    }

    public function qualification_store(Request $request){
      $data =   $request->validate([
            'qual_catg_code'    => 'required|not_in:0',
            'qual_code'         => 'required|not_in:0',
            'pass_year'         => 'required|digits:4|integer|min:1900|max:'.(date('Y')).'',
            'pass_perc'         => 'required|max:6|regex:/^\d{0,6}(\.\d{1,2})?$/',
            'pass_division'     => 'required|not_in:0' 
        ],
        [   
            'qual_catg_code.*'   => 'The selected course type is invalid.',
            'qual_code.required' => 'The selected course name is invalid.',
            'qual_code.not_in:0' => 'The course name field is required.',
            'pass_year.required' => 'The passing year field is required.',
            'pass_year.digits'   => 'The passing year must be 4 digits.',
            'pass_year.regex'    => 'The passing year format is invalid.',
            'pass_perc.required' => 'The passing percentage field is required.',
            'pass_perc.regex'    => 'The passing percentage format is invalid.',
            'pass_division.*'    => 'The selected passing division is invalid.'
        ]);

        $qual_catg = QualCatgMast::find($data['qual_catg_code']);
        $qual = QualMast::find($data['qual_code']);

        $data['qual_catg_desc'] = $qual_catg->qual_catg_desc;
        $data['qual_desc'] = $qual->qual_desc;

        $user_qual = UserQualification::where('qual_catg_code',$data['qual_catg_code'])                     ->where('qual_code',$data['qual_code'])
                                  ->where('pass_year',$data['pass_year'])
                                  ->where('user_id',Auth::user()->id)
                                  ->get();

        $data['user_id'] = Auth::user()->id;    

        if(count($user_qual) ==0){
            UserQualification::create($data);           
            return redirect()->route('qualification')->with('success','Qualification updated successfully');
        }
        else{
            return redirect()->route('qualification')->with('warning','Already inserted');
        }    
        // return $request->all();
    }
    
    public function state_court($state_code){
        $courts = CourtMast::where('state_code',$state_code)->get();        
            
        $court_type = array();
        foreach ($courts as $court) {
            $court_type [] = $court->court_type;
        }
        $court_types = array();
            
        if(!empty($court_type)){
            $court_types =   CourtTypeMast::whereIn('court_type',$court_type)->get();
        }
            // return $court_types;
        return response()->json($court_types);
    }
    public function user_court_list($court_type,$state_code){
		$courts_code = UserCourt::select('court_code')->where('user_id', Auth::user()->id)->get();
		$mast_courts = CourtMast::whereNotIn('court_code', $courts_code->toArray())->where('court_type',$court_type)->where('state_code',$state_code)->get();

		return response()->json($mast_courts);
	}

}

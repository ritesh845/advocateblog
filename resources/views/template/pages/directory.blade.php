{{-- <div class="container mt-5 mb-5">
	<div class="col-md-12">
		<h5 class="text-justify">
			<img src="{{asset('advocate.jpg')}}" class="" width="50">
			Lawyer In India
		</h5>
		<p class="text-justify">
			We help you to consult with the well experienced team of lawyers, researchers & experts carry daily research on all latest current & new law, judgments & Court decisions and allows to hire the best lawyers in India for District Courts, High Court & Supreme Court matters. Our services includes to provide the best legal advisor for legal consultancy services, taxation services, corporate legal services, recovery solutions, financial legal services, bad debt recovery solutions, back office operation services, data entry service, documentation services, passport related services, fiscal documentation etc.
		</p>
	</div>
	<div class="col-md-12">
		<h5>Search Lawyers</h5>
	</div>

	<div class="col-md-12 mt-4">
		<div class="card bg-gray mb-3" >
			<div class="card-body p-4">
				<div class="row">
					<div class="col-md-1 mt-2">
						<img src="{{asset('demo.png')}}" width="70">
					</div>	
					<div class="col-md-8 mt-2">
						<h5>{{__('Advocate Ritesh Panchal')}}</h5>
						<p class="mb-1"> Experience (years): 8</p>
						<p class="mt-1"> Languages Known: English, Hindi</p>
					</div>
					<div class="col-md-3 ">
						<p href="" class="mb-3">Indore, Madhya Pradesh</p>
						<a href="" class="font-weight-bold pull-right mb-2">Details Profile</a>						
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 mt-2">
						<p class="mb-1"> Specializations: cheque bounce, debt recovery, criminal, bail, anticipary bail, cyber crime, breach of contract, etc </p>
						<p class=""> Qualifications: cheque bounce, debt recovery, criminal, bail, anticipary bail, cyber crime, breach of contract, etc </p>
					</div>
				</div>
			</div>
		</div>
		<div class="card bg-gray mb-3" >
			<div class="card-body p-4">
				<div class="row">
					<div class="col-md-1 mt-2">
						<img src="{{asset('demo.png')}}" width="70">
					</div>	
					<div class="col-md-8 mt-2">
						<h5>{{__('Advocate Ritesh Panchal')}}</h5>
						<p class="mb-1"> Experience (years): 8</p>
						<p class="mt-1"> Languages Known: English, Hindi</p>
					</div>
					<div class="col-md-3 ">
						<p href="" class="mb-3">Indore, Madhya Pradesh</p>
						<a href="" class="font-weight-bold pull-right mb-2">Details Profile</a>						
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 mt-2">
						<p class="mb-1"> Specializations: cheque bounce, debt recovery, criminal, bail, anticipary bail, cyber crime, breach of contract, etc </p>
						<p class=""> Qualifications: cheque bounce, debt recovery, criminal, bail, anticipary bail, cyber crime, breach of contract, etc </p>
					</div>
				</div>
			</div>
		</div>
		
	</div>
</div>
 --}}
   @php 
		$states = DB::table('states')->select('states.state_code','states.state_name')->limit(15)->get();
		// $states = DB::table('users')
	 //     ->select(DB::raw('count(users.id) as state_count, states.state_name,states.state_code'))
	 //     ->where('users.role_id', '=', 3)
	 //     ->where('users.state_code', '!=', null)
	 //     ->join('states','users.state_code', '=','states.state_code')
	 //     ->groupBy('users.state_code')     
	 //     // ->orderBy('state_count','desc')
	 //     ->limit(15)
	 //     ->get();
	@endphp
<section class="mt-5 mb-5">
  <div class="container">
    <div class="row">
        <div class="col-md-11 m-auto">
            <div class="card shadow-sm card-border-top">
                <div class="card-header text-center p-2 ">
                  <h5 class="card-title text-primary">Number of Lawyers in States</h5>
                </div>
                <div class="card-body p-5 bg-gray">
                    <div class="row" id="stateRow">
                    	  @foreach($states as $state)
	                        <div class="col-md-4">
	                            <a href="javascript:void(0)" class="text-primary stateView" id="" data-id=""> <i class="fa fa-map-marker "></i> {{$state->state_name}} </a><br/><br/>
	                        </div>
	                      @endforeach
                    </div>
                   
                    <div class="row" id="stateRow1">
                        <div class="col-md-12 mt-5 text-center">                          
                            <a href="https://adlaw.in/search" class="btn btn-sm btn-primary p-2">Search Other States</a>
                        </div>
                    </div>

                    <div class="row d-none" id="cityRow">
                        
                        
                    </div>
                    <div class="row d-none" id="cityRow1">
                        <div class="col-md-12 mt-5 text-center">
                            <a href="javascript:void(0)" class="btn btn-sm btn-primary p-2" id="backStateBtn">Back</a>
                            <a href="https://adlaw.in/search" class="btn btn-sm btn-primary p-2">Search Other Cities</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</section>
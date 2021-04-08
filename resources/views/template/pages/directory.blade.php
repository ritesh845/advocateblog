
   @php 
		$states = DB::table('states')->select('states.state_code','states.state_name')->orderBy('state_name')->get();
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
	                            <a href="javascript:void(0)" class="text-primary stateView" id="{{$state->state_code}}" data-id="{{$state->state_name}}"> <i class="fa fa-map-marker "></i> {{$state->state_name}} </a><br/><br/>
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
  <script>
  $(document).ready(function(){
      $('.stateView').on('click',function(){
        var state_name = $(this).data('id');
        var state_code = $(this).attr('id');
      
            var str = state_name.replace(/[`~!@#$%^&*()_\-+=\[\]{};:'"\\|\/,.<>?\s]/g, ' ').toLowerCase();
            str = str.replace(/^\s+|\s+$/gm,'');
            str = str.replace(/\s+/g, '-');  
            window.location.href =  '/directory/'+str+'/'+state_code;
      })
    })
</script>
</section>
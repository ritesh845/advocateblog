<div class="container mt-5 mb-5">
	<div class="col-md-12">
		<!--<h5 class="text-center">-->
		<!--	<img src="{{asset('advocate.jpg')}}" class="" width="50">-->
		<!--	Lawyer In India-->
		<!--</h5>-->
		<div class="col-md-12 border-1 text-center bg-gray p-3">
		    <h4 class="" style="color:blue">List Of Lawyers In {{$city_name}}</h4>
		</div>
		<!--<p class="text-justify">-->
		<!--	We help you to consult with the well experienced team of lawyers, researchers & experts carry daily research on all latest current & new law, judgments & Court decisions and allows to hire the best lawyers in India for District Courts, High Court & Supreme Court matters. Our services includes to provide the best legal advisor for legal consultancy services, taxation services, corporate legal services, recovery solutions, financial legal services, bad debt recovery solutions, back office operation services, data entry service, documentation services, passport related services, fiscal documentation etc.-->
		<!--</p>-->
	</div>
	<!--<div class="col-md-12">-->
	<!--	<h5>Search Lawyers</h5>-->
	<!--</div>-->

	<div class="col-md-12 mt-4">
		@foreach($users as $user)
			<div class="card bg-gray mb-3" >
				<div class="card-body p-4">
				    <div class="row">
				        <div class="col-md-2">
				            <p style="color:blue" class="font-weight-bold m-1">Advocate Name </p>
				            <p style="color:blue" class="font-weight-bold m-1">Date of Birth </p>
				            <p style="color:blue" class="font-weight-bold m-1">Registeration Year</p>
				            <p style="color:blue" class="font-weight-bold m-1">Specialization </p>
				            <p style="color:blue" class="font-weight-bold m-1">About </p>
				            <p class="font-weight-bold m-1 mt-4"><a href="{{url('profile_show/'.$user->id)}}" style="color:blue" >Detail Profile</a></p>
				        </div>
				        <div class="col-md-7">
				            <p class="font-weight-bold m-1">{{$user->name}}</p>
				            <p class="font-weight-bold m-1">{{$user->dob !=null ? date('d-m-Y',strtotime($user->dob)) : 'N/A' }}</p>
				            <p class="font-weight-bold m-1">{{$user->registration_year ? $user->registration_year : 'N/A'}}</p>
				            <p class="font-weight-bold m-1">
				                 @php $spec_string = '' ; @endphp
                                    @foreach($user->specs as $spec)
                
                                        @if($spec->specialization !=null)
                                          @php  $spec_string .= $spec->specialization->spec_name.', ' ; @endphp
                                        @endif
                                    @endforeach
                                {{substr($spec_string,0,strlen($spec_string)-2)}}
				             </p>
				             <div>{{Str::limit($user->detl_profile,75,$end="...")}}</div>
				           
				        </div>
				        <div class="col-md-3">
				            <img style="width:100%;" height="200" src="{{$user->photo !=null ? asset('storage/'.$user->photo) : ($user->gender == 'F' ? asset('advocate-female.png') : asset('advocate-male.png')) }}">
				        </div>
				    </div>
				</div>
			</div>
		@endforeach
		
		
	</div>
</div>

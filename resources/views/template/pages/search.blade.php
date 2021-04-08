<div class="container mt-5 mb-5">
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
		@foreach($users as $user)
			<div class="card bg-gray mb-3" >
				<div class="card-body p-4">
					<div class="row">
						<div class="col-md-1 mt-2">
							<img src="{{asset('demo.png')}}" width="70">
						</div>	
						<div class="col-md-8 mt-2">
							<h5>{{__('Advocate '.$user->name ) }}</h5>
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

		@endforeach
		
		
	</div>
</div>

<section class="mt-5 mb-5">
  <div class="container">
    <div class="row">
        <div class="col-md-11 m-auto">
            <div class="card shadow-sm card-border-top">
                <div class="card-header text-center p-2 ">
                  <h5 class="card-title text-primary">Number of Lawyers in States</h5>
                </div>
                <div class="card-body p-5 bg-gray">
                    <div class="row" id="cityRow">
                    	  @foreach($cities as $city)
	                        <div class="col-md-4">
	                            <a href="javascript:void(0)" class="text-primary cityView" id="{{$city->city_code}}" data-id="{{$city->city_name}}"> <i class="fa fa-map-marker "></i> {{$city->city_name}} </a><br/><br/>
	                        </div>
	                      @endforeach
                    </div>
                   
                    <div class="row" id="cityRow1">
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
      $('.cityView').on('click',function(){
        var city_name = $(this).data('id');
        var city_code = $(this).attr('id');
      
            var str = city_name.replace(/[`~!@#$%^&*()_\-+=\[\]{};:'"\\|\/,.<>?\s]/g, ' ').toLowerCase();
            str = str.replace(/^\s+|\s+$/gm,'');
            str = str.replace(/\s+/g, '-');  
            window.location.href =  '/directory/{{$state_name}}/'+str+'/'+city_code;
      })
    })
</script>
</section>
<x-admin-master>

    @section('content')




<div class="row mb-5">
  <div class="col-sm-4">
    <div class="card">
    	 <img class="card-img-top" src="{{asset('assets/img/alumni.jpg')}}" height="400" width="400" alt="Card image cap">
      <div class="card-body justify-content-center">
       <hr>
        <h5 class="card-title text-center" >Alumni  Form </h5>
         <h5 class="card-title text-center" >استمارة الطالب الخريج  </h5>
       
        <div class="row">
    <div class="col text-center">
      <a href="{{url('admin/alumniForms/create')}}"><button class="btn btn-primary">Click here</button></a>
    </div>
  </div>
      </div>
    </div>
  </div>

  

    <div class="col-sm-4">
    <div class="card">
       <img class="card-img-top" src="{{asset('assets/img/honorary membership.jpg')}}" height="400" width="400" alt="Card image cap">
      <div class="card-body justify-content-center">
       <hr>
        <h5 class="card-title text-center" > Cooperative Form </h5>
           <h5 class="card-title text-center" >الاستمارة التعاونية </h5>
       
        <div class="row">
    <div class="col text-center">
      <a href="{{url('admin/honoraryForm/create')}}"><button class="btn btn-primary">Click here</button></a>
    </div>
  </div>
      </div>
    </div>
  </div>


 <div class="col-sm-4">
    <div class="card">
    	 <img class="card-img-top" src="{{asset('assets/img/lastYear.jpg')}}" height="400" width="400" alt="Card image cap">
      <div class="card-body justify-content-center">
       <hr>
        <h5 class="card-title text-center" >Last Year Students  Form </h5>
         <h5 class="card-title text-center" >استمارة طالب السنة الأخيرة  </h5>
       
        <div class="row">
    <div class="col text-center">
      <a href="{{url('admin/lastyear/create')}}"><button class="btn btn-primary">Click here</button></a>
    </div>
  </div>
      </div>
    </div>
  </div>

 
</div>
        
    @endsection



</x-admin-master>
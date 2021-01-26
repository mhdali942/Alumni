<x-admin-master>

    @section('content')



<div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Alumnis Forms</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$CountAlumnis}} </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Last Year students Forms</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$CountLastYears}}</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total  Cooperative Forms</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$CountCoorperative}}</div>
                        </div>
                      
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
           
          </div>



          <div class="card shadow mb-4" >
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Recent Submissions Alumni Forms</h6>
                </div>
                <div class="card-body" style="text-align: center;">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                       
                        <tbody>

                  

 
                           @foreach($alumnis as  $alumnis)

                              <tr>
                                    <th>Alumni Form </th>

                                       <th>{{$alumnis->fullname}}</th>

                                <th>{{$alumnis->Membershiptype}}</th>

                                  <th>
                                 

                                    @if($alumnis->payment_status == 1)
                                    <h5> <span class="badge badge-success">Paid Succssfully</span></h5>
                                    @else
                                     <h5> <span class="badge badge-warning">Pending</span></h5>
                                    @endif
                                </th>

                                 @if($alumnis->payment_status == 1)
                                <th>MYR {{$alumnis->amount }}</th>
                                 @else
                                 <th> MYR {{$alumnis->amount }}</th>

                                 @endif

                                   <th><a href="{{route('alumniForm.show',$alumnis->id)}}"><button class="btn btn-warning">View <i class="fas fa-eye"></i></button></a></th>


                                 </tr>


                           @endforeach
                                 

                        </tbody>
                    </table>
                
                
                </div>
              </div>



               <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Recent Submissions Last Year Students Forms</h6>
                </div>
                <div class="card-body" style="text-align: center;">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                       
                        <tbody>

                  

 
                           @foreach($lastyears as  $value)

                              <tr>
                                    <th>Last Year Students Form </th>

                                       <th>{{ $value->fullname}}</th>

                                <th>{{ $value->Membershiptype}}</th>

                                  <th>
                                 

                                    @if( $value->payment_status == 1)
                                    <h5> <span class="badge badge-success">Paid Succssfully</span></h5>
                                    @else
                                     <h5> <span class="badge badge-warning">Pending</span></h5>
                                    @endif
                                </th>

                                 @if( $value->payment_status == 1)
                                <th>MYR {{ $value->amount }}</th>
                                 @else
                                 <th> MYR {{$value->amount }}</th>

                                 @endif

                                   <th><a href="{{route('lastyear.show',$value->id)}}"><button class="btn btn-warning">View <i class="fas fa-eye"></i></button></a></th>


                                 </tr>


                           @endforeach
                                 

                        </tbody>
                    </table>
                
                
                </div>
              </div>



               <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Recent Submissions Coorperatives Forms</h6>
                </div>
                <div class="card-body" style="text-align: center;">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                       
                        <tbody>

                  

 
                           @foreach($Coorperatives as  $value)

                              <tr>
                                    <th>Coorperatives Form</th>

                                       <th>{{ $value->fullname}}</th>

                                <th>{{ $value->Membershiptype}}</th>

                                  <th>
                                 

                                    @if( $value->payment_status == 1)
                                    <h5> <span class="badge badge-success">Paid Succssfully</span></h5>
                                    @else
                                     <h5> <span class="badge badge-warning">Pending</span></h5>
                                    @endif
                                </th>

                                 @if( $value->payment_status == 1)
                                <th>MYR {{ $value->amount }}</th>
                                 @else
                                 <th> MYR {{$value->amount }}</th>

                                 @endif

                                   <th><a href="{{route('honoraryForm.show',$value->id)}}"><button class="btn btn-warning">View <i class="fas fa-eye"></i></button></a></th>


                                 </tr>


                           @endforeach
                                 

                        </tbody>
                    </table>
                
                
                </div>
              </div>





        
    @endsection



</x-admin-master>
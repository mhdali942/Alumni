<x-admin-master>

    @section('content')


      <p><a href="{{url('admin')}}">Dashboard</a> / <a href="{{url('admin/alumniForms/alumniRecords')}}">Alumni Records List / قائمة الخريجين  </a></p>
      <hr>

        <div class="card shadow mb-4">

            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Alumni Records List / قائمة الخريجين  </h6>
            </div>

  <div class="col-md-4 mt-4 ml-2">
                                                             <a href="/AlumniDownload"> <button class="btn btn-info">Export to Excel</button></a>

                           </div>
            <div class="card-body">


                <div class="table-responsive">

                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>FullName</th>
                            <th>Nationality</th>
                         
                           
                            <th>Educational level</th>
                          
                            <th>Mobile Number</th>
                            <th>E-mail</th>
                           
                            <th>Memebership Type</th>
                            <th>Amount</th>
                            <th>Payment Status</th>
                         


                        </tr>
                        </thead>
                        <tfoot>
                      
                        </tfoot>
                        <tbody>

                    @foreach($alumnis as  $value)


                                   <tr>
                                <th>{{$loop->iteration}}</th>
                                <th>{{$value->fullname}}</th>
                                <th>{{$value->nationality}}</th>
                             
                              
                                <th>{{$value->edulevel}}</th>
                             
                                <th>{{$value->MobileNumber}}</th>
                                <th>{{$value->email}}</th>
                                <th>{{$value->Membershiptype}}</th>
                              
                            @if($value->payment_status == 1)
                                <th>MYR {{ $value->amount }}</th>
                                 @else
                                 <th>0</th>

                                 @endif
                                <th>

                                    @if($value->payment_status == 1)
                                    <h5> <span class="badge badge-success">Paid Succssfully</span></h5>
                                    @else
                                     <h5> <span class="badge badge-warning">Pending</span></h5>
                                    @endif
                                </th>
                            
                                <th><a href="{{route('alumniForm.show',$value->id)}}"><button class="btn btn-success">Detalis</button></a></th>
                             @if(Auth::check() && Auth::user()->role == "admin")

                                <th><a href="{{route('alumniForm.edit',$value->id)}}"><button class="btn btn-info">Edit</button></a></th>
                                 <th><form method="post" action="{{route('alumniForm.destroy', $value->id)}}" enctype="multipart/form-data">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form></th>
                              
                                  </tr>


                        @endif

                     @endforeach
    

                        </tbody>
                    </table>

                </div>
            
          {{$alumnis->links("pagination::bootstrap-4")}}
            </div>
        </div>
     
        

    @endsection

   
    @section('scripts')
        <!-- Page level plugins -->
            <script src="{{asset('vendor/datatables/jquery.dataTables.js')}}"></script>
            <script src="{{asset('vendor/datatables/dataTables.bootstrap4.js')}}"></script>

            <!-- Page level custom scripts -->
     <!--     <script src="{{asset('js/demo/datatables-demo.js')}}"></script> -->
  @endsection
 
        
       
 



</x-admin-master>
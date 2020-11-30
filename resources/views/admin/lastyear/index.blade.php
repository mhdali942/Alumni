<x-admin-master>

    @section('content')


      <p><a href="{{url('admin')}}">Dashboard</a> / <a href="{{url('admin/lastyear')}}">Last Year Records List / قائمة  طلاب السنة الأخيرة  </a></p>
      <hr>


        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Last Year Records List / قائمة  طلاب السنة الأخيرة  </h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>FullName</th>
                            <th>Nationality</th>
                            <th>Gender</th>
                            <th>Ref NO.</th>
                            <th>Faculty</th>
                            <th>Educational level</th>
                            <th>Leanring Mode</th>
                            <th>Mobile Number</th>
                            <th>E-mail</th>
                            <th>Memebership Type</th>
                            <th></th>
                            <th></th>
                         

                        </tr>
                        </thead>
                        <tfoot>
                      
                        </tfoot>
                        <tbody>

                   
                            @foreach( $lastyears as $lasyear )

                                   <tr>

                                <th>{{$loop->iteration}}</th>
                                <th>{{$lasyear->fullname}}</th>
                                <th>{{$lasyear->nationality}}</th>
                                <th>{{$lasyear->gender}}</th>
                                <th>{{$lasyear->refrenceNumber}}</th>
                                <th>{{$lasyear->faculty}}</th>
                                <th>{{$lasyear->edulevel}}</th>
                                <th>{{$lasyear->leanringmode}}</th>
                                <th>{{$lasyear->MobileNumber}}</th>
                                <th>{{$lasyear->email}}</th>
                               
                                 <th>{{$lasyear->Membershiptype}}</th>
                              
                                <th><a href="{{route('lastyear.edit',$lasyear->id)}}"><button class="btn btn-primary">Edit</button></a></th>
                                <th><a href="{{route('lastyear.show',$lasyear->id)}}"><button class="btn btn-success">Review</button></a></th>

                                  @if(Auth::check() && Auth::user()->role == "admin")

                                 <th><form method="post" action="{{route('lastyear.destroy', $lasyear->id)}}" enctype="multipart/form-data">
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
                      
                   {{$lastyears->links("pagination::bootstrap-4")}}
            </div>

        </div>

    @endsection


    @section('scripts')
        <!-- Page level plugins -->
            <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
            <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

            <!-- Page level custom scripts -->
       <!--   <script src="{{asset('js/demo/datatables-demo.js')}}"></script> -->
  @endsection
 


</x-admin-master>
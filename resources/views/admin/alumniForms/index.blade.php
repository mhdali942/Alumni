<x-admin-master>

    @section('content')


      <p><a href="{{url('admin')}}">Dashboard</a> / <a href="{{url('admin/alumniForms')}}">Alumni Records List / قائمة الخريجين  </a></p>
      <hr>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Your Submission / استمارة تقديمك  </h6>
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
                            <th>RefNO.</th>
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

                    @foreach($alumnis as  $value)


                                   <tr>
                                     <th>{{$loop->iteration}}</th>
                                <th>{{$value->fullname}}</th>
                                <th>{{$value->nationality}}</th>
                                <th>{{$value->gender}}</th>
                                <th>{{$value->refrenceNumber}}</th>
                                <th>{{$value->faculty}}</th>
                                <th>{{$value->edulevel}}</th>
                                <th>{{$value->leanringmode}}</th>
                                <th>{{$value->MobileNumber}}</th>
                                <th>{{$value->email}}</th>
                                <th>{{$value->Membershiptype}}</th>
                                <th><a href="{{route('alumniForm.edit',$value->id)}}"><button class="btn btn-primary">Edit</button></a></th>
                                <th><a href="{{route('alumniForm.show',$value->id)}}"><button class="btn btn-success">Review</button></a></th>


                                @if(Auth::check() && Auth::user()->role == "admin")


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
<x-admin-master>

    @section('content')

<p><a href="{{url('admin')}}">Dashboard</a> / <a href="{{url('admin/alumniForms/create')}}">  Al-Madinah International University Cooperative Form / استمارة  التعاونية لنادي الخريجين في جامعة المدينة العالمية  </a> </p>
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
                            
                           
                            <th>Educational level</th>
                            
                            <th>Mobile Number</th>
                            <th>E-mail</th>
                           
                            <th>Memebership Type</th>
                            <th></th>
                           <th></th>
                              <th></th>


                        </tr>
                        </thead>
                        <tfoot>
                      
                        </tfoot>
                        <tbody>

                    @foreach($honorary as  $value)


                                <tr>
                                <th>{{$loop->iteration}}</th>
                                <th>{{$value->fullname}}</th>
                                <th>{{$value->nationality}}</th>
                                <th>{{$value->gender}}</th>
                                
                                <th>{{$value->edulevel}}</th>
                                <th>{{$value->MobileNumber}}</th>
                                <th>{{$value->email}}</th>
                                <th>{{$value->Membershiptype}}</th>
                                <th><a href="{{route('honoraryForm.edit', $value->id)}}"><button class="btn btn-primary">Edit</button></a></th>

                                <th><a href="{{route('honoraryForm.show',$value->id)}}"><button class="btn btn-success">Review</button></a></th>
                                   @if(Auth::check() && Auth::user()->role == "admin")
                                 <th><form method="post" action="{{route('honoraryForm.destroy', $value->id)}}" enctype="multipart/form-data">
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
            
          {{$honorary->links("pagination::bootstrap-4")}}
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
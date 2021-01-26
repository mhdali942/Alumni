<x-admin-master>

    @section('content')

    <p><a href="{{url('admin')}}">Dashboard</a> / <a href="{{url('admin/lastyear/lastyearRecords')}}">LastYear Records List / قائمة الخريجين  </a></p>
      <hr>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Alumni Records List / قائمة الخريجين  </h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>FullName</th>
                            <th>User Role</th>
                            <th>Status</th>
                           
                            <th>E-mail</th>
                      
                            <th>Created date</th>
                          
                            


                        </tr>
                        </thead>
                        <tfoot>
                      
                        </tfoot>
                        <tbody>

                    @foreach($users as  $value)


                                   <tr>
                                  <th>{{$loop->iteration}}</th>
                                <th>{{$value->name}}</th>
                                <th>{{$value->statues}}</th>
                              
                                <th>{{$value->role}}</th>
                               
                                <th>{{$value->email}}</th>
                               
                                <th>{{$value->created_at}}</th>
                               

                            

                         
                                 <th><form method="post" action="{{route('users.destroy', $value->id)}}" enctype="multipart/form-data">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form></th>
                              
                                  </tr>
                        
                        

                     @endforeach
    

                        </tbody>
                    </table>

                </div>
            
          {{$users->links("pagination::bootstrap-4")}}
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
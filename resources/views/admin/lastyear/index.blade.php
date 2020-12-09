<x-admin-master>

    @section('content')


      <p><a href="{{url('admin')}}">Dashboard</a> / <a href="{{url('admin/lastyear')}}">Last Year Records List / قائمة  طلاب السنة الأخيرة  </a></p>
      <hr>
          @if(Auth::check() && Auth::user()->role == "admin")


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

                   @elseif(Auth::check() && Auth::user()->role == "")


                      <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Alumni Form Detalis / تفاصيل تعبئة الاستمارة  </h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                @foreach( $lastyears as $lastyear )
                     <a href="{{route('lastyear.edit',$lastyear->id)}}"><div class="col-md-4" style="margin-bottom: 10px;"><button class="btn btn-primary">Edit Your form </button></a><br></th></div>
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                         
                           

                        </tr>
                        </thead>
                        <tfoot>
                      
                        </tfoot>
                        <tbody>

                


                                   <tr>
                                <th>Full Name / الاسم الكامل</th>
                                <th>{{$lastyear->fullname}}</th>
                                  </tr>


                                   <tr>
                                <th>Nationality / الجنسية</th>
                                <th>{{$lastyear->nationality}}</th>
                                  </tr>

                                   <tr>
                                <th>Gender/الجنس</th>
                                <th>{{$lastyear->gender}}</th>
                                  </tr>

                                   <tr>
                                <th>Refrence NO. / الرقم المرجعي</th>
                                <th>{{$lastyear->refrenceNumber}}</th>
                                  </tr>

                                   <tr>
                                <th>Faculty/ الكلية</th>
                                <th>{{$lastyear->faculty}}</th>
                                  </tr>

                                   <tr>
                                <th>Educational level /المرحلة اللتي تخرجت منها</th>
                                <th>{{$lastyear->edulevel}}</th>
                                  </tr>

                                   <tr>
                                <th>Leanring mode/ نمط التعليم</th>
                                <th>{{$lastyear->leanringmode}}</th>
                                  </tr>

                                   <tr>
                                <th>Subspecialty / التخصص الدقيق</th>
                                <th>{{$lastyear->Subspecialty}}</th>
                                  </tr>

                                   <tr>
                                <th>Current Address / العنوان حالي</th>
                                <th>{{$lastyear->currentaddress}}</th>
                                  </tr>

                                   <tr>
                                <th>Current Work / العمل الحالي</th>
                                <th>{{$lastyear->Currentwork}}</th>
                                  </tr>

                                   <tr>
                                <th>Current Position / المنصب الحالي</th>
                                <th>{{$lastyear->CurrentPosition}}</th>
                                  </tr>

                                   <tr>
                                <th>Current work address / عنوان العمل الحالي</th>
                                <th>{{$lastyear->Currentworkaddress}}</th>
                                  </tr>

                                   <tr>
                                <th>Previous Work / العمل السابق</th>
                                <th>{{$lastyear->Previouswork}}</th>
                                  </tr>

                                   <tr>
                                <th>Previous Positions / المنصب السابق</th>
                                <th>{{$lastyear->Previouspositions}}</th>
                                  </tr>


                                   <tr>
                                <th>Scientific literature / النتاج العلمي</th>
                                <th>{{$lastyear->Scientificliterature}}</th>
                                  </tr>

                                   <tr>
                                <th>Community posts / المشاركات المجتمعية</th>
                                <th>{{$lastyear->Communityposts}}</th>
                                  </tr>

                                   <tr>
                                <th>Other achievements / اإنجازات أخرى</th>
                                <th>{{$lastyear->Otherachievements}}</th>
                                  </tr>

                                   <tr>
                                <th>SkillsAbilities / إنجازات أخرى</th>
                                <th>{{$lastyear->SkillsAbilities}}</th>
                                  </tr>

                                   <tr>
                                <th>Monthly Salary / الراتب الشهري / الدخل</th>
                                <th>{{$lastyear->SalaryFirst}}</th>
                                  </tr>

                                   <tr>
                                <th>Mobile Number/ رقم الجوال</th>
                                <th>{{$lastyear->MobileNumber}}</th>
                                  </tr>

                                   <tr>
                                <th>Landline Number / الهاتف الثابت</th>
                                <th>{{$lastyear->LandlineNumber}}</th>
                                  </tr>

                                   <tr>
                                <th>E-mail / البريد الإلكتروني</th>
                                <th>{{$lastyear->email}}</th>
                                  </tr>

                                  <tr>
                                <th>Club Tasks / مهام يمكن القيام بها</th>
                                <th>{{$lastyear->clubtasks}}</th>
                                  </tr>

                                  <tr>
                                <th>Other additional task you can do</th>
                                <th>{{$lastyear->additionaltask}}</th>
                                  </tr>

                                    <tr>
                                <th>Alumni Memebership Types</th>
                                <th>{{$lastyear->Membershiptype}}</th>
                                  </tr>

                                  <tr>
                                <th>Terms and regulations </th>
                                <th>Agreed</th>
                                  </tr>

                            
                  
                            @endforeach

                        </tbody>
                    </table>
                </div>
              
            </div>
        </div>

            @endif

    @endsection


    @section('scripts')
        <!-- Page level plugins -->
            <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
            <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

            <!-- Page level custom scripts -->
       <!--   <script src="{{asset('js/demo/datatables-demo.js')}}"></script> -->
  @endsection
 


</x-admin-master>
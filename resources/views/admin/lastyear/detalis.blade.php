<x-admin-master>

    @section('content')


      <p><a href="{{url('admin')}}">Dashboard</a> / <a href="{{url('admin/alumniForms')}}">Alumni Records List / قائمة الخريجين  </a></p>
      <hr>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Alumni Form Detalis / تفاصيل تعبئة الاستمارة  </h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
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
                                <th>{{$lastyears->fullname}}</th>
                                  </tr>


                                   <tr>
                                <th>Nationality / الجنسية</th>
                                <th>{{$lastyears->nationality}}</th>
                                  </tr>

                                   <tr>
                                <th>Gender/الجنس</th>
                                <th>{{$lastyears->gender}}</th>
                                  </tr>

                                   <tr>
                                <th>Refrence NO. / الرقم المرجعي</th>
                                <th>{{$lastyears->refrenceNumber}}</th>
                                  </tr>

                                   <tr>
                                <th>Faculty/ الكلية</th>
                                <th>{{$lastyears->faculty}}</th>
                                  </tr>

                                   <tr>
                                <th>Educational level /المرحلة اللتي تخرجت منها</th>
                                <th>{{$lastyears->edulevel}}</th>
                                  </tr>

                                   <tr>
                                <th>Leanring mode/ نمط التعليم</th>
                                <th>{{$lastyears->leanringmode}}</th>
                                  </tr>

                                   <tr>
                                <th>Subspecialty / التخصص الدقيق</th>
                                <th>{{$lastyears->Subspecialty}}</th>
                                  </tr>

                                   <tr>
                                <th>Current Address / العنوان حالي</th>
                                <th>{{$lastyears->currentaddress}}</th>
                                  </tr>

                                   <tr>
                                <th>Current Work / العمل الحالي</th>
                                <th>{{$lastyears->Currentwork}}</th>
                                  </tr>

                                   <tr>
                                <th>Current Position / المنصب الحالي</th>
                                <th>{{$lastyears->CurrentPosition}}</th>
                                  </tr>

                                   <tr>
                                <th>Current work address / عنوان العمل الحالي</th>
                                <th>{{$lastyears->Currentworkaddress}}</th>
                                  </tr>

                                   <tr>
                                <th>Previous Work / العمل السابق</th>
                                <th>{{$lastyears->Previouswork}}</th>
                                  </tr>

                                   <tr>
                                <th>Previous Positions / المنصب السابق</th>
                                <th>{{$lastyears->Previouspositions}}</th>
                                  </tr>


                                   <tr>
                                <th>Scientific literature / النتاج العلمي</th>
                                <th>{{$lastyears->Scientificliterature}}</th>
                                  </tr>

                                   <tr>
                                <th>Community posts / المشاركات المجتمعية</th>
                                <th>{{$lastyears->Communityposts}}</th>
                                  </tr>

                                   <tr>
                                <th>Other achievements / اإنجازات أخرى</th>
                                <th>{{$lastyears->Otherachievements}}</th>
                                  </tr>

                                   <tr>
                                <th>SkillsAbilities / إنجازات أخرى</th>
                                <th>{{$lastyears->SkillsAbilities}}</th>
                                  </tr>

                                   <tr>
                                <th>Monthly Salary / الراتب الشهري / الدخل</th>
                                <th>{{$lastyears->SalaryFirst}}</th>
                                  </tr>

                                   <tr>
                                <th>Mobile Number/ رقم الجوال</th>
                                <th>{{$lastyears->MobileNumber}}</th>
                                  </tr>

                                   <tr>
                                <th>Landline Number / الهاتف الثابت</th>
                                <th>{{$lastyears->LandlineNumber}}</th>
                                  </tr>

                                   <tr>
                                <th>E-mail / البريد الإلكتروني</th>
                                <th>{{$lastyears->email}}</th>
                                  </tr>

                                  <tr>
                                <th>Club Tasks / مهام يمكن القيام بها</th>
                                <th>{{$lastyears->clubtasks}}</th>
                                  </tr>

                                  <tr>
                                <th>Other additional task you can do</th>
                                <th>{{$lastyears->additionaltask}}</th>
                                  </tr>

                                    <tr>
                                <th>Alumni Memebership Types</th>
                                <th>{{$lastyears->Membershiptype}}</th>
                                  </tr>

                                  <tr>
                                <th>Terms and regulations </th>
                                <th>Agreed</th>
                                  </tr>

                            
                  
    

                        </tbody>
                    </table>
                </div>
              
            </div>
        </div>
        
         

    @endsection

    @section('scripts')
        <!-- Page level plugins -->
            <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
            <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

            <!-- Page level custom scripts -->
         <script src="{{asset('js/demo/datatables-demo.js')}}"></script>


        
       
 



</x-admin-master>
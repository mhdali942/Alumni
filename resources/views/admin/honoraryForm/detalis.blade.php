<x-admin-master>

    @section('content')


         p><a href="{{url('admin')}}">Dashboard</a> / <a href="{{url('admin/alumniForms/create')}}">  Al-Madinah International University Cooperative Form / استمارة  التعاونية نادي الخريجين في جامعة المدينة العالمية  </a> </p>
      <hr>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">honorary Form Detalis / تفاصيل تعبئة الاستمارة  </h6>
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
                                <th>{{$honoraries->fullname}}</th>
                                  </tr>


                                   <tr>
                                <th>Nationality / الجنسية</th>
                                <th>{{$honoraries->nationality}}</th>
                                  </tr>

                                   <tr>
                                <th>Gender/الجنس</th>
                                <th>{{$honoraries->gender}}</th>
                                  </tr>

                                   <tr>
                                <th>IC NO /Passport NO. / الرقم المرجعي</th>
                                <th>{{$honoraries->IcNo}}</th>
                                  </tr>


                                   <tr>
                                <th>Educational level /المرحلة اللتي تخرجت منها</th>
                                <th>{{$honoraries->edulevel}}</th>
                                  </tr>

                              

                                   

                                   <tr>
                                <th>Current Address / العنوان حالي</th>
                                <th>{{$honoraries->currentaddress}}</th>
                                  </tr>

                                   <tr>
                                <th>Current Work / العمل الحالي</th>
                                <th>{{$honoraries->Currentwork}}</th>
                                  </tr>

                                   <tr>
                                <th>Current Position / المنصب الحالي</th>
                                <th>{{$honoraries->CurrentPosition}}</th>
                                  </tr>

                                   <tr>
                                <th>Current work address / عنوان العمل الحالي</th>
                                <th>{{$honoraries->Currentworkaddress}}</th>
                                  </tr>

                                   <tr>
                                <th>Previous Work / العمل السابق</th>
                                <th>{{$honoraries->Previouswork}}</th>
                                  </tr>

                                   <tr>
                                <th>Previous Positions / المنصب السابق</th>
                                <th>{{$honoraries->Previouspositions}}</th>
                                  </tr>


                                   <tr>
                                <th>Scientific literature / النتاج العلمي</th>
                                <th>{{$honoraries->Scientificliterature}}</th>
                                  </tr>

                                   <tr>
                                <th>Community posts / المشاركات المجتمعية</th>
                                <th>{{$honoraries->Communityposts}}</th>
                                  </tr>

                                   <tr>
                                <th>Other achievements / اإنجازات أخرى</th>
                                <th>{{$honoraries->Otherachievements}}</th>
                                  </tr>

                                   <tr>
                                <th>SkillsAbilities / إنجازات أخرى</th>
                                <th>{{$honoraries->SkillsAbilities}}</th>
                                  </tr>

                                   <tr>
                                <th>Monthly Salary / الراتب الشهري / الدخل</th>
                                <th>{{$honoraries->SalaryFirst}}</th>
                                  </tr>

                                   <tr>
                                <th>Mobile Number/ رقم الجوال</th>
                                <th>{{$honoraries->MobileNumber}}</th>
                                  </tr>

                                   <tr>
                                <th>Landline Number / الهاتف الثابت</th>
                                <th>{{$honoraries->LandlineNumber}}</th>
                                  </tr>

                                   <tr>
                                <th>E-mail / البريد الإلكتروني</th>
                                <th>{{$honoraries->email}}</th>
                                  </tr>

                                  <tr>
                                <th>Club Tasks / مهام يمكن القيام بها</th>
                                <th>{{$honoraries->clubtasks}}</th>
                                  </tr>

                                  <tr>
                                <th>Other additional task you can do</th>
                                <th>{{$honoraries->additionaltask}}</th>
                                  </tr>

                                    <tr>
                                <th>Alumni Memebership Types</th>
                                <th>{{$honoraries->Membershiptype}}</th>
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
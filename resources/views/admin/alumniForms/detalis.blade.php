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
                      @foreach($alumnis as  $value)

                      <a href="{{route('alumniForm.edit',$value->id)}}"><div class="col-md-4"><button class="btn btn-primary">Edit</button></a><br></th></div>
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
                                <th>{{$value->fullname}}</th>
                                  </tr>


                                   <tr>
                                <th>Nationality / الجنسية</th>
                                <th>{{$value->nationality}}</th>
                                  </tr>

                                   <tr>
                                <th>Gender/الجنس</th>
                                <th>{{$value->gender}}</th>
                                  </tr>

                                   <tr>
                                <th>Refrence NO. / الرقم المرجعي</th>
                                <th>{{$value->refrenceNumber}}</th>
                                  </tr>

                                   <tr>
                                <th>Faculty/ الكلية</th>
                                <th>{{$value->faculty}}</th>
                                  </tr>

                                   <tr>
                                <th>Educational level /المرحلة اللتي تخرجت منها</th>
                                <th>{{$value->edulevel}}</th>
                                  </tr>

                                   <tr>
                                <th>Leanring mode/ نمط التعليم</th>
                                <th>{{$value->leanringmode}}</th>
                                  </tr>

                                   <tr>
                                <th>Subspecialty / التخصص الدقيق</th>
                                <th>{{$value->Subspecialty}}</th>
                                  </tr>

                                   <tr>
                                <th>Current Address / العنوان حالي</th>
                                <th>{{$value->currentaddress}}</th>
                                  </tr>

                                   <tr>
                                <th>Current Work / العمل الحالي</th>
                                <th>{{$value->Currentwork}}</th>
                                  </tr>

                                   <tr>
                                <th>Current Position / المنصب الحالي</th>
                                <th>{{$value->CurrentPosition}}</th>
                                  </tr>

                                   <tr>
                                <th>Current work address / عنوان العمل الحالي</th>
                                <th>{{$value->Currentworkaddress}}</th>
                                  </tr>

                                   <tr>
                                <th>Previous Work / العمل السابق</th>
                                <th>{{$value->Previouswork}}</th>
                                  </tr>

                                   <tr>
                                <th>Previous Positions / المنصب السابق</th>
                                <th>{{$value->Previouspositions}}</th>
                                  </tr>


                                   <tr>
                                <th>Scientific literature / النتاج العلمي</th>
                                <th>{{$value->Scientificliterature}}</th>
                                  </tr>

                                   <tr>
                                <th>Community posts / المشاركات المجتمعية</th>
                                <th>{{$value->Communityposts}}</th>
                                  </tr>

                                   <tr>
                                <th>Other achievements / اإنجازات أخرى</th>
                                <th>{{$value->Otherachievements}}</th>
                                  </tr>

                                   <tr>
                                <th>SkillsAbilities / إنجازات أخرى</th>
                                <th>{{$value->SkillsAbilities}}</th>
                                  </tr>

                                   <tr>
                                <th>Monthly Salary / الراتب الشهري / الدخل</th>
                                <th>{{$value->SalaryFirst}}</th>
                                  </tr>

                                   <tr>
                                <th>Mobile Number/ رقم الجوال</th>
                                <th>{{$value->MobileNumber}}</th>
                                  </tr>

                                   <tr>
                                <th>Landline Number / الهاتف الثابت</th>
                                <th>{{$value->LandlineNumber}}</th>
                                  </tr>

                                   <tr>
                                <th>E-mail / البريد الإلكتروني</th>
                                <th>{{$value->email}}</th>
                                  </tr>

                                  <tr>
                                <th>Club Tasks / مهام يمكن القيام بها</th>
                                <th>{{$value->clubtasks}}</th>
                                  </tr>

                                  <tr>
                                <th>Other additional task you can do</th>
                                <th>{{$value->additionaltask}}</th>
                                  </tr>

                                    <tr>
                                <th>Alumni Memebership Types</th>
                                <th>{{$value->Membershiptype}}</th>
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
     

    @endsection

    @section('scripts')
        <!-- Page level plugins -->
            <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
            <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

            <!-- Page level custom scripts -->
         <script src="{{asset('js/demo/datatables-demo.js')}}"></script>


        
       
 



</x-admin-master>
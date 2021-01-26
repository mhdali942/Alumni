<x-admin-master>

    @section('content')




       
  @if(Auth::check() && Auth::user()->role == "admin")


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
                           
                          
                           
                            <th>Educational level</th>
                            <th>Leanring Mode</th>
                            <th>Mobile Number</th>
                            <th>E-mail</th>
                           
                            <th>Memebership</th>
                            <th>Amount</th>
                            <th>Payment Status</th>
                            <th>Created Date</th>
                              <th>Last Update Date</th>
                            
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
                               
                               
                               
                                <th>{{$value->edulevel}}</th>
                                <th>{{$value->leanringmode}}</th>
                                <th>{{$value->MobileNumber}}</th>
                                <th>{{$value->email}}</th>
                                <th>{{$value->Membershiptype}}</th>
                                @if($value->payment_status == 1)
                                <th>MYR {{ $value->amount }}</th>
                                 @else
                                 <th>0</th>

                                 @endif
                                <th>
                                  <th>{{$value->created_at}}</th>
                                   <th>{{$value->updated_at}}</th>

                                    @if($value->payment_status == 1)
                                    <h5> <span class="badge badge-success">Paid Succssfully</span></h5>
                                    @else
                                     <h5> <span class="badge badge-warning">Pending</span></h5>
                                    @endif
                                </th>
                                
                               <th><a href="{{route('alumniForm.edit',$value->id)}}"><button class="btn btn-info">Edit</button></a></th>
                                <th><a href="{{route('alumniForm.show',$value->id)}}"><button class="btn btn-success">Detalis</button></a></th>


                              


                          <th><form method="post" action="{{route('alumniForm.destroy', $value->id)}}" enctype="multipart/form-data">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form></th>
                              
                                  </tr>

                        

                     @endforeach
    

                        </tbody>
                    </table>

                </div>
            
          {{$alumnis->links("pagination::bootstrap-4")}}
            </div>
        </div>

   @elseif(Auth::check() && Auth::user()->role == "user")

   @foreach($alumnis as  $value)
         <div class="card shadow mb-4">
             <div class="navbaralumni">
                      <a href="{{url('admin')}}">Dashboard</a>
                        <a href="{{route('alumniForm.edit',$value->id)}}">Edit Previous Submission</a>
                         <a href="{{route('alumniForm.contact-us')}}">Contact Us</a>

                       
                       <a href="{{route('alumniForm.upgrade',$value->id)}}"> <button class="btn btn-danger">Monthly Payment</button></a>
                           
                      
                      
                    </div>
            <div class="row">
               
            </div>
            <div class="card-body">
                <div class="table-responsive">
                   

                  <!--     <a href="{{route('alumniForm.edit',$value->id)}}"><div class="col-md-4" style="margin-bottom: 10px;"><button class="btn btn-primary">Edit Your form </button></a><br></th></div> -->
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
                                <th>Other additional task you can do / مهام أخرى يمكن القيام بها </th>
                                <th>{{$value->additionaltask}}</th>
                                  </tr>

                                    <tr>
                                <th>Alumni Memebership Types / نوع عضوية الخريح </th>
                                <th>{{$value->Membershiptype}}</th>
                                  </tr>

                                  <tr>
                                <th>Monthly Payment / آلية الدفع الشهري  </th>
                                <th>{{$value->paymenttype}}</th>
                                  </tr>

                                   <tr>
                                    <th>Amount / المبلغ </th>
                                    <th>
                                     @if($value->payment_status == 1)
                                MYR {{ $value->amount }}
                                 @else
                                  MYR {{ $value->amount }}

                                 @endif
                                </th>
                                  </tr>

                                  <tr> 
                                       <th>Payment Status / حالة الدفع </th>
                                       <th>
                                    @if($value->payment_status == 1)
                                    <h5> <span class="badge badge-success">Paid Succssfully</span></h5>
                                    @else
                                     <h5> <span class="badge badge-warning">Pending</span></h5>
                                    @endif
                                </th>
                              </tr>


                                  <tr>
                                <th>Created Date / تاريخ إنشاء الاستمارة  </th>
                                <th>{{$value->created_at}}</th>
                                  </tr>
                                  <tr>
                                <th>Last Update / آخر تعديل   </th>
                                <th>{{$value->updated_at}}</th>
                                  </tr>
                                
                                <tr>
                                  <th>Request upgrade- طلب  تغير عضوية </th>
                                  <th>
                   

                   <a href="{{route('alumniForm.upgradeRequestt',$value->id)}}"> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#request-upgrade">Upgrade</button></a>
                  
                     </th>
                 
                                </tr>



    

                        </tbody>
                    </table>





                </div>
                            {{$alumnis->links("pagination::bootstrap-4")}}

              
            </div>
        </div>

      @endforeach 

        
   

    @endsection

 @endif
   
    @section('scripts')
        <!-- Page level plugins -->
            <script src="{{asset('vendor/datatables/jquery.dataTables.js')}}"></script>
            <script src="{{asset('vendor/datatables/dataTables.bootstrap4.js')}}"></script>

            <!-- Page level custom scripts -->
<!--          <script src="{{asset('js/demo/datatables-demo.js')}}"></script>
 -->  @endsection
 
        


</x-admin-master>
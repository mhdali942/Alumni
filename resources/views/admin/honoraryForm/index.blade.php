<x-admin-master>

    @section('content')

<!-- <p><a href="{{url('admin')}}">Dashboard</a> / <a href="{{url('admin/alumniForms/create')}}">  Al-Madinah International University Cooperative Form / استمارة  التعاونية لنادي الخريجين في جامعة المدينة العالمية  </a> </p>
      <hr>
 -->
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
                            <th>Gender</th>
                            
                           
                            <th>Educational level</th>
                            
                            <th>Mobile Number</th>
                            <th>E-mail</th>
                           
                            <th>Memebership Type</th>
                            <th>Amount</th>
                            <th>Payment Status</th>
                            <th>Created Date</th>
                            <th>Last Update Date</th>
                            


                        </tr>
                        </thead>
                        <tfoot>
                      
                        </tfoot>
                        <tbody>

                    @foreach($honoraries as  $value)


                                <tr>
                                <th>{{$loop->iteration}}</th>
                                <th>{{$value->fullname}}</th>
                                <th>{{$value->nationality}}</th>
                                <th>{{$value->gender}}</th>
                                
                                <th>{{$value->edulevel}}</th>
                                <th>{{$value->MobileNumber}}</th>
                                <th>{{$value->email}}</th>
                                <th>{{$value->Membershiptype}}</th>
                                <th>{{$value->created_at}}</th>
                                <th>{{$value->updated_at}}</th>
                                
                                <th>
                                     @if($value->payment_status == 1)
                            {{ $value->amount }}
                                 @else
                                 0

                                 @endif
                               </th>
                                <th>
                                   @if($value->payment_status == 1)
                                    <h5> <span class="badge badge-success">Paid Succssfully</span></h5>
                                    @else
                                     <h5> <span class="badge badge-warning">Pending</span></h5>
                                    @endif
                                </th>

                              
                                
                                <th><a href="{{route('honoraryForm.edit', $value->id)}}"><button class="btn btn-primary">Edit</button></a></th>

                                <th><a href="{{route('honoraryForm.show',$value->id)}}"><button class="btn btn-success">Detalis</button></a></th>

                                 <th><form method="post" action="{{route('honoraryForm.destroy', $value->id)}}" enctype="multipart/form-data">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form></th>
                              
                                  </tr>
                          
                             
                        

                     @endforeach
    

                        </tbody>
                    </table>

                </div>
            
          {{$honoraries->links("pagination::bootstrap-4")}}
            </div>
        </div>
            @elseif(Auth::check() && Auth::user()->role == "user")
 @foreach($honoraries as  $value)
                               <div class="navbarhonorary">
                      <a href="{{url('admin')}}">Dashboard</a>
                        <a href="{{route('honoraryForm.edit', $value->id)}}">Edit Previous Submission</a>
                         <a href="{{route('honoraryForm.contact-us')}}">Contact Us</a>

                       
                       <a href="{{route('honoraryForm.upgrade', $value->id)}}"> <button class="btn btn-danger">Monthly Payments</button></a>
                       
                      
                    </div>
            <div class="card-body">
                <div class="table-responsive">

                     

                </div>
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
                                <th>IC NO /Passport NO. / الرقم المرجعي</th>
                                <th>{{$value->IcNo}}</th>
                                  </tr>

                                    <tr>
                                <th>E-mail / البريد الإلكتروني</th>
                                <th>{{$value->email}}</th>
                                  </tr>

                                   <tr>
                                <th>Educational level /المرحلة اللتي تخرجت منها</th>
                                <th>{{$value->edulevel}}</th>
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
                                <th>Cooperative Memebership Types / نوع عضوية الخريح </th>
                                <th>{{$value->Membershiptype}}</th>
                                  </tr>

                                  <tr>
                                <th>Monthly Payment / آلية الدفع الشهري   </th>
                                <th>{{$value->paymenttype}}</th>
                                  </tr>



                                   <tr>
                                    
                                    <th>Amount / المبلغ </th>
                                    <th>
                                     @if($value->payment_status == 1)
                                {{ $value->amount }}
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
                   

                   <a href="{{route('honoraryForm.upgradeRequestt',$value->id)}}"> <button type="button" class="btn btn-primary" data-toggle="modal">Upgrade</button></a>
                  
                     </th>
                 
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
            <script src="{{asset('vendor/datatables/jquery.dataTables.js')}}"></script>
            <script src="{{asset('vendor/datatables/dataTables.bootstrap4.js')}}"></script>

            <!-- Page level custom scripts -->
     <!--     <script src="{{asset('js/demo/datatables-demo.js')}}"></script> -->
  @endsection
 
        
       
 



</x-admin-master>
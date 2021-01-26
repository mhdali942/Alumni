<x-admin-master>

    @section('content')

<!-- 
      <p><a href="{{url('admin')}}">Dashboard</a> / <a href="{{url('admin/lastyear')}}">Last Year Records List / قائمة  طلاب السنة الأخيرة  </a></p>
      <hr> -->
          @if(Auth::check() && Auth::user()->role == "admin")


        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Last Year Records List / قائمة  طلاب السنة الأخيرة  </h6><hr>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>FullName</th>
                            <th>Nationality</th>
                          
                            <th>Ref NO.</th>
                            <th>Faculty</th>
                            <th>Educational level</th>
                          
                            <th>Mobile Number</th>
                            <th>E-mail</th>
                            <th>Memebership Type</th>
                            <th>Amount</th>
                            <th>Payment Status</th>
                            
                        
                           
                         

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
                               
                                <th>{{$lasyear->refrenceNumber}}</th>
                                <th>{{$lasyear->faculty}}</th>
                                <th>{{$lasyear->edulevel}}</th>
                              
                                <th>{{$lasyear->MobileNumber}}</th>
                                <th>{{$lasyear->email}}</th>
                               
                                 <th>{{$lasyear->Membershiptype}}</th>

                             
                                @if($lasyear->payment_status == 1)
                                <th> MYR {{ $lasyear->amount }}</th>
                                 @else
                                 <th>0</th>

                                 @endif

                                <th>

                                    @if($lasyear->payment_status == 1)
                                    <h5> <span class="badge badge-success">Paid Succssfully</span></h5>
                                    @else
                                     <h5> <span class="badge badge-warning">Pending</span></h5>
                                    @endif
                                </th>
                                
                                  
                                <th><a href="{{route('lastyear.edit',$lasyear->id)}}"><button class="btn btn-info">Edit</button></a></th>
                                <th><a href="{{route('lastyear.show',$lasyear->id)}}"><button class="btn btn-success">Detalis</button></a></th>

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

                   @elseif(Auth::check() && Auth::user()->role == "user")
                       @foreach( $lastyears as $lastyear )


                      <div class="card shadow mb-4">
            
                                     <div class="navbarlastyear">
                            <a href="{{url('admin')}}">Dashboard</a>
                              <a href="{{route('lastyear.edit',$lastyear->id)}}">Edit Previous Submission</a>
                                                       <a href="{{route('lastyear.contact-us')}}">Contact Us</a>


                             
                             <a href="{{route('lastyear.upgrade',$lastyear->id)}}"> <button class="btn btn-danger">Monthly Payment</button></a>
                             
                            
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
                                <th>Full Name -الاسم الكامل </th>
                                <th>{{$lastyear->fullname}}</th>
                                  </tr>


                                   <tr>
                                <th>Nationality -الجنسية</th>
                                <th>{{$lastyear->nationality}}</th>
                                  </tr>

                                   <tr>
                                <th>Gender -الجنس</th>
                                <th>{{$lastyear->gender}}</th>
                                  </tr>

                                   <tr>
                                <th>Refrence NO. - الرقم المرجعي</th>
                                <th>{{$lastyear->refrenceNumber}}</th>
                                  </tr>

                                   <tr>
                                <th>Faculty - الكلية</th>
                                <th>{{$lastyear->faculty}}</th>
                                  </tr>

                                   <tr>
                                <th>Educational level - المرحلة اللتي تخرجت منها</th>
                                <th>{{$lastyear->edulevel}}</th>
                                  </tr>

                                   <tr>
                                <th>Leanring mode - نمط التعليم</th>
                                <th>{{$lastyear->leanringmode}}</th>
                                  </tr>

                                   <tr>
                                <th>Subspecialty - التخصص الدقيق</th>
                                <th>{{$lastyear->Subspecialty}}</th>
                                  </tr>

                                   <tr>
                                <th>Current Address -العنوان حالي</th>
                                <th>{{$lastyear->currentaddress}}</th>
                                  </tr>

                                   <tr>
                                <th>Current Work - العمل الحالي</th>
                                <th>{{$lastyear->Currentwork}}</th>
                                  </tr>

                                   <tr>
                                <th>Current Position - المنصب الحالي</th>
                                <th>{{$lastyear->CurrentPosition}}</th>
                                  </tr>

                                   <tr>
                                <th>Current work address - عنوان العمل الحالي</th>
                                <th>{{$lastyear->Currentworkaddress}}</th>
                                  </tr>


                                   <tr>
                                <th>Scientific literature - النتاج العلمي</th>
                                <th>{{$lastyear->Scientificliterature}}</th>
                                  </tr>

                                   <tr>
                                <th>Community posts - المشاركات المجتمعية</th>
                                <th>{{$lastyear->Communityposts}}</th>
                                  </tr>

                                   <tr>
                                <th>Other achievements - اإنجازات أخرى</th>
                                <th>{{$lastyear->Otherachievements}}</th>
                                  </tr>

                                   <tr>
                                <th>SkillsAbilities - إنجازات أخرى</th>
                                <th>{{$lastyear->SkillsAbilities}}</th>
                                  </tr>

                                   <tr>
                                <th>Monthly Salary - الراتب الشهري / الدخل</th>
                                <th>{{$lastyear->SalaryFirst}}</th>
                                  </tr>

                                   <tr>
                                <th>Mobile Number - رقم الجوال</th>
                                <th>{{$lastyear->MobileNumber}}</th>
                                  </tr>

                                   <tr>
                                <th>Landline Number - الهاتف الثابت</th>
                                <th>{{$lastyear->LandlineNumber}}</th>
                                  </tr>

                                   <tr>
                                <th>E-mail - البريد الإلكتروني</th>
                                <th>{{$lastyear->email}}</th>
                                  </tr>

                                  <tr>
                                <th>Club Tasks - مهام يمكن القيام بها</th>
                                <th>{{$lastyear->clubtasks}}</th>
                                  </tr>

                                  <tr>
                                <th>Other additional task you can do</th>
                                <th>{{$lastyear->additionaltask}}</th>
                                  </tr>
                                   <tr>
                                <th>General Regulation - اللوائح العامة  </th>
                                <th>Checked</th>
                                  </tr>

                                    <tr>
                                <th> Memebership Types - العضوية  </th>
                                <th>{{$lastyear->Membershiptype}}</th>
                                  </tr>

                                 

                                  <tr>
                                <th>Amount - المبلغ </th>
                                    @if($lastyear->payment_status == 1)
                                <th> MYR {{ $lastyear->amount }}</th>
                                 @else
                                 <th>MYR {{ $lastyear->amount }}</th>

                                 @endif
                                  </tr>

                                <tr> 
                                       <th>Payment Status - حالة االدفع</th>
                                       <th>
                                    @if($lastyear->payment_status == 1)
                                    <h5> <span class="badge badge-success">Paid Succssfully</span></h5>
                                    @else
                                     <h5> <span class="badge badge-warning">Pending</span></h5>
                                    @endif
                                </th>
                              </tr>


                                  <tr>
                                <th>Created Date / تاريخ إنشاء الاستمارة  </th>
                                <th>{{ $lastyear->created_at}}</th>
                                  </tr>
                                  <tr>
                                <th>Last Update / آخر تعديل   </th>
                                <th>{{$lastyear->updated_at}}</th>
                                  </tr>


                            
                  
                            @endforeach

                        </tbody>
                    </table>
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
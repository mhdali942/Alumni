<x-admin-master>

    @section('content')




       
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
                                <th>{{ $lasyear->amount }}</th>
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

   @foreach($lastyears as  $value)
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
                   

               <section class="container mt-5">
   <!--Contact heading-->
   <div class="row">
      <!--Grid column-->
      <div class="col-sm-12 mb-4 col-md-5">
         <!--Form with header-->
         <div class="card border-primary rounded-0">
            <div class="card-header p-0">
               <div class="bg-primary text-white text-center py-2">
                  <h3><i class="fa fa-envelope"></i> Write to us:</h3>
                 
               </div>
            </div>
            <div class="card-body p-3">


                    <form id="contactform" method="POST" action="{{route('lastyear.contact')}}">
                            @csrf
                       
                                <div class="form-group">
                                <label> Your name </label>
                                <div class="input-group">
                                   <input value="{{$value->fullname}}" type="text" name="name" class="form-control" id="name" placeholder="Your name">
                                </div>
                                </div>
                                <div class="form-group">
                                   <label>Your email</label>
                                   <div class="input-group mb-2 mb-sm-0">
                                      <input type="email" value="{{Auth::user()->email}}" name="email" class="form-control" id="email" placeholder="Email">
                                   </div>
                                </div>
                                <div class="form-group">
                                   <label>Subject</label>
                                   <div class="input-group mb-2 mb-sm-0">
                                      <input type="text" name="subject" class="form-control" id="subject" placeholder="Subject">
                                   </div>
                                </div>
                                <div class="form-group">
                                   <label>Message</label>
                                  <textarea class="form-control" name="body" class="form-control" id="body" placeholder="Write your message here .."></textarea>
                                </div>
                                <div class="text-center">
                                   <input type="submit" name="submit" value="submit" class="btn btn-primary btn-block rounded-0 py-2">
                                </div>
                  </form>        
             
           </div>
          
            </div>
         </div>
      <!--Grid column-->
    
      <!--Grid column-->
      <div class="col-sm-12 col-md-7">
         <!--Google map-->
         <div class="mb-4">
           <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15936.164658025975!2d101.7004447!3d3.0836887!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7c281f8eb0016236!2sAl-Madinah%20International%20University!5e0!3m2!1sen!2smy!4v1609359929396!5m2!1sen!2smy" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

         </div>
         <!--Buttons-->
         <div class="row text-center">
            <div class="col-md-6">
               <a class="bg-primary px-3 py-2 rounded text-white mb-2 d-inline-block"><i class="fa fa-map-marker"></i></a>
               <p> Pusat Perdagangan Salak II, No, 18-G, Jalan 2/125e, Taman Desa Petaling, 57100 Kuala Lumpur</p>
            </div>
            <div class="col-md-3">
               <a class="bg-primary px-3 py-2 rounded text-white mb-2 d-inline-block"><i class="fa fa-phone"></i></a>
               <p> Mr.Anas +03-9055 5277 </p>
            </div>
            
            <div class="col-md-3">
               <a class="bg-primary px-3 py-2 rounded text-white mb-2 d-inline-block"><i class="fa fa-envelope"></i></a>
               <p> student.activities@mediu.edu.my</p>
            </div>
         </div>
      </div>
      <!--Grid column-->
      </div>
</section>
                   
                         
                             

                 


                              
                               
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
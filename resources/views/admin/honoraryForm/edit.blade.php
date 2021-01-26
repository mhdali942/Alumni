<x-admin-master>

    @section('content')

 
	<p><h5>The form is for collaborators who are not university students /  الاستمارة خاصة  بالمتعاونين من غير طلبة الجامعة  </h5></p>


        <hr>

								<div class="row justify-content-center mb-5 mt-4">
								

										
								</div>
									<!-- Start Alumni Form -->
								
						<form id="Cooperativeform" method="POST" 
						action="{{route('honoraryController.update',$honoraries->id)}}">
										@csrf
									    @method('PATCH')
									

									
										  <div class="form-row">

										    <div class="form-group col-md-6">
										      <label for="MobileNumber">الهاتف المحمول- Mobile Number </label><label for="required">(* Required)</label>
										      <input type="text" class="form-control" id="MobileNumber" name="MobileNumber" placeholder="Mobile Number"  value="{{ $honoraries->MobileNumber }}">
										    </div>

										    <div class="form-group col-md-6">
										       <label for="Landline Number">الهاتف الثابت- Landline Number</label><label for="required">(* Optional)</label>
										   		 <input type="text" class="form-control" id="LandlineNumber" name="LandlineNumber" placeholder="LandlineNumber"  value="{{$honoraries->LandlineNumber }}">
										    
										    </div>

										  </div>


										    	<div class="form-row">

										    <div class="form-group col-md-6">
										      <label for="email">الايميل- E-mail Address </label><label for="required">(* Required)</label>
										      <input type="text" class="form-control" id="email" name="email" placeholder="E-mail"  value="{{ $honoraries->email}}">
										    </div>

										     <div class="form-group col-md-6">
										       <label for="edulevel">آخر شهادة علمية - Last scientific certificate </label><label for="required">(* Required)</label>
										   
										      <select class="form-control" id="edulevel" name="edulevel">
							                            <option value="{{$honoraries->edulevel}}" >{{$honoraries->edulevel}} </option>
							                            <option value="PhD">PhD</option>
							                            <option value="Degree">Degree</option>
							                             <option value="Master">Master</option>
							                              <option value="diploma">Diploma</option>
							                        </select>
										  </div>

										  </div>


									<!-- Faculty  and Educational level Inputs -->
								
										 

										
										   <div class="form-group">
										      <label for="currentaddress">العنوان الحالي - Current Address  </label><label for="required">(* Required)</label>
										       <input type="text" class="form-control" id="currentaddress" name="currentaddress" placeholder="Current Address"  value="{{ $honoraries->currentaddress }}">
										   </div>


								<!-- End Row -->

								<!-- Current Work and Current Position Inputs -->
								<div class="form-group">
										       <label for="Currentwork">العمل الحالي - Current work </label><label for="required">(* Required)</label>
										   		 <input type="text" class="form-control" id="Currentwork" name="Currentwork" placeholder="Current Work"  value="{{ $honoraries->Currentwork }}">
										    
										    </div>


									 <div class="form-group">
										       <label for="CurrentPosition">المنصب الحالي – Current Position </label><label for="required">(* Required)</label>
										   		 <input type="text" class="form-control" id="CurrentPosition" name="CurrentPosition" placeholder="Current Position"  value="{{ $honoraries->CurrentPosition }}">
										    
										    </div>


								<!-- End Row -->

								<div class="form-group">
										       <label for="Currentworkaddress">عنوان العمل الحالي - Current work address</label><label for="required">(* Optional)</label>
										   		 <input type="text" class="form-control" id="Currentworkaddress" name="Currentworkaddress" placeholder="Current Work Address"  value="{{ $honoraries->Currentworkaddress }}">
										    
										    </div>
								<!-- Current work address and Previous work Inputs -->
								
										     <div class="form-group">
										       <label for="Previouspositions">المناصب السابقة - Previous positions</label><label for="required">(* Optional)</label>
										   		
										   		 <textarea class="form-control" id="Previouspositions" name="Previouspositions" placeholder="Previous Positions"  >{{$honoraries->Previouspositions}}</textarea>
										    
										    </div>

								<!-- End Row -->


								<!-- Previous Positions and Scientific literature Inputs -->
									
										 
										     

										     <div class="form-group">
										       <label for="Scientificliterature">النتاج العلمي- Scientific output</label><label for="required">(* Optional)</label>
										       <textarea class="form-control" id="Scientificliterature" name="Scientificliterature" placeholder="Scientific literature" >{{$honoraries->Scientificliterature}}</textarea>
										    
										    </div>

								

								<!-- End Row -->

								  <div class="form-group">
										       <label for="Communityposts">المشاركات المجتمعية- Community posts </label><label for="required">(* Optional)</label>
											
											<textarea class="form-control" id="Communityposts" name="Communityposts" placeholder="Community posts"  >{{$honoraries->Communityposts}}</textarea>										    
										    </div>




								<!-- Community posts and Other achievements Inputs -->
								<div class="form-group">
										       <label for="Otherachievements">إنجازات أخرى - Other achievements</label><label for="required">(* Optional)</label>
										   		
										    	
										    	<textarea class="form-control" id="Otherachievements" name="Otherachievements" placeholder="Other achievements">{{$honoraries->Otherachievements}}</textarea>
										    </div>

								<!-- End Row -->

								<div class="form-group">
										       <label for="SalaryFirst">Monthly Salary  / الراتب الشهري / الدخل  </label><label for="required">(* Required)</label>
										   		  <select class="form-control" id="SalaryFirst" name="SalaryFirst"  value="{{ old('fullname') }}">
							                            <option value="{{$honoraries->SalaryFirst}}">{{$honoraries->SalaryFirst}}</option>
							                            <option value="From 1 to 1000 RM">From 1 to 1000 RM</option>
							                            <option value="From 1001 to 5000 RM">From 1001 to 5000 RM</option>
							                             <option value="From 5001 to 10000 RM">From 5001 to 10000 RM</option>
							                               <option value="More than 10,000 RM">More than 10,000 RM</option>
							                                 <option value="I do not wish to clarify">لا أرغب في التوضيح- I do not wish to clarify</option>
							                             

							                        </select>
										    
										    </div>

									@if(Auth::check() && Auth::user()->role == "user")

							<div class="form-group" hidden="true">
										    <label for="Memebership">Memberships</label><label for="required">(* Required)</label>
										   	<select class="form-control" id="Membershiptype" name="Membershiptype" value="{{$honoraries->Membershiptype}}">
							                          <option value="{{$honoraries->Membershiptype}}">{{$honoraries->Membershiptype}}</option>
							                          <option id="Honorary Membership" value="Honorary">Honorary Membership</option>
							                          <option  id="Cooperative Membership" value="Cooperative">Cooperative Membership</option>
							                             	
							                             

							                </select>
										    
									 </div>
							
								@else(Auth::check() && Auth::user()->role == "admin")


											<div class="form-group">
										    <label for="Memebership">Memberships</label><label for="required">(* Required)</label>
										   	<select class="form-control" id="Membershiptype" name="Membershiptype" value="{{$honoraries->Membershiptype}}">
							                          <option value="{{$honoraries->Membershiptype}}">{{$honoraries->Membershiptype}}</option>
							                          <option id="Honorary Membership" value="Honorary">Honorary Membership</option>
							                          <option  id="Cooperative Membership" value="Cooperative">Cooperative Membership</option>
							                             	
							                             

							                </select>
										    
									 </div>


								@endif	

									<div class="row">

											<div class="col text-center mb-3">
												<div class="form-group" style="text-align: center;">
											 <button type="submit" class="btn btn-primary">Update Your Form</button>
										</div>

											</div>
										
									</div>

							</form>


  
    @endsection

   

   @section('scripts')
        <!-- Page level plugins -->
         

          

</x-admin-master>


<script>
            	
            $(document).ready(function(){




			   var v = $("#Cooperativeform").validate({
				rules: {
			        fullname: {
			          required: true,
			           minlength: 6
			        },
			        nationality: {
			          required: true,
			           minlength: 4
			        },
			        gender: {
			          required: true,
			           
			        },
			       IcNo: {
			          required: true,
			            minlength:3,
			           
			        },
			        MobileNumber: {
			          required: true,
			           number: true,
			            minlength:10,
			             maxlength: 18,
			            
			        },
			       
			        email: {
			          required: true,
			          
			        },
			         Membershiptype: {
			          required: true,
			          
			        },
			       Regulations: {
			          required: true,
			          
			        },
			        faculty: {
			          required: true,
			          
			        },
			        edulevel: {
			          required: true,
			          
			        },
			        
			      
			        currentaddress: {
			          required: true,
			          minlength:5,
			          maxlength:200
			          
			        },
			       Currentwork: {
			        
			          minlength:5,
			          maxlength:100
			          
			        },
			        CurrentPosition: {
			       
			          minlength:5,
			          maxlength:100
			          
			        },
			        Currentworkaddress: {
			        
			          minlength:5,
			          maxlength:200
			          
			        },
			        Previouswork: {
			        
			          minlength:5,
			          maxlength:100
			          
			        },
			        Previouspositions: {
			        
			          minlength:5,
			          maxlength:200
			          
			        },
			       Scientificliterature: {
			         
			          minlength:5,
			          maxlength:200
			          
			        },Communityposts: {
			        
			          minlength:5,
			          maxlength:300
			          
			        },Otherachievements: {
			          
			          minlength:5,
			          maxlength:300
			          
			        },SkillsAbilities: {
			      
			          minlength:5,
			          maxlength:300
			          
			        },SalaryFirst: {
			          required: true,
			       
			          
			        },LandlineNumber: {
			          required: true,
			          minlength:10,
			          maxlength:20
			          
			        },

			        HonoraryMemAmount:{

			        	
      					max:999,
      					min:500
			        },

			         CooperativeMemAmount:{

			        	
      					max:9999999,
      					min:50
			        }

			      },
			      errorElement: "span",
			      errorClass: "help-inline-error",
			    });

		  });


            $(function() {
				    $('#Cooperative_row').hide(); 
				      $('#Honorary_row').hide(); 
				    
				});



            </script>

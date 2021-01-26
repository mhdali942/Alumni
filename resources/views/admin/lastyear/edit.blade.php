<x-admin-master>

    @section('content')


 <p><h5>Form for Last Year Student / استمارة طالب السنة الأخيرة  </h5></p>  		
							<hr>

	

								<div class="row justify-content-center mb-5 mt-4">
								
										
								</div>

									<!-- Start Alumni Form -->
								
								<form id="alumniform" method="POST" action="{{route('lastyear.update',$lastyears->id)}}">
										@csrf
										@method('PATCH')

							
								<!-- mobiles and landline  Inputs -->
										<div class="form-row">

										    <div class="form-group col-md-6">
										      <label for="MobileNumber">الهاتف المحمول- Mobile Number </label><label for="required">(* Required)</label>
										      <input type="text" class="form-control" id="MobileNumber" name="MobileNumber" placeholder="Mobile Number"  value="{{ $lastyears->MobileNumber }}">
										    </div>

										    <div class="form-group col-md-6">
										       <label for="Subspecialty">الهاتف الثابت- Landline Number</label><label for="optional">(* optional)</label>

										   		 <input type="text" class="form-control" id="LandlineNumber" name="LandlineNumber" placeholder="LandlineNumber"  value="{{ $lastyears->LandlineNumber }}">
										    
										    </div>

										  </div>


										  	<!-- End Row -->


										  	<div class="form-row">

										    <div class="form-group col-md-6">
										      <label for="email">الايميل- E-mail Address</label><label for="required">(* Required)</label>
										      <input type="text" class="form-control" id="email" name="email" placeholder="E-mail"  value="{{ $lastyears->email }}">
										    </div>

												    <div class="form-group col-md-6">
												     <label for="faculty">الكلية - Faculty</label>
												      <select class="form-control" id="faculty" name="faculty">
									                            <option selected="{{ $lastyears->faculty }}">{{ $lastyears->faculty }}</option>
									                            <option value="Faculty of Languages">Faculty of Languages</option>
									                            <option value="Faculty of Islamic">Faculty of Islamic Sciences</option>
									                             <option value="Faculty of IT">Faculty of Computer and Information Technology</option>
									                              <option value="Faculty of Eduction">Faculty of Education</option>
									                               <option value="Faculty of Finance">Faculty of Finance & Administrative Sciences</option>
									                                <option value="Centre of Languages">Centre of Preparatory Studies & Languages</option>
									                     </select>
												</div>
										  </div>



									<!-- Faculty  and Educational level Inputs -->
									<div class="form-row">
										 
											
										    <div class="form-group col-md-6">
											      <label for="leanringmode">نوع الدراسة-Mode of study</label><label for="required">(* Required)</label>
											      <select class="form-control" id="leanringmode" name="leanringmode">
											      				  <option selected="{{ $lastyears->leanringmode }}">{{ $lastyears->leanringmode }}</option>
								           					  <option value="On-line">تعليم عن بعد - ONLINE</option>
								                            <option value="On Campus">تعليم مباشر - ON CAMPUS</option>
								                            
								                   </select>
										    </div>

										 <div class="form-group col-md-6">
										       <label for="edulevel">االمرحلة الدراسية - Educational level</label><label for="required">(* Required)</label>
										   
										      <select class="form-control" id="edulevel" name="edulevel" >
							                            <option value="{{ $lastyears->edulevel }}">{{ $lastyears->edulevel}}</option>
							                            <option value="الدكتوراه PhD">الدكتوراه PhD</option>
							                            <option value="الماجستير Masters">الماجستير Masters</option>
							                             <option value="الدبلوم Diploma">الدبلوم Diploma</option>
							                              <option value="الليسانس/ البكالوريوس Bachelor">الليسانس/ البكالوريوس Bachelor</option>
							                               <option value="غير ذلك - Others">غير ذلك - Others</option>
							                        </select>
										  </div>

									</div>

								<!-- End Row -->


								<!-- Faculty  and Educational level Inputs -->
									<div class="form-row">


										    <div class="form-group col-md-6">
										       <label for="Subspecialty">التخصص الدقيق (إن وجد) Subspecialty (if applicable) </label><label for="optional">(* optional)</label>
										   		 <input type="text" class="form-control" id="Subspecialty" name="Subspecialty" placeholder="Subspecialty"  value="{{ $lastyears->Subspecialty}}">
										    
										    </div>




										     <div class="form-group  col-md-6">
												       <label for="SalaryFirst">Monthly Salary  / الراتب الشهري / الدخل  </label>
												   		  <select class="form-control" id="SalaryFirst" name="SalaryFirst" >
									                            <option value="{{ $lastyears->SalaryFirst}}">{{ $lastyears->SalaryFirst}}</option>
									                            <option value="From 1 to 1000 RM">From 1 to 1000 RM</option>
									                            <option value="From 1001 to 5000 RM">From 1001 to 5000 RM</option>
									                             <option value="From 5001 to 10000 RM">From 5001 to 10000 RM</option>
									                               <option value="More than 10,000 RM">More than 10,000 RM</option>
									                                 <option value="I do not wish to clarify">لا أرغب في التوضيح- I do not wish to clarify</option>
									                             

									                        </select>
												    
												    </div>

									</div>


								<!-- End Row -->
										  	
								<!-- Faculty  and Educational level Inputs -->

										    <div class="form-group">
										      <label for="currentaddress">العنوان الحالي - Current Address </label><label for="required">(* Required)</label>
										       <input type="text" class="form-control" id="currentaddress" name="currentaddress" placeholder="Current Address"  value="{{ $lastyears->currentaddress }}">
										   </div>

										    <div class="form-group">
										       <label for="Currentwork">العمل الحالي -  Current work </label>
										   		 <input type="text" class="form-control" id="Currentwork" name="Currentwork" placeholder="Current Work"  value="{{ $lastyears->Currentwork }}">
										    
										    </div>
										       <div class="form-group">
										       <label for="CurrentPosition">المنصب الحالي – Current Position</label><label for="required">(* Required)</label>
										   		 <input type="text" class="form-control" id="CurrentPosition" name="CurrentPosition" placeholder="Current Position"  value="{{ $lastyears->CurrentPosition }}">
										    
										    </div>
										     <div class="form-group">
										       <label for="Currentworkaddress">عنوان العمل الحالي - Current work address</label><label for="optional">(* optional)</label>
										   		 <input type="text" class="form-control" id="Currentworkaddress" name="Currentworkaddress" placeholder="Current Work Address"  
										   		 value="{{ $lastyears->Currentworkaddress }}">
										    
										    </div>
										    

										   

										     <div class="form-group">
										       <label for="Scientificliterature">النتاج العلمي- Scientific output</label>
										   		
										   		 <textarea class="form-control" id="Scientificliterature" name="Scientificliterature" placeholder="Scientific literature"  value="{{ $lastyears->Scientificliterature }}">{{ $lastyears->Scientificliterature }}</textarea>
										    
										    </div>

										     <div class="form-group">
										       <label for="Communityposts">المشاركات المجتمعية- Community posts</label>
										   		
										   		  <textarea class="form-control" id="Communityposts" name="Communityposts" placeholder="Community posts"  value="{{ $lastyears->Communityposts }}">{{ $lastyears->Communityposts }}</textarea>
										    
										    </div>

										     <div class="form-group">
										       <label for="Otherachievements">إنجازات أخرى - Other achievements</label>
										   		
										   		  <textarea class="form-control" id="Otherachievements" name="Otherachievements" placeholder="Other achievements"  value="{{ $lastyears->Otherachievements }}">{{ $lastyears->Otherachievements }}</textarea>
										    
										    </div>

										      <div class="form-group">
										       <label for="Otherachievements">إنجازات أخرى - Other achievements </label>
										   		
										   		  <textarea class="form-control" id="SkillsAbilities" name="SkillsAbilities" 
										   		 placeholder="Skills Abilities" value="{{ $lastyears->SkillsAbilities}}">{{ $lastyears->SkillsAbilities}}</textarea>
										    
										    </div>


										     <div class="form-group">
										      <label for="additionaltask">مهام أخرى يمكنك القيام بها- Other additional tasks you can do </label>
										     
										       <textarea class="form-control" id="additionaltask" name="additionaltask" 
										      placeholder="Additional Task"  value="{{ $lastyears->additionaltask }}">{{ $lastyears->additionaltask }}</textarea>
										    </div>

										  		
										     <div class="form-group">
												    <label for="clubtasks">Club Tasks / مهام  يمكن القيام بها   </label>
												   	<select class="form-control" id="clubtasks" name="clubtasks">
									                           		 <option value="{{ $lastyears->clubtasks }}">{{ $lastyears->clubtasks}}</option>
									                           		 <option value="Club Presidency">Club Presidency </option>
									                            	<option value="Supervisor">Supervisor</option>
									                             	<option value="Field administrative member">Field administrative member</option>
									                               <option value="Counselling">Counselling</option>
									                               <option value="Managing Member">Managing Member</option>
									                               <option value="Pay club subscription only">Pay club subscription only</option>
									                             

									                        </select>
												    
												    </div>

										



									

									<div class="row">

											<div class="col text-center mb-3">
												<div class="form-group" style="text-align: center;">
											 <button type="submit" class="btn btn-primary">Update Form</button>
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




			   var v = $("#alumniform").validate({
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
			        refrenceNumber: {
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
			        termsCondtions: {
			          required: true,
			          
			        },
			        faculty: {
			          required: true,
			          
			        },
			        edulevel: {
			          required: true,
			          
			        },
			        leanringmode: {
			          required: true,
			          
			        },
			       
			        Subspecialty: {
			          required: true,
			           minlength:2,
			          maxlength:25
			          
			        },

			        currentaddress: {
			          required: true,
			          minlength:5,
			          maxlength:200
			          
			        },
			       Currentwork: {
			        
			          minlength:5,
			          maxlength:40
			          
			        },
			        CurrentPosition: {
			       
			          minlength:5,
			          maxlength:40
			          
			        },
			        Currentworkaddress: {
			        
			          minlength:5,
			          maxlength:200
			          
			        },
			        Previouswork: {
			        
			          minlength:5,
			          maxlength:40
			          
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
			          true: true,
			          minlength:10,
			          maxlength:20
			          
			        },
			        bronzeMemAmount:{

			        	
      					max:9999999,
      					min:10
			        }

			      },
			      errorElement: "span",
			      errorClass: "help-inline-error",
			    });


		  }); 

            $(function() {
				    $('#lastyear_memberships').hide(); 
				     	

				    
				});

            </script>

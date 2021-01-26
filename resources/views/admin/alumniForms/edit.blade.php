<x-admin-master>

    @section('content')


 <p><h5> Edit Your Form / تعديل  الاستمارة  </h5></p>
        <hr>

			
								<form id="alumniform" method="POST" action="{{route('alumniForm.update',$alumnis->id)}}">
										@csrf
									    @method('PATCH')
									

							

									<!-- Faculty  and Educational level Inputs -->
									<div class="form-row">
										 
										<div class="form-group col-md-6">
										     <label for="faculty">الكلية - Faculty</label><label for="required">(* Required)</label>
										      <select class="form-control" id="faculty" name="faculty">
							                        <option value="{{$alumnis->faculty}}">{{$alumnis->faculty}}</option>
							                            <option value="Faculty of Languages">Faculty of Languages</option>
							                            <option value="Faculty of Islamic">Faculty of Islamic Sciences</option>
							                             <option value="Faculty of IT">Faculty of Computer and Information Technology</option>
							                              <option value="Faculty of Education">Faculty of Education</option>
							                               <option value="Faculty of Finance">Faculty of Finance & Administrative Sciences</option>
							                                <option value="Centre of Languages">Centre of Preparatory Studies & Languages</option>
							                     </select>
										</div>

										 <div class="form-group col-md-6">
										       <label for="edulevel">االمرحلة التي تخرجت فيها- Educational level</label>
										   
										      <select class="form-control" id="edulevel" name="edulevel" ><label for="required">(* Required)</label>
							                            <option value="{{$alumnis->edulevel}}">{{$alumnis->edulevel}}</option>
							                            <option value="PhD">الدكتوراه PhD</option>
							                            <option value="Masters">الماجستير Masters</option>
							                            <option value="Diploma">الدبلوم Diploma</option>
							                             <option value="Bachelor">الليسانس/ البكالوريوس Bachelor</option>
							                              <option value="Others">غير ذلك - Others</option>
							                        </select>
										  </div>

									</div>

								<!-- End Row -->


								<!-- Faculty  and Educational level Inputs -->
									<div class="form-row">

										    <div class="form-group col-md-6">
											      <label for="leanringmode">نوع الدراسة-Mode of study</label><label for="required">(* Required)</label>
											      <select class="form-control" id="leanringmode" name="leanringmode" >
											      				<option value="{{$alumnis->leanringmode}}">{{$alumnis->leanringmode}}</option>

								           					  <option value="On-line">تعليم مباشر - ON CAMPUS</option>
								                            <option value="On Campus">تعليم عن بعد - ONLINE</option>
								                            
								                   </select>
										    </div>

										    <div class="form-group col-md-6">
										       <label for="Subspecialty">التخصص الدقيق (إن وجد) Subspecialty (if applicable)</label><label for="optional">(* optional)</label>


										   		 <input type="text" class="form-control" id="Subspecialty" name="Subspecialty" placeholder="Subspecialty"  value="{{$alumnis->Subspecialty}}">
										    
										    </div>

									</div>


								<!-- End Row -->


										  	<div class="form-row">

										    <div class="form-group col-md-6">
										      <label for="MobileNumber">الهاتف المحمول- Mobile Number  </label><label for="required">(* Required)</label>
										      <input type="text" class="form-control" id="MobileNumber" name="MobileNumber" placeholder="Mobile Number"  value="{{$alumnis->MobileNumber}}">
										    </div>

										    <div class="form-group col-md-6">
										       <label for="Subspecialty">الهاتف الثابت- Landline Number</label><label for="optional">(* optional)</label>

										   		<input type="text" class="form-control" id="LandlineNumber" name="LandlineNumber" placeholder="LandlineNumber"  value="{{$alumnis->LandlineNumber}}">
										    
										    </div>



										  </div>



										  	<div class="form-row">

										    <div class="form-group col-md-6">
										      <label for="email">الايميل- E-mail Address </label><label for="required">(* Required)</label>
										      <input type="text" class="form-control" id="email" name="email" placeholder="E-mail"  value="{{$alumnis->email}}">
										    </div>

										    <div class="form-group col-md-6">
										    <label for="clubtasks">أعمال ومهام يمكنك القيام بها في نادي الخريجين -Task you can do for the Alumni club </label>
										   	<select class="form-control" id="clubtasks" name="clubtasks">
											      				<option value="{{$alumnis->clubtasks}}">{{$alumnis->clubtasks}}</option>
							                           		 <option value="Club Presidency">رئاسة النادي- Club Presidency </option>
							                            	<option value="Counselling">الاستشارة- Counselling</option>
							                            	<option value="supervisor">شرف إداري- supervisor</option>

							                             	<option value="Managing member">عضو إداري-  Managing member</option>
							                               <option value="Field administrative">عضو إداري ميداني-  Field administrative member</option>
							                               <option value="Financial Support">دعم مادي فقط -  Financial Support Only</option>
							                            
							                             

							                        </select>
										    
										    </div>

										  </div>

										  	
								<!-- Faculty  and Educational level Inputs -->

										 <div class="form-group">
										    <label for="currentaddress">العنوان الحالي - Current Address </label><label for="required">(* Required)</label>
										     <input type="text" class="form-control" id="currentaddress" name="currentaddress" placeholder="Current Address"  value="{{$alumnis->currentaddress}}">
										   </div>

										    <div class="form-group">
										       <label for="Currentwork">العمل الحالي -  Current work  </label><label for="required">(* Required)</label>
										   		 <input type="text" class="form-control" id="Currentwork" name="Currentwork" placeholder="Current Work" value="{{$alumnis->Currentwork}}">
										    
										    </div>
										       <div class="form-group">
										       <label for="CurrentPosition">المنصب الحالي – Current Position</label><label for="required">(* Required)</label>
										   		 <input type="text" class="form-control" id="CurrentPosition" name="CurrentPosition" placeholder="Current Position"  value="{{$alumnis->CurrentPosition}}">
										    
										    </div>
										     <div class="form-group">
										       <label for="Currentworkaddress">عنوان العمل الحالي - Current work address</label><label for="optional">(* optional)</label>

										   		 <input type="text" class="form-control" id="Currentworkaddress" name="Currentworkaddress" placeholder="Current Work Address"  value="{{$alumnis->Currentworkaddress}}">
										    
										    </div>
										  

										  
										     <div class="form-group">
										       <label for="Scientificliterature">النتاج العلمي- Scientific output</label><label for="optional">(* optional)</label>

										           <textarea  class="form-control" id="Scientificliterature"  name="Scientificliterature" placeholder="Scientific literature">{{$alumnis->Scientificliterature}}</textarea>
										   		
										    
										    </div>

										     <div class="form-group">
										       <label for="Communityposts">المشاركات المجتمعية- Community posts</label><label for="optional">(* optional)</label>

										   		  <textarea type="text" class="form-control" id="Communityposts" name="Communityposts" placeholder="Community posts">{{$alumnis->Communityposts}}</textarea>
										    
										    </div>

										     <div class="form-group">
										       <label for="Otherachievements">إنجازات أخرى - Other achievements</label><label for="optional">(* optional)</label>

										   		   <textarea  type="text" class="form-control" id="Otherachievements" name="Otherachievements" placeholder="Other achievements">{{$alumnis->Otherachievements}}</textarea>
										    
										    </div>

										      <div class="form-group">
										       <label for="Skills">المهارات والقدرات - Skills Abilities </label><label for="optional">(* optional)</label>

										   		  <textarea type="text" class="form-control" id="SkillsAbilities" name="SkillsAbilities" 
										   		 placeholder="Skills Abilities" >{{$alumnis->SkillsAbilities}}</textarea>
										    
										    </div>

										    
										    <div class="form-group">
										      <label for="additionaltask">مهام أخرى يمكنك القيام  - Other additional tasks you can do </label>
										      <textarea type="text"  rows="5" cols="30"class="form-control" id="additionaltask" name="additionaltask" 
										      placeholder="Additional Task"  >{{$alumnis->additionaltask}}</textarea>
										      <input type="input" name="upgrade_request" hidden="true" value="null">
										    </div>




										  

									

										    	<div class="form-group">
										       		<label for="SalaryFirst">الراتب الشهري / الدخل -  Income /Monthly Salary</label><label for="required">(* Required)</label>
										   		 		
										   		 	<select class="form-control" id="SalaryFirst" name="SalaryFirst" >
								                            <option value="{{$alumnis->SalaryFirst}}">{{$alumnis->SalaryFirst}}</option>

								                           	 <option value="From 1 to 1000 RM">From 1 to 1000 RM</option>
								                             <option value="From 1001 to 5000 RM">From 1001 to 5000 RM</option>
								                             <option value="From 5001 to 10000 RM">From 5001 to 10000 RM</option>
							                              	 <option value="More than 10,000 RM">More than 10,000 RM</option>
							                                 <option value="I do not wish to clarify">لا أرغب في التوضيح- I do not wish to clarify</option>
							                             

							                        </select>
										    
										   		</div>
								 

									@if(Auth::check() && Auth::user()->role == "user")
									<div class="form-group" hidden="true">
										    <label for="Memebership">Memberships   </label>
										   	
										   	<select class="form-control" id="Membershiptype" name="Membershiptype"  value="{{$alumnis->Memberships}}" >
							                          <option value="{{$alumnis->Membershiptype}}">{{$alumnis->Membershiptype}}</option>
							                          <option id="silver" value="silver">Silver Membership</option>
							                           <option id="golden" value="golden">Golden Membership</option>
							                          <option  id="platinum" value="platinum">Platinum Membership</option>
							                             	
							                             

							                </select>
										    
										</div>




										@else	(Auth::check() && Auth::user()->role == "admin")

										

												<div class="form-group">
										    <label for="Memebership">Memberships   </label>
										   	
										   	<select class="form-control" id="Membershiptype" name="Membershiptype"  value="{{$alumnis->Memberships}}" >
							                          <option value="{{$alumnis->Membershiptype}}">{{$alumnis->Membershiptype}}</option>
							                          <option id="silver" value="silver">Silver Membership</option>
							                           <option id="golden" value="golden">Golden Membership</option>
							                          <option  id="platinum" value="platinum">Platinum Membership</option>
							                             	
							                             

							                </select>
										    
										</div>

										@endif
									

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
		$('.goldenModal').modal();
	});



        	
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
			          maxlength:40
			          
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
			        silverMemAmount:{

			        	
      					max: 499,
      					min:10
			        },

			       GoldenMemAmount:{

			        	
      					max: 500,
      					min:999
			        },

			        PlatinumMemAmount:{

			        	
      					max:9999999,
      					min:1000
			        }

			      },
			      errorElement: "span",
			      errorClass: "help-inline-error",
			    });

		  });

             	$(function() {
				    $('#alumni_memberships').hide(); 
				     
				    $('#Memberships').change(function(){
				        if($('#Memberships').val() == 'silver') {
				           $('#alumni_memberships').show(); 
				          $('#inpsilver').prop( "disabled", false );
				          $('#btnsilver').prop( "disabled",false  );
							
							$('#inpgolden').prop( "disabled", true );
							$('#btngolden').prop( "disabled", true );

				          $('#inpplat').prop( "disabled", true );
				          $('#btnplat').prop( "disabled", true );

				          $('#amountplat').prop( "disabled", true );
				          $('#amountgolden').prop( "disabled", true );
				            $('#amountsilver').prop( "disabled", false );
				       

				        } else if($('#Memberships').val() == 'golden') {
				            	
				           $('#alumni_memberships').show(); 
				          $('#inpsilver').prop( "disabled", true );
				          $('#btnsilver').prop( "disabled", true );

				           $('#inpgolden').prop( "disabled",false );
				          $('#btngolden').prop( "disabled", false );

				          $('#inpplat').prop( "disabled", true );
				          $('#btnplat').prop( "disabled", true );
				          $('#amountplat').prop( "disabled", true );
				          $('#amountsilver').prop( "disabled", true );
				          $('#amountgolden').prop( "disabled", false );
				       

					        }else{

					        	$('#alumni_memberships').show(); 
				          $('#inpsilver').prop( "disabled", true );
				          $('#btnsilver').prop( "disabled", true );

				          $('#inpplat').prop( "disabled", false );
				          $('#btnplat').prop( "disabled", false );

				          $('#inpgolden').prop( "disabled", true );
				          $('#btngolden').prop( "disabled", true );
				          $('#amountgolden').prop( "disabled", true );
				          $('#amountsilver').prop( "disabled", true );
				          $('#amountplat').prop( "disabled", false );
				       
					        } 
					    });
				});

            </script>

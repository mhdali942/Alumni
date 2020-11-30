<x-admin-master>

    @section('content')

<p><a href="{{url('admin')}}">Dashboard</a> / <a href="{{url('admin/alumniForms/create')}}">  Al-Madinah International University Cooperative Form / استمارة  التعاونية لنادي الخريجين في جامعة المدينة العالمية  </a> </p>

        <hr>

	

								<div class="row justify-content-center mb-5 mt-4">
								
										<h3 style="text-align: center;">خاصة  بالمتعاونين من غير طلبة الجامعة  <strong>

				      					<br>The form is for collaborators who are not university students</strong></h3><br><br>
						
								</div>
									<!-- Start Alumni Form -->
								
						<form id="Cooperativeform" method="POST" 
						action="{{route('honoraryController.update',$honoraries->id)}}">
										@csrf
									    @method('PATCH')
									

								<!-- End Row -->

								<!-- full name  and Nationality Inputs -->
								<div class="form-row">

									 <div class="form-group col-md-6">
										      <label for="fullname">Full Name / الاسم الكامل </label>
										      <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Full Name" value="{{ $honoraries->fullname }}">
									 </div>

									<div class="form-group col-md-6">
										      <label for="nationality">Nationality / الجنسية</label>
										      <input type="text" class="form-control" id="nationality" name="nationality" placeholder="Nationality"  value="{{ $honoraries->nationality }}">
									 </div>

								 </div>

									<!-- End Row -->

								 	<!-- Gender  and Refrence NO. Inputs -->
								  <div class="form-row">

										    <div class="form-group col-md-6">
										      <label for="gender">Gender/الجنس</label>
										      <select class="form-control" id="gender" name="gender">

							                         <option value="{{$honoraries->gender}}">{{$honoraries->gender}}</option>
							                            <option value="Male">Male</option>
							                            <option value="Female">Female</option>
							                        </select>
										    </div>

										 

										    <div class="form-group col-md-6">
										      <label for="IcNo">Ic/Passport NO. / رقم الجواز السفر أو الهوية  </label>
										      <input type="text" class="form-control" id="IcNo" name="IcNo" placeholder="Identification.NO"  value="{{ $honoraries->IcNo }}">
										    </div>

									</div>

									<!-- End Row -->

									<!-- Faculty  and Educational level Inputs -->
									<div class="form-row">
										 

										 <div class="form-group col-md-6">
										       <label for="edulevel">Educational level /المرحلة اللتي تخرجت منها </label>
										   
										      <select class="form-control" id="edulevel" name="edulevel">
							                     <option value="{{$honoraries->edulevel}}">{{$honoraries->edulevel}}</option>
							                            <option value="PhD">PhD</option>
							                            <option value="Degree">Degree</option>
							                             <option value="Master">Master</option>
							                              <option value="diploma">Diploma</option>
							                        </select>
										  </div>
										   <div class="form-group col-md-6">
										      <label for="currentaddress">Current Address / العنوان حالي   </label>
										       <input type="text" class="form-control" id="currentaddress" name="currentaddress" placeholder="Current Address"  value=" {{$honoraries->currentaddress}}">
										   </div>

									</div>

								<!-- End Row -->

								<!-- Current Work and Current Position Inputs -->
									<div class="form-row">
										 

										<div class="form-group col-md-6">
										       <label for="Currentwork">Current 	Work / العمل الحالي </label>
										   		 <input type="text" class="form-control" id="Currentwork" name="Currentwork" placeholder="Current Work"  value="{{$honoraries->Currentwork}}">
										    
										    </div>
										       <div class="form-group col-md-6">
										       <label for="CurrentPosition">Current Position / المنصب الحالي  </label>
										   		 <input type="text" class="form-control" id="CurrentPosition" name="CurrentPosition" placeholder="Current Position"   value="{{$honoraries->Currentwork}}">
										    
										    </div>

									</div>

								<!-- End Row -->


								<!-- Current work address and Previous work Inputs -->
									<div class="form-row">
										 
											<div class="form-group col-md-6">
										       <label for="Currentworkaddress">Current work address / عنوان العمل الحالي  </label>
										   		 <input type="text" class="form-control" id="Currentworkaddress" name="Currentworkaddress" placeholder="Current Work Address"  value="{{$honoraries->Currentworkaddress}}">
										    
										    </div>

										     <div class="form-group col-md-6">
										       <label for="Previouswork">Previous Work / العمل السابق </label>
										   		 <input type="text" class="form-control" id="Previouswork" name="Previouswork" placeholder="Previous Work"  value="{{$honoraries->Previouswork}}">
										    
										    </div>

									</div>

								<!-- End Row -->


								<!-- Previous Positions and Scientific literature Inputs -->
									<div class="form-row">
										 
										     <div class="form-group col-md-6">
										       <label for="Previouspositions">Previous Position / المنصب السابق  </label>
										   		 <input type="text" class="form-control" id="Previouspositions" name="Previouspositions" placeholder="Previous Position"  value="{{$honoraries->Previouspositions}}">
										    
										    </div>

										     <div class="form-group col-md-6">
										       <label for="Scientificliterature">Scientific literature / النتاج العلمي  </label>
										   		 <input type="text" class="form-control" id="Scientificliterature" name="Scientificliterature" placeholder="Scientific literature"  value="{{$honoraries->Scientificliterature}}">
										    
										    </div>

									</div>

								<!-- End Row -->


								<!-- Community posts and Other achievements Inputs -->
									<div class="form-row">
										 
										      <div class="form-group col-md-6">
										       <label for="Communityposts">Community posts / المشاركات المجتمعية  </label>
										   		 <input type="text" class="form-control" id="Communityposts" name="Communityposts" placeholder="Community posts"  
										   		 value="{{$honoraries->Communityposts}}">
										    
										    </div>

										     <div class="form-group col-md-6">
										       <label for="Otherachievements">Other achievements / اإنجازات أخرى  </label>
										   		 <input type="text" class="form-control" id="Otherachievements" name="Otherachievements" placeholder="Other achievements"  
										   		 value="{{$honoraries->Otherachievements}}">
										    
										    </div>

									</div>

								<!-- End Row -->

									<!-- Other achievements and Monthly Salary Inputs -->
									<div class="form-row">
										 
										      <div class="form-group col-md-6">
										       <label for="Otherachievements">Other achievements / الإنجازات الأخرى  </label>
										   		 <input type="text" class="form-control" id="SkillsAbilities" name="SkillsAbilities" 
										   		 placeholder="Skills Abilities" value="{{$honoraries->SkillsAbilities}}">
										    
										    </div>

										     <div class="form-group col-md-6">
										       <label for="SalaryFirst">Monthly Salary  / الراتب الشهري / الدخل  </label>
										   		  <select class="form-control" id="SalaryFirst" name="SalaryFirst">
							                            <option value="{{$honoraries->SalaryFirst}}">{{$honoraries->SalaryFirst}}</option>
							                            <option value="From 1 to 1000 RM">From 1 to 1000 RM</option>
							                            <option value="From 1001 to 5000 RM">From 1001 to 5000 RM</option>
							                             <option value="From 5001 to 10000 RM">From 5001 to 10000 RM</option>
							                               <option value="More than 10,000 RM">More than 10,000 RM</option>
							                                 <option value="I do not wish to clarify">لا أرغب في التوضيح- I do not wish to clarify</option>
							                             

							                        </select>
										    
										    </div>

									</div>

								<!-- End Row -->
							
										  	
								<!-- Contact detalis Inputs -->

								
										  <div class="form-row">

										    <div class="form-group col-md-6">
										      <label for="MobileNumber">Mobile Number/ رقم الجوال  </label>
										      <input type="text" class="form-control" id="MobileNumber" name="MobileNumber" placeholder="Mobile Number"  value="{{$honoraries->MobileNumber}}">
										    </div>

										    <div class="form-group col-md-6">
										       <label for="Landline Number">Landline Number / الهاتف الثابت  </label>
										   		 <input type="text" class="form-control" id="LandlineNumber" name="LandlineNumber" placeholder="LandlineNumber"  value="{{$honoraries->LandlineNumber}}">
										    
										    </div>

										  </div>



										  	<div class="form-row">

										    <div class="form-group col-md-6">
										      <label for="email">E-mail / البريد الإلكتروني   </label>
										      <input type="text" class="form-control" id="email" name="email" placeholder="E-mail"  value="{{$honoraries->email}}">
										    </div>

										    <div class="form-group col-md-6">
										    <label for="clubtasks">Club Tasks / مهام  يمكن القيام بها   </label>
										   	<select class="form-control" id="clubtasks" name="clubtasks">
							                           		 <option  value="{{$honoraries->clubtasks}}">{{$honoraries->clubtasks}}</option>
							                           		 <option value="Club Presidency">Club Presidency </option>
							                            	<option value="Supervisor">Supervisor</option>
							                             	<option value="Field administrative member">Field administrative member</option>
							                               <option value="Counselling">Counselling</option>
							                               <option value="Managing Member">Managing Member</option>
							                               <option value="Pay club subscription only">Pay club subscription only</option>
							                             

							                        </select>
										    
										    </div>

										  </div>

										 <div class="form-group">
										     <label for="additionaltask">Other additional task you can do  </label>
										      <input type="text" class="form-control" id="additionaltask" name="additionaltask" 
										      placeholder="Additional Task"  value="{{$honoraries->additionaltask}}"		>
										    </div>

											<div class="container">
												<div class="section-title">
												          <h2> Memebership Types</h2>
												       
												        </div>   


									         <div class="alert alert-success" role="alert">
											 Note: Pay for the first month's subscription / تسديد قيمة اشتراك الشهر الأول  
											</div>       

 
									<div class="form-row mb-3 text-center">

									<div class="form-group col-md-12">
										 <div class="card mb-4 box-shadow">
									          <div class="card-header">
									            <h4 class="my-0 font-weight-normal">Cooperative Membership/ العضوية التعاونية </h4>

									          </div>
									          <div class="card-body">
									                        <small class="text-muted"> Start From - To</small>

									            <h3 class="card-title pricing-card-title">10-499 MYR </h3>
									               <h3 class="card-title pricing-card-title"><strong>Features</strong> </h3>
									            
									            <ul class="list-unstyled mt-3 mb-4">
									              <li><p>1.Its bearer is entitled to enter the university and benefit from its facilities such as the library, and so on</p></li>
									              <li><p>2.Its bearer pays a monthly contribution amount of minimum 50 Malaysian Ringgits, and he can contribute with more than that</p></li>
									              <li><p>3.	Its bearer is invited to attend public events of the university, according to the nature of the event, and the availability of places.</p></li>
									            
									            </ul>

										           <div class="form-check form-check-inline">
												  <input class="form-check-input" type="radio" name="Membershiptype" 
												  value="Honorary Membership" 
												 {{($honoraries->Membershiptype =="Cooperative Membership") ? "checked" : "" }}>
												  <label class="form-check-label" for="inlineRadio1">Select</label>
												</div>

									          </div>
									        </div>

									</div>
									


										</div>


										<div class="form-row mb-3 text-center">

									
									<div class="form-group col-md-12">
										 <div class="card mb-4 box-shadow">
									          <div class="card-header" style="background-color: #c3b253;">
									            <h4 class="my-0 font-weight-normal" > Honorary Membership / العضوية الشرفية الفخرية  </h4>
									          </div>
									          <div class="card-body">
									            <small class="text-muted">From - To</small>
									            <h3 class="card-title pricing-card-title">500 - 999  MYR</h3>

									             <h3 class="card-title pricing-card-title"><strong>Features</strong> </h3>
									            <ul class="list-unstyled mt-3 mb-4" style="text-align: left;">
									              <li><p>1.The honorary membership shall be granted by the university administration to dignitaries, notables, senior government officials, businessmen or famous and influential figures in societies who are other than graduates of the university.</p> </li>
									              <li><p>Invitations will be sent to these honorary personalities to attend the university’s programs, major events and official functions, and be among the distinguished guests, either the member was inside or outside Malaysia.</p> </li>
									              <li><p>2.They are entitled to represent the university in the international functions if not possible for one of the university staff to participate. Also, when a representative from the university is present in such function, the honorary members are invited as well if they are present in the same country, according to the number with which the university is allowed to attend the event.</p> </li>
									              <li><p>3.The university management urges the members of this category to contribute to support the alumni fund</p></li>
									            </ul>

									           		<div class="form-check form-check-inline">
												  <input class="form-check-input" type="radio" name="Membershiptype"  value="Honorary"  {{($honoraries->Membershiptype =="Honorary Membership") ? "checked" : "" }} > 
												  <label class="form-check-label" for="inlineRadio1">Select</label>
													</div>
									          </div>
									        </div>

										</div>


										</div>

								</div>

									<div class="row">
										<div class="col text-center mb-3">
											
											<div class="form-group">
											 <div class="form-check">
												  <input class="form-check-input" type="checkbox" name="Regulations" value="yes" data-toggle="modal" data-target="#RegulationsModel"  value="true"{{ ($honoraries->Regulations =="yes") ? "checked" : "" }} ><br>
												   <label class="form-check-label" for="gridCheck">
												   	Please read the terms and regulations of the Alumni Club /يرجى قراءة اللائحة الأساسية لنادي الخريجين
												      
													 </label>
												 	 
												</div>
											 </div>
										</div>

									</div>
									

									<div class="row">

											<div class="col text-center mb-3">
												<div class="form-group" style="text-align: center;">
											 <button type="submit" class="btn btn-primary">Submit Form</button>
										</div>

											</div>
										
									</div>

							</form>


		

<!-- Modal -->
<div class="modal fade" id="RegulationsModel" tabindex="-1" role="dialog" aria-labelledby="RegulationsModel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document"> 
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="RegulationsModel">General Regulation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <h5 style="color: #c12420; font-weight: bold; margin-left: 10px; text-decoration: underline;">Introduction</h5>
       <p>Certainly strengthening relationships and ties between community members has a great role in building societies and benefiting countries, specifically if those relationships are based on a solid foundation of knowledge and thought.
A big number of local and international students have graduated from Al-Madinah International University in Malaysia. These graduates are the pillars of work, construction and development in their countries and communities, and establishing communication links with them is considered to be very important because it involves the exchange of experiences and benefits, and support of the brother to his Muslim brother. This is a manifestation of the Islamic brotherhood grown in the university campus, and a right the graduate student owes to his university, they received knowledge and qualification for the job market. 
This cultural, social and developmental non-profit club will be so that it involves the university graduates from all faculties. It is under the main management of the club, and includes sub-committees and representatives in each graduate’s country, all under one net-work system. 
</p>

 <h5 style="color: #c12420; font-weight: bold; margin-left: 10px; text-decoration: underline;">Vision</h5>

 <p>Strengthening the bonds of brotherhood among graduates to build countries and serve communities</p>

 <h5 style="color: #c12420; font-weight: bold;margin-left: 10px; text-decoration: underline;">Mission</h5>

 <p>Offering a group of programs and functions for the graduates and their communities, and exchanging benefits among graduates with each other</p>

 <h5 style="color: #c12420; font-weight: bold; margin-left: 10px;  text-decoration: underline;">Objectives</h5>

 <p><ul>
 		<li>To consolidating the affiliation of graduates with the university</li>
 		<li>To strengthen the  relations and ties among graduates by creating a network of communication among them</li>
 		<li>To benefit from the contribution, expertise and experiences of the university graduates to raise the university performance and efficiency and to execute programs and events</li>
 		<li>To enhance the communal partnership of graduates with their communities</li>
 		<li>To establish partnerships with the scientific, cultural, and social clubs, entities, institutions, and associations, locally and internationally</li>
 		<li>To develop the professional and scientific skills of the graduates</li>
 		<li>To strengthen the graduate's relationship with the university students, and enhance cooperation among them</li>

 </ul></p>

<div class="float-right" style="direction: rtl; text-align: right;" >
	
	<h5 style="color: #c12420; font-weight: bold; margin-left: 10px; text-decoration: underline;">مقدمة </h5>
       <p>لا شك أن تقوية العلاقات والروابط بين أفراد المجتمع له دور كبير في بناء المجتمعات ونفع البلدان، وبخاصة إن كانت تلك العلاقات مبنية على أساس متين راسخ من العلم والفكر.
وقد تخرج من جامعة المدينة العالمية في ماليزيا عدد كبير من الطلبة المحليين والدوليين، وهؤلاء الخريجون هم سواعد العمل والبناء والتطوير في بلدانهم ومجتمعاتهم، ويعتبر إنشاء حلقات التواصل معهم أمراً مهماً جداً لما فيه من تبادل الخبرات والمنافع ودعم الأخ لأخيه المسلم، بما له من حق الأخوة الإسلامية التي نشأت في رحاب الجامعة، ولما على الطالب الخريج من الحقوق تجاه جامعته التي كانت سبباً –بعد الله- في تلقيه العلم وتأهّله لسوق العمل.
وسيتم إنشاء هذا النادي الثقافي الاجتماعي التنموي غير الربحي ليضم خريجي الجامعة من جميع الكليات، ويتبع الإدارة الرئيسية للنادي، ويضم لجاناً فرعية وممثلين في كل بلد من بلدان الخريجين، يعملون تحت منظومة عمل واحدة.
 
</p>

 <h5 style="color: #c12420; font-weight: bold; margin-left: 10px; text-decoration: underline;">الرؤية</h5>

 <p>تقوية أواصر الأخوة بين الخريجين لبناء البلدان وخدمة المجتمعات</p>

 <h5 style="color: #c12420; font-weight: bold;margin-left: 10px; text-decoration: underline;">الرسالة</h5>

 <p>تقديم مجموعة من البرامج والفعاليات للخريجين ومجتمعاتهم وتبادل المنافع بين الخريجين</p>

 <h5 style="color: #c12420; font-weight: bold; margin-left: 10px;  text-decoration: underline;">الأهداف</h5>

 <p><ul>
 		<li>عزيز انتماء الخريجين للجامعة</li>
 		<li>وثيق العلاقات والروابط بين الخريجين بإنشاء شبكة اتصال بينهم</li>
 		<li>مساهمة الخريجين في رفع كفاءة الجامعة وأدائها، والاستفادة من خبراتهم وتجاربهم في تنفيذ البرامج والفعاليات</li>
 		<li>عزيز الشراكة المجتمعية للخريجين مع مجتمعاتهم</li>
 		<li>قد الشراكات مع الأندية والكيانات والمؤسسات والجمعيات العلمية والثقافية والاجتماعية داخلياً ودولياً</li>
 		<li>نمية المهارات العلمية والمهنية للخريجين</li>
 		<li>قوية علاقة الخريجين مع طلبة الجامعة، وتعزيز أوجه التعاون والشراكة فيما بينهم</li>

 </ul></p>

  <hr/>
   <div class="alert alert-success" role="alert">
		<p>
			<ul>
				<li>يحصل أعضاء النادي وإدارته على بطاقات العضوية، مع اختلاف أنواع البطاقات بحسب العضويات</li>
				
			</ul>
		</p>  
	</div> 
</div>
</div>

       

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal" >Agree</button>
        
      </div>
    </div>
  </div>

 
  
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

			      },
			      errorElement: "span",
			      errorClass: "help-inline-error",
			    });

		  });

            </script>

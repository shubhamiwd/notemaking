<?php 
/*
Template Name: Emergency.
*/

include '../templates/header.php';
include '../models/emergency-models.php';
?>
	<div class="container" id="checkbox-container">
		<div class="tem_title">
			<h2>Emergency</h2>
		</div>
		<form onclick="">
			<div class="main-section">
			<input type="hidden" name="heading" id="Template_Name1" value="Template Name - Emergency">
        <input type="hidden" name="heading" id="Template_Name2" value="">
		<input type="hidden" name="heading" id="Date_1" value="<?php echo "Form filling date " . date("Y/m/d"); ?>">
        <input type="hidden" name="heading" id="Date_2" value="">
			<div class="mtnegtive">
			<div class="main-sec">
				<div class="main-sec-in">
				<h3>Emergency Appointment</h3>
						<input type="hidden" name="heading" id="" value="">
						<input type="hidden" name="heading" id="" value="----------- Emergency appointment ------------">
						<input type="hidden" name="heading" id="" value="">
					<div class="inputcss">
							<!-- <input type='text' name='Dentist' id="a2" data-fieddata="Dentist" value='Dentist: -->

							<input type='text' name='Nurse' id="a3" data-fieddata="Nurse" value='Nurse: '>
					</div>
				</div>
			</div>
			</div>
			<div class="main-sec">
				<div class="main-sec-in">
					<h3>Presenting Complaint:</h3>
						<input type="hidden" name="heading" id="" value="">
						<input type="hidden" name="heading" id="" value="----------- Presenting Complaint: ------------">
						<input type="hidden" name="heading" id="" value="">
					<div class=""><p><span class="co_sel_teeth"></span></p>
						<ul class="rbtn">
					<li>
						<div data-toggle="modal" data-target="#myModal_1" class="sel_lnk">Select Option<i class="fas fa-external-link-alt"></i></div>
					</li>
						</ul>
					</div>
					<div class="carries">
						<input type="hidden" name="co_sel" id="co_sel" value="">
						<!--<label for="" class="mt20">Caries: <span class="co_sel_teeth"></span></label>-->
					</div>
				</div>
			</div>
			<div class="main-sec">
				<div class="main-sec-in">
					<h3>History of Presenting Complaint: </h3>
						<input type="hidden" name="heading" id="" value="">
						<input type="hidden" name="heading" id="" value="----------- History of Presenting Complaint: ------------">
						<input type="hidden" name="heading" id="" value="">
	
					<div class="inputcss">
						<input type="text" name="med_notes" value="" placeholder="Enter notes here...">
					</div>
				</div>
			</div>
			<div class="main-sec">
				<div class="main-sec-in">
					<h3>Medical HIstory:</h3>	
						<input type="hidden" name="heading" id="" value="">
						<input type="hidden" name="heading" id="" value="----------- Medical HIstory: ------------">
						<input type="hidden" name="heading" id="" value="">
					<div class="txt-lbl">
					
					<ul class="rbtn">
					
						<li>
							<input type='radio' id="mh_1" name='mh1' data-fieddata="Patient" value='Medical HIstory: Fit and well'>
							<label for="mh_1">Fit and well</label>
						</li>
						<li>
							<input type='radio' id="mh_2" name='mh1' data-fieddata="Patient" value='Medical HIstory: No changes'>
							<label for="mh_2">No changes</label>
						</li>
						<li>
							<input type='radio' id="mh_3" name='mh1' data-fieddata="Patient" value='Medical HIstory: Relevant'>
							<label for="mh_3">Relevant</label>
						</li>
					</ul>
					</div>
					<div class="txt-lbl">
					
					<ul class="rbtn">
					
						<li>
							<input type='radio' id="mh_4" name='mh2' data-fieddata="Patient" value='Medical HIstory: No Medication'>
							<label for="mh_4">No Medication</label>
						</li>
						<li>
							<input type='radio' id="mh_5" name='mh2' data-fieddata="Patient" value='Medical HIstory: Medication'>
							<label for="mh_5">Medication</label>
						</li>
					</ul>
					</div>					
					
					<div class="txt-lbl">					
					<ul class="rbtn">
					
						<li>
							<input type='radio' id="mh_6" name='mh3' data-fieddata="Patient" value='Medical HIstory: No allergies'>
							<label for="mh_6">No allergies</label>
						</li>
						<li>
							<input type='radio' id="mh_7" name='mh3' data-fieddata="Patient" value='Medical HIstory: Allergic to penicillin'>
							<label for="mh_7">Allergic to penicillin</label>
						</li>
						
					</ul>
					</div>
					<div class="inputcss">
						<input type="text" name="dental_history" value="" placeholder="Enter notes here...">
					</div>
					
				</div>
			</div>
			
			<div class="main-sec">
				<div class="main-sec-in">
					<h3>Social History:</h3>
						<input type="hidden" name="heading" id="" value="">
						<input type="hidden" name="heading" id="" value="----------- Social History: ------------">
						<input type="hidden" name="heading" id="" value="">
					<div class="txt-lbl">
						<p>Smoking:</p>
						<ul class="rbtn">
							<li>
								<input type='radio' id="sh_1" name='sh1' data-fieddata="Patient" value='Smoking: Never'>
								<label for="sh_1">Never</label>
							</li>
							<li>
								<input type='radio' id="sh_2" name='sh1' data-fieddata="Patient" value='Smoking: Ex-smoker'>
								<label for="sh_2">Ex-smoker</label>
							</li>
							<li>
								<input type='radio' id="sh_3" name='sh1' data-fieddata="Patient" value='Smoking: Daily smoker'>
								<label for="sh_3">Daily smoker</label>
							</li>
							<li>
								<input type='radio' id="sh_4" name='sh1' data-fieddata="Patient" value='Smoking: Occasional smoker'>
								<label for="sh_4">Occasional smoker</label>
							</li>
							<li>
								<input type='radio' id="sh_5" name='sh1' data-fieddata="Patient" value='Smoking: Using vape'>
								<label for="sh_5">Using vape</label>
							</li>
						</ul>
					</div>
					<div class="txt-lbl">
						<p>Alcohol intake:</p>
						<ul class="rbtn">
							<li>
								<input type='radio' id="sh_6" name='sh2' data-fieddata="Patient" value='Alcohol intake: Nil'>
								<label for="sh_6">Nil</label>
							</li>
							<li>
								<input type='radio' id="sh_7" name='sh2' data-fieddata="Patient" value='Alcohol intake: Rarely'>
								<label for="sh_7">Rarely</label>
							</li>
							<li>
								<input type='radio' id="sh_8" name='sh2' data-fieddata="Patient" value='Alcohol intake: <14 units per week'>
								<label for="sh_8"> <14 units per week </label>
							</li>
							<li>
								<input type='radio' id="sh_9" name='sh2' data-fieddata="Patient" value='Alcohol intake: >14 units per week'>
								<label for="sh_9"> >14 units per week</label>
							</li>
						</ul>
					</div>
				</div>
			</div>
			
			<div class="main-sec">
				<div class="main-sec-in">
					<h3>Extra Oral Exam:</h3>	
						<input type="hidden" name="heading" id="" value="">
						<input type="hidden" name="heading" id="" value="----------- Extra Oral Exam: ------------">
						<input type="hidden" name="heading" id="" value="">
					<div class="txt-lbl">
						<p>TMJ:</p>
						<ul class="rbtn">
							<li>
								<input type='radio' id="eoe_1" name='eoe1' data-fieddata="Patient" value='TMJ: Nil'>
								<label for="eoe_1">Nil</label>
							</li>
							<li>
								<input type='radio' id="eoe_2" name='eoe1' data-fieddata="Patient" value='TMJ: Clicking'>
								<label for="eoe_2">Clicking</label>
							</li>
							<li>
								<input type='radio' id="eoe_3" name='eoe1' data-fieddata="Patient" value='TMJ: Pain'>
								<label for="eoe_3">Pain</label>
							</li>
							<li>
								<input type='radio' id="eoe_4" name='eoe1' data-fieddata="Patient" value='TMJ: Deviations'>
								<label for="eoe_4">Deviations</label>
							</li>
							<li>
								<input type='radio' id="eoe_5" name='eoe1' data-fieddata="Patient" value='TMJ: Restricted'>
								<label for="eoe_5">Restricted</label>
							</li>
						</ul>
					</div>
					<div class="txt-lbl">
						<p>Muscles of Mastication:</p>
						<ul class="rbtn">
							<li>
								<input type='radio' id="eoe_6" name='eoe2' data-fieddata="Patient" value='Muscles of Mastication: Nil'>
								<label for="eoe_6">Nil</label>
							</li>
							<li>
								<input type='radio' id="eoe_7" name='eoe2' data-fieddata="Patient" value='Muscles of Mastication: Hypertrophic'>
								<label for="eoe_7">Hypertrophic</label>
							</li>
							<li>
								<input type='radio' id="eoe_8" name='eoe2' data-fieddata="Patient" value='Muscles of Mastication: Tender'>
								<label for="eoe_8">Tender</label>
							</li>
						</ul>
					</div>
					<div class="txt-lbl">
						<p>Lymph nodes:</p>
						<ul class="rbtn">
							<li>
								<input type='radio' id="eoe_9" name='eoe3' data-fieddata="Patient" value='Lymph nodes: Nil'>
								<label for="eoe_9">Nil</label>
							</li>
							<li>
								<input type='radio' id="eoe_10" name='eoe3' data-fieddata="Patient" value='Lymph nodes: Lymphadenopathy submandibular region LHS'>
								<label for="eoe_10">Lymphadenopathy submandibular region LHS</label>
							</li>
							<li>
								<input type='radio' id="eoe_11" name='eoe3' data-fieddata="Patient" value='Lymph nodes: Lymphadenopathy submandibular region RHS'>
								<label for="eoe_11"> Lymphadenopathy submandibular region RHS </label>
							</li>
						</ul>
					</div>
				</div>
			</div>

				<div class="main-sec-in">
					<h3 class="">Intra Oral Exam:</h3>
						<input type="hidden" name="heading" id="" value="">
						<input type="hidden" name="heading" id="" value="----------- Intra Oral Exam: ------------">
						<input type="hidden" name="heading" id="" value="">
					<div class="txt-lbl">
						<p>Soft tissues (Including tongue, palate, buccal mucosa, lingual mucosa, FOM):</p>
						<ul class="rbtn">
							<li>
								<input type='radio' id="ioe_1" name='ioe1' data-fieddata="Patient" value='Soft tissues (Including tongue, palate, buccal mucosa, lingual mucosa, FOM): Nil'>
								<label for="ioe_1">Nil</label>
							</li>
							<li>
								<input type='radio' id="ioe_2" name='ioe1' data-fieddata="Patient" value='Soft tissues (Including tongue, palate, buccal mucosa, lingual mucosa, FOM): Other'>
								<label for="ioe_2">Other</label>
							</li>
						</ul>
					</div>
					<div class="txt-lbl">			
						<p>Caries: <span class="sel_teeth_2"></span></p>
						<ul class="rbtn">
							<li>
								<input type='radio' id="ioe_3" name='ioe2' data-fieddata="Patient" value='Caries: Nil'>
								<label for="ioe_3">Nil</label>
							</li>
							<li>
								<div data-toggle="modal" data-target="#myModal_2" class="sel_lnk">Select Teeth<i class="fas fa-external-link-alt"></i></div>
							</li>
							<div class="carries">
								<input type="hidden" name="caries_teeth" id="select_teeth_2" value="">
								<!--<label for="" class="mt20">Caries: <span class="sel_teeth"></span></label>-->
							</div>	
						</ul>
					</div>
					<div class="txt-lbl">
						<p>Leaking or defective restorations:<span class="sel_teeth_3"></span></p>
						<ul class="rbtn">
							<li>
								<input type='radio' id="ioe_4" name='ioe3' data-fieddata="Patient" value='Leaking or defective restorations: Nil'>
								<label for="ioe_4">Nil</label>
							</li>
							<li>
								<div data-toggle="modal" data-target="#myModal_3" class="sel_lnk">Select Teeth<i class="fas fa-external-link-alt"></i></div>
							</li>
							<div class="carries">
								<input type="hidden" name="leaking_teeth" id="select_teeth_3" value="">
							</div>
						</ul>
					</div>
				</div>
				
				<div class="main-sec">
					<div class="main-sec-in">
						<h3>Radiographs</h3>		
						<div class="txt-lbl">
							<p></p>
							<ul class="rbtn">
								<li>
									<input type='radio' id="rd_1" name='rd1' data-fieddata="Patient" value='Radiographs: Bite wing radiographs recorded to assess for inter-proximal caries, bone loss and other pathology'>
									<label for="rd_1">Bite wing radiographs recorded to assess for inter-proximal caries, bone loss and other pathology</label>
								</li>
								<li>
									<input type='radio' id="rd_2" name='rd1' data-fieddata="Patient" value='Radiographs: Bite wing radiographs not indicated'>
									<label for="rd_2">Bite wing radiographs not indicated</label>
								</li>
								<li>
									<input type='radio' id="rd_3" name='rd1' data-fieddata="Patient" value='Radiographs: Periapical taken to assess pathology, morphology and bone levels'>
									<label for="rd_3">Periapical taken to assess pathology, morphology and bone levels</label>
								</li>
								<li>
									<input type='radio' id="rd_4" name='rd1' data-fieddata="Patient" value='Radiographs: Periapical radiographs not indicated'>
									<label for="rd_4">Periapical radiographs not indicated</label>
								</li>
								
							</ul>
						</div>
					</div>
				</div>
			
			<!--<div class="main-sec-in">
				<h3 class="mb20">Select a file:</h3>
					<div class="inputcss">
						<input type="file" id="myfile" name="myfile">
					</div>
			</div>-->		
			<div class="main-sec">
				<div class="main-sec-in">
					<h3>Special Tests:</h3>
						<input type="hidden" name="heading" id="" value="">
						<input type="hidden" name="heading" id="" value="----------- Special Tests: ------------">
						<input type="hidden" name="heading" id="" value="">
					<div class="txt-lbl">
						<p><span class="spl_tst">Vitality test:</span></p>
						<ul class="rbtn">
							<li>
								<div data-toggle="modal" data-target="#myModal_4" class="sel_lnk">Select Option<i class="fas fa-external-link-alt"></i></div>
							</li>
						</ul>
					</div>
					<div class="carries">
						<input type="hidden" name="spl_tst1" id="spl_test" value="">
						<!--<label for="" class="mt20">Caries: <span class="co_sel_teeth"></span></label>-->
					</div>
				</div>
			</div>
			<div class="main-sec">
				<div class="main-sec-in">
					<h3>Diagnosis:</h3>
						<input type="hidden" name="heading" id="" value="">
						<input type="hidden" name="heading" id="" value="----------- Diagnosis: ------------">
						<input type="hidden" name="heading" id="" value="">
					<div class=""><p><span class="dia"></span></p>
						<ul class="rbtn">
					<li>
						<div data-toggle="modal" data-target="#myModal_5" class="sel_lnk">Select Option<i class="fas fa-external-link-alt"></i></div>
					</li>
						</ul>
					</div>
					<div class="carries">
						<input type="hidden" name="dia_sis1" id="dia_sis" value="">
						<!--<label for="" class="mt20">Caries: <span class="co_sel_teeth"></span></label>-->
					</div>
				</div>
			</div>

			<div class="main-sec">
				<div class="main-sec-in">
				<h3 class="">Discussion:</h3>
					<input type="hidden" name="heading" id="" value="">
						<input type="hidden" name="heading" id="" value="----------- Discussion: ------------">
						<input type="hidden" name="heading" id="" value="">
				<div class="inputcss">
					<input type="text" name="discussion_oral_note" value="" placeholder="Enter notes here...">
				</div>
				</div>
			</div> 
			
						<div class="main-sec">
				<div class="main-sec-in">
				<h3 class="">Treatment Plan:</h3>
					<input type="hidden" name="heading" id="" value="">
						<input type="hidden" name="heading" id="" value="----------- Treatment Plan: ------------">
						<input type="hidden" name="heading" id="" value="">
				<div class="inputcss">
					<input type="text" name="discussion_oral_note" value="" placeholder="Enter notes here...">
				</div>
				</div>
			</div> 
			<div class="main-sec">
				<div class="main-sec-in">
					<h3>Risk Assessment | Recall</h3>
						<input type="hidden" name="heading" id="" value="">
						<input type="hidden" name="heading" id="" value="----------- Risk Assessment | Recall ------------">
						<input type="hidden" name="heading" id="" value="">
					<div class="inputcss">
							<!-- <input type='text' name='Dentist' id="a2" data-fieddata="Dentist" value='Dentist: -->

							<input type='text' name='RAR' id="rar" data-fieddata="Advised to return if symptoms get worse:" value='Advised to return if symptoms get worse: '>
					</div>
					<div class="inputcss">
							<!-- <input type='text' name='Dentist' id="a2" data-fieddata="Dentist" value='Dentist: -->

							<input type='text' name='RAR' id="rar" data-fieddata="Advised patient they will need to return for full checkup" value='Advised patient they will need to return for full checkup: '>
					</div>
				</div>
			</div>
			<div class="txt_cpd"><p>Text Copied</p></div>
		</div>

<?php //} ?>

<!-------End_Model--------->

		<div class="Clipboard_btn">
			<button class='copy cp_cl' onclick="storage_data();">Copy To Clipboard</button>
		</div>
		</form>
		<textarea id='copy' class="display_none"></textarea>
	</div>

<?php include '../templates/footer.php'; ?>


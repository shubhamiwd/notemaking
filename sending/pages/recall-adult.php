<?php 
/*
Template Name: Recall-Adult Dental App.
*/
include '../templates/header.php';
include '../models/recall-adult-models.php';
//include '../database.php';

?>
	<div class="container" id="checkbox-container">
		<div class="tem_title">
			<h2>Recall (adult)</h2>
		</div>
		<form action="" id="myform_recall" method="post">
			<div class="main-section">
			<input type="hidden" name="heading" id="Template_Name1" value="Template Name - Recall adult">
        <input type="hidden" name="heading" id="Template_Name2" value="">
		<input type="hidden" name="heading" id="Date_1" value="<?php echo "Form filling date " . date("Y/m/d"); ?>">
        <input type="hidden" name="heading" id="Date_2" value="">
			<div class="mtnegtive">
			<div class="main-sec">
				<div class="main-sec-in">
				<input type="hidden" name="heading" id="" value="">
						<input type="hidden" name="heading" id="" value="----------- Doctors Detail ------------">
						<input type="hidden" name="heading" id="" value="">
					
					<div class="inputcss">
							<input type='text' name='Dentist' id="a2" data-fieddata="Dentist" value='Dentist: '>

							<input type='text' name='Nurse' id="a3" data-fieddata="Nurse" value='Nurse: '>
							
					</div>
					<div class="txt-lbl"><p>C/O: <span class="co_sel_teeth"></span></p>
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
			</div>
			<div class="main-sec">
				<div class="main-sec-in">
					<h3>Social History:</h3>
					
						<input type="hidden" name="heading" id="" value="">
						<input type="hidden" name="heading" id="" value="----------- Social History ------------">
						<input type="hidden" name="heading" id="" value="">
					
					<div class="txt-lbl"><p>Smoking</p>
					<ul class="rbtn">
						<li>
							<input type='radio' name='mhistory' id="socialh1" data-fieddata="Patient" value='Social History: Never'>
							<label for="socialh1">Never</label>
						</li>
						<li>
							<input type='radio' name='mhistory' id="socialh2" data-fieddata="Patient" value='Social History: Ex Smoker'>
							<label for="socialh2">Ex Smoker</label>
						</li>
						<li>
							<input type='radio' name='mhistory' id="socialh3" data-fieddata="Patient" value='Social History: Daily Smoker'>
							<label for="socialh3">Daily Smoker</label>
						</li>
						<li>
							<input type='radio' name='mhistory' id="socialh4" data-fieddata="Patient" value='Social History: Occasional smoker'>
							<label for="socialh4">Occasional smoker</label>
						</li>
						<li>
							<input type='radio' name='mhistory' id="socialh5" data-fieddata="Patient" value='Social History: Using Vape'>
							<label for="socialh5">Using Vape</label>
						</li>
					</ul></div>
					<div class="txt-lbl"><p>Alcohol intake</p>
					<ul class="rbtn">
						<li>
							<input type='radio' name='Alcohol_intake' id="alcohol_1" data-fieddata="Patient" value='Alcohol intake: Nil'>
							<label for="alcohol_1">Nil</label>
						</li>
						<li>
							<input type='radio' name='Alcohol_intake' id="alcohol_2" data-fieddata="Patient" value='Alcohol intake: Rarely'>
							<label for="alcohol_2">Rarely</label>
						</li>
						<li>
							<input type='radio' name='Alcohol_intake' id="alcohol_3" data-fieddata="Patient" value='Alcohol intake: <14 units per week'>
							<label for="alcohol_3"><14 units per week</label>
						</li>
						<li>
							<input type='radio' name='Alcohol_intake' id="alcohol_4" data-fieddata="Patient" value='Alcohol intake: >14 units per week'>
							<label for="alcohol_4">>14 units per week</label>
						</li>
					</ul></div>
					<div class="inputcss">
					<input type="text" class='required' name="alcohol_notes" value="" placeholder="Enter notes here...">
					</div>
									 
					
				</div>
			</div>
			<div class="main-sec">
				<div class="main-sec-in">
					<h3>Medical History:</h3>
						
						<input type="hidden" name="heading" id="" value="">
						<input type="hidden" name="heading" id="" value="----------- Medical History ------------">
						<input type="hidden" name="heading" id="" value="">
						
					<div class="txt-lbl"><p>Form filled and signed - See section</p>
					<ul class="rbtn">
						<li>
							<input type='radio' id="med_1" name='form_field' data-fieddata="alcohol" value='Form filled and signed - See section: Twice daily with ETB'>
							<label for="med_1">No changes to MH</label>
						</li>
						<li>
							<input type='radio' id="med_2" name='form_field' data-fieddata="alcohol" value='Form filled and signed - See section: Changes to MH, see tab'>
							<label for="med_2">Changes to MH, see tab</label>
						</li>
						<li>
							<input type='radio' id="med_3" name='form_field' data-fieddata="alcohol" value='Form filled and signed - See section: Changes to MH:'>
							<label for="med_3">Changes to MH:</label>
						</li>
					</ul></div>
					<div class="txt-lbl"><p>Special needs:</p>
					<ul class="rbtn">
						<li>
							<input type='radio' id="spl_need_1" name='spl_needs' data-fieddata="alcohol" value='Special needs: Nil'>
							<label for="spl_need_1">Nil</label>
						</li>
						<li>
							<input type='radio' id="spl_need_2" name='spl_needs' data-fieddata="alcohol" value='Special needs: Other'>
							<label for="spl_need_2">Other</label>
						</li>
					</ul>
					
					<div class="inputcss">
						<input type="text" class='required' name="med_notes" value="" placeholder="Enter notes here...">
					</div>
					</div>
				</div>
			
			<div class="main-sec">
				<div class="main-sec-in">
					<h3>Dental History:</h3>

						<input type="hidden" name="heading" id="" value="">
						<input type="hidden" name="heading" id="" value="----------- Dental History ------------">
						<input type="hidden" name="heading" id="" value="">
					
					<div class="txt-lbl"><p>Brushing:</p>
					<ul class="rbtn">
						<li>
							<input type='radio' id="Brushing_1" name='Brushing' data-fieddata="Patient" value='Brushing: Once'>
							<label for="Brushing_1">Once</label>
						</li>
						<li>
							<input type='radio' id="Brushing_1" name='Brushing' data-fieddata="Patient" value='Brushing: Twice'>
							<label for="Brushing_2">Twice</label>
						</li>
						<li>
							<input type='radio' id="Brushing_3" name='Brushing' data-fieddata="Patient" value='Brushing: >2 times'>
							<label for="Brushing_3">>2 times</label>
						</li>
						</ul>
						<ul class="rbtn">
						<p>daily With:</p>
						<li>
							<input type='radio' id="daily_with_1" name='daily_with' data-fieddata="Patient" value='Daily With: ETB'>
							<label for="daily_with_1">ETB</label>
						</li>
						<li>
							<input type='radio' id="daily_with_2" name='daily_with' data-fieddata="Patient" value='Daily With: MTB'>
							<label for="daily_with_2">MTB</label>
						</li>
						<li>
							<input type='radio' id="daily_with_3" name='daily_with' data-fieddata="Patient" value='Daily With: Both ETB+MTB'>
							<label for="daily_with_3">Both ETB+MTB</label>
						</li>
					</ul>
					</div>		
					
					<div class="txt-lbl">			
					<p>Toothpaste:</p>
					<ul class="rbtn">
						<li>
							<input type='radio' id="Toothpaste_1" name='Toothpaste' data-fieddata="Patient" value='Toothpaste: Using at least 1450ppm fluoride toothpaste'>
							<label for="Toothpaste_1">Using at least 1450ppm fluoride toothpaste</label>
						</li>
						<li>
							<input type='radio' id="Toothpaste_2" name='Toothpaste' data-fieddata="Patient" value='Toothpaste: Patient unsure of fluoride content of toothpaste'>
							<label for="Toothpaste_2">Patient unsure of fluoride content of toothpaste</label>
						</li>
						<li>
							<input type='radio' id="Toothpaste_3" name='Toothpaste' data-fieddata="Patient" value='Toothpaste: Using fluoride free toothpaste'>
							<label for="Toothpaste_3">Using fluoride free toothpaste</label>
						</li>
					
					</div>
					
					<div class="txt-lbl">			
					<p>Interdental cleaning:</p>
					<ul class="rbtn">
						<li>
							<input type='radio' id="inter_clean_1" name='inter_clean' data-fieddata="Patient" value='Interdental cleaning: Nil'>
							<label for="inter_clean_1">Nil</label>
						</li>
						<li>
							<input type='radio' id="inter_clean_2" name='inter_clean' data-fieddata="Patient" value='Interdental cleaning: Floss'>
							<label for="inter_clean_2">Floss</label>
						</li>
						<li>
							<input type='radio' id="inter_clean_3" name='inter_clean' data-fieddata="Patient" value='Interdental cleaning: Tepe'>
							<label for="inter_clean_3">Tepe</label>
						</li>
						<li>
							<input type='radio' id="inter_clean_4" name='inter_clean' data-fieddata="Patient" value='Interdental cleaning: Floss and tepe'>
							<label for="inter_clean_4">Floss and tepe</label>
						</li>
						<li>
							<input type='radio' id="inter_clean_5" name='inter_clean' data-fieddata="Patient" value='Interdental cleaning: Other'>
							<label for="inter_clean_5">Other</label>
						</li>
						</ul>
					</div>
					
					<div class="txt-lbl">			
					<p>Mouthwash:</p>
					<ul class="rbtn">
						<li>
							<input type='radio' id="Mouthwash_1" name='Mouthwash' data-fieddata="Patient" value='Mouthwash: Nil'>
							<label for="Mouthwash_1">Nil</label>
						</li>
						<li>
							<input type='radio' id="Mouthwash_2" name='Mouthwash' data-fieddata="Patient" value='Mouthwash: Occasionally'>
							<label for="Mouthwash_2">Occasionally</label>
						</li>
						<li>
							<input type='radio' id="Mouthwash_3" name='Mouthwash' data-fieddata="Patient" value='Mouthwash: Regularly'>
							<label for="Mouthwash_3">Regularly</label>
						</li>
                 		</ul>
					</div>
					
					<div class="txt-lbl">			
					<p>Sugars in Diet:</p>
					<ul class="rbtn">
						<li>
							<input type='radio' id="sugar_diet_1" name='sugar_diet' data-fieddata="Patient" value='Sugars in Diet: Low'>
							<label for="sugar_diet_1">Low</label>
						</li>
						<li>
							<input type='radio' id="sugar_diet_2" name='sugar_diet' data-fieddata="Patient" value='Sugars in Diet: Mod'>
							<label for="sugar_diet_2">Mod</label>
						</li>
						<li>
							<input type='radio' id="sugar_diet_3" name='sugar_diet' data-fieddata="Patient" value='Sugars in Diet: High'>
							<label for="sugar_diet_3">High</label>
						</li>
                 		</ul>
					</div>
					
					<div class="txt-lbl">			
					<p>Acids in Diet:</p>
					<ul class="rbtn">
						<li>
							<input type='radio' id="acids_diet_1" name='acids_diet' data-fieddata="Patient" value='Acids in Diet: Low'>
							<label for="acids_diet_1">Low</label>
						</li>
						<li>
							<input type='radio' id="acids_diet_2" name='acids_diet' data-fieddata="Patient" value='Acids in Diet: Mod'>
							<label for="acids_diet_2">Mod</label>
						</li>
						<li>
							<input type='radio' id="acids_diet_3" name='acids_diet' data-fieddata="Patient" value='Acids in Diet: High'>
							<label for="acids_diet_3">High</label>
						</li>
                 		</ul>
					</div>
										
					<div class="inputcss">
						<input type="text" class='required' name="dental_history" value="" placeholder="Enter notes here...">
					</div>
					
				</div>
			</div>
			<div class="main-sec">
				<div class="main-sec-in">
			
				<h3>Extra Oral Exam:</h3>	

						<input type="hidden" name="heading" id="" value="">
						<input type="hidden" name="heading" id="" value="----------- Extra Oral Exam ------------">
						<input type="hidden" name="heading" id="" value="">
				
				<div class="txt-lbl"><p>LN, MOM, SG, TMJ:</p>
				<ul class="rbtn">
				
				<li>
					<input type='radio' id="extra_oral_1" name='extra_oral' data-fieddata="Patient" value='LN, MOM, SG, TMJ: Nil'>
					<label for="extra_oral_1">Nil</label>
				</li>
				<li>
					<input type='radio' id="extra_oral_2" name='extra_oral' data-fieddata="Patient" value='LN, MOM, SG, TMJ: Other'>
					<label for="extra_oral_2">Other</label>
				</li>
				</ul>
					
				</div>
				</div>
			</div>
			</div>
			<div class="main-sec">
				<div class="main-sec-in">
				<h3 class="">Intra Oral Exam:</h3>	

						<input type="hidden" name="heading" id="" value="">
						<input type="hidden" name="heading" id="" value="----------- Intra Oral Exam ------------">
						<input type="hidden" name="heading" id="" value="">
					
				<div class="txt-lbl"><p>Soft tissues (Including tongue, palate, buccal mucosa, lingual mucosa, FOM):</p>
				<ul class="rbtn">
				<li>
					<input type='radio' id="intra_exam_1" name='intra_exam' data-fieddata="Patient" value='Soft tissues (Including tongue, palate, buccal mucosa, lingual mucosa, FOM): Nil'>
					<label for="intra_exam_1">Nil</label>
				</li>
				<li>
					<input type='radio' id="intra_exam_2" name='intra_exam' data-fieddata="Patient" value='Soft tissues (Including tongue, palate, buccal mucosa, lingual mucosa, FOM): Other'>
					<label for="intra_exam_2">Other</label>
				</li>	
				</ul>
					
				<div class="inputcss">
					<input type="text" name="inter_oral_note" class='required' value="" placeholder="Enter notes here...">
				</div>
					
				</div>
				</div>
			</div>
			<div class="main-sec">
				<div class="main-sec-in">
				<h3 class="">Dental Exam:</h3>	
						
						<input type="hidden" name="heading" id="" value="">
						<input type="hidden" name="heading" id="" value="----------- Dental Exam ------------">
						<input type="hidden" name="heading" id="" value="">				
				
				<div class="txt-lbl"><p>BPE recorded, includes highest score of:</p>
				<ul class="rbtn">
				<li>
					<input type='radio' id="dental_exam_1" name='dental_exam' data-fieddata="Patient" value='BPE recorded, includes highest score of: 0'>
					<label for="dental_exam_1">0</label>
				</li>
				<li>
					<input type='radio' id="dental_exam_2" name='dental_exam' data-fieddata="Patient" value='BPE recorded, includes highest score of: 1'>
					<label for="dental_exam_2">1</label>
				</li>
				<li>
					<input type='radio' id="dental_exam_3" name='dental_exam' data-fieddata="Patient" value='BPE recorded, includes highest score of: 2'>
					<label for="dental_exam_3">2</label>
				</li>
				<li>
					<input type='radio' id="dental_exam_4" name='dental_exam' data-fieddata="Patient" value='BPE recorded, includes highest score of: 3'>
					<label for="dental_exam_4">3</label>
				</li>
				<li>
					<input type='radio' id="dental_exam_5" name='dental_exam' data-fieddata="Patient" value='BPE recorded, includes highest score of: 4'>
					<label for="dental_exam_5">4</label>
				</li>	
				</ul>
				</div>
				
				<div class="txt-lbl">			
					<p>Oral Hygiene:</p>
					<ul class="rbtn">
						<li>
							<input type='radio' id="oral_hygiene_1" name='oral_hygiene' data-fieddata="Patient" value='Oral Hygiene: Good'>
							<label for="oral_hygiene_1">Good</label>
						</li>
						<li>
							<input type='radio' id="oral_hygiene_2" name='oral_hygiene' data-fieddata="Patient" value='Oral Hygiene: Mod'>
							<label for="oral_hygiene_2">Mod</label>
						</li>
						<li>
							<input type='radio' id="oral_hygiene_3" name='oral_hygiene' data-fieddata="Patient" value='Oral Hygiene: Poor'>
							<label for="oral_hygiene_3">Poor</label>
						</li>
                 		</ul>
					</div>
					
					<div class="txt-lbl">			
					<p>Caries: <span class="sel_teeth_2"></span></p>
					<ul class="rbtn">
						<li>
							<input type='radio' id="caries_1" name='caries' data-fieddata="Patient" value='Caries: Nil'>
							<label for="caries_1">Nil</label>
						</li>
						<li>
							<div data-toggle="modal" data-target="#myModal_2" class="sel_lnk">Select Teeth<i class="fas fa-external-link-alt"></i></div>
						</li>
					<li>
					<div class="carries">
						<input type="hidden" name="caries_teeth" id="select_teeth_2" value="">
						<!--<label for="" class="mt20">Caries: <span class="sel_teeth"></span></label>-->
					</div>	
                 	</ul>

					</div>
					
					<div class="txt-lbl">			
					<p>Leaking or defective restorations: <span class="sel_teeth_3"></span>
					<ul class="rbtn">
						<li>
							<input type='radio' id="restorations_1" name='restorations' data-fieddata="Patient" value='Leaking or defective restorations: Nil'>
							<label for="restorations_1">Nil</label>
						</li>
						<li>
							<div data-toggle="modal" data-target="#myModal_3" class="sel_lnk">Select Teeth<i class="fas fa-external-link-alt"></i></div>
						</li>
				
					<div class="carries">
						<!--<input type="hidden" name="leaking_teeth" id="select_teeth_2" value="">
						<label for="" class="mt20">Caries: <span class="sel_teeth"></span></label>-->
						<input type="hidden" name="leaking_teeth" id="select_teeth_3" value="">
					</div>	
                 	</ul>
				</div>

				<div class="txt-lbl">			
					<p>TSL: </p>
					<ul class="rbtn">
						<li>
							<input type='radio' id="tls_1" name='tls' data-fieddata="Patient" value='TSL: Nil'>
							<label for="tls_1">Nil</label>
						</li>
						<li>
							<input type='radio' id="tls_2" name='tls' data-fieddata="Patient" value='TSL: Present'>
							<label for="tls_2">Present</label>
						</li>
                 	</ul>
				</div>

				<div class="txt-lbl">			
					<p>Mobility: <span class="sel_teeth_4"></span>
					<ul class="rbtn">
						<li>
							<input type='radio' id="Mobility" name='Mobility' data-fieddata="Patient" value='Mobility: Nil'>
							<label for="Mobility">Nil</label>
						</li>
						<li>
							<div data-toggle="modal" data-target="#myModal_4" class="sel_lnk">Select Teeth<i class="fas fa-external-link-alt"></i></div>
						</li>
				
					<div class="carries">
						<!--<input type="hidden" name="leaking_teeth" id="select_teeth_2" value="">
						<label for="" class="mt20">Caries: <span class="sel_teeth"></span></label>-->
						<input type="hidden" name="Mobility" id="select_teeth_4" value="">
					</div>	
                 	</ul>
				<div class="inputcss">
					<input type="text" name="inter_oral_note" class='required' value="" placeholder="Enter notes here...">
				</div>
				</div>
				</div>
				</div>
				
				<div class="main-sec">
				<div class="main-sec-in">
				<h3 class="">Radiographs:</h3>
					
					<input type="hidden" name="heading" id="" value="">
					<input type="hidden" name="heading" id="" value="----------- Radiographs ------------">
					<input type="hidden" name="heading" id="" value="">
					
				<div class="txt-lbl"><p>BWs:</p>
				<ul class="rbtn">
				<li>
					<input type='radio' id="Radiographs_1" name='Radiographs' data-fieddata="Patient" value='BWs: Not indicated today'>
					<label for="Radiographs_1">Not indicated today</label>
				</li>
				<li>
					<input type='radio' id="Radiographs_2" name='Radiographs' data-fieddata="Patient" value='BWs: Taken in house'>
					<label for="Radiographs_2">Taken in house</label>
				</li>	
				</ul>
				<div class="inputcss">
					<input type="text" name="radio_oral_note" class='required' value="" placeholder="Enter notes here...">
				</div>
				</div>
				</div>
				</div>
			
			<div class="main-sec">
				<div class="main-sec-in">
				<h3 class="">Diagnosis:</h3>
				
					<input type="hidden" name="heading" id="" value="">
					<input type="hidden" name="heading" id="" value="----------- Diagnosis ------------">
					<input type="hidden" name="heading" id="" value="">
				
				<div class="inputcss">
					<input type="text" name="diagnosis_oral_note" class='required' value="" placeholder="Enter notes here...">
				</div>
				</div>
			</div>

			<div class="main-sec">
				<div class="main-sec-in">
				<h3 class="">Discussion:</h3>
				
					<input type="hidden" name="heading" id="" value="">
					<input type="hidden" name="heading" id="" value="----------- Discussion ------------">
					<input type="hidden" name="heading" id="" value="">
				
				<div class="inputcss">
					<input type="text" name="discussion_oral_note" class='required' value="" placeholder="Enter notes here...">
				</div>
				</div>
			</div> 
			
			<div class="main-sec">
				<div class="main-sec-in">
				<h3 class="">Treatment Plan:</h3>	

					<input type="hidden" name="heading" id="" value="">
					<input type="hidden" name="heading" id="" value="----------- Treatment Plan ------------">
					<input type="hidden" name="heading" id="" value="">
				
				<div class="txt-lbl">
				<div class="inputcss">
					<input type="text" name="radio_oral_note" class='required' value="" placeholder="Enter notes here...">
				</div>
				<p>Recall:</p>
				<ul class="rbtn">
				<li>
					<input type='radio' id="3m" name='Recall' data-fieddata="Patient" value='Recall: 3m'>
					<label for="3m">3m</label>
				</li>
				<li>
					<input type='radio' id="6m" name='Recall' data-fieddata="Patient" value='Recall: 6m'>
					<label for="6m">6m</label>
				</li>
				<li>
					<input type='radio' id="9m" name='Recall' data-fieddata="Patient" value='Recall: 9m'>
					<label for="9m">9m</label>
				</li>
				<li>
					<input type='radio' id="12m" name='Recall' data-fieddata="Patient" value='Recall: 12m'>
					<label for="12m">12m</label>
				</li>
				<li>
					<input type='radio' id="24m" name='Recall' data-fieddata="Patient" value='Recall: 24m'>
					<label for="24m">24m</label>
				</li>	
				
				</ul>

				</div>
				</div>
			</div>
			
			<div class="main-sec">
				<div class="main-sec-in">
				<h3 class="">Next Visit:</h3>
				
					<input type="hidden" name="heading" id="" value="">
					<input type="hidden" name="heading" id="" value="----------- Next Visit ------------">
					<input type="hidden" name="heading" id="" value="">
				
				<div class="inputcss">
					<input type="text" name="nextvisit_oral_note" class='required' value="" placeholder="Enter notes here...">
				</div>
				</div>
			</div> 
				
			<div class="main-sec">
				<div class="main-sec-in">
				<h3 class="">Risk Assessment:</h3>
				
					<input type="hidden" name="heading" id="" value="">
					<input type="hidden" name="heading" id="" value="----------- Risk Assessment ------------">
					<input type="hidden" name="heading" id="" value="">		
					
				<div class="txt-lbl">
				<p>Caries:</p>
				<ul class="rbtn">
				<li>
					<input type='radio' id="treat_low" name='risk_assessment' data-fieddata="Patient" value='Caries: Low'>
					<label for="treat_low">Low</label>
				</li>
				<li>
					<input type='radio' id="treat_med" name='risk_assessment' data-fieddata="Patient" value='Caries: Med'>
					<label for="treat_med">Med</label>
				</li>
				<li>
					<input type='radio' id="treat_high" name='risk_assessment' data-fieddata="Patient" value='Caries: High'>
					<label for="treat_high">High</label>
				</li>
				</ul>
				</div>
				
				<div class="txt-lbl">
				<p>Periodontal:</p>
				<ul class="rbtn">
				<li>
					<input type='radio' id="Periodontal_low" name='Periodontal' data-fieddata="Patient" value='Periodontal: Low'>
					<label for="Periodontal_low">Low</label>
				</li>
				<li>
					<input type='radio' id="Periodontal_med" name='Periodontal' data-fieddata="Patient" value='Periodontal: Med'>
					<label for="Periodontal_med">Med</label>
				</li>
				<li>
					<input type='radio' id="Periodontal_high" name='Periodontal' data-fieddata="Patient" value='Periodontal: High'>
					<label for="Periodontal_high">High</label>
				</li>
				</ul>
				</div>
				
				<div class="txt-lbl">
				<p>Wear:</p>
				<ul class="rbtn">
				<li>
					<input type='radio' id="Wear_low" name='Wear' data-fieddata="Patient" value='Wear: Low'>
					<label for="Wear_low">Low</label>
				</li>
				<li>
					<input type='radio' id="Wear_med" name='Wear' data-fieddata="Patient" value='Wear: Med'>
					<label for="Wear_med">Med</label>
				</li>
				<li>
					<input type='radio' id="Wear_high" name='Wear' data-fieddata="Patient" value='Wear: High'>
					<label for="Wear_high">High</label>
				</li>
				</ul>
				</div>
				
				<div class="txt-lbl">
				<p>Oral Cancer:</p>
				<ul class="rbtn">
				<li>
					<input type='radio' id="Oral_Cancer_low" name='Oral_Cancer' data-fieddata="Patient" value='Oral Cancer: Low'>
					<label for="Oral_Cancer_low">Low</label>
				</li>
				<li>
					<input type='radio' id="Oral_Cancer_med" name='Oral_Cancer' data-fieddata="Patient" value='Oral Cancer: Med'>
					<label for="Oral_Cancer_med">Med</label>
				</li>
				<li>
					<input type='radio' id="Oral_Cancer_high" name='Oral_Cancer' data-fieddata="Patient" value='Oral Cancer: High'>
					<label for="Oral_Cancer_high">High</label>
				</li>
				</ul>
				</div>
				
				<div class="inputcss">
					<input type="text" name="treatment_oral_note" class='required' value="" placeholder="Enter notes here...">
				</div>
				</div>
			</div>	
			<div>
			<div class="txt_cpd"><p>Text Copied</p></div>
				<p><span id="results"></span></p>
			</div>
		  </div>
		<div class="all_messages"></div>
		<div class="Clipboard_btn">
			<button type="submit" class="copy cp_cl" id="copy_all_fields" value="submit" onclick="storage_data();">Copy To Clipboard</button>
			<!--<input type="submit" class='copy cp_cl' id="copy_all_fields" value="Copy To Clipboard" onclick="storage_data();">-->
		</div>
		</form>
		<textarea id='copy' class="display_none"></textarea>
		<!--<textarea id='copy' class=""></textarea>-->
	</div>

<?php include '../templates/footer.php'; ?>

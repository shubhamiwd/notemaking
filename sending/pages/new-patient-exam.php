<?php 
/*
Template Name: New Patient Exam
*/

include '../templates/header.php';
include '../models/new-patient-exam-modal.php';
?>
	<div class="container" id="checkbox-container">
		<div class="tem_title">
			<h2>New Patient Exam
</h2>
		</div>
		<form onclick="">
			<div class="main-section">
			<input type="hidden" name="heading" id="Template_Name1" value="Template Name - New Patient Exam">
        <input type="hidden" name="heading" id="Template_Name2" value="">
		<input type="hidden" name="heading" id="Date_1" value="<?php echo "Form filling date " . date("Y/m/d"); ?>">
        <input type="hidden" name="heading" id="Date_2" value="">
			<div class="mtnegtive">
			<div class="main-sec">
				<div class="main-sec-in">
					<h3>New Patient Exam</h3>
						<input type="hidden" name="heading" id="" value="">
						<input type="hidden" name="heading" id="" value="----------- New Patient Exam ------------">
						<input type="hidden" name="heading" id="" value="">
					<div class="inputcss">
							<!-- <input type='text' name='Dentist' id="a2" data-fieddata="Dentist" value='Dentist: -->

							<input type='text' name='Dentist' id="a3" data-fieddata="dentist" value='Dentist: '>
					</div>
					<div class="inputcss">
							<!-- <input type='text' name='Dentist' id="a2" data-fieddata="Dentist" value='Dentist: -->

							<input type='text' name='Nurse' id="a3" data-fieddata="nurse" value='Nurse: '>
					</div>
					<div class="txt-lbl">
						<p>Reason for attendance:</p>
						<ul class="rbtn">
							<li>
								<input type='radio' id="roa_1" name='roa' data-fieddata="Patient" value='Reason for attendance: Routine Checkup'>
								<label for="roa_1">Routine Checkup</label>
							</li>
							<li>
								<input type='radio' id="roa_2" name='roa' data-fieddata="Patient" value='Reason for attendance: Specific Concern'>
								<label for="roa_2">Specific Concern</label>
							</li>
							<li>
								<input type='radio' id="roa_3" name='roa' data-fieddata="Patient" value='Reason for attendance: Other'>
								<label for="roa_3">Other</label>
							</li>
						</ul>
					</div>
					<div class=""><p>C/O: <span class="npe_opt"></span></p>
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
					<div class="inputcss">
						<input type="text" name="med_notes1" value="" placeholder="Enter notes here...">
					</div>
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
						<p>Anxious of dental visits:</p>
						<ul class="rbtn">
							<li>
								<input type='radio' id="sh_1" name='sh' data-fieddata="Patient" value='Anxious of dental visits: Yes'>
								<label for="sh_1">Yes</label>
							</li>
							<li>
								<input type='radio' id="sh_2" name='sh' data-fieddata="Patient" value='Anxious of dental visits: No'>
								<label for="sh_2">No</label>
							</li>
						</ul>
					</div>
					<div class="txt-lbl">
						<p>Smoking:</p>
						<ul class="rbtn">
							<li>
								<input type='radio' id="sh_3" name='sh2' data-fieddata="Patient" value='Smoking: Never'>
								<label for="sh_3">Never</label>
							</li>
							<li>
								<input type='radio' id="sh_4" name='sh2' data-fieddata="Patient" value='Smoking: Ex smoker'>
								<label for="sh_4">Ex smoker</label>
							</li>
							<li>
								<input type='radio' id="sh_5" name='sh2' data-fieddata="Patient" value='Smoking: Daily Smoker'>
								<label for="sh_5"> Daily Smoker	</label>
							</li>
							<li>
								<input type='radio' id="sh_6" name='sh2' data-fieddata="Patient" value='Smoking: Occasional smoker'>
								<label for="sh_6"> Occasional smoker</label>
							</li>
							<li>
								<input type='radio' id="sh_7" name='sh2' data-fieddata="Patient" value='Smoking: Using Vape'>
								<label for="sh_7"> Using Vape</label>
							</li>
						</ul>
					</div>
					<div class="txt-lbl">
						<p>Alchohal Intake:</p>
						<ul class="rbtn">
							<li>
								<input type='radio' id="sh_8" name='sh1' data-fieddata="Patient" value='Alchohal Intake: Nil'>
								<label for="sh_8">Nil</label>
							</li>
							<li>
								<input type='radio' id="sh_9" name='sh1' data-fieddata="Patient" value='Alchohal Intake: Rarely'>
								<label for="sh_9">Rarely</label>
							</li>
							<li>
								<input type='radio' id="sh_10" name='sh1' data-fieddata="Patient" value='Alchohal Intake: <14 units per week'>
								<label for="sh_10"> <14 units per week </label>
							</li>
							<li>
								<input type='radio' id="sh_11" name='sh1' data-fieddata="Patient" value='Alchohal Intake: >14 units per week'>
								<label for="sh_11"> >14 units per week </label>
							</li>
						</ul>
					</div>
					<div class="inputcss">
						<input type="text" name="med_notes2" value="" placeholder="Enter notes here...">
					</div>
				</div>
			</div>
			<div class="main-sec">
				<div class="main-sec-in">
					<h3>Medical History:</h3>
						<input type="hidden" name="heading" id="" value="">
						<input type="hidden" name="heading" id="" value="----------- Medical History: ------------">
						<input type="hidden" name="heading" id="" value="">
					<div class="txt-lbl">
						<ul class="rbtn">
							<li>
								<input type='radio' id="mh_1" name='mh' data-fieddata="Patient" value='Medical History: No relevant allergies'>
								<label for="mh_1">No relevant allergies</label>
							</li>
							<li>
								<input type='radio' id="mh_2" name='mh' data-fieddata="Patient" value='Medical History: Allergic to penicillin'>
								<label for="mh_2">Allergic to penicillin</label>
							</li>
							<li>
								<input type='radio' id="mh_3" name='mh' data-fieddata="Patient" value='Medical History: Allergic to (write in notes)'>
								<label for="mh_3">Allergic to (write in notes)</label>
							</li>
						</ul>
					</div>
					<div class="txt-lbl">
						<ul class="rbtn">
							<li>
								<input type='radio' id="mh_4" name='mh1' data-fieddata="Patient" value='Medical History: No relevant medication'>
								<label for="mh_4">No relevant medication</label>
							</li>
							<li>
								<input type='radio' id="mh_5" name='mh1' data-fieddata="Patient" value='Medical History: Medication(write in notes)'>
								<label for="mh_5">Medication(write in notes)</label>
							</li>
						</ul>
					</div>
					<div class="txt-lbl">
						<ul class="rbtn">
							<li>
								<input type='radio' id="mh_6" name='mh2' data-fieddata="Patient" value='Medical History: No relevant conditions'>
								<label for="mh_6">No relevant conditions</label>
							</li>
							<li>
								<input type='radio' id="mh_7" name='mh2' data-fieddata="Patient" value='Medical History: Conditions(write in notes)'>
								<label for="mh_7">Conditions(write in notes)</label>
							</li>
						</ul>
					</div>
					<div class="txt-lbl">
						<p>Special Needs:</p>
						<ul class="rbtn">
							<li>
								<input type='radio' id="mh_8" name='mh3' data-fieddata="Patient" value='Special Needs: Nil'>
								<label for="mh_8">Nil</label>
							</li>
							<li>
								<input type='radio' id="mh_9" name='mh3' data-fieddata="Patient" value='Special Needs: Other'>
								<label for="mh_9">Other</label>
							</li>
						</ul>
					</div>
					<div class="inputcss">
						<input type="text" name="med_notes3" value="" placeholder="Enter notes here...">
					</div>
				</div>
			</div>
			<div class="main-sec">
				<div class="main-sec-in">
					<h3>Dental History:</h3>
						<input type="hidden" name="heading" id="" value="">
						<input type="hidden" name="heading" id="" value="----------- Dental History: ------------">
						<input type="hidden" name="heading" id="" value="">
					<div class="txt-lbl">
						<p>Last check up:</p>
						<ul class="rbtn">
							<li>
								<input type='radio' id="dh_1" name='dh' data-fieddata="dental_history" value='Last check up:3m'>
								<label for="dh_1">3m</label>
							</li>
							<li>
								<input type='radio' id="dh_2" name='dh' data-fieddata="dental_history" value='Last check up:6m'>
								<label for="dh_2">6m</label>
							</li>
							<li>
								<input type='radio' id="dh_3" name='dh' data-fieddata="dental_history" value='Last check up:9m'>
								<label for="dh_3">9m</label>
							</li>
							<li>
								<input type='radio' id="dh_4" name='dh' data-fieddata="dental_history" value='Last check up:12m'>
								<label for="dh_4">12m</label>
							</li>
							<li>
								<input type='radio' id="dh_5" name='dh' data-fieddata="dental_history" value='Last check up:18m'>
								<label for="dh_5">18m</label>
							</li>
							<li>
								<input type='radio' id="dh_6" name='dh' data-fieddata="dental_history" value='Last check up:24m'>
								<label for="dh_6">24m</label>
							</li>
							<li>
								<input type='radio' id="dh_7" name='dh' data-fieddata="dental_history" value='Last check up:>2yrs'>
								<label for="dh_7">>2yrs</label>
							</li>
							<li>
								<input type='radio' id="dh_8" name='dh' data-fieddata="dental_history" value='Last check up:>5yrs'>
								<label for="dh_8">>5yrs</label>
							</li>
							<li>
								<input type='radio' id="dh_9" name='dh' data-fieddata="dental_history" value='Last check up:Never'>
								<label for="dh_9">Never</label>
							</li>
						</ul>
					</div>
					<div class="txt-lbl">
						<p>Brushing:</p>
						<ul class="rbtn">
							<li>
								<input type='radio' id="br_1" name='brs' data-fieddata="dental_history" value='Brushing:Once'>
								<label for="br_1">Once</label>
							</li>
							<li>
								<input type='radio' id="br_2" name='brs' data-fieddata="dental_history" value='Brushing:Twice'>
								<label for="br_2">Twice</label>
							</li>
							<li>
								<input type='radio' id="br_3" name='brs' data-fieddata="dental_history" value='Brushing:>2times'>
								<label for="br_3">>2times</label>
							</li>
							<li>
								<input type='radio' id="br_4" name='brs' data-fieddata="dental_history" value='Brushing:Daily with ETB'>
								<label for="br_4">Daily with ETB</label>
							</li>
							<li>
								<input type='radio' id="br_5" name='brs' data-fieddata="dental_history" value='Brushing:Daily with MTB'>
								<label for="br_5">Daily with MTB</label>
							</li>
							<li>
								<input type='radio' id="br_6" name='brs' data-fieddata="dental_history" value='Brushing:Both with ETB + MTB'>
								<label for="br_6">Both with ETB + MTB</label>
							</li>
						</ul>
					</div>
					<div class="txt-lbl">
						<p>Toothpaste:</p>
						<ul class="rbtn">
							<li>
								<input type='radio' id="tp_1" name='tps' data-fieddata="dental_history" value='Toothpaste: Using atleast 1450ppm fluoride toothpaste'>
								<label for="tp_1">Using atleast 1450ppm fluoride toothpaste</label>
							</li>
							<li>
								<input type='radio' id="tp_2" name='tps' data-fieddata="dental_history" value='Toothpaste: Patient unsure of fluoride content of toothpaste'>
								<label for="tp_2">Patient unsure of fluoride content of toothpaste</label>
							</li>
							<li>
								<input type='radio' id="tp_3" name='tps' data-fieddata="dental_history" value='Toothpaste: Using fluoride free toothpaste'>
								<label for="tp_3">Using fluoride free toothpaste</label>
							</li>
						</ul>
					</div>
					<div class="txt-lbl">
						<p>Interdental cleaning:</p>
						<ul class="rbtn">
							<li>
								<input type='radio' id="ic_1" name='ic' data-fieddata="dental_history" value='Interdental cleaning: Nil'>
								<label for="ic_1">Nil</label>
							</li>
							<li>
								<input type='radio' id="ic_2" name='ic' data-fieddata="dental_history" value='Interdental cleaning: Floss'>
								<label for="ic_2">Floss</label>
							</li>
							<li>
								<input type='radio' id="ic_3" name='ic' data-fieddata="dental_history" value='Interdental cleaning: Tepe'>
								<label for="ic_3">Tepe</label>
							</li>
							<li>
								<input type='radio' id="ic_4" name='ic' data-fieddata="dental_history" value='Interdental cleaning: Floss & Tepe'>
								<label for="ic_4">Floss & Tepe</label>
							</li>
							<li>
								<input type='radio' id="ic_5" name='ic' data-fieddata="dental_history" value='Interdental cleaning: Other'>
								<label for="ic_5">Other</label>
							</li>
						</ul>
					</div>
					<div class="txt-lbl">
						<p>Mouthwash:</p>
						<ul class="rbtn">
							<li>
								<input type='radio' id="mw_1" name='mw' data-fieddata="dental_history" value='Mouthwash: Nil'>
								<label for="mw_1">Nil</label>
							</li>
							<li>
								<input type='radio' id="mw_2" name='mw' data-fieddata="dental_history" value='Mouthwash: Occasional'>
								<label for="mw_2">Occasional</label>
							</li>
							<li>
								<input type='radio' id="mw_3" name='mw' data-fieddata="dental_history" value='Mouthwash: Regular'>
								<label for="mw_3">Regular</label>
							</li>
						</ul>
					</div>
					<div class="txt-lbl">
						<p>Sugars in diet:</p>
						<ul class="rbtn">
							<li>
								<input type='radio' id="sd_1" name='sd' data-fieddata="dental_history" value='Sugars in diet: Low'>
								<label for="sd_1">Low</label>
							</li>
							<li>
								<input type='radio' id="sd_2" name='sd' data-fieddata="dental_history" value='Sugars in diet:Mod'>
								<label for="sd_2">Mod</label>
							</li>
							<li>
								<input type='radio' id="sd_3" name='sd' data-fieddata="dental_history" value='Sugars in diet:High'>
								<label for="sd_3">High</label>
							</li>
						</ul>
					</div>
					<div class="txt-lbl">
						<p>Acid in diet:</p>
						<ul class="rbtn">
							<li>
								<input type='radio' id="ac_1" name='ac' data-fieddata="dental_history" value='Acid in diet:Low'>
								<label for="ac_1">Low</label>
							</li>
							<li>
								<input type='radio' id="ac_2" name='ac' data-fieddata="dental_history" value='Acid in diet:Mod'>
								<label for="ac_2">Mod</label>
							</li>
							<li>
								<input type='radio' id="ac_3" name='ac' data-fieddata="dental_history" value='Acid in diet:High'>
								<label for="ac_3">High</label>
							</li>
						</ul>
					</div>
					<div class="inputcss">
						<input type="text" name="med_notes4" value="" placeholder="Enter notes here...">
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
						<p>LN, MOM, SG, TMJ:</p>
						<ul class="rbtn">
							<li>
								<input type='radio' id="eoex_1" name='eoex' data-fieddata="Patient" value='LN, MOM, SG, TMJ: Nil'>
								<label for="eoex_1">Nil</label>
							</li>
							<li>
								<input type='radio' id="eoex_2" name='eoex' data-fieddata="Patient" value='LN, MOM, SG, TMJ: Other'>
								<label for="eoex_2">Other</label>
							</li>
						</ul>
					</div>
					<div class="inputcss">
						<input type="text" name="med_notes5" value="" placeholder="Enter notes here...">
					</div>
				</div>
			</div>
			<div class="main-sec">
				<div class="main-sec-in">
					<h3>Intra Oral Exam:</h3>
						<input type="hidden" name="heading" id="" value="">
						<input type="hidden" name="heading" id="" value="----------- Extra Oral Exam: ------------">
						<input type="hidden" name="heading" id="" value="">
					<div class="txt-lbl">
						<p>Soft tissues (Including tongue, palate, buccal mucosa, lingual mucosa, FOM):</p>
						<ul class="rbtn">
							<li>
								<input type='radio' id="ioex_1" name='ioex' data-fieddata="Patient" value='Soft tissues (Including tongue, palate, buccal mucosa, lingual mucosa, FOM): Nil'>
								<label for="ioex_1">Nil</label>
							</li>
							<li>
								<input type='radio' id="ioex_2" name='ioex' data-fieddata="Patient" value='Soft tissues (Including tongue, palate, buccal mucosa, lingual mucosa, FOM): Other'>
								<label for="ioex_2">Other</label>
							</li>
						</ul>
					</div>
					<div class="inputcss">
						<input type="text" name="med_notes6" value="" placeholder="Enter notes here...">
					</div>
				</div>
			</div>
			<div class="main-sec">
				<div class="main-sec-in">
					<h3>Dental Exam:</h3>
						<input type="hidden" name="heading" id="" value="">
						<input type="hidden" name="heading" id="" value="----------- Dental Exam: ------------">
						<input type="hidden" name="heading" id="" value="">
					<div class="txt-lbl">
						<p>BPE recorded, includes highest score of:</p>
						<ul class="rbtn">
							<li>
								<input type='radio' id="bpe_1" name='bpe' data-fieddata="dental_history" value='BPE recorded, includes highest score of: 0'>
								<label for="bpe_1">0</label>
							</li>
							<li>
								<input type='radio' id="bpe_2" name='bpe' data-fieddata="dental_history" value='BPE recorded, includes highest score of: 1'>
								<label for="bpe_2">1</label>
							</li>
							<li>
								<input type='radio' id="bpe_3" name='bpe' data-fieddata="dental_history" value='BPE recorded, includes highest score of: 2'>
								<label for="bpe_3">2</label>
							</li>
							<li>
								<input type='radio' id="bpe_4" name='bpe' data-fieddata="dental_history" value='BPE recorded, includes highest score of: 3'>
								<label for="bpe_4">3</label>
							</li>
							<li>
								<input type='radio' id="bpe_5" name='bpe' data-fieddata="dental_history" value='BPE recorded, includes highest score of: 4'>
								<label for="bpe_5">4</label>
							</li>
						</ul>
					</div>
					<div class="txt-lbl">
						<p>Oral Hygiene:</p>
						<ul class="rbtn">
							<li>
								<input type='radio' id="oh_1" name='oh' data-fieddata="dental_history" value='Oral Hygiene: Good'>
								<label for="oh_1">Good</label>
							</li>
							<li>
								<input type='radio' id="oh_2" name='oh' data-fieddata="dental_history" value='Oral Hygiene: Mod'>
								<label for="oh_2">Mod</label>
							</li>
							<li>
								<input type='radio' id="oh_3" name='oh' data-fieddata="dental_history" value='Oral Hygiene: Poor'>
								<label for="oh_3">Poor</label>
							</li>
						</ul>
					</div>
					<div class="txt-lbl">
						<p>Gingivae:</p>
						<ul class="rbtn">
							<li>
								<input type='radio' id="gin_1" name='gin' data-fieddata="dental_history" value='Gingivae: Healthy'>
								<label for="gin_1">Healthy</label>
							</li>
							<li>
								<input type='radio' id="gin_2" name='gin' data-fieddata="dental_history" value='Gingivae: Generalised Inflammation'>
								<label for="gin_2">Generalised Inflammation</label>
							</li>
							<li>
								<input type='radio' id="gin_3" name='gin' data-fieddata="dental_history" value='Gingivae: Localised Inflammation'>
								<label for="gin_3">Localised Inflammation</label>
							</li>
							<li>
								<input type='radio' id="gin_3" name='gin' data-fieddata="dental_history" value='Gingivae: Other'>
								<label for="gin_3">Other</label>
							</li>
						</ul>
					</div>
					<div class="txt-lbl">
						<p>Plaque deposits:</p>
						<ul class="rbtn">
							<li>
								<input type='radio' id="pd_1" name='pd' data-fieddata="dental_history" value='Plaque deposits: Healthy'>
								<label for="pd_1">Nil</label>
							</li>
							<li>
								<input type='radio' id="pd_2" name='pd' data-fieddata="dental_history" value='Plaque deposits: Generalised'>
								<label for="pd_2">Generalised</label>
							</li>
							<li>
								<input type='radio' id="pd_3" name='pd' data-fieddata="dental_history" value='Plaque deposits: Lower anteriors'>
								<label for="pd_3">Lower anteriors</label>
							</li>
							<li>
								<input type='radio' id="pd_4" name='pd' data-fieddata="dental_history" value='Plaque deposits: Other'>
								<label for="pd_4">Other</label>
							</li>
						</ul>
					</div>
					<div class="txt-lbl">
						<p>Calculus deposits:</p>
						<ul class="rbtn">
							<li>
								<input type='radio' id="cds_1" name='cds' data-fieddata="dental_history" value='Calculus deposits: Healthy'>
								<label for="cds_1">Nil</label>
							</li>
							<li>
								<input type='radio' id="cds_2" name='cds' data-fieddata="dental_history" value='Calculus deposits: Generalised'>
								<label for="cds_2">Generalised</label>
							</li>
							<li>
								<input type='radio' id="cds_3" name='cds' data-fieddata="dental_history" value='Calculus deposits: Lower anteriors'>
								<label for="cds_3">Lower anteriors</label>
							</li>
							<li>
								<input type='radio' id="cds_4" name='cds' data-fieddata="dental_history" value='Calculus deposits: Other'>
								<label for="cds_4">Other</label>
							</li>
						</ul>
					</div>
					<div class="txt-lbl">			
						<p>Caries: <span class="pat_exam_teeth_1"></span></p>
						<ul class="rbtn">
							<li>
								<input type='radio' id="pat_e1" name='pat_e1' data-fieddata="Patient" value='Caries: Nil'>
								<label for="pat_e1">Nil</label>
							</li>
							<li>
								<div data-toggle="modal" data-target="#myModal_2" class="sel_lnk">Select Teeth<i class="fas fa-external-link-alt"></i></div>
							</li>
							<div class="carries">
								<input type="hidden" name="caries_teeth" id="pat_e_1" value="">
								<!--<label for="" class="mt20">Caries: <span class="sel_teeth"></span></label>-->
							</div>	
						</ul>
					</div>
					<div class="txt-lbl">			
						<p>Leaking or defective restorations: <span class="pat_exam_teeth_2"></span></p>
						<ul class="rbtn">
							<li>
								<input type='radio' id="pat_e2" name='pat_e2' data-fieddata="Patient" value='Caries: Nil'>
								<label for="pat_e2">Nil</label>
							</li>
							<li>
								<div data-toggle="modal" data-target="#myModal_3" class="sel_lnk">Select Teeth<i class="fas fa-external-link-alt"></i></div>
							</li>
							<div class="carries">
								<input type="hidden" name="caries_teeth" id="pat_e_2" value="">
								<!--<label for="" class="mt20">Caries: <span class="sel_teeth"></span></label>-->
							</div>	
						</ul>
					</div>
					<div class="txt-lbl">			
						<p>TSL: <span class="pat_exam_teeth_3"></span></p>
						<ul class="rbtn">
							<li>
								<input type='radio' id="pat_e3" name='pat_e3' data-fieddata="Patient" value='TSL: Nil'>
								<label for="pat_e3">Nil</label>
							</li>
							<li>
								<div data-toggle="modal" data-target="#myModal_4" class="sel_lnk">Select Teeth<i class="fas fa-external-link-alt"></i></div>
							</li>
							<div class="carries">
								<input type="hidden" name="caries_teeth" id="pat_e_3" value="">
								<!--<label for="" class="mt20">Caries: <span class="sel_teeth"></span></label>-->
							</div>	
						</ul>
					</div>
					<div class="txt-lbl">
						<p>Crowding:</p>
						<ul class="rbtn">
							<li>
								<input type='radio' id="crwd_1" name='crwd' data-fieddata="dental_history" value='Crowding: Nil'>
								<label for="crwd_1">Nil</label>
							</li>
							<li>
								<input type='radio' id="crwd_2" name='crwd' data-fieddata="dental_history" value='Crowding: Mild'>
								<label for="crwd_2">Mild</label>
							</li>
							<li>
								<input type='radio' id="crwd_3" name='crwd' data-fieddata="dental_history" value='Crowding: Mod'>
								<label for="crwd_3">Mod</label>
							</li>
							<li>
								<input type='radio' id="crwd_4" name='crwd' data-fieddata="dental_history" value='Crowding: Sev'>
								<label for="crwd_4">Sev</label>
							</li>
							<li>
								<input type='radio' id="crwd_5" name='crwd' data-fieddata="dental_history" value='Crowding: Other'>
								<label for="crwd_5">Other</label>
							</li>
						</ul>
					</div>
					<div class="txt-lbl">
						<p>Recession:</p>
						<ul class="rbtn">
							<li>
								<input type='radio' id="rece_1" name='rece' data-fieddata="dental_history" value='Recession: Nil'>
								<label for="rece_1">Nil</label>
							</li>
							<li>
								<input type='radio' id="rece_2" name='rece' data-fieddata="dental_history" value='Recession: Generalised'>
								<label for="rece_2">Generalised</label>
							</li>
							<li>
								<input type='radio' id="rece_3" name='rece' data-fieddata="dental_history" value='Recession: Localised'>
								<label for="rece_3">Localised</label>
							</li>
							<li>
								<input type='radio' id="rece_4" name='rece' data-fieddata="dental_history" value='Recession: Other'>
								<label for="rece_4">Other</label>
							</li>
						</ul>
					</div>
					<div class="txt-lbl">
						<p>Prostheses:</p>
						<ul class="rbtn">
							<li>
								<input type='radio' id="pros_1" name='pros' data-fieddata="dental_history" value='Prostheses: Yes'>
								<label for="pros_1">Yes</label>
							</li>
							<li>
								<input type='radio' id="pros_2" name='pros' data-fieddata="dental_history" value='Prostheses: No'>
								<label for="pros_2">No</label>
							</li>
						</ul>
					</div>
					<div class="txt-lbl">			
						<p>Mobility: <span class="pat_exam_teeth_4"></span></p>
						<ul class="rbtn">
							<li>
								<input type='radio' id="pat_e4" name='pat_e4' data-fieddata="Patient" value='Mobility: Nil'>
								<label for="pat_e4">Nil</label>
							</li>
							<li>
								<div data-toggle="modal" data-target="#myModal_5" class="sel_lnk">Select Teeth<i class="fas fa-external-link-alt"></i></div>
							</li>
							<div class="carries">
								<input type="hidden" name="caries_teeth" id="pat_e_4" value="">
								<!--<label for="" class="mt20">Caries: <span class="sel_teeth"></span></label>-->
							</div>	
						</ul>
					</div>
					<div class="inputcss">
						<input type="text" name="med_notes7" value="" placeholder="Enter notes here...">
					</div>
				</div>
			</div>
			<div class="main-sec">
				<div class="main-sec-in">
					<h3>Radiographs</h3>
								<input type="hidden" name="heading" id="" value="">
						<input type="hidden" name="heading" id="" value="----------- Radiographs: ------------">
						<input type="hidden" name="heading" id="" value="">
					<div class="txt-lbl">
						<p>BWs:</p>
						<ul class="rbtn">
							<li>
								<input type='radio' id="rd_bw_1" name='rd_bw' data-fieddata="Patient" value='BWs: Not Indicated today'>
								<label for="rd_bw_1">Not Indicated today</label>
							</li>
							<li>
								<input type='radio' id="rd_bw_2" name='rd_bw' data-fieddata="Patient" value='BWs: Taken for inter-proximal caries assessment and bone levels'>
								<label for="rd_bw_2">Taken for inter-proximal caries assessment and bone levels</label>
							</li>
						</ul>
					</div>
					<div class="txt-lbl">
						<p>PAs:</p>
						<ul class="rbtn">
							<li>
								<input type='radio' id="rd_pa_1" name='rd_pa' data-fieddata="Patient" value='PAs: None Indicated'>
								<label for="rd_pa_1">None Indicated</label>
							</li>
							<li>
								<input type='radio' id="rd_pa_2" name='rd_pa' data-fieddata="Patient" value='PAs: Taken to assess for PAP, bone levels, caries and root morphology'>
								<label for="rd_pa_2">Taken to assess for PAP, bone levels, caries and root morphology</label>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="main-sec">
				<div class="main-sec-in">
				<h3 class="">Diagnosis:</h3>
						<input type="hidden" name="heading" id="" value="">
						<input type="hidden" name="heading" id="" value="----------- Diagnosis: ------------">
						<input type="hidden" name="heading" id="" value="">
				<div class="inputcss">
					<input type="text" name="med_notes8" value="" placeholder="Enter notes here...">
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
					<input type="text" name="med_notes9" value="" placeholder="Enter notes here...">
				</div>
				</div>
			</div>
			<div class="main-sec">
				<div class="main-sec-in">
					<h3>Treatment Plan:</h3>
						<input type="hidden" name="heading" id="" value="">
						<input type="hidden" name="heading" id="" value="----------- Treatment Plan: ------------">
						<input type="hidden" name="heading" id="" value="">
					<div class="txt-lbl">
						<p>Recall:</p>
						<ul class="rbtn">
							<li>
								<input type='radio' id="trp_1" name='trp' data-fieddata="Patient" value='Recall:3m'>
								<label for="trp_1">3m</label>
							</li>
							<li>
								<input type='radio' id="trp_2" name='trp' data-fieddata="Patient" value='Recall:6m'>
								<label for="trp_2">6m</label>
							</li>
							<li>
								<input type='radio' id="trp_3" name='trp' data-fieddata="Patient" value='Recall:9m'>
								<label for="trp_3">9m</label>
							</li>
							<li>
								<input type='radio' id="trp_4" name='trp' data-fieddata="Patient" value='Recall:12m'>
								<label for="trp_4">12m</label>
							</li>
							<li>
								<input type='radio' id="trp_5" name='trp' data-fieddata="Patient" value='Recall:24m'>
								<label for="trp_5">24m</label>
							</li>
						</ul>
					</div>
					<div class="inputcss">
						<input type="text" name="med_notes11" value="" placeholder="Enter notes here...">
					</div>
				</div>
			</div>
			<div class="main-sec">
				<div class="main-sec-in">
				<h3 class="">Next Visit:</h3>
						<input type="hidden" name="heading" id="" value="">
						<input type="hidden" name="heading" id="" value="----------- Next Visit: ------------">
						<input type="hidden" name="heading" id="" value="">
				<div class="inputcss">
					<input type="text" name="med_notes10" value="" placeholder="Enter notes here...">
				</div>
				</div>
			</div>
			<div class="main-sec">
				<div class="main-sec-in">
					<h3>Risk assessment</h3>
								<input type="hidden" name="heading" id="" value="">
								<input type="hidden" name="heading" id="" value="----------- Risk assessment: ------------">
								<input type="hidden" name="heading" id="" value="">
					<div class="txt-lbl">
						<p>Caries:</p>
						<ul class="rbtn">
							<li>
								<input type='radio' id="ra_ca_1" name='ra_ca' data-fieddata="Patient" value='Caries: Low'>
								<label for="ra_ca_1">Low</label>
							</li>
							<li>
								<input type='radio' id="ra_ca_2" name='ra_ca' data-fieddata="Patient" value='Caries: Med'>
								<label for="ra_ca_2">Med</label>
							</li>
							<li>
								<input type='radio' id="ra_ca_3" name='ra_ca' data-fieddata="Patient" value='Caries: High'>
								<label for="ra_ca_3">High</label>
							</li>
						</ul>
					</div>
					<div class="txt-lbl">
						<p>Wear:</p>
						<ul class="rbtn">
							<li>
								<input type='radio' id="ra_w_1" name='ra_w' data-fieddata="Patient" value='Wear: Low'>
								<label for="ra_w_1">Low</label>
							</li>
							<li>
								<input type='radio' id="ra_w_2" name='ra_w' data-fieddata="Patient" value='Wear: Med'>
								<label for="ra_w_2">Med</label>
							</li>
							<li>
								<input type='radio' id="ra_w_3" name='ra_w' data-fieddata="Patient" value='Wear: High'>
								<label for="ra_w_3">High</label>
							</li>
						</ul>
					</div>
					<div class="txt-lbl">
						<p>Periodontal:</p>
						<ul class="rbtn">
							<li>
								<input type='radio' id="ra_pre_1" name='ra_pre' data-fieddata="Patient" value='Periodontal: Low'>
								<label for="ra_pre_1">Low</label>
							</li>
							<li>
								<input type='radio' id="ra_pre_2" name='ra_pre' data-fieddata="Patient" value='Periodontal: Med'>
								<label for="ra_pre_2">Med</label>
							</li>
							<li>
								<input type='radio' id="ra_pre_3" name='ra_pre' data-fieddata="Patient" value='Periodontal: High'>
								<label for="ra_pre_3">High</label>
							</li>
						</ul>
					</div>
					<div class="txt-lbl">
						<p>Oral Cancer:</p>
						<ul class="rbtn">
							<li>
								<input type='radio' id="ra_oc_1" name='ra_oc' data-fieddata="Patient" value='Oral Cancer: Low'>
								<label for="ra_oc_1">Low</label>
							</li>
							<li>
								<input type='radio' id="ra_oc_2" name='ra_oc' data-fieddata="Patient" value='Oral Cancer: Med'>
								<label for="ra_oc_2">Med</label>
							</li>
							<li>
								<input type='radio' id="ra_oc_3" name='ra_oc' data-fieddata="Patient" value='Oral Cancer: High'>
								<label for="ra_oc_3">High</label>
							</li>
						</ul>
					</div>
					<div class="inputcss">
						<input type="text" name="med_notes12" value="" placeholder="Enter notes here...">
					</div>
				</div>
			</div>
			<div>
			<div class="txt_cpd"><p>Text Copied</p></div>
			</div>
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


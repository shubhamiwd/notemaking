<?php 
/*
Template Name: Invisalign Assessment
*/

include '../templates/header.php';
include '../models/invisalign-assessment-modal.php';
?>
	<div class="container" id="checkbox-container">
		<div class="tem_title">
			<h2>Invisalign Assessment</h2>
		</div>
		<form onclick="">
			<div class="main-section">
			<input type="hidden" name="heading" id="Template_Name1" value="Template Name - Invisalign Assessment">
        <input type="hidden" name="heading" id="Template_Name2" value="">
		<input type="hidden" name="heading" id="Date_1" value="<?php echo "Form filling date " . date("Y/m/d"); ?>">
        <input type="hidden" name="heading" id="Date_2" value="">
			<div class="mtnegtive">
			<div class="main-sec">
				<div class="main-sec-in">
					<h3>Invisalign Assessment</h3>
						<input type="hidden" name="heading" id="" value="">
						<input type="hidden" name="heading" id="" value="----------- Orthodontist Consultation ------------">
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
						<p>Reason for consultation:</p>
						<ul class="rbtn">
							<li>
								<input type='radio' id="roc_1" name='roc' data-fieddata="Patient" value='Reason for consultation:Crooked Teeth'>
								<label for="roc_1">Crooked Teeth</label>
							</li>
							<li>
								<input type='radio' id="roc_2" name='roc' data-fieddata="Patient" value='Reason for consultation:Unhappy with smile'>
								<label for="roc_2">Unhappy with smile</label>
							</li>
							<li>
								<input type='radio' id="roc_3" name='roc' data-fieddata="Patient" value='Reason for consultation:Unhappy with bite'>
								<label for="roc_3">Unhappy with bite</label>
							</li>
							<li>
								<input type='radio' id="roc_4" name='roc' data-fieddata="Patient" value='Reason for consultation:Other'>
								<label for="roc_4">Other</label>
							</li>	
						</ul>
					</div>
					<div class="inputcss">
						<input type="text" name="ort_med_notes" value="" placeholder="Enter notes here...">
					</div>
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
								<input type='radio' id="mh_1" name='mh' data-fieddata="Patient" value='No relevant allergies'>
								<label for="mh_1">No relevant allergies</label>
							</li>
							<li>
								<input type='radio' id="mh_2" name='mh' data-fieddata="Patient" value='Allergic to penicillin'>
								<label for="mh_2">Allergic to penicillin</label>
							</li>
							<li>
								<input type='radio' id="mh_3" name='mh' data-fieddata="Patient" value='Allergic to (write in notes)'>
								<label for="mh_3">Allergic to (write in notes)</label>
							</li>
						</ul>
					</div>
					<div class="txt-lbl">
						<ul class="rbtn">
							<li>
								<input type='radio' id="mh_4" name='mh1' data-fieddata="Patient" value='No relevant medication'>
								<label for="mh_4">No relevant medication</label>
							</li>
							<li>
								<input type='radio' id="mh_5" name='mh1' data-fieddata="Patient" value='Medication(write in notes)'>
								<label for="mh_5">Medication(write in notes)</label>
							</li>
						</ul>
					</div>
					<div class="txt-lbl">
						<ul class="rbtn">
							<li>
								<input type='radio' id="mh_6" name='mh2' data-fieddata="Patient" value='No relevant conditions'>
								<label for="mh_6">No relevant conditions</label>
							</li>
							<li>
								<input type='radio' id="mh_7" name='mh2' data-fieddata="Patient" value='Conditions(write in notes)'>
								<label for="mh_7">Conditions(write in notes)</label>
							</li>
						</ul>
					</div>
					<div class="inputcss">
						<input type="text" name="ort_med_notes" value="" placeholder="Enter notes here...">
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
						<p>Occupation:</p>
						<ul class="rbtn">
							<li>
								<input type='radio' id="occ_1" name='occ' data-fieddata="Patient" value='Occupation:Not discussed'>
								<label for="occ_1">Not discussed</label>
							</li>
							<li>
								<input type='radio' id="occ_2" name='occ' data-fieddata="Patient" value='Occupation:Retired'>
								<label for="occ_2">Retired</label>
							</li>
							<li>
								<input type='radio' id="occ_3" name='occ' data-fieddata="Patient" value='Occupation:Unemployed'>
								<label for="occ_3">Unemployed</label>
							</li>
							<li>
								<input type='radio' id="occ_4" name='occ' data-fieddata="Patient" value='Occupation:Full time'>
								<label for="occ_4">Full time</label>
							</li>
							<li>
								<input type='radio' id="occ_5" name='occ' data-fieddata="Patient" value='Occupation:Part time'>
								<label for="occ_5">Part time</label>
							</li>
							<li>
								<input type='radio' id="occ_6" name='occ' data-fieddata="Patient" value='Occupation:Student'>
								<label for="occ_6">Student</label>
							</li>
							<li>
								<input type='radio' id="occ_7" name='occ' data-fieddata="Patient" value='Occupation:Other'>
								<label for="occ_7">Other</label>
							</li>
						</ul>
					</div>
					<div class="txt-lbl">
						<p>Anxious of dental visits:</p>
						<ul class="rbtn">
							<li>
								<input type='radio' id="sh_1" name='sh' data-fieddata="Patient" value='Anxious of dental visits:Yes'>
								<label for="sh_1">Yes</label>
							</li>
							<li>
								<input type='radio' id="sh_2" name='sh' data-fieddata="Patient" value='Anxious of dental visits:No'>
								<label for="sh_2">No</label>
							</li>
						</ul>
					</div>
					<div class="txt-lbl">
						<p>Smoking:</p>
						<ul class="rbtn">
							<li>
								<input type='radio' id="sh_3" name='sh2' data-fieddata="Patient" value='Smoking:Never'>
								<label for="sh_3">Never</label>
							</li>
							<li>
								<input type='radio' id="sh_4" name='sh2' data-fieddata="Patient" value='Smoking:Ex smoker'>
								<label for="sh_4">Ex smoker</label>
							</li>
							<li>
								<input type='radio' id="sh_5" name='sh2' data-fieddata="Patient" value='Smoking:Daily Smoker'>
								<label for="sh_5"> Daily Smoker	</label>
							</li>
							<li>
								<input type='radio' id="sh_6" name='sh2' data-fieddata="Patient" value='Smoking:Occasional smoker'>
								<label for="sh_6"> Occasional smoker</label>
							</li>
							<li>
								<input type='radio' id="sh_7" name='sh2' data-fieddata="Patient" value='Smoking:Using Vape'>
								<label for="sh_7"> Using Vape</label>
							</li>
						</ul>
					</div>
					<div class="txt-lbl">
						<p>Alchohal Intake:</p>
						<ul class="rbtn">
							<li>
								<input type='radio' id="sh_8" name='sh1' data-fieddata="Patient" value='Alchohal Intake:Nil'>
								<label for="sh_8">Nil</label>
							</li>
							<li>
								<input type='radio' id="sh_9" name='sh1' data-fieddata="Patient" value='Alchohal Intake:Rarely'>
								<label for="sh_9">Rarely</label>
							</li>
							<li>
								<input type='radio' id="sh_10" name='sh1' data-fieddata="Patient" value='Alchohal Intake:<14 units per week'>
								<label for="sh_10"> <14 units per week </label>
							</li>
							<li>
								<input type='radio' id="sh_11" name='sh1' data-fieddata="Patient" value='Alchohal Intake:>14 units per week'>
								<label for="sh_11"> >14 units per week </label>
							</li>
						</ul>
					</div>
					<div class="txt-lbl">
						<p>Stress:</p>
						<ul class="rbtn">
							<li>
									<select name="stress" id="aligner-sel" class="sel_lnk">
										<option value="" disabled selected>Select your option</option>
										<option value="Stress:1 out of 10.">1</option>
										<option value="Stress:2 out of 10.">2</option>
										<option value="Stress:3 out of 10.">3</option>
										<option value="Stress:4 out of 10.">4</option>
										<option value="Stress:5 out of 10.">5</option>
										<option value="Stress:6 out of 10.">6</option>
										<option value="Stress:7 out of 10.">7</option>
										<option value="Stress:8 out of 10.">8</option>
										<option value="Stress:9 out of 10.">9</option>
										<option value="Stress:10 out of 10.">10</option>
									</select>
								</li>
						</ul>
						<p>out of 10.</p>
					</div>
					<div class="inputcss">
						<input type="text" name="or_s_note" value="" placeholder="Enter notes here...">
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
								<input type='radio' id="eoex_1" name='eoex1' data-fieddata="Patient" value='Nil'>
								<label for="eoex_1">Nil</label>
							</li>
							<li>
								<input type='radio' id="eoex_2" name='eoex1' data-fieddata="Patient" value='Other'>
								<label for="eoex_2">Other</label>
							</li>
						</ul>
					</div>
					<div class="inputcss">
						<input type="text" name="eoe_note" value="" placeholder="Enter notes here...">
					</div>
				</div>
			</div>
			<div class="main-sec">
				<div class="main-sec-in">
					<h3>Intra Oral Exam:</h3>
						<input type="hidden" name="heading" id="" value="">
						<input type="hidden" name="heading" id="" value="----------- Intra Oral Exam: ------------">
						<input type="hidden" name="heading" id="" value="">
					<div class="txt-lbl">
						<p>Soft tissues (Including tongue, palate, buccal mucosa, lingual mucosa, FOM):</p>
						<ul class="rbtn">
							<li>
								<input type='radio' id="ioex_1" name='ioex1' data-fieddata="Patient" value='Soft tissues (Including tongue, palate, buccal mucosa, lingual mucosa, FOM):Nil'>
								<label for="ioex_1">Nil</label>
							</li>
							<li>
								<input type='radio' id="ioex_2" name='ioex1' data-fieddata="Patient" value='Soft tissues (Including tongue, palate, buccal mucosa, lingual mucosa, FOM):Other'>
								<label for="ioex_2">Other</label>
							</li>
						</ul>
					</div>
					<div class="inputcss">
						<input type="text" name="ioe_note" value="" placeholder="Enter notes here...">
					</div>
				</div>
			</div>
			<div class="main-sec">
				<div class="main-sec-in">
					<h3>Orthodontic Assessment:</h3>
						<input type="hidden" name="heading" id="" value="">
						<input type="hidden" name="heading" id="" value="----------- Orthodontic Assessment:: ------------">
						<input type="hidden" name="heading" id="" value="">
					<div class="txt-lbl">
						<p>Skeletal class:</p>
						<ul class="rbtn">
							<li>
								<input type='radio' id="skcl_1" name='skcl' data-fieddata="dental_history" value='Skeletal class:I'>
								<label for="skcl_1">I</label>
							</li>
							<li>
								<input type='radio' id="skcl_2" name='skcl' data-fieddata="dental_history" value='Skeletal class:II'>
								<label for="skcl_2">II</label>
							</li>
							<li>
								<input type='radio' id="skcl_3" name='skcl' data-fieddata="dental_history" value='Skeletal class:III'>
								<label for="skcl_3">III</label>
							</li>
						</ul>
					</div>
					<div class="txt-lbl">
						<p>FMPA:</p>
						<ul class="rbtn">
							<li>
								<input type='radio' id="fmpa_1" name='fmpa' data-fieddata="dental_history" value='FMPA:High'>
								<label for="fmpa_1">High</label>
							</li>
							<li>
								<input type='radio' id="fmpa_2" name='fmpa' data-fieddata="dental_history" value='FMPA:Low'>
								<label for="fmpa_2">Low</label>
							</li>
							<li>
								<input type='radio' id="fmpa_3" name='fmpa' data-fieddata="dental_history" value='FMPA:Average'>
								<label for="fmpa_3">Average</label>
							</li>
						</ul>
					</div>
					<div class="txt-lbl">
						<p>Lower face height:</p>
						<ul class="rbtn">
							<li>
								<input type='radio' id="lfh_1" name='lfh' data-fieddata="dental_history" value='Lower face height:High'>
								<label for="lfh_1">High</label>
							</li>
							<li>
								<input type='radio' id="lfh_2" name='lfh' data-fieddata="dental_history" value='Lower face height:Low'>
								<label for="lfh_2">Low</label>
							</li>
							<li>
								<input type='radio' id="lfh_3" name='lfh' data-fieddata="dental_history" value='Lower face height:Average'>
								<label for="lfh_3">Average</label>
							</li>
						</ul>
					</div>
					<div class="txt-lbl"><p>Facial Asymmetry:</p>
						<ul class="rbtn">
							<li>
								<input type='radio' id="fasy_1" name='fasy' data-fieddata="dental_history" value='Facial Asymmetry:Nil'>
								<label for="fasy_1">Nil</label>
							</li>
							<li>
								<input type='radio' id="fasy_2" name='fasy' data-fieddata="dental_history" value='Facial Asymmetry:Other'>
								<label for="fasy_2">Other</label>
							</li>
						</ul>
					</div>
					<div class="txt-lbl"><p>Incisal class:</p>
						<ul class="rbtn">
							<li>
								<input type='radio' id="inci_1" name='inci' data-fieddata="dental_history" value='Incisal class:I'>
								<label for="inci_1">I</label>
							</li>
							<li>
								<input type='radio' id="inci_2" name='inci' data-fieddata="dental_history" value='Incisal class:II div I'>
								<label for="inci_2">II div I</label>
							</li>
							<li>
								<input type='radio' id="inci_3" name='inci' data-fieddata="dental_history" value='Incisal class:II div II'>
								<label for="inci_3">II div II</label>
							</li>
							<li>
								<input type='radio' id="inci_4" name='inci' data-fieddata="dental_history" value='Incisal class:III'>
								<label for="inci_4">III</label>
							</li>
						</ul>
					</div>
					<div class="txt-lbl"><p>RHS Canines:</p>
						<ul class="rbtn">
							<li>
								<input type='radio' id="rhsca_1" name='rhsca' data-fieddata="dental_history" value='RHS Canines:I'>
								<label for="rhsca_1">I</label>
							</li>
							<li>
								<input type='radio' id="rhsca_2" name='rhsca' data-fieddata="dental_history" value='RHS Canines:II'>
								<label for="rhsca_2">II</label>
							</li>
							<li>
								<input type='radio' id="rhsca_3" name='rhsca' data-fieddata="dental_history" value='RHS Canines:III'>
								<label for="rhsca_3">III</label>
							</li>
						</ul>
					</div>
					<div class="txt-lbl"><p>LHS Canines:</p>
						<ul class="rbtn">
							<li>
								<input type='radio' id="lhsca_1" name='lhsca' data-fieddata="dental_history" value='LHS Canines:I'>
								<label for="lhsca_1">I</label>
							</li>
							<li>
								<input type='radio' id="lhsca_2" name='lhsca' data-fieddata="dental_history" value='LHS Canines:II'>
								<label for="lhsca_2">II</label>
							</li>
							<li>
								<input type='radio' id="lhsca_3" name='lhsca' data-fieddata="dental_history" value='LHS Canines:III'>
								<label for="lhsca_3">III</label>
							</li>
						</ul>
					</div>
					<div class="txt-lbl"><p>RHS Molars:</p>
						<ul class="rbtn">
							<li>
								<input type='radio' id="rhsmo_1" name='rhsmo' data-fieddata="dental_history" value='RHS Molars:I'>
								<label for="rhsmo_1">I</label>
							</li>
							<li>
								<input type='radio' id="rhsmo_2" name='rhsmo' data-fieddata="dental_history" value='RHS Molars:II'>
								<label for="rhsmo_2">II</label>
							</li>
							<li>
								<input type='radio' id="rhsmo_3" name='rhsmo' data-fieddata="dental_history" value='RHS Molars:III'>
								<label for="rhsmo_3">III</label>
							</li>
						</ul>
					</div>
					<div class="txt-lbl"><p>LHS Molars:</p>
						<ul class="rbtn">
							<li>
								<input type='radio' id="lhsmo_1" name='lhsmo' data-fieddata="dental_history" value='LHS Molars:I'>
								<label for="lhsmo_1">I</label>
							</li>
							<li>
								<input type='radio' id="lhsmo_2" name='lhsmo' data-fieddata="dental_history" value='LHS Molars:II'>
								<label for="lhsmo_2">II</label>
							</li>
							<li>
								<input type='radio' id="lhsmo_3" name='lhsmo' data-fieddata="dental_history" value='LHS Molars:III'>
								<label for="lhsmo_3">III</label>
							</li>
						</ul>
					</div>
					<div class="txt-lbl"><p>OJ:</p>
						<ul class="rbtn">
							<li>
								<input type='radio' id="oj_1" name='oj' data-fieddata="dental_history" value='OJ:0 mm'>
								<label for="oj_1">0</label>
							</li>
							<li>
								<input type='radio' id="oj_2" name='oj' data-fieddata="dental_history" value='OJ:1 mm'>
								<label for="oj_2">1</label>
							</li>
							<li>
								<input type='radio' id="oj_3" name='oj' data-fieddata="dental_history" value='OJ:2 mm'>
								<label for="oj_3">2</label>
							</li>
							<li>
								<input type='radio' id="oj_4" name='oj' data-fieddata="dental_history" value='OJ:3 mm'>
								<label for="oj_4">3</label>
							</li>
							<li>
								<input type='radio' id="oj_5" name='oj' data-fieddata="dental_history" value='OJ:4 mm'>
								<label for="oj_5">4</label>
							</li>
							<li>
								<input type='radio' id="oj_6" name='oj' data-fieddata="dental_history" value='OJ:5 mm'>
								<label for="oj_6">5</label>
							</li>
							<li>
								<input type='radio' id="oj_7" name='oj' data-fieddata="dental_history" value='OJ:6 mm'>
								<label for="oj_7">6</label>
							</li>
							<li>
								<input type='radio' id="oj_8" name='oj' data-fieddata="dental_history" value='OJ:7 mm'>
								<label for="oj_8">7</label>
							</li>
							<li>
								<input type='radio' id="oj_9" name='oj' data-fieddata="dental_history" value='OJ:other'>
								<label for="oj_9">Other</label>
							</li>
						</ul>
					</div>
					<div class="txt-lbl"><p>OB:</p>
						<ul class="rbtn">
							<li>
								<input type='radio' id="ob_1" name='OB' data-fieddata="dental_history" value='OB:0 mm'>
								<label for="ob_1">0</label>
							</li>
							<li>
								<input type='radio' id="ob_2" name='OB' data-fieddata="dental_history" value='OB:1 mm'>
								<label for="ob_2">1</label>
							</li>
							<li>
								<input type='radio' id="ob_3" name='OB' data-fieddata="dental_history" value='OB:2 mm'>
								<label for="ob_3">2</label>
							</li>
							<li>
								<input type='radio' id="ob_4" name='OB' data-fieddata="dental_history" value='OB:3 mm'>
								<label for="ob_4">3</label>
							</li>
							<li>
								<input type='radio' id="ob_5" name='OB' data-fieddata="dental_history" value='OB:4 mm'>
								<label for="ob_5">4</label>
							</li>
							<li>
								<input type='radio' id="ob_6" name='OB' data-fieddata="dental_history" value='OB:5 mm'>
								<label for="ob_6">5</label>
							</li>
							<li>
								<input type='radio' id="ob_7" name='OB' data-fieddata="dental_history" value='OB:6 mm'>
								<label for="ob_7">6</label>
							</li>
							<li>
								<input type='radio' id="ob_8" name='OB' data-fieddata="dental_history" value='OB:7 mm'>
								<label for="ob_8">7</label>
							</li>
							<li>
								<input type='radio' id="ob_9" name='OB' data-fieddata="dental_history" value='OB:other'>
								<label for="ob_9">Other</label>
							</li>
						</ul>
					</div>
					<div class="txt-lbl"><p>Incisal edge position:</p>
						<ul class="rbtn">
							<li>
								<input type='radio' id="iep_1" name='iep' data-fieddata="dental_history" value='Incisal edge position:Ideal'>
								<label for="iep_1">Ideal</label>
							</li>
							<li>
								<input type='radio' id="iep_2" name='iep' data-fieddata="dental_history" value='Incisal edge position:High'>
								<label for="iep_2">High</label>
							</li>
							<li>
								<input type='radio' id="iep_3" name='iep' data-fieddata="dental_history" value='Incisal edge position:Low'>
								<label for="iep_3">Low</label>
							</li>
							<li>
								<input type='radio' id="iep_4" name='iep' data-fieddata="dental_history" value='Incisal edge position:other'>
								<label for="iep_4">other</label>
							</li>
						</ul>
					</div>
					<div class="txt-lbl"><p>Midlines:</p>
						<ul class="rbtn">
							<li>
								<input type='radio' id="midl_1" name='midl' data-fieddata="dental_history" value='Midlines:Coincident'>
								<label for="midl_1">Coincident</label>
							</li>
							<li>
								<input type='radio' id="midl_2" name='midl' data-fieddata="dental_history" value='Midlines:Deviated'>
								<label for="midl_2">Deviated</label>
							</li>
						</ul>
					</div>
					<div class="txt-lbl"><p>Crossbites:</p>
						<ul class="rbtn">
							<li>
								<input type='radio' id="crb_1" name='crb' data-fieddata="dental_history" value='Crossbites:Nil'>
								<label for="crb_1">Nil</label>
							</li>
							<li>
								<input type='radio' id="crb_2" name='crb' data-fieddata="dental_history" value='Crossbites:RHS'>
								<label for="crb_2">RHS</label>
							</li>
							<li>
								<input type='radio' id="crb_3" name='crb' data-fieddata="dental_history" value='Crossbites:LHS'>
								<label for="crb_3">LHS</label>
							</li>
							<li>
								<input type='radio' id="crb_4" name='crb' data-fieddata="dental_history" value='Crossbites:Bi-lateral'>
								<label for="crb_4">Bi-lateral</label>
							</li>
						</ul>
					</div>
					<div class="txt-lbl"><p>Crowding:</p>
						<ul class="rbtn">
							<li>
								<input type='radio' id="crod_1" name='crod' data-fieddata="dental_history" value='Crowding:Nil'>
								<label for="crod_1">Nil</label>
							</li>
							<li>
								<input type='radio' id="crod_2" name='crod' data-fieddata="dental_history" value='Crowding:Mild'>
								<label for="crod_2">Mild</label>
							</li>
							<li>
								<input type='radio' id="crod_3" name='crod' data-fieddata="dental_history" value='Crowding:Mod'>
								<label for="crod_3">Mod</label>
							</li>
							<li>
								<input type='radio' id="crod_4" name='crod' data-fieddata="dental_history" value='Crowding:Sev'>
								<label for="crod_4">Sev</label>
							</li>
							<li>
								<input type='radio' id="crod_5" name='crod' data-fieddata="dental_history" value='Crowding:Other'>
								<label for="crod_5">Other</label>
							</li>
						</ul>
					</div>
					<div class="txt-lbl"><p>Spacing:</p>
						<ul class="rbtn">
							<li>
								<input type='radio' id="spc_1" name='spc' data-fieddata="dental_history" value='Spacing:Nil'>
								<label for="spc_1">Nil</label>
							</li>
							<li>
								<input type='radio' id="spc_2" name='spc' data-fieddata="dental_history" value='Spacing:Mild'>
								<label for="spc_2">Mild</label>
							</li>
							<li>
								<input type='radio' id="spc_3" name='spc' data-fieddata="dental_history" value='Spacing:Mod'>
								<label for="spc_3">Mod</label>
							</li>
							<li>
								<input type='radio' id="spc_4" name='spc' data-fieddata="dental_history" value='Spacing:Sev'>
								<label for="spc_4">Sev</label>
							</li>
							<li>
								<input type='radio' id="spc_5" name='spc' data-fieddata="dental_history" value='Spacing:Other'>
								<label for="spc_5">Other</label>
							</li>
						</ul>
					</div>
					<div class="txt-lbl"><p>Gingival biotype:</p>
						<ul class="rbtn">
							<li>
								<input type='radio' id="gbio_1" name='gbio' data-fieddata="dental_history" value='Gingival biotype:Thin'>
								<label for="gbio_1">Thin</label>
							</li>
							<li>
								<input type='radio' id="gbio_2" name='gbio' data-fieddata="dental_history" value='Gingival biotype:Average'>
								<label for="gbio_2">Average</label>
							</li>
							<li>
								<input type='radio' id="gbio_3" name='gbio' data-fieddata="dental_history" value='Gingival biotype:Thick'>
								<label for="gbio_3">Thick</label>
							</li>
						</ul>
					</div>
					<div class="inputcss">
						<input type="text" name="orta_note" value="" placeholder="Enter notes here...">
					</div>
				</div>
			</div>
			<div class="main-sec">
				<div class="main-sec-in">
					<h3>Radiographs and Imaging</h3>
								<input type="hidden" name="heading" id="" value="">
								<input type="hidden" name="heading" id="" value="----------- Radiographs: ------------">
								<input type="hidden" name="heading" id="" value="">
					<div class=""><p><span class="rdai"></span></p>
						<ul class="rbtn">
					<li>
						<div data-toggle="modal" data-target="#myModal_1" class="sel_lnk">Select Option<i class="fas fa-external-link-alt"></i></div>
					</li>
						</ul>
					</div>
					<!---<div class="carries">-->
						<input type="hidden" name="co_sel" id="rdai_sel" value="">
						<!--<label for="" class="mt20">Caries: <span class="co_sel_teeth"></span></label>-->
					<!--</div>-->
				</div>
			</div>
			<div class="main-sec">
				<div class="main-sec-in">
				<h3 class="">Problem List:</h3>
					<input type="hidden" name="heading" id="" value="">
						<input type="hidden" name="heading" id="" value="----------- Problem List: ------------">
						<input type="hidden" name="heading" id="" value="">
				<div class="inputcss">
					<input type="text" name="ort_pl_note" value="" placeholder="Enter notes here...">
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
					<br/>
					<p>Informed pt that gold standard treatment is with fixed appliances by a specialist orthodontist however invisalign can get very good results.</p>
					<input type="hidden" name="heading" id="" value="Informed pt that gold standard treatment is with fixed appliances by a specialist orthodontist however invisalign can get very good results.">
					<p>Informed pt of potential need for attachments and IPR.</p>
					<input type="hidden" name="heading" id="" value="Informed pt of potential need for attachments and IPR.">
					<p>Advised will need to wear invisalign aligners for 22hrs/day, only removing to eat, drink & brush their teeth.</p>
					<input type="hidden" name="heading" id="" value="Advised will need to wear invisalign aligners for 22hrs/day, only removing to eat, drink & brush their teeth.">
					<p>Informed pt that after treatment they will need to wear retainers for life to prevent relapse of their tooth position.</p>
					<input type="hidden" name="heading" id="" value="Informed pt that after treatment they will need to wear retainers for life to prevent relapse of their tooth position.">
				</div>
				</div>
			</div>
			
			<div class="main-sec">
				<div class="main-sec-in">
					<h3>Treatment Plan:</h3>
						<input type="hidden" name="heading" id="" value="">
						<input type="hidden" name="heading" id="" value="----------- Treatment Plan: ------------">
						<input type="hidden" name="heading" id="" value="">
					<div class="txt-lbl"><p>Invisalign:</p>
						<ul class="rbtn">
							<li>
								<input type='radio' id="invi_1" name='invi' data-fieddata="dental_history" value='Invisalign:Go'>
								<label for="invi_1">Go</label>
							</li>
							<li>
								<input type='radio' id="invi_2" name='invi' data-fieddata="dental_history" value='Invisalign:Express'>
								<label for="invi_2">Express</label>
							</li>
							<li>
								<input type='radio' id="invi_3" name='invi' data-fieddata="dental_history" value='Invisalign:Lite'>
								<label for="invi_3">Lite</label>
							</li>
							<li>
								<input type='radio' id="invi_4" name='invi' data-fieddata="dental_history" value='Invisalign:Comprehensive'>
								<label for="invi_4">Comprehensive</label>
							</li>
						</ul>
					</div>
					<div class="txt-lbl"><p>Likely duration:</p>
					<input type="hidden" name="heading" id="" value="">
						<input type="hidden" name="heading" id="" value="----------- Likely duration: ------------">
						<input type="hidden" name="heading" id="" value="">
						<ul class="rbtn">
							<li>
									<select name="stress" id="aligner-sel" class="sel_lnk">
										<option value="" disabled selected>Select your option</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="10">10</option>
										<option value="11">11</option>
										<option value="12">12</option>
										<option value="13">13</option>
										<option value="14">14</option>
										<option value="15">15</option>
										<option value="16">16</option>
										<option value="17">17</option>
										<option value="18">18</option>
										<option value="19">19</option>
										<option value="20">20</option>
										<option value="21">21</option>
										<option value="22">22</option>
										<option value="23">23</option>
										<option value="24">24</option>
										<option value="other">Other</option>
									</select>
								</li>
						</ul>
						<p>to</p>
						<ul class="rbtn">
							<li>
									<select name="stress" id="aligner-sel" class="sel_lnk">
										<option value="" disabled selected>Select your option</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="10">10</option>
										<option value="11">11</option>
										<option value="12">12</option>
										<option value="13">13</option>
										<option value="14">14</option>
										<option value="15">15</option>
										<option value="16">16</option>
										<option value="17">17</option>
										<option value="18">18</option>
										<option value="19">19</option>
										<option value="20">20</option>
										<option value="21">21</option>
										<option value="22">22</option>
										<option value="23">23</option>
										<option value="24">24</option>
										<option value="other">Other</option>
									</select>
								</li>
						</ul>
						<p>months</p>
						</ul>
					</div>
					<div class="txt-lbl"><p>Pt to book in for:</p>
						<ul class="rbtn">
							<li>
								<input type='radio' id="invisalign_1" name='Invisalign' data-fieddata="dental_history" value='Invisalign:Go,OPG and photos'>
								<label for="invisalign_1">Scan</label>
							</li>
							<li>
								<input type='radio' id="invisalign_2" name='Invisalign' data-fieddata="dental_history" value='Invisalign:Express,OPG and photos'>
								<label for="invisalign_2">Impressions</label>
							</li>
						</ul>
						<p>,OPG and photos</p>
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



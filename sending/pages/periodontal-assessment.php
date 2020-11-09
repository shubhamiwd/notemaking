<?php 
/*
Template Name: Dental App
*/

include '../templates/header.php';
include '../models/periodontal-assessment-modal.php';

?>
	<div class="container" id="checkbox-container">
		<div class="tem_title">
			<h2>Periodontal assessment</h2>
		</div>
		<form onclick="" id="myform_recall">
			<div class="main-section">
			<input type="hidden" name="heading" id="Template_Name1" value="Template Name - Periodontal assessment">
        <input type="hidden" name="heading" id="Template_Name2" value="">
		<input type="hidden" name="heading" id="Date_1" value="<?php echo "Form filling date " . date("Y/m/d"); ?>">
        <input type="hidden" name="heading" id="Date_2" value="">
			<div class="mtnegtive">
			<div class="main-sec">
				<div class="main-sec-in">
					<h3>Perio Treatment</h3>
					<input type="hidden" name="neme_1" id="" value="">
						<input type="hidden" name="neme_1" id="" value="----------- Extraction Appointment: ------------">
						<input type="hidden" name="neme_1" id="" value="">
					<div class="inputcss">
					<div class="txt-lbl"><p>Patient attending for: </p>
						<ul class="rbtn">
						<li>
							<input type='radio' name='Perio' id="scale-polish" data-fieddata="Patient" value='Patient attending for: Scale and polish'>
							<label for="scale-polish">Scale and polish</label>
						</li>
						<li>
							<input type='radio' name='Perio' id="surgical-hygiene" data-fieddata="Patient" value='Patient attending for: Non surgical hygiene phase therapy'>
							<label for="surgical-hygiene">Non surgical hygiene phase therapy</label>
						</li>
						<li>
							<input type='radio' name='Perio' id="perio-review" data-fieddata="Patient" value='Patient attending for: Perio review'>
							<label for="perio-review">Perio review</label>
						</li>
						<li>
							<input type='radio' name='Perio' id="perio-other" data-fieddata="Patient" value='Patient attending for: Other'>
							<label for="perio-other">Other</label>
						</li>
						</ul>
						</div>
						<div class="inputcss">
							<input type='text' name='Dentist' id="extract1" data-fieddata="Dentist" value='Dentist: '>

							<input type='text' name='Nurse' id="extract2" data-fieddata="Nurse" value='Nurse: '>
							
					</div>
					<div class="txt-lbl"><p>C/O:</p>
						<ul class="rbtn">
						<li>
							<input type='radio' name='Perio-c-o' id="co-nil" data-fieddata="Patient" value='C/O: Nil'>
							<label for="co-nil">Nil</label>
						</li>
						<li>
							<input type='radio' name='Perio-c-o' id="co-other" data-fieddata="Patient" value='C/o: Other'>
							<label for="co-other">Other</label>
						</li>
						</ul>
					  </div>
					  <div class="inputcss">
							<input type='text' name='MH' id="perio1" data-fieddata="Dentist" value='MH: '>
					</div>
					<div class="txt-lbl"><p>Risk Factors: <span class="select_perio-risk"></span></p>
						<ul class="rbtn">
						<li>
						<div data-toggle="modal" data-target="#perio_modal_1" class="sel_lnk">Select<i class="fas fa-external-link-alt"></i></div>
					</li>
						</ul>
						<input type="hidden" name="perio_risk-factor" id="extract_perio-risk-factor" value="">
					</div>
					</div>
			</div>
			</div>
			<div class="main-sec">
				<div class="main-sec-in">
				<input type="hidden" name="neme_1" id="" value="">
						<input type="hidden" name="neme_1" id="" value="----------- Assessments: ------------">
						<input type="hidden" name="neme_1" id="" value="">
					<h3>Assessments:</h3>
					<div class="txt-lbl"><p>Plaque recording:</p>
					 <ul class="rbtn">
					 <li>
							<select name="plaque" class="sel_lnk">
								<option>Select your option</option>
								<option value="Plaque recording: 1">1</option>
								<option value="Plaque recording: 2">2</option>
								<option value="Plaque recording: 3">3</option>
								<option value="Plaque recording: 4">4</option>
								<option value="Plaque recording: 5">5</option>
								<option value="Plaque recording: 6">6</option>
								<option value="Plaque recording: 7">7</option>
								<option value="Plaque recording: 8">8</option>
								<option value="Plaque recording: 9">9</option>
								<option value="Plaque recording: 10">10</option>
								<option value="Plaque recording: 11">11</option>
								<option value="Plaque recording: 12">12</option>
								<option value="Plaque recording: 13">13</option>
								<option value="Plaque recording: 14">14</option>
								<option value="Plaque recording: 15">15</option>
								<option value="Plaque recording: 16">16</option>
								<option value="Plaque recording: 17">17</option>
								<option value="Plaque recording: 18">18</option>
								<option value="Plaque recording: 19">19</option>
								<option value="Plaque recording: 20">20</option>
								<option value="Plaque recording: 21">21</option>
								<option value="Plaque recording: 22">22</option>
								<option value="Plaque recording: 23">23</option>
								<option value="Plaque recording: 24">24</option>
								<option value="Plaque recording: 25">25</option>
								<option value="Plaque recording: 26">26</option>
								<option value="Plaque recording: 27">27</option>
								<option value="Plaque recording: 28">28</option>
								<option value="Plaque recording: 29">29</option>
								<option value="Plaque recording: 30">30</option>
								<option value="Plaque recording: 31">31</option>
								<option value="Plaque recording: 32">32</option>
								<option value="Plaque recording: 33">33</option>
								<option value="Plaque recording: 34">34</option>
								<option value="Plaque recording: 35">35</option>
								<option value="Plaque recording: 36">36</option>
								</select>
						</li></ul></div>
						<div class="txt-lbl"><p>Bleeding recording:</p>
					 <ul class="rbtn">
					 <li>
							<select name="bleeding-recording" class="sel_lnk">
								<option>Select your option</option>
								<option value="Bleeding recording: 1">1</option>
								<option value="Bleeding recording: 2">2</option>
								<option value="Bleeding recording: 3">3</option>
								<option value="Bleeding recording: 4">4</option>
								<option value="Bleeding recording: 5">5</option>
								<option value="Bleeding recording: 6">6</option>
								<option value="Bleeding recording: 7">7</option>
								<option value="Bleeding recording: 8">8</option>
								<option value="Bleeding recording: 9">9</option>
								<option value="Bleeding recording: 10">10</option>
								<option value="Bleeding recording: 11">11</option>
								<option value="Bleeding recording: 12">12</option>
								<option value="Bleeding recording: 13">13</option>
								<option value="Bleeding recording: 14">14</option>
								<option value="Bleeding recording: 15">15</option>
								<option value="Bleeding recording: 16">16</option>
								<option value="Bleeding recording: 17">17</option>
								<option value="Bleeding recording: 18">18</option>
								<option value="Bleeding recording: 19">19</option>
								<option value="Bleeding recording: 20">20</option>
								<option value="Bleeding recording: 21">21</option>
								<option value="Bleeding recording: 22">22</option>
								<option value="Bleeding recording: 23">23</option>
								<option value="Bleeding recording: 24">24</option>
							</select>
						</li></ul></div>
						<div class="txt-lbl">
						<ul class="rbtn">
						<li>
							<input type='radio' name='6ppc' id="6ppc-carried" data-fieddata="Patient" value='6PPC carried out'>
							<label for="6ppc-carried">6PPC carried out</label>
						</li>
						<li>
							<input type='radio' name='6ppc' id="6ppc-not-needed" data-fieddata="Patient" value='6PPC not needed'>
							<label for="6ppc-not-needed">6PPC not needed</label>
						</li>
						</ul>
					  </div>
					  <div class="txt-lbl"><p>Mobility:</p>
						<ul class="rbtn">
						<li>
							<input type='radio' name='Mobility' id="mobility-nil" data-fieddata="Patient" value='Mobility: Nil'>
							<label for="mobility-nil">Nil</label>
						</li>
						<li>
							<input type='radio' name='Mobility' id="mobility-noted" data-fieddata="Patient" value='Mobility: Noted'>
							<label for="mobility-noted">Noted</label>
						</li>
						</ul>
					  </div>
					  <div class="txt-lbl"><p>Furcation involvement:</p>
						<ul class="rbtn">
						<li>
							<input type='radio' name='Furcation' id="furcation-nil" data-fieddata="Patient" value='Furcation involvement: Nil'>
							<label for="furcation-nil">Nil</label>
						</li>
						<li>
							<input type='radio' name='Furcation' id="furcation-noted" data-fieddata="Patient" value='Furcation involvement: Noted'>
							<label for="furcation-noted">Noted</label>
						</li>
						</ul>
					  </div>
					  <div class="txt-lbl"><p>Diagnosis made and discussed at exam appointment.</p>
						</div>
					  </div>
			</div>
			</div>
			<div class="main-sec">
				<div class="main-sec-in">
				<input type="hidden" name="neme_1" id="" value="">
						<input type="hidden" name="neme_1" id="" value="----------- Discussion: ------------">
						<input type="hidden" name="neme_1" id="" value="">
						<h3>Discussion:</h3>
						<div class="txt-lbl">
					<div class="inputcss">
						<input type="text" name="treatment " value="" placeholder="Enter notes here...">
					</div>
					</div>
					</div>
					</div>
					<div class="main-sec">
				<div class="main-sec-in">
					<h3>Plan</h3>
					<input type="hidden" name="neme_1" id="" value="">
						<input type="hidden" name="neme_1" id="" value="----------- Plan: ------------">
						<input type="hidden" name="neme_1" id="" value="">
					<div class="inputcss">
					<div class="txt-lbl"><p>Patient engagement: </p>
						<ul class="rbtn">
						<li>
							<input type='radio' name='patient-engagement' id="commenced-perio" data-fieddata="Patient" value='Patient engagement: First time I have commenced perio management with patient'>
							<label for="commenced-perio">First time I have commenced perio management with patient</label>
						</li>
						<li>
							<input type='radio' name='patient-engagement' id="non-engaging" data-fieddata="Patient" value='Patient engagement: Non-engaging'>
							<label for="non-engaging">Non-engaging</label>
						</li>
						<li>
							<input type='radio' name='patient-engagement' id="engaging" data-fieddata="Patient" value='Patient engagement: Engaging'>
							<label for="engaging">Engaging</label>
						</li>
						<li>
							<input type='radio' name='patient-engagement' id="hpt" data-fieddata="Patient" value='Patient engagement: Patient showing good engagement but previous HPT has failed to improve condition'>
							<label for="hpt">Patient showing good engagement but previous HPT has failed to improve condition</label>
						</li>
						<li>
							<input type='radio' name='patient-engagement' id="engaging-other" data-fieddata="Patient" value='Patient engagement: Other'>
							<label for="engaging-other">Other</label>
						</li>
						</ul>
						</div>
						<div class="txt-lbl"><p>Current Patient Pathway: </p>
						<ul class="rbtn">
						<li>
							<input type='radio' name='patient-pathway' id="periodontal-health" data-fieddata="Patient" value='Current Patient Pathway: Periodontal Health'>
							<label for="periodontal-health">Periodontal Health</label>
						</li>
						<li>
							<input type='radio' name='patient-pathway' id="periodontal-risk" data-fieddata="Patient" value='Current Patient Pathway: Periodontal Risk'>
							<label for="periodontal-risk">Periodontal Risk</label>
						</li>
						<li>
							<input type='radio' name='patient-pathway' id="periodontal-disease" data-fieddata="Patient" value='Current Patient Pathway: Periodontal Disease'>
							<label for="periodontal-disease">Periodontal Disease</label>
						</li>
						<li>
							<input type='radio' name='patient-pathway' id="advance-periodontal-disease" data-fieddata="Patient" value='Current Patient Pathway: Advanced Periodontal Disease'>
							<label for="advance-periodontal-disease">Advanced Periodontal Disease</label>
						</li>
						<li>
							<input type='radio' name='patient-pathway' id="periodontal-other" data-fieddata="Patient" value='Current Patient Pathway: Other'>
							<label for="periodontal-other">Other</label>
						</li>
						</ul>
						</div>
					<div class="txt-lbl"><p>Potential sequela of periodontal treatments: <span class="select_potential-sequela"></span></p>
						<ul class="rbtn">
						<li>
						<div data-toggle="modal" data-target="#perio_modal_2" class="sel_lnk">Select<i class="fas fa-external-link-alt"></i></div>
					</li>
						</ul>
						<input type="hidden" name="perio_risk-factor" id="extract_potential-sequela" value="">
					</div>
					</div>
				</div>
				</div>
					<div class="main-sec">
				<div class="main-sec-in">
				<input type="hidden" name="neme_1" id="" value="">
						<input type="hidden" name="neme_1" id="" value="----------- LA: ------------">
						<input type="hidden" name="neme_1" id="" value="">
					<h3>LA:</h3>
					<div class="txt-lbl">
					 <ul class="rbtn">
					 <li>
							<input type='radio' name='perio-la' id="perio-nil" data-fieddata="Patient" value='LA: Nil'>
							<label for="perio-nil">Nil</label>
						</li>
						<li>
							<input type='radio' name='perio-la' id="perio-infiltration" data-fieddata="Patient" value='LA: Infiltration'>
							<label for="perio-infiltration">Infiltration</label>
						</li>
						<li>
							<input type='radio' name='perio-la' id="perio-ianb" data-fieddata="Patient" value='LA: IANB'>
							<label for="perio-ianb">IANB</label>
						</li>
						<li>
							<input type='radio' name='perio-la' id="perio-infilt" data-fieddata="Patient" value='LA: IANB+Infiltration'>
							<label for="perio-infilt">IANB+Infiltration</label>
						</li>
						<li>
							<input type='radio' name='perio-la' id="perio-la-other" data-fieddata="Patient" value='LA: Other'>
							<label for="perio-la-other">Other</label>
						</li>
						</ul>
					  </div>
					  </div>
			</div>
			<div class="main-sec">
				<div class="main-sec-in">
				<input type="hidden" name="neme_1" id="" value="">
						<input type="hidden" name="neme_1" id="" value="----------- Treatment Today: ------------">
						<input type="hidden" name="neme_1" id="" value="">
					<h3>Treatment Today:</h3>
					<div class="txt-lbl"><p>VCO for tx today: </p>
					 <ul class="rbtn">
					 <li>
							<input type='radio' name='VCO' id="subgingival" data-fieddata="Patient" value='VCO for tx today: Gross supra and subgingival scaling with ultrasonic in all areas with calculus build up'>
							<label for="subgingival">Gross supra and subgingival scaling with ultrasonic in all areas with calculus build up</label>
						</li>
						<li>
							<input type='radio' name='VCO' id="supra" data-fieddata="Patient" value='VCO for tx today: Supra and subgingival scaling and RSD carried out in'>
							<label for="supra">Supra and subgingival scaling and RSD carried out in</label>
						</li>
						<li>
							<input type='radio' name='VCO' id="treatment" data-fieddata="Patient" value='VCO for tx today: Patient does not want periodontal treatment or scaling'>
							<label for="treatment">Patient does not want periodontal treatment or scaling</label>
						</li>
						<li>
							<input type='radio' name='VCO' id="vco-other" data-fieddata="Patient" value='VCO for tx today: Other'>
							<label for="vco-other">Other</label>
						</li>
						</ul>
					  </div>
					  </div>
			</div>
			<div class="main-sec">
				<div class="main-sec-in">
				<input type="hidden" name="neme_1" id="" value="">
						<input type="hidden" name="neme_1" id="" value="----------- Oral Hygiene: ------------">
						<input type="hidden" name="neme_1" id="" value="">
					<h3>Oral Hygiene:</h3>
					<div class="txt-lbl"><p>OHI given regarding: <span class="select_OHI"></span></p>
						<ul class="rbtn">
						<li>
						<div data-toggle="modal" data-target="#perio_modal_3" class="sel_lnk">OHI<i class="fas fa-external-link-alt"></i></div>
					</li>
						</ul>
						<input type="hidden" name="perio_risk-factor" id="extract_OHI" value="">
					</div>
					<div class="txt-lbl"><p>Advised patient that they will see their gums bleeding and this is a sign of active disease. With a few weeks of excellent oral hygiene using the methods shown you can expect this bleeding to reduce. When you are seeing bleeding this is your body's way of telling you that there is something here that it does not like, in this case plaque, so it is asking you to focus here and remove the plaque.</p>
					</div>
					  </div>
			</div>
			<div class="main-sec">
				<div class="main-sec-in">
				<input type="hidden" name="neme_1" id="" value="">
						<input type="hidden" name="neme_1" id="" value="----------- Review Plan/Next Visit: ------------">
						<input type="hidden" name="neme_1" id="" value="">
					<h3>Review Plan/Next Visit:</h3>
					<div class="txt-lbl"><p>Return in: </p>
					 <ul class="rbtn">
					 <li>
							<input type='radio' name='return-in' id="return-in3" data-fieddata="Patient" value='Return in: 3'>
							<label for="return-in3">3</label>
						</li>
						<li>
							<input type='radio' name='return-in' id="return-in6" data-fieddata="Patient" value='Return in: 6'>
							<label for="return-in6">6</label>
						</li>
						<li>
							<input type='radio' name='return-in' id="return-in9" data-fieddata="Patient" value='Return in: 9'>
							<label for="return-in9">9</label>
						</li>
						<li>
							<input type='radio' name='return-in' id="return-in12" data-fieddata="Patient" value='Return in: 12'>
							<label for="return-in12">12</label>
						</li>
						</ul><p>months to review</p>
					  </div>
					<div class="txt-lbl"><p>Carry out: <span class="select_carry-out"></span></p>
						<ul class="rbtn">
						<li>
						<div data-toggle="modal" data-target="#perio_modal_4" class="sel_lnk">Select<i class="fas fa-external-link-alt"></i></div>
					</li>
						</ul>
						<input type="hidden" name="perio_risk-factor" id="extract_carry-out" value="">
					</div>
					 <div class="inputcss">
						<input type="text" name="la" value="" placeholder="Enter notes here...">
					</div>
					  </div>
					  </div>
					  <div>
			<div class="txt_cpd"><p>Text Copied</p></div>
			</div>
					  </div>
			

		<!-- Modal -->
		<div class="all_messages"></div>
		<div class="Clipboard_btn">
			<button class='copy cp_cl' onclick="storage_data();">Copy To Clipboard</button>
		</div>
		</form>
		<textarea id='copy' class="display_none"></textarea>
	</div>

<?php include '../templates/footer.php'; ?>

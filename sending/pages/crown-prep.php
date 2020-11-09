<?php 
/*
Template Name: Dental App
*/

include '../templates/header.php';
include '../models/crown-prep-modal.php';

?>
	<div class="container" id="checkbox-container">
		<div class="tem_title">
			<h2>Crown prep</h2>
		</div>
		<form action="" id="myform_recall" method="post">
			<div class="main-section">
			<input type="hidden" name="heading" id="Template_Name1" value="Template Name - RCT First Visit">
        <input type="hidden" name="heading" id="Template_Name2" value="">
		<input type="hidden" name="heading" id="Date_1" value="<?php echo "Form filling date " . date("Y/m/d"); ?>">
        <input type="hidden" name="heading" id="Date_2" value="">
			<div class="mtnegtive">
			<div class="main-sec">
				<div class="main-sec-in">
					<input type="hidden" name="neme_1" id="" value="">
						<input type="hidden" name="neme_1" id="" value="----------- Prep Appointment: ------------">
						<input type="hidden" name="neme_1" id="" value="">
					<div class="inputcss">
					<label for="a11">Prep Appointment:</label>
							<div class="txt-lbl"><p>Patient attending for</p>
					<ul class="rbtn">
						<li>
							<input type='radio' name='attending' id="prep1" data-fieddata="Patient" value='Patient attending for: Onlay prep today'>
							<label for="prep1">Onlay</label>
						</li>
						<li>
							<input type='radio' name='attending' id="prep2" data-fieddata="Patient" value='Patient attending for: Crown prep today'>
							<label for="prep2">Crown</label>
						</li>
						<li>
							<input type='radio' name='attending' id="prep3" data-fieddata="Patient" value='Patient attending for: Bridge prep today'>
							<label for="prep3">Bridge</label>
						</li>
						<li>
							<input type='radio' name='attending' id="prep4" data-fieddata="Patient" value='Patient attending for: Other prep today'>
							<label for="prep4">Other</label>
						</li>
					</ul><p>prep today</p></div>
							<div class="txt-lbl"><p>Teeth: <span class="crown_prep_teeth"></span></p>
						<ul class="rbtn">
						<li>
							<input type='radio' name='teeth' id="sel-teeth" data-fieddata="Patient" value='Teeth: Bridge'>
							<label for="sel-teeth">Bridge</label>
						</li>
					<li>
						<div data-toggle="modal" data-target="#crown_modal_1" class="sel_lnk">Select Option<i class="fas fa-external-link-alt"></i></div>
					</li>
						</ul>
						<input type="hidden" name="all" id="crown_teeth" value="">
					</div>
					</div>
					<div class="inputcss">
							<input type='text' name='Dentist' id="a2" data-fieddata="Dentist" value='Dentist: '>

							<input type='text' name='Nurse' id="a3" data-fieddata="Nurse" value='Nurse: '>
							
							<input type='text' name='RAD present' id="a3" data-fieddata="RAD present" value='RAD present: '>
							
					</div>
					<div class="txt-lbl"><p>Patient aware of need for upkeep of restoration – flossing/tepe brushes and regular recall to prevent secondary decay or failure </p>
					<ul class="rbtn">
						<li>
							<input type='radio' name='restoration' id="restoration1" data-fieddata="Patient" value='Patient aware of need for upkeep of restoration – flossing/tepe brushes and regular recall to prevent secondary decay or failure: Risk of tooth devitalisation and need for RCT in the future discussed'>
							<label for="restoration1">Risk of tooth devitalisation and need for RCT in the future discussed</label>
						</li>
						<li>
							<input type='radio' name='restoration' id="restoration2" data-fieddata="Patient" value='Patient aware of need for upkeep of restoration – flossing/tepe brushes and regular recall to prevent secondary decay or failure: Non-vital tooth'>
							<label for="restoration2">Non-vital tooth</label>
						</li>
						</ul>
			</div>
			<div class="inputcss">
						<input type="text" name="prep_appointment" value="" placeholder="Enter notes here...">
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
							<input type='radio' name='la' id="b1" data-fieddata="Patient" value='LA: Nil'>
							<label for="b1">Nil</label>
						</li>
						<li>
							<input type='radio' name='la' id="b2" data-fieddata="Patient" value='LA: Infiltration'>
							<label for="b2">Infiltration</label>
						</li>
						<li>
							<input type='radio' name='la' id="b3" data-fieddata="Patient" value='LA: IANB'>
							<label for="b3">IANB</label>
						</li>
						<li>
							<input type='radio' name='la' id="b4" data-fieddata="Patient" value='LA: IANB+Infiltration'>
							<label for="b4">IANB+Infiltration</label>
						</li>
						<li>
							<input type='radio' name='la' id="b5" data-fieddata="Patient" value='LA: Other'>
							<label for="b5">Other</label>
						</li>
						</ul>
					  </div>
					  <div class="inputcss">
						<input type="text" name="la" value="" placeholder="Enter notes here...">
					</div>
					  </div>
			</div>
			<div class="main-sec">
				<div class="main-sec-in">
				<input type="hidden" name="neme_1" id="" value="">
						<input type="hidden" name="neme_1" id="" value="----------- Tooth prepped: ------------">
						<input type="hidden" name="neme_1" id="" value="">
					<div class="txt-lbl"><p>Tooth prepped</p>
					<ul class="rbtn">
						<li>
							<input type='radio' name='prepped' id="tooth_prepped1" data-fieddata="Patient" value='Tooth prepped: Photos taken'>
							<label for="tooth_prepped1">Photos taken</label>
						</li>
						<li>
							<input type='radio' name='prepped' id="tooth_prepped2" data-fieddata="Patient" value='Tooth prepped: No Photos'>
							<label for="tooth_prepped2">No Photos</label>
						</li>
						<li>
							<input type='radio' name='prepped' id="tooth_prepped3" data-fieddata="Patient" value='Tooth prepped: Other'>
							<label for="tooth_prepped3">Other</label>
						</li>
					</ul></div>
								<div class="txt-lbl"><p>Shade: <span class="select_shade"></span></p>
					<ul class="rbtn">
					<li>
						<div data-toggle="modal" data-target="#crown_modal_2" class="sel_lnk">Select<i class="fas fa-external-link-alt"></i></div>
					</li>
						</ul>
						<input type="hidden" name="all" id="crown_teeth_shade" value="">
						</div>
					<div class="txt-lbl"><p>Lab: </p>
					<ul class="rbtn">
						<li>
							<input type='radio' id="lab1" name='lab' data-fieddata="alcohol" value='Lab: Davis Advanced'>
							<label for="lab1">Davis Advanced</label>
						</li>
						<li>
							<input type='radio' id="lab2" name='lab' data-fieddata="alcohol" value='Lab: Digital Scan taken'>
							<label for="lab2">Digital Scan taken</label>
						</li>
						</ul>
						</div>
						<div class="txt-lbl"><p>Temporized With: </p>
					<ul class="rbtn">
						<li>
							<input type='radio' id="temporized1" name='temporized_with' data-fieddata="alcohol" value='Temporized With: Acrylic temp from pre-op alginate'>
							<label for="temporized1">Acrylic temp from pre-op alginate</label>
						</li>
						<li>
							<input type='radio' id="temporized2" name='temporized_with' data-fieddata="alcohol" value='Temporized With: Telio'>
							<label for="temporized2">Telio</label>
						</li>
						<li>
							<input type='radio' id="temporized3" name='temporized_with' data-fieddata="alcohol" value='Temporized With: Clip'>
							<label for="temporized3">Clip</label>
						</li>
						<li>
							<input type='radio' id="temporized4" name='temporized_with' data-fieddata="alcohol" value='Temporized With: Composite'>
							<label for="temporized4">Composite</label>
						</li>
						<li>
							<input type='radio' id="temporized5" name='temporized_with' data-fieddata="alcohol" value='Temporized With: Other'>
							<label for="temporized5">Other</label>
						</li>
						</ul>
						</div>
						<div class="txt-lbl">
						<div class="inputcss">
						<input type="text" name="occlusion " value="Occlusion checked and adjusted" placeholder="Enter notes here...">
					</div>
					<div class="inputcss">
						<input type="text" name="warned " value="Pt warned that temp may come off, to let us know if it does" placeholder="Enter notes here...">
					</div>
					<div class="inputcss">
						<input type="text" name="aware " value="Pt aware not to floss around temp filling" placeholder="Enter notes here...">
					</div>
					<div class="inputcss">
						<input type="text" name="fit " value="TCA for fit" placeholder="Enter notes here...">
					</div>
					<div class="inputcss">
						<input type="text" name="treatment " value="" placeholder="Enter notes here...">
					</div>
					</div>
					</div>
					<div class="txt_cpd"><p>Text Copied</p></div>
					</div>
					</div>
		<!-- Modal -->
		<div class="all_messages"></div>
		<div class="Clipboard_btn">
			<!--<button class="copy cp_cl" id="copy_all_fields" onclick="storage_data();">Copy To Clipboard</button>-->
			<button type="submit" class="copy cp_cl" id="copy_all_fields" value="submit" onclick="storage_data();">Copy To Clipboard</button>
		</div>
		</form>
		<textarea id='copy' class="display_none"></textarea>
	</div>

<?php include '../templates/footer.php'; ?>

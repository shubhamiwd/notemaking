<?php 
/*
Template Name: Dental App
*/

include '../templates/header.php';
include '../models/extract-models.php';

?>
	<div class="container" id="checkbox-container">
		<div class="tem_title">
			<h2>Extraction</h2>
		</div>
		<form onclick="" id="myform_recall">
			<div class="main-section">
			<input type="hidden" name="heading" id="Template_Name1" value="Template Name - RCT First Visit">
        <input type="hidden" name="heading" id="Template_Name2" value="">
		<input type="hidden" name="heading" id="Date_1" value="<?php echo "Form filling date " . date("Y/m/d"); ?>">
        <input type="hidden" name="heading" id="Date_2" value="">
			<div class="mtnegtive">
			<div class="main-sec">
				<div class="main-sec-in">
					<h3>Maxillary</h3>
					<input type="hidden" name="neme_1" id="" value="">
						<input type="hidden" name="neme_1" id="" value="----------- Extraction Appointment: ------------">
						<input type="hidden" name="neme_1" id="" value="">
					<div class="inputcss">
					<label for="a11">Extraction Appointment:</label>
					<div class="inputcss">
							<input type='text' name='Dentist' id="extract1" data-fieddata="Dentist" value='Dentist: '>

							<input type='text' name='Nurse' id="extract2" data-fieddata="Nurse" value='Nurse: '>
							
					</div>
					<div class="txt-lbl"><p>Patient attending for extraction of: <span class="extraction_attending"></span></p>
						<ul class="rbtn">
						<li>
							<input type='radio' name='teeth' id="extraction-patient" data-fieddata="Patient" value='Patient attending for extraction of: Nil'>
							<label for="extraction-patient">Nil</label>
						</li>
					<li>
						<div data-toggle="modal" data-target="#extract_modal_1" class="sel_lnk">Select Option<i class="fas fa-external-link-alt"></i></div>
					</li>
						</ul>
						<input type="hidden" name="extract_teeth" id="extract_teeth" value="">
					</div>
							<div class="txt-lbl"><p>Attending with:</p>
					<ul class="rbtn">
						<li>
							<input type='radio' name='attending' id="mum" data-fieddata="Patient" value='Attending with: Mum'>
							<label for="mum">Mum</label>
						</li>
						<li>
							<input type='radio' name='attending' id="dad" data-fieddata="Patient" value='Attending with: Dad'>
							<label for="dad">Dad</label>
						</li>
						<li>
							<input type='radio' name='attending' id="mum-dad" data-fieddata="Patient" value='Attending with: Mum and Dad'>
							<label for="mum-dad">Mum and Dad</label>
						</li>
						<li>
							<input type='radio' name='attending' id="friend" data-fieddata="Patient" value='Attending with: Friend'>
							<label for="friend">Friend</label>
						</li>
						<li>
							<input type='radio' name='attending' id="brother" data-fieddata="Patient" value='Attending with: Brother'>
							<label for="brother">Brother</label>
						</li>
						<li>
							<input type='radio' name='attending' id="sister" data-fieddata="Patient" value='Attending with: Sister'>
							<label for="sister">Sister</label>
						</li>
						<li>
							<input type='radio' name='attending' id="carer" data-fieddata="Patient" value='Attending with: Carer'>
							<label for="carer">Carer</label>
						</li>
						<li>
							<input type='radio' name='attending' id="extract-other" data-fieddata="Patient" value='Attending with: Other'>
							<label for="extract-other">Other</label>
						</li>
					</ul></div>
							</div>
							<div class="txt-lbl"><p>Reason for XLA: <span class="select_xla-reasons"></span></p>
						<ul class="rbtn">
						<li>
						<div data-toggle="modal" data-target="#extract_modal_2" class="sel_lnk">Select<i class="fas fa-external-link-alt"></i></div>
					</li>
						</ul>
						<input type="hidden" name="extract_xla-reasons" id="extract_xla-reasons" value="">
					</div>
					<div class="txt-lbl"><p>Alternative options: <span class="select_alternative_options"></span></p>
						<ul class="rbtn">
						<li>
						<div data-toggle="modal" data-target="#extract_modal_3" class="sel_lnk">Select<i class="fas fa-external-link-alt"></i></div>
					</li>
						</ul>
						<input type="hidden" name="extract_alternative_options" id="extract_alternative_options" value="">
					</div>
					<div class="txt-lbl"><p>Plan for the gap:</p>
					<ul class="rbtn">
						<li>
							<input type='radio' name='gap' id="leave-gap" data-fieddata="Patient" value='Plan for the gap: Nil (leave gap)'>
							<label for="leave-gap">Nil (leave gap)</label>
						</li>
						<li>
							<input type='radio' name='gap' id="implant" data-fieddata="Patient" value='Plan for the gap: Implant'>
							<label for="implant">Implant</label>
						</li>
						<li>
							<input type='radio' name='gap' id="bridge" data-fieddata="Patient" value='Plan for the gap: Bridge'>
							<label for="bridge">Bridge</label>
						</li>
						<li>
							<input type='radio' name='gap' id="ortho" data-fieddata="Patient" value='Plan for the gap: Ortho'>
							<label for="ortho">Ortho</label>
						</li>
						<li>
							<input type='radio' name='gap' id="denture" data-fieddata="Patient" value='Plan for the gap: Denture'>
							<label for="denture">Denture</label>
						</li>
						<li>
							<input type='radio' name='gap' id="orthodontics" data-fieddata="Patient" value='Plan for the gap: Orthodontics'>
							<label for="orthodontics">Orthodontics</label>
						</li>
						<li>
							<input type='radio' name='gap' id="gap-other" data-fieddata="Patient" value='Plan for the gap: Other'>
							<label for="gap-other">Other</label>
						</li>
					</ul></div>
					<div class="txt-lbl"><p>Risks given: Pain, Bruising, Swelling, Bleeding, <span class="select_risk_given_options"></span></p>
						<ul class="rbtn">
						<li>
						<div data-toggle="modal" data-target="#extract_modal_4" class="sel_lnk">Select<i class="fas fa-external-link-alt"></i></div>
					</li>
						</ul>
						<input type="hidden" name="extract_risk_given_options" id="extract_risk_given_options" value="">
					</div>
					<div class="txt-lbl">
					<div class="inputcss">
						<input type="text" name="mh-checked " value="" placeholder="MH checked:">
					</div>
						<div class="inputcss">
						<input type="text" name="bisphosphonates " value="" placeholder="No blood thinners, bisphosphonates or other medication to note">
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
							<input type='radio' name='topical' id="topical-gel" data-fieddata="Patient" value='LA: Topical gel applied'>
							<label for="topical-gel">Topical gel applied</label>
						</li>
						<li>
							<input type='radio' name='topical' id="topical-required" data-fieddata="Patient" value='LA: No Topical required'>
							<label for="topical-required">No Topical required</label>
						</li></ul></div>
						<div class="txt-lbl">
						<ul class="rbtn">
						<li>
							<input type='radio' name='extract-value' id="extraction-nil" data-fieddata="Patient" value='LA: Nil'>
							<label for="extraction-nil">Nil</label>
						</li>
						<li>
							<input type='radio' name='extract-value' id="extract-infiltration" data-fieddata="Patient" value='LA: Infiltration'>
							<label for="extract-infiltration">Infiltration</label>
						</li>
						<li>
							<input type='radio' name='extract-value' id="extract-IANB" data-fieddata="Patient" value='LA: IANB'>
							<label for="extract-IANB">IANB</label>
						</li>
						<li>
							<input type='radio' name='extract-value' id="extract-la-other" data-fieddata="Patient" value='LA: Other'>
							<label for="extract-la-other">Other</label>
						</li>
						</ul>
					  </div>
					  </div>
			</div>
			<div class="main-sec">
				<div class="main-sec-in">
				<input type="hidden" name="neme_1" id="" value="">
						<input type="hidden" name="neme_1" id="" value="----------- Treatment: ------------">
						<input type="hidden" name="neme_1" id="" value="">
						<h3>Treatment:</h3>
						<div class="txt-lbl"><p>XLA completed with: <span class="select_xla-completed_options"></span></p>
						<ul class="rbtn">
					<li>
						<div data-toggle="modal" data-target="#extract_modal_5" class="sel_lnk">Select Option<i class="fas fa-external-link-alt"></i></div>
					</li>
						</ul>
						<input type="hidden" name="extract_xla-completed_options" id="extract_xla-completed_options" value="">
					</div>
					<div class="txt-lbl">
					<ul class="rbtn">
						<li>
							<input type='radio' name='prepped' id="uneventful" data-fieddata="Patient" value='Uneventful XLA'>
							<label for="uneventful">Uneventful XLA</label>
						</li>
						<li>
							<input type='radio' name='prepped' id="uneven-other" data-fieddata="Patient" value='Other'>
							<label for="uneven-other">Other</label>
						</li>
					</ul></div>
					<div class="txt-lbl"><p>Apices intact and seen:</p>
						<ul class="rbtn">
						<li>
							<input type='radio' name='apices' id="extract-apices" data-fieddata="Patient" value='Apices intact and seen: Yes'>
							<label for="extract-apices">Yes</label>
						</li>
						<li>
							<input type='radio' name='apices' id="apices-other" data-fieddata="Patient" value='Apices intact and seen: Other'>
							<label for="apices-other">Other</label>
						</li>
						</ul>
					  </div>
					  <div class="txt-lbl"><p>Co-operation:</p>
						<ul class="rbtn">
						<li>
							<input type='radio' name='operation' id="co-operation-good" data-fieddata="Patient" value='Co-operation: Good'>
							<label for="co-operation-good">Good</label>
						</li>
						<li>
							<input type='radio' name='operation' id="co-operation-poor" data-fieddata="Patient" value='Co-operation: Poor'>
							<label for="co-operation-poor">Poor</label>
						</li>
						<li>
							<input type='radio' name='operation' id="co-operation-other" data-fieddata="Patient" value='Co-operation: Other'>
							<label for="co-operation-other">Other</label>
						</li>
						</ul>
					  </div>
						<div class="txt-lbl">
						<div class="inputcss">
						<input type="text" name="instructions " value="Post op instructions given: no rinsing for 24 hours, swallow saliva, bite on pack if bleeding, painkillers, avoid hot drinks, salt water rinses from 24 hours onwards to contact if persistent issues - sheet given with information with bite packs" placeholder="Enter notes here...">
					</div>
					<div class="inputcss">
						<input type="text" name="haemostasis " value="Haemostasis of socket in chair" placeholder="Enter notes here...">
					</div>
					<div class="inputcss">
						<input type="text" name="patient-happy " value="Patient happy" placeholder="Enter notes here...">
					</div>
					<div class="inputcss">
						<input type="text" name="treatment " value="" placeholder="Enter notes here...">
					</div>
					</div>
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

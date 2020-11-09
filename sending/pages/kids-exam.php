<?php 
/*
Template Name: Dental App
*/

include '../templates/header.php';
include '../models/kids-exam-modal.php';

?>
	<div class="container" id="checkbox-container">
		<div class="tem_title">
			<h2>Kids Exam</h2>
		</div>
		<form onclick="" id="myform_recall">
			<div class="main-section">
			<input type="hidden" name="heading" id="Template_Name1" value="Template Name - Kids Exam">
        <input type="hidden" name="heading" id="Template_Name2" value="">
		<input type="hidden" name="heading" id="Date_1" value="<?php echo "Form filling date " . date("Y/m/d"); ?>">
        <input type="hidden" name="heading" id="Date_2" value="">
			<div class="mtnegtive">
			<div class="main-sec">
				<div class="main-sec-in">
				<h3>Exam</h3>
					<input type="hidden" name="neme_1" id="" value="">
						<input type="hidden" name="neme_1" id="" value="----------- Kids Exam: ------------">
						<input type="hidden" name="neme_1" id="" value="">
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
							<input type='radio' name='attending' id="friend" data-fieddata="Patient" value='Attending with: Alone'>
							<label for="friend">Alone</label>
						</li>
						<li>
							<input type='radio' name='attending' id="exam-other" data-fieddata="Patient" value='Attending with: Other'>
							<label for="exam-other">Other</label>
						</li>
					</ul></div>
					<div class="inputcss">
							<input type='text' name='Dentist' id="a2" data-fieddata="Dentist" value='Dentist: '>

							<input type='text' name='Nurse' id="a3" data-fieddata="Nurse" value='Nurse: '>
							
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
						</ul>
					  </div>
					 <div class="txt-lbl"><p>C/O:</p>
						<ul class="rbtn">
						<li>
							<input type='radio' name='c-o' id="co-nil" data-fieddata="Patient" value='C/O: Nil'>
							<label for="co-nil">Nil</label>
						</li>
						<li>
							<input type='radio' name='c-o' id="co-pain" data-fieddata="Patient" value='C/o: Pain'>
							<label for="co-pain">Pain</label>
						</li>
						<li>
							<input type='radio' name='c-o' id="co-other" data-fieddata="Patient" value='C/o: Other'>
							<label for="co-other">Other</label>
						</li>
						</ul>
					  </div>
			<div class="inputcss">
						<input type="text" name="kids_exam" value="" placeholder="Enter notes here...">
					</div>
			</div>
			</div>
			<div class="main-sec">
				<div class="main-sec-in">
				<input type="hidden" name="neme_1" id="" value="">
						<input type="hidden" name="neme_1" id="" value="----------- Medical History: ------------">
						<input type="hidden" name="neme_1" id="" value="">
					<h3>Medical History:</h3>
					<div class="txt-lbl">
					<p>Form filled and signed - See section</p>
					</div>
					<div class="txt-lbl">
					 <ul class="rbtn">
					 <li>
							<input type='radio' name='med-history' id="allergies" data-fieddata="Patient" value='Medical History: No relevant allergies'>
							<label for="allergies">No relevant allergies</label>
						</li>
						<li>
							<input type='radio' name='med-history' id="penicillin" data-fieddata="Patient" value='Medical History: Allergic to penicillin'>
							<label for="penicillin">Allergic to penicillin</label>
						</li>
						</ul>
					  </div>
					  <div class="inputcss">
							<input type='text' name='Allergic to' id="allergic-to" data-fieddata="Patient" value='Allergic to: '>	
					</div>
					<div class="txt-lbl">
					 <ul class="rbtn">
					 <li>
							<input type='radio' name='relevant-medication' id="medication" data-fieddata="Patient" value='No relevant medication'>
							<label for="medication">No relevant medication</label>
						</li>
						</ul>
					  </div>
					  <div class="inputcss">
							<input type='text' name='Medication' id="med" data-fieddata="Patient" value='Medication: '>	
					</div>
					<div class="txt-lbl">
					 <ul class="rbtn">
					 <li>
							<input type='radio' name='relevant-conditions' id="conditions" data-fieddata="Patient" value='No relevant conditions'>
							<label for="conditions">No relevant conditions</label>
						</li>
						</ul>
					  </div>
					  <div class="inputcss">
							<input type='text' name='conditions' id="rel-conditions" data-fieddata="Patient" value='Conditions: '>	
					</div>
					 <div class="txt-lbl"><p>Special needs:</p>
						<ul class="rbtn">
						<li>
							<input type='radio' name='needs' id="special-needs-nil" data-fieddata="Patient" value='Special needs: Nil'>
							<label for="special-needs-nil">Nil</label>
						</li>
						<li>
							<input type='radio' name='needs' id="special-needs-other" data-fieddata="Patient" value='Special needs: Other'>
							<label for="special-needs-other">Other</label>
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
						<input type="hidden" name="neme_1" id="" value="----------- Social and Dental History: ------------">
						<input type="hidden" name="neme_1" id="" value="">
						<h3>Social and Dental History:</h3>
					<div class="txt-lbl"><p>Sugars in diet:</p>
					<ul class="rbtn">
						<li>
							<input type='radio' name='sugars' id="sugar_low" data-fieddata="Patient" value='Sugars in diet: Low'>
							<label for="sugar_low">Low</label>
						</li>
						<li>
							<input type='radio' name='sugars' id="sugar_high" data-fieddata="Patient" value='Sugars in diet: High'>
							<label for="sugar_high">High</label>
						</li>
					</ul></div>
					<div class="txt-lbl"><p>Acids in diet:</p>
					<ul class="rbtn">
						<li>
							<input type='radio' name='acid' id="acid_low" data-fieddata="Patient" value='Acids in diet: Low'>
							<label for="acid_low">Low</label>
						</li>
						<li>
							<input type='radio' name='acid' id="acid_high" data-fieddata="Patient" value='Acids in diet: High'>
							<label for="acid_high">High</label>
						</li>
					</ul></div>
					<div class="txt-lbl"><p>Brushing:</p>
					<ul class="rbtn">
						<li>
							<input type='radio' name='brushing' id="once" data-fieddata="Patient" value='Brushing: Once'>
							<label for="once">Once</label>
						</li>
						<li>
							<input type='radio' name='brushing' id="twice" data-fieddata="Patient" value='Brushing: Twice'>
							<label for="twice">Twice</label>
						</li>
					</ul><p>daily with</p><ul class="rbtn">
						<li>
							<input type='radio' name='daily' id="etb" data-fieddata="Patient" value='Daily With: ETB'>
							<label for="etb">ETB</label>
						</li>
						<li>
							<input type='radio' name='daily' id="mtb" data-fieddata="Patient" value='Daily With: MTB'>
							<label for="mtb">MTB</label>
						</li>
						<li>
							<input type='radio' name='daily' id="etb-mtb" data-fieddata="Patient" value='Daily With: Both ETB+MTB'>
							<label for="etb-mtb">Both ETB+MTB</label>
						</li>
					</ul><p>,</p>
					<ul class="rbtn">
						<li>
							<input type='radio' name='opt' id="self" data-fieddata="Patient" value=',Self'>
							<label for="self">Self</label>
						</li>
						<li>
							<input type='radio' name='opt' id="assist" data-fieddata="Patient" value=',Assisted'>
							<label for="assist">Assisted</label>
						</li>
						<li>
							<input type='radio' name='opt' id="super" data-fieddata="Patient" value=',Supervised'>
							<label for="super">Supervised</label>
						</li>
					</ul>
					</div>
					<div class="txt-lbl"><p>Last check up:</p>
						<ul class="rbtn">
						<li>
							<input type='radio' name='check-up' id="first-time" data-fieddata="Patient" value='Last check up: First Time'>
							<label for="first-time">First Time</label>
						</li>
						<li>
							<input type='radio' name='check-up' id="3m" data-fieddata="Patient" value='Last check up: 3m'>
							<label for="3m">3m</label>
						</li>
						<li>
							<input type='radio' name='check-up' id="6m" data-fieddata="Patient" value='Last check up: 6m'>
							<label for="6m">6m</label>
						</li>
						<li>
							<input type='radio' name='check-up' id="9m" data-fieddata="Patient" value='Last check up: 9m'>
							<label for="9m">9m</label>
						</li>
						<li>
							<input type='radio' name='check-up' id="12m" data-fieddata="Patient" value='Last check up: 12m'>
							<label for="12m">12m</label>
						</li>
						<li>
							<input type='radio' name='check-up' id="18m" data-fieddata="Patient" value='Last check up: 18m'>
							<label for="18m">18m</label>
						</li>
						<li>
							<input type='radio' name='check-up' id="24m" data-fieddata="Patient" value='Last check up: 24m'>
							<label for="24m">24m</label>
						</li>
						</ul>
					  </div>
					  <div class="txt-lbl"><p>Thumb/Dummy sucking:</p>
					<ul class="rbtn">
						<li>
							<input type='radio' name='thumb' id="thumb-dummy-no" data-fieddata="Patient" value='Thumb/Dummy sucking: No'>
							<label for="thumb-dummy-no">No</label>
						</li>
						<li>
							<input type='radio' name='thumb' id="thumb-dummy-yes" data-fieddata="Patient" value='Thumb/Dummy sucking: Yes'>
							<label for="thumb-dummy-yes">Yes</label>
						</li>
					</ul></div>
					<div class="txt-lbl"><p>Intake after night time brushing:</p>
					<ul class="rbtn">
						<li>
							<input type='radio' name='intake' id="night-nil" data-fieddata="Patient" value='Intake after night time brushing: Nil'>
							<label for="night-nil">Nil</label>
						</li>
						<li>
							<input type='radio' name='intake' id="night-milk" data-fieddata="Patient" value='Intake after night time brushing: Milk'>
							<label for="night-milk">Milk</label>
						</li>
						<li>
							<input type='radio' name='intake' id="night-snacks" data-fieddata="Patient" value='Intake after night time brushing: Snacks'>
							<label for="night-snacks">Snacks</label>
						</li>
					</ul></div>
					<div class="inputcss">
						<input type="text" name="la" value="" placeholder="Enter notes here...">
					</div>
					</div>
					<div class="main-sec">
				<div class="main-sec-in">
				<input type="hidden" name="neme_1" id="" value="">
						<input type="hidden" name="neme_1" id="" value="----------- Tissue Exam: ------------">
						<input type="hidden" name="neme_1" id="" value="">
					<h3>Tissue Exam:</h3>
					<div class="txt-lbl"><p>E/O (LN,MOM,SG,TMJ):</p>
					<ul class="rbtn">
						<li>
							<input type='radio' name='tissue-e-o' id="e-o-nil" data-fieddata="Patient" value='E/O (LN,MOM,SG,TMJ): Nil'>
							<label for="e-o-nil">Nil</label>
						</li>
						<li>
							<input type='radio' name='tissue-e-o' id="e-o-other" data-fieddata="Patient" value='E/O (LN,MOM,SG,TMJ): Other'>
							<label for="e-o-other">Other</label>
						</li>
					</ul></div>
					<div class="txt-lbl"><p>I/O (Tongue,FOM, palate, mucosa):</p>
					<ul class="rbtn">
						<li>
							<input type='radio' name='tongue-e-o' id="i-o-nil" data-fieddata="Patient" value='I/O (Tongue,FOM, palate, mucosa): Nil'>
							<label for="i-o-nil">Nil</label>
						</li>
						<li>
							<input type='radio' name='tongue-e-o' id="i-o-other" data-fieddata="Patient" value='I/O (Tongue,FOM, palate, mucosa): Other'>
							<label for="i-o-other">Other</label>
						</li>
					</ul></div>
					<div class="txt-lbl"><p>Gingivae :</p>
					<ul class="rbtn">
						<li>
							<input type='radio' name='gingivae' id="healthy" data-fieddata="Patient" value='Gingivae: Healthy'>
							<label for="healthy">Healthy</label>
						</li>
						<li>
							<input type='radio' name='gingivae' id="inflamed" data-fieddata="Patient" value='Gingivae: Inflamed'>
							<label for="inflamed">Inflamed</label>
						</li>
					</ul></div>
					  <div class="inputcss">
						<input type="text" name="la" value="" placeholder="Enter notes here...">
					</div>
					  </div>
			</div>
					<div class="main-sec">
				<div class="main-sec-in">
				<input type="hidden" name="neme_1" id="" value="">
						<input type="hidden" name="neme_1" id="" value="----------- Intra Oral Exam: ------------">
						<input type="hidden" name="neme_1" id="" value="">
					<h3>Intra Oral Exam:</h3>
					<div class="inputcss">
							<input type='text' name='bpe-record' id="bpe" data-fieddata="Dentist" value='Modified BPE Recorded: '>
					</div>
					<div class="txt-lbl"><p>Teeth charted: <span class="kids-exam-charted"></span></p>
						<ul class="rbtn">
						<li>
						<div data-toggle="modal" data-target="#kids_exam_modal_1" class="sel_lnk">Select<i class="fas fa-external-link-alt"></i></div>
					</li>
						</ul>
						<input type="hidden" name="kids-exam" id="kids-exam" value="">
					</div>
					<div class="txt-lbl"><p>Adult Canines :</p>
					<ul class="rbtn">
						<li>
							<input type='radio' name='adult-canines' id="canines-young" data-fieddata="Patient" value='Adult Canines: Too young'>
							<label for="canines-young">Too young</label>
						</li>
						<li>
							<input type='radio' name='adult-canines' id="canines-palpable" data-fieddata="Patient" value='Adult Canines: Palpable'>
							<label for="canines-palpable">Palpable</label>
						</li>
						<li>
							<input type='radio' name='adult-canines' id="canines-erupted" data-fieddata="Patient" value='Adult Canines: Erupted'>
							<label for="canines-erupted">Erupted</label>
						</li>
						<li>
							<input type='radio' name='adult-canines' id="canines-missing" data-fieddata="Patient" value='Adult Canines: Missing'>
							<label for="canines-missing">Missing</label>
						</li>
					</ul></div>
					<div class="txt-lbl"><p>Oral Hygiene :</p>
					<ul class="rbtn">
						<li>
							<input type='radio' name='oral-hygiene' id="oral-good" data-fieddata="Patient" value='Oral Hygiene: Good'>
							<label for="oral-good">Good</label>
						</li>
						<li>
							<input type='radio' name='oral-hygiene' id="oral-mod" data-fieddata="Patient" value='Oral Hygiene: Mod'>
							<label for="oral-mod">Mod</label>
						</li>
						<li>
							<input type='radio' name='oral-hygiene' id="oral-poor" data-fieddata="Patient" value='Oral Hygiene: Poor'>
							<label for="oral-poor">Poor</label>
						</li>
					</ul></div>
					<div class="txt-lbl"><p>Crowding:</p>
					<ul class="rbtn">
						<li>
							<input type='radio' name='crowding' id="crowding-nil" data-fieddata="Patient" value='Crowding: Nil'>
							<label for="crowding-nil">Nil</label>
						</li>
						<li>
							<input type='radio' name='crowding' id="crowding-mild" data-fieddata="Patient" value='Crowding: Mild'>
							<label for="crowding-mild">Mild</label>
						</li>
						<li>
							<input type='radio' name='crowding' id="crowding-mod" data-fieddata="Patient" value='Crowding: Mod'>
							<label for="crowding-mod">Mod</label>
						</li>
						<li>
							<input type='radio' name='crowding' id="crowding-sev" data-fieddata="Patient" value='Crowding: Sev'>
							<label for="crowding-sev">Sev</label>
						</li>
						<li>
							<input type='radio' name='crowding' id="crowding-other" data-fieddata="Patient" value='Crowding: Other'>
							<label for="crowding-other">Other</label>
						</li>
					</ul></div>
					<div class="txt-lbl"><p>Ortho referral needed:</p>
					<ul class="rbtn">
						<li>
							<input type='radio' name='ortho' id="ortho-yes" data-fieddata="Patient" value='Ortho referral needed): Yes'>
							<label for="ortho-yes">Yes</label>
						</li>
						<li>
							<input type='radio' name='ortho' id="ortho-no" data-fieddata="Patient" value='Ortho referral needed: No'>
							<label for="ortho-no">Other</label>
						</li>
					</ul></div>
					  <div class="inputcss">
						<input type="text" name="la" value="" placeholder="Enter notes here...">
					</div>
					  </div>
			</div>
			<div class="main-sec">
				<div class="main-sec-in">
				<input type="hidden" name="neme_1" id="" value="">
						<input type="hidden" name="neme_1" id="" value="----------- Dental Exam: ------------">
						<input type="hidden" name="neme_1" id="" value="">
					<h3>Dental Exam:</h3>
					<div class="txt-lbl"><p>Caries: <span class="kids-exam-caries"></span></p>
						<ul class="rbtn">
						<li>
							<input type='radio' name='dental-caries' id="dental-caries-nil" data-fieddata="Patient" value='Caries: Nil'>
							<label for="dental-caries-nil">Nil</label>
						</li>
						<li>
						<div data-toggle="modal" data-target="#kids_exam_caries_modal_2" class="sel_lnk">Select<i class="fas fa-external-link-alt"></i></div>
					</li>
						</ul>
						<input type="hidden" name="kids-exam-caries-frm" id="kids-exam-caries-frm" value="">
					</div>
					  <div class="inputcss">
						<input type="text" name="la" value="" placeholder="Enter notes here...">
					</div>
					  </div>
			</div>
			<div class="main-sec">
				<div class="main-sec-in">
				<input type="hidden" name="neme_1" id="" value="">
						<input type="hidden" name="neme_1" id="" value="----------- Radiographs: ------------">
						<input type="hidden" name="neme_1" id="" value="">
					<h3>Radiographs:</h3>
					<div class="txt-lbl">
						<ul class="rbtn">
						<li>
							<input type='radio' name='radiographs' id="not-indicated" data-fieddata="Patient" value='Radiographs: Not indicated today'>
							<label for="not-indicated">Not indicated today</label>
						</li>
						<li>
							<input type='radio' name='radiographs' id="bite-wings" data-fieddata="Patient" value='Radiographs: Bite wings taken for interproximal caries assessment and bone levels'>
							<label for="bite-wings">Bite wings taken for interproximal caries assessment and bone levels</label>
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
						<input type="hidden" name="neme_1" id="" value="----------- Diagnosis: ------------">
						<input type="hidden" name="neme_1" id="" value="">
					<h3>Diagnosis:</h3>
					 <div class="inputcss">
						<input type="text" name="la" value="" placeholder="Enter notes here...">
					</div>
					  </div>
			</div>
			<div class="main-sec">
				<div class="main-sec-in">
				<input type="hidden" name="neme_1" id="" value="">
						<input type="hidden" name="neme_1" id="" value="----------- Discussion: ------------">
						<input type="hidden" name="neme_1" id="" value="">
					<h3>Discussion:</h3>
					 <div class="inputcss">
						<input type="text" name="la" value="" placeholder="Enter notes here...">
					</div>
					<div class="inputcss">
							<input type='text' name='encourage' id="encourage-brush" data-fieddata="Dentist" value='Encouraged to brush twice daily: '>
						</div>
					  </div>
			</div>
			<div class="main-sec">
				<div class="main-sec-in">
				<input type="hidden" name="neme_1" id="" value="">
						<input type="hidden" name="neme_1" id="" value="----------- Risk assessment: ------------">
						<input type="hidden" name="neme_1" id="" value="">
					<h3>Risk assessment:</h3>
					<div class="txt-lbl"><p>Caries:</p>
					<ul class="rbtn">
						<li>
							<input type='radio' name='risk-caries' id="risk-caries-low" data-fieddata="Patient" value='Caries: low'>
							<label for="risk-caries-low">Low</label>
						</li>
						<li>
							<input type='radio' name='risk-caries' id="risk-caries-med" data-fieddata="Patient" value='Caries: Med'>
							<label for="risk-caries-med">Med</label>
						</li>
						<li>
							<input type='radio' name='risk-caries' id="risk-caries-high" data-fieddata="Patient" value='Caries: High'>
							<label for="risk-caries-high">High</label>
						</li>
					</ul></div>
					<div class="txt-lbl"><p>Periodontal:</p>
					<ul class="rbtn">
						<li>
							<input type='radio' name='periodontal' id="periodontal-low" data-fieddata="Patient" value='Periodontal: low'>
							<label for="periodontal-low">Low</label>
						</li>
						<li>
							<input type='radio' name='periodontal' id="periodontal-med" data-fieddata="Patient" value='Periodontal: Med'>
							<label for="periodontal-med">Med</label>
						</li>
						<li>
							<input type='radio' name='periodontal' id="periodontal-high" data-fieddata="Patient" value='Periodontal: High'>
							<label for="periodontal-high">High</label>
						</li>
					</ul></div>
					<div class="txt-lbl"><p>Wear:</p>
					<ul class="rbtn">
						<li>
							<input type='radio' name='wear' id="wear-low" data-fieddata="Patient" value='Wear: low'>
							<label for="wear-low">Low</label>
						</li>
						<li>
							<input type='radio' name='wear' id="wear-med" data-fieddata="Patient" value='Wear: Med'>
							<label for="wear-med">Med</label>
						</li>
						<li>
							<input type='radio' name='wear' id="wear-high" data-fieddata="Patient" value='Wear: High'>
							<label for="wear-high">High</label>
						</li>
					</ul></div>
					 <div class="inputcss">
						<input type="text" name="la" value="" placeholder="Enter notes here...">
					</div>
					  </div>
			</div>
			<div class="main-sec">
				<div class="main-sec-in">
				<input type="hidden" name="neme_1" id="" value="">
						<input type="hidden" name="neme_1" id="" value="----------- Treatment Plan: ------------">
						<input type="hidden" name="neme_1" id="" value="">
					<h3>Treatment Plan:</h3>
					<div class="txt-lbl"><p>OHI reinforced:</p>
					<ul class="rbtn">
						<li>
							<input type='radio' name='reinforced' id="reinforced-varnish" data-fieddata="Patient" value='OHI reinforced: Fluoride varnish applied 5% NaF - VCG, checked for asthma'>
							<label for="reinforced-varnish">Fluoride varnish applied 5% NaF - VCG, checked for asthma</label>
						</li>
						<li>
							<input type='radio' name='reinforced' id="reinforced-other" data-fieddata="Patient" value='OHI reinforced: Other'>
							<label for="reinforced-other">Other</label>
						</li>
					</ul></div>
					 <div class="inputcss">
						<input type="text" name="la" value="" placeholder="Enter notes here...">
					</div>
					  </div>
			</div>
			<div class="main-sec">
				<div class="main-sec-in">
				<input type="hidden" name="neme_1" id="" value="">
						<input type="hidden" name="neme_1" id="" value="----------- Next Visit: ------------">
						<input type="hidden" name="neme_1" id="" value="">
					<h3>Next Visit:</h3>
					<div class="txt-lbl"><p>Recall:</p>
						<ul class="rbtn">
						<li>
							<input type='radio' name='recall' id="recall-3m" data-fieddata="Patient" value='Recall: 3m'>
							<label for="recall-3m">3m</label>
						</li>
						<li>
							<input type='radio' name='recall' id="recall-6m" data-fieddata="Patient" value='Recall: 6m'>
							<label for="recall-6m">6m</label>
						</li>
						<li>
							<input type='radio' name='recall' id="recall-9m" data-fieddata="Patient" value='Recall: 9m'>
							<label for="recall-9m">9m</label>
						</li>
						<li>
							<input type='radio' name='recall' id="recall-12m" data-fieddata="Patient" value='Recall: 12m'>
							<label for="recall-12m">12m</label>
						</li>
						<li>
							<input type='radio' name='recall' id="recall-18m" data-fieddata="Patient" value='Recall: 18m'>
							<label for="recall-18m">18m</label>
						</li>
						<li>
							<input type='radio' name='recall' id="recall-24m" data-fieddata="Patient" value='Recall: 24m'>
							<label for="recall-24m">24m</label>
						</li>
						</ul>
					  </div>
					 <div class="inputcss">
						<input type="text" name="la" value="" placeholder="Enter notes here...">
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

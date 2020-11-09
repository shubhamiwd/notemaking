<?php 
/*
Template Name: Emergency.
*/

include '../templates/header.php';
include '../models/filling-models.php';
?>
	<div class="container" id="checkbox-container">
		<div class="tem_title">
			<h2>Filling Appointment</h2>
		</div>
		<form onclick="">
			<div class="main-section">
			<input type="hidden" name="heading" id="Template_Name1" value="Template Name - RCT First Visit">
        <input type="hidden" name="heading" id="Template_Name2" value="">
		<input type="hidden" name="heading" id="Date_1" value="<?php echo "Form filling date " . date("Y/m/d"); ?>">
        <input type="hidden" name="heading" id="Date_2" value="">
				<div class="mtnegtive">
					<div class="main-sec">
						<div class="main-sec-in">
							<h3>Filling Appointment</h3>
								<input type="hidden" name="heading" id="" value="">
								<input type="hidden" name="heading" id="" value="----------- Filling Appointment ------------">
								<input type="hidden" name="heading" id="" value="">
							<div class="txt-lbl">
								<p>Pt C/O:</p>
								<ul class="rbtn">
									<li>
										<input type='radio' id="fa_1" name='fapt' data-fieddata="Patient" value='Pt C/O: Nil'>
										<label for="fa_1">Nil</label>
									</li>
									<li>
										<input type='radio' id="fa_2" name='fapt' data-fieddata="Patient" value='Pt C/O: Other'>
										<label for="fa_2">Other</label>
									</li>
								</ul>
							</div>
							<div class="txt-lbl">			
								<p>Risks and complications explained: <span class="rce-spn"></span></p>
									<ul class="rbtn">
										<li>
											<input type='radio' id="rce_1" name='rce' data-fieddata="Patient" value='Risks and complications explained: Nil'>
											<label for="rce_1">Nil</label>
										</li>
										<li>
											<div data-toggle="modal" data-target="#myModal_1" class="sel_lnk">Select Option<i class="fas fa-external-link-alt"></i></div>
										</li>
										<div class="carries">
											<input type="hidden" name="caries_teeth" id="rce-options" value="">
											<!--<label for="" class="mt20">Caries: <span class="sel_teeth"></span></label>-->
										</div>	
									</ul>
							</div>
							<div class="inputcss">
								<!-- <input type='text' name='Dentist' id="a2" data-fieddata="Dentist" value='Dentist: -->
								<input type='text' name='Nurse' id="a3" data-fieddata="Nurse" value='MH checked no changes: '>
							</div>
							<div class="inputcss">
								<!-- <input type='text' name='Dentist' id="a2" data-fieddata="Dentist" value='Dentist: -->
								<input type='text' name='Nurse' id="a3" data-fieddata="Nurse" value='VCG to proceed: '>
							</div>
							<div class="carries">
								<input type="hidden" name="co_sel" id="co_sel" value="">
								<!--<label for="" class="mt20">Caries: <span class="co_sel_teeth"></span></label>-->
							</div>
						</div>
					</div>
					<div class="main-sec">
						<div class="main-sec-in">
							<h3>LA</h3>
								<input type="hidden" name="heading" id="" value="">
								<input type="hidden" name="heading" id="" value="----------- LA ------------">
								<input type="hidden" name="heading" id="" value="">
							<div class="txt-lbl">
								<ul class="rbtn">
									<li>
										<input type='radio' class="la_class" id="la_1" name='la' data-sectionclass="blank" value='LA: Nil'>
										<label for="la_1">Nil</label>
									</li>
									<li>
										<input type='radio' class="la_class" id="la_2" name='la' data-sectionclass="hidden_infltration" value='LA: Infilteration'>
										<label for="la_2">Infilteration</label>
									</li>
									<li>
										<input type='radio' class="la_class" id="la_3" name='la' data-sectionclass="hidden_IANB" value='LA: IANB'>
										<label for="la_3">IANB</label>
									</li>
									<li>
										<input type='radio' class="la_class" id="la_4" name='la' data-sectionclass="hidden_IANB_Infiltration" value='LA: IANB + Infilteration'>
										<label for="la_4">IANB + Infilteration</label>
									</li>
									<li>
										<input type='radio' class="la_class" id="la_5" name='la' data-sectionclass="blank" value='LA: Other'>
										<label for="la_5">Other</label>
									</li>
								</ul>
								<!--------Include_Extra_Fields------->
								
								<?php include '../templates/extrafields.php'; ?>
								
										    <!-----EnD----->			
							</div>	
						</div>
						
					</div>
				</div>
					<div class="main-sec-in">
						<h3 class="">Treatment:</h3>
							<input type="hidden" name="heading" id="" value="">
							<input type="hidden" name="heading" id="" value="----------- Treatment: ------------">
							<input type="hidden" name="heading" id="" value="">
					<div class="txt-lbl">			
						<p>Restoration of: <span class="trt_restore"></span></p>
						<ul class="rbtn">
							<li>
								<input type='radio' id="trt_1" name='trt' data-fieddata="Patient" value='Restoration of: Nil'>
								<label for="trt_1">Nil</label>
							</li>
							<li>
								<div data-toggle="modal" data-target="#myModal_2" class="sel_lnk">Select Teeth<i class="fas fa-external-link-alt"></i></div>
							</li>
							<div class="carries">
								<input type="hidden" name="caries_teeth" id="trt_restoration" value="">
								<!--<label for="" class="mt20">Caries: <span class="sel_teeth"></span></label>-->
							</div>
							<li>
								<input type='radio' id="trt_2" name='trt' data-fieddata="Patient" value='Restoration of: Caries accessed with high speed diamond'>
								<label for="trt_2">Caries accessed with high speed diamond</label>
							</li>
							<li>
								<input type='radio' id="trt_3" name='trt' data-fieddata="Patient" value='Restoration of: Old restoration removed with high speed'>
								<label for="trt_3">Old restoration removed with high speed</label>
							</li>							
						</ul>
					</div>
					<div class="txt-lbl">			
						<p>Caries cleared from ADJ with rosehead - hard and scratchy: <span class="sel_teeth_2"></span></p>
						<ul class="rbtn">
							<li>
								<input type='radio' id="ccar_1" name='ccar' data-fieddata="Patient" value='Caries cleared from ADJ with rosehead - hard and scratchy: Caries free'>
								<label for="ccar_1">Caries Free</label>
							</li>
							<li>
								<input type='radio' id="ccar_2" name='ccar' data-fieddata="Patient" value='Caries cleared from ADJ with rosehead - hard and scratchy: Stained central floor left'>
								<label for="ccar_2">Stained central floor left</label>
							</li>
							<li>
								<input type='radio' id="ccar_3" name='ccar' data-fieddata="Patient" value='Caries cleared from ADJ with rosehead - hard and scratchy: Affected dentine left close to pulp and linear placed'>
								<label for="ccar_3">Affected dentine left close to pulp and linear placed</label>
							</li>
							<li>
								<input type='radio' id="ccar_4" name='ccar' data-fieddata="Patient" value='Caries cleared from ADJ with rosehead - hard and scratchy: Matrix band and wedge placed'>
								<label for="ccar_4">Matrix band and wedge placed</label>
							</li>
							<li>
								<input type='radio' id="ccar_5" name='ccar' data-fieddata="Patient" value='Caries cleared from ADJ with rosehead - hard and scratchy: Other'>
								<label for="ccar_5">other</label>
							</li>
							<li>
								<input type='radio' id="ccar_6" name='ccar' data-fieddata="Patient" value='Caries cleared from ADJ with rosehead - hard and scratchy: Composite'>
								<label for="ccar_6">Composite</label>
							</li>
							<li>
								<input type='radio' id="ccar_7" name='ccar' data-fieddata="Patient" value='Caries cleared from ADJ with rosehead - hard and scratchy: GIC'>
								<label for="ccar_7">GIC</label>
							</li>
							<li>
								<input type='radio' id="ccar_8" name='ccar' data-fieddata="Patient" value='Caries cleared from ADJ with rosehead - hard and scratchy: Amalgam'>
								<label for="ccar_8">Amalgam</label>
							</li>
						</ul>
					</div>
				</div>
				<div class="main-sec">
					<div class="main-sec-in">
						<h3>Post-op Discussion</h3>
							<input type="hidden" name="heading" id="" value="">
							<input type="hidden" name="heading" id="" value="----------- Post-op Discussion ------------">
							<input type="hidden" name="heading" id="" value="">
							<div class="txt-lbl">
								<p>Patient advised to return if there are any problems:<span class="sel_teeth_3"></span></p>
								<div class="inputcss">
									<!-- <input type='text' name='Dentist' id="a2" data-fieddata="Dentist" value='Dentist: -->
									<input type='text' name='RAR' id="rar" data-fieddata="Enter Notes Here:" value='Enter Notes Here: '>
								</div>
								<p>Post operative numbness warning given. Pt advised to avoid chewing or hot food/drink until numbness has worn off.</p>
							</div>
					</div>
				</div>
			<div class="txt_cpd"><p>Text Copied</p></div>
			</div>
</div>
<!-------End_Model--------->

		<div class="Clipboard_btn">
			<button class='copy cp_cl' onclick="storage_data();">Copy To Clipboard</button>
		</div>
		</form>
		<textarea id='copy' class="display_none"></textarea>
	</div>
<?php include '../templates/footer.php'; ?>
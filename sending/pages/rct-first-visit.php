<?php 
/*
Template Name: New Patient Exam
*/

include '../templates/header.php';
include '../models/rct-first-visit-modal.php';
?>
	<div class="container" id="checkbox-container">
		<div class="tem_title">
			<h2>RCT First Visit</h2>
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
					<h3>Pre-op discussion</h3>
						<input type="hidden" name="heading" id="" value="">
						<input type="hidden" name="heading" id="" value="----------- Pre-op discussion ------------">
						<input type="hidden" name="heading" id="" value="">
					<div class="txt-lbl">			
						<p>Tooth to be treated: <span class="pre-op-d"></span></p>
						<ul class="rbtn">
							<li>
								<input type='radio' id="pat_e1" name='pat_e1' data-fieddata="Patient" value='Caries: Nil'>
								<label for="pat_e1">Nil</label>
							</li>
							<li>
								<div data-toggle="modal" data-target="#myModal_1" class="sel_lnk">Select Teeth<i class="fas fa-external-link-alt"></i></div>
							</li>
							<div class="carries">
								<input type="hidden" name="caries_teeth" id="pre_op" value="">
								<!--<label for="" class="mt20">Caries: <span class="sel_teeth"></span></label>-->
							</div>	
						</ul>
					</div>
					<div class="txt-lbl">
						<p>Pre-operative symptoms:</p>
						<ul class="rbtn">
							<li>
								<input type='radio' id="sh_1" name='sh' data-fieddata="Patient" value='Tenderness on biting'>
								<label for="sh_1">Tenderness on biting</label>
							</li>
							<li>
								<input type='radio' id="sh_2" name='sh' data-fieddata="Patient" value='Sensitivity to hot or cold'>
								<label for="sh_2">Sensitivity to hot or cold</label>
							</li>
							<li>
								<input type='radio' id="sh_3" name='sh' data-fieddata="Patient" value='Patient had large swellin'>
								<label for="sh_3">Patient had large swelling</label>
							</li>
							<li>
								<input type='radio' id="sh_4" name='sh' data-fieddata="Patient" value='Other'>
								<label for="sh_4">Patient had large swelling</label>
							</li>
						</ul>
					</div>
					<div class="txt-lbl">
						<p>Sinus present:</p>
						<ul class="rbtn">
							<li>
								<input type='radio' id="sp_1" name='sp' data-fieddata="Patient" value='Sinus present: Yes'>
								<label for="sp_1">Yes</label>
							</li>
							<li>
								<input type='radio' id="sp_2" name='sp' data-fieddata="Patient" value='Sinus present: No'>
								<label for="sp_2">No</label>
							</li>
						</ul>
					</div>
					<div class="inputcss">
							<br/>
							<p>RMH – Checked and unchanged</p>
							<p>Procedure and prognosis discussed with patient as per consultation</p>
							<p>Outlined length of the procedure and possible need for multiple visits depending on clinical scenario.</p>
							<p>Confirmed that pt has no further questions prior to commencing procedure</p>
							<p>Happy to proceed with treatment today</p>
					</div>
					<div class="inputcss">
						<input type="text" name="med_notes1" value="" placeholder="Enter notes here...">
					</div>
				</div>
			</div>
			</div>
			<div class="main-sec">
				<div class="main-sec-in">
					<h3>Access</h3>
						<input type="hidden" name="heading" id="" value="">
						<input type="hidden" name="heading" id="" value="----------- Access ------------">
						<input type="hidden" name="heading" id="" value="">
					<div class="txt-lbl">
						<ul class="rbtn">
							<li>
								<input type='radio' id="iso_1" name='iso' data-fieddata="Patient" value='Single'>
								<label for="iso_1">Single</label>
							</li>
							<li>
								<input type='radio' id="iso_2" name='iso' data-fieddata="Patient" value='Multiple'>
								<label for="iso_2">Multiple</label>
							</li>
						</ul>
						<p>tooth isolation with dental dam</p>
					</div>
					<div class="inputcss">
						<br/>
						<p>Opened and accessed canal system</p>
					</div>
					<div class="txt-lbl">
						<p>Refinement of access with:</p>
						<ul class="rbtn">
							<li>
								<input type='radio' id="raw_1" name='raw' data-fieddata="Patient" value='Fast diamond blur'>
								<label for="raw_1">Fast diamond bur</label>
							</li>
							<li>
								<input type='radio' id="raw_2" name='raw' data-fieddata="Patient" value='Bur with non-cutting end'>
								<label for="raw_2">Bur with non-cutting end</label>
							</li>
							<li>
								<input type='radio' id="raw_3" name='raw' data-fieddata="Patient" value='Gates glidden'>
								<label for="raw_3">Gates glidden</label>
							</li>
							<li>
								<input type='radio' id="raw_4" name='raw' data-fieddata="Patient" value='Rose head'>
								<label for="raw_4">Rose head</label>
							</li>
							<li>
								<input type='radio' id="raw_5" name='raw' data-fieddata="Patient" value='Other'>
								<label for="raw_5">Other</label>
							</li>
						</ul>
					</div>
					<div class="inputcss">
						<br/>
						<p>NiTi Protaper files as orifice openers and coronal third flaring</p>
						<p>WL established with EAL (electronic apex locator)</p>
					</div>
					<div class="txt-lbl">
						<p>Hand files to establish glide path. K-files size</p>
						<ul class="rbtn">
							<li>
								<input type='radio' id="gdl-pt_1" name='gdl-pt' data-fieddata="Patient" value='10'>
								<label for="gdl-pt_1">10</label>
							</li>
							<li>
								<input type='radio' id="gdl-pt_2" name='gdl-pt' data-fieddata="Patient" value='10 and 15'>
								<label for="gdl-pt_2">10 and 15</label>
							</li>
							<li>
								<input type='radio' id="gdl-pt_3" name='gdl-pt' data-fieddata="Patient" value='10, 15 and 20'>
								<label for="gdl-pt_3">10, 15 and 20</label>
							</li>
							<li>
								<input type='radio' id="gdl-pt_4" name='gdl-pt' data-fieddata="Patient" value='Other<'>
								<label for="gdl-pt_4">Other</label>
							</li>
						</ul>
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
								<input type='radio' id="la_1" name='iso' data-fieddata="Patient" value='Nil'>
								<label for="la_1">Nil</label>
							</li>
							<li>
								<input type='radio' id="la_2" name='iso' data-fieddata="Patient" value='Infiltration'>
								<label for="la_2">Infiltration</label>
							</li>
							<li>
								<input type='radio' id="la_3" name='iso' data-fieddata="Patient" value='IANB'>
								<label for="la_3">IANB</label>
							</li>
							<li>
								<input type='radio' id="la_4" name='iso' data-fieddata="Patient" value='IANB + infiltration'>
								<label for="la_4">IANB + infiltration</label>
							</li>
							<li>
								<input type='radio' id="la_5" name='iso' data-fieddata="Patient" value='Other'>
								<label for="la_5">Other</label>
							</li>
						</ul>
					</div>
					<div class="inputcss">
						<input type="text" name="la_notes1" value="" placeholder="Enter notes here...">
					</div>
				</div>
			</div>
			<div class="main-sec">
				<div class="main-sec-in">
					<h3>Canal length</h3>
						<input type="hidden" name="heading" id="" value="">
						<input type="hidden" name="heading" id="" value="----------- Canal length ------------">
						<input type="hidden" name="heading" id="" value="">
					<div class="inputcss">
						<input type="text" name="canl_notes1" value="" placeholder="Enter notes here...">
					</div>
				</div>
			</div>
			<div class="main-sec">
				<div class="main-sec-in">
					<h3>Shaping</h3>
						<input type="hidden" name="heading" id="" value="">
						<input type="hidden" name="heading" id="" value="----------- Shaping ------------">
						<input type="hidden" name="heading" id="" value="">
					<div class="inputcss">
						<p>Preparing canal system to above specified MAF using apical patency filing technique and apical gauging to determine final apical MAF size.</p>
					</div>
					<div class="txt-lbl">
						<p>Copious and careful irrigation throughout with</p>
						<ul class="rbtn">
							<li>
								<input type='radio' id="sha_1" name='sha' data-fieddata="Patient" value='3% NaOCl'>
								<label for="sha_1">3% NaOCl</label>
							</li>
							<li>
								<input type='radio' id="sha_2" name='sha' data-fieddata="Patient" value='Other'>
								<label for="sha_2">Other</label>
							</li>
						</ul>
					</div>
					<div class="txt-lbl">
						<ul class="rbtn">
							<p>using</p>
							<li>
								<input type='radio' id="sha_3" name='sha1' data-fieddata="Patient" value='30g side-vented needle'>
								<label for="sha_3">30g side-vented needle</label>
							</li>
							<li>
								<input type='radio' id="sha_4" name='sha1' data-fieddata="Patient" value='Other'>
								<label for="sha_4">Other</label>
							</li>
						</ul>
					</div>
					<div class="inputcss">
						<input type="text" name="shp_notes1" value="" placeholder="Enter notes here...">
					</div>
				</div>
			</div>
			<div class="main-sec">
				<div class="main-sec-in">
					<h3>Irrigation</h3>
						<input type="hidden" name="heading" id="" value="">
						<input type="hidden" name="heading" id="" value="----------- Irrigation ------------">
						<input type="hidden" name="heading" id="" value="">
					<div class="txt-lbl">
						<ul class="rbtn">
							<li>
								<input type='radio' id="irr_1" name='irr' data-fieddata="Patient" value='EDTA 17%'>
								<label for="irr_1">EDTA 17%</label>
							</li>
							<li>
								<input type='radio' id="irr_2" name='irr' data-fieddata="Patient" value='Other'>
								<label for="irr_2">Other</label>
							</li>
						</ul>
						<p>as final irrigation each using GP pumping in final irrigation sequence</p>
					</div>
					<div class="inputcss">
						<p>Dried canals completely with matched PP</p>
					</div>
				</div>
			</div>
			<div class="main-sec">
				<div class="main-sec-in">
					<h3>Radiograph</h3>
						<input type="hidden" name="heading" id="" value="">
						<input type="hidden" name="heading" id="" value="----------- Radiograph ------------">
						<input type="hidden" name="heading" id="" value="">
					<div class="inputcss">
						<p>Master cone PA radiograph taken to confirm lengths</p>
					</div>
					<div class="txt-lbl">
						<p>Grade</p>
						<ul class="rbtn">
							<li>
								<input type='radio' id="gr_1" name='rdo' data-fieddata="Patient" value='1'>
								<label for="gr_1">1</label>
							</li>
							<li>
								<input type='radio' id="gr_2" name='rdo' data-fieddata="Patient" value='2'>
								<label for="gr_2">2</label>
							</li>
							<li>
								<input type='radio' id="gr_3" name='rdo' data-fieddata="Patient" value='3'>
								<label for="gr_3">3</label>
							</li>
						</ul>
					</div>
					<div class="txt-lbl">
						<p>Report:</p>
						<ul class="rbtn">
							<li>
								<input type='radio' id="rrdo_rp_1" name='rdo_rp' data-fieddata="Patient" value='All Well'>
								<label for="rrdo_rp_1">All Well</label>
							</li>
							<li>
								<input type='radio' id="rrdo_rp_2" name='rdo_rp' data-fieddata="Patient" value='Other'>
								<label for="rrdo_rp_2">Other</label>
							</li>
						</ul>
					</div>
					<div class="inputcss">
						<input type="text" name="rdo_notes" value="" placeholder="Enter notes here...">
					</div>
				</div>
			</div>
			<div class="main-sec">
				<div class="main-sec-in">
					<h3>Obturation</h3>
						<input type="hidden" name="heading" id="" value="">
						<input type="hidden" name="heading" id="" value="----------- Obturation ------------">
						<input type="hidden" name="heading" id="" value="">
					
					<div class="txt-lbl">
						<ul class="rbtn">
							<li>
								<input type='radio' id="Obt_1" name='Obt' data-fieddata="Patient" value='Obturated with Protaper system using matched customised GP points and sealer'>
								<label for="Obt_1">Obturated with Protaper system using matched customised GP points and sealer</label>
							</li>
							<li>
								<input type='radio' id="Obt_2" name='Obt' data-fieddata="Patient" value='Temporised with non-setting calcium hydroxide, a pledget and GIC'>
								<label for="Obt_2">Temporised with non-setting calcium hydroxide, a pledget and GIC</label>
							</li>
						</ul>
					</div>
					<div class="txt-lbl">
						<p>Sealer:</p>
						<ul class="rbtn">
							<li>
								<input type='radio' id="sea_1" name='sea' data-fieddata="Patient" value='Tubliseal'>
								<label for="sea_1">Tubliseal</label>
							</li>
							<li>
								<input type='radio' id="sea_2" name='sea' data-fieddata="Patient" value='Non-setting CaOH'>
								<label for="sea_2">Non-setting CaOH</label>
							</li>
							<li>
								<input type='radio' id="sea_3" name='sea' data-fieddata="Patient" value='Other'>
								<label for="sea_3">Other</label>
							</li>
						</ul>
					</div>
					<div class="inputcss">
						<input type="text" name="rdo_notes" value="" placeholder="Enter notes here...">
					</div>
				</div>
			</div>
			<div class="main-sec">
				<div class="main-sec-in">
					<h3>Post op radiograph</h3>
						<input type="hidden" name="heading" id="" value="">
						<input type="hidden" name="heading" id="" value="----------- Post op radiograph ------------">
						<input type="hidden" name="heading" id="" value="">
					<div class="inputcss">
						<br/>
						<p>Post op PA radiograph to assess obturation</p>
					</div>
					<div class="txt-lbl">
						<p>Grade</p>
						<ul class="rbtn">
							<li>
								<input type='radio' id="grd_1" name='grd' data-fieddata="Patient" value='1'>
								<label for="grd_1">1</label>
							</li>
							<li>
								<input type='radio' id="grd_2" name='grd' data-fieddata="Patient" value='2'>
								<label for="grd_2">2</label>
							</li>
							<li>
								<input type='radio' id="grd_3" name='grd' data-fieddata="Patient" value='3'>
								<label for="grd_3">3</label>
							</li>
						</ul>
					</div>
					<div class="txt-lbl">
						<p>Report:</p>
						<ul class="rbtn">
							<li>
								<input type='radio' id="ps_rp_1" name='ps_rp' data-fieddata="Patient" value='Length and condensation satisfactory within 1mm of radiographic apex'>
								<label for="ps_rp_1">Length and condensation satisfactory within 1mm of radiographic apex</label>
							</li>
							<li>
								<input type='radio' id="ps_rp_2" name='ps_rp' data-fieddata="Patient" value='Other'>
								<label for="ps_rp_2">Other</label>
							</li>
						</ul>
					</div>
					<div class="inputcss">
						<input type="text" name="rdo_notes" value="" placeholder="Enter notes here...">
					</div>
				</div>
			</div>
			<div class="main-sec">
				<div class="main-sec-in">
					<h3>Post op discussion</h3>
						<input type="hidden" name="heading" id="" value="">
						<input type="hidden" name="heading" id="" value="----------- Post op radiograph ------------">
						<input type="hidden" name="heading" id="" value="">
					<div class="inputcss">
						<br/>
						<p>Advised we have agitated an area of infection, and some pain or discomfort after the appointment is normal. Take whatever painkillers you would normally take for a headache. If a swelling comes up please attend the practice for an appt.</p>
					</div>
					<div class="txt-lbl">
						<p>TCA:</p>
						<ul class="rbtn">
							<li>
								<input type='radio' id="psod_1" name='psod' data-fieddata="Patient" value='Completion of RCT'>
								<label for="psod_1">Completion of RCT</label>
							</li>
							<li>
								<input type='radio' id="psod_2" name='psod' data-fieddata="Patient" value='Review in 3 months'>
								<label for="psod_2">Review in 3 months</label>
							</li>
							<li>
								<input type='radio' id="psod_3" name='psod' data-fieddata="Patient" value='Crown prep'>
								<label for="psod_3">Crown prep</label>
							</li>
							<li>
								<input type='radio' id="psod_4" name='psod' data-fieddata="Patient" value='Other'>
								<label for="psod_4">Other</label>
							</li>
						</ul>
					</div>
					<div class="inputcss">
						<input type="text" name="rdo_notes" value="" placeholder="Enter notes here...">
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
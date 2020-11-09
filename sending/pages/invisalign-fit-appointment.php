<?php 
/*
Template Name: Invisalign Fit Appointment.
*/

include '../templates/header.php';
include '../models/invisalign-fit-appointment.php';
?>
<div class="container" id="checkbox-container">
	<div class="tem_title">
		<h2>Invisalign Fit</h2>
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
						<h3>Invisalign Fit Appointment</h3>
							<input type="hidden" name="heading" id="" value="">
							<input type="hidden" name="heading" id="" value="----------- Invisalign Fit Appointment ------------">
							<input type="hidden" name="heading" id="" value="">
						<div class="txt-lbl">
							<p>MH:</p>
							<ul class="rbtn">
								<li>
									<input type='radio' id="ifa_1" name='ifa' data-fieddata="Patient" value='MH: No Changes'>
									<label for="ifa_1">No Changes</label>
								</li>
								<li>
									<input type='radio' id="ifa_2" name='ifa' data-fieddata="Patient" value='MH: Other'>
									<label for="ifa_2">Other</label>
								</li>
							</ul>
						</div>
						<div class="inputcss">
							<!-- <input type='text' name='Dentist' id="a2" data-fieddata="Dentist" value='Dentist: -->
							<input type='text' name='Nurse' id="a3" data-fieddata="Nurse" value='Patient is happy with clin-check: '>
						</div>
						<div class="inputcss">
							<!-- <input type='text' name='Dentist' id="a2" data-fieddata="Dentist" value='Dentist: -->
							<input type='text' name='Nurse' id="a3" data-fieddata="Nurse" value='Pateint has been consented about Invisalign treatment and other alternatives: '>
						</div>
						<div class="inputcss">
							<!-- <input type='text' name='Dentist' id="a2" data-fieddata="Dentist" value='Dentist: -->
							<input type='text' name='Nurse' id="a3" data-fieddata="Nurse" value='Aware of the nature if Invisalign and its features including: IPR, attachments and need for compliance: '>
						</div>
						
					</div>
				</div>
			</div>
			<div class="main-sec">
				<div class="main-sec-in">
					<h3>IPR:</h3>
						<input type="hidden" name="heading" id="" value="">
						<input type="hidden" name="heading" id="" value="----------- IPR: ------------">
						<input type="hidden" name="heading" id="" value="">
					<div class="txt-lbl">
						<ul class="rbtn">
							<li>
								<input type='radio' id="ipr1" name='ipr' data-fieddata="Patient" value='IPR: Nil'>
								<label for="ipr1">Nil</label>
							</li>
						</ul>
						<div class=""><p><span class="ipr_spn"></span></p>
						<ul class="rbtn">
							<li>
								<div data-toggle="modal" data-target="#myModal_1" class="sel_lnk">Select Teeth<i class="fas fa-external-link-alt"></i></div>
							</li>
						</ul>
						</div>
						<div class="carries">
							<input type="hidden" name="co_sel" id="ipr_ipt" value="">
							<!--<label for="" class="mt20">Caries: <span class="co_sel_teeth"></span></label>-->
						</div>
						<div class="inputcss">
							<input type="text" name="med_notes" value="" placeholder="Enter notes here...">
						</div>
					</div>
					
				</div>
			</div>
			<div class="main-sec">
				<div class="main-sec-in">
					<h3>Attachments:</h3>
						<input type="hidden" name="heading" id="" value="">
						<input type="hidden" name="heading" id="" value="----------- Attachments: ------------">
						<input type="hidden" name="heading" id="" value="">
					<div class="txt-lbl">
						<ul class="rbtn">
							<li>
								<input type='radio' id="ipr_sel" name='ipr_select' data-fieddata="Patient" value='Attachments: Nil'>
								<label for="ipr_sel">Nil</label>
							</li>
						</ul>
						<div class=""><p><span class="attche"></span></p>
						<ul class="rbtn">
							<li>
								<div data-toggle="modal" data-target="#myModal_2" class="sel_lnk">Select Teeth<i class="fas fa-external-link-alt"></i></div>
							</li>
						</ul>
						</div>
						<div class="carries">
							<input type="hidden" name="ipr_hdn" id="attch_shw" value="">
							<!--<label for="" class="mt20">Caries: <span class="co_sel_teeth"></span></label>-->
						</div>
					</div>
					<div class="txt-lbl">
						<ul class="rbtn">
							<li>
								<input type='radio' id="ipr_2" name='ipr1' data-fieddata="Patient" value='Attachments: Flowable'>
								<label for="ipr_2">Flowable</label>
							</li>
							<li>
								<input type='radio' id="ipr_3" name='ipr1' data-fieddata="Patient" value='Attachments: Restroative'>
								<label for="ipr_3">Restroative</label>
							</li>
						</ul>
					</div>
					<div class="txt-lbl">
						<ul class="rbtn">
							<li>
								<input type='radio' id="ipr_4" name='ipr2' data-fieddata="Patient" value='Attachments: A1'>
								<label for="ipr_4">A1</label>
							</li>
							<li>
								<input type='radio' id="ipr_5" name='ipr2' data-fieddata="Patient" value='Attachments: A2'>
								<label for="ipr_5">A2</label>
							</li>
							<li>
								<input type='radio' id="ipr_6" name='ipr2' data-fieddata="Patient" value='Attachments: A3'>
								<label for="ipr_6">A3</label>
							</li>
							<li>
								<input type='radio' id="ipr_7" name='ipr2' data-fieddata="Patient" value='Attachments: A3.5'>
								<label for="ipr_7">A3.5</label>
							</li>
							<li>
								<input type='radio' id="ipr_8" name='ipr2' data-fieddata="Patient" value='Attachments: B1'>
								<label for="ipr_8">B1</label>
							</li>
							<li>
								<input type='radio' id="ipr_9" name='ipr2' data-fieddata="Patient" value='Attachments: B2'>
								<label for="ipr_9">B2</label>
							</li>
							<li>
								<input type='radio' id="ipr_10" name='ipr2' data-fieddata="Patient" value='Attachments: B3'>
								<label for="ipr_10">B3</label>
							</li>
							<li>
								<input type='radio' id="ipr_11" name='ipr2' data-fieddata="Patient" value='Attachments: C1'>
								<label for="ipr_11">C1</label>
							</li>
							<li>
								<input type='radio' id="ipr_12" name='ipr2' data-fieddata="Patient" value='Attachments: C2'>
								<label for="ipr_12">C2</label>
							</li>
							<li>
								<input type='radio' id="ipr_13" name='ipr2' data-fieddata="Patient" value='Attachments: C3'>
								<label for="ipr_13">C3</label>
							</li>
							<li>
								<input type='radio' id="ipr_14" name='ipr2' data-fieddata="Patient" value='Attachments: D1'>
								<label for="ipr_14">D1</label>
							</li>
							<li>
								<input type='radio' id="ipr_15" name='ipr2' data-fieddata="Patient" value='Attachments: D2'>
								<label for="ipr_15">D2</label>
							</li>
							<li>
								<input type='radio' id="ipr_16" name='ipr2' data-fieddata="Patient" value='Attachments: D3'>
								<label for="ipr_16">D3</label>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="main-sec">
				<div class="main-sec-in">
					<h3>Aligners</h3>
						<input type="hidden" name="heading" id="" value="">
						<input type="hidden" name="heading" id="" value="----------- Aligners ------------">
						<input type="hidden" name="heading" id="" value="">
					<div class="inputcss">
						<p>Aligners fitted - fitting well no issues pt can take in and out</p>
					</div>
					<div class="txt-lbl">
							<p>Issued with aligner numbers:</p>
							<ul class="rbtn">
								<li>
									<select id="aligner-sel" class="sel_lnk" data-select_opt="select_one">
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
							<p>to<input type="hidden" name="select_field_data" id="select_field_data" value=""></p>
							<ul class="rbtn">
								<li>
									<select id="aligner-sel" class="sel_lnk" data-select_opt="select_two">
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
						</div>
				</div>
			</div>
			<div class="main-sec">
				<div class="main-sec-in">
					<h3>Instructions</h3>
						<input type="hidden" name="heading" id="" value="">
						<input type="hidden" name="heading" id="" value="----------- Instructions ------------">
						<input type="hidden" name="heading" id="" value="">
					<div class="inputcss">
						<p>Full time wear (22hrs/day) apart from cleaning and eating</p>
						<p>Chewies to help seating</p>
						<p>Keep aligners in the box at all times when not wearing</p>
						<p>No eating or dinking with the aligners in except for water</p>
						<p>Pracice speaking to get used to the sensation</p>
						<p>Keep old aligners safe in case of loss of current one</p>
					</div>
					<div class="txt-lbl">
							<ul class="rbtn">
								<li>
									<input type='radio' id="inst_1" name='inst' data-fieddata="Patient" value='Instructions: 1 weekly changes'>
									<label for="inst_1">1</label>
								</li>
								<li>
									<input type='radio' id="inst_2" name='inst' data-fieddata="Patient" value='Instructions: 2 weekly changes'>
									<label for="inst_2">2</label>
								</li>
								<li>
									<input type='radio' id="inst_3" name='inst' data-fieddata="Patient" value='Instructions: 3 weekly changes'>
									<label for="inst_3">3</label>
								</li>
								<li>
									weekly changes
								</li>
							</ul>
					</div>
				</div>
			</div>
			<div class="main-sec">
				<div class="main-sec-in">
					<h3>Next appointment:</h3>
						<input type="hidden" name="heading" id="" value="">
						<input type="hidden" name="heading" id="" value="----------- Next appointment: ------------">
					<div class="txt-lbl">
						<ul class="rbtn">
							<li>
								<input type='radio' id="napt_1" name='napt' data-fieddata="Patient" value='Next appointment: 1 weeks'>
								<label for="napt_1">1</label>
							</li>
							<li>
								<input type='radio' id="napt_2" name='napt' data-fieddata="Patient" value='Next appointment: 2 weeks'>
								<label for="napt_2">2</label>
							</li>
							<li>
								<input type='radio' id="napt_3" name='napt' data-fieddata="Patient" value='Next appointment: 3 weeks'>
								<label for="napt_3">3</label>
							</li>
							<li>
								<input type='radio' id="napt_4" name='napt' data-fieddata="Patient" value='Next appointment: 4 weeks'>
								<label for="napt_4">4</label>
							</li>
							<li>
								<input type='radio' id="napt_5" name='napt' data-fieddata="Patient" value='Next appointment: 5 weeks'>
								<label for="napt_5">5</label>
							</li>
							<li>
								<input type='radio' id="napt_6" name='napt' data-fieddata="Patient" value='Next appointment: 6 weeks'>
								<label for="napt_6">6</label>
							</li>
							<li>
								<input type='radio' id="napt_7" name='napt' data-fieddata="Patient" value='Next appointment: 7 weeks'>
								<label for="napt_7">7</label>
							</li>
							<li>
								<input type='radio' id="napt_8" name='napt' data-fieddata="Patient" value='Next appointment: 8 weeks'>
								<label for="napt_8">8</label>
							</li>
							<li>
								<input type='radio' id="napt_9" name='napt' data-fieddata="Patient" value='Next appointment: 9 weeks'>
								<label for="napt_9">9</label>
							</li>
							<li>
								<input type='radio' id="napt_10" name='napt' data-fieddata="Patient" value='Next appointment: 10 weeks'>
								<label for="napt_10">10</label>
							</li>
							<li>
								<input type='radio' id="napt_11" name='napt' data-fieddata="Patient" value='Next appointment: other weeks'>
								<label for="napt_11">other</label>
							</li>
							<li>
								weeks
							</li>
						</ul>
					</div>
					<div class="inputcss">
							<input type="text" name="med_notes" value="" placeholder="Enter notes here...">
					</div>
				</div>
			</div>
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


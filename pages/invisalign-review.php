<?php 
/*
Template Name: Invisalign Review
*/

include '../templates/header.php';
include '../models/invisalign-review-modal.php';
?>
	<div class="container" id="checkbox-container">
		<div class="tem_title">
			<h2>Invisalign Review</h2>
		</div>
		<form onclick="">
			<div class="main-section">
			<input type="hidden" name="heading" id="Template_Name1" value="Template Name - Invisalign Review">
        <input type="hidden" name="heading" id="Template_Name2" value="">
		<input type="hidden" name="heading" id="Date_1" value="<?php echo "Form filling date " . date("Y/m/d"); ?>">
        <input type="hidden" name="heading" id="Date_2" value="">
			<div class="mtnegtive">
			<div class="main-sec">
				<div class="main-sec-in">
					<h3>Invisalign Review</h3>
						<input type="hidden" name="heading" id="" value="">
						<input type="hidden" name="heading" id="" value="----------- Invisalign Review ------------">
						<input type="hidden" name="heading" id="" value="">
					<div class="txt-lbl">
						<p>MH:</p>
						<ul class="rbtn">
							<li>
								<input type='radio' id="mh_1" name='mh' data-fieddata="Patient" value='MH: No Changes'>
								<label for="mh_1">No Changes</label>
							</li>
							<li>
								<input type='radio' id="mh_2" name='mh' data-fieddata="Patient" value='MH: Other'>
								<label for="mh_2">Other</label>
							</li>	
						</ul>
					</div>
					<div class="txt-lbl">
						<p>Issues reported by patient:</p>
						<ul class="rbtn">
							<li>
								<input type='radio' id="irp_1" name='irp' data-fieddata="Patient" value='Issues reported by patient: Nil'>
								<label for="irp_1">Nil</label>
							</li>
							<li>
								<input type='radio' id="irp_2" name='irp' data-fieddata="Patient" value='Issues reported by patient: Other'>
								<label for="irp_2">Other</label>
							</li>	
						</ul>
					</div>
					<div class="txt-lbl">
						<p>Aligners becoming passive after prescribed time with no gaps?:</p>
						<ul class="rbtn">
							<li>
								<input type='radio' id="abpa_1" name='abpa' data-fieddata="Patient" value='Aligners becoming passive after prescribed time with no gaps?: Yes'>
								<label for="abpa_1">Yes</label>
							</li>
							<li>
								<input type='radio' id="abpa_2" name='abpa' data-fieddata="Patient" value='Aligners becoming passive after prescribed time with no gaps?: No'>
								<label for="abpa_2">No</label>
							</li>	
						</ul>
					</div>
					<div class="txt-lbl">
						<p>Teeth tracking well:</p>
						<ul class="rbtn">
							<li>
								<input type='radio' id="ttw_1" name='ttw' data-fieddata="Patient" value='Teeth tracking well: Yes'>
								<label for="ttw_1">Yes</label>
							</li>
							<li>
								<input type='radio' id="ttw_2" name='ttw' data-fieddata="Patient" value='Teeth tracking well: No'>
								<label for="ttw_2">No</label>
							</li>	
						</ul>
					</div>
				</div>
			</div>
			</div>
			<div class="main-sec">
				<div class="main-sec-in">
					<h3>IPR</h3>
						<input type="hidden" name="heading" id="" value="">
						<input type="hidden" name="heading" id="" value="----------- IPR: ------------">
						<input type="hidden" name="heading" id="" value="">
					<div class="txt-lbl">			
						<p><span class="ipr_teeth"></span></p>
						<ul class="rbtn">
							<li>
								<input type='radio' id="ipr_n_1" name='ipr_n' data-fieddata="Patient" value='IPR: Nil'>
								<label for="ipr_n_1">Nil</label>
							</li>
							<li>
								<div data-toggle="modal" data-target="#myModal_1" class="sel_lnk">Select Teeth<i class="fas fa-external-link-alt"></i></div>
							</li>
							<div class="carries">
								<input type="hidden" name="ipr_n" id="ipr_teeth_h" value="">
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
					<h3>Attachments</h3>
						<input type="hidden" name="heading" id="" value="">
						<input type="hidden" name="heading" id="" value="----------- Attachments: ------------">
						<input type="hidden" name="heading" id="" value="">
					<div class="txt-lbl">
						<ul class="rbtn">
							<li>
								<input type='radio' id="attch_1" name='attch' data-fieddata="Patient" value='Attachments: All attachments still present, no changes needed'>
								<label for="attch_1">All attachments still present, no changes needed</label>
							</li>
							<li>
								<input type='radio' id="attch_2" name='attch' data-fieddata="Patient" value='Attachments: Loss of attachments, new template required'>
								<label for="attch_2">Loss of attachments, new template required</label>
							</li>
							<li>
								<input type='radio' id="attch_3" name='attch' data-fieddata="Patient" value='Attachments: Attachments changed as below'>
								<label for="attch_3">Attachments changed as below</label>
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
					<h3>Aligners:</h3><div class="inputcss">
						<br/>
						<p>New aligners fitted - fitting well no issues pt can take in and out</p>
					</div>
					<div class="txt-lbl"><p>Aligners issued:</p>
					<input type="hidden" name="heading" id="" value="">
						<input type="hidden" name="heading" id="" value="----------- Aligners issued: ------------">
						<input type="hidden" name="heading" id="" value="">
						<ul class="rbtn">
							<li>
									<select name="stress" id="aligner-sel">
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
									<select name="stress" id="aligner-sel">
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
					<h3>Next appointment:</h3>
						<input type="hidden" name="heading" id="" value="">
						<input type="hidden" name="heading" id="" value="----------- Next appointment: ------------">
						<input type="hidden" name="heading" id="" value="">
					<div class="txt-lbl">
						
						<ul class="rbtn">
							<li>
								<input type='radio' id="napp_1" name='napp' data-fieddata="Patient" value='Next appointment: 1 weeks'>
								<label for="napp_1">1</label>
							</li>
							<li>
								<input type='radio' id="napp_2" name='napp' data-fieddata="Patient" value='Next appointment: 2 weeks'>
								<label for="napp_2">2</label>
							</li>
							<li>
								<input type='radio' id="napp_3" name='napp' data-fieddata="Patient" value='Next appointment: 3 weeks'>
								<label for="napp_3">3</label>
							</li>
							<li>
								<input type='radio' id="napp_4" name='napp' data-fieddata="Patient" value='Next appointment: 4 weeks'>
								<label for="napp_4">4</label>
							</li>
							<li>
								<input type='radio' id="napp_5" name='napp' data-fieddata="Patient" value='Next appointment: 5 weeks'>
								<label for="napp_5">5</label>
							</li>
							<li>
								<input type='radio' id="napp_6" name='napp' data-fieddata="Patient" value='Next appointment: 6 weeks'>
								<label for="napp_6">6</label>
							</li>
							<li>
								<input type='radio' id="napp_7" name='napp' data-fieddata="Patient" value='Next appointment: 7 weeks'>
								<label for="napp_7">7</label>
							</li>
							<li>
								<input type='radio' id="napp_8" name='napp' data-fieddata="Patient" value='Next appointment: 8 weeks'>
								<label for="napp_8">8</label>
							</li>
							<li>
								<input type='radio' id="napp_9" name='napp' data-fieddata="Patient" value='Next appointment: 9 weeks'>
								<label for="napp_9">9</label>
							</li>
							<li>
								<input type='radio' id="napp_10" name='napp' data-fieddata="Patient" value='Next appointment: 10 weeks'>
								<label for="napp_10">10</label>
							</li>
							<li>
								<input type='radio' id="napp_11" name='napp' data-fieddata="Patient" value='Next appointment: Other weeks'>
								<label for="napp_11">Other</label>
							</li>
						</ul>
						<p>weeks</p>
					</div>
					<div class="inputcss">
						<input type="text" name="eoe_note" value="" placeholder="Enter notes here...">
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


<script>
$(document).ready(function(){
	$(".copy").click(function(){
			$(".txt_cpd").fadeIn(1000, function(){
				$(".txt_cpd").delay(2000).fadeOut(5000);
			});
	});
});
</script>

<style>
.txt_cpd {
    width:100%;
    display: none;
	float:left;
	position: absolute;
    bottom: 20px;
    left: 0;
    right: 0;
}
.main-section{
	position:relative;
}
.txt_cpd p{
	text-align: center;
    margin: 0px auto;
    background: #28a745c2;
    width: 14%;
    color: #fff;
    padding: 5px 10px;
    border-radius: 50px;
}
select#aligner-sel {
    background: rgba(0, 0, 0, 0) linear-gradient(135deg, rgb(20, 162, 177) 0%, rgb(4, 106, 180) 100%) repeat scroll 0% 0%;
    color: #fff;
    border: #046ab4;
    padding: 10px 24px;
    margin-right: 10px;
    border-radius: 8px;
}
#aligner-sel option {
    background: #0671b3;
}	
</style>
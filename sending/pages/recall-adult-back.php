<?php 
/*
Template Name: Dental App
*/

include '../templates/header.php';

?>
	<div class="container" id="checkbox-container">
		<div class="tem_title">
			<h2>Dental Report</h2>
		</div>
		<form onclick="">
			<div class="main-section">
			<div class="mtnegtive">
			<div class="main-sec">
				<div class="main-sec-in">
				
					<select name="drop-down"  id="form_frame" class="form_frame">	
						<option value="One">Select One</option>
						<option value="Two">Select Two</option>
						<option value="Three">Select Three</option>
						<option value="Four">Select Four</option>
						<option value="Five">Select Five</option>
					</select>
				
					<h3>Anxious of dental visits:</h3>
					<div class="txt-lbl"><p>Patient attending for extraction of</p>
					<ul class="rbtn">
						<li>
							<input type='radio' name='anxious' id="b6" data-fieddata="anxious" value='Anxious of dental visits: Yes'>
							<label for="b6">Yes</label>
						</li>
						<li>
							<input type='radio' name='anxious' class="anxious" id="b7" data-fieddata="anxious" value='Anxious of dental visits: No'>
							<label for="b7">NO</label>
						</li>
					</ul>
				</div>
			</div>
			</div>
			<div class="main-sec">
				<div class="main-sec-in">
					<h3>Smoking:</h3>
					<div class="txt-lbl"><p>Patient attending for extraction of</p>
					 <ul class="rbtn">
						<li>
							<input type='radio' name='smoke' id="b1" data-fieddata="Patient" value='Smoking: Never'>
							<label for="b1">Never</label>
						</li>
						<li>
							<input type='radio' name='smoke' id="b4" data-fieddata="Patient" value='Smoking: Ex Smoker'>
							<label for="b4">Ex Smoker</label>
						</li>
						<li>
							<input type='radio' name='smoke' id="b3" data-fieddata="Patient" value='Smoking: Daily Smoker'>
							<label for="b3">Daily Smoker</label>
						</li>
						<li>
							<input type='radio' name='smoke' id="b2" data-fieddata="Patient" value='Smoking: Occasional Smoker'>
							<label for="b2">Occasional Smoker</label>
						</li>
					  </ul>
					  </div>
				</div>
			</div>
			<div class="main-sec">
				<div class="main-sec-in">
					<h3>Alcohol intake:</h3>
					<div class="txt-lbl"><p>Patient attending for extraction of</p>
					<ul class="rbtn">
						<li>
							<input type='radio' id="ar1" name='alcohol' data-fieddata="alcohol" value='Alcohol intake: Nil'>
							<label for="ar1">Nil</label>
						</li>
						<li>
							<input type='radio' id="ar2" name='alcohol' data-fieddata="alcohol" value='Alcohol intake: Rarely'>
							<label for="ar2">Rarely</label>
						</li>
						<li>
							<input type='radio' id="ar3" name='alcohol' data-fieddata="alcohol" value='Alcohol intake: <14 Units Per week'>
							<label for="ar3"><14 Units Per week</label>
						</li>
						<li>
							<input type='radio' id="ar4" name='alcohol' data-fieddata="alcohol" value='Alcohol intake: >14 Units Per week'>
							<label for="ar4">14 Units Per week</label>
						</li>
					</ul>
					<div class="inputcss">
						<input type="text" name="alcohal_name" value="" placeholder="Your Query">
					</div>
					</div>
				</div>
			</div>
			<div class="main-sec">
				<div class="main-sec-in">
					<h3>LA:</h3>		
					<div class="txt-lbl"><p>Patient attending for extraction of</p>
					<ul class="rbtn">
						<li>
							<input type='radio' id="nl" name='Caries' data-fieddata="Patient" value='Caries: Nil'>
							<label for="nl">Nil</label>
						</li>
						<li>
							<div data-toggle="modal" data-target="#myModal" class="sel_lnk">Select Teeth<i class="fas fa-external-link-alt"></i></div>
						</li>
						<li>
							<select class="sel_lnk">
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
								<option>6</option>
								<option>7</option>
								<option>8</option>
								<option>9</option>
								<option>10</option>
							</select>
						</li>
					</ul>
					</div>
					<div class="carries">
						<input type="hidden" name="all" id="caries_teeth" value="">
						<label for="" class="mt20">Caries: <span class="sel_teeth"></span></label>
					</div>
					<div class="inputcss">
						<input type="text" name="patient_name" value="" placeholder="Your Query">
					</div>
					
				</div>
			</div>
			<div class="main-sec">
				<div class="main-sec-in">
					<h3 class="">Enter Notes Here</h3>		
					<div class="txt-lbl">
					<textarea name="entertext" rows="4" cols="50" value="" placeholder="Enter Notes Here"></textarea>
					</div>
				</div>
			</div>
			<div class="main-sec-in">
				<h3 class="mb20">Select a file:</h3>
					<div class="inputcss">
						<input type="file" id="myfile" name="myfile">
					</div>
			</div> 
		</div>
		</div>

		<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
       <!-- <button type="button" class="closebtn" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12">
			<ul class="modal-ch">
				<li class="modal_li_full">
		          	<input type='checkbox' id="Uppers" class="te_clcik" data-sectionId="teeth_sel" value='Uppers'>
					<label for="Uppers">Uppers</label>
				</li>
			</ul>	
          </div>
        </div>
        <div class="row">
          <div class="col-md-1">
			<ul class="modal-ch">
				<li class="modal_li_full strighttext">
		          	<input type='checkbox' id="rhs" class="te_clcik" data-sectionId="teeth_sel" value='RHS'>
					<label for="rhs">R<br>H<br>S</label>
				</li>
			</ul>	
          </div>
          <div class="col-md-5 border_rightonepx">
			<ul class="modal-ch">
				<li class="modal_li_full">
		          	<input type='checkbox' id="urq" class="te_clcik" data-sectionId="teeth_sel" value='URQ'>
					<label for="urq">URQ</label>
				</li>
			</ul>
	        <div class="row">
	          <div class="col-md-12 border_bottomonepx">
				<ul class="modal-ch urq mb0" style="text-align: right;">
					<li class="">
			          	<input type='checkbox' id="URE" class="te_clcik" data-sectionId="teeth_sel" value='URE'>
						<label for="URE">URE</label>
					</li>
					<li class="">
			          	<input type='checkbox' id="URD" class="te_clcik" data-sectionId="teeth_sel" value='URD'>
						<label for="URD">URD</label>
					</li>
					<li class="">
			          	<input type='checkbox' id="URC" class="te_clcik" data-sectionId="teeth_sel" value='URC'>
						<label for="URC">URC</label>
					</li>
					<li class="">
			          	<input type='checkbox' id="URB" class="te_clcik" data-sectionId="teeth_sel" value='URB'>
						<label for="URB">URB</label>
					</li>
					<li class="">
			          	<input type='checkbox' id="URA" class="te_clcik" data-sectionId="teeth_sel" value='URA'>
						<label for="URA">URA</label>
					</li>
				</ul>
				<ul class="modal-ch urq" style="text-align: right;">
					<li class="">
			          	<input type='checkbox' id="UR8" class="te_clcik" data-sectionId="teeth_sel" value='UR8'>
						<label for="UR8">UR8</label>
					</li>
					<li class="">
			          	<input type='checkbox' id="UR7" class="te_clcik" data-sectionId="teeth_sel" value='UR7'>
						<label for="UR7">UR7</label>
					</li>
					<li class="">
			          	<input type='checkbox' id="UR6" class="te_clcik" data-sectionId="teeth_sel" value='UR6'>
						<label for="UR6">UR6</label>
					</li>
					<li class="">
			          	<input type='checkbox' id="UR5" class="te_clcik" data-sectionId="teeth_sel" value='UR5'>
						<label for="UR5">UR5</label>
					</li>
					<li class="">
			          	<input type='checkbox' id="UR4" class="te_clcik" data-sectionId="teeth_sel" value='UR4'>
						<label for="UR4">UR4</label>
					</li>
					<li class="">
			          	<input type='checkbox' id="UR3" class="te_clcik" data-sectionId="teeth_sel" value='UR3'>
						<label for="UR3">UR3</label>
					</li>
					<li class="">
			          	<input type='checkbox' id="UR2" class="te_clcik" data-sectionId="teeth_sel" value='UR2'>
						<label for="UR2">UR2</label>
					</li>
					<li class="">
			          	<input type='checkbox' id="UR1" class="te_clcik" data-sectionId="teeth_sel" value='UR1'>
						<label for="UR1">UR1</label>
					</li>
				</ul>
	          </div>
          	</div>
          	<div class="seprater"> </div>
	        <div class="row">
	          <div class="col-md-12">
				<ul class="modal-ch urq mb0" style="text-align: right;">
					<li class="">
			          	<input type='checkbox' id="LR8" class="te_clcik" data-sectionId="teeth_sel" value='LR8'>
						<label for="LR8">LR8</label>
					</li>
					<li class="">
			          	<input type='checkbox' id="LR7" class="te_clcik" data-sectionId="teeth_sel" value='LR7'>
						<label for="LR7">LR7</label>
					</li>
					<li class="">
			          	<input type='checkbox' id="LR6" class="te_clcik" data-sectionId="teeth_sel" value='LR6'>
						<label for="LR6">LR6</label>
					</li>
					<li class="">
			          	<input type='checkbox' id="LR5" class="te_clcik" data-sectionId="teeth_sel" value='LR5'>
						<label for="LR5">LR5</label>
					</li>
					<li class="">
			          	<input type='checkbox' id="LR4" class="te_clcik" data-sectionId="teeth_sel" value='LR4'>
						<label for="LR4">LR4</label>
					</li>
					<li class="">
			          	<input type='checkbox' id="LR3" class="te_clcik" data-sectionId="teeth_sel" value='LR3'>
						<label for="LR3">LR3</label>
					</li>
					<li class="">
			          	<input type='checkbox' id="LR2" class="te_clcik" data-sectionId="teeth_sel" value='LR2'>
						<label for="LR2">LR2</label>
					</li>
					<li class="">
			          	<input type='checkbox' id="LR1" class="te_clcik" data-sectionId="teeth_sel" value='LR1'>
						<label for="LR1">LR1</label>
					</li>
				</ul>
				<ul class="modal-ch urq mb0" style="text-align: right;">
					<li class="">
			          	<input type='checkbox' id="LRE" class="te_clcik" data-sectionId="teeth_sel" value='LRE'>
						<label for="LRE">LRE</label>
					</li>
					<li class="">
			          	<input type='checkbox' id="LRD" class="te_clcik" data-sectionId="teeth_sel" value='LRD'>
						<label for="LRD">LRD</label>
					</li>
					<li class="">
			          	<input type='checkbox' id="LRC" class="te_clcik" data-sectionId="teeth_sel" value='LRC'>
						<label for="LRC">LRC</label>
					</li>
					<li class="">
			          	<input type='checkbox' id="LRB" class="te_clcik" data-sectionId="teeth_sel" value='LRB'>
						<label for="LRB">LRB</label>
					</li>
					<li class="">
			          	<input type='checkbox' id="LRA" class="te_clcik" data-sectionId="teeth_sel" value='LRA'>
						<label for="LRA">LRA</label>
					</li>
				</ul>
	          </div>
          	</div>	
			<ul class="modal-ch">
				<li class="modal_li_full">
		          	<input type='checkbox' id="LRQ" class="te_clcik" data-sectionId="teeth_sel" value='LRQ'>
					<label for="LRQ">LRQ</label>
				</li>
			</ul>
          </div>
          <div class="col-md-5">
			<ul class="modal-ch">
				<li class="modal_li_full">
		          	<input type='checkbox' id="ULQ" class="te_clcik" data-sectionId="teeth_sel" value='ULQ'>
					<label for="ULQ">ULQ</label>
				</li>
			</ul>
	        <div class="row">
	          <div class="col-md-12 border_bottomonepx">
				<ul class="modal-ch urq mb0" style="text-align: left;">
					<li class="">
			          	<input type='checkbox' id="ULA" class="te_clcik" data-sectionId="teeth_sel" value='ULA'>
						<label for="ULA">ULA</label>
					</li>
					<li class="">
			          	<input type='checkbox' id="ULB" class="te_clcik" data-sectionId="teeth_sel" value='ULB'>
						<label for="ULB">ULB</label>
					</li>
					<li class="">
			          	<input type='checkbox' id="ULC" class="te_clcik" data-sectionId="teeth_sel" value='ULC'>
						<label for="ULC">ULC</label>
					</li>
					<li class="">
			          	<input type='checkbox' id="ULD" class="te_clcik" data-sectionId="teeth_sel" value='ULD'>
						<label for="ULD">ULD</label>
					</li>
					<li class="">
			          	<input type='checkbox' id="ULE" class="te_clcik" data-sectionId="teeth_sel" value='ULE'>
						<label for="ULE">ULE</label>
					</li>
				</ul>
				<ul class="modal-ch urq" style="text-align: left;">
					<li class="">
			          	<input type='checkbox' id="UL1" class="te_clcik" data-sectionId="teeth_sel" value='UL1'>
						<label for="UL1">UL1</label>
					</li>
					<li class="">
			          	<input type='checkbox' id="UL2" class="te_clcik" data-sectionId="teeth_sel" value='UL2'>
						<label for="UL2">UL2</label>
					</li>
					<li class="">
			          	<input type='checkbox' id="UL3" class="te_clcik" data-sectionId="teeth_sel" value='UL3'>
						<label for="UL3">UL3</label>
					</li>
					<li class="">
			          	<input type='checkbox' id="UL4" class="te_clcik" data-sectionId="teeth_sel" value='UL4'>
						<label for="UL4">UL4</label>
					</li>
					<li class="">
			          	<input type='checkbox' id="UL5" class="te_clcik" data-sectionId="teeth_sel" value='UL5'>
						<label for="UL5">UL5</label>
					</li>
					<li class="">
			          	<input type='checkbox' id="UL6" class="te_clcik" data-sectionId="teeth_sel" value='UL6'>
						<label for="UL6">UL6</label>
					</li>
					<li class="">
			          	<input type='checkbox' id="UL7" class="te_clcik" data-sectionId="teeth_sel" value='UL7'>
						<label for="UL7">UL7</label>
					</li>
					<li class="">
			          	<input type='checkbox' id="UL8" class="te_clcik" data-sectionId="teeth_sel" value='UL8'>
						<label for="UL8">UL8</label>
					</li>
				</ul>
	          </div>
          	</div>	
          	<div class="seprater"> </div>
	        <div class="row">
	          <div class="col-md-12">
				<ul class="modal-ch urq mb0" style="text-align: left;">
					<li class="">
			          	<input type='checkbox' id="LL1" class="te_clcik" data-sectionId="teeth_sel" value='LL1'>
						<label for="LL1">LL1</label>
					</li>
					<li class="">
			          	<input type='checkbox' id="LL2" class="te_clcik" data-sectionId="teeth_sel" value='LL2'>
						<label for="LL2">LL2</label>
					</li>
					<li class="">
			          	<input type='checkbox' id="LL3" class="te_clcik" data-sectionId="teeth_sel" value='LL3'>
						<label for="LL3">LL3</label>
					</li>
					<li class="">
			          	<input type='checkbox' id="LL4" class="te_clcik" data-sectionId="teeth_sel" value='LL4'>
						<label for="LL4">LL4</label>
					</li>
					<li class="">
			          	<input type='checkbox' id="LL5" class="te_clcik" data-sectionId="teeth_sel" value='LL5'>
						<label for="LL5">LL5</label>
					</li>
					<li class="">
			          	<input type='checkbox' id="LL6" class="te_clcik" data-sectionId="teeth_sel" value='LL6'>
						<label for="LL6">LL6</label>
					</li>
					<li class="">
			          	<input type='checkbox' id="LL7" class="te_clcik" data-sectionId="teeth_sel" value='LL7'>
						<label for="LL7">LL7</label>
					</li>
					<li class="">
			          	<input type='checkbox' id="LL8" class="te_clcik" data-sectionId="teeth_sel" value='LL8'>
						<label for="LL8">LL8</label>
					</li>
				</ul>
				<ul class="modal-ch urq mb0" style="text-align: left;">
					<li class="">
			          	<input type='checkbox' id="LLA" class="te_clcik" data-sectionId="teeth_sel" value='LLA'>
						<label for="LLA">LLA</label>
					</li>
					<li class="">
			          	<input type='checkbox' id="LLB" class="te_clcik" data-sectionId="teeth_sel" value='LLB'>
						<label for="LLB">LLB</label>
					</li>
					<li class="">
			          	<input type='checkbox' id="LLC" class="te_clcik" data-sectionId="teeth_sel" value='LLC'>
						<label for="LLC">LLC</label>
					</li>
					<li class="">
			          	<input type='checkbox' id="LLD" class="te_clcik" data-sectionId="teeth_sel" value='LLD'>
						<label for="LLD">LLD</label>
					</li>
					<li class="">
			          	<input type='checkbox' id="LLE" class="te_clcik" data-sectionId="teeth_sel" value='LLE'>
						<label for="LLE">LLE</label>
					</li>
				</ul>
	          </div>
          	</div>	
			<ul class="modal-ch">
				<li class="modal_li_full">
		          	<input type='checkbox' id="LLQ" class="te_clcik" data-sectionId="teeth_sel" value='LLQ'>
					<label for="LLQ">LLQ</label>
				</li>
			</ul>
          </div>
          <div class="col-md-1">
			<ul class="modal-ch">
				<li class="modal_li_full strighttext">
		          	<input type='checkbox' id="lhs" class="te_clcik" data-sectionId="teeth_sel" value='LHS'>
					<label for="lhs">L<br>H<br>S</label>
				</li>
			</ul>	
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
			<ul class="modal-ch">
				<li class="modal_li_full">
		          	<input type='checkbox' id="Lowers" class="te_clcik" data-sectionId="teeth_sel" value='Lowers'>
					<label for="Lowers">Lowers</label>
				</li>
			</ul>	
          </div>
        </div>
      </div>
      <div class="modal-footer">
       <button type="button" class="btn cp_cl closebtn" id="add_val" data-dismiss="modal" aria-label="Close">Add Note</button>
	   <!--<button type="button" class="closebtn" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
		<!--<div id="add_val" class="btn cp_cl close">Add</div>-->
      </div>
    </div>
  </div>
</div>
	<!---------End_Model----------->
		<div class="Clipboard_btn">
			<button class='copy cp_cl' onclick="storage_data();">Copy To Clipboard</button>
		</div>
		</form>
		<textarea id='copy' class="display_none"></textarea>
	</div>

<?php include '../templates/footer.php'; ?>

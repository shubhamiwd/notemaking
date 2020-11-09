<?php 
/*
Template Name: Crown Cementation.
*/
include '../templates/header.php';
include '../models/crown-cementation-modal.php';
include '../database.php';
?>
<div class="container" id="checkbox-container">
    <div class="tem_title">
        <h2>Crown cementation</h2>
    </div>
    <form onclick="" action="" id="myform_recall">
        <div class="main-section">
		<input type="hidden" name="heading" id="Template_Name1" value="Template Name - Crown cementation">
        <input type="hidden" name="heading" id="Template_Name2" value="">
		<input type="hidden" name="heading" id="Date_1" value="<?php echo "Form filling date " . date("Y/m/d"); ?>">
        <input type="hidden" name="heading" id="Date_2" value="">
            <div class="mtnegtive">
                <div class="main-sec">
                    <div class="main-sec-in">
                        <div>
						<input type="hidden" name="heading" id="1" value="">
                            <input type="hidden" name="heading" id="2"
                                value="----------- Patient attending for today -----------">
                            <input type="hidden" name="heading" id="3" value="">
                            <br>
                            <p>Patient attending for today</p>
                            <ul class="rbtn">
                                <li>
                                    <input type='radio' id="Onlay" name='form_field' data-fieddata="alcohol"
                                        value='Patient attending for - Onlay'>
                                    <label for="Onlay">Onlay</label>
                                </li>
                                <li>
                                    <input type='radio' id="Crown" name='form_field' data-fieddata="alcohol"
                                        value='Patient attending for - Crown'>
                                    <label for="Crown">Crown</label>
                                </li>
                                <li>
                                    <input type='radio' id="Bridge" name='form_field' data-fieddata="alcohol"
                                        value='Patient attending for - Bridge'>
                                    <label for="Bridge">Bridge</label>
                                </li>
                                <li>
                                    <input type='radio' id="Maryland" name='form_field' data-fieddata="alcohol"
                                        value='Patient attending for - Maryland Bridge'>
                                    <label for="Maryland">Maryland Bridge</label>
                                </li>
                                <li>
                                    <input type='radio' id="Others" name='form_field' data-fieddata="alcohol"
                                        value='Patient attending for - Others'>
                                    <label for="Others">Others</label>
                                </li>
                            </ul>
                        </div>
                        <div class="inputcss">
                            <input type='text' name='DA' id="a2" data-fieddata="DA" value='DA: '>

                            <input type='text' name='Dentist' id="a3" data-fieddata="Dentist" value='Dentist: '>

                        </div>
                        <div class="txt-lbl">
                            <p>Caries: <span class="sel_teeth_2"></span></p>
                            <ul class="rbtn">
                                <li>
                                    <input type='radio' id="caries_1" name='caries' data-fieddata="Patient"
                                        value='Caries: Nil'>
                                    <label for="caries_1">Nil</label>
                                </li>
                                <li>
                                    <div data-toggle="modal" data-target="#crown_modal_22" class="sel_lnk">Select
                                        Option<i class="fas fa-external-link-alt"></i></div>
                                </li>
                                <li>
                                    <div class="carries">
                                        <input type="hidden" name="caries_teeth" id="select_teeth_2" value="">
                                        <!--<label for="" class="mt20">Caries: <span class="sel_teeth"></span></label>-->
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="txt-lbl">
                            <p>Material</p>
                            <ul class="rbtn">
                                <li>
                                    <input type='radio' id="max" name='Material' data-fieddata="Material"
                                        value='Material - Onlay'>
                                    <label for="max">e.max</label>
                                </li>
                                <li>
                                    <input type='radio' id="Zirconia" name='Material' data-fieddata="Material"
                                        value='Material - Zirconia'>
                                    <label for="Zirconia">Zirconia</label>
                                </li>
                                <li>
                                    <input type='radio' id="PFM" name='Material' data-fieddata="Material"
                                        value='Material - PFM'>
                                    <label for="PFM">PFM</label>
                                </li>
                                <li>
                                    <input type='radio' id="Gold" name='Material' data-fieddata="Material"
                                        value='Material - Gold'>
                                    <label for="Gold">Gold</label>
                                </li>
                                <li>
                                    <input type='radio' id="OthersMaterial" name='Material' data-fieddata="Material"
                                        value='Material - Others'>
                                    <label for="OthersMaterial">Other</label>
                                </li>
                            </ul>
                        </div>
                        <div class="txt-lbl">
                            <p>Issues with temp:</p>
                            <ul class="rbtn">
                                <li>
                                    <input type='radio' id="Nill" name='Issues-with-temp:' data-fieddata="Material"
                                        value='Issues with temp: - Nill'>
                                    <label for="Nill">Nill</label>
                                </li>
                                <li>
                                    <input type='radio' id="Came-Off" name='Issues-with-temp:'
                                        data-fieddata="Issues with temp:" value='Issues with temp: - Came Off'>
                                    <label for="Came-Off">Came Off</label>
                                </li>
                                <li>
                                    <input type='radio' id="Sensitive" name='Issues-with-temp:'
                                        data-fieddata="Issues with temp:" value='Issues with temp: - Sensitive'>
                                    <label for="Sensitive">Sensitive</label>
                                </li>
                                <li>
                                    <input type='radio' id="IssuesHigh" name='Issues-with-temp:'
                                        data-fieddata="Issues with temp:" value='Issues with temp: - High'>
                                    <label for="IssuesHigh">High</label>
                                </li>
                                <li>
                                    <input type='radio' id="OthersIssueswithtemp" name='Issues-with-temp:'
                                        data-fieddata="OthersIssueswithtemp" value='Issues-with-temp: Others'>
                                    <label for="OthersIssueswithtemp">Other</label>
                                </li>
                            </ul>
                        </div>
                        <div class="inputcss">
                            <p>Lab work back and checked on models</p>
                            <input type="text" class='required' name="alcohol_notes" value=""
                                placeholder="Enter notes here...">
                        </div>
                    </div>
                    <div class="main-sec-in">
                        <h3>LA</h3>
                        <div>
                            <input type="hidden" name="heading" id="1" value="">
                            <input type="hidden" name="heading" id="2" value="----------- LA ------------">
                            <input type="hidden" name="heading" id="3" value="">
                            <ul class="rbtn">
                                <li>
                                    <input type='radio' id="LANill" name='la' data-fieddata="alcohol" value='LA - Nill'>
                                    <label for="LANill">Nill</label>
                                </li>
                                <li>
                                    <input type='radio' id="infiltration" name='la' data-fieddata="alcohol"
                                        value='LA - infiltration'>
                                    <label for="infiltration">infiltration</label>
                                </li>
                                <li>
                                    <input type='radio' id="IANB" name='la' data-fieddata="alcohol"
                                        value='Patient attending for - IANB'>
                                    <label for="IANB">IANB</label>
                                </li>
                                <li>
                                    <input type='radio' id="IANB+Infiltration" name='la' data-fieddata="alcohol"
                                        value='Patient attending for - IANB+Infiltration'>
                                    <label for="IANB+Infiltration">IANB+Infiltration</label>
                                </li>
                                <li>
                                    <input type='radio' id="LAOthers" name='la' data-fieddata="alcohol"
                                        value='Patient attending for - LAOthers'>
                                    <label for="LAOthers">Others</label>
                                </li>
                            </ul>
                        </div>
                        <div class="inputcss">
                            <input type="text" class='required' name="LA Notes" value=""
                                placeholder="Enter notes here...">
                        </div>
                    </div>
                    <div class="main-sec-in">
                        <h3>Pre-cementation</h3>
						<input type="hidden" name="heading" id="1" value="">
                            <input type="hidden" name="heading" id="2" value="----------- Pre-cementation ------------">
                            <input type="hidden" name="heading" id="3" value="">
                        <div class="txt-lbl">
                            <p>Temp removed:</p>
                            <ul class="rbtn">
                                <li>
                                    <input type='radio' id="temp-removed-fo" name='temp-removed:'
                                        data-fieddata="temp-removed:" value='Temp-removed: - Flicked off'>
                                    <label for="temp-removed-fo">Flicked off</label>
                                </li>
                                <li>
                                    <input type='radio' id="temp-removed-cf" name='temp-removed:'
                                        data-fieddata="temp-removed:" value='Temp-removed: - Came Off'>
                                    <label for="temp-removed-cf">Cut Off</label>
                                </li>
                                <li>
                                    <input type='radio' id="temp-removed-af" name='temp-removed:'
                                        data-fieddata="temp-removed:" value='Temp-removed: - Already Off'>
                                    <label for="temp-removed-af">Already Off</label>
                                </li>
                                <li>
                                    <input type='radio' id="temp-removed-others" name='temp-removed:'
                                        data-fieddata="temp-removed:" value='Temp-removed: - others'>
                                    <label for="temp-removed-others">Others</label>
                                </li>
                            </ul>
                        </div>
                        <div class="txt-lbl">
                            <p>Prep cleaned</p>
                        </div>
                        <div class="txt-lbl">
                            <p>Restoration tried in, adjustments needed:</p>
                            <ul class="rbtn">
                                <li>
                                    <input type='radio' id="Restoration-nill" name='Restoration:'
                                        data-fieddata="Restoration:" value='Restoration tried in, adjustments needed: - Nill'>
                                    <label for="Restoration-nill">Nill</label>
                                </li>
                                <li>
                                    <input type='radio' id="Restoration-others" name='Restoration:'
                                        data-fieddata="Restoration:" value='Restoration tried in, adjustments needed: - Others'>
                                    <label for="Restoration-others">Others</label>
                                </li>
                            </ul>
                        </div>
                        <div class="txt-lbl">
                            <p>Pt happy to cement today (VCG):</p>
                            <ul class="rbtn">
                                <li>
                                    <input type='radio' id="VGC-showInMirror" name='VGC:' data-fieddata="showInMirror:"
                                        value='Pt happy to cement today (VCG): - Nill'>
                                    <label for="VGC-showInMirror">Show in mirror</label>
                                </li>
                                <li>
                                    <input type='radio' id="VGC-others" name='VGC:' data-fieddata="VGC:"
                                        value='Pt happy to cement today (VCG): - Others'>
                                    <label for="VGC-others">Others</label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="main-sec-in">
                        <h3>Cementation</h3>
						<input type="hidden" name="heading" id="1" value="">
                            <input type="hidden" name="heading" id="2" value="----------- Pre-cementation ------------">
                            <input type="hidden" name="heading" id="3" value="">
                        <div class="txt-lbl">
                            <div class="inputcss">
                                <input type="text" class='required' name="LA Notes" value=""
                                    placeholder="Enter notes here...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="txt_cpd"><p>Text Copied</p></div>
        </div>
        <div class="all_messages"></div>
		<div class="Clipboard_btn">
			<button class='copy cp_cl' onclick="storage_data();">Copy To Clipboard</button>
		</div>
    </form>
    <textarea id='copy' class="display_none"></textarea>
</div>
<?php include '../templates/footer.php'; ?>


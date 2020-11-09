<?php 
/*
Template Name: Paypal Payment Sucess.
*/
include 'templates/header.php';
//echo "====>".$_SESSION["id"];
require 'paypal/vendor/autoload.php';
/*********Authentications**********/
$apiContext = new \PayPal\Rest\ApiContext(
  new \PayPal\Auth\OAuthTokenCredential(
    'AbR_nRQLiT-qzzHQurZGcU_4_658a9EmVDKJF517yl3OHBT6zuaonOEJ2x3mABtiwa1hAGWM2hnBupv3',
    'EOe1YagYv9er0Eo0RUxPhnqFXKO2uBzh40isE8WB77naAHH1x3Q3gmQsj218luoZtEVkHmLQdHkUy1_d'
  )
);

/* if($action_msg){
	echo $action_msg;
} */

if (!empty($_GET['status'])) {
    if($_GET['status'] == "success"){
        $token = $_GET['token'];
        $agreement = new \PayPal\Api\Agreement();
        try {
            // Execute agreement
            $paypal = $agreement->execute($token, $apiContext);
		
 			echo "<pre>";
				print_r($paypal);
			echo "</pre>"; /**/

			$state = $paypal->state;
			$description = $paypal->description;
			$start_date = $paypal->start_date;
			$payment_method = $paypal->payer->payment_method;
			$status = $paypal->payer->status;
			$email = $paypal->payer->payer_info->email;
			$first_name = $paypal->payer->payer_info->first_name;
			$last_name = $paypal->payer->payer_info->last_name;
			$payer_id = $paypal->payer->payer_info->payer_id;
			$recipient_name = $paypal->shipping_address->recipient_name;
			$line1 = $paypal->shipping_address->line1;
			$line2 = $paypal->shipping_address->line2;
			$city = $paypal->shipping_address->city;
			$state = $paypal->shipping_address->state;
			$postal_code = $paypal->shipping_address->postal_code;
			$country_code = $paypal->shipping_address->country_code;/**/
			
			
			//echo $merchant_full_amount = $paypal->plan->type;
			$merchant_value = $paypal->plan->merchant_preferences->setup_fee->value;
			$auto_bill_amount = $paypal->plan->merchant_preferences->auto_bill_amount;
			$plantpe2 = $paypal->merchant_preferences->setup_fee->value;
			$next_billing_date = $paypal->agreement_details->next_billing_date;
			$last_payment_date = $paypal->agreement_details->last_payment_date;
			$last_payment_amount_price = $paypal->agreement_details->last_payment_amount->value;
			$last_payment_amount_currency = $paypal->agreement_details->last_payment_amount->currency;
			$final_payment_date = $paypal->agreement_details->final_payment_date;
			$last_payment = $paypal->agreement_details->last_payment_amount->value.','.$paypal->agreement_details->last_payment_amount->currency;
			
			/************************/
			
			$paymentQuery = "UPDATE `users_detail` SET `payment_method`='$payment_method',`payment_state`='$state',`plan_description`='$description',`payment_status`='$status',`payer_email`='$email',`first_name`='$first_name',`last_name`='$last_name',`payer_id`='$payer_id',`shipping_address`='$shipFullAddr',`payer_amount`='null',`payer_cycles`='null',`billing_cycles`='null',`start_date`='$start_date',`next_billing_date`='$next_billing_date',`last_payment_date`='$last_payment_date',`last_payment_amount`='$last_payment',`final_payment_date`='$final_payment_date' WHERE id='".$_SESSION["id"]."'";
			//$userupd = $conn->query($paymentQuery);
			if($conn->query($paymentQuery) === TRUE) {
				$action_msg = "<div class='sucess_cls'><h4>Thanks for Registration</h4>
			    <h5>You will be redirect in few <div id='countdown'></div> for Login.</h5></div>";
				return $action_msg;
			}			
		
			/**********************/
			
        } catch (PayPal\Exception\PayPalConnectionException $ex){
			echo $ex->getCode();
            echo $ex->getData();
            die($ex);
        } catch (Exception $ex) {
            die($ex);
        }
        }else{
        echo "user canceled agreement";
    }
    exit;
}

?>

    <div class="container">
        <div class="tem_title">
            <h2>Thank you For Subscribe.</h2>
        </div>
        <div class="main-section">
            <div class="mtnegtive">
                <div class="main-sec">
                	<div class="main-sec-in">
                        <div class="row align-items-center">
                          <div class="col-lg-12 col-md-12 text-center">
                                <img src="assets/images/thank-you.svg" class="thank_img" alt="thank-you">
                          	</div>
                          <div class="col-lg-12 col-md-12 text-center">
                                <div class="thansTable table-responsive">
                                	<table class="table table-bordered table-hover">
									  <tbody>
									    <tr>
									      <td>User name</td>
									      <td>Tster</td>
									    </tr>
									    <tr>
									      <td>User Plan</td>
									      <td>Standard</td>
									    </tr>
									    <tr>
									      <td>User Payment </td>
									      <td>Paypal</td>
									    </tr>
									    <tr>
									      <td style="width: 50%;">User Next Payment</td>
									      <td>20/OCT/2020</td>
									    </tr>
									  </tbody>
									</table>
                                </div>
                          	</div>
                          </div>
                	</div>
                </div>
            </div>
        </div>
    </div>

<?php


include 'templates/footer.php';
?>
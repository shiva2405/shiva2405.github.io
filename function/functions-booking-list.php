<?php 

	//Get all booking list
	function get_booking_list($data_order){
		global $wpdb;
		$table_name = $wpdb->prefix.'wprdts_booking_list';
		$query = $wpdb->get_results("SELECT * FROM ".$table_name." ORDER BY ".$data_order."");
		//print_r($query);
		if($query){
			return $query;
		}else{
			return false;
		}
	}

	//Making user email template from backend
	function get_user_email_template(){
		//Making email template from backend
				$emailSubject = get_option(WPRDTS_OPTION_CONFIRM_MESSAGE_ADMIN);
				//Email template 
				$emailTemplate = "<div class='wprdts-confirmation-message-page' id='wprdts-confirmation-message-page'> 
					<p class='wprdts-confirmation-name'>Dear ".$name.", Thank you for your order. </p>
					What to do next? <br /> <p class='wprdts-confirmation-message'>Your reservation has been successfully processd. 
					you will be receiving an email comfirmation  of your reservation shortly.  <br /><br> please go over the 
					information you submitted and reply CONFIRM to  complete your reservation. If you have any special 
					request as a: carseat, booster itc,  please indicate that in your email respond. </p> 
					<br> <p class='wprdts-booking-info-title'><u>Booking Info : </u></p> 
					<p class='wprdts-booking-info-field'>Name : ".$name."</p> <p class='wprdts-booking-info-field'>Email : ".$email."</p>
					<p class='wprdts-booking-info-field'>Phone : ".$phone."</p> <p class='wprdts-booking-info-field'>No of passenger : ".$passenger."</p>
					<p class='wprdts-booking-info-field'>No of luggage : ".$luggage."</p> <p class='wprdts-booking-info-field'>Trip Type : ".$tripTypeInText."</p>
					<p class='wprdts-booking-info-field'>Date/Time : ".$trip_date_time."</p> <p class='wprdts-booking-info-field'>Trip Type : ".$tripTypeInText."</p>";
					
				if($round_trip){
					$emailTemplate .= "<p class='wprdts-booking-info-field'>Return Date/Time : ".$return_trip_date_time."</p> <br />";
				}
				
				$emailTemplate	.= "<hr /><p class='wprdts-booking-info-field'>Price : ".$total_price."</p></div> <br /> ";		
				
	}
	

?>
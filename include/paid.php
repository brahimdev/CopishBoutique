<?php 
	
	//Composer 
    require_once('../vendor/autoload.php');

	//Stripe API key, from PWD
	require_once ('config.php');



	if($_POST) {
		$error = NULL;
		try {
			if(isset($_POST['customer_id'])) {
				$charge = Stripe_Charge::create(array(
					'customer' => $_POST['customer_id'],
					'amount' => 70000,
					'currency' => 'usd',
					'description' => 'Copish Boutique Marketing'
					));
				} else {
				$customer = Stripe_Customer::create(array(
					'card' => $_POST['stripeToken'],
					'email' => $_POST['email'],
					));

				$charge = Stripe_Charge::create(array(
					'customer' => $customer->id,
					'amount' => 70000,
					'currency' => 'usd',
					'description' => 'Copish Boutique Marketing'
					));
				}
			}
			catch(Exception $e) {
				echo "Error :".$e->getMessage();
			}

			if($error == NULL){
				echo "<h1>Charge successful</h1>";
			}
			else {
				echo "Error with charge";
			}
		}
<?php 

	$stripe = array(
	"secret_key" => "sk_test_HKEGS9Jn0zHyW6JnIK5E0BU9",
	"publishable_key" => "pk_test_ZpFJ7khGK0HEmwEv25ZwC92I"
);

Stripe::setApiKey($stripe['secret_key']);

<?php


require_once('./stripe-php/init.php');
\Stripe\Stripe::setApiKey('sk_test_51ISaH3BacYjVR52UAkAeTOMUq7OrpGaPWJkQufosBpywkbdzxDtf37wXT6qwEKAXL36H7uPeUVUi8JwdIMOEb0Nc00qtQZ23Ta');


$email =  $_POST['email'] ;
$fullName = $_POST['name'];
$phone	= $_POST['phone'];

$key = \Stripe\Customer::create([
  'description' => 'testing','email'=>"$email",'phone'=>"$phone", 'name'=>$fullName
]);


echo json_encode($key);

?>

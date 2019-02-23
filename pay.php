<?php 
print_r($_POST);
if(isset($_POST['pay'])){
    $purpose = "services";
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $total = $_POST['total'];




    include 'src/instamojo.php';

    $api = new Instamojo\Instamojo('test_8e3d5b64bdffd333b62324730c2', 'test_5e075b282ec7819b39b5134ffca','https://test.instamojo.com/api/1.1/');


    try {
        $response = $api->paymentRequestCreate(array(
            "purpose" => $purpose,
            "amount" => $total,
            "buyer_name" => $name,
            "phone" => $phone,
            "send_email" => true,
            "send_sms" => true,
            "email" => $email,
            'allow_repeated_payments' => false,
            "redirect_url" => "http://regent2.ml/thankyou.php",
            "webhook" => "http://regent2.ml/webhook.php"
            ));
        //print_r($response);

        $pay_ulr = $response['longurl'];
        
        //Redirect($response['longurl'],302); //Go to Payment page

        header("Location: $pay_ulr");
        exit();

    }
    catch (Exception $e) {
        print('Error: ' . $e->getMessage());
    }   


}
  ?>
<?php
if ($_POST) {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    if(mail("hovhannespost@gmail.com","simple mail from partner",$message)){
        $json=New stdClass();
        $json->status=1;
        echo json_encode($json);
    }else{
        $json->status=0;
        echo json_encode($json);
    }
}

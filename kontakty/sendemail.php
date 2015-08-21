<?php
if ($_POST) { // eñëè ïeðeäaí ìaññèâ POST
    $name = htmlspecialchars($_POST["name"]); // ïèøeì äaííûe â ïeðeìeííûe è ýêðaíèðóeì ñïeöñèìâoëû
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);
     // ïoäãoòoâèì ìaññèâ oòâeòa
    if(mail("hovhannespost@gmail.com","simple mail from partner",$message)){
        $json=New stdClass();
        $json->status=1;
        echo json_encode($json);
    }else{
        $json->status=0;
        echo json_encode($json);
    }
}

<?php
if ($_POST) { // e��� �e�e�a� �a���� POST
    $name = htmlspecialchars($_POST["name"]); // ���e� �a���e � �e�e�e���e � ���a����e� ��e�����o��
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);
     // �o��o�o��� �a���� o��e�a
    if(mail("hovhannespost@gmail.com","simple mail from partner",$message)){
        $json=New stdClass();
        $json->status=1;
        echo json_encode($json);
    }else{
        $json->status=0;
        echo json_encode($json);
    }
}

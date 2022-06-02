<?php

if(isset($_POST['enviar'])){
    if(!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['sms'])){
        $name = $_POST['username'];
        $name = $_POST['email'];
        $name = $_POST['sms'];
        $header = "From: alejhunior10@gmail.com" . "\r\n";
        $header.= "Replay-To: alejhunior10@gmail.com" . "\r\n";
        $header.= "X-Mailer: PHP/" . phpversion();
        $mail = mail($username, $email, $sms, $header);

        if($mail) {
            echo "<h4>MENSAJE ENVIADO EXITOSAMENTE.</h4>";
        }
    }
}

?>
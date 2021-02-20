<?php

if(isset($_POST['email']) && !empty($_POST['email'] )){ 

$nome= $_POST['name'];
$email= $_POST['email'];
$assunto= $_POST['subject'];
$mensagem= $_POST['comments'];



//echo "Nome:    ".$nome." <br/>
     // Email:   ".$email." <br/>
    //  Assunto: ".$assunto." <br/>
     // Mensagem: ".$mensagem." <br/>";

//até aqui está funcionando!!


   
$to = "facedohorrorgrind@gmail.com";
$assunto = "$assunto";
$mensagem =  "nome: ".$nome."\r\n";
            "email: ".$email."\r\n";
          "assunto: ".$assunto."\r\n";
        "mensagem: ".$mensagem."\r\n";

//Até aqui também!!   


            $header = "From: $email Reply-To: $email";
           $header = "Content-type:text/html; charset= utf-8";
                 ".x=Mailer:PHP/" .phpversion();


 mail($to,$assunto,$mensagem,$header);           

if(mail($to,$assunto,$mensagem,$header)):

  echo "Email enviado com sucesso!";
else:
  echo "Email não pode ser enviado!";
endif;
}


?>









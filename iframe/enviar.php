<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $datanasc = $_POST['datanasc'];
    $site = $_POST['site'];
    $dep = $_POST['dep'];
    $nota = $_POST['nota'];
    $cor = $_POST['cor'];
    $sexo = $_POST['sexo'];
    $time = $_POST['time'];
    $linux = $_POST['linux'];
    $message = $_POST['message'];
    $from = 'De: Aprenda HTML'; 
    $to = 'titenq2@gmail.com'; 
    $subject = 'Website';
			
    $body = "De: $name\n 
            e-mail: $email\n 
            Telefone: $tel\n
            Data de Nascimento: $datanasc\n
            Endereço do Site: $site\n
            Número de Deputados Federais Corruptos: $dep\n
            Mensagem:\n $message";
				
    if ($_POST['submit']) {
    if ($name != '' && $email != '') {				 
            if (mail ($to, $subject, $body, $from)) { 
	        echo '<p>Sua mensagem foi enviada!</p>';
	    } else { 
	        echo '<p>Algo deu errado, volte e tente novamente!</p>'; 
	    }
        }
    }
?>
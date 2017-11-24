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
    $musica = $_POST['musica'];
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
            Nota do Site: $nota\n
            Cor Favorita: $cor\n
            Sexo: $sexo\n
            Time Preferido: $time\n
            Linux Preferido: $linux\n
            Estilo Musical: $musica\n
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
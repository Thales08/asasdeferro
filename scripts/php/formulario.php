<?php
	
	//Variaveis de POST (atributo name do form)
	
	$nomeCliente = $_POST['nomeCliente'];
	$email = $_POST['email'];
	$mensagem = $_POST['mensagem'];
	
	//REMETENTE 
 	$email_remetente = $email; 	 
	 
	//Configurações do email, ajustar conforme necessidade
	
	$email_destinatario = "thalesduraes@outlook.com"; // qualquer email pode receber os dados
	$email_assunto = "Nova mensagem de Cliente";
	
	 
	//Monta o Corpo da Mensagem
	
	$email_conteudo = "Nome: $nomeCliente \n"; 
	$email_conteudo .= "Email: $email \n"; 
	$email_conteudo .=  "Mensagem: $mensagem \n";
 	 
	//Seta os Headers (parâmetros de configuração do envio de email)
	
	$email_headers = implode ( "\n",array ( "De: $email_remetente", "Destinarario: $email_destinatario", "Assunto: $email_assunto","Return-Path:  $email_remetente","MIME-Version: 1.0","X-Priority: //3","Content-Type: text/html; charset=UTF-8" ) );
	 
	//Enviando o email
	
	if (mail ($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers)){
		echo "Formulário enviado com sucesso";
		header('Location: ../../index.html');
				
	}else{
		echo "Falha no envio do formulário";		
	}

	//DEPOIS QUE ENVIOU O EMAIL, RETORNA PARA A PAGINA PRINCIPAL

?>
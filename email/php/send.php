<?php header("Content-type: text/html; charset=iso-8859-1"); ?>
<style>
body{width:98%;padding:1%;margin:0px;text-align:center;}
button{width:auto;text-align:center;font-size:140%;margin:0px auto;margin-top:20px;}
</style>
<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$amigo = $_POST['amigo'];
$emailamigo = $_POST['emailamigo'];
$titulo = $_POST['titulo'];
$image = $_POST['image'];
$mensagem = $_POST['mensagem'];
$headers = implode ("\n",array ("From:$nome<email_valido@seu_servidor.com>","Reply-To:$email","Subject:$titulo","Return-Path:$email","MIME-Version:1.0","X-Priority:3","Content-Type:text/html;charset=iso-8859-1"));
if ($nome == null) {
echo "Voce deve inserir seu <b>Nome</b><br>\n".
"<button onclick='history.back();'>Voltar</button>\n";
exit();
}
if ($email == null) {
echo "Por favor, digite seu <b>Email</b><br>\n".
"<button onclick='history.back();'>Voltar</button>\n";
exit();
}
if ($amigo == null) {
echo "Por favor, insira o <b>Nome do seu Amigo</b><br>\n".
"<button onclick='history.back();'>Voltar</button>\n";
exit();
}
if ($emailamigo == null) {
echo "Voce deve inserir o <b>Email do seu Amigo</b><br>\n".
"<button onclick='history.back();'>Voltar</button>\n";
exit();
}
if ($titulo == null) {
echo "Voce deve inserir o <b>Titulo da Mensagem</b><br>\n".
"<button onclick='history.back();'>Voltar</button>\n";
exit();
}
if ($mensagem == null) {
echo "Voce deve inserir o <b>Sua Mensagem</b><br>\n".
"<button onclick='history.back();'>Voltar</button>\n";
exit();
}
echo "Mensagem Enviada com Sucesso<br>\n".
"<button onclick='history.back();'>Voltar</button>\n";
$mensagem = "<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.01//EN'
'http://www.w3.org/TR/html4/strict.dtd'>
<!DOCTYPE HTML>
<html><head><title>Feliz Natal</title>
<style type='text/css'>
body{width:96%;height:auto;text-align:center;background:#fff;color:#900; margin:0px;padding:2%;}
h1{font-size:320%;color:#290;font-family:impact;}
p{font-size:110%;color:#00f;font-family:verdana;}
p.mensagem{font-size:110%;color:#009;font-family:verdana;}
b{color:#000;}
#content{width:98%;height:auto;text-align:center;padding-top:20px;padding-bottom:10px;}
img{width:86%;height:520px;border:0px;}
a{color:#280;font-size:120%;font-weight:bold;text-decoration:none;}
</style>
</head>
<body>
<div id='content'>
<p>Olá ".$amigo.", ".$nome." está te enviando um <b>Cartão de Natal</b> com uma mensagem, <b>leia por favor</b>.</p>
<h1>".$titulo."</h1>
<img src='http://www.seu_servidor.com/natal/images/".$image.".jpg' alt='".$titulo."' title='".$titulo."'>
<p class='mensagem'>".$mensagem."</p>
</div>
</body>
</html>";
$envia = mail($emailamigo,$amigo,$mensagem,$headers);
echo "<p>Abaixo como será visualizado pelo destinatário…<br>\n".
$mensagem;
?>
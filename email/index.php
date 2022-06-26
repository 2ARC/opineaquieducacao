<?php
include "php/form.php";
?>
<!DOCTYPE HTML>
<html>
<head><title>Mensagens de Natal</title>
<?php header("Content-type: text/html; charset=iso-8859-1"); ?>
<style>
body{width:98%;padding:1%;text-align:center;margin:0px;}
h1{color:#290;font-family:georgia;font-size:260%;}
p{font-size:120%;color:#444;}
b{color:#99f;}
table{width:100%;}
img{width:100%;margin:0px;}
button{width:auto%;padding:1%;margin:10px;background:#aaf;color:#ff0;border:3px double #fff;}
form{width:40%;padding:30%;padding-top:0px;padding-bottom:0px;margin:0px auto;font-family:verdana;}
input{width:98%;background:#fff;color:#00d;border:1px solid #ccc;padding:1%;font-size:90%;margin-top:5px;}
textarea{width:98%;height:80px;color:#00d;border:1px solid #ccc;padding:1%;margin:0px;margin-top:5px;font-size:140%;}
input.submit{width:auto;padding:2%;font-size:120%;color:#fff;background:#290;margin:5px auto;}
</style>
</head>
<body>
<h1>Mensagens de Natal</h1>
<p>Para enviar um <b>Cartão de Natal</b>, escolha uma das imagens e click no <b>Botão Azul</b> abaixo dela, preencha o formulário e click no botão verde <b>Enviar Cartão</b>.</p>
<img src="images/01.jpg">
<button class="imagem" onclick="if(document.getElementById('data01') .style.display=='none') {document.getElementById('data01') .style.display=''}else{document.getElementById('data01') .style.display='none'}">Enviar esta Imagem / Ocultar Formulário</button>
<div id="data01" style="display:none;">
<form accept-charset='iso-8859-1' method='POST' action='php/send.php'>
<input name='image' type='text' maxlength='02' value='01' style='display:none;'>
<?php echo $form; ?>
</form>
</div>
<img src="images/02.jpg">
<button class="imagem" onclick="if(document.getElementById('data02') .style.display=='none') {document.getElementById('data02') .style.display=''}else{document.getElementById('data02') .style.display='none'}">Enviar esta Imagem / Ocultar Formulário</button>
<div id="data02" style="display:none;">
<form accept-charset='iso-8859-1' method='POST' action='php/send.php'>
<input name='image' type='text' maxlength='02' value='02' style='display:none;'>
<?php echo $form; ?>
</form>
</div>
<img src="images/03.jpg">
<button onclick="if(document.getElementById('data03') .style.display=='none') {document.getElementById('data03') .style.display=''}else{document.getElementById('data03') .style.display='none'}">Enviar esta Imagem / Ocultar Formulário</button>
<div id="data03" style="display:none;">
<form accept-charset='iso-8859-1' method='POST' action='php/send.php'>
<input name='image' type='text' maxlength='02' value='03' style='display:none;'>
<?php echo $form; ?>
</form>
</div>
<img src="images/04.jpg">
<button class="imagem" onclick="if(document.getElementById('data04') .style.display=='none') {document.getElementById('data04') .style.display=''}else{document.getElementById('data04') .style.display='none'}">Enviar esta Imagem / Ocultar Formulário</button>
<div id="data04" style="display:none;">
<form accept-charset='iso-8859-1' method='POST' action='php/send.php'>
<input name='image' type='text' maxlength='02' value='04' style='display:none;'>
<?php echo $form; ?>
</form>
</div>
<img src="images/05.jpg">
<button class="imagem" onclick="if(document.getElementById('data05') .style.display=='none') {document.getElementById('data05') .style.display=''}else{document.getElementById('data05') .style.display='none'}">Enviar esta Imagem / Ocultar Formulário</button>
<div id="data05" style="display:none;">
<form accept-charset='iso-8859-1' method='POST' action='php/send.php'>
<input name='image' type='text' maxlength='02' value='05' style='display:none;'>
<?php echo $form; ?>
</form>
</div>
</body>
</html>
<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="bootstrap-5.1.0-dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link rel="stylesheet" href="style.css">

    <title>Sugestões</title>


    <script language="javascript"> 
function setCookie(nome, valor, dias){ 
diasms = (new Date()) .getTime() + 1000 * 3600 * 24 * dias; 
dias = new Date(diasms); 
expires = dias.toGMTString(); 
document.cookie = escape(nome) + "=" + escape(valor) + "; expires=" + expires; 
} 
</script>


  </head>
  <body>
    <div class="container-fluid main pb-5">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
            <a class="navbar-brand text-warning" href="#"><i class="fas fa-lightbulb"></i> Sugestões</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#sugestao">Sugestão</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <button class="btn btn-outline-warning" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo"><i class="fas fa-chalkboard-teacher"></i> Área do professor</button>
                </form>
                </div>
            </div>
        </nav>

        <div class="container text-center">
            <div class="apresentacao">
                <h1 class="py-5">Seja bem vindo!</h1>
                <h2 class="pb-3 text-secondary">Seu comentário é muito importante para nós</h2>
                <h4 class="pb-4 text-secondary text-justify">O espaço para Sugestões e Opiniões foi criado com a intenção de mitigar os efeitos da pandemia de COVID-19 na comunicação em nossa comunidade por meio de uma caixa de sugestões virtual, auxiliado por um sistema na Internet de Banco de Dados. Sinta-se livre para comentar e expor suas dúvidas, dificuldades e anseios. As interações serão respondidas por nosso pessoal em tempo.</h3>
            </div>
            <a class="btn btn-warning btn-lg p-4 px-5 shadow" type="submit" href="#sugestao"><i class="far fa-lightbulb"></i> Clique aqui para deixar sua sugestão</a>
        </div>
    </div>
    
    <div class='bg-warning py-5'>
        <div class="container">
            <h2 class="text-light" id="sugestao"><i class="far fa-lightbulb"></i> Sugestão</h2>
            <form action="sugestaoInserir.php" method="GET">
              <div class="mb-2 pt-5">
                  <label for="nome" class="form-label">Nome(*)</label>
                  <input type="text" class="form-control border-0" id="nome" name="nome" maxlength="60" required>
              </div>
              <div class="mb-2">
                  <label for="telefone" class="form-label">Telefone</label>
                  <input type="number" class="form-control border-0" id="telefone" name="telefone"  pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==11) return false;">
              </div>
              <div class="mb-2">
                  <label for="email" class="form-label">E-mail(*)</label>
                  <input type="email" class="form-control border-0" id="email" name="email" placeholder="nome@exemplo.com" maxlength="60" required>
              </div>
              <div class="mb-2">
                  <label for="sugestao" class="form-label">Digite aqui seu comentário(*)</label>
                  <textarea class="form-control border-0 textarea-sugestao" id="sugestao" name="sugestao" rows="3" maxlength="65535" required></textarea>
              </div>
              <div><small class="text-light">(*) Campos Obrigatórios</small></div>
              <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                  <button class="btn btn-dark btn-lg px-5" type="submit"><i class="fas fa-paper-plane"></i> Enviar</button>
                  <svg width="55" height="55">
                    <circle cx="50" cy="50" r="40" stroke="blue" stroke-width="5" fill="silver" onmouseover="this.style.fill='yellow'" onmouseout="this.style.fill='silver'">
                      <animate attributeName="r" values="40;20;40" dur="2s" repeatCount="indefinite" />
                    </circle>
                  </svg>
              </div>
            </form>
        </div>
    </div>

    
    <div class='bg-dark py-3'>
        <div class="container text-center">
        <small class="text-secondary" id="sugestaorodape">Desenvolvido por: Grupo-052 / PI_II / Univesp / Guarujá / 2022</small>







      </div>
    </div>


    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header bg-warning border-0">
            <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-chalkboard-teacher"></i> Área do professor</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body px-5 pt-5">
            <form action="login.php" method="POST">
              <div class="mb-3">
                <label for="usuario" class="col-form-label">Usuário:</label>
                <input type="text" class="form-control" id="usuario" name="user">
              </div>
              <div class="mb-3">
                <label for="senha" class="col-form-label">Senha:</label>
                <input type="password" class="form-control" id="senha" name="password">
              </div>
            
          </div>
          <div class="modal-footer border-0 px-5 pb-5">
            <button type="submit" class="btn btn-dark px-5">Entrar</button>
          </div>
        </form>
        </div>
      </div>
    </div>

	

	<input type="text" id="sres" value="<?= $_GET['sres'] ? $_GET['sres'] : false ?>">

    <div class="modal fade" id="sugestaomsg" tabindex="-1" aria-labelledby="sugestaomsgLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header bg-warning border-0">
            <h5 class="modal-title" id="sugestaomsgLabel"><i class="far fa-lightbulb"></i> Sugestão Cadastrada!</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body px-5 py-5">
				Obrigado pelo seu comentário, estaremos analizando.
            
          </div>
        </form>
        </div>
      </div>
    </div>

    <script src="bootstrap-5.1.0-dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/app.js"></script>

    
    <script language="javascript">
if (!document.cookie){
setCookie("cookie", "1", 365);
document.write("<font face='verdana' size='2'>Suas Visitas : 1</font>");
} else {
var cont = document.cookie;
var dividindo = cont.split("=");
//document.write(dividindo[1]);
var numero = parseInt(dividindo[1]);
var soma = numero + 1;
document.write("<font face='verdana' size='1'>Suas Visitas : " + soma + "</font>");
setCookie("cookie", soma, 365);
}
</script> 





    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
  </body>
</html>

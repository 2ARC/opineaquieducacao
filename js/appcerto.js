$(document).ready(function(){

    $('.btnaction').click(function(){

            $('#btn-analise').val($(this).attr("data-id"));
            $('#analise-cabecalho').html(
				$('#nome'+$(this).attr("data-id")).html() + 
				" - Data: " + 
				$('#data'+$(this).attr("data-id")).html() + 
				"<br />Tel.: " + 
				$('#telefone'+$(this).attr("data-id")).html()
			);
            $('#analise-cima').html(
				"<p style='cursor:pointer;'>" +
				$('#email'+$(this).attr("data-id")).html() +
				" <img title='Copiar e-mail para área de transferência' src=\"img/copiar.png\" style=\"width:20px;\"/></p>" + 
					"<script>$( \"p\" ).click(function() {navigator.clipboard.writeText(\"" + $('#email'+$(this).attr("data-id")).html() + "\");alert(\"E-mail copiado para a área de trabalho!\");});</script>"
			);
            $('#analise-body').html(
				$('#sugestao'+$(this).attr("data-id")).html()
			);

    });
    
    
    $('.btnexcluir').click(function(){

        $('#excluir-body').html('Tem certeja de deseja excluir a sugestão de:<br /><br />' +  $('#data'+$(this).attr("data-id")).html() + ' ' + $('#nome'+$(this).attr("data-id")).html());
        $('#btn-excluir').val($(this).attr("data-id"));
        

    }); 



    if($('#sres').val() == 'true'){
        $('#sugestaomsg').modal('show');
    }
    

});


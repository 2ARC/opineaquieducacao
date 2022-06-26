$(document).ready(function(){

    $('.btnaction').click(function(){
            $('#btn-analise').val($(this).attr("data-id"));
            $('#btn-whatsapp').val($(this).attr("data-id"));
            $('#analise-cabecalho').html(
        				$('#nome'+$(this).attr("data-id")).html() +
        				" - Data: " +
        				$('#data'+$(this).attr("data-id")).html() +
        				"<br />Tel.: " +
        				$('#telefone'+$(this).attr("data-id")).html()
			      );
            $('#analise-cima').html(

                "<textarea class='copia-email' style='width:100%;height:30px;input:focus;select:focus;border: 0 none;outline: 0;resize: none'>"+$('#email'+$(this).attr("data-id")).html()+"</textarea>"
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

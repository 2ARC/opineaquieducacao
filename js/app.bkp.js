$(document).ready(function(){

    $('.btnaction').click(function(){

            $('#btn-analise').val($(this).attr("data-id"));
            $('#analise-cabecalho').html(
				$('#email'+$(this).attr("data-id")).html() + 
				" - Data: " + 
				$('#data'+$(this).attr("data-id")).html() + 
				"<br />Tel.: " + 
				$('#telefone'+$(this).attr("data-id")).html()
			);
            $('#analise-cima').html(
				$('#nome'+$(this).attr("data-id")).html()
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


function showDiv() {
    let pessoa_ = document.querySelector('input[name="pessoa"]:checked').value;
    document.querySelector('#questoes').style.display = "block";
    document.querySelector('#dados').style.display = "none";
    if (pessoa_ == 'aluno'){
        document.querySelector('.alunos').style.display = "block";
    } else if (pessoa_ == 'responsavel') {
        document.querySelector('.responsaveis').style.display = "block";
    } else if (pessoa_ == 'membro') {
        document.querySelector('.membros').style.display = "block";

    }
}

function endis() {
    document.getElementById('genn').disabled = false;
}
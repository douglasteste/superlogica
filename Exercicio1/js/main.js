function inicializar(){
    $.ajax({
        url: "funcoes/consultar_pessoas_cadastradas.php",
        type: 'POST',
        success: function (data) {
            $('#resultado').html(data);
        }
    });
}

function validar_dados_formulario() {
    let senha = document.getElementById('password').value;
    if (senha.length < 8) {
        return("Você precisa informar uma senha com no mínimo 8 caracteres");
    } 
    else if (senha.search(/\d/) == -1) {
        return("A sua senha precisa conter pelo menos 1 número");
    } 
    else if (senha.search(/[a-zA-Z]/) == -1) {
        return("A sua senha precisa conter pelo menos 1 letra");
    } 
    else if (senha.search(/[^a-zA-Z0-9\!\@\#\$\%\^\&\*\(\)\_\+]/) != -1) {
        return("Caracteres inválidos");
    }
    return("ok");
}

$('#form').submit(function(e){
    e.preventDefault();
    let validacao = validar_dados_formulario();

    if(validacao === 'ok') {
        $.ajax({
            url: "funcoes/cadastrar_pessoa.php",
            type: 'POST',
            dataType: "json",
            data: {
                name: $('#name').val(),
                userName: $('#userName').val(),
                zipCode: $('#zipCode').val(),
                email: $('#email').val(),
                password: $('#password').val()
            },
            success: function (data) {

                if (data.dados != '') {
                    $('#resultado').html(data.dados);
                }

                Swal.fire({
                    icon: data.tipo,
                    title: data.mensagem
                });
            },
            error: function (data) {
                Swal.fire({
                    icon: 'error',
                    title: 'Ops, encontramos um erro',
                    text: data
                });
            }
        });
    } else {
        Swal.fire({
            icon: 'error',
            title: 'Ops, encontramos um erro',
            text: validacao
        });
    }
});
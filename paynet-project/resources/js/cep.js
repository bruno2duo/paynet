let x = document.getElementById("cep");
x.addEventListener("blur", myBlurFunction, true);

function myBlurFunction() {
    var cep = document.getElementById("cep").value;

    document.getElementById("numero").value = ''
    document.getElementById("logradouro").value = ''
    document.getElementById("bairro").value = ''
    document.getElementById("cidade").value = ''
    document.getElementById("estado").value = ''

    fetch('https://viacep.com.br/ws/'+cep+'/json/')
    .then(response => {
        if (!response.ok) {
            throw new Error('Erro na requisição');
        }
        return response.json();
    })
    .then(data => {
        if(data.erro) {
            alert('CEP inválido')
        } else {
            document.getElementById("logradouro").value = data.logradouro
            document.getElementById("bairro").value = data.bairro
            document.getElementById("cidade").value = data.localidade
            document.getElementById("estado").value = data.uf
        }
    })
    .catch(erro => {
        alert('Erro ao consultar CEP')
    });
}

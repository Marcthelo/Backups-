function formatarCPF(campo) {
    campo.value = campo.value.replace(/\D/g, '').replace(/(\d{3})(\d{3})(\d{3})(\d{2})/g, '$1.$2.$3-$4');
}

function formatarCNPJ(campo) {
    campo.value = campo.value.replace(/\D/g, '').replace(/(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})/g, '$1.$2.$3/$4-$5');
}

function formatarTelefone(campo) {
    campo.value = campo.value.replace(/\D/g, '').replace(/(\d{2})(\d{5})(\d{4})/g, '($1) $2-$3');
}
function formatarCEP(campo) {
    campo.value = campo.value.replace(/\D/g, '').replace(/(\d{5})(\d{3})/g, '$1-$2');
}
function formatarDataNascimento(campo) {
    campo.value = campo.value.replace(/\D/g, '').replace(/(\d{2})(\d{2})(\d{4})/g, '$1/$2/$3');
}
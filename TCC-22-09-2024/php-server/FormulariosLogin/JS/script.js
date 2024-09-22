const tipoUsuario = document.getElementById('tipoUsuario');
const camposFisica = document.getElementById('camposFisica');
const camposJuridica = document.getElementById('camposJuridica');
const camposAdministrador =document.getElementById('camposAdministrador');

tipoUsuario.addEventListener('change', () =>{
        camposFisica.style.display = 'none';
        camposJuridica.style.display = 'none';
        camposAdministrador.style.display = 'none';
        if (tipoUsuario.value === 'Fisica') {
            camposFisica.style.display = 'block';
        } else if(tipoUsuario.value === 'Juridica'){
            camposJuridica.style.display = 'block';
        } else if(tipoUsuario.value === 'Administrador'){
            camposAdministrador.style.display = 'block';
        }
});

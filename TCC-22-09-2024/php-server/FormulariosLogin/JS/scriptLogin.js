
  $(document).ready(function() {
    $('#documento').mask('000.000.000-00/0000-0000', {
      reverse: true,
      onKeyPress: function(cep, e, currentField, options) {
        // Verifica o tamanho do valor digitado para identificar se é CPF ou CNPJ
        if (cep.length === 14) {
          // É um CNPJ
          $(this).unmask().mask('00.000.000/0000-00');
        } else if (cep.length === 11) {
          // É um CPF
          $(this).unmask().mask('000.000.000-00');
        }
      }
    });

    $('#loginForm').submit(function(event) {
      event.preventDefault(); // Impede o envio padrão do formulário

      // Obtém o valor do documento e remove a máscara
      const documento = $('#documento').val().replace(/\D/g, '');

      // Validação básica (adicione mais validações conforme necessário)
      if (documento.length !== 11 && documento.length !== 14) {
        alert('CPF ou CNPJ inválido.');
        return false;
      }

      // Envia os dados para o servidor com o nome correto
      if (documento.length === 11) {
        $(this).append('<input type="hidden" name="tipo" value="cpf">');
      } else {
        $(this).append('<input type="hidden" name="tipo" value="cnpj">');
      }

      // Envia o formulário
      this.submit();
    });
  });
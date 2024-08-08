// Selecionando a tag do formulário
const form = document.querySelector('form');

// Adicionando um evento de envio do formulário
form.addEventListener('submit', (event) => {
    // Prevenindo o comportamento padrão de envio do formulário
    event.preventDefault();

    // Obtendo os valores dos campos
    const telefoneInput = document.querySelector('input[name="telefone"]');
    const emailInput = document.querySelector('input[name="email"]');
    const dataNascimentoInput = document.querySelector('input[name="data_nascimento"]');

    // VALIDAÇÕES

    // Validando o campo de telefone (permitindo apenas números)
    const telefoneValue = telefoneInput.value;
    const telefoneRegex = /^\d+$/; // Expressão regular que aceita apenas números
    if (!telefoneRegex.test(telefoneValue)) {
        alert('Por favor, insira apenas números no campo de telefone.');
        return;
    }

    // Validando o campo de email (verificando a presença do @)
    const emailValue = emailInput.value;
    if (!emailValue.includes('@')) {
        alert('Por favor, insira um endereço de email válido.');
        return;
    }

    // Validando a data de nascimento (até o ano de 2010)
    const dataNascimentoValue = new Date(dataNascimentoInput.value);
    const anoLimite = 2010;
    if (dataNascimentoValue.getFullYear() > anoLimite) {
        alert('A data de nascimento deve ser até o ano de 2010.');
        return;
    }
    
    console.log('Script carregado com sucesso!');

    // Enviando o formulário se todas as validações passarem
    form.submit();
});

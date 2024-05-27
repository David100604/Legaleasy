function mascaraCPF(input) {
    let value = input.value.replace(/\D/g, ''); // Remove caracteres não numéricos
    if (value.length > 3 && value.length <= 6) {
        value = value.replace(/(\d{3})(\d+)/, '$1.$2');
    } else if (value.length > 6 && value.length <= 9) {
        value = value.replace(/(\d{3})(\d{3})(\d+)/, '$1.$2.$3');
    } else if (value.length > 9) {
        value = value.replace(/(\d{3})(\d{3})(\d{3})(\d{1,2})/, '$1.$2.$3-$4');
    }
    input.value = value;
}
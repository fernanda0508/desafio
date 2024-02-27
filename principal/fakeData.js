// fakeData.js
document.addEventListener('DOMContentLoaded', () => {
    // Dados fake para as datas
    function gerarDataAleatoria2024() {
        // Gerar um mês aleatório (0 a 11, pois em JavaScript Janeiro é 0)
        const mesAleatorio = Math.floor(Math.random() * 12);

        // Gerar um dia aleatório. Considerar a quantidade de dias do mês
        let diaMaximo;
        switch (mesAleatorio) {
            case 1: // Fevereiro, considerando se é ano bissexto
                diaMaximo = 29;
                break;
            case 3: case 5: case 8: case 10:
                diaMaximo = 30;
                break;
            default:
                diaMaximo = 31;
        }
        const diaAleatorio = Math.floor(Math.random() * diaMaximo) + 1;

        // Retornar a data no formato Date
        return new Date(2024, mesAleatorio, diaAleatorio);
    }

    // Função para formatar a data no formato DD/MM/AAAA
    function formatarData(data) {
        return `${data.getDate().toString().padStart(2, '0')}/${(data.getMonth() + 1).toString().padStart(2, '0')}/${data.getFullYear()}`;
    }
    // Gerar datas aleatórias para abertura e fechamento
    const dataAbertura = gerarDataAleatoria2024();
    const dataFechamento = gerarDataAleatoria2024();

    // Garantir que a data de fechamento seja posterior à data de abertura
    while (dataFechamento <= dataAbertura) {
        dataFechamento = gerarDataAleatoria2024();
    }

    // Selecionando os elementos do DOM onde as datas serão inseridas
    const elementosDataAbertura = document.querySelectorAll('.data-abertura');
    const elementosDataFechamento = document.querySelectorAll('.data-fechamento');

    // Inserindo as datas formatadas nos elementos
    elementosDataAbertura.forEach(elemento => {
        elemento.textContent = `Data de abertura: ${formatarData(dataAbertura)}`;
    });

    elementosDataFechamento.forEach(elemento => {
        elemento.textContent = `Data de Final: ${formatarData(dataFechamento)}`;
    });
});

// Array de objetos representando as disciplinas fictícias.
const fakeDisciplinas = [
    { nome: "Programação I8", cargaHoraria: 5, cargaHorariaSemestral: 40, turno: "Noturno", area: "Desenvolvimento" },
    { nome: "Banco de Dados II", cargaHoraria: 7, cargaHorariaSemestral: 60, turno: "Noturno", area: "Desenvolvimento" },
    { nome: "Engenharia de Software", cargaHoraria: 4, cargaHorariaSemestral: 40, turno: "Matutino", area: "Análise" },
    { nome: "Redes de Computadores", cargaHoraria: 4, cargaHorariaSemestral: 44, turno: "Vespertino", area: "Hardware" },
    { nome: "Desenvolvimento Web", cargaHoraria: 4, cargaHorariaSemestral: 40, turno: "Matutino", area: "Desenvolvimento" },
    { nome: "Inteligência Artificial", cargaHoraria: 2, cargaHorariaSemestral: 30, turno: "Matutino", area: "Desenvolvimento" },
    { nome: "Segurança da Informação", cargaHoraria: 2, cargaHorariaSemestral: 30, turno: "Vespertino", area: "Hardware" },
    { nome: "Computação Gráfica", cargaHoraria: 2, cargaHorariaSemestral: 30, turno: "Noturno", area: "Hardware" }
];


// Variável para armazenar temporariamente a disciplina selecionada pelo usuário.
let disciplinaAtual = null;

// Evento disparado quando o conteúdo do DOM está carregado e pronto.
document.addEventListener('DOMContentLoaded', () => {
    // Obtém o elemento tbody da tabela pelo seu ID.
    const tableBody = document.getElementById("tableBody");
    // Itera sobre o array de disciplinas e cria uma linha de tabela para cada uma.
    fakeDisciplinas.forEach((disciplina, index) => {
        const row = `<tr>
                        <th scope="row">${index + 1}</th>
                        <td>${disciplina.nome}</td>
                        <td>${disciplina.cargaHoraria}</td>
                        <td>${disciplina.cargaHorariaSemestral}</td>
                        <td>${disciplina.turno}</td>
                        <td>${disciplina.area}</td>
                        <td><button type="button" class="btn btn-primary select-btn" data-bs-toggle="modal" data-bs-target="#myModal" data-id="${index}">Selecionar</button></td>
                    </tr>`;
        tableBody.innerHTML += row;
    });

    // Evento de 'input' para lidar com a pesquisa em tempo real
    document.getElementById('searchInput').addEventListener('input', function () {
        const searchValue = this.value.toLowerCase();
        const tableRows = document.querySelectorAll('#tableBody tr');

        tableRows.forEach(row => {
            const nomeDisciplina = row.cells[1].innerText.toLowerCase();
            const turnoDisciplina = row.cells[4].innerText.toLowerCase();
            if (nomeDisciplina.includes(searchValue) || turnoDisciplina.includes(searchValue)) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
    });

    // Adiciona um ouvinte de eventos a cada botão 'Selecionar'.
    document.querySelectorAll('.select-btn').forEach(button => {
        button.addEventListener('click', function () {
            // Obtém o ID da disciplina associada ao botão clicado.
            const disciplinaId = parseInt(this.getAttribute('data-id'));
            // Atualiza a disciplina atual com a disciplina selecionada.
            disciplinaAtual = fakeDisciplinas[disciplinaId];
        });
    });

    // Adiciona um ouvinte de eventos ao botão 'Sim' no modal.
    document.getElementById('confirmSelection').addEventListener('click', function () {
        // Verifica se existe uma disciplina atualmente selecionada.
        if (disciplinaAtual) {
            // Obtém o tbody da tabela de disciplinas selecionadas.
            const selectedTableBody = document.getElementById('selectedDisciplinas');
            // Cria uma nova linha na tabela de disciplinas selecionadas.
            const row = `<tr>
                            <th scope="row">${selectedTableBody.children.length + 1}</th>
                            <td>${disciplinaAtual.nome}</td>                  
                            <td>${disciplinaAtual.cargaHoraria}</td>
                            <td>${disciplinaAtual.cargaHorariaSemestral}</td>
                            <td>${disciplinaAtual.turno}</td>
                            <td>${disciplinaAtual.area}</td>
                            <td><button type="button" class="btn btn-danger remove-btn">Excluir</button></td>
                        </tr>`;
            selectedTableBody.innerHTML += row;
            attachRemoveEventListeners();

            function attachRemoveEventListeners() {
                document.querySelectorAll('.remove-btn').forEach(button => {
                    button.addEventListener('click', function () {
                        // Remove a linha da tabela
                        this.closest('tr').remove();
                    });
                });
            }

            // Preparar os dados para envio
            const disciplinasParaEnviar = Array.from(document.querySelectorAll('#selectedDisciplinas tr')).map(tr => {
                return {
                    nome: tr.cells[1].innerText,
                    cargaHoraria: tr.cells[2].innerText,
                    turno: tr.cells[3].innerText
                };
            });

            // Preencher o campo oculto do formulário com os dados JSON
            document.getElementById('disciplinasSelecionadas').value = JSON.stringify(disciplinasParaEnviar);

            disciplinaAtual = null;

            // document.getElementById('saveAreaPreference').addEventListener('click', function () {
            //     const selectedArea = document.getElementById('areaFilter').value;
            //     localStorage.setItem('userAreaPreference', selectedArea);

            //     // Redirecionar para a página principal
            //     window.location.href = '/preferencias/index.php';
            // });

        }
    });
});

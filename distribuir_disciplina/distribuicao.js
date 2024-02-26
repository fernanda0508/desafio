// Exemplo de dados de disciplinas e professores
const disciplinas = [
    { nome: "Algoritmos ", cargaHoraria: 2 },
    { nome: "Fundamentos de programação web", cargaHoraria: 4 },
    { nome: "Programação Orientada a Objeto", cargaHoraria: 4 },
    { nome: "Programação Orientada a Objeto", cargaHoraria: 4 },
    { nome: "Modelagem de Sistemas", cargaHoraria: 2 },
    { nome: "Banco de Dados II", cargaHoraria: 2 },
    { nome: "Banco de Dados II", cargaHoraria: 2 },
    { nome: "Desenvolvimento de Projeto Científico e Tecnológico", cargaHoraria: 4 },
    // Mais disciplinas aqui
];

const professores = [
    { nome: "Prof. Leandro", cargaHorariaAtual: 8, coordenador: "sim" },
    { nome: "Prof. Willians", cargaHorariaAtual: 12, coordenador: "não" },
    { nome: "Prof. Fernando", cargaHorariaAtual: 11, coordenador: "não" },
    { nome: "Prof. Tenilce", cargaHorariaAtual: 12, coordenador: "não" },
    { nome: "Prof. Elizangela", cargaHorariaAtual: 10, coordenador: "não" },
    // Mais professores aqui
];

// Função para atribuir disciplina ao professor
function atribuirDisciplina(disciplina, professor) {
    // Verificar se o professor é coordenador ou não
    const professorObj = professores.find(p => p.nome === professor.nome);
    const cargaHorariaMaxima = professorObj.coordenador === "sim" ? 10 : 16;

    // Verificar se a carga horária não excede o limite
    if (professorObj.cargaHorariaAtual + disciplina.cargaHoraria <= cargaHorariaMaxima) {
        professorObj.cargaHorariaAtual += disciplina.cargaHoraria;
        const indiceDisciplina = disciplinas.findIndex(d => d.nome === disciplina.nome);
        disciplinas.splice(indiceDisciplina, 1);

        atualizarTabelaDisciplinas();
        atualizarTabelaProfessores();

        const tabelaAtribuicoes = document.getElementById('tabelaAtribuicoes');
        let linhaAtribuicao = tabelaAtribuicoes.insertRow();
        linhaAtribuicao.insertCell(0).textContent = disciplina.nome;
        linhaAtribuicao.insertCell(1).textContent = professor.nome;

        // Adicionando o botão de excluir na linha de atribuição
        let celulaAcoes = linhaAtribuicao.insertCell(2);
        let botaoExcluir = document.createElement('button');
        botaoExcluir.textContent = 'Excluir';
        botaoExcluir.className = 'btn btn-danger btn-sm';
        botaoExcluir.setAttribute('data-disciplina', disciplina.nome);
        botaoExcluir.setAttribute('data-professor', professor.nome);
        botaoExcluir.onclick = function () {
            removerAtribuicao(this.getAttribute('data-disciplina'), this.getAttribute('data-professor'));
        };
        celulaAcoes.appendChild(botaoExcluir);;
    } else {
        alert('Carga horária excedida para este professor.');
    }
}

function removerAtribuicao(nomeDisciplina, nomeProfessor) {
    // Encontrar a disciplina e o professor
    const disciplina = disciplinas.find(d => d.nome === nomeDisciplina);
    const professor = professores.find(p => p.nome === nomeProfessor);

    // Adicionar a disciplina de volta à lista
    if (disciplina) {
        disciplinas.push(disciplina);
    }

    // Atualizar a carga horária do professor
    if (professor) {
        professor.cargaHorariaAtual -= disciplina.cargaHoraria;
    }

    // Remover a linha da tabela de atribuições
    const tabelaAtribuicoes = document.getElementById('tabelaAtribuicoes');
    for (let i = 1; i < tabelaAtribuicoes.rows.length; i++) {
        if (tabelaAtribuicoes.rows[i].cells[0].textContent === nomeDisciplina &&
            tabelaAtribuicoes.rows[i].cells[1].textContent === nomeProfessor) {
            tabelaAtribuicoes.deleteRow(i);
            break;
        }
    }

    // Atualizar as tabelas
    atualizarTabelaDisciplinas();
    atualizarTabelaProfessores();
}

// Função para atualizar tabela de disciplinas
function atualizarTabelaDisciplinas() {
    const tbodyDisciplinas = document.querySelector('#tabelaDisciplinas tbody');
    tbodyDisciplinas.innerHTML = '';
    disciplinas.forEach(disciplina => {
        let linhaDisciplina = tbodyDisciplinas.insertRow();
        linhaDisciplina.insertCell(0).textContent = disciplina.nome;
        linhaDisciplina.insertCell(1).textContent = disciplina.cargaHoraria;

        let celulaAcoes = linhaDisciplina.insertCell(2);
        let selectProfessores = document.createElement('select');
        selectProfessores.className = 'form-control';

        professores.forEach(professor => {
            let opcao = document.createElement('option');
            opcao.value = professor.nome;
            opcao.textContent = professor.nome;
            selectProfessores.appendChild(opcao);
        });

        celulaAcoes.appendChild(selectProfessores);
        let botaoAtribuir = document.createElement('button');
        botaoAtribuir.textContent = 'Atribuir';
        botaoAtribuir.className = 'btn btn-primary btn-sm';
        botaoAtribuir.onclick = () => atribuirDisciplina(disciplina, { nome: selectProfessores.value });
        celulaAcoes.appendChild(botaoAtribuir);
    });
}

function atualizarTabelaProfessores() {
    const tbodyProfessores = document.querySelector('#tabelaProfessores tbody');
    tbodyProfessores.innerHTML = '';
    professores.forEach(professor => {
        let linhaProfessor = tbodyProfessores.insertRow();
        linhaProfessor.insertCell(0).textContent = professor.nome;
        linhaProfessor.insertCell(1).textContent = professor.cargaHorariaAtual;
        linhaProfessor.insertCell(2).textContent = professor.coordenador;
    });
}
// Função para atualizar a tabela de atribuições
function atualizarTabelaAtribuicoes() {
    const tabelaAtribuicoes = document.querySelector('#tabelaAtribuicoes tbody');
    tabelaAtribuicoes.innerHTML = '';
}
// Chamada das funções ao carregar a página
document.addEventListener('DOMContentLoaded', () => {
    atualizarTabelaDisciplinas();
    atualizarTabelaProfessores();
    atualizarTabelaAtribuicoes();
});
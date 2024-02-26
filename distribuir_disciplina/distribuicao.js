// Exemplo de dados de disciplinas e professores
const disciplinas = [
    { nome: "Algoritmos", cargaHoraria: 2 },
    { nome: "Fundamentos de programação web", cargaHoraria: 4 },
    { nome: "Programação Orientada a Objeto", cargaHoraria: 4 },
    { nome: "Modelagem de Sistemas", cargaHoraria: 2 },
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
    const professorObj = professores.find(p => p.nome === professor.nome);
    const cargaHorariaMaxima = professorObj.coordenador === "sim" ? 10 : 16;

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
    } else {
        alert('Carga horária excedida para este professor.');
    }
}

// Funções para atualizar tabelas
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

document.addEventListener('DOMContentLoaded', () => {
    atualizarTabelaDisciplinas();
    atualizarTabelaProfessores();
});

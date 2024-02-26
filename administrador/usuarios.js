// Exemplo de dados de usuários em formato JSON
const usuarios = [
  { id: 1, nome: "Maria Silva", email: "maria.silva@ifro.edu.br" },
  { id: 2, nome: "João Santos", email: "joao.santos@ifro.edu.br" },
  { id: 3, nome: "Ana Pereira", email: "ana.pereira@ifro.edu.br" },
  { id: 4, nome: "Pedro Alves", email: "pedro.alves@ifro.edu.br" },
  { id: 5, nome: "Carla Dias", email: "carla.dias@ifro.edu.br" },
  { id: 6, nome: "Lucas Andrade", email: "lucas.andrade@ifro.edu.br" },
  { id: 7, nome: "Fernanda Gomes", email: "fernanda.gomes@ifro.edu.br" },
  { id: 8, nome: "Rafaela Machado", email: "rafaela.machado@ifro.edu.br" },
  { id: 9, nome: "Carlos Souza", email: "carlos.souza@ifro.edu.br" },
  { id: 10, nome: "Juliana Lima", email: "juliana.lima@ifro.edu.br" }
];

/// Função para preencher a tabela com os dados dos usuários
function preencherTabela() {
  const tabela = document.querySelector('tbody');
  usuarios.forEach(usuario => {
    let linha = tabela.insertRow();
    linha.insertCell(0).textContent = usuario.id;
    linha.insertCell(1).textContent = usuario.nome;
    linha.insertCell(2).textContent = usuario.email;

    let celulaAcoes = linha.insertCell(3);
    celulaAcoes.innerHTML = `

      <button class="btn btn-danger btn-sm">Remover</button>
    `;

    // Botão Editar
    let botaoEditar = document.createElement('button');
    botaoEditar.textContent = 'Editar';
    botaoEditar.className = 'btn btn-warning btn-sm';
    botaoEditar.onclick = () => {
      window.location.href = `editar_usuario.html?id=${usuario.id}`;
    };
    celulaAcoes.insertBefore(botaoEditar, celulaAcoes.firstChild); // Inserir antes dos outros botões

    // Botão Remover
    let botaoRemover = celulaAcoes.children[1]; // Segundo botão na célula de ações
    botaoRemover.onclick = () => {
      tabela.deleteRow(linha.rowIndex - 1); // Remove a linha correspondente
    };
  });
}

document.addEventListener('DOMContentLoaded', preencherTabela);

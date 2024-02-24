// professorData.js
const professorInfo = {
  matricula: '123456',
  nome: 'João da Silva',
  senha: 'senha123', // Senha não deve ser preenchida por segurança
  email: 'joao.silva@ifro.edu.br',
  dataIngresso: '2015-08-01',
  nivelFormacao: 'mestrado',
  funcao: 'professor',
  areaEspecializacao: 'Computação'
};

$(document).ready(function () {
  // Preenche o formulário com os dados do professor
  $('#matricula').val(professorInfo.matricula);
  $('#nome').val(professorInfo.nome);
  // A senha geralmente não é preenchida automaticamente por questões de segurança
  $('#email').val(professorInfo.email);
  $('#dataIngresso').val(professorInfo.dataIngresso);
  $('#nivelFormacao').val(professorInfo.nivelFormacao);
  $('#funcao').val(professorInfo.funcao);
  $('#areaEspecializacao').val(professorInfo.areaEspecializacao);
});

document.getElementById('cadastroProfessor').addEventListener('submit', function (event) {
  event.preventDefault();

  // Aqui você pode adicionar o código para processar os dados do formulário
  alert('Formulário enviado!');
});

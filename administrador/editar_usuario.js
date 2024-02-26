function getIdFromUrl() {
  const params = new URLSearchParams(window.location.search);
  return params.get('id');
}

function carregarDadosUsuario(id) {
  // Aqui você buscaria os dados do usuário a partir do ID
  // Neste exemplo, estamos apenas simulando com dados falsos
  const usuario = usuarios.find(u => u.id == id);
  if (usuario) {
    document.getElementById('nomeUsuario').value = usuario.nome;
    document.getElementById('emailUsuario').value = usuario.email;
  }
}

const userId = getIdFromUrl();
if (userId) {
  carregarDadosUsuario(userId);
}

  document.getElementById("recuperaSenha").addEventListener("submit", function (event) {
    event.preventDefault(); // Evitar o envio do formulário

    var senha = document.getElementById("password").value; // Pegar o valor do campo de senha

    if (senha !== "") {
      // Se a senha estiver preenchida, mostrar o alerta
      alert("Mensagem de alerta aqui!");
      // Redirecionar de volta para index.html
      window.location.href = "index.html";
    } else {
      // Se a senha não estiver preenchida, n fazer nada ou exibir outra mensagem de erro
      alert("Preencha a senha!");
    }
  });
<head>
    <title>Cadastro</title>
    <link rel="stylesheet"  href="estilo.css">
</head>
<body>
    <nav class="menu">
      <ul>
        <li><a href="mostradados.php" target="_blank">Mostrar dados</a></li>
      </ul>
    </nav>
  <div>
    <h1 id="titulo">Cadastro de Carros</h1>
    <p id="subtitulo">Complete com seus dados</p>
  </div>
  <form action="cadastra.php" method="post">
    <fieldset class="grupo">
      <div class="campo">
        <label for="nome"><strong>Nome</strong></label>
        <input type="text" name="nome" id="nome" required></input>
      </div>
      <div class="campo">
        <label for="sobrenome"><strong>Sobrenome</strong></label>
        <input type="text" name="sobrenome" id="sobrenome" required>
      </div>
      <div class="campo">
        <label form="cpf"><strong>CPF</strong></label>
        <input type="text" name="cpf" id="cpf" required>
      </div>
      <div class="campo">
        <label form="email"><strong>E-mail</strong></label>
        <input type="text" name="email" id="email" required>
        <input type="submit" name="btn" value="Enviar">
        <input type="reset" name="resetar" value="Limpar">
      </div>
      </fieldset>
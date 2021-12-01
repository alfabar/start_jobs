<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Title é o que aparece no google escolher um texto de ate 60 caracteres -->
  <title>Start_Jobs-Home</title>

  <!-- Inserindo o Favicon -->
  <link rel="shortcut icon" href="imagens/favicon.jpg" type="image/x-icon">

  <!-- Inserindo tags metas -->
  <!-- Descição não ultrapassar 160 caracteres -->
  <meta name="description" content="Encontre seu emprego aqui de forma totalmente gratuita">
  <!-- Palavras chaves Quanto menos palavras chaves melhor)-->
  <meta name="keywords" content="Emprego, Trabalho">

  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <!-- Cabeçalho/topo -->
  <header>
    <div class="limitador">
      <h1>
        <a href="index.php">Start<br><span>Jobs</span></a>
      </h1>
      <nav>
        <h2><a href="" class="icone">Menu &equiv; </a></h2>
        <ul class="menu ">
          <!-- utilizar title para descrever o link acessibilidade e SO -->
          <li><a href="index.php" title="página inicial">Home</a></li>
          <li><a href="cursos.php" title="Cursos">Cursos</a></li>
          <li><a href="sobre.php" title="Sobre nós">Sobre</a></li>
          <li><a href="contato.php" title="fale com a equipe do start jobs">Contatos</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <!-- Conteúdo -->
  <main>


    <!-- Esse campo devera ser editado com as informações do banco de dados de forma dinâmica -->
    <article>
      <h2>Vagas</h2>

      <h3>Nome da Empresa</h3>
      <ul>
        <li>Nome: Programador Jr</li>
        <li>Descrição: Irá trabalhar com php, js e html, desejavel conhecimento em mysql</li>
        <li>Local: Rua 25 de Março, numero 123, SP</li>
        <li>Salário: R$ 3.000,00</li>
        <li>Sobre a Empresa: Aempresa X é uma mutilnacional ........</li>
        <li>Categotia: TI</li>
        <li>Beneficios: VR, VT, VA, Convenio......</li>
      </ul>


    </article>

  </main>

  <!-- rodapé/parte inferior -->
  <?php
  require "footer.html"
  ?>

  <!-- Exemplos adicionais -->
  <!-- 
  <p>Conhecimento em HTML
  <progress value="60" max="100"></progress> 
</p>

<details>
  <summary>Veja Mais</summary>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta, ut. Reiciendis sed quibusdam laudantium a obcaecati, illum, officia, nobis soluta dignissimos atque iure quos suscipit nesciunt ut corrupti sit. Molestias!</p>
</details>
 -->

  <script src="js/menu.js"></script>
</body>

</html>
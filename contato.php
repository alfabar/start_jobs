<?php include 'includes/header.php'; ?>
  <!-- Cabeçalho/topo -->
<!--   <header>
    <div class="limitador">
      <h1>
        <a href="index.php">Start<br><span>Jobs</span></a>
      </h1>
      <nav>
        <h2><a href="" class="icone">Menu &equiv; </a></h2>
        <ul class="menu ">
          <li><a href="index.php" title="página inicial">Home</a></li>
          <li><a href="cursos.php" title="Cursos">Cursos</a></li>
          <li><a href="sobre.php" title="Sobre nós">Sobre</a></li>
          <li><a href="contato.php" title="fale com a equipe do start jobs">Contatos</a></li>
        </ul>
      </nav>
    </div>
  </header> -->
  <!-- Conteúdo -->
  <!-- <main>
    <article class="limitador conteudo">
      <h2>Contato</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum quae odit beatae ratione rerum nisi, nostrum voluptatem ex expedita quas vel molestias ipsum, minima maiores necessitatibus? Aliquam dolore deleniti sapiente! Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut vel, harum sequi veniam officiis praesentium molestias illum ullam vero facilis possimus explicabo aliquam repellendus hic nam sint fugit dolores beatae!</p>

      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit cum modi animi, deleniti harum exercitationem qui nesciunt veniam officia est, laborum dolor molestias sunt mollitia maiores blanditiis assumenda molestiae ullam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Non odio vero nostrum aspernatur corporis mollitia maiores distinctio delectus in itaque exercitationem modi nisi quas architecto, magni sunt temporibus, numquam nesciunt?</p> -->

      <!-- Iniciando o formulario -->
      <!-- Metodo post n'ao mostra o dados na url mais seguro que get -->

      <!-- Encaminha para o email 
      
      Referencia:

      Criar uma conta
    https://formspree.io/  
    

    https://formspree.io/forms/xgerdnwo/integration
    --><div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Entre em contato</h1>
    <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
  </div>
</div>
    <form>
    <div class="form-group">
    <label for="nome">Nome</label>
    <input type="text" class="form-control" id="nome" placeholder="Nome Completo">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Senha:</label>
      <input type="password" class="form-control" id="senha">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Endereço:</label>
    <input type="text" class="form-control" id="endereco" placeholder="Rua Ipiranga 123">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Complemento</label>
    <input type="text" class="form-control" id="complemento" placeholder="Apartamento, Casa, Salão frente">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Cidade</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Estado</label>
      <select id="inputState" class="form-control">
        <option selected>escolha</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Cep:</label>
      <input type="text" class="form-control" id="cep">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Aceito enviar cadastro
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>

      <form action="https://formspree.io/f/xgerdnwo" method="POST" id="my-form">
        <div class="form-group">
        <label for="nome">Nome Completo</label>
          <input type="text" name="nome" id="nome" placeholder="Nome Completo" required> <!-- required não deixa enviar -->
        </div>
        <div class="form-group">
          <label for="email">E-mail:</label>
          <input type="email" name="email" id="email" required>
        </div>
        <div class="form-group">
          <label for="data">Data de Nascimento:</label>
          <input type="date" name="data" id="data">
        </div>
        <div class="form-group">
          <label for="telefone">Telefone:</label>
          <input type="tel" name="telefone" id="telefone" placeholder="Digite apenas numeros, incluindo o DDD">
        </div>

        <!-- <div>
          <label for="celular">Celular:</label>
          <input type="celular" name="celular" id="celular" placeholder="Digite apenas numeros, incluindo o DDD">
        </div> -->

        <div class="form-group">
          <label for="doc">CPF ou CNPJ:</label>
          <input type="doc" name="doc" id="doc">
        </div>

        <div class="form-group">
          <label for="idade">Idade:</label>
          <input type="number" name="idade" id="idade" min="18" max="120">
        </div>
        <div class="form-group">          <p>Gênero:</p>
          <input type="radio" name="genero" id="masculino" value="masculino">
          <label for="masculino">Masculino</label>

          <input type="radio" name="genero" id="feminino" value="feminino">
          <label for="feminino">Feminino</label>

          <input type="radio" name="genero" id="outros" value="outros">
          <label for="outros">Outros</label>
        </div>
        <div class="form-group">          <p>Interesses:</p>
          <input type="checkbox" name="interesses" id="design" value="design">
          <label for="design">Design</label>

          <input type="checkbox" name="interesses" id="marketing" value="marketing">
          <label for="marketing">Marketing</label>

          <input type="checkbox" name="interesses" id="programacao" value="programacao">
          <label for="programacao">Programação</label>
        </div>

        <div class="form-group">
          <label for="cep">CEP:</label>
          <input type="text" id="cep" name="cep" maxlength="9" required>
          <b id="status"></b>
        </div>
        <div class="form-group">
          <label for="endereco">Endereço:</label>
          <input type="text" name="endereco" id="endereco" size="30">
        </div>
        <div class="form-group"> 
          <label for="bairro">Bairro:</label>
          <input type="text" name="bairro" id="bairro">
        </div>
        <div class="form-group">          <label for="cidade">Cidade:</label>
          <input type="text" name="cidade" id="cidade">
        </div>

        <div class="form-group">          <label for="estado">Estado:</label>
          <input type="text" name="estado" id="estado">
        </div>

        <div class="form-group">          <label for="assunto">Assunto:</label>
          <select name="assunto" id="assunto">
            <option>Escolha uma opção</option>
            <option>Dúvidas</option>
            <option>Elogios</option>
            <option>Reclamações</option>
            <option>Outros</option>
          </select>
        </div>

        <div class="form-group">          <label for="mensagem">Mensagem:
            <span id="maximo">(Restam <b id="caracteres">100</b> caracteres)</span>
          </label> <br>
          <textarea name="mensagem" id="mensagem" cols="20" rows="5" maxlength="100"></textarea>
        </div>
        <button type="submit" id="my-form-button">Enviar dados</button>
        <p id="my-form-status"></p>
      </form>

  <!--   </article>
  </main>
 -->
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
  <!-- Linkando para o vanilla masker (Formatar o formulario telefone) -->
  <script src="js/vanilla-masker.min.js"></script>

  <script>
    /* VMasker(document.querySelector("#telefone")).maskPattern("(99) 9999-9999"); */
    /* VMasker(document.querySelector("#celular")).maskPattern("(99) 99999-9999");
     */
    /* VMasker(document.querySelector("#cpf")).maskPattern("999.999.999-99"); */

    /* -------------VALIDAR O CAMPO DE CEP------------- */

    /* REFERENCIAS : 
    https://tecnoblog.net/495240/dev-full-stack-e-o-cargo-de-ti-mais-procurado-por-empresas-diz-pesquisa/amp/ 
    
    
    http://vanilla-masker.github.io/vanilla-masker/

    */
    VMasker(document.querySelector("#cep")).maskPattern("99999-999");

    /* FORMATANDO CEP: */
    /* Referencias:
    https://viacep.com.br/
    https://viacep.com.br/exemplo/jquery/ */



    /* FUNÇÃO PARA FORMATAR TELEFONE e CPF/CNPJ DINAMICAMENTE */
    function inputHandler(masks, max, event) {
      var c = event.target;
      var v = c.value.replace(/\D/g, '');
      var m = c.value.length > max ? 1 : 0;
      VMasker(c).unMask();
      VMasker(c).maskPattern(masks[m]);
      c.value = VMasker.toPattern(v, masks[m]);
    }

    var telMask = ['(99) 9999-99999', '(99) 99999-9999'];
    var tel = document.querySelector('#telefone');
    VMasker(tel).maskPattern(telMask[0]);
    tel.addEventListener('input', inputHandler.bind(undefined, telMask, 14), false);

    var docMask = ['999.999.999-999', '99.999.999/9999-99'];
    var doc = document.querySelector('#doc');
    VMasker(doc).maskPattern(docMask[0]);
    doc.addEventListener('input', inputHandler.bind(undefined, docMask, 14), false);
  </script>


  <!-- Referenciando biblioteca jquery 3.6 -->

  <!-- Usando o sites: 
https://viacep.com.br/
https://viacep.com.br/exemplo/jquery/ -->

  <!-- Sempre que carregar um plugin que usa jquery deve primeiro carregar a biblioteca do contrario o plugin nao funcionara. -->

  <script src="plugins/jquery-3.6.0.min.js"></script>

  <script>
    $(document).ready(function() {

      function limpa_formulário_cep() {
        // Limpa valores do formulário de cep.
        $("#endereco").val("");
        $("#bairro").val("");
        $("#cidade").val("");
        $("#estado").val("");
      }

      //Quando o campo cep perde o foco.
      $("#cep").blur(function() {

        //Nova variável "cep" somente com dígitos.
        var cep = $(this).val().replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

          //Expressão regular para validar o CEP.
          var validacep = /^[0-9]{8}$/;

          //Valida o formato do CEP.
          if (validacep.test(cep)) {

            //Preenche os campos com "..." enquanto consulta webservice.
            $("#endereco").val("...");
            $("#bairro").val("...");
            $("#cidade").val("...");
            $("#estado").val("...");
            $("#status").text("").css('color', 'black');


            //Consulta o webservice viacep.com.br/
            $.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?", function(dados) {

              if (!("erro" in dados)) {
                //Atualiza os campos com os valores da consulta.
                $("#endereco").val(dados.logradouro);
                $("#bairro").val(dados.bairro);
                $("#cidade").val(dados.localidade);
                $("#estado").val(dados.uf);
                $("#status").text("CEP encontrado!").css('color', 'black');
              } //end if.
              else {
                //CEP pesquisado não foi encontrado.
                limpa_formulário_cep();
                $("#status").text("CEP não encontrado.").css('color', 'red');
              }
            });
          } //end if.
          else {
            //cep é inválido.
            limpa_formulário_cep();
            $("#status").text("Formato de CEP inválido.");
          }
        } //end if.
        else {
          //cep sem valor, limpa formulário.
          limpa_formulário_cep();
        }
      });
    });
  </script>


  <!-- CONTADOR DE CARACTERES DO CAMPO DE MENSAGEM DO FORMULARIO -->
  <script>
    // Selecionando os elementos que seram utilizados
    const spanMaximo = $("#maximo");
    const bCaracteres = $("#caracteres");
    const textMensagem = $("#mensagem");


    // Determinando a quantidade de caracteres
    let quantidade = 100;

    //Ouvinte de evento
    textMensagem.on("input", function() {
      //capturando o que for digitado
      let conteudo = textMensagem.val();

      //criando a contagem regressiva
      let contagem = quantidade - conteudo.length;


      // Exibindo o número no HTML

      bCaracteres.text(contagem);


      if (contagem == 0) {
        spanMaximo.css('color', 'red');
        spanMaximo.text("limite de caracteres atingido");

      } else {
        spanMaximo.css('color', 'black');
        spanMaximo.html("(Restam <b>" + contagem + " </b> Caracteres)");

        /* spanMaximo.html("(restam <b id='caracteres'>" + contagem + "</b> caracteres)"); */

      }


    })
  </script>
  <!-- SCRIPT DO FORMSPREE - ENVIO DO FORMULARIO -->
  <script>
    var form = document.getElementById("my-form");

    async function handleSubmit(event) {
      event.preventDefault();
      var status = document.getElementById("my-form-status");
      var data = new FormData(event.target);
      fetch(event.target.action, {
        method: form.method,
        body: data,
        headers: {
          'Accept': 'application/json'
        }
      }).then(response => {
        status.innerHTML = "Mensagem enviada com sucesso!";
        form.reset()
      }).catch(error => {
        status.innerHTML = "Oops! Encontramos um problema, revise as informações e envie novamente."
      });
    }
    form.addEventListener("submit", handleSubmit)
  </script>
<?php include 'includes/rodape.php'; ?>
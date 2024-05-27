<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <!-- Fonts -->

  

  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/components/navbar/">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <!-- Bootstrap core CSS -->
  <link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="/docs/5.0/assets/css/docs.css" rel="stylesheet">

  <link rel="icon" href="{{ asset('assets/c.png') }}" type="image/x-icon">

  <style>
    /* Links */
    a,
    a:focus,
    a:hover {
      color: #fff;
    }

    /* Botão padrão customizado */
    .btn-secondary,
    .btn-secondary:hover,
    .btn-secondary:focus {
      color: #333;
      text-shadow: none;
      /* Previne herença do `body` */
      background-color: #fff;
      border: .05rem solid #fff;
    }


    html,
    body {
      background-color: #000;
    }

    body {
      display: -ms-flexbox;
      display: flex;
      color: #fff;
      text-shadow: 0 .05rem .1rem rgba(0, 0, 0, .5);
      box-shadow: inset 0 0 5rem rgba(0, 0, 0, .5);
    }

    .logo {
    height: 120px; 
    width: auto;
  }

    .cover-container {
      max-width: 60em;
    }

    .masthead {
      margin-bottom: 2rem;
    }

    .masthead-brand {
      margin-bottom: 0;
    }

    .nav-masthead .nav-link {
      padding: .25rem 0;
      font-weight: 700;
      color: rgba(255, 255, 255, .5);
      background-color: transparent;
      border-bottom: .25rem solid transparent;
    }

    .nav-masthead .nav-link:hover,
    .nav-masthead .nav-link:focus {
      border-bottom-color: rgba(255, 255, 255, .25);
    }

    .nav-masthead .nav-link+.nav-link {
      margin-left: 1rem;
    }

    .nav-masthead .active {
      color: #fff;
      border-bottom-color: #fff;
    }

    @media (min-width: 48em) {
      .masthead-brand {
        float: left;
      }

      .nav-masthead {
        float: right;
      }
    }


    /*
 * Capa
 */
    .cover {
      padding: 0 1.5rem;
      margin-top: 10rem;
    }

    .cover .btn-lg {
      padding: .75rem 1.25rem;
      font-weight: 700;
    }


    /*
 * Footer
 */
    .mastfoot {
      color: rgba(255, 255, 255, .5);
    }

    /* CUSTOMIZA O CAROUSEL
-------------------------------------------------- */

    /* Classe base do carousel */
    .carousel {
      margin-bottom: 4rem;
    }

    /* Já que usamos posicionamento de imagens, precisaremos fazer alguns ajustes na legenda */
    .carousel-caption {
      bottom: 3rem;
      z-index: 10;
    }

    /* Declaramos alturas, devido ao posicionamento do elemento img */
    .carousel-item {
      height: 32rem;
      background-color: #777;
    }

    .carousel-item>img {
      position: absolute;
      top: 0;
      left: 0;
      min-width: 100%;
      height: 32rem;
    }


    /* CONTEÚDO DO MARKETING
-------------------------------------------------- */

    /* Alinha, centralmente, o texto dentro das três colunas abaixo do carousel */
    .marketing .col-lg-4 {
      margin-bottom: 1.5rem;
      text-align: center;
    }

    .marketing h2 {
      font-weight: 400;
    }

    .marketing .col-lg-4 p {
      margin-right: .75rem;
      margin-left: .75rem;
    }


    /* Featrurezinhas
------------------------- */

    .featurette-divider {
      margin: 5rem 0;
      border: none;
    }

    /* Afina os cabeçalhos de marketing */
    .featurette-heading {
      font-weight: 300;
      line-height: 1;
      letter-spacing: -.05rem;
    }


    /* CSS RESPONSIVE
-------------------------------------------------- */

    @media (min-width: 40em) {

      /* Aumenta o tamanho do conteúdo do carousel */
      .carousel-caption p {
        margin-bottom: 1.25rem;
        font-size: 1.25rem;
        line-height: 1.4;
      }

      .featurette-heading {
        font-size: 50px;
      }
    }

    @media (min-width: 62em) {
      .featurette-heading {
        margin-top: 7rem;
      }
    }

    .blog-footer {
      padding: 2.5rem 0;
      color: #999;
      text-align: center;
      background-color: #f9f9f9;
      border-top: .05rem solid #e5e5e5;
    }

    .blog-footer p:last-child {
      margin-bottom: 0;
    }

    .footer-conta {
      margin-top: 4rem;
    }
    .inner {
      margin-bottom: -4rem;
    }
  </style>

</head>

<body>
  <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <header class="masthead mb-auto">
      <div class="inner d-flex align-items-center justify-content-between">
        <img class="logo" src="{{ asset('assets/NBALogo.png')}}" alt="NBA Logo">
        <nav class="nav nav-masthead justify-content-center">
          <a class="p-2 text-light nav-link active" href="{{route('site.principal')}}">Principal</a>
          <a class="p-2 text-light nav-link" href="{{route('site.somos')}}">Quem Somos</a>
          <a class="p-2 text-light nav-link" href="{{route('site.contato')}}">Contato</a>
        </nav>
      </div>
    </header>

    <main role="main" class="inner cover">
      <h1 class="cover-heading">Os Maiores Jogadores da NBA</h1>
      <p class="lead">Os Maiores Jogadores da NBA: Lendas que Marcaram o Basquete</p>
      <p class="lead">
        <a href="https://www.espn.com.br/blogs/nbanaespn/576850_espn-faz-lista-com-os-100-maiores-jogadores-da-historia-opine-discorde-e-divirta-se" class="btn btn-lg btn-secondary">Saiba mais</a>
      </p>
    </main>

    <main role="main">

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-6">
          <h3 class="featurette-heading text-muted">LeBron James</h3>
          <p class="lead">LeBron James, um dos maiores jogadores de basquete de todos os tempos, nasceu em 30 de dezembro de 1984, em Akron, Ohio. Com uma carreira repleta de conquistas, LeBron ganhou quatro títulos da NBA (2012, 2013, 2016, 2020) com o Miami Heat, Cleveland Cavaliers e Los Angeles Lakers. Ele foi nomeado MVP das Finais em todas essas vitórias e venceu quatro prêmios de MVP da temporada regular.</p>
        </div>
        <div class="col-md-6">
          <img class="featurette-image img-fluid mx-auto" style="border-radius: 2.6rem;" src={{ asset('assets/bg-1.jpg') }}>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-6 order-md-2">
          <h3 class="featurette-heading text-muted">Michael Jordan</h3>
          <p class="lead">Michael Jordan, considerado o maior jogador de basquete de todos os tempos, nasceu em 17 de fevereiro de 1963, em Brooklyn, Nova York. Com o Chicago Bulls, Jordan conquistou seis títulos da NBA (1991-1993, 1996-1998) e foi MVP das Finais em todas essas vitórias. Ele ganhou cinco prêmios de MVP da temporada regular e foi 14 vezes selecionado para o All-Star Game.</p>
        </div>
        <div class="col-md-6">
          <img class="featurette-image img-fluid mx-auto" style="border-radius: 2.6rem;" src={{ asset('assets/bg-2.png') }}>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-6">
          <h3 class="featurette-heading text-muted">Oscar Schmidt</h3>
          <p class="lead">Oscar Schmidt, um dos maiores nomes do basquete brasileiro, nasceu em 16 de fevereiro de 1958, em Natal, Rio Grande do Norte. Conhecido como "Mão Santa" devido à sua precisão nos arremessos, ele teve uma carreira brilhante tanto no Brasil quanto no exterior. Oscar é o maior pontuador da história do basquete, com mais de 49 mil pontos marcados ao longo de sua trajetória.</p>
        </div>
        <div class="col-md-6">
          <img class="featurette-image img-fluid mx-auto" style="border-radius: 2.6rem;" src={{ asset('assets/bg-3.png') }}>
        </div>
      </div>
    </main>
    <footer class="container footer-conta">
      <p class="float-right"><a href="#">Voltar ao topo</a></p>
      <p>&copy; Henrique 3°DS Manhã, 2024. Todos os direitos reservados. &middot; <a href="https://github.com/henrique151">Privacidade</a> &middot; <a href="https://github.com/henrique151">Termos</a></p>
    </footer>
  </div>



  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>


</html>
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
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
    .featurette {
      margin-top: 5rem;
    }
    .team-member {
      margin-bottom: 30px;
    }
    .container-fluid {
      margin-top: 5rem;
    }
  </style>

</head>

<body>
<body>
  <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <header class="masthead mb-auto">
      <div class="inner d-flex align-items-center justify-content-between">
        <img class="logo" src="{{ asset('assets/NBALogo.png')}}" alt="NBA Logo">
        <nav class="nav nav-masthead justify-content-center">
          <a class="p-2 text-light nav-link" href="{{route('site.principal')}}">Principal</a>
          <a class="p-2 text-light nav-link" href="{{route('site.somos')}}">Quem Somos</a>
          <a class="p-2 text-light nav-link active" href="{{route('site.contato')}}">Contato</a>
        </nav>
      </div>
   </header>
  <div class="container mt-5">
    <h1>Formulário de Contato</h1>
    <form method="POST" action="{{ route('contato.enviar') }}">
      @csrf
      <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" class="form-control">
      </div>
      <div class="form-group">
        <label for="telefone">Telefone:</label>
        <input type="text" name="telefone" id="telefone" class="form-control">
      </div>
      <div class="form-group">
        <label for="endereco">Endereço:</label>
        <input type="text" name="endereco" id="endereco" class="form-control">
      </div>
      <div class="form-group">
        <label for="sexo">Sexo:</label>
        <select name="sexo" id="sexo" class="form-control">
          <option value="masculino">Masculino</option>
          <option value="feminino">Feminino</option>
        </select>
      </div>
      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
   
    </div>
    
  </div>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
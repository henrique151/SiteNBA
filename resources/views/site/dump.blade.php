<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <!-- Adicione o link para o Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="icon" href="{{ asset('assets/c.png') }}" type="image/x-icon">
  <style>
    body {
      background-color: #000;
      color: #fff;
    }

    .btn-voltar {
      margin-top: 20px;
    }

    /* Alteração da cor da fonte para branco */
    table.table-bordered,
    .table.table-bordered th,
    .table.table-bordered td {
      color: #fff;
    }
    .thead-blue  {
        background: #1d299a;
        border: none;
    }
  </style>
</head>

<body>
  <div class="container mt-5">
    <h2 class="text-center mb-4">Dados Recebidos</h2>
    <div class="table-responsive">
      <table class="table table-bordered">
        <thead class="thead-blue">
          <tr>
            <th scope="col">Chave</th>
            <th scope="col">Valor</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($_POST as $key => $value)
          <tr>
            <td>{{ $key }}</td>
            <td>{{ $value }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <a href="{{route('site.contato')}}" class="btn btn-secondary btn-voltar thead-blue ">Voltar</a>
  </div>

  <!-- Adicione os scripts do Bootstrap e jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>

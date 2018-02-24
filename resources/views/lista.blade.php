<!DOCTYPE html>
<html>
<head>
    <title>BiBoN</title>
 
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
 
</head>
<body>
 
<div class="container">
 
    <h1>Lista de perguntas</h1>
 
    <hr />
 
    <table class="table table-striped">
      <thead>
        <tr>
          <th>#</th>
          <th>Assunto</th>
          <th>Nome</th>
        </tr>
      </thead>
      <tbody>
        @foreach($perguntas as $row)
        <tr>
          <th scope="row">{{ $row->codigo }}</th>
          <td>{{ $row->assunto }}</td>
          <td>{{ $row->nome }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
 
</div>
 
</body>
</html>
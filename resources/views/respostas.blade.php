<!DOCTYPE html>
<html>
<head>
    <title>BiBoN</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

</head>
<body>

<div class="container">

    <h1></h1>

    <hr />

    <form action="/enviarResposta" method="POST">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">

      <div class="form-group">
        <label for="Nome">Nome</label>
        <input type="text" id="nome" name="nome" class="form-control" placeholder="Nome">
      </div>

      <div class="form-group">
        <label for="email">E-Mail</label>
        <input type="text" id="email" name="email" class="form-control" placeholder="E-Mail">
      </div>
      
       <div class="form-group">
        <label for="descricao">Descrição</label>
        <textarea type="text" id="descricao" name="descricao" class="form-control" placeholder="Descrição"></textarea>
      </div>
      
       <div class="form-group">
        <label for="codigo_fonte">Código Fonte</label>
        <textarea type="text" id="codigo_fonte" name="codigo_fonte" class="form-control" placeholder="Código Fonte"></textarea>
      </div>
      
   
      
      <button type="submit" class="btn btn-default">Enviar</button>

    </form>

</div>

</body>
</html>
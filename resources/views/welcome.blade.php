<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gerador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container text-center mt-5">
        <div class="col-md-8 mt-5">
    <form class="form" action="{{ route('geradorqr') }}" method="post">
        @csrf
        <label class="mb-3"></label>
        <input placeholder="Digite o texto para gerar um qrcode" class="form-control mb-3" type="text" name="txt" required>
        <button class="btn col-12 btn-primary" type="submit">ENVIAR</button>
    </form>
</div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Almacen</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body style="background-image: url('{{ asset('img/shutterstock1.jpg') }}')">

    <main class="container-fluid">
        <div class="btn-group d-flex justify-content-center m-1" role="group" aria-label="Basic mixed styles example">
            <a class="btn btn-warning ms-2" href="{{ route('products.upto20') }}">Up To 20</a>
            <a class="btn btn-secondary" href="{{ route('products.likeaceite') }}">Like "Aceite"</a>
            <a class="btn btn-danger" href="{{ route('products.cheepandactive') }}">Cheep AND Active</a>
            <a class="btn btn-info" href="{{ route('products.voidproducts') }}">Void Products</a>
            <a class="btn btn-success" href="{{ route('products.all') }}">Products</a>
            <a class="btn btn-info" href="{{ route('products.actives') }}">Actives</a>
            <a class="btn btn-success" href="{{ route('products.between10and20') }}">Between 10 And 20</a>
            <a class="btn btn-danger" href="{{ route('products.olderthan') }}">Older Than</a>
            <a class="btn btn-warning" href="{{ route('products.updatedproducts') }}">Updated Products</a>
        </div>
    </main>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>

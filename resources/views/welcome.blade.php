<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">one <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/two">two</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <section class="container">
        <form action="/articlepost" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Auteur</label>
                <input type="text" name="auteur" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Titre</label>
                <input type="text" name="titre" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="form-group mb-3">
                <label for="exampleFormControlTextarea1">entrez du texte</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="text" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </section>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="navbar-nav">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                        <a class="nav-linkactive" aria-current="page_1"
                            href="{{ route('page_1') }}">{{ 'page_1' }}</a>
                        <a class="nav-link" href="{{ route('page_2') }}">{{ 'page_2' }}</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
</body>

</html>

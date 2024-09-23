<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>
                    <a href="{{ route('page_1') }}">
                        {{ $title }}
                    </a>
                </h1>
                <p>
                    <a href="{{ route('home') }}">
                        {{ $home }}
                    </a>
                </p>
            </div>
        </div>
    </div>
</body>

</html>

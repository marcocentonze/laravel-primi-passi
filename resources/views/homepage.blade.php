<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    

<h1>{{$greetings}}</h1>
    <nav class="navbar navbar-expand-sm navbar-light bg-primary">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarID"
                aria-controls="navbarID" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarID">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Homepage</a>
                    <a class="nav-link active" aria-current="page" href="{{ url('/Products') }}">Products</a>
                    <a class="nav-link active" aria-current="page" href="{{ url('/Contacts') }}">Contacts</a>
                    <a class="nav-link active" aria-current="page" href="{{ url('/About-us') }}">About us</a>
                    
                </div>
            </div>
        </div>
    </nav>

</body>
</html>
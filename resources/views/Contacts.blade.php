<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<body>
    
<header class="bg-dark text-white text-center py-4">
        <h1>Contatti</h1>
    </header>


    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6">
                <h2>Informazioni di Contatto</h2>
                <address>
                    <strong>Nome Azienda</strong><br>
                    Via dell'Indirizzo, 12345<br>
                    Città, CAP 12345<br>
                    Telefono: +123 456 789<br>
                    Email: boolean@gmail.com
                </address>
            </div>
            <div class="col-md-6">
                <h2>Modulo di Contatto</h2>
                <form>
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" placeholder="Inserisci il tuo nome">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Inserisci la tua email">
                    </div>
                    <div class="form-group">
                        <label for="messaggio">Messaggio</label>
                        <textarea class="form-control" id="messaggio" rows="4" placeholder="Inserisci il tuo messaggio"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Invia Messaggio</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
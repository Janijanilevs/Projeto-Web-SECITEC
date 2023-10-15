<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="../../estilo.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Irish Grover' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Gothic&display=swap" rel="stylesheet">

    <style type="text/css">
        body{
            background-color: black;
        }
        header{
            display: flex;
            justify-content: center;
        }
        header h1{
            font-family: 'Irish Grover';
            font-size: 50px;
            color: white;
            margin-top: 50px;
            margin-bottom: 50px;
        }
        header b{
            color: #F0C82F;
        }
        label{
            font-family: 'League Gothic';
            color: white;
        }
    </style>
    <title>Visitas - 2º Vespertino</title>
</head>
<body>
    <header>
        <h1> REGISTRE <b>SUA VISITA</b> EM NOSSA SALA </h1>
    </header>
    <main>
        <form method="post" action="salvar">
            <label>
                NOME:
                <input type="text" name="nome">
            </label>
            <button>Confirmar Visita</button>
        </form>
    </main>
</body>
</html>
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
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }
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
    header b, h3 b{
        color: #F0C82F;
    }
    label{
        font-family: 'League Gothic';
        color: white;
        font-size: 40px;
        
    }
    form input{
        background-color: black;
        padding: 20px;
        width: 65%;
        height: 10px;
        border: yellow 1px solid;
        border-radius: 10px;
        outline: unset;
        margin-bottom: 10px;
    }
    form label{
        display: flex;
    }
    form button{
        font-family: 'Irish Grover';
        background-color: #F0C82F;
        color:black;
        border-radius: 15px;
        border: black solid 2px;
        font-size: 1.1rem;
        width: 9rem;
        height: 40px;
        margin: 15px auto;
    }
    footer{
        background-color: white;
    }
    footer h3, footer h2{
        font-family: 'League Gothic'
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
    <footer>
        <h2> ACESSE O LIVRO DE VISITAS</h2>
        <h3> <b>DOSCENTE:</b> THIAGO MIRANDA</h3>
    </footer>
</body>
</html>
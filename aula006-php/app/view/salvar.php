<!DOCTYPE html>
        <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">

            <link href="estilo3.css" rel="stylesheet">


            <link href='https://fonts.googleapis.com/css?family=Irish Grover' rel='stylesheet'>
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=League+Gothic&display=swap" rel="stylesheet">

            
            <title><?=$titulo?></title>
        </head>
        <body>
            <div id="pagina">
                <header>
                    <?php if($msg == 1){ ?>
                        <h1> <b>SUA VISITA</b> Foi concluida com sucesso!</h1>
                    <?php } else if($msg == 0){ ?>
                        <h1> <b> Houve um erro </b> ao cadastrar sua visita! Tente novamente</h1>
                    <?php } else{?>
                        <h1> <b> Dados Inválidos!</b> Precisa ser maior de 3 caracteres!</h1> 
                    <?php } ?>
                </header>
                <div class="danger">
                    <img src="imagens/danger 2.png" >
                    <img src="imagens/danger 2.png" >
                    <img src="imagens/danger 2.png" >
                    <img src="imagens/danger 2.png" >
                    <img src="imagens/danger 2.png" >
                    <img src="imagens/danger 2.png" >
                    <img src="imagens/danger 2.png" >
                    <img src="imagens/danger 2.png" >
                    <img src="imagens/danger 2.png" >
                    <img src="imagens/danger 2.png" >
                    <img src="imagens/danger 2.png" >
                    <img src="imagens/danger 2.png" >
                </div>
                <main>
                        <div class="link2">
                            <a href="mostra"><img src=""><h2 class="info-roda">ACESSE O <b>LIVRO</b> DE VISITAS</h2></a>
                            <a href="index.php"> <h2 class="info-roda2"> VOLTAR PARA A <b>PÁGINA INICIAL</b></h2></a>
                        </div>
                </main>
                <footer>
                    <div class="roda-1">
                        <img src="imagens/f1.jpeg">
                        <div>
                            <div class="link">
                                <img src="imagens/livro.jpeg">
                                <a href="mostra"><img src=""><h2 class="info-roda">ACESSE O <b>LIVRO</b> DE VISITAS</h2></a>
                            </div>
                            <h3 class="info-roda"> <b>DOSCENTE:</b> THIAGO MIRANDA</h3>
                        </div> 
                    </div>
                    <div class="roda-2">
                        <h3 class="info-roda"> 2° Ano <b>Vesp</b> INF</h3>
                        <img src="imagens/faixa-removebg.png">
                    </div> 
                </footer>
            </div>
        </body>
        </html>
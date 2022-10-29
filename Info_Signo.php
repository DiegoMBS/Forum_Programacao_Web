<html>


    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Qual é seu signo</title>

    </head>
    <style>
    .form1 {
        height: 600px;
        width: 360px;
        margin: 100px auto;
        background: rgba(255, 255, 255, 0.192);
        box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
        backdrop-filter: blur(13.5px);
        -webkit-backdrop-filter: blur(13.5px);
        border-radius: 10px;
        border: 1px solid rgba(255, 255, 255, 0.18);

    }

    .h1 {
        font-size: 35px;
        font-style: oblique;
        font-family: sans-serif;
    }

    .h3 {
        font-size: 20px;
        font-style: oblique;
        font-family: sans-serif;
    }

    .p1{
        font-size: 18px;
        font-style: oblique;
        font-family: serif;; 

    }

    .card1 {
        padding: 50px;
        text-align: center;

    }

    .btnVoltar {
        padding: 20px;
        text-align: center;
        margin: 20px 15px;
        width: 330px;
        font-size: 20px;
        font-style: oblique;
        font-family: sans-serif;
        border-radius: 10px;
        color: rgb(10, 10, 10);
        transition: all 0.5s;
        position:absolute;
        top: 480px;
        cursor: pointer;
        
    }

    .btnVoltar::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 1;
        background-color: rgba(94, 92, 90, 0.596);
        transition: all 0.3s;
        border-radius: 10px;
        

    }

    .btnVoltar:hover::before {
        opacity: 0;
        transform: scale(0.5, 0.5);

    }

    .btnVoltar::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 1;
        opacity: 0;
        transition: all 0.3s;
        border: 1px solid rgba(255, 255, 255, 0.082);
        transform: scale(1.2, 1.2);
        border-radius: 10px;
    }

    .btnVoltar:hover::after {
        opacity: 1;
        transform: scale(1, 1);
    }

</style>

<body background="Signos-0752-749316-1-zoom.jpg">
        <div id="conteiner">
            <form class="form1" action="index.html" method="post">
                <div class="card1">
                <?php 

                    $data = $_POST['dataNascimento'];
                    $date = new DateTime($data);
                    $dateSig = $date->format('m-d');

                    $xml = simplexml_load_file('signos.xml');
                    echo '<h1 class = "h1">'. 'Qual é seu signo'. '</h1><br>';

                    foreach ($xml->signo as $registro) :
                        if($dateSig >= $registro->dataInicio and $dateSig <= $registro->dataFim){
                            echo '<h3 class = "h3">'.$registro->signoNome . '</h3>';
                            echo '<p class = "p1">'. $registro->descricao . '</p><br>';
                        }               
                    endforeach
                ?>
                </div>
                <button type="submit" class="btnVoltar">Voltar</button> 
            </form>
        </div>
    </body>
</html>
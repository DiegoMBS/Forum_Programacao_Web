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
        box-shadow: 5px 5px 5px rgb(209, 207, 207);
        background: rgb(240, 239, 239);

    }

    .card1 {
        padding: 50px;
        text-align: center;

    }

    .datanasc {
        padding: 05px;
        text-align: center;
        margin: 15px 15px;
        width: 200px;

    }

    .btnVoltar {
        padding: 20px;
        text-align: center;
        margin: 20px 15px;
        width: 330px;
        border-radius: 0%;
        font-size: 15px;
        font-style: oblique;
        font-family: 'Arial';

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
                    echo '<h1>'. 'Qual é seu signo'. '</h1><br>';

                    foreach ($xml->signo as $registro) :
                        if($dateSig >= $registro->dataInicio and $dateSig <= $registro->dataFim){
                            echo '<h3>'.$registro->signoNome . '</h3>';
                            echo '<p>'. $registro->descricao . '</p><br>';
                        }               
                    endforeach
                ?>
                </div>
                <button type="submit" class="btnVoltar">Voltar</button> 
            </form>
        </div>
    </body>
</html>
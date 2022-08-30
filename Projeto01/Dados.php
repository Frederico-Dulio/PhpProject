<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BI</title>
    <style>
        .saida{
            color: #2b2a33;
            margin: 158px;
            width: 163px;
            margin-top: -10em;
        }

        .cartao {
            border: #2b2a33 1px solid;
            border-radius: 20px ;
            padding: 10em;
            margin: 10px auto;
            height: 30px;
            width: 30em;
            font-style: oblique;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }
        .dados{
            padding: 10px;
            margin: -150px;
            width: 545px;
        }
        .foto{
            border: 1px solid #2b2a33;
            float: right;
            width: 77px;
            padding: 20px;
            margin: -38px;
            margin-right: -38px;
            height: 79px;
            margin-right: -119px;
        }

        .assinatura{
            float: right;
            width: 190px;
            margin: 87px;
            margin-right: 87px;
            margin-right: -152px;
            
        }

        .diretor{
            width: 190px;
            margin: 173px;
            margin-left: -91px;
            margin-top: 150px;          
        }

        .a{
            font-style: oblique;
            font-family:cursive;
        }
        .digital{

            border: 1px solid #2b2a33;
            border-radius: 60px;
            float: right;
            width: 77px;
            padding: 20px;
            margin: -147px;
            margin-right: -38px;
            height: 79px;
            margin-right: -119px;

        }

    </style>
</head>
<body>

        <div class="cartao">
            <div class="saida" align="center">
                <strong>
                    <p>República de Angola</p> 
                    <p>Bilhete de identidade</p>
                    <p>de cidadão nacional</p>
                </strong>
        </div>

        <div class="dados">
            <strong>Nome Completo</strong>: <br><?php echo $_POST['nome']; ?><br><br>
            <strong>Filiação</strong>: <br> <?php echo $_POST['pai']; ?> <br> e <br> <?php echo $_POST['mae'];?> <br><br>
            <strong>Bilhete de identidade Nº</strong>: <br> <?php echo $_POST['bi'];?>
        </div>

        <div class="foto" align="center">
            <img src="" width="125%" height="125%" alt="Foto">  
        </div>

        <div class="assinatura" align="center">
            <strong>Assinatura do Titular</strong>
            <div class="a"> 
                <?php echo $_POST['assinatura']?>
            </div>
        </div>

        </div>
        <br>
        <br>
        <hr>

        <div class="cartao">
            <div class="dados">
                <strong>Residência</strong>: <br>
                <strong>Bairro</strong>: <?php echo $_POST['ncasa']?> <br>

                <?php echo $_POST['C.Sul']?><br>

                <strong>Natural de</strong>: <?php echo $_POST['municipio']?></br></br>

                <strong>Provincia de</strong>: <?php echo $_POST['provincia'] ?></br></br>

                <strong>Data de nascimento</strong>: <?php echo $_POST['data']?></br></br>

                <strong>Sexo</strong>: <?php echo $_POST['sexo']?>

                <strong>Altura(m)</strong>: <?php echo $_POST['altura'] ?><br><br>

                <strong>Estado civil</strong>: <?php echo $_POST['Estado']?><br><br>

                <strong>Emitido em</strong>: <?php echo $_POST['emicao']?> <strong>Válido até</strong>: <?php echo $_POST['validade']?>
            </div>

            <div class="digital" align="center"></div>
            <div class="diretor" align="center">
                <div class="a"><strong>Dairiquila</strong></div>
            </div>
        </div>

        

</body>
</html>
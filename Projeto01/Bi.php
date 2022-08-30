<?php

$provincias = ['Bengo', 'Benguela', 'Bié', 'Cabinda', 'Cuando-Cubango', 'Cuanza Norte', 'Cuanza Sul', 'Cunene', 'Huíla', 'Luanda', 'Lunda Norte', 'Lunda Sul', 'Malanje', 'Moxico', 'Namibe' ,'Uíge', 'Zaire'];
$municipios = ['Ambriz', 'Bula Atumba', 'Dande', 'Dembos', 'Nambuangongo', 'Pango Aluquém'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados</title>

    <style type="text/css">
        .dados{
            border-radius: 16px;
            color: snow;
        }

       #cabecalho{
            border-radius: 20px;
            margin: 0px;
            border: 1px snow solid;
            padding: 1px;
            background: #2b2a33;
            font-family: cursive;
            font-size: 25px;
        }

        #campo{
            margin: 12px;
            padding: 6px;
            float: left;
            color: #2b2a33;
            font-family: Georgia, 'Times New Roman', Times, serif
        }

        #sub{
        
            
            align-content: center;
            border: 1px solid #2b2a33;
            border-radius: 10px;
        }

        .row {
            height: 305px;
        }

        .destaque {
            text-align: center;
            padding-top: 10px;
            padding-bottom: 10px;
        }

        .submit-btn {
            width: 243px;
            height: 33px;
        }

        #assinatura{
            font-style: oblique;
            font-family:inherit;
        }
    </style>
</head>

<body>
    <div class="dados">
        <div id="cabecalho" align="Center">
            <h4>Cadastrando o sidadão</h4>
        </div>
    </div>

    <hr>
   
    <form method="POST" action="Dados.php">
        <div>
            <!-- primeira div INICIO-->
            <fieldset class="row">
                <legend>Dados pessoais</legend>

                <div id="campo">
                    Nome completo <br>
                    <input type="text" placeholder="Nome completo" name="nome">
                </div>

                <div id="campo">
                    Filiação <br>
                    <input type="text" name="pai" placeholder="Nome completo do pai">
                    <input type="text" name="mae" placeholder="Nome completo da mãe">
                </div>
            
                <div id="campo">
                    Nº do BI <br>
                    <input type="text" name="bi" placeholder="Bilhete de identidade nº">
                </div>

                <div id="campo">
                   <fieldset>
                    <legend>Foto</legend>
                    <input type="file" name="foto">
                   </fieldset>
                </div>

                <div id="campo">
                    Residência<br>
                    <input type="text" name="ncasa" placeholder="Casa nº - bairro">
                </div>
                
                <div id="campo">
                    Natural<br>
                    <select name="municipio" id="">
                        <?php foreach($municipios as $municipio) { ?>
                            <option value=""><?php echo $municipio?></option>
                        <?php } ?>

                    </select>
                </div>

                <div id="campo">
                    Provincia <br>
                    <select name="provincia" id="">
                        <?php foreach ($provincias as $provincia) { ?>
                            <option><?php echo $provincia ?></option>
                        <?php }  ?>
                    </select>
                </div>

                <div id="campo">
                    Data de nascimento <br>
                    <input type="date" name="data">
                </div>

                <div id="campo">
                    Sexo <br>
                    Masculino<input type="radio" name="sexo" value="Masculino">
                    Feminino<input type="radio" name="sexo" value="Feminino">
                </div>

                <div id="campo">
                    Altura <br>
                    <input type="number" name="altura" placeholder="Altura" min="0" max="3">
                </div>

                <div id="campo">
                    Emitido em <br>
                    <input type="date" name="emicao">
                </div>

                <div id="campo">
                    Válido até <br>
                    <input type="date" name="validade">
                </div>

                <div id="campo">
                    Estado cívil <br>
                    <select name="Estado" id="">
                        <option >
                            Solteiro(a)
                        </option>
                        <option >
                            Casado(a)
                        </option>
                    </select>
                </div>

                <div id="campo">
                    Assinatura do titular <br>
                    <input type="text" placeholder="Assinatura do titular" name="assinatura" id="assinatura">
                </div>
            </fieldset>
            <!-- primeira div FIM -->
        </div>

        <div class="destaque">
            <input type="submit" value="Submeter" class="submit-btn">
        </div>
    </form>
</body>
</html>
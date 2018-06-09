<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Estaciona Fácil</title>
        <link href="css/estilo.css" rel="stylesheet"/>
    </head>
    <body class="main">
       
        <header class="cabecalho">
            <!--<img src="imagem/fusca4.gif"/>-->
            <h1>Estacione Aqui!</h1>
        </header>
        <nav class="nav_menu">
        <div class="menu">
            <li>Menu
                <ul><li><a href="#">Fechar</a></li></ul>
            <li>Cliente
                <ul>
                    <li><a href="entrada.php">Entrada</a></li>
                    <li><a href="saida.php">Saída</a></li>
                </ul>
            </li>
            </li>    
        </div>
        </nav>
       <div class="ticket">
           <form class="frm_veiculo" id="cadC" name="cadVeiculo" action="./funcoes/cliente.php" method="post">
                <div>
                <p class="e"><label for="Cveiculo">Veiculo:</label><input type="text" id="Cveiculo" name="Tveiculo" maxlength="20"/></p>
                <p class="d"><label for="Cplaca">Placa:</label><input type="text" id="Cplaca" name="Tplaca" maxlength="7"/></p>
                <p><label for="Cdata">Data:</label>&nbsp;<?php include './funcoes/dataHora.php'; ?></p>
                <p><label for="Chora">Hora:</label>&nbsp;<?php echo date("H:i:s")?></p>
                <p><input type="submit" name="imprimir" value="imprimir"/> <input type="reset" name="cancelar" value="Cancelar"/></p>
                </div>
            </form>
       </div>               
       
    </body>
</html>


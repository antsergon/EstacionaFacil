<?php

class Cliente{
    protected $veiculo;
    protected $placa;
    protected $handle;
    
            function __construct($veiculo, $placa) {
        $this->setVeiculo($veiculo);
        $this->setPlaca($placa);
    }
    function getVeiculo() {
        return $this->veiculo;
    }

    function getPlaca() {
        return $this->placa;
    }

    function setVeiculo($veiculo) {
        $this->veiculo = $veiculo;
        
    }

    function setPlaca($placa) {
        $this->placa = $placa;
    }
     
    function gerarCupom(){
        
        echo "<table style : border = '2px'>";
        echo "<tr><th>Veiculo</th> "."<td>" .$this->veiculo ."</td></tr>";
        echo "<tr><th>Placa</th> "."<td>" .$this->placa ."</td></tr>";
        echo "<tr><th>Hora</th>"."<td>" .date("h:i:s") ."</td></tr>"; 
        echo "<tr><td><a href=../index.php>Voltar</a></td></tr>";
        echo "</table>";
    }
    /*
    function imprime(){
        $handle = printer_open();
        printer_write($handle, $cliente);
        printer_close($handle);
    } */
}

if(@$_POST['imprimir'] == 'imprimir'){
    $veiculo = strtoupper($_POST['Tveiculo']);
    $placa = strtoupper($_POST['Tplaca']);
    
    $cliente = new Cliente($veiculo, $placa); 
    
    try{
        $cliente->setVeiculo($veiculo);
        $cliente->setPlaca($placa);
        $cliente->gerarCupom();
        
    } catch (Exception $ex) {
        echo "Erro ao gerar cupom " . $ex;
    }
    
}

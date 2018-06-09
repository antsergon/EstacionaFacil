<?php

function data(){
    date_default_timezone_set('America/Sao_Paulo');

    $mes_ano = array("Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", 
        "Outubro", "Novembro","Dezembro");
    $dia_sem = array("Domingo", "Segunda-feira", "Terça-feira", "Quarta-feira", "Quinta-feira", "Sexta-feira", "Sábado");
    $local = (int) date("m");
         
   
    echo "Taubaté  " . date("d"). " de " . $mes_ano[$local - 1]. " de " . date("Y").".";  
   
    }
data();

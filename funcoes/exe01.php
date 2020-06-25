<?php
    //Funções sempre retornam algo, caso contrário é uma sub rotina
    function ola(){
        return "exemplo de função";
    }

    echo ola();
    //02
    function salario(){
        return 1200.00;
    }
    echo "<br>Salário = ".salario();
    print("<hr>");
    //03 com aparâmetro

    function ola2($str){
        return "Olá! $str";
    }

    //04 com vários parâmetros
    function ola3($str,$per){
        return "Olá! $str e $per";
    }
    print(ola3("Vinicius","Dia"));

    //05 com parâmetros padrões
    function ola4($str="Desconhecido", $periodo="unkwon"){
        return "$str e $periodo";
    }
   // echo "<br>".ola4();

   //06 recebimento de várias funções
   function arg1(){
       $argumentos = func_get_args();
       return $argumentos;
   }
   echo "<hr>";
   var_dump(arg1("test","test2",1));
    
?>
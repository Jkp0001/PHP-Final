<?php
    function sumatorio(int $num){
        $res=0;
        for($i = 0 ; $i<=$num; $i++){
            $res+=$i;
        }
            return $res;
    }
?>

<?php 
    function factorial(int $num){
        $contador=1;
        if($num>=1){
            for($i=1;$i<=$num;$i++){
                $contador=$contador*$i;
            }
            return $contador;
        }else{
            return $num." No cumple los requisitos";
        }
        
    }
?>

<?php 
function cambiarDivisa(int $dinero, string $divisa, string $convert){
        
    if($divisa=='€' && $convert=='$'){
        $dinero*=1.06;
    }else if($divisa == '€' && $convert=='¥'){
        $dinero*=157.56;
    }else if($divisa == '$' && $convert=='€'){
        $dinero*=0.94;
    }else if($divisa == '$' && $convert=='¥'){
        $dinero*=148.73;
    }else if($divisa == '¥' && $convert=='€'){
        $dinero*=0.0063;
    }else if($divisa == '¥' && $convert=='$'){
        $dinero*=0.0067;
    }else{
        return "<h1>Es la misma moneda...</h1>";
    }
    return "El resultado es".$dinero;
}
?>

<?php 
    function comprobarEstado(int $ejemplar){
        if($ejemplar<=0){
            return "Extinto";
        }else if($ejemplar>0 && $ejemplar<=500){
            return "En peligro crítico";
        }else if($ejemplar>500 && $ejemplar <=2000){
            return "En peligro";
        }else{                                              //Más de 2000
            return "Amenazado";
        }
    }
?>
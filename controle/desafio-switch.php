<div class="title">Desafio Switch</div>

<form action="#" method="POST">
    <input type="text" name="valor" required>
    <select name="conversao" id="conversao" required>
        <option value="km-milha">Km > Milha</option>
        <option value="milha-km">Milha > Km</option>
        <option value="metros-km">Metros > Km</option>
        <option value="km-metros">Km > Metros</option>
        <option value="graus-fahrenheit">ºC > ºF</option>
        <option value="fahrenheit-graus">ºF > ºC</option>
    </select>
    <button type="submit">Enviar!</button>
</form>


<?php

if ($_SERVER['REQUEST_METHOD'] === "POST"){
    
    $valor = $_POST["valor"];
    $tipoConversao = $_POST["conversao"];
    $resultado = '';

    switch($tipoConversao){
        case 'km-milha': {
            $resultado = $valor / 1.609 . ' Milhas';
            break;
        }
        
        case 'milha-km': {
            $resultado = $valor * 1.609 . ' Kilometros';
            break;
        }
        
        case 'metros-km': {
            $resultado = $valor / 1000 . ' Kilometros';
            break;
        }
        
        case 'km-metros': {
            $resultado = $valor * 1000  . ' Metros';
            break;
        }

        case 'graus-fahrenheit': {
            $resultado = (($valor * 9) / 5) + 32  . ' ºF';
            break;
        }

        case 'fahrenheit-graus': {
            $resultado = (($valor - 32) * 5) / 9 . ' ºC';
            break;
        }

        default:{
            $resultado = "nenhum valor calculado";
        }

    }

    echo $resultado;
    

    
}

?>
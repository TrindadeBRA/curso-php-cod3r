<div class="title">Switch</div>

<?php
$categoria = 'suv básico';
$preco = 0.0;
$carro = ''; 

// if ($categoria === 'Luxo'){
//     $carro = 'BMW M3';
//     $preco = 250000.00;
// } elseif ($categoria === 'SUV'){
//     $carro = 'Renegade';
//     $preco = 80000;
// } elseif ($categoria === 'Sedan'){
//     $carro = 'Polo Sedan';
//     $preco = 35000;
// } else {
//     $carro = 'Mobi';
//     $preco = 30000;
// }

//Mesmo resultado que o if, porem mais organizado!
switch(strtolower($categoria)){
    case 'luxo': {
        $carro = 'BMW M3';
        $preco = 250000.00;
        break;
    }
    case 'suv':
    case 'suv básico': {
        $carro = 'Renegade';
        $preco = 80000;
        break;
    }
    case 'sedan': {
        $carro = 'Polo Sedan';
        $preco = 35000;
        break;
    }
    default: {
        $carro = 'Mobi';
        $preco = 30000;
        break;
    }

}


$precoFormatado = number_format($preco, 2, ',', '.');
$categoriaFormatado = ucfirst($categoria);
echo "Carro: $carro <br> Preço: R$ $precoFormatado <br> Categoria: $categoriaFormatado";

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 013</title>
    <link rel="stylesheet" href="style.css">
    <style>img.nota {
        height: 50px;
        margin: 5px;
    }
    h1 {
        color: #372991;
        text-align: center;
        margin: auto;
    }
    </style>
</head>
<body>
    <?php 
        $saque = $_REQUEST['saque'] ?? 0;

    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="saque">Qual o valor você deseja sacar?<span>(R$)<sup>*</sup></span></label>
            <input type="number" name="saque" id="saque" step="5" required value="<?=$saque?>">
            <span style="font-size: 0.7em;"><sup>*</sup>Notas disponíveis: R$100, R$50, R$10 e R$5</span>
            <input type="submit" value="Sacar">
        </form>
    </main>
    <?php 
        $resto = $saque;

        //Saque 100
        $tot100 = floor($resto / 100);
        $resto %= 100;

        //Saque 50
        $tot50 = floor($resto / 50);
        $resto %= 50;

        //Saque 10
        $tot10 = floor($resto / 10);
        $resto %= 10;

        //Saque 5
        $tot5 = floor($resto / 5);
        $resto %= 5;
    ?>
    <section>
        <h2>&#127881; Saque de <strong>R$<?=number_format($saque, 2, ",", ".")?></strong> realizado &#127881;</h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
        <ul>
            <li><img src="imagens/100-reais.jpg" alt="Nota de R$100" class="nota"> &#8594; <strong>x<?=$tot100?></strong></li>
            <li><img src="imagens/50-reais.jpg" alt="nota de R$50" class="nota"> &#8594; <strong>x<?=$tot50?></strong></li>
            <li><img src="imagens/10-reais.jpg" alt="Nota de R$10" class="nota"> &#8594; <strong>x<?=$tot10?></strong></li>
            <li><img src="imagens/5-reais.jpg" alt="Nota de R$5" class="nota"> &#8594; <strong>x<?=$tot5?></strong></li>
        </ul>
    </section>
</body>
</html>
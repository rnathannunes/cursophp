<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 008</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
     <?php 
        //Declarações
        $numero = $_GET['num'] ?? 1;
     ?>
     <main>
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="num">Número</label>
            <input type="number" name="num" id="num" value="<?=$numero?>">
            <input type="submit" value="Calcular Raízes">
        </form>
     </main>
     <section>
        <h2>Resultado Final</h2>
        <?php 
            $rq = $numero ** (1/2);
            $rc = $numero ** (1/3);
            
            echo "<p>Analisando o número <strong>$numero</strong>, temos:";
            echo "<ul><li>A raíz quadrada é <strong>". number_format($rq, 3, ",", ".")."</strong></li>";
            echo "<li>A sua raíz cúbica <strong>". number_format($rc, 3, ",", ".")."</strong></li></ul>";
        ?>
     </section>
</body>
</html>
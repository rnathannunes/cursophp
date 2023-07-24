<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 012</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $totalSegundos = $_REQUEST['seg'] ?? 0;
    ?>
    <main>
        <h1>Calculadora de tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="seg">Qual é o total de segundos?</label>
            <input type="number" name="seg" id="seg" min="0" step="1" required value="<?=$totalSegundos?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <?php 
        $sobra = $totalSegundos;
        
        //Total mês (30 dias)
        //$mes = (int)($sobra / 2_592_000);
        //$sobra = $sobra % 2_592_000;
        
        //Total semanas
        $semana = (int)($sobra / 604_800);
        $sobra = $sobra % 604_800;
        //Total dias
        $dia = (int)($sobra / 86_400);
        $sobra = $sobra % 86_400;
        //Total horas
        $hora = (int)($sobra / 3_600);
        $sobra = $sobra % 3_600;
        //Total minutos
        $minuto = (int)($sobra / 60);
        $sobra =  $sobra % 60;
        //Total segundos
        $segundo = $sobra;
    ?>
    <section>
        <h2>Totalizando tudo</h2>
        <p>Analisando o valor que você digitou, <strong><?=number_format($totalSegundos, 0, ",", ".")?> segundos</strong> equivalem a um total de:</p>
        <ul>
            <!--<li><\?=$mes?> meses</li>-->
            <li><?=$semana?> semanas</li>
            <li><?=$dia?> dias</li>
            <li><?=$hora?> horas</li>
            <li><?=$minuto?> minutos</li>
            <li><?=$segundo?> segundos</li>
        </ul>
    </section>
</body>
</html>
<?php 
$paragrafo = "Uno spettro s'aggira per l'Europa - lo spettro del comunismo. Tutte le potenze della vecchia
Europa si sono alleate in una santa battuta di caccia contro questo spettro: papa e zar, Metternich
e Guizot, radicali francesi e poliziotti tedeschi.
Quale partito d'opposizione non è stato tacciato di comunismo dai suoi avversari
governativi; qual partito d'opposizione non ha rilanciato l'infamante accusa di comunismo tanto
sugli uomini più progrediti dell'opposizione stessa, quanto sui propri avversari reazionari?";
$lunghezza = strlen($paragrafo);
$censura = $_GET["censura"];
$paragrafo_1 = str_replace($censura, '***', $paragrafo);
$lunghezza_1 = strlen($paragrafo_1);
$name = $_GET['name'];

?>

<div> <?php echo $paragrafo ?></div>
<div> la lunghezza del paragrafo compresi gli spazi è <?php echo $lunghezza ?></div>
<div> <?php echo $paragrafo_1 ?></div>
<div> la lunghezza del paragrafo compresi gli spazi è <?php echo $lunghezza_1 ?></div>
<div> <?php echo $name ?></div>
<?php

$universidades = [
    ["sigla" => "UFES", "nome" => "Universidade Federal do Espírito Santo"],
    ["sigla" => "UFMG", "nome" => "Universidade Federal de Minas Gerais"],
    ["sigla" => "UFSC", "nome" => "Universidade Federal de Santa Catarina"],
    ["sigla" => "UFPR", "nome" => "Universidade Federal do Paraná"]
];

$pesquisa = "";

if(isset($_GET["search"])){
    $pesquisa = strtolower($_GET["search"]);
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>UniRoad</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<header>
<h1>UniRoad</h1>
<p>Descubra o melhor caminho para aprender sua disciplina</p>
</header>

<div class="search-container">

<form method="GET">
<input type="text" name="search" placeholder="Pesquisar universidade..." value="<?php echo $pesquisa ?>">
<button type="submit">Buscar</button>
</form>

</div>

<div class="university-list">

<?php

foreach($universidades as $uni){

$nome = strtolower($uni["nome"]);
$sigla = strtolower($uni["sigla"]);

if($pesquisa == "" || strpos($nome, $pesquisa) !== false || strpos($sigla, $pesquisa) !== false){

echo '
<div class="card">
<h2>'.$uni["sigla"].'</h2>
<p>'.$uni["nome"].'</p>
<a href="roadmap.php?uni='.$uni["sigla"].'">
<button>Ver cursos</button>
</a>
</div>
';

}

}

?>

</div>

</body>
</html>

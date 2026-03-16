<?php

$disciplina = "Cálculo I";

$roadmap = [

[
"titulo" => "Revisão de Funções",
"recursos" => [
["nome" => "Vídeo explicativo", "link" => "#"],
["nome" => "Livro recomendado", "link" => "#"]
]
],

[
"titulo" => "Limites",
"recursos" => [
["nome" => "Curso gratuito", "link" => "#"],
["nome" => "Video aula", "link" => "#"]
]
],

[
"titulo" => "Derivadas",
"recursos" => [
["nome" => "Livro", "link" => "#"],
["nome" => "Exercícios resolvidos", "link" => "#"]
]
]

];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Roadmap</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<header>
<h1>Roadmap - <?php echo $disciplina; ?></h1>
</header>

<div class="roadmap-container">

<?php

foreach($roadmap as $step){

echo "<div class='step'>";
echo "<h2>".$step["titulo"]."</h2>";
echo "<ul>";

foreach($step["recursos"] as $r){

echo "<li><a href='".$r["link"]."'>".$r["nome"]."</a></li>";

}

echo "</ul>";
echo "</div>";

}

?>

</div>

</body>
</html>
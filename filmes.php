<?php

$filmes = ['Avengers', 'Captain Marvel', 'Homem-Formiga e a Vespa'];
echo count($filmes);

echo "<br>Filmes<br>";

for($i = 0; $i < count($filmes); $i++){
    echo $filmes[$i] . "<br>";
}

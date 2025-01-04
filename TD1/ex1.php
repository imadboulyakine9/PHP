<?php
function dire_texte($qui,&$texte)
{
$texte = "Bienvenue $qui";
}

$chaine="Bonjour";
dire_texte("Monsieur", $chaine);
echo $chaine;
?>
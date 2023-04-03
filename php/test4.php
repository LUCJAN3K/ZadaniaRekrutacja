<?phpinclude "Thesaurus.php";$thesaurus = new Thesaurus();$thesaurus->getSynonyms("test");
echo "<br/>";
$thesaurus->getSynonyms("small");
?>
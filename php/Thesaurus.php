<?php /*Jeden z rodzajów s³ownika, czyli tezaurus, zawiera s³owa i ich synonimy. Poni¿ej znajduje siê przyk³ad
struktury danych, która definiuje tezaurus:
array("market" => array("trade"), "small" => array("little", "compact"))
Nale¿y zaimplementowaæ funkcjê getSynonyms, która przyjmuje s³owo jako ci¹g znaków i zwraca
wszystkie synonimy dla tego s³owa w formacie JSON, jak w poni¿szym przyk³adzie.
Na przyk³ad wywo³anie $thesaurus->getSynonyms("small") powinno zwróciæ:
'{"word":"small","synonyms":["little", "compact"]}'
podczas gdy wywo³anie z s³owem, dla którego nie ma synonimów, np. $thesaurus-
>getSynonyms("asleast") powinno zwróciæ:
'{"word":"asleast","synonyms":[]}'*/class Thesaurus{	public $thesaurus = array(
	"market" => array("trade"),
	"small" => array("little","compact"),
	);
	function getSynonyms(string $word){	$synonyms = (empty($this->thesaurus[$word])) ? array() : $this->thesaurus[$word];
	echo json_encode($synonyms);
}
}$thesaurus = new Thesaurus();$thesaurus->getSynonyms("market");
$thesaurus->getSynonyms("small");
?>
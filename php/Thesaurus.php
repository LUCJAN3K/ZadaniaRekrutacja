<?php /*Jeden z rodzaj�w s�ownika, czyli tezaurus, zawiera s�owa i ich synonimy. Poni�ej znajduje si� przyk�ad
struktury danych, kt�ra definiuje tezaurus:
array("market" => array("trade"), "small" => array("little", "compact"))
Nale�y zaimplementowa� funkcj� getSynonyms, kt�ra przyjmuje s�owo jako ci�g znak�w i zwraca
wszystkie synonimy dla tego s�owa w formacie JSON, jak w poni�szym przyk�adzie.
Na przyk�ad wywo�anie $thesaurus->getSynonyms("small") powinno zwr�ci�:
'{"word":"small","synonyms":["little", "compact"]}'
podczas gdy wywo�anie z s�owem, dla kt�rego nie ma synonim�w, np. $thesaurus-
>getSynonyms("asleast") powinno zwr�ci�:
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
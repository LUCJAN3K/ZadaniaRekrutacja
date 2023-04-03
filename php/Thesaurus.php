<?phpclass Thesaurus{	public $thesaurus = array(
	"market" => array("trade"),
	"small" => array("little","compact"),
	);
	function getSynonyms(string $word){	$synonyms = (empty($this->thesaurus[$word])) ? array() : $this->thesaurus[$word];
	$synonyms = json_encode($synonyms);
	echo '{"word":"'.$word.'","synonyms":'.$synonyms."}";
}
}
?>
<?php 
class Shortener {
	protected $db;

	public function __construct() {
		// for demo purposes
		$this->db = new mysqli('localhost', 'root', '', 'shortener');
	}

	// generate code from a given id number and convert to base 36 of same ID number
	protected function generateCode($num){
		return base_convert($num, 10, 36);
	}

	// for parsing the Url and return the code that is been generated
	public function makeCode($url){
		$url = trim($url);
		if (!filter_var($url, FILTER_VALIDATE_URL)) {
			return '';
		}

		//to prevent sql injection
		$url = $this->db->escape_string($url);

		// check if url already exists
		$exists = $this->db->query("SELECT code FROM links WHERE url = '{$url}'");

		if ($exists->num_rows) {
			return $exists->fetch_object()->code;
		}else{
			//Insert record without a code
			$this->db->query("INSERT INTO links (url, created) VALUES ('{$url}', NOW())"); 
 
			//Generate code based on inserted ID
			$code = $this->generateCode($this->db->insert_id);

			// Update the record with the generated code
			$this->db->query("UPDATE links SET code ='{$code}' WHERE url = '{$url}'");

			return $code;
		}
	}

	//return the Url we want to redirect to
	public function getUrl($code){
		$code = $this->db->escape_string($code);

		$code = $this->db->query("SELECT url FROM links WHERE code = '$code'");

		if ($code->num_rows) {
			# code...
			return $code->fetch_object()->url;
		}

		return '';
	}
}
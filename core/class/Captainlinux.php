<?php 

/**
* 
*/
class Os
{
	private $version = "1.0";

	public function secure($data){
		return htmlspecialchars(strip_tags($data));
	} 


	public function Curl($url){
		$ch = curl_init(); 
        curl_setopt($ch, CURLOPT_URL, $url); 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $result = curl_exec ($ch);
        return $result;
	}

	public function version(){
		return $this->version;
	} 
	
}




 ?>
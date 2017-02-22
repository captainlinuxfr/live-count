<?php 

/**
*  Class php API YOUTUBE
*  Crée par Captainlinux
*  Support : https://twitter.com/_CaptainLinux
*/
class Youtube extends Os
{
	public $key;

	function __construct($key)
	{
		$this->key = $key;
	}

	public function Getinfo($value){
		if (isset($value)) {
			$type = $this->typechannel($value);
			$api = $this->url_api($type,$value);
			$curl_data = $this->Curl($api);
			$json = json_decode($curl_data, true); 
			return $json;
		} else {
			die("Invalide channel youtube");
		}
	}

	public function typechannel($value){
		  $data = mb_strlen($value, "UTF-8");
		  if(substr($value, 0 ,2) == "UC" and $data == 24){
		   	return "id";
		  }else{
		    return "forUsername";
		  }

	}

	private function url_api($type,$channel){
		$yt_url = "https://www.googleapis.com/youtube/v3/channels?part=brandingSettings,statistics,snippet&key=".$this->key."&".$type."=".$channel;
		return $yt_url;
	}

	public function img($value){
		$data = $this->Getinfo("pewdiepie");

    		 foreach ($data['items'] as $channel_data ){  
    			$image = $channel_data['snippet']['thumbnails']['default']['url'];	
    			return $image;
      		 }
	}
	public function totalvideo($value){
		$data = $this->Getinfo($value);

    		 foreach ($data['items'] as $channel_data ){  
    			$video = number_format($channel_data['statistics']['videoCount']);;	   			
      		 }
      		 return $video;
	}

	public function viewer($value){
		$data = $this->Getinfo($value);
    		 foreach ($data['items'] as $channel_data ){  
    			$viewer = number_format($channel_data['statistics']['viewCount']);	
    			
      		 }
      		 return $viewer;
	}
	
	public function subscribers($value){
		$data = $this->Getinfo($value);
    		 foreach ($data['items'] as $channel_data ){  
    			$subscriber = number_format($channel_data['statistics']['subscriberCount']);
    			
      		 }
      		 return $subscriber;
	}

}




 ?>

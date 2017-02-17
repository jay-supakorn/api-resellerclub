<?
	class Curl
	{
		public function post($url, $json='')
		{
			$ch = curl_init($url);                                                                      
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST"); 
			curl_setopt($ch, CURLOPT_FAILONERROR, true);                                                                    
			curl_setopt($ch, CURLOPT_POSTFIELDS, $json);                                                                  
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
			$result = curl_exec($ch);
			return $result;
		}
		
		public function delete($url, $json='')
		{
			$ch = curl_init($url);                                                                      
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE"); 
			curl_setopt($ch, CURLOPT_FAILONERROR, true);                                                                    
			curl_setopt($ch, CURLOPT_POSTFIELDS, $json);                                                                  
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
			$result = curl_exec($ch);
			return $result;
		}
		
		public function put($url, $json='')
		{
			$ch = curl_init($url);                                                                      
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT"); 
			curl_setopt($ch, CURLOPT_FAILONERROR, true);                                                                    
			curl_setopt($ch, CURLOPT_POSTFIELDS, $json);                                                                  
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
			$result = curl_exec($ch);
			return $result;
		}
	}
?>
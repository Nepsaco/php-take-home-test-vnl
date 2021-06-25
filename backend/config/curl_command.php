<?php
class CurlOutput {
   public $curlOutput; 

   function __construct() {
       $ch = curl_init();
       curl_setopt($ch, CURLOPT_URL, 'https://vnl-test.herokuapp.com/');
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

       $this->curlOutput = json_decode(curl_exec($ch));
       curl_close($ch);
   }

}
?>

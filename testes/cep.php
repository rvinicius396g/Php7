<?php
    class CEP{
        public $CEP = "08015630";

        public function verBairro(){
            $cep = "08051630";
            $link = "https://viacep.com.br/ws/$cep/json/";

            $ch = curl_init($link);

            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

            $response = curl_exec($ch); 
            curl_close($ch); 

            $data = json_decode($response, true);

            return $data["bairro"];
        }


    }

    $casa0 = new CEP();
   echo  $casa0->verBairro();

?>
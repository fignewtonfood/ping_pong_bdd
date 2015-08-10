<?php

    class PingPongGenerator
    {
        function generatePingPongArray($input_number)
        {
            $final_array = array();
            for ($count=1; $count<= $input_number; $count++) {
                if ($count % 15 == 0) {
                    array_push($final_array, 'ping-pong');
                } elseif ($count % 3 == 0) {
                    array_push($final_array, 'ping');
                } elseif ($count % 5 == 0){
                    array_push($final_array, 'pong');
                }  else array_push($final_array, $count);
            }
            return $final_array;
        }
    }
?>

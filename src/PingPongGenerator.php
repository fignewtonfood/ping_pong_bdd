<?php

    class PingPongGenerator
    {
        function generatePingPongArray($input_number)
        {
            $final_array = array();
            for ($count=1; $count<= $input_number; $count++) {
                array_push($final_array, $count);
            }
            return $final_array;
        }
    }


?>

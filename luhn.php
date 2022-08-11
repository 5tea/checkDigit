<?php

class Luhn {
    public function calculate($input){
        $input = str_split($input, 1);
        $length = count($input);
        $output = 0;
        $double = 0;
        for( $i = 1; $i <= $length; $i++ ){
            if($i & 1){
                $double = $input[$length-$i] * 2;
                while ($double > 9) {
                    $double = str_split($double, 1);
                    $double = array_sum($double);
                }
                $output += $double;
            } else {
                $output += $input[$length-$i];
            }
        }
        return 10 - ($output % 10);
    }

    public function validate($input) {
        $length = strlen($input);
        $checkDigit = $input[$length - 1];
        $input = intdiv($input, 10);
        return $checkDigit == self::calculate($input) ? true : false;
    }

    public function append($input){
        return $input . self::calculate($input);
    }
}

?>
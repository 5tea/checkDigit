<?php
class Luhn {
    public function calculate($input)
    {
        $input = str_split($input, 1);
        $length = count($input);
        $output = 0;
        $double = 0;
        for( $i = 1; $i <= $length; $i++ )
        {
            if($i & 1)
            {
                $double = $input[$length-$i] * 2;
                $output += ($double > 9) ? $double - 9 : $double;
            } else
            {
                $output += $input[$length-$i];
            }
        }
        $result = ($output % 10);
        return $result == 0 ? 0 : 10 - $result;
    }
    public function validate($input)
    {
        $length = strlen($input);
        $checkDigit = $input[$length - 1];
        $input = intdiv($input, 10);
        return $checkDigit == self::calculate($input) ? true : false;
    }
    public function append($input)
    {
        return $input . self::calculate($input);
    }
    public function remove($input)
    {
        return self::validate($input) ? intdiv($input, 10) : null;
    }
}
?>
<?php
    class RepeatCOunter
    {
        function countRepeats($string, $word)
        {
            $word = strtoupper($word);
            $string = strtoupper($string);
            $count = substr_count($string, $word);
            return $count;
        }
    }

?>

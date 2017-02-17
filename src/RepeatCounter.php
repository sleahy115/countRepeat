<?php
    class RepeatCOunter
    {
        function countRepeats($string, $word)
        {
            $count = substr_count($string, $word);
            return $count;
        }
    }

?>

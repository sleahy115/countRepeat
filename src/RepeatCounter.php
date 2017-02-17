<?php
    class RepeatCOunter
    {
        function countRepeats($string, $word)
        {
            $word = strtoupper($word);
            if (str_word_count($string) > 1){

                $wordArray = explode(" ", $string);
            }else {
                $wordArray = str_split($string);
            }

            var_dump($wordArray);

            $string = strtoupper($string);
            $count = 0;
            foreach($wordArray as $match){
                if (strlen($word) == strlen($match)){
                    $count = substr_count($string, $word);
                    return $count;
            } else {
                return false;
                }
            }
        }
    }

?>

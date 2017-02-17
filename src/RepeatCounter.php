<?php
    class RepeatCounter
    {
        // private $word;
        // private $phrase;
        // function __construct($new_word, $new_phrase)
        // {
        //     $this->word = $new_word;
        //     $this->phrase = $new_phrase;
        // }
        // function getWord(){
        //     return $this->word;
        // }
        //
        // function getPhrase(){
        //     return $this->phrase;
        // }

        static function countRepeats($string, $word)
        {
            $word = strtoupper($word);
            $string = strtoupper($string);
            $count = 0;
            if (str_word_count($string) > 1){

                $wordArray = explode(" ", $string);
            }else {
                $wordArray = str_split($string);
            }
            var_dump($wordArray);
            foreach($wordArray as $match){
                if (strlen($word) == strlen($match)){
                    $count = substr_count($string, $word);
                    return $count;
                }
            }
        }
    }

?>

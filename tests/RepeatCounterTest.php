<?php
require_once "src/RepeatCounter.php";
    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        function test_h()
        {
            $test_string = new RepeatCounter;
                //Arrange
                $input1 = "hi";
                $input2 = "h";
                $test_string->countRepeats($input1, $input2);
                //Act
                $result = $test_string->countRepeats($input1, $input2);
                //Assert
                $this->AssertEquals(1, $result);
        }
    }
 ?>

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
        function test_o()
        {
            $test_string = new RepeatCounter;
                //Arrange
                $input1 = "how are you?";
                $input2 = "o";
                $test_string->countRepeats($input1, $input2);
                //Act
                $result = $test_string->countRepeats($input1, $input2);
                //Assert
                $this->AssertEquals(2, $result);
        }
        function test_2()
        {
            $test_string = new RepeatCounter;
                //Arrange
                $input1 = "2017";
                $input2 = "2";
                $test_string->countRepeats($input1, $input2);
                //Act
                $result = $test_string->countRepeats($input1, $input2);
                //Assert
                $this->AssertEquals(1, $result);
        }
        function test_2Multiple()
        {
            $test_string = new RepeatCounter;
                //Arrange
                $input1 = "201722021";
                $input2 = "2";
                $test_string->countRepeats($input1, $input2);
                //Act
                $result = $test_string->countRepeats($input1, $input2);
                //Assert
                $this->AssertEquals(4, $result);
        }
        function test_how()
        {
            $test_string = new RepeatCounter;
                //Arrange
                $input1 = "how are you?";
                $input2 = "how";
                $test_string->countRepeats($input1, $input2);
                //Act
                $result = $test_string->countRepeats($input1, $input2);
                //Assert
                $this->AssertEquals(1, $result);
        }
        function test_howCapital()
        {
            $test_string = new RepeatCounter;
                //Arrange
                $input1 = "how are you?";
                $input2 = "HOW";
                $test_string->countRepeats($input1, $input2);
                //Act
                $result = $test_string->countRepeats($input1, $input2);
                //Assert
                $this->AssertEquals(1, $result);
        }
        function test_howLong()
        {
            $test_string = new RepeatCounter;
                //Arrange
                $input1 = "How are you Megan? I am good Tom. How was your weekend?";
                $input2 = "how";
                $test_string->countRepeats($input1, $input2);
                //Act
                $result = $test_string->countRepeats($input1, $input2);
                //Assert
                $this->AssertEquals(2, $result);
        }

    }
 ?>

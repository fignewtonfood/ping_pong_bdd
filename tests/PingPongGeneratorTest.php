<?php
    require_once "src/PingPongGenerator.php";

    class PingPongGeneratorTest extends PHPUnit_Framework_TestCase
    {
        function test_makePingPong_printNumber()
        {
            //Arrange
            $test_PingPongGenerator = new PingPongGenerator;
            $input = "31";

            //Act
            $result = $test_PingPongGenerator->generatePingPongArray($input);

            //Assert
            $this->assertEquals("31", $result);
        }
    }

?>

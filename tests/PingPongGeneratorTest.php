<?php
    require_once "src/PingPongGenerator.php";

    class PingPongGeneratorTest extends PHPUnit_Framework_TestCase
    {
        function test_makePingPong_printNumber()
        {
            //Arrange
            $test_PingPongGenerator = new PingPongGenerator;
            $input = 1;

            //Act
            $result = $test_PingPongGenerator->generatePingPongArray($input);

            //Assert
            $test_array = [1];
            $this->assertEquals($test_array, $result);
        }

        function test_makePingPong_countNumber()
        {
            //Arrange
            $test_PingPongGenerator = new PingPongGenerator;
            $input = 2;

            //Act
            $result = $test_PingPongGenerator->generatePingPongArray($input);

            //Assert
            $test_array = [1,2];
            $this->assertEquals($test_array, $result);
        }

        function test_makePingPong_countPing()
        {
            //Arrange
            $test_PingPongGenerator = new PingPongGenerator;
            $input = 3;

            //Act
            $result = $test_PingPongGenerator->generatePingPongArray($input);

            //Assert
            $test_array = [1, 2, 'ping'];
            $this->assertEquals($test_array, $result);

        }

        function test_makePingPong_countPong()
        {
            //Arrange
            $test_PingPongGenerator = new PingPongGenerator;
            $input = 5;

            //Act
            $result = $test_PingPongGenerator->generatePingPongArray($input);

            //Assert
            $test_array = [1, 2, 'ping', 4, 'pong'];
            $this->assertEquals($test_array, $result);
        }
    }
?>

<?php


require_once 'check.php';


    function checkDatey()
    {
        echo "hello";
        $sleepDuration = rand(1, 10);
        echo $sleepDuration;
        sleep($sleepDuration);
        anotherfun();
    }


if(isset($_GET['content'])) {
    echo "hi";
    checkDatey();
}
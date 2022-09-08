<?php
    echo "Exception in php<br>";
    function divide($a, $b)
    {   
        return $a/$b;
    }

    try {
        echo divide(10,2).'<br>';
        // echo divide(5,0);
        echo "No error<br>";
    } catch (Exception $e) {
        //throw $th;
        echo "Caught exception: ".$e->getMessage()."\n";
    } finally {
        echo "Finally comes here...<br>";
    } 
    echo "Program runs here...<br>";
?>

    <?php

    function findValue($arry,$search){
        foreach($arry as $i => $value)
        {
            $found = false;
    
            if($arry[$i] == $search)
            {
                $found == true;
                break;
            } 
        }
        if($found)
            echo"<b>$search</b> found";
        else
            echo"<b>$search</b> not found";
    }
        $arry = [22,24,30,45,60];
        findValue($arry,30);
        echo "<br>";
        findValue($arry,44);
    ?>
 

<?php
function VAT($x)
{
    $v= $x*0.15;
    echo" after 15% vat added ,the net amount is "  . $v;
}
VAT(23000);
?>

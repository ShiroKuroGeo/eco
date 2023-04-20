<?php


    $D_ordered = new DateTime();
    $D_ordered->add(new DateInterval('P7D'));
    $D_deliver = $D_ordered->format('m/d/Y');
    echo "current date is ". date('m/d/Y');
    echo "<br>".$D_deliver;
?>
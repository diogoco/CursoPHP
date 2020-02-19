<pre>
    <?php
        $v = array("A","H","J", "M", "X");
        print_r($v);
        echo count($v);
        var_dump($v);
        $v[]="O";
        print_r($v);
        array_push($v,"P");
        array_pop($v);
        array_unshift($v,"B");
        array_shift($v); 
        sort($v);
        rsort($v);
        asort($v);
        arsort($v);
        ksort($v);
        krsort($v);


    ?>
</pre>
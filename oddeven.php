<?php
function check($n)
{
    $s1=array('0');
    $s2=array('0');
    $e=0;
    $o=0;
    for($i=1;$i<=$n;$i++)
    {
        if($i%2==0)
        {
            $s2[$e]=$i;
            $e++;
        }
        else
        {
            $s1[$o]=$i;
            $o++;
        }
    }
    echo "Odd numbers are: ";
    for($i=0;$i<$o-1;$i++)
    {
        echo "$s1[$i], ";
    }
    echo "$s1[$i].";
    echo "<br><br> Even numbers are: ";
    for($i=0;$i<$e-1;$i++)
    {
        echo "$s2[$i], ";
    }
    echo "$s2[$i].";
}
check(100);
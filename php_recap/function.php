<?php 

function sayName($name="Gaess")
{
    echo "Hello".$name.PHP_EOL;
}

sayName();
sayName("Ariel");

call_user_func('sayName','John Doe');

call_user_func_array('sayName',['Jane Doe']);

//anonymous function(closer)

$soldier=function($name){echo $name .PHP_EOL;};

$soldier('Captain price');

// $result=fn($x)=>$x*2;

// echo $result(19);
echo PHP_EOL;

function getLastName($name)
{
    $real_name=explode(" ",$name);

    $getLastIndex=count($real_name)-1;

    if($real_name[$getLastIndex]!="Doe")
    {
        return "Youre not Doe Family";
    }
    return $real_name[$getLastIndex].PHP_EOL;

}

getLastName("john Doe rostchild");
<?php

class abc
{

    public $course = "PHP";

    private $first_name, $last_name;

    public function full_name($f_name, $l_name)
    {
        $this->first_name = $f_name;
        $this->last_name = $l_name;
    }

    public function __sleep()
    {
        return array("first_name", "last_name");
    }

    public function __wakeup()
    {
        echo "this is a wakeup function";
    }

}

$test = new abc();

$test->full_name("kamrul", "islam");

$srl = serialize($test);

echo $srl . "<br>";

$us = unserialize($srl);

echo "<pre>";
print_r($us);
echo "</pre>";





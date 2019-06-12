<?php
class A {
    public static $a = 1;
    public static function name()
    {
	echo 'A';
    }

    public static function getName()
    {
	echo static::name();
    }
}

class B extends A {
    public static function name()
    {
        echo 'B';
    }
}

// A::getName();



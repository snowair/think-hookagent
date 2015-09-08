<?php

namespace Snowair\Think\Behavior;

use Think\Hook;

class HookAgent
{
    protected static $tags=array();

    public function app_init()
    {
        $bags = self::$tags;
        foreach ($bags as $hook => $class) {
            $tags = Hook::get($hook);
            if (class_exists($class)) {
                if (!array_search( $tags, $class )) {
                    Hook::add($hook,$class);
                }
            }
        }
    }

    static public function add($tag,$name) {
        $bags = self::$tags[$tag];
        if ( !array_search($bags,$name)) {
            self::$tags[$tag][] =   $name;
        }
    }
}
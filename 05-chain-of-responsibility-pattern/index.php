<?php

abstract class HomeChecker {
    protected $successor;

    abstract public function check(HomeStatus $home);

    public function succeedWith(HomeChecker $successor){
        $this->successor = $successor;
    }

    public function next(HomeStatus $home){
        if($this->successor) {
            $this->successor->check($home);
        }
    }
}

class Locks extends HomeChecker {
    public function check(HomeStatus $home){
        if(! $home->locked){
            throw new \RuntimeException('The doors are not locked! Abort abort!!');
        }
        var_dump('The home is locked!');
        $this->next($home);
    }
}

class Lights extends HomeChecker {
    public function check(HomeStatus $home){
        if(! $home->lightsOff){
            throw new \RuntimeException('The lights are still on!! Abort abort!!');
        }
        var_dump('The lights are off!');
        $this->next($home);
    }
}

class Alarm extends HomeChecker {
    public function check(HomeStatus $home){
        if(! $home->alarmOn){
            throw new \RuntimeException('The alarm has not been set!! Abort abort!!');
        }
        var_dump('The alarm is on!');
        $this->next($home);
    }
}

class HomeStatus {
    public $alarmOn = true;
    public $locked = true;
    public $lightsOff = false;
}

// ...
//1. First set up your objects. Think of them as different ways of handling your requests.
$locks = new Locks();
$lights = new Lights();
$alarm = new Alarm();

//2. Hook the objects together.
$locks->succeedWith($lights);
$lights->succeedWith($alarm);

//3. Call a check method on the first ring or object in the chain.
$locks->check(new HomeStatus());
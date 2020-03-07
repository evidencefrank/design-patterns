<?php


namespace Acme;


class Kindle implements eReaderInterface
{
    public function turnOn(){
        var_dump('turn the kindle on.');
    }

    public function pressNextPage(){
        var_dump('press the next button on the Kindle.');
    }
}
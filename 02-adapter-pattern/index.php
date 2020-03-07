<?php

require 'vendor/autoload.php';

use Acme\Book;
use Acme\BookInterface;
use Acme\Kindle;
use Acme\eReaderAdapter;
use Acme\Nook;

class Person{

    /**
     * @param BookInterface $book
     */
    public function read(BookInterface $book){

        $book->open();

        $book->turnPage();
    }
}

(new Person)->read(new Book());
echo "\n\r";
(new Person)->read(new eReaderAdapter(new Kindle()));
echo "\n\r";
(new Person)->read(new eReaderAdapter(new Nook()));
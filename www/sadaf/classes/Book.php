<?php


class Book
{
    public $ISBN;
    public $title;
    public $image;
    public $numberOfPage;
    public $descriptions;
    public $publisher;
    public $author;
    public $files;
    public $dates;


    public function __construct($ISBN=-1, $title="", $publisher="", $author="", $files) {
        $this->ISBN = $ISBN;
        $this->title = $title;
        $this->publisher = $publisher;
        $this->author = $author;
        $this->files = $files;
    }

}
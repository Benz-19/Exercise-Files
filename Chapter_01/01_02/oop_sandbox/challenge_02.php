<?php

class Book
{
    protected $author;
    protected $title;
    protected $genre;
    protected $pages;
    protected $publicationHouse;
    protected $price;

    public function __construct($inputAuthor, $inputTitle, $inputGenre, $inputPubHouse)
    {
        $this->author = $inputAuthor;
        $this->title = $inputTitle;
        $this->genre = $inputGenre;
        $this->publicationHouse = $inputPubHouse;
    }

    public function dsiplayDetail()
    {
        echo "{$this->author}, {$this->title}, {$this->genre}, {$this->pages}, {$this->publicationHouse}, {$this->price} <br>";
    }
}


class Science extends Book
{

    public function set_pages(int $pages)
    {
        $this->pages = $pages;
    }
    public function set_price(int $price)
    {
        $this->price = $price;
    }
}

$book1 = new Science("Kingsley", "Fundamentals Of Physics", "Science", "Alba PubHouse");
$book1->set_pages(123);
$book1->set_price(1000);
$book2 = new Science("Charles Darwin", "Movement", "Science", "Alba PubHouse");
$book2->set_pages(300);
$book2->set_price(700);

$book1->dsiplayDetail();
$book2->dsiplayDetail();

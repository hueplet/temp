<?php
/**
* Requare > PHP 7.0
* 
* http://rebrn.com
*
*/

declare(strict_types=1);

echo "Hello, World!\n";


/**
* Books
*/
class Books
{
	public $title = "Title";
	public $price = 0;

	function __construct(string $title, int $price)
	{
		$this->title = $title;
		$this->price = $price;
	}
}



/**
* 
*/
class BookWriter
{
	
	function __construct()
	{
		# code...
	}


	public function write(Books $book) {
		echo "Title: ".$book->title."\n";
		echo "Price: ".$book->price."\n";
	}
}


class Wrong{ }

$book1 = new Books("Наполеон", 100);

$writer = new BookWriter();
$writer->write($book1);


//var_dump($book1);
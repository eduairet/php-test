<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Classes and Objects</title>
</head>

<body>
  <?php
  class Book
  {
    public $title; // var and public are basically the same
    public $author;
    private $pages;
    function __construct($title, $author, $pages)
    {
      $this->title = $title;
      $this->author = $author;
      $this->set_pages($pages);
    }
    function book_str()
    {
      $pp = $this->get_pages();
      return "<p>$this->title, written by $this->author, $pp pages.<p>";
    }
    function get_pages()
    {
      return $this->pages;
    }
    function set_pages($pages)
    {
      if ($pages > 1 && $pages % 4 == 0) {
        $this->pages = $pages;
      } else {
        throw new ErrorException("Invalid number of pages");
      }
    }
  }

  class HorrorBook extends Book
  {
    function book_str()
    {
      $pp = $this->get_pages();
      return "<p style='color: purple;'>Horror book: $this->title, written by $this->author, $pp pages 👻.<p>";
    }
  }

  $book1 = new Book('Dope shit', 'Steve O', 4);
  $book2 = new Book('Nice shit', 'Steve O', 100);
  $book2->author = 'Not Steve O';
  $book3 = new HorrorBook("It", "Stephen King", 1000);

  echo $book1->book_str();
  echo $book2->book_str();
  echo $book3->book_str();
  ?>
</body>

</html>
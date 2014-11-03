<?php

class Library
{
	//properties

	   private $books;

	   private $path;


	//methods
    public function setPath($path)
    {
    	$this->path = $path;
    }
    public function getPath()
    {
    	return $this->path;
    }
    public function getBooks()
    {
    	$this->books = File::get($this->path);
        $this->books = json_decode($this->books,true);
        return $this->books;
    }
    public function search($query)
    {
        $results = Array();
        foreach($this->books as $title => $book)
        {
            if(stristr($title, $query))
            {
                $results[$title] = $book;
            }
            else
            {
                if(self::search_book_attributes($book,$query))
                {
                    $results[$title] = $book;
                }
            }
        }
        return $results;
    }
    private function search_book_attributes($attributes,$query)
    {
        foreach($attributes as $k => $val)
        {
            if(is_array($val))
            {
                return self::search_book_attributes($val,$query);
            }

                if(stristr($val,$query))
                {
                    return true;
                }
        }

        return false;
    }
}
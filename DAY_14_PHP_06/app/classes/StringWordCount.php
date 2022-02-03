<?php
namespace App\classes;

class StringWordCount
{
    protected $givenString;
    protected $word;
    protected $character;
    protected $result;

    public function __construct($post=null)
    {
        $this->givenString = $post['given_string'];
    }

    public function index()
    {
        header('Location: pages/index.php');
    }

    public function wordCount()
    {
        $this->word = str_word_count($this->givenString);
        return $this->word;
    }

    public function characterCount()
    {
        $this->character = strlen($this->givenString);
        return $this->character;
    }
}
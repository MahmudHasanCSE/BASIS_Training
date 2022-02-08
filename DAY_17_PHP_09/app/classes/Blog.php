<?php
namespace App\classes;

class Blog
{
    protected $title;
    protected $authorName;
    protected $description;
    protected $image;
    protected $imageName;
    protected $directory;
    protected $fileName;
    protected $file;
    protected $data;
    protected $array;
    protected $array1;
    protected $array2;

    public function __construct($post=null)
    {
//        echo '<pre>';
//        print_r($post);
//        print_r($_FILES);

        if ($post)
        {
            $this->title       = $post['title'];
            $this->authorName  = $post['author_name'];
            $this->description = $post['description'];
        }
    }

    public function index()
    {
        $this->image    = $this->imageUpload();
//        echo $this->image;
//        exit();
        $this->fileName = 'db.txt';
        $this->file     = fopen('db.txt', 'a'); // creates file
        $this->data     = "$this->title, $this->authorName, $this->description, $this->image$";
//        $this->data = "";
        fwrite($this->file, $this->data); //write file
        fclose($this->file);
        return 'Data saved successfully';
    }

    protected function imageUpload()
    {
        $this->imageName = $_FILES['image']['name'];
        $this->directory = './assets/img/upload/'.$this->imageName;
        move_uploaded_file($_FILES['image']['tmp_name'], $this->directory);
        return $this->directory;
    }

    public function getAllBlogs()
    {
        $this->fileName = 'db.txt';
        $this->data     = file_get_contents($this->fileName);
        $this->array    = explode('$', $this->data);
        foreach ($this->array as $key => $value)
        {
//            echo $value;
//            echo '<br/><br/><br/>';
            $this->array1 = explode(',', $value);

            if ($this->array1[0])
            {
                //            print_r($this->array1);
                $this->array2[$key]['title']       = $this->array1[0];
                $this->array2[$key]['author']      = $this->array1[1];
                $this->array2[$key]['description'] = $this->array1[2];
                $this->array2[$key]['image']       = $this->array1[3];

            }
        }
//        echo '<pre>';
//        print_r($this->array2);
        return $this->array2;

//        echo '<pre>';
//        print_r($this->data);
//        exit();

    }
}
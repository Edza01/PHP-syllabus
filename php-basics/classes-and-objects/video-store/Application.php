<?php

class Application
{
    public object $movie;
    public array $storage;

    function __construct($movie, $storage) {
        $this->movie = $movie;
        $this->storage = $storage;
    }

    function run($choice)
    {
            switch ($choice) {
                case 0:
                    echo "Bye!";
                    die;
                case 1:
                    $this->add_movies();
                    break;
                case 2:
                    $this->rent_video();
                    break;
                case 3:
                    $this->return_video();
                    break;
                default:
                    echo "Sorry, I don't understand you..";
            }

            return $choice;
    }

    public function add_movies()
    {
        $this->storage = array($this->movie);
        return $this->storage;
    }

    public function rent_video()
    {
        foreach ($this->storage as $value)
        {
            foreach ($value as $val)
            {
                if ($this->movie->title == $val->title)
                {
                    $val->status = "unavailable";
                    return $val;
                }
            }
        }
    }

    public function return_video()
    {
        foreach ($this->storage as $value)
        {
            foreach ($value as $val)
            {
                if ($this->movie->title == $val->title)
                {
                    $val->status = "available";
                    $val->rating = $this->movie->rating;
                    return $val;
                }
            }
        }
    }
}
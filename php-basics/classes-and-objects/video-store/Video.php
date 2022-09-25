<?php

class video
{
    public $title, $status, $rating;

    public function __construct($title, $status, $rating)
    {
        $this->title = $title;
        $this->status = $status;
        $this->rating = $rating;
    }

   function lookUpVideo(): array
   {
       return [$this->title, $this->status, $this->rating];
   }
}
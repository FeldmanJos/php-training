<?php

class Chapters {

    protected $title;
    protected $text;
    protected $pagInit;

    function __construct($title, $text, $pagInit) {
        $this->title = $title;
        $this->text = $text;
        $this->pagInit = $pagInit;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getText() {
        return $this->text;
    }

    public function addTitle($title) {
        $this->title = $title;
    }

    public function addText($text) {
        $this->text = $text;
    }

    public function getPagInit() {
        return $this->pagInit;
    }

    public function addPagInit($pagInit) {
        $this->pagInit = $pagInit;
    }

}
?>


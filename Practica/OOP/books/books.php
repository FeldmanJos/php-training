<?php

class books {

    protected $nameBook;
    protected $chapterList;

    function __construct($name) {
        $this->nameBook = $name;
        $this->chapterList = array();
    }
    
    public function getName() {
        return $this->nameBook;
    }
    
    public function addChapterList(Chapters $chapter) {
        $this->chapterList[] = $chapter;
    }
    
    //
    public function index() {
        $indexList = array();
        foreach ($this->chapterList as $key => $value) {
            $indexList[] = array($value->getTitle(), $value->getPagInit());
        }
        return $indexList;
    }
    
    public function printIndex(){
        $bookIndex = $this->index();
        foreach ($bookIndex as $key => $index) {
            echo '<br>'.'<strong>'.'Title: '.'</strong>'.$index[0].' '.'<strong>'.'Page: '.'</strong>'.$index[1].'<br>';
            
        }
    }
}

?>

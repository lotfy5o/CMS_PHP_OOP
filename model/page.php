<?php
 
class Page {
    // simplified version of the active record
    public $id;
    public $title;
    public $content;

    private $dbc;


    public function __construct($dbc){
        $this->dbc = $dbc;

    }


    public function findById($id){
        

        $sql = "SELECT * FROM pages WHERE id = :id";
        $stmt =  $this->dbc->prepare($sql);
        $stmt->execute(['id' => $id]);
        $pageData = $stmt->fetch();

    //    var_dump($pageData); 

       $this->id = $pageData['id'];
       $this->title = $pageData['title'];
       $this->content = $pageData['content'];
    }
}
<?php
 
class Page {
    // simplified version of the active record
    public $id;
    public $title;
    public $content;

    public function findById($id){
        $dns = 'mysql:dbname=darwin_cms; host=127.0.0.1';
        $user = 'root';
        $password = '';

        try {
            $dbh = new PDO($dns, $user, $password);

        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
            die();
        }

        $sql = "SELECT * FROM pages WHERE id = :id";
        $stmt =  $dbh->prepare($sql);
        $stmt->execute(['id' => $id]);
        $pageData = $stmt->fetch();

    //    var_dump($pageData); 

       $this->id = $pageData['id'];
       $this->title = $pageData['title'];
       $this->content = $pageData['content'];
    }
}
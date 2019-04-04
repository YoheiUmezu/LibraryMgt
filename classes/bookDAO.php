<?php
    require_once 'connect_service.php';

    class BookAccessObject extends Database{
        public function addBook($book_ISBN, $book_name, $book_author, $book_date_added, $book_date_published, $book_publisher, $book_edition, $book_type, $book_status){
            $sql = "INSERT INTO book (book_ISBN, book_name, book_author, book_date_added, book_date_published, book_publisher, book_edition, book_type, book_status)
            VALUES ('$book_ISBN', '$book_name', '$book_author', '$book_date_added', '$book_date_published', '$book_publisher', '$book_edition', '$book_type', '$book_status')";
            $result = $this->conn->query($sql);
            if($result) {
                return $result;
            } else {
                echo $this->conn->error;
            }
        }
    public function retrieveBook(){
        $sql = "SELECT * FROM book";
        $result=$this->conn->query($sql);
        $rows = array();
        if($result){
            while($row = $result -> fetch_assoc()){
                $rows[] = $row;
            }
            return $rows;
        }
        else {
            echo $this->conn->error;
        }
    }
    public function retrieveoneBook($id){
    $sql = "SELECT * FROM book where `book_ISBN` = '$id'";
    $result=$this->conn->query($sql);
    $rows=array();
    while($row = $result->fetch_assoc()){
        $rows[] = $row;
    }
    return $rows;
    }

    public function updateBook($book_ISBN, $book_name, $book_author, $book_date_added, $book_date_published, $book_publisher, $book_edition, $book_type, $book_status){
        //$conn = connection(); we don't need to use because it has already been extended.
        $sql = "UPDATE book SET book_ISBN = '$book_ISBN' book_name = '$book_name' `book_author` = '$book_author' book_date_added = '$book_date_added' book_date_pblished = '$book_date_published'
        book_publisher = '$book_publisher' book_edition = '$book_edition' book_type = '$book_type' book_status = '$book_status'";
        $result=$this->conn->query($sql);
        $rows=array();
        while($row = $result->fetch_assoc()){
            $rows[] = $row;
        }
        return $rows; 
    }
    
    }

?>
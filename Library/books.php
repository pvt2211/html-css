<?php
session_start();
 
// Lấy danh sách sách trong session

function getAllBooks()
{
    return isset($_SESSION['books']) ? $_SESSION['books'] : array();
}
 
// Xóa sách
function deleteBook($code)
{
    $books = getAllBooks();
     
    unset($books[$code]);
     
    $_SESSION['books'] = $books;
     
    return $books;
}
 
// Hàm thêm 
function addBook($book)
{
    // Lấy danh sách sinh viên
    $books = getAllBooks();

    $books[] = $book;
     
    $_SESSION['books'] = $books;
     
    return $books;
}

//Hàm edit
function editBook($index, $book)
{
    // Lấy danh sách sinh viên
    $books = getAllBooks();
     
    // Khai báo cấu trúc lưu trữ một sinh viên
    $books[$index]['id'] = isset($book['id']) ? $book['id'] : '';
    $books[$index]['title'] = isset($book['title']) ? $book['title'] : '';
    $books[$index]['author'] = isset($book['author']) ? $book['author'] : '';
    $books[$index]['date'] = isset($book['date']) ? $book['date'] : '';
    $books[$index]['price'] = isset($book['price']) ? $book['price'] : '';
     
    // Trường hợp update

    // Cập nhật dữ liệu trong Session
    $_SESSION['books'] = $books;
     
    return $books;
}

function checkCode($code) {
    $temp = getAllBooks();
    if ($code >= 0 && $code < count($temp) && is_numeric($code) ){
        return true;
    } else {
        return false;
    }
}

function testBook(){
    $temp = getAllBooks();
    for ($i = 1; $i <= 1000; $i++) {
        $temp[$i]['title'] = $i;
        $temp[$i]['id'] = $i;
        $temp[$i]['author'] = $i;
        $temp[$i]['date'] = $i;
        $temp[$i]['price'] = $i;

        $_SESSION['books'] = $temp;
    }
}
?>
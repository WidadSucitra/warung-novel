<?php

 require_once('dbconn.php');

 require_once('lib/nusoap.php'); 

 $server = new nusoap_server();

/* Fetch 1 book data */
function fetchBookData($title){

  global $dbconn;

  $sql = "SELECT id, title, author_name, price, isbn, category FROM books where title = :title";

  // prepare sql and bind parameters
    $stmt = $dbconn->prepare($sql);

    $stmt->bindParam(':title', $title);

    // insert a row
    $stmt->execute();

    $data = $stmt->fetch(PDO::FETCH_ASSOC);

    return json_encode($data);

    $dbconn = null;

}

$server->configureWSDL('booksServer', 'urn:book');

$server->register('fetchBookData',
      array('title' => 'xsd:string'),  //parameter
      array('data' => 'xsd:string'),  //output
      'urn:book',   //namespace
      'urn:book#fetchBookData' //soapaction
      );  

$server->service(file_get_contents("php://input"));

?>
<?php 
  // Headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');

  include_once '../../config/Database.php';
  include_once '../../models/Post.php';

  // Instantiate DB & connect
  $database = new Database();
  $db = $database->connect();

  // Instantiate blog post object
  $post = new Post($db);

  // Blog post query
  $result = $post->read();
  // Get row count
  $num = $result->rowCount();

  // Check if any posts
  if($num > 0) {
    // Post array
    $mytable_arr = array();
    // $mytable_arr['data'] = array();

    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
      extract($row);

      $mytable_item = array(
        'id' => $id,
        'lname' => $lname,
        'fname' => $fname,
        'DOB' => $DOB,
        'weight' => $weight,
        'height' => $height,
        'med' => $med,
        'bad' => $bad,
        'member' => $member,
        'severe' => $severe,
        'hist' => $hist,
        'immune' => $immune
      );

      // Push to "data"
      array_push($mytable_arr, $mytable_item);
      // array_push($posts_arr['data'], $post_item);
    }

    // Turn to JSON & output
    echo json_encode($mytable_arr);

  } else {
    // No Posts
    echo json_encode(
      array('message' => 'No Posts Found')
    );
  }
<?php 
  class Post {
    // DB stuff
    private $conn;
    private $table = 'mytable';

    // Post Properties
    public $id;
    public $lname;
    public $fname;
    public $DOB;
    public $weight;
    public $height;
    public $med;
    public $bad;
    public $member;
    public $severe;
    public $hist;
    public $immune;

    // Constructor with DB
    public function __construct($db) {
      $this->conn = $db;
    }

    // Get Posts
    public function read() {
      // Create query
      $query = 'SELECT  m.id, m.lname, m.fname, m.DOB, m.weight, m.height, m.med, m.bad, m.member, m.severe, m.hist, m.immune 
                                FROM ' . $this->table . ' m
                                ORDER BY
                                  m.id DESC';
      
      // Prepare statement
      $stmt = $this->conn->prepare($query);

      // Execute query
      $stmt->execute();

      return $stmt;
    }    
}
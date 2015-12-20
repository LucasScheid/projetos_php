<?php
class ProdutoGateway {
  private static $conn;
  
  public static function setConnection(PDO $conn){
      self::$conn=$con;
  }
  
  public function find($id,$class='stdClass'){
      $sql = "select * from produto where id = '$id' ";
	  print "$sql <br>\n";
	  $result = self::$conn->query($sql);
	  return $result->fetchObject($class);
	  
  }
	
	
	




}
?>
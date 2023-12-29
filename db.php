<?php
class Database
{
    var $host="localhost";
   var $user="root";
   var $pass="";
   var $db="oop";
   var $table="persons";
   public function connect()
   {
    $conn=mysqli_connect($this->host,$this->user,$this->pass,$this->db);
    return $conn;
   }
   public function saverecords($n,$pass)
   {
    $conn=$this->connect();
    mysqli_query($conn,"insert into ".$this->table."(user_name,password)
     values('','')") or die(mysqli_error($conn));
     echo"data added successfully";
   }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Name: <input type="text" name=mm><br>
        password: <input type="text" name=password><br>
        <input type="submit" value="insert" name="sb">
       

    </form>
    <?php
    if(isset($_POST['sb']))
    {
        include "oop.php";
        $nm=$_POST['mm'];
        $pass=$_POST['password'];
        $obj = new Database();
        $obj->saverecords($nm,$pass);

    }
    ?>
</body>
</html>
<?php

 include "../class/config/config.php";

 // Class for bank table in data  : function : display - add - edit - delete

class bank{

public function display_bank(){

  global $conn; 
  
  $sql = $conn->prepare("SELECT * FROM bank");
  $sql->execute();

  return $sql->fetchAll(PDO::FETCH_OBJ);
}

public function display_oneBank($id){

  global $conn; 
  
  $sql = $conn->prepare("SELECT * FROM bank WHERE id= ?");
  $sql->execute(array($id));

  return $sql->fetchAll(PDO::FETCH_OBJ);
}

public function add_bank($bankName)
{

  global $conn;
  $sql = $conn->prepare('SELECT * FROM bank WHERE	BankName = ?');
  $sql->execute(array($bankName));
  $count = $sql->rowCount();
  if($count <= 0){
    $que = $conn->prepare('INSERT INTO bank (BankName) VALUES(?)');
    $que->execute(array($bankName));

    $row = $que->rowCount();

    if($row > 0){
      echo "<script>alert('تمت إضافة البنك بنجاح')</script>";
      echo "<script >location.href = 'bank.php';</script>"; 
    }else{
      echo "<script>alert('خطأ بإضافة اسم البنك')</script>";
    }
  }else{
    echo "<script>alert('اسم البنك موجود بالفعل')</script>";
  }
}


public function remove_bank($id)
		{
			global $conn;

			$sql = $conn->prepare('DELETE FROM bank WHERE id = ?;');
			$sql->execute(array($id));
			$row = $sql->rowCount();
			
      if($row==1){
        echo "<script>alert('تم حذف البنك بنجاح')</script>";
      }elseif($row==0){
        echo "<script>alert('حدثت مشكلة أثناء حذف البنك حاول مرةأخرى.')</script>";

      }
		}

    public function edit_bank($bankName,$id)
		{
			global $conn;
			$select = $conn->prepare('SELECT * FROM bank WHERE id = ?');
			$select->execute(array($id));
			$fetch = $select->fetchAll();

			foreach ($fetch as $key => $value) {
				$sql = $conn->prepare('UPDATE bank SET BankName = ? WHERE id  = ?');
				$sql->execute(array($bankName,$id));
				$row = $sql->rowCount();
        if($row==1){
          echo "<script>alert('تم تعديل معلومات البنك بنجاح')</script>";
        }elseif($row==0){
          echo "<script>alert('حدثت مشكلة أثناء تعديل معلومات البنك حاول مرةأخرى.')</script>";
  
        }
			}
		}




}
?>





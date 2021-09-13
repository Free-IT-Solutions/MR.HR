<?php

 include "../class/config/config.php";
//include "../config/config.php";


class basicinfo{

public function __get($property)
{
  return  $this->property;
}

public function __set($property, $value)
{
  $this->property= $value;
}


public function display_basicinfo(){

  global $conn; 
  
  $sql = $conn->prepare("SELECT * FROM basicinfo");
  $sql->execute();

  return $sql->fetchAll(PDO::FETCH_OBJ);
}

public function display_onebasicinfo($id){

  global $conn; 
  
  $sql = $conn->prepare("SELECT * FROM basicinfo WHERE id= ?");
  $sql->execute(array($id));

  return $sql->fetchAll(PDO::FETCH_OBJ);
}

public function add_basicinfo($uncode,$fullName,$maritalStatus,$visaNumber,$visaIssuer,$passportIssue,$visaExpiry,$visaIssuance,$dateofBirth,$passportExpiry,$gender,$birthplace,$passportNumber,$profession,$idCardExpiryDate)
{

  global $conn;
  $sql = $conn->prepare('SELECT * FROM basicinfo WHERE	FullName = ? OR VisaNumber=?');
  $sql->execute(array($fullName,$visaNumber));
  $count = $sql->rowCount();
  if($count <= 0){
    $que = $conn->prepare('INSERT INTO basicinfo (Uncode,FullName,MaritalStatus,VisaNumber,VisaIssuer,PassportIssue,VisaExpiry,
              VisaIssuance,DateofBirth,PassportExpiry,Gender,Birthplace,PassportNumber,Profession,IdCardExpiryDate)
               VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');
    $que->execute(array($uncode,$fullName,$maritalStatus,$visaNumber,$visaIssuer,$passportIssue,$visaExpiry,$visaIssuance,$dateofBirth,$passportExpiry,$gender,$birthplace,$passportNumber,$profession,$idCardExpiryDate));

    $row = $que->rowCount();
    if($row > 0){
      echo "<script>alert('تمت الإضافة بنجاح')</script>";
      echo "<script >location.href = 'employee.php';</script>"; 
    }else{
      echo "<script>alert('خطأ بالإضافة')</script>";
    }
  }else{
    echo "<script>alert('اسم الموظف أو رقم الفيزا موجود بالفعل')</script>";
  }
}

public function remove_basicinfo($id)
		{
			global $conn;
		/* 	session_start();
			$h_desc = 'edit client';
			$h_tbl = 'client';
			$sessionid = $_SESSION['admin_id'];
			$sessiontype = $_SESSION['admin_type']; */
			$sql = $conn->prepare('DELETE FROM basicinfo WHERE id = ?;');
			$sql->execute(array($id));
			$row = $sql->rowCount();
			
      if($row==1){
        echo "<script>alert('تم حذف الموظف بنجاح')</script>";
      }elseif($row==0){
        echo "<script>alert('حدثت مشكلة ما حاول مرةأخرى.')</script>";

      }
		}

    public function edit_basicinfo($uncode,$fullName,$maritalStatus,$visaNumber,$visaIssuer,$passportIssue,$visaExpiry,$visaIssuance,$dateofBirth,$passportExpiry,$gender,$birthplace,$passportNumber,$profession,$idCardExpiryDate,$id)
		{
			global $conn;
			$select = $conn->prepare('SELECT * FROM basicinfo WHERE id = ?');
			$select->execute(array($id));
			$fetch = $select->fetchAll();

			foreach ($fetch as $key => $value) {
				$equip = $value['stock_id'];
				$sql = $conn->prepare('UPDATE basicinfo SET Uncode = ?, FullName = ?,MaritalStatus = ?,VisaNumber = ?,VisaIssuer = ?,PassportIssue = ?,VisaExpiry = ?,
        VisaIssuance = ?,DateofBirth = ?,PassportExpiry = ?,Gender = ?,Birthplace = ?,PassportNumber = ?,Profession = ?,IdCardExpiryDate = ? WHERE id  = ?');
				$sql->execute(array($uncode,$fullName,$maritalStatus,$visaNumber,$visaIssuer,$passportIssue,$visaExpiry,$visaIssuance,$dateofBirth,$passportExpiry,$gender,$birthplace,$passportNumber,$profession,$idCardExpiryDate,$id));
				$row = $sql->rowCount();
        if($row==1){
          echo "<script>alert('تم تعديل معلومات الموظف بنجاح')</script>";
        }elseif($row==0){
          echo "<script>alert('حدثت مشكلة ما حاول مرةأخرى.')</script>";
  
        }
			
        
			}


		}




}


?>





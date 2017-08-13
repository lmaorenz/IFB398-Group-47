<html>
    <body>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    

    $ID=$_POST['ID'];
    $firstName=$_POST['firstName'];
    $surname=$_POST['surname'];
    $email=$_POST['emailReg'];
    $dob=$_POST['dob'];
    $password=$_POST['password'];
    $salt = time();
    

    
    
    try  {
        $pdo = new PDO('mysql:host=198.91.81.8;dbname=notespoo_notespool', 'notespoo_admin', 'Capstone2017');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
        $sql = 'INSERT INTO `Student`(`Student#`, `firstName`, `lastName`, `password`, `salt`, `userLevel`, `userRank`, `displayPicture`, `DoB`, `email`) VALUES (:ID, :firstName, :surname, SHA2(CONCAT(:password, :salt), 0), :salt, :level, :rank, :pic, :dob, :email)';
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':ID' , $ID);
        $stmt->bindValue(':firstName' , $firstName);
        $stmt->bindValue(':surname' , $surname);
        $stmt->bindValue(':email' , $email);
        $stmt->bindValue(':dob' , $dob);
        $stmt->bindValue(':salt' , $salt);
        $stmt->bindValue(':password' , $password);
        $stmt->bindValue(':rank' , 1);
        $stmt->bindValue(':level' , 0);
        $stmt->bindValue(':pic' , "Default");
        
	$stmt->execute(); 
    }

    catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
}
    


?>
    </body>
</html>
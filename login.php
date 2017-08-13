<?php
if (isset($_POST['login'])) {

function checkPassword($email, $password)  {
	$pdo = new PDO('mysql:host=198.91.81.8;dbname=notespoo_notespool', 'notespoo_admin', 'Capstone2017');
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = $pdo->prepare('SELECT firstName, email, password FROM Student WHERE (email = :email) and (password = SHA2(CONCAT(:password, salt), 0))');
	$sql->bindValue('email', $email);
	$sql->bindValue('password', $password);
	$sql->execute();
    $sql->setFetchMode(PDO::FETCH_ASSOC);
    $row = $sql->fetch();

	if ($sql->rowCount() > 0)  {
        session_start();
        $_SESSION['name'] = $row['firstName'];
        $_SESSION['email'] = $row['email'];
		return true;
	} else {
		return false;
	}
}
if (checkPassword($_POST['email'], $_POST['pass'])) {
					//session_start();
                    
                    
					$_SESSION['isLogged'] = true;
					
					header("Location: http://{$_SERVER['HTTP_HOST']}/notespool/dashboard.php");
					exit();
				} else {
					echo "WRONG";
					
				}
				
			}
	
		?>
 <?php
session_start();

var_dump($_POST);

$_SESSION['user']['name'] = $_POST['name'];
$_SESSION['user']['firstname'] = $_POST['firstname'];
$_SESSION['user']['company'] = $_POST['company'];
$_SESSION['user']['mail'] = $_POST['mail'];
$_SESSION['user']['adress'] = $_POST['adress'];
$_SESSION['user']['company'] = $_POST['company'];
$_SESSION['user']['structure'] = $_POST['structure'];
$_SESSION['user']['nameStructure'] = $_POST['nameStructure'];
$_SESSION['user']['rayon'] = $_POST['structure'];
$_SESSION['user']['recyclable'] = $_POST['recyclable'];
$_SESSION['user']['password'] = password_hash($_POST['password'] , PASSWORD_DEFAULT);

require_once "connect.php";
// Check if values are not empty

if (!isset($_POST['name']) ||
    !isset($_POST['firstname'])||
    !isset($_POST['company']) ||
    !isset($_POST['mail']) ||
    !isset($_POST['adress']) ||
    !isset($_POST['password'])) {
    header('Location: ../devis.php?empty=noData');
    exit;
}

// If there is values from the page devis do this sql request
if (isset($_POST['structure']) || 
    isset($_POST['nameStructure']) || 
    isset($_POST['rayon'])) {

$devis = "INSERT INTO `romainmecvromain` . `devis` 
(`devis_id` , `structure` , `structure_name` , `rayon` , `recyclable`) 
VALUES 
(NULL , :structure , :nameStructure , :rayon , :recyclable)
;";
        
        
        
$stmt = $con->prepare($devis);
$stmt -> bindValue(':structure' , $_POST['structure']);
$stmt -> bindValue(':nameStructure' , $_POST['nameStructure']);
$stmt -> bindValue(':rayon' , $_POST['rayon']);
$stmt -> bindValue(':recyclable' , $_POST['recyclable']);
$stmt->execute();
           
}





// SQL Request

$requete = "INSERT INTO 
`romainmecvromain` . `user` 
(`user_id` , `user_name` , `user_firstname` , `company` , `user_mail` , `user_password` , `adress`) 
VALUES 
(NULL , :login , :firstname , :company , :mail , :password , :adress)
;";



$stmt = $con->prepare($requete);
$stmt -> bindValue(':login' , $_POST['name']);
$stmt -> bindValue(':firstname' , $_POST['firstname']);
$stmt -> bindValue(':company' , $_POST['company']);
$stmt -> bindValue(':mail' , $_POST['mail']);
$stmt -> bindValue(':password' , $_SESSION['user']['password']);
$stmt -> bindValue(':adress' , $_POST['adress']);
$stmt->execute();




header('Location: ../checkRegister.php?page=register');



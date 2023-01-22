<?php
 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "participants";

$conn = new mysqli($servername,$username,$password,$dbname);
 if($conn->connect_error){
    die("connection failed:".$conn->connect_error);
 }

 
 if(isset($_POST['envoyer']))
 {
     $nom = $_POST['nom'];
     $prenom = $_POST['prenom'];
     $telephone = $_POST['telephone'];
     $email = $_POST['email'];

 $sql = ("INSERT INTO participants_ci (nom, prenom, telephone, email) VALUES('".$nom."', '".$prenom."', '".$telephone."', '".$email."')");
      if($conn->query($sql) === TRUE){
       
header('Location:registred.php?name='.$nom.'  '.$prenom.'');

      } else{
        echo"Error:".$sql."<br>".$conn->error;
      }
    }
      $conn->close();


?>
     



     <!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicons -->
    <link href="R.png" rel="icon">

    <!-- style.css -->
    <link rel="stylesheet" href="simplon.css">

    <title>SIMPLON.CI FORMATION</title>
</head>
<body>
    <div class="main">
        <div class="navbar">
            <div class="icon">
               <img src="R.png" alt=""> 
               <h2 class="logo">SIMPLON CI</h2>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="index.php">ACCUEIL</a></li>
                    <li><button onclick="show_hide()" id="enre">ENREGRISTREMENT</button></li>
                    <li><a href="liste.php"><button id="cons">CONSULTER</button></a></li>
                </ul>
            </div>
            
            <form class="form"   method="post" id="form_simplon">
                <h2>Enregistrement</h2>
                <input type="text" name="nom" placeholder="Entez votre nom">
                <input type="text" name="prenom" placeholder="Entez votre prenom">
                <input type="text" name="telephone" placeholder="numéro téléphone">
                <input type="email" name="email" placeholder="Enter email">
                <input type="submit" value="Enregistrer" id="soumettre" name="envoyer">

                <a href="#">Je suis déja enregistré</a>

                <div class="icons">
                    <a href="#"><ion-icon name="logo-facebook" id="fb"></ion-icon></a>
                    <a href="#"><ion-icon name="logo-instagram" id="ig"></ion-icon></a>
                    <a href="#"><ion-icon name="logo-twitter" id="tw"></ion-icon></a>
                    <a href="#"><ion-icon name="logo-linkedin" id="ln"></ion-icon></a>
                    <a href="#"><ion-icon name="logo-google" id="gl"></ion-icon></a>
                </div>
            
            </form  >
        
            
        </div>
    </div>


     <!-- javascript -->
     <script src="simplon.js"></script>
    <script src="https://unpkg.com/ionicons@6.1.1/dist/ionicons/ionicons.js"></script>

</body>
</html>
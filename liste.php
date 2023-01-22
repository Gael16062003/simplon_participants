<?php
 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "participants";

$conn = new mysqli($servername,$username,$password,$dbname);
 if($conn->connect_error){
    die("connection failed:".$conn->connect_error);
 }


$sql="SELECT * FROM participants_ci";
$result = $conn->query($sql);

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
    <link rel="stylesheet" href="liste.css">

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
                    <li><a href="index.php"><button>ENREGRISTREMENT</button></a></li>
                    <li><a href="liste.php"><button>CONSULTER</button></a></li>
                </ul>
            </div>

                <br>
                <table  class="table table-triped">
                <thead>
                    <tr>
                        <th scope="col">Nom</th>
                        <th scope="col">Prenom</th>
                        <th scope="col">Téléphone</th>
                        <th scope="col">Email</th>
                    </tr>
                        <?php 
                            while( $row= $result->fetch_assoc()){ 
                        ?>
                </thead>
                <tbody>
                        <tr>
                            <td>
                                <?php echo $row["nom"]; ?>
                            </td>
                            <td>
                                <?php echo $row["prenom"]; ?>
                            </td>
                            <td>
                                <?php echo $row["telephone"]; ?>
                            </td>
                            <td>
                                <?php echo $row["email"]; ?>
                            </td>
                        </tr>
                        
                </tbody>
                            <?php }  ?>      
                </table>
            
           
        </div>
    </div>


     <!-- javascript -->
     <script src="simplon.js"></script>
    <script src="https://unpkg.com/ionicons@6.1.1/dist/ionicons/ionicons.js"></script>

</body>
</html>
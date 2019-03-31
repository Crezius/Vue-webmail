





<?php 
            
    //Info bases
    $dbhost = "localhost";
    $dbuser = "me";
    $dbpass = "mdp";
    $db = "mail";
    $user="";
    $Liste="";
    $Message="";


    $mail = array();

    try {
        $bdd = new PDO('mysql:host=localhost;dbname='.$db.';charset=utf8', $dbuser, $dbpass);
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }


    if(isset($_GET['user'])) {
        
        $user = $_GET['user'];
        $mail = array();
        $indice=0;
        $prep = $bdd->prepare("SELECT * FROM donnee WHERE destinataire=? ORDER BY date");
        $prep->execute(array($user));


        while ($donnees = $prep->fetch()) {

            $point_fin=""; 
            $apercu = substr($donnees['message'], 0, 10);

            //echo "<p>".$apercu."</p>";

            if(strlen($donnees['message'])>10){


                $point_fin="...";

            }

            array_push($mail, array('date' => $donnees["date"], 
                                    'expediteur' =>$donnees["expediteur"], 
                                    'id' =>$donnees["id"], 
                                    'message' =>$apercu,
                                    'indice' => $indice));

            $indice++;
        }
        
        header("Content-type: application/json")
        echo json_encod($mail)
    }    
        
?>





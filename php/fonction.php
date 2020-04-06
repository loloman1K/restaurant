<?php
function AfficheIngrediantRecette($dbh)
{


  $reponse = $dbh->query('SELECT * FROM Ingrediant');


  while ($donnees = $reponse->fetch()) {


      echo "<article>
              <h3> Ingrediant : " . $donnees['nom_ingrediant'] . " </h3>


           <p> Quantite : " . $donnees['quantites_ingrediant'] . " "  . $donnees['types_ingrediant'] . "</p>


                </article>";
    }
  }






?>

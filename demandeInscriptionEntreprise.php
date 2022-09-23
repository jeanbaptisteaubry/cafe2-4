<?php // Tableau des départements français !

$departements = array();

$departements['01'] = 'Ain';
$departements['02'] = 'Aisne';
$departements['03'] = 'Allier';
$departements['04'] = 'Alpes de Haute Provence';
$departements['05'] = 'Hautes Alpes';
$departements['06'] = 'Alpes Maritimes';
$departements['07'] = 'Ardèche';
$departements['08'] = 'Ardennes';
$departements['09'] = 'Ariège';
$departements['10'] = 'Aube';
$departements['11'] = 'Aude';
$departements['12'] = 'Aveyron';
$departements['13'] = 'Bouches du Rhône';
$departements['14'] = 'Calvados';
$departements['15'] = 'Cantal';
$departements['16'] = 'Charente';
$departements['17'] = 'Charente Maritime';
$departements['18'] = 'Cher';
$departements['19'] = 'Corrèze';
$departements['2A'] = 'Corse du Sud';
$departements['2B'] = 'Haute Corse';
$departements['21'] = 'Côte d\'Or';
$departements['22'] = 'Côtes d\'Armor';
$departements['23'] = 'Creuse';
$departements['24'] = 'Dordogne';
$departements['25'] = 'Doubs';
$departements['26'] = 'Drôme';
$departements['27'] = 'Eure';
$departements['28'] = 'Eure et Loir';
$departements['29'] = 'Finistère';
$departements['30'] = 'Gard';
$departements['31'] = 'Haute Garonne';
$departements['32'] = 'Gers';
$departements['33'] = 'Gironde';
$departements['34'] = 'Hérault';
$departements['35'] = 'Ille et Vilaine';
$departements['36'] = 'Indre';
$departements['37'] = 'Indre et Loire';
$departements['38'] = 'Isère';
$departements['39'] = 'Jura';
$departements['40'] = 'Landes';
$departements['41'] = 'Loir et Cher';
$departements['42'] = 'Loire';
$departements['43'] = 'Haute Loire';
$departements['44'] = 'Loire Atlantique';
$departements['45'] = 'Loiret';
$departements['46'] = 'Lot';
$departements['47'] = 'Lot et Garonne';
$departements['48'] = 'Lozère';
$departements['49'] = 'Maine et Loire';
$departements['50'] = 'Manche';
$departements['51'] = 'Marne';
$departements['52'] = 'Haute Marne';
$departements['53'] = 'Mayenne';
$departements['54'] = 'Meurthe et Moselle';
$departements['55'] = 'Meuse';
$departements['56'] = 'Morbihan';
$departements['57'] = 'Moselle';
$departements['58'] = 'Nièvre';
$departements['59'] = 'Nord';
$departements['60'] = 'Oise';
$departements['61'] = 'Orne';
$departements['62'] = 'Pas de Calais';
$departements['63'] = 'Puy de Dôme';
$departements['64'] = 'Pyrénées Atlantiques';
$departements['65'] = 'Hautes Pyrénées';
$departements['66'] = 'Pyrénées Orientales';
$departements['67'] = 'Bas Rhin';
$departements['68'] = 'Haut Rhin';
$departements['69'] = 'Rhône-Alpes';
$departements['70'] = 'Haute Saône';
$departements['71'] = 'Saône et Loire';
$departements['72'] = 'Sarthe';
$departements['73'] = 'Savoie';
$departements['74'] = 'Haute Savoie';
$departements['75'] = 'Paris';
$departements['76'] = 'Seine Maritime';
$departements['77'] = 'Seine et Marne';
$departements['78'] = 'Yvelines';
$departements['79'] = 'Deux Sèvres';
$departements['80'] = 'Somme';
$departements['81'] = 'Tarn';
$departements['82'] = 'Tarn et Garonne';
$departements['83'] = 'Var';
$departements['84'] = 'Vaucluse';
$departements['85'] = 'Vendée';
$departements['86'] = 'Vienne';
$departements['87'] = 'Haute Vienne';
$departements['88'] = 'Vosges';
$departements['89'] = 'Yonne';
$departements['90'] = 'Territoire de Belfort';
$departements['91'] = 'Essonne';
$departements['92'] = 'Hauts de Seine';
$departements['93'] = 'Seine St Denis';
$departements['94'] = 'Val de Marne';
$departements['95'] = 'Val d\'Oise';
$departements['97'] = 'DOM';
$departements['971'] = 'Guadeloupe';
$departements['972'] = 'Martinique';
$departements['973'] = 'Guyane';
$departements['974'] = 'Réunion';
$departements['975'] = 'Saint Pierre et Miquelon';
$departements['976'] = 'Mayotte';

?>

<html>
    <head>
        <title>
            Une page
        </title>
    </head>
    <body>
        <H1>Demande d'inscription d'une entreprise</H1>
        <form action="reponseInscriptionEntreprise.php" method="GET">
            <H3>Information de l'entreprise</H3>
        <table>

           <tr> <td> Dénomination sociale </td><td> <input type="text" name="denominationSociale"></td></tr>
            <tr> <td> Raison sociale </td><td> <input type="text" name="raisonSociale"></td></tr>
            <tr> <td>  Adresse</td> <td> <input type="text" name="Adresse"></td></tr>
            <tr>  <td>  CP </td><td> <input type="text" name="CP"></td></tr>
            <tr>  <td>   Ville </td><td> <input type="text" name="Ville"><br></tr>
            <tr>  <td>    Mail contact</td> <td> <input type="email" name="mailContact"></td></tr>


        </table>
            <H3>Gérant de l'entreprise</H3>
            <table>
                nom / prénom / mail / date naissance / lieu de naissance / département
                (combo) / sexe (radio) / centres d’intérêts (check) / Acceptation RGPD

                <tr> <td> Nom  </td><td> <input type="text" name="nomGerant"></td></tr>
                <tr> <td> Prénom  </td><td> <input type="text" name="prenomGerant"></td></tr>
                <tr> <td> Date de naissance </td><td> <input type="date" name="dateNaissanceGerant"></td></tr>
                <tr> <td> Lieu de naissance </td>
                    <td><input type="text" name="lieuNaissanceGerant">

                    </td>
                </tr>
                <tr> <td> département </td>
                    <td>
                        <select name="departementNaissanceGerant">
                            <?php
                            foreach($departements as $num => $nomDepart  )
                                echo "<option value='$num'>$num - $nomDepart</option>";
                            ?>
                            <!--option value="25">Doubs</option>
                            <option value="39">Jura</option>
                            <option value="90">Territoire de Belfort</option-->
                        </select>
                    </td>
                </tr>
                <tr>
                    <td> Sexe </td>
                    <td>
                        Homme <input type="radio" name="sexe" value="H">
                        Femme <input type="radio" name="sexe" value="F" checked>
                    </td>
                </tr>
                <tr> <td> Centres d’intérêts </td>
                    <td>
                        <?php
                        //Etablissement de la connexion à la base de données
                        $bdd = new PDO('mysql:host=127.0.0.1;dbname=cafe2;charset=utf8', 'root', '');

                        //Interrogation de la base de donnée
                        $reqBDD = $bdd->query('SELECT * FROM centreinteret');
                        $tableCentre = $reqBDD->fetchAll();

                        foreach ($tableCentre as $ligneInteret) {
                            echo "<input type='checkbox' name='centre[]' value='$ligneInteret[id]'>$ligneInteret[libelle]<br>";
                        }
                        ?>
                        <!--input type="checkbox" name="centre" value="sport">Sport<br>
                        <input type="checkbox" name="centre" value="livre">Livre<br>
                        <input type="checkbox" name="centre" value="cine">Cinema<br-->

                    </td></tr>
                <tr> <td> Acceptation RGPD </td><td> J'accepte les conditions : <input type="checkbox" name="RGPD" value="RGPDOK"> OUI </td></tr>
                <tr>    <td>   <input type="submit" name="button_envoyer" value ="Envoyer"></td></tr>
            </table>
        </form>
    </body>
</html>

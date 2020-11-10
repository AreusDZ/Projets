

<html lang=fr>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>


<?php 
    function tableau($data){
  ?>   
  
   
  <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <table class="table table-striped table-dark">
                    <thead>
                        <tr>
                            <th>no_emps</th>
                            <th>nom</th>
                            <th>prénom</th>
                            <th>emploi</th>
                            <th>embauche</th>
                            <?php 
                            
                                if($_SESSION['profil']=='administrateur') {
                                
                            ?>
                            <th>salaire</th>
                            <th>commission</th>
                                <?php 
                                
                                    }else{

                                    }
                                
                                ?>
                            <th>num service</th>
                            <th>num supérieur</th>
                            <?php 
                            
                            if($_SESSION['profil']=='administrateur') {
                            
                        ?>
                            <th>supprimer</th> 
                            <th>modifier</th>
                              <?php 
                                
                                    }else{

                                    }
                                
                                ?>
                           
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php
                                foreach ($data as $key => $value) {
                                    foreach ($value as $k => $v) {
                                      if($_SESSION['profil']=='utilisateur' && !($k=='salaire' || $k=='commission')){

                                           echo "<td>$v</td>";

                                      }elseif($_SESSION['profil']=='administrateur'){
                                            echo "<td>$v</td>";
                                      }
                                       
                                       
                                    }
                                     
                            ?>
                                    <td>
                                    <?php if(EmployeMysqliDAO::employeExist($value['no_emp'])==false && $_SESSION['profil']=='administrateur'){ ?><a href='../controleurs/modif_employes.php?action=delete&no_emp=<?php echo $value['no_emp']; ?>'> 
                                    <button type='submit' class='btn btn-primary'>Supprimer</button><?php } ?>
                                    </a>
                                    </td>

                                    <td>
                                       <?php if($_SESSION['profil']=='administrateur') {?>
                                    <a href='../formulaire_employes2.php?action=modify&no_emp=<?php echo $value['no_emp'];?>'> 
                                    <button type='submit' class='btn btn-danger'>Modifier</button>
                                    </a> <?php 
                                       
                                            }else{
                                                
                                            }
                                         

                                       ?>
                                    </td>
                                      
                                  
                        </tr>
                            <?php
                            } 
                            
                            ?>
                    </tbody>
                </table>
            </div>
            <div>
                <input type="submit" class="btn btn-primary" onclick="window.location.href='../formulaire_employes2.php'" value="+ Ajouter" />
            </div>
            <div style="margin-left: 5px;">
                <a class="btn btn-danger w-30" href="../classes/disConnect.php">Déconnexion</a>
            </div>
        </div>
    </div>

   <?php }?>





</html>
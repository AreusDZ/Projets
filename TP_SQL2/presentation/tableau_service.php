

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
                            <th>noserv</th>
                            <th>service</th>
                            <th>ville</th>
                            <th>supprimer</th>
                            <th>modifier</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php
                                foreach ($data as $value) {
                                   
                                        echo "<td>".$value->getNoserv()."</td>"; // pareil pour les autres 
                                        echo "<td>".$value->getService()."</td>";
                                        echo "<td>".$value->getVille()."</td>";
                                        
                            ?>
                                    <td>
                                    <?php if(ServiceMysqliDAO::serviceExist($value->getNoserv())==false){ ?><a href='../controleurs/modif_service.php?action=delete&noserv=<?php echo $value['noserv']; ?>'>
                                    <button type='submit' class='btn btn-primary'>Supprimer</button><?php }?> 
                                    </a>
                                    </td>

                                    <td>
                                    <a href='../formulaire_service.php?action=modify&noserv=<?php echo $value->getNoserv();?>'> 
                                    <button type='submit' class='btn btn-danger'>Modifier</button>
                                    </a>
                                    </td>
                        </tr>
                            <?php
                            } 
                            
                            ?>
                    </tbody>
                </table>
                
            </div>
            <div>
                <input type="submit" class="btn btn-primary" onclick="window.location.href='../formulaire_service.php'" value="+ Ajouter" />
            </div>
            <div style="margin-left: 5px;">
                <a class="btn btn-danger w-30" href="classes/disConnect.php">Déconnexion</a>
            </div>
        </div>
    </div>

       <?php }?>

  



</html>
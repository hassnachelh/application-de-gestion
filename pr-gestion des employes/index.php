<?php
include('includes/header.php');
include('database/fonction.php');
$res= emp_get($con);


?>

    <div class="container">
        <div class="row">
            <div class="col-md-9 mx-auto mt-4">
                <div class="card ">
                    <?php 
                    if( isset($_GET['message']) && $_GET['message']=="success"){
                            
                        echo "<div class='alert alert-success m-4' role='alert'>Employe ajouté avec succés</div>";
                         }
                    elseif( isset($_GET['message']) && $_GET['message']=="updated"){
                        echo "<div class='alert alert-warning m-4' role='alert'>Employe modifie avec succés</div>";
                    }
                    elseif( isset($_GET['message']) && $_GET['message']=="delet"){
                        echo "<div class='alert alert-warning m-4' role='alert'>Employe supprime avec succés</div>";
                    }
               
                     ?>
                    <div class="card-body">
                    <table  class="table">
                            <thead>
                                <tr>
                                    <th >NOM</th>
                                    <th >PRENOM</th>
                                    <th >AGE</th>
                                    <th >SERVICE</th>
                                    <th >MATRICULE</th>
                                    <th >ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while($row=$res->fetch_assoc()):?>
                                <tr>
                                    <td ><?php echo $row['nom']; ?></td>
                                    <td><?php echo $row['prenom']; ?></td>
                                    <td><?php echo $row['age']; ?></td>
                                    <td><?php echo $row['service']; ?></td>
                                    <td><?php echo $row['matricule']; ?></td>
                                    <td>
                                        <a href="update.php?id=<?php echo $row['id']?>" class="btn btn-warning"><i class="fa-sharp fa-solid fa-pencil"></i></a>
                                        <a href="delete.php?id=<?php echo $row['id']?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                                    </td>
                                </tr>
                                <?php endwhile ?>
                            </tbody>
                        </table>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
include('includes/footer.php');
?>

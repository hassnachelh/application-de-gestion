<?php include('includes/header.php');
 include('database/database.php');
include('database/fonction.php');
$id=$_GET['id'];
$res=get_emp_by_id($con,$id);
$row=$res->fetch_assoc();
if(isset($_POST['submit'])):
   
     $errors=[];
    
    $nom=htmlentities(trim($_POST['nom']));
    $prenom=htmlentities(trim($_POST['prenom']));
    $age=htmlentities(trim($_POST['age']));
    $service=htmlentities(trim($_POST['service']));
    $matricule=htmlentities(trim($_POST['matricule']));
    if(empty($nom)):
        $errors='veuillez entrer le nom!';
    elseif(empty($prenom)):
        $errors='veuillez entrer le prenom!';
    elseif(empty($age)):
        $errors='veuillez entrer l\'age!';
    elseif(empty($service)):
        $errors='veuillez entrer le service!';
    elseif (empty($matricule)):
        $errors='veuillez entrer le matricule!';
    else:
        $values=array(
            'nom'=>$nom,
            'prenom'=>$prenom,
            'age'=>$age,
            'service'=>$service,
            'matricule'=>$matricule,
        );    
         if(emp_update($con,$id,$values)==true){
        
           redirect('index.php?message=updated');
          }
       
       
       
    endif;
     
endif;

?>

<div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto mt-4">
                <div class="card ">
                    <h3 class="card-title text-center p-3">Modifier un employe</h3>
                    <hr>
                    <?php 
                    if(!empty($errors)):
                
                    echo "<div class='alert alert-danger' role='alert'>$errors</div>";
                    endif; 
                    
                    ?>
                    <div class="card-body">
                        <form action="update.php?id=<?php echo $row['id']?>" method="post">
                            <div class="from-group">
                                <label for="nom" class="p-2">Nom</label>
                                <input type="text" class="form-control" placeholder="Nom" name="nom" id="nom" value="<?php echo isset($row['nom']) ? $row['nom']:'';?>">
                            </div>
                            <div class="from-group">
                                <label for="prenom" class="p-2">Prenom</label>
                                <input type="text" class="form-control" placeholder="Prenom" name="prenom" id="prenom" value="<?php echo isset($row['prenom']) ?$row['prenom']:'';?>">
                            </div>
                            <div class="from-group">
                                <label for="age" class="p-2">Age</label>
                                <input type="number" class="form-control" placeholder="age" name="age" id="age" value="<?php echo isset($row['age']) ? $row['age']:'';?>">
                            </div>
                            <div class="from-group">
                                <label for="service" class="p-2">Service</label>
                                <input type="text" class="form-control" placeholder="Service" name="service" id="service" value="<?php echo isset($row['service']) ? $row['service']:'';?>">
                            </div>
                            <div class="from-group">
                                <label for="matricule" class="p-2">Matricule</label>
                                <input type="text" class="form-control" placeholder="Matricule" name="matricule" id="matricule" value="<?php echo isset($row['matricule']) ? $row['matricule']:'';?>">
                            </div>
                            <div class="from-group p-4 text-center">
                                <button type="submit" class="btn btn-primary px-5" name="submit" >
                                    Valide
                                </button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
</div>

<?php include('includes/footer.php');?>
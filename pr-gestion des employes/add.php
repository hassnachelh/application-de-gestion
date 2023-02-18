<?php include('includes/header.php');
 include('database/database.php');
include('database/fonction.php');
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
         if(emp_insert($con,$values)==true){
        
           redirect('index.php?message=success');
          }
       
       
       
    endif;
     
endif;

?>

<div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto mt-4">
                <div class="card ">
                    <h3 class="card-title text-center p-3">Ajouter un employe</h3>
                    <hr>
                    <?php 
                    if(!empty($errors)):
                
                    echo "<div class='alert alert-danger' role='alert'>$errors</div>";
                    endif; 
                    
                    ?>
                    <div class="card-body">
                        <form action="add.php" method="post">
                            <div class="from-group">
                                <label for="nom" class="p-2">Nom</label>
                                <input type="text" class="form-control" placeholder="Nom" name="nom" id="nom" value="<?php echo isset($_POST['nom']) ? $_POST['nom']:'';?>">
                            </div>
                            <div class="from-group">
                                <label for="prenom" class="p-2">Prenom</label>
                                <input type="text" class="form-control" placeholder="Prenom" name="prenom" id="prenom" value="<?php echo isset($_POST['prenom']) ? $_POST['prenom']:'';?>">
                            </div>
                            <div class="from-group">
                                <label for="age" class="p-2">Age</label>
                                <input type="number" class="form-control" placeholder="age" name="age" id="age" value="<?php echo isset($_POST['age']) ? $_POST['age']:'';?>">
                            </div>
                            <div class="from-group">
                                <label for="service" class="p-2">Service</label>
                                <input type="text" class="form-control" placeholder="Service" name="service" id="service" value="<?php echo isset($_POST['service']) ? $_POST['service']:'';?>">
                            </div>
                            <div class="from-group">
                                <label for="matricule" class="p-2">Matricule</label>
                                <input type="text" class="form-control" placeholder="Matricule" name="matricule" id="matricule" value="<?php echo isset($_POST['matricule']) ? $_POST['matricule']:'';?>">
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
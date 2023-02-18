<?php
   include('database/database.php')
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gestion Employes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

</head>
<body class="bg-primary">
<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
  <a class="navbar-brand p-3 fs-4 fst-italic">Gestion de Employe</a>
  <form class=" justify-content-end m-4" >
    
    <a class="btn btn-outline-success me-2" role="button" href="index.php">Accueil</a>
    <a class="btn btn-outline-danger"  href="add.php" role="button">Ajouter</a>
    
  
  </form>
  </div>
</nav>
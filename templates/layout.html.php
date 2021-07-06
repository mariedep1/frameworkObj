<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titreDeLaPage ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php?controller=home&task=index">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <?php //if(!$user){?>
<!--         
        <li class="nav-item">
          <a class="nav-link btn btn-success text-white"  href="index.php?controller=user&task=signIn">Connexion</a>
        </li>
        <li class="nav-item">
            <a class="nav-link btn btn-info"  href="index.php?controller=user&task=signUp">Inscription</a>  
        </li> -->
        <?php// }else{?>
        <!-- <li class="nav-item">
            <a class="nav-link btn btn-danger text-white"  href="index.php?controller=user&task=signOut">Déconnexion</a>  
        </li>         -->
        <?php //} ?>

       
      </ul>
    </div>

   
  
  </div>
</nav>
    
    <?php echo $contenuDeLaPage ?>  



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
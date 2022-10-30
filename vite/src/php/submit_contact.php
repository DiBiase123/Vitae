<?php
// Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur

// if (isset($_FILES['screenshot']) && $_FILES['screenshot']['error'] == 0)
// {
//         // Testons si le fichier n'est pas trop gros
//         if ($_FILES['screenshot']['size'] <= 1000000)
//         {
//                 // Testons si l'extension est autorisée
//                 $fileInfo = pathinfo($_FILES['screenshot']['name']);
//                 $extension = $fileInfo['extension'];
//                 $allowedExtensions = ['jpg', 'jpeg', 'gif', 'png'];
//                 if (in_array($extension, $allowedExtensions))
//                 {
//                         // On peut valider le fichier et le stocker définitivement
//                         move_uploaded_file($_FILES['screenshot']['tmp_name'], 'uploads/' . basename($_FILES['screenshot']['name']));
//                         echo "L'envoi a bien été effectué !";
//                 }
//                 else
//                 {
//                     echo("file corrotto");
//                     return;
//                 }
//         }
// }


        // if (
        //     (!isset($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
        //     || (!isset($_POST['message']) || empty($_POST['message']))
        //     || empty($_FILES['screenshot']['name'])
        // )
        // {
        //     echo('Il faut un email et un message valides pour soumettre le formulaire.');
        //     return;
        // }
        
?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit_contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/rains.css">
        
</head>

<?php include './header.php'; ?>

<style>
 .bg-secondary 
 {
  --bs-bg-opacity: 0.25;
  background-color: rgba(var(--bs-secondary-rgb), var(--bs-bg-opacity)) !important;
  background-image: var(--bs-gradient); 
  background: #26CAEC;
    background: -webkit-linear-gradient(top right, #5966f3, #FFFFFF);
    background: -moz-linear-gradient(top right, #5966f3, #FFFFFF);
    background: linear-gradient(to bottom left, #5966f3 25.7%, #FFFFFF );
}


.inner-header {
  height:20vh;
  width:100%;
  margin: 0;
  padding: 0;
}

.content {
  position:relative;
  height:80vh;
  text-align:center;
  background-color: white;

}

.waves {
  position:relative;
  width: 100%;
  height:15vh;
  margin-top: 150px;
  margin-bottom:-7px; /*Fix for safari gap*/
  min-height:100px;
  max-height:150px;
}

</style>
<body>
     
<!-- +++ SECTION WAVE +++ -->
<section>
      <div class="header">
      <h1 class="p-3">Message bien reçu !</h1>

        <!-- +++ Content before waves +++ -->
        <div class="inner-header flex mt-4">

            <section class="bg-secondary shadow-3 p-1 rounded">
            <div class="card p-2">
                <h5 class="card-title text-dark p-2">Rappel de vos informations</h5>
                <div class="card-body p-2"> 
                    <p class="card-text text-start"><b>Prenom</b> : <?php echo $_POST['prenom']; ?></p>
                    <p class="card-text text-start"><b>Email</b> : <?php echo $_POST['email']; ?></p>
                    <p class="card-text text-start"><b>Message</b> : <?php echo htmlspecialchars($_POST['message']); ?></p>
                    <p class="card-text text-start"><b>Screenshoot</b> : <?php echo $_FILES['screenshot']['name']; ?></p>
                </div>
            </div>
            </section>
        </div>
        <!-- --- Content before waves --- -->
       

        <!-- +++ Waves Container +++ -->
          <div class="mt-5">
            <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
            <defs>
            <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
            </defs>
            <g class="parallax">
            <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
            <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
            <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
            <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
            </g>
            </svg>
          </div>
        <!-- --- Waves end --- -->

      </div>
      <!--Header ends-->

        <!--Content starts-->
          <!-- <div class="content flex">
            <p>By.Goodkatz | Free to use </p>
          </div> -->
        <!--Content ends-->
    </section>
    <!-- --- SECTION WAVE --- -->
</body>
</html>
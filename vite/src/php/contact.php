<?php include 'header.php';?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> 
</head>

<style>
 .contact
 {
    width: 100%;
    height: 100wh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
 }



</style>


<body>
  <form class="form p-4 contact " action="./submit_contact.php" method="POST" enctype="multipart/form-data">
    
    <div class="mb-3 border border-2 rounded-3  p-2 shadow">
    <h2 class="text-primary text-center display-2"> Contact </h2>
        <label for="email" class="form-label ms-3">Email address</label>
        <input type="email" class="form-control" id="email" aria-describedby="email" name="email" placeholder="Ex: user@gmail.com">
        <h6><div id="email" class="form-secondary text-center">We'll never share your email with anyone else.</div></h6>
        <br/>

    <div class="mb-3">
        <label for="message" class="form-label">Votre message</label>
        <textarea placeholder="Exprimez vous" name="message" id="message" cols="30" rows="10"></textarea>
    </div>

    <!-- Ajout champ d'upload ! -->
        <div class="mb-3">
              <label for="screenshot" class="form-label">Votre capture d'écran</label>
            <div class="input-group " >
                <input  type="file" class="form-control" id="screenshot" name="screenshot" accept=".jpg, .png, .bmp" />
                <label class="btn btn-danger " for="effacer1" ;> 

                <svg xmlns="http://www.w3.org/2000/svg" width="1.5em"  fill="currentColor" class="bi bi-file-earmark-x" viewBox="0 0 16 16">
                    <path d="M6.854 7.146a.5.5 0 1 0-.708.708L7.293 9l-1.147 1.146a.5.5 0 0 0 .708.708L8 9.707l1.146 1.147a.5.5 0 0 0 .708-.708L8.707 9l1.147-1.146a.5.5 0 0 0-.708-.708L8 8.293 6.854 7.146z"/>
                    <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/>
                </svg>
                </label>
            </div>
        </div>
      <!-- UPLOAD FIN ++ champ d'upload ! -->    


        <div>
            <br>
            <button type="submit" class="btn btn-primary" onclick="myFunction()">Submit</button>
        </div>
        </div>
  </form>


 

<script>
function myFunction() {
  // Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
    if (!isset($_FILES['screenshot']) && $_FILES['screenshot']['error'] == 1)
    {
        echo("errore");
    }
}
</script> 


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="style.css">
    </head>
    <title>Connexion</title>
 <body>

<div id="in"> 
  <form action="" id="form">
 <h2>Connexion</h2>
  <p>Votre nom:</p>
 <input type="text" id="nom" placeholder="veuillez entrez votre nom">
  <p>Votre Mot de passe</p>
  <input type="password" placeholder="votre mot de passe ici" id="mdp">
<br><br>
  <input type="submit" value="connexion">
  <input type="reset" value="tout effacer">
  <br><br>
</form>

<script>

    nom = document.getElementById('nom');
    mdp = document.getElementById('mdp');



form.onsubmit =(e)=>{

    if(nom.value =="" || mdp.value == ""){
        alert("VEUILLEZ REMPLIR TOUS LES CHAMPS");

    }


    if(nom.value =="dorval" && mdp.value == "123"){
    e.preventDefault();

   location.href="accueil.php";
    
    }else if(nom.value !="dorval" || mdp.value != "123"){
      alert('IDENTIFIENT CORRECT')
    }else if(nom.value =="" || mdp.value == ""){
        alert("VEUILLEZ REMPLIR TOUS LES CHAMPS");

    }


}


</script>




     
</div>
 </body>
 </html>
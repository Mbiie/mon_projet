<html>
    <head>
        <meta charset="utf-8">
        <!--<link rel="stylesheet" type = "text/css"  href="assets/style.css">-->

    </head>
    <body>
        <fieldset id ="coloro">
            <h1 class = "titre-p"  >Formulaire de contact</h1>
            <form action="recup.php" method = "POST">
                <div class="color">
                    <label for="nom">Votre nom</label>
                    <input type="text" name="nom" class="input">
                </div>
                <div class="color">
                    <label for="prenom">Votre prénom</label>
                    <input type="text" name="prenom">
                </div>
                <div class="color">
                    <label for ="email">Votre mail</label>
                    <input type ="text" name="email">
                </div>
                <div>
                    <!--<input placeholder = "Valider votre formulaire" name = "votre formulaire">-->

                    <button type = "submit" class="but"  >Envoyer</button>
                </div>

            </form>
        </fieldset>

        <fieldset>

        </fieldset>
    </body>
</html>
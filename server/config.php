<!--
   Copyright 2015 TheShark34

   This file is part of S-Update.

   S-Update is free software: you can redistribute it and/or modify
   it under the terms of the GNU Lesser General Public License as published by
   the Free Software Foundation, either version 3 of the License, or
   (at your option) any later version.

   S-Update is distributed in the hope that it will be useful,
   but WITHOUT ANY WARRANTY; without even the implied warranty of
   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
   GNU Lesser General Public License for more details.

   You should have received a copy of the GNU Lesser General Public License
   along with S-Update.  If not, see <http://www.gnu.org/licenses/>.
-->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>S-Update Configuration</title>

        <!-- Bootstrap -->
        <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <link href="http://theshark34.github.io/S-Update-Server/style.css" rel="stylesheet">
    </head>

    <body>
        <div class="fulldiv classic">
            <img src="http://theshark34.github.io/S-Update-Server/logo.png" />

            <h1>Configuration</h1>
            <br />
            <p class="marged-paragraph">
                Bienvenue dans la configuration de votre S-Update. Si vous voyez ce message, c'est que l'installation s'est bien passée. Super !
                <br/>
                Nous allons configurer la page de redirection, quand on tombera sur la page du serveur, elle redirigera vers l'adresse que vous donnerez. Vous pourrez la changer a tout moment, tout est dans le dossier protected/. Comme son nom l'indique il sera protégé dès que vous aurez aussi configuré le mot de passe et le pseudo sur cette page.
                <br />
                Alors, qu'est-ce que vous attendez =) !

                <br /><br /><br />

                <form method="post" action="protected/config.php">
                    <label for="username">Pseudo</label> : <input class="text-field" type="text" name="username" id="username" required/>
                    <br />
                    <label for="password">Mot de Passe</label> : <input class="text-field" type="password" name="password" id="password" required/>
                    <br /><br />
                    <label for="redirecturl">Acceuil de votre Site</label> : <input class="text-field" type="text" name="redirecturl" id="redirecturl" required/>
                    <br /><br />
                    <input class="submit-button" type="submit" value="Appliquer" />
                </form>
            </p>
        </div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    </body>
</html>
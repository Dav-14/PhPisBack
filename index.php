<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Mon super site</title>
    </head>
 
    <body> 
    <?php include("src/php/pageStructure/header.php"); ?>
    <!-- Le corps -->
    
    <div id="corps">
        <h1>Mon super site</h1>
        
        <p>
            Bienvenue sur mon super site !<br />
            Vous allez adorer ici, c'est un site génial qui va parler de... euh... Je cherche encore un peu le thème de mon site. :-D
        </p>
    </div>

    <div>
        <a href="src/php/formulaire/form.php">Faille XSS formulaire</a><br />  
        <a href="src/php/formulaire/form_upload.php">Upload file</a><br />   
        <a href="src/php/formulaire/form_authentification.php">Sign in</a><br />
        <a href="src/php/formulaire/minichat.php">Minichat</a><br />  
        <a href="src/php/blog/blog.php">BLOG</a><br />  

        
    </div>
    <!-- Le pied de page -->
    
    </body>
</html>

<?php
session_start();
$r = str_replace('index.php', '', $_SERVER['SCRIPT_FILENAME']);
define('ROOT', str_replace('index.php', '', $_SERVER['SCRIPT_FILENAME'])); /*defini le chemin du server*/
//ROOT = str_replace(" ", "%20", ROOT);

//require ROOT.'Views/Template/header.php';
require ROOT.'View/Template/header.php';
echo ROOT;
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = trim($uri, '/');
$segments = array_filter(explode('/', $uri));

echo 'url:'.$uri.'*';
foreach($uri as $s)
{
    echo $s.'|';
}

// define('REQ_TYPE', $segments[0] ?? Null);
// define('REQ_TYPE_ID', $segments[1] ?? Null);
// define('REQ_ACTION', $segments[2] ?? Null);

//note for tomorrow: create a view in the template to send info to this

if (strpos($_SERVER['REQUEST_URI'], 'connectionForm')  != false) {
    require ROOT.'Controller/loginController.php';
}


if (strpos($_SERVER['REQUEST_URI'], 'listeComptes')  != false) {
    require ROOT.'Controller/AccountController.php';
}

if (strpos($_SERVER['REQUEST_URI'], 'ListeProduit')  != false) {
    require ROOT.'Controller/ProduitController.php';
}

if (strpos($_SERVER['REQUEST_URI'], 'listeCommandes')  != false) {
    require ROOT.'Controller/CommandeController.php';
}

if (strpos($_SERVER['REQUEST_URI'], 'connectionRequest')  != false) {
    require ROOT.'Controller/loginController.php';
}


// if (!count($segments) or $segments[0] == 'index'){
//     $segments[0] = 'basePage';
// }


// if (strpos($_SERVER['REQUEST_URI'], 'listeArticle')  != false) {
    
//     require ROOT.'app/controller.php'; 
//     require ROOT.'app/model.php'; 
//     $sa = new inventaire();
//     $sa->ListeProduits();
//     require ROOT.'Views/AjoutArticleView.php';

// }

// if (strpos($_SERVER['REQUEST_URI'], 'listeClient')  != false) {
    
//     require ROOT.'app/UserModel.php';
//     $sa = new comptesLists();
//     $sa->ListeCompte();
//     require ROOT.'app/ControllerAjoutClient.php';
    
// }


// if (strpos($_SERVER['REQUEST_URI'], 'ajoutArticle')  != false) {
//     require ROOT.'DBScript/bdd.php';
//     require ROOT.'app/controller.php'; 
//     require ROOT.'app/model.php'; 
//     require ROOT.'app/ControllerAjoutArticle.php';
//     $sa = new inventaire();
//     $sa->ListeProduits();
// }

?>
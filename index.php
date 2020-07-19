<?php
session_start();
require('controller/Administration.php');

if (isset($_SESSION['messages'])) {
    unset($_SESSION['messages']);
}

if (isset($_SESSION['user'])) {
    getModules();
    if (!empty($_GET['action'])) {
        extract($_GET);
        if ($action == 'role') {
            if (!empty($_POST)) {
                $data = $_POST;
                $roles = new roles($data);
                //var_dump($roles); die;
                $res = insert($roles);
                //$res = addData($data, 'roles');

                //if ($res['code'] != 1) {
                $_SESSION['messages'] = $res;
                // }
            }
            require_once("view/roleView.php");
        } elseif ($action == 'module') {
            if (!empty($_POST)) {
                $data = $_POST;
                $res = addData($data, 'module');

                if ($res != 1) {
                    $_SESSION['messages'] = $res;
                }
            }
            require_once("view/moduleView.php");
        } elseif ($action == 'permission') {
            if (!empty($_POST)) {
                $data = $_POST;
                var_dump($data);
                die();
                $data['action_url'] = setActionUrl($data['name']);
                $res = addData($data, 'actions');

                if ($res != 1) {
                    $_SESSION['messages'] = $res;
                }
            }
            require_once("view/permissionView.php");
        }  elseif ($action == 'pays') {//View Pays
            if (!empty($_GET['modif']) && ctype_digit($_GET['modif'])) { //Modification d'un PAYS
                if (!empty($_POST)) {
                    $data = $_POST;
                    $res = Manager::updateData($data, 'pays', 'id_pays', $_GET['modif']);
                    if ($res['code'] = 200) {
                        header('Location: index.php?action=pays');
                    }
                }
            } else { // Ajout Pays
                if (!empty($_POST)) {
                    $data = $_POST;
                    $pays = new pays($data);
                    $res = insert($pays);

                    $_SESSION['messages'] = $res;
                }
            }
            require_once("view/paysView.php");
        } elseif ($action == 'ville') {//View ville
            if (!empty($_GET['modif']) && ctype_digit($_GET['modif'])) { //Modification d'une Ville
                if (!empty($_POST)) {
                    $data = $_POST;
                    $res = Manager::updateData($data, 'ville', 'id_ville', $_GET['modif']);
                    if ($res['code'] = 200) {
                        header('Location: index.php?action=ville');
                    }
                }
            } else { // Ajout Ville
                if (!empty($_POST)) {
                    $data = $_POST;
                    $ville = new ville($data);
                    $res = insert($ville);

                    $_SESSION['messages'] = $res;
                }
            }
            require_once("view/villeView.php");
        } elseif ($action == 'tarif') {//View ville
            if (!empty($_GET['modif']) && ctype_digit($_GET['modif'])) { //Modification d'un Tarif
                if (!empty($_POST)) {
                    $data = $_POST;
                    $res = Manager::updateData($data, 'tarif', 'id_tarif', $_GET['modif']);
                    if ($res['code'] = 200) {
                        header('Location: index.php?action=tarif');
                    }
                }
            } else { // Ajout Tarif
                if (!empty($_POST)) {
                    $data = $_POST;
                    $tarif = new tarif($data);
                    $res = insert($tarif);

                    $_SESSION['messages'] = $res;
                }
            }
            require_once("view/tarifView.php");
        } elseif ($action == 'agence') {//View Agence
            if (!empty($_GET['modif']) && ctype_digit($_GET['modif'])) { //Modification d'un Tarif
                if (!empty($_POST)) {
                    $data = $_POST;
                    $res = Manager::updateData($data, 'agence', 'id_agence', $_GET['modif']);
                    if ($res['code'] = 200) {
                        header('Location: index.php?action=agence');
                    }
                }
            } else { // Ajout Tarif
                if (!empty($_POST)) {
                    $data = $_POST;
                    $agence = new agence($data);
                    $res = insert($agence);

                    $_SESSION['messages'] = $res;
                }
            }
            require_once("view/agenceView.php");
        } elseif ($action == 'mailProjet') {//View Mail/Compte aux projets
            if(!empty($_POST)){
                //var_dump($_POST);die;
                extract($_POST);
                
                //$_SESSION['equipe'] = $equipe;
                //$data = Manager::getData('projet', 'equipe', $equipe)['data'];
                if(!empty($compte)){//Création de compte
                    $data = Manager::getData('equipe', 'id_equipe', $compte)['data'];
                    $pass = md5($data['nom_equipe']);
                    // var_dump($compte);
                    // die();
                    $pass = Manager::updateDataSingle('password_equipe', $pass, 'equipe', 'id_equipe', $data['id_equipe']);
                } else{//Send mail to candidat
                    //$_SESSION[''] = $equipe;
                    include_once("model/mail.php");
                }
            }
            require_once("view/mailProjetView.php");
        } elseif ($action == 'listeCandidat') {//View Liste des candidats par projet
            require_once("view/listeCandidatView.php");
        } elseif ($action == 'inscription') {//View Lancement inscription
            require_once("view/inscriptionView.php");
        } elseif ($action == 'attributionCoach') {//Attribution de Coach aux projets
            require_once("view/attributionCoachView.php");
        } elseif ($action == 'coach') {
            require_once("view/attributionCoachProjetView.php");
        } elseif ($action == 'type') {
            if (!empty($_POST)) {
                $data = $_POST;
                $res = addData($data, 'type_agent');

                if ($res != 1) {
                    $_SESSION['messages'] = $res;
                }
            }
            require_once("view/typeAgentView.php");
        } elseif ($action == 'addUser') {
            //Manager::showError($_FILES);
            if (!empty($_GET['modif']) && ctype_digit($_GET['modif'])) {
                if (!empty($_POST) && !empty($_FILES)) {
                    $data = $_POST;
                    if (empty($_FILES['profile_picture'])) {
                        //Manager::showError($_FILES);
                        $data['photo'] = Manager::getData("users", "id", $_GET['modif'])['data']['photo'];
                    } else {
                        $files = new file();
                        $data['photo'] = $files->uploadFilePicture($_FILES['profile_picture']);
                    }
                   
                    $res = Manager::updateData($data, 'users','id', $_GET['modif']);
                    if ($res['code'] = 200) {
                    }

                }
            } else {
                if (!empty($_POST) && !empty($_FILES)) {
                    $data = $_POST;
                    $files = new file();
                    $data['photo'] = $files->uploadFilePicture($_FILES['profile_picture']);

                    // var_dump($data); 
                    $users = new users($data);
                    //var_dump($users); die;
                    $res = insert($users);
                    //$res = addData($data, 'roles');

                    //if ($res['code'] != 1) {
                    $_SESSION['messages'] = $res;
                    // }

                }
            }

            require_once("view/addUserView.php");
        } elseif ($action == 'addEmergency') {
            //Manager::showError($_FILES);
            if (!empty($_POST) && !empty($_FILES)) {
                $data = $_POST;
                $file = new file();
                var_dump($file->uploadFilePicture($_FILES['files']));
                die;
                $data['files'] = $_FILES['files'];
                $res = EmergencyManager::addEmergency($data);
                //Manager::showError($data);
                if ($res != 1) {
                    $_SESSION['messages'] = $res;
                } else {
                    header('Location: index.php?action=showEmergency');
                }
            }
            require_once("view/addEmergencyGestView.php");
        } elseif ($action == 'showEmergency') {

            require_once("view/showEmergencyGestView.php");
        } elseif ($action == 'juryProject' && !empty($_GET['jury'])) {
            //Manager::showError($_FILES);
            
            require_once("view/juryProjectView.php");
        } elseif ($action == 'voir-plan') {

            require_once("view/showPlanView.php");
        } elseif ($action == 'showUser') {

            require_once("view/showUserView.php");
        } elseif ($action == 'roleModule') {
            require_once("view/roleModuleView.php");
        } elseif ($action == 'profile') {
            require_once("view/profileView.php");
        } elseif ($action == 'dashboard') {//View Dashboard
            require_once("view/dashboardView.php");
        } elseif ($action == 'detailProjet') {//View Detail du Projet
            require_once("view/detailProjetView.php");
        } elseif ($action == 'detailProjetFinal') {//View Detail du Projet
            require_once("view/detailProjetFinalView.php");
        } elseif ($action == 'listesProjets') {//View listes des Projets
            require_once("view/listesProjetsView.php");
        } elseif ($action == 'listeEquipe') {//View listes des Equipes
            require_once("view/listeEquipeView.php");
        } elseif ($action == 'listeCoach') {//View listes des Coachs
            require_once("view/listeCoachView.php");
        }elseif ($action == 'exportProjet') {//View listes des Coachs
            include_once('model/export_projet.php');
            //require_once("view/listeProjetView.php");
        }elseif ($action == 'exportToPdf') {//View listes des Coachs
            include_once('model/export_to_pdf.php');
            //require_once("view/listeProjetView.php");
        } elseif ($action == 'logout') {
            require_once("view/logout.php");
        }
    } else {
        require_once("view/dashboardView.php");
    }
} elseif (isset($_GET['signup'])) {
    if (!empty($_POST)) {
        $res = UserManager::activeUser($_POST);
        //print_r($_POST); die;
        if ($res != 1) {
            $_SESSION['messages'] = $res;
        } else {
            header('Location: index.php');
        }
    }
    require('view/registerView.php');
} else {
    if (!empty($_POST)) {

        $res = UserManager::connectUser($_POST);
        if ($res != 1) {
            $_SESSION['messages'] = $res;
        } else {
            header('Location: index.php?action=dashboard');
        }
    }
    require('view/loginView.php');
}

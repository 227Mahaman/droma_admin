<?php
include_once('model/class/RoleManager.php');
include_once('model/class/UserManager.php');
//include_once('model/class/EmergencyManager.php');
include_once('model/class/MenuManager.php');
//include_once('model/class/Files.php');
include_once('model/database/module.php');
include_once('model/database/roles.php');
include_once('model/database/actions.php');
include_once('model/database/users.php');
include_once('model/database/type_agent.php');
include_once('model/database/files.php');
include_once('model/database/agence.php');
include_once('model/database/billet.php');
include_once('model/database/module_role.php');
include_once('model/database/news.php');
include_once('model/database/pays.php');
include_once('model/database/post.php');
include_once('model/database/reservation.php');
include_once('model/database/tarif.php');
include_once('model/database/ville.php');

function addData($data, $table)
{
    $url = API_ROOT_PATH. "/object/$table";
    $res = Manager::addoNTable($url, $data);
    $res = Manager::correct($res);
    if (isset($res['error'])) {
        if (!$res['error']) {
            $lastId = $res['lastId'];
            if (!empty($lastId)) {
                $res = Manager::addHistory($table, $lastId);
                if ($res != 1) {
                    return $res['message'];
                }else {
                    return 1;
                }
            }else {
                return $res['message'];
            }
        }else {
            return $res['message'];
        }
    }else {
        return $res['message'];
    }
}

function insert($table) {
    $manager = new Manager();
    return $manager->insert($table);
}

function setActionUrl($name)
{
    $name = str_replace(' ', '_', $name);
    return $name;
}

function getModules()
{
    $res = Manager::getData('module_role', 'role_id', $_SESSION['user']['roleId']);
    $_SESSION['user']['roles']['modules'] = $res;
}

function getActions($moduleId)
{
   $res = array();
   // Manager::showError($module)
   $sql = "SELECT * FROM module WHERE sub_module=?";
       $res = Manager::getMultiplesRecords($sql, [$moduleId]);
   return $res;
}

function haveAction($role, $module)
{
   $res = array();
   // Manager::showError($module)
   $sql = "SELECT * FROM module_role WHERE role_id=? AND module=?";
   $res = Manager::getMultiplesRecords($sql, [$role, $module]);
   if ((is_array($res) || is_object($res)) && count($res)>0) {
       return true;
   }else {
       return false;
   }
   
}
// trouver ici https://stackoverflow.com/a/965269/9928098
function limit_text($text, $limit) {
    if (str_word_count($text, 0) > $limit) {
        $words = str_word_count($text, 2);
        $pos = array_keys($words);
        $text = substr($text, 0, $pos[$limit]) . '...';
    }
    return $text;
  }
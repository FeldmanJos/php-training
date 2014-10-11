<?php

session_start();
require_once 'lib.php';
if (!isset($_SESSION['attempt'])){
    $_SESSION['attempt']=1;
}
    
if (isset($_POST['name']) && isset($_POST['password']) && !empty($_POST['name']) && $_SESSION['attempt']<4) {
    try {
        $user = getUser($_POST['name']);
        if (!is_null($user) && $user['password'] == md5($_POST['password'])) {
            $_SESSION['name'] = $_POST['name'];
            $_SESSION['pass'] = $_POST['password'];
            Header('Location: todo.php');
        } else {
            $_SESSION['attempt']+=1;
            Header('Location: index.php?error=name or password incorrect');
            }
        } catch (Exception $exc) {
        logger('Error trying to get user: '. $exc->getMessage());
        
        header('Location: error.php');
    }

} else {
if ($_SESSION['attempt']>=4) {
    Header('Location: index.php?error=You have tried to log in too many times.');
    blockUser($_POST['name']);
} else {
    $_SESSION['attempt']+=1;
    Header('Location: index.php?error=login');
}}

?>

<?php

//=============================================================
// ログアウトページ
//=============================================================
session_start();
require_once('function.php');

// セッションを破棄
destroy();
$_SESSION['msg'] = 'ログアウトしました！';
header('Location: login.php');
exit;
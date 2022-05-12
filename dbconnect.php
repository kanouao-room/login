<?php
require_once './env.php';
function connect()
{
     $host = DB_HOST;
     $db = DB_NAME;
     $user = DB_USER;
     $pass = DB_PASS;

     $dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";

    try{
             $pdo = new PDO($dsn,$user, $pass,[
         //エラーのモードを決める　
         PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
         //フェッチモード 配列をkeyとvalueで必ず返すという設定
         PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC

     ]);
     echo '成功です。';
    }catch(PDOException $e){
        echo '接続失敗!'. $e->getMessage();
        exit();

    }

}

echo connect();
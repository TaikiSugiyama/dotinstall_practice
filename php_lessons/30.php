<?php
//session
//サーバー側
//大きなデータ
//改竄されない
//中身が見られない

session_start();

// $_SESSION['username'] = "sugiyama";
// echo $_SESSION['username'];
unset($_SESSION['username']);

echo $_SESSION['username'];


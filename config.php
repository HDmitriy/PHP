<?php

const SERVER = "localhost";
const DB = "lesson5";
const LOGIN = "root";
const PASS = "root";

$connect = mysqli_connect(SERVER,LOGIN,PASS,DB) or die("Ошибка подключения");
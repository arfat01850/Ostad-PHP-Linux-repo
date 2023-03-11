<?php
// session_start();

// $_SESSION ['name'] = 'Abdur Rahim';
// echo $_SESSION['name'];


// $_SESSION ['counter'] = $_SESSION ['counter'] ?? 0;
// $_SESSION ['counter']++;
// echo $_SESSION ['counter'];



session_name('myapps');
session_start([
    'cookie_lifetime'=> 60
]);
$_SESSION ['name'] = 'Abdur Rahim';
echo $_SESSION ['name'];

<?php 

if($_SERVER['SERVER_NAME'] == 'localhost'){
    
    // database config
    define('DBNAME','upkeep');
    define('DBHOST','localhost');
    define('DBUSER','root');
    define('DBPASS','');
    define('DBDRIVER','');

    define('ROOT','http://localhost/UpKeep/public');
}else{

    define('DBNAME','my_db');
    define('DBHOST','localhost');
    define('DBUSER','root');
    define('DBPASS','');
    define('DBDRIVER','');
    
    define('ROOT','httpS://www.yourwebsite.com');
}
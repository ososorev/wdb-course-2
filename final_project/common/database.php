<?php
 class Database {
   public    static $connection;
   private   static $host   = "localhost";
   private   static $user   = "root";
   private   static $pass   = "virtual";
   private   static $dbname = "wdb";

   public static function connect(){
     return self::$connection = mysqli_connect(self::$host, self::$user, self::$pass, self::$dbname) or die ("Невозможно соединиться с базой данных");
   }

   public static function query($sql_command){
     return $sql_query = mysqli_query(self::$connection, $sql_command) or die ("Неправильный запрос!");
   }

   public static function fetch_assoc($query){
     while ($user = mysqli_fetch_assoc($query)){
       echo "<pre>";
       print_r ($user);
       echo "</pre>";
     }
   }
 }

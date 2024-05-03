<?php
class Connection{
    protected static ?PDO $connection = null;
    public function __construct()
    {
        echo "database sukses";
    }
    public static function connec() {
        try {
            if(!self::$connection){
                $pdo = new PDO('mysql:host=localhost;dbname=tokobunga', 'root', '');
                self:: $connection = $pdo;
            } return self::$connection;
        }catch(PDOException $e) {
            echo "koneksi gagal" . $e -> getMessage();
        } 
    }
}
<?php
require_once("connection.php");
class View{
    protected PDO $db;

    private static ?View $produk = null;

    public function __construct()
    {
        $this->db=Connection::connec();
    }
    public static function produk() {
        if (self::$produk=== null) {
            self::$produk= new View();
        }
        return self::$produk;
    }
    public function readProduk(){
        $sql = "select * from produk";
        $stm = $this->db->prepare($sql);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }
}
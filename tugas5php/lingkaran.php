<?php
require_once 'bangunDatar.php';
class lingkaran extends bangunDatar{
    protected $jari2 = 14;

    public function namaBidang(){
        return 'Lingkaran';
    }

    public function sisi(){
        echo '<br> Jari-jari: 14';
    }

    public function kelilingBidang(){
        return (2 * 3.14 * $this -> jari2);
    }
    public function luasBidang(){
        return (3.14 * pow($this ->jari2,2));
    }
}
?>
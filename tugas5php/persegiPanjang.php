<?php
require_once 'bangunDatar.php';
class persegiPanjang extends bangunDatar{
    protected $panjang = 10;
    protected $lebar = 5;

    public function namaBidang(){
        return 'Persegi Panjang';
    }

    public function sisi(){
        echo '<br> Panjang: 10';
        echo '<br> Lebar: 5';
    }

    public function kelilingBidang(){
        return (2 * ($this -> panjang + $this -> lebar));
    }
    public function luasBidang(){
        return ($this -> panjang * $this -> lebar);
    }
}
?>
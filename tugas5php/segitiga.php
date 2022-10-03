<?php
require_once 'bangunDatar.php';
class segitiga extends bangunDatar{
    protected $alas = 8;
    protected $tinggi = 6;
    protected $miring;
    public function namaBidang(){
        return 'Segitiga siku-siku';
    }

    public function sisi(){
        echo '<br> Alas: 8';
        echo '<br> Tinggi: 6';
    }

    public function kelilingBidang(){
        $this->miring = sqrt(pow($this->alas, 2) + pow($this->tinggi, 2));
        return ($this->alas + $this->tinggi + $this->miring);
    }
    public function luasBidang(){
        return (0.5 * ($this->alas * $this->tinggi));
    }
}
?>

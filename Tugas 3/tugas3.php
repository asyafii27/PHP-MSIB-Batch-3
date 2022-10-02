<?php
class Pegawai{
    //member1 variabel
    protected $nip;
    public $nama;
    public $jabatan;
    public $agama;
    public $status;
    //variabel konstanta & static di dlm class
    static $jml = 0;
    const PT = 'PT Harus di Gass!';
    
    //member2 konstruktor
    public function __construct($nip, $nama, $jabatan, $agama, $status){
        $this->nip = $nip;
        $this->nama = $nama;
        $this->jabatan = $jabatan;
        $this->agama = $agama;
        $this->status = $status;

        self::$jml++;
    }
    //menyeting gaji pokok
    public function setGapok($jabatan){
        switch($jabatan)
        {
            case 'Manager': return 15000000;break;
            case 'Asisten': return 10000000;break;
            case 'Kepala bagian': return 7000000;break;
            case 'Staff' : return 4000000;break;
            default: '0';
        }
    }

    //menyeting Tujangan Jabatan
    public function setTunjab($jabatan){
        return (20/100) * $this -> setGapok($jabatan);
    }

    //Menyeting Tunjangan Keluarga
    public function setTunkel($jabatan)
    {
        return ($this -> status == 'Menikah') ? (10/100) * $this -> setGapok($jabatan): 0;
    }

   //Menyeting fungsi Gaji Kotor
   public function setGakot ($jabatan, $status){
    return $this -> setGapok($jabatan) + $this -> setTunjab($jabatan) + $this->setTunkel($jabatan, $status);
   }

   //<enyeting Zakat profesi
   public function setZakat($jabatan, $status, $agama){
    if ($this -> setGakot($jabatan, $status) >= 6000000 && $agama == 'Islam') return (2.5/100) * $this -> setGapok($jabatan);
   }

   //Menyeting gaji ersih
   public function setgaBer($jabatan, $status, $agama){
    return $this-> setGakot($jabatan, $status) - $this -> setZakat($jabatan, $status, $agama);
   }
    

    public function mencetak(){
        echo '<br><b><u>'.self::PT.'</u></b>'; 
        echo '<br/>NIP: '.$this->nip;
        echo '<br/>Nama: '.$this->nama;
        echo '<br/>Jabatan: ' .$this->jabatan;
        echo '<br>Agama: ' .$this->agama;
        echo '<br>Status: '.$this->status;
        echo '<br>Gaji Pokok: '.number_format ($this->setGapok($this->jabatan), 0, ',', '.');
        echo '<br>Tunjangan Jabatan: '.number_format($this->setTunjab($this->jabatan), 0, ',', '.');
        echo '<br>Tunjangan Keluarga: '.number_format($this->setTunkel($this->jabatan), 0, ',', '.');
        echo '<br>Gaji Kotor: ' .number_format($this->setGakot($this-> jabatan, $this -> status), 0, ',', '.');
        echo '<br>Zakat Profesi: '.number_format($this-> setZakat($this -> jabatan, $this->status, $this->agama), 0, ',', '.');
        echo '<br>Gaji Bersih: ' .number_format($this-> setgaBer($this->jabatan, $this->status, $this->agama), 0, ',', '.');

        echo '<hr/>';

    }
}
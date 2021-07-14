<?php

interface Shape{
    public function area();
}
class PersegiPanjang implements Shape{
    private $panjang =89;
    private $lebar =212;

    public function area(){
        return $this->panjang * $this->lebar;
    }
}

class Bola implements Shape{
    private $jarijaribola =18;

    public function area(){
        return 4/3 * (pi() * $this->jarijaribola * $this->jarijaribola * $this->jarijaribola );
    }
}

class Kerucut implements Shape{
    private $jarijarikerucut= 5;
    private $tinggikerucut = 10;

    public function area(){
        return 1/3 * (pi() * $this->jarijarikerucut * $this->jarijarikerucut * $this->tinggikerucut );
    }
}

class Kubus implements Shape{
    private $sisi = 14;

    public function area(){
        return $this->sisi * $this->sisi * $this->sisi;
    }
}

class Lingkaran implements Shape{
    private $jarijarilingkaran = 7;

    public function area(){
        return 2 * (pi() * $this->jarijarilingkaran);
    }
}

class AreaKalkulator {
    public function kalkulator(Shape $shapes)
    {
        $area = [];

        foreach ($shapes as $shape) {
            $area[] = $shape->area();
        }

        return array_sum($area);
    }
}
    echo "Bangun ruang : Persegi Panjang<br>";
  $PersegiPanjang = new PersegiPanjang(89, 212);
  echo 'Luas Persegi Panjang = '. $PersegiPanjang->area() . "<br><br><br>";

 echo "Bangun ruang : Bola<br>";
  $Bola = new Bola(18);
  echo 'Volume  Bola = '.$Bola->area() . "<br><br><br>";

 echo "Bangun ruang : Kerucut<br>";
  $Kerucut = new Kerucut(5, 10);
  echo 'Volume  Kerucut = '.$Kerucut->area() . "<br><br><br>";

 echo "Bangun ruang : Kubus<br>";
  $Kubus = new Kubus(14);
  echo 'Volume  Kubus = '.$Kubus->area() . "<br><br><br>";

 echo "Bangun ruang : Lingkaran<br>";
  $Lingkaran = new Lingkaran(7);
  echo 'Keliling  Lingkaran = '.$Lingkaran->area() . "<br><br><br>";


?>
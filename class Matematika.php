<?php
class Matematika{
    //konstanta class
    const PHI = 3.14;

    // static member variabel
    public static $counter = 100;

    // static member funtion
     public static function tambahkan($a,$b){
        return $a + $b;
     }

     //askses member variabel dari dalam class
     public static function naikancounter(){
        self::$counter;
     }

     //akses konstanta class 
     public static function luaslingkaran($jari){
        $luas = self::PHI * $jari * $jari;
        return $luas;
     }

     public static function kurangkan($a,$b){
      return $a - $b;
     } 
}
?>
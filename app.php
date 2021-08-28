<?php

$gender = "male"; // cinsiyet (male/female)
$weight = 55; // kilo (kg)
$height = 170; // boy (cm)
$age = 25; // yaş (sene)

$guess = "1470"; // Tahmin edilen değer

/**
 * Bu ödevde bazal metabolizma hesaplaması yapacağız.
 * Yukarıdaki değişkenleri ve aşağıdaki formülü kullanarak
 * kişinin günlük BMR ihtiyacını hesaplayıp
 * bunu ekrana yazan ve tahmin değeri ile karşılaştıran
 * PHP kodunu oluşturmamız gerekiyor.
 * 
 * Erkekler için; 88.362 + (13.397 x kilo) + (4.799 x boy) – (5.677 x yaş)
 * Kadınlar için; 447.593 + (9.247 x kilo) + (3.098 x boy) – (4.330 x yaş)
 * 
 * Tahmin değeri ile karşılaştırmanızın sonucunda
 * "Tahmin değerinden düşük", "Tahmin değerinden büyük" veya
 * "Tahmin değerine eşit" şeklinde çıktı vermeniz gerekiyor.
 * 
 * Örneğin;
 * $gender = "female";
 * $weight = 60;
 * $height = 170;
 * $age = 30;
 * 
 * Ekrana
 * 
 * BMR: 1399.173
 * Tahmin değerinden düşük
 * 
 * yazması gerekiyor.
 */

//Kadınlar için;
define("WOMEN_METABOLISM", 447.593);// Metabolizma sabit değerinin değişkene atanması
define("WOMEN_WEIGHT", 9.247);// Kilo sabit değerinin değişkene atanması
define("WOMEN_HEIGHT", 3.098);// Boy sabit değerinin değişkene atanması
define("WOMEN_AGE", 4.330);// Yaş sabit değerinin değişkene atanması

//Erkekler için;
define("MEN_METABOLISM", 88.362); // Metabolizma sabit değerinin değişkene atanması
define("MEN_WEIGHT", 13.397);// Kilo sabit değerinin değişkene atanması
define("MEN_HEIGHT", 4.799);// Boy sabit değerinin değişkene atanması
define("MEN_AGE", 5.677);// Yaş sabit değerinin değişkene atanması

if($gender === "female"){ // $gender değeri "female" ise if içerisindeki işlem(ler)i yap
    $basalMetabolism = WOMEN_METABOLISM+(WOMEN_WEIGHT*$weight)+(WOMEN_HEIGHT*$height)-(WOMEN_AGE*$age); // işlem sonucunu $basalMetabolism değişkenine ata
}elseif($gender === "male"){ // $gender değeri "male" ise elseif içerisindeki işlem(ler)i yap
    $basalMetabolism = MEN_METABOLISM+(MEN_WEIGHT*$weight)+(MEN_HEIGHT*$height)-(MEN_AGE*$age); // işlem sonucunu $basalMetabolism değişkenine ata
}

echo "BMR: $basalMetabolism<br>"; // ekrana BMR: ile $basalMetabolism içindeki değeri yazıp alt satıra geç

if($guess > $basalMetabolism){ // $guess'in değeri $basalMetabolism değerinden büyükse if içerisindeki işlem(leri) yap
    echo "Tahmin değerinden düşük";
}elseif($guess == $basalMetabolism){ // $guess'in değeri $basalMetabolism değerine eşitse elseif içerisindeki işlem(leri) yap
    echo "Tahmin değerine eşit";
}elseif($guess < $basalMetabolism){  // $guess'in değeri $basalMetabolism değerinden küçükse elseif içerisindeki işlem(leri) yap
    echo "Tahmin değerinden büyük";
}

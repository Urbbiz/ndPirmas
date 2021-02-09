<h1>Kintamieji ir Salygos</h1>
<p>
1. Sukurkite 4 kintamuosius, kurie saugotų jūsų vardą, pavardę, gimimo metus ir šiuos metus (nebūtinai tikrus). Parašykite kodą, kuris pagal gimimo metus paskaičiuotų jūsų amžių ir naudodamas vardo ir pavardės kintamuosius atspausdintų tokį sakinį :
"Aš esu Vardenis Pavardenis. Man yra XX metai(ų)".
</p>

<?php

$vardas = 'Andrius';
$pavarde = 'Urbonas';
$gimimoMeai = 1984;;
$einamiejiMetai =2021;

$manoAmzius = $einamiejiMetai - $gimimoMeai;

echo ("As esu $vardas $pavarde. Man yra $manoAmzius metai.");
?>

<p>2. Naudokite funkcija rand(). Sukurkite du kintamuosius ir naudodamiesi funkcija rand() jiems priskirkite atsitiktines reikšmes nuo 0 iki 4. Didesnę reikšmę padalinkite iš mažesnės. Atspausdinkite rezultatą jį suapvalinę iki 2 skaičių po kablelio.
</p>

<?php

// $s1 = rand(0, 4);
// $s2 = rand(0, 4);

// if($s1 === 0 || $s2 === 0 || $s1 ===$s2 ){
//      echo('sugeneruoti skaiciai netinka duotos salygos teisingam atsakymui sugeneruoti, banykite dar karta');
//      return;
// }else if ($s1 > $s2) {
//     $dalmuo = $s1 / $s2;
//     echo("$s1 / $s2 =". round($dalmuo, 2));
// } else if ($s2 > $s1) {
//     $dalmuo = $s2 / $s1;
//     echo("$s2 / $s1 =". round($dalmuo, 2));  
// }

?>

<p>  3.Naudokite funkcija rand(). Sukurkite tris kintamuosius ir naudodamiesi funkcija rand() jiems priskirkite atsitiktines reikšmes nuo 0 iki 25. Raskite ir atspausdinkite kintąmąjį turintį vidurinę reikšmę.
</p>

<?php

$a = rand(0, 25);
$b = rand(0, 25);
$c = rand(0, 25);
if($a === $b & $b === $c || $a === $b || $a === $c || $b === $c ){
    echo('sugeneruoti skaiciai netinka duotos salygos teisingam atsakymui sugeneruoti, banykite dar karta');
    
}else if($a<$b && $a>$c) {
    echo "a = $a yra vidurinioji reiksme";
}else if($a>$b && $a<$c) {
        echo "a = $a yra vidurinioji reiksme";
}else if($b<$a && $b>$c) {
    echo "b = $b yra vidurinioji reiksme";
}else if($b>$a && $b<$c) {
    echo "b = $b yra vidurinioji reiksme";
}else if ($c<$a && $c>$b) {
    echo "c = $c yra vidurinioji reiksme";
}else if ($c>$a && $c<$b) {
    echo "c = $c yra vidurinioji reiksme";
}
echo ('<br>');
echo ("a = $a, b = $b, c = $c ");
?>

<p> 4. Įvedami skaičiai -a, b, c –kraštinių ilgiai, trys kintamieji (naudokite ​rand()​ funkcija nuo 1 iki 10). Parašykite PHP programą, kuri nustatytų, ar galima sudaryti trikampį ir atsakymą atspausdintų. 
</p>

<?php
$krastine1 = rand(1, 10);
$krastine2 = rand(1, 10);
$krastine3 = rand(1, 10);
echo ("pirma krastine $krastine1, antra $krastine2, trecia $krastine3");
echo ('<br>');
if($krastine1 + $krastine2 < $krastine3 || $krastine3 + $krastine2 < $krastine1 || $krastine1 + $krastine3 < $krastine2  ) {
    echo 'trikampio susidarymas negalimas';
} else {
    echo 'VALIO!!! sugeneravai trikampi.';
}
?>

<p> 5. Sukurkite keturis kintamuosius ir ​rand()​ funkcija sugeneruokite jiems 
reikšmes nuo 0 iki 2. Suskaičiuokite kiek yra nulių, vienetų ir dvejetų. (sprendimui masyvo nenaudoti).
</p>

<?php

$reiksme1 = rand(0, 2);
$reiksme2 = rand(0, 2);
$reiksme3 = rand(0, 2);
$reiksme4 = rand(0,2);
echo("reiksme 1 = $reiksme1, 2 = $reiksme2, 3 = $reiksme3, 4 = $reiksme4");

$nulis= 0;
$vienas = 0;
$dvejetas = 0;

if ($reiksme1 ===0) {
    $nulis +=1;
}
if($reiksme2 === 0) {
    $nulis +=1;
}
if($reiksme3 === 0) {
    $nulis +=1;
}
if ($reiksme1 === 1) {
    $vienas +=1;
}
if($reiksme2 === 1) {
    $vienas +=1;
}
if($reiksme3 === 1) {
    $vienas +=1;
}
if ($reiksme1 === 2) {
    $dvejetas +=1;
}
if($reiksme2 === 2) {
    $dvejetas +=1;
}
if($reiksme3 === 2) {
    $dvejetas +=1;
}


echo '<br>';
echo ("Nuliai = $nulis, vienetai = $vienas, dvejetai = $dvejetas" );
?>

<p> 6. Naudokite funkcija rand(). Sugeneruokite atsitiktinį skaičių nuo 1 iki 6 ir jį atspausdinkite atitinkame h tage. Pvz skaičius 3- rezultatas: 
</p>
<!-- <h3>3</h3> -->
<?php

$skaicius = rand(1, 6);

if ($skaicius === 1){
    echo ('skaicius 1-rezultatas: <h3>1</h3>');
} else if ($skaicius === 2){
    echo ('skaicius 2-rezultatas: <h3>2</h3>');
}else if ($skaicius === 3){
    echo ('skaicius 3-rezultatas: <h3>3</h3>');
} else if ($skaicius === 4){
    echo ('skaicius 4-rezultatas: <h3>4</h3>');
} else if ($skaicius === 5){
    echo ('skaicius 5-rezultatas: <h3>5</h3>');
} else
    echo ('skaicius 6-rezultatas: <h3>6</h3>');

    ?>

    <p> 7. Naudokite funkcija rand(). Atspausdinkite 3 skaičius nuo -10 iki 10. Skaičiai mažesni už 0 turi būti žali, 0 - raudonas, didesni už 0 mėlyni. </p>

<?php
    $skaitmuo1 = rand(-10, 10);
    $skaitmuo2 = rand(-10, 10);
    $skaitmuo3 = rand(-10, 10);

    if ($skaitmuo1 === 0){
        echo "<h3 style=color:red>$skaitmuo1<h3/>";
    }if ($skaitmuo1 < 0){
        echo "<h3 style=color:green> $skaitmuo1 <h3/>";
    }if ($skaitmuo1 > 0){
        echo "<h3 style=color:blue> $skaitmuo1 <h3/>";
    }
    if ($skaitmuo2 === 0){
        echo "<h3 style=color:red>$skaitmuo2<h3/>";
    }if ($skaitmuo2 < 0){
        echo "<h3 style=color:green> $skaitmuo2 <h3/>";
    }if ($skaitmuo2 > 0){
        echo "<h3 style=color:blue> $skaitmuo2 <h3/>";
    }
    if ($skaitmuo3 === 0){
        echo "<h3 style=color:red>$skaitmuo3<h3/>";
    }if ($skaitmuo3 < 0){
        echo "<h3 style=color:green> $skaitmuo3 <h3/>";
    }if ($skaitmuo3 > 0){
        echo "<h3 style=color:blue> $skaitmuo3 <h3/>";
    }

?>

<p>8 .Įmonė parduoda žvakes po 1 EUR. Perkant daugiau kaip už 1000 EUR taikoma 3 % nuolaida, daugiau kaip už 2000 EUR - 4 % nuolaida. Parašykite programą, kuri skaičiuos žvakių kainą ir atspausdintų atsakymą kiek žvakių ir kokia kaina perkama. Žvakių kiekį generuokite ​rand()​ funkcija nuo 5 iki 3000.
</p>

<?php

$zvakiuKiekis = rand(5, 3000);
$kaina = 0;

if($zvakiuKiekis < 1000){
    $kaina = $zvakiuKiekis;
echo ("perkama $zvakiuKiekis, sumoketa = $kaina EUR");
}else if($zvakiuKiekis >= 1000 && $zvakiuKiekis< 2000){
    $kaina = $zvakiuKiekis /100 * 97;
echo ("perkama $zvakiuKiekis, sumoketa = $kaina EUR");
} else if ($zvakiuKiekis >= 2000) {
    $kaina = $zvakiuKiekis /100 * 96;
echo ("perkama $zvakiuKiekis, sumoketa = $kaina EUR");
}
?>
<p>9. Naudokite funkcija rand(). Sukurkite tris kintamuosius su atsitiktinėm reikšmėm nuo 0 iki 100. Paskaičiuokite jų aritmetinį vidurkį. Ir aritmetinį vidurkį atmetus tas reikšmes, kurios yra mažesnės nei 10 arba didesnės nei 90. Abu vidurkius atspausdinkite. Rezultatus apvalinkite iki sveiko skaičiaus.
</p>

<?php

$kintamasis1 = rand(0, 100);
$kintamasis2 = rand(0, 100);
$kintamasis3 = rand(0, 100);

$vidurkis = ($kintamasis1 + $kintamasis2 +$kintamasis3) / 3;
echo ("$kintamasis1 , $kintamasis2 , $kintamasis3");
echo '<br>';
echo 'Aritmetinis vidurkis be apribojimu = '.round( $vidurkis);
echo '<br>';


if ($kintamasis1 >= 10 || $kintamasis1 <= 90 ) {
     $vidurkis2 = ($kintamasis2 +$kintamasis3) / 2;
     echo 'Aritmetinis vidurkis su apribojimu = '.round( $vidurkis2);  
} elseif ($kintamasis2 >= 10 || $kintamasis2 <= 90 ) {
    $vidurkis2 = ($kintamasis1 +$kintamasis3) / 2;
    echo 'Aritmetinis vidurkis su apribojimu = '.round( $vidurkis2);  
}elseif ($kintamasis3 >= 10 || $kintamasis3 <= 90 ) {
    $vidurkis2 = ($kintamasis1 +$kintamasis2) / 2;
    echo 'Aritmetinis vidurkis su apribojimu = '.round( $vidurkis2);  
} elseif ($kintamasis1 >= 10 || $kintamasis1 <= 90 && $kintamasis2 >= 10 || $kintamasis2 <= 90 ) {
    $vidurkis2 = $kintamasis3;
    echo 'Aritmetinis vidurkis is vieno skaiciaus = '.round( $vidurkis2);  
} elseif ($kintamasis1 >= 10 || $kintamasis1 <= 90 && $kintamasis3 >= 10 || $kintamasis3 <= 90 ) {
    $vidurkis2 = $kintamasis2;
    echo 'Aritmetinis vidurkis is vieno skaiciaus = '.round( $vidurkis2);  
} elseif ($kintamasis3 >= 10 || $kintamasis3 <= 90 && $kintamasis2 >= 10 || $kintamasis2 <= 90 ) {
    $vidurkis2 = $kintamasis1;
    echo 'Aritmetinis vidurkis is vieno skaiciaus = '.round( $vidurkis2);  
}

?>

<p>10. Padarykite skaitmeninį laikrodį, rodantį valandas, minutes ir sekundes. Valandom, minutėm ir sekundėm sugeneruoti panaudokite funkciją rand(). Sugeneruokite skaičių nuo 0 iki 300. Tai papildomos sekundės. Skaičių pridėkite prie jau sugeneruoto laiko. Atspausdinkite laikrodį prieš ir po sekundžių pridėjimo ir pridedamų sekundžių skaičių.
</p>

<?php

$sekunde = rand(0,59);
$minute = rand(0, 59);
$valanda = rand(0, 23);
$randomSekundes = rand(0, 300);

if($sekunde <= 9) {
    $sekunde = "0$sekunde";
}if($minute <= 9) {
    $minute = "0$minute";
}if($valanda <= 9) {
    $valanda = "0$valanda";
}

echo ("Laikas $valanda : $minute : $sekunde");
echo '<br>';

$papildomosSekundes = $randomSekundes % 60;

$naujosMinutes =($randomSekundes / 60);
$intigerMinutes = (int)$naujosMinutes;

$sekunde2 = $sekunde + $papildomosSekundes;
$minute2 = $minute + $intigerMinutes;
$valanda2 = $valanda;


if ($sekunde2 >= 60) {
    $sekunde2 = ($sekunde2 -60);
    $minute2 += 1;

} if ($minute2 >= 60) {
    $minute2 = ($minute2 -60);
    $valanda2 += 1;

}
if ($valanda2 >= 24) {
    $valanda2 = 00;
}

if($sekunde2 <= 9) {
    $sekunde2 = "0$sekunde2";
}if($minute2 <= 9) {
    $minute2 = "0$minute2";
}

echo ("Laikas pridejus papildomas $randomSekundes sekundes $valanda2 : $minute2 : $sekunde2");












<?php
echo 'Program Segitiga';

echo "\nMasukan Jumlah : ";
$jumlah = fgets(STDIN);

echo "\n\nSegitiga Setengah : \n";
for($a=1; $a<=$jumlah; $a++){
    for($b=1; $b<=$a; $b++){
        echo '*';
    }
    echo "\n";
}

echo "\n\nSegitiga Setengah Terbalik : \n";
for($a=1; $a<=$jumlah; $a++){
    for($c=$jumlah; $c>=$a; $c-=1){
        echo '*';
    }
    echo "\n";
}

echo "\n\nSegitiga Full : \n";
for($a=1; $a<=$jumlah; $a++){
    for($b=1; $b<=$a; $b++){
        echo '*';
    }
    echo "\n";
}
for($a=1; $a<=$jumlah; $a++){
    for($b=$jumlah; $b>=$a; $b-=1){
        echo '*';
    }
    echo "\n";
}


echo "\n\nGabungan Segitiga : \n";
for($a=1; $a<=$jumlah; $a++){
    for($b=1; $b<=$a; $b++){
        echo '*';
    }
    echo "\n";
    for($b=$jumlah; $b>=$a; $b-=1){
        echo '*';
    }
    echo "\n";
}
  
echo "\n\nSegitiga Diamond : \n";
for($a=1; $a<=$jumlah; $a++){
    for($b=$jumlah; $b>=$a; $b-=1){
        echo ' ';
    }
    for($c=1; $c<=$a; $c++){
        echo '* ';
    }
    echo "\n";
}
for($a=1; $a<=$jumlah+1; $a++){
    echo '* ';
}
echo "\n";
for($a=1; $a<=$jumlah; $a++){
    for($b=1; $b<=$a; $b++){
        echo ' ';
    }
    for($c=$jumlah; $c>=$a; $c-=1){
        echo '* ';
    }
    echo "\n";
}

?>
<?php
$pass = file_get_contents('pass.txt');
$passwords = explode("\n",$pass);
$count = 0;
for($i=1;$i<=31;$i++){
    for($i2=1;$i2<=12;$i2++){
        for($i3=1920;$i3<=2020;$i3++){
            for($i4=1;$i4<=99;$i4++) {
                foreach( $passwords as $p ) {
                    $hash = md5(str_pad($i,2,"0",STR_PAD_LEFT).str_pad($i2,2,"0",STR_PAD_LEFT).$i3.str_pad($i4,2,"0",STR_PAD_LEFT).$p);
                    if( $hash == '5e6f59f4f4150be8e61eaa20bec51a75' ){
                        echo str_pad($i,2,"0",STR_PAD_LEFT).str_pad($i2,2,"0",STR_PAD_LEFT).$i3.str_pad($i4,2,"0",STR_PAD_LEFT)." = ".$p;
                        exit();
                    }
                }
            }
        }
    }
}

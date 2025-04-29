<?php
$kondisi_bukhori = true; //true=sehat, false=sebaliknya
$kondisi_motor = false;

if ($kondisi_bukhori == true && $kondisi_motor == true) {
    echo "pergi ke sekolah";
} else {
    echo "Tidak jadi pergi ke sekolah";
}
<?php

$url8 = "http://192.168.23.23/apps/";

$ch8 = curl_init();

// Set opsi curl
curl_setopt($ch8, CURLOPT_URL, $url8);
curl_setopt($ch8, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch8, CURLOPT_HEADER, true);
curl_setopt($ch8, CURLOPT_NOBODY, true); // Hanya ambil header

// Eksekusi curl dan dapatkan respons
$response8 = curl_exec($ch8);

// Cek jika curl gagal
if(curl_errno($ch8)) {
    echo "Curl error: " . curl_error($ch8);
} else {
    // Ambil status kode HTTP dari header
    $http_code = curl_getinfo($ch8, CURLINFO_HTTP_CODE);

    // Cek apakah status HTTP adalah 800
    if ($http_code == 200) {
        echo "Website web Absen is up and running with status 200";
    } else {
        echo "Received status code: $http_code";
    }
}


// Tutup sesi curl

curl_close($ch8);
?>

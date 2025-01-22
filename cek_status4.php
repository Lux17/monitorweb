<?php

$url4 = "http://10.10.11.82/purchasing_new/login";

$ch4 = curl_init();

// Set opsi curl
curl_setopt($ch4, CURLOPT_URL, $url4);
curl_setopt($ch4, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch4, CURLOPT_HEADER, true);
curl_setopt($ch4, CURLOPT_NOBODY, true); // Hanya ambil header

// Eksekusi curl dan dapatkan respons
$response4 = curl_exec($ch4);

// Cek jika curl gagal
if(curl_errno($ch4)) {
    echo "Curl error: " . curl_error($ch4);
} else {
    // Ambil status kode HTTP dari header
    $http_code = curl_getinfo($ch4, CURLINFO_HTTP_CODE);

    // Cek apakah status HTTP adalah 400
    if ($http_code == 200) {
        echo "Website tour leader is up and running with status 200";
    } else {
        echo "Received status code: $http_code";
    }
}


// Tutup sesi curl

curl_close($ch4);
?>

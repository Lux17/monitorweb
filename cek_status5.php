<?php

$url5 = "http://10.10.11.82/pc/";

$ch5 = curl_init();

// Set opsi curl
curl_setopt($ch5, CURLOPT_URL, $url5);
curl_setopt($ch5, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch5, CURLOPT_HEADER, true);
curl_setopt($ch5, CURLOPT_NOBODY, true); // Hanya ambil header

// Eksekusi curl dan dapatkan respons
$response5 = curl_exec($ch5);

// Cek jika curl gagal
if(curl_errno($ch5)) {
    echo "Curl error: " . curl_error($ch5);
} else {
    // Ambil status kode HTTP dari header
    $http_code = curl_getinfo($ch5, CURLINFO_HTTP_CODE);

    // Cek apakah status HTTP adalah 500
    if ($http_code == 200) {
        echo "Website web scanner harga is up and running with status 200";
    } else {
        echo "Received status code: $http_code";
    }
}


// Tutup sesi curl

curl_close($ch5);
?>

<?php

$url3 = "http://10.10.11.82/keranjang_pos/login";

$ch3 = curl_init();

// Set opsi curl
curl_setopt($ch3, CURLOPT_URL, $url3);
curl_setopt($ch3, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch3, CURLOPT_HEADER, true);
curl_setopt($ch3, CURLOPT_NOBODY, true); // Hanya ambil header

// Eksekusi curl dan dapatkan respons
$response3 = curl_exec($ch3);

// Cek jika curl gagal
if(curl_errno($ch3)) {
    echo "Curl error: " . curl_error($ch3);
} else {
    // Ambil status kode HTTP dari header
    $http_code3 = curl_getinfo($ch3, CURLINFO_HTTP_CODE);

    // Cek apakah status HTTP adalah 300
    if ($http_code3 == 200) {
        echo "Website keranjang POS is up and running with status 200";
    } else {
        echo "Received status code: $http_code3";
    }
}


// Tutup sesi curl

curl_close($ch3);
?>

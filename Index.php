<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="refresh" content="2"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Website Checker Web TKB</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      body {

        color: white; 
      }

      .container {
        margin-top: 30px;
      }

      h1 {
        font-size: 30px;
        color: green; 
        font-family: Arial, sans-serif;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
      }

      .card {
        background-color: rgba(255, 255, 255, 0.8); 
      }

      .card-header h1 {
        font-size: 1.5rem; 
      }

      .card-body {
        color: black; 
      }

      .text-center {
        text-align: center;
      }

      @media (max-width: 768px) {
        h1 {
          font-size: 24px; 
        }
      }

      .lamp {
        width: 20px;
        height: 20px;
        border-radius: 50%;
        margin-top: 20px;
        margin-left: 10px;
        visibility: visible;
        display: inline-block;
      }
      
 
.card {
  width: 332px;
  height: 265px;
  align: center;
  background: white;
  border-radius: 30px;
  box-shadow: 15px 15px 30px #bebebe,
             -15px -15px 30px #ffffff;
  transition: 0.2s ease-in-out;
}

.img {
  width: 100%;
  height: 50%;
  border-top-left-radius: 30px;
  border-top-right-radius: 30px;
  background: linear-gradient(#e66465, #9198e5);
  display: flex;
  align-items: top;
  justify-content: right;
}

.save {
  transition: 0.2s ease-in-out;
  border-radius: 10px;
  margin: 20px;
  width: 30px;
  height: 30px;
  background-color: #ffffff;
  display: flex;
  align-items: center;
  justify-content: center;
}

.text {
  margin: 20px;
  display: flex;
  flex-direction: column;
  align-items: space-around;
}

.save .svg {
  transition: 0.2s ease-in-out;
  width: 15px;
  height: 15px;
}

.icon-box {
  margin-top: 15px;
  width: 70%;
  padding: 10px;
  background-color: #e3fff9;
  border-radius: 10px;
  display: flex;
  align-items: center;
  justify-content: left;
}

.icon-box svg {
  width: 17px;
}

.text .h3 {
  font-family: 'Lucida Sans' sans-serif;
  font-size: 15px;
  font-weight: 600;
  color: black;
}

.text .p {
  font-family: 'Lucida Sans' sans-serif;
  color: #999999;
  font-size: 13px;
}

.icon-box .span {
  margin-left: 10px;
  font-family: 'Lucida Sans' sans-serif;
  font-size: 13px;
  font-weight: 500;
  color: #9198e5;
}

.card:hover {
  cursor: pointer;
  box-shadow: 0px 10px 20px rgba(0,0,0,0.1);
}

.save:hover {
  transform: scale(1.1) rotate(10deg);
}

.save:hover .svg {
  fill: #ced8de;
}</style>


  </head>
  <body>
  <nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="./img/logo.png" alt="Logo" width="90" height="50" class="d-inline-block align-text-top">
    
    </a>
  </div>
</nav>

    <div class="container text-center mb-4">
      <div class="row">
        <div class="col-md-4">
          <div class="card ">
            <div class="card-header">
              <h1>Tour Travel</h1>
              <p> <span id="time"></span></p>
            </div>
            <div class="card-body">
            <p>Memeriksa status HTTP dari <strong>https://tour.thekeranjangbalicorp.com/tour_travel/login</strong>...</p>
            <div id="status">Menunggu hasil...</div>
              <!-- <div id="lamp1" class="lamp" style="width:50px; height:50px;"></div>  -->
            </div>
          </div>
        </div>

       
        <div class="col-md-4 ">
          <div class="card">
            <div class="card-header">
              <h1>Tour Leader</h1>
              <p> <span id="time"></span></p>
            </div>
            <div class="card-body">
            <p>Memeriksa status HTTP dari <strong>https://tour.thekeranjangbalicorp.com/tour_leader/login</strong>...</p>
            <div id="stats">Menunggu hasil...</div>
              <!-- <div id="lamp2" class="lamp" style="width:50px; height:50px;"></div>  -->
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <div class="card-header">
              <h1>Keranjang Pos</h1>
              <p> <span id="time"></span></p>
            </div>
            <div class="card-body">
            <p>Memeriksa status HTTP dari <strong>http://10.10.11.82/keranjang_pos/</strong>...</p>

            <div id="pos">Menunggu hasil...</div>
              <!-- <div id="lamp3" class="lamp" style="width:50px; height:50px;"></div>  -->
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container text-center mb-0">
      <div class="row">

        <div class="col-md-4">
          <div class="card">
            <div class="card-header">
              <h1>Purchasing</h1>
              <p> <span id="time"></span></p>
            </div>
            <div class="card-body">
            <p>Memeriksa status HTTP dari <strong>http://10.10.11.82/purchasing_new/</strong>...</p>
            <div id="purchasing">Menunggu hasil...</div>
              <!-- <div id="lamp4" class="lamp" style="width:50px; height:50px;"></div>  -->
            </div>
          </div>
        </div>
        
        
        <div class="col-md-4">
          <div class="card">
            <div class="card-header">
              <h1>Scanner Harga</h1>
              <p> <span id="time"></span></p>
            </div>
            <div class="card-body">
            <p>Memeriksa status HTTP dari <strong>http://10.10.11.82/pc/</strong>...</p>
            <div id="pc">Menunggu hasil...</div>
              <!-- <div id="lamp5" class="lamp" style="width:50px; height:50px;"></div>  -->
            </div>
          </div>
        </div>
        
        <div class="col-md-4">
          <div class="card">
            <div class="card-header">
              <h1>Building Maintenance</h1>
              <p> <span id="time"></span></p>
            </div>
            <div class="card-body">
            <p>Memeriksa status HTTP dari <strong>https://btbatikcorp.com/bm/login</strong>...</p>
            <div id="bm">Menunggu hasil...</div>
              <!-- <div id="lamp6" class="lamp" style="width:50px; height:50px;"></div>  -->
            </div>
          </div>
        </div>
        
      </div>
    </div>


    <div class="container text-center mb-4">
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <div class="card-header">
              <h1>Kasir Pie Bar</h1>
              <p> <span id="time"></span></p>
            </div>
            <div class="card-body">
            <p>Memeriksa status HTTP dari <strong>http://10.10.11.82/pie_bar/</strong>...</p>
            <div id="pie">Menunggu hasil...</div>
              <!-- <div id="lamp7" class="lamp" style="width:50px; height:50px;"></div>  -->
            </div>
          </div>
        </div>
        
        <div class="col-md-4">
          <div class="card">
          <div class="card-header">
              <h1>Absen Karyawan</h1>
              <p> <span id="time"></span></p>
            </div>
            <div class="card-body">
            <p>Memeriksa status HTTP dari <strong>http://192.168.23.23/apps/</strong>...</p>
            <div id="absen">Menunggu hasil...</div>
              <!-- <div id="lamp9" class="lamp" style="width:50px; height:50px;"></div>  -->
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <div class="card-header">
              <h1>Trusmiverse</h1>
              <p> <span id="time"></span></p>
            </div>
            <div class="card-body">
            <p>Memeriksa status HTTP dari <strong>https://trusmiverse.com/apps/login</strong>...</p>
            <div id="trusmi">Menunggu hasil...</div>
              <!-- <div id="lamp9" class="lamp" style="width:50px; height:50px;"></div>  -->
            </div>
          </div>
        </div>
      </div>
    </div>


    <script>
        // Fungsi untuk memeriksa status website setiap 5 detik
        function checkStatus(){
            $.ajax({
                url: 'Tour_travel.php', // File PHP untuk memeriksa status
                method: 'GET',
                success: function(response) {
                    $('#status').html(response); // Menampilkan status di halaman
                },
                error: function() {
                    $('#status').html('Terjadi kesalahan dalam memeriksa status.');
                }
            });
        }

        // Panggil fungsi checkStatus setiap 5 detik
        setInterval(checkStatus, 1000); // Menunggu 5 detik untuk pengecekan berikutnya
    </script>

<script>
        // Fungsi untuk memeriksa status website setiap 5 detik
        function checkStatus2() {
            $.ajax({
                url: 'Tour_leader.php', // File PHP untuk memeriksa status
                method: 'GET',
                success: function(response2) {
                    $('#stats').html(response2); // Menampilkan status di halaman
                },
                error: function() {
                    $('#stats').html('Terjadi kesalahan dalam memeriksa status.');
                }
            });
        }

        // Panggil fungsi checkStatus setiap 5 detik
        setInterval(checkStatus2, 1000); // Menunggu 5 detik untuk pengecekan berikutnya
    </script>

<script>
    // Fungsi untuk memeriksa status website setiap 5 detik
    function checkStatus3() {
            $.ajax({
                url: 'Pos_tkb.php', // File PHP untuk memeriksa status
                method: 'GET',
                success: function(response3) {
                    $('#pos').html(response3); // Menampilkan status di halaman
                },
                error: function() {
                    $('#pos').html('Terjadi kesalahan dalam memeriksa status.');
                }
            });
        }

        // Panggil fungsi checkStatus setiap 5 detik
        setInterval(checkStatus3, 1000); // Menunggu 5 detik untuk pengecekan berikutnya
        </script>

<script>
    // Fungsi untuk memeriksa status website setiap 5 detik
    function checkStatus4() {
        $.ajax({
            url: 'Purchasing.php', // File PHP untuk memeriksa status
            method: 'GET',
            success: function(response4) {
                $('#purchasing').html(response4); // Menampilkan status di halaman
            },
            error: function() {
                $('#purchasing').html('Terjadi kesalahan dalam memeriksa status.');
            }
        });
    }

    // Panggil fungsi checkStatus setiap 5 detik
    setInterval(checkStatus4, 1000); // Menunggu 5 detik untuk pengecekan berikutnya
</script>
<script>
    // Fungsi untuk memeriksa status website setiap 5 detik
    function checkStatus5() {
        $.ajax({
            url: 'Scanner.php', // File PHP untuk memeriksa status
            method: 'GET',
            success: function(response5) {
                $('#pc').html(response5); // Menampilkan status di halaman
            },
            error: function() {
                $('#pc').html('Terjadi kesalahan dalam memeriksa status.');
            }
        });
    }

    // Panggil fungsi checkStatus setiap 5 detik
    setInterval(checkStatus5, 1000); // Menunggu 5 detik untuk pengecekan berikutnya
</script>

<!-- <script>
    // Fungsi untuk memeriksa status website setiap 5 detik
    function checkStatus6() {
        $.ajax({
            url: 'BM.php', // File PHP untuk memeriksa status
            method: 'GET',
            success: function(response6) {
                $('#bm').html(response6); // Menampilkan status di halaman
            },
            error: function() {
                $('#bm').html('Terjadi kesalahan dalam memeriksa status.');
            }
        });
    }

    // Panggil fungsi checkStatus setiap 5 detik
    setInterval(checkStatus6, 1000); // Menunggu 5 detik untuk pengecekan berikutnya
</script> -->

<script>
    // Fungsi untuk memeriksa status website setiap 5 detik
    function checkStatus7() {
        $.ajax({
            url: 'Pos_pie.php', // File PHP untuk memeriksa status
            method: 'GET',
            success: function(response7) {
                $('#pie').html(response7); // Menampilkan status di halaman
            },
            error: function() {
                $('#pie').html('Terjadi kesalahan dalam memeriksa status.');
            }
        });
    }

    // Panggil fungsi checkStatus setiap 5 detik
    setInterval(checkStatus7, 1000); // Menunggu 5 detik untuk pengecekan berikutnya
</script>

<script>
    // Fungsi untuk memeriksa status website setiap 5 detik
    function checkStatus8() {
        $.ajax({
            url: 'Absen.php', // File PHP untuk memeriksa status
            method: 'GET',
            success: function(response8) {
                $('#absen').html(response8); // Menampilkan status di halaman
            },
            error: function() {
                $('#absen').html('Terjadi kesalahan dalam memeriksa status.');
            }
        });
    }

    // Panggil fungsi checkStatus setiap 5 detik
    setInterval(checkStatus8, 1000); // Menunggu 5 detik untuk pengecekan berikutnya
</script>


<script>
    // Fungsi untuk memeriksa status website setiap 5 detik
    function checkStatus9() {
        $.ajax({
            url: 'Trusmi.php', // File PHP untuk memeriksa status
            method: 'GET',
            success: function(response9) {
                $('#trusmi').html(response9); // Menampilkan status di halaman
            },
            error: function() {
                $('#trusmi').html('Terjadi kesalahan dalam memeriksa status.');
            }
        });
    }

    // Panggil fungsi checkStatus setiap 5 detik
    setInterval(checkStatus9, 1000); // Menunggu 5 detik untuk pengecekan berikutnya
</script>


<script>
    function updateTime() {
        var now = new Date();
        var timeString = now.toLocaleTimeString();
        document.getElementById("time").innerText = timeString;
    }

    // Update waktu setiap detik
    setInterval(updateTime, 5000);
</script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Input Data Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Pengelolaan Data Mahasiswa</h1>
        <div id="content">
            <form action="proses_mahasiswa.php" method="POST">
                <div class="form-group">
                    <label>Nama:</label>
                    <input type="text" name="nama" size="25" maxlength="50">
                </div>
                <div class="form-group">
                    <label>Alamat:</label>
                    <input type="text" name="alamat" size="25" maxlength="50">
                </div>
                <div class="form-group">
                    <label>Jenis Kelamin:</label>
                    <input type="radio" name="jenis_kelamin" value="Laki-Laki"> Laki-Laki
                    <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan<br>
                </div>
                <div class="form-group">
                    <label>Pekerjaan:</label>
                    <select name="pekerjaan">
                        <option value="Pelajar">Pelajar</option>
                        <option value="Karyawan">Karyawan</option>
                        <option value="Wirausaha">Wirausaha</option>
                        <option value="Lain-lain">Lain-lain</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Hobi:</label>
                    <input type="checkbox" name="hobi[]" value="Olahraga"> Olahraga
                    <input type="checkbox" name="hobi[]" value="Musik"> Musik
                    <input type="checkbox" name="hobi[]" value="Jalan-Jalan"> Jalan-Jalan
                </div>
                <div class="form-actions">
                    <button type="submit">Kirim</button>
                    <button type="reset">Batal</button>
                </div>
            </form>
  <button id="tombol">Lihat Data</button>
  <p><span id="hasil"></span></p>
    <script>
    var tombolNode = document.getElementById("tombol");
    var hasilNode = document.getElementById("hasil");
    function getAJAX(){
      var request = new XMLHttpRequest();
      request.open("GET", "tampil_mahasiswa.php", true);
      request.send();
      
      request.onreadystatechange = function() {
        if (request.readyState == 4 && request.status == 200) {
         hasilNode.innerHTML = request.responseText;
          // Tambahkan tombol "Tutup"
          var tutupButton = document.createElement("button");
          tutupButton.textContent = "Tutup";
          tutupButton.id = "tutup";
          hasilNode.appendChild(tutupButton);

          // Tambahkan event listener untuk tombol "Tutup"
          tutupButton.addEventListener("click", function() {
            hasilNode.innerHTML = ""; // Hapus konten dari elemen hasil
          });
        }
      };
    }
    
    tombolNode.addEventListener("click",getAJAX);
    </script>
</body>
</html>

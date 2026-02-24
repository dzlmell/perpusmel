<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategori Buku</title>
</head>
<body>
    <div class="container-fluid">
        <!-- Judul halaman -->
        <h1 class="h3 mb-4 text-gray-800">Kategori</h1>

        <div class="card shadow mb-4">
            <div class="card-body">
                <form action="" method="POST">
                    <?php
                    if(isset($_POST['submit'])){
                        $kategori = strtolower($_POST['kategori']);
                        // Mengecek data kategori
                        $cek = mysqli_query($koneksi, "SELECT * FROM kategori WHERE LOWER(kategori)='$kategori'");
                        $check = mysqli_num_rows($cek);
                        if ($check > 0) {
                            echo "Data yang dimasukan sama";
                        } else {
                            $query = mysqli_query($koneksi, "INSERT INTO kategori(kategori) VALUES ('$kategori')");
                            if($query){
                                echo '<script>alert("Tambah data berhasil"); </script>';
                            } else {
                                echo '<script>alert("Tambah data gagal"); </script>';
                            }
                        }
                    }
                    ?>
                    <!-- Form group -->
                    <div class="row mb-3">
                        <label class="col-md-3 col-form-label">Nama Kategori</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="kategori" placeholder="Masukan nama kategori" required>
                        </div>
                    </div>
                    <!-- Button area -->
                    <div class="row">
                        <div class="col-md-9 offset-md-3">
                            <button type="submit" class="btn btn-primary" name="submit" value="submit">Simpan</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                            <a href="?page=kategori" class="btn btn-danger">Kembali</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
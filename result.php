<?php
//silahkan jawab disini (menangkap data dari form)
if ($_POST) {
    $waktu_olahraga = $_POST["exercise"];
}
//silahkan jawab disini (logika pola makan berdasarkan lama olahraga)
if ($waktu_olahraga <= 0) {$hasil = "Dianjurkan tidak makan malam dan melakukan olahraga ringan di malam hari selama 5 menit.";
} elseif ($waktu_olahraga <= 15) {$hasil = "Tidak boleh makan nasi";
} elseif ($waktu_olahraga > 15) {$hasil = "Boleh makan nasi sebanyak 5 sendok makan";
} 
?>

<!DOCTYPE html>
<html lang="en">    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pola Makan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6 text-center">
            <h3>Hasil Pola Makan Anda</h3>
            <p class="alert alert-info">
                 <?php
                 if (!empty($hasil)) {
                    echo "<div class='alert alert-success'>Pola makan yang dianjurkan yaitu: $hasil</div>";
                 }
                 ?>
            </p>
            <?php
                 if (!empty($error)) {
                    echo "<div class='alert alert-danger'>$error</div>";
                 }
                 ?>
            <a href="index.php" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

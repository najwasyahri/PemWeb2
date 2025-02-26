<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Nilai Siswa</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow">
        <div class="container">
            <a class="navbar-brand" href="#">Daftar Nilai</a>
        </div>
    </nav>
    
    <div class="container mt-5">
        <h3 class="text-center text-primary">Daftar Nilai Siswa</h3>
        <div class="table-responsive">
            <table class="table table-bordered table-striped text-center">
                <thead class="table-primary">
                    <tr>
                        <th>No</th>
                        <th>NIM</th>
                        <th>UTS</th>
                        <th>UAS</th>
                        <th>Tugas</th>
                        <th>Nilai Akhir</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $ns1 = ['id' => 1, 'nim' => '01101', 'uts' => 80, 'uas' => 84, 'tugas' => 78];
                    $ns2 = ['id' => 2, 'nim' => '01121', 'uts' => 70, 'uas' => 50, 'tugas' => 68];
                    $ns3 = ['id' => 3, 'nim' => '01130', 'uts' => 60, 'uas' => 86, 'tugas' => 70];
                    $ns4 = ['id' => 4, 'nim' => '01134', 'uts' => 90, 'uas' => 91, 'tugas' => 82];

                    $ar_nilai = [$ns1, $ns2, $ns3, $ns4];
                    $nomor = 1;
                    foreach ($ar_nilai as $ns) {
                        echo '<tr>';
                        echo '<td>' . $nomor . '</td>';
                        echo '<td>' . $ns['nim'] . '</td>';
                        echo '<td>' . $ns['uts'] . '</td>';
                        echo '<td>' . $ns['uas'] . '</td>';
                        echo '<td>' . $ns['tugas'] . '</td>';
                        $nilai_akhir = ($ns['uts'] + $ns['uas'] + $ns['tugas']) / 3;
                        echo '<td>' . number_format($nilai_akhir, 2, ',', '.') . '</td>';
                        echo '</tr>';
                        $nomor++;
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    
    </footer>
    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
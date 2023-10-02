<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">

        <?php
    // Pertemuan 1 (Variabel)
    echo "Selamat Sore, ";
    $nama = "Readysna Krisna Pambudi";
    $npm = 2226250097;
    $status = true;

    echo "<br>Nama Saya $nama, dengan npm : $npm, status : $status";
    echo "<hr>";
    
    // Pertemuan 2 (Array)
    // Array Index
    $hobi = array("Dance", "Menyanyi", "Menonton");
    $hobi2 = ["Bermain Properti", "Badminton"];

    echo $hobi[0].", ".$hobi[1].", ".$hobi2[0].", ".$hobi2[1];
    echo "<hr>";

    // Array Asosiatif
    $mahasiswa = [
        "npm" => 2226250097,
        "nama" => "Readysna Krisna Pambudi",
        "email" => "koalawaruk123@gmail.com",
        "status" => true
    ];
    echo $mahasiswa["npm"]."<br>".$mahasiswa["nama"]."<br>".$mahasiswa["email"]."<br>".$mahasiswa["status"];
    echo "<hr>";

    // Array Multidimensi
    $mahasiswaif3b = [
      [
        "npm" => 2226250097,
        "nama" => "Readysna Krisna Pambudi"
      ],  
      [
        "npm" => 2226250102,
        "nama" => "Zavier Billy Prasetyo"
      ],
      [
        "npm" => 2226250019,
        "nama" => "Steven William"
      ]
    ];

    echo $mahasiswaif3b[0]["npm"]." ".$mahasiswaif3b[0]["nama"];
    echo "<br>";

    echo $mahasiswaif3b[1]["npm"]." ".$mahasiswaif3b[1]["nama"];
    echo "<br>";

    echo $mahasiswaif3b[2]["npm"]." ".$mahasiswaif3b[2]["nama"];
    echo "<hr>";

    foreach($mahasiswaif3b as $kim) {
        echo $kim["npm"]." ".$kim["nama"];
        echo "<br>";
    }
    echo "<hr>";
    
    echo   "<table class= 'table table-striped table-hover'>
                <tr>
                    <th>NPM</th>
                    <th>Nama</th>
                </tr>";

    foreach($mahasiswaif3b as $row) {
        echo "<tr>";
        echo "<td>".$row["npm"]."</td>";
        echo "<td>".$row["nama"]."</td>";
        echo "</tr>";
    };
    echo "</table>";
    echo "<hr>";
    echo "<br>";

    $mahasiswaif3bjadwal = [
      [
        "no" => 1,
        "hari" => "Senin",
        "jam" => "9.40:00 - 11:20:00",
        "matakuliah" => "Teori Bahasa dan Otomata",
        "sks" => 2,
        "ruang" => "A 303 Gedung Rajawali 14",
        "kelas" => "IF3B",
        "dosen" => "Dien Novita, S.Si., M.T.I."
      ],  
      [
        "no" => 2,
        "hari" => "Senin",
        "jam" => "13:30:00 - 15:10:00",
        "matakuliah" => "Algoritma dan Struktur Data II",
        "sks" => 3,
        "ruang" => "Lab B604 Gedung IT Super Store",
        "kelas" => "IF3B",
        "dosen" => "Tinaliah, M.Kom."
      ],
      [
        "no" => 3,
        "hari" => "Selasa",
        "jam" => "07:50:00 - 09:30:00",
        "matakuliah" => "Statistika dan Probabilitas",
        "sks" => 4,
        "ruang" => "A 304 Gedung Rajawali 14",
        "kelas" => "IF3B",
        "dosen" => "Indrawani S,Ir., MS"
      ]
    ];
    
    echo   "<table class= 'table table-striped table-hover'>
                <tr>
                    <th>NO</th>
                    <th>HARI</th>
                    <th>JAM</th>
                    <th>MATA KULIAH</th>
                    <th>SKS</th>
                    <th>RUANG</th>
                    <th>KELAS</th>
                    <th>DOSEN</th>
                </tr>";

    foreach($mahasiswaif3bjadwal as $ipi) {
        echo "<tr>";
        echo "<td>".$ipi["no"]."</td>";
        echo "<td>".$ipi["hari"]."</td>";
        echo "<td>".$ipi["jam"]."</td>";
        echo "<td>".$ipi["matakuliah"]."</td>";
        echo "<td>".$ipi["sks"]."</td>";
        echo "<td>".$ipi["ruang"]."</td>";
        echo "<td>".$ipi["kelas"]."</td>";
        echo "<td>".$ipi["dosen"]."</td>";
        echo "</tr>";
    };
    echo "</table>";
        
?>
    </div>
</body>

</html>
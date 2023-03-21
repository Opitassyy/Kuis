<?php
// Kuis Pemrograman Web II - IF4B
// ==============================
// Mahasiswa diizinkan mengakses dokumentasi seperti php.net, w3schools, bootstrap, repository github pw2 mahasiswa
// Mahasista TIDAK diizinkan mengakses ChatGPT untuk menyelesaikan soal kuis ini

// ==========================================================================================
// PERHATIAN
// ==========================================================================================
// 1. Berdoa terlebih dahulu agar diberi kemudahan dalam menjawab soal
// 2. Percaya diri dengan kemampuan yang dimiliki dalam menjawab soal
// 3. Dilarang kerja sama, berbagi jawaban dengan peserta lain 
// 4. Buat folder "kuis" di dalam folder htdocs
// 5. RENAME soal.txt menjadi soal.php dan simpan di dalam folder "kuis"
// 6. Setelah selesai menjawab atau waktu habis, silakan zip folder "kuis" dan upload ke SPON
// ==========================================================================================

// soal 1 (5 poin)
// Buat sebuah function PHP yang menerima dua parameter angka dan mengembalikan hasil penjumlahan dari kedua angka tersebut?


// TULIS JAWABAN SOAL KE-1 DI BAWAH SINI YA (silakan ganti namaFunction)
function tambahkan($a, $b)
{
    return $a + $b;
}

// Contoh penggunaan : 
echo "Penambahan 1 + 2 = " . tambahkan(1, 2); // output : 3
echo "</br>";
// ==========================================================================================

// soal 2 (15 poin)
// Buat function PHP yang menerima sebuah parameter tanggal dengan format YYYY-MM-DD dan mengembalikan tanggal dalam format Indonesia (Nama bulan dalam bahasa Indonesia: Januari, Februari, Maret, April, Mei, Juni, Juli, Agustus, September, Oktober, November, Desember)

// TULIS JAWABAN SOAL KE-2 DI BAWAH SINI YA (silakan ganti namaFunctionTgl)

function tgl_indo($tanggal)
{
    $bulan = array(
        1 => 'Januari',
        2 => 'Febuari',
        3 => 'Maret',
        4 => 'April',
        5 => 'Mei',
        6 => 'Juni',
        7 => 'Juli',
        8 => 'Agustus',
        9 => 'September',
        10 => 'Oktober',
        11 => 'November',
        12 => 'Desember'
    );
    $tgl_indo = explode('-', $tanggal);

    return $tgl_indo[2] . ' ' . $bulan[(int) $tgl_indo[1]] . ' ' . $tgl_indo[0];

}


// Contoh penggunaan :
$tanggal = date('2023-03-01'); // 2023-03-21
echo "2023-03-21 ==> " . tgl_indo($tanggal); // Output : 21 Maret 2023

// ==========================================================================================

// soal 3 (25 poin)
/*
a. Susun data mahasiswa di bawah ini ke dalam bentuk array asosiatif (multidimensi)

npm: 001
nama: ahmad
jk: L

npm: 001
nama: umar
jk: L

npm: 003
nama: aisyah
jk: P

b. Kemudian tampilkan data array menggunakan foreach ke dalam bentuk tabel dengan urutan kolom NPM | Nama Mahasiswa | Jenis Kelamin
c. Hitung jumlah mahasiswa laki-laki dan perempuan, kemudian tampilkan di bawah tabel 4.b (Gunakan variabel atau function untuk mendapatkan jumlah mahasiswa laki-laki dan perempuan)
*/

// TULIS JAWABAN SOAL KE-3 DI BAWAH SINI YA
// Buat array, tampilkan dalam bentuk tabel, jumlah mhs laki-laki dan jumlah mhs perempuan di bawah sini
// ...

$mahasiswa = [
    [
        'npm' => 001,
        'nama' => 'ahmad',
        'jk' => 'L'
    ],
    [
        'npm' => 002,
        'nama' => 'umar',
        'jk' => 'L'
    ],
    [
        'npm' => 003,
        'nama' => 'aisyah',
        'jk' => 'P'
    ]
];
echo "<table border = 1px>";
echo "<tr>";
echo "<th> NPM </th> <th> Nama Mahasiswa </th> <th> Jenis Kelamin </th>";
foreach ($mahasiswa as $item) {
    echo "<tr>";
    echo "<td>" . $item['npm'] . "</td>";
    echo "<td>" . $item['nama'] . "</td>";
    echo "<td>" . $item['jk'] . "</td>";
    echo "</tr>";

}
echo "</table>";

// ==========================================================================================

// soal 4 (35 poin)
/*
a. Susun data pegawai di bawah ini ke dalam bentuk array asosiatif (multidimensi)

kode: 001
nama_pegawai: alif
kode_jabatan: M

kode: 001
nama_pegawai: linus
kode_jabatan: WP

kode: 003
nama_pegawai: putra
kode_jabatan: MP

kode: 004
nama_pegawai: rizky
kode_jabatan: UIX

kode: 005
nama_pegawai: thomas
kode_jabatan: DB

b. Kemudian tampilkan data array menggunakan foreach ke dalam bentuk tabel dengan urutan kolom Kode | Nama Pegawai | Jabatan | Gaji
c. Tampilkan data pada kolom jabatan sesuai dengan ketentuan berikut ini:
    - M = Manager
    - WP = Web Programmer
    - MP = Mobile Programmer
    - UIX = UI/UX Designer
    - DB = Database Designer
d. Tampilkan data pada kolom gaji sesuai dengan ketentuan berikut ini: (Gunakan fungsi number_format() untuk mengubah format angka gaji dari 15000000 menjadi 15.000.000)
    - M = 15000000
    - WP = 10000000
    - MP = 10000000
    - UIX = 8000000
    - DB = 9000000
e. Hitung dan tampilkan total gaji semua pegawai yang harus dibayar perusahaan
*/
// TULIS JAWABAN SOAL KE-4 DI BAWAH SINI YA
$pegawai = [
    [
        'kode' => '001',
        'nama_pegawai' => 'alif',
        'kode_jabatan' => 'M'
    ],
    [
        'kode' => '002',
        'nama_pegawai' => 'linus',
        'kode_jabatan' => 'WP'
    ],
    [
        'kode' => '003',
        'nama_pegawai' => 'putra',
        'kode_jabatan' => 'MP'
    ],
    [
        'kode' => '004',
        'nama_pegawai' => 'rizky',
        'kode_jabatan' => 'UIX'
    ],
    [
        'kode' => '005',
        'nama_pegawai' => 'thomas',
        'kode_jabatan' => 'DB'
    ]
];

echo "<table border=1px>";
echo "<th>Kode</th>Nama Pegawai<th>Jabatan</th><th>Gaji</th>";

$totalGaji = 0;
foreach ($pegawai as $item) {
    echo "<tr>";
    echo "<td>" . $item['kode'] . "</td>";
    echo "<td>" . $item['nama_pegawai'] . "</td>";
    echo "<td>" . getNamaJabatan($item['kode_jabatan']) . "</td>";
    echo "<td>" . number_format(getGaji($item['kode_jabatan']), 0, ',', '.') . "</td>";
    $totalGaji += getGaji($item['kode_jabatan']);
    echo "</tr>";

}

echo "<tr><td colspan=4>Total Gaji =" . number_format($totalGaji, 0, ',', '.') . "</td></tr>";
echo "</table>";

function getNamaJabatan($kodeJabatan)
{
    $kode = [
        'M' => 'Manager',
        'WP' => 'Web Programmer',
        'MP' => 'Mobile Programmer',
        'UIX' => 'UI/UX Designer',
        'DB' => 'Database Designer'
    ];
    return $kode[$kodeJabatan];
}

function getGaji($kodeJabatan)
{
    $gaji = [
        'M' => 15000000,
        'WP' => 10000000,
        'MP' => 10000000,
        'UIX' => 8000000,
        'DB' => 9000000
    ];
    return $gaji[$kodeJabatan];

}

// ==========================================================================================

// soal 5 (20 poin)
/* Buat class "Alumni" dengan atribut/property "npm", "nama", "tahun_lulus", dan "tahun_diterima_kerja". 
Buat juga method getInfo() yang mengembalikan (return) informasi alumni seperti npm, nama, tahun_lulus, tahun_diterima_kerja dan waktu_tunggu_kerja alumni tersebut. Waktu_tunggu_kerja didapat dari tahun_diterima_kerja - tahun_lulus */

// Buat class Alumni di bawah sini
// class ....

/* Buat objek alumni1, alumni2 dari class Alumni, kemudian isi semua atribut dari class Alumni */

// Buat objek alumni1, alumni2 di bawah sini
// $alumni1 ....

/* Tampilkan data alumni1 dan alumni2 dengan output sebagai berikut:
Alumni ke-1
NPM : ... 
Nama Alumni : ... 
Tahun Lulus : ...
Tahun Diterima Kerja : ...
Waktu Tunggu Kerja : ... tahun
Alumni ke-2
NPM : ... 
Nama Alumni : ... 
Tahun Lulus : ...
Tahun Diterima Kerja : ...
Waktu Tunggu Kerja : ... tahun
*/

// TULIS JAWABAN SOAL KE-5 DI BAWAH SINI YA
class Alumni
{
    public $npm;
    public $nama;
    public $tahun_lulus;
    public $tahun_diterima_kerja;

}

// ==========================================================================================
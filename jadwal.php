<?php
$koneksi = mysqli_connect("localhost", "root", "", "pppm2");


$schedules = array();
$getAllelement  = mysqli_query($koneksi, "SELECT j.id_jadwal, m.nama_pelajaran, m.ket_pelajaran,    k.nama_kelas
FROM jadwal j
JOIN pelajaran m ON j.id_pelajaran = m.id_pelajaran
JOIN kelas k ON j.id_kelas = k.id_kelas");


if ($getAllelement->num_rows > 0) {
    while ($row = $getAllelement->fetch_assoc()) {
        $schedules[$row['id_jadwal']] = array(
            'nama_pelajaran' => $row['nama_pelajaran'],
            'ket_pelajaran' => $row['ket_pelajaran'],
            'nama_kelas' => $row['nama_kelas']
        );
    }
}


$selectedSchedule = array(
    'nama_pelajaran' => 'Jadwal Materi Pengajian',
    'ket_pelajaran' => '',
    'nama_kelas' => ''
);

if (isset($_GET['jadwal']) && array_key_exists($_GET['jadwal'], $schedules)) {
    $selectedSchedule = $schedules[$_GET['jadwal']];
}

$namaPelajaran = $selectedSchedule['nama_pelajaran'];
$keteranganPelajaran = $selectedSchedule['ket_pelajaran'];
$namaKelas = $selectedSchedule['nama_kelas'];
?>
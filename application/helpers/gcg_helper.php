<?php
// Konversi waktu ke : Senin, 4 Januari 2014
function format_hari_tanggal($waktu)
{
    // Senin, Selasa dst.
    $hari_array = array(
        'Minggu',
        'Senin',
        'Selasa',
        'Rabu',
        'Kamis',
        'Jumat',
        'Sabtu'
    );
    $hr = date('w', strtotime($waktu));
    $hari = $hari_array[$hr];

    // Tanggal: 1-31 dst, tanpa leading zero.
    $tanggal = date('j', strtotime($waktu));

    // Bulan: Januari, Maret dst.
    $bulan_array = array(
        1 => 'Januari',
        2 => 'Februari',
        3 => 'Maret',
        4 => 'April',
        5 => 'Mei',
        6 => 'Juni',
        7 => 'Juli',
        8 => 'Agustus',
        9 => 'September',
        10 => 'Oktober',
        11 => 'November',
        12 => 'Desember',
    );
    $bl = date('n', strtotime($waktu));
    $bulan = $bulan_array[$bl];

    // Tahun, 4 digit.
    $tahun = date('Y', strtotime($waktu));

    // Hasil akhir: Senin, 1 Oktober 2014
    return "$hari, $tanggal $bulan $tahun";
}

// Format tangal ke 1 Januari 1990
function format_tanggal($waktu)
{
    // Tanggal, 1-31 dst, tanpa leading zero.
    $tanggal = date('j', strtotime($waktu));

    // Bulan, Januari, Maret dst
    $bulan_array = array(
        1 => 'Januari',
        2 => 'Februari',
        3 => 'Maret',
        4 => 'April',
        5 => 'Mei',
        6 => 'Juni',
        7 => 'Juli',
        8 => 'Agustus',
        9 => 'September',
        10 => 'Oktober',
        11 => 'November',
        12 => 'Desember',
    );
    $bl = date('n', strtotime($waktu));
    $bulan = $bulan_array[$bl];

    // Tahun
    $tahun = date('Y', strtotime($waktu));

    // Senin, 12 Oktober 2014
    return "$tanggal $bulan $tahun";
}

// Format tangal ke yyyy-mm-dd
function date_to_en($tanggal)
{
    $tgl = date('Y-m-d', strtotime($tanggal));
    if ($tgl == '1970-01-01') {
        return '';
    } else {
        return $tgl;
    }
}

// Format tangal ke dd-mm-yyyy
function date_to_id($tanggal)
{
    $tgl = date('d-m-Y', strtotime($tanggal));
    if ($tgl == '01-01-1970') {        
        return '';
    } else {
        return $tgl;
    }
}


// Format nomor divisi ke 20140001
function format_no_divisi($no)
{
    // Ambil nilai prefix dari file konfigurasi "psb.php"
    $prefix = config_item('psb_prefix_no_divisi');    
    $leadingzeros = '0000';
    $no_divisi = $prefix . substr($leadingzeros, 0, (-strlen($no))) . $no;
    return $no_divisi;
}

// Mendapatkan nilai interger no_divisi
function get_no_divisi_value($no_divisi)
{
    return intval(substr($no_divisi, 4, 4));
}

// Buat setiap awal kata huruf besar
function format_title_case($string)
{
    return ucwords($string);
}

function format_divisi_code($divisi_code)
{
    if ($divisi_code == '0') {
        return 'Lainnya';
    } elseif ($divisi_code == '95720') {
        return 'Perencanaan Kinerja Perusahaan';
    } elseif ($divisi_code == '69730') {
        return 'Akuntansi Keuangan';
    } elseif ($divisi_code == '09060') {
        return 'Human Capital Pengembangan Organisasi';
    } elseif ($divisi_code == '03779') {
        return 'Sistem Informasi Manajemen';
    } elseif ($divisi_code == '16280') {
        return 'Bisnis Hankam';
    } elseif ($divisi_code == '31588') {
        return 'Senjata';
    } elseif ($divisi_code == '81803') {
        return 'Amunisi';
    } elseif ($divisi_code == '47250') {
        return 'Kendaraan Khusus';
    } elseif ($divisi_code == '71885') {
        return 'Bisnis Industrial';
    } elseif ($divisi_code == '00887') {
        return 'Alat Berat';
    } elseif ($divisi_code == '62047') {
        return 'Tempa Cor Alat Perkretaapian';
    } elseif ($divisi_code == '93014') {
        return 'Bahan Peledak Komersial';
    } elseif ($divisi_code == '38512') {
        return 'Teknologi Pengembangan';
    } elseif ($divisi_code == '43737') {
        return 'Quality Assurance K3LH';
    } elseif ($divisi_code == '59280') {
        return 'Supply Chain';
    } else {
        return ucwords($divisi_code);
    }
}

function format_scorecard_code($scorecard_code)
{
    if ($scorecard_code == '0') {
        return 'Lainnya';
    } elseif ($scorecard_code == '1001') {
        return 'Perusahaan memiliki Pedoman Telola Perusahaan yang Baik (GCG Code) yang ditinjau dan dimutakhirkan secara berkala.';
    } elseif ($scorecard_code == '1002') {
        return 'Perusahaan memiliki Pedoman Perilaku yang ditinjau dan dimutakhirkan secara berkala.';
    } elseif ($scorecard_code == '1003') {
        return 'Direksi menunjuk seorang anggota Direksi sebagai penanggung jawab dalam penerapan dan pemantauan Tata Kelola Perusahaan yang Baik.';
    } elseif ($scorecard_code == '1004') {
        return 'Perusahaan menciptakan situasi kondusif  untuk melaksanakan Pedoman Tata Kelola Perusahaan yang Baik (GCG Code) dan Pedoman Perilaku.';
    } elseif ($scorecard_code == '1005') {
        return 'Perusahaan melakukan assessment terhadap pelaksanaan Tata Kelola Perusahaan yang Baik dan reviun secara berkala.';
    } elseif ($scorecard_code == '1006') {
        return 'Pelaksanaan Tata Kelola Perusahaan yang Baik menjadi salah satu unsur Key Performance Indicator (KPI) yang dituangkan dalam Kontrak Manajemen.';
    } elseif ($scorecard_code == '1007') {
        return 'Perusahaan memiliki kebijakan tentang kepatuhan pelaporan harta kekayaan penyelenggara negara bagi Dewan Komisaris/Dewan Pengawas, Direksi dan pejabat satu tingkat di bawah Direksi.';
    } elseif ($scorecard_code == '1008') {
        return 'Penyelenggara Negara/Wajib Lapor memahami kebijakan/SOP tentang kepatuhan pelaporan  harta kekayaan penyelenggara negara.';
    } elseif ($scorecard_code == '1009') {
        return 'Perusahaan melaksanakan kebijakan/SOP tentang kepatuhan pelaporan  harta kekayaan Penyelenggara Negara.';
    } elseif ($scorecard_code == '1010') {
        return 'Perusahaan memiliki ketentuan/kebijakan  tentang Pengendalian Gratifikasi.';
    } elseif ($scorecard_code == '1011') {
        return 'Perusahaan melaksanakan upaya untuk meningkatkan pemahaman terhadap kebijakan/ketentuan Pengendalian Gratifikasi.';
    } elseif ($scorecard_code == '1012') {
        return 'Perusahaan mengimplementasikan Pengendalian Gratifikasi.';
    } elseif ($scorecard_code == '1013') {
        return 'Perusahaan memiliki kebijakan tentang pelaporan atas dugaan penyimpangan pada perusahaan (whistle blowing system).';
    } elseif ($scorecard_code == '1014') {
        return 'Perusahaan melaksanakan kegiatan untuk memberikan pemahaman atas kebijakan pelaporan atas dugaan penyimpangan (whistle blowing system).';
    } elseif ($scorecard_code == '1015') {
        return 'Perusahaan melaksanakan kebijakan tentang pelaporan atas dugaan penyimpangan pada perusahaan (whistle blowing system).';
    } elseif ($scorecard_code == '2016') {
        return 'Pemegang Saham/RUPS/Pemilik Modal menetapkan pedoman pengangkatan dan pemberhentian Direksi.';
    } elseif ($scorecard_code == '2017') {
        return 'Pemegang Saham/RUPS/Pemilik Modal melaksanakan penilaian terhadap calon anggota Direksi.';
    } elseif ($scorecard_code == '2018') {
        return 'Pemegang Saham/RUPS/Pemilik Modal menetapkan pengangkatan anggota dan komposisi Direksi.';
    } elseif ($scorecard_code == '2019') {
        return 'Pemegang Saham/RUPS/Pemilik Modal menetapkan pengaturan mengenai rangkap jabatan bagi anggota Direksi.';
    } elseif ($scorecard_code == '2020') {
        return 'Pemegang Saham/RUPS/Pemilik Modal memberhentikan anggota Direksi sesuai dengan peraturan perundang-undangan.';
    } elseif ($scorecard_code == '2021') {
        return 'Pemegang Saham/RUPS/Pemilik Modal memberikan respon terhadap lowongan jabatan dan/atau pemberhentian sementara Direksi  oleh Dewan Komisaris/Dewan Pengawas.';
    } elseif ($scorecard_code == '2022') {
        return 'Pemegang Saham/RUPS/Pemilik Modal menetapkan pedoman pengangkatan dan pemberhentian Dewan Komisaris/Dewan Pengawas.';
    } elseif ($scorecard_code == '2023') {
        return 'Pemegang Saham/RUPS/Pemilik Modal melaksanakan penilaian terhadap calon anggota Dewan Komisaris/Dewan Pengawas.';
    } elseif ($scorecard_code == '2024') {
        return 'Pemegang Saham/RUPS/Pemilik Modal menetapkan pengangkatan anggota Dewan Komisaris/Dewan Pengawas dan komposisinya.';
    } elseif ($scorecard_code == '2025') {
        return 'Pemegang Saham/RUPS/Pemilik Modal menetapkan pengaturan mengenai rangkap jabatan bagi anggota Dewan Komisaris/Dewan Pengawas.';
    } elseif ($scorecard_code == '2026') {
        return 'Pemegang Saham/RUPS/Pemilik Modal memberhentikan anggota Dewan Komisaris/Dewan Pengawas sesuai dengan peraturan perundang-undangan.';
    } elseif ($scorecard_code == '2027') {
        return 'Pemegang Saham/RUPS/Pemilik Modal memberikan pengesahan Rencana Jangka Penjang Perusahaan (RJPP) atau Revisi RJPP.';
    } elseif ($scorecard_code == '2028') {
        return 'Pemegang Saham/RUPS/Pemilik Modal memberikan pengesahan Pengesahan Rencana Kerja dan Anggaran Perusahaan (RKAP).';
    } elseif ($scorecard_code == '2029') {
        return 'Pemegang Saham/RUPS/Pemilik Modal memberikan persetujuan/keputusan atas usulan aksi korporasi yang perlu mendapat persetujuan/keputusan RUPS/Pemilik Modal.';
    } elseif ($scorecard_code == '2030') {
        return 'RUPS/Pemilik Modal memberikan penilaian terhadap kinerja Direksi dan kinerja Dewan Komisaris/Dewan Pengawas.';
    } elseif ($scorecard_code == '2031') {
        return 'RUPS menetapkan gaji/honorarium, tunjangan, fasilitas dan tantiem/insentif kinerja untuk Direksi dan Dewan Komisaris/Dewan Pengawas.';
    } elseif ($scorecard_code == '2032') {
        return 'Pemegang Saham/RUPS/Pemilik Modal menetapkan auditor eksternal yang mengaudit Laporan Keuangan perusahaan.';
    } elseif ($scorecard_code == '2033') {
        return 'Pemegang Saham/RUPS/Pemilik Modal memberikan persetujuan laporan tahunan termasuk pengesahan laporan keuangan  serta tugas pengawasan Dewan Komisaris/Dewan Pengawas.';
    } elseif ($scorecard_code == '2034') {
        return 'Pemegang Saham/RUPS/Pemilik Modal menetapkan penggunaan laba bersih.';
    } elseif ($scorecard_code == '2035') {
        return 'Pengesahan terhadap Laporan Tahunan dan persetujuan terhadap Laporan Keuangan dilaksanakan tepat waktu.';
    } elseif ($scorecard_code == '2036') {
        return 'RUPS mengambil keputusan sesuai ketentuan perundang-undangan di bidang Perseroan Terbatas dan/atau Anggaran Dasar Perusahaan sehingga menghasilkan keputusan yang sah.';
    } elseif ($scorecard_code == '2037') {
        return 'RUPS mengambil keputusan melalui proses yang terbuka dan adil.';
    } elseif ($scorecard_code == '2038') {
        return 'Pemegang Saham/Pemilik Modal memberikan arahan/pembinaan penerapan Tata Kelola Perusahaan yang Baik kepada Direksi dan Dewan Komisaris/Dewan Pengawas.';
    } elseif ($scorecard_code == '2039') {
        return 'Pemegang Saham/Pemilik Modal tidak mencampuri kegiatan operasional perusahaan yang menjadi tanggung jawab Direksi.';
    } elseif ($scorecard_code == '2040') {
        return 'Pemegang Saham/Pemilik Modal merespon terhadap informasi yang diterima dari Direksi dan/atau Dewan Komisaris/Dewan Pengawas mengenai gejala penurunan kinerja dan kerugian perusahaan yang signifikan.';
    } elseif ($scorecard_code == '3041') {
        return 'Dewan komisaris/Dewan Pengawas yang baru diangkat mengikuti program pengenalan yang diselenggarakan oleh perusahaan.';
    } elseif ($scorecard_code == '3042') {
        return 'Dewan Komisaris/Dewan Pengawas melaksanakan program pelatihan dalam rangka meningkatkan kompetensi anggota Dewan Komisaris/Dewan Pengawas sesuai kebutuhan.';
    } elseif ($scorecard_code == '3043') {
        return 'Dewan Komisaris/Dewan Pengawas memiliki kebijakan dan melaksanakan pembagian tugas  diantara anggota Dewan Komisaris/Dewan Pengawas.';
    } elseif ($scorecard_code == '3044') {
        return 'Dewan Komisaris/Dewan Pengawas  menetapkan mekanisme pengambilan keputusan Dewan Komisaris/Dewan Pengawas.';
    } elseif ($scorecard_code == '3045') {
        return 'Dewan Komisaris/Dewan Pengawas menyusun rencana kerja setiap tahun yang memuat sasaran/ target yang ingin dicapai dan melaporkan secara tertulis kepada RUPS/Pemilik Modal.';
    } elseif ($scorecard_code == '3046') {
        return 'Dewan Komisaris/Dewan Pengawas  mendapatkan akses informasi perusahaan sesuai kewenangannya.';
    } elseif ($scorecard_code == '3047') {
        return 'Dewan Komisaris/Dewan Pengawas memberikan persetujuan atas rancangan RJPP yang disampaikan oleh Direksi.';
    } elseif ($scorecard_code == '3048') {
        return 'Dewan Komisaris/Dewan Pengawas memberikan persetujuan atas rancangan RKAP yang disampaikan oleh Direksi.';
    } elseif ($scorecard_code == '3049') {
        return 'Dewan Komisaris/Dewan Pengawas  memberikan arahan tentang hal-hal  penting mengenai perubahan lingkungan bisnis yang diperkirakan akan berdampak besar pada usaha dan kinerja perusahaan secara tepat waktu dan relevan.';
    } elseif ($scorecard_code == '3050') {
        return 'Dewan Komisaris/Dewan Pengawas dalam batas kewenangannya, merespon saran, harapan, permasalahan dan keluhan dari Stakeholders (pelanggan, pemasok, kreditur, dan karyawan) yang disampaikan langsung kepada Dewan Komisaris/Dewan Pengawas ataupun penyampaian oleh Direksi.';
    } elseif ($scorecard_code == '3051') {
        return 'Dewan Komisaris/Dewan Pengawas  memberikan arahan tentang penguatan sistem pengendalian intern perusahaan.';
    } elseif ($scorecard_code == '3052') {
        return 'Dewan Komisaris/Dewan Pengawas  memberikan arahan tentang manajemen risiko perusahaan.';
    } elseif ($scorecard_code == '3053') {
        return 'Dewan Komisaris/Dewan Pengawas  memberikan arahan tentang sistem teknologi informasi yang digunakan perusahaan.';
    } elseif ($scorecard_code == '3054') {
        return 'Dewan Komisaris/Dewan Pengawas  memberikan arahan tentang kebijakan dan pelaksanaan pengembangan karir.';
    } elseif ($scorecard_code == '3055') {
        return 'Dewan Komisaris/Dewan Pengawas  memberikan arahan tentang kebijakan akuntansi dan penyusunan laporan keuangan sesuai dengan standar akuntansi yang berlaku umum di Indonesia (SAK).';   
    } elseif ($scorecard_code == '3056') {
        return 'Dewan Komisaris/Dewan Pengawas  memberikan arahan tentang kebijakan pengadaan dan pelaksanaannya.';
    } elseif ($scorecard_code == '3057') {
        return 'Dewan Komisaris/Dewan Pengawas  memberikan arahan tentang kebijakan mutu dan pelayanan serta pelaksanaan kebijakan tersebut.';
    } elseif ($scorecard_code == '3058') {
        return 'Dewan Komisaris/Dewan Pengawas mengawasi dan memantau kepatuhan Direksi dalam menjalankan peraturan perundangan yang berlaku dan perjanjian dengan pihak ketiga.';
    } elseif ($scorecard_code == '3059') {
        return 'Dewan Komisaris/Dewan Pengawas  mengawasi dan memantau  kepatuhan Direksi dalam menjalankan perusahaan sesuai RKAP dan/atau RJPP.';
    } elseif ($scorecard_code == '3060') {
        return 'Dewan Komisaris/Dewan Pengawas  memberikan persetujuan atas transaksi atau tindakan dalam lingkup kewenangan Dewan Komisaris/Dewan Pengawas atau RUPS/Pemilik Modal.';
    } elseif ($scorecard_code == '3061') {
        return 'Dewan Komisaris/Dewan Pengawas  (berdasarkan usul dari Komite Audit) mengajukan calon Auditor Eksternal kepada RUPS/Pemilik Modal.';
    } elseif ($scorecard_code == '3062') {
        return 'Dewan Komisaris/Dewan Pengawas  memastikan audit eksternal dan audit internal dilaksanakan secara efektif serta melaksanakan telaah atas pengaduan yang berkaitan dengan BUMN yang diterima oleh Dewan Komisaris/Dewan Pengawas.';
    } elseif ($scorecard_code == '3063') {
        return 'Dewan Komisaris/Dewan Pengawas  melaporkan dengan segera kepada RUPS/Pemilik Modal apabila terjadi gejala menurunnya kinerja perusahaan serta saran-saran yang telah disampaikan kepada Direksi untuk memperbaiki permasalahan yang dihadapi.';
    } elseif ($scorecard_code == '3064') {
        return 'Dewan Komisaris/Dewan Pengawas melaksanakan pengawasan terhadap kebijakan pengelolaan anak perusahaan/perusahaan patungan  dan pelaksanaannya.';
    } elseif ($scorecard_code == '3065') {
        return 'Peran Dewan Komisaris/Dewan Pengawas dalam pemilihan calon anggota Direksi dan Dewan Komisaris Anak Perusahaan perusahaan/perusahaan patungan.';
    } elseif ($scorecard_code == '3066') {
        return 'Dewan Komisaris/Dewan Pengawas  mengusulkan calon anggota Direksi kepada Pemegang Saham/Pemilik Modal sesuai kebijakan dan kriteria seleksi yang ditetapkan.';
    } elseif ($scorecard_code == '3067') {
        return 'Dewan Komisaris/Dewan Pengawas  menilai Direksi dan melaporkan hasil penilaian tersebut kepada Pemegang Saham/Pemilik Modal.';
    } elseif ($scorecard_code == '3068') {
        return 'Dewan Komisaris/Dewan Pengawas  mengusulkan remunerasi Direksi sesuai ketentuan yang berlaku dan penilaian kinerja Direksi.';
    } elseif ($scorecard_code == '3069') {
        return 'Dewan komisaris/Pengawas memiliki kebijakan benturan kepentingan dan melaksanakan secara konsisten kebijakann tersebut.';
    } elseif ($scorecard_code == '3070') {
        return 'Dewan Komisaris/Dewan Pengawas  memastikan prinsip-prinsip Tata Kelola Perusahaan yang Baik telah diterapkan secara efektif dan berkelanjutan.';
    } elseif ($scorecard_code == '3071') {
        return 'Dewan Komisaris/Dewan Pengawas  melakukan pengukuran dan penilaian terhadap kinerja Dewan Komisaris/Dewan Pengawas.';
    } elseif ($scorecard_code == '3072') {
        return 'Dewan Komisaris/Dewan Pengawas memiliki pedoman/tata tertib Rapat Dewan Komisaris/Dewan Pengawas yang memadai.';
    } elseif ($scorecard_code == '3073') {
        return 'Rapat Dewan Komisaris/Dewan Pengawas diadakan secara berkala sesuai ketentuan yang berlaku dan/atau anggaran dasar.';
    } elseif ($scorecard_code == '3074') {
        return 'Dewan Komisaris/Dewan Pengawas melakukan evaluasi terhadap pelaksanaan keputusan hasil rapat sebelumnya.';
    } elseif ($scorecard_code == '3075') {
        return 'Sekretariat Dewan Komisaris/Dewan Pengawas memiliki uraian tugas yang jelas.';
    } elseif ($scorecard_code == '3076') {
        return 'Sekretariat Dewan Komisaris/Dewan Pengawas  melakukan administrasi dan penyimpanan dokumen.';
    } elseif ($scorecard_code == '3077') {
        return 'Sekretaris Dewan Komisaris/Dewan Pengawas  menyelenggarakan rapat Dewan Komisaris/Dewan Pengawas dan rapat/pertemuan antara Dewan Komisaris/Dewan Pengawas  dengan Pemegang Saham/Pemilik Modal, Direksi maupun pihak-pihak terkait lainnya.';
    } elseif ($scorecard_code == '3078') {
        return 'Sekretaris Dewan Komisaris/Dewan Pengawas menyediakan data/informasi yang diperlukan oleh Dewan Komisaris/Dewan Pengawas dan komite-komite di lingkungan Dewan Komisaris/Dewan Pengawas.';
    } elseif ($scorecard_code == '3079') {
        return 'Dewan Komisaris/Dewan Pengawas memiliki Komite Dewan Komisaris/Dewan Pengawas sesuai dengan ketentuan perundang-undangan yang berlaku dan kebutuhan Dewan Komisaris/Dewan Pengawas.';
    } elseif ($scorecard_code == '3080') {
        return 'Komposisi keanggotaan yang mendukung pelaksanaan fungsi Komite dan independensi dari masing-masing Komite Dewan Komisaris/Dewan Pengawas.';
    } elseif ($scorecard_code == '3081') {
        return 'Komite Dewan Komisaris/Dewan Pengawas memiliki piagam/charter dan program kerja  tahunan.';
    } elseif ($scorecard_code == '3082') {
        return 'Komite Dewan Komisaris/Dewan Pengawas melaksanakan pertemuan rutin sesuai dengan program kerja tahunan serta melakukan kegiatan lain yang ditugaskan Dewan Komisaris/Dewan Pengawas.';
    } elseif ($scorecard_code == '3083') {
        return 'Komite Dewan Komisaris/Dewan Pengawas melaporkan kegiatan dan hasil penugasan yang diterimanya kepada Dewan Komisaris/Dewan Pengawas.';
    } elseif ($scorecard_code == '4084') {
        return 'Direksi yang baru diangkat mengikuti program pengenalan yang diselenggarakan oleh perusahaan.';
    } elseif ($scorecard_code == '4085') {
        return 'Direksi melaksanakan program pelatihan dalam rangka meningkatkan kompetensi anggota Direksi sesuai kebutuhan.';
    } elseif ($scorecard_code == '4086') {
        return 'Direksi menetapkan struktur/susunan organisasi yang sesuai dengan kebutuhan perusahaan.';
    } elseif ($scorecard_code == '4087') {
        return 'Direksi menetapkan kebijakan-kebijakan operasioanl dan standard operasional baku (SOP) untuk proses bisnis inti (core business) perusahaan.';
    } elseif ($scorecard_code == '4088') {
        return 'Direksi menetapkan mekanisme pengambilan keputusan atas tindakan perusahaan (corporate action) sesuai ketentuan perundang-undangan dan tepat waktu.';
    } elseif ($scorecard_code == '4089') {
        return 'Direksi memiliki Rencana Jangka Panjang (RJPP) yang disahkan oleh RUPS/Pemilik Modal.';
    } elseif ($scorecard_code == '4090') {
        return 'Direksi memiliki Rencana Kerja dan Anggaran Perusahaan (RKAP) yang disahkan oleh RUPS/Menteri/Pemilik Modal.';
    } elseif ($scorecard_code == '4091') {
        return 'Direksi menempatkan karyawan pada semua tingkatan jabatan sesuai dengan spesifikasi jabatan dan memiliki rencana suksesi untuk seluruh jabatan dalam perusahaan.';
    } elseif ($scorecard_code == '4092') {
        return 'Direksi  memberikan respon terhadap usulan peluang bisnis yang berpotensi meningkatkan pendapatan perusahaan, penghematan/efisiensi perusahaan, pendayagunaan aset, dan manfaat lainnya.';
    } elseif ($scorecard_code == '4093') {
        return 'Direksi  merespon isu-isu terkini dari eksternal mengenai perubahan lingkungan bisnis dan permasalahannya,  secara tepat waktu dan relevan.';
    } elseif ($scorecard_code == '4094') {
        return 'Direksi melaksanakan program/kegiatan sesuai dengan RKAP dan mengambil keputusan yang diperlukan melalui analisis yang memadai dan tepat waktu.';
    } elseif ($scorecard_code == '4095') {
        return 'Direksi memiliki sistem/pedoman pengukuran dan penilaian kinerja untuk unit dan jabatan dalam organisasi (struktural) yang diterapkan secara obyektif dan transparan.';
    } elseif ($scorecard_code == '4096') {
        return 'Direksi menetapkan target kinerja berdasarkan RKAP dan diturunkan secara berjenjang di tingkat unit, sub unit dan jabatan di dalam organisasi (struktural) di organisasi.';
    } elseif ($scorecard_code == '4097') {
        return 'Direksi melakukan analisis dan evaluasi terhadap capaian kinerja untuk jabatan/unit-unit  di bawah Direksi dan tingkat perusahaan.';
    } elseif ($scorecard_code == '4098') {
        return 'Direksi melaporkan pelaksanaan sistem manajemen kinerja kepada Dewan Komisaris/Dewan Pengawas.';
    } elseif ($scorecard_code == '4099') {
        return 'Direksi menyusun dan menyampaikan kepada RUPS/Pemilik Modal tentang usulan insentif kinerja untuk Direksi.';
    } elseif ($scorecard_code == '4100') {
        return 'Direksi  menerapkan  sistem tentang teknologi informasi sesuai dengan kebijakan yang telah ditetapkan.';
    } elseif ($scorecard_code == '4101') {
        return 'Direksi melaksanakan sistem peningkatan mutu produk dan pelayanan.';
    } elseif ($scorecard_code == '4102') {
        return 'Direksi melaksanakan pengadaan barang dan jasa yang menguntungkan bagi perusahaan, baik harga maupun kualitas barang dan jasa tersebut.';
    } elseif ($scorecard_code == '4103') {
        return 'Direksi mengembangkan SDM, menilai kinerja dan memberikan remunerasi yang layak, dan membangun lingkungan SDM yang efektif  mendukung pencapaian perusahaan.';
    } elseif ($scorecard_code == '4104') {
        return 'Direksi menerapkan kebijakan pengaturan untuk anak perusahaan (subsidiary governance) dan/atau perusahaan patungan.';
    } elseif ($scorecard_code == '4105') {
        return 'Direksi menerapkan kebijakan akuntansi dan penyusunan laporan keuangan sesuai dengan standar akuntansi keuangan yang berlaku umum di Indonesia (SAK).';
    } elseif ($scorecard_code == '4106') {
        return 'Direksi  menerapkan manajemen risiko sesuai dengan kebijakan yang telah ditetapkan.';
    } elseif ($scorecard_code == '4107') {
        return 'Direksi menetapkan dan menerapkan sistem pengendalian intern untuk melindungi mengamankan investasi dan aset perusahaan.';
    } elseif ($scorecard_code == '4108') {
        return 'Direksi menindaklanjuti hasil pemeriksaan SPI dan auditor eksternal (KAP dan BPK).';
    } elseif ($scorecard_code == '4109') {
        return 'Direksi menetapkan mekanisme untuk menjaga kepatuhan terhadap peraturan perundang-undangan dan perjanjian dengan pihak ketiga.';
    } elseif ($scorecard_code == '4110') {
        return 'Perusahaan menjalankan peraturan perundang-undangan yang berlaku  dan perjanjian dengan pihak ketiga.';
    } elseif ($scorecard_code == '4111') {
        return 'Pelaksanaan hubungan dengan pelanggan.';
    } elseif ($scorecard_code == '4112') {
        return 'Pelaksanaann hubungan dengan pemasok.';
    } elseif ($scorecard_code == '4113') {
        return 'Pelaksanaan hubungan dengan kreditur.';
    } elseif ($scorecard_code == '4114') {
        return 'Pelaksanaan kewajiban kepada Negara.';
    } elseif ($scorecard_code == '4115') {
        return 'Pelaksanaan hubungan dengan karyawan perusahaan.';
    } elseif ($scorecard_code == '4116') {
        return 'Terdapat prosedur tertulis menampung dan  menindaklanjuti keluhan-keluhan stakeholders.';
    } elseif ($scorecard_code == '4117') {
        return 'Upaya untuk meningkatkan  nilai Pemegang Saham secara konsisten dan berkelanjutan.';
    } elseif ($scorecard_code == '4118') {
        return 'Perusahaan melaksanakan tanggung jawab sosial perusahaan untuk mendukung keberlanjutan operasi perusahaan.';
    } elseif ($scorecard_code == '4119') {
        return 'Direksi  menetapkan kebijakan tentang mekanisme bagi Direksi dan pejabat struktural untuk mencegah pengambilan keuntungan pribadi dan pihak lainnya disebabkan benturan kepentingan.';
    } elseif ($scorecard_code == '4120') {
        return 'Direksi menerapkan kebijakan untuk mencegah benturan kepentingan.';
    } elseif ($scorecard_code == '4121') {
        return 'Direksi melaporkan informasi-informasi yang relevan kepada Pemegang Saham dan Dewan Komisaris/Dewan Pengawas.';
    } elseif ($scorecard_code == '4122') {
        return 'Direksi memberikan perlakukan yang sama (fairness) dalam memberikan informasi kepada Pemegang Saham dan anggota Dewan Komisaris/Dewan Pengawas.';
    } elseif ($scorecard_code == '4123') {
        return 'Direksi memiliki pedoman/tata tertib Rapat Direksi, minimal mengatur etika rapat dan penyusunan risalah rapat, evaluasi tindak lanjut hasil rapat sebelumnya, serta pembahasan atas arahan/usulan  dan/atau  keputusan Dewan Komisaris/Dewan Pengawas.';
    } elseif ($scorecard_code == '4124') {
        return 'Direksi menyelenggarakan Rapat Direksi sesuai kebutuhan, paling sedikit sekali dalam setiap bulan.';
    } elseif ($scorecard_code == '4125') {
        return 'Anggota Direksi menghadiri setiap rapat Direksi maupun rapat Direksi & Komisaris, jika tidak dapat hadir yang bersangkutan harus menjelaskan alasan ketidakhadirannya.';
    } elseif ($scorecard_code == '4126') {
        return 'Direksi melakukan evaluasi terhadap pelaksanaan keputusan hasil rapat sebelumnya.';
    } elseif ($scorecard_code == '4127') {
        return 'Direksi menindaklanjuti arahan, dan/atau keputusan Dewan Komisaris/Dewan Pengawas.';
    } elseif ($scorecard_code == '4128') {
        return 'Perusahaan memiliki Piagam Pengawasan Intern yang ditetapkan oleh Direksi.';
    } elseif ($scorecard_code == '4129') {
        return 'SPI/Fungsi Audit Internal dilengkapi dengan faktor-faktor pendukung keberhasilan dalam pelaksanaan tugasnya.';
    } elseif ($scorecard_code == '4130') {
        return 'SPI melaksanakan pengawasan intern untuk memberikan nilai tambah dan memperbaiki operasional perusahaan.';
    } elseif ($scorecard_code == '4131') {
        return 'Sekretaris Perusahaan  dilengkapi dengan faktor-faktor pendukung keberhasilan pelaksanaan tugasnya.';
    } elseif ($scorecard_code == '4132') {
        return 'Sekretaris perusahaan menjalankan fungsinya.';
    } elseif ($scorecard_code == '4133') {
        return 'Direksi mengevaluasi kualitas fungsi sekretaris perusahaan.';
    } elseif ($scorecard_code == '4134') {
        return 'Direksi menyelenggarakan RUPS sesuai dengan prosedur yang ditetapkan dalam Anggaran Dasar dan peraturan perundang-undangan.';
    } elseif ($scorecard_code == '4135') {
        return 'Direksi menyediakan akses serta penjelasan lengkap dan informasi akurat berkenaan dengan penyelenggaraan RUPS agar dapat melaksanakan hak-haknya berdasarkan anggaran dasar dan peraturan perundang-undangan.';
    } elseif ($scorecard_code == '5136') {
        return 'Perusahaan menetapkan sistem dan prosedur pengendalian informasi perusahaan dengan tujuan untuk mengamankan informasi perusahaan yang penting.';
    } elseif ($scorecard_code == '5137') {
        return 'Tingkat kepatuhan perusahaan yang memadai terhadap kebijakan pengendalian informasi perusahaan.';
    } elseif ($scorecard_code == '5138') {
        return 'Terdapat media untuk penyediaan Informasi Publik agar dapat diperoleh dengan cepat dan tepat waktu, biaya ringan, dan cara sederhana.';
    } elseif ($scorecard_code == '5139') {
        return 'Website perusahaan mempublikasikan kebijakan dan informasi penting perusahaan.';
    } elseif ($scorecard_code == '5140') {
        return 'Perusahaan menyediakan media lain untuk mengkomunikasikan kebijakan informasi penting perusahaan.';
    } elseif ($scorecard_code == '5141') {
        return 'Informasi yang disediakan dalam website Perusahaan dan bumn.go.id dimutahirkan secara berkala.';
    } elseif ($scorecard_code == '5142') {
        return 'Tingkat kemudahan akses terhadap kebijakan dan informasi penting perusahaan yang disediakan dalam website perusahaan.';
    } elseif ($scorecard_code == '5143') {
        return 'Laporan Tahunan memenuhi ketentuan umum penyajian Laporan Tahunan.';
    } elseif ($scorecard_code == '5144') {
        return 'Laporan Tahunan memuat mengenai Ikhtisar Data Keuangan Penting.';
    } elseif ($scorecard_code == '5145') {
        return 'Laporan Tahunan memuat Laporan Dewan Komisaris/Dewan Pengawas dan Laporan Direksi.';
    } elseif ($scorecard_code == '5146') {
        return 'Laporan Tahunan memuat profil perusahaan secara lengkap';
    } elseif ($scorecard_code == '5147') {
        return 'Laporan Tahunan memuat bagian tersendiri mengenai Analisa dan Pembahasan Manajamen atas Kinerja Perusahaan.';
    } elseif ($scorecard_code == '5148') {
        return 'Laporan Tahunan memuat pengungkapan praktik Tata Kelola Perusahaan yang Baik.';
    } elseif ($scorecard_code == '5149') {
        return 'Laporan Tahunan memuat bagian tersendiri mengenai Laporan Keuangan.';
    } elseif ($scorecard_code == '5150') {
        return 'Perusahaan mengikuti Annual Report Award (ARA).';
    } elseif ($scorecard_code == '5151') {
        return 'Penghargaan atau award lainnya.';
    } elseif ($scorecard_code == '6152') {
        return 'Perusahaan memiliki bidang/area yang menjadi best practices di Industrinya atau menjadi tujuan benchmark bagi perusahaan lain (baik bagi BUMN maupun perusahaan swasta). Bidang/area tersebut dapat terdiri dari produk, proses, fungsi pendukung, kinerja organisasi, dan strategi.';
    } elseif ($scorecard_code == '6153') {
        return 'Terdapat penyimpangan dari prinsip-prinsip Tata Kelola Perusahaan yang baik.';
    } else {
        return ucwords($scorecard_code);
    }
}

function format_faktor_uji1_code($faktor_uji1_code)
{
    if ($faktor_uji1_code == '0') {
        return 'Lainnya';
    } elseif ($faktor_uji1_code == '1001') {
        return 'Perusahaan memiliki Pedoman Telola Perusahaan yang Baik (GCG Code) yang ditinjau dan dimutakhirkan secara berkala.';
    } elseif ($faktor_uji1_code == '1002') {
        return 'Perusahaan memiliki Pedoman Perilaku yang ditinjau dan dimutakhirkan secara berkala.';
    } elseif ($faktor_uji1_code == '1003') {
        return 'Direksi menunjuk seorang anggota Direksi sebagai penanggung jawab dalam penerapan dan pemantauan Tata Kelola Perusahaan yang Baik.';
    } elseif ($faktor_uji1_code == '1004') {
        return 'Perusahaan menciptakan situasi kondusif  untuk melaksanakan Pedoman Tata Kelola Perusahaan yang Baik (GCG Code) dan Pedoman Perilaku.';
    } elseif ($faktor_uji1_code == '1005') {
        return 'Perusahaan melakukan assessment terhadap pelaksanaan Tata Kelola Perusahaan yang Baik dan reviun secara berkala.';
    } elseif ($faktor_uji1_code == '1006') {
        return 'Pelaksanaan Tata Kelola Perusahaan yang Baik menjadi salah satu unsur Key Performance Indicator (KPI) yang dituangkan dalam Kontrak Manajemen.';
    } elseif ($faktor_uji1_code == '1007') {
        return 'Perusahaan memiliki kebijakan tentang kepatuhan pelaporan harta kekayaan penyelenggara negara bagi Dewan Komisaris/Dewan Pengawas, Direksi dan pejabat satu tingkat di bawah Direksi.';
    } elseif ($faktor_uji1_code == '1008') {
        return 'Penyelenggara Negara/Wajib Lapor memahami kebijakan/SOP tentang kepatuhan pelaporan  harta kekayaan penyelenggara negara.';
    } elseif ($faktor_uji1_code == '1009') {
        return 'Perusahaan melaksanakan kebijakan/SOP tentang kepatuhan pelaporan  harta kekayaan Penyelenggara Negara.';
    } elseif ($faktor_uji1_code == '1010') {
        return 'Perusahaan memiliki ketentuan/kebijakan  tentang Pengendalian Gratifikasi.';
    } elseif ($faktor_uji1_code == '1011') {
        return 'Perusahaan melaksanakan upaya untuk meningkatkan pemahaman terhadap kebijakan/ketentuan Pengendalian Gratifikasi.';
    } elseif ($faktor_uji1_code == '1012') {
        return 'Perusahaan mengimplementasikan Pengendalian Gratifikasi.';
    } elseif ($faktor_uji1_code == '1013') {
        return 'Perusahaan memiliki kebijakan tentang pelaporan atas dugaan penyimpangan pada perusahaan (whistle blowing system).';
    } elseif ($faktor_uji1_code == '1014') {
        return 'Perusahaan melaksanakan kegiatan untuk memberikan pemahaman atas kebijakan pelaporan atas dugaan penyimpangan (whistle blowing system).';
    } elseif ($faktor_uji1_code == '1015') {
        return 'Perusahaan melaksanakan kebijakan tentang pelaporan atas dugaan penyimpangan pada perusahaan (whistle blowing system).';
    } elseif ($faktor_uji1_code == '2016') {
        return 'Pemegang Saham/RUPS/Pemilik Modal menetapkan pedoman pengangkatan dan pemberhentian Direksi.';
    } elseif ($faktor_uji1_code == '2017') {
        return 'Pemegang Saham/RUPS/Pemilik Modal melaksanakan penilaian terhadap calon anggota Direksi.';
    } elseif ($faktor_uji1_code == '2018') {
        return 'Pemegang Saham/RUPS/Pemilik Modal menetapkan pengangkatan anggota dan komposisi Direksi.';
    } elseif ($faktor_uji1_code == '2019') {
        return 'Pemegang Saham/RUPS/Pemilik Modal menetapkan pengaturan mengenai rangkap jabatan bagi anggota Direksi.';
    } elseif ($faktor_uji1_code == '2020') {
        return 'Pemegang Saham/RUPS/Pemilik Modal memberhentikan anggota Direksi sesuai dengan peraturan perundang-undangan.';
    } elseif ($faktor_uji1_code == '2021') {
        return 'Pemegang Saham/RUPS/Pemilik Modal memberikan respon terhadap lowongan jabatan dan/atau pemberhentian sementara Direksi  oleh Dewan Komisaris/Dewan Pengawas.';
    } elseif ($faktor_uji1_code == '2022') {
        return 'Pemegang Saham/RUPS/Pemilik Modal menetapkan pedoman pengangkatan dan pemberhentian Dewan Komisaris/Dewan Pengawas.';
    } elseif ($faktor_uji1_code == '2023') {
        return 'Pemegang Saham/RUPS/Pemilik Modal melaksanakan penilaian terhadap calon anggota Dewan Komisaris/Dewan Pengawas.';
    } elseif ($faktor_uji1_code == '2024') {
        return 'Pemegang Saham/RUPS/Pemilik Modal menetapkan pengangkatan anggota Dewan Komisaris/Dewan Pengawas dan komposisinya.';
    } elseif ($faktor_uji1_code == '2025') {
        return 'Pemegang Saham/RUPS/Pemilik Modal menetapkan pengaturan mengenai rangkap jabatan bagi anggota Dewan Komisaris/Dewan Pengawas.';
    } elseif ($faktor_uji1_code == '2026') {
        return 'Pemegang Saham/RUPS/Pemilik Modal memberhentikan anggota Dewan Komisaris/Dewan Pengawas sesuai dengan peraturan perundang-undangan.';
    } elseif ($faktor_uji1_code == '2027') {
        return 'Pemegang Saham/RUPS/Pemilik Modal memberikan pengesahan Rencana Jangka Penjang Perusahaan (RJPP) atau Revisi RJPP.';
    } elseif ($faktor_uji1_code == '2028') {
        return 'Pemegang Saham/RUPS/Pemilik Modal memberikan pengesahan Pengesahan Rencana Kerja dan Anggaran Perusahaan (RKAP).';
    } elseif ($faktor_uji1_code == '2029') {
        return 'Pemegang Saham/RUPS/Pemilik Modal memberikan persetujuan/keputusan atas usulan aksi korporasi yang perlu mendapat persetujuan/keputusan RUPS/Pemilik Modal.';
    } elseif ($faktor_uji1_code == '2030') {
        return 'RUPS/Pemilik Modal memberikan penilaian terhadap kinerja Direksi dan kinerja Dewan Komisaris/Dewan Pengawas.';
    } elseif ($faktor_uji1_code == '2031') {
        return 'RUPS menetapkan gaji/honorarium, tunjangan, fasilitas dan tantiem/insentif kinerja untuk Direksi dan Dewan Komisaris/Dewan Pengawas.';
    } elseif ($faktor_uji1_code == '2032') {
        return 'Pemegang Saham/RUPS/Pemilik Modal menetapkan auditor eksternal yang mengaudit Laporan Keuangan perusahaan.';
    } elseif ($faktor_uji1_code == '2033') {
        return 'Pemegang Saham/RUPS/Pemilik Modal memberikan persetujuan laporan tahunan termasuk pengesahan laporan keuangan  serta tugas pengawasan Dewan Komisaris/Dewan Pengawas.';
    } elseif ($faktor_uji1_code == '2034') {
        return 'Pemegang Saham/RUPS/Pemilik Modal menetapkan penggunaan laba bersih.';
    } elseif ($faktor_uji1_code == '2035') {
        return 'Pengesahan terhadap Laporan Tahunan dan persetujuan terhadap Laporan Keuangan dilaksanakan tepat waktu.';
    } elseif ($faktor_uji1_code == '2036') {
        return 'RUPS mengambil keputusan sesuai ketentuan perundang-undangan di bidang Perseroan Terbatas dan/atau Anggaran Dasar Perusahaan sehingga menghasilkan keputusan yang sah.';
    } elseif ($faktor_uji1_code == '2037') {
        return 'RUPS mengambil keputusan melalui proses yang terbuka dan adil.';
    } elseif ($faktor_uji1_code == '2038') {
        return 'Pemegang Saham/Pemilik Modal memberikan arahan/pembinaan penerapan Tata Kelola Perusahaan yang Baik kepada Direksi dan Dewan Komisaris/Dewan Pengawas.';
    } elseif ($faktor_uji1_code == '2039') {
        return 'Pemegang Saham/Pemilik Modal tidak mencampuri kegiatan operasional perusahaan yang menjadi tanggung jawab Direksi.';
    } elseif ($faktor_uji1_code == '2040') {
        return 'Pemegang Saham/Pemilik Modal merespon terhadap informasi yang diterima dari Direksi dan/atau Dewan Komisaris/Dewan Pengawas mengenai gejala penurunan kinerja dan kerugian perusahaan yang signifikan.';
    } elseif ($faktor_uji1_code == '3041') {
        return 'Dewan komisaris/Dewan Pengawas yang baru diangkat mengikuti program pengenalan yang diselenggarakan oleh perusahaan.';
    } elseif ($faktor_uji1_code == '3042') {
        return 'Dewan Komisaris/Dewan Pengawas melaksanakan program pelatihan dalam rangka meningkatkan kompetensi anggota Dewan Komisaris/Dewan Pengawas sesuai kebutuhan.';
    } elseif ($faktor_uji1_code == '3043') {
        return 'Dewan Komisaris/Dewan Pengawas memiliki kebijakan dan melaksanakan pembagian tugas  diantara anggota Dewan Komisaris/Dewan Pengawas.';
    } elseif ($faktor_uji1_code == '3044') {
        return 'Dewan Komisaris/Dewan Pengawas  menetapkan mekanisme pengambilan keputusan Dewan Komisaris/Dewan Pengawas.';
    } elseif ($faktor_uji1_code == '3045') {
        return 'Dewan Komisaris/Dewan Pengawas menyusun rencana kerja setiap tahun yang memuat sasaran/ target yang ingin dicapai dan melaporkan secara tertulis kepada RUPS/Pemilik Modal.';
    } elseif ($faktor_uji1_code == '3046') {
        return 'Dewan Komisaris/Dewan Pengawas  mendapatkan akses informasi perusahaan sesuai kewenangannya.';
    } elseif ($faktor_uji1_code == '3047') {
        return 'Dewan Komisaris/Dewan Pengawas memberikan persetujuan atas rancangan RJPP yang disampaikan oleh Direksi.';
    } elseif ($faktor_uji1_code == '3048') {
        return 'Dewan Komisaris/Dewan Pengawas memberikan persetujuan atas rancangan RKAP yang disampaikan oleh Direksi.';
    } elseif ($faktor_uji1_code == '3049') {
        return 'Dewan Komisaris/Dewan Pengawas  memberikan arahan tentang hal-hal  penting mengenai perubahan lingkungan bisnis yang diperkirakan akan berdampak besar pada usaha dan kinerja perusahaan secara tepat waktu dan relevan.';
    } elseif ($faktor_uji1_code == '3050') {
        return 'Dewan Komisaris/Dewan Pengawas dalam batas kewenangannya, merespon saran, harapan, permasalahan dan keluhan dari Stakeholders (pelanggan, pemasok, kreditur, dan karyawan) yang disampaikan langsung kepada Dewan Komisaris/Dewan Pengawas ataupun penyampaian oleh Direksi.';
    } elseif ($faktor_uji1_code == '3051') {
        return 'Dewan Komisaris/Dewan Pengawas  memberikan arahan tentang penguatan sistem pengendalian intern perusahaan.';
    } elseif ($faktor_uji1_code == '3052') {
        return 'Dewan Komisaris/Dewan Pengawas  memberikan arahan tentang manajemen risiko perusahaan.';
    } elseif ($faktor_uji1_code == '3053') {
        return 'Dewan Komisaris/Dewan Pengawas  memberikan arahan tentang sistem teknologi informasi yang digunakan perusahaan.';
    } elseif ($faktor_uji1_code == '3054') {
        return 'Dewan Komisaris/Dewan Pengawas  memberikan arahan tentang kebijakan dan pelaksanaan pengembangan karir.';
    } elseif ($faktor_uji1_code == '3055') {
        return 'Dewan Komisaris/Dewan Pengawas  memberikan arahan tentang kebijakan akuntansi dan penyusunan laporan keuangan sesuai dengan standar akuntansi yang berlaku umum di Indonesia (SAK).';   
    } elseif ($faktor_uji1_code == '3056') {
        return 'Dewan Komisaris/Dewan Pengawas  memberikan arahan tentang kebijakan pengadaan dan pelaksanaannya.';
    } elseif ($faktor_uji1_code == '3057') {
        return 'Dewan Komisaris/Dewan Pengawas  memberikan arahan tentang kebijakan mutu dan pelayanan serta pelaksanaan kebijakan tersebut.';
    } elseif ($faktor_uji1_code == '3058') {
        return 'Dewan Komisaris/Dewan Pengawas mengawasi dan memantau kepatuhan Direksi dalam menjalankan peraturan perundangan yang berlaku dan perjanjian dengan pihak ketiga.';
    } elseif ($faktor_uji1_code == '3059') {
        return 'Dewan Komisaris/Dewan Pengawas  mengawasi dan memantau  kepatuhan Direksi dalam menjalankan perusahaan sesuai RKAP dan/atau RJPP.';
    } elseif ($faktor_uji1_code == '3060') {
        return 'Dewan Komisaris/Dewan Pengawas  memberikan persetujuan atas transaksi atau tindakan dalam lingkup kewenangan Dewan Komisaris/Dewan Pengawas atau RUPS/Pemilik Modal.';
    } elseif ($faktor_uji1_code == '3061') {
        return 'Dewan Komisaris/Dewan Pengawas  (berdasarkan usul dari Komite Audit) mengajukan calon Auditor Eksternal kepada RUPS/Pemilik Modal.';
    } elseif ($faktor_uji1_code == '3062') {
        return 'Dewan Komisaris/Dewan Pengawas  memastikan audit eksternal dan audit internal dilaksanakan secara efektif serta melaksanakan telaah atas pengaduan yang berkaitan dengan BUMN yang diterima oleh Dewan Komisaris/Dewan Pengawas.';
    } elseif ($faktor_uji1_code == '3063') {
        return 'Dewan Komisaris/Dewan Pengawas  melaporkan dengan segera kepada RUPS/Pemilik Modal apabila terjadi gejala menurunnya kinerja perusahaan serta saran-saran yang telah disampaikan kepada Direksi untuk memperbaiki permasalahan yang dihadapi.';
    } elseif ($faktor_uji1_code == '3064') {
        return 'Dewan Komisaris/Dewan Pengawas melaksanakan pengawasan terhadap kebijakan pengelolaan anak perusahaan/perusahaan patungan  dan pelaksanaannya.';
    } elseif ($faktor_uji1_code == '3065') {
        return 'Peran Dewan Komisaris/Dewan Pengawas dalam pemilihan calon anggota Direksi dan Dewan Komisaris Anak Perusahaan perusahaan/perusahaan patungan.';
    } elseif ($faktor_uji1_code == '3066') {
        return 'Dewan Komisaris/Dewan Pengawas  mengusulkan calon anggota Direksi kepada Pemegang Saham/Pemilik Modal sesuai kebijakan dan kriteria seleksi yang ditetapkan.';
    } elseif ($faktor_uji1_code == '3067') {
        return 'Dewan Komisaris/Dewan Pengawas  menilai Direksi dan melaporkan hasil penilaian tersebut kepada Pemegang Saham/Pemilik Modal.';
    } elseif ($faktor_uji1_code == '3068') {
        return 'Dewan Komisaris/Dewan Pengawas  mengusulkan remunerasi Direksi sesuai ketentuan yang berlaku dan penilaian kinerja Direksi.';
    } elseif ($faktor_uji1_code == '3069') {
        return 'Dewan komisaris/Pengawas memiliki kebijakan benturan kepentingan dan melaksanakan secara konsisten kebijakann tersebut.';
    } elseif ($faktor_uji1_code == '3070') {
        return 'Dewan Komisaris/Dewan Pengawas  memastikan prinsip-prinsip Tata Kelola Perusahaan yang Baik telah diterapkan secara efektif dan berkelanjutan.';
    } elseif ($faktor_uji1_code == '3071') {
        return 'Dewan Komisaris/Dewan Pengawas  melakukan pengukuran dan penilaian terhadap kinerja Dewan Komisaris/Dewan Pengawas.';
    } elseif ($faktor_uji1_code == '3072') {
        return 'Dewan Komisaris/Dewan Pengawas memiliki pedoman/tata tertib Rapat Dewan Komisaris/Dewan Pengawas yang memadai.';
    } elseif ($faktor_uji1_code == '3073') {
        return 'Rapat Dewan Komisaris/Dewan Pengawas diadakan secara berkala sesuai ketentuan yang berlaku dan/atau anggaran dasar.';
    } elseif ($faktor_uji1_code == '3074') {
        return 'Dewan Komisaris/Dewan Pengawas melakukan evaluasi terhadap pelaksanaan keputusan hasil rapat sebelumnya.';
    } elseif ($faktor_uji1_code == '3075') {
        return 'Sekretariat Dewan Komisaris/Dewan Pengawas memiliki uraian tugas yang jelas.';
    } elseif ($faktor_uji1_code == '3076') {
        return 'Sekretariat Dewan Komisaris/Dewan Pengawas  melakukan administrasi dan penyimpanan dokumen.';
    } elseif ($faktor_uji1_code == '3077') {
        return 'Sekretaris Dewan Komisaris/Dewan Pengawas  menyelenggarakan rapat Dewan Komisaris/Dewan Pengawas dan rapat/pertemuan antara Dewan Komisaris/Dewan Pengawas  dengan Pemegang Saham/Pemilik Modal, Direksi maupun pihak-pihak terkait lainnya.';
    } elseif ($faktor_uji1_code == '3078') {
        return 'Sekretaris Dewan Komisaris/Dewan Pengawas menyediakan data/informasi yang diperlukan oleh Dewan Komisaris/Dewan Pengawas dan komite-komite di lingkungan Dewan Komisaris/Dewan Pengawas.';
    } elseif ($faktor_uji1_code == '3079') {
        return 'Dewan Komisaris/Dewan Pengawas memiliki Komite Dewan Komisaris/Dewan Pengawas sesuai dengan ketentuan perundang-undangan yang berlaku dan kebutuhan Dewan Komisaris/Dewan Pengawas.';
    } elseif ($faktor_uji1_code == '3080') {
        return 'Komposisi keanggotaan yang mendukung pelaksanaan fungsi Komite dan independensi dari masing-masing Komite Dewan Komisaris/Dewan Pengawas.';
    } elseif ($faktor_uji1_code == '3081') {
        return 'Komite Dewan Komisaris/Dewan Pengawas memiliki piagam/charter dan program kerja  tahunan.';
    } elseif ($faktor_uji1_code == '3082') {
        return 'Komite Dewan Komisaris/Dewan Pengawas melaksanakan pertemuan rutin sesuai dengan program kerja tahunan serta melakukan kegiatan lain yang ditugaskan Dewan Komisaris/Dewan Pengawas.';
    } elseif ($faktor_uji1_code == '3083') {
        return 'Komite Dewan Komisaris/Dewan Pengawas melaporkan kegiatan dan hasil penugasan yang diterimanya kepada Dewan Komisaris/Dewan Pengawas.';
    } elseif ($faktor_uji1_code == '4084') {
        return 'Direksi yang baru diangkat mengikuti program pengenalan yang diselenggarakan oleh perusahaan.';
    } elseif ($faktor_uji1_code == '4085') {
        return 'Direksi melaksanakan program pelatihan dalam rangka meningkatkan kompetensi anggota Direksi sesuai kebutuhan.';
    } elseif ($faktor_uji1_code == '4086') {
        return 'Direksi menetapkan struktur/susunan organisasi yang sesuai dengan kebutuhan perusahaan.';
    } elseif ($faktor_uji1_code == '4087') {
        return 'Direksi menetapkan kebijakan-kebijakan operasioanl dan standard operasional baku (SOP) untuk proses bisnis inti (core business) perusahaan.';
    } elseif ($faktor_uji1_code == '4088') {
        return 'Direksi menetapkan mekanisme pengambilan keputusan atas tindakan perusahaan (corporate action) sesuai ketentuan perundang-undangan dan tepat waktu.';
    } elseif ($faktor_uji1_code == '4089') {
        return 'Direksi memiliki Rencana Jangka Panjang (RJPP) yang disahkan oleh RUPS/Pemilik Modal.';
    } elseif ($faktor_uji1_code == '4090') {
        return 'Direksi memiliki Rencana Kerja dan Anggaran Perusahaan (RKAP) yang disahkan oleh RUPS/Menteri/Pemilik Modal.';
    } elseif ($faktor_uji1_code == '4091') {
        return 'Direksi menempatkan karyawan pada semua tingkatan jabatan sesuai dengan spesifikasi jabatan dan memiliki rencana suksesi untuk seluruh jabatan dalam perusahaan.';
    } elseif ($faktor_uji1_code == '4092') {
        return 'Direksi  memberikan respon terhadap usulan peluang bisnis yang berpotensi meningkatkan pendapatan perusahaan, penghematan/efisiensi perusahaan, pendayagunaan aset, dan manfaat lainnya.';
    } elseif ($faktor_uji1_code == '4093') {
        return 'Direksi  merespon isu-isu terkini dari eksternal mengenai perubahan lingkungan bisnis dan permasalahannya,  secara tepat waktu dan relevan.';
    } elseif ($faktor_uji1_code == '4094') {
        return 'Direksi melaksanakan program/kegiatan sesuai dengan RKAP dan mengambil keputusan yang diperlukan melalui analisis yang memadai dan tepat waktu.';
    } elseif ($faktor_uji1_code == '4095') {
        return 'Direksi memiliki sistem/pedoman pengukuran dan penilaian kinerja untuk unit dan jabatan dalam organisasi (struktural) yang diterapkan secara obyektif dan transparan.';
    } elseif ($faktor_uji1_code == '4096') {
        return 'Direksi menetapkan target kinerja berdasarkan RKAP dan diturunkan secara berjenjang di tingkat unit, sub unit dan jabatan di dalam organisasi (struktural) di organisasi.';
    } elseif ($faktor_uji1_code == '4097') {
        return 'Direksi melakukan analisis dan evaluasi terhadap capaian kinerja untuk jabatan/unit-unit  di bawah Direksi dan tingkat perusahaan.';
    } elseif ($faktor_uji1_code == '4098') {
        return 'Direksi melaporkan pelaksanaan sistem manajemen kinerja kepada Dewan Komisaris/Dewan Pengawas.';
    } elseif ($faktor_uji1_code == '4099') {
        return 'Direksi menyusun dan menyampaikan kepada RUPS/Pemilik Modal tentang usulan insentif kinerja untuk Direksi.';
    } elseif ($faktor_uji1_code == '4100') {
        return 'Direksi  menerapkan  sistem tentang teknologi informasi sesuai dengan kebijakan yang telah ditetapkan.';
    } elseif ($faktor_uji1_code == '4101') {
        return 'Direksi melaksanakan sistem peningkatan mutu produk dan pelayanan.';
    } elseif ($faktor_uji1_code == '4102') {
        return 'Direksi melaksanakan pengadaan barang dan jasa yang menguntungkan bagi perusahaan, baik harga maupun kualitas barang dan jasa tersebut.';
    } elseif ($faktor_uji1_code == '4103') {
        return 'Direksi mengembangkan SDM, menilai kinerja dan memberikan remunerasi yang layak, dan membangun lingkungan SDM yang efektif  mendukung pencapaian perusahaan.';
    } elseif ($faktor_uji1_code == '4104') {
        return 'Direksi menerapkan kebijakan pengaturan untuk anak perusahaan (subsidiary governance) dan/atau perusahaan patungan.';
    } elseif ($faktor_uji1_code == '4105') {
        return 'Direksi menerapkan kebijakan akuntansi dan penyusunan laporan keuangan sesuai dengan standar akuntansi keuangan yang berlaku umum di Indonesia (SAK).';
    } elseif ($faktor_uji1_code == '4106') {
        return 'Direksi  menerapkan manajemen risiko sesuai dengan kebijakan yang telah ditetapkan.';
    } elseif ($faktor_uji1_code == '4107') {
        return 'Direksi menetapkan dan menerapkan sistem pengendalian intern untuk melindungi mengamankan investasi dan aset perusahaan.';
    } elseif ($faktor_uji1_code == '4108') {
        return 'Direksi menindaklanjuti hasil pemeriksaan SPI dan auditor eksternal (KAP dan BPK).';
    } elseif ($faktor_uji1_code == '4109') {
        return 'Direksi menetapkan mekanisme untuk menjaga kepatuhan terhadap peraturan perundang-undangan dan perjanjian dengan pihak ketiga.';
    } elseif ($faktor_uji1_code == '4110') {
        return 'Perusahaan menjalankan peraturan perundang-undangan yang berlaku  dan perjanjian dengan pihak ketiga.';
    } elseif ($faktor_uji1_code == '4111') {
        return 'Pelaksanaan hubungan dengan pelanggan.';
    } elseif ($faktor_uji1_code == '4112') {
        return 'Pelaksanaann hubungan dengan pemasok.';
    } elseif ($faktor_uji1_code == '4113') {
        return 'Pelaksanaan hubungan dengan kreditur.';
    } elseif ($faktor_uji1_code == '4114') {
        return 'Pelaksanaan kewajiban kepada Negara.';
    } elseif ($faktor_uji1_code == '4115') {
        return 'Pelaksanaan hubungan dengan karyawan perusahaan.';
    } elseif ($faktor_uji1_code == '4116') {
        return 'Terdapat prosedur tertulis menampung dan  menindaklanjuti keluhan-keluhan stakeholders.';
    } elseif ($faktor_uji1_code == '4117') {
        return 'Upaya untuk meningkatkan  nilai Pemegang Saham secara konsisten dan berkelanjutan.';
    } elseif ($faktor_uji1_code == '4118') {
        return 'Perusahaan melaksanakan tanggung jawab sosial perusahaan untuk mendukung keberlanjutan operasi perusahaan.';
    } elseif ($faktor_uji1_code == '4119') {
        return 'Direksi  menetapkan kebijakan tentang mekanisme bagi Direksi dan pejabat struktural untuk mencegah pengambilan keuntungan pribadi dan pihak lainnya disebabkan benturan kepentingan.';
    } elseif ($faktor_uji1_code == '4120') {
        return 'Direksi menerapkan kebijakan untuk mencegah benturan kepentingan.';
    } elseif ($faktor_uji1_code == '4121') {
        return 'Direksi melaporkan informasi-informasi yang relevan kepada Pemegang Saham dan Dewan Komisaris/Dewan Pengawas.';
    } elseif ($faktor_uji1_code == '4122') {
        return 'Direksi memberikan perlakukan yang sama (fairness) dalam memberikan informasi kepada Pemegang Saham dan anggota Dewan Komisaris/Dewan Pengawas.';
    } elseif ($faktor_uji1_code == '4123') {
        return 'Direksi memiliki pedoman/tata tertib Rapat Direksi, minimal mengatur etika rapat dan penyusunan risalah rapat, evaluasi tindak lanjut hasil rapat sebelumnya, serta pembahasan atas arahan/usulan  dan/atau  keputusan Dewan Komisaris/Dewan Pengawas.';
    } elseif ($faktor_uji1_code == '4124') {
        return 'Direksi menyelenggarakan Rapat Direksi sesuai kebutuhan, paling sedikit sekali dalam setiap bulan.';
    } elseif ($faktor_uji1_code == '4125') {
        return 'Anggota Direksi menghadiri setiap rapat Direksi maupun rapat Direksi & Komisaris, jika tidak dapat hadir yang bersangkutan harus menjelaskan alasan ketidakhadirannya.';
    } elseif ($faktor_uji1_code == '4126') {
        return 'Direksi melakukan evaluasi terhadap pelaksanaan keputusan hasil rapat sebelumnya.';
    } elseif ($faktor_uji1_code == '4127') {
        return 'Direksi menindaklanjuti arahan, dan/atau keputusan Dewan Komisaris/Dewan Pengawas.';
    } elseif ($faktor_uji1_code == '4128') {
        return 'Perusahaan memiliki Piagam Pengawasan Intern yang ditetapkan oleh Direksi.';
    } elseif ($faktor_uji1_code == '4129') {
        return 'SPI/Fungsi Audit Internal dilengkapi dengan faktor-faktor pendukung keberhasilan dalam pelaksanaan tugasnya.';
    } elseif ($faktor_uji1_code == '4130') {
        return 'SPI melaksanakan pengawasan intern untuk memberikan nilai tambah dan memperbaiki operasional perusahaan.';
    } elseif ($faktor_uji1_code == '4131') {
        return 'Sekretaris Perusahaan  dilengkapi dengan faktor-faktor pendukung keberhasilan pelaksanaan tugasnya.';
    } elseif ($faktor_uji1_code == '4132') {
        return 'Sekretaris perusahaan menjalankan fungsinya.';
    } elseif ($faktor_uji1_code == '4133') {
        return 'Direksi mengevaluasi kualitas fungsi sekretaris perusahaan.';
    } elseif ($faktor_uji1_code == '4134') {
        return 'Direksi menyelenggarakan RUPS sesuai dengan prosedur yang ditetapkan dalam Anggaran Dasar dan peraturan perundang-undangan.';
    } elseif ($faktor_uji1_code == '4135') {
        return 'Direksi menyediakan akses serta penjelasan lengkap dan informasi akurat berkenaan dengan penyelenggaraan RUPS agar dapat melaksanakan hak-haknya berdasarkan anggaran dasar dan peraturan perundang-undangan.';
    } elseif ($faktor_uji1_code == '5136') {
        return 'Perusahaan menetapkan sistem dan prosedur pengendalian informasi perusahaan dengan tujuan untuk mengamankan informasi perusahaan yang penting.';
    } elseif ($faktor_uji1_code == '5137') {
        return 'Tingkat kepatuhan perusahaan yang memadai terhadap kebijakan pengendalian informasi perusahaan.';
    } elseif ($faktor_uji1_code == '5138') {
        return 'Terdapat media untuk penyediaan Informasi Publik agar dapat diperoleh dengan cepat dan tepat waktu, biaya ringan, dan cara sederhana.';
    } elseif ($faktor_uji1_code == '5139') {
        return 'Website perusahaan mempublikasikan kebijakan dan informasi penting perusahaan.';
    } elseif ($faktor_uji1_code == '5140') {
        return 'Perusahaan menyediakan media lain untuk mengkomunikasikan kebijakan informasi penting perusahaan.';
    } elseif ($faktor_uji1_code == '5141') {
        return 'Informasi yang disediakan dalam website Perusahaan dan bumn.go.id dimutahirkan secara berkala.';
    } elseif ($faktor_uji1_code == '5142') {
        return 'Tingkat kemudahan akses terhadap kebijakan dan informasi penting perusahaan yang disediakan dalam website perusahaan.';
    } elseif ($faktor_uji1_code == '5143') {
        return 'Laporan Tahunan memenuhi ketentuan umum penyajian Laporan Tahunan.';
    } elseif ($faktor_uji1_code == '5144') {
        return 'Laporan Tahunan memuat mengenai Ikhtisar Data Keuangan Penting.';
    } elseif ($faktor_uji1_code == '5145') {
        return 'Laporan Tahunan memuat Laporan Dewan Komisaris/Dewan Pengawas dan Laporan Direksi.';
    } elseif ($faktor_uji1_code == '5146') {
        return 'Laporan Tahunan memuat profil perusahaan secara lengkap';
    } elseif ($faktor_uji1_code == '5147') {
        return 'Laporan Tahunan memuat bagian tersendiri mengenai Analisa dan Pembahasan Manajamen atas Kinerja Perusahaan.';
    } elseif ($faktor_uji1_code == '5148') {
        return 'Laporan Tahunan memuat pengungkapan praktik Tata Kelola Perusahaan yang Baik.';
    } elseif ($faktor_uji1_code == '5149') {
        return 'Laporan Tahunan memuat bagian tersendiri mengenai Laporan Keuangan.';
    } elseif ($faktor_uji1_code == '5150') {
        return 'Perusahaan mengikuti Annual Report Award (ARA).';
    } elseif ($faktor_uji1_code == '5151') {
        return 'Penghargaan atau award lainnya.';
    } elseif ($faktor_uji1_code == '6152') {
        return 'Perusahaan memiliki bidang/area yang menjadi best practices di Industrinya atau menjadi tujuan benchmark bagi perusahaan lain (baik bagi BUMN maupun perusahaan swasta). Bidang/area tersebut dapat terdiri dari produk, proses, fungsi pendukung, kinerja organisasi, dan strategi.';
    } elseif ($faktor_uji1_code == '6153') {
        return 'Terdapat penyimpangan dari prinsip-prinsip Tata Kelola Perusahaan yang baik.';
    } else {
        return ucwords($faktor_uji1_code);
    }
}

function format_faktor_uji2_code($faktor_uji2_code)
{
    if ($faktor_uji2_code == '0') {
        return 'Lainnya';
    } elseif ($faktor_uji2_code == '1001') {
        return 'Perusahaan memiliki Pedoman Telola Perusahaan yang Baik (GCG Code) yang ditinjau dan dimutakhirkan secara berkala.';
    } elseif ($faktor_uji2_code == '1002') {
        return 'Perusahaan memiliki Pedoman Perilaku yang ditinjau dan dimutakhirkan secara berkala.';
    } elseif ($faktor_uji2_code == '1003') {
        return 'Direksi menunjuk seorang anggota Direksi sebagai penanggung jawab dalam penerapan dan pemantauan Tata Kelola Perusahaan yang Baik.';
    } elseif ($faktor_uji2_code == '1004') {
        return 'Perusahaan menciptakan situasi kondusif  untuk melaksanakan Pedoman Tata Kelola Perusahaan yang Baik (GCG Code) dan Pedoman Perilaku.';
    } elseif ($faktor_uji2_code == '1005') {
        return 'Perusahaan melakukan assessment terhadap pelaksanaan Tata Kelola Perusahaan yang Baik dan reviun secara berkala.';
    } elseif ($faktor_uji2_code == '1006') {
        return 'Pelaksanaan Tata Kelola Perusahaan yang Baik menjadi salah satu unsur Key Performance Indicator (KPI) yang dituangkan dalam Kontrak Manajemen.';
    } elseif ($faktor_uji2_code == '1007') {
        return 'Perusahaan memiliki kebijakan tentang kepatuhan pelaporan harta kekayaan penyelenggara negara bagi Dewan Komisaris/Dewan Pengawas, Direksi dan pejabat satu tingkat di bawah Direksi.';
    } elseif ($faktor_uji2_code == '1008') {
        return 'Penyelenggara Negara/Wajib Lapor memahami kebijakan/SOP tentang kepatuhan pelaporan  harta kekayaan penyelenggara negara.';
    } elseif ($faktor_uji2_code == '1009') {
        return 'Perusahaan melaksanakan kebijakan/SOP tentang kepatuhan pelaporan  harta kekayaan Penyelenggara Negara.';
    } elseif ($faktor_uji2_code == '1010') {
        return 'Perusahaan memiliki ketentuan/kebijakan  tentang Pengendalian Gratifikasi.';
    } elseif ($faktor_uji2_code == '1011') {
        return 'Perusahaan melaksanakan upaya untuk meningkatkan pemahaman terhadap kebijakan/ketentuan Pengendalian Gratifikasi.';
    } elseif ($faktor_uji2_code == '1012') {
        return 'Perusahaan mengimplementasikan Pengendalian Gratifikasi.';
    } elseif ($faktor_uji2_code == '1013') {
        return 'Perusahaan memiliki kebijakan tentang pelaporan atas dugaan penyimpangan pada perusahaan (whistle blowing system).';
    } elseif ($faktor_uji2_code == '1014') {
        return 'Perusahaan melaksanakan kegiatan untuk memberikan pemahaman atas kebijakan pelaporan atas dugaan penyimpangan (whistle blowing system).';
    } elseif ($faktor_uji2_code == '1015') {
        return 'Perusahaan melaksanakan kebijakan tentang pelaporan atas dugaan penyimpangan pada perusahaan (whistle blowing system).';
    } elseif ($faktor_uji2_code == '2016') {
        return 'Pemegang Saham/RUPS/Pemilik Modal menetapkan pedoman pengangkatan dan pemberhentian Direksi.';
    } elseif ($faktor_uji2_code == '2017') {
        return 'Pemegang Saham/RUPS/Pemilik Modal melaksanakan penilaian terhadap calon anggota Direksi.';
    } elseif ($faktor_uji2_code == '2018') {
        return 'Pemegang Saham/RUPS/Pemilik Modal menetapkan pengangkatan anggota dan komposisi Direksi.';
    } elseif ($faktor_uji2_code == '2019') {
        return 'Pemegang Saham/RUPS/Pemilik Modal menetapkan pengaturan mengenai rangkap jabatan bagi anggota Direksi.';
    } elseif ($faktor_uji2_code == '2020') {
        return 'Pemegang Saham/RUPS/Pemilik Modal memberhentikan anggota Direksi sesuai dengan peraturan perundang-undangan.';
    } elseif ($faktor_uji2_code == '2021') {
        return 'Pemegang Saham/RUPS/Pemilik Modal memberikan respon terhadap lowongan jabatan dan/atau pemberhentian sementara Direksi  oleh Dewan Komisaris/Dewan Pengawas.';
    } elseif ($faktor_uji2_code == '2022') {
        return 'Pemegang Saham/RUPS/Pemilik Modal menetapkan pedoman pengangkatan dan pemberhentian Dewan Komisaris/Dewan Pengawas.';
    } elseif ($faktor_uji2_code == '2023') {
        return 'Pemegang Saham/RUPS/Pemilik Modal melaksanakan penilaian terhadap calon anggota Dewan Komisaris/Dewan Pengawas.';
    } elseif ($faktor_uji2_code == '2024') {
        return 'Pemegang Saham/RUPS/Pemilik Modal menetapkan pengangkatan anggota Dewan Komisaris/Dewan Pengawas dan komposisinya.';
    } elseif ($faktor_uji2_code == '2025') {
        return 'Pemegang Saham/RUPS/Pemilik Modal menetapkan pengaturan mengenai rangkap jabatan bagi anggota Dewan Komisaris/Dewan Pengawas.';
    } elseif ($faktor_uji2_code == '2026') {
        return 'Pemegang Saham/RUPS/Pemilik Modal memberhentikan anggota Dewan Komisaris/Dewan Pengawas sesuai dengan peraturan perundang-undangan.';
    } elseif ($faktor_uji2_code == '2027') {
        return 'Pemegang Saham/RUPS/Pemilik Modal memberikan pengesahan Rencana Jangka Penjang Perusahaan (RJPP) atau Revisi RJPP.';
    } elseif ($faktor_uji2_code == '2028') {
        return 'Pemegang Saham/RUPS/Pemilik Modal memberikan pengesahan Pengesahan Rencana Kerja dan Anggaran Perusahaan (RKAP).';
    } elseif ($faktor_uji2_code == '2029') {
        return 'Pemegang Saham/RUPS/Pemilik Modal memberikan persetujuan/keputusan atas usulan aksi korporasi yang perlu mendapat persetujuan/keputusan RUPS/Pemilik Modal.';
    } elseif ($faktor_uji2_code == '2030') {
        return 'RUPS/Pemilik Modal memberikan penilaian terhadap kinerja Direksi dan kinerja Dewan Komisaris/Dewan Pengawas.';
    } elseif ($faktor_uji2_code == '2031') {
        return 'RUPS menetapkan gaji/honorarium, tunjangan, fasilitas dan tantiem/insentif kinerja untuk Direksi dan Dewan Komisaris/Dewan Pengawas.';
    } elseif ($faktor_uji2_code == '2032') {
        return 'Pemegang Saham/RUPS/Pemilik Modal menetapkan auditor eksternal yang mengaudit Laporan Keuangan perusahaan.';
    } elseif ($faktor_uji2_code == '2033') {
        return 'Pemegang Saham/RUPS/Pemilik Modal memberikan persetujuan laporan tahunan termasuk pengesahan laporan keuangan  serta tugas pengawasan Dewan Komisaris/Dewan Pengawas.';
    } elseif ($faktor_uji2_code == '2034') {
        return 'Pemegang Saham/RUPS/Pemilik Modal menetapkan penggunaan laba bersih.';
    } elseif ($faktor_uji2_code == '2035') {
        return 'Pengesahan terhadap Laporan Tahunan dan persetujuan terhadap Laporan Keuangan dilaksanakan tepat waktu.';
    } elseif ($faktor_uji2_code == '2036') {
        return 'RUPS mengambil keputusan sesuai ketentuan perundang-undangan di bidang Perseroan Terbatas dan/atau Anggaran Dasar Perusahaan sehingga menghasilkan keputusan yang sah.';
    } elseif ($faktor_uji2_code == '2037') {
        return 'RUPS mengambil keputusan melalui proses yang terbuka dan adil.';
    } elseif ($faktor_uji2_code == '2038') {
        return 'Pemegang Saham/Pemilik Modal memberikan arahan/pembinaan penerapan Tata Kelola Perusahaan yang Baik kepada Direksi dan Dewan Komisaris/Dewan Pengawas.';
    } elseif ($faktor_uji2_code == '2039') {
        return 'Pemegang Saham/Pemilik Modal tidak mencampuri kegiatan operasional perusahaan yang menjadi tanggung jawab Direksi.';
    } elseif ($faktor_uji2_code == '2040') {
        return 'Pemegang Saham/Pemilik Modal merespon terhadap informasi yang diterima dari Direksi dan/atau Dewan Komisaris/Dewan Pengawas mengenai gejala penurunan kinerja dan kerugian perusahaan yang signifikan.';
    } elseif ($faktor_uji2_code == '3041') {
        return 'Dewan komisaris/Dewan Pengawas yang baru diangkat mengikuti program pengenalan yang diselenggarakan oleh perusahaan.';
    } elseif ($faktor_uji2_code == '3042') {
        return 'Dewan Komisaris/Dewan Pengawas melaksanakan program pelatihan dalam rangka meningkatkan kompetensi anggota Dewan Komisaris/Dewan Pengawas sesuai kebutuhan.';
    } elseif ($faktor_uji2_code == '3043') {
        return 'Dewan Komisaris/Dewan Pengawas memiliki kebijakan dan melaksanakan pembagian tugas  diantara anggota Dewan Komisaris/Dewan Pengawas.';
    } elseif ($faktor_uji2_code == '3044') {
        return 'Dewan Komisaris/Dewan Pengawas  menetapkan mekanisme pengambilan keputusan Dewan Komisaris/Dewan Pengawas.';
    } elseif ($faktor_uji2_code == '3045') {
        return 'Dewan Komisaris/Dewan Pengawas menyusun rencana kerja setiap tahun yang memuat sasaran/ target yang ingin dicapai dan melaporkan secara tertulis kepada RUPS/Pemilik Modal.';
    } elseif ($faktor_uji2_code == '3046') {
        return 'Dewan Komisaris/Dewan Pengawas  mendapatkan akses informasi perusahaan sesuai kewenangannya.';
    } elseif ($faktor_uji2_code == '3047') {
        return 'Dewan Komisaris/Dewan Pengawas memberikan persetujuan atas rancangan RJPP yang disampaikan oleh Direksi.';
    } elseif ($faktor_uji2_code == '3048') {
        return 'Dewan Komisaris/Dewan Pengawas memberikan persetujuan atas rancangan RKAP yang disampaikan oleh Direksi.';
    } elseif ($faktor_uji2_code == '3049') {
        return 'Dewan Komisaris/Dewan Pengawas  memberikan arahan tentang hal-hal  penting mengenai perubahan lingkungan bisnis yang diperkirakan akan berdampak besar pada usaha dan kinerja perusahaan secara tepat waktu dan relevan.';
    } elseif ($faktor_uji2_code == '3050') {
        return 'Dewan Komisaris/Dewan Pengawas dalam batas kewenangannya, merespon saran, harapan, permasalahan dan keluhan dari Stakeholders (pelanggan, pemasok, kreditur, dan karyawan) yang disampaikan langsung kepada Dewan Komisaris/Dewan Pengawas ataupun penyampaian oleh Direksi.';
    } elseif ($faktor_uji2_code == '3051') {
        return 'Dewan Komisaris/Dewan Pengawas  memberikan arahan tentang penguatan sistem pengendalian intern perusahaan.';
    } elseif ($faktor_uji2_code == '3052') {
        return 'Dewan Komisaris/Dewan Pengawas  memberikan arahan tentang manajemen risiko perusahaan.';
    } elseif ($faktor_uji2_code == '3053') {
        return 'Dewan Komisaris/Dewan Pengawas  memberikan arahan tentang sistem teknologi informasi yang digunakan perusahaan.';
    } elseif ($faktor_uji2_code == '3054') {
        return 'Dewan Komisaris/Dewan Pengawas  memberikan arahan tentang kebijakan dan pelaksanaan pengembangan karir.';
    } elseif ($faktor_uji2_code == '3055') {
        return 'Dewan Komisaris/Dewan Pengawas  memberikan arahan tentang kebijakan akuntansi dan penyusunan laporan keuangan sesuai dengan standar akuntansi yang berlaku umum di Indonesia (SAK).';   
    } elseif ($faktor_uji2_code == '3056') {
        return 'Dewan Komisaris/Dewan Pengawas  memberikan arahan tentang kebijakan pengadaan dan pelaksanaannya.';
    } elseif ($faktor_uji2_code == '3057') {
        return 'Dewan Komisaris/Dewan Pengawas  memberikan arahan tentang kebijakan mutu dan pelayanan serta pelaksanaan kebijakan tersebut.';
    } elseif ($faktor_uji2_code == '3058') {
        return 'Dewan Komisaris/Dewan Pengawas mengawasi dan memantau kepatuhan Direksi dalam menjalankan peraturan perundangan yang berlaku dan perjanjian dengan pihak ketiga.';
    } elseif ($faktor_uji2_code == '3059') {
        return 'Dewan Komisaris/Dewan Pengawas  mengawasi dan memantau  kepatuhan Direksi dalam menjalankan perusahaan sesuai RKAP dan/atau RJPP.';
    } elseif ($faktor_uji2_code == '3060') {
        return 'Dewan Komisaris/Dewan Pengawas  memberikan persetujuan atas transaksi atau tindakan dalam lingkup kewenangan Dewan Komisaris/Dewan Pengawas atau RUPS/Pemilik Modal.';
    } elseif ($faktor_uji2_code == '3061') {
        return 'Dewan Komisaris/Dewan Pengawas  (berdasarkan usul dari Komite Audit) mengajukan calon Auditor Eksternal kepada RUPS/Pemilik Modal.';
    } elseif ($faktor_uji2_code == '3062') {
        return 'Dewan Komisaris/Dewan Pengawas  memastikan audit eksternal dan audit internal dilaksanakan secara efektif serta melaksanakan telaah atas pengaduan yang berkaitan dengan BUMN yang diterima oleh Dewan Komisaris/Dewan Pengawas.';
    } elseif ($faktor_uji2_code == '3063') {
        return 'Dewan Komisaris/Dewan Pengawas  melaporkan dengan segera kepada RUPS/Pemilik Modal apabila terjadi gejala menurunnya kinerja perusahaan serta saran-saran yang telah disampaikan kepada Direksi untuk memperbaiki permasalahan yang dihadapi.';
    } elseif ($faktor_uji2_code == '3064') {
        return 'Dewan Komisaris/Dewan Pengawas melaksanakan pengawasan terhadap kebijakan pengelolaan anak perusahaan/perusahaan patungan  dan pelaksanaannya.';
    } elseif ($faktor_uji2_code == '3065') {
        return 'Peran Dewan Komisaris/Dewan Pengawas dalam pemilihan calon anggota Direksi dan Dewan Komisaris Anak Perusahaan perusahaan/perusahaan patungan.';
    } elseif ($faktor_uji2_code == '3066') {
        return 'Dewan Komisaris/Dewan Pengawas  mengusulkan calon anggota Direksi kepada Pemegang Saham/Pemilik Modal sesuai kebijakan dan kriteria seleksi yang ditetapkan.';
    } elseif ($faktor_uji2_code == '3067') {
        return 'Dewan Komisaris/Dewan Pengawas  menilai Direksi dan melaporkan hasil penilaian tersebut kepada Pemegang Saham/Pemilik Modal.';
    } elseif ($faktor_uji2_code == '3068') {
        return 'Dewan Komisaris/Dewan Pengawas  mengusulkan remunerasi Direksi sesuai ketentuan yang berlaku dan penilaian kinerja Direksi.';
    } elseif ($faktor_uji2_code == '3069') {
        return 'Dewan komisaris/Pengawas memiliki kebijakan benturan kepentingan dan melaksanakan secara konsisten kebijakann tersebut.';
    } elseif ($faktor_uji2_code == '3070') {
        return 'Dewan Komisaris/Dewan Pengawas  memastikan prinsip-prinsip Tata Kelola Perusahaan yang Baik telah diterapkan secara efektif dan berkelanjutan.';
    } elseif ($faktor_uji2_code == '3071') {
        return 'Dewan Komisaris/Dewan Pengawas  melakukan pengukuran dan penilaian terhadap kinerja Dewan Komisaris/Dewan Pengawas.';
    } elseif ($faktor_uji2_code == '3072') {
        return 'Dewan Komisaris/Dewan Pengawas memiliki pedoman/tata tertib Rapat Dewan Komisaris/Dewan Pengawas yang memadai.';
    } elseif ($faktor_uji2_code == '3073') {
        return 'Rapat Dewan Komisaris/Dewan Pengawas diadakan secara berkala sesuai ketentuan yang berlaku dan/atau anggaran dasar.';
    } elseif ($faktor_uji2_code == '3074') {
        return 'Dewan Komisaris/Dewan Pengawas melakukan evaluasi terhadap pelaksanaan keputusan hasil rapat sebelumnya.';
    } elseif ($faktor_uji2_code == '3075') {
        return 'Sekretariat Dewan Komisaris/Dewan Pengawas memiliki uraian tugas yang jelas.';
    } elseif ($faktor_uji2_code == '3076') {
        return 'Sekretariat Dewan Komisaris/Dewan Pengawas  melakukan administrasi dan penyimpanan dokumen.';
    } elseif ($faktor_uji2_code == '3077') {
        return 'Sekretaris Dewan Komisaris/Dewan Pengawas  menyelenggarakan rapat Dewan Komisaris/Dewan Pengawas dan rapat/pertemuan antara Dewan Komisaris/Dewan Pengawas  dengan Pemegang Saham/Pemilik Modal, Direksi maupun pihak-pihak terkait lainnya.';
    } elseif ($faktor_uji2_code == '3078') {
        return 'Sekretaris Dewan Komisaris/Dewan Pengawas menyediakan data/informasi yang diperlukan oleh Dewan Komisaris/Dewan Pengawas dan komite-komite di lingkungan Dewan Komisaris/Dewan Pengawas.';
    } elseif ($faktor_uji2_code == '3079') {
        return 'Dewan Komisaris/Dewan Pengawas memiliki Komite Dewan Komisaris/Dewan Pengawas sesuai dengan ketentuan perundang-undangan yang berlaku dan kebutuhan Dewan Komisaris/Dewan Pengawas.';
    } elseif ($faktor_uji2_code == '3080') {
        return 'Komposisi keanggotaan yang mendukung pelaksanaan fungsi Komite dan independensi dari masing-masing Komite Dewan Komisaris/Dewan Pengawas.';
    } elseif ($faktor_uji2_code == '3081') {
        return 'Komite Dewan Komisaris/Dewan Pengawas memiliki piagam/charter dan program kerja  tahunan.';
    } elseif ($faktor_uji2_code == '3082') {
        return 'Komite Dewan Komisaris/Dewan Pengawas melaksanakan pertemuan rutin sesuai dengan program kerja tahunan serta melakukan kegiatan lain yang ditugaskan Dewan Komisaris/Dewan Pengawas.';
    } elseif ($faktor_uji2_code == '3083') {
        return 'Komite Dewan Komisaris/Dewan Pengawas melaporkan kegiatan dan hasil penugasan yang diterimanya kepada Dewan Komisaris/Dewan Pengawas.';
    } elseif ($faktor_uji2_code == '4084') {
        return 'Direksi yang baru diangkat mengikuti program pengenalan yang diselenggarakan oleh perusahaan.';
    } elseif ($faktor_uji2_code == '4085') {
        return 'Direksi melaksanakan program pelatihan dalam rangka meningkatkan kompetensi anggota Direksi sesuai kebutuhan.';
    } elseif ($faktor_uji2_code == '4086') {
        return 'Direksi menetapkan struktur/susunan organisasi yang sesuai dengan kebutuhan perusahaan.';
    } elseif ($faktor_uji2_code == '4087') {
        return 'Direksi menetapkan kebijakan-kebijakan operasioanl dan standard operasional baku (SOP) untuk proses bisnis inti (core business) perusahaan.';
    } elseif ($faktor_uji2_code == '4088') {
        return 'Direksi menetapkan mekanisme pengambilan keputusan atas tindakan perusahaan (corporate action) sesuai ketentuan perundang-undangan dan tepat waktu.';
    } elseif ($faktor_uji2_code == '4089') {
        return 'Direksi memiliki Rencana Jangka Panjang (RJPP) yang disahkan oleh RUPS/Pemilik Modal.';
    } elseif ($faktor_uji2_code == '4090') {
        return 'Direksi memiliki Rencana Kerja dan Anggaran Perusahaan (RKAP) yang disahkan oleh RUPS/Menteri/Pemilik Modal.';
    } elseif ($faktor_uji2_code == '4091') {
        return 'Direksi menempatkan karyawan pada semua tingkatan jabatan sesuai dengan spesifikasi jabatan dan memiliki rencana suksesi untuk seluruh jabatan dalam perusahaan.';
    } elseif ($faktor_uji2_code == '4092') {
        return 'Direksi  memberikan respon terhadap usulan peluang bisnis yang berpotensi meningkatkan pendapatan perusahaan, penghematan/efisiensi perusahaan, pendayagunaan aset, dan manfaat lainnya.';
    } elseif ($faktor_uji2_code == '4093') {
        return 'Direksi  merespon isu-isu terkini dari eksternal mengenai perubahan lingkungan bisnis dan permasalahannya,  secara tepat waktu dan relevan.';
    } elseif ($faktor_uji2_code == '4094') {
        return 'Direksi melaksanakan program/kegiatan sesuai dengan RKAP dan mengambil keputusan yang diperlukan melalui analisis yang memadai dan tepat waktu.';
    } elseif ($faktor_uji2_code == '4095') {
        return 'Direksi memiliki sistem/pedoman pengukuran dan penilaian kinerja untuk unit dan jabatan dalam organisasi (struktural) yang diterapkan secara obyektif dan transparan.';
    } elseif ($faktor_uji2_code == '4096') {
        return 'Direksi menetapkan target kinerja berdasarkan RKAP dan diturunkan secara berjenjang di tingkat unit, sub unit dan jabatan di dalam organisasi (struktural) di organisasi.';
    } elseif ($faktor_uji2_code == '4097') {
        return 'Direksi melakukan analisis dan evaluasi terhadap capaian kinerja untuk jabatan/unit-unit  di bawah Direksi dan tingkat perusahaan.';
    } elseif ($faktor_uji2_code == '4098') {
        return 'Direksi melaporkan pelaksanaan sistem manajemen kinerja kepada Dewan Komisaris/Dewan Pengawas.';
    } elseif ($faktor_uji2_code == '4099') {
        return 'Direksi menyusun dan menyampaikan kepada RUPS/Pemilik Modal tentang usulan insentif kinerja untuk Direksi.';
    } elseif ($faktor_uji2_code == '4100') {
        return 'Direksi  menerapkan  sistem tentang teknologi informasi sesuai dengan kebijakan yang telah ditetapkan.';
    } elseif ($faktor_uji2_code == '4101') {
        return 'Direksi melaksanakan sistem peningkatan mutu produk dan pelayanan.';
    } elseif ($faktor_uji2_code == '4102') {
        return 'Direksi melaksanakan pengadaan barang dan jasa yang menguntungkan bagi perusahaan, baik harga maupun kualitas barang dan jasa tersebut.';
    } elseif ($faktor_uji2_code == '4103') {
        return 'Direksi mengembangkan SDM, menilai kinerja dan memberikan remunerasi yang layak, dan membangun lingkungan SDM yang efektif  mendukung pencapaian perusahaan.';
    } elseif ($faktor_uji2_code == '4104') {
        return 'Direksi menerapkan kebijakan pengaturan untuk anak perusahaan (subsidiary governance) dan/atau perusahaan patungan.';
    } elseif ($faktor_uji2_code == '4105') {
        return 'Direksi menerapkan kebijakan akuntansi dan penyusunan laporan keuangan sesuai dengan standar akuntansi keuangan yang berlaku umum di Indonesia (SAK).';
    } elseif ($faktor_uji2_code == '4106') {
        return 'Direksi  menerapkan manajemen risiko sesuai dengan kebijakan yang telah ditetapkan.';
    } elseif ($faktor_uji2_code == '4107') {
        return 'Direksi menetapkan dan menerapkan sistem pengendalian intern untuk melindungi mengamankan investasi dan aset perusahaan.';
    } elseif ($faktor_uji2_code == '4108') {
        return 'Direksi menindaklanjuti hasil pemeriksaan SPI dan auditor eksternal (KAP dan BPK).';
    } elseif ($faktor_uji2_code == '4109') {
        return 'Direksi menetapkan mekanisme untuk menjaga kepatuhan terhadap peraturan perundang-undangan dan perjanjian dengan pihak ketiga.';
    } elseif ($faktor_uji2_code == '4110') {
        return 'Perusahaan menjalankan peraturan perundang-undangan yang berlaku  dan perjanjian dengan pihak ketiga.';
    } elseif ($faktor_uji2_code == '4111') {
        return 'Pelaksanaan hubungan dengan pelanggan.';
    } elseif ($faktor_uji2_code == '4112') {
        return 'Pelaksanaann hubungan dengan pemasok.';
    } elseif ($faktor_uji2_code == '4113') {
        return 'Pelaksanaan hubungan dengan kreditur.';
    } elseif ($faktor_uji2_code == '4114') {
        return 'Pelaksanaan kewajiban kepada Negara.';
    } elseif ($faktor_uji2_code == '4115') {
        return 'Pelaksanaan hubungan dengan karyawan perusahaan.';
    } elseif ($faktor_uji2_code == '4116') {
        return 'Terdapat prosedur tertulis menampung dan  menindaklanjuti keluhan-keluhan stakeholders.';
    } elseif ($faktor_uji2_code == '4117') {
        return 'Upaya untuk meningkatkan  nilai Pemegang Saham secara konsisten dan berkelanjutan.';
    } elseif ($faktor_uji2_code == '4118') {
        return 'Perusahaan melaksanakan tanggung jawab sosial perusahaan untuk mendukung keberlanjutan operasi perusahaan.';
    } elseif ($faktor_uji2_code == '4119') {
        return 'Direksi  menetapkan kebijakan tentang mekanisme bagi Direksi dan pejabat struktural untuk mencegah pengambilan keuntungan pribadi dan pihak lainnya disebabkan benturan kepentingan.';
    } elseif ($faktor_uji2_code == '4120') {
        return 'Direksi menerapkan kebijakan untuk mencegah benturan kepentingan.';
    } elseif ($faktor_uji2_code == '4121') {
        return 'Direksi melaporkan informasi-informasi yang relevan kepada Pemegang Saham dan Dewan Komisaris/Dewan Pengawas.';
    } elseif ($faktor_uji2_code == '4122') {
        return 'Direksi memberikan perlakukan yang sama (fairness) dalam memberikan informasi kepada Pemegang Saham dan anggota Dewan Komisaris/Dewan Pengawas.';
    } elseif ($faktor_uji2_code == '4123') {
        return 'Direksi memiliki pedoman/tata tertib Rapat Direksi, minimal mengatur etika rapat dan penyusunan risalah rapat, evaluasi tindak lanjut hasil rapat sebelumnya, serta pembahasan atas arahan/usulan  dan/atau  keputusan Dewan Komisaris/Dewan Pengawas.';
    } elseif ($faktor_uji2_code == '4124') {
        return 'Direksi menyelenggarakan Rapat Direksi sesuai kebutuhan, paling sedikit sekali dalam setiap bulan.';
    } elseif ($faktor_uji2_code == '4125') {
        return 'Anggota Direksi menghadiri setiap rapat Direksi maupun rapat Direksi & Komisaris, jika tidak dapat hadir yang bersangkutan harus menjelaskan alasan ketidakhadirannya.';
    } elseif ($faktor_uji2_code == '4126') {
        return 'Direksi melakukan evaluasi terhadap pelaksanaan keputusan hasil rapat sebelumnya.';
    } elseif ($faktor_uji2_code == '4127') {
        return 'Direksi menindaklanjuti arahan, dan/atau keputusan Dewan Komisaris/Dewan Pengawas.';
    } elseif ($faktor_uji2_code == '4128') {
        return 'Perusahaan memiliki Piagam Pengawasan Intern yang ditetapkan oleh Direksi.';
    } elseif ($faktor_uji2_code == '4129') {
        return 'SPI/Fungsi Audit Internal dilengkapi dengan faktor-faktor pendukung keberhasilan dalam pelaksanaan tugasnya.';
    } elseif ($faktor_uji2_code == '4130') {
        return 'SPI melaksanakan pengawasan intern untuk memberikan nilai tambah dan memperbaiki operasional perusahaan.';
    } elseif ($faktor_uji2_code == '4131') {
        return 'Sekretaris Perusahaan  dilengkapi dengan faktor-faktor pendukung keberhasilan pelaksanaan tugasnya.';
    } elseif ($faktor_uji2_code == '4132') {
        return 'Sekretaris perusahaan menjalankan fungsinya.';
    } elseif ($faktor_uji2_code == '4133') {
        return 'Direksi mengevaluasi kualitas fungsi sekretaris perusahaan.';
    } elseif ($faktor_uji2_code == '4134') {
        return 'Direksi menyelenggarakan RUPS sesuai dengan prosedur yang ditetapkan dalam Anggaran Dasar dan peraturan perundang-undangan.';
    } elseif ($faktor_uji2_code == '4135') {
        return 'Direksi menyediakan akses serta penjelasan lengkap dan informasi akurat berkenaan dengan penyelenggaraan RUPS agar dapat melaksanakan hak-haknya berdasarkan anggaran dasar dan peraturan perundang-undangan.';
    } elseif ($faktor_uji2_code == '5136') {
        return 'Perusahaan menetapkan sistem dan prosedur pengendalian informasi perusahaan dengan tujuan untuk mengamankan informasi perusahaan yang penting.';
    } elseif ($faktor_uji2_code == '5137') {
        return 'Tingkat kepatuhan perusahaan yang memadai terhadap kebijakan pengendalian informasi perusahaan.';
    } elseif ($faktor_uji2_code == '5138') {
        return 'Terdapat media untuk penyediaan Informasi Publik agar dapat diperoleh dengan cepat dan tepat waktu, biaya ringan, dan cara sederhana.';
    } elseif ($faktor_uji2_code == '5139') {
        return 'Website perusahaan mempublikasikan kebijakan dan informasi penting perusahaan.';
    } elseif ($faktor_uji2_code == '5140') {
        return 'Perusahaan menyediakan media lain untuk mengkomunikasikan kebijakan informasi penting perusahaan.';
    } elseif ($faktor_uji2_code == '5141') {
        return 'Informasi yang disediakan dalam website Perusahaan dan bumn.go.id dimutahirkan secara berkala.';
    } elseif ($faktor_uji2_code == '5142') {
        return 'Tingkat kemudahan akses terhadap kebijakan dan informasi penting perusahaan yang disediakan dalam website perusahaan.';
    } elseif ($faktor_uji2_code == '5143') {
        return 'Laporan Tahunan memenuhi ketentuan umum penyajian Laporan Tahunan.';
    } elseif ($faktor_uji2_code == '5144') {
        return 'Laporan Tahunan memuat mengenai Ikhtisar Data Keuangan Penting.';
    } elseif ($faktor_uji2_code == '5145') {
        return 'Laporan Tahunan memuat Laporan Dewan Komisaris/Dewan Pengawas dan Laporan Direksi.';
    } elseif ($faktor_uji2_code == '5146') {
        return 'Laporan Tahunan memuat profil perusahaan secara lengkap';
    } elseif ($faktor_uji2_code == '5147') {
        return 'Laporan Tahunan memuat bagian tersendiri mengenai Analisa dan Pembahasan Manajamen atas Kinerja Perusahaan.';
    } elseif ($faktor_uji2_code == '5148') {
        return 'Laporan Tahunan memuat pengungkapan praktik Tata Kelola Perusahaan yang Baik.';
    } elseif ($faktor_uji2_code == '5149') {
        return 'Laporan Tahunan memuat bagian tersendiri mengenai Laporan Keuangan.';
    } elseif ($faktor_uji2_code == '5150') {
        return 'Perusahaan mengikuti Annual Report Award (ARA).';
    } elseif ($faktor_uji2_code == '5151') {
        return 'Penghargaan atau award lainnya.';
    } elseif ($faktor_uji2_code == '6152') {
        return 'Perusahaan memiliki bidang/area yang menjadi best practices di Industrinya atau menjadi tujuan benchmark bagi perusahaan lain (baik bagi BUMN maupun perusahaan swasta). Bidang/area tersebut dapat terdiri dari produk, proses, fungsi pendukung, kinerja organisasi, dan strategi.';
    } elseif ($faktor_uji2_code == '6153') {
        return 'Terdapat penyimpangan dari prinsip-prinsip Tata Kelola Perusahaan yang baik.';
    } else {
        return ucwords($faktor_uji2_code);
    }
}



function format_status_pendaftaran($status)
{
    if ($status == '0') {
        return 'Mundur';
    } else {
        return 'Aktif';
    }
}

function format_status_biodata($status)
{
    if ($status == '0') {
        return 'Belum Lengkap';
    } else {
        return 'Lengkap';
    }
}

function format_status_filedata($status)
{
    if ($status == '0') {
        return 'Belum Lengkap';
    } else {
        return 'Lengkap';
    }
}

function format_status_seleksi($status)
{
    if ($status == '0') {
        return 'Tidak Lulus';
    } else {
        return 'Lulus';
    }
}

function format_status_verifikasi($status)
{
    if ($status == '0') {
        return 'Belum';
    } else {
        return 'Sudah';
    }
}

function format_is_blokir($status)
{
    if ($status == '1') {
        return 'BLOKIR';
    } else {
        return 'AKTIF';
    }
}

function format_status_scorecard($status_scorecard)
{
    if ($status_scorecard == '1') {
        return 'NONAKTIF';
    } else {
        return 'AKTIF';
    }
}

function format_jawaban($jawaban)
{
    if ($jawaban == '1') {
        return 'Ada';
    } else {
        return 'Tidak Ada';
    }
}
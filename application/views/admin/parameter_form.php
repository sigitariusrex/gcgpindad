<div class="container">
<h2>Parameter</h2>
<hr>

<?php echo form_open($form_action, array('id'=>'myform', 'class'=>'form-horizontal', 'role'=>'form')) ?>

    <h3 class="bg-success">A. Keterangan Parameter</h3>

    <!-- kode_divisi -->
    <div class="form-group form-group-sm has-feedback <?php set_validation_style('kode_divisi_fk')?>">
        <?php echo form_label('Kode Divisi', 'kode_divisi_fk', array('class' => 'control-label col-sm-2')) ?>
        <div class="col-sm-10">
            <?php
            $kode_divisi_fk = array(
                '' => '- Pilih -',
                '95720' => '[95720]Perencanaan Kinerja Perusahaan',
                '69730' => '[69730]Akuntansi Keuangan',
                '09060' => '[09060]Human Capital Pengembangan Organisasi',
                '03779' => '[03779]Sistem Informasi Manajemen',
                '16280' => '[16280]Bisnis Hankam',
                '31588' => '[31588]Senjata',
                '81803' => '[81803]Kendaraan Khusus',
                '71885' => '[71885]Bisnis Industrial',
                '00887' => '[00887]Alat Berat',
                '62047' => '[62047]Tempa Cor Alat Perkretaapian',
                '93014' => '[93014]Bahan Peledak Komersial',
                '38512' => '[38512]Teknologi Pengembangan',
                '43737' => '[43737]Quality Assurance K3LH',
                '59280' => '[59280]Supply Chain',
                '0' => '[0]Lainnya',
            );
            $atribut_kode_divisi_fk = 'class="form-control"';
            echo form_dropdown('kode_divisi_fk', $kode_divisi_fk, $values->kode_divisi_fk, $atribut_kode_divisi_fk);
            ?>
        </div>
        <?php if (form_error('kode_divisi_fk')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('kode_divisi_fk', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>
    
    <!-- kode_scorecard -->
    <div class="form-group form-group-sm has-feedback <?php set_validation_style('kode_scorecard_fk')?>">
        <?php echo form_label('Kode Scorecard', 'kode_scorecard_fk', array('class' => 'control-label col-sm-2')) ?>
        <div class="col-sm-10">
            <?php
            $kode_scorecard_fk = array(
                '' => '- Pilih -',
                '1001' => '[1001]Perusahaan memiliki Pedoman Telola Perusahaan yang Baik (GCG Code) yang ditinjau dan dimutakhirkan secara berkala.',
                '1002' => '[1002]Perusahaan memiliki Pedoman Perilaku yang ditinjau dan dimutakhirkan secara berkala.',
                '1003' => '[1003]Direksi menunjuk seorang anggota Direksi sebagai penanggung jawab dalam penerapan dan pemantauan Tata Kelola Perusahaan yang Baik.',
                '1004' => '[1004]Perusahaan menciptakan situasi kondusif  untuk melaksanakan Pedoman Tata Kelola Perusahaan yang Baik (GCG Code) dan Pedoman Perilaku.',
                '1005' => '[1005]Perusahaan melakukan assessment terhadap pelaksanaan Tata Kelola Perusahaan yang Baik dan reviun secara berkala.',
                '1006' => '[1006]Pelaksanaan Tata Kelola Perusahaan yang Baik menjadi salah satu unsur Key Performance Indicator (KPI) yang dituangkan dalam Kontrak Manajemen.',
                '1007' => '[1007]Perusahaan memiliki kebijakan tentang kepatuhan pelaporan harta kekayaan penyelenggara negara bagi Dewan Komisaris/Dewan Pengawas, Direksi dan pejabat satu tingkat di bawah Direksi.',
                '1008' => '[1008]Penyelenggara Negara/Wajib Lapor memahami kebijakan/SOP tentang kepatuhan pelaporan  harta kekayaan penyelenggara negara.',
                '1009' => '[1009]Perusahaan melaksanakan kebijakan/SOP tentang kepatuhan pelaporan  harta kekayaan Penyelenggara Negara.',
                '1010' => '[1010]Perusahaan memiliki ketentuan/kebijakan  tentang Pengendalian Gratifikasi.',
                '1011' => '[1011]Perusahaan melaksanakan upaya untuk meningkatkan pemahaman terhadap kebijakan/ketentuan Pengendalian Gratifikasi.',
                '1012' => '[1012]Perusahaan mengimplementasikan Pengendalian Gratifikasi.',
                '1013' => '[1013]Perusahaan memiliki kebijakan tentang pelaporan atas dugaan penyimpangan pada perusahaan (whistle blowing system).',
                '1014' => '[1014]Perusahaan melaksanakan kegiatan untuk memberikan pemahaman atas kebijakan pelaporan atas dugaan penyimpangan (whistle blowing system).',
                '1015' => '[1015]Perusahaan melaksanakan kebijakan tentang pelaporan atas dugaan penyimpangan pada perusahaan (whistle blowing system).',
                '2016' => '[2016]Pemegang Saham/RUPS/Pemilik Modal menetapkan pedoman pengangkatan dan pemberhentian Direksi.',
                '2017' => '[2017]Pemegang Saham/RUPS/Pemilik Modal melaksanakan penilaian terhadap calon anggota Direksi.',
                '2018' => '[2018]Pemegang Saham/RUPS/Pemilik Modal menetapkan pengangkatan anggota dan komposisi Direksi.',
                '2019' => '[2019]Pemegang Saham/RUPS/Pemilik Modal menetapkan pengaturan mengenai rangkap jabatan bagi anggota Direksi.',
                '2020' => '[2020]Pemegang Saham/RUPS/Pemilik Modal memberhentikan anggota Direksi sesuai dengan peraturan perundang-undangan.',
                '2021' => '[2021]Pemegang Saham/RUPS/Pemilik Modal memberikan respon terhadap lowongan jabatan dan/atau pemberhentian sementara Direksi  oleh Dewan Komisaris/Dewan Pengawas.',
                '2022' => '[2022]Pemegang Saham/RUPS/Pemilik Modal menetapkan pedoman pengangkatan dan pemberhentian Dewan Komisaris/Dewan Pengawas.',
                '2023' => '[2023]Pemegang Saham/RUPS/Pemilik Modal melaksanakan penilaian terhadap calon anggota Dewan Komisaris/Dewan Pengawas.',
                '2024' => '[2024]Pemegang Saham/RUPS/Pemilik Modal menetapkan pengangkatan anggota Dewan Komisaris/Dewan Pengawas dan komposisinya.',
                '2025' => '[2025]Pemegang Saham/RUPS/Pemilik Modal menetapkan pengaturan mengenai rangkap jabatan bagi anggota Dewan Komisaris/Dewan Pengawas.',
                '2026' => '[2026]Pemegang Saham/RUPS/Pemilik Modal memberhentikan anggota Dewan Komisaris/Dewan Pengawas sesuai dengan peraturan perundang-undangan.',
                '2027' => '[2027]Pemegang Saham/RUPS/Pemilik Modal memberikan pengesahan Rencana Jangka Penjang Perusahaan (RJPP) atau Revisi RJPP.',
                '2028' => '[2028]Pemegang Saham/RUPS/Pemilik Modal memberikan pengesahan Pengesahan Rencana Kerja dan Anggaran Perusahaan (RKAP).',
                '2029' => '[2029]Pemegang Saham/RUPS/Pemilik Modal memberikan persetujuan/keputusan atas usulan aksi korporasi yang perlu mendapat persetujuan/keputusan RUPS/Pemilik Modal.',
                '2030' => '[2030]RUPS/Pemilik Modal memberikan penilaian terhadap kinerja Direksi dan kinerja Dewan Komisaris/Dewan Pengawas.',
                '2031' => '[2031]RUPS menetapkan gaji/honorarium, tunjangan, fasilitas dan tantiem/insentif kinerja untuk Direksi dan Dewan Komisaris/Dewan Pengawas.',
                '2032' => '[2032]Pemegang Saham/RUPS/Pemilik Modal menetapkan auditor eksternal yang mengaudit Laporan Keuangan perusahaan.',
                '2033' => '[2033]Pemegang Saham/RUPS/Pemilik Modal memberikan persetujuan laporan tahunan termasuk pengesahan laporan keuangan  serta tugas pengawasan Dewan Komisaris/Dewan Pengawas.',
                '2034' => '[2034]Pemegang Saham/RUPS/Pemilik Modal menetapkan penggunaan laba bersih.',
                '2035' => '[2035]Pengesahan terhadap Laporan Tahunan dan persetujuan terhadap Laporan Keuangan dilaksanakan tepat waktu.',
                '2036' => '[2036]RUPS mengambil keputusan sesuai ketentuan perundang-undangan di bidang Perseroan Terbatas dan/atau Anggaran Dasar Perusahaan sehingga menghasilkan keputusan yang sah.',
                '2037' => '[2037]RUPS mengambil keputusan melalui proses yang terbuka dan adil.',
                '2038' => '[2038]Pemegang Saham/Pemilik Modal memberikan arahan/pembinaan penerapan Tata Kelola Perusahaan yang Baik kepada Direksi dan Dewan Komisaris/Dewan Pengawas.',
                '2039' => '[2039]Pemegang Saham/Pemilik Modal tidak mencampuri kegiatan operasional perusahaan yang menjadi tanggung jawab Direksi.',
                '2040' => '[2040]Pemegang Saham/Pemilik Modal merespon terhadap informasi yang diterima dari Direksi dan/atau Dewan Komisaris/Dewan Pengawas mengenai gejala penurunan kinerja dan kerugian perusahaan yang signifikan.',
                '3041' => '[3041]Dewan komisaris/Dewan Pengawas yang baru diangkat mengikuti program pengenalan yang diselenggarakan oleh perusahaan.',
                '3042' => '[3042]Dewan Komisaris/Dewan Pengawas melaksanakan program pelatihan dalam rangka meningkatkan kompetensi anggota Dewan Komisaris/Dewan Pengawas sesuai kebutuhan.',
                '3043' => '[3043]Dewan Komisaris/Dewan Pengawas memiliki kebijakan dan melaksanakan pembagian tugas  diantara anggota Dewan Komisaris/Dewan Pengawas.',
                '3044' => '[3044]Dewan Komisaris/Dewan Pengawas  menetapkan mekanisme pengambilan keputusan Dewan Komisaris/Dewan Pengawas.',
                '3045' => '[3045]Dewan Komisaris/Dewan Pengawas menyusun rencana kerja setiap tahun yang memuat sasaran/ target yang ingin dicapai dan melaporkan secara tertulis kepada RUPS/Pemilik Modal.',
                '3046' => '[3046]Dewan Komisaris/Dewan Pengawas  mendapatkan akses informasi perusahaan sesuai kewenangannya.',
                '3047' => '[3047]Dewan Komisaris/Dewan Pengawas memberikan persetujuan atas rancangan RJPP yang disampaikan oleh Direksi.',
                '3048' => '[3048]Dewan Komisaris/Dewan Pengawas memberikan persetujuan atas rancangan RKAP yang disampaikan oleh Direksi.',
                '3049' => '[3049]Dewan Komisaris/Dewan Pengawas  memberikan arahan tentang hal-hal  penting mengenai perubahan lingkungan bisnis yang diperkirakan akan berdampak besar pada usaha dan kinerja perusahaan secara tepat waktu dan relevan.',
                '3050' => '[3050]Dewan Komisaris/Dewan Pengawas dalam batas kewenangannya, merespon saran, harapan, permasalahan dan keluhan dari Stakeholders (pelanggan, pemasok, kreditur, dan karyawan) yang disampaikan langsung kepada Dewan Komisaris/Dewan Pengawas ataupun penyampaian oleh Direksi.',
                '3051' => '[3051]Dewan Komisaris/Dewan Pengawas  memberikan arahan tentang penguatan sistem pengendalian intern perusahaan.',
                '3052' => '[3052]Dewan Komisaris/Dewan Pengawas  memberikan arahan tentang manajemen risiko perusahaan.',
                '3053' => '[3053]Dewan Komisaris/Dewan Pengawas  memberikan arahan tentang sistem teknologi informasi yang digunakan perusahaan.',
                '3054' => '[3054]Dewan Komisaris/Dewan Pengawas  memberikan arahan tentang kebijakan dan pelaksanaan pengembangan karir.',
                '3055' => '[3055]Dewan Komisaris/Dewan Pengawas  memberikan arahan tentang kebijakan akuntansi dan penyusunan laporan keuangan sesuai dengan standar akuntansi yang berlaku umum di Indonesia (SAK).',
                '3056' => '[3056]Dewan Komisaris/Dewan Pengawas  memberikan arahan tentang kebijakan pengadaan dan pelaksanaannya.',
                '3057' => '[3057]Dewan Komisaris/Dewan Pengawas  memberikan arahan tentang kebijakan mutu dan pelayanan serta pelaksanaan kebijakan tersebut.',
                '3058' => '[3058]Dewan Komisaris/Dewan Pengawas mengawasi dan memantau kepatuhan Direksi dalam menjalankan peraturan perundangan yang berlaku dan perjanjian dengan pihak ketiga.',
                '3059' => '[3059]Dewan Komisaris/Dewan Pengawas  mengawasi dan memantau  kepatuhan Direksi dalam menjalankan perusahaan sesuai RKAP dan/atau RJPP.',
                '3060' => '[3060]Dewan Komisaris/Dewan Pengawas  memberikan persetujuan atas transaksi atau tindakan dalam lingkup kewenangan Dewan Komisaris/Dewan Pengawas atau RUPS/Pemilik Modal.',
                '3061' => '[3061]Dewan Komisaris/Dewan Pengawas  (berdasarkan usul dari Komite Audit) mengajukan calon Auditor Eksternal kepada RUPS/Pemilik Modal.',
                '3062' => '[3062]Dewan Komisaris/Dewan Pengawas  memastikan audit eksternal dan audit internal dilaksanakan secara efektif serta melaksanakan telaah atas pengaduan yang berkaitan dengan BUMN yang diterima oleh Dewan Komisaris/Dewan Pengawas.',
                '3063' => '[3063]Dewan Komisaris/Dewan Pengawas  melaporkan dengan segera kepada RUPS/Pemilik Modal apabila terjadi gejala menurunnya kinerja perusahaan serta saran-saran yang telah disampaikan kepada Direksi untuk memperbaiki permasalahan yang dihadapi.',
                '3064' => '[3064]Dewan Komisaris/Dewan Pengawas melaksanakan pengawasan terhadap kebijakan pengelolaan anak perusahaan/perusahaan patungan  dan pelaksanaannya.',
                '3065' => '[3065]Peran Dewan Komisaris/Dewan Pengawas dalam pemilihan calon anggota Direksi dan Dewan Komisaris Anak Perusahaan perusahaan/perusahaan patungan.',
                '3066' => '[3066]Dewan Komisaris/Dewan Pengawas  mengusulkan calon anggota Direksi kepada Pemegang Saham/Pemilik Modal sesuai kebijakan dan kriteria seleksi yang ditetapkan.',
                '3067' => '[3067]Dewan Komisaris/Dewan Pengawas  menilai Direksi dan melaporkan hasil penilaian tersebut kepada Pemegang Saham/Pemilik Modal.',
                '3068' => '[3068]Dewan Komisaris/Dewan Pengawas  mengusulkan remunerasi Direksi sesuai ketentuan yang berlaku dan penilaian kinerja Direksi.',
                '3069' => '[3069]Dewan komisaris/Pengawas memiliki kebijakan benturan kepentingan dan melaksanakan secara konsisten kebijakann tersebut.',
                '3070' => '[3070]Dewan Komisaris/Dewan Pengawas  memastikan prinsip-prinsip Tata Kelola Perusahaan yang Baik telah diterapkan secara efektif dan berkelanjutan.',
                '3071' => '[3071]Dewan Komisaris/Dewan Pengawas  melakukan pengukuran dan penilaian terhadap kinerja Dewan Komisaris/Dewan Pengawas.',
                '3072' => '[3072]Dewan Komisaris/Dewan Pengawas memiliki pedoman/tata tertib Rapat Dewan Komisaris/Dewan Pengawas yang memadai.',
                '3073' => '[3073]Rapat Dewan Komisaris/Dewan Pengawas diadakan secara berkala sesuai ketentuan yang berlaku dan/atau anggaran dasar.',
                '3074' => '[3074]Dewan Komisaris/Dewan Pengawas melakukan evaluasi terhadap pelaksanaan keputusan hasil rapat sebelumnya.',
                '3075' => '[3075]Sekretariat Dewan Komisaris/Dewan Pengawas memiliki uraian tugas yang jelas.',
                '3076' => '[3076]Sekretariat Dewan Komisaris/Dewan Pengawas  melakukan administrasi dan penyimpanan dokumen.',
                '3077' => '[3077]Sekretaris Dewan Komisaris/Dewan Pengawas  menyelenggarakan rapat Dewan Komisaris/Dewan Pengawas dan rapat/pertemuan antara Dewan Komisaris/Dewan Pengawas  dengan Pemegang Saham/Pemilik Modal, Direksi maupun pihak-pihak terkait lainnya.',
                '3078' => '[3078]Sekretaris Dewan Komisaris/Dewan Pengawas menyediakan data/informasi yang diperlukan oleh Dewan Komisaris/Dewan Pengawas dan komite-komite di lingkungan Dewan Komisaris/Dewan Pengawas.',
                '3079' => '[3079]Dewan Komisaris/Dewan Pengawas memiliki Komite Dewan Komisaris/Dewan Pengawas sesuai dengan ketentuan perundang-undangan yang berlaku dan kebutuhan Dewan Komisaris/Dewan Pengawas.',
                '3080' => '[3080]Komposisi keanggotaan yang mendukung pelaksanaan fungsi Komite dan independensi dari masing-masing Komite Dewan Komisaris/Dewan Pengawas.',
                '3081' => '[3081]Komite Dewan Komisaris/Dewan Pengawas memiliki piagam/charter dan program kerja  tahunan.',
                '3082' => '[3082]Komite Dewan Komisaris/Dewan Pengawas melaksanakan pertemuan rutin sesuai dengan program kerja tahunan serta melakukan kegiatan lain yang ditugaskan Dewan Komisaris/Dewan Pengawas.',
                '3083' => '[3083]Komite Dewan Komisaris/Dewan Pengawas melaporkan kegiatan dan hasil penugasan yang diterimanya kepada Dewan Komisaris/Dewan Pengawas.',
                '4084' => '[4084]Direksi yang baru diangkat mengikuti program pengenalan yang diselenggarakan oleh perusahaan.',
                '4085' => '[4085]Direksi melaksanakan program pelatihan dalam rangka meningkatkan kompetensi anggota Direksi sesuai kebutuhan.',
                '4086' => '[4086]Direksi menetapkan struktur/susunan organisasi yang sesuai dengan kebutuhan perusahaan.',
                '4087' => '[4087]Direksi menetapkan kebijakan-kebijakan operasioanl dan standard operasional baku (SOP) untuk proses bisnis inti (core business) perusahaan.',
                '4088' => '[4088]Direksi menetapkan mekanisme pengambilan keputusan atas tindakan perusahaan (corporate action) sesuai ketentuan perundang-undangan dan tepat waktu.',
                '4089' => '[4089]Direksi memiliki Rencana Jangka Panjang (RJPP) yang disahkan oleh RUPS/Pemilik Modal.',
                '4090' => '[4090]Direksi memiliki Rencana Kerja dan Anggaran Perusahaan (RKAP) yang disahkan oleh RUPS/Menteri/Pemilik Modal.',
                '4091' => '[4091]Direksi menempatkan karyawan pada semua tingkatan jabatan sesuai dengan spesifikasi jabatan dan memiliki rencana suksesi untuk seluruh jabatan dalam perusahaan.',
                '4092' => '[4092]Direksi  memberikan respon terhadap usulan peluang bisnis yang berpotensi meningkatkan pendapatan perusahaan, penghematan/efisiensi perusahaan, pendayagunaan aset, dan manfaat lainnya.',
                '4093' => '[4093]Direksi  merespon isu-isu terkini dari eksternal mengenai perubahan lingkungan bisnis dan permasalahannya,  secara tepat waktu dan relevan.',
                '4094' => '[4094]Direksi melaksanakan program/kegiatan sesuai dengan RKAP dan mengambil keputusan yang diperlukan melalui analisis yang memadai dan tepat waktu.',
                '4095' => '[4095]Direksi memiliki sistem/pedoman pengukuran dan penilaian kinerja untuk unit dan jabatan dalam organisasi (struktural) yang diterapkan secara obyektif dan transparan.',
                '4096' => '[4096]Direksi menetapkan target kinerja berdasarkan RKAP dan diturunkan secara berjenjang di tingkat unit, sub unit dan jabatan di dalam organisasi (struktural) di organisasi.',
                '4097' => '[4097]Direksi melakukan analisis dan evaluasi terhadap capaian kinerja untuk jabatan/unit-unit  di bawah Direksi dan tingkat perusahaan.',
                '4098' => '[4098]Direksi melaporkan pelaksanaan sistem manajemen kinerja kepada Dewan Komisaris/Dewan Pengawas.',
                '4099' => '[4099]Direksi menyusun dan menyampaikan kepada RUPS/Pemilik Modal tentang usulan insentif kinerja untuk Direksi.',
                '4100' => '[4100]Direksi  menerapkan  sistem tentang teknologi informasi sesuai dengan kebijakan yang telah ditetapkan.',
                '4101' => '[4101]Direksi melaksanakan sistem peningkatan mutu produk dan pelayanan.',
                '4102' => '[4102]Direksi melaksanakan pengadaan barang dan jasa yang menguntungkan bagi perusahaan, baik harga maupun kualitas barang dan jasa tersebut.',
                '4103' => '[4103]Direksi mengembangkan SDM, menilai kinerja dan memberikan remunerasi yang layak, dan membangun lingkungan SDM yang efektif  mendukung pencapaian perusahaan.',
                '4104' => '[4104]Direksi menerapkan kebijakan pengaturan untuk anak perusahaan (subsidiary governance) dan/atau perusahaan patungan.',
                '4105' => '[4105]Direksi menerapkan kebijakan akuntansi dan penyusunan laporan keuangan sesuai dengan standar akuntansi keuangan yang berlaku umum di Indonesia (SAK).',
                '4106' => '[4106]Direksi  menerapkan manajemen risiko sesuai dengan kebijakan yang telah ditetapkan.',
                '4107' => '[4107]Direksi menetapkan dan menerapkan sistem pengendalian intern untuk melindungi mengamankan investasi dan aset perusahaan.',
                '4108' => '[4108]Direksi menindaklanjuti hasil pemeriksaan SPI dan auditor eksternal (KAP dan BPK).',
                '4109' => '[4109]Direksi menetapkan mekanisme untuk menjaga kepatuhan terhadap peraturan perundang-undangan dan perjanjian dengan pihak ketiga.',
                '4110' => '[4110]Perusahaan menjalankan peraturan perundang-undangan yang berlaku  dan perjanjian dengan pihak ketiga.',
                '4111' => '[4111]Pelaksanaan hubungan dengan pelanggan.',
                '4112' => '[4112]Pelaksanaann hubungan dengan pemasok.',
                '4113' => '[4113]Pelaksanaan hubungan dengan kreditur.',
                '4114' => '[4114]Pelaksanaan kewajiban kepada Negara.',
                '4115' => '[4115]Pelaksanaan hubungan dengan karyawan perusahaan.',
                '4116' => '[4116]Terdapat prosedur tertulis menampung dan  menindaklanjuti keluhan-keluhan stakeholders.',
                '4117' => '[4117]Upaya untuk meningkatkan  nilai Pemegang Saham secara konsisten dan berkelanjutan.',
                '4118' => '[4118]Perusahaan melaksanakan tanggung jawab sosial perusahaan untuk mendukung keberlanjutan operasi perusahaan.',
                '4119' => '[4119]Direksi  menetapkan kebijakan tentang mekanisme bagi Direksi dan pejabat struktural untuk mencegah pengambilan keuntungan pribadi dan pihak lainnya disebabkan benturan kepentingan.',
                '4120' => '[4120]Direksi menerapkan kebijakan untuk mencegah benturan kepentingan.',
                '4121' => '[4121]Direksi melaporkan informasi-informasi yang relevan kepada Pemegang Saham dan Dewan Komisaris/Dewan Pengawas.',
                '4122' => '[4122]Direksi memberikan perlakukan yang sama (fairness) dalam memberikan informasi kepada Pemegang Saham dan anggota Dewan Komisaris/Dewan Pengawas.',
                '4123' => '[4123]Direksi memiliki pedoman/tata tertib Rapat Direksi, minimal mengatur etika rapat dan penyusunan risalah rapat, evaluasi tindak lanjut hasil rapat sebelumnya, serta pembahasan atas arahan/usulan  dan/atau  keputusan Dewan Komisaris/Dewan Pengawas.',
                '4124' => '[4124]Direksi menyelenggarakan Rapat Direksi sesuai kebutuhan, paling sedikit sekali dalam setiap bulan.',
                '4125' => '[4125]Anggota Direksi menghadiri setiap rapat Direksi maupun rapat Direksi & Komisaris, jika tidak dapat hadir yang bersangkutan harus menjelaskan alasan ketidakhadirannya.',
                '4126' => '[4126]Direksi melakukan evaluasi terhadap pelaksanaan keputusan hasil rapat sebelumnya.',
                '4127' => '[4127]Direksi menindaklanjuti arahan, dan/atau keputusan Dewan Komisaris/Dewan Pengawas.',
                '4128' => '[4128]Perusahaan memiliki Piagam Pengawasan Intern yang ditetapkan oleh Direksi.',
                '4129' => '[4129]SPI/Fungsi Audit Internal dilengkapi dengan faktor-faktor pendukung keberhasilan dalam pelaksanaan tugasnya.',
                '4130' => '[4130]SPI melaksanakan pengawasan intern untuk memberikan nilai tambah dan memperbaiki operasional perusahaan.',
                '4131' => '[4131]Sekretaris Perusahaan  dilengkapi dengan faktor-faktor pendukung keberhasilan pelaksanaan tugasnya.',
                '4132' => '[4132]Sekretaris perusahaan menjalankan fungsinya.',
                '4133' => '[4133]Direksi mengevaluasi kualitas fungsi sekretaris perusahaan.',
                '4134' => '[4134]Direksi menyelenggarakan RUPS sesuai dengan prosedur yang ditetapkan dalam Anggaran Dasar dan peraturan perundang-undangan.',
                '4135' => '[4135]Direksi menyediakan akses serta penjelasan lengkap dan informasi akurat berkenaan dengan penyelenggaraan RUPS agar dapat melaksanakan hak-haknya berdasarkan anggaran dasar dan peraturan perundang-undangan.',
                '5136' => '[5136]Perusahaan menetapkan sistem dan prosedur pengendalian informasi perusahaan dengan tujuan untuk mengamankan informasi perusahaan yang penting.',
                '5137' => '[5137]Tingkat kepatuhan perusahaan yang memadai terhadap kebijakan pengendalian informasi perusahaan.',
                '5138' => '[5138]Terdapat media untuk penyediaan Informasi Publik agar dapat diperoleh dengan cepat dan tepat waktu, biaya ringan, dan cara sederhana.',
                '5139' => '[5139]Website perusahaan mempublikasikan kebijakan dan informasi penting perusahaan.',
                '5140' => '[5140]Perusahaan menyediakan media lain untuk mengkomunikasikan kebijakan informasi penting perusahaan.',
                '5141' => '[5141]Informasi yang disediakan dalam website Perusahaan dan bumn.go.id dimutahirkan secara berkala.',
                '5142' => '[5142]Tingkat kemudahan akses terhadap kebijakan dan informasi penting perusahaan yang disediakan dalam website perusahaan.',
                '5143' => '[5143]Laporan Tahunan memenuhi ketentuan umum penyajian Laporan Tahunan.',
                '5144' => '[5144]Laporan Tahunan memuat mengenai Ikhtisar Data Keuangan Penting.',
                '5145' => '[5145]Laporan Tahunan memuat Laporan Dewan Komisaris/Dewan Pengawas dan Laporan Direksi.',
                '5146' => '[5146]Laporan Tahunan memuat profil perusahaan secara lengkap',
                '5147' => '[5147]Laporan Tahunan memuat bagian tersendiri mengenai Analisa dan Pembahasan Manajamen atas Kinerja Perusahaan.',
                '5148' => '[5148]Laporan Tahunan memuat pengungkapan praktik Tata Kelola Perusahaan yang Baik.',
                '5149' => '[5149]Laporan Tahunan memuat bagian tersendiri mengenai Laporan Keuangan.',
                '5150' => '[5150]Perusahaan mengikuti Annual Report Award (ARA).',
                '5151' => '[5151]Penghargaan atau award lainnya.',
                '6152' => '[6152]Perusahaan memiliki bidang/area yang menjadi best practices di Industrinya atau menjadi tujuan benchmark bagi perusahaan lain (baik bagi BUMN maupun perusahaan swasta). Bidang/area tersebut dapat terdiri dari produk, proses, fungsi pendukung, kinerja organisasi, dan strategi.',
                '6153' => '[6153]Terdapat penyimpangan dari prinsip-prinsip Tata Kelola Perusahaan yang baik.',
            );
            $atribut_kode_scorecard_fk = 'class="form-control"';
            echo form_dropdown('kode_scorecard_fk', $kode_scorecard_fk, $values->kode_scorecard_fk, $atribut_kode_scorecard_fk);
            ?>
        </div>
        <?php if (form_error('kode_scorecard_fk')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('kode_scorecard_fk', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    <!-- bobot -->
    <div class="form-group form-group-sm has-feedback <?php set_validation_style('bobot')?>">        
        <?php echo form_label('Bobot', '', array('class' => 'control-label col-sm-11')) ?>
        <div class="col-sm-1">
            <?php echo form_input('bobot', $values->bobot, 'id="bobot" class="form-control" placeholder="Bobot" maxlength="5"') ?>
            <?php set_validation_icon('bobot') ?>
        </div>
        <?php if (form_error('bobot')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('bobot', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    <h3 class="bg-success">B. Keterangan Faktor Uji Dan Unsur Pemenuhan</h3>

    <!-- kode_scorecard -->
    <div class="form-group form-group-sm has-feedback <?php set_validation_style('faktor_uji1')?>">
        <?php echo form_label('Faktor Uji 1', 'faktor_uji1', array('class' => 'control-label col-sm-2')) ?>
        <div class="col-sm-10">
            <?php
            $faktor_uji1 = array(
                '' => '- Pilih -',
                'Terdapat Pedoman Tata Kelola Perusahaan yang Baik (GCG Code).' => '[1001]Perusahaan memiliki Pedoman Telola Perusahaan yang Baik (GCG Code) yang ditinjau dan dimutakhirkan secara berkala.',
                'Terdapat Pedoman Perilaku (Code of Conduct).' => '[1002]Perusahaan memiliki Pedoman Perilaku yang ditinjau dan dimutakhirkan secara berkala.',
                'Terdapat seorang anggota Direksi yang ditunjuk oleh Rapat Direksi sebagai penanggung jawab dalam penerapan dan pemantauan Tata Kelola Perusahaan yang Baik.' => '[1003]Direksi menunjuk seorang anggota Direksi sebagai penanggung jawab dalam penerapan dan pemantauan Tata Kelola Perusahaan yang Baik.',
                'Terdapat kebijakan dan panduan tambahan yang dapat memberikan panduan lebih jauh tentang berbagai praktik dalam Pedoman Tata Kelola Perusahaan yang Baik (GCG Code).' => '[1004]Perusahaan menciptakan situasi kondusif  untuk melaksanakan Pedoman Tata Kelola Perusahaan yang Baik (GCG Code) dan Pedoman Perilaku.',
                'Perusahaan wajib melakukan pengukuran terhadap pelaksanaan Tata Kelola Perusahaan yang baik.' => '[1005]Perusahaan melakukan assessment terhadap pelaksanaan Tata Kelola Perusahaan yang Baik dan reviun secara berkala.',
                'Terdapat KPI mengenai pelaksanaan Tata Kelola Perusahaan yang Baik yang dituangkan dalam Kontrak Manajemen.' => '[1006]Pelaksanaan Tata Kelola Perusahaan yang Baik menjadi salah satu unsur Key Performance Indicator (KPI) yang dituangkan dalam Kontrak Manajemen.',
                'Terdapat kebijakan/SOP tentang pengelolaan terhadap kepatuhan dan penyampaian LHKPN.' => '[1007]Perusahaan memiliki kebijakan tentang kepatuhan pelaporan harta kekayaan penyelenggara negara bagi Dewan Komisaris/Dewan Pengawas, Direksi dan pejabat satu tingkat di bawah Direksi.',
                'Terdapat pelaksanaan sosialisasi dan bimbingan teknis tentang LHKPN kepada pegawai terkait.' => '[1008]Penyelenggara Negara/Wajib Lapor memahami kebijakan/SOP tentang kepatuhan pelaporan  harta kekayaan penyelenggara negara.',
                'Tingkat kepatuhan Penyelenggara Negara di perusahaan dalam menyampaikan LHKPN.' => '[1009]Perusahaan melaksanakan kebijakan/SOP tentang kepatuhan pelaporan  harta kekayaan Penyelenggara Negara.',
                'Terdapat kebijakan/ketentuan tentang Pengendalian Gratifikasi.' => '[1010]Perusahaan memiliki ketentuan/kebijakan  tentang Pengendalian Gratifikasi.',
                'Terdapat pelaksanaan komunikasi dan sosialisasi tentang Pengendalian Gratifikasi kepada  Dewan Komisaris/Dewan Pengawas, Direksi dan karyawan perusahaan.' => '[1011]Perusahaan melaksanakan upaya untuk meningkatkan pemahaman terhadap kebijakan/ketentuan Pengendalian Gratifikasi.',
                'Terdapat kegiatan pengelolaan gratifikasi yang sesuai dengan perundang-undangan yang berlaku.' => '[1012]Perusahaan mengimplementasikan Pengendalian Gratifikasi.',
                'Terdapat kebijakan mengenai pelaporan atas dugaan penyimpangan pada perusahaan (whistle blowing system).' => '[1013]Perusahaan memiliki kebijakan tentang pelaporan atas dugaan penyimpangan pada perusahaan (whistle blowing system).',
                'Terdapat kegiatan sosialisasi kebijakan whistle blowing system kepada karyawan perusahaan.' => '[1014]Perusahaan melaksanakan kegiatan untuk memberikan pemahaman atas kebijakan pelaporan atas dugaan penyimpangan (whistle blowing system).',
                'Terdapat sarana/media perusahaan yang memadai untuk mendukung pelaksanaan kebijakan whistle blowing system.' => '[1015]Perusahaan melaksanakan kebijakan tentang pelaporan atas dugaan penyimpangan pada perusahaan (whistle blowing system).',
                'Terdapat pedoman pengangkatan dan pemberhentian  Direksi.' => '[2016]Pemegang Saham/RUPS/Pemilik Modal menetapkan pedoman pengangkatan dan pemberhentian Direksi.',
                'Terdapat Daftar Bakal Calon yang disetujui oleh Menteri Negara BUMN dan berisikan nama-nama yang diperoleh melalui proses penjaringan dalam rangka memperoleh calon anggota Direksi.' => '[2017]Pemegang Saham/RUPS/Pemilik Modal melaksanakan penilaian terhadap calon anggota Direksi.',
                'Pengangkatan Direksi.' => '[2018]Pemegang Saham/RUPS/Pemilik Modal menetapkan pengangkatan anggota dan komposisi Direksi.',
                'Pemegang Saham/RUPS/Pemilik Modal menetapkan ketentuan mengenai jenis-jenis jabatan rangkap anggota Direksi yang menimbulkan benturan kepentingan.' => '[2019]Pemegang Saham/RUPS/Pemilik Modal menetapkan pengaturan mengenai rangkap jabatan bagi anggota Direksi.',
                'Penetapan pemberhentian anggota Direksi Perum dilakukan dengan keputusan Menteri; Penetapan pemberhentian anggota Direksi Persero dapat dilakukan dengan keputusan RUPS secara fisik, keputusan Menteri selaku RUPS, dan keputusan seluruh Pemegang Saham di luar RUPS.' => '[2020]Pemegang Saham/RUPS/Pemilik Modal memberhentikan anggota Direksi sesuai dengan peraturan perundang-undangan.',
                'Pemegang Saham/RUPS/Pemilik Modal memberikan respon/tanggapan atas pemberhentian sementara Direksi oleh Dewan Komisaris/Dewan Pengawas; diantaranya dapat berupa pemanggilan untuk penjelasan mengenai pemberhentian sementara anggota Direksi tersebut.' => '[2021]Pemegang Saham/RUPS/Pemilik Modal memberikan respon terhadap lowongan jabatan dan/atau pemberhentian sementara Direksi  oleh Dewan Komisaris/Dewan Pengawas.',
                'Terdapat pedoman pengangkatan dan pemberhentian Dewan Komisaris/Dewan Pengawas.' => '[2022]Pemegang Saham/RUPS/Pemilik Modal menetapkan pedoman pengangkatan dan pemberhentian Dewan Komisaris/Dewan Pengawas.',
                'Pemegang Saham/RUPS/Pemilik Modal  mencari usulan calon anggota Dewan Komisaris/Dewan Pengawas.' => '[2023]Pemegang Saham/RUPS/Pemilik Modal melaksanakan penilaian terhadap calon anggota Dewan Komisaris/Dewan Pengawas.',
                'Pengangkatan Dewan Komisaris/Dewan Pengawas' => '[2024]Pemegang Saham/RUPS/Pemilik Modal menetapkan pengangkatan anggota Dewan Komisaris/Dewan Pengawas dan komposisinya.',
                'Terdapat keputusan RUPS/Pemilik Modal  perusahaan (untuk Perum)/AD/peraturan lainnya yang mengatur dan menetapkan jumlah maksimum jabatan Dewan Komisaris dan Dewan Pengawas yang boleh dipegang oleh seorang anggota Dewan Komisaris/Dewan Pengawas.' => '[2025]Pemegang Saham/RUPS/Pemilik Modal menetapkan pengaturan mengenai rangkap jabatan bagi anggota Dewan Komisaris/Dewan Pengawas.',
                'Penetapan pemberhentian anggota Dewan Pengawas dilakukan dengan keputusan Menteri; Penetapan pemberhantian anggota Dewan Komisaris/Dewan Pengawas dapat dilakukan dengan keputusan RUPS secara fisik, keputusan Menteri selaku RUPS, dan keputusan seluruh Pemegang Saham di luar RUPS.' => '[2026]Pemegang Saham/RUPS/Pemilik Modal memberhentikan anggota Dewan Komisaris/Dewan Pengawas sesuai dengan peraturan perundang-undangan.',
                'Pemegang Saham/RUPS/Pemilik Modal menetapkan pedoman penyusunan RJPP.' => '[2027]Pemegang Saham/RUPS/Pemilik Modal memberikan pengesahan Rencana Jangka Penjang Perusahaan (RJPP) atau Revisi RJPP.',
                'Pemegang Saham/RUPS/Pemilik Modal menetapkan pedoman penyusunan RKAP.' => '[2028]Pemegang Saham/RUPS/Pemilik Modal memberikan pengesahan Pengesahan Rencana Kerja dan Anggaran Perusahaan (RKAP).',
                'Pemegang Saham/RUPS/Pemilik Modal melakukan pembahasan/ pengkajian/ penelaahan terhadap usulan Direksi yang perlu mendapat persetujuan/keputusan RUPS/Pemilik Modal.' => '[2029]Pemegang Saham/RUPS/Pemilik Modal memberikan persetujuan/keputusan atas usulan aksi korporasi yang perlu mendapat persetujuan/keputusan RUPS/Pemilik Modal.',
                'Penilaian kinerja Direksi' => '[2030]RUPS/Pemilik Modal memberikan penilaian terhadap kinerja Direksi dan kinerja Dewan Komisaris/Dewan Pengawas.',
                'Penetapan gaji/honorarium, tunjangan, dan fasilitas. ' => '[2031]RUPS menetapkan gaji/honorarium, tunjangan, fasilitas dan tantiem/insentif kinerja untuk Direksi dan Dewan Komisaris/Dewan Pengawas.',
                'Pemegang Saham/RUPS/Pemilik Modal menetapkan pedoman penunjukan audit eksternal.' => '[2032]Pemegang Saham/RUPS/Pemilik Modal menetapkan auditor eksternal yang mengaudit Laporan Keuangan perusahaan.',
                'Terdapat pedoman penyusunan laporan tahunan (annual report) dan laporan tentang tugas pengawasan Dewan Komisaris/Dewan Pengawas yang ditetapkan oleh Pemegang Saham/RUPS/Pemilik Modal.' => '[2033]Pemegang Saham/RUPS/Pemilik Modal memberikan persetujuan laporan tahunan termasuk pengesahan laporan keuangan  serta tugas pengawasan Dewan Komisaris/Dewan Pengawas.',
                'Terdapat pedoman/kebijakan deviden.' => '[2034]Pemegang Saham/RUPS/Pemilik Modal menetapkan penggunaan laba bersih.',
                'RUPS/Keputusan Pemilik Modal untuk pengesahan laporan tahunan dilaksanakan tepat waktu sesuai ketentuan, yaitu paling lambat 6 (enam) bulan setelah berakhirnya tahun buku yang lampau.' => '[2035]Pengesahan terhadap Laporan Tahunan dan persetujuan terhadap Laporan Keuangan dilaksanakan tepat waktu.',
                'Ketua RUPS sesuai dengan ketentuan perundang-undangan di bidang Perseroan Terbatas dan/atau anggaran dasar perusahaan.' => '[2036]RUPS mengambil keputusan sesuai ketentuan perundang-undangan di bidang Perseroan Terbatas dan/atau Anggaran Dasar Perusahaan sehingga menghasilkan keputusan yang sah.',
                'Pemegang Saham diberikan kesempatan untuk mengajukan usul mata acara RUPS sesuai dengan peraturan perundang-undangan.' => '[2037]RUPS mengambil keputusan melalui proses yang terbuka dan adil.',
                'Terdapat arahan Pemegang Saham/Pemilik Modal dalam RUPS  maupun dalam Keputusan Pemegang Saham tentang persetujuan transaksional.' => '[2038]Pemegang Saham/Pemilik Modal memberikan arahan/pembinaan penerapan Tata Kelola Perusahaan yang Baik kepada Direksi dan Dewan Komisaris/Dewan Pengawas.',
                'Tidak terdapat instruksi secara tertulis/surat/keputusan dari Pemegang Saham/Pemilik Modal  yang bersifat transaksional/operasional yang tidak berdasarkan usulan dari Direksi. Apabila ada instruksi/surat/keputusan PS terkait dengan operasional perusahaan tanpa ada usulan Direksi, maka hal tersebut merupakan intervensi Pemegang Saham.' => '[2039]Pemegang Saham/Pemilik Modal tidak mencampuri kegiatan operasional perusahaan yang menjadi tanggung jawab Direksi.',
                'RUPS/Pemilik Modal menetapkan sistem penerimaan laporan gejala penurunan kinerja dari Direksi dan/atau Dewan Komisaris/Dewan Pengawas.' => '[2040]Pemegang Saham/Pemilik Modal merespon terhadap informasi yang diterima dari Direksi dan/atau Dewan Komisaris/Dewan Pengawas mengenai gejala penurunan kinerja dan kerugian perusahaan yang signifikan.',
                'Dewan Komisaris/Dewan Pengawas menyampaikan kepada Direksi untuk diadakan program pengenalan bagi anggota Dewan Komisaris/Dewan Pengawas yang baru diangkat.' => '[3041]Dewan komisaris/Dewan Pengawas yang baru diangkat mengikuti program pengenalan yang diselenggarakan oleh perusahaan.',
                'Terdapat kebijakan Dewan Komisaris/Pengawas tentang pelatihan bagi Dewan Komisaris/Dewan Pengawas.' => '[3042]Dewan Komisaris/Dewan Pengawas melaksanakan program pelatihan dalam rangka meningkatkan kompetensi anggota Dewan Komisaris/Dewan Pengawas sesuai kebutuhan.',
                'Terdapat ketentuan yang mengatur tentang kewajiban Dewan Komisaris/Pengawas untuk melakukan pembagian tugas  di antara anggota Dewan Komisaris/Dewan Pengawas.' => '[3043]Dewan Komisaris/Dewan Pengawas memiliki kebijakan dan melaksanakan pembagian tugas  diantara anggota Dewan Komisaris/Dewan Pengawas.',
                'Terdapat pengaturan mengenai mekanisme pengambilan keputusan Dewan Komisaris/Dewan Pengawas  secara formal, terdiri dari (1) pengambilan keputusan melalui rapat Dewan Komisaris/ Dewan Pengawas; (2)  pengambilan keputusan diluar rapat (melalui sirkuler dan lain-lain).' => '[3044]Dewan Komisaris/Dewan Pengawas  menetapkan mekanisme pengambilan keputusan Dewan Komisaris/Dewan Pengawas.',
                'Terdapat kebijakan mengenai penyusunan rencana kerja dan anggaran tahunan Dewan Komisaris/Dewan Pengawas yang memadai.' => '[3045]Dewan Komisaris/Dewan Pengawas menyusun rencana kerja setiap tahun yang memuat sasaran/ target yang ingin dicapai dan melaporkan secara tertulis kepada RUPS/Pemilik Modal.',
                'Terdapat kebijakan/pedoman Dewan Komisaris/dewan Pengawas tentang informasi yang disediakan oleh  Direksi  dan kebijakan tersebut disampaikan kepada Direksi.' => '[3046]Dewan Komisaris/Dewan Pengawas  mendapatkan akses informasi perusahaan sesuai kewenangannya.',
                'Terdapat kebijakan  mengenai mekanisme pemberian persetujuan/tanggapan/ pendapat Dewan Komisaris/Dewan Pengawas terhadap rancangan RJPP yang disampaikan oleh Direksi.' => '[3047]Dewan Komisaris/Dewan Pengawas memberikan persetujuan atas rancangan RJPP yang disampaikan oleh Direksi.',
                'Terdapat kebijakan  Dewan Komisaris/Dewan Pengawas  mengenai pelaksanaan pemberian persetujuan/tanggapan/pendapat Dewan Komisaris/Dewan Pengawas terhadap rancangan RKAP yang disampaikan oleh Direksi.' => '[3048]Dewan Komisaris/Dewan Pengawas memberikan persetujuan atas rancangan RKAP yang disampaikan oleh Direksi.',
                'Terdapat kebijakan/kriteria yang ditetapkan Dewan Komisaris/Dewan Pengawas  mengenai informasi lingkungan bisnis dan permasalahannya yang diperkirakan berdampak pada usaha perusahaan dan kinerja perusahaan yang perlu mendapat perhatian Dewan Komisaris/Dewan Pengawas.' => '[3049]Dewan Komisaris/Dewan Pengawas  memberikan arahan tentang hal-hal  penting mengenai perubahan lingkungan bisnis yang diperkirakan akan berdampak besar pada usaha dan kinerja perusahaan secara tepat waktu dan relevan.',
                'Terdapat mekanisme bagi Dewan Komisaris/Dewan Pengawas untuk merespon/menindaklanjuti saran, permasalahan atau keluhan dari stakeholder dan menyampaikan kepada Direksi tentang saran penyelesaian yang diperlukan.' => '[3050]Dewan Komisaris/Dewan Pengawas dalam batas kewenangannya, merespon saran, harapan, permasalahan dan keluhan dari Stakeholders (pelanggan, pemasok, kreditur, dan karyawan) yang disampaikan langsung kepada Dewan Komisaris/Dewan Pengawas ataupun penyampaian oleh Direksi.',
                'Terdapat kebijakan Dewan Komisaris/Dewan Pengawas mengenai pengawasan dan pemberian nasihat terhadap kebijakan/rancangan  sistem pengendalian intern dan pelaksanaannya.' => '[3051]Dewan Komisaris/Dewan Pengawas  memberikan arahan tentang penguatan sistem pengendalian intern perusahaan.',
                'Terdapat kebijakan Dewan Komisaris/Dewan Pengawas mengenai pengawasan dan pemberian nasihat terhadap kebijakan manajemen risiko perusahaan dan pelaksanaannya.' => '[3052]Dewan Komisaris/Dewan Pengawas  memberikan arahan tentang manajemen risiko perusahaan.',
                'Terdapat kebijakan  Dewan Komisaris/Dewan Pengawas mengenai pengawasan dan pemberian nasihat terhadap kebijakan sistem teknologi informasi perusahaan dan pelaksanaannya.' => '[3053]Dewan Komisaris/Dewan Pengawas  memberikan arahan tentang sistem teknologi informasi yang digunakan perusahaan.',
                'Terdapat kebijakan  Dewan Komisaris/Dewan Pengawas mengenai pengawasan dan pemberian nasihat terhadap kebijakan pengelolaan sumber daya manusia, khususnya tentang manajemen karir di perusahaan, sistem dan prosedur promosi, mutasi dan demosi di perusahaan dan pelaksanaan kebijakan tersebut.' => '[3054]Dewan Komisaris/Dewan Pengawas  memberikan arahan tentang kebijakan dan pelaksanaan pengembangan karir.',
                'Terdapat kebijakan  Dewan Komisaris/Dewan Pengawas mengenai pengawasan dan pemberian nasihat terhadap kebijakan akuntansi dan penyusunan laporan keuangan sesuai dengan standar akuntansi yang berlaku umum di Indonesia.' => '[3055]Dewan Komisaris/Dewan Pengawas  memberikan arahan tentang kebijakan akuntansi dan penyusunan laporan keuangan sesuai dengan standar akuntansi yang berlaku umum di Indonesia (SAK).',
                'Terdapat kebijakan  Dewan Komisaris/Dewan Pengawas mengenai pengawasan dan pemberian nasihat terhadap kebijakan pengadaan barang dan jasa beserta pelaksanaannya.' => '[3056]Dewan Komisaris/Dewan Pengawas  memberikan arahan tentang kebijakan pengadaan dan pelaksanaannya.',
                'Terdapat kebijakan  Dewan Komisaris/Dewan Pengawas mengenai pengawasan dan pemberian nasihat terhadap kebijakan mutu dan pelayanan serta pelaksanaan kebijakan tersebut.' => '[3057]Dewan Komisaris/Dewan Pengawas  memberikan arahan tentang kebijakan mutu dan pelayanan serta pelaksanaan kebijakan tersebut.',
                'Terdapat kebijakan mengenai pengawasan dan pemberian nasihat Dewan Komisaris/Dewan Pengawas atas kepatuhan perusahaan dalam menjalankan peraturan perundang-undangan yang berlaku dan anggaran dasar serta kepatuhan perusahaan terhadap seluruh perjanjian dan komitmen yang dibuat oleh perusahaan dengan pihak ketiga.' => '[3058]Dewan Komisaris/Dewan Pengawas mengawasi dan memantau kepatuhan Direksi dalam menjalankan peraturan perundangan yang berlaku dan perjanjian dengan pihak ketiga.',
                'Terdapat kebijakan  Dewan Komisaris/Dewan Pengawas memantau kepatuhan Direksi dalam menjalankan pengurusan perusahaan terhadap RKAP dan/atau RJPP.' => '[3059]Dewan Komisaris/Dewan Pengawas  mengawasi dan memantau  kepatuhan Direksi dalam menjalankan perusahaan sesuai RKAP dan/atau RJPP.',
                'Terdapat mekanisme bagi Dewan Komisaris/Dewan Pengawas mengenai pemberian persetujuan/otorisasi/rekomendasi Dewan Komisaris terhadap tindakan Direksi yang memerlukan rekomendasi/persetujuan Dewan Komisaris/Dewan Pengawas sesuai ketentuan yang berlaku dan/atau anggaran dasar.' => '[3060]Dewan Komisaris/Dewan Pengawas  memberikan persetujuan atas transaksi atau tindakan dalam lingkup kewenangan Dewan Komisaris/Dewan Pengawas atau RUPS/Pemilik Modal.',
                'Terdapat kebijakan dan prosedur Dewan Komisaris/Dewan Pengawas mengenai proses penunjukan calon auditor eksternal dan/atau penunjukan kembali auditor eksternal dan penyampaian usulan calon auditor eksternal kepada RUPS/Pemilik Modal.' => '[3061]Dewan Komisaris/Dewan Pengawas  (berdasarkan usul dari Komite Audit) mengajukan calon Auditor Eksternal kepada RUPS/Pemilik Modal.',
                'Terdapat kebijakan Dewan Komisaris/Dewan Pengawas tentang pengawasan terhadap efektivitas pelaksanaan audit eksternal dan audit internal, serta pelaksanaan telaah atas pengaduan yang berkaitan dengan BUMN yang diterima oleh Dewan Komisaris/Dewan Pengawas.' => '[3062]Dewan Komisaris/Dewan Pengawas  memastikan audit eksternal dan audit internal dilaksanakan secara efektif serta melaksanakan telaah atas pengaduan yang berkaitan dengan BUMN yang diterima oleh Dewan Komisaris/Dewan Pengawas.',
                'Terdapat kebijakan dan prosedur: (1)  pelaporan kepada RUPS/Pemilik Modal jika terjadi gejala menurunnya kinerja perusahaan;  dan (2) mekanisme pemberian saran segera kepada Direksi untuk memperbaiki permasalahan yang berdampak pada menurunnya kinerja perusahaan tersebut; (3) mekanisme untuk segera membahas gejala menurunnya kinerja perusahaan.' => '[3063]Dewan Komisaris/Dewan Pengawas  melaporkan dengan segera kepada RUPS/Pemilik Modal apabila terjadi gejala menurunnya kinerja perusahaan serta saran-saran yang telah disampaikan kepada Direksi untuk memperbaiki permasalahan yang dihadapi.',
                'Terdapat kebijakan  Dewan Komisaris/Dewan Pengawas mengenai pengawasan dan pemberian nasihat terhadap kebijakan pengelolaan anak perusahaan/perusahaan patungan dan pelaksanaan kebijakan tersebut.' => '[3064]Dewan Komisaris/Dewan Pengawas melaksanakan pengawasan terhadap kebijakan pengelolaan anak perusahaan/perusahaan patungan  dan pelaksanaannya.',
                'Terdapat kebijakan dan prosedur peran Dewan Komisaris/Dewan Pengawas dalam pengangkatan Direksi dan Dewan Komisaris anak perusahaan/perusahaan patungan.' => '[3065]Peran Dewan Komisaris/Dewan Pengawas dalam pemilihan calon anggota Direksi dan Dewan Komisaris Anak Perusahaan perusahaan/perusahaan patungan.',
                'Dewan Komisaris/Dewan Pengawas  memiliki kebijakan dan kriteria seleksi bagi calon Direksi dan pengusulan calon tersebut kepada Pemegang Saham/Pemilik Modal.' => '[3066]Dewan Komisaris/Dewan Pengawas  mengusulkan calon anggota Direksi kepada Pemegang Saham/Pemilik Modal sesuai kebijakan dan kriteria seleksi yang ditetapkan.',
                'Terdapat kebijakan Dewan Komisaris/Dewan Pengawas mengenai penilaian kinerja Direksi dan pelaporan kepada Pemegang Saham/Pemilik Modal.' => '[3067]Dewan Komisaris/Dewan Pengawas  menilai Direksi dan melaporkan hasil penilaian tersebut kepada Pemegang Saham/Pemilik Modal.',
                'Terdapat kebijakan  Dewan Komisaris/Dewan Pengawas mengenai pengusulan remunerasi Direksi.' => '[3068]Dewan Komisaris/Dewan Pengawas  mengusulkan remunerasi Direksi sesuai ketentuan yang berlaku dan penilaian kinerja Direksi.',
                'Terdapat kebijakan Dewan Komisaris/Dewan Pengawas mengenai (potensi) benturan kepentingan yang dapat mengganggu pelaksanaan tugas Dewan Komisaris/Dewan Pengawas.' => '[3069]Dewan komisaris/Pengawas memiliki kebijakan benturan kepentingan dan melaksanakan secara konsisten kebijakann tersebut.',
                'Terdapat kebijakan dan pedoman untuk memantau penerapan prinsip-prinsip Tata Kelola Perusahaan yang Baik.' => '[3070]Dewan Komisaris/Dewan Pengawas  memastikan prinsip-prinsip Tata Kelola Perusahaan yang Baik telah diterapkan secara efektif dan berkelanjutan.',
                'Dewan Komisaris/Dewan Pengawas memiliki kebijakan mengenai pengukuran dan penilaian terhadap kinerja Dewan Komisaris/Dewan Pengawas.' => '[3071]Dewan Komisaris/Dewan Pengawas  melakukan pengukuran dan penilaian terhadap kinerja Dewan Komisaris/Dewan Pengawas.',
                'Pedoman/tata tertib Rapat Dewan Komisaris.' => '[3072]Dewan Komisaris/Dewan Pengawas memiliki pedoman/tata tertib Rapat Dewan Komisaris/Dewan Pengawas yang memadai.',
                'Dewan Komisaris/Dewan Pengawas memiliki  rencana  penyelenggaraan rapat internal Dewan Komisaris/Dewan Pengawas dan Rapat Dewan Komisaris/Dewan Pengawas yang dihadiri Direksi (Rapat Gabungan), dengan jumlah dan waktu penyelenggaraan rapat sesuai ketentuan yang berlaku.' => '[3073]Rapat Dewan Komisaris/Dewan Pengawas diadakan secara berkala sesuai ketentuan yang berlaku dan/atau anggaran dasar.',
                'Terdapat evaluasi Dewan Komisaris/Dewan Pengawas atas tindak lanjut hasil rapat sebelumnya.' => '[3074]Dewan Komisaris/Dewan Pengawas melakukan evaluasi terhadap pelaksanaan keputusan hasil rapat sebelumnya.',
                'Adanya uraian tugas bagi Sekretariat Komisaris yang ditetapkan oleh Komisaris Utama/Ketua Dewan Pengawas.' => '[3075]Sekretariat Dewan Komisaris/Dewan Pengawas memiliki uraian tugas yang jelas.',
                'Sekretaris Dewan Komisaris/Dewan Pengawas  mempunyai fasilitas penyimpanan dokumen Komisaris yang disediakan oleh Perusahaan.' => '[3076]Sekretariat Dewan Komisaris/Dewan Pengawas  melakukan administrasi dan penyimpanan dokumen.',
                'Terdapat undangan rapat Dewan Komisaris/Dewan Pengawas, yang disampaikan kepada seluruh anggota Dewan Komisaris/Dewan Pengawas dan pihak-pihak lain yang diundang.' => '[3077]Sekretaris Dewan Komisaris/Dewan Pengawas  menyelenggarakan rapat Dewan Komisaris/Dewan Pengawas dan rapat/pertemuan antara Dewan Komisaris/Dewan Pengawas  dengan Pemegang Saham/Pemilik Modal, Direksi maupun pihak-pihak terkait lainnya.',
                'Terdapat data/informasi yang berkaitan dengan monitoring tindak lanjut hasil keputusan, rekomendasi dan arahan Dewan Komisaris/Dewan Pengawas.' => '[3078]Sekretaris Dewan Komisaris/Dewan Pengawas menyediakan data/informasi yang diperlukan oleh Dewan Komisaris/Dewan Pengawas dan komite-komite di lingkungan Dewan Komisaris/Dewan Pengawas.',
                'Terdapat komite audit yang bekerja secara kolektif dan berfungsi membantu Dewan Komisaris/Dewan Pengawas dalam melaksanakan tugasnya.   ' => '[3079]Dewan Komisaris/Dewan Pengawas memiliki Komite Dewan Komisaris/Dewan Pengawas sesuai dengan ketentuan perundang-undangan yang berlaku dan kebutuhan Dewan Komisaris/Dewan Pengawas.',
                'Salah seorang anggota Komite memiliki pengetahuan dan pengalaman kerja yang cukup di bidang tugas masing-masing Komite.' => '[3080]Komposisi keanggotaan yang mendukung pelaksanaan fungsi Komite dan independensi dari masing-masing Komite Dewan Komisaris/Dewan Pengawas.',
                'Terdapat Piagam untuk setiap Komite yang ditetapkan oleh Dewan Komisaris/Pengawas, yang ditinjau dan dimutakhirkan secara berkala. ' => '[3081]Komite Dewan Komisaris/Dewan Pengawas memiliki piagam/charter dan program kerja  tahunan.',
                'Jumlah pertemuan berkala dan agenda yang dibahas sesuai dengan program kerja tahunan serta jumlah kegiatan lain yang ditugaskan sesuai yang ditugaskan Dewan Komisaris/Dewan Pengawas.' => '[3082]Komite Dewan Komisaris/Dewan Pengawas melaksanakan pertemuan rutin sesuai dengan program kerja tahunan serta melakukan kegiatan lain yang ditugaskan Dewan Komisaris/Dewan Pengawas.',
                'Terdapat laporan kepada Dewan Komisaris/Dewan Pengawas atas setiap pelaksanaan penugasan disertai dengan rekomendasi.' => '[3083]Komite Dewan Komisaris/Dewan Pengawas melaporkan kegiatan dan hasil penugasan yang diterimanya kepada Dewan Komisaris/Dewan Pengawas.',
                'Direksi menyampaikan kepada Sekretaris Perusahaan untuk diadakan progran pengenalan bagi anggota Direksi yang baru diangkat.' => '[4084]Direksi yang baru diangkat mengikuti program pengenalan yang diselenggarakan oleh perusahaan.',
                'Terdapat kebijakan tentang pelatihan bagi anggota Direksi sesuai kebutuhan.' => '[4085]Direksi melaksanakan program pelatihan dalam rangka meningkatkan kompetensi anggota Direksi sesuai kebutuhan.',
                'Terdapat struktur organisasi yang dirancang untuk memastikan pencapaian sasaran dan tujuan organisasi.' => '[4086]Direksi menetapkan struktur/susunan organisasi yang sesuai dengan kebutuhan perusahaan.',
                'Terdapat kebijakan tentang pedoman penyusunan SOP di perusahaan.' => '[4087]Direksi menetapkan kebijakan-kebijakan operasioanl dan standard operasional baku (SOP) untuk proses bisnis inti (core business) perusahaan.',
                'Terdapat pengaturan mengenai mekanisme pengambilan keputusan Direksi secara formal, terdiri dari (1) pengambilan keputusan melalui rapat Direksi; (2)  pengambilan keputusan diluar rapat (melalui sirkuler dan lain-lain).' => '[4088]Direksi menetapkan mekanisme pengambilan keputusan atas tindakan perusahaan (corporate action) sesuai ketentuan perundang-undangan dan tepat waktu.',
                'Terdapat kebijakan, prosedur dan pedoman penyusunan Rencana Jangka Panjang Perusahaan (RJPP) yang memadai.' => '[4089]Direksi memiliki Rencana Jangka Panjang (RJPP) yang disahkan oleh RUPS/Pemilik Modal.',
                'Terdapat kebijakan, prosedur dan pedoman penyusunan Rencana Kerja dan Anggaran Perusahaan  (RKAP) yang memadai.' => '[4090]Direksi memiliki Rencana Kerja dan Anggaran Perusahaan (RKAP) yang disahkan oleh RUPS/Menteri/Pemilik Modal.',
                'Terdapat kebijakan/pedoman perusahaan mengenai manajemen karir di perusahaan, dan sistem dan prosedur promosi, demosi dan mutasi di perusahaan.' => '[4091]Direksi menempatkan karyawan pada semua tingkatan jabatan sesuai dengan spesifikasi jabatan dan memiliki rencana suksesi untuk seluruh jabatan dalam perusahaan.',
                'Terdapat mekanisme bagi Direksi untuk merespon usulan peluang bisnis dari manajemen di bawah Direksi/anggota Direksi/Dewan Komisaris/Dewan Pengawas.' => '[4092]Direksi  memberikan respon terhadap usulan peluang bisnis yang berpotensi meningkatkan pendapatan perusahaan, penghematan/efisiensi perusahaan, pendayagunaan aset, dan manfaat lainnya.',
                'Terdapat mekanisme bagi Direksi untuk sewaktu-waktu segera membahas isu-isu terkini mengenai perubahan lingkungan bisnis dan permasalahan yang berdampak besar pada usaha perusahaan dan kinerja perusahaan.' => '[4093]Direksi  merespon isu-isu terkini dari eksternal mengenai perubahan lingkungan bisnis dan permasalahannya,  secara tepat waktu dan relevan.',
                'Setiap pelaksanaan program/kegiatan yang membutuhkan persetujuan Dewan Komisaris/Dewan Pengawas, telah melalui melalui mekanisme yang sesuai dengan anggaran dasar perusahaan atau sesuai dengan wewenang yang ditetapkan dalam Anggaran Dasar.' => '[4094]Direksi melaksanakan program/kegiatan sesuai dengan RKAP dan mengambil keputusan yang diperlukan melalui analisis yang memadai dan tepat waktu.',
                'Terdapat sistem/pedoman paling penilaian kinerja.' => '[4095]Direksi memiliki sistem/pedoman pengukuran dan penilaian kinerja untuk unit dan jabatan dalam organisasi (struktural) yang diterapkan secara obyektif dan transparan.',
                'Terdapat target kinerja untuk setiap jabatan dalam struktur organisasi sesuai dengan kapasitas peran dan potensi tugas unit dan jabatan (struktural) di dalam organisasi.' => '[4096]Direksi menetapkan target kinerja berdasarkan RKAP dan diturunkan secara berjenjang di tingkat unit, sub unit dan jabatan di dalam organisasi (struktural) di organisasi.',
                'Direksi melakukan analisis dan evaluasi terhadap perkembangan kinerja jabatan/unit-unit di bawah Direksi.' => '[4097]Direksi melakukan analisis dan evaluasi terhadap capaian kinerja untuk jabatan/unit-unit  di bawah Direksi dan tingkat perusahaan.',
                'Direksi menyusun dan menyampaikan kepada Dewan Komisaris mengenai pencapaian kinerja perusahaan berdasarkan target-target kolegial Direksi.' => '[4098]Direksi melaporkan pelaksanaan sistem manajemen kinerja kepada Dewan Komisaris/Dewan Pengawas.',
                'Terdapat usulan kepada RUPS/Pemilik Modal yang sudah disetujui Dewan Komisaris tentang insentif kinerja Direksi, sesuai ketentuan yang berlaku.' => '[4099]Direksi menyusun dan menyampaikan kepada RUPS/Pemilik Modal tentang usulan insentif kinerja untuk Direksi.',
                'Perusahaan memiliki kebijakan teknologi informasi.' => '[4100]Direksi  menerapkan  sistem tentang teknologi informasi sesuai dengan kebijakan yang telah ditetapkan.',
                'Pelaksanaan pelayanan.' => '[4101]Direksi melaksanakan sistem peningkatan mutu produk dan pelayanan.',
                'Perusahaan memiliki pedoman pengadaan barang dan jasa perusahaan yang menerapkan prinsip-prinsip efisien, efektif, kompetitif, transparan, adil dan wajar, akuntabel; dan memuat hak-hak dan kewajiban pemasok sesuai dengan peraturan perundang-undangan yang berlaku.' => '[4102]Direksi melaksanakan pengadaan barang dan jasa yang menguntungkan bagi perusahaan, baik harga maupun kualitas barang dan jasa tersebut.',
                'Pendidikan dan Pelatihan.' => '[4103]Direksi mengembangkan SDM, menilai kinerja dan memberikan remunerasi yang layak, dan membangun lingkungan SDM yang efektif  mendukung pencapaian perusahaan.',
                'Direksi menetapkan kebijakan pengaturan untuk anak perusahaan (subsidiary governance) dan perusahaan patungan antara lain mencakup: pengangkatan Dewan Komisaris dan Direksi, penetapan target kinerja dan penilaian kinerja serta insentif bagi Dewan Komisaris/Dewan Pengawas dan Direksi.' => '[4104]Direksi menerapkan kebijakan pengaturan untuk anak perusahaan (subsidiary governance) dan/atau perusahaan patungan.',
                'Direksi menetapkan kebijakan akuntansi dan penyusunan laporan keuangan sesuai dengan Standar Akuntansi Keuangan.' => '[4105]Direksi menerapkan kebijakan akuntansi dan penyusunan laporan keuangan sesuai dengan standar akuntansi keuangan yang berlaku umum di Indonesia (SAK).',
                'Perusahaan memiliki kebijakan manajemen risiko yang memuat kerangka, tahapan pelaksanaan manajemen risiko, pelaporan risiko dan penanganannya.' => '[4106]Direksi  menerapkan manajemen risiko sesuai dengan kebijakan yang telah ditetapkan.',
                'Direksi menetapkan rancangan sistem pengendalian intern yang mengatur kerangka (framework) pengendalian intern antara lain  dengan pendekatan unsur lingkungan pengendalian, pengelolaan risiko, aktivitas pengendalian, sistem informasi dan komunikasi dan pemantauan, pelaksanaan dan pelaporannya.' => '[4107]Direksi menetapkan dan menerapkan sistem pengendalian intern untuk melindungi mengamankan investasi dan aset perusahaan.',
                'Terdapat monitoring tindak lanjut hasil pemeriksaan SPI dan auditor eksternal (KAP dan BPK).' => '[4108]Direksi menindaklanjuti hasil pemeriksaan SPI dan auditor eksternal (KAP dan BPK).',
                'Terdapat fungsi yang mengendalikan dan memastikan kebijakan, keputusan perusahaan, dan seluruh kegiatan perusahaan sesuai dengan ketentuan hukum dan peraturan perundang-undangan yang berlaku serta memantau dan menjaga kepatuhan perusahaan terhadap seluruh perjanjian dan komitmen yang dibuat oleh perusahaan dengan pihak ketiga.' => '[4109]Direksi menetapkan mekanisme untuk menjaga kepatuhan terhadap peraturan perundang-undangan dan perjanjian dengan pihak ketiga.',
                'Terdapat kajian hukum (legal opinion) atas rencana tindakan dan permasalahan yang terjadi terkait dengan kesesuaian hukum atau ketentuan yang berlaku.' => '[4110]Perusahaan menjalankan peraturan perundang-undangan yang berlaku  dan perjanjian dengan pihak ketiga.',
                'Terdapat kebijakan mengenai hak-hak konsumen/pelanggan, kebijakan keamanan, keselamatan dan kesehatan konsumen/pelanggan sesuai dengan peraturan perundang-undangan yang berlaku.' => '[4111]Pelaksanaan hubungan dengan pelanggan.',
                'Aspek Fairness.' => '[4112]Pelaksanaann hubungan dengan pemasok.',
                'Perusahaan memiliki kebijakan  mengenai hak-hak dan kewajiban perusahaan kepada kreditur.' => '[4113]Pelaksanaan hubungan dengan kreditur.',
                'Tidak terdapat keterlambatan penyampaian dokumen kewajiban perpajakan (SPT Tahunan maupun bulanan).' => '[4114]Pelaksanaan kewajiban kepada Negara.',
                'Partisipasi karyawan.' => '[4115]Pelaksanaan hubungan dengan karyawan perusahaan.',
                'Terdapat mekanisme penanganan keluhan stakeholders (pemasok, karyawan dan lain-lain).' => '[4116]Terdapat prosedur tertulis menampung dan  menindaklanjuti keluhan-keluhan stakeholders.',
                'Perusahaan mampu memenuhi harapan Pemegang Saham melalui pencapain target yang telah disepakati.' => '[4117]Upaya untuk meningkatkan  nilai Pemegang Saham secara konsisten dan berkelanjutan.',
                'Perusahaan  memiliki kebijakan  mengenai tanggung jawab sosial dan lingkungan perusahaan.' => '[4118]Perusahaan melaksanakan tanggung jawab sosial perusahaan untuk mendukung keberlanjutan operasi perusahaan.',
                'Terdapat mekanisme untuk mencegah pengambilan keuntungan pribadi Direksi dan pejabat struktural perusahaan yang disebabkan benturan kepentingan.' => '[4119]Direksi  menetapkan kebijakan tentang mekanisme bagi Direksi dan pejabat struktural untuk mencegah pengambilan keuntungan pribadi dan pihak lainnya disebabkan benturan kepentingan.',
                'Penyampaian laporan kepemilikan Saham pada perusahaan dan perusahaan lainnya kepada Perusahaan (Sekretaris Perusahaan) untuk dicatat dalam Daftar Khusus.' => '[4120]Direksi menerapkan kebijakan untuk mencegah benturan kepentingan.',
                'Direksi  menyampaikan laporan manajemen triwulanan dan tahunan serta laporan tahunan kepada Dewan Komisaris/Dewan Pengawas sebelum disampaikan kepada Pemegang Saham.' => '[4121]Direksi melaporkan informasi-informasi yang relevan kepada Pemegang Saham dan Dewan Komisaris/Dewan Pengawas.',
                'Perusahaan memberikan informasi (laporan manajemen triwulanan, tengah tahunan, dan tahunan) dengan muatan dan waktu yang sama kepada Pemegang Saham minoritas.' => '[4122]Direksi memberikan perlakukan yang sama (fairness) dalam memberikan informasi kepada Pemegang Saham dan anggota Dewan Komisaris/Dewan Pengawas.',
                'Pedoman/tata tertib Rapat Direks.' => '[4123]Direksi memiliki pedoman/tata tertib Rapat Direksi, minimal mengatur etika rapat dan penyusunan risalah rapat, evaluasi tindak lanjut hasil rapat sebelumnya, serta pembahasan atas arahan/usulan  dan/atau  keputusan Dewan Komisaris/Dewan Pengawas.',
                'Terdapat rencana Rapat Direksi dan agenda yang dibahas.' => '[4124]Direksi menyelenggarakan Rapat Direksi sesuai kebutuhan, paling sedikit sekali dalam setiap bulan.',
                'Tingkat kehadiran anggota Direksi dalam Rapat Direksi.' => '[4125]Anggota Direksi menghadiri setiap rapat Direksi maupun rapat Direksi & Komisaris, jika tidak dapat hadir yang bersangkutan harus menjelaskan alasan ketidakhadirannya.',
                'Di dalam setiap rapat, Direksi dilakukan evaluasi (pemantauan progress) terhadap pelaksanaan keputusan hasil rapat sebelumnya.' => '[4126]Direksi melakukan evaluasi terhadap pelaksanaan keputusan hasil rapat sebelumnya.',
                'Terdapat tindak lanjut atas arahan dan/atau keputusan Dewan Komisaris/Dewan Pengawas.' => '[4127]Direksi menindaklanjuti arahan, dan/atau keputusan Dewan Komisaris/Dewan Pengawas.',
                'Terdapat Piagam Pengawasan (Internal Audit Charter) yang disepakati dan ditetapkan oleh Direksi, setelah mempertimbangkan saran-saran Dewan Komisaris/Dewan Pengawas.' => '[4128]Perusahaan memiliki Piagam Pengawasan Intern yang ditetapkan oleh Direksi.',
                'Posisi SPI/Fungsi Audit Internal di dalam struktur organisasi berada langsung di bawah Direktur Utama, diangkat oleh Direktur Utama setelah mendapat persetujuan Dewan Komisaris/Dewan Pengawas.' => '[4129]SPI/Fungsi Audit Internal dilengkapi dengan faktor-faktor pendukung keberhasilan dalam pelaksanaan tugasnya.',
                'SPI merencanakan  program kerja tahunan pengawasan intern  dan melaksanakan pengawasan sesuai yang sudah ditetapkan.' => '[4130]SPI melaksanakan pengawasan intern untuk memberikan nilai tambah dan memperbaiki operasional perusahaan.',
                'Sekretaris Perusahaan memiliki kualifikasi yang memadai.' => '[4131]Sekretaris Perusahaan  dilengkapi dengan faktor-faktor pendukung keberhasilan pelaksanaan tugasnya.',
                'Sekretaris perusahaan  memberikan informasi yang materil dan relevan kepada stakeholders.' => '[4132]Sekretaris perusahaan menjalankan fungsinya.',
                'Terdapat  evaluasi atas pelaksanaan tugas Sekretaris perusahaan.' => '[4133]Direksi mengevaluasi kualitas fungsi sekretaris perusahaan.',
                'Prosedur pemanggilan.' => '[4134]Direksi menyelenggarakan RUPS sesuai dengan prosedur yang ditetapkan dalam Anggaran Dasar dan peraturan perundang-undangan.',
                'Panggilan untuk RUPS, yang mencakup informasi mengenai setiap mata acara dalam agenda RUPS, termasuk usul yang direncanakan oleh Direksi untuk diajukan dalam RUPS, dengan ketentuan apabila informasi tersebut belum tersedia saat dilakukannya panggilan untuk RUPS, maka informasi dan/atau usul-usul itu harus disediakan di kantor Persero sebelum RUPS diselenggarakan.' => '[4135]Direksi menyediakan akses serta penjelasan lengkap dan informasi akurat berkenaan dengan penyelenggaraan RUPS agar dapat melaksanakan hak-haknya berdasarkan anggaran dasar dan peraturan perundang-undangan.',
                'Terdapat  kebijakan tentang pengendalian informasi perusahaan. ' => '[5136]Perusahaan menetapkan sistem dan prosedur pengendalian informasi perusahaan dengan tujuan untuk mengamankan informasi perusahaan yang penting.',
                'Tingkat kepatuhan perusahaan yang memadai terhadap kebijakan pengendalian informasi perusahaan' => '[5137]Tingkat kepatuhan perusahaan yang memadai terhadap kebijakan pengendalian informasi perusahaan.',
                'Terdapat  website yang dikelola oleh perusahaan.' => '[5138]Terdapat media untuk penyediaan Informasi Publik agar dapat diperoleh dengan cepat dan tepat waktu, biaya ringan, dan cara sederhana.',
                'Terdapat  kebijakan yang dipublikasikan, antara lain: Pedoman Penerapan Tata Kelola Perusahaan yang baik (GCG Code), Boards Manual, dan Pedoman Perilaku, dan Program Pengendalian Gratifikasi Perusahaan.' => '[5139]Website perusahaan mempublikasikan kebijakan dan informasi penting perusahaan.',
                'Terdapat  majalah internal, bulletin, dan sebagainya.' => '[5140]Perusahaan menyediakan media lain untuk mengkomunikasikan kebijakan informasi penting perusahaan.',
                'Informasi yang disediakan dalam website Perusahaan dan bumn.go.id dimutahirkan secara berkala' => '[5141]Informasi yang disediakan dalam website Perusahaan dan bumn.go.id dimutahirkan secara berkala.',
                'Informasi yang dimuat dalam website perusahaan mudah diakses dan diunduh (download).' => '[5142]Tingkat kemudahan akses terhadap kebijakan dan informasi penting perusahaan yang disediakan dalam website perusahaan.',
                'Ketentuan umum.' => '[5143]Laporan Tahunan memenuhi ketentuan umum penyajian Laporan Tahunan.',
                'Perusahaan menyajikan informasi keuangan (laporan posisi keuangan, laporan laba rugi komprehensif, rasio-rasio keuangan secara umum dan yang relevan dengan industri perusahaan) dalam bentuk perbandingan selama 5 (lima) tahun buku.' => '[5144]Laporan Tahunan memuat mengenai Ikhtisar Data Keuangan Penting.',
                'Laporan Dewan Komisaris memuat hal-hal.' => '[5145]Laporan Tahunan memuat Laporan Dewan Komisaris/Dewan Pengawas dan Laporan Direksi.',
                'Nama dan alamat perusahaan, antara lain mencakup  informasi tentang nama dan alamat, kode pos, no. Telp & atau no. Fax, email, dan website.' => '[5146]Laporan Tahunan memuat profil perusahaan secara lengkap',
                'Tinjauan operasi per segmen usaha, memuat uraian mengenai: (1) produksi; (2) penjualan/ pendapatan usaha; (3) profitabilitas; (4) Peningkatan/ penurunan kapasitas produksi untuk masing-masing segmen usaha (NA untuk perusahaan yang tidak mempunyai segmen).' => '[5147]Laporan Tahunan memuat bagian tersendiri mengenai Analisa dan Pembahasan Manajamen atas Kinerja Perusahaan.',
                'Uraian Dewan Komisaris/Dewan Pengawas memuat antara lain:  (1). Uraian pelaksanaan tugas Dewan Komisaris/Dewan Pengawas; (2) Pengungkapan prosedur penetapan dan besarnya remunerasi anggota dewan komisaris/dewan pengawas; (3) Frekuensi pertemuan; (4)Tingkat kehadiran dewan komisaris/dewan pengawas dalam pertemuan.' => '[5148]Laporan Tahunan memuat pengungkapan praktik Tata Kelola Perusahaan yang Baik.',
                'Surat Pernyataan Direksi tentang Tanggung Jawab Direksi atas Laporan Keuangan sesuai dengan peraturan Bapepam.' => '[5149]Laporan Tahunan memuat bagian tersendiri mengenai Laporan Keuangan.',
                'Keikutsertaan dalam ARA.' => '[5150]Perusahaan mengikuti Annual Report Award (ARA).',
                'Perusahaan berpartisipasi dan memperoleh penghargaan dalam CSR (Sustainability reporting award) dan sejenisnya.' => '[5151]Penghargaan atau award lainnya.',
                'Terdapat bidang/area di perusahaan, antara lain produk, proses, fungsi pendukung, kinerja organisasi, atau strategi menjadi best practices atau tujuan benchmark bagi perusahaan lain.' => '[6152]Perusahaan memiliki bidang/area yang menjadi best practices di Industrinya atau menjadi tujuan benchmark bagi perusahaan lain (baik bagi BUMN maupun perusahaan swasta). Bidang/area tersebut dapat terdiri dari produk, proses, fungsi pendukung, kinerja organisasi, dan strategi.',
                'Perkara penting berindikasi tindak pidana korupsi yang dihadapi anggota Direksi dan Dewan Komisaris/Dewan Pengawas.' => '[6153]Terdapat penyimpangan dari prinsip-prinsip Tata Kelola Perusahaan yang baik.',
            );
            $atribut_faktor_uji1 = 'class="form-control"';
            echo form_dropdown('faktor_uji1', $faktor_uji1, $values->faktor_uji1, $atribut_faktor_uji1);
            ?>
        </div>
        <?php if (form_error('faktor_uji1')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('faktor_uji1', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    <!-- unsur_pemenuhan1 -->
    <div class="form-group form-group-sm has-feedback <?php set_validation_style('unsur_pemenuhan1')?>">  
        <?php echo form_label('Unsur Pemenuhan 1', '', array('class' => 'control-label col-sm-2')) ?>
        <div class="col-sm-10">
            <?php echo form_input('unsur_pemenuhan1', $values->unsur_pemenuhan1, 'id="unsur_pemenuhan1" class="form-control" placeholder="Unsur Pemenuhan 1" maxlength="500"') ?>
            <?php set_validation_icon('unsur_pemenuhan1') ?>
        </div>
        <?php if (form_error('unsur_pemenuhan1')) : ?>
            <div class="col-sm-10 col-sm-offset-3">
                <?php echo form_error('unsur_pemenuhan1', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    <!-- jawaban1 -->
    <div class="form-group form-group-sm">        
        <?php echo form_label('Jawaban 1', 'jawaban1', array('class' => 'control-label col-sm-2')) ?>
        <div class="col-sm-6">
            <p class="form-control-static"><?php echo $values->jawaban1;?></p>
        </div>
        <?php echo form_label('Nilai 1', '', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-1 has-feedback <?php set_validation_style('nilai1')?>">
            <?php echo form_input('nilai1', $values->nilai1, 'id="nilai1" class="form-control" placeholder="Nilai 1" maxlength="5"') ?>
            <?php set_validation_icon('nilai1') ?>
        </div>
        <?php if (form_error('nilai1')) : ?>
            <div class="col-sm-10 col-sm-offset-3">
                <?php echo form_error('nilai1', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div><br><br>


    <!-- faktor_uji2-->
    <div class="form-group form-group-sm has-feedback <?php set_validation_style('faktor_uji2')?>">
        <?php echo form_label('Faktor Uji 2', 'faktor_uji2', array('class' => 'control-label col-sm-2')) ?>
        <div class="col-sm-10">
            <?php
            $faktor_uji2 = array(
                '' => '- Pilih -',
                'Pedoman Tata Kelola Perusahaan yang Baik (GCG Code) ditandatangani oleh Organ BUMN atau dikukuhkan RUPS.' => '[1001]Perusahaan memiliki Pedoman Telola Perusahaan yang Baik (GCG Code) yang ditinjau dan dimutakhirkan secara berkala.',
                'Pedoman Perilaku (Code of Conduct) ditandatangani oleh Direksi dan Dewan Komisaris/Dewan Pengawas.' => '[1002]Perusahaan memiliki Pedoman Perilaku yang ditinjau dan dimutakhirkan secara berkala.',
                'Tugas anggota Direksi yang ditunjuk oleh Rapat Direksi sebagai penanggung jawab dalam penerapan dan pemantauan Tata Kelola Perusahaan yang Baik.' => '[1003]Direksi menunjuk seorang anggota Direksi sebagai penanggung jawab dalam penerapan dan pemantauan Tata Kelola Perusahaan yang Baik.',
                'Terdapat kebijakan dan panduan tambahan yang dapat memberikan panduan  lebih jauh tentang berbagai perkara dalam Pedoman Perilaku, dikomunikasikan dan disosialisasikan kepada organ pendukung Dewan Komisaris/Dewan Pengawas dan karyawan perusahaan.' => '[1004]Perusahaan menciptakan situasi kondusif  untuk melaksanakan Pedoman Tata Kelola Perusahaan yang Baik (GCG Code) dan Pedoman Perilaku.',
                'Hasil assessment/penilaian dan evaluasi dilaporkan dalam Laporan Tahunan.' => '[1005]Perusahaan melakukan assessment terhadap pelaksanaan Tata Kelola Perusahaan yang Baik dan reviun secara berkala.',
                'Tingkat pencapaian yang memadai atas KPI mengenai pelaksanaan Tata Kelola Perusahaan yang Baik tersebut.' => '[1006]Pelaksanaan Tata Kelola Perusahaan yang Baik menjadi salah satu unsur Key Performance Indicator (KPI) yang dituangkan dalam Kontrak Manajemen.',
                'Terdapat keputusan Direksi tentang Jabatan dalam organisasi BUMN yang ditetapkan sebagai Penyelenggaran Negara yang wajib menyampaikan LHKPN kepada KPK.' => '[1007]Perusahaan memiliki kebijakan tentang kepatuhan pelaporan harta kekayaan penyelenggara negara bagi Dewan Komisaris/Dewan Pengawas, Direksi dan pejabat satu tingkat di bawah Direksi.',
                'Penyelenggara Negara mampu menyusun LHKPN secara tepat waktu sesuai peraturan perundang-undangan yang berlaku.' => '[1008]Penyelenggara Negara/Wajib Lapor memahami kebijakan/SOP tentang kepatuhan pelaporan  harta kekayaan penyelenggara negara.',
                'Terdapat pelaporan berkala tentang perkembangan pemenuhan kewajiban menyampaikan LHKPN kepada KPK.' => '[1009]Perusahaan melaksanakan kebijakan/SOP tentang kepatuhan pelaporan  harta kekayaan Penyelenggara Negara.',
                'Kebijakan/ketentuan tentang Pengendalian Gratifikasi yang meliputi komitmen Dewan Komisaris/Dewan Pengawas dan Direksi, ketentuan-ketentuan tentang gratifikasi, fungsi yang ditugaskan mengelola gratifikasi, mekanisme pelaporan gratifikasi, pemantauan atas pelaksanaan dan sanksi atas penyimpangan ketentuan gratifikasi.' => '[1010]Perusahaan memiliki ketentuan/kebijakan  tentang Pengendalian Gratifikasi.',
                'Terdapat kegiatan pendistribusian ketentuan dan perangkat Pengendalian Gratifikasi di lingkungan perusahaan.' => '[1011]Perusahaan melaksanakan upaya untuk meningkatkan pemahaman terhadap kebijakan/ketentuan Pengendalian Gratifikasi.',
                'Terdapat pelaporan tentang pengendalian gratifikasi di lingkungan perusahaan.' => '[1012]Perusahaan mengimplementasikan Pengendalian Gratifikasi.',
                'Materi Pedoman penerapan sistem pelaporan pelanggaran (whistle blowing).' => '[1013]Perusahaan memiliki kebijakan tentang pelaporan atas dugaan penyimpangan pada perusahaan (whistle blowing system).',
                'Terdapat kegiatan sosialisasi kebijakan whistle blowing system kepada stakeholders perusahaan.' => '[1014]Perusahaan melaksanakan kegiatan untuk memberikan pemahaman atas kebijakan pelaporan atas dugaan penyimpangan (whistle blowing system).',
                'Terdapat penanganan/tindak lanjut sesuai dengan kebijakan atas pengaduan yang diterima perusahaan.' => '[1015]Perusahaan melaksanakan kebijakan tentang pelaporan atas dugaan penyimpangan pada perusahaan (whistle blowing system).',
                'Materi Pedoman pengangkatan dan pemberhentian.' => '[2016]Pemegang Saham/RUPS/Pemilik Modal menetapkan pedoman pengangkatan dan pemberhentian Direksi.',
                'Seluruh Bakal Calon yang disetujui oleh Menteri Negara BUMN diundang secara tertulis oleh Tim dan mengikuti uji kelayakan dan kepatutan sesuai ketentuan yang berlaku.' => '[2017]Pemegang Saham/RUPS/Pemilik Modal melaksanakan penilaian terhadap calon anggota Direksi.',
                'Pembidangan tugas Direksi ditetapkan dalam Surat Keputusan tentang Penunjukan Direksi dan/atau Berita Acara RUPS/Pelantikan Direksi.' => '[2018]Pemegang Saham/RUPS/Pemilik Modal menetapkan pengangkatan anggota dan komposisi Direksi.',
                'Ketentuan perangkapan jabatan yang menimbulkan benturan kepentingan tersebut termasuk jenis-jenis perangkapan jabatan dan pengaturan/mekanisme pengunduran diri dari jabatan rangkap tersebut atau jabatan anggota Direksi, yang paling lambat 30 hari sejak terjadi perangkapan jabatan tersebut.' => '[2019]Pemegang Saham/RUPS/Pemilik Modal menetapkan pengaturan mengenai rangkap jabatan bagi anggota Direksi.',
                'Tahapan pemberhentian anggota Direksi dapat diberhentikan sewaktu-waktu.' => '[2020]Pemegang Saham/RUPS/Pemilik Modal memberhentikan anggota Direksi sesuai dengan peraturan perundang-undangan.',
                'Dalam jangka waktu paling lambat 30 (tiga puluh) hari setelah tanggal pemberhentian sementara harus diselenggarakan RUPS.' => '[2021]Pemegang Saham/RUPS/Pemilik Modal memberikan respon terhadap lowongan jabatan dan/atau pemberhentian sementara Direksi  oleh Dewan Komisaris/Dewan Pengawas.',
                'Pedoman pengangkatan dan pemberhentian, diantaranya mengatur mengenai: (a) penjaringan atau nominasi calon anggota Dewan Komisaris/Dewan Pengawas; (b) penilaian bagi calon anggota Dewan Komisaris/Dewan Pengawas.' => '[2022]Pemegang Saham/RUPS/Pemilik Modal menetapkan pedoman pengangkatan dan pemberhentian Dewan Komisaris/Dewan Pengawas.',
                'Pemegang Saham/RUPS/Pemilik Modal  melaksanakan penilaian terhadap Calon Dewan Komisaris/Dewan Pengawas.' => '[2023]Pemegang Saham/RUPS/Pemilik Modal melaksanakan penilaian terhadap calon anggota Dewan Komisaris/Dewan Pengawas.',
                'Komposisi Dewan Komisaris/Dewan Pengawas.' => '[2024]Pemegang Saham/RUPS/Pemilik Modal menetapkan pengangkatan anggota Dewan Komisaris/Dewan Pengawas dan komposisinya.',
                'Terdapat keputusan RUPS/Pemilik Modal menetapkan jabatan-jabatan yang menimbulkan benturan kepentingan, sesuai dengan peraturan perundang-undangan yang berlaku.' => '[2025]Pemegang Saham/RUPS/Pemilik Modal menetapkan pengaturan mengenai rangkap jabatan bagi anggota Dewan Komisaris/Dewan Pengawas.',
                'Anggota Dewan Komisaris/Dewan Pengawas dapat diberhentikan sewaktu-waktu berdasarkan keputusan RUPS dan/atau keputusan Menteri dengan menyebutkan alasannya, dengan melalui tahapan: (1) Rencana pemberhentian anggota Dewan Komisaris/Dewan Pengawas diberitahukan kepada yang bersangkutan secara lisan atau tertulis oleh Menteri atau pejabat yang ditunjuknya; (2) Keputusan pemberhentian karena alasan-alasan: (a) tidak dapat melaksanakan tugasnya dengan baik; (b) tidak melaksanakan ketentuan peraturan perundang-undangan dan/atau ketentuan anggaran dasar; (c) terlibat dalam tindakan yang merugikan BUMN dan/atau negara, , diambil setelah yang bersangkutan diberi kesempatan membela diri.' => '[2026]Pemegang Saham/RUPS/Pemilik Modal memberhentikan anggota Dewan Komisaris/Dewan Pengawas sesuai dengan peraturan perundang-undangan.',
                'Pemegang Saham/RUPS/Pemilik Modal melakukan pembahasan/pengkajian terhadap rancangan RJPP atau Revisi RJPP.' => '[2027]Pemegang Saham/RUPS/Pemilik Modal memberikan pengesahan Rencana Jangka Penjang Perusahaan (RJPP) atau Revisi RJPP.',
                'Pemegang Saham/RUPS/Pemilik Modal melakukan pembahasan/ pengkajian/penelaahan terhadap rancangan RKAP.' => '[2028]Pemegang Saham/RUPS/Pemilik Modal memberikan pengesahan Pengesahan Rencana Kerja dan Anggaran Perusahaan (RKAP).',
                'Pemegang Saham/RUPS/Pemilik Modal memberikan persetujuan/ keputusan terhadap usulan Direksi.' => '[2029]Pemegang Saham/RUPS/Pemilik Modal memberikan persetujuan/keputusan atas usulan aksi korporasi yang perlu mendapat persetujuan/keputusan RUPS/Pemilik Modal.',
                'Penilaian kinerja Dewan Komisaris/Dewan Pengawas.' => '[2030]RUPS/Pemilik Modal memberikan penilaian terhadap kinerja Direksi dan kinerja Dewan Komisaris/Dewan Pengawas.',
                'Penetapan tantiem/insentif kinerja.' => '[2031]RUPS menetapkan gaji/honorarium, tunjangan, fasilitas dan tantiem/insentif kinerja untuk Direksi dan Dewan Komisaris/Dewan Pengawas.',
                'RUPS/Pemilik Modal melakukan pembahasan/ pengkajian/penelaahan terhadap calon-calon Auditor Eksternal yang diajukan oleh Dewan Komisaris/Dewan Pengawas.' => '[2032]Pemegang Saham/RUPS/Pemilik Modal menetapkan auditor eksternal yang mengaudit Laporan Keuangan perusahaan.',
                'Terdapat telaahan terhadap laporan tahunan (termasuk laporan keuangan) dan laporan tugas pengawasan Dewan Komisaris/Dewan Pengawas yang dilakukan oleh Pemegang Saham/RUPS/Pemilik Modal.' => '[2033]Pemegang Saham/RUPS/Pemilik Modal memberikan persetujuan laporan tahunan termasuk pengesahan laporan keuangan  serta tugas pengawasan Dewan Komisaris/Dewan Pengawas.',
                'Penetapan penggunaan laba bersih untuk deviden mempertimbangkan pengembangan usaha/investasi perusahaan.' => '[2034]Pemegang Saham/RUPS/Pemilik Modal menetapkan penggunaan laba bersih.',
                'Peserta rapat memenuhi kuorum sesuai dengan ketentuan perundang-undangan di bidang Perseroan Terbatas dan/atau Anggaran Dasar Perusahaan.' => '[2036]RUPS mengambil keputusan sesuai ketentuan perundang-undangan di bidang Perseroan Terbatas dan/atau Anggaran Dasar Perusahaan sehingga menghasilkan keputusan yang sah.',
                'Dalam hal anggaran dasar dan atau peraturan perundang-undangan mengharuskan adanya keputusan RUPS tentang hal-hal yang berkaitan dengan usaha perusahaan, keputusan yang diambil harus memperhatikan kepentingan wajar para pemangku kepentingan.' => '[2037]RUPS mengambil keputusan melalui proses yang terbuka dan adil.',
                'Terdapat pembahasan dan evaluasi atas pelaksanaan Tata Kelola Perusahaan yang Baik pada perusahaan.' => '[2038]Pemegang Saham/Pemilik Modal memberikan arahan/pembinaan penerapan Tata Kelola Perusahaan yang Baik kepada Direksi dan Dewan Komisaris/Dewan Pengawas.',
                'Pemegang Saham/Pemilik Modal memberikan respon/tanggapan atas informasi mengenai penurunan kinerja dan/atau kerugian perusahaan yang signifikan yang disampaikan oleh Dewan Komisaris/Dewan Pengawas dan/atau Direksi.' => '[2040]Pemegang Saham/Pemilik Modal merespon terhadap informasi yang diterima dari Direksi dan/atau Dewan Komisaris/Dewan Pengawas mengenai gejala penurunan kinerja dan kerugian perusahaan yang signifikan.',
                'Anggota Dewan Komisaris/Dewan Pengawas yang baru diangkat mengikuti program pengenalan perusahaan.' => '[3041]Dewan komisaris/Dewan Pengawas yang baru diangkat mengikuti program pengenalan yang diselenggarakan oleh perusahaan.',
                'Terdapat rencana kerja dan anggaran untuk kegiatan pelatihan bagi anggota Dewan Komisaris/Dewan Pengawas.' => '[3042]Dewan Komisaris/Dewan Pengawas melaksanakan program pelatihan dalam rangka meningkatkan kompetensi anggota Dewan Komisaris/Dewan Pengawas sesuai kebutuhan.',
                'Terdapat penetapan Dewan Komisaris/Dewan Pengawas  tentang pembagian tugas diantara anggota Dewan Komisaris/Dewan Pengawas.' => '[3043]Dewan Komisaris/Dewan Pengawas memiliki kebijakan dan melaksanakan pembagian tugas  diantara anggota Dewan Komisaris/Dewan Pengawas.',
                'Terdapat standar waktu tingkat kesegeraan pengambilan keputusan persetujuan terhadap usulan Direksi.' => '[3044]Dewan Komisaris/Dewan Pengawas  menetapkan mekanisme pengambilan keputusan Dewan Komisaris/Dewan Pengawas.',
                'Terdapat penyusunan rencana kerja dan anggaran tahunan oleh Dewan Komisaris/Dewan Pengawas.' => '[3045]Dewan Komisaris/Dewan Pengawas menyusun rencana kerja setiap tahun yang memuat sasaran/ target yang ingin dicapai dan melaporkan secara tertulis kepada RUPS/Pemilik Modal.',
                'Substansi kebijakan/pedoman diantaranya memuat: bentuk informasi yang disampaikan baik yang berkala maupun insidentil, standar waktu penyampaiannya dan mekanisme penyampaian informasi tersebut oleh Direksi.' => '[3046]Dewan Komisaris/Dewan Pengawas  mendapatkan akses informasi perusahaan sesuai kewenangannya.',
                'Terdapat rencana kerja Dewan Komisaris/dewan Pengawas yang berkaitan dengan proses persetujuan RJPP yang disampaikan Direksi.' => '[3047]Dewan Komisaris/Dewan Pengawas memberikan persetujuan atas rancangan RJPP yang disampaikan oleh Direksi.',
                'Terdapat rencana kerja Dewan Komisaris/Pengawas yang berkaitan dengan proses persetujuan rancangan RKAP yang disampaikan Direksi.' => '[3048]Dewan Komisaris/Dewan Pengawas memberikan persetujuan atas rancangan RKAP yang disampaikan oleh Direksi.',
                'Terdapat penyediaan bahan bacaan/referensi yang memudahkan Dewan Komisaris/Dewan Pengawas memperbaharui pengetahuan tentang perubahan lingkungan bisnis dan permasalahan yang dihadapi perusahaan dan/atau permintaan arahan dari Direksi tentang permasalahan yang dihadapi perusahaan.' => '[3049]Dewan Komisaris/Dewan Pengawas  memberikan arahan tentang hal-hal  penting mengenai perubahan lingkungan bisnis yang diperkirakan akan berdampak besar pada usaha dan kinerja perusahaan secara tepat waktu dan relevan.',
                'Saran, harapan, permasalahan dan keluhan dari Stakeholders dibahas secara intensif oleh Dewan Komisaris/Dewan Pengawas dan pembahasan menghasilkan simpulan berupa saran penyelesaian kepada Direksi.' => '[3050]Dewan Komisaris/Dewan Pengawas dalam batas kewenangannya, merespon saran, harapan, permasalahan dan keluhan dari Stakeholders (pelanggan, pemasok, kreditur, dan karyawan) yang disampaikan langsung kepada Dewan Komisaris/Dewan Pengawas ataupun penyampaian oleh Direksi.',
                'Terdapat rencana Dewan Komisaris/Dewan Pengawas mengenai pengawasan dan pemberian nasihat terhadap kebijakan/rancangan sistem pengendalian intern dan pelaksanaannya.' => '[3051]Dewan Komisaris/Dewan Pengawas  memberikan arahan tentang penguatan sistem pengendalian intern perusahaan.',
                'Terdapat rencana Dewan Komisaris/Dewan Pengawas mengenai pengawasan dan pemberian nasihat terhadap kebijakan dan pelaksanaan manajemen risiko perusahaan.' => '[3052]Dewan Komisaris/Dewan Pengawas  memberikan arahan tentang manajemen risiko perusahaan.',
                'Terdapat  rencana Dewan Komisaris/Dewan Pengawas mengenai pengawasan dan pemberian nasihat terhadap kebijakan sistem teknologi informasi perusahaan dan pelaksanaannya.' => '[3053]Dewan Komisaris/Dewan Pengawas  memberikan arahan tentang sistem teknologi informasi yang digunakan perusahaan.',
                'Terdapat  rencana Dewan Komisaris/Dewan Pengawas mengenai pengawasan dan pemberian nasihat mengenai kebijakan sumber daya manusia dan pelaksanaan kebijakan tersebut.' => '[3054]Dewan Komisaris/Dewan Pengawas  memberikan arahan tentang kebijakan dan pelaksanaan pengembangan karir.',
                'Terdapat  rencana Dewan Komisaris/Dewan Pengawas melakukan pengawasan terhadap kebijakan akuntansi dan penyusunan laporan keuangan serta penerapan kebijakan tersebut.' => '[3055]Dewan Komisaris/Dewan Pengawas  memberikan arahan tentang kebijakan akuntansi dan penyusunan laporan keuangan sesuai dengan standar akuntansi yang berlaku umum di Indonesia (SAK).',
                'Terdapat  rencana Dewan Komisaris/Dewan Pengawas mengenai pengawasan dan pemberian nasihat terhadap kebijakan pengadaan dan pelaksanaannya.' => '[3056]Dewan Komisaris/Dewan Pengawas  memberikan arahan tentang kebijakan pengadaan dan pelaksanaannya.',
                'Terdapat  rencana Dewan Komisaris/Dewan Pengawas mengenai tugas pengawasan dan pemberian nasihat terhadap kebijakan mutu dan pelayanan beserta pelaksanaannya.' => '[3057]Dewan Komisaris/Dewan Pengawas  memberikan arahan tentang kebijakan mutu dan pelayanan serta pelaksanaan kebijakan tersebut.',
                'Terdapat recana kerja Dewan Komisaris /pengawas yang membahas kepatuhan direksi terhadap peraturan per-UU-an  dan perjanjian dengan pihak ketiga.' => '[3058]Dewan Komisaris/Dewan Pengawas mengawasi dan memantau kepatuhan Direksi dalam menjalankan peraturan perundangan yang berlaku dan perjanjian dengan pihak ketiga.',
                'Terdapat  rencana Dewan Komisaris/Dewan Pengawas melakukan evaluasi terhadap pelaksanaan RKAP.' => '[3059]Dewan Komisaris/Dewan Pengawas  mengawasi dan memantau  kepatuhan Direksi dalam menjalankan perusahaan sesuai RKAP dan/atau RJPP.',
                'Terdapat rencana kerja Dewan Komisaris/Dewan Pengawas untuk membahas transaksi atau tindakan dalam lingkungan kewenangan Dewan Komisaris/Dewan Pengawas atau RUPS/Pemilik Modal.' => '[3060]Dewan Komisaris/Dewan Pengawas  memberikan persetujuan atas transaksi atau tindakan dalam lingkup kewenangan Dewan Komisaris/Dewan Pengawas atau RUPS/Pemilik Modal.',
                'Terdapat rencana kerja penunjukan calon auditor dan anggaran biaya audit eksternal dalam RKAT Dewan Komisaris/Dewan Pengawas.' => '[3061]Dewan Komisaris/Dewan Pengawas  (berdasarkan usul dari Komite Audit) mengajukan calon Auditor Eksternal kepada RUPS/Pemilik Modal.',
                'Terdapat rencana kerja Dewan Komisaris/Dewan Pengawas tentang pengawasan efektivitas pelaksanaan audit eksternal dan audit internal, serta pelaksanaan telaah atas pengaduan yang berkaitan dengan BUMN yang diterima oleh Dewan Komisaris/Dewan Pengawas.' => '[3062]Dewan Komisaris/Dewan Pengawas  memastikan audit eksternal dan audit internal dilaksanakan secara efektif serta melaksanakan telaah atas pengaduan yang berkaitan dengan BUMN yang diterima oleh Dewan Komisaris/Dewan Pengawas.',
                'Dewan Komisaris/Dewan Pengawas melakukan pembahasan tentang gejala menurunnya kinerja perusahaan secara tepat waktu.' => '[3063]Dewan Komisaris/Dewan Pengawas  melaporkan dengan segera kepada RUPS/Pemilik Modal apabila terjadi gejala menurunnya kinerja perusahaan serta saran-saran yang telah disampaikan kepada Direksi untuk memperbaiki permasalahan yang dihadapi.',
                'Terdapat rencana pembahasan mengenai kebijakan dan pelaksanaan pengelolaan anak perusahaan/perusahaan patungan.' => '[3064]Dewan Komisaris/Dewan Pengawas melaksanakan pengawasan terhadap kebijakan pengelolaan anak perusahaan/perusahaan patungan  dan pelaksanaannya.',
                'Dewan Komisaris/Dewan Pengawas perusahaan melakukan penilaian terhadap proses pengangkatan Direksi dan Dewan Komisaris anak perusahaan/perusahaan patungan, serta memberikan penetapan tertulis (setuju atau tidak setuju) terhadap proses pengangkatan Direksi dan Dewan Komisaris anak perusahaan/perusahaan patungan.' => '[3065]Peran Dewan Komisaris/Dewan Pengawas dalam pemilihan calon anggota Direksi dan Dewan Komisaris Anak Perusahaan perusahaan/perusahaan patungan.',
                'Terdapat  rencana Dewan Komisaris/Dewan Pengawas mengenai pemantauan kinerja Direksi dan pelaporan kepada Pemegang Saham/Pemilik Modal.' => '[3067]Dewan Komisaris/Dewan Pengawas  menilai Direksi dan melaporkan hasil penilaian tersebut kepada Pemegang Saham/Pemilik Modal.',
                'Terdapat  rencana Dewan Komisaris/Dewan Pengawas menelaah pengusulan remunerasi Direksi.' => '[3068]Dewan Komisaris/Dewan Pengawas  mengusulkan remunerasi Direksi sesuai ketentuan yang berlaku dan penilaian kinerja Direksi.',
                'Dewan Komisaris/Dewan Pengawas  menandatangani pernyataan tidak memiliki benturan kepentingan dan menyatakan secara tertulis hal-hal yang berpotensi menimbulkan benturan kepentingan terhadap dirinya dan menyampaikannya kepada RUPS/Pemilik Modal.' => '[3069]Dewan komisaris/Pengawas memiliki kebijakan benturan kepentingan dan melaksanakan secara konsisten kebijakann tersebut.',
                'Terdapat rencana  kerja Dewan Komisaris/Dewan Pengawas untuk memantau penerapan prinsip-prinsip Tata Kelola Perusahaan yang Baik.' => '[3070]Dewan Komisaris/Dewan Pengawas  memastikan prinsip-prinsip Tata Kelola Perusahaan yang Baik telah diterapkan secara efektif dan berkelanjutan.',
                'Dewan Komisaris/Dewan Pengawas memiliki/ menetapkan Indikator Pencapaian Kinerja beserta target-targetnnya, dan disetujui oleh RUPS/Menteri setiap tahun berdasarkan usulan dari Dewan Komisaris/Dewan Pengawas yang bersangkutan.' => '[3071]Dewan Komisaris/Dewan Pengawas  melakukan pengukuran dan penilaian terhadap kinerja Dewan Komisaris/Dewan Pengawas.',
                'Jumlah rapat dan agenda yang dibahas  sesuai dengan yang direncanakan.' => '[3073]Rapat Dewan Komisaris/Dewan Pengawas diadakan secara berkala sesuai ketentuan yang berlaku dan/atau anggaran dasar.',
                'Hasil rapat Dewan Komisaris/Dewan Pengawas  sebelumnya telah ditindak lanjuti seluruhnya.' => '[3074]Dewan Komisaris/Dewan Pengawas melakukan evaluasi terhadap pelaksanaan keputusan hasil rapat sebelumnya.',
                'Tugas pokok dan fungsi adalah membantu Dewan Komisaris/Dewan Pengawas  dalam bidang kegiatan kesekretariatan.' => '[3075]Sekretariat Dewan Komisaris/Dewan Pengawas memiliki uraian tugas yang jelas.',
                'Sekretaris Dewan Komisaris/Dewan Pengawas mengadministrasikan surat keluar dan surat masuk ke Dewan Komisaris/Dewan Pengawas, dan dokumen lainnya dengan tertib.' => '[3076]Sekretariat Dewan Komisaris/Dewan Pengawas  melakukan administrasi dan penyimpanan dokumen.',
                'Bahan-bahan rapat disediakan dan disampaikan kepada peserta rapat paling lambat 3 (tiga) hari sebelum diadakan rapat.' => '[3077]Sekretaris Dewan Komisaris/Dewan Pengawas  menyelenggarakan rapat Dewan Komisaris/Dewan Pengawas dan rapat/pertemuan antara Dewan Komisaris/Dewan Pengawas  dengan Pemegang Saham/Pemilik Modal, Direksi maupun pihak-pihak terkait lainnya.',
                'Terdapat bahan/materi yang bersifat administrasi mengenai laporan/kegiatan Direksi dalam mengelola perusahaan.' => '[3078]Sekretaris Dewan Komisaris/Dewan Pengawas menyediakan data/informasi yang diperlukan oleh Dewan Komisaris/Dewan Pengawas dan komite-komite di lingkungan Dewan Komisaris/Dewan Pengawas.',
                'Terdapat komite lain untuk membantu tugas Dewan Komisaris/Dewan Pengawas berdasarkan analisis mengenai kebutuhan untuk mendukung Dewan Komisaris/Dewan Pengawas melaksanakan tugasnya.' => '[3079]Dewan Komisaris/Dewan Pengawas memiliki Komite Dewan Komisaris/Dewan Pengawas sesuai dengan ketentuan perundang-undangan yang berlaku dan kebutuhan Dewan Komisaris/Dewan Pengawas.',
                'Anggota Komite harus berasal dari pihak di luar perusahaan dan tidak mempunyai kaitan dengan manajemen, kaitan kepemilikan dan dengan kegiatan usaha perusahaan.' => '[3080]Komposisi keanggotaan yang mendukung pelaksanaan fungsi Komite dan independensi dari masing-masing Komite Dewan Komisaris/Dewan Pengawas.',
                'Muatan Piagam Komite Audit sesuai dengan ketentuan yang berlaku; Muatan piagam Komite lainnya sesuai kebutuhan Dewan Komisaris/Dewan Pengawas.' => '[3081]Komite Dewan Komisaris/Dewan Pengawas memiliki piagam/charter dan program kerja  tahunan.',
                'Risalah Rapat Komite Dewan Komisaris/Dewan Pengawas harus dibuat untuk setiap rapat, memuat hasil-hasil analisis, telaahan, dan evaluasi atas acara yang diagendakan, serta risalah asli dari setiap Rapat Komite Dewan Komisaris/Dewan Pengawas diserahkan kepada Sekretaris Dewan Komisaris untuk disimpan di perusahaan.' => '[3082]Komite Dewan Komisaris/Dewan Pengawas melaksanakan pertemuan rutin sesuai dengan program kerja tahunan serta melakukan kegiatan lain yang ditugaskan Dewan Komisaris/Dewan Pengawas.',
                'Terdapat laporan triwulanan dan tahunan Komite kepada Dewan Komisaris/Dewan Pengawas, minimal memuat perbandingan realisasi kegiatan dengan program kerja tahunan serta substansi hasil kegiatan dan rekomendasinya.' => '[3083]Komite Dewan Komisaris/Dewan Pengawas melaporkan kegiatan dan hasil penugasan yang diterimanya kepada Dewan Komisaris/Dewan Pengawas.',
                'Anggota Direksi yang baru diangkat mengikuti program pengenalan perusahaan yang diselenggarakan oleh perusahaan.' => '[4084]Direksi yang baru diangkat mengikuti program pengenalan yang diselenggarakan oleh perusahaan.',
                'Terdapat rencana kerja dan anggaran untuk kegiatan pelatihan bagi anggota Direksi.' => '[4085]Direksi melaksanakan program pelatihan dalam rangka meningkatkan kompetensi anggota Direksi sesuai kebutuhan.',
                'Terdapat penetapan oleh Direksi tentang uraian tugas dan tanggungjawab masing-masing anggota Direksi.' => '[4086]Direksi menetapkan struktur/susunan organisasi yang sesuai dengan kebutuhan perusahaan.',
                'Terdapat SOP untuk seluruh proses bisnis inti perusahaan sebagai panduan melaksanakan kegiatan perusahaan' => '[4087]Direksi menetapkan kebijakan-kebijakan operasioanl dan standard operasional baku (SOP) untuk proses bisnis inti (core business) perusahaan.',
                'Terdapat standar waktu tingkat kesegeraan pengambilan keputusan Direksi.' => '[4088]Direksi menetapkan mekanisme pengambilan keputusan atas tindakan perusahaan (corporate action) sesuai ketentuan perundang-undangan dan tepat waktu.',
                'Terdapat rancangan RJPP yang sesuai dengan pedoman penyusunan RJPP yang ditetapkan.' => '[4089]Direksi memiliki Rencana Jangka Panjang (RJPP) yang disahkan oleh RUPS/Pemilik Modal.',
                'Terdapat rancangan RJPP yang sesuai dengan pedoman penyusunan RJPP yang ditetapkan dan rancangan RKAP tersebut merupakan penjabaran tahunan RJPP.' => '[4090]Direksi memiliki Rencana Kerja dan Anggaran Perusahaan (RKAP) yang disahkan oleh RUPS/Menteri/Pemilik Modal.',
                'Perusahaan menempatkan karyawan pada setiap level dalam organisasi perusahaan sesuai dengan spesifikasi jabatan dan dilakukan secara objektif dan transparan.' => '[4091]Direksi menempatkan karyawan pada semua tingkatan jabatan sesuai dengan spesifikasi jabatan dan memiliki rencana suksesi untuk seluruh jabatan dalam perusahaan.',
                'Atas usulan peluang bisnis tersebut, Direksi membahas secara intensif untuk: (1) mengidentifikasi peluang bisnis; (2) mengambil keputusan atas usulan tersebut; (setuju atau tidak setuju).' => '[4092]Direksi  memberikan respon terhadap usulan peluang bisnis yang berpotensi meningkatkan pendapatan perusahaan, penghematan/efisiensi perusahaan, pendayagunaan aset, dan manfaat lainnya.',
                'Terdapat pembahasan internal Direksi mengenai isu-isu terkini mengenai perubahan lingkungan bisnis dan permasalahan yang berdampak besar pada usaha perusahaan dan kinerja perusahaan.' => '[4093]Direksi  merespon isu-isu terkini dari eksternal mengenai perubahan lingkungan bisnis dan permasalahannya,  secara tepat waktu dan relevan.',
                'Program/kegiatan yang membutuhkan investasi dan hutang dalam jumlah signifikan telah diputuskan  melalui analisis yang memadai berdasarkan informasi yang cukup, studi/kajian  kelayakan serta analisis risiko terhadap program/kegiatan tersebut dan tindakan pengendalian untuk mencegah terjadinya risiko tersebut.' => '[4094]Direksi melaksanakan program/kegiatan sesuai dengan RKAP dan mengambil keputusan yang diperlukan melalui analisis yang memadai dan tepat waktu.',
                'Indikator kinerja untuk setiap jabatan dalam struktur organisasi sesuai dengan ruang lingkup tugas dan peran unit dan jabatan (struktural) dalam organisasi.' => '[4095]Direksi memiliki sistem/pedoman pengukuran dan penilaian kinerja untuk unit dan jabatan dalam organisasi (struktural) yang diterapkan secara obyektif dan transparan.',
                'Terdapat kontrak kinerja untuk setiap jabatan dalam struktur organisasi.' => '[4096]Direksi menetapkan target kinerja berdasarkan RKAP dan diturunkan secara berjenjang di tingkat unit, sub unit dan jabatan di dalam organisasi (struktural) di organisasi.',
                'Direksi melakukan analisis dan evaluasi terhadap perkembangan kinerja jabatan/unit-unit di bawah Direksi.' => '[4097]Direksi melakukan analisis dan evaluasi terhadap capaian kinerja untuk jabatan/unit-unit  di bawah Direksi dan tingkat perusahaan.',
                'Tingkat pencapaian target kinerja Direksi (kontrak manajemen -kolektif).' => '[4098]Direksi melaporkan pelaksanaan sistem manajemen kinerja kepada Dewan Komisaris/Dewan Pengawas.',
                'Penentuan usulan insentif kinerja Direksi mencerminkan kesesuaian dengan kinerja yang dicapai (KPI).' => '[4099]Direksi menyusun dan menyampaikan kepada RUPS/Pemilik Modal tentang usulan insentif kinerja untuk Direksi.',
                'Penerapan TI di perusahaan sesuai dengan masterplan dan disertai dengan perencanaan TI yang matang mencakup sumber daya manusia, struktur organisasi pengelolaan dan tingkat layanan yang diberikan TI.' => '[4100]Direksi  menerapkan  sistem tentang teknologi informasi sesuai dengan kebijakan yang telah ditetapkan.',
                'Peningkatan mutu (sistem pengendalian mutu produk).' => '[4101]Direksi melaksanakan sistem peningkatan mutu produk dan pelayanan.',
                'Pedoman/kebijakan pengadaaan dipublikasikan/ dapat diakses pemasok/calon pemasok.' => '[4102]Direksi melaksanakan pengadaan barang dan jasa yang menguntungkan bagi perusahaan, baik harga maupun kualitas barang dan jasa tersebut.',
                'Program pengembangan SDM.' => '[4103]Direksi mengembangkan SDM, menilai kinerja dan memberikan remunerasi yang layak, dan membangun lingkungan SDM yang efektif  mendukung pencapaian perusahaan.',
                'Pengangkatan Direksi dan Dewan Komisaris anak perusahaan/perusahaan patungan, melalui proses penjaringan, proses penilaian, dan proses penetapan.' => '[4104]Direksi menerapkan kebijakan pengaturan untuk anak perusahaan (subsidiary governance) dan/atau perusahaan patungan.',
                'Kebijakan akuntansi dan penyusunan laporan keuangan diterapkan secara konsisten, tidak ada penyesuaian dan temuan auditor atas pengakuan, pengukuran dan pencatatan serta pembukuan transaksi dan pengungkapan kebijakan akuntansi.' => '[4105]Direksi menerapkan kebijakan akuntansi dan penyusunan laporan keuangan sesuai dengan standar akuntansi keuangan yang berlaku umum di Indonesia (SAK).',
                'Direksi memiliki fungsi yang bertugas melaksanakan program manajemen risiko.' => '[4106]Direksi  menerapkan manajemen risiko sesuai dengan kebijakan yang telah ditetapkan.',
                'Direksi (Direktur Utama dan Direktur Keuangan) memberi sertifikasi terhadap laporan keuangan tahunan.' => '[4107]Direksi menetapkan dan menerapkan sistem pengendalian intern untuk melindungi mengamankan investasi dan aset perusahaan.',
                'Pelaksanaan tindak lanjut dilaporkan Direksi kepada Dewan Komisaris secara berkala paling sedikit 3 (tiga) bulanan.' => '[4108]Direksi menindaklanjuti hasil pemeriksaan SPI dan auditor eksternal (KAP dan BPK).',
                'Fungsi kepatuhan mengikuti perkembangan peraturan perundangan yang berlaku dan akan berlaku bagi perusahaan.' => '[4109]Direksi menetapkan mekanisme untuk menjaga kepatuhan terhadap peraturan perundang-undangan dan perjanjian dengan pihak ketiga.',
                'Terdapat kegiatan evaluasi kajian risiko dan legal (risk and legal review) atas rencana inisiatif bisnis, kebijakan dan rencana kerjasama yang akan dilakukan oleh perusahaan.' => '[4110]Perusahaan menjalankan peraturan perundang-undangan yang berlaku  dan perjanjian dengan pihak ketiga.',
                'Terdapat kontak pelanggan untuk menerima umpan balik secara mudah dan mekanisme penanganan keluhan pelanggan.' => '[4111]Pelaksanaan hubungan dengan pelanggan.',
                'Secara berkala perusahaan melakukan asssessment pemasok berdasarkan pencapaian QCDS (quality, cost, delivey, service).' => '[4112]Pelaksanaann hubungan dengan pemasok.',
                'Tidak terjadi mismatch dalam penggunaan dan penyediaan dana dari pendapatan operasional yang digunakan untuk melakukan pembayaran bunga dan pokok hutang jangka panjang.' => '[4113]Pelaksanaan hubungan dengan kreditur.',
                'Tidak terdapat keterlambatan pembayaran kewajiban pajak (PPh karyawan, PPh Badan, PPN masa dan rampung, dan PBB).' => '[4114]Pelaksanaan kewajiban kepada Negara.',
                'Pengukuran kepuasan karyawan.' => '[4115]Pelaksanaan hubungan dengan karyawan perusahaan.',
                'Mekanisme keluhan stakeholders dilaksanakan secara konsisten dan efektif.' => '[4116]Terdapat prosedur tertulis menampung dan  menindaklanjuti keluhan-keluhan stakeholders.',
                'Perusahaan mampu meningkatkan kinerja perusahaan (sesuai KPI yang ditetapkan ) dari tahun-tahun sebelumnya.' => '[4117]Upaya untuk meningkatkan  nilai Pemegang Saham secara konsisten dan berkelanjutan.',
                'Perusahaan mengantisipasi dampak negatif terhadap masyarakat yang ditimbulkan oleh produk, pelayanan, dan proses operasional dari perusahaan.' => '[4118]Perusahaan melaksanakan tanggung jawab sosial perusahaan untuk mendukung keberlanjutan operasi perusahaan.',
                'Sosialisasi kebijakan tentang mekanisme untuk mencegah pengambilan keuntungan pribadi bagi Direksi dan pejabat struktural perusahaan.' => '[4119]Direksi  menetapkan kebijakan tentang mekanisme bagi Direksi dan pejabat struktural untuk mencegah pengambilan keuntungan pribadi dan pihak lainnya disebabkan benturan kepentingan.',
                'Direksi menandatangani Pakta Integritas yang dilampirkan dalam Usulan Tindakan Direksi yang harus mendapatkan persetujuan dari Dewan Komisaris/Dewan Pengawas dan/atau rekomendasi dari Dewan Komisaris/Dewan Pengawas dan persetujuan RUPS/Pemilik Modal.' => '[4120]Direksi menerapkan kebijakan untuk mencegah benturan kepentingan.',
                'Penyampaian laporan manajemen (triwulanan dan tahunan) dan laporan tahunan  kepada Dewan Komisaris/Dewan Pengawas tepat waktu, yakni sebelum batas waktu penyampaian kepada Pemegang Saham.' => '[4121]Direksi melaporkan informasi-informasi yang relevan kepada Pemegang Saham dan Dewan Komisaris/Dewan Pengawas.',
                'Perusahaan memberikan informasi yang relevan kepada Dewan Komisaris untuk pelaksanaan tugas Dewan Komisaris/Dewan Pengawas.' => '[4122]Direksi memberikan perlakukan yang sama (fairness) dalam memberikan informasi kepada Pemegang Saham dan anggota Dewan Komisaris/Dewan Pengawas.',
                'Jumlah rapat yang direncanakan sesuai dengan kebutuhan, paling sedikit sekali dalam sebulan.' => '[4124]Direksi menyelenggarakan Rapat Direksi sesuai kebutuhan, paling sedikit sekali dalam setiap bulan.',
                'Tingkat kehadiran anggota Direksi dalam Rapat dengan Dewan Komisaris/Dewan Pengawas.' => '[4125]Anggota Direksi menghadiri setiap rapat Direksi maupun rapat Direksi & Komisaris, jika tidak dapat hadir yang bersangkutan harus menjelaskan alasan ketidakhadirannya.',
                'Terhadap pelaksanaan keputusan hasil rapat sebelumnya yang belum selesai dilakukan pembahasan untuk tindaklanjutnya.' => '[4126]Direksi melakukan evaluasi terhadap pelaksanaan keputusan hasil rapat sebelumnya.',
                'Tindak lanjut yang dilaksanakan oleh Direksi sesuai dengan arahan dan/atau keputusan Dewan Komisaris/Dewan Pengawas.' => '[4127]Direksi menindaklanjuti arahan, dan/atau keputusan Dewan Komisaris/Dewan Pengawas.',
                'Muatan Piagam Pengawasan Intern.' => '[4128]Perusahaan memiliki Piagam Pengawasan Intern yang ditetapkan oleh Direksi.',
                'Pimpinan Fungsi Audit Internal mempunyai akses langsung melapor hasil kerjanya kepada Dewan Komisaris cq Komite Audit.' => '[4129]SPI/Fungsi Audit Internal dilengkapi dengan faktor-faktor pendukung keberhasilan dalam pelaksanaan tugasnya.',
                'SPI melaporkan pelaksanaan tugasnya kepada Direktur Utama dengan tembusan kepada Dewan Komisaris/Dewan Pengawas  cq Komite Audit.' => '[4130]SPI melaksanakan pengawasan intern untuk memberikan nilai tambah dan memperbaiki operasional perusahaan.',
                'Struktur organisasi Sekretaris Perusahaan sesuai dengan kebutuhan untuk pelaksanaan tugasnya.' => '[4131]Sekretaris Perusahaan  dilengkapi dengan faktor-faktor pendukung keberhasilan pelaksanaan tugasnya.',
                'Sekretaris perusahaan  menjalankan tugas sebagai pejabat penghubung.' => '[4132]Sekretaris perusahaan menjalankan fungsinya.',
                'Capaian program kerja pelaksanaan tugas Sekretaris perusahaan.' => '[4133]Direksi mengevaluasi kualitas fungsi sekretaris perusahaan.',
                'Ketepatan waktu pelaksanaan RUPS.' => '[4134]Direksi menyelenggarakan RUPS sesuai dengan prosedur yang ditetapkan dalam Anggaran Dasar dan peraturan perundang-undangan.',
                'Metode perhitungan dan penentuan gaji/honorarium, fasilitas dan/atau tunjangan lain bagi setiap anggota Dewan Komisaris dan Direksi, serta rincian mengenai gaji/honorarium, fasilitas, dan/atau tunjangan lain yang diterima oleh anggota Dewan Komisaris dan Direksi yang sedang menjabat, khusus dalam RUPS mengenai Laporan Tahunan.' => '[4135]Direksi menyediakan akses serta penjelasan lengkap dan informasi akurat berkenaan dengan penyelenggaraan RUPS agar dapat melaksanakan hak-haknya berdasarkan anggaran dasar dan peraturan perundang-undangan.',
                'Kebijakan mengatur diantaranya.' => '[5136]Perusahaan menetapkan sistem dan prosedur pengendalian informasi perusahaan dengan tujuan untuk mengamankan informasi perusahaan yang penting.',
                'Terdapat  kebijakan tentang pengelolaan dan  pemutakhirkan website.' => '[5138]Terdapat media untuk penyediaan Informasi Publik agar dapat diperoleh dengan cepat dan tepat waktu, biaya ringan, dan cara sederhana.',
                'Terdapat  informasi penting (selain Laporan Tahunan dan Laporan Keuangan) yang dipublikasikan.' => '[5139]Website perusahaan mempublikasikan kebijakan dan informasi penting perusahaan.',
                'Terdapat  pertemuan/gathering dengan stakeholders  dan bentuk lainnya.' => '[5140]Perusahaan menyediakan media lain untuk mengkomunikasikan kebijakan informasi penting perusahaan.',
                'Tidak terdapat permintaan/permohonan untuk memperoleh  Informasi Publik yang tidak dipenuhi oleh perusahaan yang bersangkutan.' => '[5142]Tingkat kemudahan akses terhadap kebijakan dan informasi penting perusahaan yang disediakan dalam website perusahaan.',
                'Laporan Tahunan disajikan dalam website Perusahaan dan dapat diunduh. Yang dimaksud dengan website Perusahaan adalah website yang dimiliki sendiri atau oleh induk , bukan website pihak lain (contoh: tercantum di website Kementerian Negara perusahaan atau website BEI).' => '[5143]Laporan Tahunan memenuhi ketentuan umum penyajian Laporan Tahunan.',
                'Laporan Tahunan wajib memuat  informasi harga Saham tertinggi, terendah, dan penutupan, serta jumlah Saham yang diperdagangkan (dicatatkan) untuk setiap masa triwulan dalam 2 (dua) tahun buku terakhir (jika ada). Harga Saham sebelum perubahan permodalan terakhir wajib disesuaikan dalam hal terjadi antara lain karena pemecahan Saham, dividen Saham, dan Saham bonus dslsm bentuk grafik dan tabel (NA jika listed company hanya menerbitkan obligasi atau non listed company).' => '[5144]Laporan Tahunan memuat mengenai Ikhtisar Data Keuangan Penting.',
                'Laporan Direksi memuat hal-hal.' => '[5145]Laporan Tahunan memuat Laporan Dewan Komisaris/Dewan Pengawas dan Laporan Direksi.',
                'Riwayat singkat perusahaan  mencakup antara lain: tanggal/tahun pendirian, nama dan perubahan nama perusahaan jika ada.' => '[5146]Laporan Tahunan memuat profil perusahaan secara lengkap',
                'Uraian  atas Kinerja Keuangan Perusahaan yakni  analisis kinerja keuangan yang mencakup perbandingan antara kinerja keuangan tahun yang bersangkutan dengan tahun sebelumnya (dalam bentuk narasi dan tabel) , antara lain mengenai: (1) aktiva lancar, aktiva tidak lancar, dan jumlah aktiva; (2) kewajiban lancar, kewajiban tidak lancar, dan jumlah kewajiban; (3) penjualan/pendapatan usaha; (4) beban usaha; (5) laba/rugi bersih.' => '[5147]Laporan Tahunan memuat bagian tersendiri mengenai Analisa dan Pembahasan Manajamen atas Kinerja Perusahaan.',
                'Uraian Direksi memuat antara lain: (1) Ruang lingkup pekerjaan dan tanggung jawab masing-masing anggota Direksi; (2) Pengungkapan prosedur penetapan dan besarnya remunerasi anggota direksi, yang meliputi gaji, fasilitas, dan/atau tunjangan lain yang diterima dari perusahaan yang bersangkutan dan anak perusahaan/perusahaan patungan perusahaan yang bersangkutan; (3) Frekuensi pertemuan; (4) tingkat kehadiran anggota direksi dalam pertemuan; (5) Program pelatihan dalam rangka meningkatkan kompetensi direksi.' => '[5148]Laporan Tahunan memuat pengungkapan praktik Tata Kelola Perusahaan yang Baik.',
                'Opini akuntan atas laporan keuangan adalah wajar tanpa pengecualian (WTP).' => '[5149]Laporan Tahunan memuat bagian tersendiri mengenai Laporan Keuangan.',
                'Perusahaan menang dalam Annual Report Award (ARA).' => '[5150]Perusahaan mengikuti Annual Report Award (ARA).',
                'Penghargaan lain di bidang publikasi dan keterbukaan informasi.' => '[5151]Penghargaan atau award lainnya.',
                'Pencapaian kinerja perusahaan terbaik di sektor usaha BUMN atau di industrinya.' => '[6152]Perusahaan memiliki bidang/area yang menjadi best practices di Industrinya atau menjadi tujuan benchmark bagi perusahaan lain (baik bagi BUMN maupun perusahaan swasta). Bidang/area tersebut dapat terdiri dari produk, proses, fungsi pendukung, kinerja organisasi, dan strategi.',
                'Pembekuan produk utama perusahaan atau mengalami kondisi yang berpotensi mengakibatkan pembekuan produk utama perusahaan.' => '[6153]Terdapat penyimpangan dari prinsip-prinsip Tata Kelola Perusahaan yang baik.',
            );
            $atribut_faktor_uji2 = 'class="form-control"';
            echo form_dropdown('faktor_uji2', $faktor_uji2, $values->faktor_uji2, $atribut_faktor_uji1);
            ?>
        </div>
        <?php if (form_error('faktor_uji2')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('faktor_uji2', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

     <!-- unsur_pemenuhan2 -->
    <div class="form-group form-group-sm has-feedback <?php set_validation_style('unsur_pemenuhan2')?>">
        <?php echo form_label('Unsur Pemenuhan 2', '', array('class' => 'control-label col-sm-2')) ?>
        <div class="col-sm-10">
            <?php echo form_input('unsur_pemenuhan2', $values->unsur_pemenuhan2, 'id="unsur_pemenuhan2" class="form-control" placeholder="Unsur Pemenuhan 2" maxlength="500"') ?>
            <?php set_validation_icon('unsur_pemenuhan2') ?>
        </div>
        <?php if (form_error('unsur_pemenuhan2')) : ?>
            <div class="col-sm-10 col-sm-offset-3">
                <?php echo form_error('unsur_pemenuhan2', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
     </div>

    <!-- jawaban2 -->
    <div class="form-group form-group-sm">        
        <?php echo form_label('Jawaban 2', 'jawaban2', array('class' => 'control-label col-sm-2')) ?>
        <div class="col-sm-6">
            <p class="form-control-static"><?php echo $values->jawaban2;?></p>
        </div>
        <?php echo form_label('Nilai 2', '', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-1 has-feedback <?php set_validation_style('nilai2')?>">
            <?php echo form_input('nilai2', $values->nilai2, 'id="nilai2" class="form-control" placeholder="Nilai 2" maxlength="5"') ?>
            <?php set_validation_icon('nilai2') ?>
        </div>
        <?php if (form_error('nilai2')) : ?>
            <div class="col-sm-10 col-sm-offset-3">
                <?php echo form_error('nilai2', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div><br><br>

    <hr>
    <div class="form-group">
        <div class="col-sm-5 col-sm-offset-3">
            <?php echo form_button(array('content'=>'Simpan', 'type'=>'submit', 'class'=>'btn btn-primary', 'data-confirm'=>'Anda yakin akan menyimpan data ini?')) ?>
        </div>
    </div>

<?php echo form_close() ?>

</div>
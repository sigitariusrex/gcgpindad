<div class="container">
<h2>Scorecard</h2>
<hr>

<?php echo form_open($form_action, array('id'=>'myform', 'class'=>'form-horizontal', 'role'=>'form')) ?>

    <h3 class="bg-success">A. Keterangan Scorecard</h3>

    
     <!-- kode_scorecard -->
    <div class="form-group form-group-sm has-feedback <?php set_validation_style('kode_scorecard')?>">
        <?php echo form_label('Kode Scorecard', 'kode_scorecard', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-9">
            <?php
            $kode_scorecard = array(
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
                '0' => '[0]Lainnya',
            );
            $atribut_kode_scorecard = 'class="form-control"';
            echo form_dropdown('kode_scorecard', $kode_scorecard, $values->kode_scorecard, $atribut_kode_scorecard);
            ?>
        </div>
        <?php if (form_error('kode_scorecard')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('kode_scorecard', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    <!-- ket_scorecard -->
    <div class="form-group form-group-sm has-feedback <?php set_validation_style('ket_scorecard')?>">        
        <?php echo form_label('Keterangan Scorecard', '', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-9">
            <?php echo form_input('ket_scorecard', $values->ket_scorecard, 'id="ket_scorecard" class="form-control" placeholder="Keterangan Scorecard" maxlength="500"') ?>
            <?php set_validation_icon('ket_scorecard') ?>
        </div>
        <?php if (form_error('ket_scorecard')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('ket_scorecard', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    <!-- kode_divisi -->
    <div class="form-group form-group-sm has-feedback <?php set_validation_style('kode_divisi_fk')?>">
        <?php echo form_label('Kode Divisi', 'kode_divisi_fk', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-9">
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

    <hr>
    <div class="form-group">
        <div class="col-sm-5 col-sm-offset-3">
            <?php echo form_button(array('content'=>'Simpan', 'type'=>'submit', 'class'=>'btn btn-primary', 'data-confirm'=>'Anda yakin akan menyimpan data ini?')) ?>
        </div>
    </div>

<?php echo form_close() ?>

</div>
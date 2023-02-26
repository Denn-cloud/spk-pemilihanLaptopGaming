<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-primary">Dashboard</h1>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <!-- Basic Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Metode SAW</h6>
                </div>
                <div class="card-body">
                    <p class="text-justify">
                        Metode <i class="text-primary"><strong>Simple Additive Weighting</strong></i> <strong class="text-primary">(SAW) </strong>
                        adalah salah satu metode yang digunakan dalam proses pengambilan suatu keputusan. Konsep dasar metode
                        SAW adlaah mencari penjumlahan terbobot dari rating kinerja pada setiap alternatif pada semua atribut.
                    </p>
                    <p class="text-justify">
                        Langkah penyelesaian metode SAW sebagai berikut:
                    </p>
                    <ol class="text-justify">
                        <li>
                            <p>Menentukan kriteria-kriteria yang akan dijadikan acuan dalam pengambilan keputusan, yaitu Ci.</p>
                        </li>
                        <li>
                            <p>Menentukan rating kecocokan setiap alternatif pada setiap kriteria.</p>
                        </li>
                        <li>
                            <p>Membuat matriks keputusan berdasarkan kriteria (Ci), kemudian melakukan normalisasi
                                matriks berdasarkan persamaan yang disesuaikan dengan jenis atribut (atribut keuntungan
                                ataupun atribut biaya) sehingga diperoleh matriks ternormalisasi R.</p>
                        </li>
                        <li>
                            <p>Hasil akhir diperoleh dari proses perankingan yaitu penjumlahan dari perkalian matriks
                                ternormalisasi R dengan vektor bobot sehingga diperoleh nilai terbesar yang dipilih sebagai
                                alternatif terbaik (Ai) sebagai solusi.</p>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <!-- Basic Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Rumus Metode SAW</h6>
                </div>
                <div class="card-body">
                    <p>Rumus dari penjelasan no 3</p>
                    <div class="text-center">
                        <img src="img/Rumus1.png" class="rounded" alt="Rumus Metode SAW">
                    </div>
                    <ul class="text-justify">
                        <li>
                            <p>rij = rating kinerja ternormalisasi</p>
                        </li>
                        <li>
                            <p>Maxij = nilai maksimum dari setiap baris dan kolom</p>
                        </li>
                        <li>
                            <p>Minij = nilai minimum dari setiap daris dan kolom</p>
                        </li>
                        <li>
                            <p>Xij = baris dan kolom dari matriks</p>
                        </li>
                    </ul>

                    <p>Rumus dari penjelasan no 4</p>
                    <div class="text-center">
                        <img src="img/Rumus1.png" class="rounded" alt="Rumus Metode SAW">
                    </div>
                    <ul class="text-justify">
                        <li>
                            <p>Vi = Nilai akhir dari alternatif</p>
                        </li>
                        <li>
                            <p>wj = Bobot yang telah ditentukan</p>
                        </li>
                        <li>
                            <p>rij = Normalisasi matriks</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
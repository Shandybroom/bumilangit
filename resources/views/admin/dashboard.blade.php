@extends('layouts/master')

@section('container')
<!-- Content Header (Page header) -->
<section class="content-header">

</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->

    <div class="box">
        <div class="box-header with-border">
            <h3><i>Selamat Datang di Jagat Bumi Langit</h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
                    <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip"
                    title="Remove">
                    <i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            <div id="tes-carousel" class="carousel slide" data-ride="carousel">
                <!-- indikator -->
                <ol class="carousel-indicators">
                    <li data-target="#tes-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#tes-carousel" data-slide-to="1"></li>
                    <li data-target="#tes-carousel" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner">
                    <!-- slide 1 -->
                    <div class="item active">
                        <img src="{{url('image/demo1.jpg')}}" alt="Demo 1">
                    </div>
                    <!-- slide 2 -->
                    <div class="item">
                        <img src="{{url('image/demo2.jpg')}}" alt="Demo 2">
                    </div>
                    <!-- slide 3 -->
                    <div class="item">
                        <img src="{{url('image/demo3.jpg')}}" alt="Demo 3">
                    </div>

                </div>

                <!-- kontrol-->
                <a class="carousel-control left" href="#tes-carousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control right" href="#tes-carousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>

            </div>
            <hr>
            <p>Berdiri tahun 2003, Bumilangit merupakan tonggak awal dimulainya sebuah ikhtiar untuk membangkitkan
                kembali budaya penceritaan komik bertema kepahlawanan di Indonesia. Bumilangit adalah sebuah keluarga
                bagi banyak seniman pencipta dari generasi awal hingga kini, juga bagi para penggemar setia yang selalu
                menghargai karya-karya seniman kami.</p>
            <br>
            <p> Kini Bumilangit menjadi sebuah perusahaan hiburan berbasis karakter terdepan di Indonesia yang mengelola
                pustaka karakter terbanyak, lebih dari 500 karakter-karakter komik yang telah diterbitkan selama enam
                puluh tahun terakhir. Kekuatan dari karakter-karakter kami ini tidak hanya berdasarkan popularitas
                semata, tetapi melainkan pada kekayaan cerita komik dari setiap karakter.</p>
            <br>
            <p>Pustaka karakter Bumilangit terbagi menjadi dua kategori semesta. Semesta Superhero adalah semesta
                karakter yang terdiri dari lebih dari 300 karakter superhero dan 110 judul komiknya yang telah
                diterbitkan dan dijual. Sepanjang sejarahnya komik-komik ini telah terjual lebih dari dua juta eksemplar
                dan dibaca oleh lebih dari sepuluh juta orang. Karakter-karakter terkemuka yang termasuk di dalamnya
                adalah Gundala, superhero Indonesia yang paling terkenal, dan Sri Asih, superhero pertama Indonesia yang
                diciptakan tahun 1954.</p>
            <br>
            <p>Kategori kedua adalah Semesta Pendekar yang tidak kalah pamornya. Semesta Pendekar dirajai oleh dua
                karakter legenda, Si Buta dari Gua Hantu dan Mandala. Pustaka pendekar memiliki lebih dari 200 karakter
                dengan 50 judul komiknya yang telah diterbitkan. Si Buta dari Gua Hantu tetap menjadi satu-satunya
                karakter di Indonesia yang hingga kini paling banyak ditayangkan di media elektronik yang meliputi
                delapan film layar lebar dan dua puluh satu mini serial di dua televisi nasional.</p>
            <br>
        </div>
        <!-- /.box-body -->
    </div>
    <div class="box">
        <div class="row">
            <div class="col-md-6">
                <div class="box box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title">Mading</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="box-group" id="accordion">
                            <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                            <div class="panel box box-primary">
                                <div class="box-header with-border">
                                    <h4 class="box-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                            Breaking News!
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in">
                                    <div class="box-body">
                                        Jakarta, CNN Indonesia -- Film Gundala yang dirilis pada Kamis (29/8) berhasil
                                        meraup 705.117 penonton di penayangan akhir pekan pertama pada Minggu (1/9).
                                        "Wah 705.117 penonton sudah menonton Gundala sampai dengan hari ke-4, terima
                                        kasih ya patriot-patriot Negeri ini. Untuk yang belum nonton, Gundala sudah
                                        tayang yaaa segera ke bioskop sekarang!," tulis akun @gundalaofficial.
                                        Gundala mengalami peningkatan penonton pada akhir pekan debut, yaitu pada Sabtu
                                        (31/8) dan Minggu (1/9).
                                        Pada hari debut, Kamis (29/8), Gundala mampu menjual 174 ribu penonton. Jumlah
                                        tersebut bertambah 138 ribu menjadi 312 ribu penonton pada Jumat (30/8).
                                        Memasuki akhir pekan Sabtu (31/8), jumlah penjualan tiket Gundala naik 199 ribu
                                        riket menjadi 512 ribu.
                                        Penjualan sedikit menurun dengan 192 tiket pada Minggu (1/9), sehingga total
                                        penjualan tiket menjadi 705 ribu tiket.
                                        <br>
                                        <a
                                            href="https://www.cnnindonesia.com/hiburan/20190902153433-220-426836/akhir-pekan-debut-gundala-raih-700-ribu-penonton"><i>sumber
                                                : CNN Indonesia</i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="panel box box-success">
                                <div class="box-header with-border">
                                    <h4 class="box-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                            Lomba Foto Gundala
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse">
                                    <div class="box-body">
                                        <blockquote class="instagram-media" data-instgrm-captioned
                                            data-instgrm-permalink="https://www.instagram.com/p/B18QpILnl0H/?utm_source=ig_embed&amp;utm_campaign=loading"
                                            data-instgrm-version="12"
                                            style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
                                            <div style="padding:16px;"> <a
                                                    href="https://www.instagram.com/p/B18QpILnl0H/?utm_source=ig_embed&amp;utm_campaign=loading"
                                                    style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;"
                                                    target="_blank">
                                                    <div
                                                        style=" display: flex; flex-direction: row; align-items: center;">
                                                        <div
                                                            style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;">
                                                        </div>
                                                        <div
                                                            style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;">
                                                            <div
                                                                style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;">
                                                            </div>
                                                            <div
                                                                style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div style="padding: 19% 0;"></div>
                                                    <div
                                                        style="display:block; height:50px; margin:0 auto 12px; width:50px;">
                                                        <svg width="50px" height="50px" viewBox="0 0 60 60"
                                                            version="1.1" xmlns="https://www.w3.org/2000/svg"
                                                            xmlns:xlink="https://www.w3.org/1999/xlink">
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                                fill-rule="evenodd">
                                                                <g transform="translate(-511.000000, -20.000000)"
                                                                    fill="#000000">
                                                                    <g>
                                                                        <path
                                                                            d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631">
                                                                        </path>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </svg></div>
                                                    <div style="padding-top: 8px;">
                                                        <div
                                                            style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">
                                                            View this post on Instagram</div>
                                                    </div>
                                                    <div style="padding: 12.5% 0;"></div>
                                                    <div
                                                        style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;">
                                                        <div>
                                                            <div
                                                                style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);">
                                                            </div>
                                                            <div
                                                                style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;">
                                                            </div>
                                                            <div
                                                                style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);">
                                                            </div>
                                                        </div>
                                                        <div style="margin-left: 8px;">
                                                            <div
                                                                style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;">
                                                            </div>
                                                            <div
                                                                style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)">
                                                            </div>
                                                        </div>
                                                        <div style="margin-left: auto;">
                                                            <div
                                                                style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);">
                                                            </div>
                                                            <div
                                                                style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);">
                                                            </div>
                                                            <div
                                                                style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <p style=" margin:8px 0 0 0; padding:0 4px;"> <a
                                                        href="https://www.instagram.com/p/B18QpILnl0H/?utm_source=ig_embed&amp;utm_campaign=loading"
                                                        style=" color:#000; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none; word-wrap:break-word;"
                                                        target="_blank">Mau dong dapet komik GUNDALA Movie Adaptation
                                                        edisi limited edition yang cuma ada 300 eksemplar se-Indonesia?
                                                        Apalagi yang udah dapet tanda tangan kreatornya. Nah, sekarang
                                                        kalian bisa dapet gratis! Caranya min? Yuk ikutan lomba foto
                                                        #GundalaAdalahKita. . Cek syarat dan ketentuannya yuk! Di
                                                        #GundalaDay ini, mimin punya kontes menarik buat memeriahkan
                                                        hype Gundala. Yuk ikutan! Cek syarat dan ketentuannya ya! .
                                                        Syarat dan ketentuan #GundalaAdalahKita photo contest : 1.
                                                        Setiap peserta harus Like Facebook Bumilangit dan Follow
                                                        Instagram @bumilangitofficial . 2. Peserta dapat mengikuti
                                                        kontes dengan cara: foto dengan menampilkan aksi atau kegiatan
                                                        positif sebagai patriot bagi lingkungan sekitarmu, dimana dengan
                                                        memasukkan elemen Gundala akan lebih disukai. . 3. Peserta
                                                        upload foto tersebut ke Instagram dan tag minimal ke 5 teman
                                                        kamu, serta mention dan tag ke Instagram @bumilangitofficial.
                                                        Pastikan akun tidak dikunci atau di-lock. . 4. Kirimkan
                                                        screenshot postingan kamu dan kirim melalui DM beserta nama,
                                                        alamat, nomor hp, dan email. . 5. Setiap caption yang peserta
                                                        harus menyertakan #Gundala dan #GundalaAdalahKita. Peserta dapat
                                                        dan mengundang teman-temannya untuk mengikuti aktivasi photo
                                                        contest #GundalaAdalahKita . 6. Periode kontes ini berlangsung
                                                        dari 29 Agustus 2019 sampai 29 September 2019. . 7. Akan ada 3
                                                        pemenang utama dan 5 orang pemenang hiburan. . 8. Pemenang utama
                                                        masing-masing akan mendapatkan 1 (satu) buah paket komik GUNDALA
                                                        MOVIE COMIC bertanda tangan Joko Anwar dan voucher belanja dari
                                                        Brodo sebesar Rp100.000. . 9. Pemenang hiburan masing-masing
                                                        akan mendapatkan voucher belanja dari Brodo sebesar Rp100.000. .
                                                        10. Setiap pemenang yang terpilih mutlak pilihan juri dan tidak
                                                        dapat diganggu gugat . 11. Setiap foto dan cerita yang
                                                        dituliskan tidak boleh mengandung SARA &amp; pornografi. . 12.
                                                        Setiap foto &amp; cerita harus milik sendiri, bukan milik orang
                                                        lain, dan belum pernah diikutsertakan dalam kompetisi manapun .
                                                        13. Setiap foto &amp; cerita yang diikutsertakan akan menjadi
                                                        milik Bumilangit . 14. Seluruh pegawai maupun keluarga dari
                                                        karyawan Bumilangit, Screenplay, Screenplay Bumilangit dilarang
                                                        mengikuti kontes ini.</a></p>
                                                <p
                                                    style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">
                                                    A post shared by <a
                                                        href="https://www.instagram.com/bumilangitofficial/?utm_source=ig_embed&amp;utm_campaign=loading"
                                                        style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px;"
                                                        target="_blank"> Bumilangit</a> (@bumilangitofficial) on <time
                                                        style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;"
                                                        datetime="2019-09-03T07:59:59+00:00">Sep 3, 2019 at 12:59am
                                                        PDT</time></p>
                                            </div>
                                        </blockquote>
                                        <script async src="//www.instagram.com/embed.js"></script>
                                    </div>
                                </div>
                            </div>
                            <div class="panel box box-success">
                                <div class="box-header with-border">
                                    <h4 class="box-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                            Follow Us
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse">
                                    <div class="box-body">
                                        <a class="btn btn-block btn-social btn-instagram"
                                            href="https://www.instagram.com/bumilangitofficial/" target="_blank">
                                            <i class="fa fa-instagram"></i> @Bumilangitofficial
                                        </a>
                                        <a class="btn btn-block btn-social btn-twitter"
                                            href="https://twitter.com/bumilangitcom" target="_blank">
                                            <i class="fa fa-twitter"></i> @bumilangitcom
                                        </a>
                                        <a class="btn btn-block btn-social btn-facebook"
                                            href="https://twitter.com/bumilangitcom" target="_blank">
                                            <i class="fa fa-facebook"></i> BumiLangit
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>

            <!-- /.col -->
            <div class="col-md-6">
                <div class="box box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title">Movie Trailer</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe width="875" height="367" src="https://www.youtube.com/embed/SdAhF3NYvk4"
                                frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
        <!-- END ACCORDION & CAROUSEL-->
    </div>
    
    <!-- /.box -->

</section>
<!-- /.content -->
@endsection
<style>
    /* Make the image fully responsive */
    .carousel-inner img {
        width: 100%;
        height: 100%;
    }
</style>
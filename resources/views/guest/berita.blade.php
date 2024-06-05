@extends('guest/layout')

@section('content')
<!-- ======= Popular Courses Section ======= -->
<section id="popular-courses" class="courses pt-5 mt-5">
    <div class="container mt-5" data-aos="fade-up">
        <div class="row" data-aos="zoom-in" data-aos-delay="100">
        <div class="section-title mb-3 pb-0">
            <h2>Berita</h2>
            <p>Berita Populer</p>
        </div>
            @foreach ($dataBerita as $berita)
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-3">
                    <div class="course-item">
                        <img src="assets/img/LDK.jpg" class="img-fluid" alt="...">
                        <div class="course-content">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4>{{$berita->kategori_berita}}</h4>
                                <p class="date">{{$berita->tanggal_berita}}</p>
                            </div>

                            <h3><a href="course-details.html">{{$berita->judul_berita}}</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore quisquam perspiciatis natus
                                quasi deserunt ullam, nam omnis veritatis animi voluptatem magni dolores officiis, error
                                eius nisi obcaecati, a qui blanditiis.</p>
                            <div class="trainer d-flex justify-content-between align-items-center">
                                <div class="trainer-profile d-flex align-items-center">
                                    <img src="assets/img/LOGO_MA_BARU_YAK-removebg-preview.png" class="img-fluid" alt="">
                                    <span>MAS Khoiriyah Sitiluhur</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End Course Item-->
            @endforeach

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                <div class="course-item">
                    <img src="assets/img/LDK.jpg" class="img-fluid" alt="...">
                    <div class="course-content">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4>LDK OSIM</h4>
                            <p class="date">11 Nopember 2018 </p>
                        </div>

                        <h3><a href="course-details.html">LDK OSIM</a></h3>
                        <p>Kegiatan bertemakan siapa takut jadi pemimpin, kegiatan diikuti delapan
                            belas peserta, berlangsung selama dua hari, yakni hari sabtu – minggu
                            tanggal 10 – 11 Nopember 2018 di aula sekolah, pemateri dari kepala
                            sekolah, pembina osis, guru dan alumni.</p>
                        <div class="trainer d-flex justify-content-between align-items-center">
                            <div class="trainer-profile d-flex align-items-center">
                                <img src="assets/img/LOGO_MA_BARU_YAK-removebg-preview.png" class="img-fluid" alt="">
                                <span>LDK OSIM </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End Course Item-->
        </div>
    </div>
</section><!-- End Popular Courses Section -->
@endsection
@extends('guest/layout')

@section('content')
<!-- ======= Trainers Section ======= -->
<section id="trainers" class="trainers mt-5 pt-5">
  <div class="container" data-aos="fade-up">
    <div class="section-title mt-5">
      <h2>Profil</h2>
      <p class="mb-3">Guru dan Staff </p>

      <div class="row" data-aos="zoom-in" data-aos-delay="100">
    @foreach ($dataGuru as $guru)
      <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
      <div class="member">
        <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid" alt="">
        <div class="member-content">
        <h4>{{$guru -> nama_guru}}</h4>
        <span>{{$guru -> mapel_guru}}</span>
        </div>
      </div>
      </div>
    @endforeach
      </div>
    </div>
  </div>
</section><!-- End Trainers Section -->
@endsection
@extends('templates.visitor')

@section('content')
<!-- Header -->
<header class="text-center">
    <h1>
        Explore the World
    </h1>
    <p>Taste The Most Authentic Experience</p>
    <a href="" class="btn btn-get-started px-4 mt-4">Get Started</a>
</header>

<main>
    <div class="container">
        <section class="section-stats row justify-content-center" id="stats">
            <div class="col-3 col-md-2 stats-detail">
                <h2>20K</h2>
                <p>Members</p>
            </div>
            <div class="col-3 col-md-2 stats-detail">
                <h2>12</h2>
                <p>Countries</p>
            </div>
            <div class="col-3 col-md-2 stats-detail">
                <h2>3K</h2>
                <p>Hotels</p>
            </div>
            <div class="col-3 col-md-2 stats-detail">
                <h2>72</h2>
                <p>Partners</p>
            </div>
        </section>
    </div>

    <section class="section-popular" id="popular">
        <div class="container">
            <div class="row">
                <div class="col text-center section-popular-heading">
                    <h2>Popular Destination</h2>
                    <p>Beberapa destinasi favorit dari member kami</p>
                </div>
            </div>
        </div>

    </section>

    <section class="section-popular-content" id="popularContent">
        <div class="container">
            <div class="row section-popular-travel justify-content-center">
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card-travel text-center d-flex flex-column" style="background-image: url('{{ asset('visitor/img/Group 16.png') }}');">
                        <div class="travel-country">INDONESIA</div>
                        <div class="travel-location">DERATAN, BALI</div>
                        <div class="travel-button mt-auto">
                            <a href="#" class="btn btn-travel-details px-4">Details</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card-travel text-center d-flex flex-column" style="background-image: url('{{ asset('visitor/img/Group 17.png') }}');">
                        <div class="travel-country">PERANCIS</div>
                        <div class="travel-location">PARIS</div>
                        <div class="travel-button mt-auto">
                            <a href="#" class="btn btn-travel-details px-4">Details</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card-travel text-center d-flex flex-column" style="background-image: url('{{ asset('visitor/img/Group 18.png') }}');">
                        <div class="travel-country">INDONESIA</div>
                        <div class="travel-location">RAJA AMPAT</div>
                        <div class="travel-button mt-auto">
                            <a href="#" class="btn btn-travel-details px-4">Details</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card-travel text-center d-flex flex-column" style="background-image: url('{{ asset('visitor/img/Group 19.png') }}');">
                        <div class="travel-country">INDONESIA</div>
                        <div class="travel-location">DERATAN, BALI</div>
                        <div class="travel-button mt-auto">
                            <a href="#" class="btn btn-travel-details px-4">Details</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="section-networks" id="networks">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2>Partners</h2>
                    <p>Perusahaan yang telah berkolaborasi dengan kami untuk pengalaman terbaik anda!</p>
                </div>
                <div class="col-md-8 text-center">
                    <img src="{{ asset('visitor/img/Partner 1.png') }}" alt="anapartner.png" class="img-partner">
                </div>
            </div>
        </div>
    </section>

    <section class="section-testimonial-heading" id="testimonialHeading">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h2>MEREKA SUKA LOH!</h2>
                    <p>Dengan lebih dari 100 total trip yang dilakukan bersama kami, ini kata - kata dari user kami yang ingin menggunakan jasa kami lagi!</p>
                </div>
            </div>

            <div class="row section-testimonial-content d-flex justify-content-center" id="testimonialContent">

                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('visitor/img/Profilepic.png') }}" class="card-img-top align-self-center" alt="userprofilepic.png">
                        <div class="card-body text-center">
                            <h5 class="card-title">Username</h5>
                            <p class="card-text">"Trip yang menyenangkan!"</p>
                        </div>
                        <ul class="list-group list-group-flush text-center">
                            <li class="list-group-item">London, Inggris</li>
                        </ul>
                        </div>

                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('visitor/img/Profilepic.png') }}" class="card-img-top align-self-center" alt="userprofilepic.png">
                        <div class="card-body text-center">
                            <h5 class="card-title">Username</h5>
                            <p class="card-text">"Akhirnya bisa Umroh dengan nyaman. Selain Umroh, dapat program liburan ke Tukrinya sangat bebas"</p>
                        </div>
                        <ul class="list-group list-group-flush text-center">
                            <li class="list-group-item">Program Umroh Baal</li>
                        </ul>
                        </div>

                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('visitor/img/Profilepic.png') }}" class="card-img-top align-self-center" alt="userprofilepic.png">
                        <div class="card-body text-center">
                            <h5 class="card-title">Username</h5>
                            <p class="card-text">"Perjalanan saya pertama ke Malaysia, trip sangat nyaman dan waktu belanja dibebaskan"</p>
                        </div>
                        <ul class="list-group list-group-flush text-center">
                            <li class="list-group-item">Kuala Lumpur, Malaysia</li>
                        </ul>
                        </div>

            </div>

            <div class="row">
                <div class="col-12 text-center">
                    <a href="#" class="btn btn-secondary px-4 mt-4 mx-1">Bantuan</a>
                    <a href="#" class="btn btn-get-started px-4 mt-4 mx-1">Get Started</a>
                </div>
            </div>
        </div>
    </section>

</main>

@endsection

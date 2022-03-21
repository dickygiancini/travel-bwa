@extends('templates.visitor')

@section('content')
<main>
    <section class="section-details-header"></section>
    <section class="section-details-content">
        <div class="container">
            <div class="row">
                <div class="col p-0">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="#" class="btn p-0">Paket Travelnya</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Details</li>
                        </ol>
                      </nav>
                </div>
            </div>

            <div class="row">

                <div class="col-lg-8 p-0">
                    <div class="card">
                        <div class="card-ribbon">
                            <span><strong>50% Off!</strong></span>
                        </div>
                        <div class="card-body">
                          <h2 class="card-title"><strong>Paris</strong></h2>
                          <h6 class="card-subtitle mb-2 text-muted title-description">Capital of France</h6>

                          <!-- Carousel -->
                          <div id="detailsCarousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                              <button type="button" data-bs-target="#detailsCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"><img src="{{ asset('visitor/img/paris-france-1.jpg') }}" alt="paris-france-1.png" /></button>
                              <button type="button" data-bs-target="#detailsCarousel" data-bs-slide-to="1" aria-label="Slide 2"><img src="{{ asset('visitor/img/paris-france-2.jpg') }}" alt="paris-france-2.png" /></button>
                              <button type="button" data-bs-target="#detailsCarousel" data-bs-slide-to="2" aria-label="Slide 3"><img src="{{ asset('visitor/img/paris-france-3.jpg') }}" alt="paris-france-3.png" /></button>
                            </div>
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img src="{{ asset('visitor/img/paris-france-1.jpg') }}" class="xzoom d-block w-100" alt="paris-france-1.png" id="xzoom-default" xoriginal="{{ asset('visitor/img/paris-france-1.jpg') }}" />
                              </div>
                              <div class="carousel-item">
                                <img src="{{ asset('visitor/img/paris-france-2.jpg') }}" class="d-block w-100 xzoom" alt="paris-france-2.png" xoriginal="{{ asset('visitor/img/paris-france-2.jpg') }}" />
                              </div>
                              <div class="carousel-item">
                                <img src="{{ asset('visitor/img/paris-france-3.jpg') }}" class="d-block w-100 xzoom" alt="paris-france-3.png" xoriginal="{{ asset('visitor/img/paris-france-3.jpg') }}" />
                              </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#detailsCarousel" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#detailsCarousel" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                            </button>
                          </div>

                          <h5 class="card-title mt-2"><strong>About Paris</strong></h5>
                          <p class="card-text title-description">Paris  is the capital and most populous city of France, with an estimated population of 2,165,423 residents in 2019 in an area of more than 105 square kilometres (41 square miles), making it the 34th most densely populated city in the world in 2020. Since the 17th century, Paris has been one of the world's major centres of finance, diplomacy, commerce, fashion, gastronomy, science, and arts. The City of Paris is the centre and seat of government of the region and province of Île-de-France, or Paris Region, with an estimated population of 12,997,058 in 2020, or about 18 percent of the population of France, making it in 2020 the largest metropolitan area in Europe, and 14th largest in the world in 2015. The Paris Region had a GDP of €709 billion ($808 billion) in 2017. According to the Economist Intelligence Unit Worldwide Cost of Living Survey in 2018, Paris was the second most expensive city in the world, after Singapore and ahead of Zürich, Hong Kong, Oslo, and Geneva. Another source ranked Paris as most expensive, on par with Singapore and Hong Kong, in 2018.</p>

                        </div>
                      </div>
                </div>

                <div class="col-lg-4">

                    <div class="card card-right">
                        <div class="card-body">
                          <h5 class="card-title">Members Joining</h5>
                          <img src="{{ asset('visitor/img/Profilepic.png') }}" class="align-self-center" alt="userprofilepic.png" width="40px">
                          <img src="{{ asset('visitor/img/Profilepic.png') }}" class="align-self-center" alt="userprofilepic.png" width="40px">
                          <img src="{{ asset('visitor/img/Profilepic.png') }}" class="align-self-center" alt="userprofilepic.png" width="40px">
                          <hr>
                          <p class="card-text trip-info">Trip Information</p>
                          <div class="d-flex justify-content-center mb-2">
                              <div class="col-6 text-start title-trip-info">
                                  Departure
                              </div>
                              <div class="col-6 text-end">
                                  22 January 2020
                              </div>
                          </div>
                          <div class="d-flex justify-content-center mb-2">
                              <div class="col-6 text-start title-trip-info">
                                  Duration
                              </div>
                              <div class="col-6 text-end">
                                  3 Days
                              </div>
                          </div>
                          <div class="d-flex justify-content-center mb-2">
                              <div class="col-6 text-start title-trip-info">
                                  Type
                              </div>
                              <div class="col-6 text-end">
                                  Open Trip
                              </div>
                          </div>
                          <div class="d-flex justify-content-center mb-2">
                              <div class="col-6 text-start title-trip-info">
                                  Price
                              </div>
                              <div class="col-6 text-end">
                                  $80 / Pax
                              </div>
                          </div>

                          <a href="checkout.html" class="mt-4 btn btn-book card-link d-flex justify-content-center">Book Now!</a>
                        </div>
                      </div>

                </div>

            </div>
        </div>
    </section>
</main>
@endsection

@section('page-scripts')
<script type="text/javascript">
    $(document).ready(function() {

        $('.xzoom, .xzoom-gallery').xzoom({
            zoomWidth: 500,
            title: false,
            tint: '#333',
            Xoffset: 15
        });
    })
</script>
@endsection

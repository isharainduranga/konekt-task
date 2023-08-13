@extends('frontend.layouts.app')
@section('content')
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          </div>
        
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="2000">
                <img src="{{ asset('frontend/img/banner/1.png') }}" class="d-block w-100" alt="banner-img">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="{{ asset('frontend/img/banner/2.png') }}" class="d-block w-100" alt="banner-img">
            </div>
        </div>
        
    </div>

    <div class="container">
        <div class="row my-5 py-4">
            <div class="col-lg-4 col-md-4 col-sm-4 mb-3">
                <div class="custom-card">
                    <div class="row g-0">
                        <div class="col-md-3">
                            <img src="{{ asset('frontend/img/icon/reward.png') }}" class="img-fluid rounded-start ps-3"
                                alt="icon">
                        </div>
                        <div class="col-md-9">
                            <div class="card-body">
                                <h5 class="card-title custom-card-content py-3">Rewards & Promotions</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 mb-3">
                <div class="custom-card">
                    <div class="row g-0">
                        <div class="col-md-3">
                            <img src="{{ asset('frontend/img/icon/new.png') }}" class="img-fluid rounded-start ps-3"
                                alt="icon">
                        </div>
                        <div class="col-md-9">
                            <div class="card-body">
                                <h5 class="card-title custom-card-content py-3">Whats new</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 mb-3">
                <div class="custom-card">
                    <div class="row g-0">
                        <div class="col-md-3">
                            <img src="{{ asset('frontend/img/icon/rate.png') }}" class="img-fluid rounded-start ps-3"
                                alt="icon">
                        </div>
                        <div class="col-md-9">
                            <div class="card-body">
                                <h5 class="card-title custom-card-content py-3">Rates and charges</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 mb-3">
                <div class="custom-card">
                    <div class="row g-0">
                        <div class="col-md-3">
                            <img src="{{ asset('frontend/img/icon/calculator.png') }}" class="img-fluid rounded-start ps-3"
                                alt="icon">
                        </div>
                        <div class="col-md-9">
                            <div class="card-body">
                                <h5 class="card-title custom-card-content py-3">TOOLS & CALCULATOR</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 mb-3">
                <div class="custom-card">
                    <div class="row g-0">
                        <div class="col-md-3">
                            <img src="{{ asset('frontend/img/icon/location.png') }}" class="img-fluid rounded-start ps-3"
                                alt="icon">
                        </div>
                        <div class="col-md-9">
                            <div class="card-body">
                                <h5 class="card-title custom-card-content py-3">BRANCH LOCATOR</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-5 background">
        <div class="container">
            <div class="row mt-5">
                <center>
                    <h5 class="main-sub-topic">WELCOME Sampath Banking</h5>
                    <h2 class="main-topic">What can we help you with today?</h2>
                </center>
            </div>
            <div class="row py-5">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#personal">Personal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#business">Business</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#corporates">Corporates</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#cards">Cards</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#digital-banking">Digital Banking</a>
                    </li>
                </ul>
                <div class="tab-content mt-3">
                    <div id="personal" class="tab-pane fade show active">
                        <div class="row">
                            <h2 class="service-sub-topic mt-3">Personal Banking</h2>
                            <p class="service-content my-3">Welcome to our personal banking services. Explore our range of
                                banking solutions designed for
                                individuals.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                                sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                                laborum</p>

                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-6 mb-3">
                                <div class="custom-card">
                                    <div class="row g-0">
                                        <div class="card-body">
                                            <center>
                                                <h5 class="card-title custom-card-content">Current Account</h5>
                                            </center>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 mb-3">
                                <div class="custom-card">
                                    <div class="row g-0">
                                        <div class="card-body">
                                            <center>
                                                <h5 class="card-title custom-card-content">Saving Accounts</h5>
                                            </center>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 mb-3">
                                <div class="custom-card">
                                    <div class="row g-0">
                                        <div class="card-body">
                                            <center>
                                                <h5 class="card-title custom-card-content">Term Deposit Accounts</h5>
                                            </center>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 mb-3">
                                <div class="custom-card">
                                    <div class="row g-0">
                                        <div class="card-body">
                                            <center>
                                                <h5 class="card-title custom-card-content">Foreign Currency Accounts</h5>
                                            </center>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 mb-3">
                                <div class="custom-card">
                                    <div class="row g-0">
                                        <div class="card-body">
                                            <center>
                                                <h5 class="card-title custom-card-content">LOAN</h5>
                                            </center>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 mb-3">
                                <div class="custom-card">
                                    <div class="row g-0">
                                        <div class="card-body">
                                            <center>
                                                <h5 class="card-title custom-card-content">Pawning and Gold Loan</h5>
                                            </center>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 mb-3">
                                <div class="custom-card">
                                    <div class="row g-0">
                                        <div class="card-body">
                                            <center>
                                                <h5 class="card-title custom-card-content">Gift Vouchers</h5>
                                            </center>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 mb-3">
                                <div class="custom-card">
                                    <div class="row g-0">
                                        <div class="card-body">
                                            <center>
                                                <h5 class="card-title custom-card-content">Foreign Remittances</h5>
                                            </center>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 mb-3">
                                <div class="custom-card">
                                    <div class="row g-0">
                                        <div class="card-body">
                                            <center>
                                                <h5 class="card-title custom-card-content">Treasury</h5>
                                            </center>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 mb-3">
                                <div class="custom-card">
                                    <div class="row g-0">
                                        <div class="card-body">
                                            <center>
                                                <h5 class="card-title custom-card-content">Factoring</h5>
                                            </center>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 mb-3">
                                <div class="custom-card">
                                    <div class="row g-0">
                                        <div class="card-body">
                                            <center>
                                                <h5 class="card-title custom-card-content">Relationship Banking</h5>
                                            </center>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 mb-3">
                                <div class="custom-card">
                                    <div class="row g-0">
                                        <div class="card-body">
                                            <center>
                                                <h5 class="card-title custom-card-content">Safe Deposit Lockers</h5>
                                            </center>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div id="business" class="tab-pane fade">
                        <h2>Business Banking</h2>
                        <p>Discover tailored business banking solutions to help your company thrive and grow.</p>
                    </div>
                    <div id="corporates" class="tab-pane fade">
                        <h2>Corporate Banking</h2>
                        <p>Explore our corporate banking services designed to support large organizations and corporations.
                        </p>
                    </div>
                    <div id="cards" class="tab-pane fade">
                        <h2>Cards</h2>
                        <p>Choose from our selection of credit and debit cards with various benefits and features.</p>
                    </div>
                    <div id="digital-banking" class="tab-pane fade">
                        <h2>Digital Banking</h2>
                        <p>Experience the convenience of digital banking, including online transactions, mobile apps, and
                            more.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <iframe id="branch"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.7538584360354!2d79.85083077499651!3d6.920001793079663!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae259154bd55131%3A0xc2d6d6e6665654de!2sSampath%20Bank%20PLC%20-%20Head%20Office!5e0!3m2!1sen!2slk!4v1691910218118!5m2!1sen!2slk"
                style="border:0;max-height:800px;min-height:400px;width:100%;" style="border:0;" allowfullscreen=""
                loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="row">
                <h2 class="location-topic my-4 pt-4">Showing all ATMs / Branches / Super Branches</h2>
            </div>
            <div class="row">
                <div class="scroll-sec">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12 mt-4 location-area" onclick="changelocation('headoffice')">
                            <h6 class="location-sub-topic">Headquarters Branch</h6>
                            <span class="location-paragraph-no">+94 11 2358 358</span><br />
                            <span class="location-paragraph-loc">headquarters.mgr@sampath.lk</span><br />
                            <span class="location-paragraph">No. 110. Sir James Peiris Mawatha, Colombo 02.</span>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 mt-4 location-area" onclick="changelocation('aluthgama')">
                            <h6 class="location-sub-topic">Aluthgama Branch</h6>
                            <span class="location-paragraph-no">+94 34 2290 861/2</span><br />
                            <span class="location-paragraph-loc">aluthgama.mgr@sampath.lk</span><br />
                            <span class="location-paragraph">No. 405, Galle Road, Aluthgama.</span>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 mt-4 location-area" onclick="changelocation('akuressa')">
                            <h6 class="location-sub-topic">Akuressa Branch Branch</h6>
                            <span class="location-paragraph-no">+94 41 2284 650/1</span><br />
                            <span class="location-paragraph-loc">akuressa.mgr@sampath.lk</span><br />
                            <span class="location-paragraph">No. 14/16, Pitabeddara Road, Akuressa.</span>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 mt-4 location-area" onclick="changelocation('ambalangoda')">
                            <h6 class="location-sub-topic">Ambalangoda Branch</h6>
                            <span class="location-paragraph-no">+94 91 2255 571/3</span><br />
                            <span class="location-paragraph-loc">ambalangoda.mgr@sampath.lkk</span><br />
                            <span class="location-paragraph">No. 118 A, New Road, Ambalangoda.</span>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 mt-4 location-area" onclick="changelocation('ahangama')">
                            <h6 class="location-sub-topic">Ahangama Branch</h6>
                            <span class="location-paragraph-no">+94 91 2282902/3</span><br />
                            <span class="location-paragraph-loc">ahangama.mgr@sampath.lk</span><br />
                            <span class="location-paragraph">No. 71A, Matara Road, Ahangama.</span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-5 background">
        <div class="container">
            <div class="row mt-5">
                <center>
                    <h5 class="main-sub-topic">Sampath News</h5>
                    <h2 class="main-topic">Get To Know Us, What We Do....</h2>
                </center>
            </div>
            <div class="row py-5">
                <div class="col-lg-4 col-md-4 col-sm-12 mt-3">
                    <div class="card">
                        <img src="{{ asset('frontend/img/news/1.png') }}" class="card-img-top" alt="news-img">
                        <div class="card-body">
                            <p class="card-text news-text">Lorem ipsum dolor sit amet</p>
                            <span class="read-text">Read More</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 mt-3">
                    <div class="card">
                        <img src="{{ asset('frontend/img/news/1.png') }}" class="card-img-top" alt="news-img">
                        <div class="card-body">
                            <p class="card-text news-text">Lorem ipsum dolor sit amet</p>
                            <span class="read-text">Read More</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 mt-3">
                    <div class="card">
                        <img src="{{ asset('frontend/img/news/1.png') }}" class="card-img-top" alt="news-img">
                        <div class="card-body">
                            <p class="card-text news-text">Lorem ipsum dolor sit amet</p>
                            <span class="read-text">Read More</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function changelocation(location) {
            if (location == 'headoffice') {
                document.getElementById("branch").src =
                    "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.7538584360354!2d79.85083077499651!3d6.920001793079663!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae259154bd55131%3A0xc2d6d6e6665654de!2sSampath%20Bank%20PLC%20-%20Head%20Office!5e0!3m2!1sen!2slk!4v1691910218118!5m2!1sen!2slk"
            } else if (location == 'aluthgama') {
                document.getElementById("branch").src =
                    "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.6779037168217!2d79.9940982745384!3d6.43540102418177!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae22e8864de3319%3A0x10e5ecd2642c47f5!2sSampath%20Bank!5e0!3m2!1sen!2slk!4v1691912259713!5m2!1sen!2slk"
            } else if (location == 'akuressa') {
                document.getElementById("branch").src =
                    "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d253902.08806103433!2d80.17500169453122!3d6.101029700000023!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae1425d21242881%3A0xeba9e979115cfd8c!2sSampath%20Bank!5e0!3m2!1sen!2slk!4v1691912351628!5m2!1sen!2slk"
            } else if (location == 'ambalangoda') {
                document.getElementById("branch").src =
                    "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63455.86048415691!2d80.06694843536064!3d6.264876113873537!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae17e41063afc11%3A0xc97325da5766a17c!2sSampath%20Bank!5e0!3m2!1sen!2slk!4v1691912447725!5m2!1sen!2slk"
            } else if (location == 'ahangama') {
                document.getElementById("branch").src =
                    "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3968.165426649462!2d80.36227357453615!3d5.971942929327943!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae113581a317aef%3A0xc74347f1b995bc9f!2sSampath%20Bank!5e0!3m2!1sen!2slk!4v1691912555996!5m2!1sen!2slk"
            }
        }
    </script>
@endsection

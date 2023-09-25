@extends('frontend.master.layouts')
@section('content')

<section class="breadcrumb-area services">
    <div class="container">

        <div class="row">
            <div class="col-sm-12">
                <div class="section-title">
                    <h2>Trusted Education Consultancy Services</h2>
                </div>
            </div>
        </div>

    </div>
</section><!-- breadcrumb area close -->

<section class="what-we-are-area mb-5">
    <div class="container">

        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="wwo-thumb">
                    <img src="{{ asset('frontend/images/study2022.jpg') }}" alt="BSM Education">
                </div><!-- logo box close -->
            </div><!-- col close -->
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="wwe-content">
                    <h2>USA EB-3 Green Card Program</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus laboriosam aliquam accusantium repellat numquam expedita vitae voluptates porro dicta soluta accusamus excepturi quis voluptatem eaque, voluptate. Dolores ad aut quae veritatis porro dolore eum repellat. Inventore soluta odio voluptates, officia tempora officiis, quis reprehenderit earum blanditiis! Qui nam at aperiam necessitatibus? Voluptatibus, modi, earum? Quo, ut, ullam! Sed voluptatum, perferendis maiores accusantium! Provident, assumenda impedit maxime ad reiciendis ut odit laudantium, iure esse quam.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga aliquam voluptate reprehenderit nam ipsum totam deserunt labore ratione minima exercitationem fugit ea placeat obcaecati earum id quod, nesciunt delectus.</p>
                </div><!-- logo box close -->
            </div><!-- col close -->

        </div>
    </div>
</section><!-- wwo area close -->


<section class="what-we-are-area mb-5">
    <div class="container">

        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="wwe-content">
                    <h2>Study Abroad</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus laboriosam aliquam accusantium repellat numquam expedita vitae voluptates porro dicta soluta accusamus excepturi quis voluptatem eaque, voluptate. Dolores ad aut quae veritatis porro dolore eum repellat. Inventore soluta odio voluptates, officia tempora officiis, quis reprehenderit earum blanditiis! Qui nam at aperiam necessitatibus? Voluptatibus, modi, earum? Quo, ut, ullam! Sed voluptatum, perferendis maiores accusantium! Provident, assumenda impedit maxime ad reiciendis ut odit laudantium, iure esse quam.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga aliquam voluptate reprehenderit nam ipsum totam deserunt labore ratione minima exercitationem fugit ea placeat obcaecati earum id quod.</p>
                </div><!-- logo box close -->
            </div><!-- col close -->

            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="wwo-thumb">
                    <img src="{{ asset('frontend/images/study2023.jpg') }}" alt="BSM Education">
                </div><!-- logo box close -->
            </div><!-- col close -->

        </div>
    </div>
</section><!-- wwo area close -->


<section class="study-abroad-area services mb-5">
    <div class="container">

        <div class="row">

            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="studyAbroadBox">
                    <a href="">
                        <img src="{{ asset('frontend/images/study-banner1.jpg') }}" alt="BSM Education">
                        <h4>Study in USA</h3>
                    </a>
                </div>
            </div><!-- col close -->
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="studyAbroadBox">
                    <a href="">
                        <img src="{{ asset('frontend/images/study-banner2.jpg') }}" alt="BSM Education">
                        <h4>Study in Canada</h3>
                    </a>
                </div>
            </div><!-- col close -->
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="studyAbroadBox">
                    <a href="">
                        <img src="{{ asset('frontend/images/study-banner3.jpg') }}" alt="BSM Education">
                        <h4>Study in Australia</h3>
                    </a>
                </div>
            </div><!-- col close -->

        </div>
    </div>
</section><!-- sa area close -->

@endsection
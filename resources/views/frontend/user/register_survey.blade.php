@extends('frontend.master.layouts')
@section('content')
<div class="nhp-banner-c">
    <img src="{{asset('frontend/images/page-banner.jpg')}}" alt="Scholarship Offers">
       <section class="breadcrumb-part">
           <div class="container">
               <div class="row">
               <div class="col-12 text-center">
                       <div class="breadcrumb-title">
                           <h1>Register</h1>
                           <p style="color:#fff; font-weight:700; "><a  href="{{url('/')}}" style="color: #000">Home</a> / Assess your qualification</p>
                       </div>
                   </div>
               </div> 
           </div>
       </section>
    </div>

<section class="registration-area pt-5 pb-5">
    <div class="container">
        <div class="row">

            <div class="col-xl-12">
                {{--  <h2 class="reg-title mb-4 text-center background-blue-1 text-white p-3">Qualification Questionnaire<small class="d-block">In order for ISA to provide with the best services, it is important for you to answer these questions honestly.</small></h2>  --}}

            <form action="{{ route('register.survey.store') }}" method="POST">
                @csrf
                <div class="registration-wizard mb-4">
                    <div class="title relative">
                        <h2>Section One</h2> 
                    </div>
                    <div class="single-quiz">
                        <div class="form-group">
                            <p>1. Are you married?</p>
                            <div class="selectgroup selectgroup-pills">
                                <label class="selectgroup-item">
                                    <input type="radio" name="married" value="Yes" class="selectgroup-input" required>
                                    <span class="selectgroup-button">Yes</span>
                                </label>
                                <label class="selectgroup-item">
                                    <input type="radio" name="married" value="No" class="selectgroup-input" required>
                                    <span class="selectgroup-button">No</span>
                                </label>
                            </div>
                        </div><!-- From Group Close -->
                    </div><!-- SingleQuiz Close -->

                    <div class="single-quiz">
                        <div class="form-group">
                            <p>2. Do you have children under the age of 21?</p>
                            <div class="selectgroup selectgroup-pills">
                                <label class="selectgroup-item">
                                    <input type="radio" name="children" value="Yes" class="selectgroup-input" required>
                                    <span class="selectgroup-button">Yes</span>
                                </label>
                                <label class="selectgroup-item">
                                    <input type="radio" name="children" value="No" class="selectgroup-input" required>
                                    <span class="selectgroup-button">No</span>
                                </label>
                            </div>
                        </div><!-- From Group Close -->
                    </div><!-- SingleQuiz Close -->

                    <div class="single-quiz">
                        <div class="form-group">
                            <p>3. Do you have children 21 years of age or older? </p>
                            <div class="selectgroup selectgroup-pills">
                                <label class="selectgroup-item">
                                    <input type="radio" name="children1" value="Yes" class="selectgroup-input" required>
                                    <span class="selectgroup-button">Yes</span>
                                </label>
                                <label class="selectgroup-item">
                                    <input type="radio" name="children1" value="No" class="selectgroup-input" required>
                                    <span class="selectgroup-button">No</span>
                                </label>
                            </div>
                        </div><!-- From Group Close -->
                    </div><!-- SingleQuiz Close -->

                    <div class="single-quiz">
                        <div class="form-group">
                            <p>4. Do you have any family in the U.S.? </p>
                            <div class="selectgroup selectgroup-pills">
                                <label class="selectgroup-item">
                                    <input type="radio" name="family" value="Yes" class="selectgroup-input" required>
                                    <span class="selectgroup-button">Yes</span>
                                </label>
                                <label class="selectgroup-item">
                                    <input type="radio" name="family" value="No" class="selectgroup-input" required>
                                    <span class="selectgroup-button">No</span>
                                </label>
                            </div>
                        </div><!-- From Group Close -->
                    </div><!-- SingleQuiz Close -->

                    <div class="single-quiz">
                        <div class="form-group">
                            <p>5. Have you ever lived in the U.S.?</p>
                            <div class="selectgroup selectgroup-pills">
                                <label class="selectgroup-item">
                                    <input type="radio" name="lived" value="Yes" class="selectgroup-input" required>
                                    <span class="selectgroup-button">Yes</span>
                                </label>
                                <label class="selectgroup-item">
                                    <input type="radio" name="lived" value="No" class="selectgroup-input" required>
                                    <span class="selectgroup-button">No</span>
                                </label>
                            </div>
                        </div><!-- From Group Close -->
                    </div><!-- SingleQuiz Close -->

                </div><!-- registration wizard close -->



                <div class="registration-wizard mb-4"> 
                    <div class="title relative">
                        <h2>Section Two</h2> 
                    </div>
                    <div class="single-quiz">
                        <div class="form-group">
                            <p>1. Have you already applied for an immigrant visa? </p>
                            <div class="selectgroup selectgroup-pills">
                                <label class="selectgroup-item">
                                    <input type="radio" name="visa" value="Yes" class="selectgroup-input" required>
                                    <span class="selectgroup-button">Yes</span>
                                </label>
                                <label class="selectgroup-item">
                                    <input type="radio" name="visa" value="No" class="selectgroup-input" required>
                                    <span class="selectgroup-button">No</span>
                                </label>
                            </div>
                        </div><!-- From Group Close -->
                    </div><!-- SingleQuiz Close -->

                    <div class="single-quiz">
                        <div class="form-group">
                            <p>2. Have you submitted a form l-485 to acquire a Green Card? </p>
                            <div class="selectgroup selectgroup-pills">
                                <label class="selectgroup-item">
                                    <input type="radio" name="green" value="Yes" class="selectgroup-input" required>
                                    <span class="selectgroup-button">Yes</span>
                                </label>
                                <label class="selectgroup-item">
                                    <input type="radio" name="green" value="No" class="selectgroup-input" required>
                                    <span class="selectgroup-button">No</span>
                                </label>
                            </div>
                        </div><!-- From Group Close -->
                    </div><!-- SingleQuiz Close -->

                    <div class="single-quiz">
                        <div class="form-group">
                            <p>3. Have you ever been barred from entering the U.S.? </p>
                            <div class="selectgroup selectgroup-pills">
                                <label class="selectgroup-item">
                                    <input type="radio" name="entearing" value="Yes" class="selectgroup-input" required>
                                    <span class="selectgroup-button">Yes</span>
                                </label>
                                <label class="selectgroup-item">
                                    <input type="radio" name="entearing" value="No" class="selectgroup-input" required>
                                    <span class="selectgroup-button">No</span>
                                </label>
                            </div>
                        </div><!-- From Group Close -->
                    </div><!-- SingleQuiz Close -->

                    <div class="single-quiz">
                        <div class="form-group">
                            <p class="mb-1">4. Do you have any past or outstareIng immigration issues with the U.S </p>
                            <ul>
                                <li>1. Losing resident status</li>
                                <li>2. Working without authorization </li>
                                <li>3. Proceedings for removal from the U.S.</li>
                            </ul>
                            <div class="selectgroup selectgroup-pills">
                                <label class="selectgroup-item">
                                    <input type="radio" name="removal" value="Yes" class="selectgroup-input" required>
                                    <span class="selectgroup-button">Yes</span>
                                </label>
                                <label class="selectgroup-item">
                                    <input type="radio" name="removal" value="No" class="selectgroup-input" required>
                                    <span class="selectgroup-button">No</span>
                                </label>
                            </div>
                        </div><!-- From Group Close -->
                    </div><!-- SingleQuiz Close -->

                    <div class="single-quiz">
                        <div class="form-group">
                            <p class="mb-1">5. Have you entered or attempted to enter the U.S. illegally?</p>
                            <ul>
                                <li>1. Did you use false documents?</li>
                                <li>2. Claim to be a U.S. citizen?</li>
                                <li>3. How Long did you remain in the U.S.? </li>
                            </ul>
                            <div class="selectgroup selectgroup-pills">
                                <label class="selectgroup-item">
                                    <input type="radio" name="illegally" value="Yes" class="selectgroup-input" required>
                                    <span class="selectgroup-button">Yes</span>
                                </label>
                                <label class="selectgroup-item">
                                    <input type="radio" name="illegally" value="No" class="selectgroup-input" required>
                                    <span class="selectgroup-button">No</span>
                                </label>
                            </div>
                        </div><!-- From Group Close -->
                    </div><!-- SingleQuiz Close -->

                    <div class="single-quiz">
                        <div class="form-group">
                            <p>6. Were you ever removed from the U.S. under any legal order? </p>
                            <div class="selectgroup selectgroup-pills">
                                <label class="selectgroup-item">
                                    <input type="radio" name="remove" value="Yes" class="selectgroup-input" required>
                                    <span class="selectgroup-button">Yes</span>
                                </label>
                                <label class="selectgroup-item">
                                    <input type="radio" name="remove" value="No" class="selectgroup-input" required>
                                    <span class="selectgroup-button">No</span>
                                </label>
                            </div>
                        </div><!-- From Group Close -->
                    </div><!-- SingleQuiz Close -->

                    <div class="single-quiz">
                        <div class="form-group">
                            <p>7. Have you ever renounced U.S. citizenship? </p>
                            <div class="selectgroup selectgroup-pills">
                                <label class="selectgroup-item">
                                    <input type="radio" name="citizen" value="Yes" class="selectgroup-input" required>
                                    <span class="selectgroup-button">Yes</span>
                                </label>
                                <label class="selectgroup-item">
                                    <input type="radio" name="citizen" value="No" class="selectgroup-input" required>
                                    <span class="selectgroup-button">No</span>
                                </label>
                            </div>
                        </div><!-- From Group Close -->
                    </div><!-- SingleQuiz Close -->
                </div><!-- registration wizard close -->



                <div class="registration-wizard"> 
                    <div class="title relative">
                        <h2>Section Three</h2> 
                    </div>
                    <div class="single-quiz">
                        <div class="form-group">
                            <p>1. Have you ever participated in any criminal activity or enterprise? </p>
                            <div class="selectgroup selectgroup-pills">
                                <label class="selectgroup-item">
                                    <input type="radio" name="criminal" value="Yes" class="selectgroup-input" required>
                                    <span class="selectgroup-button">Yes</span>
                                </label>
                                <label class="selectgroup-item">
                                    <input type="radio" name="criminal" value="No" class="selectgroup-input" required>
                                    <span class="selectgroup-button">No</span>
                                </label>
                            </div>
                        </div><!-- From Group Close -->
                    </div><!-- SingleQuiz Close -->

                    <div class="single-quiz">
                        <div class="form-group">
                            <p>2. Do you intend on engaging any criminal activity or enterprise in the U.S.? </p>
                            <div class="selectgroup selectgroup-pills">
                                <label class="selectgroup-item">
                                    <input type="radio" name="enterprise" value="Yes" class="selectgroup-input" required>
                                    <span class="selectgroup-button">Yes</span>
                                </label>
                                <label class="selectgroup-item">
                                    <input type="radio" name="enterprise" value="No" class="selectgroup-input" required>
                                    <span class="selectgroup-button">No</span>
                                </label>
                            </div>
                        </div><!-- From Group Close -->
                    </div><!-- SingleQuiz Close -->

                    <div class="single-quiz">
                        <div class="form-group">
                            <p>3. Do you intend to engage in any activity against the U.S. or U.S. allies? </p>
                            <div class="selectgroup selectgroup-pills">
                                <label class="selectgroup-item">
                                    <input type="radio" name="engage" value="Yes" class="selectgroup-input" required>
                                    <span class="selectgroup-button">Yes</span>
                                </label>
                                <label class="selectgroup-item">
                                    <input type="radio" name="engage" value="No" class="selectgroup-input" required>
                                    <span class="selectgroup-button">No</span>
                                </label>
                            </div>
                        </div><!-- From Group Close -->
                    </div><!-- SingleQuiz Close -->

                </div><!-- registration wizard close -->

                <div class="complete-btn text-center mt-4">
                    <button type="submit" class="btn btn-danger">Complete Questionnaire <i class="icofont-arrow-right"></i></button> 
                </div>
            </form>    




            </div><!-- col close -->

        </div><!-- row close -->
    </div>
</section>
@endsection

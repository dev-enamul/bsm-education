<section class="free-consultation-area">
    <div class="container"> 
         
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12"> 
                <div class="fc-content position-relative">
                    <h2 class="font-weight-normal">Latest News</h2>
                    <iframe src="{{$key[17]->val}}" width="500" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                    <button class="edit button-1 top_left" id="edit_button" onclick="getEditModal(17,'textarea')" style='top:56px'>
                        <span class="edit-icon"></span>
                    </button>
                </div><!-- logo box close -->
            </div><!-- col close -->
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="free-consultation">
                    <h2>Free Consultation</h2>
                    <p class="position-relative">{!!$key[10]->val??''!!} 
                        <button class="edit button-1 top_right" id="edit_button" onclick="getEditModal(10,'textarea')">
                            <span class="edit-icon"></span>
                        </button>
                    </p>
                    <p class="welcome_message d-none"></p>
                    <form action="{{route('message.store')}}" id="contactForm" method="post">
                        @csrf  
                        <div class="inputBox mt-4">
                            <label for="nameB">Full Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name" value="{{old('name')}}">
                            <span  class="h6 text-white visitor_name d-none">Please Write Your Name</span>
                        </div>
                        <div class="inputBox">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control" id="phone" placeholder="Enter your phone number" name="phone" value="{{old('phone')}}" required>
                            <span  class="h6 text-white visitor_phone d-none">Please Enter Your Phone Number</span>
                        </div>
                        <div class="inputBox">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter your email" name="email" value="{{old('email')}}">
                            <span  class="h6 text-white visitor_email d-none">Please Write Your Valid Email</span>
                        </div>
                        <div class="inputBox">
                            <label for="message">Message</label>
                            <textarea name="message" id="message" cols="30" rows="5" class="form-control" placeholder="Write feel free">{{old('message')}}</textarea>
                            <span  class="h6 text-white visitor_message d-none">Please Write Your Message</span>
                        </div>
                        <div class="inputBox">
                            <button id="submit-button" type="button" class="button-2">Submit Now <i class="icofont-arrow-right"></i></button>
                        </div>
                    </form>
                </div><!-- logo box close -->
            </div><!-- col close -->

        </div>
    </div>
</section><!-- fa area close -->
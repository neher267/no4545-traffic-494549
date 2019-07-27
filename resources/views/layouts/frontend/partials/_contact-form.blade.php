<div id="contact-form1" class="latest-area section-padding bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title-wrapper">
                    <div class="section-title">
                        <h3>Schedule Your FREE Consultaion</h3>
                        <p>Submit the contact form below to discuss how MEDIENTRY can help you/your children to get admitted into Top Medical Collages in Bangladesh</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-offset-1 col-md-10">
                @include('common.errors')
                <form action="{{ url('inquries') }}" method="post">
                    @csrf

                    <div class="form-row">                        
                        <div class="form-group col-md-6">
                            <label for="name">Full Name</label>
                            <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="email">Email Address</label>
                            <input name="email" type="email" class="form-control" id="email" placeholder="Email">
                        </div>
                    </div> 

                    <div class="form-row">     
                        <div class="form-group col-md-6">
                            <label for="inputState">Mobile Number</label>

                            <input name="mobile" type="text" class="form-control" id="college" placeholder="Your Mobile Number" required>
                        </div>                   
                        
                        <div class="form-group col-md-6">
                            <label for="college">Whatsapp</label>
                            <input name="whatsapp" type="text" class="form-control" id="college" placeholder="Whatsapp Number">
                        </div>
                    </div>

                    <div class="form-row">     
                        <div class="form-group col-md-6">
                            <label for="inputState">College Type</label>

                            <select name="college_type" id="inputState" class="form-control" required>
                                <option value="">Choose...</option>
                                <option value="MBBS">MBBS</option>
                                <option value="BDS">BDS</option>
                            </select>
                        </div>                   
                        
                        <div class="form-group col-md-6">
                            <label for="college">College name that you like to admit</label>
                            <input name="college" type="text" class="form-control" id="college" placeholder="Bangladeshi Medical College Name">
                        </div>
                    </div>                   

                    <!-- <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCity">City</label>
                            <input name="city" type="text" class="form-control" id="inputCity" placeholder="Your City">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="state">State</label>
                            <input name="state" type="text" class="form-control" id="state" placeholder="Your State">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputZip">Zip</label>
                            <input name="zip" type="text" class="form-control" id="inputZip" placeholder="Zip Code">
                        </div>
                    </div> -->


                    <div class="form-row">                        
                        <div class="form-group col-md-4">
                            <label for="state">State</label>
                            <input name="state" type="text" class="form-control" id="state" placeholder="Your State">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="passing_year">12<sup style="font-size: 10px"><strong>th</strong></sup> Class Passing Year</label>
                            <select name="passing_year" id="passing_year" class="form-control" required>
                                <option value="">Passing Year</option>
                                <?php $year = (int)date('Y'); ?>
                                @for($i=0; $i<5; $i++)
                                <option value="{{$year-$i}}">{{$year-$i}}</option>
                                @endfor
                            </select>
                        </div>

                        <div class="form-group col-md-2">
                            <label for="neet_score">NEET Score</label>
                            <input name="neet_score" type="text" class="form-control" id="neet_score" placeholder="Score">
                        </div>
                    </div>


                    <!-- <div class="form-row">
                        <div class="form-group col-md-12">
                            <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_KEY') }}"></div>
                        </div>
                    </div> -->
                    
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <div style="width: 215px; margin: auto;">
                                <button 
                                type="submit" 
                                class="btn btn-primary" 
                                style="margin-top: 35px; background: #2d5930 ">
                                    Apply for FREE Consultaion
                                </button>
                            </div>
                        </div>                        
                    </div>                    
                </form>
            </div>
                
        </div>
    </div>
</div>

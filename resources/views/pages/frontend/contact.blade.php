@extends('layouts.frontend.app')

@section('content')
<!--Google Map Area Start-->
<div class="google-map-area">
    <!--  Map Section -->
    <div id="contacts" class="map-area">
        <!-- <div id="googleMap" style="width:100%;height:485px;filter: grayscale(100%);-webkit-filter: grayscale(100%);"></div> -->
        <div style="padding-top: 3px;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.9607807797242!2d90.39127801498198!3d23.78441088457252!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c72f1212ee6d%3A0x6c53a09668363f1b!2sMedientry+Bangladesh!5e0!3m2!1sen!2sbd!4v1559121836695!5m2!1sen!2sbd" width="100%" height="485" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
</div>
<!--End of Google Map Area-->
<!--Contact Form Area Start-->
<div class="contact-form-area section-padding">
    <div class="container">
        <div class="row" style="width: 90%; margin: auto;">
            <div class="col-md-12">
                <h4 class="contact-title text-center" style="font-size: 30px">Contact</h4>
                <hr>
            </div>
            <div class="col-md-4">
                <h4 class="contact-title">Bangladesh</h4>
                <div class="contact-text">
                    <p><span class="c-icon"><i class="zmdi zmdi-phone"></i></span><span class="c-text">{{ config('plc.mobile') }}</span></p>
                    <p><span class="c-icon"><i class="zmdi zmdi-email"></i></span><span class="c-text">{{ config('plc.email') }}</span></p>
                    <p><span class="c-icon"><i class="zmdi zmdi-pin"></i></span>
                        <?php echo html_entity_decode(config('plc.address')) ?>
                    </p>
                </div>
            </div>  

            <div class="col-md-4">
                <h4 class="contact-title">India</h4>
                <div class="contact-text">
                    <p>
                        <span class="c-icon"><i class="zmdi zmdi-phone"></i></span><span class="c-text">{{ config('plc.mobile-i') }}</span>
                    </p>
                    <p>
                        <span class="c-icon"><i class="zmdi zmdi-email"></i></span>
                        <span class="c-text">soumo@medientrybd.com</span>
                    </p>
                    
                    
                    <p>
                        <span class="c-icon"><i class="zmdi zmdi-pin"></i></span>
                        <?php echo html_entity_decode(config('plc.address-i')) ?>
                    </p>
                </div>
            </div> 

            <div class="col-md-4">
                <h4 class="contact-title">Singapore</h4>
                <div class="contact-text">
                    <p>
                        <span class="c-icon"><i class="zmdi zmdi-phone"></i></span>
                        <span class="c-text">{{ config('plc.mobile-s') }}</span>
                    </p>
                    
                    <p>
                        <span class="c-icon"><i class="zmdi zmdi-pin"></i></span>
                        <?php echo html_entity_decode(config('plc.address-s')) ?> 
                    </p>
                </div>
            </div>          
        </div>
    </div>
</div>
<!--End of Contact Form-->
@endsection
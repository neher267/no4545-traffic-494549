<!-- Footer Widget Area Start -->
<div class="footer-widget-area">
    <div class="container">
        <div class="row">

            <div class="col-md-3 col-sm-4">
                <div class="single-footer-widget">
                    <div class="footer-logo" style="margin-bottom: 0px;">
                        <a href="{{ url('/') }}"><img style="height: 75px; position: relative; top: -15px;" src="{{ asset('public/frontend/img/logo/footer.png') }}" alt=""></a>
                    </div>
                    <p style="position: relative; top: -5px;">
                        <span class="bold">Footer Txt</span>

                    </p>
                    <div class="social-icons">
                        <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                        <a href="#"><i class="zmdi zmdi-rss"></i></a>
                        <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 hidden-sm">
                <div class="single-footer-widget" style="padding-left: 25px;">
                    <h3>Useful Links</h3>
                    <ul class="footer-list">
                        <li><a href="{{ url('about') }}">About Us</a></li>
                    </ul>
                </div>
            </div>


            <div class="col-md-3 col-sm-4">
                <div class="single-footer-widget">
                    <h3 class="text-center">QR Code</h3>

                    <div class="footer-logo">
                        <img src="{{ asset('public/frontend/img/qrcode.png') }}">
                    </div>  
                </div>
            </div>

            <div class="col-md-3 col-sm-4">
                <div class="single-footer-widget">
                    <h3 class="text-center" style="padding-right: 44px;">Contact</h3>
                    <span style="margin-top: -7px;">
                        <i class="fa fa-map-marker"></i>
                        <span>1</span><br/>
                        <span style="margin-left: 35px">2</span><br/>
                        <span style="margin-left: 35px">3</span>
                    </span>

                    <span style="margin-top: -7px;"><i class="fa fa-whatsapp"></i>                        
                        <a 
                            href="whatsapp://send?text=Hello Medientry!&phone=+8801713456910" 
                            style="color: #fff">
                            {{ config('plc.w-app') }}
                        </a>
                    </span>

                    <span style="margin-top: -7px;"><i class="fa fa-phone"></i>
                        {{ config('plc.mobile') }}
                    </span>

                    <span style="margin-top: -7px;"><i class="fa fa-skype"></i>                        
                        <a 
                            href="skype:-medientry-?chat" 
                            style="color: #fff">
                            {{ config('plc.skype') }}
                        </a>
                    </span>

                    <span style="margin-top: -7px;"><i class="zmdi zmdi-email"></i>
                        
                        <a 
                            href="mailto:{{config('plc.email')}}" 
                            style="color: #fff">
                            {{ config('plc.email') }}
                        </a>
                    </span>
                                      
                </div>
            </div>
        </div>
    </div>
</div>
<!--End of Footer Widget Area-->
<!--Footer Area Start-->
<footer class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-7">
                <span>Copyright &copy; {{ config('app.name') }} {{ date('Y') }}. All right reserved. </span>
            </div>
            <div class="col-md-6 col-sm-5">
                <div class="column-right">
                    <span><a href="{{url('privacy-policy')}}">Privacy Policy</a></span>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--End of Footer Area
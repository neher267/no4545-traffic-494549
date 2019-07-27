<div class="header-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-5 col-sm-5 hidden-xs">
                <span>Have any question? <i class="zmdi zmdi-phone" style="padding: 0px 5px"></i> {{ config('plc.mobile') }} | </span>
                <span>
                    <i class="zmdi zmdi-email" style="padding: 0px 3px"></i> 
                    <a href="mailto:{{config('plc.email')}}" style="color: #fff">{{ config('plc.email') }}</a>
                </span>
            </div>
            <div class="col-lg-6 col-md-7 col-sm-7 col-xs-12" style="height: 50px">
                <div class="header-top-right">                    

                    <div class="content">
                        <a href="whatsapp://send?text=Hello Medientry!&phone=+8801713456910" style="font-size: 15px;">
                            <img src="{{asset('public/images/whatsapp.png')}}" style="height: 22px">
                            Whatsapp - {{ config('plc.w-app') }}
                        </a> 
                    </div>

                    <div class="content hidden-xs">
                        <a href="skype:-medientry-?chat" style="font-size: 15px;">
                            <img src="{{asset('public/images/skype.png')}}" style="height: 22px">

                            Skype - {{ config('plc.skype') }}
                        </a>
                    </div>

                    <!-- <div class="content">
                        <a href="#">
                            <img src="{{asset('public/images/facebook.png')}}" style="height: 21px">
                            &nbsp;
                        </a>
                    </div> -->
                </div>
                <!-- <span class="hidden-xs" style="position: relative;left: 112px;top: -52px; font-weight: bold;">Just Whatsapp</span> 

                <span class="hidden-xs" style="position: relative;left: 200px;top: -52px; font-weight: bold;">Mail Us Today</span>  -->
            </div>
        </div>
    </div>
</div>
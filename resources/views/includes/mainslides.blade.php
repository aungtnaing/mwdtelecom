  
<section id="slider" class="page">
    <section class="section padding-off">
        <div id="layerslider-container">
            <div id="layerslider">
                @foreach($mainslides as $mainslide)
                
                <div class="ls-slide" style="slidedirection: right; durationin: 1500; durationout: 1500; easingin: easeInOutQuint; timeshift: -500;"> <img alt="" class="ls-bg" src="{{ $mainslide->photourl1 }}">
                    <h1 class="ls-s2 align-center" style="top: 43%; left: 180px; slidedirection : top; slideoutdirection : fade; scaleout : 0.75; durationin : 2000; durationout : 1000; easingin : easeInOutQuint; easingout : easeInOutQuint;">
                        {{ $mainslide->title }}
                    </h1>
                    <h1 class="ls-s2 align-center" style="top: 57%; left: 260px; slidedirection : bottom; slideoutdirection : fade; scaleout : 0.75; durationin : 2000; durationout : 1000; easingin : easeInOutQuint; easingout : easeInOutQuint;">
                        {{ $mainslide->stitle }}
                    </h1> 
                </div>
                @endforeach
            </div>
            <!--/ #layerslider-->
        </div>
        <!--/ #layerslider-container-->
    </section>
    <!--/ .section-->
</section>
        <!--  end Layerslider  -->
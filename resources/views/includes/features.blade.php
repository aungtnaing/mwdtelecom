
<div id="feature" class="service-area bg-2">
  <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="single-service-container">

                @foreach($categorys as $category)
                <div class="single-service-item">
                    <div class="service-icon">
                        <div class="service-icon-cell">
                            <img src="{{ $category->photourl1 }}" alt="">
                        </div>
                    </div>
                    <div class="service-text">
                        <span>{{ $category->name }}</span>
                       <!--  <span>VOIP</span> -->
                    </div>
                </div>
                @endforeach
              
            </div>
        </div>
    </div>
    <div class="service-section">
        <div class="row">
            <div class="col-lg-offset-6 col-lg-6 col-md-8 col-md-offset-4 col-sm-12 col-xs-12">
                <div class="service-container">
                    <h2>Why Chose Us</h2>
                    <div class="service-column">
                        
                    @foreach($categorys as $category)
                        <div class="service-item">
                            <h3>{{ $category->name }}</h3>
                            <p><?php echo $category->description; ?></p>
                        </div>
                    @endforeach

                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
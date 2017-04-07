			
<section id="content">
	<div class="section topmargin nobottommargin nobottomborder">
		<div class="container clearfix">
			<div class="heading-block center nomargin">
				<h3>အထူးအင်္ဂါရပ်များ</h3>
			</div>
		</div>
	</div>

	<div id="portfolio" class="portfolio portfolio-nomargin grid-container portfolio-notitle portfolio-full grid-container clearfix">

		@foreach($specialfeatures as $specialfeature)
		<article class="portfolio-item pf-media pf-icons">
			<div class="portfolio-image">
				<a href="portfolio-single.html">
					<img src="{{ $specialfeature->photourl2 }}" alt="Open Imagination">
				</a>
				<div class="portfolio-overlay">
					<a href="{{ $specialfeature->photourl1 }}" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
					<a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
				</div>
			</div>
			<div class="portfolio-desc">
				<h3><a href="portfolio-single.html">{{ $specialfeature->mname }}</a></h3>
				<span><?php echo substr($specialfeature->mdescription,0, 20) ?></span>
			</div>
		</article>

		@endforeach



	</div>




</section>
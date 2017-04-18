<div class="col_full nobottommargin clearfix">

	<div class="fancy-title title-border">
		<h3>Check In</h3>
	</div>

	@foreach($checkins as $checkin)
	<?php
	$tcmt = 0;
	$tcmt = count($checkin->comments);
	foreach($checkin->comments as $cmt) 
	{
		$tcmt = $tcmt + count($cmt->replycomments);
	}
	?>
	<div class="col_one_third">
		<div class="ipost clearfix">
			<div class="entry-image">
				<a href="{{ $checkin->photourl1 }}"><img class="image_fade" src="{{ $checkin->photourl2 }}" alt="Image"></a>
			</div>
			<div class="entry-title">
				<h3><a href="{{ url('/postdetails', $checkin->id) }}">{{ $checkin->name }}</a></h3>
			</div>
			<ul class="entry-meta clearfix">
				<li><i class="icon-calendar3"></i>{{ $checkin->created_at }}</li>
				<li><a href="{{ url('/postdetails', $checkin->id) }}"><i class="icon-comments"></i>{{ $tcmt }}</a></li>
			</ul>
			<div class="entry-content">
				<p><?php echo substr($checkin->description,0, 200) ?>...</p>
			</div>
		</div>
	</div>
	@endforeach

	
</div>	
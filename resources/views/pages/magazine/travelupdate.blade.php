<div class="col_full bottommargin-lg clearfix">
						<div class="fancy-title title-border">
							<h3>Travel Sector Update</h3>
						</div>
						@if(count($travelsectorposts)>0)
						<?php
							$tcmt = count($travelsectorposts[0]->comments);
							foreach($travelsectorposts[0]->comments as $cmt) 
							{
							$tcmt = $tcmt + count($cmt->replycomments);
							}
							?>
						<div class="ipost clearfix">
							<div class="col_half bottommargin-sm">
								<div class="entry-image">
									<a href="{{ $travelsectorposts[0]->photourl1 }}"><img class="image_fade" src="{{ $travelsectorposts[0]->photourl2 }}" alt="Image"></a>
								</div>
							</div>
							<div class="col_half bottommargin-sm col_last">
								<div class="entry-title">
									<h3><a href="{{ url('/postdetails', $travelsectorposts[0]->id) }}">{{ $travelsectorposts[0]->name }}</a></h3>
								</div>
								<ul class="entry-meta clearfix">
									<li><i class="icon-calendar3"></i>{{ $travelsectorposts[0]->created_at }}</li>
									<li><a href="{{ url('/postdetails', $travelsectorposts[0]->id) }}"><i class="icon-comments"></i>{{ $tcmt }}</a></li>
									<li><a href="{{ $travelsectorposts[0]->photourl1 }}"><i class="icon-camera-retro"></i></a></li>
								</ul>
								<div class="entry-content">
									<p><?php echo substr($travelsectorposts[0]->description,0, 200) ?>...</p>
								</div>
							</div>
						</div>
						@endif

						<div class="clear"></div>
						
						<div class="col_half nobottommargin">
							@if(count($travelsectorposts)>1)
							<?php
							$tcmt = count($travelsectorposts[1]->comments);
							foreach($travelsectorposts[1]->comments as $cmt) 
							{
							$tcmt = $tcmt + count($cmt->replycomments);
							}
							?>
							<div class="spost clearfix">
								<div class="entry-image">
									<a href="{{ $travelsectorposts[1]->photourl1 }}"><img src="{{ $travelsectorposts[1]->photourl2 }}" alt=""></a>
								</div>
								<div class="entry-c">
									<div class="entry-title">
										<h4><a href="{{ url('/postdetails', $travelsectorposts[1]->id) }}">{{ $travelsectorposts[1]->name }}</a></h4>
									</div>
									<ul class="entry-meta">
										<li><i class="icon-calendar3"></i>{{ $travelsectorposts[1]->created_at }}</li>
										<li><a href="{{ url('/postdetails', $travelsectorposts[1]->id) }}"><i class="icon-comments"></i> {{ $tcmt }}</a></li>
									</ul>
								</div>
							</div>

							@endif

								@if(count($travelsectorposts)>2)
							<?php
							$tcmt = count($travelsectorposts[2]->comments);
							foreach($travelsectorposts[2]->comments as $cmt) 
							{
							$tcmt = $tcmt + count($cmt->replycomments);
							}
							?>
							<div class="spost clearfix">
								<div class="entry-image">
									<a href="{{ $travelsectorposts[2]->photourl1 }}"><img src="{{ $travelsectorposts[2]->photourl2 }}" alt=""></a>
								</div>
								<div class="entry-c">
									<div class="entry-title">
										<h4><a href="{{ url('/postdetails', $travelsectorposts[2]->id) }}">{{ $travelsectorposts[2]->name }}</a></h4>
									</div>
									<ul class="entry-meta">
										<li><i class="icon-calendar3"></i>{{ $travelsectorposts[2]->created_at }}</li>
										<li><a href="{{ url('/postdetails', $travelsectorposts[2]->id) }}"><i class="icon-comments"></i> {{ $tcmt }}</a></li>
									</ul>
								</div>
							</div>

							@endif


						</div>

						

						<div class="col_half nobottommargin col_last">

								@if(count($travelsectorposts)>3)
							<?php
							$tcmt = count($travelsectorposts[3]->comments);
							foreach($travelsectorposts[3]->comments as $cmt) 
							{
							$tcmt = $tcmt + count($cmt->replycomments);
							}
							?>
							<div class="spost clearfix">
								<div class="entry-image">
									<a href="{{ $travelsectorposts[3]->photourl1 }}"><img src="{{ $travelsectorposts[3]->photourl2 }}" alt=""></a>
								</div>
								<div class="entry-c">
									<div class="entry-title">
										<h4><a href="{{ url('/postdetails', $travelsectorposts[3]->id) }}">{{ $travelsectorposts[3]->name }}</a></h4>
									</div>
									<ul class="entry-meta">
										<li><i class="icon-calendar3"></i>{{ $travelsectorposts[3]->created_at }}</li>
										<li><a href="{{ url('/postdetails', $travelsectorposts[3]->id) }}"><i class="icon-comments"></i> {{ $tcmt }}</a></li>
									</ul>
								</div>
							</div>

							@endif


							@if(count($travelsectorposts)>4)
							<?php
							$tcmt = count($travelsectorposts[4]->comments);
							foreach($travelsectorposts[4]->comments as $cmt) 
							{
							$tcmt = $tcmt + count($cmt->replycomments);
							}
							?>
							<div class="spost clearfix">
								<div class="entry-image">
									<a href="{{ $travelsectorposts[4]->photourl1 }}"><img src="{{ $travelsectorposts[4]->photourl2 }}" alt=""></a>
								</div>
								<div class="entry-c">
									<div class="entry-title">
										<h4><a href="{{ url('/postdetails', $travelsectorposts[4]->id) }}">{{ $travelsectorposts[4]->name }}</a></h4>
									</div>
									<ul class="entry-meta">
										<li><i class="icon-calendar3"></i>{{ $travelsectorposts[4]->created_at }}</li>
										<li><a href="{{ url('/postdetails', $travelsectorposts[4]->id) }}"><i class="icon-comments"></i> {{ $tcmt }}</a></li>
									</ul>
								</div>
							</div>

							@endif


						</div>

					</div>
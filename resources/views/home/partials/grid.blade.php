<div class="Content">
	<h1 class="m-t-40">Grid</h1>
	<div class="Grid m-t-20">
		@for($i=1;$i<=12;$i++)
			<div class="Card Column p-10">{{$i}}</div>
		@endfor
	</div>

	<h2 class="m-t-40">Grid-spaced</h2>
	<div class="Grid is-spaced m-t-20">
		@for($i=1;$i<=12;$i++)
			<div class="Card Column p-10">{{$i}}</div>
		@endfor
	</div>

	<h2 class="m-t-40">Grid with widths</h2>
	<div class="Grid is-spaced m-t-20">
		@for($i=1;$i<=12;$i++)
			<?php $y = $i;?>
			<div class="Card Column is-{{$i}}-wide Background--Secondary p-10">Is {{$i}} Wide</div>
			@for(; $y<12; $y++)
				<div class="Card Column p-10">auto</div>
			@endfor
		@endfor
	</div>
</div><!-- Content -->
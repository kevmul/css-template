<div class="Content">
	<h1>Flex Grid</h1>
	<div class="Grid--Flex">
		@for($i=1;$i<=12;$i++)
			<div class="Card Column p-10">{{$i}}</div>
		@endfor
	</div>

	<h2 class="m-t-40">Grid-spaced</h2>
	<div class="Grid--Flex is-spaced m-t-20">
		@for($i=1;$i<=12;$i++)
			<div class="Card Column p-10">{{$i}}</div>
		@endfor
	</div>

	<h2 class="m-t-40">Grid with widths</h2>
	@for($i=1;$i<=12;$i++)
		<div class="Grid--Flex is-spaced m-t-20">
			<?php $y = $i;?>
			<div class="Card Column is-{{$i}}-wide Background--Primary p-10">Is {{$i}} Wide</div>
			@for(; $y<12; $y++)
				<div class="Column Card p-10">auto</div>
			@endfor
		</div>
	@endfor
        <div class="Grid--Flex is-spaced m-t-20">
            <div class="Card Column is-6-wide Background--Primary p-10">Is 6 Wide</div>
            <div class="Card Column is-6-wide Background--Primary p-10">Is 6 Wide</div>
        </div>
</div>

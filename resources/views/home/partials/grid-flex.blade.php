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

<<<<<<< HEAD
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
=======
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
    <h5 class="m-t-40">Careful when creating layouts with Flex</h5>
    <h6>Don't use</h6>
    <div class="Grid--Flex is-spaced m-t-20">
        <div class="Card Column is-6-wide Background--Primary p-10">Is 6 Wide</div>
        <div class="Card Column is-6-wide Background--Primary p-10">Is 6 Wide</div>
    </div>
    <h5 class="m-t-20">Use</h5>
    <div class="Grid--Flex is-spaced m-t-20">
        <div class="Card Column Background--Secondary p-10">Allow to Flex</div>
        <div class="Card Column Background--Secondary p-10">Allow to Flex</div>
    </div>
>>>>>>> refs/remotes/origin/master
</div>

@extends('layout.master')

@section('content')
<div class="Hero Hero--Extra_Large Background--Primary">
	<div class="Container">
		<div class="Hero__body">
			<h1>Kevin's Code Template</h1>
			<h3>Hero</h3>
			<div class="Alert Background--Info m-t-30">
				<div class="Alert__content">
					<div class="Alert__title">
						We are going to create something GREAT
					</div>
					<div class="Alert__body">
						<p>( Or die trying )</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<section class="Section">
	<div class="Container">
		@include('home.partials.typography')
	</div>
</section>

<section class="Section">
	<div class="Container">
		@include('home.partials.colors')
	</div>
</section>

<section class="Section">
	<div class="Container">
		@include('home.partials.alerts')
	</div>
</section>
@endsection
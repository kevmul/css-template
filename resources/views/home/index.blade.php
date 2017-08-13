@extends('layout.master')

@section('content')
	<section class="Section">
		<div class="Container">
			<h1>Container</h1>
		</div>
	</section>
	<hr>
	<section class="Section">
		<div class="Container">
			<div class="Content">
				<div class="Content">
					<h1 class="Content__title">Colors</h1>
				</div>
				<div class="Grid Column-is-spaced">
					<div class="Column">
						<div class="Card">
							<div class="Hero Hero--Large Alert--Primary">
								<div class="Hero__body">
								</div>
							</div>
							<div class="Card__body">
								<p>
									Primary color
								</p>
							</div>
						</div>
					</div>
					<div class="Column">
						<div class="Card">
							<div class="Hero Hero--Large Alert--Secondary">
								<div class="Hero__body">
								</div>
							</div>
							<div class="Card__body">
								<p>
									Secondary color
								</p>
							</div>
						</div>
					</div>
					<div class="Column">
						<div class="Card">
							<div class="Hero Hero--Large Alert--Tertiary">
								<div class="Hero__body">
								</div>
							</div>
							<div class="Card__body">
								<p>
									Tertiary color
								</p>
							</div>
						</div>
					</div>
				</div><!-- Grid -->
				<div class="Grid Column-is-spaced m-t-30">
				<div class="Column">
						<div class="Card">
							<div class="Hero Alert">
								<div class="Hero__body Hero--Large">
								</div>
							</div>
							<div class="Card__body">
								<p>
									Default color
								</p>
							</div>
						</div>
					</div>
					<div class="Column">
						<div class="Card">
							<div class="Hero Alert--Info">
								<div class="Hero__body Hero--Large">
								</div>
							</div>
							<div class="Card__body">
								<p>
									Info color
								</p>
							</div>
						</div>
					</div>
					<div class="Column">
						<div class="Card">
							<div class="Hero Alert--Warning">
								<div class="Hero__body Hero--Large">
								</div>
							</div>
							<div class="Card__body">
								<p>
									Warning color
								</p>
							</div>
						</div>
					</div>
					<div class="Column">
						<div class="Card">
							<div class="Hero Alert--Success">
								<div class="Hero__body Hero--Large">
								</div>
							</div>
							<div class="Card__body">
								<p>
									Success color
								</p>
							</div>
						</div>
					</div>
					<div class="Column">
						<div class="Card">
							<div class="Hero Alert--Error">
								<div class="Hero__body Hero--Large">
								</div>
							</div>
							<div class="Card__body">
								<p>
									Error color
								</p>
							</div>
						</div>
					</div>
				</div><!-- Grid -->
			</div>
		</div>
	</section>
	<hr>
	<section class="Section">
		<div class="Container">
			<div class="Content">
				<div class="Content">
					<h1 class="Content__title">Typography</h1>
				</div>
				<h1>Header H1</h1>
				<h2>Header H2</h2>
				<h3>Header H3</h3>
				<h4>Header H4</h4>
				<h5>Header H5</h5>
				<h6>Header H6</h6>
			</div>
		</div>
	</section>
@endsection
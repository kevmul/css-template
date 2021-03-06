@extends('layout.master')

@section('content')
<div class="Hero Hero--Large Background--Primary d-flex flex-row align-center">
    <div class="Container flex">
        <div class="Hero__body Content">
            <h1>Kevin's Code Template</h1>
            <h3>Hero</h3>
            <div class="Alert Background--Tertiary m-t-30">
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

<!--|=====================================================
    | Typography
    |==================================================-->
<section class="Section">
    <div class="Container">
        @include('home.partials.typography')
    </div>
</section>

<!--|=====================================================
    | Typography columns
    |==================================================-->

<section class="Section">
    <div class="Container">
        @include('home.partials.text-column')
    </div>
</section>

<hr>

<!--|=====================================================
    | Colors
    |==================================================-->
<section class="Section">
    <div class="Container">
        @include('home.partials.colors')
    </div>
</section>
<hr>
<!--|=====================================================
    | Grid
    |==================================================-->
<section class="Section">
    <div class="Container">
        @include('home.partials.grid')
    </div>
</section>
<hr>
<!--|=====================================================
    | Flex Grid
    |==================================================-->
<section class="Section">
    <div class="Container">
        @include('home.partials.grid-flex')
    </div>
</section>
<hr>
<!--|=====================================================
    | Cards
    |==================================================-->
<section class="Section">
    <div class="Container">
        @include('home.partials.cards')
    </div>
</section>
<hr>
<!--|=====================================================
    | Alerts
    |==================================================-->
<section class="Section">
    <div class="Container">
        @include('home.partials.alerts')
    </div>
</section>
<hr>
<!--|=====================================================
    | Breakpoints
    |==================================================-->
<section class="Section">
    <div class="Container">
        @include('home.partials.breakpoints')
    </div>
</section>

<section class="m-b-100"></section>
@endsection

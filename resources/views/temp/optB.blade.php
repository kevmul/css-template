@extends('layout.temp')

@section('content')
    <div class="Container m-y-100">
        <div class="Card has-shadow">
            <div class="Hero">
                <img src="http://6701785a10be6a12bf1a-8be3273ef1328205d52238abe7f572e0.r36.cf2.rackcdn.com/images/emails/__Template_Images__/Hon_Header.jpg" alt="">
                <img src="/img/Hero.jpg" alt="">
            </div>
            <div class="Card__body">
                <h4>Hi Susan,</h4>
                <p>Thanks for your interest in additional information on a security system for your new home.</p>
                <p class="p-t-10">
                    One of our specialists will be reaching out to you and assist you in making your home security decision an informed one.
                </p>
                <br>
                <p>
                    Best regards,<br>
                    Porch Home Assistant
                </p>
            </div>
            <div class="Box p-x-20 p-y-30" style="text-align:center;font-size:0.9em;background-color:#444;color:white">
                <strong style="color:inherit;">Home Owners Network</strong>
                 330 Adam Jenkins Memorial Drive, Canton GA 30115
            </div><!-- footer -->
        </div>
        <div class="p-x-20 m-t-40" style="text-align: center; color: #666">
            You have received this email because you have subscribed to Home Owners Network as <strong >suzan@example.com</strong>. If you no longer wish to receive emails please unsubscribe.
        </div>
    </div>
@endsection
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
                    Please let us know when you would be available for one of our specialists to reach out and assist you in making your home security decision an informed one.
                </p>
                <div class="p-y-20">

                <h6>When is the best time for us to connect?</h6>
                <form action="POST" class="Form">
                    <div class="is-flex flex-row">

                    <div class="Form__group m-r-10">
                        <label for="date" class="Form__label">Date</label>
                        <input type="date" id="date" name="date" class="Form__input" min="{{$today->toDateString()}}" max="{{$future}}" value="{{$today->toDateString()}}">
                    </div>
                    <div class="Form__group">
                        <label for="time" class="Form__label">Time</label>

                        <div class="flex-row">
                            <select name="time" id="time">
                                @for($i=1;$i<=12;$i++)
                                    <option value="{{$i}}" {{$i == 3 ? "selected" : ""}}>{{$i}}</option>
                                @endfor
                            </select>
                            :
                            <select name="time" id="time">
                                <option value="00">00</option>
                                <option value="15">15</option>
                                <option value="30">30</option>
                                <option value="45">45</option>
                            </select>
                        </div>
                    </div>
                    </div>
                    <div class="Form__group flex-row">
                        <input type="radio" id="am" name="am/pm" class="Form__input" value="am">
                        <label for="am" class="Form__label">AM</label>
                    </div>
                    <div class="Form__group flex-row">
                        <input type="radio" id="pm" name="am/pm" class="Form__input" value="pm" checked="true">
                        <label for="pm" class="Form__label">PM</label>
                    </div>
<!--                     <div class="Form__group">
                        <range-slider></range-slider>
                    </div> -->
                    <div class="Form__group flex-row">
                        <button type="submit" name="Submit" class="Button Button--Primary is-rounded">Schedule Call</button>
                    </div>
                </form>
                </div>
                <p>
                    Best regards,<br>
                    Porch Home Assistant
                </p>
            </div><!-- Card__body -->
            <div class="Box p-x-20 p-y-30" style="text-align:center;font-size:0.9em;background-color:#444;color:white">
                <strong style="color:inherit;">Home Owners Network</strong>
                 330 Adam Jenkins Memorial Drive, Canton GA 30115
            </div><!-- footer -->
        </div><!-- Card -->
        <div class="p-x-20 m-t-40" style="text-align: center; color: #666">
            You have received this email because you have subscribed to Home Owners Network as <strong >suzan@example.com</strong>. If you no longer wish to receive emails please unsubscribe.
        </div>
    </div>
@endsection
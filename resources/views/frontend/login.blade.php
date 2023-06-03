@extends('frontend.layouts.master')
@section('content')

        <!--########################    ACCOUNT     #####################################-->
        <div class="account">
            <h4 class="account__heading">
                <!-- <span>Discover</span>.<span>Discuss</span>.<span>Promote</span>.<span>Repeat</span> -->
                Sign In Now!
            </h4>
            <form action="{{route('login.submit')}}" class="account__form" method="POST">
                @csrf
                
                <h6 class="account__form--heading">
                    Email Adddress:
                </h6>
                <div class="account__form--inputbox">
                    <input type="text" id="cemail" name="email" required class="account__form--textbox">
                </div>
                <h6 class="account__form--heading">
                    Password:
                </h6>
                <div class="account__form--inputbox">
                    <input type="password" name="password" required id="cpassword" class="account__form--textbox">
                </div>
                <button class="account__form--button">
                    Login
                </button>
            </form>
            
        </div>
       
@endsection
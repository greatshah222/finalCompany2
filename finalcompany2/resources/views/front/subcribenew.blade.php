@extends('layout.main')
@section('new')

<div class="newsletter-w3l-main">
    <br><br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br>


    <div class="col-md-6 col-xs-6 w3layouts-newsletter">
        <h6><i class="fa fa-envelope" aria-hidden="true"></i>Join our Newsletter</h6>
        <div class="agileinfo-newsletter">
            <form action="{{url('subscribe')}}" method="post">
                {{ csrf_field() }}

                <input type="email"	placeholder="Enter Your Email" name="email" id="email" required="" />
                <input type="submit" value="Join Us">
            </form>
        </div>
    </div>
    <div class="col-md-6 col-xs-6 w3l-news">
        <h6>Join Now</h6>
        <p>Subscribe to our Email and get Updates right in your inbox</p>
    </div>
    <div class="clearfix"> </div>
    <!-- //newsletter -->
</div>
    @endsection


@include('_includes.navbar.head')
<html>

<link href="{{asset('dist/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />

<body style="background-color: #eee">


<h2 style="color: #337ab7"><center>Contact Us</center></h2>
<br><br><br>
<div class="row">

<div class="w3layouts_mail_grid_right">
    <div class="container">


        <form action="{{ url('contactme') }}" method="post">
            {{ csrf_field() }}
            <div class="col-md-6 col-xs-6 wthree_contact_left_grid">
                <input type="text" name="name" placeholder="Name" id="name" required="">
                <input type="email" name="email" placeholder="Email" id="email" required="">
            </div>
            <div class="col-md-6 col-xs-6 wthree_contact_left_grid">
                <input type="text" name="telephone" placeholder="Telephone" id="telephone" required="">
                <input type="text" name="subject" placeholder="Subject" id="subject" required="">
            </div>
            <div class="clearfix"> </div>
            <textarea name="message" placeholder="Message..." id="message" required=""></textarea>
            <input type="submit" value="Submit">
            <input type="reset" value="Clear">
        </form>
    </div>
</div>
</div>








</body>
</html>











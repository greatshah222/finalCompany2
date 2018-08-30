@include('_includes.navbar.head')

        <!DOCTYPE html>
<html lang="en">
<head>
    <title>Card Payment Forms Responsive Widget Template :: W3layouts</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Card Payment Forms Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Meta tag Keywords -->
    <!-- css files -->
    <script src="https://js.stripe.com/v3/"></script>

    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="{{asset('css/creditly.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}"> <!-- Font-Awesome-Icons-CSS -->
    <!-- //css files -->
    <!-- Web Fonts -->
    <link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i&amp;subset=latin-ext" rel="stylesheet">
    <!-- //Web Fonts -->

</head>
<body>

<div class="main">

    <br><br>
    <div id="myAccordion" class="nl-accordion">
        <ul>
            <li>
                <input type="radio" id="nl-radio-1" name="nl-radio" class="nl-radio" checked="checked"/>
                <label class="nl-label" for="nl-radio-1">Card Payment</label>
                <div class="nl-content">
                    <div class="agileits_w3layouts_tab1 agileits_w3layouts_tab">
                        <form action="{{route('payment.store')}}" method="post" class="creditly-card-form agileinfo_form"  id="payment-form">
                            {{ csrf_field() }}
                            <section class="creditly-wrapper wthree w3_agileits_wrapper">
                                <div class="first-row form-group">

                                    <div class="controls">
                                        <label class="control-label">Name on Card</label>
                                        <input class="billing-address-name form-control" type="text" name="name" placeholder="John Smith" required="">
                                    </div>
                                    <div class="controls">
                                        <label class="control-label">Email Address</label>
                                        <input class="billing-address-name form-control" type="email" name="email" placeholder="Jinfo@mail.com" required="">
                                    </div>
                                    <div class="controls">
                                        <label class="control-label" for="card-element">
                                            Credit or debit card
                                        </label>
                                        <div id="card-element">
                                            <!-- A Stripe Element will be inserted here. -->
                                        </div>

                                        <!-- Used to display form errors. -->
                                        <div id="card-errors" role="alert"></div>
                                        <div class="clear"> </div>
                                    </div>
                                </div>
                                <br>

                                <button class="submit"><span>Make a payment <i class="fa fa-long-arrow-right" aria-hidden="true"></i></span></button>
                            </section>

                        </form>

                    </div>
                </div>
                <label class="nl-label" for="nl-radio-1">Donate $1</label>

            </li>
            <li>
                <input type="radio" id="nl-radio-2" name="nl-radio" class="nl-radio" />
                <label class="nl-label" for="nl-radio-2"> Use PayPal</label>
                <div class="check w3ls"></div>
                <div class="nl-content">
                    <div class="agileits_w3layouts_tab2 agileits_w3layouts_tab">
                        <h3>Don't Have an Account <a href="#">Register here</a></h3>
                        <form action="#" method="post">
                            <div class="creditly-wrapper wthree">
                                <input type="email" name="Email" placeholder="Email" required="">
                                <input type="password" name="Password" placeholder="Password" required="">
                                <input type="submit" value="Login">
                            </div>
                        </form>
                    </div>
                </div>
            </li>

        </ul>
    </div>

</div>
<br><br><br><br>            <br><br><br><br>






<!-- js scripts -->
<!-- js -->
<script>
    var stripe = Stripe('pk_test_FZz1641WpWy8vHCcYoxhtmVL');

    // Create an instance of Elements.
    var elements = stripe.elements();

    // Custom styling can be passed to options when creating an Element.
    // (Note that this demo uses a wider set of styles than the guide below.)
    var style = {
        base: {
            color: '#32325d',
            lineHeight: '18px',
            fontFamily: '\'"Josefin Sans", sans-serif\'',
            fontSmoothing: 'antialiased',
            fontSize: '16px',
            '::placeholder': {
                color: '#aab7c4'
            }
        },
        invalid: {
            color: '#fa755a',
            iconColor: '#fa755a'
        }
    };

    // Create an instance of the card Element.
    var card = elements.create('card',
        {style: style,
        hidePostalCode: true});

    // Add an instance of the card Element into the `card-element` <div>.
    card.mount('#card-element');

    // Handle real-time validation errors from the card Element.
    card.addEventListener('change', function(event) {
        var displayError = document.getElementById('card-errors');
        if (event.error) {
            displayError.textContent = event.error.message;
        } else {
            displayError.textContent = '';
        }
    });

    // Handle form submission.
    var form = document.getElementById('payment-form');
    form.addEventListener('submit', function(event) {
        event.preventDefault();


        stripe.createToken(card).then(function(result) {
            if (result.error) {
                // Inform the user if there was an error.
                var errorElement = document.getElementById('card-errors');
                errorElement.textContent = result.error.message;
            } else {
                // Send the token to your server.
                stripeTokenHandler(result.token);
            }
        });
    });
    function stripeTokenHandler(token) {
        // Insert the token ID into the form so it gets submitted to the server
        var form = document.getElementById('payment-form');
        var hiddenInput = document.createElement('input');
        hiddenInput.setAttribute('type', 'hidden');
        hiddenInput.setAttribute('name', 'stripeToken');
        hiddenInput.setAttribute('value', token.id);
        form.appendChild(hiddenInput);

        // Submit the form

       form.submit();
    }
</script>

<script type="text/javascript" src="{{asset('js/jquery-2.1.4.min.js')}}"></script>
<!-- //js -->
<!-- credit-card -->
<script type="text/javascript" src="{{asset('js/creditly.js')}}"></script>
</body>
</html>

<!-- //credit-card -->

<!-- //js scripts -->

























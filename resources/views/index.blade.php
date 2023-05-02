<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/favicon.png">

    <!-- All CSS -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/spacing.css">
    <link rel="stylesheet" href="assets/css/main.css">


    <title>Floko</title>
</head>

<body>

 <!-- Pricing Section Start  -->
 <section class="pricing-area">
    <div class="container">
        <div class="row">
           @foreach ($priceing as $priceing)
           <div class="col-xl-4">
            <div class="single-pricing">
                <div class="single-pricing-head pricing-bg-color-black">
                    <h3>{{$priceing->price_category}}</h3>
                    <p>{{$priceing->price_month}}</p>
                </div>
                <div class="single-pricing-list">
                        <ul>
                           @foreach ($priceing->items as $item)
                                <li><img src="./assets/img/icon/circle-1.png" alt="">
                                     <p>{{$item->facility}}</p>
                                </li>
                           @endforeach
                            {{-- <li><img src="./assets/img/icon/circle-1.png" alt="">
                                <p>Lunch and snack</p>
                            </li>
                            <li><img src="./assets/img/icon/circle-1.png" alt="">
                                <p>Free T-Shirt</p>
                            </li>
                            <li><img src="./assets/img/icon/circle-1.png" alt="">
                                <p>Meet Event Speaker</p>
                            </li>
                            <li><img src="./assets/img/icon/circle-1.png" alt="">
                                <p>Front Seat</p>
                            </li>
                            <li><img src="./assets/img/icon/circle-1.png" alt="">
                                <p>Certificate</p>
                            </li> --}}
                        </ul>
                </div>
                <div class="single-pricing-button">
                    <button>Get Your Ticket <img src="./assets/img/icon/ArrowRight.svg" alt=""></button>
                </div>
                </div>


            </div>
           @endforeach
            {{-- <div class="col-xl-4">
                <div class="single-pricing">
                    <div class="single-pricing-head pricing-bg-color-pink">
                        <h3>Premium</h3>
                        <p>$20/mo per member</p>
                    </div>
                    <div class="single-pricing-list">
                        <ul>
                            <li><img src="./assets/img/icon/circle-2.png" alt="">
                                <p>One day pas access all lecture</p>
                            </li>
                            <li><img src="./assets/img/icon/circle-2.png" alt="">
                                <p>Lunch and snack</p>
                            </li>
                            <li><img src="./assets/img/icon/circle-2.png" alt="">
                                <p>Free T-Shirt</p>
                            </li>
                            <li><img src="./assets/img/icon/circle-2.png" alt="">
                                <p>Meet Event Speaker</p>
                            </li>
                            <li><img src="./assets/img/icon/circle-2.png" alt="">
                                <p>Front Seat</p>
                            </li>
                            <li><img src="./assets/img/icon/circle-2.png" alt="">
                                <p>Certificate</p>
                            </li>
                        </ul>
                    </div>

                    <div class="single-pricing-button">
                        <button>Get Your Ticket <img src="./assets/img/icon/ArrowRight.svg" alt=""></button>
                    </div>
                </div>


            </div>
            <div class="col-xl-4">
                <div class="single-pricing">
                    <div class="single-pricing-head pricing-bg-color-green">
                        <h3>Enterprise</h3>
                        <p>$20/mo per member</p>
                    </div>
                    <div class="single-pricing-list">
                        <ul>
                            <li><img src="./assets/img/icon/circle-3.png" alt="">
                                <p>One day pas access all lecture</p>
                            </li>
                            <li><img src="./assets/img/icon/circle-3.png" alt="">
                                <p>Lunch and snack</p>
                            </li>
                            <li><img src="./assets/img/icon/circle-3.png" alt="">
                                <p>Free T-Shirt</p>
                            </li>
                            <li><img src="./assets/img/icon/circle-3.png" alt="">
                                <p>Meet Event Speaker</p>
                            </li>
                            <li><img src="./assets/img/icon/circle-3.png" alt="">
                                <p>Front Seat</p>
                            </li>
                            <li><img src="./assets/img/icon/circle-3.png" alt="">
                                <p>Certificate</p>
                            </li>
                        </ul>
                    </div>

                    <div class="single-pricing-button">
                        <button>Get Your Ticket <img src="./assets/img/icon/ArrowRight.svg" alt=""></button>
                    </div>
                </div>


            </div> --}}
        </div>
    </div>
</section>

<!-- Pricing Section End  -->





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src=" assets/js/jquery-3.5.1.min.js"></script>


    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="./assets/js/speaker.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>

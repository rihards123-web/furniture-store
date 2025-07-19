<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset ('css/landing.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Landing</title>
</head>
<body>
    <section class="landing">
    @include('partials.nav-bar')
        <div class="landing-container">
            
            <div class="landing-banner">
                <div class="landing-banner-intro">
                    <p>New Arrival</p>
                </div>
                <div class="landing-banner-heading">
                    <h2>Discover Our <br> New Collection</h2>
                </div>
                <div class="landing-banner-text">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>
                    Quia adipisci enim repellat.</p>
                </div>
                <div class="landing-banner-button">
                    <button>BUY NOW</button>
                </div>
            </div>
        </div>
    </section>
    <section class="browse-range">
        <div class="browse-range-heading">
            <h2>Browse The Range</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
        <div class="browse-range-img-container">
            <div class="img-container1">
                <img src="{{asset ('images/dining-img.svg')}}" alt="">
                <p>Dining</p>
            </div>
            <div class="img-container2">
                <img src="{{asset ('images/living-room-img.svg')}}" alt="">
                <p>Living</p>
            </div>
            <div class="img-container3">
                <img src="{{asset ('images/bedroom-img.svg')}}" alt="">
                <p>Bedroom</p>
            </div>
        </div>
    </section>
</body>
</html>
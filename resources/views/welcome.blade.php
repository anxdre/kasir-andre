<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Kasirku</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #ffffff;
            font-family: 'Nunito', sans-serif;
            color: #484848;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 0px;
            top: 0px;
            width: 100%;
            height: 52px;
            line-height: 50px;
            text-align: right;
            background-color: #ee7500;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 56px;
        }

        .links > a {
            color: #ffffff;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 19px;
        }
    </style>
</head>
<body>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="http://www.joeclayallday.com/images/clive-page-intro.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="http://www.joeclayallday.com/images/clive-work-modal.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="http://www.joeclayallday.com/images/clive-work1.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="http://www.joeclayallday.com/images/clive-work4.png" class="d-block w-100" alt="...">
        </div>
    </div>
</div>

@if (Route::has('login'))
    <div class="top-right links">
        @auth
            <a href="#" onclick="myProfile()">Profile</a>
            <a href="{{ route('products') }}">Transaction</a>
            <a href="{{ route('transaction') }}">History Transaction</a>
        @else
            <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}">Register</a>
            @endif
        @endauth
    </div>
@endif

<div class="content">
    <div class="title m-b-md">
        About Us
    </div>
    <div class="m-b-md" style="text-decoration: underline">
        Semua content yang ada didalam web ini hanya bertujuan sebagai media pembelajaran,
        baik itu gambar maupun tulisan bersumber dari internet dan mempunyai hak cipta.
    </div>

    <div class="m-b-md">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras elementum felis purus, a pretium turpis vestibulum
        a.
        Praesent tincidunt commodo lorem, eu tempus est ullamcorper eget. Orci varius natoque penatibus et magnis dis
        parturient montes, nascetur ridiculus mus. Integer congue arcu ac ligula laoreet dignissim. Sed consequat purus
        in
        justo sagittis mollis. Fusce at gravida mauris, et lacinia purus. Duis porta dictum arcu ut malesuada. Donec leo
        lorem, iaculis quis varius et, euismod at leo. Ut non ultricies tortor. Fusce porttitor ex porttitor rutrum
        dapibus.
        Aenean nec ligula sed magna consequat mollis. Nunc justo ligula, sollicitudin nec odio et, vestibulum molestie
        lectus. Integer congue nisl quis felis cursus lobortis. Donec eu ligula neque. Vivamus porttitor hendrerit ante
        at
        accumsan.

        Etiam lorem diam, pulvinar quis lorem et, egestas dapibus leo. Integer volutpat urna ac eros ullamcorper
        commodo.
        Sed consequat velit id dolor pharetra, ac molestie mi egestas. Interdum et malesuada fames ac ante ipsum primis
        in
        faucibus. Nullam eget tempus tellus, id ornare est. Nulla euismod et turpis eu ultricies. Curabitur vitae
        euismod
        nisl, non laoreet lorem. Nunc tempus sapien a mauris laoreet, vel sagittis velit mattis. Mauris dapibus
        fringilla
        ante quis feugiat. Quisque in nisl et est aliquam finibus. Proin ut euismod magna.
    </div>
    <div class="m-b-md">
        <a href="https://telegram.me/anxdrex" style="margin-right: 16px">Telegram</a>
        <a href="https://www.instagram.com/_anxdre/" style="margin-right: 16px">Instagram</a>
        <a href="https://www.linkedin.com/in/anxdre/" style="margin-right: 16px">LinkedIn</a>
    </div>
</div>
</div>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

<script>
    function myProfile() {
        Swal.fire({
            title: 'Aduh Lupa Blom Selesai Fiturnya',
            type: 'warning',
            background: '#fff url(https://thumbs.gfycat.com/HighUnhappyBalloonfish-size_restricted.gif)'
        })
    }
</script>


</body>
</html>

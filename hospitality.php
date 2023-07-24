<!doctype html>
<html>

<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
        integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Abel&family=Encode+Sans+Condensed:wght@300&family=Georama:wght@200&family=Oranienbaum&family=Smooch+Sans:wght@300&family=Yanone+Kaffeesatz:wght@300&display=swap"
        rel="stylesheet">
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>


</head>
<!-- WhatsHelp.io widget -->
<script type="text/javascript">
(function() {
    var options = {
        whatsapp: "  +91 9910878709 ", // WhatsApp number
        call_to_action: "Message us", // Call to action
        position: "left", // Position may be 'right' or 'left'
    };
    var proto = document.location.protocol,
        host = "whatshelp.io",
        url = proto + "//static." + host;
    var s = document.createElement('script');
    s.type = 'text/javascript';
    s.async = true;
    s.src = url + '/widget-send-button/js/init.js';
    s.onload = function() {
        WhWidgetSendButton.init(host, proto, options);
    };
    var x = document.getElementsByTagName('script')[0];
    x.parentNode.insertBefore(s, x);
})();
</script>
<!-- /WhatsHelp.io widget -->

<style>
.popup {
    width: 33.33%;
    height: auto;
    padding: 20px;
    position: absolute;
    background-color: #ddd;
    z-index: 2222;

    border-radius: 5px;
    box-shadow: 0px 1px 1px #ddd;
    border-radius: 5px;
    padding-bottom: 40px;
    top: 10%;
    left: 30%;
    display: none;
    animation-name: m;
    animation-duration: 1s;
    animation-iteration-count: 1;
    animation-fill-mode: forwards;

}

.popup input {
    width: 100%;
    margin-top: 30px;
    padding: 10px;
}

@keyframes m {
    from {
        top: 10%;
    }

    to {
        top: 10%;
    }
}

td {
    padding: 10px;
}


ul.breadcrumb {
    padding: 10px 16px;
    list-style: none;
    background-color: #fff;
}

ul.breadcrumb li {
    display: inline;
    font-size: 18px;
}

ul.breadcrumb li+li:before {
    padding: 8px;
    color: black;
    content: "/\00a0";
}

ul.breadcrumb li a {
    color: #0275d8;
    text-decoration: none;
}

ul.breadcrumb li a:hover {
    color: #01447e;
    text-decoration: underline;
}

.inr-sign::before {
    content: "\20B9";
}
</style>

<style>
.anim1 {
    position: relative;
    animation-name: anim1;
    animation-duration: 2s;
    animation-fill-mode: forwards;
    animation-iteration-count: 1;
    animation-timing-function: ease-in;

}

.anim2 {
    position: relative;
    animation-name: anim2;
    animation-duration: 2s;
    animation-iteration-count: 1;
    animation-fill-mode: forwards;
    animation-timing-function: ease-in;

}

@keyframes anim1 {
    from {
        left: -100px;
        opacity: 0
    }

    to {
        left: 0px;
        opacity: 1
    }
}

@keyframes anim2 {
    from {
        right: -100px;
        opacity: 0;
    }

    to {
        right: 0px;
        opacity: 1
    }
}
</style>


<style>
.slider--container {
    position: relative;
    /* "relative", so that h1 and images can be set absolutely */
    height: 40vh;
    /* Adjust the height to your needs here */
    width: 40vw;
    /* Adjust the width to your needs here */
    margin: 0 auto;
    overflow: hidden;
    border-radius: 20px;
    box-shadow: 0 0 .1rem .125rem rgba(0, 0, 0, 0.25);
}

.slider--heading {
    position: absolute;
    top: 50%;
    left: 50%;
    padding: 1rem;
    z-index: 99;
    font: 30 1.25rem/1.25 'Georama', sans-serif;
    text-align: center;
    background-color: rgba(255, 255, 255, 0.5);
    color: rgba(0, 0, 0, 0.5);
    transform: translate3d(-50%, -50%, 0);
}

.slider--heading h6 {
    font: 30 1.25rem/1.25'Georama', sans-serif;
    text-transform: uppercase;
    color: rgba(0, 0, 0, .5);
}

/* Responsive styles for the heading */
/* ===== == = === 30em (480px) === = == ===== */
@media only screen and (min-width : 10em) {
    .slider--heading h6 {
        font-size: 1.5rem;
    }
}

/* ===== == = === 48em (768px) === = == ===== */
@media only screen and (min-width : 48em) {
    .slider--heading h6 {
        font-size: 1.75rem;
    }
}

.btn {
    margin: 1rem;
    padding: .1rem;
    font-size: 20px;
    box-shadow: text-decoration:none;

}

/* Responsive styles for the button */
/* ===== == = === 30em (480px) === = == ===== */
@media only screen and (min-width : 30em) {
    .btn {
        font-size: 1rem;
    }
}

/* ===== == = === 48em (768px) === = == ===== */
@media only screen and (min-width : 20em) {
    .btn {
        font-size: 1.25rem;
    }
}

.btn:hover {
    text-decoration: none;
    color: #999;
}

.slider--image {
    position: absolute;
    z-index: 1;
    left: 0;
    top: 0;
    object-fit: cover;
    animation: 45s ease-in-out infinite;

}

/* Name of animations and selection of images */
.slider--image:nth-of-type(1) {
    animation-name: slide-01;
}

.slider--image:nth-of-type(2) {
    animation-name: slide-02;
}

.slider--image:nth-of-type(3) {
    animation-name: slide-03;
}

.slider--image:nth-of-type(4) {
    animation-name: slide-04;
}

.slider--image:nth-of-type(5) {
    animation-name: slide-05;
}

/* Images are overlaid and visible or invisible due to different transparency */
/* Moving the images with transform: scale & translate */
/* Styles for webkit browsers */
@keyframes slide-01 {
    0% {
        opacity: 1;
        transform: scale(1.4) translate(0, 0);
    }

    16% {
        opacity: 1;
        transform: scale(1.2) translate(-20px, -10px);
    }

    33% {
        opacity: 0;
        transform: scale(1.4) translate(0, 0);
    }

    50% {
        opacity: 0;
    }

    67% {
        opacity: 0;
    }

    84% {
        opacity: 0;
    }

    100% {
        opacity: 1;
        transform: scale(1.4) translate(0, 0);
    }
}

@keyframes slide-02 {
    0% {
        opacity: 0;
    }

    16% {
        opacity: 0;
        transform: scale(1.2) translate(-20px, -10px);
    }

    33% {
        opacity: 1;
        transform: scale(1.4) translate(0, 0);
    }

    50% {
        opacity: 1;
        transform: scale(1.2) translate(-20px, 10px);
    }

    67% {
        opacity: 0;
        transform: scale(1.4) translate(0, 0);
    }

    84% {
        opacity: 0;
    }

    100% {
        opacity: 0;
    }
}

@keyframes slide-03 {
    0% {
        opacity: 0;
    }

    16% {
        opacity: 0;
    }

    33% {
        opacity: 0;
    }

    50% {
        opacity: 0;
        transform: scale(1.4) translate(0, 0);
    }

    67% {
        opacity: 1;
        transform: scale(1.4) translate(-20px, 10px);
    }

    84% {
        opacity: 1;
        transform: scale(1.2) translate(20px, -10px);
    }

    100% {
        opacity: 0;
        transform: scale(1.4) translate(0, 0);
    }
}

@keyframes slide-04 {
    0% {
        opacity: 0;
    }

    16% {
        opacity: 0;
    }

    33% {
        opacity: 0;
    }

    50% {
        opacity: 0;
        transform: scale(1.4) translate(0, 0);
    }

    67% {
        opacity: 1;
        transform: scale(1.4) translate(-20px, 10px);
    }

    84% {
        opacity: 1;
        transform: scale(1.2) translate(20px, -10px);
    }

    100% {
        opacity: 0;
        transform: scale(1.4) translate(0, 0);
    }
}

@keyframes slide-05 {
    0% {
        opacity: 0;
    }

    16% {
        opacity: 0;
    }

    33% {
        opacity: 0;
    }

    50% {
        opacity: 0;
        transform: scale(1.4) translate(0, 0);
    }

    67% {
        opacity: 1;
        transform: scale(1.4) translate(-20px, 10px);
    }

    84% {
        opacity: 1;
        transform: scale(1.2) translate(20px, -10px);
    }

    100% {
        opacity: 0;
        transform: scale(1.4) translate(0, 0);
    }
}
</style>

<style>
.quick {

    background-color: #000;
    color: #fff;
    padding: 5px;
    position: absolute;
    top: 30%;
    left: 50%;
    transform: translate(-50%, -50%);
    display: none;
    opacity: 0.8;
    font-family: 'Yanone Kaffeesatz', sans-serif;
    font-size: 20px;
}

.img_hover:hover .quick {
    display: block;

}
</style>
<style>
.container {
    width: 100%;
    align-items: center;
}

.swiper {
    width: 80%;
    height: fit-content;
}

.swiper-slide-Image {
    width: 100%;
}

.swiper .swiper-pagination-bullet-active {
    background: #ffffff;
}

.caption {
    font-size: 25px;
    font-weight: bolder;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

.center {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}
</style>

<body style="background-color:#f5f5f0">
    <script>
    function show() {

        var de = document.getElementById("show");
        de.style.display = "block";
        //de.classList.add('move');
    }

    function hide() {
        var de = document.getElementById("show");
        de.style.display = "none";

    }
    </script>

    <div class="popup" id="show">
        <span style="font-size:30px;float:right;cursor:pointer;" onclick="hide()">&times;</span>
        <p style="font-family: 'Yanone Kaffeesatz', sans-serif; font-size:40px;text-align:center;">Login In Below</p>
        <form action="access-services.php" method="post" name="Login" id="Login">
            <input type="email" name="email" id="User" Placeholder="Email"
                style="font-family: 'Yanone Kaffeesatz', sans-serif; font-size:20px;border:1px #ddd;border-radius:15px;"><br>

            <input type="text" name="password" id="Password" Placeholder="Password"
                style="font-family: 'Yanone Kaffeesatz', sans-serif; font-size:20px;"><br><br>
            <p style="text-align:center"> <button type="submit" class="btn btn-primary"
                    style="color:#fff;height:40px;font-family: 'Yanone Kaffeesatz', sans-serif; font-size:20px;">Submit
                    Now</button></p>
        </form><br>
        <p style="font-family: 'Yanone Kaffeesatz', sans-serif; font-size:20px;text-align:center;">Forgot Password?</p>
    </div>

    <div style="background-color:#000066">
        <div class="container">
            <div style="height:10px"></div>
            <div class="row">
                <div class="col-md-6">
                    <ul class="nav nav-pills justify-content-left">
                        <li class="nav-item">
                            <span style="font-size:20px;font-family: 'Smooch Sans', sans-serif;color:#ffff00;">&nbsp
                                &nbsp
                                &nbsp &nbsp
                                Lagos</span><br>
                            <span style="font-size:20px;font-family:kalinga;color:#ffffff;">
                                <p id='game' style="font-family: 'Smooch Sans', sans-serif;"></p>
                            </span>
                        </li>&nbsp &nbsp &nbsp
                        <li class="nav-item">
                            <span style="font-size:20px;font-family: 'Smooch Sans', sans-serif;color:#ffff00;">&nbsp
                                &nbsp
                                &nbsp &nbsp
                                Johannesburg</span><br>
                            <span style="font-size:20px;font-family:kalinga;color:#ffffff;">
                                <p id='peace' style="font-family: 'Smooch Sans', sans-serif;"></p>
                            </span>
                        </li>&nbsp &nbsp &nbsp
                        <li class="nav-item">
                            <span style="font-size:20px;font-family: 'Smooch Sans', sans-serif;color:#ffff00;">&nbsp
                                &nbsp
                                &nbsp &nbsp New
                                Delhi
                            </span><br>
                            <span style="font-size:20px;font-family: 'Smooch Sans', sans-serif;color:#ffffff;">
                                <p id='rust' style="font-family: 'Smooch Sans', sans-serif;"></p>
                            </span>
                        </li>
                    </ul>
                    <script>
                    var africaTime = new Date().toLocaleString("en-US", {
                        timeZone: "Africa/Lagos"
                    });
                    africaTime = new Date(africaTime);
                    console.log('Africa time: ' + africaTime.toLocaleString())
                    document.getElementById('game').innerHTML = africaTime.toLocaleString();

                    var africaTime = new Date().toLocaleString("en-US", {
                        timeZone: "Africa/Johannesburg"
                    });
                    africaTime = new Date(africaTime);
                    console.log('Africa time: ' + africaTime.toLocaleString())
                    document.getElementById('peace').innerHTML = africaTime.toLocaleString();

                    var indiaTime = new Date().toLocaleString("en-US", {
                        timeZone: "Asia/Kolkata"
                    });
                    indiaTime = new Date(indiaTime);
                    console.log('India time: ' + indiaTime.toLocaleString())
                    document.getElementById('rust').innerHTML = indiaTime.toLocaleString();

                    var aestTime = new Date().toLocaleString("en-US", {
                        timeZone: "Europe/Istanbul"
                    });
                    aestTime = new Date(aestTime);
                    console.log('AEST time: ' + aestTime.toLocaleString())
                    document.getElementById('time').innerHTML = aestTime.toLocaleString();

                    var europeTime = new Date().toLocaleString("en-US", {
                        timeZone: "Europe/London"
                    });
                    europeTime = new Date(europeTime);
                    console.log('Europe time: ' + europeTime.toLocaleString())
                    document.getElementById('rest').innerHTML = europeTime.toLocaleString();

                    var asiaTime = new Date().toLocaleString("en-US", {
                        timeZone: "Asia/Shanghai"
                    });
                    asiaTime = new Date(asiaTime);
                    console.log('Asia time: ' + asiaTime.toLocaleString());
                    </script>
                </div>
                <div class="col-md-6 ">
                </div>
            </div>
        </div>
    </div>

    <div style="background-color:#004d4d">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <!-- Links -->
                    <ul class="nav nav-pills">
                        <li class="nav-item" style="padding-top:10px;">
                            <img src="Image/emma-logo.png" style="width:50px;height:50px;">
                        </li>
                        <li class="nav-item" style="padding-top:10px;">
                            &nbsp <span
                                style="font-family: 'Yanone Kaffeesatz', sans-serif;color:#b3b3ff;font-size:35px;">Emmanuel
                                International Private Ltd</span>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="nav nav-pills justify-content-left">
                        <li class="nav-item">
                            <a href="medical.php" style="text-decoration:none">
                                <p
                                    style="font-family:calibri;font-size:20px;color:white;padding-top:10px;font-family: 'Yanone Kaffeesatz', sans-serif;">
                                    Medical Hospitality
                                </p>
                            </a>
                        </li>&nbsp &nbsp &nbsp
                        <li class="nav-item">
                            <a href="cargo.php" style="text-decoration:none">
                                <p
                                    style="color:white;font-size:20px;text-align:right;padding-top:10px;font-family: 'Yanone Kaffeesatz', sans-serif;">
                                    Get A Quote Here</p>
                            </a>
                        </li> &nbsp &nbsp &nbsp
                        <li class="nav-item">
                            <a href="track.php" style="text-decoration:none">
                                <p
                                    style="font-family:calibri;font-size:20px;color:white;padding-top:10px;font-family: 'Yanone Kaffeesatz', sans-serif;">
                                    Track Your Goods
                                </p>
                            </a>
                        </li>&nbsp &nbsp &nbsp
                        <li class="nav-item">
                            <a href="contact.php" style="text-decoration:none">
                                <p
                                    style="font-family:calibri;font-size:20px;color:white;padding-top:10px;font-family: 'Yanone Kaffeesatz', sans-serif;">
                                    Contact Us
                                </p>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </div>

    <div class="container" style="align-items:center;justify-content:center;margin-top:50px;">

        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide"><img src="Image/shutterstock_432229579-e1532089989792.jpg"
                        style="width:100%;height:60vh;border-radius:20px;">
                    <div class="caption center"
                        style="height:150px;width:600px;background-color:#3366cc99;border:1px #3366cc;border-radius:20px;">
                        <p
                            style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:25px;text-align:center;color:#ffffff;padding-top:20px;">
                            We believe in providing daily quality assurance inspections to correct deficiencies
                            that are present and immediately teach staff the proper methodology, should they face the
                            same issue in the future.</p>
                    </div>
                </div>
                <div class="swiper-slide"><img src="Image/carymedical.jpg"
                        style="width:100%;height:60vh;border-radius:20px;">
                    <div class="caption center"
                        style="height:150px;width:600px;background-color:#3366cc99;border:1px #3366cc;border-radius:20px;">
                        <p
                            style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:25px;text-align:center;color:#ffffff;padding-top:20px;">
                            We do ensure thate our patients are given a world class treatment and hospitality in a world
                            class hospital. We
                            do ensure that patients coming for treatment must enjoy the atmosphere of Medical
                            Hospitality.</p>
                    </div>
                </div>
                <div class="swiper-slide"><img src="Image/sheridan-memorial-hospital-womens-baby-2-sheridan-wyoming.jpg"
                        style="width:100%;height:60vh;border-radius:20px;">
                    <div class="caption center"
                        style="height:120px;width:600px;background-color:#3366cc99;border:1px #3366cc;border-radius:20px;">
                        <p
                            style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:25px;text-align:center;color:#ffffff;padding-top:20px;">
                            Our hospitality is unique. We ensure that our patient will have a great environmental
                            friendly service like never before.</p>
                    </div>
                </div>
                <div class="swiper-slide"><img src="Image/VA-BOI-Imaging-Bldg-02.jpg"
                        style="width:100%;height:60vh;border-radius:20px;">
                    <div class="caption center"
                        style="height:120px;width:600px;background-color:#3366cc99;border:1px #3366cc;border-radius:20px;">
                        <p
                            style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:25px;text-align:center;color:#ffffff;padding-top:20px;">
                            We also ensure the our patients be given a world class medical treatment with good comfort
                            and highly exprienced doctors.</p>
                    </div>
                </div>
                <div class="swiper-slide"><img src="Image/Feb2020-23096-Siemens-UHNM-scaled.jpg"
                        style="width:100%;height:60vh;border-radius:20px;"></div>
                <div class="swiper-slide"><img src="Image/How-to-Create-Adaptable-Hiring-Model-in-Healthcare.jpg"
                        style="width:100%;height:60vh;border-radius:20px;">
                    <div class="caption center"
                        style="height:150px;width:600px;background-color:#3366cc99;border:1px #3366cc;border-radius:20px;">
                        <p
                            style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:25px;text-align:center;color:#ffffff;padding-top:20px;">
                            Our strategies are to make sure that our patients do not complain. The will be given the
                            best health care facilities, doctors corteous and selfless attention. We will never leave
                            any thing below our standardization.</p>
                    </div>
                </div>
                <div class="swiper-slide"><img
                        src="Image/20140515.cprnews.health.docsonrounds.universityofcoloradohospital.jpg"
                        style="width:100%;height:60vh;border-radius:20px;">
                    <div class="caption center"
                        style="height:120px;width:600px;background-color:#3366cc99;border:1px #3366cc;border-radius:20px;">
                        <p
                            style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:25px;text-align:center;color:#ffffff;padding-top:20px;">
                            We ensure that our patients are well attended to by qualified doctors. Thats our main
                            priority.</p>
                    </div>
                </div>
                <div class="swiper-slide"><img src="Image/a250ab4b471227b314e19b202b1f9c1b.jpg"
                        style="width:100%;height:60vh;border-radius:20px;">
                    <div class="caption center"
                        style="height:120px;width:600px;background-color:#3366cc99;border:1px #3366cc;border-radius:20px;">
                        <p
                            style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:25px;text-align:center;color:#ffffff;padding-top:20px;">
                            We do ensure that our patients is given a state of art treatment with the best equipments.
                            Remember "Health Is Wealth".</p>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev" style="color:#ffffff"></div>
            <div class="swiper-button-next" style="color:#ffffff"></div>
            <!-- If we need scrollbar -->

        </div>
        <script>
        const swiper = new Swiper('.swiper', {
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,

            },
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
        </script>
    </div>

    <div class="container" style="margin-top:100px">
        <p style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:40px;text-align:center;">Our Executive
            Support</p>
        <div class="row">
            <div class="col-md-5">
                <img src="Image/KathyTerry-small-1024x683.jpg" style="width:100%;height:40vh;border-radius:20px;">
            </div>
            <div class="col-md-1">
            </div>
            <div class="col-md-6">
                <p style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:24px;">We support each of our
                    patients with world class medical
                    facilities. We ensure environmental friendly with a unique art of a world class treatment at an
                    affordable cost.
                    We also engage in providing medical quality assurance and compliance. It is our goal to get as
                    many Hospitality Healthcare Services
                    representatives possible involved in our programs in order to provide our patients with the
                    best possible service.</p>
            </div>
        </div>
    </div>

    <div class="container" style="margin-top:100px">
        <p style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:40px;text-align:center;">Performance
            Improvement:</p>
        <div class="row">
            <div class="col-md-5">
                <img src="Image/commitment.png" style="width:70%;height:40vh;">
            </div>
            <div class="col-md-1">
            </div>
            <div class="col-md-6">
                <p style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:24px;"><b>Quality Assurance
                        Rounds</b>:<br>
                    Environmental service rounds are a fundamental part of your facility. Routine rounds of your
                    facility provide the eyes and ears for our patients, ensuring the highest level of
                    environmental quality.<br>
                    <b>Environmental Services Checklist</b>:<br>
                    We also customize cleaning checklists for every area serviced at
                    your facility which outline the scope of work needing to be performed and provide accountability
                    and documentation of services performed.
                </p>
            </div>
        </div>
    </div>


    <div class="container" style="margin-top:100px">
        <p style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:40px;text-align:center;">Patient
            Satisfaction:</p>
        <div class="row">
            <div class="col-md-5">
                <img src="Image/istockphoto-481642739-170667a.jpg" style="width:100%;height:40vh;border-radius:20px;">
            </div>
            <div class="col-md-1">
            </div>
            <div class="col-md-6">
                <p style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:24px;">We are advocates of
                    comprehensive patients satisfaction. As our partner we want to ensure
                    that we exceed your expectations as well as our patientsexpectations and to provide concrete
                    feedback on our performance.

                    Our on site Management personnel are responsible for regular patient satisfaction rounds as part
                    of their role in your organization. During these regular patient satisfaction rounds it is our
                    goal to become advocates for the departments that we manager as well as the personnel, to ensure
                    that they are providing the greatest impact on patient satisfaction at your facility.

                </p>
            </div>
        </div>
    </div>

    <div class="container" style="margin-top:100px">
        <p style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:40px;text-align:center;">Our Hospital Partners:
        </p>
        <div class="row">
            <div class="col-md-12">
                <marquee width="100%" behavior="alternate">
                    <img src="Image/Fortis_Healthcare_Logo.png" style="width:20%"> &nbsp &nbsp
                    <img src="Image/apollo.png" style="width:20%"> &nbsp &nbsp
                    <img src="Image/narayana.png" style="width:20%"> &nbsp &nbsp
                    <img src="Image/lilavati-hospital.png" style="width:20%"> &nbsp &nbsp
                    <img src="Image/tata-hospital.png" style="width:20%">&nbsp &nbsp
                    <img src="Image/aiims.png" style="width:20%">
                </marquee>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-dark text-white mt-5 py-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-7 col-md-6">
                <div class="row">
                    <div class="col-md-6 mb-5">
                        <h3 class="text-primary mb-4">Get In Touch</h3>
                        <p><i class="fa fa-map-marker-alt mr-2"></i>315, 2nd Floor, Daroga Market,<br> &nbsp &nbsp Main
                            Burari
                            Chowk, Delhi -84, India.</p>
                        <p><i class="fa fa-phone mr-2"></i>+91 9910878709 </p>
                        <hr>
                        <p><i class="fa fa-map-marker-alt mr-2"></i>5 Pan Road, Unit 3 Nicollete Place, <br> &nbsp &nbsp
                            La Rochelle, Johannesburg 2190,
                            <br> &nbsp &nbsp Republic of South Africa.
                        </p>
                        <p><i class="fa fa-phone mr-2"></i>+27 614658024</p>
                        <p><i class="fa fa-phone mr-2"></i>+27 679565871</p>
                        <hr>
                        <p><i class="fa fa-map-marker-alt mr-2"></i> A 43 Nnadi Line, <br>&nbsp &nbsp Umuaka Community
                            Park Shopping Plaza,<br> &nbsp &nbsp Afor Umuaka, Njaba, Imo State.
                            Nigeria.</p>
                        <p><i class="fa fa-phone mr-2"></i>+234-8033194895</p>
                        <p><i class="fa fa-phone mr-2"></i>+2348033442999</p>
                        <p><i class="fa fa-envelope mr-2"></i>info@emmanuelinternationalpvt.com</p>
                        <div class="d-flex justify-content-start mt-4">
                            <a class="btn btn-outline-light btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social mr-2" href="#"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social mr-2" href="#"><i
                                    class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 mb-5">
                        <h3 class="text-primary mb-4">Quick Links</h3>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-white mb-2" href="index.php" style=" text-decoration:none;"><i
                                    class="fa fa-angle-right mr-2"></i>At Emmanuel International Pvt Ltd</a>
                            <a class="text-white mb-2" href="cargo.php" style=" text-decoration:none;"><i
                                    class="fa fa-angle-right mr-2"></i>Our Air Cargo And Courier Services</a>
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Services</a>
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Pricing Plan</a>
                            <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 mb-5">
                <h3 class="text-primary mb-4">Newsletter</h3>
                <p>Rebum labore lorem dolores kasd est, et ipsum amet et at kasd, ipsum sea tempor magna tempor. Accu
                    kasd sed ea duo ipsum. Dolor duo eirmod sea justo no lorem est diam</p>
                <div class="w-100">
                    <div class="input-group">
                        <input type="text" class="form-control border-light" style="padding: 30px;"
                            placeholder="Your Email Address">
                        <div class="input-group-append">
                            <button class="btn btn-primary px-4">Sign Up</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5"
        style="border-color: #3E3E4E !important;">
        <div class="row">
            <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white">&copy; <a href="#">Your Site Name</a>. All Rights Reserved. Designed by <a
                        href="https://htmlcodex.com">HTML Codex</a>
                </p>
            </div>
            <div class="col-lg-6 text-center text-md-right">
                <ul class="nav d-inline-flex">
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Privacy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Terms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">FAQs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Help</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Footer End -->



</body>

</html>
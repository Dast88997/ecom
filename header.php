


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
    <span style="font-size:40px;font-family:calibri;">Login In Below</span>
    <form action="access-services.php" method="post" name="Login" id="Login">
        <input type="text" name="username" id="User"><br>

        <input type="text" name="password" id="Password"><br>
        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <input type="submit" value="Login"
            style="background-color:red;color:#fff;border:1px solid red;width:120px;height:40px;">
    </form>
</div>

<header class="header" style="background-color:#000099">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
            <ul class="nav nav-pills justify-content-left">
                        <li class="nav-item">
                            <a href="cargo.php" style="text-decoration:none">
                                <p
                                    style="color:white;font-size:20px;text-align:right;padding-top:40px;font-family: 'Yanone Kaffeesatz', sans-serif; ">
                                    Get A Quote Here</p>
                            </a>
                        </li> &nbsp &nbsp &nbsp
                        <li class="nav-item">
                            <a href="track.php" style="text-decoration:none">
                                <p
                                    style="font-family:calibri;font-size:20px;color:white;padding-top:40px;font-family: 'Yanone Kaffeesatz', sans-serif; ">
                                    Track Your Goods
                                </p>
                            </a>
                        </li>&nbsp &nbsp &nbsp
                        <li class="nav-item">
                            <a href="contact.php" style="text-decoration:none">
                                <p
                                    style="font-family:calibri;font-size:20px;color:white;padding-top:40px;font-family: 'Yanone Kaffeesatz', sans-serif; ">
                                    Contact Us
                                </p>
                            </a>
                        </li>
                    </ul>
            </div>
            <div class="col-md-4">
            <marquee>
                        <p
                            style="color:white;font-family: 'Yanone Kaffeesatz', sans-serif; font-size:20px;padding-top:35px;">
                            Customers Are To Ensure That Their Delivery Address Is
                            Correct For A Smooth And Easy Delivery Without Stress. Your Service Is Our Concern. Any
                            Wrong Delivery Address !!</p>
                    </marquee>
            </div>

        </div>
    </div>
</header>
<?php
session_start();
include 'connection.php';
function header_top(){
	?>
<section>
    <div class="container">
        <ul class="nav justify-content-end">
            <li class="nav-item">
                <a class="nav-link active" href="#"
                    style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:30px;color:#000000;">Welcome:
                    <?=$_SESSION['name'];?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="logout.php"><span
                        style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:30px;color:#000000;">Log
                        Out</span></a>
            </li>
        </ul>
    </div>
</section>
<?php	
}

?>
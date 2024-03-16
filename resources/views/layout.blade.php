
<!doctype html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/style.css')}}"/>

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/album/">



    <!-- Bootstrap core CSS -->
<link href="../dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  padding: 12px 16px;
  z-index: 1;
}

.dropdown:hover .dropdown-content {
  display: block;
}

</style>

<body style="height: 100%;">
    <div class="body">
        <div class="top_page_nav" style="background:black">
            <!--Main div for Header-->
            <div class="top_page_nav_left">
                <!--Left side header part-->



<a href="/home">Ms.Lady</a>


            </div>
            <div class="top_page_nav_right">
                <!--Right side header part-->
                <div class="main">
                    <!--Div for navigation-->
                    <ul class="mainnav">
                        <!--Div for navigation list-->
                        <li><a href="/home">Home</a></li>
                        <li><a href="/aboutus">About Us</a></li>
                        <li><a href="">Shop</a></li>
                        <li><a href="/ourservice">Our Services</a></li>
                        <li><a href="/ourwork">Our Work</a></li>
                        <li><a href="/contactus">Contact Us</a></li>
                        <li><a href="/customer">Customer</a></li>

                        <li>
                            <div class="dropdown" id="button" style="margin-left:200px;">
                                <input type="image" src="image/cart.png" class="hoverimg" title="Cart" name="cart" width="25" height="25"  alt="cart">
                            </div>
                        </li>

                        <li>

                            <div class="dropdown" id="button">
                                <input type="image" src="image/account1.png" name="account" width="25" height="25" alt="account">

                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    <div>
        @yield('content')
    </div>

    <div class="last_part" >
    <!--Main footer-->
        <div class="Footer_quicklink"><br>
        <!--Div for Quick Link-->
            <ul class="Footer_quicklink_h1">
                <li>QUICK LINKS</li>
            </ul>
            <ul class="Footer_quicklink_list">
                <li><a href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="our_services.php">Our Services</a></li>
                <li><a href="our_work.php">Our Work</a></li>
                <li><a href="contact_us.php">Contact Us</a></li>
                <li><a href="about_us.php">About Us</a></li>
            </ul>
        </div>
        <div class="Footer_online"><br>
        <!--Div for MS.Maniquine-->
            <ul class="Footer_online_h1">
                <li>MS.Lady</li>
            </ul>
            <ul class="Footer_online_list">
                <li>Address : Ampikavathi road,chankanai,jaffna.</li>
                <li>Opening Hours : 24/7</li>
                <li>Phone : 075 796 0973</li>
            </ul>
        </div>
        <div class="Footer_online_cch"><br>
        <!--Div for Customer care-->
            <ul class="Footer_online_cch_h1">
                <li>ONLINE CUSTOMER CARE</li>
            </ul>
            <ul class="Footer_online_cch_list">
                <li>Phone : 075 796 0973</li>
                <li>Opening Hours : 24/7</li>
                <li>Email : ms.lady@gmail.com</li>
            </ul>
        </div>
        <div class="Footer_follow"><br>
        <!--Div for follow us-->
            <ul class="Footer_follow_h1">
                <li>FOLLOW US</li>
            </ul>
             <center>
            <table class="footer_tbl">
                <tr>
                    <td><a href="https://www.facebook.com/Ms.Lady/"><img src="image/facebook.png" class="fblogo"></a>
                    </td>
                    <td colspan="2">Facebook/Ms.Lady</td>
                </tr>
                <tr>
                    <td><a href="https://instagram.com/msmaniquine?igshid=a1oohau5ho3g"><img src="image/insta.png" class="instalogo"></a></td>
                    <td colspan="2">Instagram/Ms.Lady</td>
                </tr>
                <tr>
                    <td><img src="image/WhatsApp_Logo.png" class="WhatsApp_Logo"></td>
                    <td colspan="2">077 288 6827</td>
                </tr>
            </table>
             </center>
        </div>
    <p class="copyrights">Copyright &#169; 2021. All Rights Reserved by Ms.Lady.</p>
</div>
</body>

</html>

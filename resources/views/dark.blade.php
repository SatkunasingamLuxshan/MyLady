@extends('layout')
@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<h1></h1>
    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">Enable body scrolling</button>

<div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Offcanvas with body scrolling</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">

        <!--Div for navigation-->
        <ul >
            <!--Div for navigation list-->
            <li><a href="/home">Home</a></li>
            <li><a href="/aboutus">About Us</a></li>
            <li><a href="">Shop</a></li>
            <li><a href="/ourservice">Our Services</a></li>
            <li><a href="/ourwork">Our Work</a></li>
            <li><a href="/contactus">Contact Us</a></li>

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  @endsection

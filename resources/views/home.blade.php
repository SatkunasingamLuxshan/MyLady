@extends('layout')
@section('content')
<link rel="stylesheet" href="{{asset('css/style.css')}}"/>
<style>
    .slideshow {
        display: none;
    }

  
</style>





<div>
    <!--Div for slideshow-->
    <img class="slideshow" src="image/cover15.AVIF" style="width:100%; height: 100vh;">
    <img class="slideshow" src="image/cover13.AVIF" style="width:100%; height: 100vh;">
    <img class="slideshow" src="image/cover12.AVIF" style="width:100%; height: 100vh;">
</div>

<script>
    //Script for slideshow
    var myIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("slideshow");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) {
            myIndex = 1
        }
        x[myIndex - 1].style.display = "block";
        setTimeout(carousel, 2000); // Change image every 2 seconds
    }
</script>
@endsection
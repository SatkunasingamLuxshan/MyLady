
@extends('layout')
@section('content')
   <style>
         .form{
      position: relative;;
      top:50px;
      left:480px;
      width: 400px;
      height:700px;
      padding: 20px;
      background:rgb(141, 152, 180);
      border-radius: 15px ;
      border:2px solid rgba(225,225,225,0.5);
      margin: 25px 0;
    }

    .input1{
      width: 100%;
      padding: 5px 5px;
      border: 1px solid black;
      border-radius: 6px;
      box-sizing: border-box;
    }
    .input2{
      width: 100%;
      padding: 5px 5px;
      border: 1px solid black;
      border-radius: 6px;
      box-sizing: border-box;
    }
    .submitt {
      width: 28%;
      background-color:#193367;
      padding: 10px 5px;
      margin: 8px 5.5px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
    }
    table,th,td{
     border: 1px solid black;
    }
    th, td {
      text-align: center;
      padding: 8px;
    }
  </style>
<div class="form">
    <form id="login" method="post" action="{{ route('customer.store') }}">
        <center><h3><b>Student Registration</b></h3></center>
@csrf
        <label for="uname"><h5> Name</h5></label>
        <input type="text" name="uname" id="uname" placeholder="FirstName"class="input1">

        <label for="lname"><h5>Last Name</h5></label>
        <input type="text" name="lname" id="lname" placeholder="LastName"class="input1">

        <label for="gender"><h5>Gender</h5></label><br>
        <input type="radio" name="gender" id="male" value="male" checked >
        <label for="male">Male</label>
        <input type="radio" name="gender" id="female" value="female">
        <label for="female">Female</label><br>


        <label for="grade"><h5>Grade</h5></label>
        <select name="grade" id="grade"class="input1">
            <option value="10A">10A</option>
            <option value="10B">10B</option>
            <option value="10C">10C</option>
            <option value="10D">10D</option>
        </select>

        <label for="dob"><h5>Date of Birth</h5></label>
        <input type="date" name="dob" id="dob"class="input1">

        <label for="hc"><h5>Home Color</h5></label>
        <input type="color" name="hc" id="hc" class="input2">

        <label for="subject"><h5>Subject</h5></label><br>
        <input type="checkbox" id="maths" name="subject[]" value="maths" checked>
        <span>Maths</span>
        <input type="checkbox" id="tamil" name="subject[]" value="tamil">
        <span>Tamil</span>
        <input type="checkbox" id="english" name="subject[]" value ="english">
        <span>English</span><br>

        <label for="address"><h5>Address</h5></label>
        <textarea name="address" id="address" cols="20" rows="3" class="input1"></textarea>
        <br>
        <input type="submit"  value="Save" class="submitt">


    </form>
</div>
<h1></h1>


@endsection

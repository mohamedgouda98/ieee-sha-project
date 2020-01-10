@extends('layouts.main')

@section('content')

<!-- This Page for Mona -->
<!-- To open this page just write serve link with regstrtion : 127.0.0.1:8000/regstrtion -->

<div class="row">

    <div class="container offset-lg-3 col-lg-6">

        <form>
        @csrf
        <!-- write your Code Here -->
        {{-- test push on mona branch --}}

        <div class="shape"></div>
        <legend>Personal Information</legend>
        <label>Full Name</label><br>
        <input class="info" type="text" name="Full Name"><br>
        <label>E-mail</label><br>
        <input class="info" type="text" name="E-mail"><br>
        <label>Mobile Number</label><br>
        <input class="info" type="text" name="Mobile Number"><br>
        <label>Academic year</label><br>
        <input class="info" type="text" name="Acaemic year"><br>
        <label>Major</label><br>
        <input class="info" type="text" name="Major"><br>
        <label>Address</label><br>
        <input class="info" type="text" name="Address"><br>

        <div class="shape"></div>
        <legend>Please choose the workshop you would like to attend:</legend>
        
        
        <br>

        <div class="row">
            <div class="right col-lg-6">
                <input class="right" type="checkbox" name="Android" value="Android">Android<br>
                <input class="right" type="checkbox" name="Arduino" value="Arduino">Arduino<br>
                <input class="right" type="checkbox" name="C++" value="C++">C++<br>
                <input class="right" type="checkbox" name="Jave" value="Jave">Jave<br>
                <input class="right" type="checkbox" name="Web" value="Web">Web<br><br>
            </div>

            <div class=" left col-lg-6">
                <input class="left" type="checkbox" name="Mobile Network" value="Mobile Network">Mobile Network<br> 
                <input class="left" type="checkbox" name="Medical Imaging" value="Medical Imaging">Medical Imaging<br>
                <input class="left" type="checkbox" name="Machine" value="Machine">Machine<br>
                <input class="left" type="checkbox" name="Endoscopy" value="Endoscopy">Endoscopy<br><br>
            </div>
        </div>

        <label>Why have you chosen this workshop?</label><br>
        <textarea rows="5" cols="100"></textarea><br>

        <label>What do you know about it?</label><br>
        <textarea rows="5" cols="100"></textarea><br>

        <label>Have you participated in any of IEEE SHA workshops before ? if yes, please mention it</label><br>
        <textarea rows="5" cols="100"></textarea><br>

        <input class="button" type="submit" value="SEND">
        </form>

    </div>


</div>
{{-- mona --}}

@endsection
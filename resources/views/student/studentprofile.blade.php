@extends('generic.app')

@section('content')

    <section class="student-profile">
        <img src="img/dora.jpeg">
        <h1>Dora Explorer</h1>
        <h2>Student</h2>
        <h3>Austin, TX</h3>
        <div class="stats">
            <div class="stat-ind">
                19<br>
                <font>Sessions</font>
            </div>
            <div class="stat-ind">
                <i class="fa fa-user" aria-hidden="true"></i><br>
                <font>Mentor</font>
            </div>
            <div class="stat-ind">
                <i class="fa fa-laptop" aria-hidden="true"></i><br>
                <font>Skills</font>
            </div>
            <div class="clear"></div>
        </div>
        <div class="mentor-pick">
            <div class="mentor-profile">
                <h1>Your Match</h1>
                <img src="img/msmith.jpg">
                <h2>Megan S.</h2>
                <p>Megan is the Chief Technology Officer of the United States. She was previously a vice president of Google[x] at Google, was vice president of business development at Google for nine years, and was general manager of Google.org[2] and the former CEO of Planet Out.</p>
                <button id="hide">Continue to Profile</button>
            </div>
        </div>
        <script type="application/x-javascript">
            $("#hide").click(function(){
                $(".mentor-pick").hide();
            });
        </script>

    </section>


@stop
@extends('generic.app')

@section('content')

    <section class="quiz-container">
        <h1>Getting Started</h1>
        <div class="progress">
            <div class="circle done">
                <span class="label">1</span>
                <span class="title">Skillset</span>
            </div>
            <span class="bar done"></span>
            <div class="circle done">
                <span class="label">2</span>
                <span class="title">App</span>
            </div>
            <span class="bar done"></span>
            <div class="circle done">
                <span class="label">3</span>
                <span class="title">Drawing</span>
            </div>
            <span class="bar done"></span>
            <div class="circle done">
                <span class="label">4</span>
                <span class="title">Math</span>
            </div>
            <span class="bar done"></span>
            <div class="circle done">
                <span class="label">5</span>
                <span class="title">Code</span>
            </div>
            <span class="bar done"></span>
            <div class="circle done">
                <span class="label">6</span>
                <span class="title">UX / UI</span>
            </div>
            <span class="bar half"></span>
            <div class="circle active">
                <span class="label">7</span>
                <span class="title">Finish</span>
            </div>
        </div>
        <h2>Profile Information</h2>
        <form>
            <label class="half">First Name<br><input type="text" placeholder="John"></label>
            <label class="half">Last Name<br><input type="text" placeholder="Smith"></label>
            <label class="half">Phone<br><input type="text" placeholder="512-555-1212"></label>
            <label class="half">Email<br><input type="text" placeholder="john.smith@gmail.com"></label>
            {{--<input type="submit" value="Find My Match" onclick="window.location.href='http://titans-project.herokuapp.com/studentprofile'">--}}
            <button onclick="window.location.href='http://titans-project.herokuapp.com/student_profile'">Find My Match</button>
            <div class="clear"></div>
        </form>

    </section>

@stop
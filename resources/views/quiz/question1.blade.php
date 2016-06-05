@extends('generic.app')

@section('content')

    <section class="quiz-container">
        <h1>Getting Started</h1>
        <div class="progress half">
            <div class="circle active">
                <span class="label">1</span>
                <span class="title">Skillset</span>
            </div>
            <span class="bar"></span>
            <div class="circle">
                <span class="label">2</span>
                <span class="title">App</span>
            </div>
            <span class="bar"></span>
            <div class="circle">
                <span class="label">3</span>
                <span class="title">Drawing</span>
            </div>
            <span class="bar"></span>
            <div class="circle">
                <span class="label">4</span>
                <span class="title">Math</span>
            </div>
            <span class="bar"></span>
            <div class="circle">
                <span class="label">5</span>
                <span class="title">Code</span>
            </div>
            <span class="bar"></span>
            <div class="circle">
                <span class="label">6</span>
                <span class="title">UX / UI</span>
            </div>
            <span class="bar"></span>
            <div class="circle">
                <span class="label">7</span>
                <span class="title">Finish</span>
            </div>
        </div>
        <h2>Do you know what skillset you are seeking?</h2>
        <div class="choices">
            <img src="/img/yes.gif">
            {{--<a href="http://homie.apple.com/question2">--}}
            {{--<img src="/img/no.jpg">--}}
            {{--</a>--}}
            <a href="http://titans-project.herokuapp.com/question2">
                <img src="/img/no.jpg">
            </a>
            <img src="/img/huh.jpg">
            <div class="clear"></div>
        </div>
    </section>

@stop

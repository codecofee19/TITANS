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
                <span class="label active">3</span>
                <span class="title">Drawing</span>
            </div>
            <span class="bar done"></span>
            <div class="circle done">
                <span class="label">4</span>
                <span class="title">Math</span>
            </div>
            <span class="bar half"></span>
            <div class="circle active">
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
        <h2>Which looks more fun to you?</h2>
        <div class="choices">
            <a href="http://titans-project.herokuapp.com/question6">
            <img src="/img/coding.jpg" class="two">
            </a>
            <img src="/img/design.jpg" class="two">
            <div class="clear"></div>
        </div>
    </section>

@stop
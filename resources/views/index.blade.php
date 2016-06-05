@extends('generic.app')

@section('content')
    
    <section class="flag">
        <video autoplay loop>
            <source src="http://titans.swirly.io/vids/students.mp4" type="video/mp4">
        </video>
        <div class="flag-info">
            <h1>Teens in Tech : Acquiring New Skills</h1>
            <p>TITANS is a system for teaching teens technology skills they can use towards future employment. With many employers looking for either experience or a degree, we give students that are not on track for college a fighting chance to develop in the workforce.</p>
        </div>
        <div class="flag-carat-down">
            <i class="fa fa-chevron-down" aria-hidden="true"></i>
        </div>
    </section>
    <section class="home-about">

        <article>
            <img src="imgs/mentor.jpg">
            <h1>About Our Mentors</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis in consequat purus. Donec et lectus at libero fermentum pretium. Proin tempor lacus sed nunc vehicula pellentesque. Quisque elit lacus, vestibulum id luctus non, vehicula tincidunt massa. Donec quis ante nisl. Maecenas id libero imperdiet, eleifend elit nec, iaculis.</p>
        </article>

        <article>
            <h1>About Our Students</h1>
        </article>

        <article>
            <h1>About Our Programs</h1>
        </article>

        <div class="clear"></div>
    </section>

@stop
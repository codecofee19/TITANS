@extends('generic.app')

@section('content')

    <section class="home-flag">
        <h1>Unite + Cultivate Tech </h1>
        <p>TiTANS is a system for teaching teens technology skills they can use towards future employment. With many employers looking for either experience or a degree, we give students that are not on track for college a fighting chance to develop in the workforce.</p>
        <button>View Our Mission</button>
    </section>

    <div class="clear"></div>

    <section class="home-type-selection">
        
        <article>
            <h1>Student</h1>
            <a href="http://titans-project.herokuapp.com/question1">
                <button><font>Take Quiz</font></button>
            </a>
            <a href="http://titans-project.herokuapp.com/question1">
                <button><font>Sign In</font></button>
            </a>
        </article>
        
        <article>
            <h1>Mentor</h1>
            <a href="http://thetitansproject.us13.list-manage.com/subscribe?u=a8e26bb56f143be762049c345&id=5fe43f7dc7">
                <button>Pre-Register</button>
            </a>
            <a href="http://titans-project.herokuapp.com/question1">
                <button><font>Sign In</font></button>
            </a>
        </article>
        
        <article>
            <h1>Partnership</h1>
            <a href="http://titans-project.herokuapp.com/question1">
                <button><font>Non-Profits</font></button>
            </a>
            <a href="http://titans-project.herokuapp.com/question1">
                <button><font>Corporate</font></button>
            </a>
        </article>
        
        <article>
            <h1>Donations</h1>
            <a href="http://titans-project.herokuapp.com/question1">
                <button><font>Individual</font></button>
            </a>
            <a href="http://titans-project.herokuapp.com/question1">
                <button><font>Corporate</font></button>
            </a>
        </article>
        
        <div class="clear"></div>
    </section>

    <section class="home-subjects">
        <h1>Mentoring Subjects</h1>
        <article>
            <h2>Front End</h2>
            <ul>
                <li>HTML5</li>
                <li>CSS3</li>
                <li>Javascript</li>
                <li>jQuery</li>
            </ul>
        </article>
        <article>
            <h2>Back End</h2>
            <ul>
                <li>PHP</li>
                <li>Java</li>
                <li>Ruby</li>
                <li>Python</li>
            </ul>
        </article>
        <article>
            <h2>Data</h2>
            <ul>
                <li>MySQL</li>
                <li>CSS3</li>
                <li>PostgreSQL</li>
                <li>JSON</li>
            </ul>
        </article>
        <article>
            <h2>General</h2>
            <ul>
                <li>Microsoft Office</li>
                <li>Web &and; Email</li>
                <li>Adobe Suite</li>
                <li>Desktop Computing</li>
            </ul>
        </article>
        <div class="clear"></div>
    </section>

    <section class="home-news">
        <h1>Impact</h1>
        <article>
            <img src="img/news/atxhackforchange.jpg">
            <div class="news-content">
                <h2>A Successful Start at ATX Hack 4 Change</h2>
                <p>Its been a long and stressful 3 days, but we have made it. Our team of Cody, Van, Cam, Sam, Ryan, Ashley, Zach and Harold worked through the weekend to develop the base for Teens in Tech : Acquiring New Skills.</p>
                <a href="/"><button>Read Full Story</button></a>
            </div>
        </article>
        <div class="clear"></div>
    </section>

    <section class="home-contact">
        <h1>Contact Us</h1>
        <form>
            <div class="contact-home">
                <label>Name<br><input placeholder="John Cassidy" type="text"></label>
                <label>Email<br><input placeholder="yourname@yourcompany.com" type="text"></label>
                <label>Website<br><input placeholder="website.com" type="text"></label>
            </div>
            <div class="contact-home">
                <label>Notes<br><textarea placeholder="Leave us a message.." rows="4"></textarea></label>
                <label><input type="checkbox"> Subscribe to Our Newsletter</label>
                <div class="contact-home-buttons">
                    <input type="submit" value="submit">
                    <input type="submit" value="cancel">
                </div>
            </div>
            <div class="clear"></div>
        </form>
    </section>

    <div id="popup1" class="overlay">
        <div class="popup">
            <h2>Visit Our IndieGoGo Campaign</h2>
            <a class="close" href="#popup1">&times;</a>
            <div class="content">
                We are starting our Indie GoGo campaign, and could use your help. Please take a moment to view our campaign and share with your friends, family, and colleagues. View our campaign to learn a little more about our project, as well as the perks that are available for helping support our cause. Use <a href="https://www.indiegogo.com:443/projects/1802313/x/14408428?secret_perk_token=0b0c6d56">this link</a> to save $100 on our Gold Perk.
                <a href="https://igg.me/at/titans"><img src="img/indiegogo.png"></a>
            </div> 
        </div>
    </div>
    
@stop
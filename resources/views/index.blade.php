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
            <button>Take Quiz</button>
            <button>Sign In</button>
        </article>
        <article>
            <h1>Mentor</h1>
            <button onclick="window.location.href='http://thetitansproject.us13.list-manage.com/subscribe?u=a8e26bb56f143be762049c345&id=5fe43f7dc7'">Register</button>
            <button>Sign In</button>
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
                <li>HTML5</li>
                <li>CSS3</li>
                <li>Javascript</li>
                <li>jQuery</li>
            </ul>
        </article>
        <article>
            <h2>Data</h2>
            <ul>
                <li>HTML5</li>
                <li>CSS3</li>
                <li>Javascript</li>
                <li>jQuery</li>
            </ul>
        </article>
        <article>
            <h2>General</h2>
            <ul>
                <li>HTML5</li>
                <li>CSS3</li>
                <li>Javascript</li>
                <li>jQuery</li>
            </ul>
        </article>
        <div class="clear"></div>
    </section>

    <section class="home-news">
        <h1>Impact</h1>
        <article>
            <img src="img/news-home.jpg">
            <div class="news-content">
                <h2>This is a news story</h2>
                <p>TiTANS is a system for teaching teens technology skills they can use towards future employment.</p>
            </div>
        </article>
        <article>
            <img src="img/news-home.jpg">
            <div class="news-content">
                <h2>This is a news story</h2>
                <p>TiTANS is a system for teaching teens technology skills they can use towards future employment.</p>
            </div>
        </article>
        <article>
            <img src="img/news-home.jpg">
            <div class="news-content">
                <h2>This is a news story</h2>
                <p>TiTANS is a system for teaching teens technology skills they can use towards future employment.</p>
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
    
@stop
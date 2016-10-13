<!DOCTYPE html>
<html lang="en">
    @include('header')

    <body>
    <canvas id="space"></canvas>
    <div class="container">
    @include('nav')
        <div class="position-ref padded-top">
            <div class="content">
                <ul class="bxslider">
                  <li><img src="img/1.jpg" title="We are star-stuff. — Carl Sagan"/></li>
                  <li><img src="img/2.jpg" title="The sky is the ultimate art gallery just above us. — attributed to Ralph Waldo Emerson"/></li>
                  <li><img src="img/3.jpg" title="We have lingered long enough on the shores of the cosmic ocean. We are ready at last to set sail for the stars. — Carl Sagan. Cosmos, 1980"/></li>
                  <li><img src="img/4.jpg" title="Astronomy compels the soul to look upward, and leads us from this world to another. — Plato, The Republic, 342 BCE"/></li>
                  <li><img src="img/5.jpg" title="We choose to go to the moon in this decade and do the other things, not because they are easy, but because they are hard. - John F. Kennedy"/></li>
                </ul>
                <div class="sub_container">
                    <p class="intro_text">Ever since I was a child, I was always interested in space. The intrigue of whats out there, what amazing things we've never seen. How vast and empty space is, really makes you think. Try to imagine where space ends. Seriously, lean back, close your eyes and think about it. I've done it many times and it's always astounding how its not even comprehendable. Hopefully you enjoy space as much as me and enjoy the little site I've put together! </p>
                    <div class="three_boxes">
                        <section>
                        <h2><a href="facts">Space Facts!</a></h2>
                        <hr class="intro-divider">
                        <p>Did you know 99% of our solar system's mass is the sun?? Thats insane, check out the Space Facts page for more great stuff!</p>
                    </section>

                    <section>
                        <h2><a href="iss">I.S.S.</a></h2>
                        <hr class="intro-divider">
                        <p>The International Space Station's is the largest artificial body in orbit and can be seen with the naked eye from earths surface. To learn visit my I.S.S. page!</p>
                    </section>

                    <section>
                        <h2><a href="fun">NASA API</a></h2>
                        <hr class="intro-divider">
                        <p>Let's see what we can do with this NASA API shall we?</p>
                    </section>
                    <div class="clear"></div>
                    </div>
                    
                </div>
                
            </div>
            
        </div>
        @include('footer')
        </div>
        <script>
        $(document).ready(function(){
        $('.bxslider').bxSlider({
            'mode':'fade',
            'infiniteLoop':'true',
            'responsive':'true',
            'captions':'true',
            'auto':'true',
            'pause':'5000'
        });
        });
        </script>

    </body>
</html>

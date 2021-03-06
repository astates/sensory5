<!DOCTYPE html>
<html lang="en">
    @include('header')
    <body>
        <canvas id="space"></canvas>
        <div class="container">
            @include('nav')
            <div class="position-ref fullHeight overflow_hide padded-top">
                <div class="content">
                    <div class="sub_container">
                        <p class="intro_text_big">The International Space Station</p>
                        <p>How about a live stream from the I.S.S.?</p>
                        <iframe class="iss" src="http://www.ustream.tv/channel/iss-hdev-payload"></iframe>
                    </div>
                </div>
            </div>
            @include('footer')
        </div>
    </body>
</html>
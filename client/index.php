<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Traffic racer</title>
    <link href="style.css" rel="stylesheet" /> </head>

<body>
    <div id="help">
        <p>Controls: Right, Left, Up & Down arrow keys.</p>
    </div>
    <div id="score_div">
        Score: <span id="score">0</span>
    </div>
    <div id="container">
        <div id="line_1" class="line"></div>
        <div id="line_2" class="line"></div>
        <div id="line_3" class="line"></div>
        <div id="car" class="car">
            <div class="f_glass"></div>
            <div class="b_glass"></div>
            <div class="f_light_l"></div>
            <div class="f_light_r"></div>
            <div class="f_tyre_l"></div>
            <div class="f_tyre_r"></div>
            <div class="b_tyre_l"></div>
            <div class="b_tyre_r"></div>
        </div>
        <div id="car_1" class="car">
            <div class="f_glass"></div>
            <div class="b_glass"></div>
            <div class="f_light_l"></div>
            <div class="f_light_r"></div>
            <div class="f_tyre_l"></div>
            <div class="f_tyre_r"></div>
            <div class="b_tyre_l"></div>
            <div class="b_tyre_r"></div>
        </div>
        <div id="car_2" class="car">
            <div class="f_glass"></div>
            <div class="b_glass"></div>
            <div class="f_light_l"></div>
            <div class="f_light_r"></div>
            <div class="f_tyre_l"></div>
            <div class="f_tyre_r"></div>
            <div class="b_tyre_l"></div>
            <div class="b_tyre_r"></div>
        </div>
        <div id="car_3" class="car">
            <div class="f_glass"></div>
            <div class="b_glass"></div>
            <div class="f_light_l"></div>
            <div class="f_light_r"></div>
            <div class="f_tyre_l"></div>
            <div class="f_tyre_r"></div>
            <div class="b_tyre_l"></div>
            <div class="b_tyre_r"></div>
        </div>
        <div id="restart_div">
            <button id="restart">
                Restart<br>
                <small class="small_text">(press Enter)</small>
            </button>
        </div>
    </div>
    <div id="donate">
        <p>Link to the tutorial: <a target="_blank" href="https://goo.gl/RNFT7F">https://goo.gl/RNFT7F</a></p>
        <p>Want to buy me a coffee? <br>
            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="XW2U9PJMKD464">
                <input type="image" src="https://www.paypalobjects.com/en_GB/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online!">
                <img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
            </form>
        </p>
    </div>

    <script src="jquery.min.js"></script>
    <script src="script.js"></script>
</body>

</html>
<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8"><!--The charset attribute specifies the character encoding for the HTML document.UTF-8 - Character encoding for Unicode-->
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <!--
        The viewport is the user's visible area of a web page
        The width=device-width part sets the width of the page to follow the screen-width of the device (which will vary depending on the device).
        The initial-scale=1.0 part sets the initial zoom level when the page is first loaded by the browser.-->
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!--
        The X-UA-Compatible meta tag allows web authors to choose what version of Internet Explorer the page should be rendered as. 
        Edge mode tells Internet Explorer to display content in the highest mode available.-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
       
        <title>Restaurant Site</title>
        <link href="styles.css" rel="stylesheet">

</head>
    <body id="final-example">

    <div class="wrapper">
        <div id="banner">
            <a href="/" title=Return to Home>
            <div style="position:absolute;opacity:0.5; margin-left:275px; width: 820px; height: 545px; background:black;"> </div>
            <!--black box-->
                <img src="img/banner.jpg" alt="Restaurant Banner" class="banner_image">
            </a>
            <div class="centered">Centered</div>
             </div><!--banner-->

        <div id="nav">

        </div>


        <div id="content">
            
            <div id="footer" class="cf">
                <div class="column three">
                    <strong>Phone : </strong>
                    112345678
                </div><!--column--->

                <div class="column three">
                    <strong>Location : </strong>
                    16 /D Chittagong.
                </div>

                <div class="column three last">
                    <strong>Hours : </strong>
                    <em>Tuesday -  Thursday</em><br>
                    1:00m - 9:00pm<br><br>

                    <em>Friday -  Saturday</em><br>
                    4:00m - 11:00pm<br><br>

                    <em>Sunday -  Monday</em><br>
                    Closed<br><br>


                </div>



            </div>

        </div>
        
    </div>

    </body>


</html>
<?php include 'header.php'; ?>

<head>
    <title>SellMart</title>
    <link rel="stylesheet" href="library/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="library/jquery/jquery.mobile.structure-1.4.5.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="library/materialize/css/materialize.min.css" />
    <link rel="stylesheet" href="css/cards.css" />
    <link rel="stylesheet" href="css/favourite.css" />

    <!-- Scripts -->
    <script src="/library/jquery/jquery-1.11.1.js"></script>
    <!--     <script src="..css/favourite.css"></script>-->

</head>

<div data-role="content">
    <!-- CONTENT -->
    <div data-role="content">
        <div class="main-content" style="margin-top: 40px;">
            <h4 style="text-align: center"> My Favourites</h4>

            <label><input type="checkbox" name="checkbox-0" /> Select All </label>

            <div id="favourites-list" class="places-container">

                <div class="card favourite-card">
                    <div class="favourite-image-container" style="background-image: url('../images/kottume.jpg')"></div>
                    <div class="favourite-details">
                        <div>
                            <div class="place-header-container">
                                <strong class="place-header-text"><b>Maggi Papare Kottu</b></strong>
                            </div>
                            <div>
                                <p>Maggi Papare Kottu, a mouth-watering and tongue-tingling Noodle made using Onion, Garlic, Chilli and Pepper.</p>
                            </div>
                            <div>
                                <p><b>Rs. 60.00</b></p>
                            </div>
                            <div class="favourite-icon" style="position: absolute;bottom: 0;right: 0;color: #11284A;">
                                <div class="footer-action"> <i class="fas fa-heart" style="font-size: 24px;"></i></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card favourite-card">
                    <div class="favourite-image-container" style="background-image: url('../images/kottume.jpg')"></div>
                    <div class="favourite-details">
                        <div>
                            <div class="place-header-container">
                                <strong class="place-header-text"><b>Maggi Papare Kottu</b></strong>
                            </div>
                            <div>
                                <p>Maggi Papare Kottu, a mouth-watering and tongue-tingling Noodle made using Onion, Garlic, Chilli and Pepper.</p>
                            </div>
                            <div>
                                <p><b>Rs. 60.00</b></p>
                            </div>
                            <div class="favourite-icon" style="position: absolute;bottom: 0;right: 0;color: #11284A;">
                                <div class="footer-action"> <i class="fas fa-heart" style="font-size: 24px;"></i></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card favourite-card">
                    <div class="favourite-image-container" style="background-image: url('../images/kottume.jpg')"></div>
                    <div class="favourite-details">
                        <div>
                            <div class="place-header-container">
                                <strong class="place-header-text"><b>Maggi Papare Kottu</b></strong>
                            </div>
                            <div>
                                <p>Maggi Papare Kottu, a mouth-watering and tongue-tingling Noodle made using Onion, Garlic, Chilli and Pepper.</p>
                            </div>
                            <div>
                                <p><b>Rs. 60.00</b></p>
                            </div>
                            <div class="favourite-icon" style="position: absolute;bottom: 0;right: 0;color: #11284A;">
                                <div class="footer-action"> <i class="fas fa-heart" style="font-size: 24px;"></i></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card favourite-card">
                    <div class="favourite-image-container" style="background-image: url('../images/kottume.jpg')"></div>
                    <div class="favourite-details">
                        <div>
                            <div class="place-header-container">
                                <strong class="place-header-text"><b>Maggi Papare Kottu</b></strong>
                            </div>
                            <div>
                                <p>Maggi Papare Kottu, a mouth-watering and tongue-tingling Noodle made using Onion, Garlic, Chilli and Pepper.</p>
                            </div>
                            <div>
                                <p><b>Rs. 60.00</b></p>
                            </div>
                            <div class="favourite-icon" style="position: absolute;bottom: 0;right: 0;color: #11284A;">
                                <div class="footer-action"> <i class="fas fa-heart" style="font-size: 24px;"></i></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div style="padding-top: 50px;"></div>

            </div>
        </div>
    </div>

</div>
<div data-role="footer" class="favourite-list-button" style="position:absolute; bottom:0px; left:0px; right:0px; overflow:hidden;">
    <!-- <a href="../html/share-favourite.html" data-role="button" class="favourite-button"><b>Share Favourites</b></a> -->
    <a href="#moda12" data-role="button" class="favourite-button"><b>Share Favourites</b></a>

</div>

<div id="modal2" class="modal">
    <div class="modal-content">
        <div class="modal-header">
            <span class="close">×</span>
            <h2>Email your list</h2>
        </div>
        <div class="modal-body">
            <form action="https://formspree.io/f/xdopyjro" method="POST" enctype="text/plain">
                E-mail:<br>
                <input type="email" name="name"><br>
                Suject:<br>
                <input id="modal_email_subject" type="text" name="name"><br>
                Body:<br>
                <textarea id="modal_email" rows="4" cols="50" name="name"></textarea>

                <fieldset class="ui-grid-a">
                    <div class="ui-block-a">
                        <input type="reset" class="ui-btn ui-btn-inline" value="Reset">
                    </div>
                    <div class="ui-block-b">
                        <input type="submit" class="ui-btn ui-btn-inline ui-btn-b" data-theme="b" value="Send">
                    </div>
                </fieldset>
            </form>


        </div>
    </div>

</div>


<!-- Modal Script -->
<script>
    // Get the button that opens the modal
    var btn = document.querySelectorAll("a.modal-button");

    // All page modals
    var modals = document.querySelectorAll('.modal');

    // Get the <span> element that closes the modal
    var spans = document.getElementsByClassName("close");

    // When the user clicks the button, open the modal
    for (var i = 0; i < btn.length; i++) {
        btn[i].onclick = function(e) {
            e.preventDefault();
            modal = document.querySelector(e.target.getAttribute("href"));
            modal.style.display = "block";
        }
    }

    // When the user clicks on <span> (x), close the modal
    for (var i = 0; i < spans.length; i++) {
        spans[i].onclick = function() {
            for (var index in modals) {
                if (typeof modals[index].style !== 'undefined') modals[index].style.display = "none";
            }
        }
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target.classList.contains('modal')) {
            for (var index in modals) {
                if (typeof modals[index].style !== 'undefined') modals[index].style.display = "none";
            }
        }
    }
</script>

</body>

</html>
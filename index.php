<?php require("header.php"); ?>

<div class="hero">
    <div id="img1" class="img"></div>
    <div id="img2" class="img"></div>
</div>
<div class="container home-grid">
    <div class="about-section">
        <h1>About</h1>
        <p>We are a team of passionate car enthusiasts who run a Facebook and Instagram page dedicated to sharing supercar content with the petrolheads of the world. We post pictures from recent spots, breakfast runs and other events.</p>
        <p>We encourage you to join the supercar spotting community and make sure to share your photos and supercar memories with us.</p>
        <div class="btn"><a href="about.php">Learn more</a></div>
    </div>
    <div>
        <h1>Gallery</h1>
        <div class="home-grid-gallery">
            <div class="insta-tile" id="1">
                <p><i class="fas fa-heart"></i><span class="likes"></span></p>
                <p><i class="fas fa-comment"></i><span class="comments"></span></p>
            </div>
            <div class="insta-tile" id="2">
                <p><i class="fas fa-heart"></i><span class="likes"></span></p>
                <p><i class="fas fa-comment"></i><span class="comments"></span></p>
            </div>
            <div class="insta-tile" id="3">
                <p><i class="fas fa-heart"></i><span class="likes"></span></p>
                <p><i class="fas fa-comment"></i><span class="comments"></span></p>
            </div>
            <div class="insta-tile" id="4">
                <p><i class="fas fa-heart"></i><span class="likes"></span></p>
                <p><i class="fas fa-comment"></i><span class="comments"></span></p>
            </div>
            <div class="insta-tile" id="5">
                <p><i class="fas fa-heart"></i><span class="likes"></span></p>
                <p><i class="fas fa-comment"></i><span class="comments"></span></p>
            </div>
            <div class="insta-tile" id="6">
                <p><i class="fas fa-heart"></i><span class="likes"></span></p>
                <p><i class="fas fa-comment"></i><span class="comments"></span></p>
            </div>
        </div>
    </div>
</div>

<div class="lightbox" data-state="hide">
    <div class="lightbox-container">
        <div class="icon exit"><i class="fas fa-times"></i></div>
        <div class="icon prev"><i class="fas fa-chevron-left"></i></div>
        <div class="icon next"><i class="fas fa-chevron-right"></i></div>
        <div class="lightbox-content">
        </div>
    </div>
</div>

<?php require("footer.php"); ?>

<script src='js/gallery.js' type="text/javascript"></script>
<script src="js/instafeed.js" type="text/javascript"></script>
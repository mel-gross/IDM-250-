<?php /* Template Name: Contact Template */ 
 get_header(); ?>

<main>
    <div id="contentDivContact">
        <div id="divContactA">
            <img src="dist/assets/MelGLogo.png" alt="Mel Gross Illustration">
        </div>
        <div id="divContactB">
            <h1>CALL ME MAYBE!</h1>
            <div id="contactFlex">
            <div>
                <h3>SEND ME AN EMAIL:</h3>
                <form action="mailto:mel.cgross@outlook.com" method="post" enctype="text/plain" id="emailForm">
                <input type="text" name="name" placeholder="Your Name">
                <br><br>
                <input type="text" name="mail" placeholder="Your E-mail Address">
                <br><br>
                <textarea type="text" name="message" rows="3" placeholder="Your Message"></textarea>
                <br><br>
                <div style="display:flex;">
                <button type="submit" value="Send">SEND</button>
                <button type="reset" value="Reset">RESET</button>
                </div>
            </form>
            </div>
            <div>
                <h3>FOLLOW ME ON INSTAGRAM <br> FOR DAILY SKETCHES: </h3>
                <a href="https://www.instagram.com/melgross_art/?hl=en"><button>@MELGROSS_ART</button></a>
            </div>
            </div>
            

        </div>
    </div>
</main>

<?php include '_footer.php' ; ?>
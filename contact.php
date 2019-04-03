<?php require("header.php"); ?>

<div class="flex-wrapper wrapper">
    <div class="flex flex-reverse">
        <div class="hero-contact"></div>
        <div class="container flex-contact">
            <h1>Contact Us</h1>
            <h3>Fill out our form</h3>
            <?php
                if (!isset($_GET['success'])) { ?>
                    <div class="response-msg hide"><span>Response Message</span></div>
                <?php
                }
                else if (isset($_GET['success']) && $_GET['success'] == true) { ?>
                    <div class="response-msg success"><span>Message sent successfully!</span></div>
                <?php
                }
                else if (isset($_GET['success']) && $_GET['success'] == false) { ?>
                    <div class="response-msg failed"><span>Message submission failed.</span></div>
                <?php
                }
            ?>
            <div>
                <form action="mail.php" method="post" autocomplete="off">
                <div class="contact-form">
                        <div id="firstname" class="input">
                            <input type="text" name="fname" id="fname" required>
                            <label for="fname">First Name</label>
                        </div>
                        <div id="lastname" class="input">
                            <input type="text" name="lname" id="lname"  required>
                            <label for="lname">Last Name</label>
                        </div>
                        <div id="email" class="input">
                            <input type="email" name="mail" id="mail"  required>
                            <label for="mail">Email</label>
                        </div>
                        <div id="message">
                            <label for="msg">Message</label>
                            <textarea type="text" name="msg" id="msg" rows="4" required></textarea>
                        </div>
                        <div class="input submit">
                            <button id="submit" type="submit">Submit</button>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php require("footer.php"); ?>
<?php
    include ('common.php');
    outputHeader("Welcome at Middlesex Electronics!");
    outputBannerNavigation("Home");
?>

<!--- Contact section -->
<section>
    <!--- Contact info -->
    <div class="contact-container">
        <div class="contactinfo">
            <div>
                <h2>Contact Info</h2>
                <ul class="info">
                    <li>
                        <span><img src="jpg/location.png"></span>
                        <span>The Burroughs <br>
                            London, Hendon<br>
                            NW4 4BT
                        </span>
                    </li>
                    <li>
                        <span><img src="jpg/mail.png"></span>
                        <span>MiddlesexElectronics@gmail.com</span>
                    </li>  
                    <li>
                        <span><img src="jpg/phone.png"></span>
                        <span>07 123 456 78</span>
                    </li>     
                </ul>
            </div>
        </div>
        <!--- Contact form -->
        <div class="contactForm">
            <h2>Send a Message</h2>
            <div class="formBox">
                <div class="inputBox w50">
                    <input type="text" name="" required>
                    <span>First Name</span>
                </div>
                <div class="inputBox w50">
                    <input type="text" name="" required>
                    <span>Last Name</span>
                </div>
                <div class="inputBox w50">
                    <input type="text" name="" required>
                    <span>Email Address</span>
                </div>
                <div class="inputBox w50">
                    <input type="text" name="" required>
                    <span>Mobile Number</span>
                </div>
                <div class="inputBox w100">
                    <textarea name="" required></textarea>
                    <span>Write your message here...</span>
                </div>
                <div class="inputBox w100">
                    <input type="submit" value="Send">
                </div>
            </div>
        </div>
    </div>
</section>


<?php
        outputFooter("Home");
?>
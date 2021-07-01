<?php
        require 'includes/header.php'

    ?>
        <section class="contact">
            <div class="content">
                <h2>Contact Us</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis a facere itaque, quam possimus
                    consequatur architecto nostrum provident, non rem similique neque ad enim magni rerum sequi quasi
                    hic maiores?</p>
            </div>
            <div class="contact-container">
                <div class="contactInfo">
                    <div class="box">
                        <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                        <div class="text">
                            <h3>Address</h3>
                            <p>4671 Sugar Camp Road,
                                <br>
                                Owatonna, Minnesota,
                                <br>
                                55060
                            </p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="icon"><i class="fas fa-phone-alt"></i></div>
                        <div class="text">
                            <h3>Phone</h3>
                            <p>12345678909</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="icon"><i class="fas fa-envelope"></i></div>
                        <div class="text">
                            <h3>Email</h3>
                            <p>sample@mail.com</p>
                        </div>
                    </div>
                </div>
                <div class="contactForm">
                    <form>
                        <h2>Send Message</h2>
                        <div class="inputBox">
                            <input type="text" name="" required="required">
                            <span>Full Name</span>
                        </div>
                        <div class="inputBox">
                            <input type="text" name="" required="required">
                            <span>Email</span>
                        </div>
                        <div class="inputBox">
                           <textarea required="required"></textarea>
                            <span>Type your Message ...</span>
                        </div>
                        <div class="inputBox">
                            <input type="submit" name="" value="Send">
                           
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
   <?php
    require 'includes/footer.php'
   ?>
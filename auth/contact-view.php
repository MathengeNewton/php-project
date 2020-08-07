<?php include('include/header.php');?>
<!-- Book 1 start -->
<div class="contact-1 content-area-7">
    <div class="container">
        <div class="main-title">
            <h1>Book Now.</h1>
        </div>

        <div class="row">
        <div class="form-container">
        <form name="frmContact" id="" frmContact"" method="post"
            action="" enctype="multipart/form-data"
            onsubmit="return validateContactForm()">

            <div class="input-row">
                <label style="padding-top: 20px;">Name</label> <span
                    id="userName-info" class="info"></span><br /> <input
                    type="text" class="input-field" name="userName"
                    id="userName" required/>
            </div>
            <div class="input-row">
                <label>Email</label> <span id="userEmail-info"
                    class="info"></span><br /> <input type="text"
                    class="input-field" name="userEmail" id="userEmail" required/>
            </div>
            <div class="input-row">
                <label>Amount</label> <span id="amount-info"
                    class="info"></span><br /> <input type="text"
                    class="input-field" name="amount" id="amount" required/>
            </div>
            <div class="input-row">
                <label>purpose</label> <span id="subject-info"
                    class="info"></span><br /> <input type="text"
                    class="input-field" name="subject" id="subject" required/>
            </div>
            <div class="input-row">
                <label>Payment Message</label> <span id="content-info"
                    class="info"></span><br />
                <textarea name="content" id="content"
                    class="input-field" cols="60" rows="6" required></textarea>
            </div>
            <div>
                <input type="submit" name="send" class="btn-submit"
                    value="Book NOW" />

                <div id="statusMessage"> 
                        <?php
                        if (! empty($message)) {
                            ?>
                            <p class='<?php echo $type; ?>Message'><?php echo $message; ?></p>
                        <?php
                        }
                        ?>
                    </div>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-2.1.1.min.js"
        type="text/javascript"></script>
    <script type="text/javascript">
        function validateContactForm() {
            var valid = true;

            $(".info").html("");
            $(".input-field").css('border', '#e0dfdf 1px solid');
            var userName = $("#userName").val();
            var userEmail = $("#userEmail").val();
            var amount = $("#amount").val();
            var subject = $("#subject").val();
            var content = $("#content").val();
            
            if (userName == "") {
                $("#userName-info").html("Required.");
                $("#userName").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (userEmail == "") {
                $("#userEmail-info").html("Required.");
                $("#userEmail").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (!userEmail.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/))
            {
                $("#userEmail-info").html("Invalid Email Address.");
                $("#userEmail").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (amount == "") {
                $("#amount-info").html("Required.");
                $("#amount").css('border', '#e66262 1px solid');
                valid = false;
            }

            if (subject == "") {
                $("#subject-info").html("Required.");
                $("#subject").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (content == "") {
                $("#userMessage-info").html("Required.");
                $("#content").css('border', '#e66262 1px solid');
                valid = false;
            }
            return valid;
        }
</script>

            <div class=" offset-lg-1 col-lg-4 offset-md-0 col-md-5">
                <div class="contact-info">
                    <h3>Payment Information</h3>
                    <div class="media">
                        <i class="fa fa-map-marker"></i>
                        <div class="media-body">
                            <h5 class="mt-0">OFFICE ADDRESS</h5>
							<p>USIU-AFRICA Opposite Mountain View School</p>
                        </div>
                    </div>
                    <div class="media">
                        <i class="fa fa-money"></i>
                        <div class="media-body">
                            <h5 class="mt-0">Phone Number</h5>
                            <p>Business NO:<a href="tel:0477-0477-8556-552">: 20116789</a> </p>
                            <p>Account No<a href="tel:+0477-85x6-552">: Your Phone Number</a> </p>
                        </div>
                    </div>
                    <div class="media mrg-btn-0">
                        <i class="fa fa-envelope"></i>
                        <div class="media-body">
                            <h5 class="mt-0">Payment Confirmation</h5>
                            <p><a href="https://www.gmail.com">info@hostelfinance.com</a></p>
                            <p><a href="#">call us: 0790000000000</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact 1 end -->

<!-- Google map start -->
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="RNGKYGX4SQUNN">
<table>
<tr><td><input type="hidden" name="on0" value="What is your preference">What is your preference</td></tr><tr><td><select name="os0">
	<option value="Servants Quarter">Servants Quarter $150.00 USD</option>
	<option value="Mansion">Mansion $250.00 USD</option>
	<option value="Apartment">Apartment $200.00 USD</option>
</select> </td></tr>
</table>
<input type="hidden" name="currency_code" value="USD">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>

<div class="section">
    <div class="map">
        <div id="contactMap" class="contact-map"></div>
    </div>
</div>
<!-- Google map end -->

<!-- Footer start -->
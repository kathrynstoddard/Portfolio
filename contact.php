<?php include("header.php"); ?>
<?php include("jumbotron.php"); ?>

    <div class="contact">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
          <h3 class="teal">Get In Touch</h3>
            <form class="form" id="contact" name="contact" method="post" action="contact_process.php">
              <div class="form-group">
                <div class="control-group">
                  <input type="text" class="col-md-10 form-control" id="name" name="name" placeholder="Your Name">
                </div>
                <div class="control-group">
                  <input type="text" class="col-md-10 form-control" id="email" name="email" placeholder="Your Email">
                </div>
                <div class="control-group">
                  <textarea name="message" id="message" class="col-md-10 form-control" rows="4" placeholder="Enter your message here"></textarea>
                </div>
              </div>
              <button type="submit" value="Submit" class="btn btn-default">Submit</button>
            </form>
          </div>

          <div class="col-md-5 clearfix">
            <h3 class="teal">Interested in building something together?</h3>
            <p>Fill out the contact form or contact me directly using the information below.</p>

            <p><span class="glyphicon glyphicon-phone-alt prepend">&nbsp;971.645.8114</span><br>
            <span class="glyphicon glyphicon-envelope">&nbsp;kathryn.stoddard@gmail.com</span></p>

            <h3 class="teal">Stay Connected</h3>

            <ul>
              <li><a href="https://twitter.com/kathrynrefined" target="_blank"><img src="assets/images/social-twitter.png"></a></li>
              <li><a href="https://github.com/kathrynstoddard" target="_blank"><img src="assets/images/social-github.png"></a></li>
              <li><a href="http://www.linkedin.com/in/kathrynpdx/" target="_blank"><img src="assets/images/social-linkedin.png"></a></li>
            </ul>

          </div>
        </div>
      </div>

    </div><!--End contact div-->

<?php include("footer.php"); ?>

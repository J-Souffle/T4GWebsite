<!DOCTYPE html>
<section id="contact">
    <div class="container">
        <form class="contact-form" action="contactform.php" method="post">
          <!-- <label for="name">Your Name:</label> -->
          <input type="form-text" id="name" name="your name" placeholder="Name">
          <!-- <label for="email">Email:</label> -->
          <input type="form-text" id="email" name="email" placeholder="Email">
          <!-- <label for="subject">Subject:</label> -->
          <input type="form-text" id="subject" name="subject" placeholder="Subject">
          <textarea id="message" name="subject" placeholder="Message" style="height:10rem"></textarea>
          <button type="submit" name="Submit">Submit</button>
        </form>
        <input type = "hidden" name="_next" value="thanks.html"/>
    </div>
<section>
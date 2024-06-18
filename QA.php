<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=">
  <title>Responsive Contact Us Page</title>
  <link rel="stylesheet" href="FAQ1.css">
</head>
<body>

  
  <section>
    
    <div class="section-header">
      <div class="container">
        <h2>Frequently Asked Questions?</h2>
        <p> <div class="faq-item">
            <h3 class="question">1.What view can be enjoyd from dream home ?</h3>
            <p class="answer">Views of Indian Ocen,Colombo Harbour,Lotus Tower and Colombo Port City  </p>
        </div>

        <div class="faq-item">
            <h3 class="question">2 Who are the partners  ?</h3>
            <p class="answer">ND conscruction(pvt)LTD | ABC group architects (Sri Lanka) | ABC civil and structural engineering consultain (pvt)LTD
            </p>
        </div>

        <div class="faq-item">
            <h3 class="question">3. How can I contact the seller?</h3>
            <p class="answer">Each apartment listing includes contact information for the seller. You can find the seller's phone number and email address in the apartment details page. Feel free to reach out to the seller directly to inquire about the property or arrange a viewing.</p>
        </div>

        <div class="faq-item">
            <h3 class="question">4. What type of flooring will the apartments have ?</h3>
            <p class="answer">Porcelain tile for living, dining ,pantry,yard,balcony,bathrooms|American walnut timber flooring for bedrooms </p>
        </div>

        <div class="faq-item">
            <h3 class="question">5.How meny vehical parking space are allocated for an apartment?</h3>
            <p class="answer" > one parking space per 2 bedroom apartment ;Two parking space per 3 and 4 bedroom apartment </p>
        </div>
        <div class="faq-item">
            <h3 class="question">6.Will my apartment be furnished?</h3>
            <p class="answer">All apartmrnts are sold unfurnished</p>

        </div></p>
      </div>
    </div>
    
    <div class="container">
      <div class="row">
        <div class="contact-form">
          <form action="QAinsert.php" id="contact-form" method="post">
            <h2>Send Question</h2>
            <!-- <div class="input-box">
              <input type="text" required="true" name="Qusestions_Number">
              <span>Qusestions Number</span>
            </div> -->
            <div class="input-box">
              <input type="text" required="true"  name="name" placeholder="Enter name">
              
            </div>
            
            <div class="input-box">
              <input type="email" required="true" name="email"  placeholder="Enter email">
          
            </div>
            
            <div class="input-box">
              <textarea required="true" name="comment"  placeholder="Enter comment"></textarea>
           
            </div>
            
            <div class="input-box">
              <input type="submit" value="Send" name="submit">
            </div>
          </form>
        </div>
        
      </div>
    </div>
  </section>
  
</body>
</html>
<?php
include_once 'head.php';
include_once 'header.php'
?>
<div class="clear"></div>
  <div class="container">
    <div class="container-left">
      <div>
        <div class="insidebanner"></div>
      </div>
      <div class="clear"></div>
      <div class="workarea">
        <div>
          <div>
            <h2>Contact Form</h2>
          </div>
          <div class="service-content">
            <div style="margin-bottom:10px;">
              <div> <br />
                   <form name="contactform" method="post" action="send_form_email.php">
<table width="450px">
<tr>
 <td valign="top">
  <label for="first_name">First Name *</label>
 </td>
 <td valign="top">
  <input  type="text" name="first_name" maxlength="50" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="last_name">Last Name *</label>
 </td>
 <td valign="top">
  <input  type="text" name="last_name" maxlength="50" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="email">Email Address *</label>
 </td>
 <td valign="top">
  <input  type="text" name="email" maxlength="80" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="telephone">Telephone Number</label>
 </td>
 <td valign="top">
  <input  type="text" name="telephone" maxlength="30" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="comments">Comments *</label>
 </td>
 <td valign="top">
  <textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
 </td>
</tr>
<tr>
 <td colspan="2" style="text-align:center">
  <input type="submit" value="Submit"></a>
 </td>
</tr>
</table>
</form>
              </div>
              <div> <br />
                <h6>Contact Information: </h6>
                <img src="images/photo-contact.jpg" alt="" width="196" height="130" class="project-img" />
                <p><h3>InfraDaily 
                 Plot No 902, Block No 11<br>
                 Malaysian Township, KPHB Colony,<br>
                 Kukatpally,Hyderabad<br />
                  88-99 Sit Amet, Lorem<br />
                  USA</h3></p>
                <p> <span><img src="images/ico-phone.png" alt="" width="20" height="16" hspace="2"  /> Phone:</span> (888) 123 456 789<br />
                  <span><img src="images/ico-fax.png" alt="" width="20" height="16" hspace="2"  /> Fax:</span> (888) 987 654 321<br />
                  <span><img src="images/ico-website.png" alt="" width="20" height="16" hspace="2"  /> Website:</span> <a href="index.php">www.groupinfra.com</a><br />
                  <span><img src="images/ico-email.png" alt="" width="20" height="16" hspace="2"  /> Email:</span> <a href="index.php">info@groupinfra.com</a><br />
                  <span><img src="images/ico-twitter.png" alt="" width="20" height="16" hspace="3"  /> <a href="index.php">Follow</a> on Twitter</span><br />
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="clear"></div>
        <div> </div>
      </div>
    </div>
    <div class="container-right">
      <div>
        <div class="welcomezone">
          <div class="welcomebottom">
            <div class="welcomeworkarea">
              <h1>Contact</h1>
              <div> <strong>
<p><h3>InfraDaily 
                 Plot No 902, Block No 11<br>
                 Malaysian Township, KPHB Colony,<br>
                 Kukatpally,Hyderabad<br />
                  88-99 Sit Amet, Lorem<br />
                  USA</h3></p>
<strong>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="clear"></div>
  
<?php
include_once 'sidebar.php';
?>
<?php
include_once 'footer.php';
?>
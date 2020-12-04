<?php
 
if ( isset( $_REQUEST ) && !empty( $_REQUEST ) ) {
 if (
 isset($_REQUEST['phoneNumber'],$_REQUEST['carrier'],$_REQUEST['smsMessage'] ) &&
  !empty( $_REQUEST['phoneNumber'] ) &&
  !empty( $_REQUEST['carrier'] )
 ) {
  $message = wordwrap( $_REQUEST['smsMessage'], 70 );
  $to = $_REQUEST['phoneNumber'] . '@' . $_REQUEST['carrier'];
  $result = @mail( $to, '', $message );
  print 'Message was sent to ' . $to;
 } else {
  print 'Please Provide All The Information ';
 }
}
 
?>

 <head>
   <meta charset="utf-8" />
  </head>
  <body>
   <div id="container">
    <h1>Sending SMS with PHP</h1>
    <form action="" method="post">
     <ul>
      <li>
       <label for="phoneNumber">Phone Number</label>
       <input type="text" name="phoneNumber" id="phoneNumber" /></li><br>
      <li>
      <label for="carrier">Carrier</label>
       <input type="text" name="carrier" id="carrier" />
      </li><br>
      <li>
       <label for="smsMessage">Message</label>
       <textarea name="smsMessage" id="smsMessage" cols="45" rows="4"></textarea>
      </li><br>
     <li><input type="submit" name="sendMessage" id="sendMessage" value="Send Message" /></li>
    </ul>
   </form>
  </div>
 </body>
</html>

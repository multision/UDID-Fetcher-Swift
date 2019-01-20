<?php 
    $subject = "This is my UDID from iOS device";
    $body  = "Hello<br /> This is my UDID: {$_GET['UDID']} <br />";
    $body .= "Device product: {$_GET['DEVICE_PRODUCT']} <br />";
    $body .= "Device version: {$_GET['DEVICE_VERSION']} <br />";
    $body .= "Device name: {$_GET['DEVICE_NAME']} <br />";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>UDID</title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="mobile-web-app-capable" content="yes">
        <link rel="apple-touch-icon" href="icon.png">
        <link rel="apple-touch-startup-image" href="launch.png">
        <meta name="apple-mobile-web-app-title" content="UDID">
        <meta name="apple-mobile-web-app-status-bar-style" content="white">
        <meta http-equiv="refresh" content="0; url=udid://?udid=<?php echo $_GET['UDID']; ?>">
        <style>
          body {
            background: #F8F8F8;
            font-family: Helvetica;
            text-align: center;
          }
          
          a {
            text-decoration: none;
          }
          
          .button {
            padding: 15px;
            border-radius: 5px;
            background: #1E90FF;
            color: snow;
          }
          
.aotb {
  font-family: Helvetica;
  font-size: 15px;
  position: absolute;
  right: 0;
  bottom: 0;
  left: 0;
  padding: 1rem;
  background-color: #F8F8F8;
  color: #000000;
  text-align: left;
}

.aotb a {
  text-decoration: none;
  color: #ffffff;
}
        </style>
    </head>
    <body>
        <div>
            <h1>Device UDID and more.</h1>
                <p>UDID: <?php echo $_GET['UDID']; ?></p>
                <p>Device Model: <?php echo $_GET['DEVICE_PRODUCT']; ?></p>
                <p>iOS Build: 
<script>
var iOS = parseFloat(
	('' + (/CPU.*OS ([0-9_]{1,5})|(CPU like).*AppleWebKit.*Mobile/i.exec(navigator.userAgent) || [0,''])[1])
	.replace('undefined', '3_2').replace('_', '.').replace('_', '')
) || false;

if(iOS == false) {
document.write("Device Is Not Supported.");
} else {
document.write("iOS " + iOS + "");
}
</script> 
                (<?php echo $_GET['DEVICE_VERSION']; ?>)</p>
        </div>
        <div class="aotb">&copy; Made With ❤️ By Mason Scherbarth.</div>
    </body>
</html>
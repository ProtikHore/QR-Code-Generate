<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-container">
  <h2>QR Code Generate</h2>
  <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-green w3-large">Web</button>

  <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

      <div class="w3-center"><br>
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
      </div>

      <form class="w3-container" action="{{route('qr.index')}}" method = "POST">
      	{{csrf_field()}}
        <div class="w3-section">
          <label><b>Enter Website Link</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Website Link" name="name" required>
          <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Submit</button>
        </div>
      </form>

      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
      </div>

    </div>
  </div>
</div>




<div class="w3-container">
  <h2>Phone QR Code Generate</h2>
  <button onclick="document.getElementById('id02').style.display='block'" class="w3-button w3-green w3-large">Phone</button>

  <div id="id02" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

      <div class="w3-center"><br>
        <span onclick="document.getElementById('id02').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
      </div>

      <form class="w3-container" action="{{route('phone.index')}}" method = "POST">
      	{{csrf_field()}}
        <div class="w3-section">
          <label><b>Enter Phone No</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Phone No" name="phone" required>
          <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Submit</button>
        </div>
      </form>

      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <button onclick="document.getElementById('id02').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
      </div>

    </div>
  </div>
</div>



<div class="w3-container">
  <h2>Email QR Code Generate</h2>
  <button onclick="document.getElementById('id03').style.display='block'" class="w3-button w3-green w3-large">Email</button>

  <div id="id03" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

      <div class="w3-center"><br>
        <span onclick="document.getElementById('id03').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
      </div>

      <form class="w3-container" action="{{route('email.index')}}" method = "POST">
      	{{csrf_field()}}
        <div class="w3-section">
          <label><b>Enter Email Address</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Email Address" name="email_address" required>

          <label><b>Enter Email Subject</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Email Subject" name="email_subject" required>

          <label><b>Enter Email Body</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Email Body" name="email_body" required>
          <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Submit</button>
        </div>
      </form>

      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <button onclick="document.getElementById('id03').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
      </div>

    </div>
  </div>
</div>



<div class="w3-container">
  <h2>SMS QR Code Generate</h2>
  <button onclick="document.getElementById('id04').style.display='block'" class="w3-button w3-green w3-large">SMS</button>

  <div id="id04" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

      <div class="w3-center"><br>
        <span onclick="document.getElementById('id04').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
      </div>

      <form class="w3-container" action="{{route('sms.index')}}" method = "POST">
      	{{csrf_field()}}
        <div class="w3-section">
          <label><b>Enter Receiver Number</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Receiver Number" name="receiver_number" required>

          <label><b>Enter Message</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Message" name="message" required>

          <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Submit</button>
        </div>
      </form>

      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <button onclick="document.getElementById('id04').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
      </div>

    </div>
  </div>
</div>

            
</body>
</html>

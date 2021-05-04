<?php include('invitiserver.php'); ?>
<html>
<head>
    <title>INVITATION</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="3.css">
     <script type="text/javascript" src="pp.js"></script>
      <script type="text/javascript" src="1.js"></script> 
    
    <script type="text/javascript" src="result.js"></script>
</head>
    <body>


       <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Eventin'</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="afterlogin.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href=""></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Events
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Birthday</a></li>
            <li><a class="dropdown-item" href="#">Wedding</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
          <li class="nav-item">
          <a class="nav-link" href="logout.php">log out</a>
        </li>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
        </li>
      </ul>
      
    </div>
  </div>
</nav>

        <div class="container mx-auto mt-4 ">
            <div class=" col-md-6 mx-auto  p-4 gls ">
                <h2>Provide us with some details !</h2>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" id="register">

            <label class="required my-1">Title of the Event:</label>
            
            <input type="text" name="title" id="title" class="form-control my-2" required>
            

            <label for="start">Date of the Event:</label>

			<input type="date" id="date" name="date"
      			 value="date"
       		 class="form-control my-2" required>

            

            <label>Venue of the Event:</label>
            
            <input type="text" name="venue" id="venue" class="form-control my-2" required>
            

            <label>Timing of the Event:</label>
            
            <input type="text" name="time" id="time" class="form-control my-2" required>
            

            <label>Theme of the Event:</label>
            
            <input type="text" name="theme" id="theme" class="form-control my-2" required>
            

            <label>Number of guests to be invited:</label>
            
            <input type="text" name="guests" id="guests" class="form-control my-2" required>
            

            <label>Message:</label>
            
            <input type="text" name="message" id="message" class="form-control my-2" required><br>
           <!-- <input type="submit" onclick="handleSubmit()"/>-->
           <input type="submit" name="submit" onclick="handleSubmit()"/><br>
            <a href="invi.html" input type="button" />Generate Invitation</a>
            

            <!--<div class="form-submit" >
            <input type="submit" value="Submit" class="submit" id="submit" name="submit" /><br><br>
                            <input type="submit" value="Reset" class="submit" id="reset" name="reset" />
                        </div><br><br>-->
                        <!--<input type="submit" onclick="handleSubmit()"/>-->
   <!-- <button class="btn btn-warning " id="sub" disabled="disabled" onclick="p()" name="submit">Generate Invitation !</button>-->
    <!-- <input type="submit" class="btn btn-warning" onclick="p()" value="Generate Invitation !"> -->
   

    
    
     </form>

     <!--<div class="row my-2">
        <div class="col-7">
     <input type="text" value="Hello World" id="myInput" class="form-control">
</div>
<div class="col-5">-->

<!-- The button used to copy the text -->
<!--<button onclick="myFunction()" class="btn btn-warning">Copy</button>
<a class="wplink" href="https://api.whatsapp.com/send?phone=919902142421&amp;text=Hi there! I have a question :)"><i class="fa fa-whatsapp wp" aria-hidden="true"></i>  Send Message</a>
</div>
</div>
 
                 <div class="row justify-content-center">
                  <div class="col-3">
            <button onclick="Save()" class="btn btn-warning">Save</button>
        </div>-->
        
<!--<div class="col-3">
            <button onclick="Save()"class="btn btn-warning">Save</button>
        </div>-->
        <!--</div>--><!--end register-->
   <!-- </div>--><!--end main-->

<!-- The text field -->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script type="text/javascript">
    var hours = 1; 
var now = new Date().getTime();
var setupTime = localStorage.getItem('setupTime');
if (setupTime == null) {
    localStorage.setItem('setupTime', now)
} else {
    if(now-setupTime > hours*60*60*10) {
        localStorage.clear()
        localStorage.setItem('setupTime', now);
    }
}
console.log(now-setupTime);
console.log(hours*60*60*10);
    if(localStorage.getItem("response")!=null){
        document.getElementById("myInput").value= localStorage.getItem("response");}
        else{
            document.getElementById("myInput").value= "Please Fill the form";
        }
        


        (function() {
    $('#register > input').keyup(function() {

        var empty = false;
        $('#register > input').each(function() {
            if ($(this).val() == '') {
                empty = true;
            }
        });

        if (empty) {
            $('#sub').attr('disabled', 'disabled'); // updated according to http://stackoverflow.com/questions/7637790/how-to-remove-disabled-attribute-with-jquery-ie
        } else {
            $('#sub').removeAttr('disabled'); // updated according to http://stackoverflow.com/questions/7637790/how-to-remove-disabled-attribute-with-jquery-ie
        }
    });
})()
    </script>-->
    
 

    
    </body>
    </html>
<?php $con = new mysqli("localhost","root", "", "hippo") or die("could not connect");?>
<?php
error_reporting(1);
/**
 * Template Name:Hippo Registration Form
 *
 * @package ThinkUpThemes
 */
//get_header();

?>
<div class="clear"></div>

 <head> 
    <style type="text/css">
	.panel-body {
    width: 80%;
    margin: 0 AUTO;
}
.row {
    margin-right: 0 !important;
    margin-left: 0 !important;
}

.thumb-img {
  float: left;
  margin: 0 15px 0 0;
  width: 46%;
}
.input-sm {
 padding: 0 0 0 6px!important;
 font-size: 14px;
}
.form-control {
 width: 100%;
}
textarea {
 width: 95%important;
 padding: 6px 0 6px 5px !important;
}
select.input-sm {
 width: 100% !important;
}
input.btn-block[type="submit"], input.btn-block[type="reset"], input.btn-block[type="button"] {
 width: 100px !important;
background: #ccc;
border: #ccc;
color: #000;
font-weight: bold;
margin-left: 14px;
}
.pannum {
text-transform: uppercase;
}
.personalinfo {
 background: #8D3431;
 padding: 4px 37px 25px 28px;
 border-radius: 7px;
}
.personalinfo h2 {
    color: #fff;
    font-weight: bold;
    font-size: 18px;
    padding: 11px 0 7px 0;
}
.panel-title {
 font-size: 22px!important;
}
.form-check-label {
    margin-bottom: 0;
    color: #fff;
}
input#flexRadioDefault1 {
    margin-left: 0px;
    position: relative;
}
.form-group {
    margin-bottom: 30px !important;
}
h1.panel-title {
    text-align: center;
    padding: 8px 0;
}
</style>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<script language="Javascript" type="text/javascript">

        function onlyAlphabets(e, t) {
            try {
                if (window.event) {
                    var charCode = window.event.keyCode;
                }
                else if (e) {
                    var charCode = e.which;
                }
                else { return true; }
                if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123) || (charCode==32) || (charCode==8))
                    return true;
                else
                    alert("ENTER ONLY ALPHABATIC VALUE");
                    return false;
            }
            catch (err) {
                alert(err.Description);
            }
        }
 </script>
 
 
 <script language="Javascript" type="text/javascript">
      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode != 46 && charCode > 31 && (charCode < 48 || charCode > 57))
         {
             alert("ENTER ONLY NUMERIC VALUE");
            return false;
          }
         else
         {
         return true;
       }
      }
    </script>
   
    <script type="text/javascript">
 
 // Below Function Executes On Form Submit
function ValidationForm() {

// Storing Field Values In Variables
var f_name = document.getElementById("first_name").value;
var address = document.getElementById("street_address").value;
var city = document.getElementById("city").value;
var state = document.getElementById("state").value;
var postal = document.getElementById("zip_code").value;
var phoneNumber = document.getElementById("mob_no").value;
var email = document.getElementById("email").value;
if (first_name == ""  || street_address == "" || city == "" || state == "" || zip_code == "" || mob_no == "" || email == "") {
        alert("all value must be filled out");
        return false;
    }

}
  </script>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
</head>

<body>

<div id="contentsec">
    <div class="inner">
        <!-- Columns -->
        <div class="columns">
            <!-- BreadCrumb -->
           <!-- Small side bar left -->
            <div class="static">
   
<div class="">
        <div class="row centered-form">
        <div class="col-md-12">
         <div class="panel panel-default">
          <div class="panel-heading">
         <h1 class="panel-title">Hippo API Form</h1>
      </div>
      
      <div class="donation-text"> <div class="">
                  </div>
                  </div>
       <div class="panel-body">
      
      
      <div class="personalinfo">
   
<form action="http://localhost/wp/hippo/insert-hidden/" method="post" name="volunteerForm" class="form_control" onSubmit="return ValidationForm()" enctype="multipart/form-data">
<br><br>

      <div class="row">
      <div class="col-md-4">
            <div class="form-group">                                    
  <input type="text" id="first_name" name="first_name" class="form-control input-sm" placeholder="First Name*" required="required" onKeyPress="return onlyAlphabets(event,this);" >
            </div>
           </div>
		   
		    <div class="col-md-4">
            <div class="form-group">                                    
  <input type="text" id="middle_name" name="middle_name" class="form-control input-sm" placeholder="Middle Name" >
            </div>
           </div>
		   
		     <div class="col-md-4">
            <div class="form-group">                                    
  <input type="text" id="last_name" name="last_name" class="form-control input-sm" placeholder="Last Name*" required="required" onKeyPress="return onlyAlphabets(event,this);" >
            </div>
           </div>
		   
        </div>
		
		<div class="row">
           <div class="col-md-8">
            <div class="form-group">
       <textarea id="street_address" name="street_address" placeholder="Street Address*" rows="1" class="form-control" required="required"></textarea>
            </div>
           </div>
        
        <div class="col-md-4">
            <div class="form-group">
			 <input type="text" id="unit" name="unit" class="form-control input-sm" placeholder="Unit #" >
            </div>
           </div>
       </div>
	   
	   
	       <div class="row">
       <div class="col-md-4">
            <div class="form-group">
            <input type="text" id="city" name="city" class="form-control input-sm" placeholder="City*" required="required"   onKeyPress="return onlyAlphabets(event,this);">
            </div>
           </div>
       
           <div class="col-md-4">
            <div class="form-group">
								  
												  
		<select id="state" name="state" class="form-control selectpiker" required="required">
		<option value="">Select State*</option>
	<option value="AL">Alabama</option>
	<option value="AK">Alaska</option>
	<option value="AZ">Arizona</option>
	<option value="AR">Arkansas</option>
	<option value="CA">California</option>
	<option value="CO">Colorado</option>
	<option value="CT">Connecticut</option>
	<option value="DE">Delaware</option>
	<option value="DC">District of Columbia</option>
	<option value="FL">Florida</option>
	<option value="GA">Georgia</option>
	<option value="HI">Hawaii</option>
	<option value="ID">Idaho</option>
	<option value="IL">Illinois</option>
	<option value="IN">Indiana</option>
	<option value="IA">Iowa</option>
	<option value="KS">Kansas</option>
	<option value="KY">Kentucky</option>
	<option value="LA">Louisiana</option>
	<option value="ME">Maine</option>
	<option value="MD">Maryland</option>
	<option value="MA">Massachusetts</option>
	<option value="MI">Michigan</option>
	<option value="MN">Minnesota</option>
	<option value="MS">Mississippi</option>
	<option value="MO">Missouri</option>
	<option value="MT">Montana</option>
	<option value="NE">Nebraska</option>
	<option value="NV">Nevada</option>
	<option value="NH">New Hampshire</option>
	<option value="NJ">New Jersey</option>
	<option value="NM">New Mexico</option>
	<option value="NY">New York</option>
	<option value="NC">North Carolina</option>
	<option value="ND">North Dakota</option>
	<option value="OH">Ohio</option>
	<option value="OK">Oklahoma</option>
	<option value="OR">Oregon</option>
	<option value="PA">Pennsylvania</option>
	<option value="RI">Rhode Island</option>
	<option value="SC">South Carolina</option>
	<option value="SD">South Dakota</option>
	<option value="TN">Tennessee</option>
	<option value="TX">Texas</option>
	<option value="UT">Utah</option>
	<option value="VT">Vermont</option>
	<option value="VA">Virginia</option>
	<option value="WA">Washington</option>
	<option value="WV">West Virginia</option>
	<option value="WI">Wisconsin</option>
	<option value="WY">Wyoming</option>
</select>
												  
	  </div>
           </div>
        
        <div class="col-md-4">
          <div class="form-group">
 <input type="text" id="zip_code" name="zip_code" class="form-control input-sm" placeholder="Zip Code*" required="required" MaxLength="100" onKeyPress="return isNumberKey(event)">
</select></div></div>
       </div>
                           
    
<div class="row">
       <div class="col-md-4">
            <div class="form-group">
            <input type="date" id="dob" name="dob" class="form-control input-sm" placeholder="DOB*" required="required"  onKeyPress="return isNumberKey(event);">
            </div>
           </div>
		   
		    <div class="col-md-4">
            <div class="form-group">
 <input type="text" id="mob_no" name="mob_no" class="form-control input-sm" placeholder="Mobile No.*" required="required" maxlength="10" onKeyPress="return isNumberKey(event)">
            </div>
                                    </div>
       
        <div class="col-md-4">
          <div class="form-group">
    <input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email*" required="required">
          </div>
                            </div>
        
  
       </div>    
         
       <div class="row">
<div class="col-md-12">
<h5 style="color:#fff; font-size:15px;">IS This A House Condo or Ho5: </h5>        
    </div></div>
             <div class="row"><div class="col-md-4"><div class="form-group">
         <input class="form-check-input" type="radio" name="housech" id="flexRadioDefault1" value="House" checked/>
  <label class="form-check-label" for="flexRadioDefault1"> House </label>
 </div></div>
 
 <div class="col-md-4"><div class="form-group">
         <input class="form-check-input" type="radio" name="housech" value="Condo" id="flexRadioDefault2"/>
  <label class="form-check-label" for="flexRadioDefault2"> Condo </label>
 </div></div>
 
 <div class="col-md-4"><div class="form-group">
        <input class="form-check-input" type="radio" name="housech" value="HO5" id="flexRadioDefault3"/>
  <label class="form-check-label" for="flexRadioDefault3"> HO5 </label>
 </div></div>
  </div>
  
	   <input type="submit" name="submit" value="Submit" class="btn btn-info btn-block">
         </form>
      
      </div>
      <br>
      

      
</div>
       </div>
      </div>
     </div>
    </div>
 
 
 </div>
      </div>
     </div>
    </div>
	
	<br>
	<div>
	</div>
	
	<br>

</body>
<div class="clear"></div>

<?php //get_footer(); ?>
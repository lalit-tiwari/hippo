<?php $con = new mysqli("localhost","root", "", "hippo") or die("could not connect");?>
<style type="text/css">
.don_table table th, .don_table table td  {
padding : 4px 4px;
text-align:center;
}
</style>
<?php esc_html_e( ' ', 'textdomain' );
	
	echo '<style type="text/css">
.thumb-img {
  float: left;
  margin: 0 15px 0 0;
  width: 46%;
}
.sponsers {display:none;}

.input-sm {
	padding: 0 0 0 6px!important;
}
.form-control {
	width: 98%;
}
textarea {
	width: 95%important;
	padding: 6px 3px!important;
}
select.input-sm {
	width: 100% !important;
}
input.btn-block[type="submit"], input.btn-block[type="reset"], input.btn-block[type="button"] {
	width: 100px!important;
	background: #ea9602;
	border: #ea9602;
	color:#fff;
}
.pannum {
text-transform: uppercase;
}
.cusimage {
	width: 134px;
	padding: 8px 5px;
}
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
';
$user_id = $current_user->ID;	
if(isset($_POST['Submit'])) {
global $wpdb;
 
//$tokenTxnId = time().'_'.rand(); 
 //print_r($_POST); die;
 $auth_token = $_POST['auth_token'];
 $api_url = $_POST['api_url'];
 $p_date = date("Y-m-d H:i:s");
 
 $wpdb->insert( 
	$wpdb->prefix . "tokendetails", 
	array( 
		'auth_token' => $auth_token, 
		'api_url' => $api_url,
		'p_date' => $p_date,
		'status' => '1'
	)
	);
	
	echo "<br>";
	echo "Token Details Upload Successfully";
	}
?>

<h3>Token Form</h3>
<br />
	
     <form action="" method="post" name="" onsubmit="" class="form_control" enctype="multipart/form-data">
     	<div class="row">
							
							<div class="col-md-4">
			    					<div class="form-group">                                   	
  <input type="text" name="auth_token" class="form-control input-sm" placeholder="Enter Auth Token">
			    					</div>
			    				</div>
								
								<div class="col-md-4">
			    					<div class="form-group">                                   	
  <input type="text" name="api_url" class="form-control input-sm" placeholder="Enter API URL " >
			    					</div>
			    				</div>
									
								</div>
                            
                             <div class="row">
								 
							 
                       <div class="col-md-4">
			    					<div class="form-group">
					   <input type="Submit" name="Submit" value="Submit" class="btn btn-info btn-block">
							</div> </div>		</div>
			    		</form>
<br>
							
<div class="clear"></div>
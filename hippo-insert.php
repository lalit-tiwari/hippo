<?php $con = new mysqli("localhost","root", "", "hippo") or die("could not connect");?>
<?php
error_reporting(1);
/**
 * Template Name:Hippo Insert Form
 *
 * @package ThinkUpThemes
 */
//get_header();

if($_POST['submit']) {
global $wpdb;
$table_name = $wpdb->prefix . "hipporegistration";
 $first_name = $_POST['first_name'];
 $middle_name = $_POST['middle_name'];
 $last_name = $_POST['last_name'];
 $street_address = $_POST['street_address'];
 $unit = $_POST['unit'];
 $city = $_POST['city'];
 $state = $_POST['state'];
 $zip_code = $_POST['zip_code'];
 $dob = $_POST['dob'];
 $mob_no = preg_replace('/\s+/', '', $_POST['mob_no']);
 $email = $_POST['email'];
 $housech = $_POST['housech'];
 $p_date = date("Y-m-d H:i:s");
 $status = '1';

 $query2 = "Select * from wp_hipporegistration where email = '$email'";
 $result2 = $con->query($query2);
  error_log(print_r('query 1 = '.$query2,true));
  //if($result2->num_rows>0)
  //{
   //echo "email already exist";
   //exit();
  //}
       
  $query1 = "Select * from wp_hipporegistration where mob_no = '$mob_no'";
  $result1 = $con->query($query1);
  
  //error_log(print_r('query 1 = '.$query1,true));
  //if($result1->num_rows>0)
  //{
   //echo "mobile no already exist";
   //exit();
  //}

 $wpdb->insert(
 'wp_hipporegistration',
 array(
  'first_name' => $first_name,
  'middle_name' => $middle_name,
  'last_name' => $last_name,
  'street_address' => $street_address,
  'unit' => $unit,
  'city' => $city,
  'state' => $state,
  'zip_code' => $zip_code,
  'dob' => $dob,
  'mob_no' => $mob_no,
  'email' => $email,
  'housech' => $housech,
  'p_date' => $p_date,
  'status' => $status
 )
 );
 //echo $wpdb->last_query;
 //die();
 $lastid = $wpdb->insert_id;
 if($lastid>0)
 {
 /*echo "<script> window.location.href = 'http://localhost/wp/hippo/'; </script>";*/

 echo '<script> alert("Thanks Your form is Submitted") </script>';
 $dob1 = str_replace('/','',$dob);
 $dob2= date('mdY',strtotime($dob1));
 
$ch = curl_init();

$sql_token = "SELECT id, auth_token, api_url FROM wp_tokendetails";
$result_token = $con->query($sql_token);

//print_r(mysqli_fetch_array($result_token));
$result= mysqli_fetch_array($result_token);
 $api_url= $result['api_url'];
 $token= $result['auth_token'];

	
	$url = $api_url;
    $dataArray = array('auth_token' => $token,
		 'street'=>$street_address,
		 'city'=>$city,
		 'state'=>$state,
		 'zip'=>$zip_code,
		 'first_name'=>$first_name,
		 'last_name'=>$last_name,
		 'email'=>$email,
		 'phone'=>$mob_no,
		 'date_of_birth'=>$dob2,
		 );
  
    $data = http_build_query($dataArray);
  
    $getUrl = $url."?".$data;
  
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_URL, $getUrl);
    curl_setopt($ch, CURLOPT_TIMEOUT, 80);
      curl_close ($ch); 
    $response = curl_exec($ch);

print_r(json_decode($response));
$res=json_decode($response);
//$suc=$res->success;
$err=$res->errors;
// echo '<pre>';
// print_r($suc);
// print_r($err[0]->message);
 exit();
// Further processing ...
//if ($server_output == "OK") { ... } else { ... }
 
 
 }  
 
 else {
 echo '<script> alert("Something is wrong please refresh page and fill again") </script>';
 }
 
  }  
?>

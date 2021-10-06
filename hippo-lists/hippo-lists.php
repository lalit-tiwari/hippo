<?php $con = new mysqli("localhost","root", "", "hippo") or die("could not connect");?>
<style type="text/css">
.don_table table th, .don_table table td  {
padding : 4px 4px;
text-align:center;
}
.input-select {
    margin: 0 29px;
}
.btn-orange {
	color: #FFF;
	background: #af0101;
	border: 1px solid #af0101;
	font-family: arial, sans-serif;
	padding: 4px 14px 5px 12px;
	font-size: 14px;
	font-size: 13px;
	font-weight: 700;
	border-radius: 4px;
}
table.dataTable thead > tr > th.sorting_asc, table.dataTable thead > tr > th.sorting_desc, table.dataTable thead > tr > th.sorting, table.dataTable thead > tr > td.sorting_asc, table.dataTable thead > tr > td.sorting_desc, table.dataTable thead > tr > td.sorting {
    padding-right: 22px !important;
}
#btnExport {
    float: right;
    margin: 0 10px;
}
#exportButton {
	float: right;
}
</style>

    <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.1/themes/base/jquery-ui.css" />
    <script src="http://code.jquery.com/jquery-1.8.2.js"></script>
    <script src="http://code.jquery.com/ui/1.9.1/jquery-ui.js"></script>
    <script>
    $(function(){
        $( ".datepicker" ).datepicker({dateFormat: 'yy-mm-dd'});
        $("#icon").click(function() { 
            $(".datepicker").datepicker( {dateFormat: 'yy-mm-dd'} );
        })
    });
    </script>
	
	<!----pagination--------------------->
	 <link rel='stylesheet' href='https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css' type='text/css' media='all' />
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />	
	<script src="http://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
	
	<script>
	$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
<!----pagination end--------------------->
<!----excel start--------------------->
<script type="text/javascript">
function ExportToExcel(mytblId){
       var htmltable= document.getElementById('example');
       var html = htmltable.outerHTML;
       window.open('data:application/vnd.ms-excel,' + encodeURIComponent(html));
    }
</script>

<!----excel end--------------------->
<!----pdf start--------------------->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.debug.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>



<script>
    $(function(){
         var doc = new jsPDF();
    var specialElementHandlers = {
        '#editor': function (element, renderer) {
            return true;
        }
    };

   $('#exportButton').click(function () {
    
        var table = tableToJson($('#datatable-row-highlight').get(0))
        var doc = new jsPDF('p','pt', 'a3', true);

        doc.cellInitialize();
        $.each(table, function (i, row){
            console.debug(row);
            $.each(row, function (j, cell){
                doc.cell(10, 50,119, 20, cell, i);  // 2nd parameter=top margin,1st=left margin 3rd=row cell width 4th=Row height
            })
        })

       
        doc.save('Donate-file.pdf');
    });
    function tableToJson(table) {
    var data = [];

    // first row needs to be headers
    var headers = [];
    for (var i=0; i<table.rows[0].cells.length; i++) {
        headers[i] = table.rows[0].cells[i].innerHTML.toLowerCase().replace(/ /gi,'');
    }
    // go through cells
    for (var i=0; i<table.rows.length; i++) {

        var tableRow = table.rows[i];
        var rowData = {};

        for (var j=0; j<tableRow.cells.length; j++) {

            rowData[ headers[j] ] = tableRow.cells[j].innerHTML;
        }

        data.push(rowData);
    }       

    return data;
}
});
</script>
<!----pdf end--------------------->
<br />
<?php esc_html_e( 'All User List', 'textdomain' );?>

<form method="post" enctype="multipart/form-data" action="">
<br />
	 
	 <input type="button" id="btnExport" class="btn btn-sm btn-success clearfix" onclick="ExportToExcel();" value="Download excel"/>
	 
	 
	<br />
	</form>
	<br />
<?php 
 global $wpdb;	
	echo"
	<body>
	<table border='1' width='100%' id='example' class='don_table table table-striped table-bordered' cellspacing='0'>
	   <thead><tr><th>Merchant Id</th>
	   <th>First Name</th>
	   <th>Last Name</th>
	   <th>Street Address</th>
	<th>unit</th>
	<th>City</th>
	<th>State </th>
	<th>Zip Code </th>
	<th>DOB </th>
	<th>Mobile No. </th>
	<th>Email </th>
	<th>IS This A House Condo or HO5 </th>
	<th>Date </th>
	<th>Status </th>
	</tr></thead>
	";
		echo "<tbody>";
	$query="";
	if (isset($_POST['Search'])){
		$sql = "SELECT id,first_name,last_name,street_address,unit,city,state,zip_code,dob,mob_no,email,housech,p_date,status FROM wp_hipporegistration ".$query." order by p_date DESC";
	
	}
	else {
	
   $sql = "SELECT id,first_name,last_name,street_address,unit,city,state,zip_code,dob,mob_no,email,housech,p_date,status FROM wp_hipporegistration";
}
$result = mysqli_query($con, $sql);
if ($result) {
while($row = mysqli_fetch_array($result)){ 
$date=explode(' ',$row['p_date']);

echo "<tr width='100%'>";
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['first_name'] . "</td>";
echo "<td>" . $row['last_name'] . "</td>";
echo "<td>" . $row['street_address'] . "</td>";
echo "<td>" . $row['unit'] . "</td>";
echo "<td>" . $row['city'] . "</td>";
echo "<td>" . $row['state'] . "</td>";
echo "<td>" . $row['zip_code'] . "</td>";
echo "<td>" . $row['dob'] . "</td>";
echo "<td>" . $row['mob_no'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['housech'] . "</td>";
echo "<td>" . $date[0] . "</td>";
if($row['status']==null || $row['status']=='0' ) {
$status="Not Completed";
}
else {
$status=$row['status'];
}
echo "<td>" . $status . "</td>";
echo "</tr>";

}
}
echo "</tbody>";
echo "</table>";
 ?>
<div class="clear"></div>
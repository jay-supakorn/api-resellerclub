<?php
	require_once "Curl.php";

	$idJsk = 7033783;
	$idResume = 6;
	$idReference = 1;
function pre($varUse){
	echo "<pre>";
	print_r($varUse);
	echo "</pre>";
}
?>
<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
<!-- <h2 style="margin-bottom: 0px;">GET all Reference [GET /Reference/{idJsk}/{idResume}]</h2>
<span style="font-size: 15px;display: block;"><b>URL Example</b> : /Reference/<?php echo $idJsk; ?>/<?php echo $idResume; ?></span>
<a href="http://apps2.jobtopgun.com/api/sr.php/Reference/<?php echo $idJsk; ?>/<?php echo $idResume; ?>" target="_blank">GET all Reference</a>

<hr>
<h2 style="margin-bottom: 0px;">GET by idReference [GET /Reference/{idJsk}/{idResume}/{idReference}]</h2>
<span style="font-size: 15px;display: block;"><b>URL Example</b> : /Reference/<?php echo $idJsk; ?>/<?php echo $idResume; ?>/<?php echo $idReference; ?></span>
<a href="http://apps2.jobtopgun.com/api/sr.php/Reference/<?php echo $idJsk; ?>/<?php echo $idResume; ?>/<?php echo $idReference; ?>" target="_blank">GET by idReference</a>
 -->
 <style>
 	.style_res {padding: 15px 10px;background-color: #ddd;color: #000;font-family: 'tahoma', sans-serif;font-size: 13px;letter-spacing: 0.5px;margin: 10px 0px;}
 </style>
<h2 style="margin-bottom: 0px;">Register Domain by username and customer_id [POST /domain</h2>
<?php
	$cmd = $_REQUEST["cmd"];
	$data["username"] = 'vasabi_zebza@hotmail.com';
	$data["customer_id"] = 12515265;
	$data["registrant_id"] = 42785970;
	$data["tech_id"] = 42785970;
	$data["billing_id"] = 42785970;
	$data["admin_id"] = 42785970;

	$data["ns1"] = 'ns4.moqshosting.com';
	$data["ns2"] = 'ns5.moqshosting.com';
	$data["domain-name"] = 'moqsdoc.com';
	$data["years"] = 1;

	echo "<b>Curl Ex.</b> : curl -post http://www.moqshosting.com/api/main.php/domain";
	echo "<br><b>Params Ex.</b> : <pre>";
	print_r($data);
	echo "</pre>";
	if($cmd == "create")
	{
		echo "<br><b>Response</b> : <br>";
		$res = Curl::post("http://www.moqshosting.com/api/main.php/domain",$data);
		pre($res);
		// echo "<div class='style_res'>".."</div><br>";
	}
?>
<a href="test.php?cmd=create">POST Register Domain</a>


<hr>
<h2 style="margin-bottom: 0px;">Change NameServer by order-id [POST /domain-changenameserver</h2>
<?php
	$cmd = $_REQUEST["cmd"];
	$data = array();
	$data["username"] = 'vasabi_zebza@hotmail.com';
	$data["order-id"] = 66614637;
	$data["ns1"] = 'ns1.codemobiles.com';
	$data["ns2"] = 'ns2.codemobiles.com';

	echo "<b>Curl Ex.</b> : curl -post http://www.moqshosting.com/api/main.php/domain-changenameserver";
	echo "<br><b>Params Ex.</b> : <pre>";
	print_r($data);
	echo "</pre>";
	if($cmd == "change_nameserver")
	{
		echo "<b>Response</b> : <br><div class='style_res'>";
		$res = Curl::post("http://www.moqshosting.com/api/main.php/domain-changenameserver",$data);
		print_r($res);
		echo "</div>";
	}
?>
<a href="test.php?cmd=change_nameserver">Change NameServer</a>


<?php exit(); ?>
<hr>
<h2 style="margin-bottom: 0px;">UPDATE a Reference [PUT /Reference/{idJsk}/{idResume}/{idReference}]</h2>
<span style="font-size: 15px;display: block;"><b>URL Example</b> : /Reference/<?php echo $idJsk; ?>/<?php echo $idResume; ?>/<?php echo $idReference; ?></span>
<?php
	$cmd = $_REQUEST["cmd"];
	$data = array();

	$data["REFTYPE"] = 8;
	$data["OTHER_REFTYPE"] = 'put J-Codemobiles';
	$data["REFER_NAME"] = 'put J-Codemobiles';
	$data["REFER_COMPANY"] = 'Codemobiles';
	$data["REFER_TEL"] = '0863603871';
	$data["REFER_TITLE"] = 'refer_title';

	echo "<b>Curl Ex.</b> : curl -post http://apps2.jobtopgun.com/api/sr.php/Reference/{$idJsk}/{$idResume}/{$idReference}";
	echo "<br><b>Params Ex.</b> : <pre>";
	print_r($data);
	echo "</pre>";
	if($cmd == "put")
	{
		echo "<br>Response : ";
		echo Curl::put("http://apps2.jobtopgun.com/api/sr.php/Reference/{$idJsk}/{$idResume}/{$idReference}",json_encode($data));
		echo "<br>";
	}
?>
<a href="reference.php?cmd=put">PUT a Reference</a>



<hr>
<h2 style="margin-bottom: 0px;">DELETE a Reference [DELETE /Reference/{idJsk}/{idResume}/{idReference}]</h2>
<span style="font-size: 15px;display: block;"><b>URL Example</b> : /Reference/<?php echo $idJsk; ?>/<?php echo $idResume; ?>/<?php echo $idReference; ?></span>
<a href="reference.php?cmd=delete">Delete a Reference</a>
<?php
	$cmd=$_REQUEST["cmd"];
	if($cmd == "delete")
	{
		echo "<br>Response : ";
		echo Curl::delete("http://apps2.jobtopgun.com/api/sr.php/Reference/{$idJsk}/{$idResume}/{$idReference}");
	}
?>

<hr>
<h2 style="margin-bottom: 0px;">DELETE all Reference [DELETE /Reference/{idJsk}/{idResume}]</h2>
<span style="font-size: 15px;display: block;"><b>URL Example</b> : /Reference/<?php echo $idJsk; ?>/<?php echo $idResume; ?></span>
<a href="reference.php?cmd=deleteAll">Delete all Reference</a>
<?php
	$cmd=$_REQUEST["cmd"];
	if($cmd == "deleteAll")
	{
		echo "<br>Response : ";
		echo Curl::delete("http://apps2.jobtopgun.com/api/sr.php/Reference/{$idJsk}/{$idResume}");
	}
?>



<div style="height: 100px;"></div>

<?php exit(); ?>




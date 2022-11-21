<?php 

	include "config.php";
	
	 if(isset($_POST['submit'])){
		$INVOICE_DATE = 	$_POST['INVOICEDATE'];
		$INVOICE = 			$_POST['INVOICE'];
		$SUPPLIERS_VAT = 	$_POST['SUPPLIERS_VAT'];
		$SUPPLIERS_NAME = 	$_POST['SUPPLIERS_NAME'];
		$TAXABLE_VALUE = 	$_POST['TAXABLE_VALUE'];
		$VAT = 				$_POST['VAT'];
		$TOTAL = 			$_POST['TOTAL'];
		$Remarks = 			$_POST['Remarks'];
		$CODE = 			$_POST['CODE'];
		$FILE = 			$_POST['FILE'];
}
	
$sql = "INSERT INTO input(INVOICE_DATE, INVOICE, SUPPLIERS_VAT,SUPPLIERS_NAME,TAXABLE_VALUE, VAT, TOTAL, Remarks, CODE, FILE)" . 
"VALUES ('$INVOICE_DATE', '$INVOICE', '$SUPPLIERS_VAT', '$SUPPLIERS_NAME', '$TAXABLE_VALUE', '$VAT', '$TOTAL', '$Remarks', '$CODE', '$FILE')";

$result = $conn->query($sql);

if($result == TRUE) {
	echo "New Invoice saved succesfully";
}
else {
	echo "Error:" . $sql . "<br>" . $conn->error;
}
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
<title>invoices</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />

<body>
<ul>
  <li><a href=coverpage.php>Cover Page</a></li>
  <li><a href=output.php>Output</a></li>
  <li><a href=input.php>Input</a></li>
  <li><a href=deferredvat.php>Deferred VAT</a></li>
  <li><a href=debitcreditnotes.php>Debit-Credit Notes</a></li>
  <li><a href=vataccount.php>VAT Account</a></li>
  <li><a href=vatreturnform.php>Vat Return Form</a></li>
</ul>
<br>
<br>
<center> 
    <form action="index.php" method="post">       
<p>
               <label for="invoicedate">Invoice Date:</label>
               <input style="margin-left:10px" type="date" name="invoice_date" id="invoicedate">
            </p>            
<p>
               <label for="invoicenumber">Invoice Number:</label>
               <input style="margin-left:10px" type="number" name="invoicenumber" id="invoicenumber">
            </p>            
<p>
               <label for="suppliersVat">Suppliers VAT:</label>
               <input style="margin-left:10px" type="number" name="suppliersVat" id="Suppliersvat">
            </p>          
<p>
            <label for="suppliersName">Suppliers Name:</label>
            <input style="margin-left:10px" type="text" name="suppliersName" id="suppliersName">
            </p>           
<p>
               <label for="TaxableValue">Taxable Value:</label>
               <input style="margin-left:10px" type="number" name="TaxableValue" id="TaxableValue">
            </p>
            <p>
               <label for="VAT">VAT:</label>
               <input style="margin-left:10px" type="number" name="VAT" id="VAT">
            </p>
            <p>
               <label for="TOTAL">Total:</label>
               <input style="margin-left:10px" type="number" name="TOTAL" id="TOTAL">
            </p>
            <p>
               <label for="Remarks">Remarks:</label>
               <input style="margin-left:10px" type="textarea" name="Remarks" id="Remarks">
            </p>
            <p>
               <label for="CODE">Code:</label>
               <input style="margin-left:10px" type="number" name="CODE" id="CODE">
            </p>
            <p>
               <label for="FILE">File:</label>
               <input style="margin-left:10px" type="file" name="FILE" id="FILE">
            </p>
 
            <input type="submit" value="SAVE">
            <br>
            <br>
         </form>
      </center>
</head>
</body>
</html>


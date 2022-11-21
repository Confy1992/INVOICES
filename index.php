<!DOCTYPE html>
<html>
<head>
<style>

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #696969;
}

li {
  float: left;
  border-left:1px solid #bbb;
}

li:last-child {
  border-right: none;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

#invoices {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#invoices td, #invoices th {
  border: 1px solid #ddd;
  padding: 8px;
}

#invoices tr:nth-child(even){background-color: #f2f2f2;}

#invoices th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #696969;
  color: white;
}
</style>
</head>
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

<h1>INVOICES</h1>

<table id="invoices">
  <tr>
    <th>ID</th>
    <th>INVOICE DATE</th>
    <th>INVOICE NUMBER</th>
    <th>SUPPLIERS VAT</th>
    <th>SUPPLIERS NAME</th>
    <th>TAXABLE VALUE</th>
    <th>VAT</th>
    <th>TOTAL</th>
    <th>REMARK</th>
    <th>CODE</th>
    <th>FILE</th>
    <th>ACTION</th>
  </tr>
  <tr>
    <td>1</td>
    <td>2022/11/01</td>
    <td>INV_111</td>
    <td>4910101080</td>
    <td>Builders</td>
    <td>500</td>
    <td>50</td>
    <td>550</td>
    <td>Good</td>
    <td>0112</td>
    <td>invoice.pdf</td>
    <td>
    	<a class='btn btn-success' href='update.php?id=$row[id]'>EDIT</a>
    	<a class='btn btn-success' href='delete.php?id=$row[id]'>DELETE</a>
    </td>
  </tr>

</table>
</body>
</html>

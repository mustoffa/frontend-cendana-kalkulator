<!DOCTYPE html>
<html>
<head>
  <title></title>
  <!-- <script src="jquery.min.js"></script>
  <script src="script.js"></script> -->
</head>
<body>

<div align="center">
  <table border="1">
    <tr>
      <td colspan="4"><input readOnly type="text" class="txtHasil" id="txtHasil" value="" /></td>
    </tr>
    <tr>
      <td> <input type="button" value="0" /> </td>
      <td> <input type="button" value="1" /> </td>
      <td> <input type="button" value="2" /> </td>
      <td> <input type="button" value="+" /> </td>
    </tr>
    <tr>
      <td> <input type="button" value="3" /> </td>
      <td> <input type="button" value="4" /> </td>
      <td> <input type="button" value="5" /> </td>
      <td> <input type="button" value="-" /> </td>
    </tr>
    <tr>
      <td> <input type="button" value="6" /> </td>
      <td> <input type="button" value="7" /> </td>
      <td> <input type="button" value="8" /> </td>
      <td> <input type="button" value="*" /> </td>
    </tr>
    <tr>
      <td> <input type="button" value="9" /> </td>
      <td> <input type="button" value="C" /> </td>
      <td> <input type="button" value="=" /> </td>
      <td> <input type="button" value="/" /> </td>
    </tr>
  </table>
</div>
<script src="jquery.min.js"></script>
  <script src="script.js"></script>
</body>
</html>

<!-- <HTML><HEAD><TITLE>Kalukulator Sederhana.</TITLE>  
 <SCRIPT>  
 function dp(price)   
 {  
   string = "" + price;  
   number = string.length - string.indexOf('.');  
   if (string.indexOf('.') == -1)  
    return string + '.00';  
   if (number == 1)  
    return string + '00';  
   if (number == 2)  
    return string + '0';  
   if (number > 3)  
    return string.substring(0,string.length-number+3);  
 return string;  
 }  
 function calculate()  
 {  
 document.calcform.total1.value = dp((document.calcform.price1.value)*(document.calcform.quantity1.value))  
 document.calcform.total2.value = dp((document.calcform.price2.value)*(document.calcform.quantity2.value))  
 document.calcform.total3.value = dp((document.calcform.price3.value)*(document.calcform.quantity3.value))  
 document.calcform.subtotal.value = dp(eval(document.calcform.total1.value) + eval(document.calcform.total2.value) + eval(document.calcform.total3.value))  
 document.calcform.tax.value = dp((document.calcform.subtotal.value)*0.10)  
 document.calcform.total.value = dp((document.calcform.subtotal.value)*1.10)  
 }  
 </SCRIPT>  
 </HEAD><BODY bgcolor="#ffffff" onload="calculate"><CENTER>  
 <FORM name="calcform" action="mailto:YOU@YOURSITE.COM" method="post">  
 <TABLE cellpadding=2 border=2 cellspacing=2><TR><TD>QUANTITY</TD><TD>PRICE</TD><TD>TOTAL</TD></TR>  
 <TR>  
 <TD><INPUT type="text" name="quantity1" ONCHANGE="calculate()"></TD>  
 <TD><INPUT type="text" name="price1" ONCHANGE="calculate()"></TD>  
 <TD><INPUT type="text" name="total1"></TD>  
 </TR>  
 <TR>  
 <TD><INPUT type="text" name="quantity2" ONCHANGE="calculate()"></TD>  
 <TD><INPUT type="text" name="price2" ONCHANGE="calculate()"></TD>  
 <TD><INPUT type="text" name="total2"></TD>  
 </TR>  
 <TR>  
 <TD><INPUT type="text" name="quantity3" ONCHANGE="calculate()"></TD>  
 <TD><INPUT type="text" name="price3" ONCHANGE="calculate()"></TD>  
 <TD><INPUT type="text" name="total3"></TD>  
 </TR>  
 <TR><TD></TD><TD>SUBTOTAL</TD><TD><INPUT type="text" name="subtotal"></TD></TR>  
 <TR><TD></TD><TD>TAX - 10%</TD><TD><INPUT type="text" name="tax"></TD></TR>  
 <TR><TD></TD><TD>GRAND TOTALL</TD><TD><INPUT type="text" name="total"></TD></TR>  
 </TABLE><INPUT type="button" Value="HITUNG" ONCLICK="calculate()"><BR><input name='resetfield' type='reset'/><BR>  
 <BR><BR>http://qodia.blogspot.com</FORM>  
 </BODY></HTML> -->
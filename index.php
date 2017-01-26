<html>
<body>


<div style="background-color: " id=calculator>

<br/>
</center>
<center>
<form Name="calc">
 <table>
  <tr>
   <td colspan=4><input style="background-color:gray;" type="text" size=12 id="textboxes" Name="display"></td> 
  </tr> 
  
  <tr>
   <td><input type=button value="1" OnClick="calc.display.value+='1'"></td>
   <td><input type=button value="2" OnClick="calc.display.value+='2'"></td>
   <td><input type=button value="3" OnClick="calc.display.value+='3'"></td>
<td><input style=" background-color:red;" type=button value="C" OnClick="calc.display.value=''"></td> 
   
  <tr>
   <td><input type=button value="4" OnClick="calc.display.value+='4'"></td>
   <td><input type=button value="5" OnClick="calc.display.value+='5'"></td>
   <td><input type=button value="6" OnClick="calc.display.value+='6'"></td>
   <td><input type=button value="-" OnClick="calc.display.value+='-'"></td>
  </tr>
 
 <tr>
   <td><input type=button value="7" OnClick="calc.display.value+='7'"></td>
   <td><input type=button value="8" OnClick="calc.display.value+='8'"></td>
   <td><input type=button value="9" OnClick="calc.display.value+='9'"></td>
   <td><input type=button value="x" OnClick="calc.display.value+='*'"></td>
  </tr>
  
  <tr>
<td><input type=button value="0" OnClick="calc.display.value+='0'"></td>    
<td><input type=button value="=" id="equals"OnClick="calc.display.value=eval(calc.display.value)"></td>
<td><input type=button value="/" OnClick="calc.display.value+='/'"></td>
<td><input type=button value="+" OnClick="calc.display.value+='+'"></td>
  </tr>


 </table>
</form>
</center>
<p align="right">by: Jellie Rose Quita Bacus</p>
</div>







<style>
input[type=button] {
    color:black;
    border:0;
    display:block;
    height:90px;
    width: 80px;
 font-family: Digital Dream;
 font-size:250%;
 border-radius: 3px;
 margin: 0 2px 3px 0;
}
td{

 

}
input[type=text] {
    color:black;
 font-size:300%;
     height:75px;
 border-radius: 1px;
  
 
}
#calculator {
 width: 390px;
 height: auto;
 
 margin: 10px auto;
 padding: 2px 20px 9px;
 
 background-color: gray;
 
}

#clear{
 height:2px;
 width:2px;
 background-color: gray;
}



</style>
</body>
</html>
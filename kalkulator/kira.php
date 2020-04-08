<!doctype html>
<html>
<head>
<title></title>
</head>
<style type="text/css">
#header {
font-size:20px;
padding:40px;
text-align:center; }
.my_table {
    background: #f0f0f0;
}
.my_table td {
    padding: 2px;
    width: 50px;
}
.my_table input[type=button], .my_table a.button {
    width: 100%;
    font-size: 16px; 
    background: #94a5bd;
    border-color: #94a5bd !important;
    color: #fff !important;
} 
.my_table a.button {
    padding: 0 !important;
    text-align: center;
    border: 0 !important;
}
.my_table input[type=button]:hover, .my_table a.button:hover {
    background: #a2b4ce;
    border-color: #a2b4ce !important;
}
.my_table input[type=button].trig, .my_table a.button.trig {
    background: #deb444;
    border-color: #deb444 !important;
}
.my_table input[type=button].trig:hover, .my_table a.button.trig:hover {
    background: #efc249;
    border-color: #efc249 !important;
}
.my_table input[type=button].func, .my_table a.button.func {
    background: #9abd94;
    border-color: #9abd94 !important;
}
.my_table input[type=button].func:hover, .my_table a.button.func:hover {
    background: #a7cea1;
    border-color: #a7cea1 !important;
}
.my_table input[type=button].mem, .my_table a.button.mem {
    background: #ced041;
    border-color: #ced041 !important;
}
.my_table input[type=button].mem:hover, .my_table a.button.mem:hover {
    background: #e0e247;
    border-color: #e0e247 !important;
}
.my_table input[type=button].syst, .my_table a.button.syst {
    background: #ce6b51;
    border-color: #ce6b51 !important;
}
.my_table input[type=button].syst:hover, .my_table a.button.syst:hover {
    background: #df7458;
    border-color: #df7458 !important;
}
.my_table input[type=button].eqal, .my_table a.button.eqal {
    background: #8392a8;
    border-color: #8392a8 !important;
}
.my_table input[type=button].eqal:hover, .my_table a.button.eqal:hover {
    background: #90a1b9;
    border-color: #90a1b9 !important;
}
.my_table label {
    font-size: 11px;
}
</style>

<link rel="stylesheet" type="text/css" href="style.css">
<body background="334.jpg"><?php
include 'connection.php';
?><center>
<h1 style="font-family:Comic Sans Ms;text-align="center";font-size:20pt;
color:#00FF00;>KALKULATOR</H1>
<script language="LiveScript">
//window.alert("SELAMAT DATANG");

<!-- hide this script tag's contents from old browsers

var dotdown = 0;
var x=0
var y=0
var operation=0
var lastoperation=0
var eqauldown=0
var twiceoper=0
var isy=0
var level=0
var newnum=0


//memeriksa aksara betul

function checkNum(str)
{
for (var i = 0; i < str.length; i++) 
{
var ch = str.substring(i, i+1)
if (ch < "0" || ch > "9") 
if (ch != "." && ch!="-")
{
alert("invalid entry!")
return false
}
}
return true
}

//fungsi menambah watak dalam medan input

function addChar(input, character)
{
    if (input.value == null || input.value == "0" || newnum == 1) 
    {
        if(character == '.')
            input.value += character
        else
            input.value = character
        
        newnum = 0
        dotdown = 0
        twiceoper = 0
    }
    else
    if (!(dotdown == 1 && character == '.')) 
        input.value += character
    if (character == '.') 
        dotdown = 1
}

//pengiraan hasil, bergantung kepada operasi

function calculate(input)
{ var a
var l
switch (operation)
{ 
case 1:
input.value = eval(x+"+"+y)
break 
case 2:
if (y.substring(0,1)=="-")
{
l = y.length 
a = y.substring(1,l)
y = a
input.value = eval(x+"+"+y) 
}
else 
input.value = eval(x+"-"+y)
break 
case 3:
input.value = eval(x+"*"+y)
break 
case 4:
input.value = eval(x+"/"+y)
break 
case 5:
input.value = Math.pow(x,y)
break
case 6:
    
    if(x<0 && y%2==1)
    {
        var w = Math.abs(x);
        var c = 1 / y;
        input.value = Math.pow(w,c);
    }
    else
    if(x>0)
    {
        var c = 1 / y;
        input.value = Math.pow(x,c);
    }
    else
    {
        input.value = NaN;
    }
    
break
case 7:
input.value = x%y;
break   
} 
}

//Memanggil fungsi ini dilakukan dengan menekan kekunci operasi aritmetik

function selOper(input, character)
{
    equaldown = 0
    level++
    newnum++
    if (newnum == 2)
    {
        newnum = 1
    } 
    else
    { 
        if (!checkNum (input.value))
        {
            sbros(input)
            return
        } 
        if (level == 1)
        {
            x = input.value
            isy = 0
        }
        else
        {
            y = input.value
            isy = 1
            calculate (input)
            x = input.value
            level = 1
        }
    }
    switch (character)
    {
        case '+' : 
        operation = 1
        break
        case '-':
        operation = 2
        break
        case '*':
        operation = 3
        break
        case '/':
        operation = 4
        break
    } 
}

//Mengeluarkan simbol daripada baris input

function deleteChar(input)
{
if (newnum != 1)
input.value = input.value.substring(0, input.value.length - 1)
}

function changeSign(input)
{
if(input.value.substring(0, 1) == "-")
input.value = input.value.substring(1, input.value.length)
else
input.value = "-" + input.value
}

//Memulakan semua pemboleh ubah yang digunakan 

function sbros(input)
{
newnum = 0
operation = 0
dotdown = 0
x = 0
y = 0
isy = 0
level = 0
input.value = 0
}

//Langkah-langkah awal dalam keputusan pengiraan

function equal(input)
{ var f=0
newnum =1
if (isy == 1)
{
calculate(input)
newnum = 1
x = input.value
}
else
{
if (level!=0 && equaldown==0)
{
y = input.value
isy = 1
calculate(input)
x = input.value
newnum = 1
}
} 
if (level == 1) 
{
level = 0
isy = 0
equaldown = 1
}
}

//aritmetik dan trigonometri fungsi

function sqrt1(form)
{
form.display.value = Math.sqrt(eval(form.display.value))
}
function sqrt2(form)
{
form.display.value = Math.sqrt(eval(form.display.value))
}
function sin1(form)
{ var x
x = Math.PI /180
if (form.grad.checked==1) 
form.display.value = Math.sin(eval(form.display.value))
if (form.rad.checked==1)
form.display.value = Math.sin(eval(x+"*"+form.display.value))
}

function pow1(form)
{
form.display.value = Math.pow(eval(form.display.value),2)
}

function onedivx(form)
{
form.display.value = eval(1+"/"+form.display.value)
}


function cos1(form)
{
var x
x = Math.PI /180
if (form.grad.checked==1) 
form.display.value = Math.cos(eval(form.display.value))
if (form.rad.checked==1)
form.display.value = Math.cos(eval(x+"*"+form.display.value))
}

function tan1(form)
{
var x
x = Math.PI /180
if (form.grad.checked==1) 
form.display.value = Math.tan(eval(form.display.value))
if (form.rad.checked==1)
form.display.value = Math.tan(eval(x+"*"+form.display.value))
}

function ctan1(form)
{
var x
x = Math.PI /180
if (form.grad.checked==1) 
form.display.value = 1/Math.tan(eval(form.display.value))
if (form.rad.checked==1)
form.display.value = 1/Math.tan(eval(x+"*"+form.display.value))
}

function asin1(form)
{
var x
x = Math.PI /180
if (form.grad.checked==1) 
form.display.value = Math.asin(eval(form.display.value))
if (form.rad.checked==1)
form.display.value = Math.asin(eval(x+"*"+form.display.value))
}

function acos1(form)
{
var x
x = Math.PI /180
if (form.grad.checked==1) 
form.display.value = Math.acos(eval(form.display.value))
if (form.rad.checked==1)
form.display.value = Math.acos(eval(x+"*"+form.display.value))
}

function atan11(form)
{
var x
x = Math.PI /180
if (form.grad.checked==1) 
form.display.value = Math.atan(eval(form.display.value))
if (form.rad.checked==1)
form.display.value = Math.atan(eval(x+"*"+form.display.value))
}
function actan11(form)
{
var x
x = Math.PI /180
if (form.grad.checked==1) 
form.display.value = Math.atan(1/form.display.value);
if (form.rad.checked==1)
form.display.value = Math.atan(1/form.display.value)*180/Math.PI;
}

function factorial(n) {
  return n ? n * factorial(n - 1) : 1;
}
function nfact(form)
{ 
    var n = form.display.value;
    var res = factorial(n);
    form.display.value = res;
}
function log(form)
{
    var res = Math.log(form.display.value)/Math.log(10);
    form.display.value = res;
}
function ln(form)
{
    var res = Math.log(form.display.value);
    form.display.value = res;
}
function invol10(form)
{
    var res = Math.pow(10,form.display.value);
    form.display.value = res;
}
//fungsi memori
function MemorySet(input1, input2)
{
    if (checkNum(input2.value))
    {
        $(input1).html('M:'+input2.value); 
    }
}

function MemoryRecieve(input1, input2)
{ 
input2.value = $(input1).html().substring(2,$(input1).html().length)
}

function MemoryPlus(input1, input2)
{ 
    var a1 = ""
    var a2 = ""
    if (checkNum(input2.value))
    {
        equal(input2)
        a2 = input2.value
        a1 = $(input1).html().substring(2,$(input1).html().length)
        a1 = a1+"+"+a2
        a1 = eval(a1)
        $(input1).html('M:'+a1);
    }
}
<!-- done hiding from old browsers -->
$(document).ready(function(){
   
    $(document).keyup(function(e){
        if($.inArray(e.keyCode,[48,49,50,51,52,53,54,55,56,57]) !== -1)
        {
            addChar($('#form1')[0].display, e.keyCode-48);
        }
        else
        if($.inArray(e.keyCode,[96,97,98,99,100,101,102,103,104,105]) !== -1)
        {
            addChar($('#form1')[0].display, e.keyCode-96);
        }
        else
        if($.inArray(e.keyCode,[187,107]) !== -1)
        {
            selOper($('#form1')[0].display,'+');
        }
        else
        if($.inArray(e.keyCode,[189,109]) !== -1)
        {
            selOper($('#form1')[0].display,'-');
        }
        else
        if(e.keyCode == 106)
        {
            selOper($('#form1')[0].display,'*');
        }
        else
        if(e.keyCode == 111)
        {
            selOper($('#form1')[0].display,'/');
        }
        else
        if($.inArray(e.keyCode,[188,190,110,191]) !== -1)
        {
            addChar($('#form1')[0].display, '.');
        }
        else
        if(e.keyCode == 13)
        {
            if (checkNum($('#form1')[0].display.value))
                equal($('#form1')[0].display);
        }
        else
        if(e.keyCode == 27)
        {
            sbros($('#form1')[0].display);
        }
    });
    $('#form1 input, #form1 a').focus(function(){
        $(this).blur();
    });
});
</script>	
<center>
<form id="form1">
<table class="my_table" cellspacing="0" cellpadding="0" style="border: solid 1px #3b95ca;">
    <tr> 
        <td colspan="6"> 
            <table cellspacing="0" cellpadding="0" class="my_table" style="width: 100%;">
                <tr> 
                    <td> 
                        <input type="text" name="display" style="width: 98%; font-size: 18px;" value="0" maxlength="150" readonly>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr> 
        <td colspan="6"> 
        </td>
    </tr>
	<tr>
	<td> 
            <input type="button" value=" &larr; " class="syst" onClick="deleteChar(this.form.display)">
        </td>
		<td> 
            <input type="button" value=" C "  class="syst" onClick="sbros(this.form.display)">
        </td>
	</tr>
    <tr> 
		<td > 
            <input type="button" value=" 7 " class="num" onClick="addChar(this.form.display, '7')">
        </td>
        <td > 
            <input type="button" value=" 8 " class="num" onClick="addChar(this.form.display, '8')">
        </td>
        <td > 
            <input type="button" value=" 9 " class="num" onClick="addChar(this.form.display, '9')">
        </td>
		<td> 
            <input type="button" value=" * " class="num" onClick="selOper(this.form.display,'*')">
        </td>
    </tr>
    <tr> 
        <td > 
            <input type="button" value=" 4 " class="num" onClick="addChar(this.form.display, '4')">
        </td>
        <td > 
            <input type="button" value=" 5 " class="num" onClick="addChar(this.form.display, '5')">
        </td>
        <td > 
            <input type="button" value=" 6 " class="num" onClick="addChar(this.form.display, '6')">
        </td>
				        <td> 
            <input type="button" value=" / " class="num" onClick="selOper(this.form.display,'/')">
        </td>
    </tr>
    <tr> 
        <td > 
            <input type="button" value=" 1 " class="num" onClick="addChar(this.form.display, '1')">
        </td>
        <td > 
            <input type="button" value=" 2 " class="num" onClick="addChar(this.form.display, '2')">
        </td>
        <td > 
            <input type="button" value=" 3 " class="num" onClick="addChar(this.form.display, '3')">
        </td>
        <td> 
            <input type="button" value=" - " class="num" onClick="selOper(this.form.display,'-')">
        </td>

    </tr>
    <tr>
		<td > 
            <input type="button" value=" . " class="num" onClick="addChar(this.form.display, '.')">
		</td>
        <td > 
            <input type="button" value=" 00 " class="num" onClick="addChar(this.form.display, '00')">
		</td>	
        <td > 
            <input type="button" value=" 0 " class="num" onClick="addChar(this.form.display, '0')">
		</td>
        <td> 
            <input type="button" value=" + " class="num" onClick="selOper(this.form.display,'+')">
        </td>

    </tr>
    <tr> 
        <td colspan="4"> 
            <input type="button" value=" = " class="eqal" onClick="if (checkNum(this.form.display.value))
            { equal(this.form.display) }">
        </td>
    </tr>
</table>
</form>

</center>
<center>Click here to clean <a href = "logout.php" tite = "Logout">Session.</center></body>
</html>
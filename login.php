<head>
<style>
*{
    box-sizing: border-box;

}
h1
{
    color:black;
    text-align:center;
}
h3
{
    color:green;
    text-align:center;
}
body {
    font-family: 'Montserrat', sans-serif;
    background-image: url(bg_Lblue.jpg);
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: left;
    height: 140vh;
    margin: 50px 0 50px ;
    border: 5%;
    background-size: cover;
   }

td
{
font-size:28px;
}
form{
    justify-content: center;
  
  

}

  
.container {
    /* background-image: url(bg_dark.avif); */
  box-sizing: border-box;
  background-color:white;
  justify-content: center;
  width: 600px;
  height: auto;
  margin: 30px auto 30px;
  text-align: center;
  padding: 35px;
  border: 4px solid black;
  border-radius: 70px 0px 70px 0px;
  animation: pulsate 2s ease-out 2s;
  box-shadow: #605552 10px 10px 10px;
}
@keyframes pulsate {
  0% {
    border-color: blue;
  }
  50% {
    border-color: black;
;
  }
  100% {
    border-color: violet;
  }
}


img {
  border: 2px solid #fff;
 }
 img:hover{
    border: 2px solid black;
}
img:active{
    border:2px solid red;
}

input{
	color: black;
    
	border-radius: 10px 10px 10px 10px;
    border: 2px solid #fff;
	padding: 12px 15px;
    margin-left: 20%;
	margin: 8px 8px;
	width: 100%;
    justify-items: center;
    background: transparent;

}
input#user{
    border: 2px solid black;
}
input#email{
    border: 2px solid black;
}
input#password{
    border: 2px solid black;
}

.login-link {
    color: black;
    text-decoration: underline;
}

.login-link:hover {
    color: #0A4E0E;
    text-decoration: none;
}
.already{
    color: green;
    font-size:-2rem;

}
</style>
<script>
val="";
c=0;
function calculate(x)
{
    console.log(x);
c++;
ch=x.lastIndexOf("/");
val+=x.substring(ch-2,ch);
console.log(val);

if(c==4)
{
    val = val.replaceAll("/","");
    document.getElementById("psw").value=val;
    console.log(val);
alert("Password collected");
}}
</script>
</head>
<body>
<div class="container">
<?php
$a=1;
$b=2;
$c=3;
$d=4;
$e=5;
$f=6;
$g=7;
$h=8;
$i=9;
$j=10;
$k=11;
$l=12;
$m=13;
$n=14;
$o=15;
$p=16;
$q=17;
$r=18;
$s=19;
$t=20;
$u=21;
$v=22;
$w=23;
$x=24;
$y=25;
$z=26;
$aa=27;
$ab=28;
$ac=29;
$ad=30;
$ae=31;
$af=32;
$ag=33;
$ah=34;
$ai=35;
$aj=36;
// $arr = array($a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$l,$m,$n,$o,$p,$q,$r,$s,$t);
$arr = array($a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$l,$m,$n,$o,$p,$q,$r,$s,$t,$u,$v,$w,$x,$y,$z,$aa,$ab,$ac,$ad,$ae,$af,$ag,$ah,$ai,$aj);
shuffle($arr);
// for($i=0;$i<4;$i++)
// echo $arr[$i]."<br>";
// echo "<br>";
$path1=intval($arr[0])."/".($arr[0]).".jpg";
$path2=intval($arr[1])."/".($arr[1]).".jpg";
$path3=intval($arr[2])."/".($arr[2]).".jpg";
$path4=intval($arr[3])."/".($arr[3]).".jpg";
$path5=intval($arr[4])."/".($arr[4]).".jpg";
$path6=intval($arr[5])."/".($arr[5]).".jpg";
$path7=intval($arr[6])."/".($arr[6]).".jpg";
$path8=intval($arr[7])."/".($arr[7]).".jpg";
$path9=intval($arr[8])."/".($arr[8]).".jpg";
$path10=intval($arr[9])."/".($arr[9]).".jpg";
$path11=intval($arr[10])."/".($arr[10]).".jpg";
$path12=intval($arr[11])."/".($arr[11]).".jpg";
$path13=intval($arr[12])."/".($arr[12]).".jpg";
$path14=intval($arr[13])."/".($arr[13]).".jpg";
$path15=intval($arr[14])."/".($arr[14]).".jpg";
$path16=intval($arr[15])."/".($arr[15]).".jpg";
$path17=intval($arr[16])."/".($arr[16]).".jpg";
$path18=intval($arr[17])."/".($arr[17]).".jpg";
$path19=intval($arr[18])."/".($arr[18]).".jpg";
$path20=intval($arr[19])."/".($arr[19]).".jpg";
$path21=intval($arr[20])."/".($arr[20]).".jpg";
$path22=intval($arr[21])."/".($arr[21]).".jpg";
$path23=intval($arr[22])."/".($arr[22]).".jpg";
$path24=intval($arr[23])."/".($arr[23]).".jpg";
$path25=intval($arr[24])."/".($arr[24]).".jpg";
$path26=intval($arr[25])."/".($arr[25]).".jpg";
$path27=intval($arr[26])."/".($arr[26]).".jpg";
$path28=intval($arr[27])."/".($arr[27]).".jpg";
$path29=intval($arr[28])."/".($arr[28]).".jpg";
$path30=intval($arr[29])."/".($arr[29]).".jpg";
$path31=intval($arr[30])."/".($arr[30]).".jpg";
$path32=intval($arr[31])."/".($arr[31]).".jpg";
$path33=intval($arr[32])."/".($arr[32]).".jpg";
$path34=intval($arr[33])."/".($arr[33]).".jpg";
$path35=intval($arr[34])."/".($arr[34]).".jpg";
$path36=intval($arr[35])."/".($arr[35]).".jpg";
echo "<h1>Login using your credentials</h1>";
// echo "<table border=1 align=center height=410%>";
echo "<form action=abc.php method=post>";
// echo "    <td colspan=3><input type=text name=user placeholder='Name' id=user required style='width:315px'><br>";
echo " <td colspan=3><input type=email name=email placeholder='Email Id' id=email required style='width:315px'><br>";
echo "<td colspan=3><input type=password name=password placeholder='Choose password' id=password required style='width:315px'><br>";
echo "<tr><td colspan=4 align=center><h3>Select your Password Images </h3> <br>";
echo "<tr><td><img src=$path1 height=80 width=80 onclick=calculate(this.src)>";
echo "<td><img src=$path2 height=80 width=80 onclick=calculate(this.src)>";
echo "<td><img src=$path3 height=80 width=80 onclick=calculate(this.src)>";
echo "<td><img src=$path4 height=80 width=80 onclick=calculate(this.src)>";
echo "<tr><td><img src=$path5 height=80 width=80 onclick=calculate(this.src)>";
echo "<td><img src=$path6 height=80 width=80 onclick=calculate(this.src)>";
echo "<td><img src=$path7 height=80 width=80 onclick=calculate(this.src)>";
echo "<td><img src=$path8 height=80 width=80 onclick=calculate(this.src)>";
echo "<tr><td><img src=$path9 height=80 width=80 onclick=calculate(this.src)>";
echo "<td><img src=$path10 height=80 width=80 onclick=calculate(this.src)>";
echo "<td><img src=$path11 height=80 width=80 onclick=calculate(this.src)>";
echo "<td><img src=$path12 height=80 width=80 onclick=calculate(this.src)>";
echo "<tr><td><img src=$path13 height=80 width=80 onclick=calculate(this.src)>";
echo "<td><img src=$path14 height=80 width=80 onclick=calculate(this.src)>";
echo "<td><img src=$path15 height=80 width=80 onclick=calculate(this.src)>";
echo "<td><img src=$path16 height=80 width=80 onclick=calculate(this.src)>";
echo "<tr><td><img src=$path17 height=80 width=80 onclick=calculate(this.src)>";
echo "<td><img src=$path18 height=80 width=80 onclick=calculate(this.src)>";
echo "<td><img src=$path19 height=80 width=80 onclick=calculate(this.src)>";
echo "<td><img src=$path20 height=80 width=80 onclick=calculate(this.src)>";
echo "<tr><td><img src=$path21 height=80 width=80 onclick=calculate(this.src)>";
echo "<td><img src=$path22 height=80 width=80 onclick=calculate(this.src)>";
echo "<td><img src=$path23 height=80 width=80 onclick=calculate(this.src)>";
echo "<td><img src=$path24 height=80 width=80 onclick=calculate(this.src)>";
echo "<tr><td><img src=$path25 height=80 width=80 onclick=calculate(this.src)>";
echo "<td><img src=$path26 height=80 width=80 onclick=calculate(this.src)>";
echo "<td><img src=$path27 height=80 width=80 onclick=calculate(this.src)>";
echo "<td><img src=$path28 height=80 width=80 onclick=calculate(this.src)>";
echo "<tr><td><img src=$path29 height=80 width=80 onclick=calculate(this.src)>";
echo "<td><img src=$path30 height=80 width=80 onclick=calculate(this.src)>";
echo "<td><img src=$path31 height=80 width=80 onclick=calculate(this.src)>";
echo "<td><img src=$path32 height=80 width=80 onclick=calculate(this.src)>";
echo "<tr><td><img src=$path33 height=80 width=80 onclick=calculate(this.src)>";
echo "<td><img src=$path34 height=80 width=80 onclick=calculate(this.src)>";
echo "<td><img src=$path35 height=80 width=80 onclick=calculate(this.src)>";
echo "<td><img src=$path36 height=80 width=80 onclick=calculate(this.src)>";
echo "<input type=hidden name=psw value='' id=psw>";
echo "<tr><td colspan=4 align=center><input type=submit value=LogIn style='width:250px; background-color: #4CAF50; color: white; padding: 12px 20px; border: none; border-radius: 4px; cursor: pointer; transition: background-color 0.3s ease;' onmouseover='this.style.backgroundColor=\"0A4E0E\"' onmouseout='this.style.backgroundColor=\"#4CAF50\"'>";
// echo "</table>";
echo "<h3>New Users Register here</h3>";
echo "<h3><a href=index.php class=login-link> Register</a></h3>";
?>
</div>
</body> 
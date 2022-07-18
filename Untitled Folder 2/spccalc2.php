
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet"> 
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
    <title>SPC Calculator</title>
</head>
<body>
    <nav class="navbar bg-main">
        <div class="col-md-6 navbar-brand">
            <!-- <div class="navbar-brand "> -->
                <!-- <h1>QUALITYCOPS</h1> -->
            <!-- </div> -->
                <div class="col-md-1" style="margin:0; padding:0">
                    <img src="images/QC1.png" class="img-responsive logo" alt="logo">
                </div>
                    <div class="col-md-4" style="margin:0; ">
                        <img src="images/QC_3.png" class="img-responsive " alt="logo">
                    </div>    
                             
            
            

        </div>
        <div class="col-md-6 ">
            <ul class="nav navbar-nav navbar-right text-light">
                <li><a href="index.php">Home</a></li>
                <li class="dropdown"><a href="" >Online Calculators <i class="fa fa-fw fa-angle-down"></i></a>
                    <div class="dropdown-menu bg-main text-light">
                        <ul class="nav">
                            <!-- <li class="dropdown-item"><a href="msa.html"><i class="fa fa-angle-right fa-fw"></i> MSA</a></li> -->
                            <li class="dropdown-item"><a href="spccalc.php"><i class="fa fa-angle-right fa-fw"></i> SPC</a></li>
                            <!-- <li class="dropdown-item"><a><i class="fa fa-angle-right fa-fw"></i> Six Sigma</a></li> -->
                        </ul>
                    </div>                
                </li>
                <!-- <li><a href="">About Us</a></li> -->
                <!-- <li><a href="">Contact Us</a></li> -->
                <!-- <li><a href="">Login</a></li> -->
            </ul>
        </div>
    </nav>
   
<style>
body{
  background: #efefef;
  color: rgb(44, 43, 43);
}
input{
  border-radius: 10px;
  padding: 5px;
  box-shadow: -6px -6px 14px rgba(255, 255, 255, .7),
              -6px -6px 10px rgba(255, 255, 255, .5),
              6px 6px 8px rgba(255, 255, 255, .2),
              6px 6px 10px rgba(0, 0, 0, .4);
}
.bg-main{
  background-color: #2a2a2a;
}

.navbar{
  margin-bottom: 0;
  border-radius: 0;
  position: fixed;
  width: 100%;
  max-height: 40px;
  
}
.logo{
  width:80px;
  height: 80px;
  
}
.text-light{
    color: #fafafa;
} 
.text-main{
  color: #444444;
}
.navbar-brand{
  padding-top: 10px;
}
.navbar{
  z-index: 1000;
}
.navbar h1{
  margin-top: 0;
  padding-top: 0;
}
.nav a{
  color: #fafafa;
}


.nav a:hover{
  color: black
}
.dropdown:hover .dropdown-menu {
    display: block;
}
.banner{
  margin: 0;
  padding: 0;
  width: 100%;
  height:600px;
  background: url(../images/banner2.jpg);
  background-attachment: fixed;
  background-size: 100%;
 
}
.banner .col-md-3{
  text-align: justify;
  
}
.heading{
  font-weight: bold;
  font-size: 18px;
}
.condiv{
  padding-top: 80px;
  text-align: center;
  text-align: justify;
 
}
.condiv .col-md-6 img{
  border-radius: 10px;
  margin-bottom: 30px;
}
.condiv .col-md-6 {
  background: transparent;
 
}
.strip{
  padding:10px;
  text-align: center;
  margin-top: 30px;
  width: 100%;
  color: rgb(71, 71, 71);
}
.strip span{
  text-decoration: underline;
  color: red;
  font-weight: bolder;
}
.condiv span{
  text-decoration: underline;
  color: red;
  font-weight: bolder;
}

.condiv p{
  margin-top: 30px;
 font-size: 18px;
 line-height: 35px;
}
.flip-card {
  background-color: transparent;
    
}

.flip-card-inner {
  position: relative;
  width: 100%;
  /* height: 100%; */
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}


.flip-card-front img{
  height:300px;
}
 .flip-card-back {
  position: absolute;
  text-align: justify;
  padding: 5px;
  width: 100%;
  height: 100%;
  top:0;
  border-radius: 10px;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color: #bbb;
  color: black;
}

.flip-card-back {
  background-color:black;
  color: white;
  transform: rotateY(180deg);
}
.card{
  box-shadow: -6px -6px 14px rgba(255, 255, 255, .7),
              -6px -6px 10px rgba(255, 255, 255, .5),
              6px 6px 8px rgba(255, 255, 255, .2),
              6px 6px 10px rgba(0, 0, 0, .4);
 padding:20px;
 text-align: center;
 min-height: 150px;
 margin-top: 50px;
 transition: 0.3s;
 margin-left:20px;
 border-radius: 30px;
 background-color:#fefefe;
}
.card h3{
  font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}
.card:hover {
  box-shadow: -2px -2px 6px rgba(255, 255, 255, .6),
              -2px -2px 4px rgba(255, 255, 255, .4),
              2px 2px 25px rgba(255, 255, 255, .5),
              2px 2px 4px rgba(0, 0, 0, .1);
              text-decoration: none;
}

  .cards:hover a{ text-decoration: none; }
.card:active {
  box-shadow: inset -2px -2px 10px rgba(255, 255, 255, .7),
              inset -2px -2px 8px rgba(255, 255, 255, .5),
              inset 2px 2px 5px rgba(255, 255, 255, .5),
              inset 2px 2px 8px rgba(0, 0, 0, .7);
}
.btn{
  box-shadow: -6px -6px 14px rgba(255, 255, 255, .7),
              -6px -6px 10px rgba(255, 255, 255, .5),
              6px 6px 8px rgba(255, 255, 255, .2),
              6px 6px 10px rgba(0, 0, 0, .4);
}
.footer{
  margin-top:80px;
  height: 300px;
  padding-top: 30px;
}
.footer .nav ul li {
  line-height: 10px;
}
.footer .nav li a:hover { 
  background-color: transparent;
  color: #b9ff19;
 
}
.mainDiv{
  padding-top:10px;
  margin-top: 10px;
  box-shadow: -6px -6px 14px rgba(255, 255, 255, .7),
              -6px -6px 10px rgba(255, 255, 255, .5),
              6px 6px 8px rgba(255, 255, 255, .2),
              6px 6px 10px rgba(0, 0, 0, .4);
              padding-bottom: 30px;
              margin-top: 50px;
 }
.mainDiv .col-md-2{
  margin-left: 20px;
  text-align: center;
}
.mainDiv input{
  border-radius:10px;
  width:100%;
  margin: 2px;
}
#calculations{
  padding-top: 30px;
  padding-bottom: 80px; 
}

.semDiv{
  min-height: 80px;
  padding: 5px;
  margin-left:30px;
  border: 1px solid black;
  box-shadow: -6px -6px 14px rgba(255, 255, 255, .7),
              -6px -6px 10px rgba(255, 255, 255, .5),
              6px 6px 8px rgba(255, 255, 255, .2),
              6px 6px 10px rgba(0, 0, 0, .4);
              padding-bottom: 30px;
              margin-top: 50px;
  
}

.lable input{
  margin-top: 10px;
  margin-left:10px;
  border-radius: 10px;
  width:250px;  
  margin-bottom: 10px;
  text-align: center;
}
.chart{
  margin: 0;
  margin-top: 15px; 
  padding: 0;
  border: 1px, solid black;
  box-shadow: 0,0,10px black;
  background-color: antiquewhite;
}

.shadow{
  box-shadow: -6px -6px 14px rgba(255, 255, 255, .7),
              -6px -6px 10px rgba(255, 255, 255, .5),
              6px 6px 8px rgba(255, 255, 255, .2),
              6px 6px 10px rgba(0, 0, 0, .4);
}

@media print{
  @page {
    size: A4 landscape;
  }
    input{
      border:none;
      margin:2px;
      color:black;
    }
    .mainDiv{
    display: flex;
     flex-wrap: wrap;
     margin-top: 0;
    }
    .mainDiv h3{
      font-size: 8px;
      }
    .mainDiv .col-md-2{
      max-width:10%;
      font-size: 8px;
      margin: 0px;
      margin-bottom: 0;
      padding-bottom: 0;
    }
    .calculations{
      display: flex;
      padding: 0;
    }
    #basiccalc{
      margin: 0;
      padding: 0;
      display: flex;
      flex-wrap: wrap;
      margin-top: 0;
    }
    .semDiv{
        width: 10%;
        border: 0;
    }
    .no-print{
      display: none;
    }
    .chart{
      width:60%;
      margin:10px;
    }
}
</style>
<div class="clearfix"></div>
<div class="col-md-9 datadiv" style="padding-top:50px">
<div class="text-center" >
    <h1>Statical Process Control Calculations </h1>
</div>
<div class="container lable text-center no-print">
   
    <input type="text" placeholder = "Upper Specification Limit (USL)" name="inputval2"  id="usli"> 
    <input type="text" placeholder = "LOWER Specification Limit (LSL)" name="inputval2" id="lsli">
    <button type="button" class="btn btn-primary" id="Button" onclick="check()">Calculate </button>
   
</div>
<div class="container lable text-center  no-print">
    <h4>Please give below values from table on right side according to your sample group size</h4>
   
    <input type="text" placeholder = "A2"  name="inputval2" id="A2" required> 
    <input type="text" placeholder = "D3"  name="inputval2" id="D3"  required>
    <input type="text" placeholder = "D4"  name="inputval2" id="D4" required> 
</div>

    <div class="container col-md-offset-1   ">
        <div class=" col-md-12 mainDiv" id="mainDiv">
        </div>
       </div>
    </form>

<div class="col-md-12 ">
    
    <div class="col-md-12" id="calculations">
        <div class="container text-center strip">
            <span class="h3" >Calculations</span>
        </div>
        <div class="container" id="basiccalc">
        </div>
    </div>
    <script
    src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
    </script>
    <div class=" col-md-12 strip">
        <span class="h3">Charts</h3>
    </div>  
    <div class="col-md-6 text-center chart">
        <h1>X-BAR chart</h1>
        <canvas id="myChart" style="width:100%;max-width:700px"></canvas>
    </div>
    <div ></div>
    <div class="col-md-6  text-center chart">
        <h1>R Chart</h1>
        <canvas id="myChart2" style="width:100%;max-width:700px"></canvas>
    </div>
</div>
        
        
    </div>
    </div>

    <div class="col-md-3" id="reslt" style="padding-top: 80px" >
        <div class="col-md-12 no-print">
            <img src="images/constants.png" class="img-responsive"alt="contants">
            
        </div>
        <div class="col-md-12" style="margin-top: 30px;">

            <table class="table shadow  bg-info text-center">
                <tr><td colspan="2"><h3>Results</h3></td></tr>
            <tr>
                <th>X double Bar</th>
                <td id="mean2"></td>
            </tr>
                <tr>
                    <th>Range Double Bar</th>
                    <td id="range2"></td>
                </tr>
                <tr>
                    <th>Standard Deviation</th>
                    <td id="sd"></td>
            </tr>
            <tr>
                <th>USL</th>
                <td id="USL"></td>
            </tr>
        <tr>
            <th>LSL</th>
            <td id="LSL"></td>
        </tr>
        <tr>
            <th>Process capibility (cP)</th>
            <td id="cp"></td>
        </tr>
        <tr>
            <th> Min Process capibility index (cPk)</th>
            <td id="cpkmn"></td>
        </tr>
        <tr>
            <th> Max Process capibility index (cPk)</th>
            <td id="cpkmx"></td>
        </tr>
        </table>
    </div>
        
    </div>
    

</div>
</div>
</div>
<script>






var groups = prompt("How many Number of Groups You want to make?", "5");
var noOfValuesPerGroup = prompt("How many Number per group are there?", "5")
document.getElementById("usli").value = "";
document.getElementById("lsli").value = "";
var mean2 = 0;
var means = [];
var rangeMean = 0;
var sd = 0;
var uclxarray = [];
var lclxarray = [];
var uclrarray = [];
var lclrarray = [];
var ranges = [];
var A2, D3, D4;


for (i = 1; i <= groups; i++) {
  var parentDiv = document.getElementById("mainDiv");
  var childDiv = document.createElement("div");
      childDiv.id = "d" + i;
  var heading = document.createElement("h3"); // created heading for groups
      heading.classList.add("group-heading");
      heading.innerHTML = "Group " + i;
      childDiv.appendChild(heading);
      childDiv.classList.add("col-md-2");   // div for input groups
  var basicCalc = document.getElementById("basiccalc");
  var lable = document.createElement("lable");
      lable.innerHTML = "Xbar";
  var res = document.createElement("p");  // inputs for calculated values Xbar
      res.id = "xbar" + i;
  var lable2 = document.createElement("lable");

  lable2.innerHTML = "Range";

  var res2 = document.createElement("p");  // inputs for calculated values Xbar
      res2.type = "type";
      res2.id = "rangeG" + i;
      res2.classList.add("resinput");
  var semDiv = document.createElement("div");
      semDiv.classList.add("col-md-2");
      semDiv.classList.add("semDiv");
  var semDiv1 = document.createElement("div");
  var semDiv2 = document.createElement("div");
      semDiv1.classList.add("col-md-6");
      semDiv2.classList.add("col-md-6");
      semDiv1.appendChild(lable);
      semDiv1.appendChild(res);
      semDiv2.appendChild(lable2);
      semDiv2.appendChild(res2);
  var namediv = document.createElement("div");
       namediv.classList.add("col-md-12");
       namediv.classList.add("text-center");
       namediv.innerHTML = "<p>Group" + i + "</p>";
       semDiv.appendChild(namediv);
       semDiv.appendChild(semDiv1);
       semDiv.appendChild(semDiv2);
       basicCalc.appendChild(semDiv);

  for (k = 1; k <= noOfValuesPerGroup; k++) {
    childInput = document.createElement("input");
    childInput.type = "text";
    childInput.name = "inputvals";
    childInput.id = "ci" + "d" + i + k;
    childInput.placeholder = "Enter Value";
    childDiv.appendChild(childInput);
  }
  parentDiv.appendChild(childDiv);
}




function check() {
  allInputsCheck();
  var scInputs = document.getElementsByName('inputval2');
  for (var i = 0; i <= scInputs.length; i++) {

    if(i == length.scInputs){
      allInputsCheck();
    }else{
      var bn = scInputs[i];
      if (bn.value === "") {       
        document.getElementById(bn.id).classList.add("bg-danger")
        alert("please fill all values");
        break;
      }else{
        document.getElementById(bn.id).classList.add("bg-success")
        document.getElementById(bn.id).classList.remove("bg-danger")
      }
    }
  }
}
    
        //  allInputsCheck();
     
  

var allValues = [];
function allInputsCheck() {
  var inputss = document.getElementsByName('inputvals');
  for (var i = 0; i <= inputss.length; i++) {
    if(i === inputss.length){
      calculate();
    }else{
    var a = inputss[i];
    if (a.value === "") {
      alert("please fill all values");
      document.getElementById(a.id).classList.add("bg-danger")
      break;
     
     } else {
      allValues.push(a.value);   // all input array
      document.getElementById(a.id).classList.remove("bg-danger")
      document.getElementById(a.id).classList.add("bg-success")
    }
  }
  }

}





function calculate() {

  A2 = Number(document.getElementById("A2").value);
  D3 = Number(document.getElementById("D3").value);
  D4 = Number(document.getElementById("D4").value);
  for (i = 1; i <= groups; i++) {
    var total = 0;
    var values = [];

    for (k = 1; k <= noOfValuesPerGroup; k++) {
      values.push(Number(document.getElementById("cid" + i + k).value));
      total = Number(total + Number(document.getElementById("cid" + i + k).value));
    }
    var range = Math.max.apply(null, values) - Math.min.apply(null, values);
    document.getElementById("rangeG" + i).innerHTML = range;
    var mean = total / noOfValuesPerGroup;
    ranges.push(range);   // range array

    document.getElementById("xbar" + i).innerHTML = mean;
    means.push(mean);  // group mean array
  }

  // calculating mean of range
  rangeMean = ranges.reduce((acc, curr) => {
    return acc + curr
  }, 0) / ranges.length;


  mean2 = means.reduce((acc, curr) => {
    return acc + curr
  }, 0) / means.length;
  // Assigning (value - mean) ^ 2 to every array item
  values = values.map((k) => {
    return (k - mean2) ** 2
  })

  // Calculating the sum of updated array
  let sum = values.reduce((acc, curr) => acc + curr, 0);

  // Calculating the variance
  let variance = sum / values.length

  // Returning the Standered deviation
  sd = Math.sqrt(sum / values.length)   // STANDARD DEVIATION



  document.getElementById("mean2").innerHTML = mean2.toFixed(2);
  document.getElementById("range2").innerHTML = rangeMean.toFixed(2);
  document.getElementById("sd").innerHTML = sd.toFixed(2);
  document.getElementById("USL").innerHTML = document.getElementById("usli").value;
  document.getElementById("LSL").innerHTML = document.getElementById("lsli").value;
  var uclx = mean2 + (A2 * rangeMean);
  var lclx = mean2 - (A2 * rangeMean);
  var uclr = rangeMean * D4;
  var lclr = rangeMean * D3;

  for (g = 0; g < groups; g++) {
    uclxarray.push(uclx);
    lclxarray.push(lclx);
    uclrarray.push(uclr);
    lclrarray.push(lclr);
  }
  calccpk();

}


var cpk1;
var cpk2;
var cp;


function calccpk() {
  var USL = Number(document.getElementById("usli").value);
  document.getElementById("USL").innerHTML = USL;
  var LSL = Number(document.getElementById("lsli").value);
  document.getElementById("LSL").innerHTML = LSL
  cpk1 = (USL - mean2) / (3 * sd);
  cpk2 = (LSL - mean2) / (3 * sd);
  calccp();
}

function calccp() {
  var USL = Number(document.getElementById("usli").value);
  var LSL = Number(document.getElementById("lsli").value);
  var diff = (USL - LSL)
  var sixs = (6 * sd);
  cp = diff / sixs;
  call();
  plotchart1();
  plotchart2();
}
function call() {
  document.getElementById("cp").innerHTML = cp.toFixed(3);
  document.getElementById("cpkmn").innerHTML = cpk1.toFixed(3);
  document.getElementById("cpkmx").innerHTML = cpk2.toFixed(3);
}




var a = [];
function plotchart1() {

  for (f = 0; f < groups; f++) {
    a.push(f + 1);
  }
  let myChart = document.getElementById("myChart").getContext('2d');

  var dataFirst = {
    label: "UCL",
    data: uclxarray,
    lineTension: 0,
    fill: false,
    borderColor: 'red'
  };

  var dataSecond = {
    label: "X-BAR chart",
    data: means,
    lineTension: 0,
    fill: false,
    borderColor: 'blue'
  };
  var dataThird = {
    label: "LCL",
    data: lclxarray,
    lineTension: 0,
    fill: false,
    borderColor: 'red'
  };

  var speedData = {
    labels: a,
    datasets: [dataFirst, dataSecond, dataThird]
  };

  var chartOptions = {
    legend: {
      display: true,
      position: 'top',
      labels: {
        boxWidth: 80,
        fontColor: 'black'
      }
    }
  };

  var lineChart = new Chart(myChart, {
    type: 'line',
    data: speedData,
    options: chartOptions
  });

}
function plotchart2() {

  let myChart1 = document.getElementById("myChart2").getContext('2d');

  var dataFirst = {
    label: "UCL",
    data: uclxarray,
    lineTension: 0,
    fill: false,
    borderColor: 'red'
  };

  var dataSecond = {
    label: "X-BAR chart",
    data: ranges,
    lineTension: 0,
    fill: false,
    borderColor: 'blue'
  };
  var dataThird = {
    label: "LCL",
    data: lclxarray,
    lineTension: 0,
    fill: false,
    borderColor: 'red'
  };

  var speedData = {
    labels: a,
    datasets: [dataFirst, dataSecond, dataThird]
  };

  var chartOptions = {
    legend: {
      display: true,
      position: 'top',
      labels: {
        boxWidth: 80,
        fontColor: 'black'
      }
    }
  };

  var lineChart = new Chart(myChart1, {
    type: 'line',
    data: speedData,
    options: chartOptions
  });

}
var values = []</script>






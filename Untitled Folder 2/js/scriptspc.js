




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
var values = []
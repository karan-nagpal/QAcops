<?php

include('header.php')
?>

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
<script src="js/scriptspc.js"></script>






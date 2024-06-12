<html>
    <head>
        <title>
            vote.com
        </title>
        <style>
            *{
                margin:0%;
                padding:0%;
            }
            .container{
                width: 45%;
                margin:5px;
                height:725px;
                border:5px solid black;
                background-color:white;
            }
            body{
                background-color:#eeee;
            }
            input[type="text"]
            {
                width: 50%;
                margin-top:5px;
                height:40px;
                border:10px solid pink;
            }
            .container h2,h3{
                margin:2px;
            }
            .clr_btn{
                width:50px;
                height:50px;
                background-color:green;
                border-radius:50px;
                
            }
            .parellel{
                display:inline-block;
                vertical-align:top;
                margin-left:15px;

            }
            #c2{
                background-color:red;
            }
            .parellel #i1{
                vertical-align:middle;
            }
            #c1{
                margin-left:-15px;
                opacity: 0.1;
            }
            .ds{
                display:inline-block;
            }
            #ds1{
                margin-left:100px;
            }
            #ds2{
                margin-left:370px;
            }
            .blue{
                width:100%;
                height:200px;
                background-color:lightblue;
            }
            .blue2{
                width:100%;
                height:100px;
                background-color:lightblue;
            }
            .work input[type="submit"]
            {
                width:100px;
                height:100px;
                background-color:lightblue;
                color:white;
                font-weight:bold;
                font-size:25px;
                margin-left:100px;
            }
            .work2 input[type="submit"]
            {
                width:100px;
                height:50px;
                background-color:lightblue;
                color:white;
                font-weight:bold;
                font-size:15px;
                margin-left:500px;
            }
            .slent{
                display:inline-block;
                vertical-align:top;
            }
            .container2{
                width: 45%;
                margin:5px;
                height:725px;
                border:5px solid black;
                background-color:white;
                
            }
            .op{
                width:100%;
                border:1px solid black;
                text-align:center;
                margin:1px;
            }
            .vc_clr{
                width:40px;
                height: 40px;
                background-color:red;
                border-radius:40px;
                opacity: 0.1;
            }
            .ramju{
                width:50px;
                height:50px;
                border-radius:50px;
            }
            .container2 .op input[type="button"]{
                width:100%;
                height:50px;
                background-color:lightblue;
                color:white;
                font-size:15px;
                font-weight:bold;
            }
            .container2 .op input[type="submit"]{
                width:100%;
                height:50px;
                background-color:lightblue;
                color:white;
                font-size:15px;
                font-weight:bold;
            }
            .op input[type="text"]
            {
                border:none;
                width:100%;
                font-weight:bold;
                text-align:center;
            }
        </style>
    </head>
    <body>
    <script src="clr.js">
    </script> 
    <script src="clr2.js">
        </script>
        <script src="scriptop.js">
        </script>
        <div class="container slent">
            <h2>This is demo of evm machine</h2>
            <h3>Made by Ashwin Gadhvi &copy;</h3><br>
            <center>
            <span><div class="clr_btn parellel" id="c1"></div><input class="parellel" id="i1" type="text" name="text_msg" value="" readonly="true"><div class="clr_btn parellel" id="c2"></span> 
        </center>
            <br>
            <div class="ds" id="ds1"><h2>Start</h2></div><div class="ds" id="ds2"><h2>Stop</h2></div><br><br>
            <div class="blue"></div>
            <br><br>
            <div class="blue2 slent"></div><br><br>
            <div class="work">
                <input type="submit" value="Start" id="btn_start" onclick="onClickMenu()">
            </div>
            <div class="work2 slent">
                <input type="submit" value="Stop" id="btn_stop" onclick="onClickMenuoff()">
            </div>
        </div>
            <div class="container2 slent" id="r1">
                <table class="op" border=1>
                    <tr>
                        <th>Sr No.</th>
                        <th>Name</th>
                        <th>Logo</th>
                        <th>Status</th>
                        <th>Button</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td><input type="text" name="n1" id="op1" value="BJP" readonly="true"></td>
                        <td><img src="bjp.png" alt="no" class="ramju"></td>
                        <td><center><div class="vc_clr" id="vc1"></center></td>
                        <td><input type="submit" value="BJP" id="btn1" onmousedown="blink()" onmouseup="blink2()" onclick="setTimeout(mytime,3000);"></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><input type="text" name="n2" id="op2" value="CONGRESS" readonly="true"></td>
                        <td><img src="cng.png" alt="no" class="ramju"></td>
                        <td><center><div class="vc_clr" id="vc2"></center></td>
                        <td><input type="button" value="Click" id="btn2" onmousedown="blink3()" onmouseup="blink4()" onclick="setTimeout(mytime,3000);"></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td><input type="text" name="n3" id="op3" value="AAP" readonly="true"></td>
                        <td><img src="aap.jpg" alt="no" class="ramju"></td>
                        <td><center><div class="vc_clr" id="vc3"></center></td>
                        <td><input type="button" value="Click" id="btn3" onmousedown="blink5()" onmouseup="blink6()" onclick="setTimeout(mytime,3000);"></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td><input type="text" name="n4" id="op4" value="SHIV SENA" readonly="true"></td>
                        <td><img src="ss.png" alt="no" class="ramju"></td>
                        <td><center><div class="vc_clr" id="vc4"></center></td>
                        <td><input type="button" value="Click" id="btn4" onmousedown="blink7()" onmouseup="blink8()" onclick="setTimeout(mytime,3000);"></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td><input type="text" name="n5" id="op5" value="JANA SENA" readonly="true"></td>
                        <td><img src="js.png" alt="no" class="ramju"></td>
                        <td><center><div class="vc_clr" id="vc5"></center></td>
                        <td><input type="button" value="Click"id="btn5" onmousedown="blink9()" onmouseup="blink10()" onclick="setTimeout(mytime,3000);"></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td><input type="text" name="n6" id="op6" value="HOME LAND" readonly="true"></td>
                        <td><img src="hl2.png" alt="no" class="ramju"></td>
                        <td><center><div class="vc_clr" id="vc6"></center></td>
                        <td><input type="button" value="Click" id="btn6" onmousedown="blink11()" onmouseup="blink12()" onclick="setTimeout(mytime,3000);"></td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td><input type="text" name="n7" id="op7" value="SUB SENA" readonly="true"></td>
                        <td><img src="sb.jpg" alt="no" class="ramju"></td>
                        <td><center><div class="vc_clr" id="vc7"></center></td>
                        <td><input type="button" value="Click" id="btn7" onmousedown="blink13()" onmouseup="blink14()" onclick="setTimeout(mytime,3000);"></td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td><input type="text" name="n8" id="op8" value="POLITICAL" readonly="true"></td>
                        <td><img src="ppm.png" alt="no" class="ramju"></td>
                        <td><center><div class="vc_clr" id="vc8"></center></td>
                        <td><input type="button" value="Click" id="btn8" onmousedown="blink15()" onmouseup="blink16()"></td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td><input type="text" name="n9" id="op9" value="SVG" readonly="true"></td>
                        <td><img src="svg.png" alt="no" class="ramju"></td>
                        <td><center><div class="vc_clr" id="vc9"></center></td>
                        <td><input type="button" value="Click" id="btn9" onmousedown="blink17()" onmouseup="blink18()"></td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td><input type="text" name="n10" id="op10" value="ALT" readonly="true"></td>
                        <td><img src="alt.png" alt="no" class="ramju"></td>
                        <td><center><div class="vc_clr" id="vc10"></center></td>
                        <td><input type="button" value="Click" id="btn10" onmousedown="blink19()" onmouseup="blink20()"></td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td><input type="text" name="n11" id="op11" value="RJD" readonly="true"></td>
                        <td><img src="rjd.jpg" alt="no" class="ramju"></td>
                        <td><center><div class="vc_clr" id="vc11"></center></td>
                        <td><input type="button" value="Click" id="btn11" onmousedown="blink21()" onmouseup="blink22()"></td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td><input type="text" name="n12" id="op12" value="SAPA" readonly="true"></td>
                        <td><img src="sapa.png" alt="no" class="ramju"></td>
                        <td><center><div class="vc_clr" id="vc12"></center></td>
                        <td><input type="button" value="Click" id="btn12" onmousedown="blink23()" onmouseup="blink24()"></td>
                    </tr>
                    <tr>
                        <td>13</td>
                        <td><input type="text" name="n13" id="op13" value="BSP" readonly="true"></td>
                        <td><img src="bsp.jpg" alt="no" class="ramju"></td>
                        <td><center><div class="vc_clr" id="vc13"></center></td>
                        <td><input type="button" value="Click" id="btn13" onmousedown="blink25()" onmouseup="blink26()"></td>
                    </tr>
                </table>
            </div>
    </body>
</html>
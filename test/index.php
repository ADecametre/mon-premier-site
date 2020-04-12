<!DOCTYPE html>
<html>
<head>
    <title>TEST</title>
    <style>
        body{
            text-align:center;
        }
        #output, #output2, #output3{
            margin:0;
            margin-block-start:0;
            margin-block-end:0;
        }
    </style>
</head>
<body>
    <h1 id="output">&nbsp;</h1>
    <h3 id="output2">avant la version <span id="ba_ver"></span></h3>
    <h4 id="output3"></h4>
</body>
    <script>
        date = "11/04/20";
        time = "18:00";
        ver = "2.0.7"
        document.getElementById("ba_ver").innerHTML=ver;
        document.getElementById("output3").innerHTML=date+" "+time;
        function loadDoc() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("output").innerHTML=this.responseText;
                }
            };
            xhttp.open("GET", "script.php?t="+Math.random+"&date="+date+"&time="+time, true);
            xhttp.send();
        }
        loadDoc();
        setInterval(function(){loadDoc()}, 1000);
    </script>
</html>
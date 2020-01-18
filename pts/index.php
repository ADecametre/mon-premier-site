<!DOCTYPE html>
<html>
<head>
    <style>
        body{
            <?php if(isset($_GET['dm']) && $_GET['dm']=="true"){echo "background-color:black;";} ?>
        }
        table{
            margin: 10% auto 10% auto;
            border: 5px black double;
            <?php if(isset($_GET['dm']) && $_GET['dm']=="true"){echo "background-color:grey;";} ?>
        }
        td{
            border: 1px black solid;
        }
        h1{
            margin-block-start: 0px;
            margin-block-end: 0px;
            font-size: 175px;
        }
        .n1, .n2{
            font-size: 80px;
            font-family: fantasy;
        }
        .p1, .p2{
            font-family: serif;
        }
    </style>
    <script>
        function refresh_div(info)
        {
            var xhr_object = null;
            if(window.XMLHttpRequest)
            { // Firefox
            xhr_object = new XMLHttpRequest();
            }
            else if(window.ActiveXObject)
            { // Internet Explorer
            xhr_object = new ActiveXObject('Microsoft.XMLHTTP');
            }
            var method = 'POST';
            var filename = 'view.php?info='+info;
            xhr_object.open(method, filename, true);
            xhr_object.onreadystatechange = function()
            {
            if(xhr_object.readyState == 4)
            {
            var tmp = xhr_object.responseText;
            document.getElementById(info).innerHTML = tmp;
            setTimeout(refresh_div, 2500, info);
            }
            }
            xhr_object.send(null);
        }
        refresh_div('n1');
        refresh_div('n2');
        refresh_div('p1');
        refresh_div('p2');
    </script>
</head>
<body align="center">
    <table align="center">
        <tr>
            <td><h1 class="n1" id="n1"></h1></td>
            <td><h1 class="n2" id="n2"></h1></td>
        </tr>
        <tr>
            <td><h1 class="p1" id="p1"></h1></td>
            <td><h1 class="p2" id="p2"></h1></td>
        </tr>
    </table>
</body>
</html>
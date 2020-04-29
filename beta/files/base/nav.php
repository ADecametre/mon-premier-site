<?php //$_GET['b_page']="/files/base/nav.php";require 'c-beta.php';if($_GLOBALS['b_stop']==true){return;}
if($_GET['i']=='css'){ ?>
<style>
    #nav{
        width:75%;
        position:sticky;
        top:0;
        left:12.5%;
        right:12.5%;
    }
    table.nav{
        height:56px;
    }
    table.nav, tbody.nav, tr.nav{
        width:100%;
    }
    td.nav{
        justify-content:center;
        align-content:center;
    }
    #logo{
        opacity:0;
    }
    #nav, #content, .fadeIn{
        opacity:0;
    }
    #logo1{
        position:fixed;
        width:40%;
        top:15%;
        left:30%;
    }
    td.actc{
        background:radial-gradient(circle, #00e200 0%, #00e200 50%, transparent 100%);
    }
</style>
<style id="logo_pos"></style>
<style id="nfix"></style>
<style id="n2fix"></style>
<style id="background"></style>
<style id="cont_width"></style>
<?php }else if($_GET['i']=='js'){ ?>
<script>
    //#home{opacity:1;position:relative;}
    //#logo{opacity:1;position:relative;}
	$(document).ready(function(){
	    if($(document).width()<=800){window.mobile=true;}else{window.mobile=false;};
    /////   B O D Y   B A C K G R O U N D
        if(window.mobile==true){
            var degr_bottom_st = 325;
        }else{
            var degr_bottom_st = -50;
        }
        // var degr_bottom_st=$("#nav2").height()+$("#navd2").height();
        var bg_bottom = ' '
                +($(document).height()-degr_bottom_st)+
            'px, #00ffff '
                +($(document).height()-(degr_bottom_st-100))+
            'px, #00ffff '
                +($(document).height()-0)+
            'px)}';
        if(window.mobile==true){
            document.getElementById("background").innerHTML = 'body{background: linear-gradient(to bottom, #00ffff 0px, #00ffff 25px, #a8f0ea 125px, #a8f0ea' + bg_bottom + ';background-repeat:no-repeat;';
        }else{
            document.getElementById("background").innerHTML = 'body{background: linear-gradient(to bottom, #00ffff 0px, #00ffff 200px, #a8f0ea 300px, #a8f0ea' + bg_bottom + ';background-repeat:no-repeat;';
        }
    /////   C O N T E N T   W I D T H
        if(window.mobile==true){
            document.getElementById("cont_width").innerHTML = '#content{width:97.5%;margin-left:1.25%;}';
        }else{
            document.getElementById("cont_width").innerHTML = '#content{width:80%;margin-left:10%;}';
        }
    /////   N A V D 2   M O B I L E   F I X   |||   T E X T   M O B I L E   S M A L L
        if(window.mobile==true){
            document.getElementById("n2fix").innerHTML = '#nav2{position:fixed!important}#navd2{background-color: rgba(0,0,0,.1);border-radius: 20px}'+
            'h3.vw{font-size:5vw;}h5.vw{font-size:4vw}h6.vw{font-size:3vw}li.lev1{font-size:5vw!important;}li.lev2{font-size:3vw!important;}';
        }
    /////   I N T R O   A N I M A T I O N
    	$("#logo").fadeOut(0);
    	$("#logo").animate({opacity: '1'}, 0);
    	setTimeout(function(){
            $("#logo1").animate({
                top: '0%'
            }, 250);
        }, 500);
    	setTimeout(function(){
    	    document.getElementById("logo_pos").innerHTML = '#logo1{position:initial;}';
            if(window.mobile==true){
                $("#logo1").animate({
                    width: '0%',
                    border: 'none',
                    opacity: '0',
                    display: 'none'
                }, 500);
            }else{
                $("#logo1").animate({
                    width: '20%'
                }, 500);
            }
    	}, 750);
    	setTimeout(function(){
            $("#nav").fadeTo(500, 1);
        }, 850);
        setTimeout(function(){
    	    if(window.mobile==true){
    	        document.getElementById("nfix").innerHTML = 'div#nav, table.nav{position:fixed;top:0;left:0}';
    	        $("#logo1").fadeOut();
    	        $("div#nav").animate({
    	            height: '75px'
    	        }, 0);
    	        $("table.nav").animate({
    	            height: '75px'
    	        }, 250);
    	    }
        }, 1250);
        setTimeout(function(){
            $("#content").fadeTo(500, 1);
        }, 1500);
    	
    	    window.navSc=function(){
    	    setInterval(function() {
    	        //document.getElementById("test").innerHTML = window.mobile;
			    if((window.pageYOffset>130 && window.mobile==false) || window.mobile==true){
    			    $("div#nav").animate({width: '97.5%', left: '1.25%', right: '1.25%'}, 250);
                    //$("#home").animate({opacity: '0', top: '-100px'});
                    //$("#logo").animate({opacity: '1', top: '0px'});
                    $("#home").fadeOut(250);
                    $("table.nav").animate({height: '75px'}, 250);
                    setTimeout(function() {
                        $("#logo").fadeIn(250);
                        //$("#logo1").animate({opacity: '0'});
                        if(window.mobile==false){
                            $("#logo1").fadeTo(250, 0);
                        }
                        //$("#logo1").fadeOut(250);
                    }, 250);
    		    }else{
    			    $("div#nav").animate({width: '75%', left: '12.5%', right: '12.5%'}, 250);
                    //$("#home").animate({opacity: '1', top: '0px'});
                    //$("#logo").animate({opacity: '0', top: '100px'});
                    $("#logo").fadeOut(250);
                    $("table.nav").animate({height: '56px'}, 250);
                    setTimeout(function(){
                        $("#home").fadeIn(250);
                        //$("#logo1").animate({opacity: '1'});
                        $("#logo1").fadeTo(250, 1);
                        //$("#logo1").fadeIn(250);
                    }, 250);
    		    }
                //document.getElementById("nav").innerHTML = Math.round(window.pageYOffset);
		    }, 500);
    	    }
    	setTimeout(function(){
    	    navSc();
    	}, 1250);
	});
</script>
<?php }else if($_GET['i']=='html'){$ach="";$acp="";if($_SERVER['PHP_SELF']=="/index.php"){$ach=" actc";}else if(substr_count($_SERVER['PHP_SELF'],"/projets")>0){$acp=" actc";} echo preg_replace( "/\s\s+/", " ", '
    <div id="dlogo1" align="center">
        <img id="logo1" src="/files/base/y-logo/'.date("Y").'.png" />
    </div>
    <div id="nav" align="center" style="z-index:999;">
        <table class="nav" width="100%" align="center">
            <tbody class="nav">
                <tr class="nav" style="display:inline-flex">
                    <td class="nav" width="33%" align="center"><h3 class="vw" align="center" title="Bientôt disponible" style="cursor:not-allowed">Programmes</h3></td>
                    <td class="nav navc'.$ach.'" width="34%" align="center"><a style="color:black" href="/">
                        <h3 class="vw" align="center" id="home"><img style="top:0px;position:relative" width="30px" height="25px" src="/files/base/home.png"></h3>
                        <img style="top:2px;position:relative" id="logo" width="75px" src="/files/base/y-logo/'.date("Y").'.png" />
                    </a></td>
                    <td class="nav'.$acp.'" id="test" width="33%" align="center"><h3 class="vw" align="center"><a style="color:black" href="/projets">Projets</a></h3></td>
                </tr>
            </tbody>
        </table>
    </div>
');} ?>
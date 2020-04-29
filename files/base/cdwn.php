<?php       //  V   E   R   S   I   O   N       D   A   T   E   ?>
<?php
sql("SELECT `date`, `hour` from `ver` WHERE `v`='".$GLOBALS["fv1"]."' AND CONCAT(`date`, `hour`) NOT LIKE '%?%'", null, '
    //if(strpos("?", " ".$row["date"].$row["hour"])==false){
        echo "v=\"".$GLOBALS["fv1"]."\";";
        if(strtok(strrev($GLOBALS["fv1"]), ".")==0){
            echo "bv=true;";
        }else{
            echo "bv=false;";
        }
        
        $time=array("vd", "vm", "vy", "vh", "vi");
        $x=0;
        
        $string = $row["date"];
        $token = strtok($string, "/");
        while($token !== false){
            echo $time[$x++]."=".$token.";";
            $token = strtok("/");
        }
        $string = $row["hour"];
        $token = strtok($string, ":");
        while($token !== false){
            echo $time[$x++]."=".$token.";";
            $token = strtok(":");
        }
    //}
');
?>

if(typeof vy !== 'undefined') {
    vy+=2000;
    vm-=1;
    vs=0;

<?php       //  D   A   T   E   S                               ?>
    vdt = new Date(vy, vm, vd, vh, vi, vs);
    cdt = new Date();
    ddt = vdt-cdt;

<?php       //  D   A   T   E       D   I   F   F               ?>
    if(ddt<(1*24*60*60*1000) || (ddt<(7*24*60*60*1000) && bv==true)){
        dddt=ddt;
        dd=Math.floor(dddt/(1*24*60*60*1000));
            dddt-=dd*(1*24*60*60*1000);
        dh=Math.floor(dddt/(1*60*60*1000));
            dddt-=dh*(1*60*60*1000);
        dm=Math.floor(dddt/(1*60*1000));
            dddt-=dm*(1*60*1000);
        ds=Math.floor(dddt/(1*1000));
            dddt-=ds*(1*1000);

<?php       //  O   U   T   P   U   T                           ?>

        if(ddt>1000){
            sub_output=true;
            if(dd>0){
                if(dh<10){dh="0"+dh;}
                if(dm<10){dm="0"+dm;}
                if(ds<10){ds="0"+ds;}
                cdwn_output=dd+"j <small>"+dh+":"+dm+"</small>";
            }else if(dh>0){
                if(dm<10){dm="0"+dm;}
                if(ds<10){ds="0"+ds;}
                cdwn_output=dh+":"+dm+":"+ds;
            }else if(dm>0){
                if(ds<10){ds="0"+ds;}
                cdwn_output=dm+":"+ds;
            }else if(ds>1){
                cdwn_output=ds+" secondes";
            }else if(ds==1){
                cdwn_output=ds+" seconde";
            }
        }else{
            cdwn_output='<a href="#" onclick="location.reload()">VERSION '+v+' DISPONIBLE</a>';
            sub_output=false;
        }

<?php       //  S   U   B     O   U   T   P   U   T             ?>

        if(sub_output==true){
            cdwn_output+="<br><small><small>avant la version "+v+"</small></small>";
            
            if(vd<10){vd="0"+vd;}
            vm++;
            if(vm<10){vm="0"+vm;}
            if(vh<10){vh="0"+vh;}
            if(vi<10){vi="0"+vi;}
            
            cdwn_output+=' <small style="position:relative;top:-2px"><small><small><small>('+vd+'/'+vm+'/'+vy+' '+vh+':'+vi+')</small></small></small></small>';
        }
        
    }
    
}
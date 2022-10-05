<?php
   set_time_limit(0); 
    $hash = "$2y$10$0GNiidCkeO/VBBHPH0DP6e5tgz6l/FIOxs1RcFloJrXuTYmmAsW72";
    
    for($i = "a"; $i <= "z"; $i++){
        for($j = "a"; $j <= "z"; $j++){
            for($z = "a"; $z <= "z"; $z++){
                for($x = "a"; $x <= "z"; $x++){
                    $perfe = password_hash("$i + $j + $z + $x", PASSWORD_DEFAULT);
                    if($perfe == $hash){
                        echo $perfe;
                    }
                }
            }
        }
    }
?>
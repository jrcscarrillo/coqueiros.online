<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//        $string_shell = '/bin/bash/ /home/online/public_html/ComprobantesSRI/ecuador/arranca.sh';
//        $ret = shell_exec($string_shell);
        $ret = shell_exec('/home/online/public_html/public/arranca.sh');
        echo $ret;
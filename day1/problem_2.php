<?php
function maskPhoneNumber($number){
    return substr($number,0,2).str_repeat("*", strlen($number)-4) . substr($number, -2);
}
echo maskPhoneNumber('9121810829');

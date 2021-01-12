<?php

header('Content-Length: 0');
header('Connection: close');
flush();

echo('Text the client should not see');
sleep(2); // Also, the client shouldn't have to wait.

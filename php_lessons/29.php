<?php

//Cookie

// setcookie("username", "sugiyama");
// setcookie("username", "sugiyama",time()+60*60);
setcookie("username", "sugiyama",time()-60*60);

echo $_COOKIE['username'];


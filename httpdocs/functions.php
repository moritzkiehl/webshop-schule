<?php

function rmHtmlEnt($str)
{
return htmlentities($str, ENT_QUOTES, 'UTF-8');
}

//echo password_hash("password",PASSWORD_BCRYPT);
<?php
function open_database() 
{
    global $connection;
    $connection = mysql_connect(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD) or die(mysql_error());
    mysql_select_db(DATABASE_NAME, $connection) or die(mysql_error());
}
 
function execute_statement($statement) 
{
    global $connection;
    open_database();
    $result = mysql_query($statement, $connection)
    or die(mysql_error());
    close_database();
    return $result;
}
 
function execute_non_query($dml) 
{
    $result = execute_statement($dml);
    return mysql_affected_rows($result);
}
 
function execute_query($sql) 
{
    $dataset = FALSE;
    $result = execute_statement($sql);
    $count = mysql_num_rows($result);

    if ($count == 1) 
    {
        $dataset = mysql_fetch_assoc($result);
    }
 
    if ($count > 1) 
    {
        $dataset = array();
        while ($row = mysql_fetch_assoc($result)) 
        {
            $dataset[] = $row;
        }
    }
    return $dataset;
}
 
function close_database() 
{
    global $connection;
    if (isset($connection)) 
    {
        mysql_close($connection);
    }
}

function redirect_to($url) 
{
    if (isset($url)) {
        header("Location: " . $url);
    }
}
 
function sanitize_input($string) 
{
    return mysql_real_escape_string($string);
}
 
function sanitize_output($string) 
{
    return htmlspecialchars($string);
}

function pwd_encode($password)
{
    $intermediateSalt = md5('mgljtuà_çfçàg_sdçàfèd_çf-gdf_àg-_dfg(èdg(èdçsfg-_)df');
    $salt = substr($intermediateSalt, 0, 6);
    return hash("sha256", $password . $salt);
}
?>

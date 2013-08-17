<?php
function get_posts() 
{
    $sql = 'select * from post';
    return execute_query($sql);
}
function get_post_by_id($id) 
{
    $id = (int)$id;
    $sql = sprintf("select * from post where id = %d limit 1", $id);
    return execute_query($sql);
}
 
function insert_post($title, $content) 
{
    $title = sanitize_input($title);
    $content = sanitize_input($content);
    $sql = sprintf("insert into post (title, content) values ('%s', '%s')", $title, $content);
    return execute_non_query($sql);
}
 
function update_post($title, $content, $id) 
{
    $id = (int)$id;
    $title = sanitize_input($title);
    $content = sanitize_input($content);
    $sql = sprintf("update post set title = '%s', content = '%s' where id = %d", $title, $content, $id);
    return execute_non_query($sql);
}
 
function delete_post($id) 
{
    $id = (int)$id;
    $sql = sprintf("delete from post where id = %d limit 1", $id);
    return execute_non_query($sql);
}
?>
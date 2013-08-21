<?php
include('includes/config.inc.php');
open_database();
$sql="SELECT * FROM post WHERE id < ".mysql_real_escape_string($_GET['last'])." ORDER BY id DESC LIMIT 5";
$result = mysql_query($sql) or die(mysql_error());


while($data = mysql_fetch_array($result))
{
	?>
    <div class="article" id="<?php echo $data['id']?>">
        <div class="article_header"><a href="perm.php?id=<?php echo $data['id']; ?>"><?php echo utf8_encode($data['title']); ?></a></div>
        <div class="article_content"><?php echo utf8_encode($data['content']); ?></div>
        <div class="article_footer">Le <?php echo $data['created']; ?> par  <a href="#"><?php echo $data['author']; ?></a> in <?php echo $data['cat']; ?></div>
    </div>
<?php
}
?>
<?php
include('includes/config.inc.php');
open_database();
$sql="SELECT * FROM post, categories WHERE post.cat = categories.catId AND post.id < ".mysql_real_escape_string($_GET['last'])." ORDER BY post.id DESC LIMIT 5";
$result = mysql_query($sql) or die(mysql_error());


while($data = mysql_fetch_array($result))
{
	?>
    <div class="article" id="<?php echo $data['id']?>">
        <div class="article_header"><a href="perm.php?id=<?php echo $data['id']; ?>"><?php echo utf8_encode($data['title']); ?></a></div>
        <div class="article_content"><?php echo utf8_encode($data['content']); ?></div>
        <div class="article_footer"><?php if($enablePlusOne==true) {?><div href="perm.php?id=<?php echo $data['id']; ?>" class="g-plusone" data-size="medium"></div><?php } ?> Le <?php echo $data['created']; ?> par  <a href="#"><?php echo $data['author']; ?></a> in <a href="#cat.php?id=<?php echo $data['catId']; ?>"><?php echo $data['catTitle']; ?></a></div>
    </div>
<?php
}
?>
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
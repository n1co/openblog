{include file='base/header.tpl'}
        <div class="article">
            <div class="article_header"><a href="perm.php?id={$postId}">{$postTitle}</a></div>
            <div class="article_content">{$postContent}</div>
            <div class="article_footer">Le {$postDate} par  <a href="#">{$postAuthor}</a> in <a href="#cat.php?id={$catId}">{$catTitle}</a></div>
        </div>

{include file='base/footer.tpl'}
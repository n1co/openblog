{include file='base/header.tpl'}
    <h1>Hello, {$name} !</h1><br />
    {foreach from=$posts key=id item=i}
        <div class="article">
            <div class="article_header"><a href="perm.php?id={$i.id}">{$i.title}</a></div>
            <div class="article_content">{$i.content}</div>
            <div class="article_footer">Le {$i.created} par  <a href="#">{$i.author}</a> in {$i.cat}</div>
        </div>
    {/foreach}

{include file='base/footer.tpl'}
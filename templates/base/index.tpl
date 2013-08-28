{include file='base/header.tpl'}
    <div style="display: none; class="nb_art">
		{$art_count}
                </div>
    {foreach from=$posts key=id item=i}
        <div class="article" id="{$i.id}">
            <div class="article_header"><a href="perm.php?id={$i.id}">{$i.title}</a></div>
            <div class="article_content">{$i.content}</div>
            <div class="article_footer">{if $enablePlusOne == true}<div href="perm.php?id={$i.id}" class="g-plusone" data-size="medium"></div>{/if} Le {$i.created} par  <a href="#">{$i.author}</a> in <a href="#cat.php?id={$i.catId}">{$i.catTitle}</a></div>
        </div>
    {/foreach}
<div class="loadmore">
		Loading...
	</div>
{include file='base/footer.tpl'}
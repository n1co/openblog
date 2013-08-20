{include file='base/header.tpl'}
<table id="posts_overall">
    {foreach from=$posts key=id item=i}
        <tr class="arts">
            <td><a href="perm.php?id={$i.id}">{$i.title}</a></td>
            <td><a href="editor.php?id={$i.id}">Edit</a></td>
            <td><a href="admin.php?delete={$i.id}">Delete</a></td>
        </tr>
    {/foreach}
</table>
{include file='base/footer.tpl'}
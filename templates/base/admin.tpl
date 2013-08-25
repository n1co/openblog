{include file='base/header.tpl'}
{literal}
<script type="text/javascript">
    $(function() {
        $("#dialog-confirm").dialog({
            autoOpen: false,
            modal: true
        });
        $( ".confirmation" )
                        .button()
			.click(function(e) {
                                var url = $(this).attr("href");
                                e.preventDefault();
                                $( "#dialog-confirm" ).dialog({
                        autoOpen: false,
			resizable: false,
			height:200,
                        width:300,
			modal: true,
			buttons: {
				"Confirm": function() {
					window.location.href = url;
				},
				Cancel: function() {
					$( this ).dialog( "close" );
				}
			}
		});
				$( "#dialog-confirm" ).dialog( "open" );
			});
		
                
	});
</script>
{/literal}
<table id="posts_overall">
    {foreach from=$posts key=id item=i}
        <tr class="arts">
            <td><a href="perm.php?id={$i.id}">{$i.title}</a></td>
            <td><a href="editor.php?id={$i.id}">Edit</a></td>
            <td><a href="admin.php?delete={$i.id}" class="confirmation">Delete</a></td>
        </tr>
    {/foreach}
</table>
<div id="dialog-confirm" title="Remove this post ?">
	<p><span class="ui-icon ui-icon-alert" style="float: left; margin: 0 7px 20px 0;"></span>Confirm you want to delete this post ?</p>
</div>
{include file='base/footer.tpl'}
{include file='base/header.tpl'}
{literal}
<script type="text/javascript">
bkLib.onDomLoaded(function(){
  new nicEditor({fullPanel : true, onSave : function(content, id, instance) {
    alert('Work in progress. Use the bottom button instead.');
  } }).panelInstance('editor');
});
{/literal}
  </script>
<form method="POST" action="editor.php?id={$postId}">
<input name="title" type="text" class="input-block-level" value="{$postTitle}">
<textarea id="editor" name="content" style="width: 100%; height: 300px;">
       {$postContent}
</textarea>
       <button class="btn btn-large btn-primary" type="submit">Save</button>
</form>
{include file='base/footer.tpl'}
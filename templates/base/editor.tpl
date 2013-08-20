{include file='base/header.tpl'}
<script type="text/javascript">
//<![CDATA[
        bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
  //]]>
  </script>
<form method="POST" action="editor.php?id={$postId}">
<input name="title" id="editor" type="text" class="input-block-level" value="{$postTitle}">
<textarea id="editor" name="content" style="width: 100%; height: 300px;">
       {$postContent}
</textarea>
       <button class="btn btn-large btn-primary" type="submit">Save</button>
</form>
{include file='base/footer.tpl'}
{include file='base/header.tpl'}
<form method="POST" action="login.php" class="form-signin">
        <h2 class="form-signin-heading">Please sign in</h2>
        {if isset($error)}<p class="error">{$error}</p>{/if}
        <input name="mail" type="text" class="input-block-level" placeholder="Email address">
        <input name="password" type="password" class="input-block-level" placeholder="Password">
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
        <button class="btn btn-large btn-primary" type="submit">Sign in</button>
</form>
{include file='base/footer.tpl'}
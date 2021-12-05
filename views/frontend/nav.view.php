<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">HOME</a>
  <a class="navbar-brand" href="#">Write Article</a>
  <a class="navbar-brand" href="#">Post API</a>
  <a class="navbar-brand" href="#">Comments API</a>
  <?php if($is_admin === true): ?>
      <a class="navbar-brand" href="#">User List</a>
  <?php endif; ?>
</nav>
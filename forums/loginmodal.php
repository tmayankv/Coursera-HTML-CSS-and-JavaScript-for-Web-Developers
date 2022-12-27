<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModalLabel">Login Here</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="loginhandle.php" method="post">
  <div class="mb-3">
    <label for="myemail" class="form-label">Email address</label>
    <input type="email" class="form-control" id="myemail" name="email" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We\'ll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="mypass" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" id="mypass">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form> </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div></div></div></div>
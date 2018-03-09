<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="css/app.css" type="text/css">
  <title></title>
</head>

<body>
  <div class="admin-dashboard-page">
    <h2><strong><em>Admin's Dashboard</em></strong></h2>
    <main class="container admin-side1">
      <form class="form-group form-list">
        <input type="file" class="" Upload List>

      </form>


      <form class="form-group form-list">
        <button type="submit" class="btn btn-lg window-admin">GENERATE</button>
      </form>

      <form class="form-group">
        <button type="submit" class="btn btn-lg window-admin">Switch Pair</button>

        <button class="btn btn-lg window-save-admin">Save</button>

        <button type="submit" class="btn btn-lg window-admin">Delete User</button>
      </form>
    </main>

    <main class="container admin-side2">
      <form class="form-group">
        <div class="search button">
          <input class="form-control search s-inline" placeholder="search">
          <button class="btn pull-right s-inline">Search<img src="images/search.png" width="20em" height="20em"></button>
        </div>

        <div class="previous list">
          <button class="btn" id="view-previous-admin">VIEW PREVIOUS LIST</button>
        </div>
      </form>

      <div id="change-login-info">

        <h2>CHANGE LOGIN INFO</h2>
        <hr>
        <form class="form-group">
          <dl>
            <dt>
                <label>USERNAME</label>
              </dt>
            <dd>
              <input type="text" placeholder="Admin username" class="form-control">
            </dd>
          </dl>
          <dl>
            <dt>
              <label class="pas"> OLD PASSWORD</label>
            </dt>
            <dd>
              <input type=" password" placeholder="Old password" class="form-control">
            </dd>
          </dl>
          <dl>
            <dt>
              <label class="pas">NEW PASSWORD</label>
              </dt>
            <dd>
              <input type=" password" placeholder="New password" class="form-control ">
            </dd>
          </dl>
          <dl>
            <dt>
              <label class="pas">CONFIRM PASSWORD</label>
              </dt>
            <dd>
              <input type=" password" placeholder="Confirm password" class="form-control ">
            </dd>
            </dd>
          </dl>
        </form>
        <button class="btn  btn-lg center-block">Reset</button>
        </form>
      </div>
    </main>
  </div>
  <script type="text/javascript" href="js/jquery-3.3.1.js"></script>
</body>

</html>
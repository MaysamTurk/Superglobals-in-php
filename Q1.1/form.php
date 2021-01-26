<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boosted@4.6.0/dist/css/orangeHelvetica.min.css" integrity="sha384-ZWV5rANfkZIt/7HDFToWXT+5LfpEbtDN22vw9WhARiDc+o6zJ4qxwdTwskCbe8NK" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boosted@4.6.0/dist/css/orangeIcons.min.css" integrity="sha384-7/+XhgsfiKJOYwQYLCI6P8bz89YJEKD2GLErv3KrHbxQ4wPcJ9JcqVZVKAglgBJP" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boosted@4.6.0/dist/css/boosted.min.css" integrity="sha384-gqlCljYk+czxYG/OEUHPObOqdFdx4RFpXrAy+z6dbWdeD1ybOujFGA+lKVLnXtxx" crossorigin="anonymous">
    <title>Form</title>
</head>
<body>
<?php ?>

<div style='margin:1rem;'>
<form action="control.php" method="get">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" style='width:20rem;' name="email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" style='width:20rem;' name="password">
  </div>
  <button type="submit" value="login" class="btn btn-primary">Submit</button>
</form>
</div>
</body>
</html>
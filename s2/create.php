<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<div class="container">
<div class="row">
<br>
<div class="col-md-6 mx-auto shadow">

<form action="store.php" method="post">
<div class="form-group">
<label for="email">Email :</label>
<input type="text" name="email" id="email" class="form-control">

</div>
<div class="form-group">
<label for="passe">Mot de passe :</label>
<input type="password" name="passe" id="passe" class="form-control">

</div>
<div class="form-group">
<label for="passe">role :</label>
<select name="role" id="">
<option value="public">Public</option>
<option value="admin">Admin</option>
<option value="super admin">Super Admin</option>
</select>
</div>
<div class="form-group">
<input type="submit" class="btn btn-primary btn-block" value="valider">

</div>

</form>
</div>
</div>
</div>
    
</body>
</html>
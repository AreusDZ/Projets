<html>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <div class="container-fluid" style="width : 50%">
            <form action="traitement.php" method="POST">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" class="form-control" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <button type="submit" name="add" class="btn btn-primary">Submit</button>
            </form>
    </div>

</html>



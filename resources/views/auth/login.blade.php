<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h4 class="text-center mt-5">Login</h4>
        <hr>
            <form action="{{ route('login') }}" method="post">
            @csrf
                <?php if (isset($error)) : ?>
                    <div class="error">
                        <?php echo $error ?>
                    </div>
                <?php endif; ?>

            <div class="form-group">
                <label>Email</label>
                <div class="input-group">
                    <div class="input-group-prepend"></div>
                    <input type="email" name="email" placeholder="Email" class="form-control" required />
                </div>
            </div>
            <div class="form-group">
                <label>Password</label>
                <div class="input-group">
                    <div class="input-group-prepend"></div>
                    <input type="password" name="password" placeholder="Password" class="form-control" required />
                </div>
            </div>
                <button type="submit" name="kirim" class="btn btn-primary mt-3">Login</button>
                <button type="reset" class="btn btn-danger mt-3">Reset</button>
                <hr>
            </form>

    </div>

<style type="text/css">
  body{
  background-color: #ccf5f6;
}
</style>

<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
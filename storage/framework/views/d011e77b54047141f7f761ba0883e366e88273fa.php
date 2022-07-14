<!DOCTYPE html>
<html>
<head>
  <title>RESTAURANT</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

  <div class="d-flex">
  <?php echo $__env->make('layout.section.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <div class="row w-75 p-5">
  <div class="col-12">
  <?php echo $__env->yieldContent('content'); ?>
  </div>
  </div>
  </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script type="text/javascript" src="admin.js"></script>
</body>
</html><?php /**PATH C:\Users\ASUS\Restaurant\resources\views/layout/main.blade.php ENDPATH**/ ?>
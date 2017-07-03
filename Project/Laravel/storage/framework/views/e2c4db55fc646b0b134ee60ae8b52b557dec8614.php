<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Lessons</title>
        <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

  </head>
  <body>
  <div class="container">
    <h2><strong>Lessons</strong></h2>
    <iframe style="text-align:center" src="https://ghbtns.com/github-btn.html?user=umitcanhasbi&repo=LaravelCourseRegistiration&type=star&count=true&size=large" frameborder="0" scrolling="0" width="160px" height="30px"></iframe>
    
    <hr>

    <form style="text-align:center" method="POST" action="/addLesson" class="form-inline">

      <?php echo e(csrf_field()); ?>

      <h4>Lessons:</h4>
      <label for="name">Lesson Name:</label>
      <input style="width:245px" type="text" class="form-control" id="name" name="name" placeholder="Enter lesson name :)">

      <label for="info">Lesson Info:</label>
      <input style="width:245px" type="text" class="form-control" id="info" name="info" placeholder="Enter info :)">
      <br> </br>
      <label for="date">Lesson Date:</label>
      <input style="width:245px" type="text" class="form-control" id="date" name="date" placeholder="Enter dates :)">

      <label for="department_id">Choose department id:</label>
      <input style="width:245px" type="number" class="form-control" id="department_id" name="department_id" placeholder="Enter related department id :)">

      <button type="submit" class="btn btn-primary">Add</button>
    </form>
    <hr>
    
    <table class="table">
      <thead>
        <tr>
          <th style="text-align:center">Lesson</th>
          <th style="text-align:center">Remove</th>
        </tr>
      </thead>
      <tbody>
      <?php $__currentLoopData = $lessons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lesson): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <td style="text-align:center">
            <form method="POST" action="/editLesson/<?php echo e($lesson->id); ?>" class="form-inline">
              <?php echo e(csrf_field()); ?>

              <label for="name"></label>
              <input type="text" class="form-control" id="name" name="name" value="<?php echo e($lesson->name); ?>">

              <label for="info"></label>
              <input type="text" class="form-control" id="info" name="info" value="<?php echo e($lesson->info); ?>">
              
              <label for="date"></label>
              <input type="text" class="form-control" id="date" name="date" value="<?php echo e($lesson->date); ?>">

              <p><?php echo e($lesson->department->info); ?></p>

              <button type="submit" class="btn btn-info">Edit</button>
            </form>
          <td style="text-align:center"><a href="/deleteLesson/<?php echo e($lesson->id); ?>"><button type="button" name="edit" class="btn btn-danger">Delete</button></a></td>
        </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>
  </div>
  </body>
</html>

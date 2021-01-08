<?php include 'inc/header.php'; ?>
      <div class="jumbotron">
        <h1>Find A Job</h1>
          <form action="index.php" method="get">
              <select name="category" class="form-control" id="">
                  <option value="0">Choose Category</option>
                  <?php foreach ($categories as $category): ?>
                      <option value="<?php echo $category->id?>"><?php echo $category->name?></option>
                  <?php endforeach;?>
              </select>
              <input style="margin-top: 25px" type="submit" class="btn btn-success" value="FIND">
              <br>
          </form>
      </div>
        <h3><?php echo $title; ?></h3>
        <?php foreach ($jobs as $job):?>
      <div class="row marketing">
        <div class="col-lg-6">
          <h4><?php echo $job->job_title?></h4>
          <p><?php echo $job->description?></p>


            <a href="job.php?id=<?php echo $job->id;?>" class="btn btn-primary">View</a>
        </div>

      </div>
        <?php endforeach;?>


<?php include 'inc/footer.php'; ?>
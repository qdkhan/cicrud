<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href=<?php echo base_url('assets/css/bootstrap.min.css'); ?> rel="stylesheet"  />
        <script src=<?php echo base_url('assets/js/bootstrap.bundle.js'); ?> ></script>
        
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 bg-danger">
                    <form method="post" action="#"  class="mt-4" enctype="multipart/form-data">
                        <div class="mb-3">
                                <label for="name" class="form-label text-white">Name</label>
                                <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label text-white">Email address</label>
                                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                                    <div id="emailHelp" class="form-text text-warning">We'll never share your email with anyone else.</div>
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label text-white">Phone</label>
                                <input type="number" class="form-control" name="phone" id="phone">
                            </div>
                            <button type="submit"  class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
                    <hr class="col-md-8 offset-md-2 border border-danger border-1" />
                    <hr class="col-md-8 offset-md-2 border border-primary border-2" />
            <!-- Start of Second Form -->
            <div class="row">
                <div class="col-md-8 offset-md-2 bg-primary">
                    <?php echo form_open(site_url('helper/form-submit'), [
                                                    'method' => 'post',
                                                    'class' => 'form-class',
                                                    'id' => 'form-id',
                                                    'enctype' => 'multipart/form-data']) 
                    ?>
                        <div class="mb-3">
                            <label for="name" class="form-label text-white">Name</label>
                                <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label text-white">Email address</label>
                                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                                <div id="emailHelp" class="form-text text-warning">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label text-white">Phone</label>
                            <input type="number" class="form-control" name="phone" id="phone">
                        </div>
                        <button type="submit" class="btn btn-warning">Submit</button>
                    <?php echo form_close() ?>
                </div>
            </div>
            <!-- End of Second Form -->
        </div>
    </body>
</html>

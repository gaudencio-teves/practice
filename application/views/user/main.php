<div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
        <?php if(is_array($photo_active)){
            $i = 0;
            foreach($photo_active as $photo){
                ?>
                <div class="col-lg-4">
                    <img class="img-circle" src="<?php echo base_url($photo['source'])?>" alt="Generic placeholder image" width="140" height="140">
                    <h2>Heading</h2>
                    <p><?php echo $photo['description']; ?></p>
                    <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
            <?php
                $i++;
            }
        }?>
        <div class="col-lg-4">
            <img class="img-circle" src="<?php echo base_url()?>img/services/new4.jpg" alt="Generic placeholder image" width="140" height="140">
            <h2>Heading</h2>
            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
            <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <!--
        <div class="col-lg-4">
            <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            <h2>Heading</h2>
            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
            <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4
        <div class="col-lg-4">
            <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            <h2>Heading</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Log in</h4>
                    </div>
                    <form action="<?php echo base_url("user/login")?>" method="POST">
                        <div class="modal-body">
                                <div class="form-group">
                                    <p><label>Username: </label><input type="text" name="username" placeholder="Username" class="form-control" required></p>
                                    <p><label>Password: </label><input type="password" name="password" placeholder="Password" class="form-control" required></p>
                                </div>


                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="sumbit" class="btn btn-primary">Log in</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
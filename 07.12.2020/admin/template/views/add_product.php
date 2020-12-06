<?php
if (isset($_GET['id']) && !empty($_GET['id']) && $_GET['action'] == 'edit_product') {
    $ids = $_GET['id'];
    $stmt = mysqli_prepare($connection, "SELECT * from shop_activewear WHERE id = ?");
    mysqli_stmt_bind_param($stmt, "d", $ids);
    mysqli_stmt_execute($stmt);
    $res = mysqli_stmt_get_result($stmt);
    $page = mysqli_fetch_assoc($res);
}

$sql = "SELECT * FROM shop_category";
$res = mysqli_query($connection, $sql);
$categories = mysqli_fetch_all($res, MYSQLI_ASSOC);

$req = "SELECT * FROM brand";
$resp = mysqli_query($connection, $req);
$brands = mysqli_fetch_all($resp, MYSQLI_ASSOC);


$url = isset($page['id']) ? '/admin/?action=update_product_page&id=' . $page['id'] : '/admin/?action=save_product_page';

?>

    <body>
    <section>
        <div class="mainpanel">
            <div class="pageheader">
                <div class="media">
                    <div class="pageicon pull-left">
                        <i class="fa fa-pencil"></i>
                    </div>
                    <div class="media-body">
                        <ul class="breadcrumb">
                            <li><a href=""><i class="glyphicon glyphicon-home"></i></a></li>
                            <li><a href="">Forms</a></li>
                            <li>General Forms</li>
                        </ul>
                        <h4>General Forms</h4>
                    </div>
                </div><!-- media -->
            </div><!-- pageheader -->

            <div class="contentpanel">

                <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="panel-btns">
                                    <a href="" class="panel-minimize tooltips" data-toggle="tooltip"
                                       title="Minimize Panel"><i class="fa fa-minus"></i></a>
                                    <a href="" class="panel-close tooltips" data-toggle="tooltip" title="Close Panel"><i
                                            class="fa fa-times"></i></a>
                                </div><!-- panel-btns -->
                                <h4 class="panel-title">Input Fields</h4>
                                <p>Individual form controls automatically receive some global styling. All textual
                                    elements with <code>.form-control</code> are set to width: 100%; by default. Wrap
                                    labels and controls in <code>.form-group</code> for optimum spacing.</p>
                            </div><!-- panel-heading -->

                            <div class="panel-body nopadding">

                                <form class="form-horizontal form-bordered" role="form" method="post"
                                      action="<?= $url ?>" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Brand</label>
                                        <div class="col-sm-8">
                                            <select name="brand" class="form-control">
                                                <?php foreach ($brands as $brand):
                                                    $selected = '';
                                                    if (isset($page['category']) && $page['category'] == $brand['id']) {
                                                        $selected = 'selected';
                                                    }
                                                    ?>
                                                    <option value="<?= $brand['id'] ?>" <?=$selected ?> > <?= $brand['brand_name'] ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div><!-- form-group -->

                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Size</label>
                                        <div class="col-sm-8">
                                            <input type="text" placeholder="Default Input" name="size"
                                                   value="<?= $page['product_size'] ?? '' ?>"
                                                   class="form-control"/>
                                        </div>
                                    </div><!-- form-group -->

                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Cost</label>
                                        <div class="col-sm-8">
                                            <input type="text" placeholder="Default Input" name="cost"
                                                   value="<?= $page['cost'] ?? '' ?>"
                                                   class="form-control"/>
                                        </div>
                                    </div><!-- form-group -->

                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Product name</label>
                                        <div class="col-sm-8">
                                        <textarea type="text" placeholder="Default Input" rows="3" name="name"
                                                  class="form-control"> <?= $page['product_name'] ?? '' ?> </textarea>
                                        </div>
                                    </div><!-- form-group -->

                                    <div class="form-group">
                                        <label class="col-sm-4 control-label" for="disabledinput">Image</label>
                                        <div class="col-sm-8">
                                            <input placeholder="Disabled Input" id="disabledinput"
                                                   name="product_img" type="file" value="<?= $page['img'] ?? '' ?>"
                                                   class="form-control"/>
                                        </div>
                                    </div><!-- form-group -->

                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">In stock</label>
                                        <div class="col-sm-8">
                                            <input type="text" placeholder="Default Input" name="in_stock"
                                                   value="<?= $page['in_stock'] ?? '' ?>"
                                                   class="form-control"/>
                                        </div>
                                    </div><!-- form-group -->

                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Category</label>
                                        <div class="col-sm-8">
                                            <select name="category" class="form-control">
                                                <?php foreach ($categories as $category):
                                                    $selected = '';
                                                    if (isset($page['category']) && $page['category'] == $category['id']) {
                                                        $selected = 'selected';
                                                    }
                                                    ?>
                                                    <option value="<?= $category['id'] ?>" <?=$selected ?> > <?= $category['name'] ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div><!-- form-group -->


                                    <button type="submit" class="btn btn-default">Submit Button</button>
                                    <button type="reset" class="btn btn-default">Reset Button</button>
                                </form>
                            </div><!-- panel-body -->
                        </div><!-- panel -->


                    </div><!-- col-md-6 -->


                    <!-- col-md-6 -->
                </div><!-- row -->


            </div><!-- contentpanel -->
        </div>

    </section>
    </body>
    </html>


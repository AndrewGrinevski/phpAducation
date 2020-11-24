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
                                      action="/admin/?action=save_page" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Title</label>
                                        <div class="col-sm-8">
                                            <input type="text" placeholder="Default Input" name="title"
                                                   class="form-control"/>
                                        </div>
                                    </div><!-- form-group -->

                                    <div class="form-group">
                                        <label class="col-sm-4 control-label" for="disabledinput">Image</label>
                                        <div class="col-sm-8">
                                            <input placeholder="Disabled Input" id="disabledinput"
                                                   name="page_img" type="file"
                                                   class="form-control"/>
                                        </div>
                                    </div><!-- form-group -->

                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Author</label>
                                        <div class="col-sm-8">
                                            <input type="text" placeholder="Default Input" name="author"
                                                   class="form-control"/>
                                        </div>
                                    </div><!-- form-group -->

                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Category</label>
                                        <div class="col-sm-8">
                                            <input type="text" placeholder="Default Input" name="category"
                                                   class="form-control"/>
                                        </div>
                                    </div><!-- form-group -->

                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Content</label>
                                        <div class="col-sm-8">
                                            <input type="text" placeholder="Default Input" name="content"
                                                   class="form-control"/>
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
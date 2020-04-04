<div class="wrap-fluid">
    <div class="container-fluid paper-wrap bevel tlbr">
        @include('admin.section.page-title.index')
        @include('admin.section.breadcrumb.index')
        <div class="content-wrap">
            <div class="row">
                <div class="row">


                    <div class="col-sm-12">
                        <!-- BLANK PAGE-->

                        <div style="margin:-20px 15px;" class="nest" id="Blank_PageClose">
                            <div class="title-alt">
                                <h6>
                                    Edit Profile</h6>
                                <div class="titleClose">
                                    <a class="gone" href="#Blank_PageClose">
                                        <span class="entypo-cancel"></span>
                                    </a>
                                </div>
                                <div class="titleToggle">
                                    <a class="nav-toggle-alt" href="#Blank_Page_Content">
                                        <span class="entypo-up-open"></span>
                                    </a>
                                </div>

                            </div>

                            <div class="body-nest" id="Blank_Page_Content">


                                <div class="row">


                                    <!-- left column -->
                                    <div class="col-md-3">
                                        <div class="text-center">
                                            <img src="http://placehold.it/150" class="avatar img-circle" alt="avatar">
                                            <h6>Upload a different photo...</h6>

                                            <div class="input-group">
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-primary btn-file">
                                                            Browse
                                                            <input type="file" multiple="">
                                                        </span>
                                                    </span>
                                                <input type="text" class="form-control">
                                            </div>

                                        </div>
                                    </div>

                                    <!-- edit form column -->
                                    <div class="col-md-9 personal-info">
                                        <div class="alert alert-info alert-dismissable">
                                            <a class="panel-close close" data-dismiss="alert">×</a>
                                            <i class="fa fa-coffee"></i>
                                            This is an
                                            <strong>.alert</strong>. Use this to show important messages to the user.
                                        </div>
                                        <h3>Personal info</h3>

                                        <form class="form-horizontal" role="form">
                                            <div class="form-group">
                                                <label class="col-lg-3 control-label">First name:</label>
                                                <div class="col-lg-8">
                                                    <input class="form-control" value="Jane" type="text">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-3 control-label">Last name:</label>
                                                <div class="col-lg-8">
                                                    <input class="form-control" value="Bishop" type="text">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-3 control-label">Company:</label>
                                                <div class="col-lg-8">
                                                    <input class="form-control" value="" type="text">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-3 control-label">Email:</label>
                                                <div class="col-lg-8">
                                                    <input class="form-control" value="janesemail@gmail.com" type="text">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-3 control-label">Time Zone:</label>
                                                <div class="col-lg-8">
                                                    <div class="ui-select">
                                                        <select id="user_time_zone" class="form-control">
                                                            <option value="Hawaii">(GMT-10:00) Hawaii</option>
                                                            <option value="Alaska">(GMT-09:00) Alaska</option>
                                                            <option value="Pacific Time (US &amp; Canada)">(GMT-08:00) Pacific Time (US &amp; Canada)</option>
                                                            <option value="Arizona">(GMT-07:00) Arizona</option>
                                                            <option value="Mountain Time (US &amp; Canada)">(GMT-07:00) Mountain Time (US &amp; Canada)</option>
                                                            <option value="Central Time (US &amp; Canada)" selected="selected">(GMT-06:00) Central Time (US &amp; Canada)</option>
                                                            <option value="Eastern Time (US &amp; Canada)">(GMT-05:00) Eastern Time (US &amp; Canada)</option>
                                                            <option value="Indiana (East)">(GMT-05:00) Indiana (East)</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Username:</label>
                                                <div class="col-md-8">
                                                    <input class="form-control" value="janeuser" type="text">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Password:</label>
                                                <div class="col-md-8">
                                                    <input class="form-control" value="11111122333" type="password">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Confirm password:</label>
                                                <div class="col-md-8">
                                                    <input class="form-control" value="11111122333" type="password">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label"></label>
                                                <div class="col-md-8">
                                                    <input class="btn btn-primary" value="Save Changes" type="button">
                                                    <span></span>
                                                    <input class="btn btn-default" value="Cancel" type="reset">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END OF BLANK PAGE -->

                </div>
            </div>
        </div>
    </div>
</div>


@extends('admin.app')
@section('title','Меню')


@section('content')
    <div class="wrap-fluid">
        <div class="container-fluid paper-wrap bevel tlbr">
            <!-- CONTENT -->
            <!--TITLE -->
            <div class="row">
                <div id="paper-top">
                    <div class="col-sm-3">
                        <h2 class="tittle-content-header">
                            <span class="entypo-layout"></span>
                            <span>Меню</span>
                        </h2>
                    </div>
                </div>
            </div>
            <!--/ TITLE -->

            <!-- BREADCRUMB -->
            <ul id="breadcrumb">
                <li><span class="entypo-home"></span></li>
                <li><i class="fa fa-lg fa-angle-right"></i></li>
                <li><a href="#" title="Sample page 1">Меню</a></li>
                <li class="pull-right">
                    <div class="input-group input-widget">
                        <input style="border-radius:15px" type="text" placeholder="Search..." class="form-control">
                    </div>
                </li>
            </ul>
            <!-- END OF BREADCRUMB -->

            <div class="content-wrap">
                <div class="row">

                    <div class="col-sm-6">

                        <div class="nest" id="treeClose">
                            <div class="title-alt">
                                <h6>Sample 1 - default</h6>
                                <div class="titleClose">
                                    <a class="gone" href="#treeClose">
                                        <span class="entypo-cancel"></span>
                                    </a>
                                </div>
                                <div class="titleToggle">
                                    <a class="nav-toggle-alt" href="#tree">
                                        <span class="entypo-up-open"></span>
                                    </a>
                                </div>

                            </div>

                            <div class="body-nest" id="tree">

                                <div class="row">


                                    <div class="col-sm-6">


                                        <ul id="browser" class="filetree">
                                            <li>
                                                <img alt="" src="assets/js/tree/images/folder.gif" />123
                                                <ul>
                                                    <li>blabla
                                                        <img alt="" src="assets/js/tree/images/file.gif" />
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <img alt="" src="assets/js/tree/images/folder.gif" />
                                                <ul>
                                                    <li>
                                                        <img alt="" src="assets/js/tree/images/folder.gif" />
                                                        <ul id="folder21">
                                                            <li>
                                                                <img alt="" src="assets/js/tree/images/file.gif" />more text</li>
                                                            <li>and here, too
                                                                <img alt="" src="assets/js/tree/images/file.gif" />
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <img alt="" src="assets/js/tree/images/file.gif" />
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="closed">this is closed!
                                                <img alt="" src="assets/js/tree/images/folder.gif" />
                                                <ul>
                                                    <li>
                                                        <img alt="" src="assets/js/tree/images/file.gif" />
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <img alt="" src="assets/js/tree/images/file.gif" />
                                            </li>
                                        </ul>

                                    </div>


                                    <div class="col-sm-6">

                                        <ul id="browser2" class="treeview">
                                            <li>
                                                <span class="entypo-home"></span>Home
                                                <ul>
                                                    <li>blabla
                                                        <img alt="" src="assets/js/tree/images/file.gif" />
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <span class="entypo-folder"></span>
                                                <ul>
                                                    <li>
                                                        <span class="entypo-folder"></span>
                                                        <ul id="folder22">
                                                            <li>
                                                                <span class="entypo-newspaper"></span>more text</li>
                                                            <li>
                                                                <span class="entypo-newspaper"></span>and here, too</li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <span class="entypo-newspaper"></span>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="closed">this is closed!
                                                <span class="entypo-folder"></span>
                                                <ul>
                                                    <li>
                                                        <img alt="" src="assets/js/tree/images/file.gif" />
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <span class="entypo-trash"></span>Delete</li>
                                        </ul>

                                    </div>
                                </div>




                            </div>

                        </div>


                    </div>

                </div>
            </div>



            <!-- FOOTER -->
            <div class="footer-space"></div>
            <div id="footer">
                <div class="devider-footer-left"></div>
                <div class="time">
                    <p id="spanDate"></p>
                    <p id="clock"></p>
                </div>
                <div class="copyright">Make with Love
                    <span class="entypo-heart"></span>2014 <a href="http://gamatechno.com">Thesmile</a> All Rights Reserved</div>
                <div class="devider-footer"></div>

            </div>
            <!-- / END OF FOOTER -->

        </div>
    </div>
@endsection

@section('style')
    <link rel="stylesheet" href="{{ asset('admin/js/button/ladda/ladda.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/js/footable/css/footable-demos.css') }}">
@endsection

@section('script_after')
    <script type="text/javascript" src="{{ asset('admin/js/tree/treetable/javascripts/src/jquery.treetable.js') }}"></script>
    <script>
        $("#example-advanced").treetable({
            expandable: true
        });
        // Highlight selected row
        $("#example-advanced tbody").on("mousedown", "tr", function() {
            $(".selected").not(this).removeClass("selected");
            $(this).toggleClass("selected");
        });

        // Drag & Drop Example Code
        $("#example-advanced .file, #example-advanced .folder").draggable({
            helper: "clone",
            opacity: .75,
            refreshPositions: true, // Performance?
            revert: "invalid",
            revertDuration: 300,
            expandable: true,
            scroll: true
        });

        $("#example-advanced .folder").each(function() {
            $(this).parents("#example-advanced tr").droppable({
                accept: ".file, .folder",
                drop: function(e, ui) {
                    var droppedEl = ui.draggable.parents("tr");
                    $("#example-advanced").treetable("move", droppedEl.data("ttId"), $(this).data("ttId"));
                },
                hoverClass: "accept",
                over: function(e, ui) {
                    var droppedEl = ui.draggable.parents("tr");
                    if (this != droppedEl[0] && !$(this).is(".expanded")) {
                        $("#example-advanced").treetable("expandNode", $(this).data("ttId"));
                    }
                }
            });
        });
    </script>
@endsection
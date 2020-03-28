@extends('admin.app')
@section('title','Пользователи')

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
                            <span>Table Static
                            </span>
                        </h2>
                    </div>
                </div>
            </div>
            <!--/ TITLE -->

            <!-- BREADCRUMB -->
            <ul id="breadcrumb">
                <li>
                    <span class="entypo-home"></span>
                </li>
                <li><i class="fa fa-lg fa-angle-right"></i>
                </li>
                <li><a href="#" title="Sample page 1">Home</a>
                </li>
                <li><i class="fa fa-lg fa-angle-right"></i>
                </li>
                <li><a href="#" title="Sample page 1">Blog List</a>
                </li>
                <li class="pull-right">
                    <div class="input-group input-widget">
                        <input style="border-radius:15px" type="text" placeholder="Search..." class="form-control">
                    </div>
                </li>
            </ul>

            <!-- END OF BREADCRUMB -->


            <div class="content-wrap">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="nest" id="tableStaticClose">
                            <div class="title-alt">
                                <h6>Basic Responsive Tables</h6>
                                <div class="titleClose">
                                    <a class="gone" href="#tableStaticClose">
                                        <span class="entypo-cancel"></span>
                                    </a>
                                </div>
                                <div class="titleToggle">
                                    <a class="nav-toggle-alt" href="#tableStatic">
                                        <span class="entypo-up-open"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="body-nest" id="tableStatic">

                                <section id="flip-scroll">
                                    <table class="table table-bordered table-striped cf">
                                        <thead class="cf">
                                        <tr>
                                            <th>Code</th>
                                            <th>Company</th>
                                            <th class="numeric">Price</th>
                                            <th class="numeric">Change</th>
                                            <th class="numeric">Change %</th>
                                            <th class="numeric">Open</th>
                                            <th class="numeric">High</th>
                                            <th class="numeric">Low</th>
                                            <th class="numeric">Volume</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @forelse($users as $user)
                                            <tr>
                                                <td>AAC</td>
                                                <td>AUSTRALIAN AGRICULTURAL COMPANY LIMITED.</td>
                                                <td class="numeric">$1.38</td>
                                                <td class="numeric">-0.01</td>
                                                <td class="numeric">-0.36%</td>
                                                <td class="numeric">$1.39</td>
                                                <td class="numeric">$1.39</td>
                                                <td class="numeric">$1.38</td>
                                                <td class="numeric">9,395</td>
                                            </tr>
                                            @empty
                                            @endforelse

                                        </tbody>
                                    </table>
                                </section>

                            </div>

                        </div>


                    </div>

                </div>
            </div>

            <!-- /END OF CONTENT -->

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
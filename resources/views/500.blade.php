@extends('admin.app',['error'=>false])
@section('title','500')
@section('content')
    <div class="logo-error">
        <h1>Apricot
            <span>v1.0</span>
        </h1>
    </div>

    <!-- Main content -->
    <section class="page-error">

        <div class="error-page">
            <h2 class="headline text-info">500</h2>
            <div class="error-content">
                <h3><i class="fa fa-warning text-yellow"></i> Oops! Page not found.</h3>
                <p>
                    We could not find the page you were looking for. Meanwhile, you may <a class="error-link" href='{{ route('front.main') }}'>return to dashboard</a> or try using the search form.
                </p>
                <form class='search-form'>
                    <input type="text" name="search" class='form-control' placeholder="Search" />
                </form>
            </div>
            <!-- /.error-content -->
        </div>
        <!-- /.error-page -->

    </section>
@stop
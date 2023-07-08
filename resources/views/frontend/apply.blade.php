@extends('layouts.frontend')

@section('title', 'Apply')

@section('content')
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/contact-header.jpg');">
            <div class="container position-relative d-flex flex-column align-items-center">
                <h2>Apply</h2>
                <ol>
                    <li><a href="{{ route('pages.index') }}">Home</a></li>
                    <li>Apply</li>
                </ol>
            </div>
        </div><!-- End Breadcrumbs -->
    </main>
@endsection

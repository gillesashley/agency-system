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

    <section class="bg-gray-50 dark:bg-gray-900">
        <div class="container py-8">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <h1 class="text-center mb-4">Apply for a Job</h1>
                            <form action="{{ route('apply.store') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="title" class="form-label">Title</label>
                                    <select name="title" id="title" class="form-control" required>
                                        <option value="Mr.">Mr.</option>
                                        <option value="Mrs.">Mrs.</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="firstname" class="form-label">First Name</label>
                                    <input type="text" name="firstname" id="firstname" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label for="middlename" class="form-label">Middle Name</label>
                                    <input type="text" name="middlename" id="middlename" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="surname" class="form-label">Surname</label>
                                    <input type="text" name="surname" id="surname" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" name="email" id="email" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label for="phonenumber" class="form-label">Phone Number</label>
                                    <input type="text" name="phonenumber" id="phonenumber" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label for="position" class="form-label">Position</label>
                                    <select name="position" id="position" class="form-select" required>
                                        <option value="">Select Position</option>
                                        <option value="Care Assistant">Care Assistant</option>
                                        <option value="Senior healthcare assistant">Senior healthcare assistant</option>
                                        <option value="Support worker">Support worker</option>
                                        <!-- Add more job positions here -->
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="address" class="form-label">Address</label>
                                    <input type="text" name="address" id="address" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label for="postcode" class="form-label">Postcode</label>
                                    <input type="text" name="postcode" id="postcode" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label for="criminal_conviction" class="form-label">Criminal Conviction</label>
                                    <input type="text" name="criminal_conviction" id="criminal_conviction"
                                        class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label for="criminal_offence" class="form-label">Criminal Offence</label>
                                    <input type="text" name="criminal_offence" id="criminal_offence" class="form-control"
                                        required>
                                </div>
                                <div class="mb-3">
                                    <label for="employment_history" class="form-label">Employment History</label>
                                    <input type="text" name="employment_history" id="employment_history"
                                        class="form-control" required>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

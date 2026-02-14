@extends('components.profile.app')
@section('content')

    <section id="careers">
        <div class="container mil-p-120-30">
            <div class="row justify-content-between align-items-start">
                <div class="col-lg-12 col-xl-12">

                    <div class="mil-mb-90">
                        <h2 class="mil-up mil-mb-60">Careers – <span class="mil-thin">MARAVILLA</span></h2>

                        <p class="mil-up mil-mb-30">
                            Interested in joining our team? Fill out the form below and upload your CV.
                        </p>

                        @if(session('success'))
                            <div class="alert alert-success mil-mb-30">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if($errors->any())
                            <div class="alert alert-danger mil-mb-30">
                                <ul class="mb-0">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form class="mil-up" method="POST" action="{{ route('careers.apply') }}"
                              enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-md-6 mil-mb-15">
                                    <label class="form-label">Full Name *</label>
                                    <input type="text" name="full_name" class="form-control"
                                           value="{{ old('full_name') }}" required>
                                </div>

                                <div class="col-md-6 mil-mb-15">
                                    <label class="form-label">Email *</label>
                                    <input type="email" name="email" class="form-control"
                                           value="{{ old('email') }}" required>
                                </div>

                                <div class="col-md-6 mil-mb-15">
                                    <label class="form-label">Phone</label>
                                    <input type="text" name="phone" class="form-control"
                                           value="{{ old('phone') }}">
                                </div>

                                <div class="col-md-6 mil-mb-15">
                                    <label class="form-label">Position</label>
                                    <input type="text" name="position" class="form-control"
                                           value="{{ old('position') }}" placeholder="e.g. Accountant, Engineer...">
                                </div>

                                <div class="col-md-6 mil-mb-15">
                                    <label class="form-label">Location</label>
                                    <input type="text" name="location" class="form-control"
                                           value="{{ old('location') }}" placeholder="City / Country">
                                </div>

                                <div class="col-md-6 mil-mb-15">
                                    <label class="form-label">Upload CV *</label>
                                    <input type="file" name="cv" class="form-control" required
                                           accept=".pdf,.doc,.docx">
                                    <small class="text-muted">Allowed: PDF, DOC, DOCX (max 5MB)</small>
                                </div>

                                <div class="col-12 mil-mb-15">
                                    <label class="form-label">Message</label>
                                    <textarea name="message" class="form-control" rows="5"
                                              placeholder="Tell us briefly about yourself...">{{ old('message') }}</textarea>
                                </div>

                                <div class="col-12 mil-mb-15">
                                    <button type="submit" class="mil-button mil-arrow-place">
                                        Submit Application
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </section>

    @include('website.footer')
@endsection

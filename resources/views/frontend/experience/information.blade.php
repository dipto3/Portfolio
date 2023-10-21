@extends('frontend.master')
@section('content')

<div class="container px-5 my-5">
    <div class="text-center mb-5">
        <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Resume</span></h1>
    </div>
    <div class="row gx-5 justify-content-center">
        <div class="col-lg-11 col-xl-9 col-xxl-8">
            <!-- Experience Section-->
            <section>
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h2 class="text-primary fw-bolder mb-0">Experience</h2>

                </div>
                <!-- Experience Card 1-->
                @foreach ($experiences as $experience)
                <div class="card shadow border-0 rounded-4 mb-5">
                    <div class="card-body p-5">
                        <div class="row align-items-center gx-5">
                            <div class="col text-center text-lg-start mb-6 mb-lg-0">
                                <div class="bg-light p-6 rounded-4">
                                    <div class="text-primary fw-bolder mb-2">{{$experience->duration}}</div>
                                    <div class="small fw-bolder">{{$experience->designation}}</div>
                                    <div class="small text-muted">{{$experience->company}}</div>
                                    <div class="small text-muted">{{$experience->location}}</div>
                                </div>
                            </div>
                            <div class="col-lg-8"><div>{{$experience->responsiblity}}</div></div>
                        </div>
                    </div>
                </div>
                <!-- Experience Card 2-->
                @endforeach
            </section>

        </div>
    </div>
</div>
@endsection

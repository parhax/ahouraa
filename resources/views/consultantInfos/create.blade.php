@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <h2>Create a new consultant profile</h2>
                            <div class="ml-auto">
                                <a href="{{route('consultantInfos.index')}}" class="btn btn-outline-secondary">
                                    Back to consultants info list
                                </a>

                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <form action="{{route('consultantInfos.store')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="ConsultantInfo-first_name">Consultant First Name:</label>
                                <input type="text" name="first_name" id="ConsultantInfo-first_name" class="form-control {{ $errors->has('first_name') ? 'is-invalid' : '' }}">
                                @if ($errors->has('first_name'))
                                    <div class="invalid-feedback">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="ConsultantInfo-last_name">Consultant Last Name:</label>
                                <input type="text" name="last_name"  id="ConsultantInfo-last_name" class="form-control {{ $errors->has('last_name') ? 'is-invalid' : '' }}">
                                @if ($errors->has('last_name'))
                                    <div class="invalid-feedback">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="ConsultantInfo-email">Consultant Email:</label>
                                <input type="text" name="email" id="ConsultantInfo-email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}">
                                @if ($errors->has('email'))
                                    <div class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="avatar">{{ __('Avatar (optional)') }}</label>
                                <input type="file"  name="avatar" id="avatar" class="form-control {{ $errors->has('avatar') ? 'is-invalid' : '' }}">
                                @if ($errors->has('avatar'))
                                    <div class="invalid-feedback">
                                        <strong>{{ $errors->first('avatar') }}</strong>
                                    </div>
                                @endif
                            </div>


                            <div class="form-group">
                                <label for="ConsultantInfo-about">About Consultant:</label>
                                <textarea name="about_me" id="ConsultantInfo-about" rows="10" class="form-control {{ $errors->has('about_me') ? 'is-invalid' : '' }}"></textarea>
                                @if ($errors->has('about_me'))
                                    <div class="invalid-feedback">
                                        <strong>{{ $errors->first('about_me') }}</strong>
                                    </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-outline-primary btn-lg"> Register this Consultant</button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

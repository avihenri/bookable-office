@extends('layouts.master')
@section('title', 'Profile | Bookable Office')
@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          @include('includes.session-errors')
          @include('includes.session-success')
      </div>
      <div class="col-md-4">
        <div class="card card-profile">
          <div class="card-avatar">
            <a href="#" id="add-image" data-toggle="modal" data-target="#add-avatar-modal">
              <img class="img" src="{{ !$user['imagePath'] ? '/img/plusIcon.png' : $user['imagePath'] }}" width="150" />
            </a>
          </div>
          <div class="card-body">
            <h6 class="card-category">{{ $user['job_desc'] ?? ''  }}</h6>
            <h4 class="card-title">{{ $user['first_name'] }}  {{ $user['last_name'] }}</h4>
            <p class="card-description">
              {{ $user['bio'] ?? 'Add some info to your bio..'  }}
            </p>
          </div>
        </div>
      </div>
        <div class="col-md-8">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">Edit Profile</h4>
              <p class="card-category">Complete your profile</p>
            </div>
            <div class="card-body">
              <form method="POST" action="/profile/{{ $user['id'] }}">
                @csrf
                @method('put')

                <div class="row">
                  <div class="col-md-12 mb-3">
                    <div class="form-group">
                      <label class="bmd-label-floating">Organisation</label>
                    <input type="text" class="form-control" value="{{ $user['organisation'] ?? ''  }}" disabled>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">First Name</label>
                      <input type="text" class="form-control" name="first_name" value="{{ $user['first_name'] ?? ''  }}">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Last Name</label>
                      <input type="text" class="form-control" name="last_name" value="{{ $user['last_name'] ?? ''  }}">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Username</label>
                      <input type="text" class="form-control" name="username" value="{{ $user['username'] ?? ''  }}">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Email address</label>
                      <input type="email" class="form-control" name="email" value="{{ $user['email'] ?? ''  }}">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="bmd-label-floating">Job Description</label>
                      <input type="text" class="form-control" name="job_desc" value="{{ $user['job_desc'] ?? ''  }}">
                    </div>
                  </div>
                </div>
                {{-- <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="bmd-label-floating">Address</label>
                      <input type="text" class="form-control" {{ $user['address'] ?? ''  }}>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label class="bmd-label-floating">City</label>
                      <input type="text" class="form-control" {{ $user['city'] ?? ''  }}>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label class="bmd-label-floating">Country</label>
                      <input type="text" class="form-control" {{ $user['country'] ?? ''  }}>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label class="bmd-label-floating">Postal Code</label>
                      <input type="text" class="form-control" {{ $user['postcode'] ?? ''  }}>
                    </div>
                  </div>
                </div> --}}
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>About Me</label>
                      <div class="form-group">
                        <label class="bmd-label-floating"></label>
                        <textarea class="form-control" rows="5" name="bio">{{ $user['bio'] ?? 'Add a bio about yourself'  }}</textarea>
                      </div>
                    </div>
                  </div>
                </div>
                @if (Route::has('password.request'))
                <div class="col-md-12">
                  <a class="btn btn-primary" id="reset-password" href="javascript:void(0)">
                    {{ __('Reset your password') }}
                  </a>
                  <button type="submit" class="btn btn-info pull-right font-600 font-size-1rem">Update</button>
                </div>
              @endif

                <div class="clearfix"></div>
              </form>
            </div>
            <div class="card-footer row">
              <div id="password-panel" class="col-md-12" style="display:none;">
                  <div class="">
                    <form method="POST" action="{{ route('profile.password-reset', ['id' => $user['id']]) }}" id="password-reset-form">
                      @csrf

                          <!-- Password -->
                          <div class="form-group row">
                              <label for="password" class="col-md-4 col-form-label">{{ __('Password*') }}</label>
                              <div class="col-md-12">
                                  <input id="password" type="password" class="form-control mt-2 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                  @error('password')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>

                          <!-- Confirm Password -->
                          <div class="form-group row">
                              <label for="password-confirm" class="col-md-4 col-form-label">{{ __('Confirm Password*') }}</label>
                              <div class="col-md-12">
                                  <input id="password-confirm" type="password" class="form-control mt-2" name="password_confirmation" required autocomplete="new-password">                            </div>
                          </div>

                          <div class="form-group row mb-0">
                              <div class="col-md-12 text-center">
                                  <button id="reset-password-button" class="btn btn-primary">
                                      {{ __('Reset') }}
                                  </button>
                              </div>
                          </div>
                    </form>
                  </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- UPLOAD NEW PROFILE IMAGE MODAL --}}
  <div class="modal" id="add-avatar-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <form method="POST" action="/profile/{{ $user['id'] }}/upload-image" id="upload-image-form" enctype="multipart/form-data">
          @csrf
          <div class="modal-header">
            <h5 class="modal-title">Upload New Profile Picture</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              <input type="file" id="myFile" name="image_path">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary font-600 font-size-1rem" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-info font-600 font-size-1rem white" id="upload-image">Add</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            // submit upload image
            $('#upload-image').on('click', () => {
                $('#upload-image-form').submit();
            });

            // reset password panel
            $('#reset-password').on('click', function() {
                $('#password-panel').toggle();
            });

            // CHECK PASSWORDS ARE THE SAME FRONT-END CHECK
            let password = document.getElementById("password");
            let confirmPassword = document.getElementById("password-confirm");

            function validatePassword() {
              if (password.value !== confirmPassword.value) {
                confirmPassword.setCustomValidity("Passwords Don't Match");
                return false;
              } else {
                confirmPassword.setCustomValidity('');
                return true;
              }
            }

            $('#reset-password-button').on('click', () => {
              // TODO: add extra validation
              let passwordsValid = validatePassword();
              if (passwordsValid) {
                $('#password-reset-form').submit();
              }
            });


        });
    </script>
@endsection

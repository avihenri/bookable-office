@extends('layouts.master')
@section('title', 'Home | Office Bookings')
@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">Edit Profile</h4>
              <p class="card-category">Complete your profile</p>
            </div>
            <div class="card-body">
              <form>
                <div class="row">
                  <div class="col-md-5">
                    <div class="form-group">
                      <label class="bmd-label-floating">Company (disabled)</label>
                    <input type="text" class="form-control" value="{{ $user['company'] ?? ''  }}" disabled>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label class="bmd-label-floating">Username</label>
                      <input type="text" class="form-control" value="{{ $user['username'] ?? ''  }}">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label class="bmd-label-floating">Email address</label>
                      <input type="email" class="form-control" value="{{ $user['email'] ?? ''  }}">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">First Name</label>
                      <input type="text" class="form-control" value="{{ $user['name'] ?? ''  }}">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Last Name</label>
                      <input type="text" class="form-control" value="{{ $user['lastName'] ?? ''  }}">
                    </div>
                  </div>
                </div>
                <div class="row">
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
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>About Me</label>
                      <div class="form-group">
                        <label class="bmd-label-floating"></label>
                        <textarea class="form-control" rows="5">{{ $user['bio'] ?? 'Add a bio about yourself'  }}</textarea>
                      </div>
                    </div>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary pull-right">Update Profile</button>
                <div class="clearfix"></div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-profile">
            <div class="card-avatar">
              <a href="#pablo">
                @if(!$user['imgPath'])
                    <img src="/img/plusIcon.png" width="150" >
                @else 
                <img class="img" src="{{ $user['imgPath']   }}" />
                @endif
              </a>
            </div>
            <div class="card-body">
              <h6 class="card-category">{{ $user['job_desc'] ?? ''  }}</h6>
              <h4 class="card-title">{{ $user['name'] }}  {{ $user['lastName'] }}</h4>
              <p class="card-description">
                {{ $user['bio'] ?? 'Add some info to your bio..'  }}
              </p>
              {{-- <a href="#pablo" class="btn btn-primary btn-round">Follow</a> --}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
@extends('layouts.app')

@section('title','Manage Account')

@section('content')

<div class="container">
<div class="container my-5">

	<style>
    .border-top {
      border-top: 5px solid #33b5e5 !important;
      border-top-left-radius: .25rem!important;
    	border-top-right-radius: .25rem!important;
    }
  </style>

  <!--Section: Content-->
  <section class="text-center dark-grey-text mb-5">

    <div class="card">
      <div class="card-body rounded-top border-top p-5">
        <!-- Section heading -->
        <h3 class="font-weight-bold my-4">Manage Account</h3>
        <hr width="10%"/>
        <!-- Section description -->
        <p class="font-weight-light mx-auto mb-4 pb-2 grey-text">Do whatever you want,<br> your account your rules.</p>
        <form class="mb-4 mx-md-5" method="post" action="{{ route('user.update') }}">
          @csrf

          <div class="row">
            <div class="col-md-6 mb-4">
            
            <!-- Email -->
            
            <div class="md-form md-outline form-md">
                <input disabled type="text" value="{{ Auth::user()->email }}" name="email" id="form1" class="form-control form-control-lg grey-text">
                <label for="form1">Email</label>
                <small class="grey-text">You cannot change your email address, because it is a primary key</small>
            </div>
           
            </div>
            <div class="col-md-6 mb-4">

              <!-- Email -->
              <div class="md-form md-outline form-md">
                <input type="password" value="{{ Auth::user()->password }}" disabled name="password" id="form1" class="form-control grey-text form-control-lg">
                <label for="form1">Password</label>
                <small class="grey-text">You cannot change your password, use forgot password feature laravel</small>
              </div>

            </div>
          </div>

          <div class="row">
            <div class="col-md-12 mb-4">

              <!-- Address -->
              <div class="md-form md-outline form-md">
                <input required type="text" name="address" id="form1" class="form-control form-control-lg">
                <label for="form1">Address</label>
            </div>

            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
                <div class="md-form md-outline form-md">
                    <input required type="text" name="firstname" id="form1" class="form-control form-control-lg">
                    <label for="form1">First Name</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="md-form md-outline form-md">
                    <input required type="text" name="lastname" id="form1" class="form-control form-control-lg">
                    <label for="form1">Last Name</label>
                </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
                <div class="md-form md-outline form-md">
                    <input required type="date" name="birthdate" id="form1" class="form-control form-control-lg">
                    <label for="form1">Birthdate</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="md-form md-outline form-md">
                    <select name="gender" class="browser-default custom-select form-control-lg">
                        <option selected>Select gender below</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="lgbt">LGBT</option>
                    </select>
                </div>
            </div>
          </div>

          <div class="row">
            <div style="margin-left:15%" class="col-md-6">
            
            <button type="submit" class="btn btn-success btn-md">
                Update account
                  </button>
              </div>

            <div style="margin-left:-30%" class="col-md-6">
                <div class="text-center">
                    <button type="button" data-toggle="modal" data-target="#basicExampleModal" class="btn btn-danger btn-md">
                        Delete Account
                    </button>
              </div>

          </div>


          @if(session('success'))
            <div class="container text-center mt-2">
              <div class="alert alert-success" role="alert">
                    {{ session('success') }}
              </div>
            </div>
          @endif

          @if(session('failed'))
          <div class="container text-center mt-2">
            <div class="alert alert-danger" role="alert">
                  {{ session('failed') }}
            </div>
          </div>
            @endif

            

          </div>

        </form>

            <!-- Modal -->
            <div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"><strong>Account Termination</strong></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                Deleting an account means this account will be erased from the database and everything in it will be deleted. Are you sure you want to do this?
                </div>
                <div class="modal-footer">
                <form action="{{ route('user.delete') }}">
                  <button type="submit" class="btn btn-danger">Yes im sure</button>
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </form>
                </div>
              </div>
            </div>
          </div>
          <!-- End Modal -->
        
      </div>
    </div>

  </section>
  <!--Section: Content-->

</div>

</div>
@endsection('content')
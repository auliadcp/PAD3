@extends('template.main')

@section('content')
    <h6>Ubah Username dan Password</h6>
    <hr class="my-4">
    <div class="row mb-4">
        <div class="col-md-6">
            <div class="form-group">
                <label for="inputUsername">Username</label>
                <input type="text" class="form-control" placeholder="Admin" id="inputUsername">
            </div>
            <div class="form-group">
                <label for="inputPassword4">Old Password</label>
                <input type="password" class="form-control" id="inputPassword5">
            </div>
            <div class="form-group">
                <label for="inputPassword5">New Password</label>
                <input type="password" class="form-control" id="inputPassword5">
            </div>
            <div class="form-group">
                <label for="inputPassword6">Confirm Password</label>
                <input type="password" class="form-control" id="inputPassword6">
            </div>
        </div>
        <div class="col-md-6">
            <p class="mb-2">Password requirements</p>
            <p class="small text-muted mb-2"> To create a new password, you have to meet all of the following requirements:
            </p>
            <ul class="small text-muted pl-4 mb-0">
                <li> Minimum 8 character </li>
                <li>At least one special character</li>
                <li>At least one number</li>
                <li>Can’t be the same as a previous password </li>
            </ul>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Save Change</button>
    </form>
    </div> <!-- /.card-body -->
    </div> <!-- /.col-12 -->
    </div> <!-- .row -->
    </div> <!-- .container-fluid -->
@endsection

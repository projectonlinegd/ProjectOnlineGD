@extends('layouts.master')

@section('content')
<script src="/js/newhome.js" type="text/javascript"></script>

<div class="container">
    <h2>Log In</h2>
    <form method="POST" action="/validateLogin"  ng-app="myapp" name="myform" novalidate>
        {{ csrf_field() }}
        <!--    <label class="sr-only" for="inlineFormInput">Phone Number:</label>
            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                <span class="input-group-addon" id="basic-addon1">+880</span>
                <input type="text" pattern="[1-9]{1}[0-9]{9}$" class="form-control col-md-2" placeholder="" aria-describedby="basic-addon1">
            </div>
            <label class="sr-only" for="inlineFormInputGroup">Username</label>
            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="*******">
            </div>
        
            <div class="form-check mb-2 mr-sm-2 mb-sm-0">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox"> Remember me
                </label>
            </div>
        
            <button type="submit" class="btn btn-primary">Submit</button>-->
        <div class="form-group">
            <label for="mobileNumber">Mobile Number:</label>
            <div ng-controller="Ctrl">
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">+880</span>
                    <input is-number ng-model="wks.number" type="text" class="form-control" name="mobileNumber" id="mobileNumber">
                </div>
                <span ng-show="!wks.validity">Value is invalid</span>

            </div>
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" name="password" class="form-control" id="pwd">
        </div>
        <div class="checkbox">
            <label><input type="checkbox" name="rememberMe"> Remember me</label>
        </div>
        <button type="submit" class="btn btn-success">Login</button>

    </form>
</div>
@endsection
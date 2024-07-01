@extends('access.index')
@section('content')

<div class="wrapper">
    <div class="logo">
        <a href="/">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTjJ-s7oHqJkmJ3yAwVYO8ohr5CXu7uHo0LiauOp5GjMHQXmvbSgPOVIwy2B2TCAm90Uoo&usqp=CAU" alt=""> 
        </a>
    </div>
    <div class="text-center mt-4 name">
        LOGIN ADMIN
    </div>
    <form class="p-3 mt-3" action="/api/login">
        <div class="form-field d-flex align-items-center">
            <span class="far fa-user"></span>
            <input type="text" name="email" id="userName" placeholder="Email">
        </div>
        <div class="form-field d-flex align-items-center">
            <span class="fas fa-key"></span>
            <input type="password" name="password" id="pwd" placeholder="Password">
        </div>

        <input type="hidden" name="level" value="1">
        @csrf()
        <button class="btn mt-3">Login</button>
    </form>
    <div class="text-center fs-6" style="display:none">
        <a href="#">Forget password?</a> or <a href="/signup">Sign up</a>
    </div>

</div>

<script>
$(document).ready(function(){


    return false;
})
</script>
@endsection
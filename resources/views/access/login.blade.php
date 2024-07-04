@extends('access.index')
@section('content')

<div class="wrapper">
    <div class="logo">
        <a href="/">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTjJ-s7oHqJkmJ3yAwVYO8ohr5CXu7uHo0LiauOp5GjMHQXmvbSgPOVIwy2B2TCAm90Uoo&usqp=CAU" alt=""> 
        </a>
    </div>
    <div class="text-center mt-4 name">
        LOGIN
    </div>
    <form class="p-3 mt-3" action="/api/login" id="form-submit" method="POST">
        <div class="box-field mg-b20"> 

            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="email" id="userName" placeholder="Email" class="form-control">
            </div>

        </div>

        <div class="box-field mg-b20">
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="password" id="pwd" placeholder="Password" class="form-control">
            </div>
        </div>

        <input type="hidden" name="level" value="2">
        @csrf()
        <button class="btn mt-3 spin-right is-loading " role="off" type="submit">Login</button>
    </form>
    <div class="text-center fs-6">
        <a href="#">Forget password?</a> or <a href="/signup">Sign up</a>
    </div>

</div>

<script>
$(document).ready(function(){


    $("#form-submit").submit(function(){
        var $form = $(this),
        $button = $form.find("button[type='submit']");

        if($button.attr("role") === "off"){
            $button.attr("role", "on");
        }

        $form.find(".field-error").remove();

        var $t = ajaxFormRequest($form);
        $t.success(function(n){
            console.log(n);
            location.href = n.data.redirect;
            
        });
        $t.error(function(n){
            
            var $data = n.responseJSON;

            console.log($data);
            if(n.status === 401){

                $form.find("*[name='"+$data.error.field+"']").parents(".box-field").append("<span class='field-error'>"+$data.error.message+"</span>");

                $button.attr("role", "off");
                $form.find("*[name='"+$data.error.field+"']").focus();
                return false;
            }

            alert($data.message);
            $button.attr("role", "off");
            return false;
        });
    })


    return false;
})
</script>
@endsection
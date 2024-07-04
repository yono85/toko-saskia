@extends('access.index')
@section('content')
<style>

</style>
<div class="wrapper">
        <div class="logo">
            <a href="/">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTjJ-s7oHqJkmJ3yAwVYO8ohr5CXu7uHo0LiauOp5GjMHQXmvbSgPOVIwy2B2TCAm90Uoo&usqp=CAU" alt="">
            </a>
        </div>
        <div class="text-center mt-4 name">
            SIGNUP
        </div>
        <form class="p-3 mt-3" id="form-submit" method="POST" action="/api/signup">
            <div class="box-field mg-b20">
                <div class="form-field d-flex align-items-center">
                    <span class="far fa-user"></span>
                    <input type="text" name="name" placeholder="Nama" class="form-control">
                </div>
            </div>


            <div class="box-field mg-b20">
                <div class="form-field d-flex align-items-center">
                    <span class="far fa-user"></span>
                    <input type="text" name="email" placeholder="Email" class="form-control">
                </div>
            </div>

            <div class="box-field mg-b20">

                <div class="form-field d-flex align-items-center">
                    <span class="fas fa-key"></span>
                    <input type="password" name="password" placeholder="Password" class="form-control">
                </div>
            </div>

            <input type="hidden" name="level" value="2">
        <button class="btn mt-3 spin-right is-loading " role="off" type="submit">Login</button>

        </form>
        <div class="text-center fs-6">
            <a href="#">Forget password?</a> or <a href="/login">Login</a>
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
        $form.find(".errors").removeClass("errors");

        var $t = ajaxFormRequest($form);
        $t.success(function(n){
            console.log(n);
            location.href = n.data.redirect;
            // $button.attr("role", "off");
            
        });
        $t.error(function(n){
            
            var $data = n.responseJSON;

            console.log($data);
            if(n.status === 401){
            
                $.each($data.message, function(i, item){
                    console.log(i);
                    $form.find("*[name='"+i+"']").parents(".box-field").append("<span class='field-error'>"+item+"</span>");
                    $form.find("*[name='"+i+"']").addClass("errors");
                })
            //     $form.find("*[name='"+$data.error.field+"']").parents(".box-field").append("<span class='field-error'>"+$data.error.message+"</span>");

                $button.attr("role", "off");
                $form.find(".errors").eq(0).focus();

                return false;
            }

            // alert($data.message);
            $button.attr("role", "off");
            return false;
        });
    })

    return false;
})
</script>
@endsection
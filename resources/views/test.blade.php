@extends('layout')

@section('content')

<div class="wrapper">

    <div class="block animatable bounceIn">bounceIn</div>
    <div class="block animatable bounceInLeft">bounceInLeft</div>
    <div class="block animatable bounceInRight">bounceInRight</div>

    <div class="block animatable fadeIn">fadeIn</div>
    <div class="block animatable fadeInDown">fadeInDown</div>
    <div class="block animatable fadeInUp">fadeInUp</div>

    <div class="block animatable moveUp">moveUp</div>

    <div class="block animatable fadeBgColor">fadeBgColor</div>

    <div class="block animatable bounceIn">bounceIn</div>
    <div class="block animatable bounceInLeft">bounceInLeft</div>
    <div class="block animatable bounceInRight">bounceInRight</div>

    <div class="block animatable fadeIn">fadeIn</div>
    <div class="block animatable fadeInDown">fadeInDown</div>
    <div class="block animatable fadeInUp">fadeInUp</div>

    <div class="block animatable moveUp">moveUp</div>

    <div class="block animatable fadeBgColor">fadeBgColor</div>




    <div class="block animatable bounceIn">bounceIn</div>
    <div class="block animatable bounceInLeft">bounceInLeft</div>
    <div class="block animatable bounceInRight">bounceInRight</div>

    <div class="block animatable fadeIn">fadeIn</div>
    <div class="block animatable fadeInDown">fadeInDown</div>
    <div class="block animatable fadeInUp">fadeInUp</div>

    <div class="block animatable moveUp">moveUp</div>

    <div class="block animatable fadeBgColor">fadeBgColor</div>


  
</div>


<script>
jQuery(function($) {

    // Function which adds the 'animated' class to any '.animatable' in view
    var doAnimations = function() {

        // Calc current offset and get all animatables
        var offset = $(window).scrollTop() + $(window).height(),
            $animatables = $('.animatable');

        // Unbind scroll handler if we have no animatables
        if ($animatables.length == 0) {
            $(window).off('scroll', doAnimations);
        }

        // Check all animatables and animate them if necessary
        $animatables.each(function(i) {
            var $animatable = $(this);
            if (($animatable.offset().top + $animatable.height() - 20) < offset) {
                $animatable.removeClass('animatable').addClass('animated');
            }
        });

    };

    // Hook doAnimations on scroll, and trigger a scroll
    $(window).on('scroll', doAnimations);
    $(window).trigger('scroll');

});
</script>

@endsection
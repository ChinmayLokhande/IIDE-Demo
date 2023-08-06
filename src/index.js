import Person from "./scripts/Person"
import ExampleReactComponent from "./scripts/ExampleReactComponent"
import React from "react"
import ReactDOM from "react-dom"
import $ from "jquery";

// const person1 = new Person("chinmay")
// if (document.querySelector("#render-react-example-here")) {
//   ReactDOM.render(<ExampleReactComponent />, document.querySelector("#render-react-example-here"))
// }

$('.hero-slider').slick({
  prevArrow: '<div class="slider-arrow slider-prev fa fa-angle-left"></div>',
  nextArrow: '<div class="slider-arrow slider-next fa fa-angle-right"></div>',
});

jQuery(document).ready(function($) {
  $('.slick.marquee').slick({
    speed: 5000,
    autoplay: true,
    autoplaySpeed: 0,
    centerMode: true,
    cssEase: 'linear',
    slidesToShow: 1,
    slidesToScroll: 1,
    variableWidth: true,
    infinite: true,
    initialSlide: 1,
    arrows: false,
    buttons: false
  });
});
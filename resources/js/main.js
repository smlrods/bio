import Swiper from "swiper";
import { Autoplay, EffectFade } from "swiper/modules";
import "swiper/css";
import "swiper/css/effect-fade";

const productsSwiper = new Swiper(".productsSwiper", {
    modules: [Autoplay, EffectFade],
    autoplay: {
        delay: 3500,
        disableOnInteraction: false,
    },
    allowTouchMove: false,
    effect: "fade",
    fadeEffect: {
        crossFade: true,
    },
    loop: true,
});

const testimonialsSwiper = new Swiper(".testimonialsSwiper", {
    modules: [Autoplay, EffectFade],
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    allowTouchMove: false,
    effect: "fade",
    fadeEffect: {
        crossFade: true,
    },
    loop: true,
});

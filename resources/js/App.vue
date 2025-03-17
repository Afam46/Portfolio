<template>
    <section class="layers">
        <AppHeader/>
        <div class="layers-container">
            <div class="layers-item layer-1"></div>
            <div class="layers-item layer-1-2"></div>
            <div class="layers-item layer-2">
                <img src="/public/img/moon.png">
            </div>
            <div class="layers-item layer-3"></div>
            <div class="layers-item layer-4">
                <RouterView/>
            </div>
            <div class="layers-item layer-5"></div>
        </div>
    </section>
</template>

<script>
import AppHeader from './AppHeader.vue';

export default{
    components:{AppHeader},
    mounted(){
        document.addEventListener('mousemove', e => {
            Object.assign(document.documentElement,{
                style:`
                --move-x:${(e.clientX - window.innerWidth / 2 ) * -0.005}deg;
                --move-y:${(e.clientY- window.innerWidth / 2 ) * -0.01}deg;
                `
            })
        });
    },
}
</script>

<style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
:root{
    --index: calc(1vw + 1vh);
    --transition: (1.5s cubic-bezier(.05, .5, 0, 1));
}
@font-face {
    font-family: kamerik-3d;
    src: url('/fonts/kamerik205-heavy.woff2');
    font-weight: 900;
}
@font-face {
    font-family: mak-bold;
    src: url('/fonts/MAK-bold.otf');
}
@font-face {
    font-family: mak;
    src: url('/fonts/MAK.otf');
}
body{
    font-family: "Open Sans", sans-serif;
    color:white;
}
h1{
    font-family: mak-bold;
}
.layers{
    perspective: 1000px;
    overflow: hidden;
}
.layers-container{
    height: 100vh;
    transform-style: preserve-3d;
    transform: rotateX(var(--move-y)) rotateY(var(--move-x));
    will-change: transform;
    transition: transform var(--transition);
}
.layers-item{
    position: absolute;
    inset: -5vw;
    background-size: cover;
    background-position: center;
    display: flex;
    justify-content: center;
    align-items: center;
}
.layer-1{
    transform: translateZ(-55px);
    scale: 1.1;
    background-image: url('/public/img/space.png');
}
.layer-1-2{
    transform: translateZ(30px);
    scale: .95;
    background-image: url('/public/img/clouds.png');
}
.layer-2{
    transform: translateZ(80px);
    scale: .8;
}
.layer-2 img{
    position: absolute;
    scale: .4;
    left: -20vw;
    top: -30vh;
}
.layer-3{
    transform: translateZ(180px);
    scale: .9;
    background-image: url('/public/img/stars.png');
}
.layer-4{
    transform: translateZ(300px);
    scale: .8;
}
.layer-4 h1{
    color: white;
    font-size: calc(var(--index) * 2.9);
    text-align: center;
    text-transform: uppercase;
    letter-spacing: calc(var(--index) * -.15);
    line-height: .95em;
}
.layer-4 p{
    color: white;
    text-align: center;
    text-transform: uppercase;
    letter-spacing: calc(var(--index) * -.15);
    font-family: mak;
    letter-spacing: normal;
    font-size: calc(var(--index) * 1);
    line-height: 2;
}
.layer-5{
    transform: translateZ(380px);
    pointer-events: none;
    background-image: url('/public/img/color.png');
}
</style>
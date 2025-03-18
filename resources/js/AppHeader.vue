<template>
    <header>
        <nav>
            <div class="nav-item" @mouseover="animateBar(0)"
            @mouseout="animateBarDestroy(0)">
                <router-link :to="{name: 'main'}">На главную</router-link>
                <div class="nav-bar"></div>
            </div>
            <div class="nav-item" @mouseover="animateBar(1)"
            @mouseout="animateBarDestroy(1)">
                <router-link :to="{name: 'skills'}">Мои навыки</router-link>
                <div class="nav-bar"></div>
            </div>
            <div class="nav-item" @mouseover="animateBar(2)"
            @mouseout="animateBarDestroy(2)">
                <router-link :to="{name: 'portfolio'}">Портфолио</router-link>
                <div class="nav-bar"></div>
            </div>
            <div class="nav-item" @mouseover="animateBar(3)"
            @mouseout="animateBarDestroy(3)">
            <router-link :to="{name: 'about'}">Обо мне</router-link>
                <div class="nav-bar"></div>
            </div>
        </nav>
    </header>
</template>

<script>
    export default{
        methods:{
            animateBar(id){
                const bars = document.querySelectorAll('.nav-bar');
                bars[id].style.animationName = 'barMove';
                bars[id].style.width = '100%';
            },
            animateBarDestroy(id){
                const bars = document.querySelectorAll('.nav-bar');
                bars[id].style = '';
            }
        }
    }
</script>

<style>
header{
    position: absolute;
    width: 100%;
    z-index: 10;
    display: flex;
    justify-content: end;
    height: 8%;
    align-items: center;
}
.name-header{
    margin-left: 30px;
}
nav{
    margin-right: 20px;
    display: flex;
}
.nav-item{
    font-size: calc(var(--index) * .9);
    margin-right: 15px;
    cursor: pointer;
    display: flex;
    flex-direction: column;
    align-items: center;
}
.nav-bar{
    width: 0;
    height: 1.5px;
    background-color: white;
    animation-duration: .2s;
    animation-timing-function: linear;
}
@keyframes barMove {
    from{
        width: 0;
    }
    to{
        width: 100%;
    }
}
</style>
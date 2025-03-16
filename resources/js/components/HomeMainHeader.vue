<template>
    <header>
        <a class="name-header">Ислам Зайнуллин</a>
        <nav>
            <div class="nav-item" @mouseover="animateBar(0)"
            @mouseout="animateBarDestroy(0)">
                <a>Мои навыки</a>
                <div class="nav-bar"></div>
            </div>
            <div class="nav-item" @mouseover="animateBar(1)"
            @mouseout="animateBarDestroy(1)">
                <a>Портфолио</a>
                <div class="nav-bar"></div>
            </div>
            <div class="nav-item" @mouseover="animateBar(2)"
            @mouseout="animateBarDestroy(2)">
                <a>Обо мне</a>
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
    color: white;
    display: flex;
    justify-content: space-between;
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
    margin-right: 10px;
    cursor: pointer;
    display: flex;
    flex-direction: column;
    align-items: center;
}
.nav-bar{
    width: 0;
    height: 1.5px;
    background-color: white;
    animation-duration: .5s;
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
h1{
    font-size: 50px;
}
h2{
    font-size: 35px;
}
</style>
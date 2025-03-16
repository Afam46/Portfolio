<template>
    <div class="columns">
        <HomeCol1 :skills="skills"/>
        <HomeCol2/>
    </div>
</template>

<script>
import HomeCol1 from './HomeCol1.vue';
import HomeCol2 from './HomeCol2.vue';
export default{
    components:{HomeCol1, HomeCol2},
    props:{skills: Array}
}
</script>

<style>
.columns{
    width: 100%;
    background-color: #1E213D;
    box-shadow: 0 30px 80px black inset;
    display: flex;
    justify-content: center;
}
</style>
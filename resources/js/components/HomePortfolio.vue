<template>
    <div class="title">
        <h1 class="name" style="padding: 30px 0;">Портфолио</h1>
    </div>
    <div class="projects">
        <p style="padding-bottom: 30px; color: rgb(91, 91, 91);">
            У меня пока есть только пет-проекты, лишь один на хостинге
        </p>
        <div class="project" :style="`border: 2px solid ${project.color};`"
        v-for="project in projects" :key="project.id">
        <a :href="project.link">
            <img style="padding: 20px;" :src="project.img" alt="img">
            <div style="padding: 0 10px;" class="project-text">
                <p><b>{{project.title}}</b></p>
                <p>{{project.description}}</p>
            </div>
            <p>Нажмите, чтобы посетить сайт</p>
        </a>
        </div>
    </div>
</template>

<script>
export default{
    props:{
        projects: Array
    }
}
</script>

<style scoped>
p{
    padding-bottom: 5px;
    font-size: 20px;
    text-align: center;
}
.projects{
    width: 80%;
    margin: 0 auto;
    padding: 40px 0;
}
.project{
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 33%;
    height: 500px;
    border-radius: 20px;
    box-shadow: 10px 10px 10px rgb(138, 138, 138);
    transition: .3s;
    cursor: pointer;
}
.project:hover{
    scale: 1.025;
}
.title{
    background-image: url('/public/img/bg.png');
}
</style>
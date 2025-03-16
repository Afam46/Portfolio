<template>
    <div v-if="skills">
        <section class="layers" style="height: 15vh;">
            <div class="layers-container">
                <div class="layers-item layer-1">
                    <h1 class="name" style="padding: 30px 0;">Мои навыки</h1>
                </div>
            </div>
        </section>
        <div class="skills">
            <div v-for="skill in skills" :key="skill.id" class="skill">
                <a :href="`${skill.link}`">
                    <div class="skill-body">
                        <img :src="skill.img" alt="img"
                        :style="skill.scale ? 'scale: 0.5; margin: -40px 0;': ''">
                        <div class="skill-text">
                            <p><b>{{skill.title}}</b></p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</template>

<script>
export default{
    props:{
        skills: Array
    }
}
</script>

<style scoped>
.skills{
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
}
.skill{
    width: 19%;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 300px;
}
.skill-body{
    display: flex;
    flex-direction: column;
    align-items: center;
    cursor: pointer;
    transition: .2s;
}
.skill-body:hover{
    scale: 1.025;
}
p{
    font-size: 20px;
}
</style>
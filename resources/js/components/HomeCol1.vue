<template>
    <div class="col1">
        <div v-if="skills">
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
    </div>
</template>

<script>
export default{
    props:{
        skills:Array
    }
}
</script>

<style>
.col1{
    width: 49%;
    border-right: 1px solid white;
}
</style>
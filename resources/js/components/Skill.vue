<template>
    <div v-if="skills">
        <div class="skills">
            <div v-for="(skill,id) in skills" :key="id" class="skill">
                <a :href="`${skill.link}`">
                    <div class="skill-body"
                    @mouseover="showText(id)" @mouseout="closeText(id)">
                        <img :src="skill.img" alt="img" class="logo"
                        :style="skill.scale ? 'scale: 0.5; margin: -40px 0;': ''">
                        <div v-show="text === id" class="skill-text">
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
    data(){
        return{
            skills: null,
            text: null,
        }
    },
    mounted(){
        this.getSkills();
    },
    methods:{
        getSkills(){
            axios.get('/api/skills').then(res => {
                this.skills = res.data;
            })
        },
        showText(id){
            this.text = id
            let logos = document.querySelectorAll('.logo')
            logos.forEach((logo,i) => {
                if(i === id){
                    logo.style.display = 'none'
                }
            })
        },
        closeText(id){
            this.text = null
            let logos = document.querySelectorAll('.logo')
            logos[id].style.display = 'block'
        }
    }
}
</script>

<style scoped>
.logo{
    scale: .8;
}
.skills{
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
}
.skill{
    width: 20%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 10px -18px;
}
.skill-body{
    width: 30vh;
    height: 30vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    cursor: pointer;
    transition: scale .2s;
    border-radius: 20px;
}
.skill-body:hover{
    scale: 1.025;
    border: 2px solid rgb(255, 255, 255, 0.4);
    background-color: rgba(99, 99, 99, 0.2);
}
p{
    font-size: 20px;
    font-family: "Open Sans", sans-serif;
}
@media (max-width: 1000px) {
    .skill{
        width: 28%;
        margin: 10px -20px;
    }
    .skill-body{
        width: 25vh;
        height: 25vh;
    }
    .logo{
        scale: .75;
    }
}
@media (max-width: 820px) {
    .skill{
        width: 30%;
        margin: 10px -25px;
    }
    .skill-body{
        width: 22vh;
        height: 22vh;
    }
}
@media (max-width: 620px) {
    .skill{
        margin: 10px -25px;
    }
    .skill-body{
        width: 20vh;
        height: 20vh;
    }
    .logo{
        scale: .65;
    }
}
@media (max-width: 540px) {
    .skill{
        width: 34%;
        margin: 10px -25px;
    }
    .skill-body{
        width: 18vh;
        height: 18vh;
    }
    .logo{
        scale: .55;
    }
}
@media (max-width: 430px) {
    .skill{
        width: 45%;
        margin: 10px -28px;
    }
    .skill-body{
        width: 16vh;
        height: 16vh;
    }
    .logo{
        scale: .5;
    }
}
</style>
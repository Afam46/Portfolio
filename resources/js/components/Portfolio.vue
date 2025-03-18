<template>
    <div v-if="projects">
        <p style="padding-top: 60px; color: rgb(91, 91, 91);
        display: block;">
            У меня пока есть только пет-проекты, лишь один на хостинге
        </p>
        <div class="projects">
            <button @click="prev" style="order: -5;" class="arrow">&lt;</button>
            <div class="project un-active" 
            v-for="(project,id) in projects" :key="id">
                <a :href="project.link"
                :style="currentSlide == id?'cursor:pointer;':'pointer-events:none;'">
                    <img style="padding: 20px;" :src="project.img" alt="img">
                    <div class="project-text">
                        <p><b>{{project.title}}</b></p>
                        <p>{{project.description}}</p>
                    </div>
                </a>
            </div>
            <button @click="next" style="order: 5;" class="arrow">&gt;</button>
        </div>
    </div>
</template>

<script>
export default{
    data(){
        return{
            currentSlide: 2,
            projects: null,
        }
    },
    mounted(){
        this.getProjects();
    },
    methods:{
        getProjects(){
            axios.get('/api/projects').then(res => {
                this.projects = res.data;
                this.$nextTick(() => {
                    this.slider();
                });
            })
        },
        slider(){
            let projects = document.querySelectorAll('.project');
            if(this.currentSlide ===  projects.length){
                this.currentSlide = 0
            }
            if(this.currentSlide === 0){
                projects[0].style.order = '0'
            }
            if(this.currentSlide === 1){
                projects[0].style.order = '0'
            }
            if(this.currentSlide === -1){
                projects[projects.length-1].style.order = '0'
            }
            if(this.currentSlide === 1){
                projects[projects.length-1].style.order = '0'
            }
            if(this.currentSlide === -1){
                this.currentSlide = projects.length-1
            }
            let prevSlide = (this.currentSlide - 1);
            let nextSlide = (this.currentSlide + 1);
            projects.forEach((project, i) => {
                if(nextSlide === i || prevSlide === i || this.currentSlide === i){
                    project.style.display = 'flex'
                }else{
                    project.style.display = 'none'
                }
                project.classList.add('un-active');
                project.classList.remove('active');
            })
            if(this.currentSlide === projects.length-1){
                projects[0].style.display = 'flex'
                projects[0].style.order = '2'
            }
            if(this.currentSlide === 0){
                projects[projects.length-1].style.display = 'flex'
                projects[projects.length-1].style.order = '-2'
            }
            projects[this.currentSlide].classList.remove('un-active');
            projects[this.currentSlide].classList.add('active');
        },
        next(){
            this.currentSlide++;
            this.slider();
        },
        prev(){
            this.currentSlide--;
            this.slider();
        },
    }
}
</script>

<style scoped>
.arrow{
    margin: 0 -15px;
    font-family: kamerik-3d;
    font-size: calc(var(--index) * 2);
    display: flex;
    justify-content: center;
    align-content: center;
    width: calc(var(--index) * 3.5);
    height: calc(var(--index) * 3.5);
    cursor: pointer;
    border: solid 3px rgb(255, 255, 255, .4);
    border-radius: 100%;
    transition: .3s;
}
.arrow:hover{
    background-color: rgba(99, 99, 99, 0.4);
}
p{
    font-size: calc(var(--index) * .7);
    text-align: center;
    font-family: "Open Sans", sans-serif;
    font-optical-sizing: auto;
}
.projects{
    width: 90%;
    margin: 0 auto;
    padding: 40px 0;
    display: flex;
    align-items: center;
    justify-content: center;
}
.project{
    transition: transform .4s;
    display: flex;
    margin: 0 -14px;
    flex-direction: column;
    align-items: center;
    width: calc(var(--index) * 19);
    border-radius: 20px;
    background-color: rgba(99, 99, 99, 0.2);
}
.un-active{
    filter: blur(1px);
    transform: rotateY(60deg);
}
.active:hover{
    outline: 2px solid rgb(255, 255, 255, 0.4);
}
.project-text{
    padding: 0 10px;
    padding-bottom: 20px;
}
@media (max-width: 900px) {
    p{
        font-size: calc(var(--index) * .6);
    }
    .arrow{
        border: solid 2px rgb(255, 255, 255, .4);
        font-size: calc(var(--index) * 1.45);
        width: calc(var(--index) * 2.625);
        height: calc(var(--index) * 2.625);
    }
    .project{
        margin: 0 -22px;
    }
}
@media (max-width: 650px) {
    .projects{
        width: 95%;
    }
    p{
        font-size: calc(var(--index) * .55);
    }
    .arrow{
        margin: 0 -22px;
    }
    .project{
        width: calc(var(--index) * 16);
        margin: 0 -15px;
    }
    .active:hover{
        outline: 1px solid rgb(255, 255, 255, 0.4);
    }
}
@media (max-width: 560px) {
    .project{
        width: calc(var(--index) * 14);
        margin: 0 -15px;
    }
    p{
        font-size: calc(var(--index) * .5);
    }
}
@media (max-width: 460px) {
    p{
        font-size: calc(var(--index) * .45);
    }
    .arrow{
        border: solid 2px rgb(255, 255, 255, .4);
        margin: 0 -15px;
    }
}
@media (max-width: 425px) {
    .project{
        width: calc(var(--index) * 12.8);
        margin: 0 -13px;
    }
}
</style>
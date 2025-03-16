<template>
    <HomeMain/>
    <HomeAbout/>
    <HomeSkills :skills="skills"/>
    <HomePortfolio :projects="projects"/>
</template>

<script>
import axios from 'axios';
import HomeMain from './HomeMain.vue';
import HomeSkills from './HomeSkills.vue';
import HomePortfolio from './HomePortfolio.vue';
import HomeAbout from './HomeAbout.vue';

export default{
    components:{HomeMain, HomeSkills, HomePortfolio, HomeAbout},
    data(){
        return{
            skills: null,
            projects: null,
        }
    },
    mounted(){
        this.getSkills();
        this.getProjects();
    },
    methods:{
        getSkills(){
            axios.get('/api/skills').then(res => {
                this.skills = res.data;
            })
        },
        getProjects(){
            axios.get('/api/projects').then(res => {
                this.projects = res.data;
            })
        }
    }
}
</script>
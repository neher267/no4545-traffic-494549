<template>
    <div>
        <a href="#" 
            class="btn"
            v-for="(name, index) in names"
            >
            <img :src="`https://placeimg.com/200/200/animals?any=${ index+1 }`" 
                :alt="index">
        </a>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                names:[
                    {name:"Neher"},
                    {name:"Asif"},
                    {name:"Jitu"},
                    {name:"Arif"},

                ]
            };
        }
    }
</script>

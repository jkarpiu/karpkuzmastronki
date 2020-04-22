<template>
    <div>
        <header id="navigation">
            <div id="brand">
                Strona Firmowa
            </div>
            <nav>
                <span class="navItem" v-bind:key="item.id" v-for="item in menu"><a class="navItemLink" :href="item.siteId">{{ item.name }}</a></span>
            </nav>
        </header>
    </div>
</template>
<script>
    export default {
        props: ['data'],
        data() {
            return {
                menu: this.data
            }
        },
        watch:{
            menuData: function(data) {
                this.data
            }
        }
    }

</script>
<style scoped>
    #navigation {
        display: flex;
        justify-content: space-between;
        align-content: space-between;

    }
    .navItem{
        margin: 10px;
    }
    .navItemLink {
        text-decoration: none;
        color: black;
    }
    .navItemLink:hover {
        text-decoration: none;
        color: grey;
    }
</style>

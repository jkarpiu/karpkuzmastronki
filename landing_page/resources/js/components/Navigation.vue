<template>
    <div>
        <header id="navigation">
            <div id="brand" class="nav-element">
                Strona Firmowa
            </div>
            <nav id="menuBar" class="nav-element">
                <span class="navItem" v-bind:key="item.id" v-for="item in data"><a class="navItemLink" :href="pageID(item.pageId)">{{ item.name }}</a></span>
            </nav>
        </header>
    </div>
</template>
<script>
    export default {
        props: ['data'],
        data() {
            return {
            }
        },
        methods: {
            pageID: function (pageId) {
                return "#" + pageId;
            }
        }

    }
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
            if (document.body.scrollTop > 15 || document.documentElement.scrollTop > 15) {
                document.getElementById("navigation").style.height = "2rem";
                document.getElementById("navigation").style.background = "brown";
                document.getElementById("menuBar").style.marginTop = "0.2rem";
                document.getElementById("brand").style.marginTop = "0.2rem";
            } else {
                document.getElementById("navigation").style.height = "4rem";
                document.getElementById("navigation").style.background ="yellow";
                document.getElementById("menuBar").style.marginTop = "1.2rem";
                document.getElementById("brand").style.marginTop = "1.2rem";
        }
    }
</script>
<style scoped>
    #navigation {
        display: flex;
        justify-content: space-between;
        align-content: space-between;
        overflow: hidden;
        position: fixed;
        background: yellow;
        top: 0;
        width: 100%;
        height: 4rem;
        transition: 0.4s;
        z-index: 99;
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
        cursor: pointer;
    }
    .nav-element {
        transition: 0.4s;
        margin-top: 1.2rem;
        margin-left: 30px;
        margin-bottom: 0.5rem;
    }
    #brand, #menuBar {
        transition: 0.4s;
    }
</style>

<template>
    <div class="allOfContents">
        <div v-bind:key="article.id" v-for="article in contents" :id="article.pageId" :style="article.style"     class="article">
            <p :style="contentMargin(article.id)">
                {{article.content}}
            </p>
            <a class="nextPage" v-if="article.id < contents.length"  :href="nextSectionID(article.id, contents)"><p><i class="arrow down"></i></p></a>

        </div>
    </div>
</template>

<script>
export default {
    props: ['contents'],
    methods: {
        contentMargin: function(id) {
            if(id == 1)
                return "margin-top: 4.25rem;";
            else
                return "margin-top: 2.25rem;"
        },
        nextSectionID: function(id, all) {
            if (id < all.length)
                return "#" + all[ id++ ].pageId;

        }
    },

}
</script>

<style scoped>
    .allOfContents {
        display: flex;
        flex-direction: column;
    }

    .article {
        position: relative;
        display: block;
        min-height: 100vh;
        background-color: aqua;
    }

    .arrow {
        margin-left: auto;
        margin-right: auto;
        text-align: center;
        transition: 0.2s;
        border: solid grey;
        border-width: 0 10px 10px 0;
        display: inline-block;
        padding: 10px;
    }
    .down {
        transform: rotate(45deg);
        -webkit-transform: rotate(45deg);
    }

    .nextPage {
        clear: both;
        position: absolute;
        bottom: 0;
        margin-left: auto;
        margin-right: auto;
        text-align: center;
    }

</style>

<template>
    <div>
        <div v-bind:key="article.id" v-for="article in contents" :id="article.pageId" class="article">
            <p>
                {{article.content}}
            </p>
        </div>
    </div>
</template>

<script>
export default {
    props: ['contents'],

}
</script>

<style scoped>

</style>

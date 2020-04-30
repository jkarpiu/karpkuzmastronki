<template>
    <div>
        <h3>Karp|Kuźma|Stronki</h3>
        <ul>
            <li v-bind:key="item.id" v-for="item in contents"><a :href="pageID(item.pageId)">{{item.name}}</a></li>
        </ul>
    </div>
</template>
<script>
export default {
    props: ['contents'],
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
</script>
<style scoped>
    div {
        display: flex;
        flex-direction: row;
        flex-wrap: nowrap;
        justify-content: center;
        align-items: stretch;
        align-content: space-between;
        color: #8a8a8a;
        background-color: black;
        padding-top: 50px;
        padding-bottom: 50px;
    }

    ul {

        list-style-type: none;
    }

    a {
        text-decoration: none;
    }
</style>

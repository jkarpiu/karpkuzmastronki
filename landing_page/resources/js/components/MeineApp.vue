<template>
    <div>
        <Navigation :data="data" />
    </div>
</template>

<script>
import axios from "axios"
export default {
    data() {
        return {
            data: this.data,
            serverAdress: 'http://127.0.0.1:8000/'
        }
    },
    created() {
        axios.get( this.serverAdress + 'karpapi')
            .then(res => this.data = res.data,
                    console.log(this.data))
            .catch(err => console.log(err.response));
        }
}
</script>

<template>
    <div class="container">
        <button class="my-button" v-text="test.name" :type="type"></button>
    </div>
</template>

<script>
export default {
    mounted() {
        console.log("Component mounted.");
        axios.post("api/vue", {}).then(response => {
            this.test = response.data;
        });
    },
    data: function() {
        return {
            test: null
        };
    },
    props: ["text", "type"]
};
</script>

<style>
.my-button {
    background-color: black;
    margin: 20px;
    padding: 10px;
    font-size: 30px;
    color: red;
}
</style>

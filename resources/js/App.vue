<template>
    <div>
        <Header />

        <main>
            <h1>Welcome in a public home</h1>

            <p>Work in progress...</p>
        </main>
    </div>
</template>

<script>
import Header from "./components/Header.vue";

export default {
    name: "App",
    components: {
        Header
    }
};
</script>

<style lang="scss">
body {
    font-family: "Nunito", sans-serif;
}
</style>

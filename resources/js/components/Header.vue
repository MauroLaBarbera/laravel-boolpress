<template>
    <header>
        <nav>
            <ul>
                <li>
                    <a href="/">BoolPress</a>
                </li>
                <li>
                    <a href="/home">Blog</a>
                </li>
                <li>
                    <a href="">About</a>
                </li>
            </ul>
        </nav>
    </header>
</template>

<script>
export default {
    name: "Header",
    components: {}
};
</script>

<style lang="scss" scoped>
ul {
    display: flex;
    li {
        list-style: none;
        margin-right: 15px;
    }
}
</style>

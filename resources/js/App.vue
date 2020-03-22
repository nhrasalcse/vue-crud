<template>
    <div id="app">
        <!-- Side Navbar -->
        <Nav></Nav>

        <div class="page">
            <!-- navbar-->
            <Header></Header>

            <router-view />
<!--            footer-->
            <Footer></Footer>
        </div>
    </div>

</template>

<script>
    import Nav from "./components/Nav.vue";
    import Header from "./components/Header.vue";
    import Footer from "./components/Footer.vue";
    export default {
        components: {
            Nav,
            Header,
            Footer
        }
    }
</script>

<style>

</style>

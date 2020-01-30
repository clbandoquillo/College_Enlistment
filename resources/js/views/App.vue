<template>
    <div>
        <app-header></app-header>
        <app-footer></app-footer>
        <div class="container-fluid">
            <br/>
            <div class="row">
                <div class="col">
                    <router-view></router-view>
                </div>
            </div>
        </div>

    </div>
</template>

<script>
    import Header from './Header.vue'
    import Footer from './Footer.vue'

    export default {
        components: {
            appHeader: Header,
            appFooter: Footer
        }
    }
</script>

<style>
</style>
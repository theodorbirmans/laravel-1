<template>
    <header>
        <div class="logo">
            <img src="../../../public/images/logo.png" alt="">
        </div>
        <div class="nav">
            <input type="checkbox" id="burger-checkbox" class="burger-checkbox">
            <label for="burger-checkbox" class="burger"></label>    
            <ul class="menu-list">
                <li><a href="#">Репродукция</a></li>
                <li><a href="#">Новинки</a></li>
                <li><a href="#">О нас</a></li>
            </ul>
        </div>
        <div class="cart">
            <a href="#"><img src="../../../public/images/cart.png" alt=""></a>
        </div>
    </header>
</template>

<script>
export default {
    name: 'v-header',
    components: {},
    props: {},
    methods: {}
}
</script>

<style lang="scss">

</style>
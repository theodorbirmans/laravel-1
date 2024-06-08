<template>
  <v-header></v-header>
  <v-welcome></v-welcome>
  <v-preview-catalog></v-preview-catalog>
  <v-promo></v-promo>
  <v-team></v-team>
  <v-footer></v-footer>
</template>

<script>
import vHeader from './components/Header.vue'
import vWelcome from './components/Welcome.vue'
import vPreviewCatalog from './components/PreviewCatalog.vue'
import vPromo from './components/Promo.vue'
import vTeam from './components/Team.vue'
import vFooter from './components/Footer.vue'

export default {
    name: 'v-main',
    components: {
        vHeader,
        vWelcome,
        vPreviewCatalog,
        vPromo,
        vTeam,
        vFooter
    },
    props: {},
    methods: {}
}
</script>

<style>

</style>
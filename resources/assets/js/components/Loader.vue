<template>
    <div class="loader">
        <div class="dotRow" v-for="(n, i) in dotColumns">
            <div class="dot" v-for="(n, j) in dotCount" :style="breath(i,j)"></div>
        </div>
    </div>
</template>


<script>
export default {
    data() {
        return {
            dotColumns: 10,
            dotCount: 10,
            delay: 0
        }
    },

    methods: {
        breath(i, j) {
            let time = 1/this.dotCount;
            let dot = 0;
            for(let n=1;n<=j;n++)
            {
                dot = time * (i + n)
                console.log(n);
            }
            return `animation-delay: ${dot}s`
        }
    }
}
</script>


<style lang="sass">
.loader
  display: block
  margin: 50px auto
  .dotRow
    display: flex
    width: 100px
    flex-wrap: wrap
  .dot
    will-change: transform
    will-change: color
    display: block
    background: purple
    height: 10px
    width: 10px
    border-radius: 50%
    animation: breath 4s ease infinite

@keyframes breath
  0%
    transform: scale(1)

  20%
    transform: scale(1.4)
    background-color: lighten(purple,50%)

  80%
    transform: scale(1)

</style>

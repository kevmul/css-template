<template>
    <div class="Form__group">
        <span class="Range__min">{{min}}</span>
        <div class="Range__current">
            <div class="Range__current--Reel">
                <span v-for="(index, item) in values">{{item}}</span>
            </div>
        </div>
        <label for="range">
            <input class="Range" name="range" type="range" :min="min" :max="max" v-model="value">
        </label>
        <span class="Range__max">{{max}}</span>
    </div>
</template>

<script>
export default {
    props: {
        min : {
            default: 0,
            type: Number
        },
        max : {
            default: 100,
            type: Number
        },
        step : {
            default: 1
        }
    },
    data() {
        return {
            value: "50"
        }
    },
    computed: {
        values() {
            let n = Array.from(new Array(this.max + 1), (x,i) => x);
            return n;
        }
    }
}
</script>
<template>
    <div :class="['Alert', 'has-shadow', alertType(), {'zoomOut': !show}, {'hide': !show}]" role="alert">
        <div class="Alert__content">
            <div class="Alert__title">{{ data.title }}</div>
            <div class="Alert__body">{{ data.body }}</div>
            <div class="Alert__close" v-if="isToggle" @click="closeModal">&times;</div>
        </div>
    </div>
</template>

<script>
export default {
    props:['title', 'message', 'type', 'important'],

    data() {
        return {
            data: {},
            show: false,
            isToggle: true
        }
    },

    methods: {
        hide() {
            setTimeout(() => {
                this.show = false;
            }, 5000)
        },

        flash(title, message = null, type = 'success', toggle = false) {
            this.messageType = type.charAt(0).toUpperCase() + type.slice(1);
            this.data = {
                title: title,
                body: message
            }

            this.show = true;
            this.isToggle = toggle;
            if(!toggle){
                this.hide();
            }
        },

        alertType() {
            return 'Alert--' + this.messageType;
        },

        closeModal() {
            this.show = false;
        }
    },

    created() {
        if (this.title || this.message)
        {
            this.flash(this.title, this.message, this.type, this.important)
            this.show = true;
        }

        Events.$on('flash', (title, message, type, toggle) => {
            this.flash(title, message, type, toggle);
        });
    }
}
</script>

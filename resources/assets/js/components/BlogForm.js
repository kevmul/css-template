export default {
    data() {
        return {
            form: new Form({
                title: '',
                excerpt: '',
                body: ''
            })
        }
    },

    methods: {
        onSubmit: function() {
            this.form.post('/blog');
        }
    },
}

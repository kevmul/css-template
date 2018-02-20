@extends('layout.master')

@section('content')
    <blog-form inline-template>
        <div class="Container">
            <h1>Create a Blog</h1>
            <form class="Form" method="POST" action="/blog"
                @submit.prevent="onSubmit"
                @keydown="form.errors.clear($event.target.name)"
            >
                <div class="Form__group">
                    <label for="title" class="Form__label">Title</label>
                    <input type="text" id="title" name="title" class="Form__input" v-model="form.title">
                    <span class="text-is-danger" v-if="form.errors.has('title')" v-text="form.errors.get('title')"></span>
                </div>
                <div class="Form__group">
                    <label for="excerpt" class="Form__label">Small Description of the Blogpost</label>
                    <input type="text" id="excerpt" name="excerpt" class="Form__input" v-model="form.excerpt">
                    <span class="text-is-danger" v-if="form.errors.has('excerpt')" v-text="form.errors.get('excerpt')"></span>
                </div>
                <div class="Form__group">
                    <label for="body" class="Form__label">Body</label>
                    <textarea name="body" class="Form__input" cols="30" rows="10" v-model="form.body">
                    </textarea>
                    <span class="text-is-danger" v-if="form.errors.has('body')" v-text="form.errors.get('body')"></span>
                </div>
                <div class="Form__group">
                    <button class="Button Button--Info">Submit</button>
                </div>
            </form>
        </div>
    </blog-form>
@endsection

@section('footer.scripts')
<script>
    // Vue.component('blog-form',{
    //     template: '#blog-form-template',
    //     data: function() {
    //         return {
    //             // form: new Form({
    //             //     name: '',
    //             //     excerpt: '',
    //             //     body: ''
    //             // })
    //         }
    //     }
    // })
    // new Vue({
    //     el: '#app'
    // })
</script>
@endsection

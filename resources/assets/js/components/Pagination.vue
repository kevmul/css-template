<template>
    <nav class="pagination is-centered" role="navigation">
        <a class="pagination-previous" @click="previous">Previous page</a>
        <a class="pagination-next" @click="next">Next page</a>
        <ul class="pagination-list">
            <li v-for="page in pages">
            <a
                :class="['pagination-link', {'is-current' : page.selected}]"
                @click="goto(page.number)"
            >{{ page.number }}</a></li>
        </ul>
    </nav>
</template>

<script>
export default {
    props: ['model'],

    data() {
        return {
        }
    },

    methods: {
        next() {
            Event.$emit('next')
        },

        previous() {
            Event.$emit('previous')
        },

        goto(page) {
            Event.$emit('goto', page)
        },

        isActive(page) {
            return (this.model.current_page == page)? true : false
        }
    },

    computed: {

        pages() {
            let pages = {}
            let max_pages = 5
            let last_page = this.model.last_page
            let current_page = this.model.current_page
            if(last_page<=max_pages)
            {
                for(let i=1;i<=last_page;i++)
                {
                    let page = {
                        number: i,
                        selected: i === this.model.current_page
                    }
                    pages[i] = page;
                }
                return pages
            }
            if(current_page <= max_pages && current_page <= 3)
            {
                for(let i=1;i<=max_pages;i++)
                {
                    let page = {
                        number: i,
                        selected: i === this.model.current_page
                    }
                    pages[i] = page;
                }
            }
            if(current_page > 3 && current_page < (last_page - 2))
            {
                for(let i=current_page-2;i<=current_page+2;i++)
                {
                    let page = {
                        number: i,
                        selected: i === this.model.current_page
                    }
                    pages[i] = page;
                }
            }
            if(current_page <= last_page && current_page > last_page - 3)
            {
                for(let i=last_page-4;i<=last_page;i++)
                {
                    let page = {
                        number: i,
                        selected: i === this.model.current_page
                    }
                    pages[i] = page;
                }
            }

            return pages;
        }
    },

    mounted() {
        // this.nextAndPrevious()
    },

    beforeDestroy() {
        Event.$off()
    }
}
</script>

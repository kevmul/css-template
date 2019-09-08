<div class="Navigation Nav--Floating_Links">
    <div class="Container">
        <div class="d-flex flex has-space-between">
            <ul class="Nav__list">
                <li class="Nav__item"><a href="#">Home</a></li>
            </ul>
            <div class="Hamburger" @click="toggleNav" :class="{'is-active': displayNav}">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <ul class="Nav__list Nav__list--Bar">
                @include('layout.nav-list')
            </ul>
        </div>
    </div>
</div>
<div class="Nav__list" v-if="displayNav">
    @include('layout.nav-list')
</div>

<template>
<div class="card card-custom gutter-b bg-white border-0">
    <div class="card-header border-0 align-items-center">
        <h3 class="card-label mb-0 font-weight-bold text-body">Media Setting
        </h3>
    </div>
    <div class="card-body">

        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-pills mb-4" id="v-pills-tab1" role="tablist" aria-orientation="vertical">
                    <li class="nav-item">
                        <a class="nav-link" @click.prevent="setActive('large')" :class="{ active: isActive('large') }" href="#large">Large Setting</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" @click.prevent="setActive('medium')" :class="{ active: isActive('medium') }" href="#medium">Medium Setting</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" @click.prevent="setActive('thumbnail')" :class="{ active: isActive('thumbnail') }" href="#thumbnail">Thumbnail Setting</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-12">
                <div class="tab-content v_pill_tab card_custom_effect" id="v-pills-tabContent1">
                    <div class="tab-pane fade" :class="{ 'active show': isActive('large') }">
                        <LargeMediaSetting />
                    </div>
                    <div class="tab-pane fade" :class="{ 'active show': isActive('medium') }">
                        <MediumMediaSetting />
                    </div>
                    <div class="tab-pane fade" :class="{ 'active show': isActive('thumbnail') }">
                        <ThumbnailMediaSetting  />
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</template>

<script>

import LargeMediaSetting from './settings/LargeMediaSetting';
import MediumMediaSetting from './settings/MediumMediaSetting';
import ThumbnailMediaSetting from './settings/ThumbnailMediaSetting';

export default {
    name: 'Dashboard',
    components: {
        LargeMediaSetting,
        MediumMediaSetting,
        ThumbnailMediaSetting
    },
    data() {
        return {
            activeItem: 'large'
        }
    },

    methods: {
        isActive(menuItem) {
            return this.activeItem === menuItem
        },
        setActive(menuItem) {
            this.activeItem = menuItem
        }
    }
}
</script>
<style scoped>
.v_pill_tab{
    box-shadow: 0 4px 24px 0 rgb(34 41 47 / 10%);
    border-radius: 10px;
    padding: 20px;
}
#v-pills-tab1 li a{
    font-size: 15px;
    border-radius: 10px !important;
    padding: 8px 25px;
}
.nav .nav-link.active, .nav-pills .show > .nav-link{
    background: linear-gradient(118deg, #7367f0, rgba(115, 103, 240, 0.7)) !important;
    box-shadow: 0 0 10px 1px rgb(115 103 240 / 70%) !important;
    color: #fff !important;
}
</style>

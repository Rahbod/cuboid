<template>
    <div class="form-group" :class="[index == null?'row':'form-group-float']">
        <label class="cursor-pointer" :class="label_class()" v-text="lable" :for="getId(info.name)"></label>
        <div :class="input_container_class" class="customdropzone">
            <!--            <input class="form-control" :class="[hasError() ?'border-danger':'']" :type="info.type" :style="input_style"-->
            <!--                   v-model="input_value" :name="getName(info.name)" :ref="getId(info.name)" :id="getId(info.name)" :placeholder="lable+'...'">-->
            <!--            <span class="form-text text-danger" v-if="hasError()" v-for="error in errors[getErrorName(info.name)]">{{error}}</span>-->
            <vue-dropzone :ref="getId(info.name)" :id="getId(info.name)" :options="dropzoneOptions" v-on:vdropzone-sending="sendingEvent">
            </vue-dropzone>
        </div>

    </div>
</template>

<script>
    import vue2Dropzone from 'vue2-dropzone'
    import 'vue2-dropzone/dist/vue2Dropzone.min.css'
    import InputMixin from '../../../../mixins/InputMixin.vue'

    export default {

        mixins: [InputMixin],
        components: {
            vueDropzone: vue2Dropzone
        },
        computed:{
            dropzoneOptions(){
                return{
                    url: this.main_url+'/store_image',
                    thumbnailWidth: 150,
                    maxFilesize: 5,
                    // headers: {"My-Awesome-Header": "header value"}
                }
            }
        },
        methods: {
            sendingEvent (file, xhr, formData) {
                let token = document.head.querySelector('meta[name="csrf-token"]');

                if (token) {
                    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
                    formData.append('_token', token.content);
                }
                formData.append('id', this.model.id);

            }
        },
        mounted() {
            if (Array.isArray(this.input_value)) {
                this.input_value.forEach(image => {
                    let file = {size: 200, name: image.name, type: "image/png"};
                    let url = image.image;
                    this.$refs[this.getId(this.info.name)].manuallyAddFile(file, url);
                });
            }
        }
    }
</script>

<style>
    .dropzone {
        min-height: 288px;
    }
</style>
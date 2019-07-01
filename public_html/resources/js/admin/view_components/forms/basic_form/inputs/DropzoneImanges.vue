<template>
    <div class="form-group" :class="[index == null?'row':'form-group-float']">
        <label class="cursor-pointer" :class="label_class()" v-text="lable" :for="getId(info.name)"></label>
        <div :class="input_container_class" class="customdropzone">
            <!--            <input class="form-control" :class="[hasError() ?'border-danger':'']" :type="info.type" :style="input_style"-->
            <!--                   v-model="input_value" :name="getName(info.name)" :ref="getId(info.name)" :id="getId(info.name)" :placeholder="lable+'...'">-->
            <!--            <span class="form-text text-danger" v-if="hasError()" v-for="error in errors[getErrorName(info.name)]">{{error}}</span>-->
            <vue-dropzone
                    :ref="getId(info.name)"
                    :id="getId(info.name)"
                    :options="dropzoneOptions"
                    v-on:vdropzone-sending="sendingEvent"
                    v-on:vdropzone-removed-file="removeFileEvent"
                    v-on:vdropzone-success="successUpload"
            >
            </vue-dropzone>
        </div>

    </div>
</template>

<script>
    import vue2Dropzone from 'vue2-dropzone'
    import axios from 'axios';
    import 'vue2-dropzone/dist/vue2Dropzone.min.css'
    import InputMixin from '../../../../mixins/InputMixin.vue'
    import {mapActions} from 'vuex'

    export default {

        mixins: [InputMixin],
        components: {
            vueDropzone: vue2Dropzone
        },
        computed: {
            dropzoneOptions() {
                return {
                    url: this.main_url + '/store_image',
                    thumbnailWidth: 150,
                    maxFilesize: 5,
                    addRemoveLinks: true,
                    dictDefaultMessage: "<i class='fa fa-cloud-upload'></i>",
                    dictCancelUpload: 'انصراف',
                    dictRemoveFile: 'حذف فایل'
                    // headers: {"My-Awesome-Header": "header value"}
                }
            }
        },
        methods: {
            ...mapActions(['sendRequest']),
            sendingEvent(file, xhr, formData) {
                let token = document.head.querySelector('meta[name="csrf-token"]');

                if (token) {
                    formData.append('_token', token.content);
                }
                formData.append('gallery_id', this.model.id);

            },
            removeFileEvent(file, error, xhr) {
                let status=null;
                if(this.$refs[this.getId(this.info.name)].dropzone.disabled !== undefined){
                    status=this.$refs[this.getId(this.info.name)].dropzone.disabled;
                }
                if(status !== true){
                    let token = document.head.querySelector('meta[name="csrf-token"]');
                    this.sendRequest(
                        {
                            el: this.$el,
                            url: this.main_url + '/remove_image',
                            data: {
                                id: file.id,
                                _token: token.content
                            }
                        });
                }



            },
            successUpload(file, response) {
                let model = response.model;
                file.id = model.id;
                file.dataURL = model.logo;
            }
        },
        mounted() {
            if (Array.isArray(this.input_value)) {
                this.input_value.forEach(image => {
                    let file = {size: 200, name: image.name, id: image.id, type: "image/png"};
                    let url = image.logo;
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
<template>
    <div>
        <div class="card-header">
            <h5>Basic Form Inputs</h5>
            <span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>
        </div>
        <div class="card-block">
            <h4 class="sub-title">Basic Inputs</h4>
            <div v-if="this.success" class="card">
                <div class="card-header bg-success">
                    <h6><i class="icon-fa icon-fa-check"></i> Success</h6>
                </div>
                <div class="card-body">
                    <p>{{ this.success }}</p>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" :class="{'is-invalid': this.allErrors.title}" v-model="newProducts.title" placeholder="Name">
                </div>
                <span v-if="this.allErrors.title" class="help-block help-block-error">{{ this.allErrors.title }}</span>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Summary</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" :class="{'is-invalid': this.allErrors.summary}" v-model="newProducts.summary" placeholder="Type your title in Placeholder">
                </div>
                <span v-if="this.allErrors.summary" class="help-block help-block-error">{{ this.allErrors.summary }}</span>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Category</label>
                <div class="col-sm-10">
                    <select v-model="newProducts.category_id" class="form-control" :class="{'is-invalid': this.allErrors.title}">
                        <option value=""></option>
                        <option v-for="(item,key) in this.category_list" :value="item.id">{{ item.title }}</option>
                    </select>
                </div>
                <span v-if="this.allErrors.category_id" class="help-block help-block-error">{{ this.allErrors.category_id }}</span>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Upload File</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Textarea</label>
                <div class="col-sm-10">
                    <textarea rows="5" cols="5" class="form-control" placeholder="Default textarea"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                    <button @click="addProducts()" class="btn btn-success waves-effect waves-light">Success Button</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import { RepositoryFactory } from '../../repositories/RepositoryFactory';
    const CommonRepository = RepositoryFactory.get('common');
    export default {
        template: '#UploadFile',
        props: {
            yourProduct: Array,
            required: false,
            accept: {
                type: String,
                default: 'image/*'
            },
        },

        data () {
            return {
                newProducts: {
                    id: '',
                    title: '',
                    image: {},
                    category_id: '1',
                    slug: '',
                    price: '',
                    summary: '',
                    contents: 'Anh Bá',
                    status: 1,
                    completed: false
                },
                allErrors: {
                    title: '',
                    summary: '',
                    category_id: '',
                    image: '',
                    contents: '',
                    status: '',
                    completed: ''
                },
                success: '',
                products: [],
                category_list: []
            }
        },
        mounted() {
            this.product = this.yourProduct;
            console.log('Index Component mounted.')
        },
        created() {
            this.getCategoryList();
        },
        methods: {
            async getCategoryList() {
                const { data } = await CommonRepository.getCategoryList();
                this.category_list = data.list_category;
            },
            selectFile(){
                this.$refs.file.click()
            },
            addProducts(){
                let vm = this;
                let url = '/admin/api/products/add';
                console.log(vm.newProducts);
                axios.post(url, vm.newProducts).then(
                    response => {
                        if(response.data.success == 0){
                            Object.keys(response.data.error).forEach(key => {
                                if (response.data.error.title){
                                    vm.allErrors.title = response.data.error.title[0];
                                }
                                if (response.data.error.summary){
                                    vm.allErrors.summary = response.data.error.summary[0];
                                }
                                if (response.data.error.status){
                                    vm.allErrors.status = response.data.error.status[0];
                                }
                                if (response.data.error.contents){
                                    vm.allErrors.contents = response.data.error.contents[0];
                                }
                                if (response.data.error.category_id){
                                    vm.allErrors.category_id = response.data.error.category_id[0];
                                }
                            });
                        }else {
                            vm.posts = response.data.data;
                            this.success = response.data.message;
                            //this.scrollTo();
                            this.allErrors = {};
                            this.newProducts = {};
                        }
                        /*vm.products.push({
                            title: request.data.title,
                            category_id: request.data.category_id,
                            image: request.data.image,
                            summary: request.data.summary,
                            contents: request.data.contents,
                            status: request.data.status,
                            completed: false
                        })*/
                    }).catch((error) => {
                    console.log(error);
                });
            },
            onImageChange(e) {
                if (typeof this.$refs.file.files[0] != 'undefined') {
                    console.log(this.$refs.file.files[0]);
                    this.newProducts.file = this.$refs.file.files[0];
                    this.newProducts.file_name = this.$refs.file.files[0].name;
                } else {
                    this.file = '';
                    this.file_name = '';
                }
                let files = e.target.files || e.dataTransfer.files;
                if (!files.length) {
                    return;
                }
                this.newProducts.image = files[0].name;
                this.createImage(files[0])
            },
            createImage(file) {
                let reader = new FileReader();
                let vm = this;
                reader.onload = (e) => {
                    vm.newProducts.image = e.target.result;
                };
                reader.readAsDataURL(file);
            },
            scrollTo() {
                setTimeout(function() {
                    $("html, body").animate({ scrollTop: $(document).find(".bg-success").offset().top }, 1000);
                }, 100)
            },
        }
    }

</script>

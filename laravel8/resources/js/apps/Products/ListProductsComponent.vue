<template>
    <div>
        <bootstrap-4-datatable :class="classes" :columns="columns" :data="rows" :filter="filter" :per-page="perPage"></bootstrap-4-datatable>
        <bootstrap-4-datatable-pager v-model="page" type="abbreviated"></bootstrap-4-datatable-pager>
    </div>
</template>

<script>
    import { RepositoryFactory } from '../../repositories/RepositoryFactory';
    const CommonRepository = RepositoryFactory.get('common');
    export default {
        data() {
            return {
                columns: [
                    {
                        label: 'id',
                        field: 'id'
                    },
                    {
                        label: 'title',
                        field: 'title'
                    },
                    {
                        label: 'category',
                        field: 'category'
                    },
                    {
                        label: 'description',
                        field: 'description'
                    }
                ],
                rows: [],
                page: 1,
                filter:  '',
                perPage: 12,
                classes: {
                    'table-container': {
                        'justify-center': true,
                        'w-full': true,
                        'flex': true,
                        'rounded': true,
                        'mb-6': true,
                        'shadow-md': true,
                    },
                    'table': {
                        'text-left': true,
                        'w-full': true,
                        'border-collapse': true,
                    },
                    'thead': {
                        'text-grey-dark': true,
                        'bg-black': true,
                        'border-grey-light': true,
                        'py-4': true,
                        'px-6': true,
                    },
                    "t-body": {
                        'bg-grey-darkest': true,

                    },
                    "t-head-tr": {

                    },
                    "t-body-tr": {
                        'stripped-table': true,
                        'bg-grey-darkest': true,
                    },
                    "td": {
                        'py-4': true,
                        'px-6': true,
                        'border-b': true,
                        'border-grey-light': true,
                        'text-grey-light': true,
                    },
                    "th": {
                        'py-4': true,
                        'px-6': true,
                        'font-bold': true,
                        'uppercase': true,
                        'text-sm': true,
                        'text-grey-dark': true,
                        'border-b': true,
                        'border-grey-light': true,
                    },
                }
            }
        },
        created: function () {
            this.showListProducts()
        },
        methods: {
            async showListProducts() {
                const { data } = await CommonRepository.getListProducts();
                this.list_products = data.list_products;
            },
        }
    }

</script>

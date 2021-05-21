<template>
    <div>
        <bootstrap-4-datatable :columns="columns" :data="rows" :filter="filter" :per-page="perPage" :classes="classes" :actions="actions" :config="config"></bootstrap-4-datatable>
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
                        label: 'Code',
                        field: 'id',
                        sort: false,
                        filter: {
                            type: "id",
                            placeholder: "Enter email"
                        },
                        row_text_alignment:  "text-center",
                        column_text_alignment:  "text-center",
                    },
                    {
                        label: 'Title',
                        field: 'title'
                    },
                    {
                        label: 'Category',
                        field: 'category'
                    },
                    {
                        label: 'Description',
                        field: 'description'
                    }
                ],
                actions: [
                    {
                        btn_text: "Download",
                        event_name: "on-download",
                        event_payload: {
                            msg: "my custom message"
                        }
                    }
                ],
                config: {
                    pagination: true,
                    pagination_info: true,
                    num_of_visibile_pagination_buttons: 7,
                    per_page: 10,
                    checkbox_rows: true,
                    highlight_row_hover: true,
                    rows_selectable: true,
                    multi_column_sort: false,
                    card_title: "Vue Bootsrap 4 advanced table",
                    card_mode: false,
                    selected_rows_info:true,
                    per_page_options: [5, 10, 20, 30],
                },
                classes: {
                    table: "table-bordered table-striped"
                },
                rows: [],
                page: 1,
                filter:  '',
                perPage: 12,
            }
        },
        created: function () {
            this.showListProducts()
        },
        methods: {
            async showListProducts() {
                const { data } = await CommonRepository.getListProducts();
                this.rows = data.list_products;
            },
        }
    }

</script>

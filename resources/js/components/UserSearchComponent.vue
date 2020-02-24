<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <vue-good-table
                    mode="remote"
                    :columns="columns"
                    :rows="rows"
                    :globalSearch="true"
                    :search-options="{
                        enabled: true,
                        skipDiacritics: true,
                     }"
                    @on-search="onSearch"
                    styleClass="table table-hover table-bordered">
                    <template slot="table-row" slot-scope="props">
                        <span v-if="props.column.field === 'ID'">
                            {{ (users.per_page * (users.current_page - 1)) + (props.index + 1)}}
                        </span>
                        <span v-else>
                            {{props.formattedRow[props.column.field]}}
                        </span>
                    </template>
                </vue-good-table>
                <pagination :data="users" @pagination-change-page="getRecords"></pagination>
            </div>
        </div>
    </div>
</template>

<script>
    import 'vue-good-table/dist/vue-good-table.css'
    import VueGoodTable from 'vue-good-table';
    export default {
        props: ['endpoint'],
        data() {
            return {
                users: {
                    searchTerm: '',
                    total: 0,
                    per_page: 5,
                    from: 1,
                    to: 0,
                    current_page: 1
                },
                offset: 4,
                columns: [
                    {
                        label: 'ID',
                        field: 'id',
                        type: 'number',
                    },
                    {
                        label: 'User Name',
                        field: 'name',
                        filterable: true
                    },
                    {
                        label: 'Email Address',
                        field: 'email',
                        filterable: true
                    },
                    {
                        label: 'Created At',
                        field: 'created_at',
                        filterable: true
                    },
                ],
                rows: []
            }
        },
        mounted() {
            this.getRecords()
        },
        methods: {
            getRecords(page = 1) {
                return axios.get(`${this.endpoint}?page=${page}&searchTerm=${this.users.searchTerm}`).then((response) => {
                    this.rows = response.data.users.data
                    this.users = response.data.users
                })
            },
            updateParams(newProps) {
                this.users = Object.assign({}, this.users, newProps);
            },
            onSearch: _.debounce(function (params) {
                this.updateParams(params);
                this.getRecords();
                return false;
            }, 500)
        }
    }
</script>

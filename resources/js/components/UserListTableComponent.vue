<template>

    <vue-good-table
        :columns="columns"
        :rows="rows"/>

</template>

<script>
    import 'vue-good-table/dist/vue-good-table.css';
    import { VueGoodTable } from 'vue-good-table';
    export default {
        name: "UserListTableComponent",
        components: {
            VueGoodTable,
        },
        props: [
            'endpoint'
        ],

        data(){
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
                        label: 'Name',
                        field: 'name',
                    },
                    {
                        label: 'Email',
                        field: 'email',
                    },
                    {
                        label: 'Created On',
                        field: 'created_at',
                       /* type: 'date',
                        dateInputFormat: 'dd.mm.YYYY',
                        dateOutputFormat: 'dd.mm.YYYY',*/
                    },
                ],
                rows: [],
            };
        },
        mounted() {
            console.log('Component mounted.');
            //console.log(axios.get(`${this.usersList}`));
            this.update();
            this.getRecords();
        },
        methods: {
            update: function () {
                console.log('ffff');
            },
            getRecords() {
                return axios.get(`${this.endpoint}`).then((response) => {
                    this.rows = response.data.users.data
                    //this.users = response.data.users
                })
            },
        },
    }
</script>

<style scoped>

</style>

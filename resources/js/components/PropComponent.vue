<template>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Наименование</th>
                                <th>Ссылка</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="item in urlData">
                                <td>{{item.title}}</td>
                                <td>{{item.url}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: [
          'urlData'
        ],
        mounted() {
            console.log('Component mounted.')
            this.update()
        },
        methods: {
            update: function () {
                console.log(this.urlData);
            }
        }
    }
</script>

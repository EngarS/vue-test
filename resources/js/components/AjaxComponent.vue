<template>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <button @click="update" class="btn btn-primary text mb-1" v-if="!isRefresh">Обновить - {{id}} ...</button>
                <span class="badge badge-primary mb-1" v-if="isRefresh">Обновление...</span>
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
</template>

<script>
    export default {
        name: "Ajaxcomponent",
        data() {
          return {
              urlData: [],
              isRefresh: false,
              id: 0,
          }
        },
        mounted() {
            console.log('Component mounted.')
            this.update()
        },
        methods: {
            update: function () {
                console.log(this.urlData);
                this.isRefresh = true
                axios.get('/start/get-json').then((response)=>{
                    console.log(response)
                    this.urlData = response.data
                    this.isRefresh = false
                    this.id++
                });
            }
        }
    }
</script>

<style scoped>

</style>

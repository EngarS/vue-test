<template>
    <div class="container">
        <div class="row">
            <div>
                <form class="form-inline">
                    <i class="fas fa-search" aria-hidden="true"></i>
                    <input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Search"
                          aria-label="Search">
                </form>
            </div>
            <div class="col-11">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Created at</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="item in usersList">
                            <td>{{item.id}}</td>
                            <td>{{item.name}}</td>
                            <td>{{item.email}}</td>
                            <td>{{item.created_at}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "UsersList",
        props: [
            'usersList'
        ],


    }
</script>

<style scoped>

</style>

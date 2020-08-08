<template>
    <div>
        <div class="card">
            <div class="card-header">
                {{message[0].subject}}
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">{{message[0].content}}</li>
            </ul>
        </div>
    </div>
</template>

<style>

</style>
<script>

export default {
    props : ['message'],
    name: "DetailComponent",
}
</script>

<template>
    <div class="news">
        <h1>Latest News</h1>
        <ul>
            <li v-for="(item, index) in news" :key="index">
                <strong>{{ item.title }}</strong><br>
                <small>{{ item.description }}</small>
            </li>
        </ul>
    </div>
</template>

<script setup>
import { ref, onMounted } from 'vue'
import HTTP from '../http'

const news = ref([])

onMounted(async () => {
    try {
        const res = await HTTP.get('http://127.0.0.1:8000/api/news')
        news.value = res.data
    } catch (err) {
        console.error(err)
    }
})
</script>

<style scoped>
.news {
    font-family: Arial, sans-serif;
}
</style>

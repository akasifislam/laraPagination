<template>
  <layout title="Users">
    <div class="container">
      <h1>Pagination</h1>
      <table class="table border w-full">
        <thead>
          <tr>
            <th class="border p-3">ID</th>
            <th class="border p-3">Name</th>
            <th class="border p-3">Email</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="user in users.data" :key="user.id">
            <td class="border p-3">{{ user.id }}</td>
            <td class="border p-3">{{ user.name }}</td>
            <td class="border p-3">{{ user.email }}</td>
          </tr>
        </tbody>
      </table>

      <pagination class="mt-6" :links="users.links" />
    </div>
  </layout>
</template>
  
<script>
import Pagination from "@/Components/Pagination";

export default {
  components: {
    Pagination,
  },
  props: {
    users: Object,
  },
};
</script>
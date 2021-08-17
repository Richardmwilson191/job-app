<template>
  <dashboard>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Manage Users
      </h2>
    </template>
    <div>
      <div class="max-w-6xl mx-auto py-10 sm:px-6 lg:px-8">
        <div class="block mb-8">
          <inertia-link
            :href="route('categories.create')"
            class="
              bg-green-500
              hover:bg-green-700
              text-white
              font-bold
              py-2
              px-4
              rounded
            "
            >Add User
          </inertia-link>
        </div>
        <div class="flex flex-col">
          <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div
              class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8"
            >
              <div
                class="
                  shadow
                  overflow-hidden
                  border-b border-gray-200
                  sm:rounded-lg
                "
              >
                <table class="min-w-full divide-y divide-gray-200 w-full">
                  <thead>
                    <tr>
                      <th
                        scope="col"
                        width="50"
                        class="
                          px-6
                          py-3
                          bg-gray-50
                          text-left text-xs
                          font-medium
                          text-gray-500
                          uppercase
                          tracking-wider
                        "
                      >
                        ID
                      </th>
                      <th
                        scope="col"
                        class="
                          px-6
                          py-3
                          bg-gray-50
                          text-left text-xs
                          font-medium
                          text-gray-500
                          uppercase
                          tracking-wider
                        "
                      >
                        Category
                      </th>
                      <th
                        scope="col"
                        class="
                          px-6
                          py-3
                          bg-gray-50
                          text-left text-xs
                          font-medium
                          text-gray-500
                          uppercase
                          tracking-wider
                        "
                      >
                        Options
                      </th>
                    </tr>
                  </thead>
                  <tbody v-for="category in categories" :key="category.id">
                    <tr>
                      <td
                        class="
                          px-6
                          py-4
                          whitespace-nowrap
                          text-sm text-gray-900
                        "
                      >
                        {{ category.id }}
                      </td>
                      <td
                        class="
                          px-6
                          py-4
                          whitespace-nowrap
                          text-sm text-gray-900
                        "
                      >
                        {{ category.category }}
                      </td>
                      <td>
                        <inertia-link
                          :href="route('users.edit', category.id)"
                          class="
                            text-indigo-600
                            hover:text-indigo-900
                            mb-2
                            mr-2
                          "
                          >Edit
                        </inertia-link>
                        <!-- <form
                          class="inline-block"
                          @submit.prevent="submit"
                          method="POST"
                        >
                          <input type="hidden" name="_method" value="DELETE" />
                          <input
                            type="hidden"
                            name="_token"
                            value="{{ csrf_token() }}"
                          />
                          <input
                            type="submit"
                            class="text-red-600 hover:text-red-900 mb-2 mr-2"
                            value="Delete"
                          />
                        </form> -->
                        <button @click="deleteRecord(category)">Delete</button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </dashboard>
</template>

<script>
import Dashboard from "@/Pages/Admin/Dashboard"

export default {
  components: { Dashboard },
  name: "Categories",
  props: {
    categories: Object,
  },
  methods: {
    deleteRecord(category) {
      category._method = "DELETE"
      this.$inertia.post("/categories/" + category.id, category)
    },
  },
}
</script>
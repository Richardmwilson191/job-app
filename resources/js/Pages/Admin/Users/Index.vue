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
            :href="route('users.create')"
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
                        Name
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
                        Email
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
                        Email Verified At
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
                        Roles
                      </th>
                      <th
                        scope="col"
                        width="200"
                        class="px-6 py-3 bg-gray-50"
                      ></th>
                    </tr>
                  </thead>
                  <tbody
                    v-for="user in users"
                    :key="user.id"
                    class="bg-white divide-y divide-gray-200"
                  >
                    <tr>
                      <td
                        class="
                          px-6
                          py-4
                          whitespace-nowrap
                          text-sm text-gray-900
                        "
                      >
                        {{ user.id }}
                      </td>

                      <td
                        class="
                          px-6
                          py-4
                          whitespace-nowrap
                          text-sm text-gray-900
                        "
                      >
                        {{ user.name }}
                      </td>

                      <td
                        class="
                          px-6
                          py-4
                          whitespace-nowrap
                          text-sm text-gray-900
                        "
                      >
                        {{ user.email }}
                      </td>

                      <td
                        class="
                          px-6
                          py-4
                          whitespace-nowrap
                          text-sm text-gray-900
                        "
                      >
                        {{ user.email_verified_at }}
                      </td>

                      <td
                        v-for="role in user.roles"
                        :key="role.title"
                        class="
                          px-6
                          py-4
                          whitespace-nowrap
                          text-sm text-gray-900
                        "
                      >
                        <span
                          class="
                            px-2
                            inline-flex
                            text-xs
                            leading-5
                            font-semibold
                            rounded-full
                            bg-green-100
                            text-green-800
                          "
                        >
                          {{ role.title }}
                        </span>
                      </td>

                      <td
                        class="px-6 py-4 whitespace-nowrap text-sm font-medium"
                      >
                        <inertia-link
                          :href="route('users.show', user.id)"
                          class="text-blue-600 hover:text-blue-900 mb-2 mr-2"
                          >View
                        </inertia-link>
                        <inertia-link
                          :href="route('users.edit', user.id)"
                          class="
                            text-indigo-600
                            hover:text-indigo-900
                            mb-2
                            mr-2
                          "
                          >Edit
                        </inertia-link>
                        <form
                          class="inline-block"
                          action="#"
                          method="POST"
                          onsubmit="return confirm('Are you sure?');"
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
                        </form>
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
  name: "Users",
  props: {
    users: Object,
  },
}
</script>
<template>
  <dashboard>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Create new user
      </h2>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
          <div>
            <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
              <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="post" @submit.prevent="submit">
                  <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 bg-white sm:p-6">
                      <label
                        for="name"
                        class="block font-medium text-sm text-gray-700"
                        >Name</label
                      >
                      <input
                        type="text"
                        name="name"
                        id="name"
                        class="
                          form-input
                          rounded-md
                          shadow-sm
                          mt-1
                          block
                          w-full
                        "
                        v-model="form.name"
                      />
                      <p v-if="form.errors.name" class="text-sm text-red-600">
                        {{ form.errors.name }}
                      </p>
                    </div>

                    <div class="px-4 py-5 bg-white sm:p-6">
                      <label
                        for="email"
                        class="block font-medium text-sm text-gray-700"
                        >Email</label
                      >
                      <input
                        type="email"
                        name="email"
                        id="email"
                        class="
                          form-input
                          rounded-md
                          shadow-sm
                          mt-1
                          block
                          w-full
                        "
                        v-model="form.email"
                      />
                      <p v-if="form.errors.email" class="text-sm text-red-600">
                        {{ form.errors.email }}
                      </p>
                    </div>

                    <div class="px-4 py-5 bg-white sm:p-6">
                      <label
                        for="password"
                        class="block font-medium text-sm text-gray-700"
                        >Password</label
                      >
                      <input
                        type="password"
                        name="password"
                        id="password"
                        class="
                          form-input
                          rounded-md
                          shadow-sm
                          mt-1
                          block
                          w-full
                        "
                        v-model="form.password"
                      />
                      <p
                        v-if="form.errors.password"
                        class="text-sm text-red-600"
                      >
                        {{ form.errors.password }}
                      </p>
                    </div>

                    <div class="px-4 py-5 bg-white sm:p-6">
                      <label
                        for="roles"
                        class="block font-medium text-sm text-gray-700"
                        >Role</label
                      >
                      <select
                        name="roles[]"
                        id="roles"
                        class="
                          form-multiselect
                          block
                          rounded-md
                          shadow-sm
                          mt-1
                          block
                          w-full
                        "
                        v-model="form.role"
                      >
                        <option
                          v-for="(role, index) in roles"
                          :key="index"
                          :value="role"
                        >
                          {{ role }}
                        </option>
                      </select>
                      <p v-if="form.errors.role" class="text-sm text-red-600">
                        {{ form.errors.role }}
                      </p>
                    </div>

                    <div
                      class="
                        flex
                        items-center
                        justify-end
                        px-4
                        py-3
                        bg-gray-50
                        text-right
                        sm:px-6
                      "
                    >
                      <button
                        class="
                          inline-flex
                          items-center
                          px-4
                          py-2
                          bg-gray-800
                          border border-transparent
                          rounded-md
                          font-semibold
                          text-xs text-white
                          uppercase
                          tracking-widest
                          hover:bg-gray-700
                          active:bg-gray-900
                          focus:outline-none
                          focus:border-gray-900
                          focus:shadow-outline-gray
                          disabled:opacity-25
                          transition
                          ease-in-out
                          duration-150
                        "
                      >
                        Create
                      </button>
                    </div>
                  </div>
                </form>
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
  components: {
    Dashboard,
  },
  name: "roles",
  props: {
    roles: Object,
  },
  data() {
    return {
      form: this.$inertia.form({
        username: "",
        email: "",
        password: "",
        role: "",
      }),
    }
  },
  methods: {
    submit() {
      this.$inertia.post("/users", this.form)
    },
  },
}
</script>
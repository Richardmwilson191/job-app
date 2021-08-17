<template>
  <app-layout>
    <div class="flex bg-grey-400 min-h-screen">
      <!--Sidebar-->
      <aside
        id="sidebar"
        class="
          flex-initial
          bg-side-nav bg-blue-600
          w-1/2
          md:w-1/6
          lg:w-1/6
          border-r border-side-nav
          hidden
          md:block
          lg:block
        "
      >
        <ul class="list-reset flex flex-col text-gray-200">
          <li class="font-semibold text-xl text-gray-100 leading-tight p-4">
            <span>Admin Panel</span>
          </li>
          <li
            class="
              w-full
              h-full
              py-3
              px-4
              border-b border-t border-light-border
            "
          >
            <a
              href="/"
              class="
                font-sans font-hairline
                hover:font-normal
                text-sm text-nav-item
                no-underline
              "
            >
              <i class="fas fa-tachometer-alt float-left mx-2"></i>
              Dashboard
              <span><i class="fas fa-angle-right float-right"></i></span>
            </a>
          </li>
          <li class="w-full h-full py-3 px-4">
            <a
              :href="route('users.index')"
              class="
                font-sans font-hairline
                hover:font-normal
                text-sm text-nav-item
                no-underline
              "
            >
              <i class="far fa-file float-left mx-2"></i>
              Manage Users
            </a>
          </li>
          <li class="w-full h-full py-3 px-4">
            <a
              :href="route('categories.index')"
              class="
                font-sans font-hairline
                hover:font-normal
                text-sm text-nav-item
                no-underline
              "
            >
              <i class="far fa-file float-left mx-2"></i>
              Job Category
            </a>
          </li>
          <li class="w-full h-full py-3 px-4">
            <a
              :href="route('users.index')"
              class="
                font-sans font-hairline
                hover:font-normal
                text-sm text-nav-item
                no-underline
              "
            >
              <i class="far fa-file float-left mx-2"></i>
              Skills
            </a>
          </li>
        </ul>
      </aside>
      <!--/Sidebar-->

      <!--Main-->
      <div class="flex flex-col flex-1">
        <header
          class="
            flex-initial
            bg-blue-600
            w-1/2
            lg:w-full
            md:w-5/6
            float-right
            shadow
            p-4
            border-l border-none
          "
        >
          <h2
            class="
              font-semibold
              text-xl text-gray-100
              leading-tight
              text-center
            "
          >
            Manage Users
          </h2>
        </header>
        <div class="bg-white-300 flex-1 p-3 overflow-hidden">
          <slot></slot>
        </div>
      </div>
      <!--/Main-->
    </div>
  </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout"
export default {
  data() {
    return {
      showMenu: true,
    }
  },
  props: [],
  components: {
    AppLayout,
  },
  methods: {
    toggle() {
      this.showMenu = !this.showMenu
    },
  },
}
</script>

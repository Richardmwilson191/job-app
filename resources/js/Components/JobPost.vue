<template>
  <div id="job_container" class="flex py-4 bg-blue-100 mb-4 rounded shadow-lg">
    <div id="logo" class="px-4">
      <img
        src="https://image.shutterstock.com/z/stock-vector-vector-logo-on-which-an-abstract-image-of-a-drop-of-water-which-is-also-similar-to-a-leaf-of-a-tree-1529647433.jpg"
        alt=""
      />
    </div>
    <div id="job_headers" class="flex-1">
      <p>{{ jobPost.title }}</p>
      <p>title</p>
    </div>
    <div id="skills" class="flex-1">
      <span>php</span>
    </div>
    <div id="apply" class="px-4">
      <button
        class="px-4 py-2 bg-green-600 rounded-md text-white hover:bg-green-400"
      >
        Apply
      </button>
    </div>
  </div>
</template>

<script>
export default {
  name: "JobPost",
  props: {
    jobPost: Object,
  },
}
</script>

<style scoped>
#logo img {
  width: 50px;
}
</style>
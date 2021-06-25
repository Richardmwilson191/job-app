<template>
  <div id="job-post-form">
    <h1>Job Post</h1>
    <form @submit.prevent="addJobPost">
      <label for="title">Job Post Title <span class="req">*</span></label>
      <input
        type="text"
        v-model="jobpost.title"
        name="title"
        id="title"
        placeholder="Job Post Title"
        required
      />
      <label for="job_type">Job Type <span class="req">*</span></label>
      <select v-model="jobpost.jobtype" name="job_type" id="job_type">
        <option
          v-for="(option, index) in jobpost.options"
          :key="index"
          :value="option.value"
        >
          {{ option.text }}
        </option>
      </select>
      <label for="description"
        >Job Post Description <span class="req">*</span></label
      >
      <textarea
        v-model="jobpost.description"
        name="description"
        id="description"
        cols="30"
        rows="10"
        required
      ></textarea>
      <h2>Job location</h2>
      <label for="country">Country <span class="req">*</span></label>
      <input
        type="text"
        v-model="jobpost.country"
        name="country"
        id="country"
        placeholder="Country"
        required
      />
      <label for="city">City <span class="req">*</span></label>
      <input
        type="text"
        v-model="jobpost.city"
        name="city"
        id="city"
        placeholder="City name"
        required
      />
      <label for="state">State <span class="req">*</span></label>
      <input
        type="text"
        v-model="jobpost.state"
        name="state"
        id="state"
        placeholder="state name"
        required
      />
      <label for="street">Street Address <span class="req">*</span></label>
      <input
        type="text"
        v-model="jobpost.street"
        name="street"
        id="street"
        placeholder="Enter street address"
        required
      />
      <Button />
    </form>
  </div>
</template>

<script>
import Button from "@/Jetstream/Button"

export default {
  components: {
    Button,
  },
  data() {
    return {
      jobpost: this.$inertia.form({
        title: "",
        jobtype: "accountant",
        options: [
          { text: "Accountant", value: "accounting" },
          { text: "Management", value: "management" },
          { text: "Teacher", value: "teacher" },
          { text: "Developer", value: "developer" },
        ],
        description: "",
        country: "",
        city: "",
        state: "",
        street: "",
      }),
    }
  },
  methods: {
    addJobPost() {
      this.$inertia.post("/jobs", this.jobpost)
      console.log("test")
    },
  },
}
</script>

<style>
form {
  max-width: 420px;
  margin: 30px auto;
  background: white;
  text-align: left;
  padding: 40px;
  border-radius: 10px;
}
label {
  color: #aaa;
  display: inline-block;
  margin: 25px 0 15px;
  font-size: 0.6em;
  text-transform: uppercase;
  letter-spacing: 1px;
  font-weight: bold;
}
select,
input {
  display: block;
  padding: 10px 6px;
  width: 100%;
  box-sizing: border-box;
  border: none;
  border-bottom: 1px solid #ddd;
  color: #555;
}
.req {
  color: red;
}
</style>
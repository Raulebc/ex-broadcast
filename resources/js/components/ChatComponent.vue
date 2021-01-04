<template>
  <div class="flex justify-center h-full overflow-auto w-full pt-2">
    <div class="flex flex-col items-center w-full gap-2">
      <div class="flex flex-row w-11/12 items-center">
        <message></message>
      </div>
    </div>
  </div>
</template>

<script>
import Message from "./MessageComponent.vue";

export default {
  components: {
    Message,
  },
  data() {
    return {
      messages: [],
    };
  },
  created() {
    this.getComments();
  },
  methods: {
    getComments() {
      console.log("asfdds");
      axios.get("/chat/1").then((response) => {
        this.messages = response.data.messages;
      });
    },
  },
};
</script>
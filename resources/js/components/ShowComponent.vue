<template>
   <div class="toggle-tab-wrap">
      <!-- Tabs -->
      <ul class="user-tabs">
         <li :class="{ active: isActive }">
            <a href @click.prevent="postsActive()"
               ><i class="fas fa-paper-plane -tab"></i>投稿</a
            >
         </li>
         <li :class="{ active: !isActive }">
            <a href @click.prevent="likesActive()"
               ><i class="fas fa-heart -tab"></i>いいね</a
            >
         </li>
      </ul>

      <keep-alive>
         <component
            :is="currentTabComponent"
            :path="path"
            :posts="posts"
            :likes="likes"
            :class="'lists-border-radius'"
         ></component>
      </keep-alive>
   </div>
</template>

<script>
import PostTab from "./PostTabComponent";
import LikeTab from "./LikeTabComponent";

export default {
   props: ["user", "posts", "likes", "path"],
   data() {
      return {
         isActive: true,
         currentTabComponent: "PostTab"
      };
   },
   components: {
      PostTab,
      LikeTab
   },
   methods: {
      postsActive(e) {
         this.isActive = true;
         this.currentTabComponent = "PostTab";
      },
      likesActive(e) {
         this.isActive = false;
         this.currentTabComponent = "LikeTab";
      }
   }
};
</script>

<style scoped></style>

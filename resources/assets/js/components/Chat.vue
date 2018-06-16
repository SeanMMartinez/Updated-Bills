<style scoped>
    .chat-right{
        float: right;
        margin-top: 5px;
    }
    .chat-left{
        float: left;
        margin-top: 5px;
    }
    .d-flex{
        flex-direction: column;
    }
</style>
<template>
    <div>
        <li class="d-flex justify-content-between mb-4" v-if="chats.length !== 0">
            <div class="chat" v-for="chat in chats">
                <div class="chat-body white p-3 ml-2 z-depth-1 chat-right" v-if="chat.User_Id === userid">
                    <div class="header">
                        <small class="pull-right text-muted"><i class="fa fa-clock-o"></i>{{ moment(chat.Message_TimeSent).fromNow() }}</small>
                    </div>
                    <hr class="w-100">
                    <p class="mb-0">
                        {{ chat.Message_Text }}
                    </p>
                </div>
                <div class="chat-body white p-3 ml-2 z-depth-1 chat-left" v-else-if="chat.User_Id === friendid">
                    <div class="header">
                        <small class="pull-right text-muted"><i class="fa fa-clock-o"></i>{{ moment(chat.Message_TimeSent).fromNow() }}</small>
                    </div>
                    <hr class="w-100">
                    <p class="mb-0">
                        {{ chat.Message_Text }}
                    </p>
                </div>
            </div>
        </li>
        <li class="d-flex justify-content-between mb-4" v-else>
            <p class="mb-0">
                There are no messages.
            </p>
        </li>
        <chat-form v-bind:userid="userid" v-bind:chats="chats"
        v-bind:friendid="friendid"></chat-form>
    </div>
</template>

<script>
    var moment = require('moment');
    export default {
        props: ['chats', 'userid', 'friendid'],
        mounted() {
            console.log('Component mounted.')
        },
        data(){
            return {
                moment: moment
            }
        }
    }
</script>

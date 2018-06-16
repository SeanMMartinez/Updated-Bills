<template>
    <div>
        <li class="white">
            <div class="form-group basic-textarea">
                <input type="text" class="form-control pl-2 my-0" id="exampleFormControlTextarea2" rows="3" placeholder="Type your message here..."
                       v-on:keyup.enter="sendChat" v-model="Message_Text">
            </div>
        </li>
        <button type="button" class="btn btn-info btn-rounded btn-sm waves-effect waves-light float-right"
                v-on:click="sendChat">Send</button>
    </div>
</template>

<script>
    export default {
        props:['chats', 'userid', 'friendid'],
        data(){
            return{
                Message_Text: ''
            }
        },
        methods: {
            sendChat: function(e){
                    if(this.Message_Text !== ''){
                        var data = {
                            Message_Text: this.Message_Text,
                            Friend_Id: this.friendid,
                            User_Id: this.userid
                        }
                        this.Message_Text = '';

                        axios.post('/chat/sendChat', data)
                            .then((response) => {
                                this.chats.push(data)
                            })
                    }
            }
        }
    }
</script>

<style scoped>

</style>
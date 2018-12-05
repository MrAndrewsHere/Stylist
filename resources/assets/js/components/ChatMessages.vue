<template>
    <ul class="sc-message-list" id = "panel_body_id">
        <li class="left clearfix" v-for="message in messages">
            <div class="chat-body clearfix">
                <div class="header">
                    <strong class="primary-font">
                        {{ message.user.name }}
                    </strong>
                </div>
                <p style="  word-wrap: break-word;">
                    {{ message.message }}
                </p>
            </div>
        </li>
    </ul>
</template>

<script>
    export default {
        props: ['messages','user'],
    };

</script>
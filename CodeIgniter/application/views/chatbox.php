<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="chat-heading">Chat Window</h1>
            <div class="chatbox">   
                <ul class="chatbox-listing">
                </ul>
                <div class="chatarea">
                    <form method="post">
                            <div class="view">
                                <div class="col-80">
                                        <input  name="user_id" class="user-id" value="<?php echo $user_id?>" class="chat-message-text" type="hidden"> 
                                    <input class="form-control" name="message" class="chat-message-text" type="text"> 
                                </div>
                                <div class="col-20">
                                    <input class="btn btn-danger send" type="button" name="send" value="send">
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
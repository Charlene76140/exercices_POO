<?php
    require "Chat.php";
    require "ChatManager.php";
    
    $chatManager = new ChatManager();

    if(!empty($_POST) AND isset($_POST["addChat"])){
        $chat = new Chat($_POST);
        $chatManager->addChat($chat);
    }

    $chats = $chatManager->getChats();
    // var_dump($chats);

    require "chatView.php";
?>
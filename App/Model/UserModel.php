<?php

namespace App\Model;

use Core\Database;

class UserModel extends Database
{

    function mailExist($mail)
    {
        $reqmail = $this->query("SELECT * FROM user WHERE email = '$mail'", true);
        return ($reqmail);
    }

    function insertUser($pseudo, $mail, $motdepasse)
    {
        $this->prepare("INSERT INTO user(pseudo, email, motdepasse) VALUES('$pseudo', '$mail', '$motdepasse')");
    }

    function existMember($mailConnect, $mdpConnect)
    {
        $requser = $this->query("SELECT * FROM user WHERE email = '$mailConnect' AND motdepasse = '$mdpConnect'");
        return ($requser);
    }

    function searchUser($pseudo)
    {
        $user = $this->query("SELECT * FROM user WHERE pseudo ='$pseudo'");
        return $user;
    }

    function listFriends($id)
    {
        $friends = $this->query("SELECT * FROM `user_friends` INNER JOIN user ON user.id = friend_id OR user.id = user_id WHERE user_id = '$id' OR friend_id = '$id'");
        return ($friends);
    }

    function addFriend($id, $friend_id, $bool)
    {
        $this->prepare("INSERT INTO user_friends(user_id, friend_id, isFriend) VALUES('$id', '$friend_id', '$bool')");
    }

    function isFriend($id, $friend_id)
    {
        $ami = $this->query("SELECT * FROM user_friends WHERE user_id ='$id' AND friend_id='$friend_id' OR user_id ='$friend_id' AND friend_id='$id'");
        return $ami;
    }

    function newpseudo($newpseudo, $sessionID)
    {
        $insertpseudo = $this->query("UPDATE user SET pseudo = '$newpseudo' WHERE id='$sessionID'");
        return ($insertpseudo);
    }
    function newmail($newmail, $sessionID)
    {
        $insertmail = $this->query("UPDATE user SET email = '$newmail' WHERE id='$sessionID'");
        return ($insertmail);
    }
    function newmdp($newmdp, $sessionID)
    {
        $insertmdp = $this->query("UPDATE user SET motdepasse = '$newmdp' WHERE id='$sessionID'");
        return ($insertmdp);
    }
    function getUser($id)
    {
        $user = $this->query("SELECT * FROM user WHERE id='$id'");
        return ($user);
    }

    function removeFriend($user_id, $friend_id)
    {
        $this->prepare("DELETE FROM user_friends WHERE user_id='$user_id' AND friend_id='$friend_id' OR user_id ='$friend_id' AND friend_id='$user_id'");
    }

    function sendMessage($user_id, $friend_id, $content)
    {
        $this->prepare("INSERT INTO user_chat(user_id, friend_id, content, writtedBy) VALUES('$user_id', '$friend_id', '$content', '$user_id')");
    }

    function getMessages($user_id, $friend_id)
    {
        $messages = $this->query("SELECT * FROM `user_chat` INNER JOIN user ON user.id = friend_id OR user.id = user_id WHERE user_id = '$user_id' AND friend_id = '$friend_id' OR user_id = '$friend_id' AND friend_id = '$user_id'");
        return $messages;
    }
}

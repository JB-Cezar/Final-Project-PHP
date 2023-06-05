<?php

class ProfilePage{

    public static function navProfile(){
        $ht = '<nav class="profile-nav">
        <img src="https://cdn-icons-png.flaticon.com/512/3658/3658388.png" alt="profile-logo">
        <article>
            <p>location</p>
            <i class="fa-regular fa-circle-user"></i>
        </article>
        </nav>';
        return $ht;
    }

    public static function profile(){
        $ht = '
        <div class="profile">
        <div class="profile-options">
            <article>
                <img src="./img/328503072_699077365045368_5332669083217987917_n.png" alt="profiel-pic">
                <aside>
                    <h5>My Profile</h5>
                    <h3>Chefsaurio</h3>
                </aside>
            </article>
            <section>
                <i class="fa-solid fa-gear"></i>
                <p>Settings</p>
            </section>
        </div>
        <div class="profile-settings">
            
        </div>
        </div>
        ';
        return $ht;
    }
}
<?php

class ProfilePage{

    public static function navProfile(){
        $ht = '
        <nav class="profile-nav">
            <div>
                <img src="https://cdn-icons-png.flaticon.com/512/3658/3658388.png" alt="profile-logo">
                <article>
                    <p>location</p>
                    <i class="fa-regular fa-circle-user"></i>
                </article>
            </div>
        </nav>';
        return $ht;
    }

    public static function profile(){
        $ht = '
        <div class="profile">
            <div>
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
            <div class="profile-settings">';
                $ht .= self::info();
                $ht .='</div>
            </div>
        </div>
        ';
        return $ht;
    }

    public static function info(){
        $ht = '
        <form action="'.$_SERVER["PHP_SELF"].'" method="POST" class="persInfo" enctype="multipart/form-data">
            <h3>Account Information</h3>
            <div class="info-1">
                <aside>
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name">
                </aside>
                <aside>
                    <label for="address">Address</label>
                    <input type="text" name="address" id="address">
                </aside>
                <aside>
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email">
                </aside>
                <aside>
                    <label for="phone">Phone</label>
                    <input type="tel" id="phone" name="phone">
                </aside>
                <aside>
                    <label for="password">Password</label>
                    <input type="text" name="password" id="password">
                </aside>
                <aside>
                    <label for="profilePic">Profile Pic</label>
                    <input type="file" name="profilePic" id="profilePic">
                </aside>
            </div>
            <div class="info-2">
                <h4>Gender</h4>
                <section>
                    <input type="radio" name="gender" id="male" value="male">
                    <label for="male">Male</label>
                    <input type="radio" name="gender" id="female" value="female">
                    <label for="female">Female</label>
                    <input type="radio" name="gender" id="other" value="other">
                    <label for="other">Other</label>
                </section>
            </div>
            <div class="info-3">
                <input type="submit" name="submit" value="Update Information">
                <a href="signIn.php?logged=out">Sign Out</a>
            </div>
        </form>
        ';
        return $ht;
    }
}
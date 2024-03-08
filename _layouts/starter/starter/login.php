<main>
    <div class="container mt5">
        <div class="row">
            <div class="col s8 offset-s2">
                <div class="card card-login">
                    <div class="card-content">
                        <span class="card-title">Starter</span>
                        <p>Sign in to starter account to continue</p>
                        <?php echo $this->renderWidget('core::message'); ?>
                        <form action="<?php echo $this->link_login; ?>" method="POST">
                            <div class="input-field">
                                <input id="username" name="username" type="text" required class="validate">
                                <label for="username" class="">Username</label>
                            </div>
                            <div class="input-field">
                                <input id="password" name="password" type="password" required class="validate">
                                <label for="password">Password</label>
                            </div>
                            <br><br>
                            <div>
                                <input class="btn right" type="submit" value="Log In">
                                <a href="#!" class="btn-flat"></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
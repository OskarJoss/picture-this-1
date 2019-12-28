<?php require __DIR__ . '/views/header.php'; ?>
<?php require __DIR__ . '/app/users/read.php'; ?>

<article>
    <h1>
        <?php
        echo $_SESSION['profile']['name'];
        ?>
    </h1>

    <img src="<?php echo $_SESSION['profile']['avatar']; ?>" alt="<?php echo $_SESSION['profile']['name']; ?>'s profile avatar picture">

    <!-- <form action="app/users/update.php" method="post"> -->
    <div class="form-group">
        <!-- <label for="name">Name</label>
            <input class="form-control" type="text" name="name" maxlength="255" placeholder="Best Person" value="
                <?php
                // if (isset($_SESSION['registering']['name'])) {
                //     echo $_SESSION['registering']['name'];
                //     unset($_SESSION['registering']['name']);
                // }
                ?>" required>
            <small class="form-text text-muted">Please provide your name. <br>(This will be visable to other users.)</small> -->
    </div><!-- /form-group -->

    <div class="form-group">
        <!-- <label for="email">Email</label>
            <input class="form-control" type="text" name="email" maxlength="255" placeholder="your@email.here" value="
            <?php
            // if (isset($_SESSION['registering']['email'])) {
            //     echo $_SESSION['registering']['email'];
            //     unset($_SESSION['registering']['email']);
            // }
            ?>" required>
            <small class="form-text text-muted">Please provide your email address.</small> -->
    </div><!-- /form-group -->

    <div class="form-group">
        <!-- <label for="password">Password</label>
            <input class="form-control" type="password" name="password" minlength="4" maxlength="255" value="
            <?php
            // if (isset($_SESSION['registering']['password'])) {
            //     echo $_SESSION['registering']['password'];
            //     unset($_SESSION['registering']['password']);
            // }
            ?>" required>
            <small class="form-text text-muted">Please enter your password (passphrase). <br>Must be 4 characters or longer.</small> -->
    </div><!-- /form-group -->
    <div class="form-group">
        <!-- <label for="password-confirm">Confirm Password</label>
            <input class="form-control" type="password" name="password-confirm" minlength="4" maxlength="255" value="
            <?php
            // if (isset($_SESSION['registering']['passwordConfirm'])) {
            //     echo $_SESSION['registering']['passwordConfirm'];
            //     unset($_SESSION['registering']['passwordConfirm']);
            // }
            ?>" required>
            <small class="form-text text-muted">Please enter the same as above to confirm your password (passphrase).</small> -->
    </div><!-- /form-group -->

    <!-- <button type="submit" class="btn btn-primary">Save</button> -->
    <!-- </form> -->
    <?php showErrors(); ?>
</article>

<?php require __DIR__ . '/views/footer.php'; ?>
<!-- The first include should be config.php -->
<?php require_once('config.php') ?>
<?php require_once(ROOT_PATH . '/includes/public_functions.php') ?>
<?php require_once( ROOT_PATH . '/includes/registration_login.php') ?>
<!-- Retrieve all posts from database  -->
<?php $posts = getPublishedPosts(); ?>
<link rel="stylesheet" href="static/css/style.css">
<link rel="shortcut icon" href="/static/images/Reading Book Logo.jpeg" type="image/x-icon">
<?php require_once(ROOT_PATH . '/includes/head_section.php') ?>
<title>BrightLens | News </title>
</head>
<body>
    <!-- Navbar -->
    <?php include('includes/navbar.php'); ?>
    <!-- // Navbar -->

    <?php foreach ($posts as $post): ?>
    <div class="post" style="margin-left: 0;">
        <img src="<?php echo BASE_URL . '/static/images/' . $post['image']; ?>" class="post_image" alt="Post Image">
        
        <?php if (isset($post['topic']['name'])): ?>
            <a href="<?php echo BASE_URL . 'filtered_posts.php?topic=' . $post['topic']['id'] ?>" class="btn category">
                <?php echo $post['topic']['name'] ?>
            </a>
        <?php endif ?>

        <a href="single_post.php?post-slug=<?php echo $post['slug']; ?>">
            <div class="post_info">
                <h3><?php echo $post['title'] ?></h3>
                <div class="info">
                    <span><?php echo date("F j, Y ", strtotime($post["created_at"])); ?></span>
                    <span class="read_more">Read more...</span>
                </div>
            </div>
        </a>
    </div>
<?php endforeach ?>
    <!-- Footer -->
    <?php include('includes/footer.php'); ?>
    <!-- // Footer -->
</body>
</html>
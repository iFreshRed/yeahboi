
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($pageTitle ?? 'HelpHive', ENT_QUOTES, 'UTF-8'); ?></title>

    <link rel="stylesheet" href="frontend/assets/css/global.css">
    <?php if (!empty($pageStylesheet)): ?>
    <link rel="stylesheet" href="<?php echo htmlspecialchars($pageStylesheet, ENT_QUOTES, 'UTF-8'); ?>">
    <?php endif; ?>

</head>
<body>

<header class="site-header">
    <a class="site-brand" href="index.php" aria-label="HelpHive home">
        <img src="frontend/assets/images/helphive_logo.png" alt="HelpHive">
        <span class="site-wordmark"><span>Help</span><span>Hive</span></span>
    </a>

    <nav aria-label="Main navigation">
        <a href="index.php"<?php echo ($pageSection ?? '') === 'home' ? ' aria-current="page"' : ''; ?>>Home</a>
        <a href="index.php?page=search"<?php echo ($pageSection ?? '') === 'search' ? ' aria-current="page"' : ''; ?>>Search Opportunities</a>
        <a href="index.php?page=organization-register"<?php echo ($pageKey ?? '') === 'organization-register' ? ' aria-current="page"' : ''; ?>>Register Organization</a>
    </nav>

    <div class="site-auth-links">
        <a href="#login-modal" id="open-login">Log In</a>
        <a class="signup-link" href="#signup-panel">Sign Up</a>
    </div>
</header>

<?php include 'frontend/pages/auth/login.php'; ?>
























<?php
// This file helps Vercel detect this as a PHP project
// All requests are handled by api/index.php
header('Location: /api/index.php', true, 301);
exit();

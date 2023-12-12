#!/bin/zsh

export APP_ENV=prod
php pages/index.php > dist/index.html
php pages/projects.php > dist/projects.html

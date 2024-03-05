#!/bin/zsh

function setup_composer() {
    if ! command -v composer &>/dev/null; then
        echo "Installing Composer..."
        php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
        php composer-setup.php --install-dir=/usr/local/bin --filename=composer
        rm composer-setup.php
        composer --version
        echo "Composer installed successfully."
    else
        echo "Composer is already installed. Skipping installation."
    fi
}

# setup_composer

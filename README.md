## Laravel 8 Complete Blog
🎮 My Gaming Blog

Welcome to <b>Game</b> Quiz, the best gaming blog out there! This is a space where I share my thoughts, reviews, and insights about the latest video games, industry trends, and gaming culture. Whether it's deep dives into game mechanics, personal experiences, or news updates, you'll find engaging content for gamers of all kinds.
🔥 What to Expect

   • Honest game reviews 🎭

   • News and updates on the gaming industry 📰

   • Tips, tricks, and guides 🕹️

   • Personal experiences and opinions 🎙️

Stay tuned for exciting content, and feel free to share your thoughts in the comments! 🚀

•	Author: Dmytro Bokov <br>

## Requirements
•	PHP 7.3 or higher <br>
•	Node 12.13.0 or higher <br>

## Usage <br>
Setting up your development environment on your local machine: <br>
```
git clone git@github.com:codewithdary/laravel-8-complete-blog.git
cd laravel-8-complete-blog
cp .env.example .env
composer install
php artisan key:generate
php artisan cache:clear && php artisan config:clear
php artisan serve
```

# Setting up mailhog: <br>
•	Linux
```
brew install mailhog
```

•	MacOS
```
wget https://github.com/mailhog/MailHog/releases/download/v1.0.1/MailHog_linux_amd64
chmod +x MailHog_linux_amd64
sudo mv MailHog_linux_amd64 /usr/local/bin/mailhog
```

# Run Mailhog:
```
mailhog
```

## Before starting <br>
# Create a database <br>
```
mysql
create database laravelblog;
exit;
```

# Setup your database credentials in the .env file <br>
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravelblog
DB_USERNAME={USERNAME}
DB_PASSWORD={PASSWORD}
```

# Setup your contact credentials for "contact us" form in the .env file <br>
```
MAIL_MAILER=stmp
MAIL_HOST=localhost
MAIL_PORT=1025
MAIL_USERNAME={USERNAME}
MAIL_PASSWORD={PASSWORD}
MAIL_ECNRYPTION=null
MAIL_FROM_ADDRESS={EMAIL}
MAIL_FROM_NAME="GameQuest"
```

# Migrate the tables
```
php artisan migrate
```

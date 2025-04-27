# Array Game

**Array Game** is a minimalist incremental (clicker) game built for simplicity and fun. The goal is simple: click to grow your array's value and compete for the highest score!

## Features

- 🖱️ **Click to increment** the value of your array
- 👤 **User registration** to save progress and compete globally
- ⚙️ **Upgrade system** with 4 perks to boost your clicking power
- 🏆 **Global leaderboard** to see how you rank among all players

## Gameplay

After registering, you can start clicking immediately. Every click increases your array's value. As your value grows, you’ll unlock perks in the **Upgrades** section to improve your efficiency and boost your clicks even further.

### Perks

Each perk provides a different advantage to maximize your progress. Strategically choose how to spend your points to climb the ranks faster.

### Leaderboard

Curious about how others are doing? Check out the **Leaderboard** to view top players and their array scores in real time.

## Setup
```bash
git clone https://github.com/raven-dusky/blackbox-chatroom.git
cd blackbox
composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan migrate:fresh --seed

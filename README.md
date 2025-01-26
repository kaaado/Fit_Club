# FitClub Gym Website

## Description
FitClub is a gym management website designed to help users access fitness-related resources, track progress, and manage memberships. It includes user authentication, exercise plans, and database integration.


## Tech Stack
- HTML
- CSS
- JavaScript
- PHP
- MySQL 

## Features
- User authentication (login & registration)
- Fitness exercise plans (gain/loss programs)
- Dashboard management
- Database integration with MySQL
- Secure password storage

## Installation & Setup
### Prerequisites
- PHP 8+
- MySQL/MariaDB
- Apache (XAMPP/LAMP/WAMP recommended)

### Steps
1. Clone the repository:
   \`\`\`sh
   git clone https://github.com/kaaado/Fit_Club.git
   cd Fit_Club
   \`\`\`
2. Import the database:
   - Open \`phpMyAdmin\`
   - Create a new database \`gym\`
   - Import \`gym.sql\`
3. Configure the database connection in \`db.php\`:
   \`\`\`php
   $conn = new mysqli('localhost', 'root', '', 'gym');
   \`\`\`
4. Start a local server:
   - If using XAMPP, start Apache & MySQL
   - Place the project in the \`htdocs\` folder
   - Access via \`http://localhost/gym\`

## Contribution
Feel free to contribute by submitting pull requests or reporting issues.

## License
(Define if applicable, e.g., MIT)" > README.md

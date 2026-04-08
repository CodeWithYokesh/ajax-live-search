# AJAX-Based Data Fetching System

## Objective
To create a web application that fetches student data from MySQL using PHP and displays results using AJAX without reloading the page.

## Features
- Fetch data from MySQL database
- Display records dynamically using AJAX
- Live search by student name or course
- No page reload required

## Files
- `db.php` - Database connection
- `index.php` - Main page with search box
- `fetch.php` - Fetches matching data from database using AJAX

## Database
Database name: `ajax_db`  
Table name: `students`

## How It Works
1. User opens the page
2. All student records are displayed
3. User types in the search box
4. Matching data is fetched from MySQL using AJAX
5. Results appear instantly without page reload

## Run Instructions
1. Place folder inside `htdocs`
2. Start Apache and MySQL
3. Create database and table in phpMyAdmin
4. Open in browser:

   http://localhost/10-ajax-live-search/index.php

## Sample Search
- Search `CSE`
- Search `Yokesh`

## Output
- All records displayed initially
- Filtered records shown as user types
- No page refresh

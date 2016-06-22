# Ag Data Works Survey
This project is for the Ag Data Works team at [Hutson Inc](https://hutsoninc.com). This is a survey tool that allows for specials to recieve specialist to receive feed back on a scale from 1 to 10.

### Setting up your database
Login to phpMyAdmmin and create a new database with a table call 'responses'. Create columns for timestamp called time and 5 int for the five questions. These will be named quesiton_one, question_two, question_three, question_four, and question_five

### Setting up connect.php
This file will allow you to connect to mySQL. Change username, password, and database name to match your credientals.

### Results
Your results will be displayed on the /results page. 
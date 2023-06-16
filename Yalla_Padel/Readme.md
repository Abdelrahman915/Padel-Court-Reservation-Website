# Padel Court Reservation Website

This project is a Padel court reservation website that allows users to book courts for their desired time slots. It is built using PHP in the backend and utilizes an SQL database for data storage and retrieval.

## Features

The website provides the following features for users:

1. Signup:
   - Users can create a new account by providing their details, such as name and phone number.
   - The signup process ensures the uniqueness of phone numbers for each user.

2. Login and Password Change:
   - Users can securely log into their accounts using their phone numbers and passwords.
   - A password change functionality is available for users to update their passwords when needed.

3. Court Booking:
   - Users can select their preferred date and time slot to book a Padel court.
   - The system checks the availability of courts for the chosen time slot and allows users to book an available court.
   - Users receive a confirmation message after successfully booking a court.

4. View and Delete Bookings:
   - Users can view their booked courts along with the corresponding date and time.
   - Users have the option to delete their bookings if they no longer require a specific court.

Additionally, the website offers the following feature for the admin:

1. Earnings Tracking:
   - The admin can access a dashboard to view the earnings generated from court bookings.
   - The dashboard provides insights into the revenue generated over a given time period.

## Technologies Used

The project incorporates the following technologies:

- Backend Language: PHP
- Database: SQL
- Frontend: HTML, CSS, JavaScript
- User Authentication: Secure login and password change functionality
- Database Operations: PHP used to query the SQL database
- User Interface: HTML and CSS for a user-friendly experience

## Setup Instructions

To set up the Padel court reservation website locally, follow these steps:
1. Clone the repository to your local machine.
2. Set up a web server (e.g., Apache, Nginx) and configure it to run PHP.
3. Create a SQL database and import the provided SQL file to set up the required tables and initial data.
4. Update the database connection details in the PHP files to match your local environment.
5. Open the website in your preferred web browser.



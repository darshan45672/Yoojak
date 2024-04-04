<p align="center">
    <h1 align ="center"> <b> Yoojak </b> </h1>
</p>

## About Yoojak

Yoojak is a placement management software designed to streamline the process of connecting college students with job opportunities. With Yoojak, students can easily browse and apply for available placements, while placement officer can efficiently manage job postings and applications. The platform facilitates seamless communication between students and placement officer, helping to bridge the gap between education and employment. Yoojak aims to simplify the placement process, empower students in their career pursuits, and assist the placement cell in finding the best talent for the recruiting organizations.

## Introduction

Yoojak is a comprehensive placement management software tailored for educational institutions seeking to optimize their job placement processes. In today's competitive job market, students often face challenges in finding suitable employment opportunities upon graduation, while the placement cell struggle to efficiently identify and engage with talented candidates. Yoojak aims to bridge this gap by offering a user-friendly platform that facilitates seamless communication and collaboration between students and the placement cell for recruiters.

- ### Problem Statement

The traditional methods of job placement within educational institutions often involve manual processes, such as bulletin boards, emails, and physical job fairs. These methods can be cumbersome, time-consuming, and inefficient for both students and placement cell. Students may miss out on valuable opportunities due to lack of awareness or difficulty in accessing relevant information, while recruiters may struggle to reach their target audience effectively. Yoojak addresses these challenges by providing a centralized digital platform that simplifies the job placement process for all stakeholders involved.

- ### Solution

Yoojak offers a range of features designed to streamline the job placement process. For students, the platform provides a user-friendly interface where they can easily search and apply for available job opportunities, upload their resumes, and track their application statuses. Placement cell, on the other hand, benefit from tools that allow them to post job openings, manage applications, and communicate with prospective candidates efficiently. Yoojak also facilitates networking and collaboration among students, alumni, and industry professionals, creating a vibrant ecosystem for career development.

- ### Target Auidience

Yoojak caters to a diverse audience, including students, alumni, recruiters, and educational institution. Students and alumni benefit from access to a wide range of job opportunities across various industries, while placement cell gain access to a pool of talented candidates from the educational institution. Educational institution themselves can leverage Yoojak to enhance their placement services, improve student outcomes, and strengthen industry partnerships.

- ### Goals and Achievements

The primary goal of Yoojak is to revolutionize the job placement experience for students and recruiters alike. By leveraging technology and innovation, Yoojak aims to make the job placement process more transparent, efficient, and equitable for all stakeholders. Notable achievements of the project include positive feedback from users, and strategic partnerships with leading companies in various sectors.

## Features

- <b>User Authentication:</b> Secure user authentication system to ensure only authorized individuals can access the platform.

- <b>Student Dashboard: </b> Personalized dashboard for students to browse job opportunities, track application statuses, and manage their profiles.

- <b>Recruiter Portal:</b>  Dedicated portal for recruiters to post job openings, review applications, and communicate with candidates.

- <b>Job Search and Filtering:</b> Advanced search and filtering capabilities for students to find relevant job opportunities based on criteria such as industry, location, and job role.

- <b>Application Management:</b> Streamlined application management system for recruiters to efficiently review, shortlist, and schedule interviews with candidates.

- <b>Resume Upload and Parsing:</b> Ability for students to upload their resumes and for recruiters to parse and analyze resume data to identify qualified candidates.

- <b>Messaging and Notifications:</b> Integrated messaging system for seamless communication between students and recruiters, along with notifications for important updates and events.

- <b>Analytics and Reporting:</b> Insights and analytics tools for educational institutions and recruiters to track placement metrics, monitor student outcomes, and make data-driven decisions.

- <b> Mobile Compatibility:</b> Responsive design and mobile compatibility to ensure access to the platform from any device, providing convenience and flexibility for users on the go.

- <b> Collaborative Networking:</b> Networking features to facilitate collaboration and networking among students, alumni, industry professionals, and educational institutions.

- <b>Customization and Integration: </b> Customizable features and integration options to tailor the platform to the unique needs of different educational institutions and recruitment processes.

- <b>Support and Documentation: </b> Comprehensive documentation and user support resources to assist users in navigating the platform and maximizing its benefits.

## Installation

<u><b>Prerequisites:</b></u>
- <b>PHP</b>: Version 8.2 or higher
- <b>Composer</b>: Dependency manager for PHP
- <b>Node.js and npm </b>: For managing front-end dependencies.

1. <b>Clone the Repository:</b> <br>Open your terminal and run the following command to clone the Yoojak repository from GitHub:
    ```
    git clone https://github.com/darshan45672/Yoojak.git
    ```
2. <b>Navigate to the Project Directory:</b> <br> Change into the project directory:
    ```
    cd Yoojak
    ```
3. Install Composer Dependencies: Run the following command to install the PHP dependencies using Composer:
   ```
   composer install
   composer update
   ```
5. Generate Environment File: Make a copy of the .env.example file and save it as .env. You can do this by running:
   ```
   cp .env.example .env
   ```
7. Generate Application Key: Generate a new application key using the following command:
   ```
   php artisan key:generate
   ```
9. Run Migrations and Seeders: Run database migrations and seeders to set up the database:
    ```
    php artisan migrate --seed
    ```
11. Install and Compile Frontend Dependencies: If your project has frontend dependencies managed by npm, run the following command:
    ```
    npm install
    npm run build
    ```
13. Run the Development Server: Finally, start the Laravel development server:
    ```
    php artisan serve
    npm run dev
    ```

Once the server is running, you can access the Yoojak application by visiting ``` http://localhost:8000 ``` in your web browser.

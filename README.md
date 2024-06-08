# Laravel Project

## Overview

This Laravel project implements a system to manage users, projects, and timesheets with proper relationships and authentication. The application supports CRUD operations and filtering for each model.

## Features

- **User Management**: Users can be created, read, updated, and deleted. Users have attributes such as first name, last name, date of birth, gender, email, and password.
- **Project Management**: Projects can be created, read, updated, and deleted. Projects have attributes such as name, department, start date, end date, and status.
- **Timesheet Management**: Timesheets can be created, read, updated, and deleted. Timesheets have attributes such as task name, date, and hours.
- **Relationships**: Users can be assigned to multiple projects, and each project can have multiple users. Timesheets are linked to both users and projects.
- **Filtering**: Endpoints support filtering by specific fields using the "AND" operation.
- **Authentication**: Endpoints are protected by authentication, requiring users to register, login, and logout.

## API Endpoints

### User Endpoints

- **Create User Form**: `GET /user/create`
- **Create User**: `POST /user`
- **Read All Users**: `GET /user`
- **Read User Details**: `GET /user/{user}/details`
- **Edit User Form**: `GET /user/{user}/edit`
- **Update User**: `POST /user/{user}/update`
- **Delete User**: `POST /user/{user}/delete`

### Project Endpoints

- **Create Project Form**: `GET /project/create`
- **Create Project**: `POST /project`
- **Read All Projects**: `GET /project`
- **Read Project Details**: `GET /project/{project}/details`
- **Edit Project Form**: `GET /project/{project}/edit`
- **Update Project**: `POST /project/{project}/update`
- **Delete Project**: `POST /project/{project}/delete`
- **Assign Project to User**: `POST /projects/{project}/assign`

### Timesheet Endpoints

- **Create Timesheet Form**: `GET /timesheet/create`
- **Create Timesheet**: `POST /timesheet`
- **Read All Timesheets**: `GET /timesheet`
- **Read Timesheet Details**: `GET /timesheet/{timesheet}/details`
- **Edit Timesheet Form**: `GET /timesheet/{timesheet}/edit`
- **Update Timesheet**: `POST /timesheet/{timesheet}/update`
- **Delete Timesheet**: `POST /timesheet/{timesheet}/delete`

### Authentication Endpoints

- **Login Form**: `GET /login`
- **Login**: `POST /login`
- **Logout**: `POST /logout`

### Home Endpoint

- **Home**: `GET /home`

## Database File

- The SQL dump file is located at database/dumps/database_dump.sql.

## Signed up user Credentials (after setting up the DB using DB dump file, you can login using following users)

### User 1:
- **email**: johnsmith@gmail.com
- **password**: 123456

### User 2:
- **email**: ayeshakhalid@gmail.com
- **password**: 123456

## Screenshots

![create_user](https://github.com/ayesha-khalid89/Task-Laravel/assets/159626121/fe91f78d-5002-458c-989c-04cb4fba7adf)
![login](https://github.com/ayesha-khalid89/Task-Laravel/assets/159626121/967abb30-802d-42ef-8fea-a1f806a0ebc7)
![home](https://github.com/ayesha-khalid89/Task-Laravel/assets/159626121/98a14ebd-37c6-49c4-9ea9-fa9c31a2df24)
![user](https://github.com/ayesha-khalid89/Task-Laravel/assets/159626121/3eabe76e-566f-4f80-9a0a-b5b653a43739)
![user_filter](https://github.com/ayesha-khalid89/Task-Laravel/assets/159626121/6caf7d15-bd85-4613-b307-0b4239080996)
![user_details](https://github.com/ayesha-khalid89/Task-Laravel/assets/159626121/3de90fa1-c77d-44d1-a4c2-8c69fc55d6e7)
![user_edit](https://github.com/ayesha-khalid89/Task-Laravel/assets/159626121/cba2333d-caed-4d27-8805-0217009b1de7)
![projects](https://github.com/ayesha-khalid89/Task-Laravel/assets/159626121/b7f6ac2b-5292-4c3e-96c1-adbce845fe02)
![project_details](https://github.com/ayesha-khalid89/Task-Laravel/assets/159626121/88d965cc-22e9-4b32-b122-adc9b11d4cf9)
![timesheet](https://github.com/ayesha-khalid89/Task-Laravel/assets/159626121/0b299c30-aa18-4f18-96b8-b35fc246de7b)
![timesheet_details](https://github.com/ayesha-khalid89/Task-Laravel/assets/159626121/b8946bdb-f358-4caf-97f8-cb3036f83461)
![Database_relations](https://github.com/ayesha-khalid89/Task-Laravel/assets/159626121/28686685-7c3a-479a-8fca-3816fe8db412)


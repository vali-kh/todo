
## Laravel CRUD API Project 

**A simple CRUD project with Authentication and Authorization.**


# Project API Documantation

## Overview

This project has a simple API for performing CURD operations using the laravel freamework.

## Getting Started
### Authentication
How to obtain api key:
- Register to website
- Login with your credentials
- click `api_token` in menu than you can get your api token to interact with api

## API Endpoints

### Create a New Project
- **URL:** `/api/projects`
- **Method:** `POST`
- **Parameters:**
    - `name` (string, required)
    - `description` (string, required)
    - `api_token` (string, required)
- **Successful Response:**

        {
            "data": {
                "id": 43,
                "name": "testName",
                "description": "testDescription"
            }
        }
      
### Edit Project
- **URL:** `/api/projects/{project-id}`
- **Method:** `PATCH`
- **Parameters:**
    - `project-id` (UNSIGNED BIGINT, required)
    - `name` (string, required)
    - `description` (text, required)
    - `api_token` (string, required)
- **Successful Response:**

        {
            "data": {
                "id": 43,
                "name": "updated name",
                "description": "updated description"
            },
            "message": "project updated"
        }

### Get One Project
- **URL:** `/api/projects/{project-id}`
- **Method:** `GET`
- **Parameters:**
    - `project-id` (UNSIGNED BIGINT, required)
    - `api_token` (string, required)
      
- **Successful Response:**

        {
            "data": {
                "id": 43,
                "name": "project name",
                "description": "project description"
            }
        }

### Delete a Project
- **URL:** `/api/projects/{project-id}`
- **Method:** `DELETE`
- **Parameters:**
    - `project-id` (UNSIGNED BIGINT, required)
    - `api_token` (string, required)
      
- **Successful Response:**

        {
            "data": {
                "id": 43,
                "name": "project name",
                "description": "project description"
            },
            "message": "project deleted"
        }


### Get All Project
- **URL:** `/api/projects`
- **Method:** `GET`
- **Parameters:**    
    - `api_token` (string, required)
      
- **Successful Response:**

        {
            "data": [
                {
                    "id": 40,
                    "name": "Fist",
                    "description": "Fist description"
                },
                {
                    "id": 41,
                    "name": "Second",
                    "description": "Second description"
                },
                {
                    "id": 42,
                    "name": "api",
                    "description": "api description"
                }
            ]
        }


### Get User
- **URL:** `/api/user`
- **Method:** `GET`
- **Parameters:**
    - `api_token` (string, required)
      
- **Successful Response:**

        {
            "id": 10,
            "name": "user_name",
            "email": "user_email",
            "email_verified_at": null,
            "created_at": "2024-08-16 07:03:07",
            "updated_at": "2024-08-16 07:03:07"
        }
  
Visit link below to see an online todo project:

  [ToDoProject](http://abc-theme.ir).

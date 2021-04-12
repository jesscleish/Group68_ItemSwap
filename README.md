# SOFE 2720U Item Swap Website
# Group 68: Daniel Gohara Kamel, Jessica Leishman

To do:
- [ ] Add Diagrams to:
- [x] Requirements
- [x] Use Cases
- [x] Design

To Create:
- [x] Architectural model/diagram + explanation

## Project Description (Vision and Scope)
The project made in SOFE 2800U by this group was an item swapping/bartering web application. This readme outlines the prelimary and process actions taken by the team during the development of this website.  The users of this web application can create listings for items they wish to sell/trade away, and view listings of items avaiable for swap created by other users.

Users are able to create an account to make a profile and create listings for an item.  They are able to browse and search other listings and make offers on those listings. Offers can include items and money.  The listing must have picture uploaded by the user, requested offers (items/money or both), and a description of the item.  The listing page will also includes a link to the posting user’s profile.

The web application uses a mySQL database, HTML, CSS, JavaScript and PHP to provide a visually-focused and easy user experience.  The customer accesses phpMyAdmin to view a comprehensive overview of the website's users, 


### Stakeholders
The four stakeholders identified in this project are as follows:
- Facilitator (Development Team Leader)
- Customer (Website Owner)
- Development team
- End users who will be using the website to sell, barter, and swap items.

An outline of each of these roles and their responsibilites can be found in the [Stakeholder Roles pdf](linkhere).

### Product Assumptions and Constraints
Assumptions:
- The user has a working internet connection, and has the relevant website files on their machine (no web hosting integrated).
- The relevant databases required (see dbImport file for sample setup) are on either the local machine, or the remote database has been confirgured in [Database Configuration](#database-configuration).
- The user has a browser capable of supporting HTML, CSS, JavaScript, and PHP

Constraints:
- Users must create an account on the website to access anything further than the home page.
- Several users cannot have the same username

---
## How to Run the Web Application


### Database Configuration
Create a file called `php.ini` akin to the following:

```ini
[db_config]
ip = "server ip"
user = "username"
password = "password"
database = "database name"

```

`dbConnection.php` reads the ini file and connects to the database with those credentials

Then, one can either i8mport [these sample listings and users](linkhere) into the database, or create their own to test functionality.

---
## Table of Contents
### Overview
- [Project Description](linkhere)

### Main Folder
- [x] Project Description README
- [x] Table of Contents
- [ ] Team Assessment report - > todo on google docs

### Code
- [Main Code Folder](linkhere)
- [Components](linkhere)
- [Style](linkhere)

### Design
- [x] Class Diagram
- [x] Architectural Design
- [x] Navigation Component Diagram
- [x] Login Component Diagranm
- [x] Behavioural Models
- [x] UI Sketches prototype
- [x] Login Page Prototype
- [ ] Design Report - readme

### Requirements
- [x] Requirements list
- [x] Requirements Diagram
- [x] Jamboard/user stories
- [] Requirements Report -readme

### Use Cases
- [x] Diagrams
- [x] Descriptions
- [ ] Use Cases Report -readme

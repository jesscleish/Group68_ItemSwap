# SOFE 2720U Item Swap Website
# Group 68: Daniel Gohara Kamel, Jessica Leishman
LINKS NEEDED:
- [ ] dbImport

## Project Description (Vision and Scope)
The project made in SOFE 2800U by this group was an item swapping/bartering web application. This readme outlines the prelimary and process actions taken by the team during the development of this website.  The users of this web application can create listings for items they wish to sell/trade away, and view listings of items avaiable for swap created by other users.

Users are able to create an account to make a profile and create listings for an item.  They are able to browse and search other listings and make offers on those listings. Offers can include items and money.  The listing must have picture uploaded by the user, requested offers (items/money or both), and a description of the item.  The listing page will also includes a link to the posting user’s profile.

The web application uses a mySQL database, HTML, CSS, JavaScript and PHP to provide a visually-focused and easy user experience.  The customer accesses phpMyAdmin to view a comprehensive overview of the website's users, listings, and offers.


### Stakeholders
The four stakeholders identified in this project are as follows:
- Facilitator (Development Team Leader)
- Customer (Website Owner)
- Development team
- End users who will be using the website to sell, barter, and swap items.

### Product Assumptions and Constraints
Assumptions:
- The user has a working internet connection, and has the relevant website files on their machine (no web hosting integrated).
- The relevant databases required (see [dbImport file](linkhere) for sample setup) are on either the local machine, or the remote database has been confirgured in [Database Configuration](#database-configuration).
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

Then, one can either import [these sample listings and users](linkhere) into the database, or create their own to test functionality. <-TO DO

---
## Table of Contents
### Overview
- [Project Description](#project-description-vision-and-scope)

### Main Folder
- [Project Overview Readme (this document)](https://github.com/SOFE2720/Group68_ItemSwap/blob/main/README.md)
- [Team Assessment Report](https://github.com/SOFE2720/Group68_ItemSwap/blob/main/Group%2068%20Team%20Assessment%20Report.pdf)

### Code
- [Main Code Folder](https://github.com/SOFE2720/Group68_ItemSwap/tree/main/Code)
- [Components](https://github.com/SOFE2720/Group68_ItemSwap/tree/main/Code/components)
- [Style](https://github.com/SOFE2720/Group68_ItemSwap/tree/main/Code/style)

### Design
- [Design Report (readme)](https://github.com/SOFE2720/Group68_ItemSwap/blob/main/Design/README.md)
- [Class Diagram](https://github.com/SOFE2720/Group68_ItemSwap/blob/main/Design/Group%2068%20Class%20Diagram.pdf)
- [State Diagram](https://github.com/SOFE2720/Group68_ItemSwap/blob/main/Design/Website%20Flow%20State%20Diagram.pdf)
- [Architectural Design Folder](https://github.com/SOFE2720/Group68_ItemSwap/tree/main/Design/Architectural%20Design)
    - [Architectural Design Readme](https://github.com/SOFE2720/Group68_ItemSwap/blob/main/Design/Architectural%20Design/README.md)
    - [Data-Centered Layered Architecture diagram](https://github.com/SOFE2720/Group68_ItemSwap/blob/main/Design/Architectural%20Design/Group%2068%20Data-Centered_Layered%20Architecture%20Diagram.pdf)
- [Component Diagrams Folder](https://github.com/SOFE2720/Group68_ItemSwap/tree/main/Design/Component%20Diagrams)
    - [Login Component](https://github.com/SOFE2720/Group68_ItemSwap/blob/main/Design/Component%20Diagrams/Group%2068%20Login%20Component.pdf)
    - [Main/Navigation Component](https://github.com/SOFE2720/Group68_ItemSwap/blob/main/Design/Component%20Diagrams/Group%2068%20Main-Navigation%20Component.pdf)
- [Sequence Diagrams Folder](https://github.com/SOFE2720/Group68_ItemSwap/tree/main/Design/Sequence%20Diagrams)
    - [System Level Sequence Diagrams Folder](https://github.com/SOFE2720/Group68_ItemSwap/tree/main/Design/Sequence%20Diagrams/System%20Level)
        - [View sent offers](https://github.com/SOFE2720/Group68_ItemSwap/blob/main/Design/Sequence%20Diagrams/System%20Level/Group%2068%20View%20Sent%20offers%20-%20SL.pdf)
        - [View received offers and delete](https://github.com/SOFE2720/Group68_ItemSwap/blob/main/Design/Sequence%20Diagrams/System%20Level/Group%2068%20View%20Received%20offers%20-%20SL.pdf)
        - [Create a listing](https://github.com/SOFE2720/Group68_ItemSwap/blob/main/Design/Sequence%20Diagrams/System%20Level/Group%2068%20Create%20Listing%20-%20SL.pdf)
        - [View a listing and make an offer](https://github.com/SOFE2720/Group68_ItemSwap/blob/main/Design/Sequence%20Diagrams/System%20Level/Group%2068%20View%20Listing_Make%20Offer%20-%20SL.pdf)

    - [Class Level Sequence Diagrams Folder](https://github.com/SOFE2720/Group68_ItemSwap/tree/main/Design/Sequence%20Diagrams/Class%20Level)
        - [View sent offers](https://github.com/SOFE2720/Group68_ItemSwap/blob/main/Design/Sequence%20Diagrams/Class%20Level/Group%2068%20View%20Sent%20Offers%20-%20CL.pdf)
        - [View received offers and delete](https://github.com/SOFE2720/Group68_ItemSwap/blob/main/Design/Sequence%20Diagrams/Class%20Level/Group%2068%20View%20Received%20Offers%20-CL.pdf)
        - [Create a listing](https://github.com/SOFE2720/Group68_ItemSwap/blob/main/Design/Sequence%20Diagrams/Class%20Level/Group%2068%20Create%20Listing%20-%20CL.pdf)
        - [View a listing and make an offer](https://github.com/SOFE2720/Group68_ItemSwap/blob/main/Design/Sequence%20Diagrams/Class%20Level/Group%2068%20View%20Listing_Make%20Offer%20-%20CL.pdf)
- [Protoypes Folder](https://github.com/SOFE2720/Group68_ItemSwap/tree/main/Design/Prototypes)
    - [Login protoype](https://github.com/SOFE2720/Group68_ItemSwap/tree/main/Design/Prototypes/Login%20Page)
    - [User Interface wireframe prototypes](https://github.com/SOFE2720/Group68_ItemSwap/blob/main/Design/Prototypes/Group%2068%20UI%20Wireframe%20Designs.pdf)


### Requirements
- [Requirements Report (readme)](https://github.com/SOFE2720/Group68_ItemSwap/blob/main/Requirements/README.md)
- [List of Requirements](https://github.com/SOFE2720/Group68_ItemSwap/blob/main/Requirements/Group%2068_%20List%20of%20Requirements.pdf)
- [Requirements Model Folder](https://github.com/SOFE2720/Group68_ItemSwap/tree/main/Requirements/Requirements%20Model)
    - [Requirements Diagram Overview](https://github.com/SOFE2720/Group68_ItemSwap/blob/main/Requirements/Requirements%20Model/Group%2068%20Requirement%20Diagram%20-%20Full%20Overview.pdf)
- [Requirements Elicitation with Stakeholders](https://github.com/SOFE2720/Group68_ItemSwap/blob/main/Requirements/Group%2068%20Jamboard%20Requirements%20Elicitation.png)
- [Stakeholder User Stories](https://github.com/SOFE2720/Group68_ItemSwap/blob/main/Requirements/Group%2068%20Jamboard%20User%20Stories.png)

### Use Cases
- [Use Cases Repoort (readme)](https://github.com/SOFE2720/Group68_ItemSwap/blob/main/Use%20Cases/README.md)
- [Comprehensive Use Cases Diagram](https://github.com/SOFE2720/Group68_ItemSwap/blob/main/Use%20Cases/Group%2068%20Comprehensive%20Use%20Case%20Diagram.pdf)
- [Use Case Descriptions](https://github.com/SOFE2720/Group68_ItemSwap/blob/main/Use%20Cases/Group%2068%20Use%20Case%20Descriptions.pdf)
- [Login Use Cases](https://github.com/SOFE2720/Group68_ItemSwap/blob/main/Use%20Cases/Group%2068%20Login%20Use%20cases.pdf)
    - [With requirements](https://github.com/SOFE2720/Group68_ItemSwap/blob/main/Use%20Cases/Group%2068%20Login%20Use%20cases%20with%20requirements.pdf)
- [Operations Use Cases](https://github.com/SOFE2720/Group68_ItemSwap/blob/main/Use%20Cases/Group%2068%20Operations%20Use%20Cases.pdf)
    - [With requirements](https://github.com/SOFE2720/Group68_ItemSwap/blob/main/Use%20Cases/Group%2068%20Operations%20Use%20Cases%20with%20Requirements.pdf)

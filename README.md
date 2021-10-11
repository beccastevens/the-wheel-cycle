# The Wheel Cycle
http://wheelcycle.beccastevens.me

## Local Setup
- Run `docker-compose up -d`
- Navigate to `http://localhost:8080`
- Select "English (United States)" from the list of languages and click the "Continue" button
- Use the following table to fill out the form on the "Welcome" screen in the "Information Needed" section then click the "Install" button

| Information Needed       |            Value |
| ------------------------ | ---------------: |
| Site Title               |  The Wheel Cycle |
| Username                 |            admin |
| Password                 |         password |
| Confirm Password         |          Checked |
| Your Email               |     (Your Email) |
| Search Engine Visibility |          Checked |
- Click the "Login" button on the "Success" screen
- Navigate to `http://localhost:8080/wp-admin` and login with the credentials from installation

## Build Tool Setup
- Navigate to `wp-content/themes/wheel-cycle`
- run `npm install`
- run `npm start`

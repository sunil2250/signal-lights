# signal-lights
The Signal Lights Control project helps manage the order and timing of traffic-style signal lights (A, B, C, D). Users can set the sequence and how long each light stays green or yellow. It uses HTML, CSS, JavaScript (for the interface), and PHP (for the backend). You need XAMPP to run the PHP parts.
#
Overview
The Signal Lights Control project is designed to simulate a system for managing the sequence and timing of signal lights (A, B, C, D) commonly found in traffic or industrial environments. It provides a user interface where users can configure the sequence order and intervals for each signal light.

#live host
https://sunilkanjariya.netlify.app/


#Features
Signal Sequencing: Define the order in which each signal light changes.
Interval Control: Set intervals for green and yellow lights.
Start and Stop Controls: Buttons to initiate and halt the sequence.

#Technologies Used
Frontend: HTML, CSS, JavaScript (AJAX)
Backend: PHP

#Server Requirements: XAMPP server for running PHP scripts.

#Setup Instructions
Clone the repository: git clone https://github.com/sunil2250/signal-lights.git
Install and configure XAMPP:
Download XAMPP from https://www.apachefriends.org/index.html
Install XAMPP and start Apache and MySQL services.
Place the cloned repository in the htdocs directory of your XAMPP installation.
Open index.html in your web browser.

#Usage
Input Configuration: Enter the sequence order (1-4) for each signal light (A, B, C, D) and set green and yellow intervals.
Starting the Sequence: Click Start to begin the sequence with the configured settings.
Stopping the Sequence: Click Stop to halt the sequence at any time.

#How It Works
Frontend (HTML, CSS, JavaScript):
Displays signal lights and input fields for configuration.
Sends data to the backend using AJAX requests for validation and sequence initiation.
Dynamically updates the visual state of signal lights based on user inputs and backend responses.
Backend (PHP):
Receives POST requests from the frontend with JSON data.
Validates sequence orders and intervals to ensure they are within acceptable ranges.
Sends JSON responses back to the frontend to indicate success or failure of the sequence start request.


#Error Handling
Validates user inputs to prevent errors such as invalid sequence orders or non-numeric intervals.
Provides clear feedback to users through alerts or messages if inputs are incorrect or if there are issues starting or stopping the sequence.

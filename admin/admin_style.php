<?php
echo "<style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

.header {
    background-color: #dd6d868e;
    color: #fff;
    padding: 15px;
    text-align: right;
}

.input-group {
    margin-bottom: 20px;
}

label {
    display: block;
    margin-bottom: 5px;
    color: #555;
}

input[type='text'],
input[type='email'],
input[type='number'],
input[type='date'],
input[type='password'] {
    width: 100%;
    padding-top: 10px;
    padding-bottom: 10px;
    padding-left: 1px;
    padding-right: 1px;
    margin-left: 0px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: rgba(255, 255, 255, 0.2);
    /* Transparent background */
    color: #000;
}

.dashboard {
    display: flex;
    justify-content: space-between;
    padding: 20px;
}

.info-container {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(500px, 1fr));
    gap: 20px;
    max-width: 1800px;
    /* Adjust the maximum width as needed */
    margin: 0 auto;
    /* Center the container */
}

.info-panel {
    background-color: #f2f2f29b;
    border: 1px solid #dddddd9b;
    border-radius: 5px;
    padding: 20px;
    margin: 10px;
    flex: 1;
    text-align: left;
}

h2 {
    color: #000000;
}

p {
    color: #000000;
}

.logout-btn {
    background-color: #f44336;
    color: #fff;
    border: none;
    border-radius: 5px;
    padding: 5px 10px;
    cursor: pointer;
}

.logout-btn:hover {
    background-color: #d32f2f;
}

.btn {
    padding: 15px 30px;
    font-size: 20px;
    border: 2px solid transparent;
    /* Set border to transparent */
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s, color 0.3s, border-color 0.3s;
    margin: 10px;
    background-color: transparent;
    /* Set background color to transparent */
    color: #000;
    /* Button text color */
}

.btn-login {
    border-color: #5b3a9a;
    color: #5b3a9a;
    /* Set border color on normal state */
}

.btn-login:hover {
    background-color: #5b3a9a;
    /* Semi-transparent color on hover */
    border-color: #5b3a9a;
    /* Set border color on hover */
    color: #fff;
    /* Text color on hover */
}

.btn-register {
    border-color: #5b3a9a;
    color: #5b3a9a;
    /* Set border color on normal state */
}

.btn-register:hover {
    background-color: #5b3a9a;
    /* Semi-transparent color on hover */
    border-color: #5b3a9a;
    /* Set border color on hover */
    color: #fff;
    /* Text color on hover */
}

a {
    text-decoration: none;
}

.eventm {
    font-size: 40px;
    color: #ffffff;
    font-family: Brush Script MT;
}

.motto {
    font-size: 70px;
    color: #5b3a9a;
    font-family: Brush Script MT;
}

.top-bar {
    background-color: rgba(215, 152, 163, 0.7);
    /* Light pinkish color with 0.7% transparency */
    padding: 10px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.user-info {
    text-align: right;
}

.user-info span {
    margin-right: 10px;
}

h2 {
    font-family: 'Times New Roman';
    color: #5b3a9a;
}
.btn-delete {
    border-color: #FF0000;
    color: #FF0000;
}

.btn-delete:hover {
    background-color: rgba(255, 0, 0, 1);
    border-color: #FF0000;
    color: #fff;
}

#customers {
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 97%;
}

#customers td,
#customers th {
    border: 1px solid #4b2a8a;
    padding: 8px;
}

#customers tr:nth-child(even) {
    background-color: #f2f2f2;
}

#customers tr:hover {
    background-color: #ddd;
}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #5b3a9a;
    color: white;
}

</style>"
?>
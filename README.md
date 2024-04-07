# PG Life Website

## Introduction
Welcome to the PG Life website repository! This website is designed to provide a platform for postgraduate students to explore various resources.
## Getting Started
To run this website locally on your machine using XAMPP, follow these steps:

1. **Download XAMPP**: Download and install XAMPP, a free and open-source cross-platform web server solution stack package.

2. **Setup in XAMPP**:
   - Locate your XAMPP installation directory and navigate to the `htdocs` folder.
   - Create a new folder named `pglife` within the `htdocs` folder.
   - Copy all the contents of this repository into the `pglife` folder you just created.

3. **Database Setup**:
   - Open XAMPP Control Panel and start the Apache and MySQL services.
   - In your web browser, navigate to `http://localhost/phpmyadmin`.
   - Create a new database named `pglife`.
   - Import the provided SQL file `pglife tables.sql` to create all the necessary tables in the `pglife` database.
   - Import the provided dummy data SQL file `dummy_data.sql` to populate the tables with sample data.

4. **Database Connection**:
   - Navigate to the `includes` folder within the `pglife` directory.
   - Open the `database_connect.php` file.
   - Modify the `mysqli_connect` function parameters:
     - Replace `your_password` with your database password (if applicable).
     - Replace `pglife` with your database name (if different).

5. **Accessing the Website**:
   - Open your web browser and navigate to `http://localhost/pglife`.
![Screenshot (80)](https://github.com/darshanm17/PG-LIFE/assets/116059183/15af4f2b-5bae-41e0-aaf1-065df71f8bf7)
![Screenshot (81)](https://github.com/darshanm17/PG-LIFE/assets/116059183/d26f9437-0749-4d99-b262-880ec786f1b5)
![Screenshot (86)](https://github.com/darshanm17/PG-LIFE/assets/116059183/0c58109d-cfbe-4ce5-ac41-b767ba912d78)

## Usage

Once the setup is complete, you can access the PG Life website locally and explore its features.

## Contributing
Contributions are welcome! If you have any suggestions, bug fixes, or improvements, feel free to submit a pull request.

## License
This project is licensed under the [MIT License](LICENSE).

## Contact
If you have any questions or need further assistance, feel free to contact us at [darshanmrd17@gmail.com](mailto:darshanmrd17@gmail.com).

Thank you for using the PG Life website! 🎓✨

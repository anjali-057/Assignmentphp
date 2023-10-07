<!--Sql Table-->
CREATE TABLE orders (
    order_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(15) NOT NULL,
    size ENUM('small', 'medium', 'large') NOT NULL,
    toppings TEXT,
    crust VARCHAR(255) NOT NULL,
    order_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

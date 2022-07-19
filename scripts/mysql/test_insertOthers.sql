INSERT INTO as_Customer
(
    salutation, first_name, middle_initial, last_name, gender,
    email, phone, street, city, region, postal_code,
    date_time, login_name, login_password)
VALUES
(
    'Ms.', 'Alex', '', 'Christopher', 'Female',
    'a.christopher@smu.ca', '902-111-1111',
    '234 Main St.', 'Halifax', 'NS', 'A1B 2C3',
    SYSDATE(), 'alex', 'alex'
);

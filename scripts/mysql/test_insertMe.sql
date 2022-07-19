INSERT INTO my_Customers
(
    salutation, first_name, middle_initial, last_name, gender,
    email, phone, street, city, region, postal_code,
    date_time, login_name, login_password)
VALUES
(
    'Mr.', 'Sudeep', 'R.', 'Badal', 'Male',
    'sudeep.badal@smu.ca', '902-123-4567',
    '123 Main St.', 'Halifax', 'NS', 'A1B 2C3',
    SYSDATE(), 'SRajBadal', 'srajbadal'
);

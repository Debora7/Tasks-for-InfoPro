CREATE TABLE results (
  name varchar,
  weight DOUBLE,
  price DOUBLE,
  price_per_kg decimal(3, 2)
)

INSERT INTO results (name, weight, price)
SELECT (name, weight, price) FROM products;

INSERT INTO results (price_per_kg)
VALUES (price*weight*0.001);

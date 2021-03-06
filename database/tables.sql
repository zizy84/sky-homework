DROP TABLE IF EXISTS sale;
DROP TABLE IF EXISTS property; # idempotent
DROP TABLE IF EXISTS agent; # idempotent

DROP TABLE IF EXISTS customer;
DROP TABLE IF EXISTS listing_type;
DROP TABLE IF EXISTS region;
DROP TABLE IF EXISTS marketeer;


CREATE TABLE listing_type
(
    id   tinyint PRIMARY KEY AUTO_INCREMENT,
    type varchar(20) NOT NULL
);

CREATE TABLE region
(
    id   tinyint PRIMARY KEY AUTO_INCREMENT,
    name varchar(10) NOT NULL
);

CREATE TABLE listing
(
    id              int PRIMARY KEY AUTO_INCREMENT,
    region_id       tinyint     NOT NULL,
    postcode        varchar(10) NOT NULL,
    bedrooms        tinyint     NOT NULL,
    bathrooms       tinyint     NOT NULL,
    listing_type_id tinyint     NOT NULL,
    has_garden      boolean     NOT NULL,
    has_parking     boolean     NOT NULL,
    sold            boolean     NOT NULL,
    asking_price    int         NOT NULL,
    CONSTRAINT `fk_property_type` FOREIGN KEY (listing_type_id) REFERENCES listing_type (id) ON UPDATE CASCADE ON DELETE RESTRICT,
    CONSTRAINT `fk_property_region` FOREIGN KEY (region_id) REFERENCES region (id) ON UPDATE CASCADE ON DELETE RESTRICT
);

CREATE TABLE agent
(
    id               int PRIMARY KEY AUTO_INCREMENT,
    email            varchar(50) NOT NULL,
    password         varchar(50) NOT NULL,
    first_name       varchar(20) NOT NULL,
    last_name        varchar(20) NOT NULL,
    is_administrator boolean     NOT NULL DEFAULT FALSE,
    is_employed      boolean     NOT NULL DEFAULT TRUE,
    salary           int         NOT NULL
);

CREATE TABLE marketeer
(
    id               int PRIMARY KEY AUTO_INCREMENT,
    email            varchar(50) NOT NULL,
    password         varchar(50) NOT NULL,
    first_name       varchar(20) NOT NULL,
    last_name        varchar(20) NOT NULL,
    is_administrator boolean     NOT NULL DEFAULT FALSE,
    is_employed      boolean     NOT NULL DEFAULT TRUE,
    salary           int         NOT NULL
);


CREATE TABLE customer
(
    id         int PRIMARY KEY AUTO_INCREMENT,
    first_name varchar(20) NOT NULL,
    last_name  varchar(20) NOT NULL,
    password   varchar(50) NOT NULL,
    email      varchar(50) NOT NULL,
    mailing_list boolean NOT NULL DEFAULT TRUE
);

CREATE TABLE sale
(
    id          int PRIMARY KEY AUTO_INCREMENT,
    date        date NOT NULL,
    agent_id    int  NOT NULL,
    customer_id int  NOT NULL,
    listing_id  int  NOT NULL,
    price       int  NOT NULL,
    CONSTRAINT `fk_sale_agent` FOREIGN KEY (agent_id) REFERENCES agent (id) ON UPDATE CASCADE ON DELETE RESTRICT,
    CONSTRAINT `fk_sale_customer` FOREIGN KEY (customer_id) REFERENCES customer (id) ON UPDATE CASCADE ON DELETE RESTRICT,
    CONSTRAINT `fk_sale_house` FOREIGN KEY (listing_id) REFERENCES listing (id) ON UPDATE CASCADE ON DELETE RESTRICT
);

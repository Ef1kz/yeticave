INSERT INTO categories set categ_id = "Boards", categ_name ="Доски и лыжи";
INSERT INTO categories set categ_id = "Mountings", categ_name ="Крепления";
INSERT INTO categories set categ_id = "Boots", categ_name ="Ботинки";
INSERT INTO categories set categ_id = "Clothes", categ_name ="Одежда";
INSERT INTO categories set categ_id = "Tools", categ_name ="Инструменты";
INSERT INTO categories set categ_id = "Other", categ_name ="Разное";

INSERT INTO users set user_id = "228", user_name = "Остап", user_email = "Berezka@mail.ru", user_password = "Tatu323232", user_signup_date = "01.03.2021", user_image = "img/user.png", user_contact = "Well done user";
INSERT INTO users set user_id = "322", user_name = "Суета", user_email = "Piccawaka@gmail.com", user_password = "ohotnik123", user_signup_date = "09.03.2021", user_image = "img/user.png", user_contact = "hBiba19smk";
INSERT INTO users set user_id = "777", user_name = "Бибоб", user_email = "Kam1kadze@mail.ru", user_password = "Arrriva678", user_signup_date = "07.02.2021", user_image = "img/user.png", user_contact = "XazbikAUF";

INSERT INTO lots set lot_name = "2014 Rossignol District Snowboard", lot_descr_text = "TEXT1", lot_image = "img/lot-1.jpg", lot_cr_date = "01.03.2021", lot_comp_date = "04.03.2021", lot_start_price = "10999";
INSERT INTO lots set lot_name = "DC Ply Mens 2016/2017 Snowboard", lot_descr_text = "TEXT2", lot_image = "img/lot-2.jpg", lot_cr_date = "01.03.2021", lot_comp_date = "04.03.2021", lot_start_price = "159999";
INSERT INTO lots set lot_name = "Крепления Union Contact Pro 2015 года размер L/XL", lot_descr_text = "TEXT3", lot_image = "img/lot-3.jpg", lot_cr_date = "01.03.2021", lot_comp_date = "04.03.2021", lot_start_price = "8000";
INSERT INTO lots set lot_name = "Ботинки для сноуборда DC Mutiny Charocal", lot_descr_text = "TEXT4", lot_image = "img/lot-4.jpg", lot_cr_date = "01.03.2021", lot_comp_date = "04.03.2021", lot_start_price = "10999";
INSERT INTO lots set lot_name = "Куртка для сноуборда DC Mutiny Charocal", lot_descr_text = "TEXT5", lot_image = "img/lot-5.jpg", lot_cr_date = "01.03.2021", lot_comp_date = "04.03.2021", lot_start_price = "7500";
INSERT INTO lots set lot_name = "Маска Oakley Canopy", lot_descr_text = "TEXT6", lot_image = "img/lot-6.jpg", lot_cr_date = "01.03.2021", lot_comp_date = "04.03.2021", lot_start_price = "5400";

INSERT INTO rate set rate_id = "1", lot_id="1", rate_date = "08.03.2021", rate_prise = "18999";
INSERT INTO rate set rate_id = "2", lot_id="2", rate_date = "12.03.2021", rate_prise = "19999";

SELECT * FROM lots WHERE lot_cr_date > SUBDATE(now(),0);
UPDATE lots SET lots_name = "update lots name" WHERE lot_id="1";
SELECT lot_id FROM rate WHERE rate_date > SUBDATE(now(),0);

CREATE DATABASE `sizes` ( 
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `size` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
    `order` int(11) NOT NULL,
    PRIMARY KEY(`id`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5;

INSERT INTO `sizes`(`id`,`size`,`order`)VALUES(1,'Small',10);
INSERT INTO `sizes`(`id`,`size`,`order`)VALUES(2,'Medium',20);
INSERT INTO `sizes`(`id`,`size`,`order`)VALUES(3,'Large',30);
INSERT INTO `sizes`(`id`,`size`,`order`)VALUES(4,'X-Large',40);

CREATE TABLE `products_sizes` (
    `product_sku` int(11) NOT NULL,
    `size_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `products_sizes` (`product_sku`,`size_id`) VALUES(101, 1);
INSERT INTO `products_sizes` (`product_sku`,`size_id`) VALUES(102, 2);
INSERT INTO `products_sizes` (`product_sku`,`size_id`) VALUES(103, 3);
INSERT INTO `products_sizes` (`product_sku`,`size_id`) VALUES(104, 4);
INSERT INTO `products_sizes` (`product_sku`,`size_id`) VALUES(105, 1);
INSERT INTO `products_sizes` (`product_sku`,`size_id`) VALUES(106, 2);
INSERT INTO `products_sizes` (`product_sku`,`size_id`) VALUES(107, 3);
INSERT INTO `products_sizes` (`product_sku`,`size_id`) VALUES(108, 4);
INSERT INTO `products_sizes` (`product_sku`,`size_id`) VALUES(109, 1);
INSERT INTO `products_sizes` (`product_sku`,`size_id`) VALUES(110, 2);
INSERT INTO `products_sizes` (`product_sku`,`size_id`) VALUES(111, 3);
INSERT INTO `products_sizes` (`product_sku`,`size_id`) VALUES(112, 4);
INSERT INTO `products_sizes` (`product_sku`,`size_id`) VALUES(113, 1);
INSERT INTO `products_sizes` (`product_sku`,`size_id`) VALUES(114, 2);
INSERT INTO `products_sizes` (`product_sku`,`size_id`) VALUES(115, 3);
INSERT INTO `products_sizes` (`product_sku`,`size_id`) VALUES(116, 4);
INSERT INTO `products_sizes` (`product_sku`,`size_id`) VALUES(117, 1);
INSERT INTO `products_sizes` (`product_sku`,`size_id`) VALUES(118, 2);
INSERT INTO `products_sizes` (`product_sku`,`size_id`) VALUES(119, 3);
INSERT INTO `products_sizes` (`product_sku`,`size_id`) VALUES(120, 4);
INSERT INTO `products_sizes` (`product_sku`,`size_id`) VALUES(121, 1);
INSERT INTO `products_sizes` (`product_sku`,`size_id`) VALUES(122, 2);
INSERT INTO `products_sizes` (`product_sku`,`size_id`) VALUES(123, 3);
INSERT INTO `products_sizes` (`product_sku`,`size_id`) VALUES(124, 4);
INSERT INTO `products_sizes` (`product_sku`,`size_id`) VALUES(125, 1);
INSERT INTO `products_sizes` (`product_sku`,`size_id`) VALUES(126, 2);
INSERT INTO `products_sizes` (`product_sku`,`size_id`) VALUES(127, 3);
INSERT INTO `products_sizes` (`product_sku`,`size_id`) VALUES(128, 4);
INSERT INTO `products_sizes` (`product_sku`,`size_id`) VALUES(129, 1);
INSERT INTO `products_sizes` (`product_sku`,`size_id`) VALUES(130, 2);
INSERT INTO `products_sizes` (`product_sku`,`size_id`) VALUES(131, 3);
INSERT INTO `products_sizes` (`product_sku`,`size_id`) VALUES(132, 4);
CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` mediumtext,
  `url` char(255) NOT NULL,
  `news_id` char(128) NOT NULL,
  `status` int(1) DEFAULT '0',
  `source_name` char(11) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS `sources` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(50) DEFAULT NULL,
  `url` char(255) NOT NULL,
  `link_selector` char(50) DEFAULT NULL,
  `content_selector_start` char(50) DEFAULT NULL,
  `content_selector_end` char(50) DEFAULT NULL,
  `title_selector` char(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

INSERT INTO `sources` (`id`, `name`, `url`, `link_selector`, `content_selector_start`, `content_selector_end`, `title_selector`) VALUES
(1, 'rbc.ru', 'https://www.rbc.ru/tags/?tag=%D0%BE%D0%B1%D1%89%D0%B5%D0%BF%D0%B8%D1%82', '/<a href=\"(.*)\" class=\"search-item__link\">/im', 'article__header__title', 'article__authors', '/<span class=\"search-item__title\">(.*)/im');

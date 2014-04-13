DROP TABLE IF EXISTS `field_body`;
CREATE TABLE `field_body` (
  `pages_id` int(10) unsigned NOT NULL,
  `data` mediumtext NOT NULL,
  PRIMARY KEY  (`pages_id`),
  FULLTEXT KEY `data` (`data`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
INSERT INTO `field_body` (`pages_id`, `data`) VALUES (27,'<p>Sorry, but the page you were trying to view does not exist.</p>');
INSERT INTO `field_body` (`pages_id`, `data`) VALUES (1,'<p>Hello world! This is HTML5 Boilerplate for ProcessWire.</p>');

INSERT INTO `field_title` (`pages_id`, `data`) VALUES (1,'Home');

INSERT INTO `fieldgroups` (`id`, `name`) VALUES (1,'home');
INSERT INTO `fieldgroups` (`id`, `name`) VALUES (80,'404');

INSERT INTO `fieldgroups_fields` (`fieldgroups_id`, `fields_id`, `sort`) VALUES (1,1,0);
INSERT INTO `fieldgroups_fields` (`fieldgroups_id`, `fields_id`, `sort`) VALUES (1,76,1);
INSERT INTO `fieldgroups_fields` (`fieldgroups_id`, `fields_id`, `sort`) VALUES (80,1,0);
INSERT INTO `fieldgroups_fields` (`fieldgroups_id`, `fields_id`, `sort`) VALUES (80,76,1);

INSERT INTO `fields` (`id`, `type`, `name`, `flags`, `label`, `data`) VALUES (76,'FieldtypeTextarea','body',0,'Body','{\"inputfieldClass\":\"InputfieldTinyMCE\",\"collapsed\":0,\"rows\":10,\"theme_advanced_buttons1\":\"formatselect,|,bold,italic,|,bullist,numlist,|,link,unlink,|,image,|,code,|,fullscreen\",\"theme_advanced_blockformats\":\"p,h2,h3,h4,blockquote,pre\",\"plugins\":\"inlinepopups,safari,media,paste,fullscreen\",\"valid_elements\":\"@[id|class],a[href|target|name],strong\\/b,em\\/i,br,img[src|id|class|width|height|alt],ul,ol,li,p[class],h2,h3,h4,blockquote,-p,-table[border=0|cellspacing|cellpadding|width|frame|rules|height|align|summary|bgcolor|background|bordercolor],-tr[rowspan|width|height|align|valign|bgcolor|background|bordercolor],tbody,thead,tfoot,#td[colspan|rowspan|width|height|align|valign|bgcolor|background|bordercolor|scope],#th[colspan|rowspan|width|height|align|valign|scope],code,pre\"}');

INSERT INTO `templates` (`id`, `name`, `fieldgroups_id`, `flags`, `cache_time`, `data`) VALUES (1,'home',1,0,0,'{\"useRoles\":1,\"noParents\":1,\"slashUrls\":1,\"roles\":[37]}');
INSERT INTO `templates` (`id`, `name`, `fieldgroups_id`, `flags`, `cache_time`, `data`) VALUES (26,'404',80,0,0,'{\"noChildren\":1,\"noParents\":1,\"slashUrls\":1}');

UPDATE pages SET templates_id=1 WHERE id=1; 
UPDATE pages SET templates_id=26 WHERE id=27; 

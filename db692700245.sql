-- phpMyAdmin SQL Dump
-- version 4.1.14.8
-- http://www.phpmyadmin.net
--
-- Client :  db692700245.db.1and1.com
-- Généré le :  Mer 27 Septembre 2017 à 09:35
-- Version du serveur :  5.5.57-0+deb7u1-log
-- Version de PHP :  5.4.45-0+deb7u11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `db692700245`
--

-- --------------------------------------------------------

--
-- Structure de la table `actudvd`
--

CREATE TABLE IF NOT EXISTS `actudvd` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `support` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `titre` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `image` varchar(400) CHARACTER SET latin1 DEFAULT NULL,
  `distributeur` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trailer` text COLLATE utf8_unicode_ci,
  `synopsis` longtext COLLATE utf8_unicode_ci,
  `realisateur` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `acteur` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Contenu de la table `actudvd`
--

INSERT INTO `actudvd` (`id`, `support`, `titre`, `date`, `image`, `distributeur`, `trailer`, `synopsis`, `realisateur`, `acteur`, `type`) VALUES
(1, 'BLU-RAY, DVD, VOD', 'VAIANA', '2017-03-05', 'http://www.disneynext.fr/Futurs%20DVD/vaianabdfr.png', 'WALT DISNEY', 'https://www.youtube.com/embed/hjdLESdkw0o', 'Il y a trois mille ans, les plus grands marins du monde voyageaient dans le sud du vaste océan Pacifique à la découverte des innombrables îles de l’Océanie. Mais pendant le millénaire qui suivit, leurs voyages cessèrent et personne ne sait pourquoi...', 'John Musker, Ron Clements', 'ANTHONY KAVANAGH, CERISE CALIXTE, MAREVA GALANTER, JEAN-LUC GUIZONNE', 'Animation'),
(2, 'BLU-RAY, DVD, VOD', 'ROGUE ONE: A STAR WARS STORY', '2017-05-15', 'http://www.disneynext.fr/Futurs%20DVD/rogueonebdfr.png', 'LUCAS FILM', 'https://www.youtube.com/embed/BtxEfZdBs-E', 'Situé entre les épisodes III et IV de la saga Star Wars, le film nous entraîne aux côtés d’individus ordinaires qui, pour rester fidèles à leurs valeurs, vont tenter l’impossible au péril de leur vie. Ils n’avaient pas prévu de devenir des héros, mais dans une époque de plus en plus sombre, ils vont devoir dérober les plans de l’Étoile de la Mort.', '', 'FOREST WHITAKER, FELICITY JONES', 'SF, Fantastique'),
(3, 'Blu-ray, DVD, VOD', 'LA BELLE ET LA BÊTE', '2017-08-23', 'http://www.disneynext.fr/Futurs%20DVD/belleb%C3%AAte2017bdfr.png', 'DISNEY', 'https://www.youtube.com/embed/U19PzS6c3os', 'Fin du XVIIIè siècle, dans un petit village français. Belle, jeune fille rêveuse et passionnée de littérature, vit avec son père, un vieil inventeur farfelu. S''étant perdu une nuit dans la fôret, ce dernier se réfugie au château de la Bête, qui le jette au cachot. Ne pouvant supporter de voir son père emprisonné, Belle accepte alors de prendre sa place, ignorant que sous le masque du monstre se cache un Prince Charmant tremblant d''amour pour elle, mais victime d''une terrible malédiction.', '', 'Emma Watson, Dan Stevens, Luke Evans', 'Fantastique'),
(7, 'Blu-Ray, 3D, 4K, DVD, VOD', 'Les Gardiens de la Galaxie Vol. 2', '2017-09-06', 'https://static.fnac-static.com/multimedia/Images/FR/NR/86/ab/7f/8366982/1507-1/tsp20170712141057/Les-Gardiens-de-la-Galaxie-Vol-2-Blu-ray-2D-3D.jpg', 'Walt Disney', 'https://www.youtube.com/embed/e2LkglavLRs', 'Musicalement accompagné de la "Awesome Mixtape n°2" (la musique qu''écoute Star-Lord dans le film), Les Gardiens de la galaxie 2 poursuit les aventures de l''équipe alors qu''elle traverse les confins du cosmos. Les gardiens doivent combattre pour rester unis alors qu''ils découvrent les mystères de la filiation de Peter Quill. Les vieux ennemis vont devenir de nouveaux alliés et des personnages bien connus des fans de comics vont venir aider nos héros et continuer à étendre l''univers Marvel.', '', 'Chris Pratt, Zoe Saldana, Dave Bautista', 'Action, Science fiction, Comédie'),
(8, 'Blu-Ray, DVD, Vod', 'Game of Thrones Saison 7', '2017-12-11', 'https://static.fnac-static.com/multimedia/Images/FR/NR/ae/ab/7f/8367022/1507-1/tsp20170830110250/Game-of-Thrones-Saison-7-Edition-speciale-Fnac-Blu-ray.jpg', 'Warner Home Video', 'https://www.youtube.com/embed/0ZGbSXSl6-U', 'Il y a très longtemps, à une époque oubliée, une force a détruit l''équilibre des saisons. Dans un pays où l''été peut durer plusieurs années et l''hiver toute une vie, des forces sinistres et surnaturelles se pressent aux portes du Royaume des Sept Couronnes. La confrérie de la Garde de Nuit, protégeant le Royaume de toute créature pouvant provenir d''au-delà du Mur protecteur, n''a plus les ressources nécessaires pour assurer la sécurité de tous. Après un été de dix années, un hiver rigoureux s''abat sur le Royaume avec la promesse d''un avenir des plus sombres. Pendant ce temps, complots et rivalités se jouent sur le continent pour s''emparer du Trône de Fer, le symbole du pouvoir absolu.', '', 'David Benioff, Peter Dinklage, Lena Headey, Emilia Clarke', 'Fantastique, peplum'),
(9, 'Blu-ray, DVD, VOD', 'Baby Driver', '2017-11-29', 'https://v5qd0q.bn1302.livefilestore.com/y4mKkTVJ7h2aqG-XVEoSZ9EyAjQ2wjpf3P0ayJ89czTbOQhDU5IG8I8T0M6dCqdmhmDzSlaIieX8o13uq0UGPnlZNuhP-ALYEsIQlJV5JL1JT1AzCE6GcHRdLn3_Dkb_PjCg9owy-c2XYRRapYtYy5zL4zjLRwWbI-Uyjh-NafuvC6vR6G4nU5hUZQC0Iew59OZTjVgo4dOMWbwR4a71xlwjg?width=810&height=1080&cropmode=none', 'Sony Pictures Releasing France', 'https://www.youtube.com/embed/lX5iuGbQcZw', 'Chauffeur pour des braqueurs de banque, Baby a un truc pour être le meilleur dans sa partie : il roule au rythme de sa propre playlist. Lorsqu’il rencontre la fille de ses rêves, Baby cherche à mettre fin à ses activités criminelles pour revenir dans le droit chemin. Mais il est forcé de travailler pour un grand patron du crime et le braquage tourne mal… Désormais, sa liberté, son avenir avec la fille qu’il aime et sa vie sont en jeu.', '', 'Ansel Elgort, Lily James, Kevin Spacey, Jon Bernthal, Eiza Gonzalez Flea, Jon Hamm, Jamie Foxx', 'Action, Policier, Thriller');

-- --------------------------------------------------------

--
-- Structure de la table `animation`
--

CREATE TABLE IF NOT EXISTS `animation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `synopsis` longtext COLLATE utf8_unicode_ci,
  `date` date DEFAULT NULL,
  `realisateur` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `acteur` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(400) CHARACTER SET latin1 DEFAULT NULL,
  `trailer` text CHARACTER SET utf8 COLLATE utf8_bin,
  `distributeur` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=20 ;

--
-- Contenu de la table `animation`
--

INSERT INTO `animation` (`id`, `titre`, `synopsis`, `date`, `realisateur`, `acteur`, `type`, `image`, `trailer`, `distributeur`) VALUES
(11, 'CARS 3', 'Le coureur vétéran Flash McQueen obtient l''aide d''un nouvel entraineur, l''élégante voiture hispanique Cruz Ramirez, afin de rester compétitif face aux nouvelles voitures high-tech qui arrivent sur la course, emmenées par le puissant Jackson Storm.', '2017-08-03', 'Brian Fee', 'GUILLAUME CANET', 'Animation', 'http://www.disneynext.fr/Futurs%20long-m%C3%A9trages%20d''animation/cars3affiche3.jpg', 'https://www.youtube.com/embed/5iEK66MY3gg', 'DISNEY PIXAR'),
(12, 'COCO\r\n', 'Depuis déjà plusieurs générations, la musique est bannie dans la famille de Miguel. Un vrai déchirement pour le jeune garçon dont le rêve ultime est de devenir un musicien aussi accompli que son idole, Ernesto de la Cruz.  Bien décidé à prouver son talent, Miguel, par un étrange concours de circonstances, se retrouve propulsé dans un endroit aussi étonnant que coloré : le Pays des Morts. Là, il se lie d’amitié avec Hector, un gentil garçon mais un peu filou sur les bords. Ensemble, ils vont accomplir un voyage extraordinaire qui leur révèlera la véritable histoire qui se cache derrière celle de la famille de Miguel…', '2017-08-02', '', 'ANTHONY GONZALEZ, BENJAMIN BRATT, GAEL GARCIA BERNAL', 'Animation', 'http://fr.web.img6.acsta.net/r_1920_1080/pictures/17/06/07/09/57/026846.jpg\r\n', 'https://www.youtube.com/embed/avOnZE58wCI', 'DISNEY PIXAR'),
(15, 'Capitaine Superslip', 'Georges Glousse et Harold Golade, deux copains de CM1 à l''imagination fertile, créent une BD qui raconte l''histoire d''un super-héros un peu barré, le Capitaine Superslip ! Un jour, alors que M. Chonchon, leur proviseur hargneux, menace de les séparer en les plaçant dans deux classes différentes, ils l''hypnotisent et le transforment en… Capitaine Superslip !', '2017-10-04', '', 'Loup-Denis Elion, David Kruger, Mark Lesser', 'Animation, Comédie, Aventure', 'http://fr.web.img2.acsta.net/r_1920_1080/pictures/17/07/26/10/49/580251.jpg', 'https://www.youtube.com/embed/WEUIFtZNO-c', '20th Century Fox'),
(16, 'Dans un recoin de ce monde', 'La jeune Suzu quitte Hiroshima en 1944, à l''occasion de son mariage, pour vivre dans la famille de son mari à Kure, un port militaire. La guerre rend le quotidien de plus en plus difficile, malgré cela, la jeune femme cultive la joie et l''art de vivre. Mais en 1945, un bombardement va éprouver son courage.', '2017-09-06', '', 'Rena Nounen, Yoshimasa Hosoya, Minori Omi', 'Animation Japonaise, Drame, Historique', 'https://v5qb0q.bn1302.livefilestore.com/y4m2z2rCwnSenhnSYCVXe1KaZyHhiu6gJWafO_xniEx2PNrwiarlxtw5lctoYONlULIcccj54p192I4yzKKQ4pSUlIW2l8js_fsHCqyCvZ0kKdTa8smt6XG-BvsdPR7d-VWKSiASRFwDfnZ4CTsWovhtfC3lPtCQZwk7RWaTwy9HylmOA9IF2qYo1IKPiby59MM32_OBlfdOSuNM7KE4z2NRQ?width=705&height=1000&cropmode=none', 'https://www.youtube.com/embed/0QXboqjWzFA', 'Septième Factory'),
(17, 'LE MONDE SECRET DES EMOJIS', 'Au sein de l’appli de messagerie, la cité de Textopolis fourmille d’activité : c’est là que vivent tous les émojis, chacun porté par l’espoir d’être choisi par l’utilisateur du téléphone… Dans ce monde, chaque émoji ne possède qu’une seule expression faciale. Seul Bof, un émoji exubérant né sans aucun filtre, dispose de multiples expressions. Rêvant désespérément de devenir « normal », pareil aux autres émojis, Bof demande de l’aide à son meilleur ami, Tope-Là, et à la célèbre casseuse de codes, Rebelle. Tous trois s’embarquent dans une « app-venture » épique d’appli en appli, passant d’un monde fou et amusant à l’autre, à la recherche du code qui accomplira le rêve de Bof. Mais un terrible danger menace bientôt le smartphone. Le destin de tous les émojis repose désormais sur les trois amis. À eux de sauver leur monde avant qu’il ne soit effacé à jamais...', '2017-10-18', '', 'T.J. Miller, James Corden, Anna Faris', 'Animation, Aventure, Comédie', 'https://v5qe0q.bn1302.livefilestore.com/y4mmfqoFP4U6Lp48v6nsc7sS_g5mxv4suTO58t8yR3lQqV6CvKypnNLbjIP696EqtX67U_aKKnkmOh9gkq-1WMC-Mno4HmQGb6au95zIs17hMQ8ESKRLM3wbSxxUP-jPHPAxFzYW6RKZMLle6Eiked4Qj45Cu_6_PgMG_FO9cL0hSim9FJasjUwfRzML078qzDOs39NOvhXzSzIcCVJ3S7Iqw?width=818&height=1080&cropmode=none', 'https://www.youtube.com/embed/GP4ejsTbRC0', 'Sony Pictures Releasing France');

-- --------------------------------------------------------

--
-- Structure de la table `film`
--

CREATE TABLE IF NOT EXISTS `film` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `synopsis` longtext COLLATE utf8_unicode_ci,
  `date` date DEFAULT NULL,
  `realisateur` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `acteur` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(400) CHARACTER SET latin1 DEFAULT NULL,
  `trailer` text CHARACTER SET utf8 COLLATE utf8_bin,
  `distributeur` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=44 ;

--
-- Contenu de la table `film`
--

INSERT INTO `film` (`id`, `titre`, `synopsis`, `date`, `realisateur`, `acteur`, `type`, `image`, `trailer`, `distributeur`) VALUES
(1, 'LA PLANETE DES SINGE : SUPREMATIE', 'Dans ce volet final de la trilogie, César, à la tête des Singes, doit défendre les siens contre une armée humaine prônant leur destruction. L’issue du combat déterminera non seulement le destin de chaque espèce, mais aussi l’avenir de la planète.', '2017-08-02', 'Matt Reeves', 'ANDY SERKIS, WOODY HARRELSON', 'SCIENCE FICTION', 'http://fr.web.img4.acsta.net/r_1920_1080/pictures/17/04/28/09/41/203328.jpg', 'https://www.youtube.com/embed/86xiIr1cyHA', 'WARNER BROS'),
(2, 'STAR WARS VIII: THE LAST JEDI', 'La suite de Star Wars : Le Réveil de la Force.', '2017-12-13', '', 'DAISY RIDLEY, JOHN BOYEGA, MARK HAMILL, CARRIE FISHER, ADAM DRIVER', 'SCIENCE FICTION', 'https://xjqh0q.bn1302.livefilestore.com/y4mOaSR-qavd7l03wUgmf6YhP5lgi95fyKHhAkKqvHguZ3UaaCYgPoREntzkki0OIwwpZDDmIDhpEVeTRppd3EEHCkWU0CLdQZ86Ix37n471HkunQwY_YVhZkMEv8bc6mlZ4PZiSv5VpC4LyyZKQHPUsQYyGSpryUjn3oT9oR3RYg2bg5Tg_97S5q8ewGqZxC5vVStypmQCEp89A7ZvioYHkA?width=1080&height=1920&cropmode=none', 'https://www.youtube.com/embed/j8n1KZTzN6w', 'LUCAS FILM'),
(28, 'VALÉRIAN ET LA CITÉ DES MILLE PLANÈTES', 'Au 28ème siècle, Valérian et Laureline forment une équipe d''agents spatio-temporels chargés de maintenir l''ordre dans les territoires humains. Mandaté par le Ministre de la Défense, le duo part en mission sur l’extraordinaire cité intergalactique Alpha - une métropole en constante expansion où des espèces venues de l''univers tout entier ont convergé au fil des siècles pour partager leurs connaissances, leur savoir-faire et leur culture. Un mystère se cache au cœur d''Alpha, une force obscure qui menace l''existence paisible de la Cité des Mille Planètes. Valérian et Laureline vont devoir engager une course contre la montre pour identifier la terrible menace et sauvegarder non seulement Alpha, mais l''avenir de l''univers.', '2017-07-26', '', 'Dane DeHaan, Cara Delevingne, Clive Owen', 'Science Fiction', 'http://fr.web.img3.acsta.net/r_1920_1080/pictures/17/05/24/09/19/550722.jpg', 'https://www.youtube.com/embed/cnPT5zosGP8', 'Europa corp Distribution'),
(25, 'BLADE RUNNER 2049', 'Suite de Blade Runner se déroulant plusieurs années après le film de 1982. Harrison Ford y reprend le rôle de Rick Deckard.', '2017-10-04', '', 'Harrison  Ford', 'Science Fiction', 'http://fr.web.img2.acsta.net/r_1920_1080/pictures/17/05/15/11/22/242946.jpg', 'https://www.youtube.com/embed/gCcx85zbxz4', 'WARNER BROS'),
(24, 'Dunkerque', 'Le récit de la fameuse évacuation des troupes alliées de Dunkerque en mai 1940.', '2017-07-19', '', 'TOM HARDY, MARK RYLANCE? KENNETH BRANAGH', 'Historique', 'http://fr.web.img6.acsta.net/r_1920_1080/pictures/17/06/15/14/31/266314.jpg', 'https://www.youtube.com/embed/2qCoTcxhsHM', 'WARNER BROS'),
(30, 'OVERDRIVE', 'Les frères Andrew et Garrett Foster sont des pilotes d''exception, mais aussi des voleurs d''exception. Leur spécialité : voler les voitures les plus chères au monde. A Marseille, ils parviennent à dérober une sublime BUGATTI 1937, joyau de l’exceptionnelle collection de Jacomo Morier, parrain de la Mafia locale.  Ce dernier décide alors d’utiliser leur talent à son profit contre son ennemi juré, Max Klemp. Mais s’ils acceptent de rentrer dans ce jeu, c’est qu’ils ont en réalité conçu un coup d’une audace inégalée.', '2017-08-16', '', 'Scott Eastwood, Freddie Thorp, Ana de Armas', 'Action', 'https://vpqe0q.bn1302.livefilestore.com/y4mPhGDZ9z60ha3PE0Ft5Ql3EdNqKlMGbUb63IZEpY6oRAPhUvpkfJYC5WS-NqZNfc_qHBrbWndBBx3h34FdgcXj3E85Ge3EQV-7wgRr_6kr5r698a26ddWbiIfPl7147DUXpHjyAYMfuKlUr2lzUdmGruwvn4OrK3IlSJJeT_-5em7Qd914-vxk2uCx-ofucyiNtGEgfTQQZ_PbmzUfgurgw?width=1080&height=1920&cropmode=none', 'https://www.youtube.com/embed/_zFD-BGhYx8', 'Inconnu'),
(31, 'MOTHER!', 'Un couple voit sa relation remise en question par l''arrivée d''invités imprévus, perturbant leur tranquillité.', '2017-09-13', '', 'Jennifer Lawrence, Javier Bardem, Ed Harris', 'Horreur', 'https://vpqg0q.bn1302.livefilestore.com/y4mkB5AYoC7aq-qiNg_YKSVsvGJavEH-ov_KKw2na1WzyA1nlHvN_YjDSl21NXwOtRRyuMkpMnt5jCwNwZJ1UUvnAjrQDJ1Q52Otp9piR1RqZGhWBlM6AXQUjwR9mfECC3lNjUBxaC_9chhBAYfU6hryl9GQqL8NPdQ3tT47gLTy4kb0pEoDV4wrJO09Vr_NHJXsXbdkLjTg36xZ3GIQQEBvA?width=1080&height=1920&cropmode=none', 'https://www.youtube.com/embed/FLiXnLDGZhc', 'Paramount'),
(33, 'HITMAN & BODYGUARD', 'Un redoutable tueur à gages est contraint de témoigner contre son ancien employeur devant la Cour internationale de justice de La Haye. Interpol est alors chargée de l’escorter jusqu’aux Pays-Bas et engage le meilleur garde du corps du métier pour mener à bien cette mission. Mais c’était sans savoir que depuis des années, les deux hommes s’opposent : les voilà désormais obligés de s’associer pour tenter de survivre aux pires épreuves… De l’Angleterre à La Haye, ils vont vivre une aventure délirante, une succession infernale de tentatives de meurtre, de courses-poursuites pour échapper à un dictateur d’Europe de l’Est prêt à tout pour les éliminer.', '2017-08-23', '', 'Ryan Reynolds, Samuel L. Jackson, Gary Oldman', 'Action', 'http://fr.web.img6.acsta.net/r_1920_1080/pictures/17/08/07/17/59/465513.jpg', 'https://www.youtube.com/embed/9TEVn44hr8w', 'Metropolitan');

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('bsmeyers84@gmail.com', '$2y$10$5HsJFaEY1Nh6zQfWLVboV.1ARy3o2yzJ4D7dTqSfwziDUQjlfDHPq', '2017-03-24 13:09:50'),
('bertrand071984@gmail.com', '$2y$10$k.VHHzhRjJ7dFoXeoAPxyOvJYG.ecqq0I8RgQ7aM5dTY0jznVqadO', '2017-03-23 08:39:07'),
('bsmeyers07@gmail.com', '$2y$10$Ammztx7HeUtg9MVAhcUjg.TMcOybi.i8YivYA9wNN8cSBdu/SeZhi', '2017-03-24 09:38:05'),
('stephane.gaudefroy@gmail.com', '$2y$10$ChsaJ16n6Rw1ae/2eumPh.2OC0Xebfb.jIOJOd54Oq83znWemyWsm', '2017-03-22 13:20:00'),
('s.gaudefroy@orange.fr', '$2y$10$yHPHGfqdtaisJxy3ZsLSXeDMNrmDg7Sfepc1hnfDlgOlcS9kW5HNG', '2017-03-22 16:41:49'),
('samgamj@hotmail.com', '$2y$10$UcHV6KNRYY70pgVA79ZodOo/N74BHkajvZyanUxgdyLluEGsD3sna', '2017-03-24 12:35:43'),
('andrieux.yann@hotmail.fr', '$2y$10$X1Nij7M9Lh2LAvF6U3WxeeH4AXf1tdxnX9kZpgOfef1CQrXkyiW6e', '2017-03-23 17:20:42');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `profil` tinyint(11) NOT NULL DEFAULT '2',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=20 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `profil`) VALUES
(5, 'stephan', 'stephane.gaudefroy@gmail.com', '$2y$10$NHYPrSuEs/PftBI0b5xzSOAeAy2bh.Almx6dpVvwUaABVXdp2gnuq', 'fejc7Ipg2IZRwgTlrDKrkI4pwXzV3UmWYzHlUNR6gANbbZPPLBL2XkpvdsAR', '2017-03-16 14:08:10', '2017-03-16 14:08:14', 1),
(16, 'yann', 'andrieux.yann@hotmail.fr', '$2y$10$Xfst3D/4LemQbpbMXcTYKOESFmniunIXmoD4WGUofDg5dvhdHbA46', 'xLKkC2AgSrkDjJAfQJBfhnGn5T9xiTIvoxcg5S2BZguZabATkrbQuFMkpSOI', '2017-03-23 17:07:26', '2017-03-23 17:07:26', 2),
(7, 'stephan', 's.gaudefroy@orange.fr', '$2y$10$9zY7l81qjlk5W5GvCzUQjenRQSFa4oBQvf83TwjhYFq.5c3gHwzdK', 'DDq0aJYLrhiqkJxt7m4KKMkfGMKvbQzTBExdIurFcU1QvcICPUPAApX3dIH4', '2017-03-22 13:21:40', '2017-03-22 13:21:40', 2),
(8, 'steeeeee', 'stephan.gaudefroy@gmail.com', '$2y$10$p3/6tdVV9qhFoChXfLU/kuLPZBEwxNuZfZu6tig6ymdbu89uqURd6', 'O0oDi7v6JObCO62wTvKmmkcjVXlJoS7OaoMKG55gBwxTUduGYTEGwFZax1cK', '2017-03-22 13:25:47', '2017-03-22 13:25:47', 2),
(15, 'ber', 'bsmeyers07@gmail.com', '$2y$10$8JiQCOGjHUU7CsF534lyl.XmdT/YRigTk8mL2y6XKzA0Lv1HLXGe6', 'Pwe3iBIsKc1otX31En4n5Svp6uoMOil9gsRBt6fDqUdWnc5KMdb7FlMrbZyu', '2017-03-23 10:00:42', '2017-03-23 10:00:42', 2),
(14, 'bertrand', 'bsmeyers84@gmail.com', '$2y$10$4GezKHQRiZk5PseA5oBwVe9Fq9vNBB6OiwLwSl5LXu1hLmqZxa3CK', 'ovJo0W420LJP8yqgQ4VpKRgWUvmPbCVLfPpHSaReV0Uxp9wL1KLBSbKWkOqQ', '2017-03-23 09:35:25', '2017-03-23 09:35:25', 1),
(13, 'bertrand', 'samgamj@hotmail.com', '$2y$10$Ht1Viz5J6Jf1aqx1OxFDsO3vNPl4GtbTyWMlV8w0NaQzQtxjIJaTO', '7IzIiYj5Qp8KNvGM5qLR7VdBN82JybxnHf50gFanhtnLq1sGi3xmN37B0dma', '2017-03-23 09:28:56', '2017-03-23 09:28:56', 2),
(17, 'stephane', 's.gaudefroy@orange.us', '$2y$10$H8nOJMOgiITfCbpAmUEU0ujWB36yW0GdbuTY06.sZCn/O0zdjBxLO', '8oDd46zGSBmmsE2kZmxMkeqkOIzzxgJO4NhEufIFVv4ns9KmouZVo1E8GPRA', '2017-08-01 13:56:45', '2017-08-01 13:56:45', 2),
(18, 'nemo', 'nemo@gmail.com', '$2y$10$RYs/df1rYWimN08IPjE45OJe2a5toREmRmX4diEf.KRY3UKv6vJi.', NULL, '2017-08-10 06:13:34', '2017-08-10 06:13:34', 2),
(19, 'test3wa', '3wacademy@3wa.fr', '$2y$10$Bh0YD5YNGSMsCnrQRooiKOrA6qxya0VMKDTn59RJT7lzuk0tGVQru', 'Uq1pf8cUst16osuwZKQ43NYUgPs5Ov55asfgftBE8Pfyty0j99cb6r0276IF', '2017-09-21 15:50:25', '2017-09-21 15:50:25', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

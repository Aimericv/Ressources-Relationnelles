SET SQL_SAFE_UPDATES = 0;
DELETE FROM user_post_repost;
DELETE FROM user_post_participation;
DELETE FROM user_post_like;
DELETE FROM user_post_favorite;
DELETE FROM user_follow;
DELETE FROM paragraphes;
DELETE FROM modifications;
DELETE FROM images;
DELETE FROM folder;
DELETE FROM comment;
DELETE FROM post;
DELETE FROM user;
DELETE FROM versions;
DELETE FROM post_status;
DELETE FROM help_entity;
DELETE FROM category;
DELETE FROM role;
SET SQL_SAFE_UPDATES = 1;

INSERT INTO `role` (`id`, `name`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Moderator'),
(4, 'SuperAdmin');

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Activités'),
(2, 'Évènement'),
(3, 'Bien-être');

INSERT INTO `help_entity` (`id`, `questions`, `answer`, `status`, `catégorie`, `email`) VALUES
(2, 'Question', NULL, 0, 'post-creation', 'demo@demo.com');

INSERT INTO `post_status` (`id`, `name`) VALUES
(1, 'Brouillon'),
(2, 'Validation'),
(3, 'Publier'),
(4, 'Priver');

INSERT INTO `versions` (`id`, `status`, `name`) VALUES
(1, 0, '1.0.0'),
(2, 1, '1.0.1'),
(3, 0, '1.1.0'),
(4, 0, '1.1.1'),
(5, 0, '1.1.2');

INSERT INTO `user` (`id`, `role_id`, `email`, `password`, `first_name`, `last_name`, `online`, `avatar_img`, `created_at`, `address`, `police`, `confirmation_token`, `is_confirmed`, `reset_token`, `token_expiry_date`) VALUES
(39, 4, 'david.simon@gmail.com', '$2y$10$UVobdk7Z9tUTGWk8HuER1.bMa6KwO5K1g/8RZ3DdeB3w5ttKGw0wi', 'David', 'Simon', NULL, '6605dc2c5c6cc.jpg', '2024-03-28 21:07:56', '1313 Rue des Chênes, 34567 Belleville', '16', NULL, 1, NULL, NULL),
(40, 2, 'antoine.martin@gmail.com', '$2y$10$u/ixgcyaeZW6ttPwT8wlk.GhKRuN86L7p6Bt4SGz2sqcEuymYM19e', 'Antoine', 'Martin', NULL, '6605dca6c6684.jpg', '2024-03-28 21:09:59', '123 Rue des Lilas, 12345 Villeimaginaire', '16', NULL, 1, NULL, NULL),
(41, 2, 'paul.lefevre@gmail.com', '$2y$10$Y9yLZqIJoG45oO1L6N8v4OuE0T0GcnqBasVhNlVo1mHAKfYIpvuTq', 'Paul', 'Lefevre', NULL, '6605dd07a72c3.jpg', '2024-03-28 21:11:35', '456 Avenue du Soleil, 67890 Villeneuve', '16', NULL, 1, NULL, NULL),
(42, 2, 'laurent.chevalier@gmail.com', '$2y$10$JepfeIS.olc2etWMh83NOuZAaJWtFgAsfnOJt8GSR0A1M5jTGTTmG', 'Laurent', 'Chevalier', NULL, '6605dd5391c74.jpg', '2024-03-28 21:12:51', '789 Rue des Cerisiers, 23456 Montville', '16', NULL, 1, NULL, NULL),
(43, 2, 'emilie.moreau@gmail.com', '$2y$10$iMxUwtauMOTF4CXS6hsxZOGVdNHcLS.14JrQ9KGuURCPB/VQLoFc.', 'Émilie', 'Moreau', NULL, '6605ddad82c7b.jpg', '2024-03-28 21:14:21', '27 Rue de la Paix, 12345 Sérénitéville', '16', NULL, 1, NULL, NULL),
(44, 2, 'camille.dubois@gmail.com', '$2y$10$CzFNz7GPzCm5zyEALj2Ei.b31R8oY.eQGO9iIARjw7Blcw5ZSn/OO', 'Camille', 'Dubois', NULL, '6605ddf792ca9.jpg', '2024-03-28 21:15:35', '88 Avenue des Érables, 67890 Harmonieville', '16', NULL, 1, NULL, NULL),
(45, 1, 'elise.bernard@gmail.com', '$2y$10$hzNupJlhVUVjPEUzz8g72.GmXBiqPP4G5VXUPCNQyD0.0o2tyOlwG', 'Élise', 'Bernard', NULL, '6605de3b19044.jpg', '2024-03-28 21:16:43', '42 Rue du Bonheur, 23456 Joieville', '16', NULL, 1, NULL, NULL),
(46, 2, 'charlotte.lefevre@gmail.com', '$2y$10$QrCuihqqqnXrBe36yHuDGOFwR6mp3YEKXD4PJI922hfdqRduQSDk6', 'Charlotte', 'Lefevre', NULL, '6605de9417900.jpg', '2024-03-28 21:18:12', '555 Boulevard de l\'Amitié, 78901 Amicalbourg', '16', NULL, 1, NULL, NULL),
(47, 1, 'alice.leroy@gmail.com', '$2y$10$wQ8epjGawrl.Qd4Kr9P6FuGOQEkPLzixJNbwOXocK/6/x2ipRgNma', 'Alice', 'Leroy', NULL, '6605deceba849.jpg', '2024-03-28 21:19:11', '19 Avenue de la Liberté, 34567 Liberté-sur-Mer', '12', NULL, 1, NULL, NULL),
(48, 2, 'nathalie.roussel@gmail.com', '$2y$10$0Se6o9EAL6bPZfpB0i6F7OhITU2cNw.PWDWs9mWLecVTC1xLmqF3e', 'Nathalie', 'Roussel', NULL, '6605df194fcfa.jpg', '2024-03-28 21:20:25', '23 Rue de la Liberté, 12345 Belleville', '16', NULL, 1, NULL, NULL),
(64, 2, 'demo@demo.com', '$2y$10$aclVa.zYY8CvOQgsiOwf5OONoQMKqDcmrpEZcYqJTTTVx.UAa.5R2', 'demo', 'demo', NULL, NULL, '2024-04-16 11:41:07', 'demo, 17000 La Rochelle', '16', NULL, 1, NULL, NULL),
(92, 2, 'mohamedaminehaddoualla@gmail.com', '$2y$10$z1pKZDiyeYRag8uG1wRKfewteMENBpkgvOsDBoJ.XGdmvMJ880Xuy', 'Amine', 'HADDOU ALLA', NULL, NULL, '2024-06-17 10:25:11', 'La Rochelle, 17000 La Rochelle', '16', NULL, 1, NULL, NULL);

INSERT INTO `folder` (`id`, `name`, `user_id`) VALUES
(3, 'Alimentation', 39),
(33, 'Sport', 39);

INSERT INTO `post` (`id`, `user_id`, `status_id`, `type_id`, `title`, `description`, `created_at`, `address`, `folder_id`) VALUES
(214, 39, 3, 3, 'Bienvenue à tous les amoureux de yoga !', 'Avez-vous déjà ressenti le pouvoir revitalisant d\'une pratique de yoga dès le réveil ? Rejoignez-nous pour une expérience transcendante qui éveillera votre corps, votre esprit et votre âme à la beauté de chaque nouvelle journée.', '2024-06-03 16:48:11', '1313 Rue des Chênes, 34567 Belleville', NULL),
(215, 40, 3, 2, 'Bienvenue dans les coulisses de l\'art dramatique !', 'Plongez dans l\'univers envoûtant du théâtre avec notre tout nouveau spectacle qui promet de vous transporter dans un tourbillon d\'histoires, d\'émotions et de moments inoubliables. Préparez-vous à vivre une expérience théâtrale unique et captivante qui ill', '2024-03-28 23:21:15', '8 Rue Isabelle Autissier, 17140 Lagord', NULL),
(216, 41, 3, 2, 'Bienvenue dans le monde fascinant des échecs ! ', 'Préparez-vous à relever le défi ultime de l\'esprit et à plonger dans l\'univers captivant des échecs lors de notre prochain événement qui promet des parties épiques, des rencontres passionnantes et des moments de pure réflexion. Que vous soyez un novice dé', '2024-04-01 19:33:19', '1313 Rue des Chênes, 34567 Belleville', NULL),
(217, 39, 4, 1, 'Découvrez les incroyables bienfaits de l\'activité sportive !', 'Avez-vous déjà ressenti l\'énergie revigorante d\'une séance d\'entraînement ? Ou la satisfaction profonde qui accompagne la réalisation d\'un défi sportif ? L\'activité physique ne se limite pas seulement à sculpter notre corps, elle nourrit également notre e', '2024-04-01 19:45:33', '13 rue de la Route', NULL),
(218, 42, 3, 1, 'Explorez les trésors cachés du passé avec l\'archéologie ! ', 'Plongez dans les mystères du passé et découvrez les trésors enfouis qui ont façonné notre monde moderne. L\'archéologie est bien plus qu\'une simple discipline scientifique, c\'est une véritable aventure à travers le temps qui nous permet de comprendre nos o', '2024-04-01 19:55:27', '8 Rue Isabelle Autissier, 17140 Lagord', NULL),
(219, 40, 3, 1, 'Plongez dans l\'aventure avec le surf !', 'Préparez-vous à ressentir l\'adrénaline, la liberté et la connexion profonde avec l\'élément liquide. Le surf n\'est pas seulement un sport, c\'est un mode de vie qui nous permet de nous sentir vivants, en harmonie avec la nature et en équilibre avec nous-mêm', '2024-04-01 19:58:37', '1313 Rue des Chênes, 34567 Belleville', NULL),
(220, 45, 3, 3, 'Découvrez les bienfaits des légumes bio pour votre santé ! ', 'Les légumes bio sont bien plus que de simples aliments, ce sont de véritables trésors nutritionnels qui nourrissent notre corps et notre esprit. Opter pour des légumes biologiques, c\'est choisir la qualité, la fraîcheur et le respect de l\'environnement. D', '2024-04-01 20:05:31', '13 rue de la Route', NULL),
(221, 39, 3, 3, 'Le fléau du harcèlement', 'Le harcèlement touche petits et grands, découvrez comment peux t-on agir à notre échelle pour secourir des personnes touchés.', '2024-04-01 20:10:58', '13 rue de la Route', NULL),
(224, 44, 3, 2, 'Préparez-vous à une pluie d\'astéroïdes ! ', 'Une incroyable pluie d\'astéroïdes se profile à l\'horizon, offrant un spectacle céleste à couper le souffle et une occasion unique d\'observer les merveilles de l\'univers. Dans les prochains jours, notre planète sera témoin d\'un phénomène astronomique extra', '2024-04-03 20:31:56', 'France', 33),
(225, 64, 3, 2, 'demo', 'demo', '2024-04-16 11:45:40', 'demo', NULL);

INSERT INTO `comment` (`id`, `user_id`, `post_id`, `content`, `date`) VALUES
(6, 39, 220, 'Incroyable ! Je n\'imaginais pas à quel point manger bio était bon pour la santé !', '2024-04-01 21:06:52'),
(7, 47, 220, 'C\'est fascinant ! Votre métier de maraîchère contribue à promouvoir une alimentation saine et respectueuse de l\'environnement. Avoir accès à des légumes frais et bio est précieux pour notre santé et notre bien-être. Merci pour votre engagement envers la production alimentaire durable !', '2024-04-01 21:10:59'),
(8, 39, 214, 'Test Unitaire', '2024-04-11 20:36:34'),
(9, 39, 214, 'Test Unitaire', '2024-04-11 18:46:34'),
(10, 39, 214, 'Test Unitaire', '2024-04-11 18:46:38'),
(11, 39, 214, 'Test Unitaire', '2024-04-15 14:23:59'),
(12, 39, 214, 'Test Unitaire', '2024-04-15 14:24:05'),
(13, 64, 225, 'commentaire', '2024-04-16 11:52:13'),
(14, 39, 214, 'Test Unitaire', '2024-04-28 09:50:02'),
(15, 39, 214, 'Test Unitaire', '2024-04-28 09:50:09'),
(16, 39, 219, '<%!script>console.log(\"test\");</script>', '2024-06-03 16:45:53'),
(17, 39, 214, 'Test Unitaire', '2024-06-17 07:39:42');

INSERT INTO `comment_response` (`id`, `comment_id`, `date`, `content`, `user_id`) VALUES
(6, 6, '2024-04-01 21:08:26', 'En effet, si cela vous intéresse, je suis maraîchère.', 45),
(7, 6, '2024-04-01 21:10:02', 'Tout comme vous, j\'ai appris plein de choses', 41),
(8, 7, '2024-04-09 12:44:21', 'Je suis entièrement d\'accord !!', 39),
(9, 6, '2024-04-09 12:45:02', 'Je serai potentiellement intéressé Élise', 39),
(10, 13, '2024-04-16 11:52:24', 'reponse', 64);

INSERT INTO `images` (`id`, `post_id`, `src`, `width`, `height`, `x`, `y`) VALUES
(59, 214, '/images/post/430894857.jpg', '34.516129032258', '16.125', '520.25', '73'),
(60, 214, '/images/post/284113990.jpeg', '34.516129032258', '15.125', '16', '418.578125'),
(61, 215, '/images/post/215132331.jpg', '56', '23', '126.04010009766', '28.1416015625'),
(62, 216, '/images/post/782435922.png', '40', '25', '462.04718017578', '56.345092773438'),
(63, 216, '/images/post/195854997.jpg', '28', '24', '82.809413430928', '464.65388907112'),
(64, 217, '/images/post/178768632.jpg', '40', '20', '2.32080078125', '42.393295288086'),
(65, 217, '/images/post/650206732.jpg', '23', '17', '338.71923828125', '304.91809082031'),
(66, 217, '/images/post/847774663.jpg', '38', '22', '5.0504150390625', '526.37457275391'),
(67, 218, '/images/post/504870236.jpg', '41', '25', '-0.38116455078125', '44.73193359375'),
(68, 219, '/images/post/215452266.jpg', '41', '18', '441.52911376953', '52.384826660156'),
(69, 219, '/images/post/326627627.avif', '86', '22', '11.818176269531', '478.13507080078'),
(70, 220, '/images/post/457985829.jpg', '37', '23', '457.80285644531', '491.74163818359'),
(71, 220, '/images/post/646079239.webp', '37', '22', '33.113952636719', '488.21035766602'),
(72, 220, '/images/post/939956441.jpg', '83', '21', '0', '0'),
(73, 221, '/images/post/474086212.jpg', '37', '29', '0.1922607421875', '65.849212646484'),
(74, 221, '/images/post/481987607.jpg', '51', '29', '154.4924621582', '435.24984741211'),
(75, 224, '/images/post/357295356.jpg', '38', '21', '464.80613860572', '43.390144522535'),
(76, 224, '/images/post/671728471.jpg', '24', '26', '60.073944091797', '438.2179107666'),
(77, 225, '/images/post/875465584.png', '261', '177', '48.799987792969', '272.79998779297'),
(78, 225, '/images/post/868075872.png', '98', '66', '144.50844653609', '498.90828530155');

INSERT INTO `modifications` (`id`, `versions_id`, `titre`, `description`) VALUES
(1, 1, 'Securité', 'Detection des menaces'),
(2, 1, 'Bug', 'Adaptation de la creation de posts'),
(3, 2, 'Securité', 'Sécurisation des comptes'),
(4, 2, 'Bug', 'Reporting de bugs'),
(5, 3, 'test', 'test'),
(6, 1, 'Test', 'Test');

INSERT INTO `paragraphes` (`id`, `post_id`, `content`, `width`, `height`, `x`, `y`) VALUES
(32, 214, '<p class=\"ql-align-right\">Le <strong>yoga du réveil</strong> est bien plus qu\'une simple série de postures. C\'est un rituel sacré qui vous permet de vous connecter profondément avec votre souffle, de réveiller en douceur chaque partie de votre corps, et de vous préparer mentalement pour une journée pleine de vitalité et de clarté.</p>', '42.795698924731', '24.375', '38.550170898438', '75.462951660156'),
(33, 214, '<p class=\"ql-align-center\">En pratiquant le yoga dès le réveil, vous stimulez votre <strong>circulation sanguine</strong>, <strong>améliorez votre souplesse</strong> et votre posture, et libérez les tensions accumulées pendant la nuit. Cette pratique douce et fluide vous offre également une occasion précieuse de cultiver la gratitude, la présence et l\'intention positive pour la journée à venir.</p>', '68.709677419355', '18.625', '121.21942138672', '270.974609375'),
(34, 214, '<p>Rejoignez-nous chaque matin pour une séance de yoga du réveil guidée par des instructeurs passionnés et expérimentés. Ensemble, nous explorerons un mélange équilibré de postures, de respirations conscientes et de méditations guidées pour vous aider à démarrer votre journée avec énergie et sérénité.</p>', '41.827956989247', '27.125', '475.83648681641', '401.94557189941'),
(35, 214, '<p class=\"ql-align-center\">Que vous soyez débutant ou pratiquant chevronné, notre communauté accueille chacun avec chaleur et bienveillance. Relevez le défi de vous lever avec le soleil et de vous offrir ce précieux moment de connexion avec vous-même.</p><p class=\"ql-align-center\"><br></p><p class=\"ql-align-center\">NAMASTÉ !!!</p>', '83.655913978495', '13.875', '93.88323974609', '628.93423461914'),
(36, 215, '<p class=\"ql-align-center\">&nbsp;Rejoignez-nous pour une soirée magique où les frontières entre la réalité et l\'imaginaire s\'estompent. \"Au-delà des Rêves\" vous invite à un voyage fascinant à travers des mondes parallèles, des rencontres surréalistes et des réflexions profondes sur la nature de nos aspirations les plus secrètes.</p>', '90', '14', '92.373474121094', '304.42541503906'),
(37, 215, '<p>Plongez au cœur d\'une mise en scène époustouflante, où chaque geste, chaque mot et chaque regard sont des invitations à explorer les méandres de l\'âme humaine. Notre talentueuse troupe d\'acteurs vous emmènera dans un voyage émotionnel où le rire, les larmes et l\'émerveillement se mêlent dans une danse envoûtante.</p>', '46', '23', '33.693939208984', '468.86322021484'),
(38, 215, '<ul><li><strong>Date :</strong> 5 juillet 2024</li><li><strong>Heure :</strong> 18h</li><li><strong>Lieu :</strong> 8 Rue Isabelle Autissier, 17140 Lagord</li><li><strong>Réservez vos places :</strong> <a href=\"http://www.cie-oreedubois.fr/accueil-3/spectacles/porte-de-montreuil/\" target=\"_blank\">www.troupetheatre.fr</a></li></ul>', '46', '11', '474.13366699219', '528.82801818848'),
(39, 216, '<p>Rejoignez-nous pour une compétition intense où les esprits les plus brillants s\'affronteront pour le titre suprême. Notre tournoi des maîtres offre l\'opportunité de tester vos compétences contre certains des meilleurs joueurs de la région, tout en échangeant des idées et des stratégies avec des passionnés partageant les mêmes intérêts.</p>', '46', '19', '6.1126098632812', '117.0791015625'),
(40, 216, '<p class=\"ql-align-center\">Pour ceux qui souhaitent perfectionner leur jeu ou simplement en apprendre davantage sur les subtilités de cette discipline ancestrale, nous proposons également une série de cours et d\'ateliers animés par des maîtres échiquiers expérimentés. Explorez les ouvertures, les tactiques et les finales dans un environnement convivial et interactif.</p>', '83', '10', '48.697814941406', '360.33932495117'),
(41, 216, '<p>En plus de la compétition, notre événement est l\'occasion idéale pour rencontrer d\'autres passionnés d\'échecs, échanger des conseils et des anecdotes, et tisser des liens durables avec une communauté dynamique et engagée. Que vous soyez là pour jouer, apprendre ou simplement partager votre passion, vous trouverez ici un accueil chaleureux et une&nbsp;</p>', '41', '24', '486.13625216428', '525.7170238706'),
(42, 217, '<p>L\'exercice physique n\'est pas seulement bon pour le corps, mais aussi pour l\'esprit. Des études ont montré que l\'activité sportive régulière est liée à une amélioration de la santé mentale, réduisant le stress, l\'anxiété et la dépression. En faisant de l\'exercice, nous stimulons la production d\'endorphines, ces hormones du bonheur qui nous procurent une sensation de bien-être et de joie.</p>', '43', '23', '478.77752685547', '53.869140625'),
(43, 217, '<p class=\"ql-align-right\">L\'activité physique renforce notre système cardiovasculaire, réduisant ainsi le risque de maladies cardiaques et d\'hypertension artérielle. En faisant battre notre cœur plus fort, nous améliorons sa capacité à pomper le sang et à oxygéner notre corps, ce qui se traduit par une meilleure endurance et une meilleure santé générale.</p>', '33', '23', '1.5661010742188', '297.9475402832'),
(44, 217, '<p>L\'entraînement régulier aide à renforcer nos muscles, à améliorer notre souplesse et à prévenir les blessures. Que vous pratiquiez la musculation, le yoga, la course à pied ou toute autre forme d\'exercice, vous constaterez rapidement les bienfaits d\'une pratique régulière sur votre silhouette et votre santé physique.</p>', '30', '26', '621.79626464844', '299.43923950195'),
(45, 217, '<p>Quel que soit votre âge, votre niveau de forme physique ou vos objectifs personnels, il n\'est jamais trop tard pour commencer à bouger et à profiter des innombrables bienfaits de l\'activité sportive. Rejoignez notre communauté et ensemble, cultivons une vie saine, équilibrée et pleine de vitalité !</p>', '44', '19', '462.73770141602', '579.88360595703'),
(46, 218, '<p>L\'archéologie nous transporte dans des mondes oubliés et nous invite à explorer les vestiges des civilisations passées. Des pyramides majestueuses de l\'Égypte antique aux cités perdues des Mayas en Amérique centrale, chaque découverte nous offre un aperçu fascinant de la vie et de la culture de nos ancêtres.</p>', '42', '19', '463.84088134766', '62.40283203125'),
(47, 218, '<p class=\"ql-align-right\">À travers l\'étude des artefacts, des ruines et des écrits anciens, l\'archéologie nous permet de reconstruire le puzzle de l\'histoire humaine. En comprenant le mode de vie, les croyances et les réalisations des sociétés passées, nous élargissons notre compréhension du monde et enrichissons notre bagage culturel.</p>', '42', '19', '38.705548761576', '339.32808760866'),
(48, 218, '<p>L\'archéologie joue également un rôle crucial dans la préservation de notre patrimoine culturel. En documentant et en étudiant les sites archéologiques, nous contribuons à leur protection et à leur gestion durable, assurant ainsi que les générations futures puissent également en profiter et en apprendre.</p>', '42', '19', '477.35195922852', '337.35494995117'),
(49, 218, '<p class=\"ql-align-center\">L\'archéologie est une entreprise collaborative qui rassemble des chercheurs, des passionnés et des communautés du monde entier. En partageant nos découvertes, nos connaissances et notre passion pour le passé, nous renforçons les liens entre les cultures et les peuples, promouvant ainsi la compréhension et le respect mutuel.</p>', '88', '10', '17.70849609375', '570.29080200195'),
(50, 218, '<p class=\"ql-align-center\">Que vous soyez un passionné d\'histoire, un aventurier dans l\'âme ou simplement curieux de découvrir le passé, l\'archéologie vous offre une opportunité unique d\'explorer les trésors cachés de notre monde. Rejoignez notre communauté et ensemble, partons à la découverte des secrets enfouis de l\'humanité.</p>', '100', '11', '10.2734375', '680.32009887695'),
(51, 219, '<p>Rien ne peut égaler la sensation de glisser sur une vague, de ressentir la puissance de l\'océan sous vos pieds et de vous laisser porter par la houle. Le surf offre une véritable évasion de la routine quotidienne, nous permettant de nous évader et de nous reconnecter avec notre moi le plus profond.</p>', '43', '17', '13.134765625', '69.41162109375'),
(52, 219, '<p class=\"ql-align-right\">Le surf est bien plus qu\'un simple exercice physique, c\'est une expérience énergisante qui stimule notre corps et notre esprit. En pagayant à travers les vagues, en travaillant notre équilibre et notre coordination, nous renforçons notre musculature et améliorons notre condition physique générale.</p>', '45', '18', '14.596099853516', '302.14733886719'),
(53, 219, '<p>Chaque session de surf est une occasion de relever de nouveaux défis, de repousser nos limites et de grandir en tant qu\'individus. Que vous soyez débutant ou surfeur chevronné, il y a toujours quelque chose de nouveau à apprendre, de nouvelles techniques à maîtriser et de nouvelles vagues à conquérir.</p>', '43', '18', '476.29052734375', '303.40997314453'),
(54, 220, '<p class=\"ql-align-center\">Les légumes bio offrent une mine de bienfaits pour la santé. Cultivés sans pesticides ni produits chimiques nocifs, ils conservent leur valeur nutritionnelle optimale, regorgeant de vitamines, de minéraux et d\'antioxydants essentiels qui renforcent le système immunitaire et favorisent la santé globale. En privilégiant les légumes bio, non seulement vous nourrissez votre corps avec des nutriments de qualité, mais vous soutenez également des pratiques agricoles durables qui préservent l\'environnement. Ces légumes, cultivés dans le respect de la terre et des écosystèmes, contribuent à la santé des sols, à la qualité de l\'eau et à la biodiversité, garantissant un avenir plus vert pour les générations à venir. Opter pour les légumes bio, c\'est donc faire le choix d\'une alimentation saine, équilibrée et respectueuse de la planète.</p>', '100', '23', '0', '265.99673461914'),
(55, 221, '<p>Le harcèlement sous toutes ses formes est dévastateur et inacceptable. Que ce soit au travail, à l\'école, dans les espaces publics ou en ligne, il peut avoir des conséquences graves sur la santé mentale et émotionnelle des victimes. En mettant en lumière le problème du harcèlement, nous pouvons sensibiliser les gens et travailler ensemble pour créer des environnements sûrs et respectueux où chacun se sente valorisé et protégé. Il est crucial de condamner toute forme de harcèlement, d\'écouter et de soutenir les victimes, et de promouvoir une culture de respect, d\'inclusion et d\'empathie. En travaillant ensemble pour combattre le harcèlement, nous pouvons créer un monde meilleur où chacun peut s\'épanouir librement, sans crainte ni intimidation.</p>', '48', '35', '425.05590820312', '68.123596191406'),
(59, 224, '<p class=\"ql-align-right\">Préparez-vous à être émerveillés alors que des milliers d\'astéroïdes traversent l\'atmosphère, créant une pluie d\'étoiles filantes et de météores scintillants. Que vous soyez un passionné d\'astronomie ou simplement un amoureux de la beauté de la nature, cet événement promet d\'être un moment magique à ne pas manquer.</p>', '45', '17', '16.468170166016', '88.260467529297'),
(60, 224, '<p class=\"ql-align-center\">Sortez vos télescopes, vos jumelles et vos chaises longues, et préparez-vous à admirer le spectacle depuis votre jardin, votre balcon ou votre lieu d\'observation préféré. La pluie d\'astéroïdes offre une occasion exceptionnelle d\'explorer le cosmos et d\'apprécier la grandeur de l\'univers qui nous entoure.</p>', '830', '108', '60.401000976562', '308.34225463867'),
(61, 224, '<p>Notez dès maintenant la date de cet événement céleste dans votre calendrier astronomique. Consultez les prévisions météorologiques locales pour choisir le meilleur moment et le meilleur endroit pour observer la pluie d\'astéroïdes dans votre région.</p>', '419', '189', '457.24906198326', '507.8724750692'),
(62, 225, '<p>Titre de la demo</p>', '131', '160', '413.57065508422', '148.8125038147'),
(63, 225, '<p>Dsscription de la demo</p>', '406', '420', '412.2236352727', '322.85912576647'),
(64, 214, '<p>&lt;script&gt;console.log(\"test\")&lt;/script&gt;</p>', '34.94623655914', '8.5', '589.83401599268', '730.28714099268');

INSERT INTO `user_follow` (`user_source`, `user_target`) VALUES
(39, 45),
(40, 42),
(43, 45),
(45, 39),
(48, 47);

INSERT INTO `user_post_favorite` (`user_id`, `post_id`) VALUES
(39, 220),
(39, 224),
(64, 225);

INSERT INTO `user_post_like` (`user_id`, `post_id`) VALUES
(39, 218),
(39, 220),
(64, 225);

INSERT INTO `user_post_participation` (`post_id`, `user_id`) VALUES
(225, 64);

INSERT INTO `user_post_repost` (`user_id`, `post_id`) VALUES
(39, 218),
(45, 216),
(45, 221);
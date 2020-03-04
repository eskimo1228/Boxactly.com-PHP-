/*
SQLyog Community v12.2.1 (64 bit)
MySQL - 10.4.6-MariaDB : Database - demo
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`demo` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `demo`;

/*Table structure for table `password_reset` */

DROP TABLE IF EXISTS `password_reset`;

CREATE TABLE `password_reset` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=145 DEFAULT CHARSET=latin1;

/*Data for the table `password_reset` */

insert  into `password_reset`(`id`,`email`,`token`) values 
(55,'lovebrazil0217@gmail.com','82b2294478a0d36ce531a258f7e439b06100557eab808a9f52f6810002aca4789288cb1610078cdc48ba0cf9a7b3185907d0'),
(56,'lovebrazil0217@gmail.com','88b7a3277c4cabb79a6e3ebd8eb2eb028eea703f8ab1c1d2c1e61cebbc4882ce5ec4938d1a83781087b92d5d9b8cc583c10f'),
(57,'lovebrazil0217@gmail.com','0522672529c1bc4d69e6e1e19f8db531ad09b7810eac3a219315e86936f12fb2f22369661a4d4220b9f1e2d1b823ddc0205a'),
(58,'lovebrazil0217@gmail.com','c317eee1813a6ecf80d0f8d0c81928b235b63603d8d84209c4717d10f510aba9d804f603d47124b3eb1dba6c020ed8c3a2f7'),
(59,'lovebrazil0217@gmail.com','1150d86cdfa7a3cff981fe34ac878536603edb07688a098a59a93e6a43f505bd950d68bc653a8b164f5d59d4ac7cff62d473'),
(60,'lovebrazil0217@gmail.com','b214e780f266835a65b4233b6a1cac5b87b2450da414e2e093221bae8ec454890ed1e8e33f9b3e546c609a0739e8891ef48b'),
(61,'lovebrazil0217@gmail.com','fd457033854d6bd9e6fd62efa24a908085e915130c4137dd03189968ad954e0d2714a4cff0918bc9ca1443393203cee520ef'),
(62,'lovebrazil0217@gmail.com','666aa64f4794e5fcde06fb9156f388a062ca9ba1abf154fb7eac475096d7b5b76021ca6b7952036d099e4dc9aa46e51f1056'),
(63,'lovebrazil0217@gmail.com','c28fe66e129e8dfc4b8ef8974102a40696f713e63c7e49dd8c76473e914285a0a044703f142ae8541b69d6c3ef69b49a7adf'),
(64,'lovebrazil0217@gmail.com','79cca4ce1b45653eff64eca0ae49a89dd0f473beaaa67defc536e6193d4845b43c2fec6900031911604ca17db6f1a9ec2849'),
(65,'lovebrazil0217@gmail.com','00dba4269d15da72652c1710f1b5452e7c5f3fae0c3a878375f24acedbd28a7d004cfd48abbe1743df33f65702e0378a3394'),
(66,'lovebrazil0217@gmail.com','a49461c20b608d55765966ea73eb6a7fbecb74c02ca355980dccf745c62817779a7615b8bc3696415f36d3d66ec9db9f1486'),
(67,'lovebrazil0217@gmail.com','d19f373d114758fa1e43befa10bef85eeba254d57c7ac4cdf9908d13a6ccf396f0702387ed0b020d6ff708c0c92bbde1c45e'),
(68,'lovebrazil0217@gmail.com','b95feb014f379f81dff5dad7c68f4325a2082a4e049b230bed2e70313a7ab656e365dc581973c68db954ae7323147e52faef'),
(69,'lovebrazil0217@gmail.com','23a9225033b894e13942314d327d32208c6e13392e33d2e9d906d22a4eed6aabffc30befc061c0722626d44346a548ff15f6'),
(70,'lovebrazil0217@gmail.com','aa3f25876612f7961f3f891bfc796229d75da80369af905f09768ca730fa8113b584e7bb7840ab1d3bdb6b8aecf0a5a6edd5'),
(71,'lovebrazil0217@gmail.com','fa37baeb60d66d7b3ac83bc74671d2b9e336324122fdd1569caa5c43381113960de39b7ba5bd7741d0fe46e92eb20145f796'),
(72,'lovebrazil0217@gmail.com','14d5fa5c2ccc610cead7428a3c4242c7b8afc80fb780f11812ee16b1ba4b5992d0f1fd84d075795ac9bc91e621cf163663cd'),
(73,'lovebrazil0217@gmail.com','2563fcd0e8d7daa178bf237d2dfe588a6bde24a59b80304db52246803f106fae284cd47cf626d01bacc225878101cf1f7474'),
(74,'lovebrazil0217@gmail.com','6d53886b099f871fd32f50c465820de540f7144abb952ea8b810865632677f566b9946c2d6f0de9e291d9b507d7c1c52fc3d'),
(75,'lovebrazil0217@gmail.com','cadcffb7e6beda65704c2bb1a1437a3e445a70244b6bf857dcfc181f8e2c0704b81cd0f52e410f223e50af003d58de282b0e'),
(76,'lovebrazil0217@gmail.com','9c30fe15f4162df12ee51c8087314607a9387e31e9a4fd060d640639626ce4ea4f9318a3fa4da728a52f4fce9bbd00b177c6'),
(77,'lovebrazil0217@gmail.com','96b6ac5074a611573448e0934b1ad1b780f13b4ec73af9ddb7b2e116c828cec6670a20d52256b05a25cf97e522628e602a3b'),
(78,'lovebrazil0217@gmail.com','636dccddfd0014a34ade3f45b58de51ec11c9308e956d224539a9eee989610d87b8cc1d484663d574e3b7ddff33a7c59900f'),
(79,'lovebrazil0217@gmail.com','5e028a3c6cc9e563545f07825fdefc86a21c912cb2819db9fd559369e23d694ba80e1a29f26595a56bbec97e58601cdcf4e2'),
(80,'lovebrazil0217@gmail.com','392cded66db4038e3a9f935aafcea83715bd8fc9377159756b20ed20b7bb88ca1212892f8960a9fbc7dc7b63af72239bd52e'),
(81,'lovebrazil0217@gmail.com','a44d30155cda9f3714bd1055376503244560a085bdb7ff2a3ee68d3ef1ed3ed2278e9f3f1f52547f08537002e64bac2013b8'),
(82,'lovebrazil0217@gmail.com','b45931d481748599f5974b402529cb2d0e34653e2d7e6bd2bc7e2f5193e566918ca12d35982000a249438b45e1b1757370ff'),
(83,'lovebrazil0217@gmail.com','80876ad48cfb8910ec765cadf8e9326c927d9b1fe0b93ff2f8372ab103a40679e677cc220344f92954c8cb80553cea386c0d'),
(84,'lovebrazil0217@gmail.com','bf520d039f5f24836d965f860b0aeb6bceebde99c9e42233ad0e01fddac906ce4e9af64b7747b23c8864063bef57c825b59e'),
(85,'lovebrazil0217@gmail.com','f38ff675c80d033d6cacfb9de62b7a2a6353935e7c831e278d998f74fb595147af68af3905255b93d91c059da97af093682d'),
(86,'lovebrazil0217@gmail.com','13b341266dc6c65f5274488ff5f70f4e4733c389f4e2f45f2dbdb9c95fcf8df36b7738e4bfaf3d6d79716d679c8e493f9b22'),
(87,'lovebrazil0217@gmail.com','c732af50a02e84bd1ba791701504d211f1d6a7d32b49819da3d5ae018f46f3f9b8ed812e5e47780bfa68b17962a748c18834'),
(88,'lovebrazil0217@gmail.com','9e87518ccb9770515cd5208db56ed4afe9e75bd7bbc61e85539c50cdde475ace42bc09ca670cd050888c1f8204af7177bd82'),
(89,'lovebrazil0217@gmail.com','7cb85b16d5f4c22264a3b3a5b05b425c2572444d41f1409728432322413fb483ff129f49b1d67f54e6207089cec53e340f09'),
(90,'lovebrazil0217@gmail.com','ff3a5a90a80ebaeab96a802a0c80ad7182bb03a691361c0d7d72810ccb486253275b645070c747fcaf548d883d8831359175'),
(91,'lovebrazil0217@gmail.com','f81f7e0d3de7d80ca658f5616812657ee71f050dac505d8250ba3809ed3dcfc05a786ad9c3502315d1f8073da9c314290fe7'),
(92,'lovebrazil0217@gmail.com','ba03dcddb8af9c1454f4de17487e6c02fccf13398f474263f4617ddccbd9f4896d161399ac02841213353ad979b3275d5a06'),
(93,'lovebrazil0217@gmail.com','a6bfbd42f12d24f4529b506ee4e0b61215176f5818891b6e4f35e0e0017cdfe0e0cc0164fa713417e2c925af17c5501ad491'),
(94,'lovebrazil0217@gmail.com','1549adf7e463eab4aff758c95f4533535de8ff1bdba305eca19c3a1b959c1bac30928af88896aa046f9bf93ad7546866d2b4'),
(95,'lovebrazil0217@gmail.com','a6e092db2b28d940b34a542448ebd94459a0ace170ecb79cfbc3f3e1730a42d0233806bb3e3029a8a2c32bb0a401a9ef1f48'),
(96,'lovebrazil0217@gmail.com','43cad05d9bf4eb1948511a2025a0a9960069236ddd6c6216febb7be4636d0475b581782b6eff179d36086d6cd02dfc2b40c8'),
(97,'lovebrazil0217@gmail.com','1d3bacb112b34c91dc67f4dcd1a30a31f279a9e677926aca69aa0bed18122785991f6752045919563fcbe702b92bec293efc'),
(98,'lovebrazil0217@gmail.com','bda6b677f4cc48cce1911d3147487feec7113540e6893e187c7eb5d5257ddc4357f5f1f4d30f41945439a9e6f8ab0ddf8a8f'),
(99,'lovebrazil0217@gmail.com','bac03e564cd3bccaba9b2e92412f6c4469ba76c43c50a2f989ababcb225455ae074ebcd9f35a1ed1da128444460b66530c6c'),
(100,'lovebrazil0217@gmail.com','a69ebab7bca8fe269dd4cdda2dcdfd4b905fd306eeb474e68ea8ccc9bb353ba3d2310a05bebe139b0e996136b97ed883ae03'),
(101,'lovebrazil0217@gmail.com','68ba7908ba48921f32febaa2a24e1d71b3fe20757e3eac68d49e71a16a10903ab1510a48c4135be9ea4896eb9165bae41b1f'),
(102,'lovebrazil0217@gmail.com','7334ef23f1c65dd0b87200711fa5ad0a0e07076399831a9daf567e22221fd0a458a2040312a01f4737dbf72d2eadf4645ba4'),
(103,'lovebrazil0217@gmail.com','5e3d6010eaff6c4021390e8f9b8498bfc3ee327942bd5d65bac187a7d32540a98cae1b936b30bbe71617732e2dff0e631df1'),
(104,'lovebrazil0217@gmail.com','51bcb6d29d91be42f194002a359ba65555dc9f5104ea5fa04eb09cf29ae03b9ba1054c8eea496dcb6cfe30c66333e63555a6'),
(105,'lovebrazil0217@gmail.com','4366378e4cf44343ad5483b6f9e25a0ab8585e11696deb4a6436be7e1fa9cfef29bdcf02341591613909479cc030e50d80c3'),
(106,'lovebrazil0217@gmail.com','827c83955531e1d7fe48eba91f7d74f2c21dee8ec906396db41891a49e5cc8af13e640a66ed5ebc139223f63536f956779cb'),
(107,'lovebrazil0217@gmail.com','485d6e330c124160bad25dba9d40d764019be680e85468a7aa83ae42136c4d037d2347f255d073cb27417b11e581b0338fa5'),
(108,'lovebrazil0217@gmail.com','f53fb382c99668d179eaa0138791c351c48b861cdd6efde6dfc7d35f1fadba1d799cd38c324b1f39a0bbe1aad3ad985a828a'),
(109,'lovebrazil0217@gmail.com','7b0fb92b19715e90807dd689c6d3bc9a40e310c6ca8a5e1747f3765327b84af9c1f4b421168e607a5c9104cf30d9b6b2780a'),
(110,'lovebrazil0217@gmail.com','2c62f7bfa49163e94c7fcf61138e73349101161640cc12c1199ab8ec18184088dcdb78953d7b35caceb01dcf99089b8f924b'),
(111,'lovebrazil0217@gmail.com','e893059ca63a9fe22ce51c2c5fecd993659b42358c19fa5e240731bb2b4531ff8ece77fc196c4c68eb335da58b8e5e4b6cdf'),
(112,'blackday02@outlook.com','f4e4da0c540bc3debd749cc4a8d34e0da03f24640b9485f8e37836849f86d42c79fe462004b4125b688f8b3469d4a435dbe2'),
(113,'blackday02@outlook.com','93764f088aa96478e1324a01dc1702f35ea5cb1cb209c4607c26f0f9635f0c77675acdce9da638fef4b7c310a00e36d9a0f0'),
(114,'blackday02@outlook.com','d0d26bce0860c4d46679be0b8696941d09e024b3e4378fc9390f657b4adbe7398a12907382cc1bae46ec2812a59b36e2d3c9'),
(115,'blackday02@outlook.com','755a5da7c4562be289620c6e482ebf3010ec6d60edd8951be1b233d126bdc09760a0427508288716abc32322815825ec3f2b'),
(116,'blackday02@outlook.com','5bed59269eb14ec15cf1f8f17e6e110d755635f19f65b98980d9eaa0a2bfe09294362e3649a3c395ca505e54e36567e33450'),
(117,'blackday02@outlook.com','257919141749fec83f1bab07d04cd3dc62fde50afe0ad95aa22f5498fdff460e4423944dcfb54bbe236c9f2979ac357d18b8'),
(118,'blackday02@outlook.com','0cb0cd7a6f396cae3ab1d540bfe1daf220a7006026c697a156ad64a041d69d8ff92f5a3ef79278fa3d6fb048d0a52aed7224'),
(119,'blackday02@outlook.com','5dc130fa12345c95cdf34df7825de8df41b97617fa95d6077991ba578c2563088ef5cd431cb1b89b08c23a7b78a916150959'),
(120,'blackday02@outlook.com','cec69afac8dc780865e088338ea6506362126f4731b8dac1e4da848919b4e055496ea9625d04b03d7fe68386876fcd1307f6'),
(121,'blackday02@outlook.com','94e82f6ea12df8f576288f26b90a04475806f2db5837e649fe107dfbae36fdc3c169e5d16429dccc5a7ad371339f7e068cf4'),
(122,'blackday02@outlook.com','69d247fc9cbe77c9749eba9c4b23dacaab2b0c57ff212962e0fff535eba07622698026e009e484631acc72d545fd7174244a'),
(123,'lovebrazil0217@gmail.com','34c1e5346ad3f20b013adc1f5e4e0200f7684679627ff7eebd692adf4031c9b3ccf111d498557c9c60e51bc31a88cb727f2a'),
(124,'lovebrazil0217@gmail.com','4e1207faf8132ce0b938366cbf1b56db021357468bdd457a675cc35ac66bde584e6d57327a388453fb67a184c0e98835e001'),
(125,'lovebrazil0217@gmail.com','1f42066e13b5ff9e9de994a07ec9b65ab9c8aaefd100e8d149e4bc61d71ed63cadf71387d12b787340d57cde631a51604c10'),
(126,'lovebrazil0217@gmail.com','fa463e6ecd2718ea88add80b54ec43434bce3131972d23f91c880a9a3e16c223c252a01d584d1207bdc060af6574d66514da'),
(127,'lovebrazil0217@gmail.com','bb9e6325ff594813d5824d8ea6a882b09bbe2853598b1cb6610931130d2c87f50aba5d535de71c646f7b7c2414b9765d2f0a'),
(128,'lovebrazil0217@gmail.com','5ded5d281976485bb22508fc8b5bd00fee367bf16a04a89df9d4fe165de5ac358f3ca530d5a71cc5fa84c06f2980e8131435'),
(129,'lovebrazil0217@gmail.com','ba880ff4e033b41176f311f4b7a56a840525cf96a6a962d90355e7d3154016ec0a1e0d027b7ef5b790785b6d1d2b8b10687e'),
(130,'lovebrazil0217@gmail.com','edf7c08a2b455bc1b48d39f53e14ec3601db06a7863c707e62b3b6f86d769f10361c155d9b8c2d1f279ffdcd16f6fca4a262'),
(131,'lovebrazil0217@gmail.com','10da0290e63c7bdf083e69f8cd8fadcc7c31b10ecfafdb206d345ef80765b3c4763465d77e80d9d32e692b1ba9b6fd3c9d61'),
(132,'lovebrazil0217@gmail.com','328193094e1245691f77877ffa8272e0dbc8633db0e243a6e965bf03eaa86428647defe8b6371f1e851b623b37769e3ea823'),
(133,'lovebrazil0217@gmail.com','d2c2712546c46adc19c229e70728e83cfdd303d29fa3474e5c7b2cc8425b3eb84e25668ca18ec733d483174dbc24aea08337'),
(134,'lovebrazil0217@gmail.com','7ec9ebb32d353dc4b6ff84cac994452ac45ec4b00cae336f335187a209073feb7ad791817d013bcf4bba8b2df6e232f60e98'),
(135,'lovebrazil0217@gmail.com','77e0e4f4f16d7ad5f5c8f652692e3cfba37ad77dfb612d1fb47fe098e2a8cf9135103f4952b4cdf7e4fbbd6a676678d75315'),
(136,'lovebrazil0217@gmail.com','6f66b451030973aad945e67f3807e6185ee9a697034cd160bb7b70eabbbcef6cfa7b75edb69bfe0285abedfefa2cf986d555'),
(137,'lovebrazil0217@gmail.com','48d180e118e5bef2c1ea554755618f09b0633981b950dd8d4fe0864b764cd57643dcef203d365852e49506b5fcfa3d3013d9'),
(138,'lovebrazil0217@gmail.com','78c064055783136cd10e00447379699bc5e2e471d3bbd42cba021fd051a4c6f819ef9a29f9e6f19f591111449da6e2ecc3b4'),
(139,'lovebrazil0217@gmail.com','c7f4ec127f83a1ee7cf22348942b097ea6e7bd1bd0b0d0578ef8988b96a5bc263e138d66923dc1594c5643818c8500154da7'),
(140,'lovebrazil0217@gmail.com','1bd9eddf79ba257665466e141b8c6bdd49065aed6f3006432612b03e2b117486ac6a84056b56adfd44cc9a02ae508e3e5255'),
(141,'lovebrazil0217@gmail.com','1a0cf3278b024b23d3af87dfb21cfd87b0e7cf94ad2b99f66d5905ba977f945042587e589a7723f1b808dea2319244d7892e'),
(142,'lovebrazil0217@gmail.com','6e52fa3b6ef7be0ead5e0608049341360d9c5775baffa2ef1c25e2501ebab49290c9c7c12d16d15f193789fa75db93451271'),
(143,'blackday02@outlook.com','9eb7896432d624d3dba9299ea16417df4bc323613d1cadbc1865c7dbac569fda9bb3c0344cda1e2d44a3916816063418a665'),
(144,'blackday02@outlook.com','e3768f43d2813d6aa989427e453687eb0ec9024f47ac65469a1ad438c738588c129ec4f06040bfc6da1028650bba65b0b227');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`id`,`email`,`password`) values 
(20,'lovebrazil0217@gmail.com','$2y$10$nBPiO5UYX5EqVQCq.X/hCuR8xQLkU0wvuwc21EPiSkTYND9zqT0dC'),
(21,'blackday02@outlook.com','$2y$10$9.dowsKjIY58cvtQ707A/OG4zEYDDijqHihFS0Wej3vWk1OBvGLWu');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

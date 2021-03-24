-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2019 at 05:23 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubeswad`
--

-- --------------------------------------------------------

--
-- Table structure for table `actor`
--

CREATE TABLE `actor` (
  `id` int(200) NOT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `link` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `actor`
--

INSERT INTO `actor` (`id`, `nama`, `link`) VALUES
(1, 'Robert Downey Jr.', 'https://www.imdb.com/name/nm0000375/?ref_=fn_al_nm_1'),
(3, 'Tom Holland', 'https://www.imdb.com/name/nm4043618/?ref_=fn_al_nm_1'),
(4, 'Chris Hemsworth', 'https://www.imdb.com/name/nm1165110/?ref_=fn_al_nm_1'),
(5, 'Isabela Merced', 'https://www.imdb.com/name/nm5097044/'),
(6, 'Joaquin Phoenix', 'https://www.imdb.com/name/nm0001618/'),
(7, 'Shailene Woodley', 'https://www.imdb.com/name/nm0940362/'),
(8, 'Shia LaBeouf', 'https://www.imdb.com/name/nm0479471/'),
(9, 'Dwayne Johnson', 'https://www.imdb.com/name/nm0425005/'),
(10, 'Keanu Reeves', 'https://www.imdb.com/name/nm0000206/'),
(11, 'Nick Nolte', 'https://www.imdb.com/name/nm0000560/'),
(12, 'Margot Robbie', 'https://www.imdb.com/name/nm3053338/'),
(13, 'Martin Scorsese', 'https://www.imdb.com/name/nm0000217/'),
(14, 'Jason Momoa', 'https://www.imdb.com/name/nm0597388/'),
(15, 'Alexandra Daddario', 'https://www.imdb.com/name/nm1275259/'),
(16, 'Robert Pattinson', 'https://www.imdb.com/name/nm1500155/'),
(17, 'Demi Moore', 'https://www.imdb.com/name/nm0000193/'),
(18, 'Zendaya', 'https://www.imdb.com/name/nm3918035/'),
(19, 'Scarlett Johansson', 'https://www.imdb.com/name/nm0424060/');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(200) NOT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `feedback` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `email` varchar(50) NOT NULL,
  `password` varchar(10) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `username` varchar(50) NOT NULL,
  `NIP` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(200) NOT NULL,
  `judul` varchar(200) DEFAULT NULL,
  `link` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `judul`, `link`) VALUES
(1, 'Gundala (2019)', 'https://www.imdb.com/title/tt8237172/?ref_=fn_tt_tt_1'),
(2, 'Captain Marvel (2019)', 'https://www.imdb.com/title/tt4154664/?ref_=fn_al_tt_1'),
(3, 'Maleficent (2019)', 'https://www.imdb.com/title/tt4777008/?ref_=nv_sr_srsg_0'),
(4, 'How To Train Your Dragon Homecoming', 'https://idxx1.cam/movie/how-to-train-your-dragon-homecoming-2019-doob'),
(6, 'IT Chapeter II', 'https://idxx1.cam/movie/it-chapter-two-2019-a60e'),
(7, 'Dora the Explorer and the Lost City of Gold', 'https://idxx1.cam/movie/dora-the-explorer-and-the-lost-city-of-gold-2019-apkl'),
(10, 'The Lion King', 'https://idxx1.cam/movie/the-lion-king-2019-90pe'),
(11, 'Gemini Man', 'https://idxx1.cam/movie/gemini-man-2019-9pul'),
(12, 'A Shaun the Sheep Movie Farmageddon', 'https://idxx1.cam/movie/a-shaun-the-sheep-movie-farmageddon-2019-928j'),
(13, 'Rambo: Last Blood', 'https://idxx1.cam/movie/rambo-last-blood-2019-b7i2'),
(14, 'Hustlers', 'https://idxx1.cam/movie/hustlers-2019-bld1'),
(15, 'Tall Girl', 'https://idxx1.cam/movie/tall-girl-2019-delm'),
(16, 'The Mummy: Rebirth', 'https://idxx1.cam/movie/the-mummy-rebirth-2019-d78s'),
(17, '47 Meters Down: Uncaged', 'https://idxx1.cam/movie/47-meters-down-uncaged-2019-aag9'),
(18, 'Itsy Bitsy', 'https://idxx1.cam/movie/itsy-bitsy-2019-azzs'),
(19, 'Luce', 'https://idxx1.cam/movie/luce-2019-ak3s'),
(20, 'Fast & Furious Presents: Hobbs & Shaw', 'https://idxx1.cam/movie/fast-and-furious-presents-hobbs-and-shaw-2019-88b6'),
(21, 'The Angry Birds Movie 2', 'https://idxx1.cam/movie/the-angry-birds-movie-2-2019-9qsw'),
(22, 'A Score to Settle', 'https://idxx1.cam/movie/a-score-to-settle-2019-aqii'),
(23, 'Operation Brothers', 'https://idxx1.cam/movie/operation-brothers-2019-9ysr'),
(24, 'The Nightingale', 'https://idxx1.cam/movie/the-nightingale-2019-8kpm'),
(25, 'Scooby Doo! Return to Zombie Island', 'https://idxx1.cam/movie/scooby-doo-return-to-zombie-island-2019-d74u'),
(26, 'Midsommar', 'https://idxx1.cam/movie/midsommar-2019-bd8x'),
(27, 'Spider-Man: Far from Home', 'https://idxx1.cam/movie/spider-man-far-from-home-2019-97ht'),
(28, 'Toy Story 4', 'https://idxx1.cam/movie/toy-story-4-2019-6gns'),
(29, 'Escape Plan: The Extractors', 'https://idxx1.cam/movie/escape-plan-the-extractors-2019-aaei'),
(30, 'Childs Play', 'https://idxx1.cam/movie/childs-play-2019-bfre'),
(31, 'The Outsider', 'https://idxx1.cam/movie/the-outsider-2019-cz37'),
(32, 'Men in Black International', 'https://idxx1.cam/movie/men-in-black-international-2019-a9y7'),
(33, 'Godzilla: King of the Monsters', 'https://idxx1.cam/movie/godzilla-king-of-the-monsters-2019-808z'),
(34, 'Ma', 'https://idxx1.cam/movie/ma-2019-aro0'),
(35, 'The Greatest Showman', 'https://idxx1.cam/movie/the-greatest-showman-2017-6rul'),
(36, 'Ready or Not', 'https://idxx1.cam/movie/ready-or-not-2019-c5yx'),
(37, 'Ice Age: Continental Drift', 'https://idxx1.cam/movie/ice-age-continental-drift-2012-18lk');

-- --------------------------------------------------------

--
-- Table structure for table `registrasi`
--

CREATE TABLE `registrasi` (
  `id` int(200) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `nip` int(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registrasi`
--

INSERT INTO `registrasi` (`id`, `nama`, `nip`, `email`, `username`, `password`) VALUES
(2, 'khansa', 11111111, 'khansa@gmail.com', 'hellooo', 'helloooo'),
(3, 'aaaaaaaaaa', 123456789, 'aaaaaaa@gmail.com', 'aaaaa', 'aaaaa');

-- --------------------------------------------------------

--
-- Table structure for table `streaming`
--

CREATE TABLE `streaming` (
  `id` int(200) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `tahun` varchar(200) NOT NULL,
  `video` text NOT NULL,
  `sinopsis` text NOT NULL,
  `poster` varchar(200) NOT NULL,
  `genre` varchar(200) NOT NULL,
  `trailer` text,
  `keterangan` text,
  `actors` varchar(200) NOT NULL,
  `director` varchar(200) NOT NULL,
  `country` varchar(200) NOT NULL,
  `release_date` date NOT NULL,
  `ratings` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `streaming`
--

INSERT INTO `streaming` (`id`, `judul`, `tahun`, `video`, `sinopsis`, `poster`, `genre`, `trailer`, `keterangan`, `actors`, `director`, `country`, `release_date`, `ratings`) VALUES
(1, 'Avengers : Endgame', '2019', 'https://movies123hd.com/Movie 1.mp4', 'Setengah dari semua kehidupan di alam semesta hancur ketika Thanos menggunakan Batu Infinity, termasuk keluarga Clint Barton. Dua puluh tiga hari kemudian, Carol Danvers menyelamatkan Nebula dan Tony Stark, yang terdampar di luar angkasa setelah pertarungan mereka dengan Thanos. Mereka bergabung dengan Natasha Romanoff, Bruce Banner, Steve Rogers, Rocket, Thor, Pepper Potts, dan James Rhodes di Bumi. Kelompok itu menemukan Thanos disebuah planet terpencil dan berencana untuk merebut dan menggunakan batu Infinity dan membalikkan tindakannya, tetapi Thanos telah menghancurkan batu tersebut untuk mencegah digunakan kembali. Thor yang marah akhirnya memenggal Thanos.\r\n\r\n\r\nLima tahun kemudian, Scott Lang keluar dari alam kuantum. Ia pergi ke markas Avengers, dimana ia menjelaskan kepada Romanoff dan Rogers bahwa ia hanya melalui lima jam di alam kuantum, bukan lima tahun. dan ia berteori bahwa alam kuantum dapat memungkinkan mereka melakukan perjalanan waktu ke masa lalu, ', 'https://m.media-amazon.com/images/M/MV5BMTc5MDE2ODcwNV5BMl5BanBnXkFtZTgwMzI2NzQ2NzM@._V1_.jpg', 'Fantasy, Mystery ', NULL, 'Coming', 'Robert Downey, Chris Evans, etc', 'Anthony and Josseph Russo', 'American', '2019-04-22', '8/10 IMDb'),
(2, 'Maleficent', '2019', 'https://movies123hd.com/Movie 5.mp4', 'Maleficent is a powerful fairy living in the Moors, a magical forest realm bordering a human kingdom. As a young girl, Maleficent meets and falls in love with a Scottish human peasant boy named Stefan. His love is overshadowed by ambition, and as they grow older, the two grow apart and Maleficent becomes protector of the Moors.\r\n\r\nWhen King Henry tries to conquer the Moors, Maleficent mortally wounds him, forcing his retreat. As he lies dying, he declares that whoever kills Maleficent will be named his successor and marry his daughter, Princess Leila. Stefan visits Maleficent in the Moors, drugs her, but is unable to bring himself to kill Maleficent. Instead, he severs her wings using iron, which is lethal to fairies, and presents them to the king. Devastated by Stefan\'s betrayal, Maleficent turns the Moors into a dark kingdom and transforms a raven named Diaval to serve her.\r\n\r\nAfter some time, Diaval informs Maleficent that King Stefan\'s new-born daughter, Aurora is being christened. Vengeful, Maleficent arrives uninvited and curses the infant princess: on her 16th birthday, she will prick her finger on a spinning wheel spindle and fall into a permanent deep sleep. Maleficent mocks Stefan\'s plea for mercy but offers an antidote; the curse can be broken by true love\'s kiss, which Maleficent and Stefan believe is nonexistent.\r\n\r\nStefan sends Aurora away to live with three pixies — Knotgrass, Thistlewit, and Flittle — to protect her until the day after her 16th birthday. He destroys every spinning wheel in the kingdom and hides their remnants in the castle dungeon. Stefan sends his armies to find and kill Maleficent, but she surrounds the Moors with an impenetrable wall of thorns. In trying to prevent the curse, Stefan slips into madness and paranoia, even neglecting to see his wife on her deathbed.\r\n\r\nMaleficent gradually begins to care for the young Aurora when the bumbling and neglectful pixies fail to properly look after her. After briefly meeting Aurora, Maleficent watches over her from afar. When Aurora is 15, she encounters Maleficent. Aware she is being watched over, Aurora calls Maleficent her \"fairy godmother\". Maleficent unsuccessfully attempts to undo the curse, but it is unbreakable other than by true love\'s kiss. Meanwhile, in the forest, Aurora meets a young prince named Philip, and the two are attracted to each other.\r\n\r\nOn the day before Aurora\'s 16th birthday, Aurora tells Maleficent that she would like to live with her in the Moors. When Aurora returns to the cottage, the pixies inadvertently tell Aurora of her past and Maleficent\'s true identity. Aurora runs to her father\'s castle, upset that Maleficent had never told her about the curse.', 'https://upload.wikimedia.org/wikipedia/en/5/55/Maleficent_poster.jpg', 'Fantasy, Mystery', '', 'Recent', 'Angelina Jolie, Elle Fanning, Michelle Pfeiffer, Harris Dickinson, Sam Riley, Chiwetel Ejiofor', 'Joachim Rønning', 'United States', '2019-10-16', '7.2/10 Ratings'),
(6, 'Dora and the Lost City', '2019', 'https://movies123hd.com/Movie 3.mp4', 'Deep in the Peruvian jungle, Dora, daughter of explorers Cole and Elena, spends her days going on adventures with her monkey friend Boots, her cousin Diego, and imaginary friends Backpack and Map while thwarting the fox thief Swiper. When Dora is 6 years old and Diego 7, Diego leaves to be with his family in Los Angeles, while Dora\'s family remains searching for the hidden Inca city Parapata.\r\n\r\n10 years later, Dora\'s parents decipher the location of Parapata but choose to send Dora to Diego\'s school in LA while they travel to the lost city. Staying with Diego\'s family, Dora meets fellow students Sammy and Randy, but Diego considers her an embarrassment. On a class field trip to a museum, Dora and the others are lured to its off-exhibit archives, where they are captured by mercenaries who fly them to Peru. When they land, a man named Alejandro, who claims to be a friend of Dora\'s parents, helps them escape. In the process the mercenaries, aided by Swiper, steal Dora\'s map. Alejandro reports that Dora\'s parents have gone missing, and that the mercenaries are searching for them in hopes of getting into Parapata and stealing its treasures. Dora resolves to find her parents first with Alejandro\'s help, while the other teens come along in hopes of being rescued.\r\n\r\nThe group travels through numerous obstacles, including quicksand, Inca ruin puzzles, and attacks from forest guards of Parapata. After numerous hazards, Dora reaches her parents just outside the borders of Parapata, but Alejandro reveals he was working for the mercenaries all along and captures them. The other teens are caught as well, but Boots the monkey helps them escape. With Dora\'s parents still prisoners, the teens decide to find the way inside Parapata in hopes of acquiring treasure that they can use to bargain for Elena and Cole\'s release.\r\n\r\nInside the hidden city, Dora and the others solve its temple\'s puzzles and dodge its traps, bringing them to the center shrine. Alejandro turns out to have been following them, and attempts to steal its central idol himself, but instead falls into a trap. The soldiers guarding Parapata, led by their queen, defeat the mercenaries and confront the teens. Dora speaks to them in Quechua, assuring that the teens only came for her parents and to learn. The Inca permit the teens and Dora\'s family to leave, allowing them a glimpse of their greatest treasure.', 'https://upload.wikimedia.org/wikipedia/en/thumb/2/29/Dora_and_the_Lost_City_of_Gold_poster.jpg/220px-Dora_and_the_Lost_City_of_Gold_poster.jpg', 'Adventure, Comedy', 'https://youtu.be/gUTtJjV852c', 'Recent', 'Isabela Moner, Danny Trejo, Jeffrey Wahlberg, Benicio del Toro, Eugenio Derbez, Temuera Morrison', 'James Bobin', 'United States', '2019-08-08', '6.4/10 Ratings'),
(7, '47 Meters Down', '2019', 'https://movies123hd.com/Movie 4.mp4', 'Sisters Lisa (Mandy Moore) and Kate (Claire Holt) are on vacation in Mexico after Lisa\'s boyfriend recently broke up with her. They decide to go watch sharks from a diving cage with two local men. At the docks, Lisa is wary of the boat and its owner, Captain Taylor (Matthew Modine). Kate is a certified diver, but Lisa is new to diving. They lie to Taylor and tell him that Lisa is experienced. Unbeknownst to everyone, the cable supporting the cage is fraying.\r\n\r\nWhen Taylor sends Lisa and Kate down, they are surrounded by great white sharks. However, the cable breaks, and the cage sinks to the bottom which is 47 meters below the surface and out of communication range with the boat. Kate swims up seven meters to resume communication with Taylor, who tells her that Javier (Chris J. Johnson) will be coming down with a spare winch cable to attach to the cage. He advises them to stay in the cage because the sharks are close by. Both women are running out of air but soon see a flashlight in the distance. With Kate low on air from the previous swim, Lisa swims out to get Javier\'s attention. A shark tries to attack her but she avoids it.\r\n\r\nLisa becomes disoriented about her position. Javier attempts to usher her back towards safety, but he is killed by a shark. Lisa takes his spear gun and the winch cable and swims back to the cage. The spare cable is attached but it also snaps and the cage sinks back down, landing on Lisa\'s leg and pinning her. Kate tells Taylor they are low on air and Lisa is trapped. He sends air tanks down and tells them the coast guard is an hour out. He also warns that the second tank may cause nitrogen narcosis, which can lead to hallucinations. Kate finds three flares to signal the coast guard. As she returns to the cage, she is attacked and presumably killed by a shark. Lisa uses the spear from the spear gun to pull a tank toward her and dons it, getting more air.\r\n\r\nKate is injured and her blood is attracting more sharks. Lisa uses her BCD to lift up the cage, freeing her leg. Due to the nature of Kate\'s wounds, the sisters decide to swim to the surface, using one of the flares to scare off the sharks. At the 20-meter mark, Taylor reminds them they must wait five minutes to decompress and avoid the bends. Kate accidentally drops the second flare and lights the third, discovering that they are surrounded by sharks.', 'https://upload.wikimedia.org/wikipedia/en/e/e5/47_Meters_Down_%282017%29_Theatrical_Release_Poster.png', 'Thriller, Horror, Adventure', 'https://www.youtube.com/watch?v=-28uQ7rse98', 'Recent', 'Sophie Nélisse, Corinne Foxx, Sistine Rose Stallone, Brianne Tju, Brec Bassinger, John Corbett', 'Johannes Roberts', 'United Kingdom', '2019-08-15', '4.9/10 Ratings'),
(8, 'Angel Has Fallen', '2019', 'https://mega.nz/embed#!lEU0FCRI!_U6lYbalGhvBlp-eSfGjjgkn3WanPR0-4V9Lf5xdgn8', 'Secret Service agent Mike Banning (Gerard Butler) undergoes training at a private military facility owned by his friend Wade Jennings (Danny Huston), a former fellow Army Ranger who is currently the CEO of the private military company Salient Global, and is recommended for the position of Secret Service Director by the President of the United States, Allan Trumbull (Morgan Freeman), to replace retiring Director David Gentry (Lance Reddick). Banning hides the fact that he is suffering from migraines and insomnia with regular visits to several doctors, and begins taking medication to cope with recurring back pain.\r\n\r\nWhile the President is on a rural fishing trip, armed drones attack his protection detail, with only Banning surviving and saving the President; both are incapacitated, with Trumbull in a coma. FBI Agent Helen Thompson (Jada Pinkett Smith) finds substantial evidence that Banning may be responsible for the attack, with the van used to carry out the attack containing Banning\'s hair and DNA. Banning is subsequently arrested.\r\n\r\nEn route to a detention facility, Banning and his transport are ambushed. He escapes after killing the assailants, revealed to be agents who took part in his training exercise; Banning realizes that Jennings has betrayed and framed him. Banning calls his wife Leah (Piper Perabo), letting her know he is alive. The call alerts Thompson to Banning\'s location, leading to a car chase. However, Banning escapes again before heading to his father\'s home in the woods.\r\n\r\nWith Trumbull still comatose, Vice President Martin Kirby (Tim Blake Nelson) is sworn in as Acting President. Via surveillance cameras, Banning and his father Clay (Nick Nolte) observe Jennings\' men approaching the house; Clay detonates explosives around the perimeter, killing the would-be attackers as he and Banning escape, and Banning reveals to his father that he has a wife and daughter. Leah and her daughter are on the verge of being kidnapped by Jennings\' men when Clay saves them. Kirby reveals to the press that Banning is responsible for the assassination attempt with support from the Russian government.', 'https://upload.wikimedia.org/wikipedia/en/thumb/1/13/Angel_Has_Fallen_poster.jpg/220px-Angel_Has_Fallen_poster.jpg', 'Thriller', 'https://redirector.googlevideo.com/videoplayback?expire=1574095240&amp;ei=aK3SXePaLdHCz7sPntGmmA4&amp;ip=206.189.38.119&amp;id=1cb000cdb382d964&amp;itag=18&amp;source=picasa&amp;begin=0&amp;requiressl=yes&amp;mm=30&amp;mn=sn-npoe7ney&amp;ms=nxu&amp;mv=m&amp;mvi=3&amp;pl=23&amp;sc=yes&amp;ttl=transient&amp;susc=ph&amp;app=fife&amp;mime=video/mp4&amp;dur=7263.387&amp;lmt=1574068538470027&amp;mt=1574087966&amp;sparams=expire,ei,ip,id,itag,source,requiressl,ttl,susc,app,mime,dur,lmt&amp;sig=ALgxI2wwRQIgGISJXkAhN6Epyiq16Z3Mg7jKV9F07JZV450n1X89AMMCIQCfzI-YEONBbls1MyHrbY1dcKRHRDTANHO8VJ3XeV_nFg==&amp;lsparams=mm,mn,ms,mv,mvi,pl,sc&amp;lsig=AHylml4wRgIhAJIztJcFuyk2gIlm8U_gABSBVG5b1U0rV_37e0o3cN74AiEAhCDqmucVnpxaTTP1RiOzQnFN_WGB9qkJNqRVCNn7Tv4=\" jw-played=\"', 'Top', 'Gerard Butler, Morgan Freeman, Jada Pinkett Smith, Lance Reddick, Tim Blake Nelson, Piper Perabo', 'Ric Roman Waugh', 'United States', '2019-08-21', '5.8/10 Ratings'),
(10, 'Spider-Man', '2019', 'https://www.youtube.com/embed/Nt9L1jCKGnE', 'In Ixtenco, Mexico, Nick Fury and Maria Hill investigate an unnatural storm and encounter the Earth Elemental. Quentin Beck, a super-powered individual, arrives to fight the creature. A week later, in New York City, the Midtown School of Science and Technology completes its academic year which was restarted to accommodate the students who disappeared during the five-year period known as the Blip. They had reappeared eight months earlier thanks to the actions of the Avengers. The school organizes a two-week summer field trip to Europe, where Peter Parker—still mourning the death of his mentor and father figure Tony Stark[N 1]—plans to confess his growing feelings for classmate MJ. Happy Hogan informs Parker that Fury intends to contact him, but Parker ignores the call.\r\n\r\nParker and his classmates travel to Venice, Italy, where the Water Elemental attacks. Parker helps protect his classmates while Beck arrives and destroys the creature. Fury meets with Parker and gives him Stark\'s glasses, which were meant for his successor. The glasses are equipped with the artificial intelligence E.D.I.T.H., which has access to Stark Industries\' databases and commands a large orbital weapons supply. Beck claims to hail from an alternate reality within the Multiverse, where the Elementals killed his family. He now predicts that the Fire Elemental will appear in Prague. Parker declines Fury\'s invitation to join Beck\'s fight against the Elementals and returns to his class trip.\r\n\r\nFury secretly changes the school trip\'s itinerary so Parker will be directed to Prague, and there Parker is forced to help fight the Fire Elemental to again protect his friends. Beck is able to destroy the Fire Elemental with Parker\'s help. Fury and Hill invite Parker and Beck to Berlin to discuss the formation of a new superhero team, but Parker decides that Beck should go alone and bequeaths him the E.D.I.T.H. glasses. In actuality, Beck is secretly a former holographic-illusions specialist at Stark Industries who was fired for his unstable nature. He now leads a team of disgruntled ex-Stark employees, using advanced projector drones to simulate the Elemental attacks and masquerade as a hero; their plan was to gain access to E.D.I.T.H. so they could use the orbital weapons system\'s drones to increase the scale of their illusions.', 'https://upload.wikimedia.org/wikipedia/en/b/bd/Spider-Man_Far_From_Home_poster.jpg', 'Action, Comedy, Fantasy', 'https://www.youtube.com/watch?v=Nt9L1jCKGnE', 'Top, Recent', 'Tom Holland, Jake Gyllenhaal, Zendaya', 'Jon Watts', 'Germany, UK, USA', '2019-06-26', '8/10 ratings'),
(11, 'Aladdin', '2019', 'https://www.youtube.com/embed/foyufD52aog', 'Aladdin, a kind-hearted street urchin living in the Arabian city of Agrabah along with his pet monkey Abu, rescues and befriends Princess Jasmine, who has snuck out of the palace to explore, tired of her sheltered life. Meanwhile, the grand vizier, Jafar, schemes to overthrow Jasmine\'s father as the Sultan. He, along with his pet parrot sidekick Iago, seeks a magic lamp hidden in the Cave of Wonders that will grant him three wishes. He has been unable to retrieve the lamp himself because only “the diamond in the rough“ is allowed to enter the cave; anyone else will be devoured and killed by the cave itself.\r\n\r\nJafar discovers Aladdin is the diamond in the rough and when Aladdin sneaks back into the royal palace to talk to Jasmine, he is captured and persuaded by Jafar\'s deal to help him retrieve the lamp: since only Aladdin can enter the cave alive, he will retrieve the lamp for Jafar and Jafar will make Aladdin rich enough to impress Jasmine. Jafar warns Aladdin not to take anything but the lamp, even though he will be very tempted to. Inside the cave, Aladdin finds a magic carpet and obtains the lamp. Abu accidentally causes the cave to collapse after he picks up a ruby, as the cave thinks he is stealing. He gives it to Jafar as he hangs perilously from the exit of the cave in exchange for his help up. Jafar double crosses him however, and throws him and Abu back into the cave, though Abu steals the lamp back. The magic carpet also catches Aladdin and saves him from falling to his death.\r\n\r\nTrapped in the cave, Aladdin rubs the lamp, unwittingly summoning an omnipotent Genie, who lives inside it. Genie explains that he has the power to grant Aladdin three wishes, with the exceptions of murder, romance, resurrection of the dead, and more wishes. Aladdin tricks Genie into freeing them from the cave without using a wish. After they get out of the cave, Genie advises Aladdin that the deal is in the detail, meaning he should be very specific with wording his wishes; the vaguer they are, the more chance they can backfire. Aladdin uses his first official wish to become a prince to impress Jasmine, and promises to use his third wish to free Genie from servitude and turn him human.', 'https://upload.wikimedia.org/wikipedia/en/9/9a/Aladdin_%28Official_2019_Film_Poster%29.png', 'Comedy, Romance, Fantasy', 'https://www.youtube.com/watch?v=foyufD52aog', 'Top', 'Will Smith, \r\nMena Massoud, \r\nNaomi Scott, \r\nMarwan Kenzari, \r\nNavid Negahban, \r\nNasim Pedrad, \r\nBilly Magnussen', 'Guy Ritchie', 'United States', '2019-05-08', '9/10 ratings'),
(12, 'Aquaman', '2018', 'https://www.youtube.com/embed/aIXe8g3SWOE', 'In 1985, Maine lighthouse keeper Thomas Curry rescues Atlanna, the queen of the underwater kingdom of Atlantis, during a storm. They fall in love and have a son named Arthur, who is born with the power to communicate with sea creatures. Following an attack by Atlantean soldiers sent to retrieve Atlanna, who fled Atlantis to escape from an arranged marriage, Atlanna is forced to abandon her family and return to Atlantis, entrusting her advisor, Nuidis Vulko, with the mission of training Arthur. Under Vulko\'s guidance, Arthur becomes a skilled warrior, but rejects Atlantis upon learning that Atlanna was executed for having a half-breed son.\r\n\r\nThirty-three years later, several months after Steppenwolf\'s invasion,[N 1] Arthur confronts a team of pirates attempting to hijack a Russian Akula-class submarine. Their leader, Jesse Kane, dies during the confrontation while his son David vows revenge.\r\n\r\nMeanwhile, Orm, King of Atlantis and Arthur\'s half-brother, attempts to convince King Nereus of Xebel to help him unite Atlantis and attack the surface world for harming the oceans. Nereus points out that if Orm succeeds in uniting all four kingdoms, he will receive the title of Ocean Master, commander of the most powerful force on the planet. Their meeting is interrupted when a Russian Akula submarine attacks the meeting place, apparently in retaliation for the previous submarine\'s destruction. Orm succeeds in destroying it, and the attack convinces Nereus to join forces with Orm to defend the oceans. He swears allegiance to Orm\'s cause.\r\n\r\nHis daughter Mera, who has been betrothed to Orm, refuses to aid them and journeys to the surface to ask Arthur for help, earning his trust by saving Thomas from a tsunami sent by Orm. Arthur reluctantly accompanies Mera to a rendezvous with Vulko, who urges Arthur to find the Trident of Atlan, a magic artifact that once belonged to Atlantis\' first ruler, in order to reclaim his rightful place as king. They are ambushed by Orm\'s men, and Mera and Vulko escape unseen, while Arthur is captured.\r\n\r\nArthur is chained and presented before Orm, who blames Arthur and the surface for Atlanna\'s death. He offers Arthur an opportunity to leave forever, but Arthur instead challenges him to a duel in a ring of underwater lava. Orm gains the upper hand and nearly kills Arthur before Mera rescues him. Together, Arthur and Mera journey to the fallen Kingdom of the Deserters hidden under the Sahara desert, where the trident was forged, and they unlock a holographic message that leads them to Sicily, Italy, where they retrieve the trident\'s coordinates. Meanwhile, Orm meets David, revealing that the submarine that had attacked them previously was in fact the same one David hijacked and that Orm had hired him to hijack the Russian nuclear submarine so that he could stage a false flag attack from the surface, making it seem like Orm\'s cause for war is justified and causing King Nereus to side with him. Orm provides David with a prototype Atlantean battle suit to kill Arthur, imprisons Vulko after revealing knowledge of his betrayal, and coerces the Atlantean Kingdom of the Fishermen to pledge their allegiance to him and his campaign against the surface.', 'https://upload.wikimedia.org/wikipedia/en/3/3a/Aquaman_poster.jpg', 'Action, Adventure, Fantasy', 'https://www.youtube.com/watch?v=aIXe8g3SWOE', 'Top', 'Jason Momoa, \r\nAmber Heard, \r\nWillem Dafoe, \r\nPatrick Wilson, \r\nDolph Lundgren, \r\nYahya Abdul-Mateen II, \r\nNicole Kidman', 'James Wan', 'United States', '2018-12-21', '8/10 ratings'),
(13, 'Parasite', '2019', 'https://www.youtube.com/embed/SEUXfv87Wpk', 'All unemployed, Ki-taek and his family take peculiar interest in the wealthy and glamorous Parks, as they ingratiate themselves into their lives and get entangled in an unexpected incident.', 'https://m.media-amazon.com/images/M/MV5BOWVmODY4MjYtZGViYS00MzJjLWI3NmItMGFmMDRkMzI1OTU3XkEyXkFqcGdeQXVyNTQ0NTUxOTA@._V1_UY268_CR9,0,182,268_AL_.jpg', ' Comedy, Drama, Thriller', 'https://www.youtube.com/watch?v=SEUXfv87Wpk', 'Top', 'Kang-ho Song, Sun-kyun Lee, Yeo-jeong Jo ', 'Bong Joon Ho', 'South Korea', '2019-06-28', '8.6/10 Ratings'),
(14, 'Extraordinary You', '2019', 'https://www.youtube.com/embed/Hga-FeeSspw', 'Eun Dan Oh is a 17-year-old high-school student from a wealthy family who suffers from a lifelong heart condition that inevitably means she will not live past her teenage years. However, when Dan Oh realizes she is experiencing long gaps in her memory as well, she comes into the unhappy inheritance of another fact in her life: she is a character in a Korean webtoon and all of her actions are predetermined by the artist who draws her. To make matters worse, she discovers she is only a supporting character in the cast. With her newfound understanding of the world she inhabits, she is determined to find true love in her own plot-line and circumvent the author\'s plans for her character by utilizing the flashes of storyboard she alone is able to see.', 'https://m.media-amazon.com/images/M/MV5BNGMzNmFmNmQtYTA3Ny00YzA4LWI3ODMtNDU2NjBlNmNhOWQ5XkEyXkFqcGdeQXVyNjc3MjQzNTI@._V1_UY268_CR2,0,182,268_AL_.jpg', 'Comedy, Fantasy, Romance', 'https://www.youtube.com/watch?v=Hga-FeeSspw', 'Recent', ' Kim Hye-Yoon, Ro-Woon Kim, Jae-Wook Lee', ' MBC Productions', 'South Korea', '2019-10-08', '8.8/10 Ratings'),
(15, 'Strangers From Hell', '2019', 'https://www.mp4upload.com/embed-jdhwx3rv92ir.html\r\n', 'Yoon Jong Woo is a man in his 20\'s. He has lived in a small town for all of his life, but he gets a job at a small office in Seoul. Yoon Jong Woo moves out to Seoul and stays at a cheap apartment which shares its kitchen and bathroom with other residents. He doesn\'t like staying at the apartment and he doesn\'t like the other residents who seem weird and suspicious.\r\n\r\n', 'https://m.media-amazon.com/images/M/MV5BNTlkZTc2YzktZGEwYS00YzJmLWI3M2YtMmI1M2Y2MDNlNmI1XkEyXkFqcGdeQXVyOTE4NzcwNzI@._V1_UY268_CR3,0,182,268_AL_.jpg', 'Horror, Mystery, Romance', NULL, 'Recent', ' Si-wan Im, Dong-Wook Lee, Eun-Jin Ahn ', 'Taineun Jiokida', 'South Korea', '2019-08-31', '8.1/10 Ratings'),
(16, 'Arctic Dogs', '2019', 'https://cinema21xxi.xyz/iembed/?source=aHR0cHM6Ly83MjBweC5uZXQvZW1iZWQtZnZqMDNxa2V4ZTduLmh0bWw=', 'Swifty the Arctic Fox (Jeremy Renner) works in the mailroom of the Arctic Blast Delivery Service, but he has much bigger dreams. He yearns to become a Top Dog, the Arctic\'s star husky couriers. To prove he can do it, he commandeers one of the sleds and delivers a mysterious package to a secret location. Once there, he stumbles on a hidden fortress overseen by the nefarious Otto Von Walrus (John Cleese). The blubbery evil genius commands an army of oddly polite puffin henchmen. Swifty discovers Otto Von Walrus\' villainous plan to drill beneath the snow-packed surface to unleash masses of ancient gas to melt the Arctic and become the world\'s supreme ruler. To stop this sinister scheme, Swifty enlists the help of his friends: PB (Alec Baldwin), a neurotic polar bear, Lemmy (James Franco), a scatterbrained albatross, Jade Fox (Heidi Klum), a brainy engineer, Leopold (Omar Sy) and Bertha (also voiced by Heidi Klum), two conspiracy theorist otters and Magda (Anjelica Huston), his curmudgeonly boss.', 'https://upload.wikimedia.org/wikipedia/en/a/a8/Arctic_Dogs_poster.jpg', 'Comedy', NULL, 'Recent', 'Jeremy Renner, Heidi Klum, James Franco, John Cleese', 'Aaron Woodley', 'USA', '2019-11-01', '3.7/10 IMDB'),
(17, 'Beautiful Love Wonderful Life', '2019', 'https://mega.nz/embed#!8PYRzSYC!0ZDw43HTo0M8EqhhyIp4_OWVyUKL9lp7yhOkYLHnk2I', 'Joon Hwi, a strict individualist, who does not believe in marriage, meets Cheong Ah, who barely scrapes by with part-time jobs, and a youthful romance brews between them.', 'https://i.mydramalist.com/QN30Ac.jpg', 'Romance', 'https://www.youtube.com/watch?v=dtvIyOFMGqE', 'Top', 'Seol In-ah, Kim Jae-young, Jo Yoon-hee, Yoon Park, Oh Min-suk, Jo Woo-ri', 'Han Joon-Seo', 'South Korea', '2019-09-28', '8.2/10 (MyDramaList)'),
(18, 'Blood Myth', '2019', 'https://720px.net/embed-4vp15ikx15fx.html', 'A journalist attempts to find his missing fiancee and uncovers the truth behind a sinister folklore. This leads him him down a dangerous road.', 'https://m.media-amazon.com/images/M/MV5BMTI3OTIxN2UtYzkyNi00MWYxLWExMWEtNTBkY2RkNmI3YjBiXkEyXkFqcGdeQXVyMDQ1MTI1OA@@._V1_UY268_CR4,0,182,268_AL_.jpg', 'Horror', 'https://www.youtube.com/watch?v=i-vFA5CegXw', 'Top', 'Tony Goodall, Adrian Annis, Daniel Thrace', 'Sean Brown, Luke Gosling', 'United Kingdom', '2017-10-12', '2.9/10 IMDb'),
(19, 'Boboiboy Movie 2', '2019', 'https://cinema21xxi.xyz/iembed/?source=aHR0cHM6Ly83MjBweC5uZXQvZW1iZWQtemFqeHl3b3J5ZnIzLmh0bWw=', 'BoBoiBoy and his friends have been attacked by a villain named Retak\'ka who is the original user of BoBoiBoy\'s elemental powers. He seeks to take back his elemental powers from BoBoiBoy to become the most powerful person and dominate the galaxy. Together with his friends, BoBoiBoy must find a way to defeat Retak\'ka before his powers fall into the wrong hands.', 'https://m.media-amazon.com/images/M/MV5BZDYxOGRiNjktN2ExZC00YzFmLWEyYjQtNTY1YjEzYjNiNTI1XkEyXkFqcGdeQXVyMDM3MzU0Ng@@._V1_SY1000_SX750_AL_.jpg', 'Animation', 'https://www.youtube.com/watch?v=WoFJ8nV4OV4', 'Coming', 'Nur Fathiah Diaz, Nizam Razak, Nur Sarah Alisya', 'Nizam Razak', 'Malaysia', '2019-08-08', '8.1/10 IMDb'),
(20, 'Catch The Ghost', '2019', 'https://mega.nz/embed#!YJtiCaBB!kUsmTYhwlXs3ZO5sOIt7-C3WD6XSoqFBqGT6Hn7AijU', 'Yoo Ryeong becomes a police investigator in order to find her missing twin sister. She does not always follow the rules as she strongly believes in justice. She partners with Go Ji-seok.', 'https://upload.wikimedia.org/wikipedia/en/thumb/6/62/CatchTheGhostSeriesPoster2019.jpg/250px-CatchTheGhostSeriesPoster2019.jpg', 'Drama', 'https://www.youtube.com/watch?v=wnQ0qrAbKSc', 'Top', 'Moon Geun-young, Kim Seon-ho', 'Shin Yoon-seob', 'South Korea', '2019-10-21', '8.5/10 (MyDramaList)'),
(21, 'Cosmos', '2019', 'https://720px.net/embed-fml5ha63rh81.html', 'Three astronomers accidentally intercept what they believe to be a signal from a distant alien civilisation, but the truth is even more incredible than any of them could have imagined.', 'https://m.media-amazon.com/images/M/MV5BOThkMjRjMzgtY2ZkMS00ZmJhLWEzYTQtNWUwMjk5YmI3N2UzXkEyXkFqcGdeQXVyMjY0Njg5MjE@._V1_SY1000_CR0,0,706,1000_AL_.jpg', 'Adventure, Mystery', 'https://www.youtube.com/watch?v=b95XIREFJwo', 'Recent', 'Arjun Singh Panam, Tom England, Joshua Ford', 'Elliot Weaver, Zander Weaver', 'USA', '2019-11-07', '5.1/10 (IMDb)'),
(22, 'Door in the Woods', '2019', 'https://cinema21xxi.xyz/iembed/?source=aHR0cHM6Ly83MjBweC5uZXQvZW1iZWQtcnd5MHlmamVzdzZ4Lmh0bWw=', 'Things take a turn for the worst when a small town family finds an abandoned door in the woods. Is this just an abandoned door, or a gateway to something so dark no one sees coming?', 'https://m.media-amazon.com/images/M/MV5BNmZkZjVjOGUtYjI0Yy00MzIwLWEwODEtYjQzNTI2MjFkZjliL2ltYWdlL2ltYWdlXkEyXkFqcGdeQXVyNTkxNjI4NjY@._V1_SY1000_CR0,0,667,1000_AL_.jpg', 'Thriller', 'https://www.youtube.com/watch?v=7htCSQpz6tg', 'Top', 'Jennifer Pierce Mathus, David Rees Snell, CJ Jones', 'Billy Chase Goforth', 'USA', '2019-10-29', '3.14/10 (IMDb)'),
(23, 'Earthquake Bird', '2019', 'https://cinema21xxi.xyz/iembed/?source=aHR0cHM6Ly83MjBweC5uZXQvZW1iZWQtNWNqZWhnZTNvMzBkLmh0bWw=', 'In 1980s Tokyo, an enigmatic expat is suspected of killing her friend, who\'s gone missing in the wake of their love triangle with a local photographer.', 'https://m.media-amazon.com/images/M/MV5BZDA2NjRkNTktMDg3YS00OTVhLTlmOGMtYWZkMGQyYjVhZjJhXkEyXkFqcGdeQXVyMDM2NDM2MQ@@._V1_.jpg', '', NULL, 'Coming', '', '', '', '0000-00-00', ''),
(24, 'Gemini Man', '2019', 'https://cinema21xxi.xyz/iembed/?source=aHR0cHM6Ly83MjBweC5uZXQvZW1iZWQtd3JoazRhaHg1NjdpLmh0bWw=', 'Henry Brogan is an elite 51-year-old assassin who\'s ready to call it quits after completing his 72nd job. His plans get turned upside down when he becomes the target of a mysterious operative who can seemingly predict his every move. To his horror, Brogan soon learns that the man who\'s trying to kill him is a younger, faster, cloned version of himself.', 'https://m.media-amazon.com/images/M/MV5BNjI5OTNkMzUtZDYzYy00NWQ5LTg4YzYtZmZjZDI0MGQzNGY2XkEyXkFqcGdeQXVyNjg2NjQwMDQ@._V1_.jpg', 'Action, Thriller', 'https://www.youtube.com/watch?v=AbyJignbSj0', 'Recent', 'Will Smith, Mary Elizabeth Winstead, Clive Owen', 'Ang Lee', 'USA', '2019-10-05', '5.7/10 (IMDb)'),
(25, 'Ghost in the Graveyard', '2019', 'https://720px.net/embed-hzwcicnoe887.html', 'In the small town of Mt. Moriah, a group of children witnesses the death of a young girl while playing a game.', 'https://m.media-amazon.com/images/M/MV5BYTJmMDE3YzQtMWM5Ni00ZGJmLThkYjQtODdkMDM0ZjM0MzI0XkEyXkFqcGdeQXVyNjUzMzQzOTU@._V1_SY1000_SX675_AL_.jpg', 'Action, Drama, Horror ', 'https://www.youtube.com/watch?v=eL5cATgsyMk', 'Recent', 'Kelli Berglund, Jake Busey', 'Charlie Comparetto', 'USA', '2019-11-05', '4.9/10 (IMDb)'),
(26, 'Hacker', '2019', 'https://720px.net/embed-phpz58udjliy.html', 'Thirteen-year-old Benjamin discovers that his mother didn\'t die in an accident as he was led to believe. The trail points to high-ranking officials in the Danish Secret Service, and he is told to trust no one.', 'https://m.media-amazon.com/images/M/MV5BZGJiZGMwMmUtMjdiZS00M2QzLWE3YjAtNTU2MjQ2ZDE3NDE1XkEyXkFqcGdeQXVyMTc5OTQwMzk@._V1_SY1000_CR0,0,666,1000_AL_.jpg', 'Action, Family', 'https://www.youtube.com/watch?v=-aqrrbRYXRI', 'Recent', 'Esben Dalgaard Andersen, Janus Nabil Bakrawi, Alfred Bjerre Larsen ', 'Poul Berg', 'Denmark', '2019-03-28', '5.3/10 (IMDb)'),
(27, 'Hyung', '2016', 'https://mega.nz/embed#!0EoAWIpb!uSK7WiT-mhz-YRdlLT2asFLv2wQaD0-wm4sil4lF6EQ', 'A man is paroled to help his brother adjust to his loss of sight. When he learns he has terminal cancer, he rushes to help his brother win gold at the Paralympics to secure his future.', 'https://4.bp.blogspot.com/-e0SJVz8nBCg/WNUJzn_7NrI/AAAAAAAAAXc/AQye-pDZZW0sMhL7RUDthsdx4qT2iAB6gCLcB/s1600/hyung.jpg', 'Comedy, Drama', 'https://www.youtube.com/watch?v=du8wZhOc5bI', 'Recent', 'Jo Jung-suk, Do Kyung-soo, Park Shin-hye', 'Kwon Soo-kyung', 'South Korea', '2016-11-23', '7.2/10 (IMDb)'),
(28, 'Joker', '2019', 'https://720px.net/embed-4fssd7g6ahe0.html', 'Forever alone in a crowd, failed comedian Arthur Fleck seeks connection as he walks the streets of Gotham City. Arthur wears two masks -- the one he paints for his day job as a clown, and the guise he projects in a futile attempt to feel like he\'s part of the world around him. Isolated, bullied and disregarded by society, Fleck begins a slow descent into madness as he transforms into the criminal mastermind known as the Joker.', 'https://upload.wikimedia.org/wikipedia/en/e/e1/Joker_%282019_film%29_poster.jpg', 'Drama, Thriller', 'https://www.youtube.com/watch?v=t433PEQGErc', 'Recent', 'Joaquin Phoenix', 'Todd Phillips', 'USA', '2019-10-04', '8.8/10 (IMDb)'),
(29, 'Klaus', '2019', 'https://cinema21xxi.xyz/iembed/?source=aHR0cHM6Ly83MjBweC5uZXQvZW1iZWQtMjAxamZtNTc5dmQ1Lmh0bWw=', 'After proving himself to be the worst postman at the academy, a postman is posted to a frozen town in the North where he discovers Santa Claus is hiding out.', 'https://m.media-amazon.com/images/M/MV5BMWYwOThjM2ItZGYxNy00NTQwLWFlZWEtM2MzM2Q5MmY3NDU5XkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_.jpg', 'Adventure, Comedy', 'https://www.youtube.com/watch?v=taE3PwurhYM', 'Recent', 'Joan Cusack, Rashida Jones, J.K. Simmons', 'Sergio Pablos', 'USA', '2019-11-08', '8.4/10 (IMDb)'),
(31, 'Line of Duty', '2019', 'https://cinema21xxi.xyz/iembed/?source=aHR0cHM6Ly83MjBweC5uZXQvZW1iZWQtdG5jcHNmYWM1d2I4Lmh0bWw=', 'A disgraced cop finds himself in a race against time to find a kidnap victim whose abductor he accidentally killed.', 'https://extraimage.net/images/2019/11/15/b20424c98a2c7b2fc1aa9b760303c0e6.jpg', 'Action, Thriller', 'https://www.youtube.com/watch?v=OiKzf4EF7xk', 'Coming', 'Dina Meyer, Giancarlo Esposito, Aaron Eckhart', 'Steven C. Miller', 'USA', '2019-11-15', '5.0/10 (IMDb)'),
(34, 'Lady and the Tramp', '2019', 'https://cinema21xxi.xyz/iembed/?source=aHR0cHM6Ly83MjBweC5uZXQvZW1iZWQtZ2RvYzU3ZGVtc2VqLmh0bWw=', 'An upper-middle-class American cocker spaniel named Lady and a street-smart, stray schnauzer called Tramp embark on many adventures.', 'https://upload.wikimedia.org/wikipedia/en/thumb/9/9f/LadyandtheTramp2019OfficialPoster.jpg/220px-LadyandtheTramp2019OfficialPoster.jpg', 'Animation', 'https://www.youtube.com/watch?v=A2ZDDU34gYw', 'Recent', 'Tessa Thompson, Justin Theroux, Kiersey Clemons', 'Charlie Bean', 'USA', '2019-11-12', '6.4/10 (IMDb)'),
(35, 'Mahasiswi Baru', '2019', 'https://720px.net/embed-b7hq8hbfx621.html', 'Seorang ibu bernama Lastri (Widyawati) yang sangat ingin menghabiskan masa tuanya dengan berkuliah. Ingin membuktikan niatnya, ia pun mendaftarkan diri di sebuah universitas.', 'https://m.media-amazon.com/images/M/MV5BNDI5YTQ5ODEtZWM2NC00NGY2LTkwNzctZDdlMGMxMGYzZDRiXkEyXkFqcGdeQXVyNzY4NDQzNTg@._V1_UX182_CR0,0,182,268_AL_.jpg', 'Drama, Comedy', 'https://www.youtube.com/watch?v=s5ZZOkWW1Wo', 'Recent', 'Seorang ibu bernama Lastri (Widyawati) yang sangat ingin menghabiskan masa tuanya dengan berkuliah. Ingin membuktikan niatnya, ia pun mendaftarkan diri di sebuah universitas.', 'Monty Tiwa', 'Indonesia', '2019-08-08', '5.8/10 (IMDb)'),
(36, 'Melting Me Softly', '2019', 'https://mega.nz/embed#!lEU0FCRI!_U6lYbalGhvBlp-eSfGjjgkn3WanPR0-4V9Lf5xdgn8', 'Ma Dong-chan (Ji Chang-wook) and Ko Mi-ran (Won Jin-ah) are both frozen during an experiment. They wake up 20 years later instead of 24 hours later and must keep their body temperature at 31.5° (max. 33°/88-91° in Fahrenheit) in order to survive. But now the antidote is being prepared for them to get out of this illness', 'https://upload.wikimedia.org/wikipedia/en/6/67/Melting_Me_Softly.jpg', 'Romance', 'https://www.youtube.com/watch?v=LnynnTINd6I', 'Top', 'Ji Chang-wook, Won Jin-ah, Yoon Se-ah', 'Shin Woo-cheol', 'South Korea', '2019-09-28', '9.4/10'),
(37, 'Psycopath Diary', '2019', 'https://cinema21xxi.xyz/iembed/?source=aHR0cHM6Ly93d3cuZmVtYmVkLmNvbS92L2w3cTN4Zm4yZzNnNGU1cQ==', 'The story of a man named Yook Dong-sik who coincidentally witnesses a murder and picks up the killer\'s diary. While fleeing the scene, he gets into a car accident causes him to lose his memory. Due to the diary in his possession, he mistakenly believes that he is a psychopathic serial killer.', 'https://0.soompi.io/wp-content/uploads/2019/10/28165050/yoon-shi-yoon-psychopath-diary-poster.jpg', 'Thriller, Comedy', 'https://www.youtube.com/watch?v=ptOJjTL1Pdg', 'Recent', 'Yoon Shi‑yoon, Jung In‑sun, Park Sung‑hoon', 'Lee Jong-jae', 'South Korea', '2019-11-20', '8.5/10 (MyDramaList)'),
(38, 'Radioflash', '2019', 'https://720px.net/embed-mtpsb962v5dl.html', 'In a dystopian future, a tech-savvy teenager and her father flee the city and seek refuge with her grandfather deep in the mountains of the Pacific Northwest.', 'https://m.media-amazon.com/images/M/MV5BYTA1MGYyZjYtNzBhMC00YjcwLTk0Y2MtNmFmMzUxYmIwZDBiXkEyXkFqcGdeQXVyODY3Nzc0OTk@._V1_.jpg', 'Drama, Thriller', 'https://www.youtube.com/watch?v=YUpHPe2Bz2w', 'Recent', 'Dominic Monaghan, Brighton Sharbino, Will Patton', 'Ben McPherson', 'USA', '2019-11-15', '4.5/10 (IMDb)'),
(39, 'The Aeronauts', '2019', 'https://cinema21xxi.xyz/iembed/?source=aHR0cHM6Ly83MjBweC5uZXQvZW1iZWQtdHA5MHN1dW5ic2F1Lmh0bWw=', 'In 1862 headstrong scientist James Glaisher and wealthy young widow Amelia Wren mount a balloon expedition to fly higher than anyone in history. As their perilous ascent reduces their chances of survival, the unlikely duo soon discover things about themselves -- and each other -- that help both of them find their place in the world.', 'https://m2.odeon.co.uk/_uploads/asset_management/220x320_868b4554a6fcd36444550248f874e3ae.jpg', 'Drama/Thriller', 'https://www.youtube.com/watch?v=Rm4VnwCtQO8', 'Top', 'Eddie Redmayne, Felicity Jones', 'Tom Harper', 'USA', '2019-11-04', '6.7/10 (IMDb)'),
(40, 'The Living Dead', '2019', 'https://cinema21xxi.xyz/iembed/?source=aHR0cHM6Ly83MjBweC5uZXQvZW1iZWQtdDJ3bWgzcGs3aHRrLmh0bWw=', 'Near Qishan Mountain, there is a little town called Fu Feng, which is nicknamed the \"City That Never Turns Dark\". There, lies a legend of the \"Lit Lamp Murderer\". Wen Ning arrives at Fu Feng, and he realizes the abnormality of the town; the whole town is filled only with the weak and sick; and is very run down. When the night arrives, Wen Ning purposefully lit up a lamp to attract ghost shadows. Just as he was about to capture them, a ray of blue sword light appears and the black shadow disappears. Wen Ning looks up, and sees his famillar friend, Lan Sizhui. Wen Ning and Lan Sizhui decides to work together and solve the mystery and capture the culprit behind the mysterious incidents.', 'https://i.mydramalist.com/wKPXbf.jpg', 'Action, Adventure', 'https://www.youtube.com/watch?v=HS3l2gi3yHg', 'Top', 'Zheng Fan Xing, Gao Han, Paul Yu', 'Steve Cheng, Chan Ka Lam', 'China', '2019-11-07', '9.4/10 (IMDb)');

-- --------------------------------------------------------

--
-- Table structure for table `theaters`
--

CREATE TABLE `theaters` (
  `id` int(200) NOT NULL,
  `judul` varchar(200) DEFAULT NULL,
  `link` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `theaters`
--

INSERT INTO `theaters` (`id`, `judul`, `link`) VALUES
(1, 'Frozen II (2019)', 'https://www.imdb.com/video/imdb/vi2143993625?ref_=inth_ov_vi'),
(2, 'A Beautiful Day in the Neighborhood (2019)', 'https://www.imdb.com/video/imdb/vi3470638873?ref_=inth_ov_vi'),
(3, '21 Bridges (2019)', 'https://www.imdb.com/video/imdb/vi2682961689?ref_=inth_ov_vi'),
(4, 'Dark Waters (2019)', 'https://www.imdb.com/video/imdb/vi3717512985?ref_=inth_ov_vi'),
(5, 'Citizen K (2019)', 'https://www.imdb.com/video/imdb/vi4260019993?ref_=inth_ov_vi'),
(6, 'Hala (2019)', 'https://www.imdb.com/video/imdb/vi3553935129?ref_=inth_ov_vi'),
(7, 'Ford v Ferrari (', 'https://www.imdb.com/title/tt1950186/videoplayer/vi1737539353?ref_=tt_ov_vi'),
(8, 'Charlie\'s Angels', 'https://www.imdb.com/title/tt5033998/videoplayer/vi3874602777?ref_=tt_ov_vi'),
(9, 'Maleficent', 'https://www.imdb.com/title/tt4777008/videoplayer/vi2618932249?ref_=tt_ov_vi'),
(10, 'Doctor Sleep', 'https://www.imdb.com/videoplayer/vi212254489?playlistId=tt5606664&ref_=tt_ov_vi'),
(11, 'The Good Liar', 'https://www.imdb.com/title/tt5563334/videoplayer/vi1183235865?ref_=tt_ov_vi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actor`
--
ALTER TABLE `actor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registrasi`
--
ALTER TABLE `registrasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `streaming`
--
ALTER TABLE `streaming`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `theaters`
--
ALTER TABLE `theaters`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actor`
--
ALTER TABLE `actor`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `registrasi`
--
ALTER TABLE `registrasi`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `streaming`
--
ALTER TABLE `streaming`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `theaters`
--
ALTER TABLE `theaters`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

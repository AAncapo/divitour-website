-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 13, 2024 at 05:40 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `divitour_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cursos`
--

CREATE TABLE `cursos` (
  `id` int(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `inmersiones` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cursos`
--

INSERT INTO `cursos` (`id`, `title`, `description`, `inmersiones`) VALUES
(1, 'Curso Open Water SNSI', '', 4),
(2, 'Curso Advanced SNSI', '', 5),
(3, 'Curso Especializado', '', 0),
(4, 'Snorkeling', '', 0),
(5, 'Crossover', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `destinos`
--

CREATE TABLE `destinos` (
  `id` varchar(10) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` text NOT NULL,
  `banner_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `destinos`
--

INSERT INTO `destinos` (`id`, `nombre`, `descripcion`, `banner_url`) VALUES
('cayolargo', 'Cayo Largo del Sur', 'Cayo Largo is a paradise destination for diving enthusiasts. Located in the Canarreos Archipelago, Cuba, this cay offers a unique and thrilling underwater experience. Its turquoise and crystal-clear waters are home to a great diversity of marine life and spectacular coral reefs. Divers can explore impressive vertical walls covered in coral, underwater caves, canyons, and vibrant coral gardens. The visibility in the waters of Cayo Largo is exceptional, easily reaching 30 meters or more. This allows for detailed appreciation of the beauty of the corals, as well as the observation of brightly colored tropical fish, sea turtles, rays, sharks, and other fascinating species.\r\nIn addition to the reefs, Cayo Largo features several shipwrecks that offer exciting exploration opportunities. These submerged wrecks provide a unique habitat for a variety of marine species and add an element of adventure to the dives. Diving centers in Cayo Largo have expert and certified staff and offer a wide range of options for divers of all levels, from beginners to experienced divers. Certification courses and specialized dive programs can also be undertaken.', ''),
('guillermo', 'Cayo Guillermo', 'Cayo Guillermo, located in the Jardines del Rey archipelago of Cuba, is a paradise for scuba diving enthusiasts seeking to explore the wonders of the underwater world. With its pristine turquoise waters, vibrant coral reefs, and abundant marine life, Cayo Guillermo offers a captivating diving experience that leaves a lasting impression.\r\nOne of the main attractions for scuba diving in Cayo Guillermo is the extensive coral reef system that surrounds the island. Dive sites such as El Acuario and El Farallon offer diverse and colorful coral formations, including brain corals, sea fans, and barrel sponges. These reefs serve as a habitat for a rich variety of marine species, including tropical fish, lobsters, moray eels, and even the majestic eagle rays and sharks.\r\nIn addition to the coral reefs, Cayo Guillermo is home to several fascinating shipwrecks. The most famous wreck, the Cabezo del Palo, lies in shallow waters and is a popular spot for divers to explore. This sunken ship has become an artificial reef, attracting a variety of marine life and creating an intriguing underwater landscape.\r\nThe diving conditions in Cayo Guillermo are generally excellent, with warm waters averaging between 25 and 30 degrees Celsius (77-86 degrees Fahrenheit) throughout the year. The visibility is often exceptional, ranging from 20 to 30 meters (65-100 feet), allowing divers to fully appreciate the underwater spectacle.\r\nFor those new to scuba diving or looking to enhance their skills, Cayo Guillermo offers certified dive centers equipped with experienced instructors. These professionals provide comprehensive training programs, ensuring that divers receive proper guidance and can safely explore the underwater wonders of Cayo Guillermo.\r\nIn summary, scuba diving in Cayo Guillermo offers an enchanting journey into a world of vibrant coral reefs, diverse marine species, and intriguing shipwrecks. Whether you\'re a beginner or an experienced diver, Cayo Guillermo\'s underwater marvels provide an unforgettable experience that will leave you with incredible memories of your time exploring these captivating Caribbean waters.\r\n', ''),
('havana', 'Havana', 'As diving enthusiasts, we always seize any opportunity to plunge into the water, and if you\'re going to be in Havana, we can also dive into shipwrecks, coral reefs, and enjoy a diverse marine life. Indeed, Havana has several certified diving sites with excellent instructors that will allow us to appreciate the underwater world of the Havana coastline in the warm waters of the Caribbean Sea. We will encounter various vibrant tropical fish, such as angelfish, parrotfish, butterflyfish, and clownfish, along with other species like barracudas, rays, moray eels, lobsters, and crabs.', ''),
('jibacoa', 'Jibacoa', 'Scuba diving at Memories Jibacoa offers divers access to a variety of technical diving experiences. The dive center is equipped with high-quality gear, including air tanks and compressors, ensuring a reliable and safe diving operation. The water temperature ranges from 24°C to 30°C, providing comfortable diving conditions year-round.\r\n\r\nDivers can explore vibrant coral reefs, walls, and fascinating shipwrecks. The reefs are home to a diverse range of marine life, including colorful tropical fish, turtles, rays, and moray eels. The walls offer thrilling dives with depths ranging from 10 to over 40 meters, adorned with coral and sponges, and inhabited by pelagic fish, sharks, and barracudas. The area\'s shipwrecks provide exciting opportunities for exploration, catering to divers of different skill levels.\r\n\r\nWith excellent visibility often exceeding 30 meters, divers can fully appreciate the beauty of the underwater world. Memories Jibacoa ensures the safety of divers by providing experienced instructors who guide and oversee diving activities. Whether you\'re a beginner seeking certification or an experienced technical diver, Memories Jibacoa offers an enriching and adventurous diving experience in Cuba\'s pristine waters.\r\n', ''),
('stlucia', 'Santa Lucia', 'Diving in Santa Lucia, Camaguey offers a captivating underwater experience for diving enthusiasts. Located on the northern coast of Cuba, Santa Lucia is known for its pristine beaches and vibrant marine ecosystems.\r\nAs you dive into the waters of Santa Lucia, you\'ll discover stunning coral reefs teeming with life. The reefs boast a colorful array of hard and soft corals, including brain corals, sea fans, and sponges. These vibrant habitats provide a home to an abundance of tropical fish, such as angelfish, parrotfish, and butterflyfish, creating a mesmerizing underwater scene.\r\nThe visibility in Santa Lucia is generally excellent, allowing for clear views of the marine life and intricate coral formations. Water temperatures remain warm throughout the year, ensuring comfortable diving conditions.\r\nIn addition to the coral reefs, Santa Lucia is also known for its encounters with larger marine species. Divers have the chance to spot sea turtles gracefully gliding through the water, as well as rays and various species of sharks.\r\nSanta Lucia offers well-equipped dive centers that provide professional guidance and rental equipment for both novice and experienced divers. Whether you\'re a beginner or an advanced diver, there are suitable dive sites catering to different skill levels and interests.\r\nOverall, diving in Santa Lucia, Camaguey promises an unforgettable experience with its vibrant coral reefs, diverse marine life, and the opportunity to witness captivating underwater encounters.\r\n', ''),
('trinidad', 'Trinidad', 'Exploring Underwater Wonders Scuba diving in Trinidad, Cuba offers a captivating experience for underwater enthusiasts. Located on the southern coast of Cuba, Trinidad boasts a rich marine ecosystem, pristine waters, and a range of dive sites that make it a paradise for divers from around the world.\r\n\r\nOne of the main attractions of scuba diving in Trinidad is the vibrant coral reefs that thrive in the clear Caribbean waters. These reefs are teeming with colorful coral formations, creating a picturesque backdrop for divers to explore. \r\n\r\nFrom brain corals to sea fans and sponges, the diversity of marine life in these waters is awe-inspiring. Divers can encounter a wide array of marine species, including tropical fish, rays, and even the occasional nurse shark.\r\n\r\nOne popular dive site in Trinidad is the Ancón Wall, a vertical drop-off that plunges into the depths of the Caribbean Sea. This wall is adorned with an assortment of coral formations and offers an incredible opportunity for divers to witness the underwater beauty while exploring its crevices and ledges. The Ancón Wall is also known for encounters with larger marine species, such as barracudas and groupers, adding an element of excitement to the dive.\r\n\r\nFor those seeking a unique diving experience, the El Peñón area is a must-visit in Trinidad. This underwater landscape features a series of underwater canyons, caves, and tunnels, creating a maze-like environment that is both thrilling and captivating. Divers can navigate through these formations, marvel at the play of light and shadows, and encounter various marine creatures that call these hidden corners home.\r\n\r\nTrinidad\'s warm tropical climate ensures that scuba diving is possible year-round, with water temperatures averaging between 24 and 29 degrees Celsius (75-84 degrees Fahrenheit). The visibility is generally excellent, often reaching up to 30 meters (100 feet), allowing divers to fully appreciate the vibrant underwater scenery.', ''),
('varadero', 'Varadero', 'Varadero is one of the most recognized and awarded tourist resorts in the world year after year. In addition to its beautiful beaches and the numerous water activities it offers, it boasts admirable and well-preserved underwater ecosystems in warm and crystal-clear waters throughout the year, allowing for an enriching underwater experience. Multiple marine species coexist among the coral reefs and shipwrecks, which can be enjoyed with excellent visibility near the entry point and the start of the dive.', ''),
('zapata', 'Península de Zapata', 'Diving in the Playa Girón and Playa Larga area in the Zapata Peninsula is an exceptional experience for underwater enthusiasts. These coastal areas offer diverse diving sites and abundant marine life, making them popular destinations for divers.\r\nUnderwater, you\'ll encounter stunning coral reefs housing a wide variety of marine species, including brain corals, fire corals, and gorgonians. Colorful tropical fish like angelfish, butterflyfish, and parrotfish thrive in these reefs.\r\nThe visibility is excellent, allowing for clear views of marine life and reef details. Water temperatures remain warm year-round, providing comfortable diving conditions.\r\nThe Zapata Peninsula is also known for encounters with larger marine creatures such as sea turtles, rays, sharks, and occasionally manatees.\r\nFor beginners, there are professional dive centers that offer certification courses and expert guides to ensure a safe and exciting experience.\r\nIn summary, diving in Playa Girón and Playa Larga offers breathtaking coral reefs, abundant marine life, and the opportunity to encounter fascinating underwater species. It\'s an ideal destination for divers of all levels and a unique opportunity to explore Cuba\'s underwater beauty.\r\n', '');

-- --------------------------------------------------------

--
-- Table structure for table `eventos`
--

CREATE TABLE `eventos` (
  `id` int(11) UNSIGNED NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `descripcion` text NOT NULL,
  `lugar` varchar(255) NOT NULL,
  `detalles` text NOT NULL,
  `fecha` varchar(100) NOT NULL,
  `banner_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `eventos`
--

INSERT INTO `eventos` (`id`, `titulo`, `descripcion`, `lugar`, `detalles`, `fecha`, `banner_url`) VALUES
(1, 'FotoSub Trinidad 2024', 'Divitour, Pipin Ferreras and Marinas Marlin call for the International Underwater Photography Event \"PhotoSub Trinidad - 2024\". It will take place at the Trinidad International Marina under CMAS rules.', '', '', 'From March 18th to 23th, 2024', 'fotosub.jpg'),
(2, 'Ernest Hemingway International Bill Fishing Tournament', 'Like every year, the emblematic Ernest Hemingway International Marlin Fishing Tournament, considered one of the most significant for lovers of sport fishing in the region, returns to the Havana coast.', 'Marina Hemingway, Havana, Cuba (Lat: 23.0873 Long: -82.5048)', '', 'From March 27th to the 1st of June, 2024', 'torneo-pesca-hemingway.jpg'),
(3, 'Jardines del Rey Big Game Trolling', 'The 9th edition of the Jardines del Rey Big Game Trolling International Fishing Tournament will be held making use of the nautical and fishing potential of the northern area of ​​Cayo Coco and Guillermo, which is held annually. Men and women, professionals or amateurs, personnel related to the Sport Fishing activity and people who love this magical world, whether or not associated with fishing clubs and federations who wish to learn more about the sea and its species, can participate', '', '', 'From 24th to 29th of October, 2024', 'big-game-trolling.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `hoteles`
--

CREATE TABLE `hoteles` (
  `id` int(10) NOT NULL,
  `destino_id` varchar(10) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` text NOT NULL,
  `stars` int(1) NOT NULL,
  `image_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hoteles`
--

INSERT INTO `hoteles` (`id`, `destino_id`, `nombre`, `descripcion`, `stars`, `image_url`) VALUES
(1, 'havana', 'Hotel Royalton Habana', 'This European Plan city hotel combines modernism and luxury décor with the most spectacular views of the sea. Royalton Habana is the top destination for the most daring and avant-garde luxury travelers, seeking pleasure or on business. \r\n\r\nThe alluring nights on its terraces and the whimsical breeze from the broad stretch of Malecón will be accomplices to your enjoyment of the city at Royalton Habana.', 4, 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/27/3d/9c/ac/royalton-habana.jpg?w=700&h=-1&s=1'),
(2, 'havana', 'Hotel Memories Miramar', 'Experience the heart of Cuba in Havana, the leading commercial and cultural center of the country. Located in the luxurious residential district of Miramar, Memories Miramar Habana offers with an ocean view and easy access to must-see attractions such as Old Havana, Club Habana Beach, the National Aquarium of Cuba, Dolphinarium, and the PabExpo Exhibition.', 4, 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/07/a7/f2/bc/entrada-del-hotel.jpg?w=700&h=-1&s=1'),
(3, 'havana', 'Hotel Parque Central', 'The Iberostar Parque Central, which has an outdoor pool and a spa center, occupies a Spanish colonial building in the center of Havana. It also has 3 restaurants and 2 bars.\r\nSome rooms have a terrace or balcony. There are bathrobes, slippers and a flat-screen satellite TV.\r\nThe reception is open 24 hours a day. It has fitness and business facilities.\r\nIt is 16 km from José Martí International Airport and about 10 minutes on foot from the most popular destinations, such as Bar Floridita and La Bodeguita del Medio.', 5, 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/18/15/c9/f7/iberostar-parque-central.jpg?w=700&h=-1&s=1'),
(4, 'havana', 'Hotel Packard', 'Que Iberostar Grand Packard lleve el nombre de los famosos automóviles de lujo no es casualidad. Y es que este hotel de La Habana Vieja, al igual que los famosos “almendrones”, aspira a convertirse en uno de los iconos de la capital. Su edificio histórico ha vuelto a nacer para ofrecerle servicios de alta calidad, en un ambiente elegante y sofisticado. Relájese en nuestro SPA Sensations, deguste lo mejor de la gastronomía cubana y no se pierda las panorámicas desde la piscina de la sexta planta. Además, puede disfrutar de Cosmos Level, que le darán acceso privado a los espacios, habitaciones y servicios más exclusivos del hotel', 5, 'https://imgcy.trivago.com/c_limit,d_dummy.jpeg,f_auto,h_600,q_auto,w_600//hotelier-images/8b/84/6895a3f85dc50db54ca30e18eca03d08f7b1e421d1733b7108b4d3ac1ec1.jpeg'),
(5, 'havana', 'Hotel Melia Habana', 'Situado entre la Quinta Avenida y el mar, Meliá Habana es tu hotel ideal si viajas por negocios o buscas descubrir la ciudad desde sus encantos más actuales. Sus confortables habitaciones ofrecen vistas únicas y se hallan equipadas para darte la más placentera estancia. En la exclusiva planta The Level vivirás una experiencia basada en la privacidad, la atención al detalle y el servicio personalizado', 5, 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/10/58/a1/b1/fb-img-1503196494981.jpg?w=300&h=-1&s=1'),
(6, 'havana', 'Hotel Melia Cohiba', 'Vive La Habana junto a su clásico malecón\r\nEn la línea costera más clásica de la ciudad, este hotel 5 estrellas te ofrece experiencias únicas de confort y disfrute del entorno urbano. Alojamiento perfecto en viajes de negocios gracias a su exclusiva planta The Level, piscinas, gimnasio y rutinas culinarias de excelencia', 5, 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1b/06/19/72/exteriores-del-hotel.jpg?w=700&h=-1&s=1'),
(8, 'varadero', 'Hotel Royalton Hicacos', 'Ubicado en las costas de arena blanca de Varadero, Royalton Hicacos Resort & Spa ofrece a los viajeros más exigentes una experiencia inolvidable todo incluido en Cuba. Combinando la encantadora cultura de la isla con un servicio excepcional y una increíble atención a los detalles, Royalton Hicacos está por encima del resto con sus instalaciones de resort todo incluido diseñadas para crear el ambiente perfecto para la relajación', 5, 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0e/a7/dc/14/royalton-hicacos-varadero.jpg?w=700&h=-1&s=1'),
(9, 'varadero', 'Hotel Mystique Casa Perla', 'Con su singularidad y vibrante cultura, Casa Perla es la elección perfecta para aquellos que buscan experimentar lo mejor que Varadero tiene que ofrecer para una escapada que es cualquier cosa menos ordinaria.', 0, 'https://media-cdn.tripadvisor.com/media/photo-s/21/f5/7d/01/mystique-casa-perla.jpg'),
(10, 'varadero', 'Iberostar Selection Varadero', 'El hotel Iberostar Selection Varadero te abre un abanico infinito de opciones para que elijas cuándo descansar y cómo divertirte. ¿Te contamos alguna de ellas? Puedes adentrarte en el mundo submarino de la isla gracias a nuestro centro de buceo o darte un masaje a pie de una de las playas más famosas del mundo, flotar en el SPA Sensations mientras los chorros de agua te relajan los músculos y escuchar qué aventuras te cuentan tus hijos tras cada jornada en Star Camp. Y evidentemente está Todo Incluido. ¡Solo faltas tú!', 0, 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/28/af/90/8b/iberostar-selection-varadero.jpg?w=700&h=-1&s=1'),
(11, 'varadero', 'Hotel Sol Caribe Beach', 'A pocos pasos del mar y la fantástica playa de Varadero te espera este dinámico hotel Todo Incluido, perfecto para vivir momentos inolvidables con tus pequeños. En Sol Caribe Beach hallarás habitaciones familiares con todas las comodidades, exquisitas opciones gastronómicas y diversión a tope. No lo pienses: escápate ya a este alegre resort que brilla y te enamora como las playas que lo rodean', 0, 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/28/72/b2/2c/sol-caribe-beach.jpg?w=700&h=-1&s=1'),
(12, 'varadero', 'Hotel Sol Varadero Beach', 'Situado en primera línea de playa, este hotel Todo Incluido recibe a mayores de 16 años y es perfecto para que vivas días de sol y diversión en pareja o con amigos. Tiene fácil acceso al centro urbano de Varadero, al campo de golf y al Centro de Convenciones Plaza América. El resort apuesta por el diseño contemporáneo en sus amplias habitaciones, donde la atmósfera tropical te garantiza una estadía inolvidable', 0, 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/2a/43/05/c9/sol-varadero-beach-all.jpg?w=700&h=-1&s=1'),
(13, 'varadero', 'Hotel Melia Varadero', 'A pocos metros del club de golf, Meliá Varadero propone un entorno de bellos jardines con acceso directo a la playa. Vive experiencias inolvidables con vistas al mar y disfruta de privacidad total y un servicio personalizado en la planta The Level', 0, 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/27/a4/53/e1/melia-varadero.jpg?w=700&h=-1&s=1'),
(14, 'jibacoa', 'Hotel Memories Jibacoa', 'Memories Jibacoa is an adults-only, all-inclusive retreat nestled between lush mountains and the picturesque Arroyo Bermejo Beach. Take in the natural beauty of the Cuban countryside, and enjoy eco-adventures like scuba diving and snorkeling at the resort’s own naturally formed coral reef just a few meters from the shore.', 0, 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/11/d8/c3/07/memories-jibacoa.jpg?w=700&h=-1&s=1'),
(15, 'stlucia', 'Hotel Brisas Santa Lucia', 'The Brisas Santa Lucía Hotel is a modern building, located on a beautiful beach of Santa Lucia in the province of Camagüey. It offers well-equipped rooms with television, telephone, air conditioning and bathroom. Hotel facilities: restaurant, bar, gym, swimming pool for adults and children. This all-inclusive hotel is located on the seafront, just a few meters from the impressive Santa Lucia coral reef. It is ideal for families, groups, weddings and honeymoons. Services: non-motorized children\'s club for water sports, sports areas, games rooms, gym, 1 swimming pool with children\'s area, day and night entertainment. Snacks and drinks service 24 hours a day. Restaurants: 1 buffet restaurant, 1 specialized restaurant, 3 bars and 1 beach ranch. Rooms: 412 rooms: 400 standard, 4 with facilities for the disabled and 8 suites. All with air conditioning, telephone, satellite TV and safe. Attractions: International Diving Center (5 m), Mall (500 m), Rancho King (40 km), Camaguey International Airport Ignacio Agramonte (110 km), Camaguey Historical Center (120 km).', 0, 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/15/1b/62/8d/brisas-santa-lucia.jpg?w=700&h=-1&s=1'),
(17, 'cayolargo', 'Hotel Starfish Cayo Largo', 'Nestled at the picturesque western edge of Linda Mar Beach in Cayo Largo del Sur, Starfish Cayo Largo provides a perfect all-inclusive escape. Immerse yourself in a unique natural setting with round-the-clock culinary delights, unforgettable excursions, and an array of family-friendly activities. Our exquisite pools and convenient marina access, just 10 minutes by car, make Starfish Cayo Largo a haven for water sports enthusiasts and every kind of traveler.', 0, 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/27/58/5c/c3/piscina-y-mirador.jpg?w=700&h=-1&s=1'),
(18, 'cayolargo', 'Hotel Villa Linda Mar', 'Located in the beautiful and exuberant Cayo Largo del Sur is Villa Lindamar, in a privileged and wonderful environment that impresses the visitor by its beautiful landscapes of stunning beaches, long strips of very white fine sand and an abundant wildlife composed of sea turtles and iguanas. Ideal place for family enjoyment or for honeymoon trips in pairs, perfect to rest from the strees of the bustling cities and lie down under the intense sun of the Caribbean.\r\n\r\nVilla Linda Mar has 53 comfortable and comfortable cabins that have international telephone, satellite television, safe and refrigerator. It also includes, swimming pool, snack bar, buffet restaurant, medical service, currency exchange office, shop, taxi rental.', 0, 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/05/83/1c/93/villa-lindamar.jpg?w=700&h=-1&s=1'),
(19, 'cayolargo', 'Hotel Grand Memories Cayo Largo', 'Located on the island of Cayo Largo del Sur, in the Canarreos archipelago, Grand Memories Cayo Largo is the perfect place for a sunny family vacation. This all-inclusive property is ideal for guests of all ages, featuring comfortable and modern rooms, a variety of culinary offerings and proximity to sites of interest that allow travelers to relax and enjoy paradise. \r\n\r\nJust 20 minutes from the hotel is the center of the Tourist Village with its marina, International Diving Center, stores, entertainment areas, the Turtle Rescue Center and the famous Paraíso Beach and Sirena Beach. Grand Memories Cayo Largo guests will also have access to the rest of the destinations\' properties and services.', 0, 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0e/a7/af/7a/grand-memories-santa.jpg?w=700&h=-1&s=1'),
(20, 'cayolargo', 'Sanctuary at grand Memories Cayo Largo', 'Sanctuary at Grand Memories Cayo Largo is an adults-only (18+) all-inclusive paradise, offering guests an exquisite selection of services and amenities. Its 45 wooden bungalows surrounded by nature and just a few steps from the beach are the perfect environment to relax and enjoy an exclusive tropical getaway. \r\n\r\nSanctuary is a hotel within a hotel, where guests enjoy all of Grand Memories Cayo Largo’s restaurants, bars, activities, and wellness facilities like the outdoor pool, tennis court, and fitness center. Travelers also have access to the rest of the destinations\' hotels and services.', 0, 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/29/4c/bf/49/lobby-del-hotel.jpg?w=700&h=-1&s=1'),
(21, 'trinidad', 'Memories Trinidad', 'Escápese a la antigua ciudad colonial de Trinidad, en Cuba, y disfrute de una estancia memorable en el nuevo Memories Trinidad Del Mar. Este impresionante, encantador y asequible resort todo incluido es ideal para familias, parejas, recién casados y como sitio para bodas. Este resort, ubicado cerca de la hermosa Trinidad, ciudad que la UNESCO declaró Patrimonio de la humanidad, está rodeado de hermosas playas de arena blanca y posee el encanto de la arquitectura española antigua. \r\n\r\nEste resort posee un gran aire colonial y ofrece una amplia gama de actividades alrededor del hotel, entre ellos una gran piscina sinuosa, miniclub para niños, centro de fitness y canchas de tenis. Los huéspedes de todas las edades se deleitarán con la gran cantidad de actividades y entretenimiento que se ofrecen día y noche. \r\n\r\nYa sea que esté buscando unas vacaciones familiares relajantes, una aventura llena de acción o una escapada romántica, este complejo con todo incluido de seguro se convertirá en su favorito.', 0, 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/f3/a3/04/memories-trinidad-del.jpg?w=700&h=-1&s=1'),
(22, 'trinidad', 'Club Amigo Ancon', 'El hotel Club Amigo Ancón es un hotel sencillo y acogedor, ubicado al lado de la maravillosa playa de Ancón. Su cercanía a la Sierra de Escambray hacen del Hotel Club Amigo Ancón un lugar ideal para disfrutar del mar y de la montaña.\r\n\r\nEl hotel Club Amigo Ancón tiene 279 habitaciones perfectamente equipadas, con baño completo y televisión. Es un hotel sencillo pero confortable, ideal para unas vacaciones.\r\n\r\nSu amable personal le orientará sobre las mejores excursiones a realizar en el entorno, como la visita de la ciudad de Trinidad, declarada Patrimonio de la Humanidad por la UNESCO.', 0, 'https://media.solwayscuba.com/photos/Hotel/2018/hotel/hotel-club-ancon-129-0.jpg'),
(23, 'trinidad', 'Melia Trinidad Peninsula', 'Idílico hotel para descubrir los encantos de Trinidad\r\n\r\nDescubre una de las regiones más hermosas de Cuba acompañado por el exquisito servicio de este moderno hotel 5 estrellas, ubicado frente al mar y con espectaculares vistas a las aguas del Caribe y las montañas del Escambray. Alojamiento ideal para circuitos, familias, bodas, eventos, náutica y buceo.', 0, 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/2a/b7/5a/45/melia-trinidad-peninsula.jpg?w=700&h=-1&s=1');

-- --------------------------------------------------------

--
-- Table structure for table `servicios`
--

CREATE TABLE `servicios` (
  `id` int(10) UNSIGNED NOT NULL,
  `destino_id` varchar(10) NOT NULL,
  `tipo` varchar(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `pax_range` varchar(10) NOT NULL DEFAULT '1,1',
  `base_cost` decimal(10,0) UNSIGNED NOT NULL DEFAULT 0,
  `base_pax_limit` int(10) NOT NULL DEFAULT 0,
  `over_cost` decimal(10,0) UNSIGNED NOT NULL DEFAULT 0,
  `duracion` varchar(10) NOT NULL,
  `horario` varchar(255) NOT NULL,
  `pol_cancel` varchar(255) NOT NULL DEFAULT 'Custom 0-1 dia  100%, 1-2 dias 75%, 2-3 dias 50%',
  `inmersiones` int(10) NOT NULL DEFAULT 0,
  `image_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `servicios`
--

INSERT INTO `servicios` (`id`, `destino_id`, `tipo`, `nombre`, `descripcion`, `pax_range`, `base_cost`, `base_pax_limit`, `over_cost`, `duracion`, `horario`, `pol_cancel`, `inmersiones`, `image_url`) VALUES
(1, 'havana', 'immersion', 'Buceo en arrecifes coralinos de la Habana', 'Descubre la belleza del mundo submarino con esta experiencia de buceo en arrecife de coral. Un instructor certificado te guiará a través de una inmersión segura y emocionante. Tu aventura comienza con una bienvenida en el centro de buceo, donde se preparará el plan de inmersión con toda la información necesaria del sitio de buceo, las medidas de seguridad, y temas generales.  A continuación, subirás a una lancha que te llevará al sitio de buceo. Durante el trayecto, podrás disfrutar de las vistas panorámicas de la hermosa Habana. Al llegar al sitio de buceo, te prepararás para la inmersión. Tu instructor te ayudará en todo lo que necesites para trasladarte confianza y guiarte para disfrutar al máximo la experiencia. Descenderás en aguas abiertas según la certificación que poseas. Podrás explorar en el arrecife de coral, donde hay varias formaciones coralinas y multitud de especies tropicales, destacando los alevines, pez león, morenas y rayas Podrás ver una gran variedad de peces, corales y otras criaturas marinas. La inmersión durará aproximadamente 50 minutos, podrá ser más o menos tiempo en dependencia de tu propio consumo. Al finalizar, regresarás a la lancha para volver al centro de buceo. Esta experiencia es una excelente manera de descubrir el mundo submarino de la majestuosa Habana, donde el mar complementa los encantos que ofrece esta maravillosa ciudad en tierra.', '1,6', 50, 4, 80, '2 hours', '1 Jan - 31 Dic, 9am-3pm', 'Custom 0-1 dia  100%, 1-2 dias 75%, 2-3 dias 50%', 0, 'https://cdnturismo.daiquiritravel.com/daiquiri/experiencias/fd1dc811-f904-4b5c-b3ed-aa91f63e5cad.jpeg'),
(2, 'havana', 'excursion', 'Paseo por el litoral habanero', 'Salida desde la marina Hemingway navegando en dirección Este hasta la altura de la entrada de la bahía de La Habana donde el cliente podrá contemplar parte del litoral habanero y disfrutar de una vista panorámica de la ciudad. Tiempo para realizar baños de mar de regreso a La Marina. incluye: Bebidas nacionales a bordo.', '1,8', 30, 5, 50, '3 hours', '', '', 0, ''),
(3, 'havana', 'immersion', 'Seafari', 'Es la combinación de varias actividades náuticas. En esta modalidad la embarcación permanece fondeada permitiéndole al cliente hacer snorkeling y contemplar la belleza de los fondos marinos, tomar baños de sol y realizar pesca al curricán. Incluye: avíos para la pesca, equipamiento para hacer snorkeling y bebidas nacionales a bordo', '1,1', 20, 0, 0, '5 hours', '', '', 0, ''),
(4, 'havana', 'excursion', 'La Habana en Autos Clasicos', 'You will be picked up at the hotel or rental house where you are rented (let us know in the additional note of the booking process).  Then, we will tour the most magical places with the best views of the city such as the Hotel Nacional, the Almendares River, the University of Havana, the Revolution Square and the Christ of Havana. We will make some stops to enjoy the views and take pictures.', '1,1', 0, 0, 0, '3 hours', '', '', 0, 'https://cdnturismo.daiquiritravel.com/daiquiri/experiencias/475b86a9-7504-44bc-8530-a6a606e3c746.jpeg'),
(5, 'havana', 'excursion', 'Habana Panorámica en Motos', 'Welcome to the Daiquiri Tours house, where you will learn about their exclusive product Cuba on the Road, on 6th Street between 5th and 5th A, Miramar.  Departure through the Havana Forest, stop for photos at Josefina Island. Climb to the hill of the three little dogs with panoramic view of the favored neighborhood of Nuevo Vedado and the National Zoo. Panoramic view of the Colon Cemetery, Cuba\'s National Monument since 1987. Continue to the iconic Plaza de la Revolución, with a stop for photos. Then we will continue with a panoramic view of the University of Havana and its university stadium. We will go down San Francisco Street, following the historic route of the students to the end, where the monument to the 8 medical students stands. We will continue along the Prado promenade to the Capitolio, the Central Park and then we will walk along the Malecon to the Plaza Vieja to see the historic center of the city. Return with a panoramic walk along the Malecon to the starting point at Daiquiri and its Cuba on the Road.', '1,1', 0, 0, 0, '2 hours', '', '', 0, 'https://cdnturismo.daiquiritravel.com/daiquiri/experiencias/884465f7-7806-4feb-9059-943b053ee84e.jpeg'),
(6, 'havana', 'excursion', 'Pedaleando en la Habana', 'We will start by welcoming you to the home of Daiquiri Tours, where you will learn about their exclusive product Cuba on the Road, on 6th Street between 5th and 5th A, Miramar.  Departure through the Metropolitan Park of Havana, to appreciate the Cuban Flora, stop for photos at Josefina Island. Panoramic view of the National Zoo and the Necropolis of Colon. Continue to the iconic Plaza de la Revolución, with photo stop. Then we will continue with a panoramic view of the University of Havana and its university stadium. We will go down L Street and walk through the Vedado area of the capital. Stop with a visit to the gardens of the Hotel Nacional and then we return enjoying the breeze of the Malecón Habanero to the starting point at Daiquirí and its Cuba on the Road.', '1,1', 0, 0, 0, '2 hours', '', '', 0, ''),
(7, 'varadero', 'excursion', 'Russian Frigate #383 Dive Site', 'Discover the captivating depths of the Russian Frigate #383, a Konning-class warship sunk in 1998. With a remarkable length of 98 meters and a width of 17.5 meters, this dive site offers an exhilarating adventure. Descending to a maximum depth of 30 meters, you\'ll encounter a mesmerizing world teeming with marine life', '1,1', 0, 0, 0, '', '', '', 0, ''),
(8, 'varadero', 'excursion', 'Claraboyas 1 Coral Reef Dive Site', 'Prepare to be enchanted by the mesmerizing Claraboyas 1 Coral Reef Dive Site. With a maximum depth of 27 meters and an average depth of 14 meters, this vibrant coral reef offers a breathtaking underwater spectacle.', '1,1', 0, 0, 0, '', '', '', 0, ''),
(9, 'varadero', 'excursion', 'Sunken Tug Ship Dive Site', 'Embark on an exploration of the Sunken Tug Ship Dive Site, where history and marine life converge in a remarkable underwater setting. This tug ship, sunk in 1998, rests at a maximum depth of 18 meters, inviting divers into its captivating realm', '1,1', 0, 0, 0, '', '', '', 0, ''),
(10, 'stlucia', 'excursion', 'Catamaran Playa Bonita', 'Transfer desde los hoteles hacia el punto de embarque. Bienvenida a bordo en un\r\ncatamarán motovelero, briefing, observación de estrellas de mar y snorkel de 1 hora en una de las barreras más largas del mundo. Bar abierto a bordo. Música, servicio de guía y equipamiento de snorkel. Desembarco en Playa Bonita, recibimiento por los trabajadores del Cayo, almuerzo marinero, postre y café. Variantes para alérgicos y vegetarianos. Tiempo libre,\r\ntumbonas y club de playa incluido con kayac y bicicletas acuáticas.', '1,1', 0, 0, 0, '', '', '', 0, ''),
(11, 'stlucia', 'excursion', 'Coral Tour', 'Divertida jornada para visitar en una confortable embarcación el arrecife coralino de Santa Lucía de Cuba. Salidas en el día hasta la altura de “El Mégano” donde se realiza 1 hora de\r\nsnorkel, con transfer incluido, música, equipamiento, seguridad y bar abierto con tres sabores de refrescos nacionales y agua. No incluye bebida alcohólica', '1,1', 0, 0, 0, '', '', '', 0, ''),
(12, 'stlucia', 'excursion', 'Paseo por el litoral', 'Salida desde la Base de Operaciones en Tararaco en una confortable embarcación y experimentada tripulación. Bar abierto a bordo con 3 sabores de refrescos refresco, cerveza,\r\nron y agua. Música. Paseo por el Litoral de Santa Lucía desde la Boca y hasta la zona de frente al Residencial, llegando al extremo este por dentro de la barrera.', '1,1', 0, 0, 0, '', '', '', 0, ''),
(13, 'stlucia', 'excursion', 'Puesta de Sol', 'Transfer desde los hoteles hacia el punto de embarque. Chequeo de tickets por un\r\nguía multilingüe, briefing. Bienvenida a bordo en una embarcación con cóctel de\r\nbienvenida. Música y animación a bordo.  Paseo por el Litoral de Santa Lucía,\r\nbojeo por la ensenada de la Boca frente a Playa Los Cocos, fondeo en la zona del Mégano con un entremés que incluye: galletas, queso y jamón, bar abierto a bordo con refresco, agua, ron y cervezas, la cual se les dará al cliente en vasos desechables plásticos, y será servida por el marinero designado. Tiempo de espera hasta la puesta del sol y regreso hasta el punto de embarque\r\n', '1,1', 0, 0, 0, '', '', '', 0, ''),
(14, 'cayolargo', 'excursion', 'Cayo Rico', 'Bienvenida a bordo en un\r\ntrimarán, briefing. Salida para la excursión náutica a las 09:00 am.1 hora de snorkeling en la Barrera Coralina. Visita a Cayo Rico, avistamiento de iguanas en su entorno natural, cayo exclusivo y con una playa virgen, almuerzo y tiempo de playa. Salida del cayo rumbo a la marina 03:15 pm. Incluye: almuerzo a base de: filete de pescado (o pollo), espaguetis con salsa de rejo de langosta, frutas, vegetales, pan, salsas. Bar Abierto.\r\n', '1,1', 0, 0, 0, '', '', '', 0, ''),
(15, 'cayolargo', 'excursion', 'Super Reef', 'Bienvenida a bordo, briefing. Salida a las 09:00 am. 1 hora, de snorkeling en la Barrera, Coralina. Salida hacia una playa virgen exclusiva, tiempo de baño y observación de iguanas en su medio natural. Almuerzo a bordo de la embarcación. A las 3.15 pm salida para Barrera Coralina (1 hora de snorkeling).  Paseo por el litoral de playas. Retorno a la Marina. Incluye: almuerzo a bordo de la embarcación a base de: Langosta enchilada, arroz, frutas y pan, salsas y café. Bar Abierto', '1,1', 0, 0, 0, '', '', '', 0, ''),
(16, 'cayolargo', 'excursion', 'Seafari Puesta de Sol', 'Bienvenida a bordo en un catamarán o yate, briefing. Salida a las 4:00 pm. hacia la zona noroeste con paseo panorámico con avistamiento de especies exóticas, Baño en cercanías de Cayo Piedra, salida hacia zona sur para baño en punta playa sirena para la apreciación de la Puesta del Sol. Retorno a la Marina a las 06:00 pm.', '1,1', 0, 0, 0, '', '', '', 0, ''),
(17, 'cayolargo', 'excursion', 'Avistamiento de la anidacion de tortugas', 'Salida del Hotel 10:00 pm y recorrido hacia Playa Mal Tiempo o  Playa Capricho. Recorrido por las playas por un especialista de la Marina en la Materia donde dará una explicación sobre las tortugas entre otros datos técnicos de interés, donde se podrá\r\ndisfrutar el proceso de desove de las tortugas que anidan en ese lugar\r\n', '1,1', 0, 0, 0, '', '', '', 0, ''),
(18, 'cayolargo', 'excursion', 'Liberacion de neonatos', 'Se procederá a liberar los neonatos en las respectivas Playas de los Hoteles según las ventas realizadas.', '1,1', 0, 0, 0, '', '', '', 0, ''),
(19, 'zapata', 'excursion', 'Buceando al borde del Abismo', 'Tu experiencia comienza con una bienvenida en el centro de buceo, donde se preparará la coordinación de la actividad del día,  con toda la información necesaria del sitio de buceo, las medidas de seguridad, y temas generales. \r\nA continuación, se desplazarán hacia el centro de buceo especifico que entre tu y el guía instructor hayan seleccionado. Aprovecharás durante los breves minutos del recorrido la característica vegetación de manglares de la Ciénaga y las hermosas vistas del brillante mar Caribe.\r\nAl llegar al sitio de buceo, te prepararás para la inmersión. Tu instructor te ayudará en todo lo que necesites para trasladarte confianza, chequear el plan de inmersión y guiarte para disfrutar al máximo la experiencia. \r\nEntrarás al mar desde la costa, y disfrutarás de una visibilidad inigualable y de los maravillosos fondos marinos de la región, las paredes verticales están muy cerca de la costa y se disfruta el inmenso azul oscuro del abismo, esponjas, arrecifes y varías especies menores de peces tropicales complementarán tu aventura.\r\nLa inmersión durará aproximadamente 50 minutos, podrá ser más o menos tiempo en dependencia de tu propio consumo. Al finalizar, regresarás a la lancha para volver al centro de buceo.\r\nPara los amantes del buceo, La Ciénaga de Zapata (Girón, Punta Perdiz, Playa Larga) es un destino obligatorio de brillante belleza\r\n', '1,1', 0, 0, 0, '2 hours', '9am - 3pm', 'Custom 0-1 dia 100%, 1-2 dias 75%, 2-3 dias 50%', 0, ''),
(20, 'zapata', 'excursion', 'Excursion a Areas Protegidas', '', '1,1', 0, 0, 0, '', '', '', 0, ''),
(21, 'zapata', 'excursion', 'Visita a Zunzuncito', '', '1,1', 0, 0, 0, '', '', '', 0, ''),
(22, 'zapata', 'excursion', 'Visita a museo de Giron', '', '1,1', 0, 0, 0, '', '', '', 0, ''),
(23, 'zapata', 'excursion', 'Visita a Guama', '', '1,1', 0, 0, 0, '', '', '', 0, ''),
(24, 'trinidad', 'excursion', 'Seafari Cayo Blanco', 'Open Bar. \r\nSnorkeling en barrera de coral + equipos.\r\nAlmuerzo c/ Arroz marinero.\r\nFoto Show con las iguanas\r\nTiempo libre de playa.', '1,1', 0, 0, 0, '7 hours', '', '', 0, ''),
(25, 'trinidad', 'excursion', 'Paseo por la Bahía de Casilda y el Litoral Ancón', 'Coctel de bienvenida.\r\nPaseo por la bahía.\r\nEquipos Ligeros para la actividad.', '1,1', 0, 0, 0, '2 hours', '', '', 0, ''),
(26, 'trinidad', 'excursion', 'Snorkeling en las Mulaticas', 'Lanchero -Guía.\r\nChalecos salvavidas.\r\nEquipos Ligeros para la actividad.\r\nSnorkeling en barrera de coral.', '1,1', 0, 0, 0, '1 hour', '', '', 0, ''),
(27, 'guillermo', 'excursion', 'Boat Adventure', 'Cada persona conduce su propio bote (restringida la conducción del bote a menores de 18 años) a través de los canales naturales de mangle al Sur de Cayo Guillermo, con snorkeling en una atractiva zona natural. Emocionante actividad deportiva recreativa que permite contacto directo con la flora y fauna endémicas de los cayos cubanos. \r\nIncluye: Transfer de ida y regreso Hoteles – Base N, lancha, Chalecos salvavidas, servicio de guía, una bebida no alcohólica, snorkel (el que se deja como souvenir).', '1,1', 0, 0, 0, '', '', '', 0, ''),
(28, 'guillermo', 'excursion', 'Seafari Cayo Media Luna', 'Salida desde los Hoteles de Cayo Coco y Cayo Guillermo hasta la Marina Turística de Cayo Guillermo, visita a dos zonas de la barrera coralina en la travesía. Almuerzo en mesa buffet en Cayo Media Luna a base de pan o galletas, ensaladas, arroz, langosta, camarones y pollo, salsa marinera, postre, café y estancia en Playa.  \r\nIncluye: Bar abierto con bebidas nacionales, almuerzo, tiempo de baño en playa y barrera coralina, tripulación especializada, embarcación tipo Catamarán Velero y transfer de ida y regreso a los hoteles', '1,1', 0, 0, 0, '', '', '', 0, ''),
(35, 'guillermo', 'excursion', 'Paseo Media Jornada', 'Salida desde los Hoteles de Cayo Coco y Cayo Guillermo hasta la Marina Turística de Cayo Guillermo, navegando por el litoral, visita a la barrera coralina, estancia en la misma con snorkeling y regreso hasta la marina a la 1:00 PM con regreso a los hoteles. \r\nIncluye: Embarcación, tripulación especializada, snorkel, bar abierto y transfer de ida y regreso.', '1,1', 0, 0, 0, '', '', '', 0, ''),
(36, 'guillermo', 'excursion', 'Seafari Cayo Media Luna Plus (solo adultos)', 'Salida desde los Hoteles de Cayo Coco y Cayo Guillermo hasta la Marina Internacional de Cayo Guillermo, visita a dos zonas de la barrera coralina en la travesía. Almuerzo en mesa buffet en Cayo Media Luna a base de ensaladas, arroz, langosta, pescados y pollo, salsa marinera, postre, café, y estancia en Playa.', '1,1', 0, 0, 0, '', '', '', 0, ''),
(37, 'guillermo', 'excursion', 'Unique Seafari (Con Delfines)', 'Salida desde los Hoteles de Cayo Coco y Cayo Guillermo hasta el delfinario de Cayo Guillermo donde se interactúa con los delfines dentro del agua entre 0:10 y 0:15 minutos cada grupo, según programa de animadores. Traslado a la Marina Turística de Cayo Guillermo, visita a una zona de la barrera coralina en la travesía, visita a Cayo Media Luna y almuerzo en mesa buffet a base de ensaladas, arroz, langosta, pescados y pollo, salsa marinera, postre, café, y estancia en Playa. 15:30 traslado a los hoteles.', '1,1', 0, 0, 0, '', '', '', 0, ''),
(38, 'guillermo', 'excursion', 'Puesta de sol sin cena', 'Salida a las 3:00 PM desde los Hoteles de Cayo coco y 3:30 PM desde Cayo Guillermo hasta la Marina turística de Cayo Guillermo, navegación por el litoral hasta la barrera coralina, estancia en ella con snorkeling opcional, disfrute de la puesta de sol, navegación de regreso y retorno a los hoteles.', '1,1', 0, 0, 0, '', '', '', 0, ''),
(39, 'guillermo', 'excursion', 'Puesta de sol con cena', 'Salida a las 3:30 PM desde los Hoteles de Cayo Coco y 4:00 PM desde Cayo Guillermo hasta la Marina Turística de Cayo Guillermo, navegación por el litoral hasta la barrera coralina, estancia en ella con snorkeling opcional, animación a bordo, observación de la puesta de sol, Cena Marinera a bordo del Catamarán, navegación de regreso y retorno a los hoteles.', '1,1', 0, 0, 0, '', '', '', 0, ''),
(40, 'guillermo', 'excursion', 'Chárter Privado\r\nJornada Completa\r\n', 'Bienvenida a bordo de embarcación, briefing, El cliente determina el recorrido y las actividades a realizar. Puede hacerse a consideración del cliente, snorkeling en barreras coralinas, visita a playas de nuestro litoral, pesca u otras actividades en el litoral, equipamiento para la actividad. Bar abierto durante la travesía a bordo con refresco, agua, vino, ron y cervezas, la cual se les dará al cliente en vasos desechables plásticos, almuerzo a bordo de la embarcación a base de ensaladas, arroz, langosta, pescados, pollo y salsa marinera. Se incluye el transfer desde los hoteles hacia el punto de embarque.', '1,1', 0, 0, 0, '', '', '', 0, ''),
(41, 'guillermo', 'excursion', 'Chárter Privado Media Jornada', 'Bienvenida a bordo de embarcación, briefing, El cliente determina el recorrido y las actividades a realizar. Puede hacerse a consideración del cliente, snorkeling en barreras coralinas, visita a playas de nuestro litoral, pesca u otras actividades en el litoral, equipamiento para la actividad. Bar abierto durante la travesía a bordo con refresco, agua, vino, ron y cervezas, la cual se les dará al cliente en vasos desechables plásticos. Se incluye el transfer desde los hoteles hacia el punto de embarque', '1,1', 0, 0, 0, '', '', '', 0, ''),
(42, 'guillermo', 'excursion', 'Chárter Privado + Delfinario', 'Recogida en los hoteles y traslado hacia el delfinario, donde realiza la interacción con Delfines. Traslado hacia la marina turística de Cayo Guillermo, donde se aborda el Yate de recreo y puede hacerse a consideración del cliente, el cliente determina el recorrido y las actividades a realizar snorkeling en barreras coralinas, visitas a playas de nuestro litoral, pesca u otras actividades en el litoral, además de degustar un esquicito almuerzo. Retorno hacia los hoteles.', '1,1', 0, 0, 0, '', '', '', 0, ''),
(46, 'varadero', 'excursion', 'SEAFARI CAYO BLANCO (Colectivo)', '', '1,0', 59, 0, 0, '', '', '', 0, ''),
(47, 'varadero', 'excursion', 'SEAFARI CAYO BLANCO (Privado)', '', '1,0', 131, 4, 408, '', '', '', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destinos`
--
ALTER TABLE `destinos`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hoteles`
--
ALTER TABLE `hoteles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `destino_id` (`destino_id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hoteles`
--
ALTER TABLE `hoteles`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

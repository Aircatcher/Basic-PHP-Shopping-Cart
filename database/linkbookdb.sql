-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2016 at 01:41 PM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `linkbookdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(6) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL DEFAULT '',
  `category` varchar(50) NOT NULL,
  `author` varchar(100) NOT NULL DEFAULT '',
  `description` longtext NOT NULL,
  `price` decimal(10,2) NOT NULL DEFAULT '0.00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `category`, `author`, `description`, `price`) VALUES
(1, 'Humans of New York: Stories', 'Arts & Photography', 'Brandon Stanton', 'Now a #1 New York Times Bestseller. <br /> <br /> In the summer of 2010, photographer Brandon Stanton began an ambitious project  - to single-handedly create a photographic census of New York City. The photos he took and the accompanying interviews became the blog Humans of New York. In the first three years, his audience steadily grew from a few hundred to over one million. In 2013, his book Humans of New York, based on that blog, was published and immediately catapulted to the top of the NY Times Bestseller List. It has appeared on that list for over twenty-five weeks to date. The appeal of HONY has been so great that in the course of the next year Brandon''s following increased tenfold to, now, over 12 million followers on Facebook. In the summer of 2014, the UN chose him to travel around the world on a goodwill mission that had followers meeting people from Iraq to the Ukraine to Mexico City via the photos he took. <br /> <br /> Now, Brandon is back with the follow up to Humans of New York that his loyal followers have been waiting for: Humans of New York: Stories. Ever since Brandon began interviewing people on the streets of NY, the dialogue he''s had with them has increasingly become as in-depth, intriguing and moving as the photos themselves. Humans of New York: Stories presents a whole new group of humans, complete with stories that delve deeper and surprise with greater candor. Let Brandon Stanton and the people he''s photographed astonish you.', '235000.00'),
(2, 'Every Person in New York', 'Arts & Photography', 'Jason Polan', 'Jason Polan is on a mission to draw every person in New York, from cab drivers to celebrities. He draws people eating at Taco Bell, admiring paintings at the Museum of Modern Art, and sleeping on the subway. With a foreword by Kristen Wiig, Every Person in New York, Volume 1 collects thousands of Polan''s energetic drawings in one chunky book. As full as a phone book and as invigorating as a walk down a bustling New York street, this is a new kind of love letter to a beloved city and the people who live there.', '250000.00'),
(3, 'Andy Goldsworthy: Ephemeral Works: 2004-2014', 'Arts & Photography', 'Andy Goldsworthy', 'On an almost daily basis, Andy Goldsworthy makes art using the materials and conditions he encounters wherever he is, be it the land around his Scottish home, the mountain regions of France or Spain, or the sidewalks of New York City, Glasgow, or Rio de Janeiro. Out of earth, rocks, leaves, ice, snow, rain, sunlight, and shadow he creates works that exist briefly before they are altered and erased by natural processes. They are documented in his photographs, and their larger meanings are bound up with the forces that they embody: materiality, temporality, growth, vitality, permanence, decay, chance, labor, and memory.<br/> <br/> <i>Ephemeral Works</i> features approximately 200 of these works, selected by Goldsworthy from thousands he has made between 2001 and the present and arranged in chronological sequence, capturing his creative process as it interacts with material, place, and the passage of time and seasons.', '200000.00'),
(4, 'The Complete Book of Home Organization: 200+ Tips and Projects', 'Design', 'abowlfulloflemons.net', 'Have you ever wished you had the time and tools to organize your house in a clutter-free, design-conscious, Pinterest-worthy way? From storage solutions and cleaning tips to secret space-saving methods and expert strategies, The Complete Book of Home Organization is packed with the tips and shortcuts you need to effectively organize your home.<br/> <br/> From small spaces and apartment solutions to how to tackle a big, messy home with a 15-week total home organization challenge, this book covers it all. The Complete Book of Home Organization spells out everything you need to de-clutter your house, store your belongings, and keep your home - and life - in tip-top shape. With high-quality design, intricate detail, and a durable flexicover - this manual is the perfect gift!<br/> <br/> Organize the 30 main spaces of your home, including the living and dining spaces, bedrooms and bathrooms, guest areas, baby and kids'' rooms, utility spaces and garages, entryways and offices, patios and decks, closets and pet areas! Keep track of your pantry, holiday and craft supplies, weekly menu planning, keepsakes, and schedules. From the basement to the attic, this book covers every nook and cranny.', '300000.00'),
(5, 'Eames: Beautiful Details', 'Design', 'Eames Demetrios', '"Eames: Beautiful Details" celebrates the seamlessness and fluidity in which Charles and Ray Eames operated as both a husband and wife team and as designers unrestricted by traditionally professional boundaries. Select details of their life and work, from their refined designs to their innovative experiments, and even including images depicting the everyday poetic moments of their lives, and are shared here in this exhibit within a book. Inspired by Charles''s immersive and original slideshows, in which he expertly selected and grouped images together that communicated information in an aesthetic, direct, and accessible way, this book strives to visually create the Eameses'' life and work by taking the viewer through a delightful journey, focusing on their ""beautiful details."" The packaging design of the "Eames: Beautiful Details" slipcase is a pattern inspired by the triangles and colors of one of their most inventive, if lesser known, designs for children, simply called, ""the toy."" It also pays homage to the patterns they used on their well loved House of Cards. The Eameses brought a sense of humor and joy to everything they created, and the design and layout of the book aims to convey that spirit in a visual feast for the eyes. It is a testament to the Eameses and the lasting value of good design that their Eames lounge chair, created in 1956, endures today as perhaps the most recognizable and coveted piece of mid century furniture design. Their experiments in technological innovations, like molded plywood and fiberglass, resulted in such classic pieces as the bent plywood LCW and DCM Chairs, the Molded Plastic Chairs, and the Aluminum Group; all of which are still in production by Herman Miller. Likewise, Charles and Ray designed and built their own home in 1949 in Pacific Palisades, and it is still revered as a landmark of modern architecture. Built as part of the Case Study program in California, sponsored by Arts & Architecture magazine, it was one of the earliest experiments in pre fab construction, using off the shelf industrial parts. But unlike the austerity of much of modern architectural design, their factory like shell was lovingly lived in along with their personal collections of folk art, treasures from their travels, and everyday objects refreshingly displayed with affection and without pretense. In exhibition design as well, ""Mathematica: A World of Numbers ... and Beyond, 1961,"" for IBM is considered groundbreaking as an interactive, educational, and experiential way to communicate the wonder and magic of math. Similarly, their seminal film, Powers of Ten, 1977, expresses the mathematical concept of multiplying to the tenth power, in a very direct, simple, and powerful way. Unlike any other book previously published on Charles and Ray Eames, this unique monograph is a visual celebration of their work and life, and was created in true collaboration with Charles''s grandson, Eames Demetrios, and other members of the Eames family.', '570000.00'),
(6, 'Mid-Century Modern: Interiors, Furniture, Design Details (Conran Octopus Interiors)', 'Design', 'Bradley Quinn', 'The 1950''s house was a scientific triumph, designed in a laboratory and tested on inhabitants of all ages before being built for the masses. Never had homes been so thoroughly contemporary, with antiques and period styles entirely banished. Mid-Century Modern explores the interior decor of this seminal decade, concentrating on all aspects of a home''s decoration - walls, flooring, surfaces, lighting, and, of course, furniture. Case studies examine beautiful present-day homes that exhibit mid-century style in an exemplary way, and suggest ideas for taking the 1950''s look - complete with collector''s pieces - and mixing and matching it with elements from other eras.', '255000.00'),
(7, 'Design of the 20th Century', 'Design', 'Charlotte & Peter Fiell', '<b>The bible of 20th-century design: From Art Nouveau to minimalism and everything in between</b><br/> <br/> Poised at the start of the 21st century, we can see clearly that the previous century was marked by momentous changes in the field of design. Aesthetics entered into everyday life with often staggering results. Our homes and workplaces turned into veritable galleries of style and innovation.<br/> <br/> From furniture to graphics, it''s all here - the work of artists who have shaped and recreated the modern world with a dizzying variety of materials. From the organic to the geometric, from Art Deco, through to Pop and High-Tech, this book contains all the great names - Harry Bertoia, De Stijl, Dieter Rams, Philippe Starck, Charles and Ray Eames, to name only a very few. This essential book is a comprehensive journey through the shapes and colors, forms and functions of design history in the 20th century. An A-Z of designers and design schools, which builds into a complete picture of contemporary living. Lavishly illustrated, this is design in the fullest sense.<br/> <br/> <b>About the series: Bibliotheca Universalis - Compact cultural companions celebrating the eclectic TASCHEN universe at an unbeatable, democratic price!</b><br/> Since we started our work as cultural archaeologists in 1980, the name TASCHEN has become synonymous with accessible, open-minded publishing. Bibliotheca Universalis brings together nearly 100 of our all-time favorite titles in a neat new format so you can curate your own affordable library of art, anthropology, and aphrodisia.<br/> <b>Bookworm''s delight - never bore, always excite!</b>', '245000.00'),
(8, 'Fates and Furies: A Novel', 'Fiction', 'Lauren Groff', '<b>AMAZON''S 2015 BEST BOOK OF THE YEAR<br/> NEW YORK TIMES BESTSELLER<br/> A FINALIST FOR THE 2015 NATIONAL BOOK AWARD<br/> NPR MORNING EDITION BOOK CLUB PICK<br/> NAMED A BEST BOOK OF THE YEAR BY: THE WASHINGTON POST, NPR, TIME, THE SEATTLE TIMES, MINNEAPOLIS STAR-TRIBUNE, SLATE, LIBRARY JOURNAL, KIRKUS, AND MANY MORE<br/> <br/> "Lauren Groff is a writer of rare gifts, and Fates and Furies is an unabashedly ambitious novel that delivers - with comedy, tragedy, well-deployed erudition and unmistakable glimmers of brilliance throughout." -The New York Times Book Review (cover review)<br/> <br/> "Elaborate, sensual...a writer whose books are too exotic and unusual to be missed."-The New York Times <br/>  <br/> "Fates and Furies is a clear-the-ground triumph." -Ron Charles, The Washington Post <br/> <br/> <br/> From the award-winning, New York Times- bestselling author of The Monsters of Templeton and Arcadia, one of the most anticipated books of the fall: an exhilarating novel about marriage, creativity, art, and perception. </b><br/> <br/> Fates and Furies is a literary masterpiece that defies expectation. A dazzling examination of a marriage, it is also a portrait of creative partnership written by one of the best writers of her generation. <br/> <br/> Every story has two sides. Every relationship has two perspectives. And sometimes, it turns out, the key to a great marriage is not its truths but its secrets. At the core of this rich, expansive, layered novel, Lauren Groff presents the story of one such marriage over the course of twenty-four years.<br/> <br/> At age twenty-two, Lotto and Mathilde are tall, glamorous, madly in love, and destined for greatness. A decade later, their marriage is still the envy of their friends, but with an electric thrill we understand that things are even more complicated and remarkable than they have seemed. With stunning revelations and multiple threads, and in prose that is vibrantly alive and original, Groff delivers a deeply satisfying novel about love, art, creativity, and power that is unlike anything that has come before it. Profound, surprising, propulsive, and emotionally riveting, it stirs both the mind and the heart.', '260000.00'),
(9, 'The Butterfly and the Violin (A Hidden Masterpiece Novel)', 'Fiction', 'Kristy Cambron', '"Fresh. Fascinating. Unforgettable. The Butterfly and the Violin is a masterpiece of a debut." --Laura Frantz, author of Love''s Reckoning<br/> <br/> ". . . impossible to put down." --RT Book Reviews, 4 1/2 Stars, TOP PICK!<br/> <br/> <b>A Mysterious painting breathes hope and beauty into the darkest corners of Auschwitz--and the loneliest hearts of Manhattan.</b><br/> Manhattan art dealer Sera James watched her world crumble at the altar two years ago, and her heart is still fragile. Her desire for distraction reignites a passion for a mysterious portrait she first saw as a young girl--a painting of a young violinist with piercing blue eyes.<br/> In her search for the painting, Sera crosses paths with William Hanover--the grandson of a wealthy California real estate mogul--who may be the key to uncovering the hidden masterpiece. Together Sera and William slowly unravel the story behind the painting''s subject: Austrian violinist Adele Von Bron.<br/> <br/> A darling of the Austrian aristocracy of 1942, talented violinist, and daughter to a high-ranking member of the Third Reich, Adele risks everything when she begins smuggling Jews out of Vienna. In a heartbeat, her life of prosperity and privilege dissolves into a world of starvation and barbed wire. As Sera untangles the secrets behind the painting, she finds beauty in the most unlikely of places: the grim camps of Auschwitz and the inner recesses of her own troubled heart.<br/> <br/> "In her historical series debut, Cambron expertly weaves together multiple plotlines, time lines, and perspectives to produce a poignant tale of the power of love and faith in difficult circumstances. Those interested in stories of survival and the Holocaust, such as Eli Wiesel''s Night, will want to read." --Library Journal, starred review<br/> <br/> ". . . debut novelist Cambron vividly recounts interwoven sagas of heartache and recovery through courage, love, art, and faith." --Publishers Weekly<br/> <br/> * Includes Reading Group Guide', '175000.00'),
(10, 'Harry Potter and the Sorcerer''s Stone', 'Fiction', 'J. K. Rowling', '"Turning the envelope over, his hand trembling, Harry saw a purple wax seal bearing a coat of arms; a lion, an eagle, a badger and a snake surrounding a large letter ''H''."<br/> <br/> Harry Potter has never even heard of Hogwarts when the letters start dropping on the doormat at number four, Privet Drive. Addressed in green ink on yellowish parchment with a purple seal, they are swiftly confiscated by his grisly aunt and uncle. Then, on Harry''s eleventh birthday, a great beetle-eyed giant of a man called Rubeus Hagrid bursts in with some astonishing news: Harry Potter is a wizard, and he has a place at Hogwarts School of Witchcraft and Wizardry. An incredible adventure is about to begin!', '200000.00'),
(11, 'Photoshop Elements 14 For Dummies', 'Computer', 'Barbara Obermeier', '<b>The bestselling book on Photoshop Elements-now in a new edition</b><br/> Getting great photos is easier than you think-it just takes some know-how and a tool like Adobe''s Photoshop Elements. Photoshop Elements 14 For Dummies is a fun and easy-to-follow guide for photographers and photo enthusiasts who want to make their snapshots picture perfect. In no time, you''ll tackle the basics of Photoshop Elements and find out how to execute hundreds of tasks, like using special effects and drawing tools, working with layers, improving your color and clarity, and so much more.<br/> <br/> Photoshop Elements is the #1 selling consumer photo editing software, and Adobe continues to add innovative features that allow professional and self-made digital photographers to do it all. Written by veteran authors Barb Obermeier and Ted Padova, this full-color guide shows you how to make the most of the latest version of the software in a fun and friendly way that makes learning feel like play. Even if you have no digital image editing experience at all, this hands-on guide shows you how to take your photos from ''meh'' to ''wow''-and have a blast along the way!<br/><br/> <ul style="position: relative; left:19px"> <li>Get instant results using one-click editing options</li> <li>Apply pro techniques to correct photo color and clarity</li> <li>Show off your artsy side with special effects and filters</li> <li>Find tips for improving edits and creative projects</li> </ul><br/> The power and simplicity of Photoshop Elements makes it easy to turn out photos worth bragging about-and this no-nonsense guide will get you there in a flash.', '249000.00'),
(12, 'HTML and CSS: Design and Build Websites', 'Computer', 'Jon Duckett', '<b>A full-color introduction to the basics of HTML and CSS from the publishers of Wrox! </b><br/> Every day, more and more people want to learn some HTML and CSS. Joining the professional web designers and programmers are new audiences who need to know a little bit of code at work (update a content management system or e-commerce store) and those who want to make their personal blogs more attractive. Many books teaching HTML and CSS are dry and only written for those who want to become programmers, which is why this book takes an entirely new approach.<br/> <br/> <ul style="position:relative; left:19px"> <li>Introduces HTML and CSS in a way that makes them accessible to everyone-hobbyists, students, and professionals-and it''s full-color throughout</li> <li>Utilizes information graphics and lifestyle photography to explain the topics in a simple way that is engaging Boasts a unique structure that allows you to progress through the chapters from beginning to end or just dip into topics of particular interest at your leisure</li></ul> <br/> This educational book is one that you will enjoy picking up, reading, then referring back to. It will make you wish other technical topics were presented in such a simple, attractive and engaging way! <br/> This book is also available as part of a set in hardcover - Web Design with HTML, CSS, JavaScript and jQuery, 9781119038634; and in softcover - Web Design with HTML, CSS, JavaScript and jQuery, 9781118907443.<br/>', '250000.00'),
(13, 'Future Crimes: Everything Is Connected, Everyone Is Vulnerable and What We Can Do About It', 'Computer', 'Marc Goodman', '<b>NEW YORK TIMES and WALL STREET JOURNAL BESTSELLER <br/> <br/> ONE OF THE WASHINGTON POST''S 10 BEST BOOKS OF 2015<br/> <br/> One of the world''s leading authorities on global security, Marc Goodman takes readers deep into the digital underground to expose the alarming ways criminals, corporations, and even countries are using new and emerging technologies against you-and how this makes everyone more vulnerable than ever imagined. </b><br/> <br/> Technological advances have benefited our world in immeasurable ways, but there is an ominous flip side: our technology can be turned against us. Hackers can activate baby monitors to spy on families, thieves are analyzing social media posts to plot home invasions, and stalkers are exploiting the GPS on smart phones to track their victims'' every move. We all know today''s criminals can steal identities, drain online bank accounts, and wipe out computer servers, but that''s just the beginning. To date, no computer has been created that could not be hacked-a sobering fact given our radical dependence on these machines for everything from our nation''s power grid to air traffic control to financial services. <br/> Yet, as ubiquitous as technology seems today, just over the horizon is a tidal wave of scientific progress that will leave our heads spinning. If today''s Internet is the size of a golf ball, tomorrow''s will be the size of the sun. Welcome to the Internet of Things, a living, breathing, global information grid where every physical object will be online. But with greater connections come greater risks. Implantable medical devices such as pacemakers can be hacked to deliver a lethal jolt of electricity and a car''s brakes can be disabled at high speed from miles away. Meanwhile, 3-D printers can produce AK-47s, bioterrorists can download the recipe for Spanish flu, and cartels are using fleets of drones to ferry drugs across borders.<br/> With explosive insights based upon a career in law enforcement and counterterrorism, Marc Goodman takes readers on a vivid journey through the darkest recesses of the Internet. Reading like science fiction, but based in science fact, Future Crimes explores how bad actors are primed to hijack the technologies of tomorrow, including robotics, synthetic biology, nanotechnology, virtual reality, and artificial intelligence. These fields hold the power to create a world of unprecedented abundance and prosperity. But the technological bedrock upon which we are building our common future is deeply unstable and, like a house of cards, can come crashing down at any moment.<br/> Future Crimes provides a mind-blowing glimpse into the dark side of technological innovation and the unintended consequences of our connected world. Goodman offers a way out with clear steps we must take to survive the progress unfolding before us. Provocative, thrilling, and ultimately empowering, Future Crimes will serve as an urgent call to action that shows how we can take back control over our own devices and harness technology''s tremendous power for the betterment of humanity-before it''s too late.', '235000.00'),
(14, 'The Legend of Zelda: Twilight Princess HD Collector''s Edition: Prima Official Game Guide', 'Games', '', '<i>The Legend of Zelda: Twilight Princess HD Collector''s Edition&nbsp;Guide</i> includes...<br><br> <b>Exclusive Cloth Map!</b> This 18"x19"&nbsp;collectible map features the Overworld printed on high quality cloth. A useful and beautiful navigational tool for Hyrule!<br><br><b>Collector''s Edition Hardcover:</b> A collector-quality book with gold foil stamped hardcover and leather-like look and feel-plus gilded pages!<br><br><b>Complete Walkthrough:</b> We guide you through every turn as Link battles his way past foes and obstacles to victory!<br><br><b>New Content: </b>Completely updated for all that''s new in the HD release, including all Miiverse functionality and the new amiibo features!<br><br><b>Find Every Item:</b> All collectible and Rupee locations are revealed!<br><br><b>Premier Maps:</b> We guide you in the right direction with detailed maps for every dungeon in the game.<br><br><b>Free Mobile-Friendly eGuide:</b> Includes a code to access the eGuide, a web-access version of the complete guide optimized for a second-screen experience.<br><br><i>These limited edition guides will only be printed once. When they are sold out, they will be gone forever!</i>', '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_level` int(11) NOT NULL,
  `type` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `user_level`, `type`) VALUES
(1, 'admin', '5982909bb86b90994e63dd1762fd7ce1', 1, 'activated'),
(2, 'user', '6ad14ba9986e3615423dfca256d04e3f', 2, 'deactivated');

-- --------------------------------------------------------

--
-- Table structure for table `user_level`
--

CREATE TABLE `user_level` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_level`
--

INSERT INTO `user_level` (`id`, `name`) VALUES
(1, 'Admin'),
(2, 'Member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

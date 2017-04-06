-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2017 at 06:17 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_chantryisland`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about`
--

CREATE TABLE `tbl_about` (
  `about_id` smallint(5) UNSIGNED NOT NULL,
  `about_sec1Title` varchar(300) NOT NULL,
  `about_sec1Text1` text NOT NULL,
  `about_sec1Text2` text NOT NULL,
  `about_sec1Text3` text NOT NULL,
  `about_sec2Title` varchar(300) NOT NULL,
  `about_sec2Text` text NOT NULL,
  `about_sec3Title` varchar(300) NOT NULL,
  `about_sec3Text` text NOT NULL,
  `about_beforeText` text NOT NULL,
  `about_afterText` text NOT NULL,
  `about_sec4Title` varchar(300) NOT NULL,
  `about_sec4Text` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_about`
--

INSERT INTO `tbl_about` (`about_id`, `about_sec1Title`, `about_sec1Text1`, `about_sec1Text2`, `about_sec1Text3`, `about_sec2Title`, `about_sec2Text`, `about_sec3Title`, `about_sec3Text`, `about_beforeText`, `about_afterText`, `about_sec4Title`, `about_sec4Text`) VALUES
(1, 'About Chantry Island', 'Chantry Island is located on Lake Huron, just over a mile southwest of the Saugeen River mouth in Southampton, Ontario. On the island is a majestic Imperial Lighthouse built in the mid 1800\'s, as well as the Keeper\'s quarters and a boat house. In 1822, during a hydrographic survey, Captain Henry Bayfield of the Royal Navy christened the island and named it after his friend and British sculptor Sir Francis Chantry.', 'Chantry Island is a glacial moraine and consists of stone above the water and beneath extending a mile north and a mile south of the island. These underwater shoals of massive granite boulders have made this area one of the most treacherous in the Great Lakes. There are over 50 known shipwrecks around the island and there are many accounts from the 1800\'s and early - mid 1900\'s of these disasters and lost lives. Today, buoys and modern navigational tools safely guide boats through the area.', 'The island varies in size depending on the level of Lake Huron. Today, with a low lake level Chantry Island is about 68 acres. In 1986 when the water level was at the highest of the century, the island was only about 10 acres, causing trees on the west, north and south sides to drown. ', 'The Lighthouse History', 'During the mid 1800\'s water traffic on the Great Lakes had substantially increased and the colonial government called for improved navigational tools for the mariners on the Lake Huron. John Brown of Thorold was contracted to build the lighthouse on Chantry Island, as well as 10 other lighthouses to help sailors navigate the Lake. Because of the expense and difficulty of building, only six were completed. The Chantry Island Lighthouse was one of these completed and it was lit on April 1, 1859. The lighthouse stands 86 ft. above water level and is 80 ft. high from its base to the light\'s center. The lantern room of the lighthouse was fitted with a Fresnel lens built and transported from Paris, France. The first fuel used was sperm whale oil and the first light was a fixed light, not the familiar flashing one. Other fuels used have been colza oil, coal oil, kerosene, acetylene and electricity. Its present-day flashing light is solar powered.\r\n', 'The Lighthouse Restoration', 'For almost 100 years (1859 - 1954), light keepers lived on the island to keep the light burning for mariners on the lake. When the lighthouse lamp was converted to electricity in 1954, a light keeper was no longer needed. The buildings were left neglected and suffered at the hands of vandals. The lighthouse still stood intact, but little was left of the light keeper\'s quarters. The roof had fallen in and the walls and floors had crumbled into a pile of rubble in the basement.', 'In 1997 the local Marine Heritage Society established specific goals for the island\'s restoration. The project was to be funded by donations and fundraising efforts, and the majority of the work was to be done by volunteers. With permission from 5 levels of government, the group of volunteers began to rebuild the light keeper\'s cottage, using the original structure plans.', 'The Light Keeper\'s Cottage restoration was completed in 2001. Over 250 volunteers put in more than 300,000 hours of labor to finish the restoration and ready the boat for tours. Since 2001 volunteers have restored the staircase of the lighthouse, built a boathouse on the island, constructed a replica of the original boat (which sits in the boathouse) and reconstructed the privy. Today the tour is operated with over 125 volunteers, whose jobs include island housekeepers, gardeners, tour boat captains, crew and tour guides, and gift shop sales and service personnel. Volunteers also install the portable walkways and docks every spring and remove them every fall. To date, there have been over 20,538 visitors to the island.', 'Federal Bird Sanctuary', 'In 1957 the Canadian Wildlife Service declared Chantry Island a Federal Migratory Bird Sanctuary to protect the migratory and nesting birds of the island. It is the largest Federal Migratory Bird Sanctuary between James Bay and Point Pelee. There are approximately fifty thousand birds (including chicks) on the island during the breeding season. It is home to nesting colonies of Great Blue Heron, Great Egret, Black-crowned Night-Heron, Herring Gull, Ring-billed Gull and Double-crested Cormorant. Water fowl such as Mallard, American Black Duck, Gadwall, Blue-winged Teal, Green-winged Teal, Northern Pintail, and American Wigeon are also known nesters on the island.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking`
--

CREATE TABLE `tbl_booking` (
  `booking_id` smallint(5) UNSIGNED NOT NULL,
  `booking_bookTitle` varchar(300) NOT NULL,
  `booking_bookSubTitle` text NOT NULL,
  `booking_bookPrice` text NOT NULL,
  `booking_bookInfo1` text NOT NULL,
  `booking_bookInfo2` text NOT NULL,
  `booking_bookInfo3` text NOT NULL,
  `booking_bookInfo4` text NOT NULL,
  `booking_bookInfo5` text NOT NULL,
  `booking_bookInfo6` text NOT NULL,
  `booking_bookInfo7` text NOT NULL,
  `booking_bookInfo8` text NOT NULL,
  `booking_tourInfoTitle` varchar(300) NOT NULL,
  `booking_tourInfoText` text NOT NULL,
  `booking_tourInfoTitle2` varchar(300) NOT NULL,
  `booking_tourInfoText2` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_booking`
--

INSERT INTO `tbl_booking` (`booking_id`, `booking_bookTitle`, `booking_bookSubTitle`, `booking_bookPrice`, `booking_bookInfo1`, `booking_bookInfo2`, `booking_bookInfo3`, `booking_bookInfo4`, `booking_bookInfo5`, `booking_bookInfo6`, `booking_bookInfo7`, `booking_bookInfo8`, `booking_tourInfoTitle`, `booking_tourInfoText`, `booking_tourInfoTitle2`, `booking_tourInfoText2`) VALUES
(1, 'Book A Tour!', 'You must call to book a tour!', '$30 per person', 'â€¢ The 2 hour tour must be pre-booked and prepaid.', 'â€¢ Same price for children and adults.', 'â€¢ Special Group rates available.', 'â€¢ 12 person maximum per tour (3 tour workers and 9 visitors).', 'â€¢ For refunds, cancellations must be done 24 hours before you scheduled tour.', 'â€¢ No pets allowed on the island.', 'â€¢ MasterCard, Visa and Debit accepted.', 'â€¢ Tours usually start in late May to mid-September!', 'Tour Information', 'The tour is much like a medium hike and requires a degree of agility and fitness. You can enjoy the tour without climbing the 106 steps in the Lighthouse tower. However, when you do reach the light room, you will always remember the view.\r\n\r\nFor safety, children must be a minimum of 4 feet tall and must be accompanied by an Adult.\r\n\r\nFootwear suitable for hiking is mandatory. For safety reasons, Flip-Flops are not allowed.', 'When and Where to Arrive', 'Come to the Chantry Island Tour Base and Gift Shop located at the south side of the Saugeen River at the harbour in Southampton (See Maps) and arrive 15 minutes ahead of your scheduled tour. Check in and receive your ticket. You will be directed to the dock for the Peerless II.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `contact_id` smallint(5) UNSIGNED NOT NULL,
  `contact_text1` text NOT NULL,
  `contact_text2` text NOT NULL,
  `contact_text3` text NOT NULL,
  `contact_text4` text NOT NULL,
  `contact_text5` text NOT NULL,
  `contact_directionsTitle` varchar(300) NOT NULL,
  `contact_directionsText` text NOT NULL,
  `contact_formText1` text NOT NULL,
  `contact_formText2` text NOT NULL,
  `contact_formText3` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`contact_id`, `contact_text1`, `contact_text2`, `contact_text3`, `contact_text4`, `contact_text5`, `contact_directionsTitle`, `contact_directionsText`, `contact_formText1`, `contact_formText2`, `contact_formText3`) VALUES
(1, 'Mailing Address', 'Marine Heritage Society', '86 Saugeen Street', 'Southampton, Ontario', 'Canada, N0H 2L0', 'Directions', 'From Highway 21 in Southampton, turn west on Clarendon and follow the signs, or From High Street, (the main street), turn north on Huron or Grosvenor Street and look for the signs.', 'Fill in the form for more info!', 'Please note that you cannot book a tour through this form. You must give us a call.', 'Your e-mail will be sent to chantryisland@bmts.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_donations`
--

CREATE TABLE `tbl_donations` (
  `donations_id` smallint(5) UNSIGNED NOT NULL,
  `donations_text1` text NOT NULL,
  `donations_text2` text NOT NULL,
  `donations_text3` text NOT NULL,
  `donations_text4` text NOT NULL,
  `donations_text5` text NOT NULL,
  `donations_text6` text NOT NULL,
  `donations_text7` text NOT NULL,
  `donations_text8` text NOT NULL,
  `donations_text9` text NOT NULL,
  `donations_text10` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_donations`
--

INSERT INTO `tbl_donations` (`donations_id`, `donations_text1`, `donations_text2`, `donations_text3`, `donations_text4`, `donations_text5`, `donations_text6`, `donations_text7`, `donations_text8`, `donations_text9`, `donations_text10`) VALUES
(1, 'Since 1997 we have had a tremendous amount of support by donations. As of this writing we only accept mail-in donations.', 'If you would like to be included please send a cheque or money order to:', 'Mailing Address', 'Marine Heritage Society', '86 Saugeen Street', 'Southampton, Ontario', 'Canada, N0H 2L0', 'Please specify your Donation Preference:', 'Chantry Island and/or New Tour Boat', 'We will send a tax receipt for all donations of $20 and over.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_events`
--

CREATE TABLE `tbl_events` (
  `events_id` smallint(5) UNSIGNED NOT NULL,
  `events_title` varchar(300) NOT NULL,
  `events_text` text NOT NULL,
  `events_date` varchar(300) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_events`
--

INSERT INTO `tbl_events` (`events_id`, `events_title`, `events_text`, `events_date`) VALUES
(1, 'Doug Johnson\'s 91st Birthday', 'Doug is one of the oldest supporters of the Chantry Island Project.', 'Posted Tuesday January 10, 2017'),
(2, 'Marine Heritage Society / Propeller Club AGM 2016', 'The Southampton Christmas Parade always takes place on the First Friday in December.', 'Posted Friday September 30, 2016');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `gallery_id` smallint(5) UNSIGNED NOT NULL,
  `gallery_name` varchar(150) NOT NULL,
  `gallery_img` varchar(150) NOT NULL,
  `gallery_alt` varchar(150) NOT NULL,
  `gallery_credit` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`gallery_id`, `gallery_name`, `gallery_img`, `gallery_alt`, `gallery_credit`) VALUES
(1, 'img1', 'img1.jpg', 'Aerial Shot of Lighthouse', 'Photo by: Karen Smith'),
(2, 'img2', 'img2.jpg', 'Aerial Shot of Chantry Island', 'Photo by: Karen Smith'),
(3, 'img3', 'img3.jpg', 'Aerial View of Southampton, Ontario', 'Photo by : Karen Smith'),
(4, 'img4', 'img4.jpg', 'Lake View of Chantry Island at Dusk', 'Photo By: Carol Walberg'),
(5, 'img5', 'img5.jpg', 'Lake View of Chantry Island Lighthouse', 'Photo By: Vicki Tomori'),
(6, 'img6', 'img6.jpg', 'Chantry Island Lighthouse Interior', 'Photo By: James Swartz'),
(7, 'img7', 'img7.jpg', 'Peerless II on Lake Huron', 'Photo By: George Plant'),
(8, 'img8', 'img8.jpg', 'Chantry Island Birds', 'Photo By: Nancy Calder'),
(9, 'img9', 'img9.jpg', 'Chantry Island Lighthouse Interior', 'Photo By: Terry Thomas'),
(10, 'img10', 'img10.jpg', 'Chantry Island Lighthouse Interior', 'Photo By: Vicki Tomori'),
(11, 'img11', 'img11.jpg', 'Chantry Island Bird Nest and Eggs', 'Photo By: Nancy Calder'),
(12, 'img12', 'img12.jpg', 'Chantry Island Lighthouse Interior', 'Photo By: Vicki Tomori'),
(13, 'img13', 'img13.jpg', 'Chantry Island Lighthouse at Dusk', 'Photo By: Vicki Tomori'),
(14, 'img14', 'img14.jpg', 'Chantry Island Flower', 'Photo By: Vicki Tomori'),
(15, 'img15', 'img15.jpg', 'Chantry Island Lighthouse', 'Photo By: Vicki Tomori'),
(16, 'img16', 'img16.jpg', 'Peerless II at Dock', 'Photo By: Wayne MacDonald'),
(17, 'img17', 'img17.jpg', 'Aerial View of Chantry Island', 'Photo By: James Swartz');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_index`
--

CREATE TABLE `tbl_index` (
  `index_id` smallint(5) UNSIGNED NOT NULL,
  `index_videoTitle` varchar(300) NOT NULL,
  `index_sec1Title` varchar(300) NOT NULL,
  `index_sec1Text` text NOT NULL,
  `index_sec2Title` varchar(300) NOT NULL,
  `index_sec2Text` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_index`
--

INSERT INTO `tbl_index` (`index_id`, `index_videoTitle`, `index_sec1Title`, `index_sec1Text`, `index_sec2Title`, `index_sec2Text`) VALUES
(1, 'Tour Info Video', 'Marine Heritage Society', 'The Marine Heritage Society is a not-for-profit group of volunteers dedicated to the preservation and enhancement of our community\'s marine history. The goal of the Society is to identify, preserve and restore material items of marine historical significance and to raise sufficient funds to support these endeavors. Among other projects, the Society manages the Chantry Island Light Station under agreements and restrictions from the Canadian Coast Guard and the Canadian Wildlife Service.', 'Touring Chantry Island', 'As you take the 15 minute boat ride to the island you will enjoy the outstanding views of the sandy beach shoreline and the deep blue waters of Lake Huron. During your two hour guided visit on Chantry Island, you have the opportunity to climb to the top of the Imperial Lighthouse for extraordinary views of the island. Stroll back in time while visiting the Light Keeper\'s Cottage as it existed in the late 1800â€™s, decorated with period furnishings from private donors and the Bruce County Museum and Cultural Centre. You will also see the surrounding gardens and many species of birds.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

CREATE TABLE `tbl_news` (
  `news_id` smallint(5) UNSIGNED NOT NULL,
  `news_title` varchar(400) NOT NULL,
  `news_image` varchar(300) NOT NULL,
  `news_text` text NOT NULL,
  `news_date` varchar(300) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_news`
--

INSERT INTO `tbl_news` (`news_id`, `news_title`, `news_image`, `news_text`, `news_date`) VALUES
(1, 'Doug Johnson Proudly Displays The Famous Saying', 'doug-johnson.jpg', '', 'Posted Saturday January 18, 2017'),
(2, 'Chantry Island Tour Base', 'tour-base.jpg', 'Inside the Chantry Island Tour Base, where tickets can be purchased for the tours to Chantry Island. The Tour Base will open again in June.', 'Posted Sunday January 8, 2017');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` smallint(5) UNSIGNED NOT NULL,
  `user_fname` varchar(60) NOT NULL,
  `user_lname` varchar(60) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `user_name` varchar(60) NOT NULL,
  `user_pass` varchar(60) NOT NULL,
  `user_level` varchar(30) NOT NULL,
  `user_ip` int(120) NOT NULL,
  `user_lldate` timestamp NOT NULL,
  `user_attempts` int(11) NOT NULL,
  `user_firstLogin` smallint(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_fname`, `user_lname`, `user_email`, `user_name`, `user_pass`, `user_level`, `user_ip`, `user_lldate`, `user_attempts`, `user_firstLogin`) VALUES
(1, 'Justin', 'West', '', 'jwest', '1234', '1', 0, '2017-04-05 00:27:47', 0, 1),
(2, 'Tester', 'Test', 'test@test.com', 'test', '1234', '1', 0, '2017-04-05 00:53:59', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_volunteers`
--

CREATE TABLE `tbl_volunteers` (
  `volunteers_id` smallint(5) UNSIGNED NOT NULL,
  `volunteers_name` varchar(350) NOT NULL,
  `volunteers_img` varchar(350) NOT NULL,
  `volunteers_position` varchar(350) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_volunteers`
--

INSERT INTO `tbl_volunteers` (`volunteers_id`, `volunteers_name`, `volunteers_img`, `volunteers_position`) VALUES
(1, 'Pat O\'Connor', 'blank-portrait.png', 'Vice Chairman'),
(2, 'Don Nicholson', 'blank-portrait.png', 'Chairman'),
(3, 'John Rigby', 'blank-portrait.png', 'Treasurer'),
(4, 'Stan Young', 'blank-portrait.png', 'Secretary'),
(5, 'Rick Smith', 'blank-portrait.png', 'Past Chairman'),
(6, 'Ali Kelly', 'blank-portrait.png', 'Volunteer'),
(7, 'Jane Kramer', 'blank-portrait.png', 'Volunteer'),
(8, 'Vicki Tomori', 'blank-portrait.png', 'Volunteer'),
(9, 'Dan Holmes', 'blank-portrait.png', 'Volunteer'),
(10, 'Dave Wenn', 'blank-portrait.png', 'Volunteer'),
(11, 'Ed Braun', 'blank-portrait.png', 'Volunteer'),
(12, 'John Willetts', 'blank-portrait.png', 'Volunteer'),
(13, 'Peter Williamson', 'blank-portrait.png', 'Observer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_about`
--
ALTER TABLE `tbl_about`
  ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `tbl_donations`
--
ALTER TABLE `tbl_donations`
  ADD PRIMARY KEY (`donations_id`);

--
-- Indexes for table `tbl_events`
--
ALTER TABLE `tbl_events`
  ADD PRIMARY KEY (`events_id`);

--
-- Indexes for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`gallery_id`);

--
-- Indexes for table `tbl_index`
--
ALTER TABLE `tbl_index`
  ADD PRIMARY KEY (`index_id`);

--
-- Indexes for table `tbl_news`
--
ALTER TABLE `tbl_news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tbl_volunteers`
--
ALTER TABLE `tbl_volunteers`
  ADD PRIMARY KEY (`volunteers_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_about`
--
ALTER TABLE `tbl_about`
  MODIFY `about_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  MODIFY `booking_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `contact_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_donations`
--
ALTER TABLE `tbl_donations`
  MODIFY `donations_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_events`
--
ALTER TABLE `tbl_events`
  MODIFY `events_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `gallery_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `tbl_index`
--
ALTER TABLE `tbl_index`
  MODIFY `index_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_news`
--
ALTER TABLE `tbl_news`
  MODIFY `news_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_volunteers`
--
ALTER TABLE `tbl_volunteers`
  MODIFY `volunteers_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

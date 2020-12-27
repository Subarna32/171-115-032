-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2020 at 11:19 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `p300`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_emergency_services`
--

CREATE TABLE `tbl_emergency_services` (
  `ID` int(11) NOT NULL,
  `Address` text NOT NULL,
  `Organization_name` varchar(500) NOT NULL,
  `Phone` varchar(500) NOT NULL,
  `ImagePath` text NOT NULL,
  `Type` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_emergency_services`
--

INSERT INTO `tbl_emergency_services` (`ID`, `Address`, `Organization_name`, `Phone`, `ImagePath`, `Type`) VALUES
(4, 'Pathantula', 'Saju Ambulance Service ', '+01791738850', 'ambulance.jpg', 'Ambulance'),
(6, 'Osmani Medical Road (2nd Gate), Kajolshah, Sylhet', 'Masum Traders Ambulance Service', '+01711300196 ', 'a.jpg', 'Ambulance'),
(7, 'Al-Mokkah Shopping City, 116, Kajolshah, Sylhet.', 'Parapar Enterprise Ambulance Service', '+01716055680', 'b.png', 'Ambulance'),
(8, 'Osmani Medical Road (2nd Gate), Kajolshah, Sylhet.', 'Al Modina Ambulance Service', '+01712061539', 'cccc.jpg', 'Ambulance'),
(9, 'Sylhet.', 'Nurani Ambulance Service', '+01739454906', 'dd.jpg', 'Ambulance'),
(10, 'Kajolshah, Sylhet.', 'Ambulance Service', '+01946388311', 'e.jpg', 'Ambulance'),
(11, ' Sylhet.', 'Joruri Ambulance Service', '+01795871929', 'f.jpg', 'Ambulance'),
(12, ' Sylhet.', 'Shoumic Ambulance', '+0821719241', 'g.jpg', 'Ambulance'),
(14, 'Chowhatta, Sylhet.', 'Sylhet Sadar Hospital Ambulance', '+ 0821713506', 'j.jpg', 'Ambulance'),
(15, ' Sylhet.', 'Metropolitan Ambulance Service', '+01711069486', 'k.jpg', 'Ambulance'),
(16, 'Bandar Bazar, Sylhet.', 'City Corporation Ambulance', '+0821713041', 'l.jpg', 'Ambulance'),
(17, 'Osmani Medical College Hospital, Kajolshah, Sylhet.', 'MAG Osmani Medical College Hospital - Ambulance', '+01746137136', 'o.jpg', 'Ambulance'),
(18, 'Bishwa Rd, Subhanighat, Sylhet', 'Oasis Hospital Ambulance Service', '+01611990000', 'oasis.jpeg', 'Ambulance'),
(19, ' Akhalia, Sylhet', 'Mount Adora Hospital', '+01786511 723', 'm.jpg', 'Ambulance'),
(20, 'Chali Bandar, Bishwa Road, Subhani Ghat, Sylhet', 'Al Haramain Hospital Pvt.  Hospital', '+01938865257', 'al.png', 'Ambulance'),
(22, 'Ambulance', 'We are ready to service you 24 hours.Get Emergency Number of Ambulance please click on view details.', '+ 0821713506', '1project.jpg', 'Index'),
(23, 'Doctor', 'We are ready to service you 24 hours.Get Emergency Number of Doctor please click on view details.', '+ 0821713506', '8project.jpg', 'Index'),
(24, 'Fire', 'We are ready to service you 24 hours.Get Emergency Number of Fire please click on view details.', '+ 0821713506', 'f8.jpg', 'Index'),
(25, 'Police', 'We are ready to service you 24 hours.Get Emergency Number of Police please click on view details.', '+ 0821713506', '9project.jpg', 'Index'),
(26, 'Mount Adora Hospital', 'Dr. Md. Baqi Billah\r\n\r\nMBBS, BCS (Health), MCPS (Surgery), MS (Surgery).\r\n\r\nAssistant Professor, Dept. of Orthopedics.\r\n\r\nSylhet MAG Osmani Medical College and Hospital, Sylhet, Bangladesh.\r\n\r\nOrthopedics and Trauma Surgeon.\r\n', '+01610312200', 'baki1.jpg', 'Doctor'),
(27, 'Mount Adora Hospital', 'Dr. Mirza Omar Beg (Probal)\r\nOrthopedic Specialist & Surgeon\r\n  Dept.  Orthopedics\r\nSylhet MAG Osmani Medical College and Hospital, Sylhet, Bangladesh.', '+8801793314948', 'Mirza1.jpg', 'Doctor'),
(28, 'Mount Adora Hospital', 'Prof. Dr. K M Akhtaruzzaman\r\nMBBS, DCM, MCPS (Medicine), MD (Cardiology).\r\nProfessor and Head, Dept. of Cardiology.\r\nSylhet Womenâ€™s Medical College and Hospital, Sylhet, Bangladesh.\r\nSpecialties: Medicine and Cardiology, Heart Specialist.', '+8801714000770', 'aktar1.png', 'Doctor'),
(29, 'Mount Adora Hospital', 'Dr. Md. Anamur Rahman\r\nCardiologist & Medicine Specialist\r\n  Dept. Cardiology\r\nUHC, Gowainghat, Sylhet.', '+01972091261', 'r.jpg', 'Doctor'),
(30, 'Mount Adora Hospital', 'Prof. Dr. Md.Aminur Rahman Lasker \r\n MBBS,\r\n D.Card (DU)\r\nCardiology Specialist Visiting Professor             \r\nDept. Cardiology \r\n  North East Medical College, Sylhet. \r\n', '+01683521710', 'los.jpg', 'Doctor'),
(31, 'Mount Adora Hospital', 'Prof. Dr. M. Shahbuddin \r\n  MBBS,\r\n  MD (Cardiology) \r\nClinical & Interventional Cardiologist\r\n\r\nProfessor & Head Of the Department Cardiology Unit       Dept. Cardiology\r\nSylhet MAG Osmani Medical College and Hospital, Sylhet, Bangladesh.', '+8801715067019', 's.jpg', 'Doctor'),
(32, 'Mount Adora Hospital', 'Dr. Md. Nazrul Islam\r\n\r\n    MBBS,\r\n    MCPS (Medicine)\r\n    MD (Neurology)\r\n    Neuro Medicine Specialist\r\n    Associate Professor                    \r\n  Dept.  Neurology\r\n    North-East Medical College & Hospital', '+8801730658880', 'naz.jpg', 'Doctor'),
(33, 'Mount Adora Hospital', 'Dr. Shubharthi Kar\r\nMBBS, Institute: BSSMU\r\n    BCS (Health)\r\n    MD (Nephrology )\r\n\r\n  Kidney And Medicine Disease Specialist\r\nDesignation:   Assistant Professor    \r\n      Dept. Nephrology\r\n    Sylhet MAG Osmani Medical College and Hospital, Sylhet, Bangladesh.', '+8801776572087', 'kar1.jpg', 'Doctor'),
(34, 'Mount Adora Hospital', 'Dr. Sultana Zaman\r\n MBBS,\r\n    DGO\r\nObs & Gynae Specialist & Surgeon\r\n    Senior Consultant      \r\n Dept. Obs & Gynae\r\n    Mount Adora Hospital, Mirboxtula, Sylhet.\r\n', '+8801786637476', 'ru.jpg', 'Doctor'),
(35, 'Mount Adora Hospital', 'Dr. Rezwana Mirza \r\n  MBBS,(C.U)\r\n    DGO\r\n    BCS (Health)\r\n    FCPS (Obs & Gynae)\r\nObstetrics & Gynecology Specialist\r\n    Designation:  Consultant        \r\n  Dept. Obstetrics & Gynecology\r\n    Sylhet MAG Osmani Medical College and Hospital, Sylhet, Bangladesh.', '+8801792515959', 'gn.jpg', 'Doctor'),
(36, 'Mount Adora Hospital', 'Dr. Nazma Begum\r\n MBBS, \r\n    MCPS (Obs & Gynae)\r\n    FCPS (Obs & Gynae)\r\n    BCS (Health)\r\n    BMDC Reg. No:37405\r\n  Obs & Gynae Specialist\r\n    Consultant   Dept. Obs & Gynae Specialist\r\n    Shaheed Shamsuddin Ahmed Hospital, Sylhet, Bangladesh.\r\n', '+8801711227561', 'nazma.jpg', 'Doctor'),
(37, 'Popular Medical Centre Ltd.', '\r\nPROF. DR. ANWARA BEGUM\r\nMBBS, M.C.P.S, D.G.O, M.S ( OBs &\r\nGynae ) Specialist Obs & Gynae,\r\nHigher Training in Laparoscopy,\r\n TVS & Subfertility . Professor\r\n(Obs & Gynae ) M. A. G Osmani\r\n Medical College & Hospital.', '+8801761053958', 'an.jpg', 'Doctor'),
(38, 'Popular Medical Centre Ltd.', '\r\nDR. MD. FARUQUE UDDIN\r\n: MBBS. D-Card, MD( Cardiology).\r\nAsso. Prof Head of the Dept of\r\nCardiology North East Medical College & Hospital.', '+8801723166595', 'Dr.-Faruk-Uddin-150x150.jpg', 'Doctor'),
(39, 'Popular Medical Centre Ltd.', '\r\nDR. KHANDAKAR MD. KAMRUL ISLAM\r\nMBBS, BCS, FCPS (Physical Medicine).\r\n Medical Officer (Sports, Medicine &\r\n  Arthroscopy)M. A. G Osmani Medical  College & Hospital.', '+8801536171370', 'Dr.-Kamrul-Islam-F.jpg', 'Doctor'),
(40, 'Popular Medical Centre Ltd.', '\r\nDR. MD SHAMSUR RAHMAN\r\n MS â€“ ( Paediatric Surgery).\r\nAsso.Prof Dept of Paediatric Surgery.\r\nM. A. GOsmani Medical College & Hospital.', '+8801723166595', 'Dr.-Samsur-Rahman-150x150.jpg', 'Doctor'),
(41, 'Popular Medical Centre Ltd.', 'DR. MD. ZIAUR RAHMAN CHOWDHURY.\r\nDegree: MBBS (DU), DCH (BSMMU ) MD.\r\nChild Specialist. Asst.Prof M. A. GOsmani Medical \r\nCollege & Hospital.', '+8801772442004', 'Dr.-Zia-150x150.jpg', 'Doctor'),
(42, 'Popular Medical Centre Ltd.', 'DR. RANJON ROY\r\nDegree: MBBS, FCPS (Medicine).\r\n Asst.Prof  M. A. G Osmani MedicalCollege & Hospital .', '+8801710263588', 'Dr.-Ranjan-Roy-150x150.jpg', 'Doctor'),
(43, 'Medinova Diagnostic Center', 'Dr. Salma Aktar\r\nMBBS; (DMC) FCPS, BCS (health)\r\nM.A.G Osmani Medical College & Hospital Sylhet\r\nGynae and Obstetrics\r\n', '+0821710918', 'doctor_demo.jpg', 'Doctor'),
(44, 'Trust Medical Services', 'Dr: Debasish Paul\r\nMBBS,MD(Cardiology)\r\nJalalabad Ragib-Rabeya Medical College and Hospital\r\nMedicine & Heart\r\n', '+01746727154', 'doctor_demo1.jpg', 'Doctor'),
(45, 'Trust Medical Services', 'Dr: Shamima Akhter Shipa\r\nMBBS,MS(Gynae & Obs)\r\nNorth East Medical College and Hospital\r\nGynae and Obstetrics\r\n', '+01797571056', 'd5.png', 'Doctor'),
(46, 'Trust Medical Services', 'DR. (LT.COL.) MOHAMMAD SAIFUL ISLAM\r\nOrthopedic Surgery\r\nMBBS, MS (ORTHO.)', '+8801713301523', '1417857761_saiful.jpg', 'Doctor'),
(47, 'Ibn Sina Hospital Sylhet Limited ', 'DR. AYESHA RAFIQ CHOWDHURY\r\nMedicine & Cardiology\r\nMBBS, MRCP (London), FCPS (Medicine), MD (Cardiology).', '+8801713301523', '1417846153_Ays.jpg', 'Doctor'),
(48, 'Ibn Sina Hospital Sylhet Limited ', 'DR. FAZLUL HAQUE\r\n    Cardiology\r\n    MBBS, MD (CARDIOLOGY).\r\n  ', '+8801713301523', '1421143403_fazlul.jpg', 'Doctor'),
(49, 'Ibn Sina Hospital Sylhet Limited ', 'DR. FARZANA HAMID\r\n    Pediatric Medicine\r\n    Degrees\r\n    MBBS,FCPS (PEDIATRIC),MRCPH.\r\n\r\n\r\n', '+8801972832741', '1419232744_farjana.jpg', 'Doctor'),
(50, 'Ibn Sina Hospital Sylhet Limited ', '\r\nDR. MOYEEN UDDI \r\n Medicine & Cardiology\r\n MBBS.BCS.FCPS (MEDICINE),MD (CARDIOLOGY).\r\n\r\n\r\n', '+8801972832741', '1419231939_Moin uddin.jpg', 'Doctor'),
(51, 'Ibn Sina Hospital Sylhet Limited ', '\r\nDR. RASHEDUL HAQUE  \r\n  Pediatric Medicine\r\n  MBBS,FCPS (PEDIATRIC).\r\n\r\n', '+8801972832741', '1417856163_Rashu.jpg', 'Doctor'),
(52, 'Ibn Sina Hospital Sylhet Limited ', '\r\nPROF. DR. SYED MOOSA M.A.QUAIUM\r\n  Pediatric Medicine\r\n MBBS, DCH, RCPAS, FCPS (CHILD HEALTH).\r\n   \r\n\r\n', '+8801972832741', '1419232203_musa.jpg', 'Doctor'),
(53, 'Ibn Sina Hospital Sylhet Limited ', '\r\nDR. A. N. M YOUSUF  \r\n Ophthalmology\r\n MBBS,BCS,FCPS(EYE),MS.(EYE)\r\n\r\n', '+8801972832741', '1421140954_usof.jpg', 'Doctor'),
(54, 'Ibn Sina Hospital Sylhet Limited ', '\r\nPROF. DR. SYED MAMOON MUHAMMAD\r\n    Dermatology\r\n    MBBS. DDV. MD (DERMATOLOGY).\r\n\r\n\r\n', '+8801972832741', '1417853274_mam.jpg', 'Doctor'),
(55, 'Oasis Hospital ', ' Sujata Sarker Physician\r\nConsultant Dietician & Nutritionist Obesity & Diet Therapy Specialist\r\nM.Sc. in Food & Nutrition \r\n\r\n\r\n', '+01763990055', '18.jpg', 'Doctor'),
(56, 'Oasis Hospital ', '  Dr. Saiqa Rehnuma \r\nSpecialist in Gynae & Obs. & Surgeon\r\nMBBS, BCS (Health) FCPS (Gynae & Obs.) \r\n\r\n', '+01763990055', '13.jpg', 'Doctor'),
(57, 'Oasis Hospital ', '  \r\n\r\nDr. Mohammad Hussain Physician\r\nHeart & Medicine Specialist\r\nMBBS, D-Card (DMC) ', '+01763990055', '22.jpg', 'Doctor'),
(58, 'Oasis Hospital ', '   Professor Dr. Goutam Kumar Roy \r\nà¦®à§‡à¦¡à¦¿à¦¸à¦¿à¦¨ à¦“ à¦—à§à¦¯à¦¾à¦¸à§à¦Ÿà§à¦°à§‹à¦à¦¨à§à¦Ÿà¦¾à¦°à§‹à¦²à¦œà§€ à¦¬à¦¿à¦¶à§‡à¦·à¦œà§à¦ž\r\nMBBS, FCPS (Medicine) ', '+01763990055', '11.jpg', 'Doctor'),
(59, 'Oasis Hospital ', ' Dr. Sulaiman Ahmed Physician\r\nHeart & Medicine Specialist\r\nMBBS,MSC,Cardiology (UK) ', '+01763990055', '40.jpg', 'Doctor'),
(60, 'Oasis Hospital ', ' Dr. Nurul Hasan Siddiquee \r\nHeart & Medicine Specialist\r\nMBBS (SUST), CCD (Birdem) PGT (Medicine), PGT (Cardiology) ', '+01763990055', '44.jpg', 'Doctor'),
(61, 'Oasis Hospital ', ' Professor Dr. Cyrus Shakiba Physician\r\nFellow. Joint Replacement Surgery, India\r\nMBBS, MS (Ortho. Surgery) ', '+01763990055', '17.jpg', 'Doctor'),
(62, 'Labaid Diagnostics Sylhet', ' DR. A. K. FAZLUL HAQUE\r\nMBBS, MD \r\nCardiology', '+01766660135', 'd6.jpg', 'Doctor'),
(63, 'Labaid Diagnostics Sylhet', ' DR. ANISUR RAHMAN\r\nMBBS, DIH, DEM, MACE\r\nDiabetology & Endocrinology', '+01766660135', 'd8.jpg', 'Doctor'),
(64, 'Labaid Diagnostics Sylhet', ' DR. MUHAMMAD NAZRUL ISLAM\r\nMBBS,FCPS,(MEDICINE) MD,(NEPHROLOGY)\r\nNephrology', '+01766660135', 'd9.jpg', 'Doctor'),
(65, 'Labaid Diagnostics Sylhet', '  DR. MUJIBUR RAHMAN\r\nM.D, M.S, PH.D (UROLOGY). \r\nUrology', '+01766660135', 'd1.jpg', 'Doctor'),
(66, 'Kumarpara Rd', 'Sylhet Metropolitan Police Office', '+0821716968', 'index.png', 'Police'),
(67, 'Ambarkhana ', 'Ambarkhana Police Station Sylhet', '+0821716968', 'in.jpg', 'Police'),
(68, 'Lamabazar', 'Lamabazar Police Fari Sylhet', '+0821716968', 'images888.jpg', 'Police'),
(69, 'Kodomtoli', 'Sylhet Railway Police Station', '+01711506150', 'okp.jpg', 'Police'),
(70, 'Sylhet', 'Tourist Police Sylhet Zone Office', '+01769690720', 't.jpg', 'Police'),
(71, 'South Surma,Sylhet', 'South Surma Police Station', '+0821718023', 'hhhh.jpg', 'Police'),
(72, 'Sonar Para, Shibgonj, Sylhet', 'Deputy Police Commissioner (North) Office, SMP, Sylhet.', '+01713374509', 'kkkkk.jpg', 'Police'),
(73, 'Kotwali, Sylhet', 'Kotwali Thana ', '+01713374375', 'p13.jpg', 'Police'),
(74, 'Sheikhghat-Kazirbazar Rd,Sylhet', 'Sylhet Fire Station', '+01730336644', 'fjk.jpg', 'Fire'),
(75, 'Kulaura,Sylhet', 'Kulaura Fire Station', '+01712750112', 'ff3.jpg', 'Fire'),
(76, 'Madhobpur,Sylhet', 'Madhobpur Fire Station', '+01712382935', 'ff4.jpg', 'Fire'),
(77, 'Hobigonj ,Sylhet', 'Hobigonj Fire Station', '+01913115601', 'ff5.jpg', 'Fire'),
(78, 'Borolekha,Sylhet', 'Borolekha Fire Station', '+01819848030', 'ff6.jpg', 'Fire'),
(79, 'Srimongal,Sylhet', 'Srimongal Fire Station', '+01716072028', 'ff8.jpg', 'Fire'),
(80, 'Moulovibazar,Sylhet', 'Moulovibazar Fire Station', '+01720634040', 'ff9.jpg', 'Fire'),
(81, 'Chatok ,Sunamgonj', 'Chatok Fire Station', '+01714434677', 'ff10.jpg', 'Fire'),
(82, 'Sunamgonj', 'Sunamgonj Fire Station', '+087155222', 'ff11.jpg', 'Fire'),
(83, 'Sylhet', 'Sylhet South Fire Station', '+01819971003', 'ff12.jpg', 'Fire');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fare`
--

CREATE TABLE `tbl_fare` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Fare` varchar(255) NOT NULL,
  `Distance_frm` varchar(255) NOT NULL,
  `Distance_to` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_fare`
--

INSERT INTO `tbl_fare` (`ID`, `Name`, `Fare`, `Distance_frm`, `Distance_to`) VALUES
(1, 'Rickshaw', '10', 'Zindabazar', 'Noyasorok'),
(2, 'CNG', '5', 'Zindabazar', 'Noyasorok'),
(3, 'Rickshaw ', '20', 'Bondor', 'Tantipara'),
(5, 'Leguna', '20', 'Bondor', 'Boteswar'),
(6, 'CNG', '10', 'Amborkhana', 'Bondor'),
(7, 'Rickshaw', '30', 'Amborkhana', 'Bondor'),
(8, 'CNG', '20', 'Zindabazar', 'Pathantula'),
(9, 'Rickshaw', '50', 'Zindabazar', 'Pathantula'),
(10, 'CNG', '20', 'Amborkhana', 'Kumargaon'),
(11, 'Rickshaw', '50', 'Subidbazar', 'Kumargaon'),
(12, 'Rickshaw', '90', 'Zindabazar', 'Kumargaon'),
(13, 'CNG', '150', 'Bondor', 'Shah-Poran'),
(14, 'Leguna', '10', 'Bondor', 'Tilagor'),
(15, 'CNG', '15', 'Bondor', 'Tilagor'),
(16, 'Rickshaw', '60', 'Zindabazar', 'Tilagor'),
(17, 'Rickshaw', '70', 'Tilagor', 'Chowhatta'),
(18, 'CNG', '20', 'Shibgonj', 'Bondor'),
(19, 'Rickshaw', '40', 'Tantipara', 'Shibgonj'),
(20, 'CNG', '10', 'Mirabazar', 'Bondor'),
(21, 'CNG', '25', 'Bondor', 'Modina Market');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_food`
--

CREATE TABLE `tbl_food` (
  `ID` int(11) NOT NULL,
  `Restaurant_Name` varchar(255) NOT NULL,
  `Description` text NOT NULL,
  `Sdescription` text NOT NULL,
  `Cuisine` varchar(255) NOT NULL,
  `Business_hours` text NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `Pdf` text NOT NULL,
  `Image1` text NOT NULL,
  `Image2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_food`
--

INSERT INTO `tbl_food` (`ID`, `Restaurant_Name`, `Description`, `Sdescription`, `Cuisine`, `Business_hours`, `Address`, `Phone`, `Pdf`, `Image1`, `Image2`) VALUES
(1, 'Curry Royal', '‘Curry Royal’ is an authentic Thai Cuisine in Sylhet.  Excellent Food and Tasty Curry made with first class Ingredients. Dine in with your friends and family under open sky and lovely ambience.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', '‘Curry Royal’ is an authentic Thai Cuisine in Sylhet.  Excellent Food and Tasty Curry made with first class Ingredients. Dine in with your friends and.............. ', 'Thai', 'Mon:	11:00 AM – 11:00 PM Tue:	11:00 AM – 11:00 PM Wed:	11:00 AM – 11:00 PM Thu:	11:30 AM – 11:00 PM Fri:	3:30 – 11:00 PM Sat:	11:00 AM – 11:00 PM Sun:	11:00 AM – 11:00 PM', 'Near Jama Masjid, Kumarpara Point, Sylhet City 3100 Bangladesh', '01401041188', 'Curry_Royal.pdf', 'indian-restaurant-in.jpg', 'curry_royal.jpg'),
(5, 'Platinum Lounge', '‘Platinum Lounge’ is an authentic Chinese Cuisine in Sylhet.  Excellent Food and Tasty Curry made with first class Ingredients. Dine in with your friends and family under open sky and lovely ambience.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', '‘Platinum Lounge’ is an authentic Chinese Cuisine in Sylhet.  Excellent Food and Tasty Curry made with first class Ingredients. Dine in with your friends and..............', 'Chinese', 'Monday	11:00 am	-	12:00 am Tuesday	11:00 am	-	12:00 am Wednesday	11:00 am	-	12:00 am Thursday	11:00 am	-	12:00 am Friday	11:00 am	-	12:00 am Saturday	11:00 am	-	12:00 am Sunday	11:00 am	-	12:00 am', 'Kumarpara Road Kumarpara Complex, Sylhet City 3100 Bangladesh', '01710272539', 'Platinum_Lounge.pdf', 'multi-cuisine-restaurant.jpg', '56184286_365957854020966_7034371272171585536_n.jpg'),
(6, 'Big Bite Sylhet', '‘Big Bite’ is an authentic BangladeshiCuisine in Sylhet.  Excellent Food and Tasty Curry made with first class Ingredients. Dine in with your friends and family under open sky and lovely ambience.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', '‘Big Bite’ is an authentic BangladeshiCuisine in Sylhet.  Excellent Food and Tasty Curry made with first class Ingredients. Dine in with your friends and......', 'Bangladeshi', 'Monday	11:00 am	-	12:00 am Tuesday	11:00 am	-	12:00 am Wednesday	11:00 am	-	12:00 am Thursday	11:00 am	-	12:00 am Friday	11:00 am	-	12:00 am Saturday	11:00 am	-	12:00 am Sunday	11:00 am	-	12:00 am', 'KumarparaSylhet, Sylhet Division, Bangladesh', '01732900666', 'Big_Bite_Sylhet.pdf', '125413053_1040984056350588_8370223694223680335_o.jpg', 'nmj566759.jpg'),
(7, 'The Mad Grill', '‘Tha Mad Grill’ is an authentic Chinese Cuisine in Sylhet.  Excellent Food and Tasty Curry made with first class Ingredients. Dine in with your friends and family under open sky and lovely ambience.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', '‘Tha Mad Grill’ is an authentic Chinese Cuisine in Sylhet.  Excellent Food and Tasty Curry made with first class Ingredients. Dine in with your friends and......', 'Chinese', 'Mon:	11:00 AM – 11:00 PM Tue:	11:00 AM – 11:00 PM Wed:	11:00 AM – 11:00 PM Thu:	11:30 AM – 11:00 PM Fri:	3:30 – 11:00 PM Sat:	11:00 AM – 11:00 PM Sun:	11:00 AM – 11:00 PM', 'Manik Pir Tila Rd, Nayasarak Point (1.23 km) 3100 Sylhet, Sylhet Division, Bangladesh', '01954-556677', 'Mad_Grill.pdf', 'dfgsdffffg.jpg', 'tandoori-chicken.jpg'),
(11, 'Woondaal King Kebab', 'WOONDAAL is an AUTHENTIC Asian Restuarant in Sylhet and located in the HEART of Sylhet City. We are specialized in traditional INDIAN FOOD like Naan, Kebab, Biriyani, Curry etc. with a prestigious luxury atmosphere.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 'WOONDAAL is an AUTHENTIC Asian Restuarant in Sylhet and located in the HEART of Sylhet City. We are specialized in traditional INDIAN FOOD like Naan, Kebab, Biriyani, Curry etc. with a.....', 'Asian', 'Mon:	11:00 AM – 11:00 PM Tue:	11:00 AM – 11:00 PM Wed:	11:00 AM – 11:00 PM Thu:	11:30 AM – 11:00 PM Fri:	3:30 – 11:00 PM Sat:	11:00 AM – 11:00 PM Sun:	11:00 AM – 11:00 PM', '465 East Zindabazar, Sylhet City 3100 Bangladesh', '01717020505', 'Woondal.pdf', '59787100_10156959583971043_3601624111157084160_o.jpg', 'indoor-view.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `ID` int(11) NOT NULL,
  `Image` text NOT NULL,
  `Type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`ID`, `Image`, `Type`) VALUES
(1, 'g1.jpg', 'Admin'),
(2, 'g2.jpg', 'Admin'),
(3, 'g3.jpg', 'Admin'),
(4, 'g4.jpg', 'Admin'),
(5, 'g5.jpg', 'Admin'),
(6, 'g6.jpg', 'Admin'),
(7, 'g7.jpg', 'Admin'),
(8, 'g8.jpg', 'Admin'),
(9, 'g9.jpg', 'Admin'),
(12, 'h1.jpg', 'Hotel'),
(13, 'h2.jpg', 'Hotel'),
(14, 'h3.jpg', 'Hotel'),
(15, 'h4.jpg', 'Hotel'),
(16, 'h5.jpg', 'Hotel'),
(17, 'h6.jpg', 'Hotel'),
(18, 'h7.jpg', 'Hotel'),
(19, 'h8.jpg', 'Hotel'),
(21, 'h9.jpg', 'Hotel');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_room`
--

CREATE TABLE `tbl_room` (
  `ID` int(11) NOT NULL,
  `Hotel_name` varchar(255) NOT NULL,
  `Room_no` int(11) NOT NULL,
  `Room_Type` varchar(255) NOT NULL,
  `Room_description` text NOT NULL,
  `Price` varchar(255) NOT NULL,
  `Description` text NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `Photo1` text NOT NULL,
  `Photo2` text NOT NULL,
  `User_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_room`
--

INSERT INTO `tbl_room` (`ID`, `Hotel_name`, `Room_no`, `Room_Type`, `Room_description`, `Price`, `Description`, `Address`, `Phone`, `Photo1`, `Photo2`, `User_id`) VALUES
(1, 'Hotel Grand View', 401, 'Suite', 'It has Satellite television,Wi-Fi, Electronic Safe Personal bar, Bath Tub & Shower, 24 Hours room service. ', '7900', 'Hotel Grand View launched in july, 2018 is favorably situated in the heart of Sylhet City, surrounded by many corporate offices, Atm booths & variety of restaurants like as- Thai, Chinese, Indian & continental. It takes only 5 minutes by rickshaw to go ‘The shrine courtyard of Hazrat Shahjalal (ra:)’  from our hotel. The easy communication way from Airport, Bus station & Railway station which will takes only 15 minutes to reach in hotel. The location of the hotel make it very easy for the visitors to explore the Sylhet city alongside many scenic spots nearby Sylhet.', 'Hotel Grand View 1-Symphony Heights & Hotel Grand View 2- Karim Tower Baruthkhana point, East Zindabazar, Sylhet ', ' +880140-4033002, +880140-4033005, 0821-729144          ', 'abh.jpg', '67890.jpg', 17),
(4, 'Hotel Grand View', 501, 'Double', 'It has Satellite television,Wi-Fi, Electronic Safe Personal bar, Bath Tub & Shower, 24 Hours room service. ', '2800', 'Hotel Grand View launched in july, 2018 is favorably situated in the heart of Sylhet City, surrounded by many corporate offices, Atm booths & variety of restaurants like as- Thai, Chinese, Indian & continental. It takes only 5 minutes by rickshaw to go ‘The shrine courtyard of Hazrat Shahjalal (ra:)’  from our hotel. The easy communication way from Airport, Bus station & Railway station which will takes only 15 minutes to reach in hotel. The location of the hotel make it very easy for the visitors to explore the Sylhet city alongside many scenic spots nearby Sylhet.', 'Hotel Grand View 1-Symphony Heights & Hotel Grand View 2- Karim Tower Baruthkhana point, East Zindabazar, Sylhet ', ' +880140-4033002, +880140-4033005, 0821-729144          ', 'abh1.jpg', '277385699.jpg', 17),
(7, 'Hotel Rose View', 301, 'Single', 'It has Satellite television,Wi-Fi, Electronic Safe Personal bar, Bath Tub & Shower, 24 Hours room service. ', '7900', 'Rose View Hotel welcomes you to enjoy comfort and luxury, a place where you will find exceptional five star facilities and world class hospitality.\r\n\r\nThe Hotel features 140 fully equipped deluxe and suite rooms, an extensive array of restaurant outlets catering for international and local palates, fully equipped fitness centre, sauna and steam, authentic Thai Spa, heated roof top swimming pool, the only fully stocked licensed bar in the City and a full range of meeting and event facilities ideal for business and private gatherings for up to 1000 people.\r\n\r\nConveniently and centrally located from the shopping and business districts, served by Osmani International Airport, national train networks and accessible via the main road links connecting the city to Dhaka, Rose View Hotel combines style, warmth and convenience with a dash of creativity to deliver an experience that is like no other. ', 'Shahjalal Uposhohor Sylhet, 3100', '052415484845', 'view-from-outside.jpg', '6a090146_b.jpg', 18),
(11, 'Hotel Noorjahan Grand', 601, 'Single', 'It has Air conditioning Room service, Seating area, Separate dining area, Telephone, Kitchenette, Refrigerator, Complimentary toiletries', '500', 'Soaring high above downtown Sylhet,Hotel Noorjahan Grand is an iconic landmark that offers the ultimate luxury in accommodation. Proposing a unique lifestyle experience,the hotel promises to offer nothing less than excellent service. Whether it is business or pleasure that brings you to town, our hotel address is centrally located to all major tourist attractions. Within 5mins walking distance to the top attraction of the city-Hazrat Shahjalal Mazar, our hotel is the perfect place to call home while discovering the very best this city has to offer. Our room’s chic modern style offers the amenities and style desired by business and leisure guests alike. Decorated to reflect the sophistication with wallpapers in sumptuous textures and crisp white bed linens, it is your sleek hideaway in the city. Rooms of understated elegance feature a generous workstation, crocodile leather sofas, 32-inch flat-screen TV, electronic safe,bed side charging station, coffee maker, and a fully-stocked mini bar. The elegant bathroom features a clean-lined washstand, a combination of Italian granite & tile surfaces and a separate step-in shower . WiFi is accessible for free in the hotel premises.\r\n\r\nWe welcome you to witness our unparalleled luxury !!!', ' Waves 1, Dargah Gate, Sylhet 3100', '01930111666', 'overview3.jpg', 'executive_double2.jpg', 22),
(12, 'Richmond Hotel and Apartments', 403, 'Quad', 'It has Air conditioning Room service, Seating area, Separate dining area, Telephone, Kitchenette, Refrigerator, Complimentary toiletries', '5500', 'Built in 2006, Richmond Hotel and Apartments is a distinct addition to Sylhet and a smart choice for travelers. Situated only 0.7 km from the city center, guests are well located to enjoy the town\'s attractions and activities. With its convenient location, the hotel offers easy access to the city\'s must-see destinations. At Richmond Hotel and Apartments, every effort is made to make guests feel comfortable. To do so, the hotel provides the best in services and amenities. This hotel offers numerous on-site facilities to satisfy even the most discerning guest. Hotel accommodations have been carefully appointed to the highest degree of comfort and convenience. In some of the rooms, guests can find internet access - wireless (complimentary), air conditioning, wake-up service, telephone, fan. Besides, the hotel\'s host of recreational offerings ensures you have plenty to do during your stay. Enjoy unparalleled services and a truly prestigious address at the Richmond Hotel and Apartments.', '10th Floor, Al Hamra Shopping City, Hazrat Shahjalal Road, Zindabazar, Sylhet City 3100 Bangladesh', '0821719075', 'maxresdefault.jpg', '1066513312img-10.jpg', 24),
(13, 'Richmond Hotel and Apartments', 502, 'Suite', 'It has Air conditioning Room service, Seating area, Separate dining area, Telephone, Kitchenette, Refrigerator, Complimentary toiletries', '6700', 'Built in 2006, Richmond Hotel and Apartments is a distinct addition to Sylhet and a smart choice for travelers. Situated only 0.7 km from the city center, guests are well located to enjoy the town\'s attractions and activities. With its convenient location, the hotel offers easy access to the city\'s must-see destinations. At Richmond Hotel and Apartments, every effort is made to make guests feel comfortable. To do so, the hotel provides the best in services and amenities. This hotel offers numerous on-site facilities to satisfy even the most discerning guest. Hotel accommodations have been carefully appointed to the highest degree of comfort and convenience. In some of the rooms, guests can find internet access - wireless (complimentary), air conditioning, wake-up service, telephone, fan. Besides, the hotel\'s host of recreational offerings ensures you have plenty to do during your stay. Enjoy unparalleled services and a truly prestigious address at the Richmond Hotel and Apartments.', '10th Floor, Al Hamra Shopping City, Hazrat Shahjalal Road, Zindabazar, Sylhet City 3100 Bangladesh', '08217190765', 'maxresdefault1.jpg', '010620200413194895e12b3df6a4ec.jpg', 24),
(14, 'Hotel Grand View', 503, 'Double', 'It has Satellite television,Wi-Fi, Electronic Safe Personal bar, Bath Tub & Shower, 24 Hours room service. ', '2800', 'Hotel Grand View launched in july, 2018 is favorably situated in the heart of Sylhet City, surrounded by many corporate offices, Atm booths & variety of restaurants like as- Thai, Chinese, Indian & continental. It takes only 5 minutes by rickshaw to go ‘The shrine courtyard of Hazrat Shahjalal (ra:)’  from our hotel. The easy communication way from Airport, Bus station & Railway station which will takes only 15 minutes to reach in hotel. The location of the hotel make it very easy for the visitors to explore the Sylhet city alongside many scenic spots nearby Sylhet.', 'Hotel Grand View 1-Symphony Heights & Hotel Grand View 2- Karim Tower Baruthkhana point, East Zindabazar, Sylhet ', ' +880140-4033002, +880140-4033005, 0821-729144          ', 'abh2.jpg', '479_images16_1566036820.jpg', 17),
(33, 'Hotel Noorjahan Grand', 604, 'Triple', 'It has Air conditioning Room service, Seating area, Separate dining area, Telephone, Kitchenette, Refrigerator, Complimentary toiletries', '5000', 'Soaring high above downtown Sylhet,Hotel Noorjahan Grand is an iconic landmark that offers the ultimate luxury in accommodation. Proposing a unique lifestyle experience,the hotel promises to offer nothing less than excellent service. Whether it is business or pleasure that brings you to town, our hotel address is centrally located to all major tourist attractions. Within 5mins walking distance to the top attraction of the city-Hazrat Shahjalal Mazar, our hotel is the perfect place to call home while discovering the very best this city has to offer. Our room’s chic modern style offers the amenities and style desired by business and leisure guests alike. Decorated to reflect the sophistication with wallpapers in sumptuous textures and crisp white bed linens, it is your sleek hideaway in the city. Rooms of understated elegance feature a generous workstation, crocodile leather sofas, 32-inch flat-screen TV, electronic safe,bed side charging station, coffee maker, and a fully-stocked mini bar. The elegant bathroom features a clean-lined washstand, a combination of Italian granite & tile surfaces and a separate step-in shower . WiFi is accessible for free in the hotel premises.\r\n\r\nWe welcome you to witness our unparalleled luxury !!!', ' Waves 1, Dargah Gate, Sylhet 3100', '01930111666', 'overview.jpg', 'premier_twin1.jpg', 22),
(34, 'Hotel Noorjahan Grand', 501, 'Quad', 'It has Air conditioning Room service, Seating area, Separate dining area, Telephone, Kitchenette, Refrigerator, Complimentary toiletries', '5890', 'Soaring high above downtown Sylhet,Hotel Noorjahan Grand is an iconic landmark that offers the ultimate luxury in accommodation. Proposing a unique lifestyle experience,the hotel promises to offer nothing less than excellent service. Whether it is business or pleasure that brings you to town, our hotel address is centrally located to all major tourist attractions. Within 5mins walking distance to the top attraction of the city-Hazrat Shahjalal Mazar, our hotel is the perfect place to call home while discovering the very best this city has to offer. Our room’s chic modern style offers the amenities and style desired by business and leisure guests alike. Decorated to reflect the sophistication with wallpapers in sumptuous textures and crisp white bed linens, it is your sleek hideaway in the city. Rooms of understated elegance feature a generous workstation, crocodile leather sofas, 32-inch flat-screen TV, electronic safe,bed side charging station, coffee maker, and a fully-stocked mini bar. The elegant bathroom features a clean-lined washstand, a combination of Italian granite & tile surfaces and a separate step-in shower . WiFi is accessible for free in the hotel premises.\r\n\r\nWe welcome you to witness our unparalleled luxury !!!', ' Waves 1, Dargah Gate, Sylhet 3100', '01930111666', 'overview2.jpg', 'family_suite1.jpg', 22);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_room_book`
--

CREATE TABLE `tbl_room_book` (
  `ID` int(11) NOT NULL,
  `Room_id` varchar(255) NOT NULL,
  `User_id` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `Room_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_room_book`
--

INSERT INTO `tbl_room_book` (`ID`, `Room_id`, `User_id`, `date`, `Room_type`) VALUES
(30, '11', '3', '2020-12-10', 'Single');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shopping`
--

CREATE TABLE `tbl_shopping` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Description` text NOT NULL,
  `Sdescription` text NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `Contact` varchar(255) NOT NULL,
  `Image1` text NOT NULL,
  `Image2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_shopping`
--

INSERT INTO `tbl_shopping` (`ID`, `Name`, `Description`, `Sdescription`, `Address`, `Type`, `Contact`, `Image1`, `Image2`) VALUES
(1, 'Sylhet Online Shop', 'Sylhet Online Shop is the largest retail chain cosmetics shop in Bangladesh and proud to introduce genuine and world class brand cosmetics, imported directly from the USA, Canada, Germany, England and China. It is the most trustable shop in terms of cosmetics products among the Female.', 'Sylhet Online Shop is the largest retail chain cosmetics shop in Bangladesh.....', 'নয়াসড়ক #2nd Floor, Kashana complex, Beside Maha, Noyashorok,Sylhet.  জিন্দাবাজার #Shop No-01-0ne-Right Side , Elegant Shopping Mall,Opposite of Raza Mansion, Zindabazar, Sylhet.', 'Cosmetics Products', '01974131713', 'images1.jpg', 'index.jpg'),
(2, 'Al-Hamra Shopping City', 'Al-Hamra Shopping City is one of the Finest Shopping Cum Office Mall in Bangladesh designed to make Shopping and Working, a Pleasure, Fun and memorable experience. It is one of the leading Shopping complex in the heart of the city proudly introduces to the average number of people. It contains different sections', 'Al-Hamra Shopping City is one of the Finest Shopping Cum Office Mall in......', 'Hazrat Shahjalal Rd, Sylhet 3100', 'Combined', '0821719612', '41121470.jpg', 'bg1.jpg'),
(5, 'Fairy', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an............', 'East zindabazar\r\nBagbari, Sylhet Division, Bangladesh', 'Clothing', '01816326775', 'images2.jpg', 'index1.jpg'),
(6, 'Apex', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an.......', 'Amberkhana point\r\nSylhet, Sylhet Division, Bangladesh', 'Shoes', '01722625927', 'index3.jpg', '17103558_866919260115862_7149801297630366191_n.jpg'),
(7, 'Diamond World', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an..........', 'Wahid View Shopping Complex, floor -1, Sylhet (1.04 km)3100 Sylhet, Sylhet Division, Bangladesh', 'Jewellery', '01709638724', '131264509_3416814828440315_7205264846533996816_n.jpg', '128810680_3391123651009433_7115615046093765757_o.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tourist`
--

CREATE TABLE `tbl_tourist` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Sdescription` text NOT NULL,
  `Description` text NOT NULL,
  `Image1` text NOT NULL,
  `Image2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_tourist`
--

INSERT INTO `tbl_tourist` (`ID`, `Name`, `Sdescription`, `Description`, `Image1`, `Image2`) VALUES
(1, 'Ratargul Swamp Forest', 'Ratargul Swamp Forest The Meghalaya river pours into the Gowain, and a narrow stream flows through the Chengi canal to flood the entire region of Ratargul — not only the only freshwater swamp in the country......', 'Ratargul Swamp Forest The Meghalaya river pours into the Gowain, and a narrow stream flows through the Chengi canal to flood the entire region of Ratargul — not only the only freshwater swamp in the country, but also among very few in the entire world. As the small boats move through the snaking waterways canopied by the lush foliage, often spreading as high as 15 metres, many feel, and some for the first time, that we are indeed part of nature; the environment around us. Ratargul has the distinguished feature of supporting a diverse ecosystem of flora and fauna. Its area is 3, 325.61 acre including 504 acre declared as the animal sanctuary in 2015. This only swamp forest in Bangladesh is located 26 kilometres (16 mi) far from Sylhet. Main trees of this forest are zigzag style Koroch and Hizal tree. The root of these trees are on two levels. Monsoon is the right time to see Ratargul. Ratargul radiates the unmatched beauty that draws the large crowd from distant places.', 't1.jpg', 'ratargul1-1024x5962.jpg'),
(2, 'Bisnakandi Sylhet', 'Bisnakandi is located in the Rustampur union of Goainghat Upazila of Sylhet.  Sylhet’s Goainghat Upazila is filled with mountains, fountains, and greenery.....', 'Bisnakandi is located in the Rustampur union of Goainghat Upazila of Sylhet.  Sylhet’s Goainghat Upazila is filled with mountains, fountains, and greenery. The Upazila has the border with India. The beauty of the places fills the attractions of the tourist. The rocky river, forest, tea orchard in the hills overwhelm the mind! Tourists come to see the beauty of Sylhet’s diversity. At the festival like Eid, these tourist centers are crowded.  As like Jaflong, Bisnakandi is a place where the river is filled with the stone. It makes the surrounding enchanting. However, due to the uncontrolled stone lifting, the beauty of Jaflong is on the verge of destruction today, but the Bisnakandi retains its youth. Many of the steps of the Khasia Hills on the Bangladesh-India border have come from one side to the other, and the hills have the highest springs of Meghalaya in India. The main attraction of the Bisnakandi to the tourists is the transparent water stream that flows over the rocks and the whirlwind of white clouds over the mountains. At first, you will feel like a stone bed, and the calmness that you get in the clear water will bring you the peace of mind again and again. It is as though the mountains, rivers, fountains, and rocks have laid the natural bedding in Bisnakandi.', 'bisnakandi.jpg', 'Bisnakandi-6.jpg'),
(3, 'Jaflong', 'Jaflong is a tourist spot in Sylhet division. It is about 60 km from Sylhet town and takes two hours drive to reach...', 'Jaflong is a tourist spot in Sylhet division. It is about 60 km from Sylhet town and takes two hours drive to reach there. Jaflong located amidst tea gardens and hills. It is situated beside the river Sari in the lap of Hill Khashia.The other attractions are collection of rolling stones, colorful tribal life, Dauki and Piyain Rivers, Tea Garden, Orange and Jackfruit gardens. The land grabbers occupied government khas land and reserved forestland and extracted stone by cutting small hills polluting the environment of Jaflong. They also established crushing mills on the forestland without permission from governmen', 'Zero_Point_at_Zuflong.jpg', 'jaflong_2169.jpg'),
(4, 'Lalakhal', 'Lalakhal is a wide channel in the Sharee River near the Tamabil road. The river is not very deep and is one of the sources of sand in Sylhet......', 'Lalakhal is a wide channel in the Sharee River near the Tamabil road. The river is not very deep and is one of the sources of sand in Sylhet. The focal point of the feature is the variety of colours of the water, which varies from blue to green to clear at different points. Lalakhal,which is another top tourist attraction in Jaintapur Upazilla, is covered with hills, natural forests, tea gardens, and rivers under the Jainta Hill which comprises part of the Meghalaya Ranges of India. Flowing from the Indian part, the river Myntdu enters Lalakhal as the Saree and meets the river Guaiyan after passing Sarighat. Over a stretch of nearly 12 km of the river from Lalakhal to Sarighat, the colour of the water stays transparent green in winter (as well as in other seasons when it does not rain) due to the minerals flowing with water and the sandy river bed. ', 'lalakhal-boat-trip.jpg', 'lalakhal.png'),
(9, 'Panthumai', 'Panthumai – a village from West Jaflong Union under Guainghat Upazilla – is another tourism hub in Sylhet. The village, which is very near to the east Khasia hill of the Meghalaya ranges.....', 'Panthumai – a village from West Jaflong Union under Guainghat Upazilla – is another tourism hub in Sylhet. The village, which is very near to the east Khasia hill of the Meghalaya ranges, boasts of an eye-catching fall popularly known as Borhill Fall. Though the main fall is geographically located in the Indian territory, people can enjoy its enormous splendour head-on. Flowing from the Borhill Fall is a branch of the river Piyain that heads west and leads to Bisnakandi, another major tourist spot. In addition to the splendid fall, the Guainghat-Pangthumai Road itself is a sight for the sore eye. As one heads east, the enormous mountain ranges appear to come closer and turn from blue to green gradually. And the clouds and the falls playing hide and seek are sure to fill one with awe. The best possible time to visit Pangthumai is between April and mid-October. ', 'images.jpg', '12544.jpg'),
(10, 'Lovachora', 'Lovachora is a bordering area from Kanaighat Upazilla in the eastern part of Sylhet district, which is somewhat fortified from northeast to northwest by the Meghalayan ranges.......', 'Lovachora is a bordering area from Kanaighat Upazilla in the eastern part of Sylhet district, which is somewhat fortified from northeast to northwest by the Meghalayan ranges. It is essentially a quarry where stones and boulders are mined, besides an age-old tea garden.Visit to Lovachora involves with a boat journey from Kanaighat Sodor. As the boat moves east, it will soon reach the confluence of three rivers. Flowing respectively from the south and north, the Borak and the Lova meet at one point, assume the name Surma and flow west towards Sylhet city.\r\n\r\nThe shades of far-flung hills falling on the crystal clear streams of the Lova make for a heavenly sight. The Lovachora Tea Garden is spread over a wide area from the river bank to the slopes of the hills. Still preserved in the garden is a tea factory ravaged in the War of Liberation in 1971. Together with an antique cottage, it is a must-see for visitors. The hilltop cottage is popularly known as Fergusson Bungalow, named after the Fergusson family who set up the tea garden.\r\n\r\nWhat’s more, subject to the permission from the border patrol force BGB, tourists can go to the source of the Lova and see the hanging bridge which connects two hills on the other side of the border. ', '5a5db77b1226941c394a84e1bf552448.jpg', 'Lovachora Hanging Bridge.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Mobile` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`ID`, `Name`, `Email`, `Mobile`, `Password`, `Type`) VALUES
(1, 'Subarna', 'subarna768@gmail.com', '01760732712', '12345678', 'Admin'),
(2, 'Tanzina', 'tanzina768@gmail.com', '01760732715', '01234567', 'User'),
(3, 'Yasmin', 'yasmin768@gmail.com', '01760732767', '23456789', 'User'),
(17, 'Hotel Grand View', 'hgv9@gmail.com', '01404033002', '45678900', 'Hotel Manager'),
(18, 'Hotel Rose View', 'roseview@gmail.com', '052415484845', '12345679', 'Hotel Manager'),
(22, 'Hotel Noorjahan Grand', 'noorjahan@hotmail.com', '01930111666', '23456789', 'Hotel Manager'),
(24, 'Richmond Hotel and Apartments', 'richmond@yahoo.com', '0821719075', '45678901', 'Hotel Manager'),
(31, 'Lily', 'k@gmail.com', '01980123685', '12344678', 'User'),
(32, 'Mou', 'mou@gmail.com', '01760732713', '14325678', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_emergency_services`
--
ALTER TABLE `tbl_emergency_services`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_fare`
--
ALTER TABLE `tbl_fare`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_food`
--
ALTER TABLE `tbl_food`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_room`
--
ALTER TABLE `tbl_room`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_room_book`
--
ALTER TABLE `tbl_room_book`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_shopping`
--
ALTER TABLE `tbl_shopping`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_tourist`
--
ALTER TABLE `tbl_tourist`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_emergency_services`
--
ALTER TABLE `tbl_emergency_services`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `tbl_fare`
--
ALTER TABLE `tbl_fare`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_food`
--
ALTER TABLE `tbl_food`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_room`
--
ALTER TABLE `tbl_room`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tbl_room_book`
--
ALTER TABLE `tbl_room_book`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=251;

--
-- AUTO_INCREMENT for table `tbl_shopping`
--
ALTER TABLE `tbl_shopping`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_tourist`
--
ALTER TABLE `tbl_tourist`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

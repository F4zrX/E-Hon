-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2022 at 07:12 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-hon`
--

-- --------------------------------------------------------

--
-- Table structure for table `modul`
--

CREATE TABLE `modul` (
  `id_modul` int(11) NOT NULL,
  `jdl_modul` varchar(150) NOT NULL,
  `overview_modul` longtext NOT NULL,
  `penulis_modul` varchar(50) NOT NULL,
  `harga_modul` int(11) NOT NULL,
  `cover_modul` varchar(500) NOT NULL,
  `kategori` enum('Programming','2D Animation','3D Animation','Mobile','Web','Graphic') NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `modul`
--

INSERT INTO `modul` (`id_modul`, `jdl_modul`, `overview_modul`, `penulis_modul`, `harga_modul`, `cover_modul`, `kategori`, `stok`) VALUES
(6, 'Linux Kernel Programming: A comprehensive guide to kernel internals, writing kernel modules, and kernel synchronization', '\"Learn how to write high-quality kernel module code, solve common Linux kernel programming issues, and understand the fundamentals of Linux kernel internals\"', 'Kaiwan N Billimoria', 332000, 'Linux Kernel Programming.jpg', 'Programming', 5),
(7, 'The Linux Programming Interface: A Linux and UNIX System Programming Handbook', '\"The Linux Programming Interface is the definitive guide to the Linux and UNIX programming interface—the interface employed by nearly every application that runs on a Linux or UNIX system.\r\nIn this authoritative work, Linux programming expert Michael Kerrisk provides detailed descriptions of the system calls and library functions that you need in order to master the craft of system programming, and accompanies his explanations with clear, complete example programs.\"', 'Michael Kerrisk', 830000, '51xi+R3PfWL._SX258_BO1,204,203,200_.jpg', 'Programming', 5),
(8, 'LEARN PYTHON PROGRAMMING CRASH COURSE FOR BIGINNERS COOKBOOK: 40 Example Programs, Modules and Packages, Python Decorators, Python 3 With Web Scraping', 'What is Python? Python is a general-purpose programming language, which is easy to learn and dynamically initialized. It has an easy and elegant syntax, with high-level and dynamic semantics, which makes it an ideal language for beginners, scripting and rapid application development. Python was first released in 1991 and created by Guido van Rossum, a Dutch programmer best known as the author of the Python programming language, who wanted to designed a language very simple to write and easy to read. Thus, Python is much easier to learn than any other programming languages. And it helps you create beautiful applications, with less effort.', 'Janani Sathish', 230000, '879244b4f72ca81731223ed01adc64f3.jpg', 'Programming', 5),
(9, 'Blender 2D Animation: The Complete Guide to the Grease Pencil ', 'This book describes how to access the Grease Pencil component in Blender and create 2D Animation within the Blender 3D environment. It is assumed that the reader has no previous knowledge of the Blender program and treats 2D Animation using the Grease Pencilas a standalone application.\r\n\r\nGrease Pencil is a component of the 3D modeling and animation program, Blender. Blender is a free open-source 3D Computer Graphics software toolset used for creating animated films, visual effects, art, 3D printed models, motion graphics, interactive 3D applications, virtual reality and computer games.', 'John M Blain', 643500, '65f26ac9-1234-4aa3-b8c0-d2fdac4560a4.jpg', '2D Animation', 5),
(10, 'Blender 3D By Example: A project-based guide to learning the latest Blender 3D, EEVEE rendering engine, and Grease Pencil, 2nd Edition', '\"Blender is a powerful 3D creation package that supports every aspect of the 3D pipeline. With this book, you\'ll learn about modeling, rigging, animation, rendering, and much more with the help of some interesting projects.', 'Xury Greer & Oscar Baechler', 337000, '7a79007b-ef33-4991-b85c-89fc329ad662.jpg', '3D Animation', 5),
(11, 'Android Programming for Beginners: Learn all the Java and Android skills you need to start making powerful mobile applications', 'Android Programming for Beginners will be your companion to create Android applications from scratch? whether you\'re looking to start your programming career, make an application for work, be reintroduced to mobile development, or are just looking to program for fun. We will introduce you to all the fundamental concepts of programming in an Android context, from the Java basics to working with the Android API. All examples are created from within Android Studio, the official Android development environment that helps supercharge your application development process.', 'John Horton', 226500, '61fD4w9w7RL._AC_UY218_.jpg', 'Mobile', 5),
(12, 'Learning Java by Building Android Games: Learn Java and Android from scratch by building six exciting games, 2nd Edition', 'This new and expanded second edition of Learning Java by Building Android Games shows you how to start building Android games from scratch. The difficulty level will grow steadily as you explore key Java topics, such as variables, loops, methods, object oriented programming, and design patterns, including code and examples that are written for Java 9 and Android P.', 'John Horton', 400000, '61ah0aQ5+yL._SX258_BO1,204,203,200_.jpg', 'Mobile', 5),
(13, 'Building Websites with Django: Build and deploy professional websites with Python programming and the Django framework (English Edition)', 'Building Websites with Django’ book teaches readers to develop their high-quality, feature-rich website by learning Django and its various tools. You will learn the best techniques to develop a dynamic website, right from scratch. This book focuses not only on just creating a particular application but rather develops a strong understanding of theoretical concepts with rich examples. You will learn to troubleshoot errors, develop navigation panels and add advanced functionalities like deploying on heroku server. You will read about models, templates, different types of views. You will learn to create apps and learn how to integrate different apps.\r\nBy the end of this book, You will create a project from scratch and will deploy it as a public website by yourself.', 'Awanish Ranjan ', 370000, '417Bn6bYCKL._SX404_BO1,204,203,200_.jpg', 'Web', 5),
(14, 'Object-oriented JavaScript - Second Edition - Learn a More Powerful Approach to Web Development', 'Gain an in-depth knowledge of JavaScript’s data structures, and learn how different components interact with one another. Look closely at numbers, Booleans and strings, and learn how arrays, loops and conditions help you to effectively manipulate and work with complex data using JavaScript. You’ll also find guidance and insight into the relationship between functions and objects, as well as accessible instructions on how to use them most effectively when working with JavaScript. Learn how to use prototypes, including augmenting built-in objects and learn coding patterns and design patterns to improve your JavaScript code.', 'Stoyan Stefanov & Kumar Chetan Sharma', 275000, '51r-0qToJUL._SX403_BO1,204,203,200_.jpg', 'Web', 5),
(15, 'Computer Graphic Design 3rd Revised Edition', 'This computer graphic design book discusses how to think, graphic designer motivation, design tips, color selection, use of letters / typography, software tricks, visualization tips, Face vector illustration, Wedha PopArt Picture WPAP, Wedding Invitation Design, data communication to cost calculations.\r\n\r\nBy knowing the concepts and principles of graphic design, your presentation and products will be more attractive so that it will have an impact on increasing sales.\r\nBecause Everyone is Designer!', 'Hendi Hendrataman', 190000, '20267aa5-38d7-4e70-a247-f26e2170057e.jpg', 'Graphic', 5),
(16, 'The History of Graphic Design', 'Through the turbulent passage of time, graphic design―with its vivid, neat synthesis of image and idea―has distilled the spirit of each age. Surrounding us every minute of every day, from minimalist packaging to colorful adverts, smart environmental graphics to sleek interfaces: graphic design is as much about transmitting information as it is about reflecting society’s cultural aspirations and values. This second volume rounds off our in-depth exploration of graphic design, spanning from the 1960s until today.', 'Jens Müller', 906464, '5dcf7eab-44d2-433a-a49d-ad08a718432c.jpg', 'Graphic', 5),
(17, 'Anatomy for 3D Artists: The Essential Guide for CG Professionals', 'Designing Immersive 3D Experiences helps visual designers move into the fast-growing fields of 3D and extended reality (XR) design. Author Renée Stevens (Powered by Design) introduces a proven approach and an effective design-thinking process you can use to create successful immersive user experiences. The book is grounded in familiar design principles and explores how you can build on these foundations, adapting them for virtual and augmented reality environments. Designing Immersive 3D Experiences prepares visual designers to succeed with 3D and XR design in multiple environments, from mobile, to web, to wearables.', 'Chris Legaspi', 455533, '41CRrfe0cnL._SX351_BO1,204,203,200_.jpg', '3D Animation', 5),
(18, 'Designing Immersive 3D Experiences', 'This book begins by exploring the basics of XR and 3D immersive design, how they are evolving, and how you may already be using them. It then moves into core concepts and technologies, from computer-human interaction, to spatial computing, to projection mapping and head-mounted displays.', 'Renée Stevens', 484272, '41rkhs4Do+L._SX258_BO1,204,203,200_.jpg', '3D Animation', 5),
(19, 'Sketching for Animation: Developing Ideas, Characters and Layouts in Your Sketchbook', 'Drawing and sketching are central to the art of animation and can be crucial tools in designing and developing original stories, characters and layouts. Sketching for Animation offers a wealth of examples, exercises and tips from an army of professional animators to help you develop essential sketching, technical drawing and ideation techniques.', 'Peter Parr', 531233, '410C-ntOfgL._SX387_BO1,204,203,200_.jpg', '2D Animation', 5),
(20, 'Animation For Beginners: Getting Started with Animation Filmmaking', 'If you are an aspiring animator considering a career in film production or are curious about what it takes to make animated shorts, this is the book for you! Animation for Beginners is a comprehensive and modern introduction to the art and business of 3D animation from Bloop Animation founder, filmmaker, graphic novel author, and teacher Morr Meroz.', 'Morr Meroz', 466496, '41ZOcOKXzyL._SX322_BO1,204,203,200_.jpg', '2D Animation', 5),
(21, 'Native Mobile Development: A Cross-Reference for iOS and Android 1st Edition', 'Learn how to make mobile native app development easier. If your team frequently works with both iOS and Android—or plans to transition from one to the other—this hands-on guide shows you how to perform the most common development tasks in each platform. Want to learn how to make network connections in iOS? Or how to work with a database in Android? This book has you covered.', 'Shaun Lewis & Mike Dunn', 545899, '51mFxq0qsLL._SX379_BO1,204,203,200_.jpg', 'Mobile', 5),
(22, 'Programming Phoenix LiveView: Interactive Elixir Web Programming Without Writing Any JavaScript 1st Edition', 'The innovative Phoenix LiveView library empowers you to build applications that are fast and highly interactive, without sacrificing reliability. ', 'Bruce Tate & Sophie DeBenedetto', 739964, '41lT21qkd3L._SX415_BO1,204,203,200_.jpg', 'Web', 5),
(23, 'Computer Graphics Programming in OpenGL with C++ 2nd Edition', 'This new edition provides step-by-step instruction on modern 3D graphics shader programming in OpenGL with C++, along with its theoretical foundations. It is appropriate both for computer science graphics courses and for professionals interested in mastering 3D graphics skills. It has been designed in a 4-color, “teach-yourself” format with numerous examples that the reader can run just as presented. Every shader stage is explored, from the basics of modeling, textures, lighting, shadows, etc., through advanced techniques such as tessellation, normal mapping, noise maps, as well as new chapters on simulating water, stereoscopy, and ray tracing.', 'V. Scott Gordon & John L. Clevenger', 1184387, '51wWFatr7IL._SX387_BO1,204,203,200_.jpg', 'Graphic', 5);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id_staff` int(11) NOT NULL,
  `nama_staff` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_hp` char(12) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `jabatan` enum('Administrator','Sekretaris') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id_staff`, `nama_staff`, `alamat`, `no_hp`, `username`, `password`, `jabatan`) VALUES
(3, 'Muhamad Daffa', 'Bekasi', '082210529938', 'daffa', 'kelompok1', 'Administrator'),
(4, 'Muhammad Fazri Sidi Umar', 'Jakarta', '081247646163', 'fazri', 'fazri123', 'Sekretaris'),
(5, 'Muhammad Haykal Andana', 'Jakarta', '083893797764', 'haykal', 'haykal123', 'Administrator'),
(8, 'asd', 'asd', '082210529938', 'asd', 'dsa', 'Sekretaris');

-- --------------------------------------------------------

--
-- Table structure for table `tb_profil`
--

CREATE TABLE `tb_profil` (
  `id_profil` int(11) NOT NULL,
  `nama_profil` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `bidang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_profil`
--

INSERT INTO `tb_profil` (`id_profil`, `nama_profil`, `alamat`, `bidang`) VALUES
(1, 'E-Hon', 'JAKARTA', 'Electronic Modul');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `no_transaksi` int(11) NOT NULL,
  `nama_pembeli` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` char(12) NOT NULL,
  `id_modul` int(11) NOT NULL,
  `jdl_modul` varchar(150) NOT NULL,
  `harga` int(11) NOT NULL,
  `paymentproof` varchar(500) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`no_transaksi`, `nama_pembeli`, `alamat`, `email`, `no_hp`, `id_modul`, `jdl_modul`, `harga`, `paymentproof`, `status`) VALUES
(1, 'rendi', 'bekasi', 'rendi@gmail.com', '023943489048', 7, 'The Linux Programming Interface: A Linux and UNIX System Programming Handbook', 830000, 'bukti.jpg', 'Diterima');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `modul`
--
ALTER TABLE `modul`
  ADD PRIMARY KEY (`id_modul`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id_staff`);

--
-- Indexes for table `tb_profil`
--
ALTER TABLE `tb_profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`no_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `modul`
--
ALTER TABLE `modul`
  MODIFY `id_modul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id_staff` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_profil`
--
ALTER TABLE `tb_profil`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `no_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 24, 2024 at 03:58 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u1658729_tigapuluhenam`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int NOT NULL,
  `batch` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(13, '2023-07-20-081917', 'App\\Database\\Migrations\\TbProduk', 'default', 'App', 1690513521, 1),
(14, '2023-07-20-084755', 'App\\Database\\Migrations\\TbSlider', 'default', 'App', 1690513521, 1),
(15, '2023-07-20-085024', 'App\\Database\\Migrations\\TbProfil', 'default', 'App', 1690513521, 1),
(16, '2023-07-28-035902', 'App\\Database\\Migrations\\TbAktivitas', 'default', 'App', 1690517128, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_aktivitas`
--

CREATE TABLE `tb_aktivitas` (
  `id_aktivitas` int UNSIGNED NOT NULL,
  `nama_aktivitas_in` varchar(200) NOT NULL,
  `nama_aktivitas_en` varchar(200) NOT NULL,
  `foto_aktivitas` varchar(100) NOT NULL,
  `deskripsi_aktivitas_in` text,
  `deskripsi_aktivitas_en` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `tb_aktivitas`
--

INSERT INTO `tb_aktivitas` (`id_aktivitas`, `nama_aktivitas_in`, `nama_aktivitas_en`, `foto_aktivitas`, `deskripsi_aktivitas_in`, `deskripsi_aktivitas_en`) VALUES
(6, 'Ekspor Coklat', 'Chocolate Exports', 'Biji Kakao_Ekspor Coklat_06082024131351.jpeg', '<p>Aktivitas ekspor coklat kami melibatkan pemilihan biji kakao berkualitas tinggi, pemrosesan yang ketat, dan pengemasan dengan standar internasional untuk memastikan produk tetap segar selama pengiriman. Kami bekerja sama dengan mitra logistik terpercaya untuk mengirimkan coklat ke berbagai negara dengan cepat dan aman. Proses ekspor kami mencakup pengawasan kualitas yang ketat, dokumentasi ekspor yang lengkap, dan layanan pelanggan yang responsif untuk memenuhi kebutuhan klien global.</p>', '<div class=\"flex flex-grow flex-col max-w-full\">\r\n<div class=\"min-h-[20px] text-message flex w-full flex-col items-end gap-2 whitespace-pre-wrap break-words [.text-message+&amp;]:mt-5 overflow-x-auto\" dir=\"auto\" data-message-author-role=\"assistant\" data-message-id=\"7e5bb096-2b55-4aeb-b2ee-4eb37f2d3ddf\">\r\n<div class=\"flex w-full flex-col gap-1 empty:hidden first:pt-[3px]\">\r\n<div class=\"markdown prose w-full break-words dark:prose-invert dark\">\r\n<p>Our chocolate export activities involve the selection of high-quality cocoa beans, rigorous processing, and packaging to international standards to ensure the product remains fresh during shipment. We collaborate with trusted logistics partners to deliver chocolate to various countries quickly and safely. Our export process includes strict quality control, comprehensive export documentation, and responsive customer service to meet the needs of global clients.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"mt-1 flex gap-3 empty:hidden -ml-2\">\r\n<div class=\"items-center justify-start rounded-xl p-1 flex\">\r\n<div class=\"flex items-center\">&nbsp;</div>\r\n</div>\r\n</div>'),
(7, 'Ekspor Coklat ', 'Chocolate Exports', 'Milk Chocolate Exports_Ekspor Coklat Susu_13082024092314.jpeg', '<p>Di ChocoWorld International, ekspor coklat adalah salah satu fokus utama kami. Kami memulai proses dengan memilih biji kakao dari sumber-sumber terbaik, memastikan setiap batch memiliki kualitas yang luar biasa. Setelah melalui proses produksi yang cermat, coklat kami dikemas dengan teknologi canggih untuk menjaga kesegarannya selama perjalanan internasional. Dengan jaringan logistik global yang kuat, kami menjamin pengiriman tepat waktu ke berbagai destinasi di seluruh dunia. Kami juga mengutamakan kepuasan klien dengan menyediakan layanan dokumentasi ekspor yang lengkap serta dukungan pelanggan yang selalu siap membantu.</p>', '<p>At ChocoWorld International, chocolate export is one of our core focuses. We begin the process by sourcing cocoa beans from the finest origins, ensuring that each batch has exceptional quality. After undergoing meticulous production, our chocolate is packaged using advanced technology to maintain its freshness during international transit. With a robust global logistics network, we ensure timely deliveries to various destinations worldwide. We also prioritize client satisfaction by providing comprehensive export documentation and responsive customer support.</p>'),
(8, 'Pembuatan Coklat', 'Choholate Making', 'Choholate Making_Pembuatan Coklat_14082024085442.jpg', '<p>Proses pembuatan coklat kami dimulai dari pemilihan biji kakao berkualitas tinggi yang dipanen dari perkebunan terpilih. Setelah melalui tahap fermentasi dan pengeringan untuk mengembangkan rasa, biji kakao diproses di pabrik kami dengan teknologi modern. Proses pengolahan meliputi pemanggangan, penggilingan, konsching, dan tempering, yang dilakukan dengan presisi untuk menghasilkan coklat dengan tekstur halus dan rasa yang kaya. Setiap tahap dalam pembuatan coklat diawasi dengan ketat untuk memastikan bahwa produk akhir memenuhi standar kualitas tertinggi. Setelah coklat dibentuk sesuai dengan produk yang diinginkan, seperti batangan atau praline, produk kemudian dikemas dengan hati-hati untuk menjaga kesegarannya sebelum siap didistribusikan ke pasar global.</p>', '<div class=\"flex max-w-full flex-col flex-grow\">\r\n<div class=\"min-h-[20px] text-message flex w-full flex-col items-end gap-2 whitespace-pre-wrap break-words [.text-message+&amp;]:mt-5 overflow-x-auto\" dir=\"auto\" data-message-author-role=\"assistant\" data-message-id=\"ab1760e0-2728-4f7f-9ae1-632b27ed6617\">\r\n<div class=\"flex w-full flex-col gap-1 empty:hidden first:pt-[3px]\">\r\n<div class=\"markdown prose w-full break-words dark:prose-invert dark\">\r\n<p>Our chocolate-making process begins with the selection of high-quality cocoa beans harvested from selected plantations. After undergoing fermentation and drying to develop flavor, the cocoa beans are processed in our factory using modern technology. The processing involves roasting, grinding, conching, and tempering, all done with precision to produce chocolate with a smooth texture and rich flavor. Each stage of chocolate production is carefully monitored to ensure that the final product meets the highest quality standards. Once the chocolate is molded into the desired products, such as bars or pralines, it is carefully packaged to maintain freshness before being ready for distribution to global markets.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"mt-1 flex gap-3 empty:hidden -ml-2\">\r\n<div class=\"items-center justify-start rounded-xl p-1 flex\">\r\n<div class=\"flex items-center\"><button class=\"rounded-lg text-token-text-secondary hover:bg-token-main-surface-secondary\"></button><button class=\"rounded-lg text-token-text-secondary hover:bg-token-main-surface-secondary\"></button><button class=\"rounded-lg text-token-text-secondary hover:bg-token-main-surface-secondary\"></button>\r\n<div class=\"flex\">&nbsp;</div>\r\n<div class=\"flex items-center pb-0\">\r\n<div class=\"[&amp;_svg]:h-full [&amp;_svg]:w-full icon-md h-4 w-4\">&nbsp;</div>\r\n<span class=\"overflow-hidden text-clip whitespace-nowrap text-sm\">4o</span></div>\r\n<span class=\"\" data-state=\"closed\"><button id=\"radix-:r5e:\" class=\"cursor-pointer h-[30px] rounded-md px-1 text-token-text-secondary hover:bg-token-main-surface-secondary\" type=\"button\" aria-haspopup=\"menu\" aria-expanded=\"false\" data-state=\"closed\"></button></span></div>\r\n</div>\r\n</div>'),
(9, 'Pengembangan Resep dan Rasa', 'Recipe and flavor development', 'Recipe and flavor development_Pengembangan Resep dan Rasa_14082024101239.jpg', '<p>Di ChocoWorld International, kami terus berinovasi dalam mengembangkan resep dan varian rasa baru untuk memenuhi selera pelanggan yang beragam. Tim ahli coklat kami bereksperimen dengan berbagai kombinasi bahan untuk menciptakan coklat dengan rasa yang unik dan tak terlupakan. Proses pengembangan ini melibatkan pengujian rasa, penyesuaian komposisi, dan validasi konsumen sebelum produk diluncurkan ke pasar.</p>\r\n<p>&nbsp;</p>', '<p>At ChocoWorld International, we continuously innovate in developing new recipes and flavor variants to cater to diverse customer preferences. Our team of chocolate experts experiments with various ingredient combinations to create unique and unforgettable chocolate flavors. This development process involves taste testing, composition adjustments, and consumer validation before launching the product to the market.</p>\r\n<h3>&nbsp;</h3>'),
(10, 'Kontrol Kualitas', 'Quality Control', 'Quality Control_Kontrol Kualitas_14082024103259.jpg', '<p>Kontrol kualitas adalah prioritas utama dalam setiap tahap pembuatan coklat kami. Mulai dari pemilihan biji kakao hingga produk akhir, setiap batch melalui serangkaian tes kualitas yang ketat untuk memastikan rasa, tekstur, dan penampilan yang konsisten. Laboratorium kami dilengkapi dengan peralatan canggih untuk memantau setiap aspek produksi, termasuk kadar kelembaban, kandungan kakao, dan stabilitas coklat.</p>\r\n<p>&nbsp;</p>', '<p>Quality control is a top priority at every stage of our chocolate-making process. From cocoa bean selection to the final product, each batch undergoes a series of rigorous quality tests to ensure consistent taste, texture, and appearance. Our laboratory is equipped with advanced tools to monitor every aspect of production, including moisture levels, cocoa content, and chocolate stability.</p>\r\n<h3>&nbsp;</h3>'),
(11, 'Pengemasan dan Branding', 'Packaging and Branding', 'Packaging and Branding_Pengemasan dan Branding_14082024110133.jpg', '<p>Pengemasan merupakan elemen penting dalam menjaga kualitas dan daya tarik produk coklat kami. Kami menggunakan bahan pengemasan berkualitas tinggi yang tidak hanya melindungi coklat dari kerusakan, tetapi juga menonjolkan branding perusahaan. Desain kemasan kami dirancang untuk menarik perhatian konsumen, dengan informasi produk yang jelas dan visual yang menggugah selera.</p>\r\n<p>&nbsp;</p>', '<p>Packaging is a crucial element in maintaining the quality and appeal of our chocolate products. We use high-quality packaging materials that not only protect the chocolate from damage but also highlight our company\'s branding. Our packaging designs are crafted to capture consumer attention, with clear product information and visually appealing graphics.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `tb_artikel`
--

CREATE TABLE `tb_artikel` (
  `id_artikel` int UNSIGNED NOT NULL,
  `judul_artikel` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `foto_artikel` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `deskripsi_artikel` longtext COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_artikel`
--

INSERT INTO `tb_artikel` (`id_artikel`, `judul_artikel`, `foto_artikel`, `deskripsi_artikel`, `created_at`) VALUES
(1, 'Sejarah dan Evolusi Coklat', '1723522137_05b87e198de98215c344.jpg', '<p>Artikel ini membahas asal-usul coklat dari zaman peradaban kuno hingga menjadi industri coklat modern yang kita kenal sekarang. Pembaca akan diajak melihat bagaimana coklat berkembang dari minuman eksotis menjadi camilan favorit di seluruh dunia, serta inovasi-inovasi dalam produksi coklat premium.</p>', '2024-06-06 04:29:36'),
(2, 'Manfaat Kesehatan dari Coklat', '1723522427_4450d2ac14a279b54651.jpg', '<p>Artikel ini mengupas berbagai manfaat kesehatan yang dapat diperoleh dari mengonsumsi coklat, terutama dark chocolate. Mulai dari kandungan antioksidan hingga potensi peningkatan mood, artikel ini juga membongkar beberapa mitos umum tentang coklat dan kesehatan.</p>', '2024-06-06 04:29:36'),
(3, 'Proses Pembuatan Coklat', '1723522488_1f1bf1808d01507c4f25.jpg', '<p>Artikel ini memberikan wawasan mendalam tentang proses pembuatan coklat, mulai dari pemanenan biji kakao, fermentasi, pengeringan, hingga proses pengolahan menjadi berbagai produk coklat. Pembaca akan memahami tahap-tahap yang diperlukan untuk menghasilkan coklat berkualitas tinggi.</p>', '2024-06-06 04:29:36'),
(4, 'Mengenal Berbagai Jenis Coklat', '1723523686_f5cc20f5ce8df1714f4e.jpg', '<p>Artikel ini menjelaskan perbedaan antara berbagai jenis coklat yang ada di pasaran, seperti dark chocolate, milk chocolate, dan white chocolate. Pembaca akan mengetahui karakteristik masing-masing jenis coklat, termasuk kandungan kakao, rasa, dan penggunaannya dalam kuliner.</p>\r\n<h4>&nbsp;</h4>', '2024-06-06 04:29:36'),
(5, 'Eksplorasi Rasa', '1723523713_8d4fe98c710aec1aed84.jpg', '<div class=\"flex max-w-full flex-col flex-grow\">\r\n<div class=\"min-h-[20px] text-message flex w-full flex-col items-end gap-2 whitespace-pre-wrap break-words [.text-message+&amp;]:mt-5 overflow-x-auto\" dir=\"auto\" data-message-author-role=\"assistant\" data-message-id=\"f4909d5b-c1bd-4287-89ee-f2327f73df48\">\r\n<div class=\"flex w-full flex-col gap-1 empty:hidden first:pt-[3px]\">\r\n<div class=\"markdown prose w-full break-words dark:prose-invert dark\">\r\n<p>Artikel ini mengeksplorasi berbagai inovasi dalam dunia coklat, khususnya coklat dengan isian dan rasa unik. Dari praline dengan isian buah-buahan eksotis hingga coklat dengan sentuhan rempah-rempah, artikel ini mengajak pembaca untuk mencoba dan menikmati pengalaman rasa yang baru dan menarik.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', '2024-06-06 04:29:36');

-- --------------------------------------------------------

--
-- Table structure for table `tb_produk`
--

CREATE TABLE `tb_produk` (
  `id_produk` int UNSIGNED NOT NULL,
  `nama_produk_in` varchar(200) NOT NULL,
  `nama_produk_en` varchar(200) NOT NULL,
  `foto_produk` varchar(100) NOT NULL,
  `deskripsi_produk_in` text,
  `deskripsi_produk_en` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `tb_produk`
--

INSERT INTO `tb_produk` (`id_produk`, `nama_produk_in`, `nama_produk_en`, `foto_produk`, `deskripsi_produk_in`, `deskripsi_produk_en`) VALUES
(2, 'Coklat  Batangan', 'Choholate Bar', 'Chobat_Coklat  Batangan_06082024024714.jpg', '<p>Coklat batangan kami terbuat dari biji kakao pilihan yang diproses dengan cermat untuk menghasilkan coklat berkualitas tinggi dengan rasa yang kaya dan tekstur yang lembut. Kami menawarkan berbagai varian seperti dark chocolate, milk chocolate, dan white chocolate yang cocok dinikmati langsung atau digunakan dalam pembuatan kue dan dessert.</p>\r\n<p>&nbsp;</p>', '<p>Our chocolate bars are made from selected cocoa beans that are carefully processed to produce high-quality chocolate with a rich flavor and smooth texture. We offer various variants such as dark chocolate, milk chocolate, and white chocolate, perfect for direct consumption or use in baking and desserts.</p>\r\n<h4>&nbsp;</h4>'),
(3, 'Coklat Bubuk', 'Chocolate Powder', 'ChoBuk_Coklat Bubuk_06082024024752.jpeg', '<p>Coklat bubuk kami terbuat dari kakao murni berkualitas tinggi yang diolah untuk menghasilkan bubuk coklat dengan rasa autentik dan kaya. Cocok untuk pembuatan minuman coklat hangat, kue, dan berbagai macam dessert lainnya, coklat bubuk kami memberikan sentuhan rasa yang mewah pada setiap sajian.</p>\r\n<p>&nbsp;</p>', '<div class=\"flex flex-grow flex-col max-w-full\">\r\n<div class=\"min-h-[20px] text-message flex w-full flex-col items-end gap-2 whitespace-pre-wrap break-words [.text-message+&amp;]:mt-5 overflow-x-auto\" dir=\"auto\" data-message-author-role=\"assistant\" data-message-id=\"56a25343-966a-400c-90cd-b982177efb1a\">\r\n<div class=\"flex w-full flex-col gap-1 empty:hidden first:pt-[3px]\">\r\n<div class=\"markdown prose w-full break-words dark:prose-invert dark\">\r\n<p>Our cocoa powder is made from high-quality pure cocoa, processed to produce a powder with an authentic and rich flavor. Ideal for making hot chocolate drinks, baking, and various other desserts, our cocoa powder adds a luxurious touch to every dish.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"mt-1 flex gap-3 empty:hidden -ml-2\">\r\n<div class=\"items-center justify-start rounded-xl p-1 flex\">\r\n<div class=\"flex items-center\">&nbsp;</div>\r\n</div>\r\n</div>'),
(4, 'Coklat Proline', 'Chocolate Proline', 'Choline_Coklat Proline_06082024024843.jpg', '<p>Coklat praline kami adalah perpaduan sempurna antara coklat halus dan isian yang lezat seperti hazelnut, almond, caramel, dan berbagai rasa eksotis lainnya. Setiap praline dibuat dengan tangan oleh ahli coklat kami untuk memastikan kualitas dan kelezatan yang maksimal.</p>\r\n<p>&nbsp;</p>', '<p>Our praline chocolates are a perfect blend of smooth chocolate and delicious fillings such as hazelnut, almond, caramel, and various other exotic flavors. Each praline is handcrafted by our chocolate experts to ensure maximum quality and deliciousness.</p>\r\n<h4>&nbsp;</h4>'),
(7, 'Coklat Spread', 'Spread Choholate', 'Spread Choholate_Coklat Spread_09082024133135.jpg', '<p>Coklat spread kami terbuat dari coklat murni yang diolah dengan sempurna untuk menciptakan tekstur yang lembut dan rasa yang kaya. Ideal untuk dioleskan pada roti, crepes, atau sebagai topping untuk berbagai dessert, coklat spread kami menambahkan kelezatan ekstra pada setiap gigitan. Tersedia dalam varian dark chocolate, milk chocolate, dan hazelnut.</p>', '<div class=\"flex max-w-full flex-col flex-grow\">\r\n<div class=\"min-h-[20px] text-message flex w-full flex-col items-end gap-2 whitespace-pre-wrap break-words [.text-message+&amp;]:mt-5 overflow-x-auto\" dir=\"auto\" data-message-author-role=\"assistant\" data-message-id=\"f0e66240-824b-4bb5-b6ed-4772a3512af5\">\r\n<div class=\"flex w-full flex-col gap-1 empty:hidden first:pt-[3px]\">\r\n<div class=\"markdown prose w-full break-words dark:prose-invert dark\">\r\n<p>Our chocolate spread is made from pure chocolate, carefully processed to create a smooth texture and rich flavor. Perfect for spreading on bread, crepes, or as a topping for various desserts, our chocolate spread adds an extra layer of deliciousness to every bite. Available in dark chocolate, milk chocolate, and hazelnut variants.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"mt-1 flex gap-3 empty:hidden -ml-2\">\r\n<div class=\"items-center justify-start rounded-xl p-1 flex\">\r\n<div class=\"flex items-center\"><button class=\"rounded-lg text-token-text-secondary hover:bg-token-main-surface-secondary\"></button><button class=\"rounded-lg text-token-text-secondary hover:bg-token-main-surface-secondary\"></button><button class=\"rounded-lg text-token-text-secondary hover:bg-token-main-surface-secondary\"></button>\r\n<div class=\"flex\">&nbsp;</div>\r\n<div class=\"flex items-center pb-0\">\r\n<div class=\"[&amp;_svg]:h-full [&amp;_svg]:w-full icon-md h-4 w-4\">&nbsp;</div>\r\n<span class=\"overflow-hidden text-clip whitespace-nowrap text-sm\">4o</span></div>\r\n<span class=\"\" data-state=\"closed\"><button id=\"radix-:r44:\" class=\"cursor-pointer h-[30px] rounded-md px-1 text-token-text-secondary hover:bg-token-main-surface-secondary\" type=\"button\" aria-haspopup=\"menu\" aria-expanded=\"false\" data-state=\"closed\"></button></span></div>\r\n</div>\r\n</div>'),
(8, 'Coklat Truffle', 'Truffle Chocolate', 'Truffle Chocolate_Coklat Truffle_09082024133513.jpg', '<p>Coklat truffle kami adalah kombinasi sempurna antara coklat halus dan isian yang lembut serta lezat. Setiap truffle dibuat dengan tangan menggunakan bahan-bahan berkualitas tinggi seperti ganache, buttercream, atau liqueur, lalu dilapisi dengan lapisan coklat tebal yang meleleh di mulut. Tersedia dalam berbagai rasa seperti raspberry, karamel asin, dan kopi, coklat truffle kami adalah suguhan mewah yang cocok untuk berbagai kesempatan.</p>', '<p>Our chocolate truffles are a perfect blend of smooth chocolate and creamy, delicious fillings. Each truffle is handcrafted using high-quality ingredients like ganache, buttercream, or liqueur, then coated with a thick layer of chocolate that melts in your mouth. Available in various flavors such as raspberry, salted caramel, and coffee, our truffles are a luxurious treat perfect for any occasion.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `tb_profil`
--

CREATE TABLE `tb_profil` (
  `id_profil` int UNSIGNED NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_perusahaan` varchar(100) NOT NULL,
  `logo_perusahaan` varchar(100) NOT NULL,
  `deskripsi_perusahaan_in` text,
  `deskripsi_perusahaan_en` text,
  `deskripsi_kontak_in` text,
  `deskripsi_kontak_en` text,
  `link_maps` text,
  `link_whatsapp` text,
  `favicon_website` varchar(100) NOT NULL,
  `title_website` varchar(100) NOT NULL,
  `foto_utama` varchar(100) NOT NULL,
  `alamat` text,
  `no_hp` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `teks_footer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `tb_profil`
--

INSERT INTO `tb_profil` (`id_profil`, `username`, `password`, `nama_perusahaan`, `logo_perusahaan`, `deskripsi_perusahaan_in`, `deskripsi_perusahaan_en`, `deskripsi_kontak_in`, `deskripsi_kontak_en`, `link_maps`, `link_whatsapp`, `favicon_website`, `title_website`, `foto_utama`, `alamat`, `no_hp`, `email`, `teks_footer`) VALUES
(1, 'user', 'user', 'ChocoWorld International', 'Logo_ChocoWorld-International_06082024035615.png', '<p><strong>ChocoWorld International </strong>adalah perusahaan terkemuka dalam industri cokelat yang mengkhususkan diri dalam ekspor dan impor produk cokelat premium. Kami berdedikasi untuk menyediakan cokelat berkualitas tinggi yang diproduksi dengan bahan-bahan terbaik dari seluruh dunia. Dengan pengalaman bertahun-tahun di industri ini, kami telah membangun reputasi sebagai pemasok cokelat terpercaya bagi pasar internasional.&nbsp;</p>\r\n<p>Di ChocoWorld International, kami berkomitmen untuk menjaga keberlanjutan lingkungan. Kami bekerja sama dengan petani lokal untuk memastikan praktik pertanian yang ramah lingkungan dan menggunakan kemasan yang dapat didaur ulang untuk mengurangi dampak lingkungan.</p>\r\n<h4>&nbsp;</h4>', '<p><strong>ChocoWorld International</strong> is a leading company in the chocolate industry specializing in the export and import of premium chocolate products. We are dedicated to providing high quality chocolate produced with the finest ingredients from around the world. With years of experience in the industry, we have built a reputation as a trusted chocolate supplier to the international market.&nbsp;</p>\r\n<p>At ChocoWorld International, we are committed to environmental sustainability. We work closely with local farmers to ensure environmentally friendly farming practices and use recyclable packaging to reduce environmental impact.</p>', '<p><strong>Provinsi Jawa Timur</strong></p>', '<p>East Java Province</p>', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126446.88714095255!2d112.51177894335937!3d-7.9507811999999936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6290057a55239%3A0x7ee217295c03ba5c!2sJALAN%20MENUJU%20SURGA!5e0!3m2!1sen!2sid!4v1723599907953!5m2!1sen!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'https://wa.me/+6281259764170', 'Favicon_ChocoWorld-International_06082024020928.png', 'ChocoWorld International', '1723609031_5227b8950dc62bad4838.jpg', '<p>East Java Province</p>', '+62 8128483326', 'ChocoWorld International@gmail.com', 'All Rights Reserved. Designed by Sigit S');

-- --------------------------------------------------------

--
-- Table structure for table `tb_slider`
--

CREATE TABLE `tb_slider` (
  `id_slider` int UNSIGNED NOT NULL,
  `file_foto_slider` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `tb_slider`
--

INSERT INTO `tb_slider` (`id_slider`, `file_foto_slider`) VALUES
(1, 'ChocoWorld-International_06082024094022.jpg'),
(6, 'ChocoWorld-International_09082024135710.jpg'),
(7, 'ChocoWorld-International_19082024084856.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_aktivitas`
--
ALTER TABLE `tb_aktivitas`
  ADD PRIMARY KEY (`id_aktivitas`);

--
-- Indexes for table `tb_artikel`
--
ALTER TABLE `tb_artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `tb_profil`
--
ALTER TABLE `tb_profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indexes for table `tb_slider`
--
ALTER TABLE `tb_slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_aktivitas`
--
ALTER TABLE `tb_aktivitas`
  MODIFY `id_aktivitas` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_artikel`
--
ALTER TABLE `tb_artikel`
  MODIFY `id_artikel` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `id_produk` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_profil`
--
ALTER TABLE `tb_profil`
  MODIFY `id_profil` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_slider`
--
ALTER TABLE `tb_slider`
  MODIFY `id_slider` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

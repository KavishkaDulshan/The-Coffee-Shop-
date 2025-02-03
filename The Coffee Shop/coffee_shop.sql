-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 03, 2025 at 10:27 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coffee_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_posts`
--

CREATE TABLE `blog_posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog_posts`
--

INSERT INTO `blog_posts` (`id`, `title`, `content`, `image`, `created_at`) VALUES
(5, 'The Art of Brewing the Perfect Cup: A Coffee Lover’s Guide', 'There’s something magical about that first sip of coffee in the morning. The rich aroma, the bold flavor, and the warmth that spreads through your body—it’s more than just a drink; it’s an experience. At Coffee Shop, we believe that coffee is an art form, and every cup tells a story. Whether you’re a seasoned coffee connoisseur or just starting your journey into the world of specialty brews, we’re here to help you discover the secrets to brewing the perfect cup.\r\n\r\nStart with Quality Beans\r\n\r\nThe foundation of any great cup of coffee is, of course, the beans. At [Your Coffee Shop Name], we source our beans from sustainable farms around the world, ensuring that every batch is fresh, flavorful, and ethically produced. When choosing beans, look for ones that are freshly roasted and suited to your taste preferences. Light roasts tend to have brighter, more acidic flavors, while dark roasts offer a deeper, smokier profile. Experiment with different origins and roasts to find your perfect match.\r\n\r\nGrind It Right\r\n\r\nOnce you’ve selected your beans, the next step is grinding. The grind size plays a crucial role in the brewing process, as it determines how quickly water extracts flavor from the coffee. For example, a coarse grind is ideal for French press, while a fine grind works best for espresso. Investing in a good-quality burr grinder can make all the difference, as it ensures a consistent grind size, which is key to achieving a balanced flavor.\r\n\r\nMaster the Brewing Method\r\n\r\nThere are countless ways to brew coffee, and each method brings out unique characteristics in the beans. Here are a few popular techniques to try:\r\n\r\n- **Pour-Over**: This method allows for precise control over the brewing process, resulting in a clean, nuanced cup. Use a gooseneck kettle to pour hot water evenly over the grounds in a circular motion.\r\n- **French Press**: Known for its rich, full-bodied flavor, the French press is perfect for those who enjoy a more robust cup. Simply steep the coffee grounds in hot water for 4 minutes, then press the plunger down to separate the grounds.\r\n- **Espresso**: If you’re a fan of strong, concentrated coffee, espresso is the way to go. This method requires an espresso machine to force hot water through finely-ground coffee at high pressure, creating a rich, creamy shot.\r\n\r\n### Don’t Forget the Water\r\n\r\nThe quality of your water can make or break your coffee. Always use filtered water to avoid any off-flavors, and make sure it’s heated to the right temperature—around 195°F to 205°F. Water that’s too hot can scorch the coffee, while water that’s too cool won’t extract enough flavor.\r\n\r\nSavor the Moment\r\n\r\nFinally, take the time to enjoy your coffee. Whether you’re sipping it slowly at home or grabbing a cup on the go, coffee is meant to be savored. At [Your Coffee Shop Name], we’re passionate about creating a space where you can relax, connect, and indulge in the simple pleasure of a well-brewed cup.\r\n\r\nSo, the next time you’re in the mood for coffee, remember: it’s not just about the caffeine—it’s about the experience. Stop by [Your Coffee Shop Name] and let us help you discover your new favorite brew. Cheers to great coffee and even better moments! ☕', 'images/blog1.jpeg', '2025-02-02 07:09:19'),
(6, 'The Heartbeat of a Coffee Shop: More Than Just a Cup of Coffee', '\r\nThere’s a certain rhythm to a coffee shop that feels almost universal. The hum of conversation, the clinking of cups, the hiss of the espresso machine—it’s a symphony of sounds that creates a sense of belonging. At [Your Coffee Shop Name], we believe a coffee shop is more than just a place to grab a drink; it’s a community hub, a sanctuary, and a space where connections are made over the shared love of coffee.<br>\r\n\r\nWalking into a coffee shop is like stepping into a world of possibilities. The aroma of freshly ground beans fills the air, inviting you to take a moment to pause and savor the simple pleasures of life. Whether you’re meeting a friend, diving into a good book, or simply taking a break from the hustle and bustle of the day, a coffee shop offers a sense of comfort and familiarity. It’s a place where time slows down, even if just for a little while.\r\n\r\nAt the heart of every great coffee shop is, of course, the coffee. But it’s not just about the caffeine—it’s about the care and craftsmanship that goes into every cup. From sourcing the finest beans to perfecting the brewing process, every step matters. Each sip tells a story of the hands that cultivated the beans, the roaster who unlocked their flavor, and the barista who brought it all together. It’s a labor of love, and one that we take seriously at Coffee Shop.\r\n\r\nBut a coffee shop is more than just the sum of its parts. It’s the barista who remembers your usual order, the cozy corner where you always sit, and the friendly faces you see every morning. It’s the quiet moments of reflection and the lively conversations that spark new ideas. It’s a place where strangers become friends and where the simple act of sharing a cup of coffee can brighten someone’s day.\r\n\r\nIn a world that often feels fast-paced and disconnected, a coffee shop offers a sense of grounding. It’s a reminder to slow down, to appreciate the little things, and to connect with the people around us. At [Your Coffee Shop Name], we’re proud to be a part of your daily routine, whether you’re stopping by for your morning pick-me-up or settling in for an afternoon of work.\r\n\r\nSo the next time you step into a coffee shop, take a moment to appreciate the magic of it all. It’s not just about the coffee—it’s about the experience, the community, and the memories you create along the way. We’re here to make every visit special, one cup at a time. Stop by [Your Coffee Shop Name] and let us be a part of your story. After all, life is better with coffee—and even better with great company. ☕', 'images/blog2.jpg', '2025-02-02 07:12:48'),
(7, 'The Ritual of Coffee: A Daily Dose of Joy', '**The Ritual of Coffee: A Daily Dose of Joy**\r\n\r\nThere’s something deeply comforting about the ritual of coffee. It’s not just about the drink itself, but the moments it creates—the quiet stillness of an early morning, the warmth of a mug cradled in your hands, or the shared laughter over a latte with a friend. At [Your Coffee Shop Name], we understand that coffee is more than just a beverage; it’s a daily ritual that brings joy, comfort, and a sense of connection.\r\n\r\nFor many of us, the day doesn’t truly begin until that first sip of coffee. It’s a moment of calm before the chaos, a chance to gather your thoughts and set the tone for the hours ahead. Whether you prefer a bold espresso, a creamy cappuccino, or a simple black brew, that first cup is a small but meaningful act of self-care. It’s a reminder to pause, breathe, and savor the present moment.\r\n\r\nBut coffee isn’t just a solitary pleasure—it’s also a social one. Some of the best conversations happen over a cup of coffee. It’s the drink that brings people together, whether it’s catching up with an old friend, brainstorming ideas with a colleague, or sharing a quiet moment with a loved one. There’s a reason why coffee shops have long been gathering places for thinkers, dreamers, and creators. The atmosphere of a coffee shop, with its warm lighting, inviting aromas, and gentle hum of activity, fosters connection and creativity.\r\n\r\nAt [Your Coffee Shop Name], we take pride in being a part of your daily rituals. From the carefully selected beans to the expertly crafted drinks, every detail is designed to enhance your experience. We believe that great coffee is about more than just taste—it’s about the feeling it evokes. It’s the anticipation as you wait for your order, the first sip that hits just right, and the satisfaction of knowing you’ve found your perfect cup.\r\n\r\nOf course, the beauty of coffee lies in its versatility. It can be a quick pick-me-up on a busy day, a leisurely indulgence on a lazy weekend, or even a source of inspiration when you need it most. It’s a drink that adapts to your mood, your schedule, and your preferences. And no matter how you take it, coffee has a way of making life feel a little brighter.\r\n\r\nSo, whether you’re a lifelong coffee lover or just discovering the joys of a well-brewed cup, we invite you to make [Your Coffee Shop Name] a part of your routine. Let us be the backdrop to your mornings, your meetings, and your moments of quiet reflection. Because life is too short for bad coffee—and every day deserves a little joy. Stop by and let us brew something special for you. After all, the best stories start with coffee. ☕', 'images/blog3.webp', '2025-02-02 07:13:46');

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(11) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`id`, `item_name`, `price`, `description`, `image`, `created_at`) VALUES
(4, 'Espresso', 3.00, 'A bold and intense shot of pure coffee, perfect for those who love a strong, rich flavor.', 'images/Espresso.webp', '2025-02-02 07:31:00'),
(5, 'Americano', 3.50, 'Smooth and balanced, made by diluting a shot of espresso with hot water for a milder taste.', 'images/Americano.webp', '2025-02-02 07:34:50'),
(6, 'Cappuccino', 4.50, 'A creamy blend of espresso, steamed milk, and a thick layer of frothy foam, topped with a dusting of cocoa.', 'images/Cappuccino.webp', '2025-02-02 07:36:24'),
(8, 'Latte', 5.00, 'A comforting mix of espresso and steamed milk, topped with a light layer of foam. Customize it with your favorite syrup.', 'images/Latte.png', '2025-02-02 07:38:34'),
(9, 'Mocha', 5.50, 'The perfect marriage of espresso, steamed milk, and rich chocolate, finished with whipped cream.', 'images/Mocha.png', '2025-02-02 07:40:17'),
(10, 'Caramel Macchiato', 5.50, 'A sweet and indulgent treat featuring espresso, vanilla syrup, steamed milk, and a drizzle of caramel.', 'images/Caramel Macchiato.webp', '2025-02-02 07:42:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

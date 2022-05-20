-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 20, 2022 lúc 11:16 AM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `pbl5_1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chuong`
--

CREATE TABLE `chuong` (
  `Id_Chuong` int(11) NOT NULL,
  `Id_Truyen` int(11) NOT NULL,
  `Chuongso` int(10) NOT NULL,
  `Chuongten` text NOT NULL,
  `Noidung` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `chuong`
--

INSERT INTO `chuong` (`Id_Chuong`, `Id_Truyen`, `Chuongso`, `Chuongten`, `Noidung`) VALUES
(0, 1, 1, 'Chuong 1 trang quynh', 'CHuong dau cua truyen trang quynh'),
(2, 3, 2, 'Chuong so 2', 'Hiện tại Thám Tử Lừng Danh Conan đã bước qua tập truyện thứ 100, thế nhưng đoạn kết mà nhiều khán giả chờ đợi có vẻ như vẫn chưa đến gần. Tuy nhiên đã có nhiều dấu hiệu cho thấy diễn biến của cốt truyện đang dần trở nên gay cấn hơn, từ sự xuất hiện của ông trùm Tổ chức Áo đen đến những bí mật xoay quanh Tiến sĩ Agasa - nhân vật luôn bị nghi ngờ là trùm cuối. Giờ đây một thông tin mới nhất về \"ông bác\" của Conan đã được tác giả xác nhận.\r\n\r\nCụ thể trong một cuộc phỏng vấn gần đây xoay quanh tập truyện thứ 100, tác giả Gosho Aoyama đã chính thức xác nhận thông tin người chế tạo các thiết bị, \"đồ chơi\" của tên trộm điển trai Kaito Kid chính là Tiến sĩ Agasa. \"Đó là bí mật nhưng nó chính xác đấy!\", tác giả Conan khẳng định.'),
(3, 3, 3, 'Chuong 3 conan', 'Thực chất tình tiết này vốn dĩ đã được \"nhá hàng\" từ rất lâu. Trong movie thứ 8 của Thám Tử Lừng Danh Conan mang tên Nhà Ảo Thuật Với Đôi Cánh Bạc, Kaito Kid đã từng hỏi bâng quơ Conan rằng \"Lại là thiết bị của ông tiến sĩ làm ra đó hả?\" như một lời xác nhận rằng bản thân tên siêu trộm biết rõ về Tiến sĩ Agasa.\r\n\r\nNgoài ra trong Magic Kaito (series riêng của Kaito Kid), nhân vật Jii cũng xác nhận rằng thiết bị của Kaito Kid do \"một ông tiến sĩ mà tôi quen biết tạo ra\", sau đó chuyển sang cảnh của một chiếc xe Beetle màu vàng (chính là xe của Tiến sĩ Agasa).'),
(4, 4, 1, 'Chuong 1 TDDV\r\n', '\"Trạng Tí phiêu lưu ký\" là một trong những tác phẩm có số phận long đong khi phải dời lịch chiếu nhiều lần do dịch Covid-19. Ngay cả khi ra rạp, phim vẫn tiếp tục phải tạm ngưng chiếu và đến nay mới có thông tin quay trở lại.\r\n\r\n\"Ở vai trò là nhà sản xuất, tôi chưa từng có dự án nào gian nan như thế này. Phim phải liên tục dời lịch chiếu nhiều lần vì đại dịch. Với sự đầu tư cả về nhân lực lẫn tài lực của tập thể hơn 300 người, tôi mong sự trở lại của phim lần này vẫn được khán giả đón nhận, yêu thương\" – nhà sản xuất Ngô Thanh Vân kỳ vọng.'),
(5, 4, 2, 'Chuong 2 TDDV', '\"Trạng Tí phiêu lưu ký\" do Phan Gia Nhật Linh đạo diễn. Nội dung phim được chuyển thể từ truyện tranh \"Thần đồng đất Việt\". Trước khi phim ra rạp, dư luận tranh cãi quanh vấn đề bản quyền, những thay đổi của phim so với bản gốc truyện tranh. Tuy nhiên, đây là một tác phẩm nhận được nhiều đánh giá tích cực từ người trong giới về nội dung chỉn chu, hiệu ứng kỹ xảo tốt, thông điệp nhân văn trong phim. Dàn diễn viên nhí diễn xuất rất tốt, truyền tải được cảm xúc cho người xem.'),
(6, 1, 2, 'chuong 2 trang quynh', 'Trạng Quỳnh là một nhân vật có thật ngoài đời, quê ông Xã Hoằng Lộc, Huyện Hoằng Hóa, Tỉnh Thanh Hóa, Việt Nam trong văn học dân gian Việt Nam ở thời kỳ Vua Lê - Chúa Trịnh. Những ghi chép về nhân vật Trạng Quỳnh được cho là có nhiều chi tiết giống với nhân vật Nguyễn Quỳnh (1677 - 1748) ở cùng giai đoạn lịch sử này.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `Id_Comment` int(11) NOT NULL,
  `Id_User` int(11) NOT NULL,
  `Id_Truyen` int(11) NOT NULL,
  `Noidung` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`Id_Comment`, `Id_User`, `Id_Truyen`, `Noidung`) VALUES
(1, 3, 3, 'truyen hay'),
(2, 5, 4, 'truyen do qua'),
(3, 4, 4, 'truyen qua tuyet voi'),
(4, 5, 3, 'truyen te qua'),
(5, 1, 3, 'dhsadsadsa'),
(8, 4, 3, 'tuyet voi'),
(9, 4, 3, 'tuyet voi qua');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhdautruyen`
--

CREATE TABLE `danhdautruyen` (
  `Id_Truyen` int(11) NOT NULL,
  `Id_Chuong` int(11) NOT NULL,
  `Id_User` int(11) NOT NULL,
  `Id_Danhdau` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhgia`
--

CREATE TABLE `danhgia` (
  `Id_Danhgia` int(11) NOT NULL,
  `Id_User` int(11) NOT NULL,
  `Id_Truyen` int(11) NOT NULL,
  `Diemdanhgia` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hinhanhchuong`
--

CREATE TABLE `hinhanhchuong` (
  `Id_Hinhanhchuong` int(11) NOT NULL,
  `Id_Chuong` int(11) NOT NULL,
  `Hinhanh` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaitruyen`
--

CREATE TABLE `loaitruyen` (
  `Id_Loai` int(11) NOT NULL,
  `TenLoai` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `loaitruyen`
--

INSERT INTO `loaitruyen` (`Id_Loai`, `TenLoai`) VALUES
(1, 'Truyện thiếu nhi'),
(2, 'Truyện trinh thám'),
(3, 'Truyện tiểu thuyết');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quyen`
--

CREATE TABLE `quyen` (
  `Id_Quyen` int(11) NOT NULL,
  `Tenquyen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `quyen`
--

INSERT INTO `quyen` (`Id_Quyen`, `Tenquyen`) VALUES
(1, 'Admin'),
(2, 'Độc giả'),
(3, 'Tác giả'),
(4, 'Cộng tác viên');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `theodoi`
--

CREATE TABLE `theodoi` (
  `Id_Theodoi` int(11) NOT NULL,
  `Id_User` int(11) NOT NULL,
  `Id_Truyen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `theodoi`
--

INSERT INTO `theodoi` (`Id_Theodoi`, `Id_User`, `Id_Truyen`) VALUES
(1, 5, 1),
(2, 5, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `truyen`
--

CREATE TABLE `truyen` (
  `Id_Truyen` int(11) NOT NULL,
  `Id_Loai` int(11) NOT NULL,
  `Id_User` int(11) NOT NULL,
  `Tentruyen` text NOT NULL,
  `Tinhtrang` tinyint(1) NOT NULL DEFAULT 1,
  `Tacgia` text NOT NULL,
  `Gioithieu` text NOT NULL,
  `Ngaydang` date NOT NULL,
  `Hinhdaidien` varchar(200) NOT NULL,
  `Luotxem` int(255) NOT NULL,
  `Duyet` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `truyen`
--

INSERT INTO `truyen` (`Id_Truyen`, `Id_Loai`, `Id_User`, `Tentruyen`, `Tinhtrang`, `Tacgia`, `Gioithieu`, `Ngaydang`, `Hinhdaidien`, `Luotxem`, `Duyet`) VALUES
(1, 1, 1, 'Trạng quỷnh tập 400 : Cồn dừa', 1, 'Kim Khánh', 'Nhà xuất bản Đồng Nai', '2022-05-06', 'https://drive.google.com/uc?export=view&id=1iAvWrFOneTuCRjN89RO5OEZpVkGuaiY8', 0, 1),
(2, 1, 1, 'Trạng quỷnh tập 214: Con ma nhân hậu', 1, 'Kim Khánh', 'Nhà xuất bản Đồng Nai', '2022-05-06', 'https://drive.google.com/uc?export=view&id=1RNBw6vTAmtdVFyxmKAfIuda8IGli6ej_', 0, 1),
(3, 2, 2, 'Truyện Conan tập 10 : Thám tử lừng danh', 1, 'AOYAMA Gosho', 'Nhà xuất bản Kim Đồng', '2022-05-06', 'https://drive.google.com/uc?export=view&id=1YapWNlTN3BAUGMG6bv00VWWDV4E_80j9', 0, 0),
(4, 1, 3, 'Thần đồng đất Việt tập 53 : Học trò Trạng Nguyên', 1, 'Lê Linh', 'Nhà xuất bản Trẻ', '2022-05-22', 'https://drive.google.com/uc?export=view&id=1o03KwHmU6ygzUWblIkzSNrVVcTOttDsP', 0, 0),
(5, 1, 4, 'Doremon plus tập 6', 1, 'Fujiko F Fujio', 'Nhà xuất bản Kim Đồng', '2022-05-09', 'https://drive.google.com/uc?export=view&id=1Wwq--PqLjUFA_G0JgKlvE15VpjCMNiMQ', 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `Id_User` int(11) NOT NULL,
  `Ten` text NOT NULL,
  `Ngaysinh` date NOT NULL,
  `Diachi` text NOT NULL,
  `Email` text NOT NULL,
  `Matkhau` text NOT NULL,
  `Gioitinh` tinyint(1) NOT NULL,
  `Id_Quyen` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`Id_User`, `Ten`, `Ngaysinh`, `Diachi`, `Email`, `Matkhau`, `Gioitinh`, `Id_Quyen`) VALUES
(1, 'Kim Khánh 123', '2015-02-01', 'Quảng Nam', 'nguyenvana@gmail.com', 'kimkhanh', 1, 3),
(2, 'AOYAMA Gosho', '2005-09-14', 'Đà Nẵng', 'nguyenvanb@gmail.com', 'aoyamagosho', 1, 3),
(3, 'Lê Linh', '2006-05-07', 'Hồ Chí Minh', 'lelinh@gmail.com', 'lelinh', 0, 3),
(4, 'Fujiko F Fujio', '2008-09-02', 'Nhật Bản', 'fujikoffujio@gmail.com', 'fujikoffujio', 1, 3),
(5, 'Nguyen Van Thuong', '2018-09-08', 'Quang Nam', 'kangtaeoh112001@gmail.com', 'nguyenvanthuong', 1, 2);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chuong`
--
ALTER TABLE `chuong`
  ADD PRIMARY KEY (`Id_Chuong`),
  ADD KEY `Id_Truyen` (`Id_Truyen`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`Id_Comment`),
  ADD KEY `Id_Truyen` (`Id_Truyen`),
  ADD KEY `Id_User` (`Id_User`);

--
-- Chỉ mục cho bảng `danhdautruyen`
--
ALTER TABLE `danhdautruyen`
  ADD PRIMARY KEY (`Id_Danhdau`),
  ADD KEY `Id_Chuong` (`Id_Chuong`),
  ADD KEY `Id_Truyen` (`Id_Truyen`),
  ADD KEY `Id_User` (`Id_User`);

--
-- Chỉ mục cho bảng `danhgia`
--
ALTER TABLE `danhgia`
  ADD PRIMARY KEY (`Id_Danhgia`),
  ADD KEY `Id_Truyen` (`Id_Truyen`),
  ADD KEY `Id_User` (`Id_User`);

--
-- Chỉ mục cho bảng `hinhanhchuong`
--
ALTER TABLE `hinhanhchuong`
  ADD PRIMARY KEY (`Id_Hinhanhchuong`),
  ADD KEY `Id_Chuong` (`Id_Chuong`);

--
-- Chỉ mục cho bảng `loaitruyen`
--
ALTER TABLE `loaitruyen`
  ADD PRIMARY KEY (`Id_Loai`);

--
-- Chỉ mục cho bảng `quyen`
--
ALTER TABLE `quyen`
  ADD PRIMARY KEY (`Id_Quyen`);

--
-- Chỉ mục cho bảng `theodoi`
--
ALTER TABLE `theodoi`
  ADD PRIMARY KEY (`Id_Theodoi`),
  ADD KEY `Id_Truyen` (`Id_Truyen`),
  ADD KEY `Id_User` (`Id_User`);

--
-- Chỉ mục cho bảng `truyen`
--
ALTER TABLE `truyen`
  ADD PRIMARY KEY (`Id_Truyen`),
  ADD KEY `Id_User` (`Id_User`),
  ADD KEY `Id_Loai` (`Id_Loai`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id_User`),
  ADD KEY `Maquyen` (`Id_Quyen`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `Id_Comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chuong`
--
ALTER TABLE `chuong`
  ADD CONSTRAINT `chuong_ibfk_1` FOREIGN KEY (`Id_Truyen`) REFERENCES `truyen` (`Id_Truyen`);

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`Id_Truyen`) REFERENCES `truyen` (`Id_Truyen`),
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`Id_User`) REFERENCES `user` (`Id_User`);

--
-- Các ràng buộc cho bảng `danhdautruyen`
--
ALTER TABLE `danhdautruyen`
  ADD CONSTRAINT `danhdautruyen_ibfk_1` FOREIGN KEY (`Id_Chuong`) REFERENCES `chuong` (`Id_Chuong`),
  ADD CONSTRAINT `danhdautruyen_ibfk_2` FOREIGN KEY (`Id_Truyen`) REFERENCES `truyen` (`Id_Truyen`),
  ADD CONSTRAINT `danhdautruyen_ibfk_3` FOREIGN KEY (`Id_User`) REFERENCES `user` (`Id_User`);

--
-- Các ràng buộc cho bảng `danhgia`
--
ALTER TABLE `danhgia`
  ADD CONSTRAINT `danhgia_ibfk_1` FOREIGN KEY (`Id_Truyen`) REFERENCES `truyen` (`Id_Truyen`),
  ADD CONSTRAINT `danhgia_ibfk_2` FOREIGN KEY (`Id_User`) REFERENCES `user` (`Id_User`);

--
-- Các ràng buộc cho bảng `hinhanhchuong`
--
ALTER TABLE `hinhanhchuong`
  ADD CONSTRAINT `hinhanhchuong_ibfk_1` FOREIGN KEY (`Id_Chuong`) REFERENCES `chuong` (`Id_Chuong`);

--
-- Các ràng buộc cho bảng `theodoi`
--
ALTER TABLE `theodoi`
  ADD CONSTRAINT `theodoi_ibfk_1` FOREIGN KEY (`Id_Truyen`) REFERENCES `truyen` (`Id_Truyen`),
  ADD CONSTRAINT `theodoi_ibfk_2` FOREIGN KEY (`Id_User`) REFERENCES `user` (`Id_User`);

--
-- Các ràng buộc cho bảng `truyen`
--
ALTER TABLE `truyen`
  ADD CONSTRAINT `truyen_ibfk_1` FOREIGN KEY (`Id_User`) REFERENCES `user` (`Id_User`),
  ADD CONSTRAINT `truyen_ibfk_2` FOREIGN KEY (`Id_Loai`) REFERENCES `loaitruyen` (`Id_Loai`);

--
-- Các ràng buộc cho bảng `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`Id_Quyen`) REFERENCES `quyen` (`Id_Quyen`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

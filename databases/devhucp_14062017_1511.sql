-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2017 at 09:11 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `devhucp`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_session`
--

CREATE TABLE IF NOT EXISTS `ci_session` (
  `id` varchar(255) NOT NULL,
  `data` text NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `timestamp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci_session`
--

INSERT INTO `ci_session` (`id`, `data`, `ip_address`, `timestamp`) VALUES
('uu1k8t8fpkgllontct5fjv02bpjlncfq', '__ci_last_regenerate|i:1496054123;', '::1', '1496054277'),
('feifu3dskphjvtir69pehueic1o1f4ip', '__ci_last_regenerate|i:1496054291;', '::1', '1496054291'),
('e0p5rmbbov37ea3mkn7t9q6cqve589ou', '__ci_last_regenerate|i:1496054294;', '::1', '1496054294'),
('qukf0tj4t66sg9n5pfceg6tp51sbmvo5', '__ci_last_regenerate|i:1496054300;', '::1', '1496054300'),
('aekgko4ar0hkbllobm3os077vbk4k1do', '__ci_last_regenerate|i:1496054304;', '::1', '1496054304'),
('m59jl0rnu50at6mtl7h81v8mo6kp1lsi', '__ci_last_regenerate|i:1496054305;', '::1', '1496054305'),
('obr7ee4kdo2ptdvvhte2l8mv9mbbkfp5', '__ci_last_regenerate|i:1496054312;', '::1', '1496054312'),
('2se919cnlg9r1dsrhgi5bbor4r2otjrf', '__ci_last_regenerate|i:1496054326;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496054651'),
('faaumrdegfld49gnqrco6hbcpr3025ph', '__ci_last_regenerate|i:1496054651;', '::1', '1496055017'),
('sr3as9poo1le21ie06um6rrj6c2hodm4', '__ci_last_regenerate|i:1496055018;', '::1', '1496055295'),
('sr0giv7l3q68dpu8eh25f130lvn6o9l5', '__ci_last_regenerate|i:1496055346;', '::1', '1496055601'),
('fil2e7vh4l0gorkr6uka7sjoflkhmabs', '__ci_last_regenerate|i:1496055771;', '::1', '1496056139'),
('glq42bcsaua68pufq1numbfc04j80rvv', '__ci_last_regenerate|i:1496056357;', '::1', '1496056502'),
('30jksjsaqkifj270fkrnen7e97rbprgj', '__ci_last_regenerate|i:1496056722;', '::1', '1496056722'),
('i63ol885cfg7lgala42bgtb8a9i4rd2h', '__ci_last_regenerate|i:1496056738;LoggedUser|a:5:{s:6:"UserID";s:2:"11";s:9:"FirstName";s:17:"Muhammad Ruhaizat";s:12:"EmailAddress";s:21:"mruhaizat88@gmail.com";s:4:"Type";s:1:"2";s:5:"Group";s:1:"2";}', '::1', '1496056738'),
('o3ivt2blthmq07sdfng1q1cqukqdui4i', '__ci_last_regenerate|i:1496058161;', '::1', '1496058415'),
('15jsc1lgumkl82l4faa5bocj8lmqkm9n', '__ci_last_regenerate|i:1496058251;', '::1', '1496058251'),
('s6vh07esi6q90menre98dv9mnm6b942v', '__ci_last_regenerate|i:1496058255;LoggedUser|a:5:{s:6:"UserID";s:2:"11";s:9:"FirstName";s:17:"Muhammad Ruhaizat";s:12:"EmailAddress";s:21:"mruhaizat88@gmail.com";s:4:"Type";s:1:"2";s:5:"Group";s:1:"2";}', '::1', '1496058255'),
('ukitvvis0ptp4ri1f69po92ms04g50mo', '__ci_last_regenerate|i:1496058255;', '::1', '1496058255'),
('mptulqufo90d3ek38egf9s7s1vtnm0k9', '__ci_last_regenerate|i:1496058592;LoggedUser|a:5:{s:6:"UserID";s:2:"11";s:9:"FirstName";s:17:"Muhammad Ruhaizat";s:12:"EmailAddress";s:21:"mruhaizat88@gmail.com";s:4:"Type";s:1:"2";s:5:"Group";s:1:"2";}', '::1', '1496058592'),
('hgqpl081rmfqi42fqq7p6et0rp8ubbsh', '__ci_last_regenerate|i:1496058592;', '::1', '1496058592'),
('luq8ut8l3ife1ln2m15qei8arsghi429', '__ci_last_regenerate|i:1496058638;LoggedUser|a:5:{s:6:"UserID";s:2:"38";s:9:"FirstName";s:4:"Test";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";N;}', '::1', '1496058939'),
('3ttb97etlt15fl8ngjt2hgbb4rrkebqt', '__ci_last_regenerate|i:1496058940;LoggedUser|a:5:{s:6:"UserID";s:2:"38";s:9:"FirstName";s:4:"Test";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";N;}', '::1', '1496058940'),
('o3rbhrb4giba43fp9ua4dr902uu2s865', '__ci_last_regenerate|i:1496063302;', '::1', '1496063668'),
('ok6e52926p4hts27cb8kn524hi1trt2s', '__ci_last_regenerate|i:1496063678;', '::1', '1496064185'),
('emqgtt9b070ha3k05ujcm92b9si6gbu2', '__ci_last_regenerate|i:1496064185;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496064399'),
('4fsb95aoeommoquugu4u9b3a9ppibftu', '__ci_last_regenerate|i:1496064587;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496064857'),
('b6d7v0mo70ocgrut1o82kqm79r8d5471', '__ci_last_regenerate|i:1496065023;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496065059'),
('e6v6vgaaee4dl9utgm8ogfcmuppav0je', '__ci_last_regenerate|i:1496065890;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496066003'),
('ruvf76qfmg4joektkcb4t6sdrtbremum', '__ci_last_regenerate|i:1496066387;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496066546'),
('4b874uerl1ouo4chnt3nb3mtu3utseu8', '__ci_last_regenerate|i:1496101246;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496101369'),
('9542b3e0tri5sc1ud0cvg3mmiqriuua5', '__ci_last_regenerate|i:1496102984;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496102988'),
('n4osl24f1mn2csl3022ctgrj2c336pfs', '__ci_last_regenerate|i:1496103329;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496103329'),
('e9gmnvrir9ofui9cl9gpqrrk48lbs9k2', '__ci_last_regenerate|i:1496104278;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496104561'),
('ahvb4t1r31vjc9fgd3pl9ud227em9rk3', '__ci_last_regenerate|i:1496104740;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496104747'),
('pj0508pbricae2g27is9ormc0ffv1icn', '__ci_last_regenerate|i:1496105256;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496105475'),
('oqdq11q5kvvmi59imh15mf7cbvb7cr5h', '__ci_last_regenerate|i:1496105605;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496105805'),
('e3arh1an3j02mjoi7kp5grj8mh30ehs6', '__ci_last_regenerate|i:1496106641;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496106947'),
('rhh8ratu8nvk0pp6mcodio7brhsvvhor', '__ci_last_regenerate|i:1496106947;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:0:"";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496107190'),
('jpmp9fri365qk4fe6gsshfnvdlv8fd68', '__ci_last_regenerate|i:1496107310;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:0:"";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496107597'),
('hpnsjhab9hujee063qir724iec86c27l', '__ci_last_regenerate|i:1496107672;', '::1', '1496108037'),
('tjpbl7gunrjtgjujr3doonshjcvh7hip', '__ci_last_regenerate|i:1496108037;LoggedUser|a:5:{s:6:"UserID";s:2:"40";s:9:"FirstName";s:6:"User 1";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";N;}', '::1', '1496108293'),
('agq3hag1rp8j1elr5l9538gk49p4t38q', '__ci_last_regenerate|i:1496108454;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496108730'),
('qtagv5c3p0q30ce9g7mn9gcffdvt61a5', '__ci_last_regenerate|i:1496108891;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496109137'),
('c9re66dku4b38al0jl838634htdmj507', '__ci_last_regenerate|i:1496109210;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496109354'),
('kv1bhveeck7ks6f2pbuvb9rk91g9114l', '__ci_last_regenerate|i:1496109518;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496109716'),
('ffubj0i6a7sijf0emi9r8u79m04ho34l', '__ci_last_regenerate|i:1496109866;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496110007'),
('2ckc1ta05aqilkr19r959dvut3fifvv9', '__ci_last_regenerate|i:1496110294;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496110517'),
('2ba0psj7hvpu0l5ukatjk583j8nrnecq', '__ci_last_regenerate|i:1496112721;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496112721'),
('12iim5p1jg8ovd7ace0tri40q5cre4jq', '__ci_last_regenerate|i:1496115610;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496115624'),
('gsgv548pg91v2fu1l3mvdastjo98edvg', '__ci_last_regenerate|i:1496116814;LoggedUser|a:5:{s:6:"UserID";s:2:"40";s:9:"FirstName";s:6:"User 1";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";N;}', '::1', '1496117022'),
('fjjhinfrmqffjgutk8i7lc3rir61bo4j', '__ci_last_regenerate|i:1496117263;LoggedUser|a:5:{s:6:"UserID";s:2:"40";s:9:"FirstName";s:6:"User 1";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";N;}', '::1', '1496117524'),
('db40fpgt3a0b3k8u8ivjbnvt8mu76lfu', '__ci_last_regenerate|i:1496118310;LoggedUser|a:5:{s:6:"UserID";s:2:"40";s:9:"FirstName";s:6:"User 1";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";N;}', '::1', '1496121690'),
('fa5lp278ktr3oq2k87qu0u6mgbskk1bt', '__ci_last_regenerate|i:1496121845;LoggedUser|a:5:{s:6:"UserID";s:2:"40";s:9:"FirstName";s:6:"User 1";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";N;}', '::1', '1496122130'),
('bnj2s5obuqeo4ufhsgv0qtdm63dcct7u', '__ci_last_regenerate|i:1496122321;LoggedUser|a:5:{s:6:"UserID";s:2:"40";s:9:"FirstName";s:6:"User 1";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";N;}', '::1', '1496122321'),
('7ifasmc7svhvc6ue499ok71g6o9vgifd', '__ci_last_regenerate|i:1496123665;LoggedUser|a:5:{s:6:"UserID";s:2:"40";s:9:"FirstName";s:6:"User 1";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";N;}', '::1', '1496123668'),
('o9qcjt4pkpop8c7mq14riva6uksndjct', '__ci_last_regenerate|i:1496124040;LoggedUser|a:5:{s:6:"UserID";s:2:"40";s:9:"FirstName";s:6:"User 1";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";N;}', '::1', '1496124258'),
('j6a8qf2gl11vrnakvbiuebs0ej2or85g', '__ci_last_regenerate|i:1496124536;LoggedUser|a:5:{s:6:"UserID";s:2:"40";s:9:"FirstName";s:6:"User 1";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";N;}', '::1', '1496124746'),
('041u6o9t5oi8ejl9hl7ihdnp4gsau2nm', '__ci_last_regenerate|i:1496124890;LoggedUser|a:5:{s:6:"UserID";s:2:"40";s:9:"FirstName";s:6:"User 1";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";N;}', '::1', '1496124941'),
('81ap6dj4of7jerda074b2v5clei75b71', '__ci_last_regenerate|i:1496208004;LoggedUser|a:5:{s:6:"UserID";s:2:"40";s:9:"FirstName";s:6:"User 1";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";N;}', '::1', '1496208247'),
('09cnsmkielj60mg8egk5idlhj2euvcp2', '__ci_last_regenerate|i:1496208364;LoggedUser|a:5:{s:6:"UserID";s:2:"40";s:9:"FirstName";s:6:"User 1";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";N;}', '::1', '1496208665'),
('t4elf6jniq4ak1io56s1tg1tem0ad8jm', '__ci_last_regenerate|i:1496208705;LoggedUser|a:5:{s:6:"UserID";s:2:"40";s:9:"FirstName";s:6:"User 1";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";N;}', '::1', '1496208966'),
('e8a1cknvdnm38ee37aq00fcaddjvl9lc', '__ci_last_regenerate|i:1496209053;LoggedUser|a:5:{s:6:"UserID";s:2:"40";s:9:"FirstName";s:6:"User 1";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";N;}', '::1', '1496209210'),
('a2m05850bmp90aktrh35cs1ljsuo51hn', '__ci_last_regenerate|i:1496209667;LoggedUser|a:5:{s:6:"UserID";s:2:"40";s:9:"FirstName";s:6:"User 1";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";N;}', '::1', '1496209698'),
('s1id710uk8l9g0suriophrqht1b3j6ao', '__ci_last_regenerate|i:1496210544;LoggedUser|a:5:{s:6:"UserID";s:2:"40";s:9:"FirstName";s:6:"User 1";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";N;}', '::1', '1496210781'),
('e30912o6m5n8ci4n0idrdif9b4mtk4e0', '__ci_last_regenerate|i:1496210901;LoggedUser|a:5:{s:6:"UserID";s:2:"40";s:9:"FirstName";s:6:"User 1";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";N;}', '::1', '1496211200'),
('0p1a5i3ls2br8oqpi5eic7kf58ogf2lp', '__ci_last_regenerate|i:1496211261;LoggedUser|a:5:{s:6:"UserID";s:2:"40";s:9:"FirstName";s:6:"User 1";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";N;}', '::1', '1496211321'),
('4p1davt4r78necl09rouqprjl829bj88', '__ci_last_regenerate|i:1496211741;LoggedUser|a:5:{s:6:"UserID";s:2:"40";s:9:"FirstName";s:6:"User 1";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";N;}', '::1', '1496212026'),
('0t7ta9j8ms35mtptpuojfvprt1kabbhk', '__ci_last_regenerate|i:1496212089;LoggedUser|a:5:{s:6:"UserID";s:2:"40";s:9:"FirstName";s:6:"User 1";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";N;}', '::1', '1496212247'),
('pd6a7er4shkh0fook3foq2mnjhpsa6sg', '__ci_last_regenerate|i:1496212989;LoggedUser|a:5:{s:6:"UserID";s:2:"40";s:9:"FirstName";s:6:"User 1";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";N;}', '::1', '1496212989'),
('5onm2lq16goghhg8288b0dsbevg9dhvt', '__ci_last_regenerate|i:1496213819;LoggedUser|a:5:{s:6:"UserID";s:2:"40";s:9:"FirstName";s:6:"User 1";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";N;}', '::1', '1496213946'),
('19g53ibqhvg54h0fpikfm2iqffmt2q3b', '__ci_last_regenerate|i:1496214131;LoggedUser|a:5:{s:6:"UserID";s:2:"40";s:9:"FirstName";s:6:"User 1";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";N;}', '::1', '1496214152'),
('7sl7616iq9rd22qs2b6erh1gpde2eet4', '__ci_last_regenerate|i:1496214572;LoggedUser|a:5:{s:6:"UserID";s:2:"40";s:9:"FirstName";s:6:"User 1";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";N;}', '::1', '1496214851'),
('5q3jkilfa0pgjnisvsolg04f4fda51p4', '__ci_last_regenerate|i:1496214896;LoggedUser|a:5:{s:6:"UserID";s:2:"40";s:9:"FirstName";s:6:"User 1";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";N;}', '::1', '1496215182'),
('clnes6no8bmjoebsqebr3qkk4birjfc1', '__ci_last_regenerate|i:1496215264;LoggedUser|a:5:{s:6:"UserID";s:2:"40";s:9:"FirstName";s:6:"User 1";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";N;}', '::1', '1496215324'),
('gl8knb8nfrq1msl1pavqlllj3h8c0oq3', '__ci_last_regenerate|i:1496216253;LoggedUser|a:5:{s:6:"UserID";s:2:"40";s:9:"FirstName";s:6:"User 1";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";N;}', '::1', '1496216531'),
('h5gf2uvd6i6hq6q0ebrth16g5d6adp5i', '__ci_last_regenerate|i:1496216641;LoggedUser|a:5:{s:6:"UserID";s:2:"40";s:9:"FirstName";s:6:"User 1";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";N;}', '::1', '1496216832'),
('oben5g96fepgbukf4udq5rl1gjsq40hq', '__ci_last_regenerate|i:1496217290;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496217446'),
('4dmo1gn1ej1e8sehuhjbotph0o63lm4o', '__ci_last_regenerate|i:1496278315;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496278608'),
('9hjdfokvuuavqmd8i6ej8dturcla9aua', '__ci_last_regenerate|i:1496580343;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496580380'),
('g53fmesmqjmob8a12kchaigc9uottjnd', '__ci_last_regenerate|i:1496580670;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496580703'),
('lcuj7ime3jgd0ud2r5l2023fantum0ah', '__ci_last_regenerate|i:1496581190;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496581190'),
('qgsikd2qcfqmqqci64f26he3hseosnfe', '__ci_last_regenerate|i:1496581621;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496581834'),
('laats1418af3r1ai5fau5g30jg13oakg', '__ci_last_regenerate|i:1496582038;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496582307'),
('ud0k08c2i988962q1bvv8fjhu1l0ga6v', '__ci_last_regenerate|i:1496582413;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496582641'),
('fkm6gj06311bke0q2vd3rpcmg7k9sobo', '__ci_last_regenerate|i:1496582745;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496583030'),
('53o4fgtp6up25mlrl6q9l7jvn0h79igc', '__ci_last_regenerate|i:1496583097;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496583333'),
('s5qf8rktd5nbn2fkod44v7l3bgipthfm', '__ci_last_regenerate|i:1496583528;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496583748'),
('8lhbj302fjj94emdlisgempmjtuq6jpt', '__ci_last_regenerate|i:1496583978;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496584264'),
('ptfmvnrsoef09flrm2kcphotsfr9qik4', '__ci_last_regenerate|i:1496584319;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496584615'),
('daff5rsek66fqoe8rpc10c7ehcgdl1vi', '__ci_last_regenerate|i:1496584620;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496584854'),
('jbjfcbqu54rkdns065jlk96u76bul6fq', '__ci_last_regenerate|i:1496585234;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496585506'),
('92bkhjnp14c0ftkpor2n6k60a7gpoh19', '__ci_last_regenerate|i:1496585574;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496585757'),
('dpu6qd5glksg9a3t8e34utr8v3hrfjb0', '__ci_last_regenerate|i:1496585929;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496585929'),
('bq6magmb7v8iqopaq5bb9qgrnctlnla7', '__ci_last_regenerate|i:1496586406;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496586590'),
('3fp41tmhb98gqisd3umi5sjmhslt5cg5', '__ci_last_regenerate|i:1496586744;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496586935'),
('416ndh9f86co04tpjh6j4e0mu5gs0rnv', '__ci_last_regenerate|i:1496587067;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496587264'),
('p8s0hbtqc3cftpeauin6di3bk2qp5qp0', '__ci_last_regenerate|i:1496587389;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496587645'),
('t2499i2evg58g9d5h0go3spd4fgcnbjd', '__ci_last_regenerate|i:1496587750;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496588024'),
('qn6d5mdu255661tc7o2pkkv6lfenbj1c', '__ci_last_regenerate|i:1496588132;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496588201'),
('ve1sg4rtffuojr6ctlo6h8m311iee6pr', '__ci_last_regenerate|i:1496588454;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496588518'),
('dquea29677ljm1inv10olpp1mobjmfc4', '__ci_last_regenerate|i:1496588773;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496588773'),
('e4qn0ni170q485kvhb54j7314qeas3qb', '__ci_last_regenerate|i:1496620065;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496620082'),
('uksi8bi3h0ca7u3uaeg29ouccp4j3k3h', '__ci_last_regenerate|i:1496620374;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496620673'),
('evsb9e4b2p7tk31tpodgihr5tqvd246h', '__ci_last_regenerate|i:1496620901;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496621188'),
('7aj1sj12dj1vp9gkt3va3542kcf0df64', '__ci_last_regenerate|i:1496621209;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496621482'),
('rnhmbqi9kvhggu0r86jo0hvm73qchd4o', '__ci_last_regenerate|i:1496621679;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496621971'),
('steb9l5nb3lrpg4djmg6qsk911aj6hof', '__ci_last_regenerate|i:1496622017;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496622272'),
('oa0gao6ujdev0n8upo32krbs50mm75fv', '__ci_last_regenerate|i:1496622318;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496622510'),
('f4q4biah7iqi7jjbv0i7v2cftd029tvp', '__ci_last_regenerate|i:1496623509;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496623561'),
('qde6v26kbfcl4l3sen66usup6qvde1ha', '__ci_last_regenerate|i:1496666102;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496666226'),
('sii6qr8gsm75f3l66n498mlceklb6qll', '__ci_last_regenerate|i:1496671131;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496671326'),
('jlp200k3g8fmp58evnajelb5cllmemjl', '__ci_last_regenerate|i:1496671435;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496671572'),
('836ve13tkmn2ur4i5fngthj5hgdpsdsf', '__ci_last_regenerate|i:1496671764;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496672059'),
('0g5huv3e74qtme35s5i18j7iinroe3ou', '__ci_last_regenerate|i:1496672900;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496673192'),
('ao91h0jko6o30n7jor4mbietpupppk5k', '__ci_last_regenerate|i:1496673281;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496673578'),
('6pibj0370k0orm60jok8u1op51nvnjd1', '__ci_last_regenerate|i:1496673585;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496673863'),
('27nvo68kv0un4h8l2dpjrdd4pfma8pqs', '__ci_last_regenerate|i:1496673903;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496674069'),
('buuj6uma8o74dpintbous8313pjqc9qc', '__ci_last_regenerate|i:1496674303;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496674580'),
('68f8816som03ufeiib0inkbr474djmkr', '__ci_last_regenerate|i:1496674606;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496674815'),
('d1lickcirugets4egmskaqus5d86ab22', '__ci_last_regenerate|i:1496674963;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496675259'),
('45u7dahsacgpdsmfe3nfbfot7sp7v488', '__ci_last_regenerate|i:1496675266;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496675266'),
('77c4m3sk6ef2kmghsflfn7kuqc8i9bqb', '__ci_last_regenerate|i:1496708534;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496708754'),
('uk94uujsf3sgj5uran0eag1n3a2om59r', '__ci_last_regenerate|i:1496709283;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496709581'),
('tr794b378hhvqdu6fupnbs0jugopu5kh', '__ci_last_regenerate|i:1496709599;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496709816'),
('fltg63uuuui88mvcio6gst01k8r0rs0e', '__ci_last_regenerate|i:1496710766;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496710766'),
('u1fvq11c52cqelnrr0bbqbsoq2caej0d', '__ci_last_regenerate|i:1496711072;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496711322'),
('840o5q25cbhl81fue4umhrdd7ft3dhm2', '__ci_last_regenerate|i:1496711538;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496711737'),
('rsgl08252v1p91fls4nb48e73na4a04v', '__ci_last_regenerate|i:1496711868;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496711875'),
('mmvnnomelqp4rbrt7lrf8t9pop5sui8a', '__ci_last_regenerate|i:1496712839;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496713098'),
('cl2cl1ra2nkmb2qhs3vd612f7rjrrgrl', '__ci_last_regenerate|i:1496713194;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496713220'),
('ku8gruiguomlrjug9seceltboskq9an2', '__ci_last_regenerate|i:1496714017;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496714117'),
('sdgbkfo7v1pjk8g6j66qdrdmldr5k5l7', '__ci_last_regenerate|i:1496722956;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496723208'),
('rkh1gc8s3srrhprn5a7vphuog3j10a15', '__ci_last_regenerate|i:1496723269;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496723554'),
('0s5frlbik1gmdcu5b74ka2atds2r1kpp', '__ci_last_regenerate|i:1496723617;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496723628'),
('5dk213s21ml3f4853mhms4pcqefeh89l', '__ci_last_regenerate|i:1496724282;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496724282'),
('fgr6t44b8i1nu0rgkfccrn77nbnkc0bu', '__ci_last_regenerate|i:1496724704;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496724938'),
('k01ku0qlfi06nmu781f568pvatd37q6s', '__ci_last_regenerate|i:1496725132;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496725321'),
('uhqj2hpvfa430raususj1mhd3s6cpoj0', '__ci_last_regenerate|i:1496725472;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496725505'),
('f30lssdj54b8evs64eu1v9safb5svov8', '__ci_last_regenerate|i:1496726046;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496726046'),
('3skvhq1dqoo6fanad8jalklnpokdlnv9', '__ci_last_regenerate|i:1496726384;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496726670'),
('raodt37d0ng47mg9l9g3aimfurhot5au', '__ci_last_regenerate|i:1496726704;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496726997'),
('b7s8jvau40p1crhueda1o85odo881l40', '__ci_last_regenerate|i:1496727017;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496727121'),
('fac1oqg2ik4ivuj8svjeerfvqk7mntjv', '__ci_last_regenerate|i:1496727393;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496727393'),
('tqnk4ephcj3d6sejj72og36failq0pj5', '__ci_last_regenerate|i:1496727707;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496727992'),
('456n2peupb2d9nprcr9n4mas29ui0sje', '__ci_last_regenerate|i:1496728061;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496728357'),
('0s7e49hqd5dg2la04m4mqls0htgf60dm', '__ci_last_regenerate|i:1496728378;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496728460'),
('8e95ndhdg8f6h1iaoiuamu97qbc4rscv', '__ci_last_regenerate|i:1496728833;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496728974'),
('ckllq4qnm76qk55no766u6be96fpn4p6', '__ci_last_regenerate|i:1496729369;', '::1', '1496729638'),
('ksoprnuao9gv5gd0mmilfo1er6muqq2j', '__ci_last_regenerate|i:1496729721;', '::1', '1496730017'),
('puucsjntur40qpg02kgfh55qpqmspov3', '__ci_last_regenerate|i:1496730049;', '::1', '1496730281'),
('linhb748t7d6li8f8cegp5u2uofe063t', '__ci_last_regenerate|i:1496730422;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496730455'),
('drpa7g627lpraeoqjrodlbfj5bd5sek9', '__ci_last_regenerate|i:1496733151;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496733151'),
('sklqm4imihok3f0jnif6ovmb65le4hul', '__ci_last_regenerate|i:1497014015;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497014248'),
('6ri545geo81qfb4jjf6c3n99mso35sm2', '__ci_last_regenerate|i:1497014355;LoggedUser|a:5:{s:6:"UserID";s:2:"27";s:9:"FirstName";s:7:"M. Izat";s:12:"EmailAddress";s:31:"myfreelanceprogrammer@gmail.com";s:4:"Type";s:1:"1";s:5:"Group";s:1:"2";}', '::1', '1497014628'),
('l4j0l88vp9j7ajsvqadhprsojpjs98dr', '__ci_last_regenerate|i:1497014784;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497015091'),
('t0id81dvcsso7lb859di6st01ms1hsn0', '__ci_last_regenerate|i:1497015091;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497015325'),
('8b1ocathtcre71lvurfvidbkngum2cpg', '__ci_last_regenerate|i:1497015416;LoggedUser|a:5:{s:6:"UserID";s:2:"28";s:9:"FirstName";s:5:"Kenny";s:12:"EmailAddress";s:16:"kenny@kni.com.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"2";}', '::1', '1497015670'),
('s8e72k4ntllk83hs35mt9ueqet8gf0de', '__ci_last_regenerate|i:1497015752;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497016018'),
('adj076qdpevlmtlj9rkgv3v1p928uo7v', '__ci_last_regenerate|i:1497016169;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497016467'),
('mat9472br6cl6kv8ppcqn3j2j6ei8bjg', '__ci_last_regenerate|i:1497016470;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497016686'),
('63voe504m4pmh84oka1vrc9qackjj5rs', '__ci_last_regenerate|i:1497016978;LoggedUser|a:5:{s:6:"UserID";s:2:"42";s:9:"FirstName";s:3:"Lim";s:12:"EmailAddress";s:19:"limperz@hotmail.com";s:4:"Type";s:1:"2";s:5:"Group";s:1:"2";}', '::1', '1497017483'),
('lmhlbmt9e6ch5t3fr4tc9pvi2d7s6aub', '__ci_last_regenerate|i:1497017001;LoggedUser|a:5:{s:6:"UserID";s:2:"11";s:9:"FirstName";s:17:"Muhammad Ruhaizat";s:12:"EmailAddress";s:21:"mruhaizat88@gmail.com";s:4:"Type";s:1:"2";s:5:"Group";s:1:"2";}', '::1', '1497017207'),
('sagiff2omc8m7pm0hk1l4a6io39f5b3m', '__ci_last_regenerate|i:1497017483;', '::1', '1497018817'),
('ctnj753hgcen5u92v3lsaee1bmh80r4j', '__ci_last_regenerate|i:1497018774;', '::1', '1497018774'),
('lmgvc0d2dal5uqq14u4g4623mv8jh24e', '__ci_last_regenerate|i:1497018817;', '::1', '1497018817'),
('61agfue9rvude7cbd3hmhglohor3utf4', '__ci_last_regenerate|i:1497183798;', '::1', '1497184046'),
('m3b4hiadsunqpmebggberb2il1ctl2s8', '__ci_last_regenerate|i:1497184102;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497184400'),
('22rp5rb9bqrhsuu3t3nc62d321d36i1u', '__ci_last_regenerate|i:1497184403;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497184560'),
('gpgep3qah3u6lqr2utm3i4d31ohqlrrn', '__ci_last_regenerate|i:1497184957;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497185249'),
('hbf8d8iui8nnmq0330s7f91jap8175ql', '__ci_last_regenerate|i:1497185415;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497185415'),
('i2cq629hn9gqk7qfr2u93ne55s370a41', '__ci_last_regenerate|i:1497185725;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497185989'),
('nr1iah993a73p6g9587h8b8hucqp7jg5', '__ci_last_regenerate|i:1497186652;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497186905'),
('8s247pg492pk63j7927ks9no400ilupg', '__ci_last_regenerate|i:1497187092;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497187155'),
('gtsps4gtfifbrnooa5575lpctq73duar', '__ci_last_regenerate|i:1497187593;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497187802'),
('t3nf5pkfj5kugqv45asfgue2c5sjpk8m', '__ci_last_regenerate|i:1497187902;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497188152'),
('4mt5ukngp1lq36pcei8vv4eq37q3mveg', '__ci_last_regenerate|i:1497188212;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497188262'),
('ktvbg4q8a4hvsr453mdu274ugsm93no9', '__ci_last_regenerate|i:1497188558;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497188798'),
('r8793b400u67pvdovh5ou6a20ilto87q', '__ci_last_regenerate|i:1497188859;', '::1', '1497189157'),
('dp1mckcmrpecs0bqpagik2ksdinqkn5d', '__ci_last_regenerate|i:1497189290;', '::1', '1497189426'),
('elmqucuhuvtf8al9bp6lj9recc75sjgd', '__ci_last_regenerate|i:1497189700;LoggedUser|a:5:{s:6:"UserID";s:2:"11";s:9:"FirstName";s:17:"Muhammad Ruhaizat";s:12:"EmailAddress";s:21:"mruhaizat88@gmail.com";s:4:"Type";s:1:"2";s:5:"Group";s:1:"2";}', '::1', '1497189996'),
('1m7j0qj1gtmpbi3u9ghd8377bf9k4brl', '__ci_last_regenerate|i:1497190024;', '::1', '1497190260'),
('k3fcnd383316mfqgqccu4dnmgcdqpsp9', '__ci_last_regenerate|i:1497190555;', '::1', '1497190742'),
('l3i09m55cbim45r3dfur99fmkgvpdltk', '__ci_last_regenerate|i:1497190902;', '::1', '1497191099'),
('iqmgmsfn24g0nv879r3u4itrmrphqreg', '__ci_last_regenerate|i:1497191844;LoggedUser|a:5:{s:6:"UserID";s:2:"40";s:9:"FirstName";s:6:"User 1";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"2";}', '::1', '1497192292'),
('snm5uotuevc8j4sfnc760b53crsc930k', '__ci_last_regenerate|i:1497192292;LoggedUser|a:5:{s:6:"UserID";s:2:"40";s:9:"FirstName";s:6:"User 1";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"2";}', '::1', '1497192514'),
('cqql3d9nitbv0nmafimi8h29ssei8uvc', '__ci_last_regenerate|i:1497192613;LoggedUser|a:5:{s:6:"UserID";s:2:"40";s:9:"FirstName";s:6:"User 1";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"2";}', '::1', '1497192927'),
('6dhsoo0f4760ks1ihh9brskprcs5cn0p', '__ci_last_regenerate|i:1497192961;LoggedUser|a:5:{s:6:"UserID";s:2:"40";s:9:"FirstName";s:6:"User 1";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"2";}', '::1', '1497193207'),
('lvkccsi0e81733n36gp27tfde6begm1v', '__ci_last_regenerate|i:1497356128;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:13:"Administrator";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497356219'),
('9lvniko8n6mrscncj48tu8tj20ju04nj', '__ci_last_regenerate|i:1497356500;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:13:"Administrator";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497356748'),
('q95u1t2a0qd5katvnbmgopf46qeovv5e', '__ci_last_regenerate|i:1497356811;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:13:"Administrator";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497357099'),
('r9m32t6nssvvr4ioihlu1onag850asq5', '__ci_last_regenerate|i:1497357143;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:13:"Administrator";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497357431'),
('mk9bm3eqb2pvt6k6247qgak0bkocvbvr', '__ci_last_regenerate|i:1497357468;LoggedUser|a:5:{s:6:"UserID";s:2:"27";s:9:"FirstName";s:7:"M. Izat";s:12:"EmailAddress";s:31:"myfreelanceprogrammer@gmail.com";s:4:"Type";s:1:"1";s:5:"Group";s:1:"2";}', '::1', '1497357590'),
('c92jbn14kjqneohn78v9ot7oholukv87', '__ci_last_regenerate|i:1497358393;LoggedUser|a:5:{s:6:"UserID";s:2:"27";s:9:"FirstName";s:7:"M. Izat";s:12:"EmailAddress";s:31:"myfreelanceprogrammer@gmail.com";s:4:"Type";s:1:"1";s:5:"Group";s:1:"2";}', '::1', '1497358669'),
('fjlq3uaokf96eff2j3nt7q284cbvt9h4', '__ci_last_regenerate|i:1497358802;LoggedUser|a:5:{s:6:"UserID";s:2:"27";s:9:"FirstName";s:7:"M. Izat";s:12:"EmailAddress";s:31:"myfreelanceprogrammer@gmail.com";s:4:"Type";s:1:"1";s:5:"Group";s:1:"2";}', '::1', '1497358816'),
('50dsj2tohojd6dtio6vhlgdfibfq3t8f', '__ci_last_regenerate|i:1497359474;LoggedUser|a:5:{s:6:"UserID";s:2:"27";s:9:"FirstName";s:7:"M. Izat";s:12:"EmailAddress";s:31:"myfreelanceprogrammer@gmail.com";s:4:"Type";s:1:"1";s:5:"Group";s:1:"2";}', '::1', '1497359779'),
('ino35s5q3ucutcfaep9gbb5alptjsdv2', '__ci_last_regenerate|i:1497359779;LoggedUser|a:5:{s:6:"UserID";s:2:"40";s:9:"FirstName";s:6:"User 1";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"2";}', '::1', '1497359935'),
('00606etkut2ge6l2p28ntqd7qjapld2f', '__ci_last_regenerate|i:1497360081;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:13:"Administrator";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497360374'),
('j89gsf6fqob8ok6pqp0q262g8qfh7c9v', '__ci_last_regenerate|i:1497360413;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:13:"Administrator";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497360558'),
('3e8shpj1sgqe41a3vk7abnjcsmsh90kl', '__ci_last_regenerate|i:1497397092;', '::1', '1497397385'),
('h6bprhigucnlno2lohdg4pr5peqqshg2', '__ci_last_regenerate|i:1497397425;', '::1', '1497397485'),
('pec8kpn2mu1kn5enemjk7o1248o6roi6', '__ci_last_regenerate|i:1497397862;', '::1', '1497398094'),
('b5f3nppo1lrg1r6oknbd5t9i17acverh', '__ci_last_regenerate|i:1497398163;', '::1', '1497398186'),
('qi1eoc90q2df319gma8lel2gdehq3j7r', '__ci_last_regenerate|i:1497398487;', '::1', '1497398752'),
('a89bl6rkk0r8g6iqsf1fh3ajvtdq6nqd', '__ci_last_regenerate|i:1497398883;', '::1', '1497398976'),
('09odrv8hv005da204m3cb6qvfb0ojgpn', '__ci_last_regenerate|i:1497399332;', '::1', '1497399624'),
('je933k5f8bejm4t22js3fh48i7luspb3', '__ci_last_regenerate|i:1497399683;', '::1', '1497399975'),
('j4st7mb0dt9p9kiho69tpbuhlq4gkajd', '__ci_last_regenerate|i:1497400011;', '::1', '1497400310'),
('n3fluognerlsiuu0v2v0njj6l8810uia', '__ci_last_regenerate|i:1497400335;', '::1', '1497400525'),
('0u459nnalgtppcukdvair3isek49vkf3', '__ci_last_regenerate|i:1497401215;', '::1', '1497401215'),
('io4p3m0br5viv1kf4ul4vjt96773be9m', '__ci_last_regenerate|i:1497401689;', '::1', '1497401737'),
('33mluj07ig0s1auf7vj55b5o18i5h98q', '__ci_last_regenerate|i:1497402018;', '::1', '1497402272'),
('p3trfde3o78lpjoctjhclg1fhi8b6ki6', '__ci_last_regenerate|i:1497402377;', '::1', '1497402671'),
('ehao36fivngn2bpoa7fhau1h74j0fbes', '__ci_last_regenerate|i:1497402736;', '::1', '1497402917'),
('ajdcqcie0usitn0sorfaj520skmhtuuc', '__ci_last_regenerate|i:1497403037;', '::1', '1497403332'),
('4q0r4i1r3ja24p7ipupjk5pdjck931dp', '__ci_last_regenerate|i:1497403427;', '::1', '1497403668'),
('tjcafnk69s534e8fcds6i381v3ghgn8r', '__ci_last_regenerate|i:1497403881;', '::1', '1497404053'),
('dl008cglfcs6jhjm2mk3hmtv85c6iut7', '__ci_last_regenerate|i:1497404264;', '::1', '1497404544'),
('vc4j4o9698dvc0u98gtrrdr41hirbisn', '__ci_last_regenerate|i:1497404636;', '::1', '1497404754'),
('hd0qd1i8fgb2h6ap5v73364i75pd40h5', '__ci_last_regenerate|i:1497405079;', '::1', '1497405258'),
('mdk9mdmk807q94cjinbo8drurdn2gb8d', '__ci_last_regenerate|i:1497405442;', '::1', '1497405712'),
('tdph4fe443si01lt6ptfaums7pqjmirt', '__ci_last_regenerate|i:1497405964;', '::1', '1497406257'),
('n0sk98istnsqpuv6tet3rip5ea857p00', '__ci_last_regenerate|i:1497406325;', '::1', '1497406620'),
('oo82omf4pnfrdbc3pgqr1sfoo67o736u', '__ci_last_regenerate|i:1497406663;', '::1', '1497406931'),
('hpee74vee6c7pt6g139qjb0m2s8v4c7m', '__ci_last_regenerate|i:1497407027;', '::1', '1497407297'),
('k5bkd108qjd0l55ujegps863sc1bimh1', '__ci_last_regenerate|i:1497407349;', '::1', '1497407571'),
('81o4854frvk1vg07d3spf3gg70hh8trp', '__ci_last_regenerate|i:1497407859;', '::1', '1497408104'),
('gmh8tv438btmocaafscfhf157t02ajtu', '__ci_last_regenerate|i:1497408184;', '::1', '1497408414'),
('a8uk1jobn5b71rod2qd4k4k6qfbad6uv', '__ci_last_regenerate|i:1497408569;', '::1', '1497408867'),
('fiqickv32o5fgjeaf0pj47cd70k1va64', '__ci_last_regenerate|i:1497408885;', '::1', '1497409182'),
('8443dq2cklpq90fsl49dgfg8n4qcfpe4', '__ci_last_regenerate|i:1497409213;', '::1', '1497409456'),
('gh4a9o73egdua1qiitvn0raiu9ttob0m', '__ci_last_regenerate|i:1497409526;', '::1', '1497409826'),
('pdat5d67v12p714ja846dh952niq905g', '__ci_last_regenerate|i:1497409904;', '::1', '1497410109'),
('5h9bte2pfg2pf26v7ko846l80t7ruovo', '__ci_last_regenerate|i:1497410277;', '::1', '1497410277'),
('ha7tnej6ejhiacden1i1fbarsa9m31of', '__ci_last_regenerate|i:1497410738;', '::1', '1497410948'),
('4odg42aso0ss5gts8cb1nftd49dlu54l', '__ci_last_regenerate|i:1497411110;', '::1', '1497411378'),
('f8mlqlj4f3s2dm6tqk2buig5jfo315ee', '__ci_last_regenerate|i:1497411423;', '::1', '1497411716'),
('trbmrc7ripjs64olb1jm24q4ue884i5k', '__ci_last_regenerate|i:1497411765;', '::1', '1497412064'),
('aem5cd5q3kki3e6mh3qocgrrfmh54j06', '__ci_last_regenerate|i:1497412088;', '::1', '1497412143'),
('j7fdk5nj9but2iu5k379hq5btvjm693a', '__ci_last_regenerate|i:1497412713;', '::1', '1497413008'),
('dv0k0khj2cavvn272gbr3vim8sig3c6b', '__ci_last_regenerate|i:1497413014;', '::1', '1497413258'),
('5kfej1hnev8u00hrh7bn3bfd4ocgoact', '__ci_last_regenerate|i:1497413316;', '::1', '1497413497'),
('1h6mr21gp4he9l2n7p7j3m7uqphik76v', '__ci_last_regenerate|i:1497413730;', '::1', '1497414030'),
('lqqi0lbhk52m1n8hr872dj10ptpthhaj', '__ci_last_regenerate|i:1497414059;', '::1', '1497414238'),
('0atvnd1katnmtefq6smdot1ljos7au8m', '__ci_last_regenerate|i:1497414593;', '::1', '1497414737'),
('ium7t1v582pdva9rmr2scspnnrv0cq0k', '__ci_last_regenerate|i:1497415444;', '::1', '1497415729'),
('s65ep42hch1jhin2rlcai23psc5hl92u', '__ci_last_regenerate|i:1497415748;', '::1', '1497416012'),
('g5no69harrg2p3gk6ovece16jv1orcbg', '__ci_last_regenerate|i:1497416144;', '::1', '1497416434'),
('l3b6vmpuj1q6vipcjcih07i11ed4o07r', '__ci_last_regenerate|i:1497416469;', '::1', '1497416769'),
('7ka2kkj17918djleigfbp842fo9mt3ld', '__ci_last_regenerate|i:1497416816;', '::1', '1497417073'),
('4dj178r99vf7pkjkam26ircnen08uq3h', '__ci_last_regenerate|i:1497417139;LoggedUser|a:5:{s:6:"UserID";s:2:"40";s:9:"FirstName";s:6:"User 1";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"2";}', '::1', '1497417354');
INSERT INTO `ci_session` (`id`, `data`, `ip_address`, `timestamp`) VALUES
('54kh3vglt3bjmuc8drp2apvdi7ro9u0g', '__ci_last_regenerate|i:1497417549;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:13:"Administrator";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497417737'),
('da4emooq6fthqpa838kfbjao69upen89', '__ci_last_regenerate|i:1497418282;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:13:"Administrator";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497418572'),
('c0kcva8hrqv733mkrksgjkn18gj467nt', '__ci_last_regenerate|i:1497418590;', '::1', '1497418899'),
('g7f1k9rh82au2sba04hf691sg4a4p6rq', '__ci_last_regenerate|i:1497418899;LoggedUser|a:5:{s:6:"UserID";s:2:"40";s:9:"FirstName";s:6:"User 1";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"2";}', '::1', '1497419174'),
('5uhiesmevtttnpkhkdqr75q7390dkj8c', '__ci_last_regenerate|i:1497419378;LoggedUser|a:5:{s:6:"UserID";s:2:"40";s:9:"FirstName";s:6:"User 1";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"2";}', '::1', '1497419650'),
('bh8ghc36qtliljl4n4uqk1ejamvqkqgp', '__ci_last_regenerate|i:1497419746;LoggedUser|a:5:{s:6:"UserID";s:2:"40";s:9:"FirstName";s:6:"User 1";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"2";}', '::1', '1497419871'),
('7b8i2l47cdf96poqahvh0125snm24jkk', '__ci_last_regenerate|i:1497420099;LoggedUser|a:5:{s:6:"UserID";s:2:"40";s:9:"FirstName";s:6:"User 1";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"2";}', '::1', '1497420356'),
('gvfn6nb4c8uq71rp8ktkruradm7tegn5', '__ci_last_regenerate|i:1497420446;LoggedUser|a:5:{s:6:"UserID";s:2:"40";s:9:"FirstName";s:6:"User 1";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"2";}', '::1', '1497420732'),
('do4qftnhds937mhekbvrcl59ri783di9', '__ci_last_regenerate|i:1497420778;LoggedUser|a:5:{s:6:"UserID";s:2:"40";s:9:"FirstName";s:6:"User 1";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"2";}', '::1', '1497421013'),
('tuahqp0csnb8r96diqmfrp1rc6ech6iq', '__ci_last_regenerate|i:1497421081;LoggedUser|a:5:{s:6:"UserID";s:2:"40";s:9:"FirstName";s:6:"User 1";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"2";}', '::1', '1497421345'),
('ptfomqsk1adfal0hdgnpg3cgh12bci6a', '__ci_last_regenerate|i:1497421394;LoggedUser|a:5:{s:6:"UserID";s:2:"40";s:9:"FirstName";s:6:"User 1";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"2";}', '::1', '1497421671'),
('lhtnvj1kqt8gokupsc76stopvnvu3lcj', '__ci_last_regenerate|i:1497421716;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:13:"Administrator";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497422005'),
('1tb072eh56nqtm0nq4ebd4jf6alv6hs5', '__ci_last_regenerate|i:1497423370;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:13:"Administrator";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497423610');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_listing`
--

CREATE TABLE IF NOT EXISTS `tbl_listing` (
  `ID` int(11) NOT NULL,
  `Status` int(11) NOT NULL,
  `Model` int(11) NOT NULL,
  `Specification` int(11) NOT NULL,
  `Transmission` int(11) NOT NULL,
  `ManufacturingYear` int(11) NOT NULL,
  `Mileage` varchar(255) NOT NULL,
  `Colour` varchar(255) NOT NULL,
  `SellingPrice` decimal(10,2) NOT NULL DEFAULT '0.00',
  `Description` text NOT NULL,
  `State` int(11) NOT NULL,
  `Address` varchar(1000) NOT NULL,
  `Latitude` varchar(255) NOT NULL,
  `Longitude` varchar(255) NOT NULL,
  `AddedOn` datetime NOT NULL,
  `AddedBy` int(11) NOT NULL,
  `ModifiedOn` datetime NOT NULL,
  `ModifiedBy` int(11) NOT NULL,
  `IsFeatured` int(11) NOT NULL,
  `gs_category` varchar(255) NOT NULL,
  `gs_model_name` varchar(255) NOT NULL,
  `gs_body_type` varchar(255) NOT NULL,
  `gs_seats` varchar(255) NOT NULL,
  `pf_eg_label` varchar(255) NOT NULL,
  `pf_eg_capacity` varchar(255) NOT NULL,
  `pf_eg_fuel_system` varchar(255) NOT NULL,
  `pf_eg_displacement` varchar(255) NOT NULL,
  `pf_eg_max_power_label` varchar(255) NOT NULL,
  `pf_eg_max_power_ps` varchar(255) NOT NULL,
  `pf_eg_max_power_kw` varchar(255) NOT NULL,
  `pf_eg_max_power_rpm` varchar(255) NOT NULL,
  `pf_eg_max_torque_label` varchar(255) NOT NULL,
  `pf_eg_max_touque_kgm` varchar(255) NOT NULL,
  `pf_eg_max_touque_nm` varchar(255) NOT NULL,
  `pf_eg_max_touque_rpm` varchar(255) NOT NULL,
  `pf_eg_number_of_cylinders` varchar(255) NOT NULL,
  `pf_eg_valve_of_cylinder` varchar(255) NOT NULL,
  `pf_tm_type` varchar(255) NOT NULL,
  `pf_tm_drive_type` varchar(255) NOT NULL,
  `pf_tm_gear_speed` varchar(255) NOT NULL,
  `pf_tm_drive_config` varchar(255) NOT NULL,
  `dm_ex_length` varchar(255) NOT NULL,
  `dm_ex_width` varchar(255) NOT NULL,
  `dm_ex_height` varchar(255) NOT NULL,
  `dm_ex_wheel_base` varchar(255) NOT NULL,
  `dm_ex_front_wheel_tread` varchar(255) NOT NULL,
  `dm_ex_rear_wheel_tread` varchar(255) NOT NULL,
  `dm_ex_front_over_hang` varchar(255) NOT NULL,
  `dm_ex_rear_over_hang` varchar(255) NOT NULL,
  `dm_cg_area_vda` varchar(255) NOT NULL,
  `wh_front_wheel` varchar(255) NOT NULL,
  `wh_rear_wheel` varchar(255) NOT NULL,
  `wh_front_tires` varchar(255) NOT NULL,
  `wh_rear_tires` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_listing`
--

INSERT INTO `tbl_listing` (`ID`, `Status`, `Model`, `Specification`, `Transmission`, `ManufacturingYear`, `Mileage`, `Colour`, `SellingPrice`, `Description`, `State`, `Address`, `Latitude`, `Longitude`, `AddedOn`, `AddedBy`, `ModifiedOn`, `ModifiedBy`, `IsFeatured`, `gs_category`, `gs_model_name`, `gs_body_type`, `gs_seats`, `pf_eg_label`, `pf_eg_capacity`, `pf_eg_fuel_system`, `pf_eg_displacement`, `pf_eg_max_power_label`, `pf_eg_max_power_ps`, `pf_eg_max_power_kw`, `pf_eg_max_power_rpm`, `pf_eg_max_torque_label`, `pf_eg_max_touque_kgm`, `pf_eg_max_touque_nm`, `pf_eg_max_touque_rpm`, `pf_eg_number_of_cylinders`, `pf_eg_valve_of_cylinder`, `pf_tm_type`, `pf_tm_drive_type`, `pf_tm_gear_speed`, `pf_tm_drive_config`, `dm_ex_length`, `dm_ex_width`, `dm_ex_height`, `dm_ex_wheel_base`, `dm_ex_front_wheel_tread`, `dm_ex_rear_wheel_tread`, `dm_ex_front_over_hang`, `dm_ex_rear_over_hang`, `dm_cg_area_vda`, `wh_front_wheel`, `wh_rear_wheel`, `wh_front_tires`, `wh_rear_tires`) VALUES
(7, 1, 10, 5, 1, 2014, '12000', 'Gold', '450000.00', 'This is the best car I ever own.', 1, 'Country Heights Kajang Selangor Malaysia', '2.99354', '101.74031319999995', '2017-06-06 10:33:32', 1, '0000-00-00 00:00:00', 0, 1, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(8, 1, 5, 3, 1, 2016, '54678', 'Black', '340000.00', 'This is the best car I ever own.', 2, 'Country Heights Kajang Selangor Malaysia', '3.0001045', '101.79944150000006', '2017-06-05 10:33:32', 1, '0000-00-00 00:00:00', 0, 1, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(9, 1, 3, 3, 2, 2011, '45', 'Blue', '34500.00', 'Testing 1234', 3, 'Kajang Selangor Malaysia', '2.993518', '101.78740579999999', '2017-06-04 23:14:13', 11, '0000-00-00 00:00:00', 0, 1, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(10, 1, 1, 1, 1, 3, '12', 'Black', '100000.00', 'Testing to sell my great car!', 4, 'Kuchai Entrepreneurs Park Kuala Lumpur Federal Territory of Kuala Lumpur Malaysia', '3.090053', '101.69003810000004', '2017-05-29 14:40:00', 11, '0000-00-00 00:00:00', 0, 0, '1', '2', '3', '4', '5', '6', '7', '8', '9', '0', 'q', 'w', 'e', 'r', 't', 'y', 'u', 'i', 'o', 'p', 'a', 's', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'z', 'x', 'c', 'v', 'b', 'n'),
(11, 0, 1, 1, 1, 3, '12', 'Black', '100000.00', '', 5, 'Kuchai Entrepreneurs Park Kuala Lumpur Federal Territory of Kuala Lumpur Malaysia', '3.090053', '101.69003810000004', '2017-05-29 14:41:24', 11, '0000-00-00 00:00:00', 0, 0, '1', '2', '3', '4', '5', '6', '7', '8', '9', '0', 'q', 'w', 'e', 'r', 't', 'y', 'u', 'i', 'o', 'p', 'a', 's', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'z', 'x', 'c', 'v', 'b', 'n'),
(12, 2, 4, 0, 0, 0, '', '', '0.00', '', 6, '', '', '', '2017-05-29 12:46:52', 1, '0000-00-00 00:00:00', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(13, 2, 6, 0, 0, 0, '', '', '0.00', '', 7, '', '', '', '2017-02-27 12:47:14', 1, '0000-00-00 00:00:00', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(14, 1, 3, 3, 2, 7, '11', 'bLUE', '67890.00', 'TTFFDDSET', 8, 'Gurney Paragon Penang Malaysia', '5.4364965', '100.31133390000002', '2017-05-29 15:34:16', 1, '0000-00-00 00:00:00', 0, 1, '1', '2', '3', '4', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(15, 0, 7, 4, 1, 7, '3', 'Black', '24000.00', 'This is my old car. Getting new one very soon!', 9, 'Mantin Negeri Sembilan Malaysia', '2.823032', '101.89424299999996', '2017-06-06 07:52:20', 1, '2017-06-06 08:00:39', 1, 0, 'q', 'w', 'e', 'r', 't', 'y', 'u', 'i', 'o', 'p', 'a', 's', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'z', 'x', 'c', 'v', 'b', 'n', 'm', 'q', 'w', 'e', 'r', 't', 'y', 'u', 'i', 'o'),
(16, 0, 4, 2, 1, 6, '9', 'Orange', '56890.00', 'Testing to sell my car', 0, 'Kuching Sarawak Malaysia', '1.6076812', '110.37854379999999', '2017-06-14 07:22:16', 1, '0000-00-00 00:00:00', 0, 0, 'q', 'w', 'e', 'r', 't', 'y', 'u', 'i', 'o', 'p', 'a', 's', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'z', 'x', 'c', 'v', 'b', 'n', 'm', '1', '2', '3', '4', '5', '6', '7', '8', '9');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_listingimage`
--

CREATE TABLE IF NOT EXISTS `tbl_listingimage` (
  `ID` int(11) NOT NULL,
  `ListingPic` varchar(255) NOT NULL,
  `ListingID` int(11) NOT NULL,
  `AddedOn` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_listingimage`
--

INSERT INTO `tbl_listingimage` (`ID`, `ListingPic`, `ListingID`, `AddedOn`) VALUES
(3, 'ppt-developer-tab-classic-menu-2-700-424.jpg', 7, '2017-05-23 10:33:32'),
(4, 'IMG_0148.JPG', 7, '2017-05-23 10:33:32'),
(5, 'IMG_0158.JPG', 7, '2017-05-23 10:33:32'),
(6, 'IMG_0161.JPG', 9, '2017-05-23 23:14:13'),
(7, '289f2bcfdb2a7920c83efd828ec01718.jpg', 11, '2017-05-29 14:41:24'),
(8, 'images.jpg', 11, '2017-05-29 14:41:24'),
(9, '289f2bcfdb2a7920c83efd828ec017181.jpg', 14, '2017-05-29 15:34:17'),
(10, 'images1.jpg', 14, '2017-05-29 15:34:17'),
(11, 'kemalangan.jpg', 15, '2017-06-06 07:52:21'),
(12, 'lakaran-perlanggaran.jpg', 15, '2017-06-06 07:52:21'),
(13, '1.jpg', 16, '2017-06-14 07:22:16'),
(14, '4.jpg', 16, '2017-06-14 07:22:16'),
(15, '6.jpg', 16, '2017-06-14 07:22:17');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_model`
--

CREATE TABLE IF NOT EXISTS `tbl_model` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_model`
--

INSERT INTO `tbl_model` (`ID`, `Name`) VALUES
(1, 'Accent'),
(2, 'Atos'),
(3, 'Avante'),
(4, 'Azera'),
(5, 'Coupe'),
(6, 'Elantra'),
(7, 'Getz'),
(8, 'Grandeur XG250'),
(9, 'Grand Starex'),
(10, 'i10'),
(11, 'i10 Kappa'),
(12, 'i30'),
(13, 'i40'),
(14, 'i40 Sedan'),
(15, 'i40 Tourer'),
(16, 'IONIQ'),
(17, 'Matrix'),
(18, 'Md Elantra'),
(19, 'Santa FE'),
(20, 'Sonata'),
(21, 'Starex'),
(22, 'Terracan'),
(23, 'Trajet'),
(24, 'Tucson'),
(25, 'Veloster');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_recentlyviewed`
--

CREATE TABLE IF NOT EXISTS `tbl_recentlyviewed` (
  `ID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `ListingID` int(11) NOT NULL,
  `IPAddress` varchar(50) NOT NULL,
  `ViewedOn` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=120 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_recentlyviewed`
--

INSERT INTO `tbl_recentlyviewed` (`ID`, `UserID`, `ListingID`, `IPAddress`, `ViewedOn`) VALUES
(1, 0, 7, '::1', '2017-06-11 15:26:41'),
(2, 1, 15, '::1', '2017-06-11 15:26:59'),
(3, 1, 15, '::1', '2017-06-11 15:31:54'),
(4, 1, 11, '::1', '2017-06-11 15:32:04'),
(5, 1, 15, '::1', '2017-06-11 15:33:03'),
(6, 1, 9, '::1', '2017-06-11 15:37:22'),
(7, 1, 7, '::1', '2017-06-11 15:47:39'),
(8, 0, 7, '::1', '2017-06-11 16:11:00'),
(9, 0, 7, '::1', '2017-06-11 16:15:55'),
(10, 0, 7, '::1', '2017-06-11 16:16:33'),
(11, 0, 7, '::1', '2017-06-11 16:18:48'),
(12, 0, 7, '::1', '2017-06-11 16:19:02'),
(13, 0, 7, '::1', '2017-06-11 16:21:42'),
(14, 0, 7, '::1', '2017-06-11 16:22:32'),
(15, 0, 7, '::1', '2017-06-11 16:22:54'),
(16, 0, 7, '::1', '2017-06-11 16:23:13'),
(17, 0, 7, '::1', '2017-06-11 16:24:02'),
(18, 0, 7, '::1', '2017-06-11 16:24:32'),
(19, 0, 7, '::1', '2017-06-11 16:24:59'),
(20, 0, 7, '::1', '2017-06-11 16:37:24'),
(21, 0, 7, '::1', '2017-06-11 16:40:35'),
(22, 0, 7, '::1', '2017-06-11 16:41:08'),
(23, 40, 9, '::1', '2017-06-11 16:44:58'),
(24, 40, 9, '::1', '2017-06-11 16:45:58'),
(25, 40, 9, '::1', '2017-06-11 16:48:13'),
(26, 40, 9, '::1', '2017-06-11 16:50:13'),
(27, 40, 9, '::1', '2017-06-11 16:53:10'),
(28, 40, 9, '::1', '2017-06-11 16:54:11'),
(29, 40, 9, '::1', '2017-06-11 16:55:06'),
(30, 40, 7, '::1', '2017-06-11 16:56:01'),
(31, 40, 9, '::1', '2017-06-11 16:57:01'),
(32, 40, 9, '::1', '2017-06-11 17:00:00'),
(33, 40, 9, '::1', '2017-06-11 17:00:07'),
(34, 1, 7, '::1', '2017-06-13 14:33:42'),
(35, 1, 7, '::1', '2017-06-13 14:36:56'),
(36, 1, 11, '::1', '2017-06-13 14:37:11'),
(37, 1, 11, '::1', '2017-06-13 14:37:48'),
(38, 1, 11, '::1', '2017-06-13 14:38:25'),
(39, 0, 7, '::1', '2017-06-14 04:31:28'),
(40, 0, 7, '::1', '2017-06-14 04:54:45'),
(41, 0, 8, '::1', '2017-06-14 05:04:14'),
(42, 0, 10, '::1', '2017-06-14 05:34:35'),
(43, 0, 10, '::1', '2017-06-14 05:37:56'),
(44, 0, 14, '::1', '2017-06-14 05:38:27'),
(45, 0, 7, '::1', '2017-06-14 05:40:03'),
(46, 1, 16, '::1', '2017-06-14 07:22:17'),
(47, 1, 16, '::1', '2017-06-14 07:31:22'),
(48, 1, 16, '::1', '2017-06-14 07:31:46'),
(49, 1, 16, '::1', '2017-06-14 07:31:58'),
(50, 1, 16, '::1', '2017-06-14 07:32:17'),
(51, 1, 16, '::1', '2017-06-14 07:33:00'),
(52, 1, 16, '::1', '2017-06-14 07:34:28'),
(53, 1, 16, '::1', '2017-06-14 07:35:52'),
(54, 1, 16, '::1', '2017-06-14 07:36:11'),
(55, 1, 16, '::1', '2017-06-14 07:36:30'),
(56, 1, 16, '::1', '2017-06-14 07:37:13'),
(57, 1, 16, '::1', '2017-06-14 07:37:42'),
(58, 1, 16, '::1', '2017-06-14 07:38:29'),
(59, 1, 16, '::1', '2017-06-14 07:38:56'),
(60, 1, 16, '::1', '2017-06-14 07:39:49'),
(61, 1, 16, '::1', '2017-06-14 07:40:40'),
(62, 1, 16, '::1', '2017-06-14 07:40:48'),
(63, 40, 16, '::1', '2017-06-14 07:41:47'),
(64, 40, 16, '::1', '2017-06-14 07:46:14'),
(65, 40, 16, '::1', '2017-06-14 07:49:38'),
(66, 40, 16, '::1', '2017-06-14 07:49:54'),
(67, 40, 16, '::1', '2017-06-14 07:51:17'),
(68, 40, 16, '::1', '2017-06-14 07:51:54'),
(69, 40, 16, '::1', '2017-06-14 07:52:11'),
(70, 40, 16, '::1', '2017-06-14 07:53:11'),
(71, 40, 16, '::1', '2017-06-14 07:54:10'),
(72, 40, 16, '::1', '2017-06-14 07:55:46'),
(73, 40, 16, '::1', '2017-06-14 07:56:07'),
(74, 40, 16, '::1', '2017-06-14 07:57:06'),
(75, 40, 16, '::1', '2017-06-14 07:57:51'),
(76, 40, 16, '::1', '2017-06-14 08:01:39'),
(77, 40, 16, '::1', '2017-06-14 08:02:55'),
(78, 40, 16, '::1', '2017-06-14 08:03:01'),
(79, 40, 16, '::1', '2017-06-14 08:03:29'),
(80, 40, 16, '::1', '2017-06-14 08:05:56'),
(81, 40, 16, '::1', '2017-06-14 08:07:26'),
(82, 40, 16, '::1', '2017-06-14 08:07:52'),
(83, 40, 16, '::1', '2017-06-14 08:08:21'),
(84, 40, 16, '::1', '2017-06-14 08:12:12'),
(85, 40, 16, '::1', '2017-06-14 08:12:58'),
(86, 40, 16, '::1', '2017-06-14 08:13:19'),
(87, 40, 16, '::1', '2017-06-14 08:14:46'),
(88, 40, 16, '::1', '2017-06-14 08:15:49'),
(89, 40, 16, '::1', '2017-06-14 08:16:04'),
(90, 40, 16, '::1', '2017-06-14 08:16:53'),
(91, 40, 16, '::1', '2017-06-14 08:18:01'),
(92, 40, 16, '::1', '2017-06-14 08:20:34'),
(93, 40, 16, '::1', '2017-06-14 08:21:21'),
(94, 40, 16, '::1', '2017-06-14 08:21:52'),
(95, 40, 16, '::1', '2017-06-14 08:22:09'),
(96, 40, 16, '::1', '2017-06-14 08:22:25'),
(97, 40, 16, '::1', '2017-06-14 08:23:14'),
(98, 40, 16, '::1', '2017-06-14 08:23:32'),
(99, 40, 16, '::1', '2017-06-14 08:24:02'),
(100, 40, 16, '::1', '2017-06-14 08:24:19'),
(101, 40, 16, '::1', '2017-06-14 08:24:36'),
(102, 40, 16, '::1', '2017-06-14 08:25:11'),
(103, 40, 16, '::1', '2017-06-14 08:26:02'),
(104, 40, 16, '::1', '2017-06-14 08:26:25'),
(105, 40, 16, '::1', '2017-06-14 08:27:01'),
(106, 40, 16, '::1', '2017-06-14 08:27:51'),
(107, 40, 16, '::1', '2017-06-14 08:28:36'),
(108, 40, 16, '::1', '2017-06-14 08:30:20'),
(109, 40, 8, '::1', '2017-06-14 08:30:35'),
(110, 1, 8, '::1', '2017-06-14 08:30:52'),
(111, 1, 8, '::1', '2017-06-14 08:31:34'),
(112, 1, 8, '::1', '2017-06-14 08:32:06'),
(113, 1, 8, '::1', '2017-06-14 08:32:54'),
(114, 1, 8, '::1', '2017-06-14 08:33:17'),
(115, 1, 8, '::1', '2017-06-14 08:33:25'),
(116, 1, 8, '::1', '2017-06-14 08:56:10'),
(117, 1, 8, '::1', '2017-06-14 08:58:01'),
(118, 1, 8, '::1', '2017-06-14 08:59:32'),
(119, 1, 9, '::1', '2017-06-14 09:00:09');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_specification`
--

CREATE TABLE IF NOT EXISTS `tbl_specification` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_specification`
--

INSERT INTO `tbl_specification` (`ID`, `Name`) VALUES
(1, 'Gamma 1.6L EX'),
(2, 'Gamma 1.6L EX Sport'),
(3, 'Gamma 1.6L EX Plus'),
(4, 'Gamma 1.6L Premium'),
(5, 'Nu 1.8L Premium');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_state`
--

CREATE TABLE IF NOT EXISTS `tbl_state` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_state`
--

INSERT INTO `tbl_state` (`ID`, `Name`) VALUES
(1, 'Kuala Lumpur'),
(2, 'Selangor'),
(3, 'Johor'),
(4, 'Penang'),
(5, 'Perak'),
(6, 'Kedah'),
(7, 'Negeri Sembilan'),
(8, 'Pahang'),
(9, 'Sabah'),
(10, 'Sarawak'),
(11, 'Terengganu'),
(12, 'Melaka'),
(13, 'Kelantan'),
(14, 'Perlis'),
(15, 'Putrajaya'),
(16, 'Labuan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `ID` int(11) NOT NULL,
  `Type` int(11) DEFAULT NULL,
  `Group` int(11) DEFAULT NULL,
  `Username` varchar(255) DEFAULT NULL,
  `Password` varchar(5000) DEFAULT NULL,
  `Salutation` varchar(50) DEFAULT NULL,
  `FirstName` varchar(255) DEFAULT NULL,
  `LastName` varchar(255) DEFAULT NULL,
  `MobileNo` varchar(50) DEFAULT NULL,
  `EmailAddress` varchar(255) DEFAULT NULL,
  `Status` int(11) DEFAULT NULL,
  `AddedOn` datetime DEFAULT NULL,
  `AddedBy` int(11) DEFAULT NULL,
  `ModifiedOn` datetime DEFAULT NULL,
  `ModifiedBy` int(11) DEFAULT NULL,
  `FBUserID` varchar(255) DEFAULT NULL,
  `LastLogin` datetime DEFAULT NULL,
  `IdentityCardNo` varchar(255) NOT NULL,
  `Address` varchar(1000) NOT NULL,
  `ProfilePic` varchar(255) NOT NULL,
  `State` int(11) NOT NULL,
  `MembershipType` varchar(255) NOT NULL,
  `Latitude` varchar(255) NOT NULL,
  `Longitude` varchar(255) NOT NULL,
  `MobileVerification` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`ID`, `Type`, `Group`, `Username`, `Password`, `Salutation`, `FirstName`, `LastName`, `MobileNo`, `EmailAddress`, `Status`, `AddedOn`, `AddedBy`, `ModifiedOn`, `ModifiedBy`, `FBUserID`, `LastLogin`, `IdentityCardNo`, `Address`, `ProfilePic`, `State`, `MembershipType`, `Latitude`, `Longitude`, `MobileVerification`) VALUES
(1, 1, 1, 'su', '$2a$08$nFHGkaIbEleYhJifzhhEE.lG8.pX3KmWy3ESxo95s6wb9fR.f0QqO', NULL, 'Administrator', 'Administrator', '+60127872389', 'suhucp@ruhaizat.my', 2, '2017-03-01 00:00:00', 2017, NULL, NULL, NULL, '2017-06-14 08:30:48', '880805-01-5137', 'Malaysian Institute of Road Safety Research (MIROS) Jalan TKS 1 Taman Kajang Sentral Kajang Selangor Malaysia', 'ejen.jpg', 2, 'Premium', '2.9773322', '101.79753519999997', 1),
(10, NULL, 2, 'mruhaizat88@gmail.com', '$2a$08$xlebgSdW7cZeqOHrbe12JuEn6TcCL8JXfeiKhQ6x.iivw6O5j5jZ6', NULL, 'Muhammad Ruhaizat', 'Abd Ghani', '', 'me@ruhaizat.my', NULL, '2017-05-01 00:00:00', NULL, NULL, NULL, NULL, '2017-05-21 11:35:11', '', 'Pangsapuri Angkasa Indah Kajang Jalan Angkasa Indah 2a Taman Angkasa Indah Kajang Selangor Malaysia', 'me_bio.jpg', 2, 'Basic', '3.0001045', '101.79944150000006', 0),
(11, 2, 2, NULL, NULL, NULL, 'Muhammad Ruhaizat', 'Abd Ghani', '+60127872389', 'mruhaizat88@gmail.com', NULL, '2017-05-01 00:00:00', NULL, NULL, NULL, NULL, '2017-06-11 16:10:06', '888888-88-8888', 'Ibrahim Maju Restaurant Jalan Saga Emas 8A Taman Saga Emas Kajang Selangor Malaysia', 'https://scontent.xx.fbcdn.net/v/t1.0-1/12669527_10208832951326298_8714415375291058518_n.jpg?oh=bde87423175c1cf9888abd03ebbcc101&oe=59DCF68C', 2, 'Basic', '2.9977952', '101.79856489999997', 0),
(27, 1, 2, NULL, '$2a$08$WJKQsICtKQVAaavZ63xy5.4Qy79bo9J0S2a4r4d3AEN.mx2KmtgJy', NULL, 'M. Izat', 'A. Ghani', '', 'myfreelanceprogrammer@gmail.com', 2, '2017-05-24 09:21:50', NULL, NULL, NULL, NULL, '2017-05-24 09:22:14', '1234', 'Malaysian Institute of Road Safety Research (MIROS) Jalan TKS 1 Taman Kajang Sentral Kajang Selangor Malaysia', 'Safer2Schools_Logo2.png', 2, 'Basic', '2.9773322', '101.79753519999997', 0),
(28, 1, 2, NULL, '$2a$08$X3KQrBvW/1UWzRoUhuy7gOUnSlu8uUyoItxe5FsYlh5r29SwalSgC', NULL, 'Kenny', 'Lim', '0163046229', 'kenny@kni.com.my', 2, '2017-05-28 01:04:38', NULL, NULL, NULL, NULL, '2017-05-28 16:21:33', '88', 'Aman Heights Condominium Taman Bukit Serdang Seri Kembangan Selangor Malaysia', 'person-021.jpg', 1, 'Basic', '3.0266654', '101.69214009999996', 0),
(29, 2, 2, NULL, NULL, NULL, 'Muhammad Ruhaizat', 'Abd Ghani', NULL, 'undefined', NULL, '2017-05-29 08:09:52', NULL, NULL, NULL, NULL, '2017-05-29 12:27:42', '', '', 'https://scontent.xx.fbcdn.net/v/t1.0-1/12669527_10208832951326298_8714415375291058518_n.jpg?oh=c26fc01bdb3654edc38102f351b02c59&oe=59B5698C', 0, 'Basic', '', '', 0),
(40, 1, 2, NULL, '$2a$08$.YRr9eNbCXDmdriYga.rR.1JTwmkvrqCSn4XFoS8dMOOTGdyyGaZi', NULL, 'User 1', 'HUCP', '60127872389', 'user1hucp@ruhaizat.my', 2, '2017-05-29 15:15:47', NULL, NULL, NULL, NULL, '2017-06-14 07:41:44', '000000-00-0000', 'Tanjung Malim Perak Malaysia', 'NgopiUni.png', 5, 'Basic', '3.705841499999999', '101.50491629999999', 1),
(41, 1, 2, NULL, '$2a$08$IZI/wPfS9.d4w7bozQ2HnepAGuDvDX1Uu6R2szLnLTM24oVLPgU5K', NULL, NULL, NULL, NULL, 'user2hucp@ruhaizat.my', 1, '2017-06-05 15:10:32', NULL, NULL, NULL, NULL, NULL, '', '', 'default.jpg', 0, 'Basic', '', '', 0),
(42, 2, 2, NULL, NULL, NULL, 'Lim', 'Kenny', NULL, 'limperz@hotmail.com', NULL, '2017-06-09 16:11:09', NULL, NULL, NULL, NULL, '2017-06-09 16:11:23', '', '', 'https://scontent.xx.fbcdn.net/v/t1.0-1/c50.50.621.621/p720x720/942106_10152436871396686_117385609_n.jpg?oh=cc0e6a0e3f76a0e0ac9e77f64c50d864&oe=59A3B3BA', 0, 'Basic', '', '', 0),
(43, 1, 2, NULL, '$2a$08$R/R5st8jqH0RXHd2YpJOC.yMP5EPBbXxmMgCprvGIqA1dC/MTCJwC', NULL, NULL, NULL, NULL, 'user3hucp@ruhaizat.my', 1, '2017-06-13 15:18:34', NULL, NULL, NULL, NULL, NULL, '', '', 'default.jpg', 0, 'Basic', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_verifyemail`
--

CREATE TABLE IF NOT EXISTS `tbl_verifyemail` (
  `ID` int(11) NOT NULL,
  `EmailAddress` varchar(255) NOT NULL,
  `UserID` int(11) NOT NULL,
  `Token` varchar(100) NOT NULL,
  `IsVerify` int(11) NOT NULL,
  `ExpiryDate` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_verifyemail`
--

INSERT INTO `tbl_verifyemail` (`ID`, `EmailAddress`, `UserID`, `Token`, `IsVerify`, `ExpiryDate`) VALUES
(10, 'myfreelanceprogrammer@gmail.com', 24, 'FD27YNxWHU1u0KfgzCGpOeQ3VEsaXMIb9dnlqLRkcT45Amw8vr', 0, '2017-05-27 00:00:00'),
(11, 'myfreelanceprogrammer@gmail.com', 25, 'FVyQcAl3NCEznYMdXeKPrjBkv4hx0g1JD5tfHoWGI9OpiRwSqb', 0, '2017-05-27 00:00:00'),
(12, 'myfreelanceprogrammer@gmail.com', 26, 'qHlVez4ASm1GnZcPYLCWQa0p3KNf5UsRrI6JhokOtTMvF2idDx', 0, '2017-05-27 00:00:00'),
(13, 'myfreelanceprogrammer@gmail.com', 27, 'aBhmiqGueP3Z0R5TSEofxdNJVv4rYkUlg61wOLyQAIsn9cW7Cz', 1, '2017-05-27 00:00:00'),
(14, 'kenny@kni.com.my', 28, 'Jrqgf8v1C0blwINnskHGmFAcexDBET3oOM964hyQSWUP7KjdVa', 1, '2017-05-31 00:00:00'),
(38, 'user1hucp@ruhaizat.my', 40, 'TnCzxP1iH93EZKDg5wQfMUJoyNSOWGtus7BY2qIvp6kblRae0r', 1, '2017-06-01 00:00:00'),
(39, 'user2hucp@ruhaizat.my', 41, '3VvAtq5KLE2FHNXkO0RrWaQCPfsznTM4Gh7YmwxIoJBie1juUl', 0, '2017-06-07 15:10:33'),
(40, 'user3hucp@ruhaizat.my', 43, '8mfeaLhJjpI9ukHWFgdTcCsyYlOXVNqQA4U2Z0PnB37oMbEvwK', 0, '2017-06-16 15:18:34');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_verifymobile`
--

CREATE TABLE IF NOT EXISTS `tbl_verifymobile` (
  `ID` int(11) NOT NULL,
  `MobileNo` varchar(255) NOT NULL,
  `UserID` int(11) NOT NULL,
  `Token` varchar(10) NOT NULL,
  `IsVerify` int(11) NOT NULL,
  `ExpiryDate` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_verifymobile`
--

INSERT INTO `tbl_verifymobile` (`ID`, `MobileNo`, `UserID`, `Token`, `IsVerify`, `ExpiryDate`) VALUES
(1, '0123456789', 40, '909283', 0, '2017-06-03 07:24:06'),
(2, '0123456789', 40, '819350', 0, '2017-06-03 07:26:06'),
(3, '0123456789', 40, '534221', 0, '2017-06-03 07:27:16'),
(4, '0123456789', 40, '507989', 0, '2017-06-03 07:29:51'),
(5, '0123456789', 40, '926137', 0, '2017-06-03 07:30:37'),
(6, '0123456789', 40, '207069', 0, '2017-06-03 07:31:05'),
(7, '0123456789', 40, '892741', 0, '2017-06-03 07:31:47'),
(8, '0123456789', 40, '319338', 0, '2017-06-03 07:34:49'),
(9, '0123456789', 40, '667876', 0, '2017-06-03 07:36:06'),
(10, '0123456789', 40, '913804', 0, '2017-06-03 07:37:35'),
(11, '0123456789', 40, '276306', 0, '2017-06-03 07:38:00'),
(12, '0123456789', 40, '783700', 0, '2017-06-03 07:39:19'),
(13, '0123456789', 40, '687117', 1, '2017-06-03 07:47:50'),
(14, '0123456789', 40, '119277', 0, '2017-06-03 08:02:26'),
(15, '0123456789', 40, '796454', 0, '2017-06-03 08:02:48'),
(16, '0123456789', 40, '964598', 0, '2017-06-03 08:05:56'),
(17, '0123456789', 40, '595874', 0, '2017-06-03 08:09:43'),
(18, '0123456789', 40, '941466', 0, '2017-06-03 08:10:38'),
(19, '0123456789', 40, '954626', 0, '2017-06-03 08:13:08'),
(20, '0123456789', 40, '783472', 0, '2017-06-03 08:15:16'),
(21, '0123456789', 40, '508834', 0, '2017-06-03 08:22:41'),
(22, '0123456789', 40, '177669', 0, '2017-06-03 08:23:07'),
(23, '0123456789', 40, '123574', 0, '2017-06-03 08:24:04'),
(24, '0123456789', 40, '938864', 0, '2017-06-03 08:24:55'),
(25, '0123456789', 40, '187026', 0, '2017-06-03 08:25:42'),
(26, '0123456789', 40, '492073', 0, '2017-06-03 08:26:41'),
(27, '0123456789', 40, '909478', 0, '2017-06-03 08:27:06'),
(28, '0123456789', 40, '388415', 0, '2017-06-03 08:28:12'),
(29, '+60127872389', 40, '162961', 0, '2017-06-03 09:10:48'),
(30, '60127872389', 40, '679934', 1, '2017-06-03 09:11:11'),
(31, '60127872389', 40, '200408', 0, '2017-06-03 09:12:43'),
(32, '60127872389', 40, '182120', 0, '2017-06-03 09:14:58'),
(33, '60127872389', 40, '418830', 0, '2017-06-03 09:15:54'),
(34, '60127872389', 40, '704262', 0, '2017-06-03 09:16:12'),
(35, '60127872389', 40, '525527', 0, '2017-06-03 09:19:18'),
(36, '60127872389', 40, '396087', 0, '2017-06-03 09:19:22'),
(37, '60127872389', 40, '922788', 0, '2017-06-03 09:19:24'),
(38, '60127872389', 40, '560950', 0, '2017-06-03 09:19:41'),
(39, '60127872389', 40, '207971', 0, '2017-06-03 09:19:42'),
(40, '60127872389', 40, '751778', 0, '2017-06-03 09:21:05'),
(41, '60127872389', 40, '304895', 0, '2017-06-03 09:21:07'),
(42, '60127872389', 40, '968687', 0, '2017-06-03 09:21:14'),
(43, '60127872389', 40, '189819', 0, '2017-06-03 09:21:54'),
(44, '60127872389', 40, '488719', 0, '2017-06-03 09:21:55'),
(45, '60127872389', 40, '951230', 0, '2017-06-03 09:22:03'),
(46, '60127872389', 40, '743827', 0, '2017-06-03 09:37:35'),
(47, '60127872389', 40, '218848', 0, '2017-06-03 09:37:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_listing`
--
ALTER TABLE `tbl_listing`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_listingimage`
--
ALTER TABLE `tbl_listingimage`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_model`
--
ALTER TABLE `tbl_model`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_recentlyviewed`
--
ALTER TABLE `tbl_recentlyviewed`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_specification`
--
ALTER TABLE `tbl_specification`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_state`
--
ALTER TABLE `tbl_state`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_verifyemail`
--
ALTER TABLE `tbl_verifyemail`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_verifymobile`
--
ALTER TABLE `tbl_verifymobile`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_listing`
--
ALTER TABLE `tbl_listing`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tbl_listingimage`
--
ALTER TABLE `tbl_listingimage`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tbl_model`
--
ALTER TABLE `tbl_model`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `tbl_recentlyviewed`
--
ALTER TABLE `tbl_recentlyviewed`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=120;
--
-- AUTO_INCREMENT for table `tbl_specification`
--
ALTER TABLE `tbl_specification`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_state`
--
ALTER TABLE `tbl_state`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `tbl_verifyemail`
--
ALTER TABLE `tbl_verifyemail`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `tbl_verifymobile`
--
ALTER TABLE `tbl_verifymobile`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=48;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
